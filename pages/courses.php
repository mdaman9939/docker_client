<!-- Courses Section -->
<div id="courses-section" class="content-section" style="display: none;">

    <!-- List View (hidden when a book is open) -->
    <div id="courses-list-view">
        <!-- Hero Banner with Study Progress -->
        <div class="courses-hero-banner">
            <div class="courses-hero-top">
                <div class="courses-hero-left">
                    <div class="courses-hero-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="courses-hero-text">
                        <h2>My Books Library</h2>
                        <p>Read, learn, and ask AI-powered questions from your books</p>
                    </div>
                </div>
                <div class="courses-search">
                    <i class="fas fa-search"></i>
                    <input type="text" id="book-search" placeholder="Search books by title, subject...">
                </div>
            </div>

            <!-- Study Progress Summary (inside hero banner) -->
            <div class="courses-hero-stats" id="study-summary-card" style="display: none;">
                <div class="courses-hero-stats-inner" id="study-summary-content"></div>
            </div>
        </div>

        <!-- Loading Spinner -->
        <div id="courses-loading" class="loading-spinner-container" style="display: none;">
            <div class="spinner"></div>
            <p>Loading your books...</p>
        </div>

        <!-- Error Message -->
        <div id="courses-error" class="error-message" style="display: none;"></div>

        <!-- Success Message -->
        <div id="courses-success" class="success-message" style="display: none;"></div>

        <!-- Subject Filters -->
        <div class="subject-filters">
            <button class="subject-filter-btn active" data-subject="all">All Books</button>
            <button class="subject-filter-btn" data-subject="mathematics">📐 Mathematics</button>
            <button class="subject-filter-btn" data-subject="science">🔬 Science</button>
            <button class="subject-filter-btn" data-subject="hindi">📗 Hindi</button>
            <button class="subject-filter-btn" data-subject="english">📘 English</button>
            <button class="subject-filter-btn" data-subject="social">🌍 Social Studies</button>
            <button class="subject-filter-btn" data-subject="sanskrit">🕉️ Sanskrit</button>
            <button class="subject-filter-btn" data-subject="computer">💻 Computer</button>
        </div>

        <!-- Books Grid -->
        <div class="books-grid" id="books-grid">
            <!-- Books will be loaded here dynamically -->
        </div>
    </div>
    
    <!-- Book Reader Container (Hidden by default) -->
    <div id="book-reader-container" style="display: none;">
        <div class="book-reader-header">
            <div>
                <h3 id="reader-book-title">Loading...</h3>
                <p id="reader-book-subject"></p>
            </div>
            <div class="reader-actions">
                <button class="study-stats-btn" id="show-study-stats-btn">
                    <i class="fas fa-chart-bar"></i> Study Stats
                </button>
                <button class="ask-book-btn" id="ask-from-book-btn">
                    <i class="fas fa-robot"></i> Ask AI about this book
                </button>
                <button class="close-reader-btn" id="close-reader-btn">&times;</button>
            </div>
        </div>
        
        <!-- ✨ FLOATING CHATBOT BUTTON ✨ -->
        <button id="floating-chatbot-btn" class="floating-chatbot-btn" title="Ask AI about this book">
            <i class="fas fa-robot"></i>
            <span class="chatbot-notification" id="chatbot-notification" style="display: none;">1</span>
        </button>
        
        <!-- Mini Chatbot Popup -->
        <div id="mini-chatbot-popup" class="mini-chatbot-popup" style="display: none;">
            <div class="mini-chatbot-header">
                <h4><i class="fas fa-robot"></i> Ask AI Assistant</h4>
                <button class="close-mini-chatbot" id="close-mini-chatbot">&times;</button>
            </div>
            <div class="mini-chatbot-messages hide-scrollbar" id="mini-chatbot-messages">
                <!-- Messages will appear here -->
            </div>
            <div class="mini-chatbot-input-area">
                <textarea id="mini-chatbot-input" placeholder="Ask anything about this book..." rows="1"></textarea>
                <button id="send-mini-chatbot-btn">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>

        <!-- Study Stats Panel (Hidden by default) -->
        <div id="study-stats-panel" style="display: none;">
            <div class="stats-panel-header">
                <h4><i class="fas fa-graduation-cap"></i> Your Study Analytics</h4>
                <button class="close-stats-btn" id="close-stats-btn">&times;</button>
            </div>
            <div class="stats-panel-content" id="stats-panel-content">
                <!-- Stats will be loaded here -->
            </div>
        </div>
        
        <!-- PDF Reader Section -->
        <div id="pdf-reader-section">
            <div class="pdf-toolbar">
                <button id="prev-page" disabled><i class="fas fa-chevron-left"></i> Prev</button>
                <span>Page <span id="current-page">1</span> of <span id="total-pages">1</span></span>
                <button id="next-page" disabled>Next <i class="fas fa-chevron-right"></i></button>
                <button id="zoom-in"><i class="fas fa-search-plus"></i></button>
                <button id="zoom-out"><i class="fas fa-search-minus"></i></button>
                <button id="fit-page"><i class="fas fa-compress"></i> Fit</button>
            </div>
            <div class="pdf-viewer">
                <canvas id="pdf-canvas"></canvas>
            </div>
        </div>
        
        <!-- Book Chat Container (Hidden by default) -->
        <div id="book-chat-container" style="display: none;">
            <div class="chat-header">
<h4 style="color: white;">
    <i class="fas fa-robot" style="color: white;"></i> Ask about this book
</h4>                <div class="chat-header-actions">
                    <button class="practice-questions-btn" id="show-practice-questions">
                        <i class="fas fa-question-circle"></i> Practice
                    </button>
                    <button class="close-chat-btn" id="close-book-chat-btn">
                        <i class="fas fa-chevron-left"></i> 
                    </button>
                </div>
            </div>
            
            <!-- Practice Questions Panel (Hidden by default) -->
            <div id="practice-questions-panel" style="display: none;">
                <div class="practice-header">
                    <h5>Practice Questions</h5>
                    <button class="close-practice-btn" id="close-practice-btn">&times;</button>
                </div>
                <div class="practice-controls">
                    <select id="practice-topic-select">
                        <option value="">Select Topic</option>
                    </select>
                    <select id="practice-difficulty">
                        <option value="easy">Easy</option>
                        <option value="medium" selected>Medium</option>
                        <option value="hard">Hard</option>
                    </select>
                    <select id="practice-count">
                        <option value="3">3 Questions</option>
                        <option value="5" selected>5 Questions</option>
                        <option value="10">10 Questions</option>
                    </select>
                    <button id="generate-practice-btn" class="generate-btn">
                        <i class="fas fa-magic"></i> Generate
                    </button>
                </div>
                <div id="practice-questions-container" class="practice-questions-container hide-scrollbar">
                    <!-- Practice questions will appear here -->
                </div>
            </div>
            
            <div class="chat-messages hide-scrollbar" id="book-chat-messages"></div>
            <div class="chat-input-area">
                <textarea id="book-chat-input" placeholder="Ask a question about this book..." rows="2"></textarea>
                <button id="send-book-chat-btn">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- PDF.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
<script>
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';
</script>

<style>
/* ==================== FLOATING CHATBOT STYLES ==================== */
.floating-chatbot-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0 4px 20px rgba(67, 97, 238, 0.4);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    z-index: 9999;
    animation: pulse 2s infinite;
}

.floating-chatbot-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 25px rgba(67, 97, 238, 0.6);
}

.floating-chatbot-btn i {
    font-size: 28px;
}

.chatbot-notification {
    position: absolute;
    top: -5px;
    right: -5px;
    background: #ff4757;
    color: white;
    border-radius: 50%;
    width: 22px;
    height: 22px;
    font-size: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    border: 2px solid white;
}

/* Mini Chatbot Popup */
.mini-chatbot-popup {
    position: fixed;
    bottom: 100px;
    right: 30px;
    width: 350px;
    height: 500px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    z-index: 9998;
    animation: slideInRight 0.3s ease;
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.mini-chatbot-header {
    background: linear-gradient(135deg, #3f66e6, #129695);
    color: white;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.mini-chatbot-header h4 {
    margin: 0;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.close-mini-chatbot {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    line-height: 1;
}

.mini-chatbot-messages {
    flex: 1;
    overflow-y: auto;
    padding: 15px;
    background: #f8f9ff;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.mini-chatbot-input-area {
    display: flex;
    gap: 10px;
    padding: 15px;
    background: white;
    border-top: 1px solid #eee;
}

.mini-chatbot-input-area textarea {
    flex: 1;
    padding: 10px 15px;
    border: 2px solid #e0e0e0;
    border-radius: 25px;
    resize: none;
    font-family: inherit;
    font-size: 14px;
    max-height: 80px;
}

.mini-chatbot-input-area textarea:focus {
    outline: none;
    border-color: #3f66e6;
}

.mini-chatbot-input-area button {
    width: 45px;
    height: 45px;
    border: none;
    background: linear-gradient(135deg, #3f66e6, #129695);
    color: white;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s;
}

.mini-chatbot-input-area button:hover {
    transform: scale(1.1);
}

/* Mini Chat Messages */
.mini-bot-message, .mini-user-message {
    display: flex;
    flex-direction: column;
    max-width: 75%;
}

.mini-user-message {
    align-self: flex-end;
    align-items: flex-end;
}

.mini-bot-message {
    align-self: flex-start;
}

.mini-message-content {
    max-width: 100%;
    padding: 10px 12px;
    border-radius: 15px;
    font-size: 13px;
    line-height: 1.4;
    word-wrap: break-word;
}

.mini-bot-message .mini-message-content {
    background: white;
    color: #333;
    border-radius: 15px 15px 15px 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.mini-user-message .mini-message-content {
    background: linear-gradient(135deg, #3f66e6, #129695);
    color: white;
    border-radius: 15px 15px 5px 15px;
}

.mini-message-time {
    font-size: 9px;
    color: #999;
    margin-top: 2px;
}

/* Responsive for mobile */
@media (max-width: 768px) {
    .mini-chatbot-popup {
        width: 300px;
        height: 450px;
        bottom: 80px;
        right: 15px;
    }
    
    .floating-chatbot-btn {
        width: 50px;
        height: 50px;
        bottom: 20px;
        right: 20px;
    }
    
    .floating-chatbot-btn i {
        font-size: 24px;
    }
}

/* ==================== COURSES/BOOKS CORE STYLES ==================== */

/* Remove padding from section when reader is open */
#courses-section:has(#book-reader-container[style*="block"]) {
    padding: 0 !important;
}
#courses-section:has(#book-reader-container:not([style*="none"])) {
    padding: 0 !important;
}

#courses-list-view {
    padding: 20px 0 30px;
}

/* Hero Banner */
.courses-hero-banner {
    display: flex;
    flex-direction: column;
    background: linear-gradient(135deg, #3f66e6 0%, #129695 50%, #0ed3a2 100%);
    border-radius: 16px;
    padding: 22px 28px;
    margin-bottom: 22px;
    gap: 0;
    color: white;
}

.courses-hero-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 16px;
}

.courses-hero-left {
    display: flex;
    align-items: center;
    gap: 20px;
}

.courses-hero-icon {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.18);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    flex-shrink: 0;
}

.courses-hero-text h2 {
    font-size: 20px;
    font-weight: 700;
    margin: 0 0 4px 0;
    color: white;
}

.courses-hero-text p {
    font-size: 13px;
    margin: 0;
    opacity: 0.85;
}

.courses-search {
    position: relative;
    min-width: 300px;
}
.courses-search i {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255, 255, 255, 0.7);
    font-size: 15px;
}
.courses-search input {
    width: 100%;
    padding: 12px 18px 12px 46px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 30px;
    font-size: 15px;
    transition: all 0.3s;
    box-sizing: border-box;
    background: rgba(255, 255, 255, 0.15);
    color: white;
    backdrop-filter: blur(4px);
}
.courses-search input::placeholder {
    color: rgba(255, 255, 255, 0.65);
}
.courses-search input:focus {
    outline: none;
    border-color: rgba(255, 255, 255, 0.7);
    background: rgba(255, 255, 255, 0.25);
    box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.15);
}

@media (max-width: 768px) {
    .courses-hero-banner {
        padding: 20px 22px;
    }
    .courses-search {
        min-width: 100%;
    }
}

/* Study Stats inside Hero Banner */
.courses-hero-stats {
    margin-top: 18px;
    padding-top: 18px;
    border-top: 1px solid rgba(255,255,255,0.15);
    animation: slideDown 0.3s ease;
}

@keyframes slideDown {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

.courses-hero-stats-inner {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 12px;
}

.hero-stat-item {
    text-align: center;
    padding: 14px 10px;
    background: rgba(255,255,255,0.12);
    border-radius: 12px;
    backdrop-filter: blur(4px);
    transition: background 0.2s;
}
.hero-stat-item:hover {
    background: rgba(255,255,255,0.2);
}

.hero-stat-value {
    font-size: 26px;
    font-weight: 800;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 4px;
}

.hero-stat-label {
    font-size: 11px;
    color: rgba(255,255,255,0.75);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 500;
}

@media (max-width: 600px) {
    .courses-hero-stats-inner {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Subject Filters */
.subject-filters {
    display: flex;
    gap: 8px;
    margin-bottom: 24px;
    flex-wrap: wrap;
    background: transparent;
    padding: 0;
    border-radius: 0;
    box-shadow: none;
}
.subject-filter-btn {
    padding: 8px 18px;
    border: 1.5px solid #e0e4ea;
    background: #fff;
    border-radius: 20px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.15s;
    color: var(--text-dark, #2b2d42);
    font-size: 12px;
    font-family: 'Poppins', sans-serif;
}
.subject-filter-btn:hover {
    border-color: var(--primary-blue, #3f66e6);
    color: var(--primary-blue, #3f66e6);
}
.subject-filter-btn.active {
    background: var(--primary-blue, #3f66e6);
    color: white;
    border-color: var(--primary-blue, #3f66e6);
}

/* Books Grid */
.books-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 25px;
    margin-bottom: 40px;
}

/* Book Card */
.book-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    transition: transform 0.25s, box-shadow 0.25s;
    cursor: pointer;
    position: relative;
    display: flex;
    flex-direction: column;
    border: 1.5px solid transparent;
}
.book-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(67,97,238,0.12);
    border-color: rgba(67,97,238,0.15);
}
.book-cover {
    height: 180px;
    background-size: cover;
    background-position: center;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}
.book-cover-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.6));
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
}
.book-card:hover .book-cover-overlay {
    opacity: 1;
}
.read-book-btn {
    background: white;
    color: #3f66e6;
    border: none;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: 600;
    cursor: pointer;
    transform: translateY(20px);
    transition: transform 0.3s;
}
.book-card:hover .read-book-btn {
    transform: translateY(0);
}
.book-subject-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background: rgba(255,255,255,0.92);
    backdrop-filter: blur(4px);
    padding: 4px 12px;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 600;
    color: #3f66e6;
    display: flex;
    align-items: center;
    gap: 5px;
}
.book-class-badge {
    position: absolute;
    bottom: 12px;
    left: 12px;
    background: rgba(67,97,238,0.85);
    backdrop-filter: blur(4px);
    color: white;
    padding: 4px 12px;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 5px;
}
.book-info {
    padding: 16px 18px;
    flex: 1;
}
.book-title {
    font-size: 15px;
    font-weight: 700;
    color: var(--text-dark, #2b2d42);
    margin: 0 0 6px 0;
    line-height: 1.35;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.book-author {
    color: var(--text-light, #8d99ae);
    font-size: 12px;
    margin: 0 0 8px 0;
    display: flex;
    align-items: center;
    gap: 5px;
}
.book-description {
    color: var(--text-light, #8d99ae);
    font-size: 12px;
    line-height: 1.5;
    margin: 0 0 12px 0;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.book-meta {
    display: flex;
    gap: 14px;
    font-size: 11px;
    color: var(--text-light, #8d99ae);
}
.book-meta span {
    display: flex;
    align-items: center;
    gap: 4px;
}
.book-progress {
    padding: 12px 18px;
    background: #f8f9fb;
    border-top: 1px solid #f0f1f5;
}
.progress-bar {
    height: 5px;
    background: #eef0f4;
    border-radius: 3px;
    overflow: hidden;
    margin-bottom: 6px;
}
.progress-fill {
    height: 100%;
    background: linear-gradient(90deg, #3f66e6, #0ed3a2);
    border-radius: 3px;
    transition: width 0.5s ease;
}
.progress-text {
    font-size: 11px;
    color: var(--text-light, #8d99ae);
    display: flex;
    justify-content: space-between;
}

/* Book cover emoji placeholder */
.book-cover-emoji {
    font-size: 56px;
    filter: drop-shadow(0 4px 12px rgba(0,0,0,0.25));
    z-index: 1;
    pointer-events: none;
}

/* Empty state */
.empty-books {
    grid-column: 1 / -1;
    text-align: center;
    padding: 64px 20px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
}
.empty-books-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #e8edff, #dff5ef);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 34px;
    color: #3f66e6;
}
.empty-books h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 8px;
}
.empty-books p {
    color: #888;
    font-size: 14px;
    margin: 4px 0;
}

/* Book Reader Container */
#book-reader-container {
    margin: 0;
    background: white;
    border-radius: 0;
    box-shadow: none;
    overflow: hidden;
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: column;
    height: calc(100vh - 80px);
}
.book-reader-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 14px 20px;
    background: linear-gradient(135deg, #3f66e6, #129695);
    color: white;
    flex-shrink: 0;
}
.book-reader-header h3 {
    margin: 0 0 3px 0;
    font-size: 18px;
}
.book-reader-header p {
    margin: 0;
    font-size: 12px;
    opacity: 0.9;
}
.reader-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}
.study-stats-btn, .ask-book-btn {
    background: rgba(255,255,255,0.15);
    color: #fff;
    border: 1.5px solid rgba(255,255,255,0.35);
    padding: 8px 16px;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    backdrop-filter: blur(4px);
    align-items: center;
    gap: 8px;
    transition: all 0.3s;
}
.study-stats-btn:hover, .ask-book-btn:hover {
    background: rgba(255,255,255,0.25);
    transform: translateY(-1px);
}
.close-reader-btn {
    background: rgba(255,255,255,0.1);
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
    line-height: 1;
    width: 34px;
    height: 34px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.15s;
}
.close-reader-btn:hover {
    background: rgba(255,255,255,0.25);
}

/* Study Stats Panel */
#study-stats-panel {
    background: #f8f9fb;
    border-bottom: 1px solid #f0f1f5;
    padding: 18px 20px;
    animation: slideDown 0.3s ease;
    flex-shrink: 0;
    max-height: 260px;
    overflow-y: auto;
}

.stats-panel-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.stats-panel-header h4 {
    margin: 0;
    color: #333;
}

.close-stats-btn {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #666;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.stats-card {
    background: white;
    border-radius: 12px;
    padding: 15px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.stats-card h5 {
    margin: 0 0 10px 0;
    color: #666;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.stats-number {
    font-size: 32px;
    font-weight: 700;
    color: #3f66e6;
}

.topic-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.topic-tag {
    background: #e6e9ff;
    color: #3f66e6;
    padding: 4px 10px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
}

.topic-tag.mastered {
    background: #d4edda;
    color: #155724;
}

.topic-tag.learning {
    background: #fff3cd;
    color: #856404;
}

.streak-badge {
    background: linear-gradient(135deg, #ff6b6b, #ff8e8e);
    color: white;
    padding: 2px 8px;
    border-radius: 12px;
    font-size: 12px;
    margin-left: 5px;
}

/* PDF Reader Section */
#pdf-reader-section {
    display: flex;
    flex-direction: column;
    background: #f0f1f5;
    overflow: hidden;
    flex: 1;
    min-height: 0;
    width: 100%;
    position: relative;
    z-index: 1;
}
.pdf-toolbar {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 8px 14px;
    background: #fff;
    border-bottom: 1px solid #eef0f4;
    flex-shrink: 0;
    flex-wrap: wrap;
    font-size: 13px;
}
.pdf-toolbar button {
    background: none;
    border: 1.5px solid #e0e4ea;
    padding: 6px 12px;
    border-radius: 8px;
    cursor: pointer;
    color: var(--text-dark, #2b2d42);
    transition: all 0.15s;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
}
.pdf-toolbar button:hover:not(:disabled) {
    background: #eef2ff;
    color: #3f66e6;
    border-color: #3f66e6;
}
.pdf-toolbar button:disabled {
    opacity: 0.3;
    cursor: not-allowed;
}
.pdf-toolbar span {
    font-size: 13px;
    color: var(--text-dark, #2b2d42);
    font-weight: 500;
}
#page-num {
    margin: 0 6px;
    color: #333;
    font-weight: 600;
}
.pdf-viewer {
    flex: 1;
    overflow-y: auto;
    overflow-x: hidden;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 0;
    background: #e8eaef;
    min-height: 0;
}
#pdf-canvas {
    box-shadow: none;
    background: white;
    width: 100%;
    max-width: 100%;
    height: auto;
    display: block;
}

/* Book Chat Container */
#book-chat-container {
    display: none;
    flex: 1;
    min-height: 0;
    background: white;
    flex-direction: column;
    width: 100%;
    position: relative;
    z-index: 9999;
    border-top: none;
}
.chat-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 20px;
    background: linear-gradient(135deg, #3f66e6, #129695);
    border-bottom: none;
    flex-shrink: 0;
}
.chat-header h4 {
    margin: 0;
    color: #fff;
    font-size: 15px;
}
.chat-header-actions {
    display: flex;
    gap: 10px;
}
.practice-questions-btn {
    background: rgba(255,255,255,0.15);
    color: #fff;
    border: 1.5px solid rgba(255,255,255,0.3);
    padding: 7px 14px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 5px;
    backdrop-filter: blur(4px);
    transition: background 0.15s;
}
.practice-questions-btn:hover { background: rgba(255,255,255,0.25); }
.close-chat-btn {
    background: rgba(255,255,255,0.1);
    border: none;
    color: #fff;
    font-size: 14px;
    cursor: pointer;
    padding: 6px 10px;
    border-radius: 8px;
    transition: background 0.15s;
}
.close-chat-btn:hover {
    background: rgba(255,255,255,0.2);
}

/* Practice Questions Panel */
#practice-questions-panel {
    flex: 1;
    min-height: 0;
    overflow-y: auto;
    background: #f8f9fb;
    border-bottom: none;
    padding: 20px 24px;
    animation: slideDown 0.3s ease;
    display: flex;
    flex-direction: column;
}

.practice-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;
    flex-shrink: 0;
}

.practice-header h5 {
    margin: 0;
    color: var(--text-dark, #2b2d42);
    font-size: 17px;
    font-weight: 700;
}

.close-practice-btn {
    background: none;
    border: none;
    font-size: 20px;
    cursor: pointer;
    color: var(--text-light, #8d99ae);
    transition: color 0.15s;
}
.close-practice-btn:hover { color: var(--accent-red, #ef476f); }

.practice-controls {
    display: flex;
    gap: 10px;
    margin-bottom: 18px;
    flex-wrap: wrap;
    flex-shrink: 0;
}

.practice-controls select, .practice-controls button {
    padding: 9px 14px;
    border: 1.5px solid #e0e4ea;
    border-radius: 10px;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
}
.practice-controls select:focus { border-color: var(--primary-blue, #3f66e6); outline: none; }

.practice-controls select {
    flex: 1;
    min-width: 140px;
    background: #fff;
    color: var(--text-dark, #2b2d42);
    cursor: pointer;
}

.generate-btn {
    background: linear-gradient(135deg, #3f66e6, #129695);
    color: white;
    border: none !important;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
    font-weight: 600;
    transition: transform 0.15s, box-shadow 0.15s;
}
.generate-btn:hover { transform: translateY(-1px); box-shadow: 0 4px 14px rgba(67,97,238,0.3); }

.practice-questions-container {
    flex: 1;
    overflow-y: auto;
    min-height: 0;
}

.practice-question-card {
    background: #fff;
    border-radius: 12px;
    padding: 18px 20px;
    margin-bottom: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.04);
    border: 1px solid #f0f1f5;
}

.question-text {
    font-weight: 600;
    margin-bottom: 12px;
    color: var(--text-dark, #2b2d42);
    font-size: 14px;
    line-height: 1.5;
}

.question-options {
    margin: 10px 0;
    padding-left: 10px;
}

.question-option {
    margin-bottom: 8px;
    color: var(--text-dark, #2b2d42);
    font-size: 13px;
    padding: 10px 14px;
    border-radius: 8px;
    background: #f8f9fb;
    cursor: pointer;
    transition: all 0.2s;
    border: 2px solid transparent;
    position: relative;
}
.question-option:hover { background: #eef2ff; border-color: #c7d2fe; }
.question-option.pq-correct { background: #ecfdf5; border-color: #06d6a0; color: #065f46; }
.question-option.pq-wrong { background: #fef2f2; border-color: #ef476f; color: #991b1b; }
.question-option.pq-locked { pointer-events: none; cursor: default; }
.question-option.pq-correct::after { content: '✓'; position: absolute; right: 14px; color: #06d6a0; font-weight: 700; }
.question-option.pq-wrong::after { content: '✗'; position: absolute; right: 14px; color: #ef476f; font-weight: 700; }

.correct-answer {
    color: #06d6a0;
    font-weight: 600;
    margin-top: 12px;
    padding-top: 12px;
    border-top: 1px solid #f0f1f5;
    font-size: 13px;
    display: none;
}
.correct-answer.pq-show { display: block; }
.pq-explanation { margin-top: 10px; font-size: 12px; color: #666; display: none; }
.pq-explanation.pq-show { display: block; }
.pq-show-answer-btn { background: #eef2ff; color: var(--primary-blue, #3f66e6); font-weight: 500; text-align: center; }

/* Chat Messages */
.chat-messages {
    flex: 1;
    overflow-y: auto;
    padding: 20px 24px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    background: #f8f9fb;
    min-height: 0;
}

/* Bot messages - Left aligned with 65% width */
.bot-message {
    display: flex;
    justify-content: flex-start;
    margin-right: auto;
    max-width: 65%;
    min-width: 200px;
}

/* User messages - Right aligned with 65% width */
.user-message {
    display: flex;
    justify-content: flex-end;
    margin-left: auto;
    max-width: 65%;
    min-width: 100px;
}

.message-content {
    max-width: 100%;
    padding: 12px 16px;
    border-radius: 18px;
    font-size: 14px;
    line-height: 1.5;
    word-wrap: break-word;
    width: fit-content;
}

.bot-message .message-content {
    background: white;
    color: #333;
    border-radius: 18px 18px 18px 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.user-message .message-content {
    background: linear-gradient(135deg, #3f66e6, #129695);
    color: white;
    border-radius: 18px 18px 5px 18px;
}

.chat-input-area {
    display: flex;
    gap: 10px;
    padding: 14px 20px;
    background: white;
    border-top: 1px solid #f0f1f5;
    flex-shrink: 0;
}
#book-chat-input {
    flex: 1;
    padding: 10px 16px;
    border: 1.5px solid #e0e4ea;
    border-radius: 12px;
    resize: none;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    transition: border-color 0.2s;
    background: #f8f9fb;
}
#book-chat-input:focus {
    outline: none;
    border-color: #3f66e6;
    background: #fff;
}
#send-book-chat-btn {
    width: 42px;
    height: 42px;
    border: none;
    background: linear-gradient(135deg, #3f66e6, #129695);
    color: white;
    border-radius: 12px;
    cursor: pointer;
    transition: transform 0.15s, box-shadow 0.15s;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
#send-book-chat-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 14px rgba(67,97,238,0.3);
}

/* Typing Indicator */
.typing-indicator {
    display: flex;
    gap: 4px;
    padding: 12px 16px;
    background: white;
    border-radius: 18px;
    width: fit-content;
}
.typing-indicator span {
    width: 8px;
    height: 8px;
    background: #3f66e6;
    border-radius: 50%;
    animation: typing 1s infinite;
}
.typing-indicator span:nth-child(2) {
    animation-delay: 0.2s;
}
.typing-indicator span:nth-child(3) {
    animation-delay: 0.4s;
}
@keyframes typing {
    0%, 60%, 100% { transform: translateY(0); opacity: 0.6; }
    30% { transform: translateY(-10px); opacity: 1; }
}

/* Empty State */
.empty-books {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 20px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}
.empty-books i {
    font-size: 60px;
    color: #ddd;
    margin-bottom: 20px;
}
.empty-books h3 {
    font-size: 24px;
    color: #333;
    margin: 0 0 10px 0;
}
.empty-books p {
    color: #666;
    margin: 0 0 30px 0;
}
.add-books-btn {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: white;
    border: none;
    padding: 12px 30px;
    border-radius: 30px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
}
.add-books-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(67,97,238,0.3);
}

/* Chat History Indicator */
.chat-history-indicator {
    position: absolute;
    top: 15px;
    left: 15px;
    background: #06d6a0;
    color: white;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(6, 214, 160, 0.7);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(6, 214, 160, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(6, 214, 160, 0);
    }
}

.chat-separator {
    text-align: center;
    margin: 15px 0;
    position: relative;
}
.chat-separator::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(to right, transparent, #3f66e6, transparent);
    z-index: 1;
}
.chat-separator span {
    background: #f5f7fb;
    padding: 0 15px;
    color: #3f66e6;
    font-size: 12px;
    font-weight: 600;
    position: relative;
    z-index: 2;
}

.message-time {
    font-size: 10px;
    color: #999;
    margin-top: 4px;
    align-self: flex-end;
}

.user-message .message-time {
    color: rgba(255,255,255,0.7);
}

/* Hide scrollbar for Chrome, Safari and Opera */
.hide-scrollbar::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.hide-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .bot-message, .user-message {
        max-width: 85%;
    }
    .book-reader-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        padding: 12px 16px;
    }
    .reader-actions {
        width: 100%;
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }
    .study-stats-btn, .ask-book-btn {
        flex: 1;
        justify-content: center;
        font-size: 11px;
        padding: 7px 12px;
    }
}

@media (max-width: 480px) {
    .bot-message, .user-message {
        max-width: 92%;
    }
    .subject-filter-btn {
        padding: 8px 15px;
        font-size: 14px;
    }
    .pdf-toolbar button {
        padding: 5px 8px;
        font-size: 11px;
    }
}

@media (max-width: 992px) {
    .subject-filters {
        border-radius: 20px;
        padding: 15px;
    }
    .courses-header {
        flex-direction: column;
        align-items: stretch;
    }
    .courses-search {
        min-width: auto;
    }
    .books-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    }
    .pdf-toolbar {
        justify-content: center;
    }
}
</style>

<script>
// Courses Section - Complete with Study Analytics Integration
(function() {
    console.log("=== Courses Section Script Initialized ===");
   
    // ==================== CONFIGURATION ====================
    // ✅ FIX 1: API_BASE_URL without /api for file paths
    const API_BASE_URL = CONFIG.API_BASE_URL;  
    const API_URL = CONFIG.API_BASE_URL;  
    
    
    const ENDPOINTS = {
        LOGIN: `${API_URL}/login`,
        BOOKS: `${API_URL}/student/books`,
        DOCUMENTS: `${API_URL}/list-documents`,
        SWITCH_DOC: (docId) => `${API_URL}/switch-document/${docId}`,
        ASK: `${API_URL}/ask`,
        DOCUMENT_CHATS: (userId, docId) => `${API_URL}/get-document-chats/${userId}/${docId}`,
        USER_CHATS: (userId) => `${API_URL}/get-user-chats/${userId}`,
        DOCUMENT_ID: (bookId) => `${API_URL}/get-document-id/${bookId}`,
        DOCUMENT_STUDIED_TOPICS: (userId, docId) => `${API_URL}/get-document-studied-topics/${userId}/${docId}`,
        BOOK_STUDIED_TOPICS: (userId, bookId) => `${API_URL}/get-book-studied-topics/${userId}/${bookId}`,
        TOPIC_DETAILS: (userId, docId, topic) => `${API_URL}/get-topic-details/${userId}/${docId}?topic=${encodeURIComponent(topic)}`,
        STUDY_STREAK: (userId) => `${API_URL}/get-study-streak/${userId}`,
        GENERATE_QUESTIONS: `${API_URL}/generate-questions`
    };

    // ==================== DOM ELEMENTS ====================
    const elements = {
        section: document.getElementById('courses-section'),
        loading: document.getElementById('courses-loading'),
        grid: document.getElementById('books-grid'),
        listView: document.getElementById('courses-list-view'),
        error: document.getElementById('courses-error'),
        success: document.getElementById('courses-success'),
        search: document.getElementById('book-search'),
        filters: document.querySelector('.subject-filters'),
        filterBtns: document.querySelectorAll('.subject-filter-btn'),
        reader: document.getElementById('book-reader-container'),
        readerTitle: document.getElementById('reader-book-title'),
        readerSubject: document.getElementById('reader-book-subject'),
        chatMessages: document.getElementById('book-chat-messages'),
        chatContainer: document.getElementById('book-chat-container'),
        pdfSection: document.getElementById('pdf-reader-section'),
        chatInput: document.getElementById('book-chat-input'),
        sendBtn: document.getElementById('send-book-chat-btn'),
        canvas: document.getElementById('pdf-canvas'),
        totalPages: document.getElementById('total-pages'),
        currentPage: document.getElementById('current-page'),
        prevBtn: document.getElementById('prev-page'),
        nextBtn: document.getElementById('next-page'),
        zoomIn: document.getElementById('zoom-in'),
        zoomOut: document.getElementById('zoom-out'),
        fitPage: document.getElementById('fit-page'),
        closeReaderBtn: document.getElementById('close-reader-btn'),
        askFromBookBtn: document.getElementById('ask-from-book-btn'),
        closeBookChatBtn: document.getElementById('close-book-chat-btn'),
        studySummaryCard: document.getElementById('study-summary-card'),
        studySummaryContent: document.getElementById('study-summary-content'),
        closeSummaryBtn: document.getElementById('close-study-summary'),
        studyStatsPanel: document.getElementById('study-stats-panel'),
        statsPanelContent: document.getElementById('stats-panel-content'),
        closeStatsBtn: document.getElementById('close-stats-btn'),
        showStatsBtn: document.getElementById('show-study-stats-btn'),
        practiceQuestionsPanel: document.getElementById('practice-questions-panel'),
        practiceQuestionsContainer: document.getElementById('practice-questions-container'),
        practiceTopicSelect: document.getElementById('practice-topic-select'),
        practiceDifficulty: document.getElementById('practice-difficulty'),
        practiceCount: document.getElementById('practice-count'),
        generatePracticeBtn: document.getElementById('generate-practice-btn'),
        showPracticeBtn: document.getElementById('show-practice-questions'),
        closePracticeBtn: document.getElementById('close-practice-btn'),
        floatingChatBtn: document.getElementById('floating-chatbot-btn'),
        miniChatPopup: document.getElementById('mini-chatbot-popup'),
        miniChatMessages: document.getElementById('mini-chatbot-messages'),
        miniChatInput: document.getElementById('mini-chatbot-input'),
        miniSendBtn: document.getElementById('send-mini-chatbot-btn'),
        miniCloseBtn: document.getElementById('close-mini-chatbot'),
        chatbotNotification: document.getElementById('chatbot-notification')
    };

    // ==================== STATE ====================
    let state = {
        allBooks: [],
        currentSubject: 'all',
        searchTerm: '',
        pdfDoc: null,
        pageNum: 1,
        pageRendering: false,
        pageNumPending: null,
        scale: 1.5,
        currentBook: null,
        currentDocId: null,
        isSendingMessage: false,
        isLoading: false,
        bookHistoryCache: {},
        studyStatsCache: {},
        studiedTopics: null,
        studyStreak: null,
        isMiniChatOpen: false,
        unreadCount: 0,
        useAutoFit: true
    };

    // ==================== AUTH HELPERS ====================
    const auth = {
        getToken: () => localStorage.getItem('access_token'),
        getUserId: () => localStorage.getItem('user_id') || '17',
        getUserData: () => {
            try {
                return JSON.parse(localStorage.getItem('user_data') || '{}');
            } catch {
                return {};
            }
        },
       
        isAuthenticated: () => {
            const token = auth.getToken();
            if (!token) return false;
           
            const expiry = localStorage.getItem('token_expiry');
            if (expiry && new Date().getTime() > parseInt(expiry)) {
                auth.logout();
                return false;
            }
            return true;
        },

        logout: () => {
            localStorage.clear();
            window.location.href = CONFIG.PAGES.LOGIN;
        },

        testLogin: async () => {
            try {
                const response = await fetch(ENDPOINTS.LOGIN, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        email: 'aman.m@superaip.com',
                        password: '123456'
                    })
                });

                const data = await response.json();
                
                if (data.success) {
                    localStorage.setItem('access_token', data.data.access_token);
                    localStorage.setItem('refresh_token', data.data.refresh_token);
                    localStorage.setItem('token_expiry', Date.now() + (data.data.expires_in * 1000));
                    localStorage.setItem('user_id', data.data.user.id);
                    localStorage.setItem('user_data', JSON.stringify(data.data.user));
                    
                    console.log('✅ Test login successful');
                    return true;
                }
                return false;
            } catch (error) {
                console.error('Test login failed:', error);
                return false;
            }
        }
    };

    // ==================== UI HELPERS ====================
    const ui = {
        showError: (message) => {
            if (!elements.error) return;
            elements.error.style.display = 'block';
            elements.error.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
            setTimeout(() => { elements.error.style.display = 'none'; }, 5000);
        },

        showSuccess: (message) => {
            if (!elements.success) return;
            elements.success.style.display = 'block';
            elements.success.innerHTML = `<i class="fas fa-check-circle"></i> ${message}`;
            setTimeout(() => { elements.success.style.display = 'none'; }, 3000);
        },

        setLoading: (isLoading, message = 'Loading...') => {
            state.isLoading = isLoading;
            if (elements.loading) {
                elements.loading.style.display = isLoading ? 'block' : 'none';
                if (isLoading && elements.loading.querySelector('p')) {
                    elements.loading.querySelector('p').textContent = message;
                }
            }
            if (elements.grid) {
                elements.grid.style.display = isLoading ? 'none' : 'grid';
            }
        },

        fixPath: (path) => path ? path.replace(/\\/g, '/') : null,

        escapeHtml: (text) => {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        },

        formatTime: (timestamp) => {
            const date = new Date(timestamp);
            const now = new Date();
            const diffMs = now - date;
            const diffMins = Math.floor(diffMs / 60000);
            const diffHours = Math.floor(diffMs / 3600000);
            const diffDays = Math.floor(diffMs / 86400000);
            
            if (diffMins < 1) return 'Just now';
            if (diffMins < 60) return `${diffMins} min ago`;
            if (diffHours < 24) return `${diffHours} hour${diffHours > 1 ? 's' : ''} ago`;
            if (diffDays < 7) return `${diffDays} day${diffDays > 1 ? 's' : ''} ago`;
            return date.toLocaleDateString();
        }
    };

    // ==================== API FUNCTIONS ====================
    const api = {
        async fetchWithAuth(url, options = {}) {
            const token = auth.getToken();
            
            if (!token) {
                const loggedIn = await auth.testLogin();
                if (!loggedIn) {
                    throw new Error('Not authenticated');
                }
            }

            const response = await fetch(url, {
                ...options,
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('access_token')}`,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    ...options.headers
                }
            });

            if (response.status === 401) {
                auth.logout();
                throw new Error('Session expired');
            }
            
            return response;
        },

        async loadBooks() {
            ui.setLoading(true, 'Loading your books...');

            try {
                const response = await api.fetchWithAuth(ENDPOINTS.BOOKS);
                const data = await response.json();

                if (data.success && data.books) {
                    state.allBooks = data.books.map(book => ({
                        ...book,
                        // ✅ FIX 2: PDF path sahi kiya - without /api
                        cover_image: book.cover_image ? `${API_BASE_URL}${ui.fixPath(book.cover_image)}` : null,
                        pdf_path: book.pdf_path ? `${API_BASE_URL}${ui.fixPath(book.pdf_path)}` : null
                    }));
                   
                    await loadDocumentIdsForBooks();
                    filterAndDisplay();
                    ui.showSuccess(`Found ${state.allBooks.length} books`);
                    
                    await loadStudyStreak();
                } else {
                    state.allBooks = [];
                    filterAndDisplay();
                }
            } catch (error) {
                console.error('Error loading books:', error);
                ui.showError('Failed to load books: ' + error.message);
                state.allBooks = [];
                filterAndDisplay();
            } finally {
                ui.setLoading(false);
            }
        },

        async getDocumentIdForBook(bookId) {
            try {
                const response = await api.fetchWithAuth(ENDPOINTS.DOCUMENT_ID(bookId));
                const data = await response.json();
                
                if (data.success && data.document_id) {
                    console.log(`✅ Found document ID: ${data.document_id} for book ${bookId}`);
                    return data.document_id;
                }
                
                const docsResponse = await api.fetchWithAuth(ENDPOINTS.DOCUMENTS);
                const docsData = await docsResponse.json();
                
                const matchingDoc = docsData.documents?.find(doc => 
                    doc.filename?.includes(`book_${bookId}.`) || 
                    doc.filename?.includes(`book_${bookId}_`)
                );
                
                if (matchingDoc) {
                    console.log(`✅ Found document via fallback: ${matchingDoc.id} for book ${bookId}`);
                    return matchingDoc.id;
                }
                
                console.log(`❌ No document found for book ${bookId}`);
                return null;
                
            } catch (error) {
                console.error('Error getting document ID:', error);
                return null;
            }
        },

        async switchToDocument(docId) {
            if (!docId) return false;
           
            try {
                const response = await api.fetchWithAuth(ENDPOINTS.SWITCH_DOC(docId), {
                    method: 'POST'
                });
                const data = await response.json();
                console.log('Switch document response:', data);
                return data.is_loaded === true;
            } catch (error) {
                console.error('Error switching document:', error);
                return false;
            }
        },

        async askQuestion(question, userId, docId = null) {
            try {
                let url = `${ENDPOINTS.ASK}?question=${encodeURIComponent(question)}&user_id=${encodeURIComponent(userId)}&save_to_history=true`;
                if (docId) {
                    url += `&doc_id=${encodeURIComponent(docId)}`;
                }

                console.log('Asking question:', url);

                const response = await api.fetchWithAuth(url, { 
                    method: 'POST',
                    headers: { 'accept': 'application/json' }
                });
                
                const data = await response.json();
                console.log('Ask response:', data);
               
                return {
                    success: data.success !== false,
                    answer: data.answer || data.message || "I couldn't find an answer.",
                    document_id: data.document_id,
                    chunks_used: data.chunks_used
                };
            } catch (error) {
                console.error('Error asking question:', error);
                return {
                    success: false,
                    answer: `Error: ${error.message}`
                };
            }
        },

        async getDocumentChats(userId, docId, limit = 50) {
            try {
                console.log(`📜 Fetching chats for document: ${docId}`);
                const url = ENDPOINTS.DOCUMENT_CHATS(userId, docId) + `?limit=${limit}`;
                
                const response = await api.fetchWithAuth(url);
                const data = await response.json();
               
                if (data.success) {
                    console.log(`✅ Found ${data.total} chats for document ${docId}`);
                    return data.chats || [];
                } else {
                    return [];
                }
            } catch (error) {
                console.error('Error fetching document chats:', error);
                return [];
            }
        },

        async getDocumentStudiedTopics(userId, docId) {
            try {
                console.log(`📊 Fetching studied topics for document: ${docId}`);
                const url = ENDPOINTS.DOCUMENT_STUDIED_TOPICS(userId, docId) + '?limit=20';
                
                const response = await api.fetchWithAuth(url);
                const data = await response.json();
               
                if (data.success) {
                    console.log(`✅ Found ${data.total_topics} studied topics`);
                    return data;
                } else {
                    return null;
                }
            } catch (error) {
                console.error('Error fetching studied topics:', error);
                return null;
            }
        },

        async getStudyStreak(userId) {
            try {
                const url = ENDPOINTS.STUDY_STREAK(userId);
                const response = await api.fetchWithAuth(url);
                const data = await response.json();
               
                if (data.success) {
                    return data;
                } else {
                    return null;
                }
            } catch (error) {
                console.error('Error fetching study streak:', error);
                return null;
            }
        },

        async generateQuestions(topic, userId, docId, numQuestions = 5, difficulty = 'medium', questionTypes = ['multiple_choice', 'short_answer']) {
            try {
                const url = `${ENDPOINTS.GENERATE_QUESTIONS}?topics_description=${encodeURIComponent(topic)}&num_questions=${numQuestions}&difficulty=${difficulty}&question_types=${questionTypes.join('&question_types=')}&user_id=${userId}&doc_id=${docId}`;
                
                console.log('📡 Calling generate questions API:', url);
                
                const response = await api.fetchWithAuth(url, {
                    method: 'POST'
                });
                
                const data = await response.json();
                console.log('📥 Generate questions response:', data);
                return data;
            } catch (error) {
                console.error('Error generating questions:', error);
                return {
                    success: false,
                    message: error.message
                };
            }
        }
    };

    // ==================== LOAD DOCUMENT IDs ====================
    async function loadDocumentIdsForBooks() {
        for (const book of state.allBooks) {
            try {
                const docId = await api.getDocumentIdForBook(book.id);
                if (docId) {
                    book.document_id = docId;
                }
            } catch (error) {
                console.error(`Error loading doc ID for book ${book.id}:`, error);
            }
        }
    }

    // ==================== STUDY STREAK FUNCTIONS ====================
    async function loadStudyStreak() {
        try {
            const userId = auth.getUserId();
            const streakData = await api.getStudyStreak(userId);
            
            if (streakData && streakData.success) {
                state.studyStreak = streakData;
                displayStudySummary(streakData);
            }
        } catch (error) {
            console.error('Error loading study streak:', error);
        }
    }

    function displayStudySummary(streakData) {
        if (!elements.studySummaryCard || !elements.studySummaryContent) return;

        const streak = streakData.study_streak || {};

        elements.studySummaryContent.innerHTML = `
            <div class="hero-stat-item">
                <div class="hero-stat-value">${streak.current_streak_days || 0}</div>
                <div class="hero-stat-label">Day Streak 🔥</div>
            </div>
            <div class="hero-stat-item">
                <div class="hero-stat-value">${streak.total_study_days || 0}</div>
                <div class="hero-stat-label">Days Studied</div>
            </div>
            <div class="hero-stat-item">
                <div class="hero-stat-value">${streak.total_questions || 0}</div>
                <div class="hero-stat-label">Questions</div>
            </div>
            <div class="hero-stat-item">
                <div class="hero-stat-value">${streak.average_per_day || 0}</div>
                <div class="hero-stat-label">Avg/Day</div>
            </div>
        `;

        elements.studySummaryCard.style.display = 'block';
    }

    // ==================== BOOK STUDIED TOPICS FUNCTIONS ====================
    async function loadBookStudiedTopics() {
        if (!state.currentBook || !state.currentDocId) return null;
        
        try {
            const userId = auth.getUserId();
            const topicsData = await api.getDocumentStudiedTopics(userId, state.currentDocId);
            
            if (topicsData) {
                state.studiedTopics = topicsData;
                displayStudyStats(topicsData);
                populateTopicSelect(topicsData.topic_details || []);
                return topicsData;
            }
        } catch (error) {
            console.error('Error loading studied topics:', error);
        }
        
        return null;
    }

    function displayStudyStats(topicsData) {
        if (!elements.statsPanelContent) return;
        
        const topics = topicsData.topic_details || [];
        const masteredTopics = topics.filter(t => t.question_count >= 3);
        const learningTopics = topics.filter(t => t.question_count < 3 && t.question_count > 0);
        
        let topicsHtml = '';
        if (topics.length > 0) {
            topicsHtml = `
                <div class="stats-grid">
                    <div class="stats-card">
                        <h5><i class="fas fa-check-circle"></i> Mastered Topics</h5>
                        <div class="topic-tags">
                            ${masteredTopics.map(t => `<span class="topic-tag mastered">${t.topic}</span>`).join('') || 'None yet'}
                        </div>
                    </div>
                    <div class="stats-card">
                        <h5><i class="fas fa-book-open"></i> Learning Topics</h5>
                        <div class="topic-tags">
                            ${learningTopics.map(t => `<span class="topic-tag learning">${t.topic}</span>`).join('') || 'None yet'}
                        </div>
                    </div>
                </div>
            `;
        }
        
        elements.statsPanelContent.innerHTML = `
            <div class="stats-grid">
                <div class="stats-card">
                    <h5><i class="fas fa-comments"></i> Total Questions</h5>
                    <div class="stats-number">${topicsData.total_chats || 0}</div>
                </div>
                <div class="stats-card">
                    <h5><i class="fas fa-tags"></i> Topics Covered</h5>
                    <div class="stats-number">${topicsData.total_topics || 0}</div>
                </div>
            </div>
            ${topicsHtml}
        `;
    }

    // ==================== POPULATE TOPIC SELECT ====================
    function populateTopicSelect(topicDetails) {
        if (!elements.practiceTopicSelect) return;
        
        elements.practiceTopicSelect.innerHTML = '';
        
        const defaultOption = document.createElement('option');
        defaultOption.value = '';
        defaultOption.textContent = 'Select Topic';
        elements.practiceTopicSelect.appendChild(defaultOption);
        
        if (!topicDetails || topicDetails.length === 0) {
            const defaultTopicOption = document.createElement('option');
            defaultTopicOption.value = 'general';
            defaultTopicOption.textContent = '📚 General Questions (All Topics)';
            elements.practiceTopicSelect.appendChild(defaultTopicOption);
            return;
        }
        
        topicDetails.forEach(topic => {
            const option = document.createElement('option');
            option.value = topic.topic;
            option.textContent = `${topic.topic} (${topic.question_count} questions)`;
            elements.practiceTopicSelect.appendChild(option);
        });
    }

    // ==================== PRACTICE QUESTIONS FUNCTIONS ====================
    async function generatePracticeQuestions() {
        console.log("🚀 Generate Practice Questions Clicked!");
        
        if (!elements.practiceTopicSelect) {
            ui.showError("Topic select element not found");
            return;
        }
        
        const topic = elements.practiceTopicSelect.value;
        
        if (!topic) {
            ui.showError('Please select a topic');
            return;
        }
        
        if (!state.currentBook) {
            ui.showError('No book selected');
            return;
        }
        
        if (!state.currentDocId) {
            ui.showError('No document found for this book');
            return;
        }
        
        const difficulty = elements.practiceDifficulty.value;
        const numQuestions = parseInt(elements.practiceCount.value);
        
        elements.practiceQuestionsContainer.innerHTML = '<div class="loading-spinner-container"><div class="spinner"></div><p>Generating questions...</p></div>';
        
        try {
            const userId = auth.getUserId();
            const result = await api.generateQuestions(
                topic, userId, state.currentDocId, numQuestions, difficulty
            );
            
            if (result.success && result.data) {
                displayPracticeQuestions(result.data.questions);
                ui.showSuccess(`Generated ${result.data.questions.length} questions!`);
            } else {
                elements.practiceQuestionsContainer.innerHTML = `
                    <div class="error-message" style="display: block;">
                        ${result.message || 'Failed to generate questions'}
                    </div>
                `;
            }
        } catch (error) {
            elements.practiceQuestionsContainer.innerHTML = `
                <div class="error-message" style="display: block;">
                    Error: ${error.message}
                </div>
            `;
        }
    }

    function displayPracticeQuestions(questions) {
        if (!elements.practiceQuestionsContainer) return;

        if (!questions || questions.length === 0) {
            elements.practiceQuestionsContainer.innerHTML = '<p>No questions generated</p>';
            return;
        }

        // Filter out invalid questions (missing question text)
        const validQuestions = questions.filter(q => q.question);

        let html = '';
        validQuestions.forEach((q, index) => {
            const correctAns = (q.correct_answer || q.answer || '').trim();
            const hasOptions = q.options && q.options.length > 0;
            html += `<div class="practice-question-card" data-answered="false">`;
            html += `<div class="question-text">${index + 1}. ${q.question}</div>`;

            if (hasOptions) {
                html += `<div class="question-options">`;
                q.options.forEach(opt => {
                    html += `<div class="question-option" data-correct="${opt.trim() === correctAns}">${opt}</div>`;
                });
                html += `</div>`;
            } else {
                // No options — show a "Show Answer" button
                html += `<div class="question-options">`;
                html += `<div class="question-option pq-show-answer-btn" data-correct="true">👆 Click to reveal answer</div>`;
                html += `</div>`;
            }

            html += `<div class="correct-answer">✅ ${correctAns || 'Answer not available'}</div>`;
            if (q.explanation) {
                html += `<div class="pq-explanation">💡 ${q.explanation}</div>`;
            }
            html += `</div>`;
        });

        elements.practiceQuestionsContainer.innerHTML = html;

        // Click to answer (MCQ options)
        elements.practiceQuestionsContainer.querySelectorAll('.question-option').forEach(opt => {
            opt.addEventListener('click', function() {
                const card = this.closest('.practice-question-card');
                if (card.dataset.answered === 'true') return;
                card.dataset.answered = 'true';

                const isShowBtn = this.classList.contains('pq-show-answer-btn');

                // Lock all options & highlight correct one
                card.querySelectorAll('.question-option').forEach(o => {
                    o.classList.add('pq-locked');
                    if (!isShowBtn && o.dataset.correct === 'true') o.classList.add('pq-correct');
                });

                // For show-answer button, just hide it after click
                if (isShowBtn) {
                    this.style.display = 'none';
                } else if (this.dataset.correct !== 'true') {
                    this.classList.add('pq-wrong');
                }

                // Reveal answer & explanation
                const ans = card.querySelector('.correct-answer');
                const exp = card.querySelector('.pq-explanation');
                if (ans) ans.classList.add('pq-show');
                if (exp) exp.classList.add('pq-show');
            });
        });
    }

    // ==================== CHAT HISTORY FUNCTIONS ====================
    async function loadDocumentChatHistory() {
        if (!elements.chatMessages) return;

        elements.chatMessages.innerHTML = '';

        if (!state.currentBook) return;

        const userId = auth.getUserId();
        const bookTitle = state.currentBook.title || 'this book';

        try {
            ui.setLoading(true, 'Loading chat history...');
           
            let chats = [];
            
            if (!state.currentDocId && state.currentBook.document_id) {
                state.currentDocId = state.currentBook.document_id;
            }
            
            if (state.currentDocId) {
                if (state.bookHistoryCache[bookTitle]) {
                    chats = state.bookHistoryCache[bookTitle];
                } else {
                    chats = await api.getDocumentChats(userId, state.currentDocId);
                    state.bookHistoryCache[bookTitle] = chats;
                }
            }

            if (chats.length === 0) {
                showWelcomeMessage(bookTitle);
            } else {
                chats.forEach(chat => {
                    addMessageToChat('user', chat.question, chat.timestamp);
                    addMessageToChat('bot', chat.answer, chat.timestamp);
                });
                
                addSeparator('Previous Conversation');
                addBotMessage(`💡 Continue asking about "${bookTitle}". What would you like to know?`);
            }

            elements.chatMessages.scrollTop = elements.chatMessages.scrollHeight;
            
        } catch (error) {
            console.error('Error loading chat history:', error);
            showWelcomeMessage(bookTitle);
        } finally {
            ui.setLoading(false);
        }
    }

    function showWelcomeMessage(bookTitle = 'this book') {
        if (!elements.chatMessages) return;

        const welcomeDiv = document.createElement('div');
        welcomeDiv.className = 'bot-message';
        welcomeDiv.innerHTML = `<div class="message-content">👋 Hi! I can answer questions specifically from "${bookTitle}". What would you like to know?</div>`;
        elements.chatMessages.appendChild(welcomeDiv);
    }

    function addBotMessage(content) {
        if (!elements.chatMessages) return;
        
        const messageDiv = document.createElement('div');
        messageDiv.className = 'bot-message';
        messageDiv.innerHTML = `<div class="message-content">${ui.escapeHtml(content)}</div>`;
        elements.chatMessages.appendChild(messageDiv);
    }

    function addMessageToChat(sender, content, timestamp = null) {
        if (!elements.chatMessages) return;

        const messageDiv = document.createElement('div');
        messageDiv.className = sender === 'user' ? 'user-message' : 'bot-message';
        
        let timeHtml = '';
        if (timestamp) {
            timeHtml = `<div class="message-time">${ui.formatTime(timestamp)}</div>`;
        }
        
        messageDiv.innerHTML = `
            <div class="message-content">${ui.escapeHtml(content)}</div>
            ${timeHtml}
        `;
        
        elements.chatMessages.appendChild(messageDiv);
    }

    function addSeparator(text = 'Previous Conversation') {
        if (!elements.chatMessages) return;

        const separator = document.createElement('div');
        separator.className = 'chat-separator';
        separator.innerHTML = `<span>${text}</span>`;
        elements.chatMessages.appendChild(separator);
    }

    // ==================== PDF FUNCTIONS ====================
    async function loadPDF(pdfUrl) {
        try {
            ui.setLoading(true, 'Loading PDF...');
            
            console.log('📄 Loading PDF from:', pdfUrl);
            
            const loadingTask = pdfjsLib.getDocument({
                url: pdfUrl,
                withCredentials: false,
                useSystemFonts: true
            });
            
            state.pdfDoc = await loadingTask.promise;
            
            if (elements.totalPages) elements.totalPages.textContent = state.pdfDoc.numPages;
            if (elements.currentPage) elements.currentPage.textContent = state.pageNum;
            
            updateNavButtons();
            await renderPage(state.pageNum);
            
            console.log(`✅ PDF loaded: ${state.pdfDoc.numPages} pages`);
        } catch (error) {
            console.error('Error loading PDF:', error);
            ui.showError('Failed to load PDF: ' + error.message);
        } finally {
            ui.setLoading(false);
        }
    }

    async function renderPage(num) {
        if (!state.pdfDoc) return;

        state.pageRendering = true;

        try {
            const page = await state.pdfDoc.getPage(num);

            // Auto-fit: calculate scale based on container width
            var pdfViewer = document.querySelector('.pdf-viewer');
            var containerWidth = pdfViewer ? pdfViewer.clientWidth : 800;
            var defaultViewport = page.getViewport({ scale: 1 });
            var fitScale = containerWidth / defaultViewport.width;
            // Use fitScale if "fit" mode or on initial load, otherwise use manual scale
            var useScale = state.useAutoFit ? fitScale : state.scale;

            const viewport = page.getViewport({ scale: useScale });

            if (!elements.canvas) return;

            elements.canvas.height = viewport.height;
            elements.canvas.width = viewport.width;
            
            const renderContext = {
                canvasContext: elements.canvas.getContext('2d'),
                viewport: viewport
            };
            
            await page.render(renderContext).promise;
            
            state.pageRendering = false;
            
            if (state.pageNumPending !== null) {
                renderPage(state.pageNumPending);
                state.pageNumPending = null;
            }
        } catch (error) {
            console.error('Error rendering page:', error);
            state.pageRendering = false;
        }
    }

    function updateNavButtons() {
        if (!elements.prevBtn || !elements.nextBtn || !state.pdfDoc) return;
        elements.prevBtn.disabled = state.pageNum <= 1;
        elements.nextBtn.disabled = state.pageNum >= state.pdfDoc.numPages;
    }

    function queueRenderPage(num) {
        if (state.pageRendering) {
            state.pageNumPending = num;
        } else {
            renderPage(num);
        }
    }

    // ==================== FILTER & DISPLAY ====================
    function filterAndDisplay() {
        let filtered = [...state.allBooks];
       
        if (state.currentSubject !== 'all') {
            filtered = filtered.filter(book => book.subject === state.currentSubject);
        }
       
        if (state.searchTerm.trim()) {
            const term = state.searchTerm.toLowerCase().trim();
            filtered = filtered.filter(book =>
                book.title?.toLowerCase().includes(term) ||
                book.author?.toLowerCase().includes(term) ||
                book.subject?.toLowerCase().includes(term)
            );
        }
       
        displayBooks(filtered);
    }

    function displayBooks(books) {
        if (!elements.grid) return;

        if (books.length === 0) {
            elements.grid.innerHTML = `
                <div class="empty-books">
                    <div class="empty-books-icon"><i class="fas fa-book-open"></i></div>
                    <h3>${state.searchTerm ? 'No books match your search' : 'No books available yet'}</h3>
                    <p>${state.searchTerm ? 'Try a different keyword or clear your search.' : 'Your administrator hasn\'t added books for your class yet.'}</p>
                </div>
            `;
            return;
        }

        const subjectNames = {
            mathematics: 'Mathematics', science: 'Science', hindi: 'Hindi',
            english: 'English', social: 'Social Studies', sanskrit: 'Sanskrit', computer: 'Computer'
        };

        const subjectEmoji = {
            mathematics: '📐', science: '🔬', hindi: '📗', english: '📘',
            social: '🌍', sanskrit: '🕉️', computer: '💻'
        };

        const subjectGradients = {
            mathematics: 'linear-gradient(135deg, #3f66e6, #129695)',
            science:     'linear-gradient(135deg, #06d6a0, #05a880)',
            hindi:       'linear-gradient(135deg, #f97316, #ef4444)',
            english:     'linear-gradient(135deg, #8b5cf6, #6d28d9)',
            social:      'linear-gradient(135deg, #ffd166, #f59e0b)',
            sanskrit:    'linear-gradient(135deg, #ec4899, #be185d)',
            computer:    'linear-gradient(135deg, #0ea5e9, #2563eb)'
        };

        let html = '';
        books.forEach(book => {
            const emoji = subjectEmoji[book.subject] || '📚';
            const subjectName = subjectNames[book.subject] || book.subject;
            const gradient = subjectGradients[book.subject] || 'linear-gradient(135deg, #3f66e6, #129695)';
            const coverStyle = book.cover_image
                ? `background-image: url('${book.cover_image}'); background-size: cover; background-position: center;`
                : `background: ${gradient};`;
            const bookData = encodeURIComponent(JSON.stringify(book));

            const hasHistory = book.document_id && state.bookHistoryCache[book.id]?.length > 0;

            html += `
                <div class="book-card" onclick="window.handleBookClick('${bookData}')">
                    <div class="book-cover" style="${coverStyle}">
                        ${!book.cover_image ? `<div class="book-cover-emoji">${emoji}</div>` : ''}
                        <div class="book-cover-overlay">
                            <button class="read-book-btn" onclick="event.stopPropagation(); window.handleBookClick('${bookData}')">
                                <i class="fas fa-book-open"></i> Read Now
                            </button>
                        </div>
                        <span class="book-subject-badge">${emoji} ${subjectName}</span>
                        <span class="book-class-badge">
                            <i class="fas fa-graduation-cap"></i> Class ${book.class}
                        </span>
                        ${hasHistory ? '<span class="chat-history-indicator"><i class="fas fa-comment-dots"></i></span>' : ''}
                    </div>
                    <div class="book-info">
                        <h4 class="book-title">${book.title || 'Untitled'}</h4>
                        <p class="book-author"><i class="fas fa-user"></i> ${book.author || 'Unknown'}</p>
                        <p class="book-description">${book.description || 'No description available'}</p>
                        <div class="book-meta">
                            <span><i class="fas fa-file-pdf"></i> ${book.pages || 0} pages</span>
                            <span><i class="fas fa-list"></i> ${book.chapters?.length || 0} chapters</span>
                        </div>
                    </div>
                    <div class="book-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: ${book.progress || 0}%"></div>
                        </div>
                        <div class="progress-text">
                            <span>${book.progress || 0}% read</span>
                            <span><i class="fas fa-clock"></i> Continue reading</span>
                        </div>
                    </div>
                </div>
            `;
        });

        elements.grid.innerHTML = html;
    }

    // ==================== BOOK READER ====================
    window.handleBookClick = async function(encodedBook) {
        try {
            const book = JSON.parse(decodeURIComponent(encodedBook));
            console.log("📖 Opening book:", book);
            
            if (state.pdfDoc) {
                state.pdfDoc.destroy();
                state.pdfDoc = null;
            }
            
            if (elements.canvas) {
                const ctx = elements.canvas.getContext('2d');
                ctx.clearRect(0, 0, elements.canvas.width, elements.canvas.height);
            }
            
            state.pageNum = 1;
            state.scale = 1.5;
            state.pageRendering = false;
            state.pageNumPending = null;
            
            ui.setLoading(true, `Loading ${book.title}...`);
            state.currentBook = book;
            state.currentDocId = book.document_id || null;
            
            if (elements.listView) elements.listView.style.display = 'none';
            // Remove section padding for full-width reader
            var coursesSection = document.getElementById('courses-section');
            if (coursesSection) coursesSection.style.padding = '0';
            if (elements.reader) {
                elements.reader.style.display = 'flex';
            } else {
                ui.setLoading(false);
                ui.showError("Reader container not found");
                return;
            }
            
            if (elements.readerTitle) elements.readerTitle.textContent = book.title || 'Untitled';
            if (elements.readerSubject) {
                elements.readerSubject.innerHTML = `${book.subject || 'Unknown'} • Class ${book.class || 'N/A'}`;
            }
            
            if (elements.chatContainer) elements.chatContainer.style.display = 'none';
            if (elements.pdfSection) elements.pdfSection.style.display = 'flex';
            if (elements.studyStatsPanel) elements.studyStatsPanel.style.display = 'none';
            if (elements.practiceQuestionsPanel) elements.practiceQuestionsPanel.style.display = 'none';
            
            if (book.pdf_path) {
                await loadPDF(book.pdf_path);
            } else {
                ui.showError("PDF not available for this book");
            }
            
            if (!state.currentDocId) {
                state.currentDocId = await api.getDocumentIdForBook(book.id);
                if (state.currentDocId) {
                    book.document_id = state.currentDocId;
                }
            }
            
            if (state.currentDocId) {
                await api.switchToDocument(state.currentDocId);
                await loadBookStudiedTopics();
            }
            
            if (elements.chatMessages) {
                elements.chatMessages.innerHTML = '';
            }
            
            await loadDocumentChatHistory();
            
            updateFloatingChatbotForBook();
            
        } catch (error) {
            console.error("Error opening book:", error);
            ui.showError("Error opening book: " + error.message);
        } finally {
            ui.setLoading(false);
        }
    };

    window.closeBookReader = function() {
        console.log("Closing book reader");
        if (elements.reader) elements.reader.style.display = 'none';
        if (elements.listView) elements.listView.style.display = 'block';
        // Restore section padding
        var coursesSection = document.getElementById('courses-section');
        if (coursesSection) coursesSection.style.padding = '';
       
        state.currentBook = null;
        state.currentDocId = null;
        state.pdfDoc = null;
        state.pageNum = 1;
        state.studiedTopics = null;
        
        updateFloatingChatbotForBook();
        
        if (elements.miniChatPopup) {
            elements.miniChatPopup.style.display = 'none';
            state.isMiniChatOpen = false;
        }
    };

    // ==================== CHAT FUNCTIONS ====================
    async function sendChatMessage() {
        if (!elements.chatInput || !elements.chatMessages || !state.currentBook || state.isSendingMessage) return;
       
        const question = elements.chatInput.value.trim();
        if (!question) return;
       
        state.isSendingMessage = true;
       
        addMessageToChat('user', question);
        elements.chatInput.value = '';
       
        const typingDiv = document.createElement('div');
        typingDiv.className = 'bot-message';
        typingDiv.id = 'typing-indicator';
        typingDiv.innerHTML = `<div class="typing-indicator"><span></span><span></span><span></span></div>`;
        elements.chatMessages.appendChild(typingDiv);
        elements.chatMessages.scrollTop = elements.chatMessages.scrollHeight;
       
        try {
            const result = await api.askQuestion(
                question, 
                auth.getUserId(), 
                state.currentDocId
            );
           
            document.getElementById('typing-indicator')?.remove();
            
            addMessageToChat('bot', result.answer);
            
            if (result.document_id && !state.currentDocId) {
                state.currentDocId = result.document_id;
                if (state.currentBook) {
                    state.currentBook.document_id = result.document_id;
                }
            }
            
            if (state.currentBook) {
                delete state.bookHistoryCache[state.currentBook.id];
            }
            
            setTimeout(() => {
                loadBookStudiedTopics();
            }, 1000);
           
        } catch (error) {
            document.getElementById('typing-indicator')?.remove();
            addMessageToChat('bot', 'Sorry, I encountered an error. Please try again.');
        } finally {
            elements.chatMessages.scrollTop = elements.chatMessages.scrollHeight;
            state.isSendingMessage = false;
        }
    }

    // ==================== FLOATING CHATBOT FUNCTIONS ====================
    function toggleMiniChatbot() {
        if (!elements.miniChatPopup) return;
        
        if (elements.miniChatPopup.style.display === 'none') {
            elements.miniChatPopup.style.display = 'flex';
            state.isMiniChatOpen = true;
            state.unreadCount = 0;
            
            if (elements.chatbotNotification) {
                elements.chatbotNotification.style.display = 'none';
            }
            
            if (elements.miniChatMessages && elements.miniChatMessages.children.length === 0) {
                const bookTitle = state.currentBook?.title || 'this book';
                addMiniBotMessage(`👋 Ask me anything about "${bookTitle}"`);
            }
            
            if (elements.miniChatInput) {
                elements.miniChatInput.focus();
            }
        } else {
            elements.miniChatPopup.style.display = 'none';
            state.isMiniChatOpen = false;
        }
    }

    function addMiniMessage(sender, content, timestamp = null) {
        if (!elements.miniChatMessages) return;
        
        const messageDiv = document.createElement('div');
        messageDiv.className = sender === 'user' ? 'mini-user-message' : 'mini-bot-message';
        
        let timeHtml = '';
        if (timestamp) {
            timeHtml = `<div class="mini-message-time">${ui.formatTime(timestamp)}</div>`;
        }
        
        messageDiv.innerHTML = `
            <div class="mini-message-content">${ui.escapeHtml(content)}</div>
            ${timeHtml}
        `;
        
        elements.miniChatMessages.appendChild(messageDiv);
        elements.miniChatMessages.scrollTop = elements.miniChatMessages.scrollHeight;
    }

    function addMiniBotMessage(content) {
        addMiniMessage('bot', content);
    }

    function addMiniUserMessage(content) {
        addMiniMessage('user', content);
    }

    async function sendMiniChatMessage() {
        if (!elements.miniChatInput || !state.currentBook || state.isSendingMessage) return;
        
        const question = elements.miniChatInput.value.trim();
        if (!question) return;
        
        state.isSendingMessage = true;
        
        addMiniUserMessage(question);
        elements.miniChatInput.value = '';
        
        const typingDiv = document.createElement('div');
        typingDiv.className = 'mini-bot-message';
        typingDiv.id = 'mini-typing-indicator';
        typingDiv.innerHTML = `<div class="typing-indicator"><span></span><span></span><span></span></div>`;
        elements.miniChatMessages.appendChild(typingDiv);
        elements.miniChatMessages.scrollTop = elements.miniChatMessages.scrollHeight;
        
        try {
            const result = await api.askQuestion(
                question, 
                auth.getUserId(), 
                state.currentDocId
            );
            
            document.getElementById('mini-typing-indicator')?.remove();
            addMiniBotMessage(result.answer);
            
            if (elements.chatContainer && elements.chatContainer.style.display === 'flex') {
                addMessageToChat('user', question);
                addMessageToChat('bot', result.answer);
            }
            
            if (state.currentBook) {
                delete state.bookHistoryCache[state.currentBook.id];
            }
            
            if (!state.isMiniChatOpen) {
                showChatbotNotification();
            }
            
        } catch (error) {
            document.getElementById('mini-typing-indicator')?.remove();
            addMiniBotMessage('Sorry, I encountered an error. Please try again.');
        } finally {
            elements.miniChatMessages.scrollTop = elements.miniChatMessages.scrollHeight;
            state.isSendingMessage = false;
        }
    }

    function showChatbotNotification() {
        if (!state.isMiniChatOpen && elements.chatbotNotification) {
            state.unreadCount++;
            elements.chatbotNotification.style.display = 'flex';
            elements.chatbotNotification.textContent = state.unreadCount;
        }
    }

    function updateFloatingChatbotForBook() {
        if (!elements.floatingChatBtn) return;
        
        if (state.currentBook) {
            elements.floatingChatBtn.style.display = 'flex';
            
            if (elements.miniChatMessages) {
                elements.miniChatMessages.innerHTML = '';
            }
            
            state.unreadCount = 0;
            if (elements.chatbotNotification) {
                elements.chatbotNotification.style.display = 'none';
            }
        } else {
            elements.floatingChatBtn.style.display = 'none';
            if (elements.miniChatPopup) {
                elements.miniChatPopup.style.display = 'none';
            }
            state.isMiniChatOpen = false;
        }
    }

    // ==================== EVENT LISTENERS ====================
    function setupEventListeners() {
        console.log("Setting up event listeners...");
       
        elements.filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                elements.filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                state.currentSubject = this.dataset.subject;
                filterAndDisplay();
            });
        });

        if (elements.search) {
            elements.search.addEventListener('input', (e) => {
                state.searchTerm = e.target.value;
                filterAndDisplay();
            });
        }

        if (elements.closeReaderBtn) {
            elements.closeReaderBtn.addEventListener('click', window.closeBookReader);
        }

        if (elements.closeSummaryBtn) {
            elements.closeSummaryBtn.addEventListener('click', () => {
                elements.studySummaryCard.style.display = 'none';
            });
        }

        if (elements.showStatsBtn) {
            elements.showStatsBtn.addEventListener('click', () => {
                if (elements.studyStatsPanel) {
                    if (elements.studyStatsPanel.style.display === 'none') {
                        elements.studyStatsPanel.style.display = 'block';
                        loadBookStudiedTopics();
                    } else {
                        elements.studyStatsPanel.style.display = 'none';
                    }
                }
            });
        }

        if (elements.closeStatsBtn) {
            elements.closeStatsBtn.addEventListener('click', () => {
                elements.studyStatsPanel.style.display = 'none';
            });
        }

        if (elements.askFromBookBtn) {
            elements.askFromBookBtn.addEventListener('click', () => {
                if (elements.pdfSection) elements.pdfSection.style.display = 'none';
                if (elements.studyStatsPanel) elements.studyStatsPanel.style.display = 'none';
                if (elements.practiceQuestionsPanel) elements.practiceQuestionsPanel.style.display = 'none';
                if (elements.chatContainer) {
                    elements.chatContainer.style.display = 'flex';
                    if (elements.chatInput) elements.chatInput.focus();
                }
            });
        }

        if (elements.closeBookChatBtn) {
            elements.closeBookChatBtn.addEventListener('click', () => {
                if (elements.chatContainer) elements.chatContainer.style.display = 'none';
                if (elements.practiceQuestionsPanel) elements.practiceQuestionsPanel.style.display = 'none';
                if (elements.pdfSection) elements.pdfSection.style.display = 'flex';
            });
        }

        if (elements.showPracticeBtn) {
            elements.showPracticeBtn.addEventListener('click', async () => {
                if (elements.practiceQuestionsPanel) {
                    if (elements.practiceQuestionsPanel.style.display === 'none') {
                        elements.practiceQuestionsPanel.style.display = 'flex';
                        if (elements.chatMessages) elements.chatMessages.style.display = 'none';
                        const chatInputArea = document.querySelector('#book-chat-container .chat-input-area');
                        if (chatInputArea) chatInputArea.style.display = 'none';

                        const topicsData = await loadBookStudiedTopics();
                        
                        if (!topicsData || !topicsData.topic_details || topicsData.topic_details.length === 0) {
                            if (elements.practiceTopicSelect) {
                                elements.practiceTopicSelect.innerHTML = '';
                                
                                const defaultOption = document.createElement('option');
                                defaultOption.value = '';
                                defaultOption.textContent = 'Select Topic';
                                elements.practiceTopicSelect.appendChild(defaultOption);
                                
                                const generalOption = document.createElement('option');
                                generalOption.value = 'general';
                                generalOption.textContent = '📚 General Questions';
                                elements.practiceTopicSelect.appendChild(generalOption);
                            }
                        }
                    } else {
                        elements.practiceQuestionsPanel.style.display = 'none';
                        if (elements.chatMessages) elements.chatMessages.style.display = 'flex';
                        const chatInputArea = document.querySelector('#book-chat-container .chat-input-area');
                        if (chatInputArea) chatInputArea.style.display = 'flex';
                    }
                }
            });
        }

        if (elements.closePracticeBtn) {
            elements.closePracticeBtn.addEventListener('click', () => {
                elements.practiceQuestionsPanel.style.display = 'none';
                if (elements.chatMessages) elements.chatMessages.style.display = 'flex';
                const chatInputArea = document.querySelector('#book-chat-container .chat-input-area');
                if (chatInputArea) chatInputArea.style.display = 'flex';
            });
        }

        if (elements.generatePracticeBtn) {
            elements.generatePracticeBtn.removeEventListener('click', generatePracticeQuestions);
            elements.generatePracticeBtn.addEventListener('click', generatePracticeQuestions);
        }

        // Page navigation
        if (elements.prevBtn) {
            elements.prevBtn.addEventListener('click', () => {
                if (!state.pdfDoc || state.pageNum <= 1) return;
                state.pageNum--;
                if (elements.currentPage) elements.currentPage.textContent = state.pageNum;
                queueRenderPage(state.pageNum);
                updateNavButtons();
            });
        }

        if (elements.nextBtn) {
            elements.nextBtn.addEventListener('click', () => {
                if (!state.pdfDoc || state.pageNum >= state.pdfDoc.numPages) return;
                state.pageNum++;
                if (elements.currentPage) elements.currentPage.textContent = state.pageNum;
                queueRenderPage(state.pageNum);
                updateNavButtons();
            });
        }

        if (elements.zoomIn) {
            elements.zoomIn.addEventListener('click', () => {
                state.useAutoFit = false;
                state.scale += 0.25;
                if (state.pdfDoc) queueRenderPage(state.pageNum);
            });
        }

        if (elements.zoomOut) {
            elements.zoomOut.addEventListener('click', () => {
                state.useAutoFit = false;
                if (state.scale > 0.5) {
                    state.scale -= 0.25;
                    if (state.pdfDoc) queueRenderPage(state.pageNum);
                }
            });
        }

        if (elements.fitPage) {
            elements.fitPage.addEventListener('click', () => {
                state.useAutoFit = true;
                if (state.pdfDoc) queueRenderPage(state.pageNum);
            });
        }

        if (elements.sendBtn) {
            elements.sendBtn.addEventListener('click', sendChatMessage);
        }

        if (elements.chatInput) {
            elements.chatInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendChatMessage();
                }
            });
        }

        if (elements.floatingChatBtn) {
            elements.floatingChatBtn.addEventListener('click', toggleMiniChatbot);
        }

        if (elements.miniCloseBtn) {
            elements.miniCloseBtn.addEventListener('click', toggleMiniChatbot);
        }

        if (elements.miniSendBtn) {
            elements.miniSendBtn.addEventListener('click', sendMiniChatMessage);
        }

        if (elements.miniChatInput) {
            elements.miniChatInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendMiniChatMessage();
                }
            });
        }

        document.addEventListener('click', (e) => {
            if (elements.miniChatPopup && elements.floatingChatBtn) {
                if (!elements.miniChatPopup.contains(e.target) && 
                    !elements.floatingChatBtn.contains(e.target) && 
                    elements.miniChatPopup.style.display === 'flex') {
                    elements.miniChatPopup.style.display = 'none';
                    state.isMiniChatOpen = false;
                }
            }
        });
    }

    // ==================== INITIALIZATION ====================
    async function initialize() {
        console.log("Initializing courses section...");
        
        if (!auth.isAuthenticated()) {
            console.log("Not authenticated, attempting test login...");
            const loggedIn = await auth.testLogin();
            if (!loggedIn) {
                ui.showError("Please login first");
                return;
            }
        }
        
        setupEventListeners();
        checkAndLoad();
        updateFloatingChatbotForBook();
    }

    let booksLoaded = false;
    function checkAndLoad() {
        if (elements.section && elements.section.style.display !== 'none' && !booksLoaded) {
            console.log("Courses section visible, loading books...");
            booksLoaded = true;
            api.loadBooks();
        }
    }

    document.addEventListener('DOMContentLoaded', initialize);

    if (elements.section) {
        const observer = new MutationObserver(checkAndLoad);
        observer.observe(elements.section, { attributes: true, attributeFilter: ['style'] });
    }

    window.refreshBooks = api.loadBooks;
    window.refreshStudyStats = loadBookStudiedTopics;
    window.debugState = () => console.log('State:', state);
    window.debugAuth = () => console.log('Auth:', {
        token: auth.getToken(),
        userId: auth.getUserId(),
        userData: auth.getUserData()
    });
    window.clearCache = () => {
        state.bookHistoryCache = {};
        state.studyStatsCache = {};
        console.log('Cache cleared');
    };
})();
</script>
