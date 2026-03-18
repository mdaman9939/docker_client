<!-- Help Center Section -->
<div id="help-section" class="content-section" style="display: none;">
    <div class="help-header">
        <div>
            <h3><i class="fas fa-question-circle"></i> Help Center</h3>
            <p>Find answers to common questions and learn how to use NeuraEduBot</p>
        </div>
        <div class="help-search">
            <i class="fas fa-search"></i>
            <input type="text" id="help-search" placeholder="Search for help articles...">
        </div>
    </div>
    
    <hr class="divider">
    
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
    
    <!-- Still Need Help Section -->
    <div class="still-need-help" id="still-need-help">
        <h4>Still need help?</h4>
        <p>Can't find what you're looking for? Our support team is here to help.</p>
        <div class="support-options">
            <button class="support-btn" id="contact-support-btn">
                <i class="fas fa-envelope"></i> Contact Support
            </button>
            <button class="support-btn" id="live-chat-btn">
                <i class="fas fa-comment"></i> Live Chat
            </button>
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
            <h4 style="color: rgb(225, 226, 230);"><i class="fas fa-comments"></i> Live Support Chat</h4>
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
/* ==================== HELP CENTER STYLES ==================== */
.help-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    flex-wrap: wrap;
    gap: 15px;
}

.help-header h3 {
    font-size: 28px;
    color: #333;
    margin: 0 0 5px 0;
}

.help-header h3 i {
    color: #4361ee;
    margin-right: 10px;
}

.help-header p {
    color: #666;
    margin: 0;
    font-size: 16px;
}

.help-search {
    position: relative;
    min-width: 300px;
}

.help-search i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
}

.help-search input {
    width: 100%;
    padding: 12px 15px 12px 45px;
    border: 2px solid #e0e0e0;
    border-radius: 30px;
    font-size: 16px;
    transition: all 0.3s;
    box-sizing: border-box;
}

.help-search input:focus {
    outline: none;
    border-color: #4361ee;
    box-shadow: 0 0 0 3px rgba(67,97,238,0.1);
}

/* Categories */
.help-categories {
    display: flex;
    gap: 10px;
    margin-bottom: 30px;
    flex-wrap: wrap;
    background: white;
    padding: 15px 20px;
    border-radius: 50px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.category-btn {
    padding: 10px 20px;
    border: none;
    background: transparent;
    border-radius: 30px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s;
    color: #666;
    font-size: 15px;
}

.category-btn:hover {
    background: #f0f4ff;
    color: #4361ee;
}

.category-btn.active {
    background: linear-gradient(135deg, #4361ee, #06d6a0);
    color: white;
}

/* Help Grid */
.help-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 20px;
    margin-bottom: 40px;
}

/* Article Cards */
.article-card {
    background: white;
    border-radius: 20px;
    padding: 20px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    transition: all 0.3s;
    cursor: pointer;
    border: 1px solid #f0f0f0;
}

.article-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(67,97,238,0.15);
    border-color: #4361ee;
}

.article-icon {
    font-size: 40px;
    margin-bottom: 15px;
}

.article-card h4 {
    margin: 0 0 10px 0;
    color: #333;
    font-size: 18px;
}

.article-description {
    color: #666;
    font-size: 14px;
    line-height: 1.5;
    margin: 0 0 15px 0;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.article-meta {
    display: flex;
    gap: 15px;
    font-size: 12px;
    color: #999;
}

.article-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
}

.article-category {
    background: #f0f4ff;
    color: #4361ee;
    padding: 4px 10px;
    border-radius: 15px;
    font-size: 12px;
    display: inline-block;
}

/* Expanded Article View */
.expanded-article {
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    animation: slideDown 0.3s ease;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.expanded-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #f0f0f0;
}

.expanded-header > div {
    display: flex;
    align-items: center;
    gap: 15px;
}

.expanded-icon {
    font-size: 48px;
}

.expanded-header h3 {
    margin: 0;
    color: #333;
    font-size: 24px;
}

.close-expanded-btn {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #666;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s;
}

.close-expanded-btn:hover {
    background: #f0f0f0;
    color: #dc3545;
}

.expanded-content {
    color: #444;
    line-height: 1.7;
    font-size: 16px;
    margin-bottom: 20px;
}

.expanded-content h2 {
    color: #333;
    margin: 30px 0 15px;
    font-size: 22px;
}

.expanded-content h3 {
    color: #4361ee;
    margin: 25px 0 15px;
    font-size: 20px;
}

.expanded-content h4 {
    color: #555;
    margin: 20px 0 10px;
    font-size: 18px;
}

.expanded-content p {
    margin-bottom: 15px;
}

.expanded-content ul,
.expanded-content ol {
    margin-bottom: 20px;
    padding-left: 25px;
}

.expanded-content li {
    margin-bottom: 8px;
}

.expanded-content code {
    background: #f0f0f0;
    padding: 2px 5px;
    border-radius: 4px;
    font-family: monospace;
    font-size: 14px;
}

.expanded-content pre {
    background: #f5f5f5;
    padding: 15px;
    border-radius: 8px;
    overflow-x: auto;
    margin: 20px 0;
}

.expanded-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.expanded-content th,
.expanded-content td {
    border: 1px solid #e0e0e0;
    padding: 10px;
    text-align: left;
}

.expanded-content th {
    background: #f5f5f5;
    font-weight: 600;
}

.expanded-content .tip-box {
    background: #e8f4fd;
    border-left: 4px solid #0284c7;
    padding: 15px;
    border-radius: 8px;
    margin: 20px 0;
}

.expanded-content .warning-box {
    background: #fff3cd;
    border-left: 4px solid #ffc107;
    padding: 15px;
    border-radius: 8px;
    margin: 20px 0;
}

.expanded-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
    padding-top: 15px;
    border-top: 1px solid #eee;
}

.expanded-meta {
    display: flex;
    gap: 20px;
    color: #999;
    font-size: 14px;
}

.expanded-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Still Need Help Section */
.still-need-help {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 20px;
    padding: 40px;
    text-align: center;
    color: white;
    margin-top: 30px;
}

.still-need-help h4 {
    font-size: 24px;
    margin: 0 0 10px 0;
}

.still-need-help p {
    font-size: 16px;
    opacity: 0.9;
    margin: 0 0 25px 0;
}

.support-options {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.support-btn {
    padding: 12px 30px;
    border: none;
    border-radius: 30px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s;
}

#contact-support-btn {
    background: white;
    color: #4361ee;
}

#live-chat-btn {
    background: #06d6a0;
    color: white;
}

.support-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

/* Support Form Card */
.support-form-card,
.chat-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    overflow: hidden;
    animation: slideDown 0.3s ease;
}

.support-form-header,
.chat-header {
    background: linear-gradient(135deg, #4361ee, #3a56d4);
    color: white;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.support-form-header h4,
.chat-header h4 {
    margin: 0;
    font-size: 18px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.close-form-btn,
.close-chat-btn {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    line-height: 1;
}

.support-form-body {
    padding: 25px;
}

/* Quick Issues Styling */
.quick-issues {
    padding: 15px 20px;
    background: #f8f9ff;
    border-bottom: 1px solid #e0e0e0;
}

.quick-issues-title {
    margin: 0 0 10px 0;
    font-weight: 600;
    color: #4361ee;
    font-size: 14px;
}

.issue-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.issue-btn {
    padding: 8px 15px;
    background: white;
    border: 1px solid #4361ee;
    border-radius: 20px;
    font-size: 13px;
    cursor: pointer;
    color: #4361ee;
    transition: all 0.3s;
    white-space: nowrap;
}

.issue-btn:hover {
    background: #4361ee;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 10px rgba(67,97,238,0.2);
}

/* Chat Card */
.chat-messages {
    height: 250px;
    overflow-y: auto;
    padding: 20px;
    background: #f5f7fb;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.chat-message {
    display: flex;
    flex-direction: column;
}

.chat-message.bot {
    align-items: flex-start;
}

.chat-message.user {
    align-items: flex-end;
}

.chat-message .message-content {
    max-width: 80%;
    padding: 10px 15px;
    border-radius: 15px;
    font-size: 14px;
    line-height: 1.5;
}

.chat-message.bot .message-content {
    background: white;
    color: #333;
    border-radius: 15px 15px 15px 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.chat-message.user .message-content {
    background: #4361ee;
    color: white;
    border-radius: 15px 15px 5px 15px;
}

.chat-input-area {
    display: flex;
    gap: 10px;
    padding: 15px;
    background: white;
    border-top: 1px solid #eee;
}

.chat-input-area input {
    flex: 1;
}

.chat-input-area button {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Form Styles */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #555;
    font-weight: 500;
}

.form-control {
    width: 100%;
    padding: 12px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 16px;
    transition: all 0.3s;
    box-sizing: border-box;
}

.form-control:focus {
    outline: none;
    border-color: #4361ee;
    box-shadow: 0 0 0 3px rgba(67,97,238,0.1);
}

.required {
    color: #dc3545;
}

.form-actions {
    display: flex;
    gap: 10px;
    justify-content: flex-end;
    flex-wrap: wrap;
}

.btn-primary, .btn-secondary {
    padding: 12px 30px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s;
}

.btn-primary {
    background: linear-gradient(135deg, #4361ee, #06d6a0);
    color: white;
}

.btn-secondary {
    background: white;
    border: 1px solid #ddd;
    color: #333;
}

.btn-primary:hover, .btn-secondary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Responsive */
@media (max-width: 768px) {
    .help-header {
        flex-direction: column;
        align-items: stretch;
    }
    
    .help-search {
        min-width: auto;
    }
    
    .help-categories {
        border-radius: 20px;
    }
    
    .help-grid {
        grid-template-columns: 1fr;
    }
    
    .support-options {
        flex-direction: column;
    }
    
    .support-btn {
        width: 100%;
        justify-content: center;
    }
    
    .expanded-footer {
        flex-direction: column;
        gap: 15px;
        align-items: flex-start;
    }
    
    .expanded-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .expanded-header > div {
        flex-wrap: wrap;
    }
    
    .issue-buttons {
        flex-wrap: nowrap;
        overflow-x: auto;
        padding-bottom: 5px;
    }
}
</style>

<script>
// Help Center Script - No Popups Version with Interactive Chat
(function() {
    console.log("=== Help Center Initialized (No Popups) ===");
    
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
    
    // Still Need Help Section
    const stillNeedHelp = document.getElementById('still-need-help');
    
    // State
    let currentCategory = 'all';
    let searchTerm = '';
    
    // Issue Solutions Database
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
    
    // Help Articles Data (unchanged)
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
    
    // Helper Functions
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
        
        // Filter by category
        if (currentCategory !== 'all') {
            filtered = filtered.filter(article => article.category === currentCategory);
        }
        
        // Filter by search
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
                    <div class="article-icon">${article.icon}</div>
                    <h4>${article.title}</h4>
                    <p class="article-description">${article.description}</p>
                    <div class="article-meta">
                        <span class="article-category">${getCategoryName(article.category)}</span>
                        <span><i class="far fa-clock"></i> ${article.readTime}</span>
                        <span><i class="far fa-eye"></i> ${article.views}</span>
                    </div>
                </div>
            `;
        });
        
        helpGrid.innerHTML = html;
        
        // Add click listeners to article cards
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
    
    // Helper function to get category display name
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
    
    // Expand Article (instead of popup)
    function expandArticle(article) {
        // Hide the grid and still need help section
        helpGrid.style.display = 'none';
        stillNeedHelp.style.display = 'none';
        
        // Show expanded article
        expandedIcon.textContent = article.icon;
        expandedTitle.textContent = article.title;
        expandedContent.innerHTML = article.content;
        expandedReadTime.textContent = article.readTime;
        expandedViews.textContent = article.views;
        
        expandedArticle.style.display = 'block';
        
        // Scroll to expanded article
        expandedArticle.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
    
    // Close Expanded Article
    function closeExpanded() {
        expandedArticle.style.display = 'none';
        helpGrid.style.display = 'grid';
        stillNeedHelp.style.display = 'block';
    }
    
    // Filter by category
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            categoryBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentCategory = btn.dataset.category;
            renderArticles();
        });
    });
    
    // Search
    if (helpSearch) {
        helpSearch.addEventListener('input', (e) => {
            searchTerm = e.target.value;
            renderArticles();
        });
    }
    
    // Close Expanded Article
    if (closeExpandedBtn) {
        closeExpandedBtn.addEventListener('click', closeExpanded);
    }
    
    if (backToArticlesBtn) {
        backToArticlesBtn.addEventListener('click', closeExpanded);
    }
    
    // Contact Support - Show Form
    if (contactSupportBtn) {
        contactSupportBtn.addEventListener('click', () => {
            // Hide other stuff
            stillNeedHelp.style.display = 'none';
            
            // Show support form
            supportFormContainer.style.display = 'block';
            
            // Scroll to form
            supportFormContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    }
    
    // Close Support Form
    if (closeSupportForm) {
        closeSupportForm.addEventListener('click', () => {
            supportFormContainer.style.display = 'none';
            stillNeedHelp.style.display = 'block';
        });
    }
    
    if (cancelSupportForm) {
        cancelSupportForm.addEventListener('click', () => {
            supportFormContainer.style.display = 'none';
            stillNeedHelp.style.display = 'block';
        });
    }
    
    // Submit Support Form - API Call
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

            // Disable button to prevent double submission
            submitSupportForm.disabled = true;
            submitSupportForm.textContent = 'Submitting...';

            const formData = new FormData();
            formData.append("subject", subject);
            formData.append("message", message);

            if (attachment) {
                formData.append("attachment", attachment);
            }

            try {
                const response = await fetch(`${API_BASE}/help/contact-support`, {
                    method: "POST",
                    body: formData
                });

                const data = await response.json();

                if (data.success) {
                    alert("Support ticket submitted successfully! We'll respond within 24 hours.");

                    // Hide form and show still need help
                    supportFormContainer.style.display = 'none';
                    stillNeedHelp.style.display = 'block';

                    // Reset form
                    document.getElementById('support-subject').value = '';
                    document.getElementById('support-message').value = '';
                    document.getElementById('support-attachment').value = '';

                } else {
                    alert(data.message || "Error sending support request");
                }

            } catch (error) {
                console.error('API Error:', error);
                alert("Server error. Please try again later.");
            } finally {
                // Re-enable button
                submitSupportForm.disabled = false;
                submitSupportForm.textContent = 'Submit Ticket';
            }
        });
    }
    
    // Live Chat - Show Chat
    if (liveChatBtn) {
        liveChatBtn.addEventListener('click', () => {
            // Hide other stuff
            stillNeedHelp.style.display = 'none';
            
            // Show chat
            liveChatContainer.style.display = 'block';
            
            // Clear previous messages
            liveChatMessages.innerHTML = `
                <div class="chat-message bot">
                    <div class="message-content">
                        👋 Hi! I'm your NeuraEduBot Assistant. Select an issue from above or type your question below.
                    </div>
                </div>
            `;
            
            // Scroll to chat
            liveChatContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    }
    
    // Close Live Chat
    if (closeLiveChat) {
        closeLiveChat.addEventListener('click', () => {
            liveChatContainer.style.display = 'none';
            stillNeedHelp.style.display = 'block';
        });
    }
    
    // Issue Buttons Click Handlers
    if (issueBtns) {
        issueBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const issue = btn.dataset.issue;
                const issueText = btn.textContent;
                
                // Add user message
                addUserMessage(issueText);
                
                // Show solution
                setTimeout(() => {
                    showIssueSolution(issue);
                }, 500);
            });
        });
    }
    
    // Send Chat Message
    if (sendLiveChat && liveChatInput) {
        sendLiveChat.addEventListener('click', sendChatMessage);
        liveChatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendChatMessage();
            }
        });
    }
    
    function sendChatMessage() {
        const message = liveChatInput.value.trim();
        if (!message) return;
        
        // Add user message
        addUserMessage(message);
        
        // Clear input
        liveChatInput.value = '';
        
        // Check if message matches any known issue
        setTimeout(() => {
            const lowerMessage = message.toLowerCase();
            
            if (lowerMessage.includes('login') || lowerMessage.includes('sign in') || lowerMessage.includes('log in')) {
                showIssueSolution('login');
            } else if (lowerMessage.includes('password') || lowerMessage.includes('forgot')) {
                showIssueSolution('password');
            } else if (lowerMessage.includes('pdf') || lowerMessage.includes('book') || lowerMessage.includes('loading')) {
                showIssueSolution('pdf');
            } else if (lowerMessage.includes('ai') || lowerMessage.includes('chatbot') || lowerMessage.includes('question')) {
                showIssueSolution('ai');
            } else if (lowerMessage.includes('profile') || lowerMessage.includes('update') || lowerMessage.includes('edit')) {
                showIssueSolution('profile');
            } else if (lowerMessage.includes('book') || lowerMessage.includes('course') || lowerMessage.includes('my courses')) {
                showIssueSolution('books');
            } else if (lowerMessage.includes('payment') || lowerMessage.includes('billing') || lowerMessage.includes('money')) {
                showIssueSolution('payment');
            } else {
                addBotMessage("I couldn't find a specific solution for your query. Please select an issue from the buttons above or use the Contact Support form for detailed assistance.");
            }
        }, 1000);
    }
    
    // Load articles when section becomes visible
    function checkAndLoad() {
        if (helpSection && helpSection.style.display !== 'none') {
            console.log("Help section visible, loading articles...");
            renderArticles();
        }
    }
    
    // Observer for style changes
    if (helpSection) {
        const observer = new MutationObserver(checkAndLoad);
        observer.observe(helpSection, { attributes: true, attributeFilter: ['style'] });
    }
    
    // Initial load if visible
    checkAndLoad();
    
})();
</script>