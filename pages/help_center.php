<!-- Help Center Section -->
<div id="help-section" class="content-section" style="display: none;">

    <!-- Hero Banner -->
    <div class="help-hero">
        <div class="help-hero-text">
            <h2><i class="fas fa-question-circle" style="margin-right:10px;opacity:.85;"></i>Help Center</h2>
            <p>Find answers to common questions and learn how to use NeuraEduBot</p>
            <div class="hero-support-btns">
                <button class="hero-btn hero-btn-primary" id="contact-support-btn">
                    <i class="fas fa-envelope"></i> Contact Support
                </button>
                <button class="hero-btn hero-btn-ghost" id="live-chat-btn">
                    <i class="fas fa-comment"></i> Live Chat
                </button>
            </div>
        </div>
        <div class="help-search">
            <i class="fas fa-search"></i>
            <input type="text" id="help-search" placeholder="Search for help articles...">
        </div>
    </div>

    <!-- Categories -->
    <div class="help-categories">
        <button class="category-btn active" data-category="all">📚 All Topics</button>
        <button class="category-btn" data-category="getting-started">🚀 Getting Started</button>
        <button class="category-btn" data-category="account">👤 Account & Profile</button>
        <button class="category-btn" data-category="courses">📖 Courses & Books</button>
        <button class="category-btn" data-category="ai">🤖 AI Features</button>
        <button class="category-btn" data-category="troubleshooting">🔧 Troubleshooting</button>
        <button class="category-btn" data-category="faq">❓ FAQs</button>
    </div>
    
    <!-- Help Content Grid -->
    <div class="help-grid" id="help-grid">
        <!-- Articles will be loaded here -->
    </div>
    
    <!-- Expanded Article View (Hidden by default) -->
    <div id="expanded-article" class="expanded-article" style="display: none;">
        <div class="expanded-header">
            <div>
                <span class="expanded-icon" id="expanded-icon">📚</span>
                <h3 id="expanded-title">Article Title</h3>
            </div>
            <button class="close-expanded-btn" id="close-expanded-btn">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="expanded-content" id="expanded-content">
            <!-- Article content will load here -->
        </div>
        <div class="expanded-footer">
            <button class="btn-secondary" id="back-to-articles-btn">
                <i class="fas fa-arrow-left"></i> Back to Articles
            </button>
            <div class="expanded-meta" id="expanded-meta">
                <span><i class="far fa-clock"></i> <span id="expanded-read-time">3 min read</span></span>
                <span><i class="far fa-eye"></i> <span id="expanded-views">2.5k views</span></span>
            </div>
        </div>
    </div>
    
</div>

<!-- Contact Support Form (Inline) -->
<div id="support-form-container" style="display: none;">
    <div class="support-form-card">
        <div class="support-form-header">
            <h4><i class="fas fa-headset"></i> Contact Support</h4>
            <button class="close-form-btn" id="close-support-form">×</button>
        </div>
        
        <div class="support-form-body">
            <div class="form-group">
                <label>Subject <span class="required">*</span></label>
                <select id="support-subject" class="form-control">
                    <option value="">Select a topic</option>
                    <option value="account">Account Issue</option>
                    <option value="technical">Technical Problem</option>
                    <option value="billing">Billing Question</option>
                    <option value="feedback">Feedback / Suggestion</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Your Message <span class="required">*</span></label>
                <textarea id="support-message" rows="5" class="form-control" placeholder="Describe your issue in detail..."></textarea>
            </div>
            
            <div class="form-group">
                <label>Attach Screenshot (optional)</label>
                <input type="file" id="support-attachment" accept="image/*" class="form-control">
            </div>
            
            <div class="form-actions">
                <button class="btn-secondary" id="cancel-support-form">Cancel</button>
                <button class="btn-primary" id="submit-support-form">Submit Ticket</button>
            </div>
        </div>
    </div>
</div>

<!-- Live Chat (Inline) with Quick Issue Selection -->
<div id="live-chat-container" style="display: none;">
    <div class="chat-card">
        <div class="chat-header">
            <h4><i class="fas fa-comments"></i> Live Support Chat</h4>
            <button class="close-chat-btn" id="close-live-chat">×</button>
        </div>
        
        <div class="quick-issues" id="quick-issues">
            <p class="quick-issues-title">🔍 Select your issue:</p>
            <div class="issue-buttons">
                <button class="issue-btn" data-issue="login">🔐 Can't Login</button>
                <button class="issue-btn" data-issue="password">🔑 Forgot Password</button>
                <button class="issue-btn" data-issue="pdf">📄 PDF Not Loading</button>
                <button class="issue-btn" data-issue="ai">🤖 AI Not Responding</button>
                <button class="issue-btn" data-issue="profile">👤 Update Profile</button>
                <button class="issue-btn" data-issue="books">📚 Books Not Showing</button>
                <button class="issue-btn" data-issue="payment">💰 Payment Issue</button>
                <button class="issue-btn" data-issue="other">❓ Other</button>
            </div>
        </div>
        
        <div class="chat-messages" id="live-chat-messages">
            <div class="chat-message bot">
                <div class="message-content">
                    👋 Hi! I'm your NeuraEduBot Assistant. Select an issue from above or type your question below.
                </div>
            </div>
        </div>
        
        <div class="chat-input-area">
            <input type="text" id="live-chat-input" placeholder="Type your message..." class="form-control">
            <button class="btn-primary" id="send-live-chat">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>
</div>

<style>
/* ==================== HELP CENTER STYLES - AI WORLD THEME ==================== */

/* Page wrapper */
#help-section {
    padding: 28px 0 40px;
}

/* ---- Hero banner - AI World Gradient ---- */
.help-hero {
    background: linear-gradient(135deg, #3f66e6 0%, #0ed3a2 50%, #129695 100%);
    border-radius: 24px;
    padding: 40px 36px;
    margin-bottom: 28px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
}

.help-hero-text h2 {
    font-size: 26px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 6px;
    line-height: 1.3;
}

.help-hero-text p {
    font-size: 14px;
    color: rgba(255,255,255,0.85);
    margin: 0 0 18px;
}

.hero-support-btns {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.hero-btn {
    padding: 9px 20px;
    border-radius: 14px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 7px;
    transition: all 0.2s;
    font-family: inherit;
    border: none;
}

.hero-btn-primary {
    background: #fff;
    color: #3f66e6;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.hero-btn-primary:hover {
    background: #f0f4ff;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(63, 102, 230, 0.25);
}

.hero-btn-ghost {
    background: rgba(255,255,255,0.2);
    color: #fff;
    border: 1.5px solid rgba(255,255,255,0.4) !important;
    backdrop-filter: blur(10px);
}

.hero-btn-ghost:hover {
    background: rgba(255,255,255,0.3);
    transform: translateY(-2px);
}

.help-search {
    position: relative;
    flex: 0 0 340px;
    max-width: 100%;
}

.help-search i {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #3f66e6;
    font-size: 14px;
    pointer-events: none;
}

.help-search input {
    width: 100%;
    padding: 12px 16px 12px 44px;
    border: none;
    border-radius: 14px;
    font-size: 14px;
    background: #fff;
    color: #1a1a2e;
    box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    transition: all 0.3s;
    box-sizing: border-box;
    font-family: inherit;
}

.help-search input::placeholder { 
    color: #999;
}

.help-search input:focus {
    outline: none;
    box-shadow: 0 4px 20px rgba(63, 102, 230, 0.35);
    transform: translateY(-1px);
}

/* ---- Category tabs ---- */
.help-categories {
    display: flex;
    gap: 10px;
    margin-bottom: 28px;
    flex-wrap: wrap;
}

.category-btn {
    padding: 8px 20px;
    border: 1.5px solid #e8ecf4;
    background: #fff;
    border-radius: 12px;
    cursor: pointer;
    font-weight: 500;
    font-size: 13px;
    color: #6c7a91;
    transition: all 0.2s;
    font-family: inherit;
    line-height: 1;
}

.category-btn:hover {
    border-color: #3f66e6;
    color: #3f66e6;
    background: #f0f4ff;
    transform: translateY(-1px);
}

.category-btn.active {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    border-color: transparent;
    color: #fff;
    box-shadow: 0 4px 12px rgba(63, 102, 230, 0.3);
}

/* ---- Article grid ---- */
.help-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 20px;
    margin-bottom: 32px;
}

/* ---- Article card - AI World Theme ---- */
.article-card {
    background: #fff;
    border-radius: 20px;
    padding: 22px;
    border: 1.5px solid #eef0f5;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.article-card:hover {
    border-color: #0ed3a2;
    box-shadow: 0 8px 24px rgba(14, 211, 162, 0.12);
    transform: translateY(-3px);
}

.article-card-top {
    display: flex;
    align-items: flex-start;
    gap: 14px;
}

.article-icon-wrap {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: linear-gradient(135deg, #f0f4ff, #e8faf3);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    flex-shrink: 0;
}

.article-card-body { 
    flex: 1; 
    min-width: 0;
}

.article-card h4 {
    margin: 0 0 6px;
    color: #1a1a2e;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.4;
}

.article-description {
    color: #6c7a91;
    font-size: 13px;
    line-height: 1.55;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.article-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 12px;
    border-top: 1px solid #f1f3f6;
}

.article-category {
    background: linear-gradient(135deg, #f0f4ff, #e8faf3);
    color: #3f66e6;
    padding: 4px 12px;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.4px;
}

.article-meta {
    display: flex;
    gap: 12px;
    font-size: 11px;
    color: #aab0bb;
}

.article-meta span {
    display: flex;
    align-items: center;
    gap: 4px;
}

/* ---- Expanded article - AI World Theme ---- */
.expanded-article {
    background: #fff;
    border-radius: 20px;
    border: 1.5px solid #eef0f5;
    overflow: hidden;
    margin-bottom: 28px;
    animation: hcFadeUp 0.25s ease;
}

@keyframes hcFadeUp {
    from { opacity: 0; transform: translateY(12px); }
    to   { opacity: 1; transform: translateY(0); }
}

.expanded-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 22px 28px;
    background: linear-gradient(135deg, #f8faff, #f0faf5);
    border-bottom: 1.5px solid #eef0f5;
    gap: 16px;
}

.expanded-header > div {
    display: flex;
    align-items: center;
    gap: 16px;
    flex: 1;
    min-width: 0;
}

.expanded-icon {
    font-size: 40px;
    line-height: 1;
    flex-shrink: 0;
}

.expanded-header h3 {
    margin: 0;
    color: #1a1a2e;
    font-size: 20px;
    font-weight: 700;
    line-height: 1.3;
}

.close-expanded-btn {
    background: #fff;
    border: 1.5px solid #eef0f5;
    font-size: 14px;
    cursor: pointer;
    color: #6c7a91;
    width: 36px;
    height: 36px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
    flex-shrink: 0;
}

.close-expanded-btn:hover {
    background: #fee2e2;
    border-color: #ef476f;
    color: #ef476f;
    transform: scale(1.05);
}

.expanded-content {
    color: #374151;
    line-height: 1.75;
    font-size: 15px;
    padding: 28px;
}

.expanded-content h2 { 
    color: #1a1a2e; 
    margin: 28px 0 12px; 
    font-size: 22px;
    font-weight: 700;
}
.expanded-content h3 { 
    color: #3f66e6; 
    margin: 22px 0 10px; 
    font-size: 18px;
    font-weight: 600;
}
.expanded-content h4 { 
    color: #374151; 
    margin: 18px 0 8px; 
    font-size: 16px;
    font-weight: 600;
}
.expanded-content p  { 
    margin-bottom: 14px;
    color: #4a5568;
}

.expanded-content ul,
.expanded-content ol {
    margin-bottom: 16px;
    padding-left: 22px;
}

.expanded-content li { 
    margin-bottom: 7px;
    color: #4a5568;
}

.expanded-content code {
    background: #f0f4ff;
    padding: 2px 6px;
    border-radius: 6px;
    font-family: monospace;
    font-size: 13px;
    color: #3f66e6;
}

.expanded-content pre {
    background: #f8fafc;
    border: 1px solid #e9ecef;
    padding: 16px;
    border-radius: 12px;
    overflow-x: auto;
    margin: 18px 0;
}

.expanded-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 18px 0;
    font-size: 14px;
}

.expanded-content th,
.expanded-content td {
    border: 1px solid #e9ecef;
    padding: 10px 14px;
    text-align: left;
}

.expanded-content th {
    background: #f8fafc;
    font-weight: 600;
    color: #1a1a2e;
}

.expanded-content .tip-box {
    background: linear-gradient(135deg, #f0f4ff, #e8faf3);
    border-left: 4px solid #0ed3a2;
    padding: 14px 18px;
    border-radius: 0 12px 12px 0;
    margin: 18px 0;
    font-size: 14px;
}

.expanded-content .warning-box {
    background: #fffbeb;
    border-left: 4px solid #f59e0b;
    padding: 14px 18px;
    border-radius: 0 12px 12px 0;
    margin: 18px 0;
    font-size: 14px;
}

.expanded-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 28px;
    border-top: 1.5px solid #eef0f5;
    background: #fafbfc;
    gap: 12px;
    flex-wrap: wrap;
}

.expanded-meta {
    display: flex;
    gap: 18px;
    color: #aab0bb;
    font-size: 13px;
}

.expanded-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
}

/* ---- Support form card - AI World Theme ---- */
.support-form-card,
.chat-card {
    background: #fff;
    border-radius: 20px;
    border: 1.5px solid #eef0f5;
    margin-bottom: 28px;
    overflow: hidden;
    animation: hcFadeUp 0.25s ease;
}

.support-form-header,
.chat-header {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: #fff;
    padding: 16px 22px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.support-form-header h4,
.chat-header h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    color: #fff;
}

.close-form-btn,
.close-chat-btn {
    background: rgba(255,255,255,0.2);
    border: none;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    line-height: 1;
    width: 32px;
    height: 32px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
}

.close-form-btn:hover,
.close-chat-btn:hover { 
    background: rgba(255,255,255,0.35);
    transform: scale(1.05);
}

.support-form-body { 
    padding: 24px 22px; 
}

/* ---- Quick issue chips - AI World Theme ---- */
.quick-issues {
    padding: 14px 22px;
    background: linear-gradient(135deg, #f8faff, #f0faf5);
    border-bottom: 1px solid #eef0f5;
}

.quick-issues-title {
    margin: 0 0 10px;
    font-weight: 600;
    color: #3f66e6;
    font-size: 13px;
}

.issue-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.issue-btn {
    padding: 6px 14px;
    background: #fff;
    border: 1.5px solid #e0e7ff;
    border-radius: 10px;
    font-size: 12px;
    cursor: pointer;
    color: #3f66e6;
    font-weight: 500;
    transition: all 0.2s;
    white-space: nowrap;
    font-family: inherit;
}

.issue-btn:hover {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    border-color: transparent;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(63, 102, 230, 0.3);
}

/* ---- Chat messages - AI World Theme ---- */
.chat-messages {
    height: 260px;
    overflow-y: auto;
    padding: 18px 20px;
    background: #f8faff;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.chat-message { 
    display: flex; 
    flex-direction: column; 
}
.chat-message.bot  { 
    align-items: flex-start; 
}
.chat-message.user { 
    align-items: flex-end; 
}

.chat-message .message-content {
    max-width: 80%;
    padding: 10px 14px;
    border-radius: 14px;
    font-size: 13.5px;
    line-height: 1.55;
}

.chat-message.bot .message-content {
    background: #fff;
    color: #1a1a2e;
    border-radius: 4px 14px 14px 14px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    border: 1px solid #eef0f5;
}

.chat-message.user .message-content {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: #fff;
    border-radius: 14px 4px 14px 14px;
    box-shadow: 0 2px 8px rgba(63, 102, 230, 0.2);
}

.chat-input-area {
    display: flex;
    gap: 10px;
    padding: 14px 16px;
    background: #fff;
    border-top: 1px solid #eef0f5;
}

.chat-input-area input { 
    flex: 1;
    border-radius: 12px;
}

.chat-input-area button {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

/* ---- Form controls - AI World Theme ---- */
.form-group { 
    margin-bottom: 18px; 
}

.form-group label {
    display: block;
    margin-bottom: 6px;
    color: #374151;
    font-size: 13px;
    font-weight: 600;
}

.form-control {
    width: 100%;
    padding: 10px 14px;
    border: 2px solid #e8ecf4;
    border-radius: 12px;
    font-size: 14px;
    color: #1a1a2e;
    transition: all 0.3s;
    box-sizing: border-box;
    font-family: inherit;
    background: #fafbff;
}

.form-control:focus {
    outline: none;
    border-color: #0ed3a2;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(14, 211, 162, 0.1);
}

.required { 
    color: #ef476f; 
}

.form-actions {
    display: flex;
    gap: 10px;
    justify-content: flex-end;
    flex-wrap: wrap;
    margin-top: 4px;
}

.btn-primary, .btn-secondary {
    padding: 10px 24px;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s;
    font-family: inherit;
}

.btn-primary {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: #fff;
    box-shadow: 0 4px 12px rgba(63, 102, 230, 0.25);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(63, 102, 230, 0.35);
}

.btn-secondary {
    background: #fff;
    border: 2px solid #e8ecf4;
    color: #6c7a91;
}

.btn-secondary:hover {
    border-color: #0ed3a2;
    color: #0ed3a2;
    transform: translateY(-1px);
    background: #f0faf5;
}

/* ---- Empty state ---- */
.empty-books {
    text-align: center;
    padding: 60px 20px;
    background: #fff;
    border-radius: 20px;
    border: 2px dashed #e8ecf4;
}

.empty-books i {
    font-size: 48px;
    color: #0ed3a2;
    margin-bottom: 16px;
}

.empty-books h3 {
    color: #1a1a2e;
    margin-bottom: 8px;
}

.empty-books p {
    color: #6c7a91;
}

/* ---- Responsive - AI World Theme ---- */
@media (max-width: 768px) {
    #help-section { 
        padding: 20px 0 32px; 
    }

    .help-hero { 
        padding: 28px 24px; 
        flex-direction: column; 
        align-items: stretch; 
    }
    .help-hero-text h2 { 
        font-size: 22px; 
    }
    .help-search { 
        flex: none; 
    }
    .hero-btn { 
        font-size: 12px; 
        padding: 8px 16px; 
    }

    .help-grid { 
        grid-template-columns: 1fr; 
    }

    .expanded-header { 
        flex-direction: column; 
        align-items: flex-start; 
        gap: 12px; 
        padding: 18px; 
    }
    .expanded-content { 
        padding: 18px; 
    }
    .expanded-footer { 
        flex-direction: column; 
        align-items: flex-start; 
        padding: 14px 18px; 
    }

    .issue-buttons { 
        flex-wrap: nowrap; 
        overflow-x: auto; 
        padding-bottom: 4px; 
    }
    
    .issue-btn {
        white-space: nowrap;
    }
}

@media (max-width: 576px) {
    .help-hero {
        padding: 20px;
    }
    
    .help-hero-text h2 {
        font-size: 20px;
    }
    
    .article-card {
        padding: 18px;
    }
    
    .expanded-header h3 {
        font-size: 18px;
    }
}
</style>

<script>
// Help Center Script - AI World Theme with Interactive Chat
(function() {
    console.log("=== Help Center Initialized (AI World Theme) ===");
    
    // API Base URL
    const API_BASE = 'http://127.0.0.1:8000/api';
    
    // DOM Elements
    const helpSection = document.getElementById('help-section');
    const helpGrid = document.getElementById('help-grid');
    const helpSearch = document.getElementById('help-search');
    const categoryBtns = document.querySelectorAll('.category-btn');
    
    // Expanded Article Elements
    const expandedArticle = document.getElementById('expanded-article');
    const expandedIcon = document.getElementById('expanded-icon');
    const expandedTitle = document.getElementById('expanded-title');
    const expandedContent = document.getElementById('expanded-content');
    const expandedReadTime = document.getElementById('expanded-read-time');
    const expandedViews = document.getElementById('expanded-views');
    const closeExpandedBtn = document.getElementById('close-expanded-btn');
    const backToArticlesBtn = document.getElementById('back-to-articles-btn');
    
    // Support Form Elements
    const supportFormContainer = document.getElementById('support-form-container');
    const contactSupportBtn = document.getElementById('contact-support-btn');
    const closeSupportForm = document.getElementById('close-support-form');
    const cancelSupportForm = document.getElementById('cancel-support-form');
    const submitSupportForm = document.getElementById('submit-support-form');
    
    // Live Chat Elements
    const liveChatContainer = document.getElementById('live-chat-container');
    const liveChatBtn = document.getElementById('live-chat-btn');
    const closeLiveChat = document.getElementById('close-live-chat');
    const sendLiveChat = document.getElementById('send-live-chat');
    const liveChatInput = document.getElementById('live-chat-input');
    const liveChatMessages = document.getElementById('live-chat-messages');
    const issueBtns = document.querySelectorAll('.issue-btn');
    
    // State
    let currentCategory = 'all';
    let searchTerm = '';
    
    // Issue Solutions Database (same as before)
    const issueSolutions = {
        login: {
            title: "🔐 Can't Login Issue",
            steps: [
                "1️⃣ Check your email and password - make sure caps lock is off",
                "2️⃣ Click on 'Forgot Password' to reset your password",
                "3️⃣ Verify your email is confirmed (check spam folder for verification email)",
                "4️⃣ Clear browser cache and cookies, then try again",
                "5️⃣ If still facing issues, contact support with your email"
            ],
            video: "https://www.youtube.com/watch?v=example1",
            article: "Read detailed guide: How to Reset Password"
        },
        password: {
            title: "🔑 Forgot Password",
            steps: [
                "1️⃣ Click on 'Forgot Password' on login page",
                "2️⃣ Enter your registered email address",
                "3️⃣ Check your email for OTP (valid for 10 minutes)",
                "4️⃣ Enter OTP and create new password (minimum 6 characters)",
                "5️⃣ Login with your new password"
            ],
            note: "Didn't receive OTP? Check spam folder or click 'Resend OTP' after 60 seconds"
        },
        pdf: {
            title: "📄 PDF Not Loading",
            steps: [
                "1️⃣ Refresh the page and try again",
                "2️⃣ Check your internet connection",
                "3️⃣ Try using Google Chrome browser",
                "4️⃣ Clear browser cache (Ctrl + Shift + Delete)",
                "5️⃣ Disable any ad-blockers temporarily"
            ],
            tip: "If PDF still doesn't load, try downloading it instead of viewing online"
        },
        ai: {
            title: "🤖 AI Not Responding",
            steps: [
                "1️⃣ Make sure you have opened a book first",
                "2️⃣ Check if you've asked a question related to the book content",
                "3️⃣ Try rephrasing your question more specifically",
                "4️⃣ Check your internet connection",
                "5️⃣ Refresh the page and try again"
            ],
            important: "AI only answers questions based on the current book content!"
        },
        profile: {
            title: "👤 Update Profile Issues",
            steps: [
                "1️⃣ Go to 'My Profile' from the user menu",
                "2️⃣ Click 'Edit Profile' button",
                "3️⃣ Update your information (name, class, school)",
                "4️⃣ Click 'Save Changes'",
                "5️⃣ Note: Email cannot be changed - contact support for email changes"
            ]
        },
        books: {
            title: "📚 Books Not Showing",
            steps: [
                "1️⃣ Go to 'My Courses' section",
                "2️⃣ Make sure you're logged in with correct account",
                "3️⃣ Check if books are assigned to your class",
                "4️⃣ Refresh the page",
                "5️⃣ Contact your teacher if books are missing"
            ]
        },
        payment: {
            title: "💰 Payment/Billing Issues",
            steps: [
                "1️⃣ NeuraEduBot is currently FREE for all students!",
                "2️⃣ If you see payment requests, please contact support immediately",
                "3️⃣ This might be a technical error"
            ]
        },
        other: {
            title: "❓ Other Issues",
            steps: [
                "Please describe your issue in detail below",
                "Our support team will help you within 24 hours",
                "You can also use the Contact Support form for detailed assistance"
            ]
        }
    };
    
    // Help Articles Data (same as before - keeping for brevity)
    const articles = [
        // Getting Started
        {
            id: 1,
            title: "📚 Getting Started with NeuraEduBot",
            description: "Learn how to create your account and start your learning journey.",
            category: "getting-started",
            icon: "🚀",
            readTime: "3 min read",
            views: "2.5k",
            content: `
                <h2>Getting Started with NeuraEduBot</h2>
                <p>Welcome to NeuraEduBot! This guide will help you get started with our platform.</p>
                
                <h3>1. Create Your Account</h3>
                <p>Visit the signup page and fill in your details. You'll need:</p>
                <ul>
                    <li>Full name</li>
                    <li>Email address</li>
                    <li>Password (minimum 6 characters)</li>
                </ul>
                
                <h3>2. Complete Your Profile</h3>
                <p>After login, go to My Profile to add:</p>
                <ul>
                    <li>Your class (for students)</li>
                    <li>School name</li>
                    <li>Profile picture</li>
                </ul>
                
                <h3>3. Explore Features</h3>
                <p>Check out these key features:</p>
                <ul>
                    <li><strong>My Courses</strong> - Access your books and study materials</li>
                    <li><strong>AI Learning</strong> - Ask questions and get instant answers</li>
                    <li><strong>Practice Questions</strong> - Test your knowledge</li>
                </ul>
            `
        },
        {
            id: 2,
            title: "🎯 First Steps: Your Dashboard Overview",
            description: "Understand the dashboard and how to navigate the platform.",
            category: "getting-started",
            icon: "🎯",
            readTime: "4 min read",
            views: "1.8k",
            content: `
                <h2>Your Dashboard Overview</h2>
                <p>The dashboard is your home base. Here's what you'll find:</p>
                
                <h3>Main Sections</h3>
                <ul>
                    <li><strong>Home</strong> - Overview and quick stats</li>
                    <li><strong>My Courses</strong> - All your books and learning materials</li>
                    <li><strong>AI Learning</strong> - Ask questions and generate practice tests</li>
                    <li><strong>Your Learning</strong> - Track your progress</li>
                    <li><strong>Profile</strong> - Manage your account</li>
                </ul>
                
                <h3>Quick Actions</h3>
                <p>From the dashboard you can:</p>
                <ul>
                    <li>Continue reading your last book</li>
                    <li>Check your study streak</li>
                    <li>See recent activity</li>
                </ul>
            `
        },
        // Account & Profile
        {
            id: 3,
            title: "🔐 How to Change Your Password",
            description: "Step-by-step guide to update your password securely.",
            category: "account",
            icon: "🔐",
            readTime: "2 min read",
            views: "3.2k",
            content: `
                <h2>How to Change Your Password</h2>
                
                <h3>Steps to Change Password:</h3>
                <ol>
                    <li>Click on your profile picture in the top right corner</li>
                    <li>Select "My Profile" from the dropdown</li>
                    <li>Click the "Change Password" button</li>
                    <li>Enter your current password</li>
                    <li>Enter your new password (minimum 6 characters)</li>
                    <li>Confirm your new password</li>
                    <li>Click "Update Password"</li>
                </ol>
                
                <h3>Password Requirements:</h3>
                <ul>
                    <li>At least 6 characters long</li>
                    <li>Mix of letters and numbers recommended</li>
                    <li>Don't use common passwords</li>
                </ul>
                
                <div class="tip-box">
                    <strong>💡 Tip:</strong> Change your password every 3 months for better security.
                </div>
            `
        },
        {
            id: 4,
            title: "👤 Updating Your Profile Information",
            description: "Learn how to edit your profile details like name, class, and school.",
            category: "account",
            icon: "👤",
            readTime: "2 min read",
            views: "1.5k",
            content: `
                <h2>Updating Your Profile Information</h2>
                
                <h3>Edit Profile Steps:</h3>
                <ol>
                    <li>Go to "My Profile" from the user menu</li>
                    <li>Click the "Edit Profile" button</li>
                    <li>Update your information:
                        <ul>
                            <li>Full name</li>
                            <li>Class (for students)</li>
                            <li>School name</li>
                        </ul>
                    </li>
                    <li>Click "Save Changes"</li>
                </ol>
                
                <h3>What You Can Change:</h3>
                <ul>
                    <li>✅ Full name</li>
                    <li>✅ Class (students only)</li>
                    <li>✅ School name</li>
                    <li>❌ Email (cannot be changed - contact support)</li>
                </ul>
            `
        },
        {
            id: 5,
            title: "📧 Email Verification",
            description: "Why verify your email and how to do it.",
            category: "account",
            icon: "📧",
            readTime: "2 min read",
            views: "900",
            content: `
                <h2>Email Verification</h2>
                
                <h3>Why Verify?</h3>
                <ul>
                    <li>✅ Secure your account</li>
                    <li>✅ Receive important notifications</li>
                    <li>✅ Reset password if forgotten</li>
                </ul>
                
                <h3>How to Verify:</h3>
                <ol>
                    <li>Check your email inbox</li>
                    <li>Look for verification email from NeuraEduBot</li>
                    <li>Click the verification link</li>
                    <li>Your account will be verified instantly</li>
                </ol>
                
                <p>Didn't get the email? Check spam folder or request a new one from profile settings.</p>
            `
        },
        // Courses & Books
        {
            id: 6,
            title: "📖 How to Read Books in My Courses",
            description: "Complete guide to accessing and reading your books.",
            category: "courses",
            icon: "📖",
            readTime: "3 min read",
            views: "2.1k",
            content: `
                <h2>How to Read Books in My Courses</h2>
                
                <h3>Accessing Your Books:</h3>
                <ol>
                    <li>Click on "My Courses" in the sidebar</li>
                    <li>Browse available books for your class</li>
                    <li>Click on any book card to open it</li>
                    <li>The PDF reader will open automatically</li>
                </ol>
                
                <h3>PDF Reader Features:</h3>
                <ul>
                    <li><strong>Page Navigation</strong> - Use Prev/Next buttons</li>
                    <li><strong>Zoom</strong> - Zoom in/out for better viewing</li>
                    <li><strong>Ask AI</strong> - Click "Ask AI about this book" to ask questions</li>
                    <li><strong>Study Stats</strong> - Track your reading progress</li>
                </ul>
            `
        },
        {
            id: 7,
            title: "📊 Tracking Your Reading Progress",
            description: "How to see how much you've read and continue where you left off.",
            category: "courses",
            icon: "📊",
            readTime: "2 min read",
            views: "1.2k",
            content: `
                <h2>Tracking Your Reading Progress</h2>
                
                <h3>Progress Bar</h3>
                <p>Each book shows a progress bar that indicates how much you've read.</p>
                
                <h3>Continue Reading</h3>
                <p>When you reopen a book, it automatically takes you to your last read page.</p>
                
                <h3>Study Streak</h3>
                <p>Your daily reading activity builds your study streak - visible in the study summary card.</p>
            `
        },
        // AI Features
        {
            id: 8,
            title: "🤖 Asking Questions with AI",
            description: "Learn how to ask questions about your books and get instant answers.",
            category: "ai",
            icon: "🤖",
            readTime: "4 min read",
            views: "3.8k",
            content: `
                <h2>Asking Questions with AI</h2>
                
                <h3>How to Ask Questions:</h3>
                <ol>
                    <li>Open any book in "My Courses"</li>
                    <li>Click "Ask AI about this book" button</li>
                    <li>Type your question in the chat</li>
                    <li>AI will answer based on the book content</li>
                </ol>
                
                <h3>Tips for Good Questions:</h3>
                <ul>
                    <li>Be specific about what you want to know</li>
                    <li>Ask about concepts, definitions, or explanations</li>
                    <li>Example: "What is the main theme of Chapter 3?"</li>
                </ul>
                
                <h3>Floating Chatbot</h3>
                <p>You can also use the floating chatbot button (bottom right) to ask questions while reading.</p>
            `
        },
        {
            id: 9,
            title: "📝 Generating Practice Questions",
            description: "Create practice tests from topics you've studied.",
            category: "ai",
            icon: "📝",
            readTime: "3 min read",
            views: "2.4k",
            content: `
                <h2>Generating Practice Questions</h2>
                
                <h3>STUDY-FIRST Approach:</h3>
                <p><strong>Important:</strong> You must study topics first by asking questions. Practice questions are generated ONLY from your study history.</p>
                
                <h3>Steps to Generate Questions:</h3>
                <ol>
                    <li>Ask questions about a topic using AI chat</li>
                    <li>Click "Practice" in the chat header</li>
                    <li>Select a topic you've studied</li>
                    <li>Choose difficulty (Easy/Medium/Hard)</li>
                    <li>Select number of questions</li>
                    <li>Click "Generate"</li>
                </ol>
                
                <h3>Question Types:</h3>
                <ul>
                    <li>Multiple Choice</li>
                    <li>Short Answer</li>
                    <li>True/False</li>
                    <li>Fill in Blanks</li>
                </ul>
            `
        },
        {
            id: 10,
            title: "📈 Understanding Your Study Stats",
            description: "Track your learning progress with detailed analytics.",
            category: "ai",
            icon: "📈",
            readTime: "3 min read",
            views: "1.1k",
            content: `
                <h2>Understanding Your Study Stats</h2>
                
                <h3>Study Analytics Include:</h3>
                <ul>
                    <li><strong>Study Streak</strong> - Consecutive days of learning</li>
                    <li><strong>Total Questions</strong> - Number of questions asked</li>
                    <li><strong>Topics Covered</strong> - What you've studied</li>
                    <li><strong>Mastered Topics</strong> - Topics with 3+ questions</li>
                </ul>
                
                <h3>How to View Stats:</h3>
                <p>While reading a book, click "Study Stats" button to see your progress for that book.</p>
            `
        },
        // Troubleshooting
        {
            id: 11,
            title: "🔧 Can't Log In? Fix Login Issues",
            description: "Solutions for common login problems.",
            category: "troubleshooting",
            icon: "🔧",
            readTime: "3 min read",
            views: "4.5k",
            content: `
                <h2>Can't Log In? Fix Login Issues</h2>
                
                <h3>Common Problems & Solutions:</h3>
                
                <h4>1. Wrong Password</h4>
                <ul>
                    <li>Click "Forgot Password" to reset</li>
                    <li>Check Caps Lock is off</li>
                    <li>Try typing password manually (not paste)</li>
                </ul>
                
                <h4>2. Account Not Verified</h4>
                <ul>
                    <li>Check email for verification link</li>
                    <li>Check spam folder</li>
                    <li>Request new verification email</li>
                </ul>
                
                <h4>3. Session Expired</h4>
                <ul>
                    <li>Just log in again</li>
                    <li>Check your internet connection</li>
                    <li>Clear browser cache</li>
                </ul>
            `
        },
        {
            id: 12,
            title: "📄 PDF Not Loading?",
            description: "Fix issues with PDF reader and book loading.",
            category: "troubleshooting",
            icon: "📄",
            readTime: "2 min read",
            views: "2.8k",
            content: `
                <h2>PDF Not Loading?</h2>
                
                <h3>Quick Fixes:</h3>
                <ul>
                    <li>Refresh the page</li>
                    <li>Check your internet connection</li>
                    <li>Try a different browser (Chrome recommended)</li>
                    <li>Clear browser cache</li>
                </ul>
                
                <h3>If Problem Persists:</h3>
                <p>Contact support with:</p>
                <ul>
                    <li>Book title and class</li>
                    <li>Screenshot of error</li>
                    <li>Browser name and version</li>
                </ul>
            `
        },
        {
            id: 13,
            title: "🤔 AI Not Responding?",
            description: "Troubleshoot issues with AI chat and question generation.",
            category: "troubleshooting",
            icon: "🤔",
            readTime: "2 min read",
            views: "1.9k",
            content: `
                <h2>AI Not Responding?</h2>
                
                <h3>Check These First:</h3>
                <ul>
                    <li>Make sure you have an active internet connection</li>
                    <li>Try asking a different question</li>
                    <li>Check if the document is loaded correctly</li>
                    <li>Refresh the page and try again</li>
                </ul>
                
                <h3>Common Issues:</h3>
                <ul>
                    <li><strong>"I couldn't find information"</strong> - Question not in the document</li>
                    <li><strong>No response</strong> - Try a more specific question</li>
                    <li><strong>Error message</strong> - Take a screenshot and contact support</li>
                </ul>
            `
        },
        // FAQs
        {
            id: 14,
            title: "❓ Is NeuraEduBot Free?",
            description: "Learn about pricing and available plans.",
            category: "faq",
            icon: "💰",
            readTime: "1 min read",
            views: "5.2k",
            content: `
                <h2>Is NeuraEduBot Free?</h2>
                <p>Yes! NeuraEduBot is completely free for all students. We believe in accessible education for everyone.</p>
                <p>All features including AI chat, practice questions, and book access are available at no cost.</p>
            `
        },
        {
            id: 15,
            title: "❓ What Devices Can I Use?",
            description: "Supported platforms and system requirements.",
            category: "faq",
            icon: "📱",
            readTime: "2 min read",
            views: "3.4k",
            content: `
                <h2>What Devices Can I Use?</h2>
                
                <h3>Supported Devices:</h3>
                <ul>
                    <li>💻 Desktop/Laptop (Windows, Mac, Linux)</li>
                    <li>📱 Mobile Phones (Android, iOS)</li>
                    <li>📟 Tablets (iPad, Android tablets)</li>
                </ul>
                
                <h3>Recommended Browsers:</h3>
                <ul>
                    <li>Google Chrome (latest version)</li>
                    <li>Mozilla Firefox (latest version)</li>
                    <li>Safari (latest version)</li>
                    <li>Microsoft Edge (latest version)</li>
                </ul>
            `
        },
        {
            id: 16,
            title: "❓ How Do I Contact Support?",
            description: "All ways to get help from our support team.",
            category: "faq",
            icon: "📞",
            readTime: "1 min read",
            views: "2.1k",
            content: `
                <h2>How Do I Contact Support?</h2>
                
                <h3>Support Options:</h3>
                <ul>
                    <li><strong>Contact Support Form</strong> - Submit a ticket (response within 24 hours)</li>
                    <li><strong>Live Chat</strong> - Chat with support team (9 AM - 6 PM)</li>
                    <li><strong>Email</strong> - support@neuraedubot.com</li>
                </ul>
                
                <p>Click the "Contact Support" or "Live Chat" buttons below to get help now!</p>
            `
        }
    ];
    
    // Helper Functions (same as before)
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
    
    function addBotMessage(text) {
        const botDiv = document.createElement('div');
        botDiv.className = 'chat-message bot';
        botDiv.innerHTML = `<div class="message-content">${text}</div>`;
        liveChatMessages.appendChild(botDiv);
        liveChatMessages.scrollTop = liveChatMessages.scrollHeight;
    }
    
    function addUserMessage(text) {
        const userDiv = document.createElement('div');
        userDiv.className = 'chat-message user';
        userDiv.innerHTML = `<div class="message-content">${escapeHtml(text)}</div>`;
        liveChatMessages.appendChild(userDiv);
        liveChatMessages.scrollTop = liveChatMessages.scrollHeight;
    }
    
    function showIssueSolution(issueKey) {
        const solution = issueSolutions[issueKey];
        if (!solution) return;
        
        let message = `<strong>${solution.title}</strong><br><br>`;
        
        if (solution.steps) {
            message += solution.steps.join('<br>');
        }
        
        if (solution.note) {
            message += `<br><br><em>💡 ${solution.note}</em>`;
        }
        
        if (solution.tip) {
            message += `<br><br><em>💡 ${solution.tip}</em>`;
        }
        
        if (solution.important) {
            message += `<br><br><strong>⚠️ Important: ${solution.important}</strong>`;
        }
        
        message += `<br><br>📖 <a href="#" onclick="expandArticleById(11); return false;">Read detailed guide in Help Center</a>`;
        
        addBotMessage(message);
    }
    
    // Render Articles Grid
    function renderArticles() {
        let filtered = [...articles];
        
        if (currentCategory !== 'all') {
            filtered = filtered.filter(article => article.category === currentCategory);
        }
        
        if (searchTerm.trim()) {
            const term = searchTerm.toLowerCase().trim();
            filtered = filtered.filter(article =>
                article.title.toLowerCase().includes(term) ||
                article.description.toLowerCase().includes(term) ||
                article.category.toLowerCase().includes(term)
            );
        }
        
        if (filtered.length === 0) {
            helpGrid.innerHTML = `
                <div class="empty-books" style="grid-column: 1/-1;">
                    <i class="fas fa-search"></i>
                    <h3>No articles found</h3>
                    <p>Try different keywords or browse categories</p>
                </div>
            `;
            return;
        }
        
        let html = '';
        filtered.forEach(article => {
            html += `
                <div class="article-card" data-id="${article.id}">
                    <div class="article-card-top">
                        <div class="article-icon-wrap">${article.icon}</div>
                        <div class="article-card-body">
                            <h4>${article.title}</h4>
                            <p class="article-description">${article.description}</p>
                        </div>
                    </div>
                    <div class="article-footer">
                        <span class="article-category">${getCategoryName(article.category)}</span>
                        <div class="article-meta">
                            <span><i class="far fa-clock"></i> ${article.readTime}</span>
                            <span><i class="far fa-eye"></i> ${article.views}</span>
                        </div>
                    </div>
                </div>
            `;
        });
        
        helpGrid.innerHTML = html;
        
        document.querySelectorAll('.article-card').forEach(card => {
            card.addEventListener('click', () => {
                const id = parseInt(card.dataset.id);
                const article = articles.find(a => a.id === id);
                if (article) {
                    expandArticle(article);
                }
            });
        });
    }
    
    function getCategoryName(category) {
        const categories = {
            'getting-started': 'Getting Started',
            'account': 'Account',
            'courses': 'Courses',
            'ai': 'AI Features',
            'troubleshooting': 'Troubleshooting',
            'faq': 'FAQ'
        };
        return categories[category] || category;
    }
    
    function expandArticle(article) {
        helpGrid.style.display = 'none';
        expandedIcon.textContent = article.icon;
        expandedTitle.textContent = article.title;
        expandedContent.innerHTML = article.content;
        expandedReadTime.textContent = article.readTime;
        expandedViews.textContent = article.views;
        expandedArticle.style.display = 'block';
        expandedArticle.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
    
    function closeExpanded() {
        expandedArticle.style.display = 'none';
        helpGrid.style.display = 'grid';
    }
    
    // Event Listeners
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            categoryBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentCategory = btn.dataset.category;
            renderArticles();
        });
    });
    
    if (helpSearch) {
        helpSearch.addEventListener('input', (e) => {
            searchTerm = e.target.value;
            renderArticles();
        });
    }
    
    if (closeExpandedBtn) closeExpandedBtn.addEventListener('click', closeExpanded);
    if (backToArticlesBtn) backToArticlesBtn.addEventListener('click', closeExpanded);
    
    // Contact Support
    if (contactSupportBtn) {
        contactSupportBtn.addEventListener('click', () => {
            supportFormContainer.style.display = 'block';
            supportFormContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    }
    
    if (closeSupportForm) closeSupportForm.addEventListener('click', () => {
        supportFormContainer.style.display = 'none';
    });
    
    if (cancelSupportForm) cancelSupportForm.addEventListener('click', () => {
        supportFormContainer.style.display = 'none';
    });
    
    // Submit Support Form
    if (submitSupportForm) {
        submitSupportForm.addEventListener('click', async function(e) {
            e.preventDefault();
            
            const subject = document.getElementById('support-subject').value;
            const message = document.getElementById('support-message').value;
            const attachment = document.getElementById('support-attachment').files[0];
            
            if (!subject) {
                alert('Please select a subject');
                return;
            }
            
            if (!message.trim()) {
                alert('Please enter your message');
                return;
            }
            
            submitSupportForm.disabled = true;
            submitSupportForm.textContent = 'Submitting...';
            
            const formData = new FormData();
            formData.append("subject", subject);
            formData.append("message", message);
            if (attachment) formData.append("attachment", attachment);
            
            try {
                const response = await fetch(`${API_BASE}/help/contact-support`, {
                    method: "POST",
                    body: formData
                });
                const data = await response.json();
                
                if (data.success) {
                    supportFormContainer.style.display = 'none';
                    document.getElementById('support-subject').value = '';
                    document.getElementById('support-message').value = '';
                    document.getElementById('support-attachment').value = '';
                    alert('Support request submitted successfully!');
                } else {
                    alert(data.message || "Error sending support request");
                }
            } catch (error) {
                console.error('API Error:', error);
                alert("Server error. Please try again later.");
            } finally {
                submitSupportForm.disabled = false;
                submitSupportForm.textContent = 'Submit Ticket';
            }
        });
    }
    
    // Live Chat
    if (liveChatBtn) {
        liveChatBtn.addEventListener('click', () => {
            liveChatContainer.style.display = 'block';
            liveChatMessages.innerHTML = `
                <div class="chat-message bot">
                    <div class="message-content">
                        👋 Hi! I'm your NeuraEduBot Assistant. Select an issue from above or type your question below.
                    </div>
                </div>
            `;
            liveChatContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    }
    
    if (closeLiveChat) closeLiveChat.addEventListener('click', () => {
        liveChatContainer.style.display = 'none';
    });
    
    if (issueBtns) {
        issueBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const issue = btn.dataset.issue;
                const issueText = btn.textContent;
                addUserMessage(issueText);
                setTimeout(() => showIssueSolution(issue), 500);
            });
        });
    }
    
    function sendChatMessage() {
        const message = liveChatInput.value.trim();
        if (!message) return;
        
        addUserMessage(message);
        liveChatInput.value = '';
        
        setTimeout(() => {
            const lowerMessage = message.toLowerCase();
            
            if (lowerMessage.includes('login') || lowerMessage.includes('sign in')) {
                showIssueSolution('login');
            } else if (lowerMessage.includes('password') || lowerMessage.includes('forgot')) {
                showIssueSolution('password');
            } else if (lowerMessage.includes('pdf') || lowerMessage.includes('book')) {
                showIssueSolution('pdf');
            } else if (lowerMessage.includes('ai') || lowerMessage.includes('chatbot')) {
                showIssueSolution('ai');
            } else if (lowerMessage.includes('profile') || lowerMessage.includes('update')) {
                showIssueSolution('profile');
            } else if (lowerMessage.includes('book') || lowerMessage.includes('course')) {
                showIssueSolution('books');
            } else if (lowerMessage.includes('payment') || lowerMessage.includes('billing')) {
                showIssueSolution('payment');
            } else {
                addBotMessage("I couldn't find a specific solution for your query. Please select an issue from the buttons above or use the Contact Support form for detailed assistance.");
            }
        }, 1000);
    }
    
    if (sendLiveChat && liveChatInput) {
        sendLiveChat.addEventListener('click', sendChatMessage);
        liveChatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendChatMessage();
        });
    }
    
    // Load articles when section becomes visible
    function checkAndLoad() {
        if (helpSection && helpSection.style.display !== 'none') {
            renderArticles();
        }
    }
    
    if (helpSection) {
        const observer = new MutationObserver(checkAndLoad);
        observer.observe(helpSection, { attributes: true, attributeFilter: ['style'] });
    }
    
    checkAndLoad();
})();
</script>