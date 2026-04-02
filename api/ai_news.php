<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$limit = isset($_GET['limit']) ? min((int)$_GET['limit'], 50) : 30;

$cacheFile = __DIR__ . '/ai_news_cache.json';
$cacheTTL = 600; // 10 minutes

// Serve from cache if fresh
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTTL) {
    $cached = json_decode(file_get_contents($cacheFile), true);
    if ($cached && !empty($cached['news'])) {
        $cached['news'] = array_slice($cached['news'], 0, $limit);
        $cached['cached'] = true;
        echo json_encode($cached);
        exit;
    }
}

// RSS feeds to fetch AI news from
$feeds = [
    ['url' => 'https://news.google.com/rss/search?q=artificial+intelligence+OR+AI+OR+machine+learning&hl=en-IN&gl=IN&ceid=IN:en', 'source' => 'Google News'],
    ['url' => 'https://feeds.feedburner.com/aimaborede', 'source' => 'AI Magazine'],
    ['url' => 'https://www.artificialintelligence-news.com/feed/', 'source' => 'AI News'],
    ['url' => 'https://news.google.com/rss/search?q=ChatGPT+OR+OpenAI+OR+Claude+OR+Gemini+AI&hl=en&gl=US&ceid=US:en', 'source' => 'Google News'],
];

// AI categories based on keywords
function categorize($title, $desc) {
    $text = strtolower($title . ' ' . $desc);

    if (preg_match('/chatgpt|gpt|llm|claude|gemini|chatbot|language model|copilot|bard|mistral|llama|deepseek/i', $text)) return 'Chatbots & LLMs';
    if (preg_match('/robot|humanoid|boston dynamics|drone|autonomous|self.driving/i', $text)) return 'Robotics';
    if (preg_match('/startup|funding|valuation|invest|billion|acquisition|ipo|business|revenue|market/i', $text)) return 'Business & Startups';
    if (preg_match('/research|paper|study|arxiv|breakthrough|algorithm|benchmark|model train/i', $text)) return 'Research';
    if (preg_match('/regulation|policy|govern|law|ban|ethics|safety|bias|congress|eu ai act/i', $text)) return 'Policy & Regulation';
    if (preg_match('/art|music|video|image|creative|generate|dall.e|midjourney|stable diffusion|sora/i', $text)) return 'AI Creative';

    return 'General AI';
}

$allNews = [];
$seen = [];

foreach ($feeds as $feed) {
    $ctx = stream_context_create([
        'http' => [
            'timeout' => 8,
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
        ],
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
        ]
    ]);

    $xml = @file_get_contents($feed['url'], false, $ctx);
    if (!$xml) continue;

    libxml_use_internal_errors(true);
    $rss = @simplexml_load_string($xml);
    if (!$rss) continue;

    $items = [];
    if (isset($rss->channel->item)) {
        $items = $rss->channel->item;
    } elseif (isset($rss->entry)) {
        $items = $rss->entry;
    }

    foreach ($items as $item) {
        $title = trim((string)($item->title ?? ''));
        if (!$title || isset($seen[md5($title)])) continue;
        $seen[md5($title)] = true;

        $link = (string)($item->link ?? '');
        if (!$link && isset($item->link['href'])) {
            $link = (string)$item->link['href'];
        }

        $desc = (string)($item->description ?? '');
        $desc = strip_tags($desc);
        $desc = mb_substr($desc, 0, 200);

        $pubDate = (string)($item->pubDate ?? $item->published ?? '');
        $published = $pubDate ? date('c', strtotime($pubDate)) : date('c');

        // Extract real source from Google News title " - Source"
        $source = $feed['source'];
        if (strpos($feed['url'], 'news.google.com') !== false && preg_match('/ - ([^-]+)$/', $title, $m)) {
            $source = trim($m[1]);
            $title = trim(preg_replace('/ - [^-]+$/', '', $title));
        }

        $allNews[] = [
            'title'        => $title,
            'description'  => $desc,
            'link'         => $link,
            'source'       => $source,
            'published_at' => $published,
            'category'     => categorize($title, $desc),
        ];
    }
}

// Sort by published date, newest first
usort($allNews, function($a, $b) {
    return strtotime($b['published_at']) - strtotime($a['published_at']);
});

$result = ['success' => true, 'news' => $allNews, 'total' => count($allNews), 'cached' => false];

// Save cache
@file_put_contents($cacheFile, json_encode($result));

$result['news'] = array_slice($allNews, 0, $limit);
echo json_encode($result);
