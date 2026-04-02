<!-- AI World Section -->
<div id="ai-world-section" class="content-section" style="display: none;">

<style>
/* ===== AI WORLD SECTION STYLES ===== */

/* Hero Banner */
.aiw-hero {
    background: linear-gradient(135deg, #4361ee 0%, #0f9b8e 50%, #06d6a0 100%);
    border-radius: 20px;
    padding: 40px;
    color: #fff;
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
}
.aiw-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(255,255,255,0.12) 0%, transparent 70%);
    border-radius: 50%;
}
.aiw-hero::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: 10%;
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
    border-radius: 50%;
}
.aiw-hero-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 24px;
}
.aiw-hero-left {
    display: flex;
    align-items: center;
    gap: 24px;
}
.aiw-hero-icon {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    border: 3px solid rgba(255,255,255,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 38px;
    flex-shrink: 0;
}
.aiw-hero-info h2 {
    font-size: 26px;
    font-weight: 700;
    margin: 0 0 4px;
}
.aiw-hero-info p {
    margin: 0;
    opacity: 0.85;
    font-size: 15px;
}
.aiw-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(6px);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    margin-top: 8px;
}
.aiw-hero-right {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0;
}
.aiw-refresh-btn {
    padding: 10px 22px;
    border-radius: 14px;
    border: 2px solid rgba(255,255,255,0.4);
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(6px);
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.25s ease;
}
.aiw-refresh-btn:hover {
    background: rgba(255,255,255,0.25);
    border-color: rgba(255,255,255,0.6);
}
.aiw-refresh-btn.spinning i {
    animation: aiw-spin 0.8s linear infinite;
}
@keyframes aiw-spin {
    to { transform: rotate(360deg); }
}

/* Stats Row */
.aiw-stats-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}
.aiw-stat-card {
    background: var(--card-bg, #fff);
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: flex;
    align-items: center;
    gap: 16px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.aiw-stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}
.aiw-stat-icon {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #fff;
    flex-shrink: 0;
}
.aiw-stat-info h4 {
    font-size: 13px;
    color: var(--text-light, #8d99ae);
    margin: 0 0 4px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.aiw-stat-info .aiw-stat-val {
    font-size: 26px;
    font-weight: 700;
    color: var(--text-dark, #2b2d42);
    line-height: 1;
}

/* Filter / Search Bar */
.aiw-filter-bar {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 24px;
}
.aiw-filter-btn {
    padding: 7px 18px;
    border-radius: 20px;
    border: 1.5px solid #e0e0e0;
    background: #fff;
    color: #555;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s;
    font-family: 'Poppins', sans-serif;
}
.aiw-filter-btn:hover {
    border-color: #4361ee;
    color: #4361ee;
}
.aiw-filter-btn.active {
    background: #4361ee;
    color: #fff;
    border-color: #4361ee;
}
.aiw-search-box {
    margin-left: auto;
    position: relative;
}
.aiw-search-box input {
    padding: 8px 16px 8px 36px;
    border-radius: 20px;
    border: 1.5px solid #e0e0e0;
    font-size: 13px;
    width: 230px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    transition: border-color 0.2s;
}
.aiw-search-box input:focus {
    border-color: #4361ee;
}
.aiw-search-box i {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 13px;
}

/* Section Cards (glory-grid style) */
.aiw-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(420px, 1fr));
    gap: 25px;
    margin-bottom: 30px;
}
.aiw-card {
    background: var(--card-bg, #fff);
    border-radius: 16px;
    padding: 28px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
}
.aiw-card-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 24px;
}
.aiw-card-header i {
    font-size: 20px;
    color: var(--primary-blue, #4361ee);
}
.aiw-card-header h3 {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-dark, #2b2d42);
    margin: 0;
}
.aiw-card-header .aiw-card-action {
    margin-left: auto;
    font-size: 13px;
    color: var(--primary-blue, #4361ee);
    cursor: pointer;
    font-weight: 500;
}

/* Top Stories (Leaderboard style) */
.aiw-featured-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.aiw-featured-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 16px;
    border-radius: 12px;
    background: #f8f9fa;
    transition: background 0.2s ease, transform 0.2s ease;
    cursor: pointer;
    text-decoration: none;
    color: inherit;
}
.aiw-featured-item:hover {
    background: #eef1ff;
    transform: translateY(-2px);
}
.aiw-featured-item.aiw-top-story {
    background: linear-gradient(135deg, rgba(67,97,238,0.08), rgba(114,9,183,0.06));
    border: 1px solid rgba(67,97,238,0.2);
}
.aiw-featured-rank {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    flex-shrink: 0;
}
.aiw-featured-rank.rank-1 {
    background: linear-gradient(135deg, #ef476f, #e63946);
    color: #fff;
}
.aiw-featured-rank.rank-2 {
    background: linear-gradient(135deg, #ffd166, #f9c74f);
    color: #7c5e00;
}
.aiw-featured-rank.rank-3 {
    background: linear-gradient(135deg, #4361ee, #3a56d4);
    color: #fff;
}
.aiw-featured-rank.rank-other {
    background: #e9ecef;
    color: var(--text-light, #8d99ae);
}
.aiw-featured-info {
    flex: 1;
    min-width: 0;
}
.aiw-featured-title {
    font-size: 14px;
    font-weight: 600;
    color: var(--text-dark, #2b2d42);
    line-height: 1.4;
    margin-bottom: 6px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.aiw-featured-meta {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 12px;
    color: var(--text-light, #8d99ae);
}
.aiw-featured-meta span {
    display: flex;
    align-items: center;
    gap: 4px;
}
.aiw-featured-source {
    font-weight: 500;
    color: #4361ee;
}

/* Category Badges (like glory badges) */
.aiw-categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
    gap: 16px;
}
.aiw-cat-badge {
    text-align: center;
    padding: 20px 12px;
    border-radius: 14px;
    background: #f8f9ff;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    cursor: pointer;
}
.aiw-cat-badge:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 20px rgba(67,97,238,0.15);
}
.aiw-cat-badge.active {
    box-shadow: 0 6px 20px rgba(67,97,238,0.2);
    background: #eef2ff;
}
.aiw-cat-badge-icon {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 10px;
}
.aiw-cat-badge-name {
    font-size: 12px;
    font-weight: 600;
    color: var(--text-dark, #2b2d42);
    line-height: 1.3;
}
.aiw-cat-badge-count {
    font-size: 11px;
    color: var(--text-light, #8d99ae);
    margin-top: 4px;
}

/* News Feed (timeline style like goals) */
.aiw-news-feed {
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.aiw-news-item {
    padding: 18px;
    border-radius: 12px;
    background: #f8f9ff;
    border-left: 4px solid var(--primary-blue, #4361ee);
    transition: all 0.2s ease;
    cursor: pointer;
}
.aiw-news-item:hover {
    transform: translateX(4px);
    box-shadow: 0 4px 16px rgba(67,97,238,0.1);
}
.aiw-news-item:nth-child(2) { border-left-color: #06d6a0; }
.aiw-news-item:nth-child(3) { border-left-color: #7209b7; }
.aiw-news-item:nth-child(4) { border-left-color: #ffd166; }
.aiw-news-item:nth-child(5) { border-left-color: #ef476f; }
.aiw-news-item:nth-child(6) { border-left-color: #4cc9f0; }
.aiw-news-item-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 8px;
    gap: 10px;
}
.aiw-news-item-title {
    font-size: 14px;
    font-weight: 600;
    color: var(--text-dark, #2b2d42);
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.aiw-news-tag {
    font-size: 11px;
    font-weight: 600;
    padding: 3px 10px;
    border-radius: 8px;
    white-space: nowrap;
    flex-shrink: 0;
}
.aiw-news-item-desc {
    font-size: 13px;
    color: var(--text-light, #8d99ae);
    line-height: 1.5;
    margin-bottom: 10px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.aiw-news-item-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 12px;
    color: var(--text-light, #8d99ae);
}
.aiw-news-item-footer .aiw-read-link {
    color: #4361ee;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 4px;
    transition: gap 0.2s;
}
.aiw-news-item:hover .aiw-read-link {
    gap: 8px;
}

/* Trending Topics (like skills progress) */
.aiw-trending-list {
    display: flex;
    flex-direction: column;
    gap: 18px;
}
.aiw-trending-item {
    display: flex;
    align-items: center;
    gap: 14px;
}
.aiw-trending-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #fff;
    flex-shrink: 0;
}
.aiw-trending-details {
    flex: 1;
    min-width: 0;
}
.aiw-trending-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 6px;
}
.aiw-trending-name {
    font-size: 14px;
    font-weight: 600;
    color: var(--text-dark, #2b2d42);
}
.aiw-trending-level {
    font-size: 12px;
    font-weight: 500;
    padding: 2px 10px;
    border-radius: 10px;
}
.aiw-trending-bar {
    height: 8px;
    background: #e9ecef;
    border-radius: 4px;
    overflow: hidden;
}
.aiw-trending-fill {
    height: 100%;
    border-radius: 4px;
    transition: width 1.2s ease;
}

/* All News Cards Grid */
.aiw-news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 20px;
}
.aiw-news-card {
    background: #fff;
    border-radius: 14px;
    padding: 22px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    transition: all 0.25s;
    cursor: pointer;
    border: 1px solid #f0f0f0;
    display: flex;
    flex-direction: column;
}
.aiw-news-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 28px rgba(67,97,238,0.12);
    border-color: rgba(67,97,238,0.2);
}
.aiw-news-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 12px;
}
.aiw-category-pill {
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 600;
}
.aiw-pill-chatbots { background: #e8f5e9; color: #2e7d32; }
.aiw-pill-robotics { background: #e3f2fd; color: #1565c0; }
.aiw-pill-business { background: #fff3e0; color: #e65100; }
.aiw-pill-research { background: #f3e5f5; color: #7b1fa2; }
.aiw-pill-policy { background: #fce4ec; color: #c62828; }
.aiw-pill-creative { background: #e0f7fa; color: #00838f; }
.aiw-pill-general { background: #f5f5f5; color: #616161; }

.aiw-time {
    font-size: 12px;
    color: #999;
    display: flex;
    align-items: center;
    gap: 4px;
}
.aiw-news-card h4 {
    font-size: 15px;
    font-weight: 600;
    color: #2b2d42;
    line-height: 1.45;
    margin: 0 0 10px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.aiw-news-card-desc {
    font-size: 13px;
    color: #8d99ae;
    line-height: 1.5;
    margin-bottom: 14px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    flex: 1;
}
.aiw-news-card-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 12px;
    border-top: 1px solid #f5f5f5;
}
.aiw-source-label {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: #666;
    font-weight: 500;
}
.aiw-source-label i {
    color: #4361ee;
    font-size: 11px;
}
.aiw-read-arrow {
    font-size: 12px;
    color: #4361ee;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 4px;
    transition: gap 0.2s;
}
.aiw-news-card:hover .aiw-read-arrow {
    gap: 8px;
}

/* Loading */
.aiw-loading {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 60px 20px;
    gap: 16px;
}
.aiw-spinner {
    width: 40px;
    height: 40px;
    border: 3px solid #e8e8e8;
    border-top-color: #4361ee;
    border-radius: 50%;
    animation: aiw-spin 0.8s linear infinite;
}
.aiw-loading p {
    color: #8d99ae;
    font-size: 14px;
}

/* Error */
.aiw-error {
    text-align: center;
    padding: 40px;
    color: #8d99ae;
}
.aiw-error i {
    font-size: 40px;
    color: #ef476f;
    margin-bottom: 12px;
    display: block;
}
.aiw-error h3 {
    color: #2b2d42;
    margin-bottom: 8px;
}
.aiw-retry-btn {
    margin-top: 16px;
    padding: 10px 24px;
    background: #4361ee;
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    transition: background 0.2s;
}
.aiw-retry-btn:hover {
    background: #3a56d4;
}

/* Responsive */
@media (max-width: 900px) {
    .aiw-grid {
        grid-template-columns: 1fr;
    }
    .aiw-hero {
        padding: 28px;
    }
    .aiw-hero-content {
        flex-direction: column;
        text-align: center;
    }
    .aiw-hero-left {
        flex-direction: column;
    }
    .aiw-stats-row {
        grid-template-columns: repeat(2, 1fr);
    }
    .aiw-news-grid {
        grid-template-columns: 1fr;
    }
}
@media (max-width: 560px) {
    .aiw-stats-row {
        grid-template-columns: 1fr;
    }
    .aiw-categories-grid {
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
    }
    .aiw-filter-bar {
        flex-direction: column;
        align-items: stretch;
    }
    .aiw-search-box {
        margin-left: 0;
    }
    .aiw-search-box input {
        width: 100%;
    }
}
</style>

<!-- ========== HERO BANNER ========== -->
<div class="aiw-hero">
    <div class="aiw-hero-content">
        <div class="aiw-hero-left">
            <div class="aiw-hero-icon">
                <i class="fas fa-robot"></i>
            </div>
            <div class="aiw-hero-info">
                <h2>AI World</h2>
                <p>Stay updated with the latest from Artificial Intelligence</p>
                <div class="aiw-hero-badge">
                    <i class="fas fa-bolt"></i>
                    Live Feed &mdash; Powered by Google News
                </div>
            </div>
        </div>
        <div class="aiw-hero-right">
            <button class="aiw-refresh-btn" id="aiwRefreshBtn" onclick="aiwFetchNews(false)">
                <i class="fas fa-sync-alt"></i> Refresh
            </button>
        </div>
    </div>
</div>

<!-- ========== QUICK STATS ========== -->
<div class="aiw-stats-row">
    <div class="aiw-stat-card">
        <div class="aiw-stat-icon" style="background: linear-gradient(135deg, #4361ee, #3a56d4);">
            <i class="fas fa-newspaper"></i>
        </div>
        <div class="aiw-stat-info">
            <h4>Total News</h4>
            <div class="aiw-stat-val" id="aiwStatTotal">--</div>
        </div>
    </div>
    <div class="aiw-stat-card">
        <div class="aiw-stat-icon" style="background: linear-gradient(135deg, #ef476f, #e63946);">
            <i class="fas fa-fire-alt"></i>
        </div>
        <div class="aiw-stat-info">
            <h4>Trending</h4>
            <div class="aiw-stat-val" id="aiwStatTrending">--</div>
        </div>
    </div>
    <div class="aiw-stat-card">
        <div class="aiw-stat-icon" style="background: linear-gradient(135deg, #06d6a0, #05c590);">
            <i class="fas fa-th-large"></i>
        </div>
        <div class="aiw-stat-info">
            <h4>Categories</h4>
            <div class="aiw-stat-val" id="aiwStatCategories">--</div>
        </div>
    </div>
    <div class="aiw-stat-card">
        <div class="aiw-stat-icon" style="background: linear-gradient(135deg, #ffd166, #f9c74f);">
            <i class="fas fa-rss"></i>
        </div>
        <div class="aiw-stat-info">
            <h4>Sources</h4>
            <div class="aiw-stat-val" id="aiwStatSources">--</div>
        </div>
    </div>
</div>

<!-- ========== FILTER BAR ========== -->
<div class="aiw-filter-bar">
    <button class="aiw-filter-btn active" data-aiw-filter="all">All</button>
    <button class="aiw-filter-btn" data-aiw-filter="Chatbots & LLMs">Chatbots & LLMs</button>
    <button class="aiw-filter-btn" data-aiw-filter="Robotics">Robotics</button>
    <button class="aiw-filter-btn" data-aiw-filter="Business & Startups">Business</button>
    <button class="aiw-filter-btn" data-aiw-filter="Research">Research</button>
    <button class="aiw-filter-btn" data-aiw-filter="Policy & Regulation">Policy</button>
    <button class="aiw-filter-btn" data-aiw-filter="AI Creative">Creative</button>
    <div class="aiw-search-box">
        <i class="fas fa-search"></i>
        <input type="text" id="aiwSearchInput" placeholder="Search AI news...">
    </div>
</div>

<!-- ========== ROW 1: TOP STORIES + CATEGORIES ========== -->
<div class="aiw-grid">
    <!-- Top Stories (Leaderboard style) -->
    <div class="aiw-card">
        <div class="aiw-card-header">
            <i class="fas fa-bolt" style="color: #ef476f;"></i>
            <h3>Top Stories</h3>
            <span class="aiw-card-action">Latest First</span>
        </div>
        <div class="aiw-featured-list" id="aiwTopStories"></div>
    </div>

    <!-- Categories (Badge style) -->
    <div class="aiw-card">
        <div class="aiw-card-header">
            <i class="fas fa-th-large" style="color: #06d6a0;"></i>
            <h3>Categories</h3>
        </div>
        <div class="aiw-categories-grid" id="aiwCategories"></div>
    </div>
</div>

<!-- ========== ROW 2: TRENDING TOPICS + LATEST UPDATES ========== -->
<div class="aiw-grid">
    <!-- Trending Topics (Skills bar style) -->
    <div class="aiw-card">
        <div class="aiw-card-header">
            <i class="fas fa-chart-line" style="color: #7209b7;"></i>
            <h3>Trending Topics</h3>
        </div>
        <div class="aiw-trending-list" id="aiwTrending"></div>
    </div>

    <!-- Latest Updates (Goals/timeline style) -->
    <div class="aiw-card">
        <div class="aiw-card-header">
            <i class="fas fa-clock" style="color: #ffd166;"></i>
            <h3>Latest Updates</h3>
        </div>
        <div class="aiw-news-feed" id="aiwLatestFeed"></div>
    </div>
</div>

<!-- ========== ALL NEWS GRID ========== -->
<div class="aiw-card" style="margin-bottom: 30px;">
    <div class="aiw-card-header">
        <i class="fas fa-globe"></i>
        <h3>All AI News</h3>
        <span class="aiw-card-action" id="aiwNewsCount"></span>
    </div>
    <div class="aiw-news-grid" id="aiwAllNewsGrid"></div>
</div>

<!-- Loading State -->
<div id="aiwLoading" class="aiw-loading" style="display: none;">
    <div class="aiw-spinner"></div>
    <p>Fetching latest AI news...</p>
</div>

<!-- Error State -->
<div id="aiwError" class="aiw-error" style="display: none;">
    <i class="fas fa-exclamation-circle"></i>
    <h3>Could not load news</h3>
    <p>Please check your connection and try again.</p>
    <button class="aiw-retry-btn" onclick="aiwFetchNews()">
        <i class="fas fa-redo"></i> Try Again
    </button>
</div>

<script>
(function() {
    let aiwAllNews = [];
    let aiwCurrentFilter = 'all';
    let aiwLoaded = false;

    const categoryConfig = {
        'Chatbots & LLMs':      { icon: 'fas fa-comment-dots', gradient: 'linear-gradient(135deg, #06d6a0, #05c590)', pillClass: 'aiw-pill-chatbots', tagBg: '#e8faf4', tagColor: '#06d6a0' },
        'Robotics':             { icon: 'fas fa-robot',        gradient: 'linear-gradient(135deg, #4361ee, #3a56d4)', pillClass: 'aiw-pill-robotics', tagBg: '#eef2ff', tagColor: '#4361ee' },
        'Business & Startups':  { icon: 'fas fa-briefcase',    gradient: 'linear-gradient(135deg, #ffd166, #f9c74f)', pillClass: 'aiw-pill-business', tagBg: '#fff8e5', tagColor: '#d4a017' },
        'Research':             { icon: 'fas fa-flask',        gradient: 'linear-gradient(135deg, #7209b7, #560bad)', pillClass: 'aiw-pill-research', tagBg: '#f3e8ff', tagColor: '#7209b7' },
        'Policy & Regulation':  { icon: 'fas fa-gavel',        gradient: 'linear-gradient(135deg, #ef476f, #e63946)', pillClass: 'aiw-pill-policy',   tagBg: '#fdeef1', tagColor: '#ef476f' },
        'AI Creative':          { icon: 'fas fa-palette',      gradient: 'linear-gradient(135deg, #4cc9f0, #4895ef)', pillClass: 'aiw-pill-creative', tagBg: '#e8f7fc', tagColor: '#0891b2' },
        'General AI':           { icon: 'fas fa-microchip',    gradient: 'linear-gradient(135deg, #8d99ae, #6c757d)', pillClass: 'aiw-pill-general',  tagBg: '#f1f3f5', tagColor: '#8d99ae' }
    };

    function timeAgo(dateStr) {
        if (!dateStr) return '';
        const now = new Date();
        const date = new Date(dateStr);
        const diffMs = now - date;
        const diffMins = Math.floor(diffMs / 60000);
        if (diffMins < 1) return 'Just now';
        if (diffMins < 60) return diffMins + 'm ago';
        const diffHrs = Math.floor(diffMins / 60);
        if (diffHrs < 24) return diffHrs + 'h ago';
        const diffDays = Math.floor(diffHrs / 24);
        if (diffDays < 7) return diffDays + 'd ago';
        return date.toLocaleDateString('en-IN', { day: 'numeric', month: 'short' });
    }

    function getCatConfig(cat) {
        return categoryConfig[cat] || categoryConfig['General AI'];
    }

    function getFiltered() {
        const searchTerm = document.getElementById('aiwSearchInput').value.toLowerCase().trim();
        let filtered = aiwAllNews;
        if (aiwCurrentFilter !== 'all') {
            filtered = filtered.filter(n => n.category === aiwCurrentFilter);
        }
        if (searchTerm) {
            filtered = filtered.filter(n =>
                n.title.toLowerCase().includes(searchTerm) ||
                (n.description && n.description.toLowerCase().includes(searchTerm)) ||
                n.source.toLowerCase().includes(searchTerm)
            );
        }
        return filtered;
    }

    function updateStats() {
        const categories = new Set(aiwAllNews.map(n => n.category));
        const sources = new Set(aiwAllNews.map(n => n.source));
        document.getElementById('aiwStatTotal').textContent = aiwAllNews.length;
        document.getElementById('aiwStatTrending').textContent = Math.min(aiwAllNews.length, 5);
        document.getElementById('aiwStatCategories').textContent = categories.size;
        document.getElementById('aiwStatSources').textContent = sources.size;
    }

    function renderTopStories(news) {
        const container = document.getElementById('aiwTopStories');
        const top5 = news.slice(0, 5);
        if (!top5.length) {
            container.innerHTML = '<div style="text-align:center;color:#8d99ae;padding:20px;">No stories found</div>';
            return;
        }
        const rankClasses = ['rank-1', 'rank-2', 'rank-3', 'rank-other', 'rank-other'];
        container.innerHTML = top5.map((n, i) => `
            <a class="aiw-featured-item ${i === 0 ? 'aiw-top-story' : ''}" href="${n.link}" target="_blank" rel="noopener">
                <div class="aiw-featured-rank ${rankClasses[i]}">${i + 1}</div>
                <div class="aiw-featured-info">
                    <div class="aiw-featured-title">${n.title}</div>
                    <div class="aiw-featured-meta">
                        <span class="aiw-featured-source"><i class="fas fa-newspaper"></i> ${n.source}</span>
                        <span><i class="far fa-clock"></i> ${timeAgo(n.published_at)}</span>
                    </div>
                </div>
            </a>
        `).join('');
    }

    function renderCategories() {
        const container = document.getElementById('aiwCategories');
        const counts = {};
        aiwAllNews.forEach(n => { counts[n.category] = (counts[n.category] || 0) + 1; });

        container.innerHTML = Object.keys(categoryConfig).map(cat => {
            const cfg = categoryConfig[cat];
            const count = counts[cat] || 0;
            return `
                <div class="aiw-cat-badge ${aiwCurrentFilter === cat ? 'active' : ''}" data-aiw-cat="${cat}">
                    <div class="aiw-cat-badge-icon" style="background: ${cfg.gradient}; color: #fff;">
                        <i class="${cfg.icon}"></i>
                    </div>
                    <div class="aiw-cat-badge-name">${cat}</div>
                    <div class="aiw-cat-badge-count">${count} article${count !== 1 ? 's' : ''}</div>
                </div>
            `;
        }).join('');

        container.querySelectorAll('.aiw-cat-badge').forEach(badge => {
            badge.addEventListener('click', function() {
                const cat = this.dataset.aiwCat;
                aiwCurrentFilter = (aiwCurrentFilter === cat) ? 'all' : cat;
                document.querySelectorAll('[data-aiw-filter]').forEach(b => b.classList.remove('active'));
                const matchBtn = document.querySelector(`[data-aiw-filter="${aiwCurrentFilter}"]`);
                if (matchBtn) matchBtn.classList.add('active');
                renderAll();
            });
        });
    }

    function renderTrending(news) {
        const container = document.getElementById('aiwTrending');
        const catCounts = {};
        news.forEach(n => { catCounts[n.category] = (catCounts[n.category] || 0) + 1; });
        const sorted = Object.entries(catCounts).sort((a, b) => b[1] - a[1]).slice(0, 5);
        const maxCount = sorted.length ? sorted[0][1] : 1;

        if (!sorted.length) {
            container.innerHTML = '<div style="text-align:center;color:#8d99ae;padding:20px;">No data available</div>';
            return;
        }

        container.innerHTML = sorted.map(([cat, count]) => {
            const cfg = getCatConfig(cat);
            const pct = Math.round((count / maxCount) * 100);
            return `
                <div class="aiw-trending-item">
                    <div class="aiw-trending-icon" style="background: ${cfg.gradient};">
                        <i class="${cfg.icon}"></i>
                    </div>
                    <div class="aiw-trending-details">
                        <div class="aiw-trending-top">
                            <span class="aiw-trending-name">${cat}</span>
                            <span class="aiw-trending-level" style="background:${cfg.tagBg}; color:${cfg.tagColor};">${count} articles</span>
                        </div>
                        <div class="aiw-trending-bar">
                            <div class="aiw-trending-fill" style="width:${pct}%; background: ${cfg.gradient};"></div>
                        </div>
                    </div>
                </div>
            `;
        }).join('');
    }

    function renderLatestFeed(news) {
        const container = document.getElementById('aiwLatestFeed');
        const latest = news.slice(0, 6);
        if (!latest.length) {
            container.innerHTML = '<div style="text-align:center;color:#8d99ae;padding:20px;">No updates found</div>';
            return;
        }
        container.innerHTML = latest.map(n => {
            const cfg = getCatConfig(n.category);
            return `
                <div class="aiw-news-item" onclick="window.open('${n.link}', '_blank')">
                    <div class="aiw-news-item-top">
                        <div class="aiw-news-item-title">${n.title}</div>
                        <span class="aiw-news-tag" style="background:${cfg.tagBg}; color:${cfg.tagColor};">${n.category}</span>
                    </div>
                    ${n.description ? `<div class="aiw-news-item-desc">${n.description}</div>` : ''}
                    <div class="aiw-news-item-footer">
                        <span><i class="fas fa-newspaper" style="margin-right:4px; color:#4361ee;"></i>${n.source} &bull; ${timeAgo(n.published_at)}</span>
                        <span class="aiw-read-link">Read <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            `;
        }).join('');
    }

    function renderAllNewsGrid(news) {
        const container = document.getElementById('aiwAllNewsGrid');
        const countEl = document.getElementById('aiwNewsCount');
        countEl.textContent = news.length + ' articles';

        if (!news.length) {
            container.innerHTML = '<div style="text-align:center; color:#8d99ae; padding:40px; grid-column:1/-1;"><i class="fas fa-search" style="font-size:30px; margin-bottom:10px; display:block; color:#ccc;"></i>No news found for this filter.</div>';
            return;
        }

        container.innerHTML = news.map(n => {
            const cfg = getCatConfig(n.category);
            return `
                <div class="aiw-news-card" onclick="window.open('${n.link}', '_blank')">
                    <div class="aiw-news-card-top">
                        <span class="aiw-category-pill ${cfg.pillClass}">${n.category}</span>
                        <span class="aiw-time"><i class="far fa-clock"></i> ${timeAgo(n.published_at)}</span>
                    </div>
                    <h4>${n.title}</h4>
                    <div class="aiw-news-card-desc">${n.description || ''}</div>
                    <div class="aiw-news-card-footer">
                        <span class="aiw-source-label"><i class="fas fa-newspaper"></i> ${n.source}</span>
                        <span class="aiw-read-arrow">Read <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            `;
        }).join('');
    }

    function renderAll() {
        const filtered = getFiltered();
        renderTopStories(filtered);
        renderCategories();
        renderTrending(aiwAllNews);
        renderLatestFeed(filtered);
        renderAllNewsGrid(filtered);
        updateStats();
    }

    let aiwFetching = false;
    window.aiwFetchNews = async function(showLoading = true) {
        // forceRefresh only when called from Refresh button (showLoading=false)
        const forceRefresh = showLoading === false;
        if (!forceRefresh && (aiwLoaded || aiwFetching)) return;

        aiwFetching = true;
        const loading = document.getElementById('aiwLoading');
        const error = document.getElementById('aiwError');
        const refreshBtn = document.getElementById('aiwRefreshBtn');

        error.style.display = 'none';
        if (showLoading) loading.style.display = 'flex';
        refreshBtn.classList.add('spinning');

        try {
            const resp = await fetch(CONFIG.getUrl('AI_NEWS') + '?limit=30');
            if (!resp.ok) throw new Error('API error');
            const data = await resp.json();
            aiwAllNews = data.news || [];
            aiwLoaded = true;
            loading.style.display = 'none';
            renderAll();
        } catch (err) {
            console.error('AI News fetch error:', err);
            loading.style.display = 'none';
            if (!aiwAllNews.length) error.style.display = 'block';
        } finally {
            aiwFetching = false;
            refreshBtn.classList.remove('spinning');
        }
    };

    // Filter buttons
    document.querySelectorAll('[data-aiw-filter]').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('[data-aiw-filter]').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            aiwCurrentFilter = this.dataset.aiwFilter;
            renderAll();
        });
    });

    // Search
    document.getElementById('aiwSearchInput').addEventListener('input', renderAll);

    // Load when section visible
    const observer = new MutationObserver(() => {
        const section = document.getElementById('ai-world-section');
        if (section && section.style.display !== 'none' && !aiwLoaded) {
            aiwFetchNews();
        }
    });
    const aiSection = document.getElementById('ai-world-section');
    if (aiSection) observer.observe(aiSection, { attributes: true, attributeFilter: ['style'] });

    document.querySelectorAll('[data-section="ai-world-section"]').forEach(el => {
        el.addEventListener('click', () => {
            if (!aiwLoaded) setTimeout(() => aiwFetchNews(), 100);
        });
    });
})();
</script>

</div>
