<!-- AI Learning Section -->
<div id="ai-section" class="content-section" style="display: none;">
    <div class="ai-learning-content" style="margin-top: 0;">

        <!-- LEARNING CONTENT -->
        <div id="learning-content-wrapper">

            <!-- Hero Banner with AI World Gradient -->
            <div class="al-hero">
                <div class="al-hero-left">
                    <div class="al-hero-icon"><i class="fas fa-brain"></i></div>
                    <div class="al-hero-text">
                        <h2>Explore & Learn</h2>
                        <p>Discover AI-powered learning paths tailored for you</p>
                    </div>
                </div>
                <div class="al-hero-stats" id="al-hero-stats"></div>
            </div>

            <!-- Category Filters -->
            <div class="al-filters-bar">
                <div class="al-filters">
                    <button class="al-chip active" data-category="all">All Platforms</button>
                    <button class="al-chip" data-category="Mathematics"><i class="fas fa-calculator"></i> Mathematics</button>
                    <button class="al-chip" data-category="Science"><i class="fas fa-flask"></i> Science</button>
                    <button class="al-chip" data-category="English"><i class="fas fa-book"></i> English</button>
                    <button class="al-chip" data-category="History"><i class="fas fa-landmark"></i> History</button>
                    <button class="al-chip" data-category="Geography"><i class="fas fa-map-marked-alt"></i> Geography</button>
                    <button class="al-chip" data-category="Computer Science"><i class="fas fa-laptop-code"></i> Computer Science</button>
                    <button class="al-chip" data-category="General"><i class="fas fa-globe"></i> General</button>
                    <button class="al-chip" data-category="Research"><i class="fas fa-graduation-cap"></i> Research</button>
                </div>
            </div>

            <!-- Loading -->
            <div id="ai-websites-loading" class="al-loading" style="display: none;">
                <div class="spinner"></div>
                <p>Loading learning platforms...</p>
            </div>

            <!-- Platform Cards Grid -->
            <div id="platform-cards-grid" class="al-grid"></div>

            <!-- Iframe Container -->
            <div id="learning-iframe-container" style="display: none;" class="al-iframe-wrap">
                <div class="al-iframe-header">
                    <div>
                        <h4 id="iframe-platform-title">Loading...</h4>
                        <p id="iframe-platform-subtitle">AI-Powered Learning Platform</p>
                    </div>
                    <div class="al-iframe-actions">
                        <button id="ask-chatbot-in-iframe-btn" class="al-ask-btn">
                            <i class="fas fa-comments"></i> Ask AI Questions
                        </button>
                        <button id="generate-questions-btn" class="al-ask-btn">
                            <i class="fas fa-puzzle-piece"></i> Generate Quiz
                        </button>
                        <button id="close-iframe-btn" class="al-close-iframe">&times;</button>
                    </div>
                </div>
                <div id="iframe-wrapper" class="al-iframe-body"></div>
            </div>

            <!-- AI Features -->
            <div class="al-features-section">
                <div class="al-features-header">
                    <div class="al-icon-box"><i class="fas fa-sparkles"></i></div>
                    <h4>AI-Powered Learning Features</h4>
                </div>
                <div class="al-features-grid">
                    <div class="al-feature-card">
                        <div class="al-feature-icon" style="background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success));"><i class="fas fa-robot"></i></div>
                        <h5>Smart Content Curation</h5>
                        <p>AI analyzes your learning patterns to recommend the most relevant study materials</p>
                    </div>
                    <div class="al-feature-card">
                        <div class="al-feature-icon" style="background: linear-gradient(135deg, var(--aiw-success), #0cb892);"><i class="fas fa-language"></i></div>
                        <h5>Multilingual Support</h5>
                        <p>Ask questions in Hindi, English, or your preferred language</p>
                    </div>
                    <div class="al-feature-card">
                        <div class="al-feature-icon" style="background: linear-gradient(135deg, #f72585, #b5179e);"><i class="fas fa-magic"></i></div>
                        <h5>Instant Summaries</h5>
                        <p>Get AI-generated summaries of long documents and research papers</p>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div id="quick-stats" class="al-stats-grid"></div>
        </div>

        <!-- FLOATING MINI CHATBOT -->
        <button id="al-floating-chat-btn" class="al-floating-chat-btn" style="display: none;" title="Ask AI about this website">
            <i class="fas fa-robot"></i>
            <span class="al-chat-notif" id="al-chat-notif" style="display: none;">1</span>
        </button>

        <div id="al-mini-chat-popup" class="al-mini-chat-popup" style="display: none;">
            <div class="al-mini-chat-header">
                <h4><i class="fas fa-robot"></i> Ask AI Assistant</h4>
                <button class="al-mini-chat-close" id="al-mini-chat-close">&times;</button>
            </div>
            <div class="al-mini-chat-messages hide-scrollbar" id="al-mini-chat-messages"></div>
            <div class="al-mini-chat-input-area">
                <textarea id="al-mini-chat-input" placeholder="Ask anything about this website..." rows="1"></textarea>
                <button id="al-mini-chat-send"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>

        <!-- CHATBOT (Full page) -->
        <div id="chatbot-container" class="al-chatbot" style="display: none;">
            <div class="al-chat-header">
                <div class="al-chat-header-info">
                    <div class="al-chat-avatar"><i class="fas fa-robot"></i></div>
                    <div>
                        <h4>AI Learning Assistant</h4>
                        <p>Ask anything about this platform</p>
                    </div>
                </div>
                <button id="close-chatbot-btn" class="al-chat-close">&times;</button>
            </div>
            <div id="chat-messages" class="al-chat-messages"></div>
            <div class="al-chat-input-area">
                <input id="chat-input" type="text" placeholder="Type here..." class="al-chat-input">
                <button id="send-chat-btn" class="al-chat-send"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
</div>

<style>
/* ==================== AI WORLD THEME FOR AI LEARNING SECTION ==================== */
:root {
    --aiw-primary: #3f66e6;
    --aiw-primary-dark: #2b4fc1;
    --aiw-primary-light: #0ed3a2;
    --aiw-primary-teal: #129695;
    --aiw-card-bg: #ffffff;
    --aiw-text-dark: #2b2d42;
    --aiw-text-light: #8d99ae;
    --aiw-border: #e9ecef;
    --aiw-success: #0ed3a2;
    --aiw-danger: #ef476f;
    --aiw-warning: #ffd166;
}

/* ==================== HIDE SCROLLBAR BUT KEEP SCROLLING ==================== */
.al-chat-messages::-webkit-scrollbar,
.al-mini-chat-messages::-webkit-scrollbar {
    width: 0;
    height: 0;
    background: transparent;
    display: none;
}

.al-chat-messages,
.al-mini-chat-messages {
    scrollbar-width: none;
    -ms-overflow-style: none;
    scroll-behavior: smooth;
}

/* ==================== HERO ==================== */
.al-hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(135deg, var(--aiw-primary) 0%, var(--aiw-primary-teal) 50%, var(--aiw-success) 100%);
    border-radius: 20px;
    padding: 28px 36px;
    margin-bottom: 24px;
    color: white;
    flex-wrap: wrap;
    gap: 20px;
}

.al-hero-left { display: flex; align-items: center; gap: 20px; }

.al-hero-icon {
    width: 60px; height: 60px;
    background: rgba(255,255,255,0.2);
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    font-size: 26px; flex-shrink: 0;
}

.al-hero-text h2 { font-size: 24px; font-weight: 700; margin: 0 0 4px; color: white; }
.al-hero-text p { font-size: 14px; margin: 0; opacity: 0.88; }

.al-hero-stats {
    display: flex; gap: 24px; flex-wrap: wrap;
}

.al-hero-stat {
    text-align: center;
}

.al-hero-stat-value {
    font-size: 28px; font-weight: 700; line-height: 1.2;
}

.al-hero-stat-label {
    font-size: 11px; opacity: 0.8; text-transform: uppercase; letter-spacing: 0.5px;
}

/* ==================== FILTERS ==================== */
.al-filters-bar {
    background: white;
    padding: 12px 20px;
    border-radius: 50px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    margin-bottom: 24px;
}

.al-filters { display: flex; gap: 6px; flex-wrap: wrap; justify-content: center; }

.al-chip {
    padding: 8px 18px;
    border: none;
    background: transparent;
    border-radius: 30px;
    cursor: pointer;
    font-weight: 500;
    color: #666;
    font-size: 13px;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 6px;
}

.al-chip:hover { background: #f0f4ff; color: var(--aiw-primary); }
.al-chip.active { background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-success)); color: white; }

/* ==================== LOADING ==================== */
.al-loading { text-align: center; padding: 50px; }
.al-loading .spinner { border: 4px solid #f3f3f3; border-top: 4px solid var(--aiw-primary); border-radius: 50%; width: 40px; height: 40px; animation: alSpin 1s linear infinite; margin: 0 auto 15px; }
.al-loading p { color: #666; }
@keyframes alSpin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }

/* ==================== GRID ==================== */
.al-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 24px;
    margin-bottom: 40px;
}

/* ==================== PLATFORM CARD ==================== */
.al-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
}

.al-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 40px rgba(63,102,230,0.15);
}

.al-card-top {
    padding: 24px 24px 20px;
    position: relative;
    overflow: hidden;
}

.al-card-top::before {
    content: '';
    position: absolute;
    top: -40%;
    right: -30%;
    width: 140px;
    height: 140px;
    border-radius: 50%;
    background: rgba(255,255,255,0.06);
    transition: all 0.5s;
}

.al-card:hover .al-card-top::before { transform: scale(2); }

.al-card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 14px;
    position: relative;
    z-index: 1;
}

.al-card-title {
    font-size: 19px;
    font-weight: 700;
    color: white;
    margin: 0 0 6px;
    line-height: 1.3;
}

.al-card-class {
    display: inline-block;
    background: rgba(255,255,255,0.2);
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    color: white;
}

.al-card-icon {
    width: 48px;
    height: 48px;
    background: rgba(255,255,255,0.15);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: white;
    flex-shrink: 0;
    backdrop-filter: blur(4px);
}

.al-card-desc {
    font-size: 13px;
    color: rgba(255,255,255,0.85);
    line-height: 1.5;
    margin: 0;
    position: relative;
    z-index: 1;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.al-card-body {
    padding: 16px 24px 20px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.al-card-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin-bottom: 12px;
}

.al-tag {
    background: #f0f4ff;
    color: var(--aiw-primary);
    padding: 3px 10px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 500;
}

.al-card-meta {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
    margin-bottom: 16px;
}

.al-meta-chip {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 11px;
    color: #888;
    background: #f5f7fb;
    padding: 4px 10px;
    border-radius: 20px;
}

.al-meta-chip i { font-size: 10px; color: #aaa; }

.al-card-btn {
    margin-top: auto;
    padding: 10px 0;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s;
    width: 100%;
}

.al-card-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.12);
}

/* ==================== EMPTY STATE ==================== */
.al-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 20px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
}

.al-empty-icon {
    width: 80px; height: 80px;
    background: linear-gradient(135deg, #e8edff, #dff5ef);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 20px;
    font-size: 32px;
    color: var(--aiw-primary);
}

.al-empty h3 { font-size: 20px; color: #333; margin: 0 0 8px; }
.al-empty p { color: #888; font-size: 14px; margin: 0; }

/* ==================== IFRAME ==================== */
.al-iframe-wrap {
    margin-top: 30px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    overflow: hidden;
}

.al-iframe-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 24px;
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success));
    color: white;
    flex-wrap: wrap;
    gap: 12px;
}

.al-iframe-header h4 { margin: 0; font-size: 18px; color: white; }
.al-iframe-header p { margin: 4px 0 0; font-size: 13px; opacity: 0.85; }

.al-iframe-actions { display: flex; align-items: center; gap: 12px; }

.al-ask-btn {
    background: white;
    color: var(--aiw-primary);
    border: none;
    padding: 10px 22px;
    border-radius: 14px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s;
}

.al-ask-btn:hover { transform: translateY(-2px); box-shadow: 0 4px 15px rgba(0,0,0,0.2); }

.al-close-iframe {
    background: rgba(255,255,255,0.15);
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
}

.al-close-iframe:hover { background: rgba(255,255,255,0.3); }

.al-iframe-body {
    position: relative;
    width: 100%;
    height: 80vh;
    background: #f5f5f5;
}

/* ==================== FEATURES ==================== */
.al-features-section {
    background: white;
    border-radius: 20px;
    padding: 28px;
    margin-bottom: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
}

.al-features-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 24px;
}

.al-icon-box {
    width: 40px; height: 40px;
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success));
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 16px; flex-shrink: 0;
}

.al-features-header h4 { margin: 0; font-size: 17px; font-weight: 700; color: #1a1a2e; }

.al-features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
}

.al-feature-card {
    padding: 24px;
    background: #fafbff;
    border-radius: 16px;
    transition: all 0.3s;
    border: 2px solid transparent;
}

.al-feature-card:hover {
    transform: translateY(-4px);
    border-color: #e8edff;
    box-shadow: 0 8px 25px rgba(63,102,230,0.08);
}

.al-feature-icon {
    width: 48px; height: 48px;
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 20px;
    margin-bottom: 14px;
}

.al-feature-card h5 { margin: 0 0 8px; font-size: 16px; color: #1a1a2e; font-weight: 700; }
.al-feature-card p { margin: 0; font-size: 13px; color: #888; line-height: 1.6; }

/* ==================== STATS ==================== */
.al-stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.al-stat-card {
    background: white;
    border-radius: 16px;
    padding: 24px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    transition: all 0.3s;
}

.al-stat-card:hover { transform: translateY(-4px); box-shadow: 0 8px 25px rgba(0,0,0,0.08); }

.al-stat-value { font-size: 32px; font-weight: 700; line-height: 1.2; }
.al-stat-label { font-size: 12px; color: #888; text-transform: uppercase; letter-spacing: 0.5px; margin-top: 4px; }

/* ==================== CHATBOT ==================== */
.al-chatbot {
    height: 85vh;
    background: white;
    border-radius: 20px;
    box-shadow: 0 4px 30px rgba(0,0,0,0.1);
    overflow: hidden;
    flex-direction: column;
}

.al-chat-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 24px;
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success));
    color: white;
}

.al-chat-header-info { display: flex; align-items: center; gap: 14px; }

.al-chat-avatar {
    width: 42px; height: 42px;
    background: rgba(255,255,255,0.2);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 18px;
}

.al-chat-header h4 { margin: 0; font-size: 17px; color: white; }
.al-chat-header p { margin: 2px 0 0; font-size: 12px; opacity: 0.85; }

.al-chat-close {
    background: rgba(255,255,255,0.15);
    border: none; color: white; font-size: 24px;
    cursor: pointer; width: 36px; height: 36px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    transition: all 0.2s;
}

.al-chat-close:hover { background: rgba(255,255,255,0.3); }

.al-chat-messages {
    flex: 1;
    padding: 20px;
    overflow-y: auto;
    background: #e8eaf6;
    display: flex;
    flex-direction: column;
    gap: 4px;
}

/* WhatsApp-style chat bubbles */
.al-msg {
    max-width: 75%;
    padding: 8px 12px;
    border-radius: 10px;
    position: relative;
    word-wrap: break-word;
    line-height: 1.45;
    font-size: 14px;
    margin-bottom: 2px;
}
.al-msg p { margin: 0; }
.al-msg .al-msg-time {
    display: block;
    font-size: 10.5px;
    margin-top: 4px;
    text-align: right;
    opacity: 0.55;
}

/* User bubble (right) */
.al-msg-user {
    align-self: flex-end;
    background: var(--aiw-success);
    color: white;
    border-radius: 10px 10px 0 10px;
}

/* Bot bubble (left) */
.al-msg-bot {
    align-self: flex-start;
    background: #fff;
    color: #222;
    border-radius: 10px 10px 10px 0;
    box-shadow: 0 1px 2px rgba(0,0,0,0.08);
}

.al-chat-input-area {
    padding: 16px 20px;
    background: white;
    border-top: 1px solid #f0f2f5;
    display: flex;
    gap: 10px;
}

.al-chat-input {
    flex: 1;
    padding: 12px 20px;
    border: 2px solid #e8ecf4;
    border-radius: 30px;
    font-size: 14px;
    outline: none;
    transition: all 0.3s;
    background: #fafbff;
}

.al-chat-input:focus { border-color: var(--aiw-primary); box-shadow: 0 0 0 3px rgba(63,102,230,0.1); background: white; }

.al-chat-send {
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success));
    color: white;
    border: none;
    width: 48px; height: 48px;
    border-radius: 50%;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    font-size: 16px;
    transition: all 0.3s;
    flex-shrink: 0;
}

.al-chat-send:hover { transform: scale(1.05); box-shadow: 0 4px 15px rgba(63,102,230,0.3); }

/* ==================== FLOATING MINI CHATBOT ==================== */
.al-floating-chat-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success));
    color: white;
    border: none;
    cursor: pointer;
    font-size: 26px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 20px rgba(63,102,230,0.4);
    z-index: 9999;
    transition: all 0.3s;
}
.al-floating-chat-btn:hover { transform: scale(1.1); box-shadow: 0 6px 28px rgba(63,102,230,0.5); }

.al-chat-notif {
    position: absolute;
    top: -4px;
    right: -4px;
    width: 22px;
    height: 22px;
    background: var(--aiw-danger);
    color: white;
    border-radius: 50%;
    font-size: 11px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid white;
}

.al-mini-chat-popup {
    position: fixed;
    bottom: 100px;
    right: 30px;
    width: 370px;
    height: 500px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    z-index: 9998;
    animation: alSlideUp 0.3s ease;
}
@keyframes alSlideUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.al-mini-chat-header {
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success));
    color: white;
    padding: 14px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.al-mini-chat-header h4 {
    margin: 0;
    font-size: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
    color: white;
}
.al-mini-chat-close {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    line-height: 1;
}

.al-mini-chat-messages {
    flex: 1;
    overflow-y: auto;
    padding: 15px;
    background: #e8eaf6;
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.al-mini-chat-input-area {
    display: flex;
    gap: 10px;
    padding: 12px 15px;
    background: white;
    border-top: 1px solid #eee;
}
.al-mini-chat-input-area textarea {
    flex: 1;
    padding: 10px 15px;
    border: 2px solid #e0e0e0;
    border-radius: 25px;
    resize: none;
    font-family: inherit;
    font-size: 13px;
    max-height: 80px;
    outline: none;
}
.al-mini-chat-input-area textarea:focus { border-color: var(--aiw-primary); }
.al-mini-chat-input-area button {
    width: 42px;
    height: 42px;
    border: none;
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success));
    color: white;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
}
.al-mini-chat-input-area button:hover { transform: scale(1.08); }

/* Mini chat bubbles */
.al-mini-msg {
    max-width: 80%;
    padding: 8px 12px;
    border-radius: 10px;
    word-wrap: break-word;
    line-height: 1.4;
    font-size: 13px;
    margin-bottom: 2px;
}
.al-mini-msg p { margin: 0; }
.al-mini-msg .al-mini-msg-time {
    display: block;
    font-size: 10px;
    margin-top: 3px;
    text-align: right;
    opacity: 0.5;
}
.al-mini-msg-user {
    align-self: flex-end;
    background: var(--aiw-success);
    color: white;
    border-radius: 10px 10px 0 10px;
}
.al-mini-msg-bot {
    align-self: flex-start;
    background: #fff;
    color: #222;
    border-radius: 10px 10px 10px 0;
    box-shadow: 0 1px 2px rgba(0,0,0,0.08);
}

/* ==================== IN-CHAT QUIZ ==================== */
.alq-setup {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 6px;
}
.alq-setup-label { font-size: 12px; font-weight: 600; color: #555; margin-bottom: 2px; }
.alq-row { display: flex; gap: 6px; flex-wrap: wrap; }
.alq-pill {
    padding: 7px 14px;
    border: 2px solid #e0e4ee;
    border-radius: 20px;
    background: white;
    cursor: pointer;
    font-size: 12px;
    font-weight: 600;
    color: #555;
    transition: all 0.2s;
}
.alq-pill:hover { border-color: var(--aiw-primary); color: var(--aiw-primary); }
.alq-pill.active { background: var(--aiw-primary); color: white; border-color: var(--aiw-primary); }
.alq-go {
    padding: 9px 20px;
    border: none;
    border-radius: 20px;
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success));
    color: white;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    margin-top: 4px;
    transition: all 0.2s;
}
.alq-go:hover { box-shadow: 0 4px 12px rgba(63,102,230,0.3); }

/* In-chat question card */
.alq-card {
    margin-top: 6px;
}
.alq-badge {
    display: inline-block;
    background: #e8edff;
    color: var(--aiw-primary);
    font-size: 10px;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 20px;
    margin-bottom: 8px;
    text-transform: uppercase;
}
.alq-q { font-size: 14px; font-weight: 600; color: #222; margin: 0 0 12px; line-height: 1.45; }
.alq-opts { display: flex; flex-direction: column; gap: 6px; }
.alq-opt {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    border: 2px solid #e0e4ee;
    border-radius: 12px;
    cursor: pointer;
    font-size: 13px;
    color: #333;
    background: white;
    transition: all 0.15s;
}
.alq-opt:hover:not(.alq-locked) { border-color: var(--aiw-primary); background: #f8f9ff; }
.alq-letter {
    width: 26px; height: 26px;
    border-radius: 50%;
    background: #f0f4ff;
    color: var(--aiw-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 12px;
    flex-shrink: 0;
}
.alq-opt.alq-correct { border-color: var(--aiw-success); background: #ecfdf5; }
.alq-opt.alq-correct .alq-letter { background: var(--aiw-success); color: white; }
.alq-opt.alq-wrong { border-color: var(--aiw-danger); background: #fef2f2; }
.alq-opt.alq-wrong .alq-letter { background: var(--aiw-danger); color: white; }
.alq-locked { pointer-events: none; opacity: 0.85; }

/* TF buttons */
.alq-tf { display: flex; gap: 8px; }
.alq-tf-btn {
    flex: 1;
    padding: 10px;
    border: 2px solid #e0e4ee;
    border-radius: 12px;
    cursor: pointer;
    font-weight: 600;
    font-size: 13px;
    color: #555;
    background: white;
    transition: all 0.15s;
}
.alq-tf-btn:hover:not(.alq-locked) { border-color: var(--aiw-primary); }
.alq-tf-btn.alq-correct { border-color: var(--aiw-success); background: #ecfdf5; color: #059669; }
.alq-tf-btn.alq-wrong { border-color: var(--aiw-danger); background: #fef2f2; color: #dc2626; }

/* Explanation */
.alq-explain {
    margin-top: 10px;
    padding: 10px 14px;
    background: #f0f9ff;
    border-left: 3px solid var(--aiw-primary);
    border-radius: 0 10px 10px 0;
    font-size: 12px;
    color: #444;
    line-height: 1.45;
}
.alq-explain strong { color: var(--aiw-primary); }

/* Score result */
.alq-result {
    text-align: center;
    margin-top: 6px;
}
.alq-result-circle {
    width: 80px; height: 80px;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    color: white;
    font-weight: 800;
}
.alq-result-circle .alq-pct { font-size: 24px; line-height: 1; }
.alq-result-circle .alq-frac { font-size: 11px; opacity: 0.9; }
.alq-result h4 { margin: 0 0 4px; font-size: 16px; color: #222; }
.alq-result p { margin: 0 0 8px; font-size: 12px; color: #666; }
.alq-again {
    padding: 8px 20px;
    border: none;
    border-radius: 20px;
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success));
    color: white;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
}

/* Quiz Stats Styles */
.al-quiz-stats-card {
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal));
    border-radius: 16px;
    padding: 20px;
    margin: 12px 0;
    color: white;
}
.al-quiz-stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin-top: 12px;
}
.al-quiz-stat-item {
    text-align: center;
    background: rgba(255,255,255,0.15);
    border-radius: 12px;
    padding: 10px;
}
.al-quiz-stat-value {
    font-size: 24px;
    font-weight: 700;
}
.al-quiz-stat-label {
    font-size: 11px;
    opacity: 0.9;
    margin-top: 4px;
}

/* ==================== RESPONSIVE ==================== */
@media (max-width: 768px) {
    .al-hero { padding: 20px 22px; flex-direction: column; align-items: stretch; }
    .al-hero-stats { justify-content: center; }
    .al-filters-bar { border-radius: 16px; padding: 10px 14px; }
    .al-grid { grid-template-columns: 1fr; }
    .al-iframe-header { flex-direction: column; align-items: flex-start; }
    .al-iframe-actions { width: 100%; justify-content: space-between; }
    .al-mini-chat-popup { width: 300px; height: 420px; bottom: 80px; right: 15px; }
    .al-floating-chat-btn { width: 50px; height: 50px; bottom: 20px; right: 20px; font-size: 22px; }
}
</style>

<script>
// Script remains the same as your existing code
document.addEventListener('DOMContentLoaded', function() {

    const API_BASE_URL = 'http://127.0.0.1:8000';
    let allWebsites = [];
    let currentCategoryFilter = 'all';
    let currentClassFilter = 'all';
    let currentDocumentId = null;
    let currentWebsiteId = null;
    let currentWebsiteTitle = null;
    let chatHistoryLoaded = false;

    const loadingElement = document.getElementById('ai-websites-loading');
    const gridElement = document.getElementById('platform-cards-grid');
    const categoryFilters = document.querySelectorAll('.al-chip');
    const quickStatsElement = document.getElementById('quick-stats');

    function getAuthToken() { return localStorage.getItem('access_token'); }

    function showLoading(show) {
        if (loadingElement) loadingElement.style.display = show ? 'block' : 'none';
        if (gridElement) gridElement.style.display = show ? 'none' : 'grid';
    }

    async function fetchWebsites() {
        showLoading(true);
        try {
            const token = getAuthToken();
            if (!token) { showLoading(false); return; }

            const response = await fetch(`${API_BASE_URL}/wb/student/websites`, {
                method: 'GET',
                headers: { 'Authorization': `Bearer ${token}`, 'Content-Type': 'application/json' }
            });

            if (!response.ok) throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            const result = await response.json();

            if (result.success && result.websites) {
                allWebsites = result.websites.map(w => ({
                    id: w.id, doc_id: w.doc_id, title: w.title, url: w.url,
                    subject: w.subject, class: w.class, description: w.description,
                    tags: w.tags || [], pages_indexed: w.pages_indexed,
                    chunks_count: w.chunks_count, created_at: w.created_at
                }));
                applyFiltersAndRender();
                updateQuickStats();
                updateHeroStats();
            } else { throw new Error(result.message || 'Failed to load websites'); }
        } catch (error) {
            console.error('Error fetching websites:', error);
            if (gridElement) {
                gridElement.innerHTML = `<div class="al-empty"><div class="al-empty-icon"><i class="fas fa-exclamation-circle"></i></div><h3>Failed to load platforms</h3><p>${escapeHtml(error.message)}</p></div>`;
            }
        } finally { showLoading(false); }
    }

    async function loadWebsiteChatHistory(websiteId, websiteTitle) {
        try {
            const token = getAuthToken();
            if (!token) return;

            const response = await fetch(`${API_BASE_URL}/wb/student/chat-history/website/${websiteId}?limit=50&offset=0`, {
                method: 'GET',
                headers: { 'Authorization': `Bearer ${token}`, 'Content-Type': 'application/json' }
            });

            if (!response.ok) throw new Error(`HTTP ${response.status}`);
            const result = await response.json();

            if (result.success && result.data && result.data.chats && result.data.chats.length > 0) {
                const messagesContainer = document.getElementById('chat-messages');
                messagesContainer.innerHTML = '';
                addBotMessage(`Welcome back to <b>${escapeHtml(websiteTitle)}</b>! Here's your recent chat history:`);
                
                const chatsToShow = result.data.chats.slice(0, 10).reverse();
                chatsToShow.forEach(chat => {
                    const chatDate = new Date(chat.created_at);
                    addUserMessage(chat.question, chatDate);
                    addBotMessage(escapeHtml(chat.answer), chatDate);
                });
                
                if (result.data.chats.length > 10) {
                    addBotMessage(`And ${result.data.chats.length - 10} more conversations. Ask anything new to continue learning!`);
                } else {
                    addBotMessage(`You have ${result.data.chats.length} conversations. Ask anything new to continue learning!`);
                }
                chatHistoryLoaded = true;
            } else {
                const messagesContainer = document.getElementById('chat-messages');
                if (messagesContainer.children.length === 1) {
                    addBotMessage(`Welcome to <b>${escapeHtml(websiteTitle)}</b>! This is your first time here.\n\nFeel free to ask me anything about this platform!`);
                }
                chatHistoryLoaded = true;
            }
        } catch (error) {
            console.error('Error loading chat history:', error);
        }
    }

    function applyFiltersAndRender() {
        let filtered = [...allWebsites];
        if (currentCategoryFilter !== 'all') filtered = filtered.filter(w => w.subject === currentCategoryFilter);
        if (currentClassFilter !== 'all') filtered = filtered.filter(w => parseInt(w.class) === parseInt(currentClassFilter));
        renderWebsites(filtered);
    }

    function getSubjectIcon(subject) {
        const icons = { 'Mathematics': 'fa-calculator', 'Science': 'fa-flask', 'English': 'fa-book', 'History': 'fa-landmark', 'Geography': 'fa-map-marked-alt', 'Computer Science': 'fa-laptop-code', 'Research': 'fa-graduation-cap', 'General': 'fa-globe' };
        return icons[subject] || 'fa-globe';
    }

    function getGradientColor(subject) {
        const colors = { 
            'Mathematics': 'linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success))', 
            'Science': 'linear-gradient(135deg, var(--aiw-success), #0cb892)', 
            'English': 'linear-gradient(135deg, #8b5cf6, #6d28d9)', 
            'History': 'linear-gradient(135deg, #f97316, #dc2626)', 
            'Geography': 'linear-gradient(135deg, #14b8a6, #0d9488)', 
            'Computer Science': 'linear-gradient(135deg, #3b82f6, #1d4ed8)', 
            'Research': 'linear-gradient(135deg, #a855f7, #7c3aed)', 
            'General': 'linear-gradient(135deg, #6366f1, #4f46e5)' 
        };
        return colors[subject] || 'linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-teal), var(--aiw-success))';
    }

    function getBtnColor(subject) {
        const colors = { 
            'Mathematics': 'var(--aiw-primary-dark)', 
            'Science': '#0cb892', 
            'English': '#6d28d9', 
            'History': '#dc2626', 
            'Geography': '#0d9488', 
            'Computer Science': '#1d4ed8', 
            'Research': '#7c3aed', 
            'General': '#4f46e5' 
        };
        return colors[subject] || 'var(--aiw-primary)';
    }

    function renderWebsites(websites) {
        if (!gridElement) return;
        if (!websites || websites.length === 0) {
            gridElement.innerHTML = `<div class="al-empty"><div class="al-empty-icon"><i class="fas fa-globe"></i></div><h3>No learning platforms found</h3><p>Try adjusting your filters or check back later</p></div>`;
            return;
        }

        let html = '';
        websites.forEach(website => {
            const tagsHtml = (website.tags || []).map(tag => `<span class="al-tag">${escapeHtml(tag)}</span>`).join('');
            const icon = getSubjectIcon(website.subject);
            const gradient = getGradientColor(website.subject);
            const btnColor = getBtnColor(website.subject);

            html += `
                <div class="al-card">
                    <div class="al-card-top" style="background: ${gradient};">
                        <div class="al-card-header">
                            <div>
                                <h4 class="al-card-title">${escapeHtml(website.title)}</h4>
                                <span class="al-card-class"><i class="fas fa-graduation-cap"></i> Class ${website.class}</span>
                            </div>
                            <div class="al-card-icon"><i class="fas ${icon}"></i></div>
                        </div>
                        <p class="al-card-desc">${escapeHtml(website.description || 'No description available')}</p>
                    </div>
                    <div class="al-card-body">
                        ${tagsHtml ? `<div class="al-card-tags">${tagsHtml}</div>` : ''}
                        <div class="al-card-meta">
                            <span class="al-meta-chip"><i class="fas fa-file-alt"></i> ${website.pages_indexed || 0} sections</span>
                            <span class="al-meta-chip"><i class="fas fa-puzzle-piece"></i> ${website.chunks_count || 0} chunks</span>
                        </div>
                        <button class="al-card-btn start-learning-btn" data-website-id="${website.id}" data-doc-id="${website.doc_id}" data-url="${website.url}" data-title="${escapeHtml(website.title)}" style="background: ${btnColor}; color: white;">
                            <i class="fas fa-play-circle"></i> Start Learning
                        </button>
                    </div>
                </div>
            `;
        });

        gridElement.innerHTML = html;

        document.querySelectorAll('.start-learning-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const websiteId = this.dataset.websiteId;
                const docId = this.dataset.docId;
                const url = this.dataset.url;
                const title = this.dataset.title;
                loadWebsiteInIframe(url, title, docId, websiteId);
            });
        });
    }

    function updateHeroStats() {
        const el = document.getElementById('al-hero-stats');
        if (!el) return;
        const subjects = [...new Set(allWebsites.map(w => w.subject))];
        el.innerHTML = `
            <div class="al-hero-stat"><div class="al-hero-stat-value">${allWebsites.length}</div><div class="al-hero-stat-label">Platforms</div></div>
            <div class="al-hero-stat"><div class="al-hero-stat-value">${subjects.length}</div><div class="al-hero-stat-label">Subjects</div></div>
        `;
    }

    function updateQuickStats() {
        if (!quickStatsElement) return;
        const subjects = [...new Set(allWebsites.map(w => w.subject))];
        const classes = [...new Set(allWebsites.map(w => w.class))];
        const chunks = allWebsites.reduce((sum, w) => sum + (w.chunks_count || 0), 0);

        quickStatsElement.innerHTML = `
            <div class="al-stat-card"><div class="al-stat-value" style="color: var(--aiw-primary);">${allWebsites.length}</div><div class="al-stat-label">Learning Platforms</div></div>
            <div class="al-stat-card"><div class="al-stat-value" style="color: var(--aiw-success);">${subjects.length}</div><div class="al-stat-label">Subjects Covered</div></div>
            <div class="al-stat-card"><div class="al-stat-value" style="color: #f72585;">${classes.length}</div><div class="al-stat-label">Classes Available</div></div>
            <div class="al-stat-card"><div class="al-stat-value" style="color: #f59e0b;">${chunks}</div><div class="al-stat-label">AI Indexed Chunks</div></div>
        `;
    }

    function hideAllExceptIframe() {
        const contentWrapper = document.getElementById('learning-content-wrapper');
        if (!contentWrapper) return;
        Array.from(contentWrapper.children).forEach(child => {
            if (child.id !== 'learning-iframe-container') {
                child.setAttribute('data-was-display', child.style.display || '');
                child.style.display = 'none';
            }
        });
    }

    function showAllContent() {
        const contentWrapper = document.getElementById('learning-content-wrapper');
        if (!contentWrapper) return;
        Array.from(contentWrapper.children).forEach(child => {
            if (child.id !== 'learning-iframe-container') {
                const prev = child.getAttribute('data-was-display');
                child.style.display = (prev !== null && prev !== '') ? prev : '';
                child.removeAttribute('data-was-display');
            }
        });
    }

    function loadWebsiteInIframe(url, title, docId, websiteId) {
        const container = document.getElementById('learning-iframe-container');
        const wrapper = document.getElementById('iframe-wrapper');
        const platformTitle = document.getElementById('iframe-platform-title');
        const platformSubtitle = document.getElementById('iframe-platform-subtitle');
        
        currentDocumentId = docId;
        currentWebsiteId = websiteId;
        currentWebsiteTitle = title;
        chatHistoryLoaded = false;
        
        wrapper.innerHTML = '';
        const iframe = document.createElement('iframe');
        iframe.src = url;
        iframe.style.cssText = 'width:100%;height:100%;border:none;background:white;';
        iframe.setAttribute('loading', 'lazy');
        iframe.setAttribute('sandbox', 'allow-same-origin allow-scripts allow-forms allow-popups allow-top-navigation allow-modals');
        iframe.setAttribute('allow', 'fullscreen');
        wrapper.appendChild(iframe);
        platformTitle.textContent = title;
        platformSubtitle.textContent = `Exploring ${title}`;
        hideAllExceptIframe();
        container.style.display = 'block';
        container.scrollIntoView({ behavior: 'smooth', block: 'start' });
        showLoadingState(wrapper, iframe);
        showMiniChatbot();
        resetChatbotAndLoadHistory(websiteId, title);
    }

    async function resetChatbotAndLoadHistory(websiteId, title) {
        const messagesContainer = document.getElementById('chat-messages');
        messagesContainer.innerHTML = '';
        addBotMessage("Hi! 👋 I'm your AI Learning Assistant.<br>Ask me anything about this platform!");
        await loadWebsiteChatHistory(websiteId, title);
    }

    function showLoadingState(wrapper, iframe) {
        const loadingDiv = document.createElement('div');
        loadingDiv.id = 'iframe-loading';
        loadingDiv.style.cssText = 'position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;background:rgba(255,255,255,0.95);z-index:1000;transition:opacity 0.3s;';
        loadingDiv.innerHTML = `<div style="width:40px;height:40px;border:3px solid #f3f3f3;border-top:3px solid var(--aiw-primary);border-radius:50%;animation:alSpin 1s linear infinite;margin-bottom:16px;"></div><p style="color:#333;font-size:15px;margin:0;">Loading platform...</p>`;
        wrapper.style.position = 'relative';
        wrapper.appendChild(loadingDiv);
        iframe.onload = function() { setTimeout(() => { loadingDiv.style.opacity = '0'; setTimeout(() => { if (loadingDiv.parentNode === wrapper) wrapper.removeChild(loadingDiv); }, 300); }, 500); };
        setTimeout(() => { if (loadingDiv.parentNode === wrapper) { loadingDiv.style.opacity = '0'; setTimeout(() => { if (loadingDiv.parentNode === wrapper) wrapper.removeChild(loadingDiv); }, 300); } }, 8000);
    }

    function escapeHtml(str) {
        if (!str) return '';
        return String(str).replace(/[&<>"']/g, function(m) { return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[m]; });
    }

    categoryFilters.forEach(filter => {
        filter.addEventListener('click', function() {
            categoryFilters.forEach(f => f.classList.remove('active'));
            this.classList.add('active');
            currentCategoryFilter = this.dataset.category;
            applyFiltersAndRender();
        });
    });

    const closeBtn = document.getElementById('close-iframe-btn');
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            document.getElementById('learning-iframe-container').style.display = 'none';
            document.getElementById('iframe-wrapper').innerHTML = '';
            currentDocumentId = null;
            currentWebsiteId = null;
            chatHistoryLoaded = false;
            hideMiniChatbot();
            showAllContent();
            const messagesContainer = document.getElementById('chat-messages');
            messagesContainer.innerHTML = '';
            addBotMessage("Hi! I'm your AI Learning Assistant.<br>Ask me anything about this platform!");
        });
    }

    function showChatbot() {
        document.getElementById('learning-content-wrapper').style.display = 'none';
        document.getElementById('chatbot-container').style.display = 'flex';
        if (miniFloatingBtn) miniFloatingBtn.style.display = 'none';
        if (miniPopup) miniPopup.style.display = 'none';
        if (currentWebsiteId && !chatHistoryLoaded) {
            loadWebsiteChatHistory(currentWebsiteId, currentWebsiteTitle);
        }
    }

    function hideChatbot() {
        document.getElementById('learning-content-wrapper').style.display = 'block';
        document.getElementById('chatbot-container').style.display = 'none';
        if (currentWebsiteId && miniFloatingBtn) miniFloatingBtn.style.display = 'flex';
    }

    function getTimeString(date) {
        const d = date || new Date();
        return d.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    }

    function addUserMessage(text, timestamp) {
        const messages = document.getElementById('chat-messages');
        const div = document.createElement('div');
        div.className = 'al-msg al-msg-user';
        div.innerHTML = `<p>${escapeHtml(text)}</p><span class="al-msg-time">${getTimeString(timestamp)}</span>`;
        messages.appendChild(div);
        messages.scrollTop = messages.scrollHeight;
    }

    function addBotMessage(text, timestamp) {
        const messages = document.getElementById('chat-messages');
        const div = document.createElement('div');
        div.className = 'al-msg al-msg-bot';
        div.innerHTML = `<p style="white-space:pre-line;">${text}</p><span class="al-msg-time">${getTimeString(timestamp)}</span>`;
        messages.appendChild(div);
        messages.scrollTop = messages.scrollHeight;
    }

    function addTypingIndicator() {
        const messages = document.getElementById('chat-messages');
        const div = document.createElement('div');
        div.id = 'typing-indicator';
        div.className = 'al-msg al-msg-bot';
        div.innerHTML = `<div style="display:flex;gap:4px;"><span style="width:8px;height:8px;background:var(--aiw-primary);border-radius:50%;animation:alTyping 1s infinite;"></span><span style="width:8px;height:8px;background:var(--aiw-primary);border-radius:50%;animation:alTyping 1s infinite 0.2s;"></span><span style="width:8px;height:8px;background:var(--aiw-primary);border-radius:50%;animation:alTyping 1s infinite 0.4s;"></span></div>`;
        messages.appendChild(div);
        messages.scrollTop = messages.scrollHeight;
        if (!document.querySelector('#al-typing-style')) {
            const style = document.createElement('style');
            style.id = 'al-typing-style';
            style.textContent = `@keyframes alTyping { 0%,60%,100%{transform:translateY(0);opacity:0.6;} 30%{transform:translateY(-10px);opacity:1;} }`;
            document.head.appendChild(style);
        }
    }

    function removeTypingIndicator() { const el = document.getElementById('typing-indicator'); if (el) el.remove(); }

    async function askQuestion(question) {
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 25000);
        try {
            addTypingIndicator();
            const url = `${API_BASE_URL}/wb/student/website/ask?doc_id=${currentDocumentId}&question=${encodeURIComponent(question)}`;
            const response = await fetch(url, { method: 'POST', headers: { 'Authorization': `Bearer ${getAuthToken()}`, 'Content-Type': 'application/json' }, signal: controller.signal });
            clearTimeout(timeoutId);
            removeTypingIndicator();
            if (!response.ok) { let err = await response.text().catch(() => ""); throw new Error(`API error ${response.status}: ${err}`); }
            const data = await response.json();
            return data.answer || "No answer found.";
        } catch (err) {
            clearTimeout(timeoutId);
            removeTypingIndicator();
            if (err.name === 'AbortError') return "Server timeout. Please try again.";
            if (err.message.includes('Failed to fetch')) return "Cannot connect to backend server.";
            return `Error: ${err.message}`;
        }
    }

    const askInIframeBtn = document.getElementById('ask-chatbot-in-iframe-btn');
    if (askInIframeBtn) askInIframeBtn.addEventListener('click', showChatbot);

    const closeChatbotBtn = document.getElementById('close-chatbot-btn');
    if (closeChatbotBtn) closeChatbotBtn.addEventListener('click', hideChatbot);

    const chatInput = document.getElementById('chat-input');
    const sendBtn = document.getElementById('send-chat-btn');

    async function sendMessage() {
        const text = chatInput.value.trim();
        if (!text) return;

        // If quiz is active and current question is short_answer, route to quiz
        if (quizActive && quizIndex < quizQuestions.length && quizQuestions[quizIndex].type === 'short_answer') {
            chatInput.value = '';
            handleChatQuizAnswer(currentQuizCard, text);
            return;
        }

        if (!currentDocumentId) {
            addBotMessage("Please select a website first to ask questions!");
            return;
        }
        chatInput.disabled = true; sendBtn.disabled = true;
        addUserMessage(text); chatInput.value = '';
        const reply = await askQuestion(text);
        addBotMessage(reply);
        chatInput.disabled = false; sendBtn.disabled = false; chatInput.focus();
    }

    if (sendBtn) sendBtn.addEventListener('click', sendMessage);
    if (chatInput) chatInput.addEventListener('keypress', function(e) { if (e.key === 'Enter') { e.preventDefault(); sendMessage(); } });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const miniPopup = document.getElementById('al-mini-chat-popup');
            if (miniPopup && miniPopup.style.display === 'flex') { miniPopup.style.display = 'none'; return; }
            const chatbot = document.getElementById('chatbot-container');
            if (chatbot && chatbot.style.display === 'flex') hideChatbot();
            const iframe = document.getElementById('learning-iframe-container');
            if (iframe && iframe.style.display === 'block') { iframe.style.display = 'none'; document.getElementById('iframe-wrapper').innerHTML = ''; currentDocumentId = null; currentWebsiteId = null; chatHistoryLoaded = false; hideMiniChatbot(); showAllContent(); }
        }
    });

    // MINI CHATBOT
    const miniFloatingBtn = document.getElementById('al-floating-chat-btn');
    const miniPopup = document.getElementById('al-mini-chat-popup');
    const miniMessages = document.getElementById('al-mini-chat-messages');
    const miniInput = document.getElementById('al-mini-chat-input');
    const miniSendBtn = document.getElementById('al-mini-chat-send');
    const miniCloseBtn = document.getElementById('al-mini-chat-close');
    let miniChatOpen = false;
    let miniUnreadCount = 0;

    function showMiniChatbot() {
        if (miniFloatingBtn) miniFloatingBtn.style.display = 'flex';
        if (miniMessages) miniMessages.innerHTML = '';
        miniUnreadCount = 0;
        const notif = document.getElementById('al-chat-notif');
        if (notif) notif.style.display = 'none';
    }

    function hideMiniChatbot() {
        if (miniFloatingBtn) miniFloatingBtn.style.display = 'none';
        if (miniPopup) miniPopup.style.display = 'none';
        miniChatOpen = false;
    }

    function toggleMiniChat() {
        if (!miniPopup) return;
        if (miniPopup.style.display === 'none' || miniPopup.style.display === '') {
            miniPopup.style.display = 'flex';
            miniChatOpen = true;
            miniUnreadCount = 0;
            const notif = document.getElementById('al-chat-notif');
            if (notif) notif.style.display = 'none';
            if (miniMessages && miniMessages.children.length === 0) {
                const title = currentWebsiteTitle || 'this website';
                addMiniBotMsg(`Hi! Ask me anything about "${title}"`);
            }
            if (miniInput) miniInput.focus();
        } else {
            miniPopup.style.display = 'none';
            miniChatOpen = false;
        }
    }

    function getMiniTimeStr(date) {
        const d = date || new Date();
        return d.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    }

    function addMiniUserMsg(text, ts) {
        if (!miniMessages) return;
        const div = document.createElement('div');
        div.className = 'al-mini-msg al-mini-msg-user';
        div.innerHTML = `<p>${escapeHtml(text)}</p><span class="al-mini-msg-time">${getMiniTimeStr(ts)}</span>`;
        miniMessages.appendChild(div);
        miniMessages.scrollTop = miniMessages.scrollHeight;
    }

    function addMiniBotMsg(text, ts) {
        if (!miniMessages) return;
        const div = document.createElement('div');
        div.className = 'al-mini-msg al-mini-msg-bot';
        div.innerHTML = `<p style="white-space:pre-line;">${text}</p><span class="al-mini-msg-time">${getMiniTimeStr(ts)}</span>`;
        miniMessages.appendChild(div);
        miniMessages.scrollTop = miniMessages.scrollHeight;
    }

    function addMiniTyping() {
        if (!miniMessages) return;
        const div = document.createElement('div');
        div.id = 'mini-typing-indicator';
        div.className = 'al-mini-msg al-mini-msg-bot';
        div.innerHTML = `<div style="display:flex;gap:4px;"><span style="width:7px;height:7px;background:var(--aiw-primary);border-radius:50%;animation:alTyping 1s infinite;"></span><span style="width:7px;height:7px;background:var(--aiw-primary);border-radius:50%;animation:alTyping 1s infinite 0.2s;"></span><span style="width:7px;height:7px;background:var(--aiw-primary);border-radius:50%;animation:alTyping 1s infinite 0.4s;"></span></div>`;
        miniMessages.appendChild(div);
        miniMessages.scrollTop = miniMessages.scrollHeight;
    }

    function removeMiniTyping() { const el = document.getElementById('mini-typing-indicator'); if (el) el.remove(); }

    async function sendMiniMessage() {
        const text = miniInput.value.trim();
        if (!text || !currentDocumentId) return;

        miniInput.disabled = true;
        miniSendBtn.disabled = true;
        addMiniUserMsg(text);
        miniInput.value = '';

        addMiniTyping();
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 25000);
        try {
            const url = `${API_BASE_URL}/wb/student/website/ask?doc_id=${currentDocumentId}&question=${encodeURIComponent(text)}`;
            const response = await fetch(url, { method: 'POST', headers: { 'Authorization': `Bearer ${getAuthToken()}`, 'Content-Type': 'application/json' }, signal: controller.signal });
            clearTimeout(timeoutId);
            removeMiniTyping();
            if (!response.ok) throw new Error(`API error ${response.status}`);
            const data = await response.json();
            const answer = data.answer || "No answer found.";
            addMiniBotMsg(escapeHtml(answer));
            addUserMessage(text);
            addBotMessage(escapeHtml(answer));
            if (!miniChatOpen) {
                miniUnreadCount++;
                const notif = document.getElementById('al-chat-notif');
                if (notif) { notif.style.display = 'flex'; notif.textContent = miniUnreadCount; }
            }
        } catch (err) {
            clearTimeout(timeoutId);
            removeMiniTyping();
            const errMsg = err.name === 'AbortError' ? 'Server timeout. Please try again.' : 'Error connecting to server.';
            addMiniBotMsg(errMsg);
        } finally {
            miniInput.disabled = false;
            miniSendBtn.disabled = false;
            miniInput.focus();
        }
    }

    if (miniFloatingBtn) miniFloatingBtn.addEventListener('click', toggleMiniChat);
    if (miniCloseBtn) miniCloseBtn.addEventListener('click', () => { if (miniPopup) miniPopup.style.display = 'none'; miniChatOpen = false; });
    if (miniSendBtn) miniSendBtn.addEventListener('click', sendMiniMessage);
    if (miniInput) miniInput.addEventListener('keypress', function(e) { if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); sendMiniMessage(); } });

    // ==================== QUIZ RESULT SAVING ====================
    let quizStartTime = null;
    let quizAnswers = [];

    async function saveQuizResults(score, totalQuestions, answers, startTime, endTime, difficulty) {
        try {
            const token = getAuthToken();
            if (!token || !currentWebsiteId) {
                console.warn('Cannot save quiz: No token or website ID');
                return;
            }
            
            const durationSeconds = Math.floor((endTime - startTime) / 1000);
            const scorePercentage = (score / totalQuestions) * 100;
            
            const resultData = {
                website_id: parseInt(currentWebsiteId),
                total_questions: totalQuestions,
                correct_answers: score,
                score_percentage: parseFloat(scorePercentage.toFixed(2)),
                difficulty: difficulty,
                started_at: startTime.toISOString(),
                completed_at: endTime.toISOString(),
                duration_seconds: durationSeconds,
                answers: answers.map(ans => ({
                    question: ans.question,
                    question_type: ans.type,
                    user_answer: ans.userAnswer,
                    correct_answer: ans.correctAnswer,
                    is_correct: ans.isCorrect,
                    time_taken: ans.timeTaken || 0
                }))
            };
            
            console.log('Saving quiz results:', resultData);
            
            const response = await fetch(`${API_BASE_URL}/wb/student/quiz/save-result`, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(resultData)
            });
            
            if (!response.ok) {
                const errorText = await response.text();
                throw new Error(`HTTP ${response.status}: ${errorText}`);
            }
            
            const result = await response.json();
            console.log('Quiz results saved:', result);
            
            if (result.data && result.data.rank) {
                addBotMessage(`🏆 Great job! Your rank: #${result.data.rank} among all your attempts!`);
            }
            
            return result;
            
        } catch (error) {
            console.error('Error saving quiz results:', error);
            addBotMessage(`⚠️ Could not save quiz results: ${error.message}`);
            return null;
        }
    }

    async function showQuizStats() {
        if (!currentWebsiteId) {
            addBotMessage('Please select a website first to view quiz statistics!');
            return;
        }
        
        showChatbot();
        addTypingIndicator();
        
        try {
            const token = getAuthToken();
            const response = await fetch(`${API_BASE_URL}/wb/student/quiz/history/${currentWebsiteId}?limit=10`, {
                headers: { 'Authorization': `Bearer ${token}` }
            });
            
            if (!response.ok) throw new Error(`HTTP ${response.status}`);
            
            const result = await response.json();
            removeTypingIndicator();
            
            if (result.success && result.data) {
                const stats = result.data.statistics;
                const history = result.data.history || [];
                
                let statsHtml = `
                    <div class="al-quiz-stats-card">
                        <div style="font-size: 18px; font-weight: bold; margin-bottom: 12px;">
                            📊 Quiz Performance Report
                        </div>
                        <div class="al-quiz-stats-grid">
                            <div class="al-quiz-stat-item">
                                <div class="al-quiz-stat-value">${stats.average_score || 0}%</div>
                                <div class="al-quiz-stat-label">Average Score</div>
                            </div>
                            <div class="al-quiz-stat-item">
                                <div class="al-quiz-stat-value">${stats.best_score || 0}%</div>
                                <div class="al-quiz-stat-label">Best Score</div>
                            </div>
                            <div class="al-quiz-stat-item">
                                <div class="al-quiz-stat-value">${stats.total_attempts || 0}</div>
                                <div class="al-quiz-stat-label">Total Attempts</div>
                            </div>
                        </div>
                        <div style="margin-top: 12px; font-size: 12px; text-align: center;">
                            Average Time: ${Math.floor((stats.average_duration_seconds || 0) / 60)} min ${(stats.average_duration_seconds || 0) % 60} sec
                        </div>
                    </div>
                `;
                
                if (history.length > 0) {
                    statsHtml += `<div style="margin-top: 12px;"><strong>📝 Recent Attempts:</strong></div>`;
                    history.slice(0, 5).forEach(h => {
                        const date = new Date(h.created_at).toLocaleDateString();
                        statsHtml += `
                            <div style="background: #f5f7fb; padding: 8px 12px; margin: 6px 0; border-radius: 10px; font-size: 12px;">
                                📅 ${date}: ${h.score_percentage}% (${h.correct_answers}/${h.total_questions}) - ${h.difficulty}
                            </div>
                        `;
                    });
                }
                
                try {
                    const weakResponse = await fetch(`${API_BASE_URL}/wb/student/quiz/weak-areas/${currentWebsiteId}`, {
                        headers: { 'Authorization': `Bearer ${token}` }
                    });
                    
                    if (weakResponse.ok) {
                        const weakResult = await weakResponse.json();
                        if (weakResult.success && weakResult.data.weak_areas && weakResult.data.weak_areas.length > 0) {
                            statsHtml += `
                                <div style="margin-top: 16px; background: #fff3e0; padding: 12px; border-radius: 12px;">
                                    <div style="font-weight: bold; margin-bottom: 8px;">🎯 Topics to Improve:</div>
                                    ${weakResult.data.weak_areas.slice(0, 3).map(w => `
                                        <div style="font-size: 12px; margin: 4px 0;">• ${w.question_text.substring(0, 80)}${w.question_text.length > 80 ? '...' : ''} (${Math.round(w.wrong_percentage)}% wrong)</div>
                                    `).join('')}
                                    <div style="font-size: 11px; color: #666; margin-top: 8px;">${weakResult.data.recommendation}</div>
                                </div>
                            `;
                        }
                    }
                } catch (e) {
                    console.warn('Could not fetch weak areas:', e);
                }
                
                addBotMessage(statsHtml);
            } else {
                addBotMessage('No quiz attempts found for this website. Take a quiz first to see your statistics!');
            }
            
        } catch (error) {
            removeTypingIndicator();
            console.error('Error fetching quiz stats:', error);
            addBotMessage(`Could not fetch quiz statistics: ${error.message}`);
        }
    }

    // ==================== IN-CHAT QUIZ ====================
    const generateQuizBtn = document.getElementById('generate-questions-btn');
    let quizActive = false;
    let quizQuestions = [];
    let quizIndex = 0;
    let quizScore = 0;
    let quizDifficulty = 'medium';
    let quizNumQ = 5;
    let currentQuizCard = null;

    function startQuizInChat() {
        if (!currentWebsiteId) {
            addBotMessage('Please select a website first to generate a quiz!');
            return;
        }
        showChatbot();
        quizActive = false;
        
        quizStartTime = null;
        quizAnswers = [];

        const messages = document.getElementById('chat-messages');
        const setupDiv = document.createElement('div');
        setupDiv.className = 'al-msg al-msg-bot';
        setupDiv.innerHTML = `
            <p style="margin:0 0 8px;font-weight:600;">Let's quiz you! Choose your settings:</p>
            <div class="alq-setup">
                <div class="alq-setup-label">Difficulty</div>
                <div class="alq-row" id="alq-diff-row">
                    <span class="alq-pill" data-v="easy">Easy</span>
                    <span class="alq-pill active" data-v="medium">Medium</span>
                    <span class="alq-pill" data-v="hard">Hard</span>
                </div>
                <div class="alq-setup-label">Questions</div>
                <div class="alq-row" id="alq-num-row">
                    <span class="alq-pill" data-v="3">3</span>
                    <span class="alq-pill active" data-v="5">5</span>
                    <span class="alq-pill" data-v="10">10</span>
                </div>
                <button class="alq-go" id="alq-go-btn"><i class="fas fa-play"></i> Start Quiz</button>
            </div>
            <span class="al-msg-time">${getTimeString()}</span>
        `;
        messages.appendChild(setupDiv);
        messages.scrollTop = messages.scrollHeight;

        setupDiv.querySelectorAll('#alq-diff-row .alq-pill').forEach(p => {
            p.addEventListener('click', function() {
                setupDiv.querySelectorAll('#alq-diff-row .alq-pill').forEach(x => x.classList.remove('active'));
                this.classList.add('active');
                quizDifficulty = this.dataset.v;
            });
        });
        setupDiv.querySelectorAll('#alq-num-row .alq-pill').forEach(p => {
            p.addEventListener('click', function() {
                setupDiv.querySelectorAll('#alq-num-row .alq-pill').forEach(x => x.classList.remove('active'));
                this.classList.add('active');
                quizNumQ = parseInt(this.dataset.v);
            });
        });
        setupDiv.querySelector('#alq-go-btn').addEventListener('click', async function() {
            this.disabled = true;
            this.innerHTML = '<i class="fas fa-spinner fa-pulse"></i> Generating...';
            await fetchAndRunQuiz();
        });
    }

    async function fetchAndRunQuiz() {
        addTypingIndicator();
        try {
            const token = getAuthToken();
            const response = await fetch(`${API_BASE_URL}/wb/student/website/generate-questions-from-chats`, {
                method: 'POST',
                headers: { 'Authorization': `Bearer ${token}`, 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    website_id: parseInt(currentWebsiteId),
                    num_questions: quizNumQ,
                    difficulty: quizDifficulty,
                    include_unanswered: true
                })
            });
            removeTypingIndicator();

            if (!response.ok) throw new Error(`HTTP ${response.status}`);
            const result = await response.json();

            if (!result.success || !result.data || !result.data.questions || result.data.questions.length === 0) {
                throw new Error(result.message || 'No questions generated. Chat with the AI first to build history!');
            }

            quizQuestions = result.data.questions;
            quizIndex = 0;
            quizScore = 0;
            quizActive = true;
            
            quizStartTime = new Date();
            quizAnswers = [];

            const ins = result.data.learning_insights;
            if (ins) {
                addBotMessage(`Quiz ready! ${quizQuestions.length} ${quizDifficulty} questions from ${ins.total_chats_analyzed} chats.\nLet's begin!`);
            }
            showQuizQuestion();
        } catch (err) {
            removeTypingIndicator();
            addBotMessage(`Could not generate quiz: ${escapeHtml(err.message)}`);
        }
    }

    function showQuizQuestion() {
        const q = quizQuestions[quizIndex];
        const total = quizQuestions.length;
        const typeLabel = { 'multiple_choice': 'Multiple Choice', 'true_false': 'True / False', 'short_answer': 'Short Answer' };
        const letters = ['A', 'B', 'C', 'D'];

        const messages = document.getElementById('chat-messages');
        const card = document.createElement('div');
        card.className = 'al-msg al-msg-bot';

        let html = `<div class="alq-card">
            <span class="alq-badge">Q${quizIndex + 1}/${total} &middot; ${typeLabel[q.type] || q.type}</span>
            <p class="alq-q">${escapeHtml(q.question)}</p>`;

        if (q.type === 'multiple_choice') {
            html += `<div class="alq-opts">`;
            (q.options || []).forEach((opt, i) => {
                html += `<div class="alq-opt" data-ans="${escapeHtml(opt)}">
                    <span class="alq-letter">${letters[i]}</span>
                    <span>${escapeHtml(opt)}</span>
                </div>`;
            });
            html += `</div>`;
        } else if (q.type === 'true_false') {
            html += `<div class="alq-tf">
                <button class="alq-tf-btn" data-ans="true">True</button>
                <button class="alq-tf-btn" data-ans="false">False</button>
            </div>`;
        }

        html += `</div><span class="al-msg-time">${getTimeString()}</span>`;
        card.innerHTML = html;
        messages.appendChild(card);
        messages.scrollTop = messages.scrollHeight;
        currentQuizCard = card;

        if (q.type === 'multiple_choice') {
            card.querySelectorAll('.alq-opt').forEach(opt => {
                opt.addEventListener('click', function() { handleChatQuizAnswer(card, this.dataset.ans); });
            });
        } else if (q.type === 'true_false') {
            card.querySelectorAll('.alq-tf-btn').forEach(btn => {
                btn.addEventListener('click', function() { handleChatQuizAnswer(card, this.dataset.ans); });
            });
        } else if (q.type === 'short_answer') {
            chatInput.placeholder = 'Type your answer and press Enter...';
            chatInput.focus();
        }
    }

    function handleChatQuizAnswer(card, answer) {
        const q = quizQuestions[quizIndex];
        let correct = false;
        const questionStartTime = performance.now();

        if (q.type === 'short_answer') {
            const keywords = q.correct_answer.toLowerCase().split(/\s+/);
            const ansLower = answer.toLowerCase();
            correct = keywords.some(k => k.length > 3 && ansLower.includes(k));
        } else if (q.type === 'true_false') {
            correct = answer.toLowerCase() === q.correct_answer.toLowerCase();
        } else {
            correct = answer === q.correct_answer;
        }

        if (correct) quizScore++;
        
        quizAnswers.push({
            question: q.question,
            type: q.type,
            userAnswer: answer,
            correctAnswer: q.correct_answer,
            isCorrect: correct,
            timeTaken: Math.floor((performance.now() - questionStartTime) / 1000)
        });

        addUserMessage(answer);

        if (q.type === 'multiple_choice') {
            card.querySelectorAll('.alq-opt').forEach(opt => {
                opt.classList.add('alq-locked');
                if (opt.dataset.ans === q.correct_answer) opt.classList.add('alq-correct');
                else if (opt.dataset.ans === answer && !correct) opt.classList.add('alq-wrong');
            });
        } else if (q.type === 'true_false') {
            card.querySelectorAll('.alq-tf-btn').forEach(btn => {
                btn.classList.add('alq-locked');
                if (btn.dataset.ans === q.correct_answer.toLowerCase()) btn.classList.add('alq-correct');
                else if (btn.dataset.ans === answer && !correct) btn.classList.add('alq-wrong');
            });
        }

        chatInput.placeholder = 'Type your question...';

        let feedback = correct ? '✅ Correct!' : `❌ Wrong. The answer is: ${q.correct_answer}`;
        if (q.explanation) feedback += `\n\n📖 ${q.explanation}`;
        addBotMessage(escapeHtml(feedback));

        quizIndex++;
        if (quizIndex < quizQuestions.length) {
            setTimeout(() => showQuizQuestion(), 600);
        } else {
            const endTime = new Date();
            saveQuizResults(quizScore, quizQuestions.length, quizAnswers, quizStartTime, endTime, quizDifficulty);
            setTimeout(() => showChatQuizResults(), 800);
        }
    }

    function showChatQuizResults() {
        quizActive = false;
        const total = quizQuestions.length;
        const pct = Math.round((quizScore / total) * 100);

        let color, label;
        if (pct >= 80) { color = 'linear-gradient(135deg,var(--aiw-success),#059669)'; label = 'Excellent!'; }
        else if (pct >= 60) { color = 'linear-gradient(135deg,var(--aiw-warning),#d97706)'; label = 'Good Job!'; }
        else if (pct >= 40) { color = 'linear-gradient(135deg,#f97316,#ea580c)'; label = 'Keep Trying!'; }
        else { color = 'linear-gradient(135deg,var(--aiw-danger),#dc2626)'; label = 'Needs Practice'; }

        const messages = document.getElementById('chat-messages');
        const resultDiv = document.createElement('div');
        resultDiv.className = 'al-msg al-msg-bot';
        resultDiv.innerHTML = `
            <div class="alq-result">
                <div class="alq-result-circle" style="background:${color};">
                    <span class="alq-pct">${pct}%</span>
                    <span class="alq-frac">${quizScore}/${total}</span>
                </div>
                <h4>${label}</h4>
                <p>You scored ${quizScore} out of ${total} correctly</p>
                <button class="alq-again"><i class="fas fa-redo"></i> Quiz Again</button>
            </div>
            <span class="al-msg-time">${getTimeString()}</span>
        `;
        messages.appendChild(resultDiv);
        messages.scrollTop = messages.scrollHeight;

        resultDiv.querySelector('.alq-again').addEventListener('click', () => startQuizInChat());
    }

    if (generateQuizBtn) {
        generateQuizBtn.addEventListener('click', () => startQuizInChat());
    }

    function initialize() {
        const aiSection = document.getElementById('ai-section');
        if (aiSection && aiSection.style.display !== 'none') { if (allWebsites.length === 0) fetchWebsites(); }
    }

    const observer = new MutationObserver(initialize);
    const aiSection = document.getElementById('ai-section');
    if (aiSection) observer.observe(aiSection, { attributes: true, attributeFilter: ['style'] });
    setTimeout(initialize, 300);
});
</script>