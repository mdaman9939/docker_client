// config.js - Sabhi pages ke liye central configuration
// Is file ko sabhi pages mein include karna hai: <script src="../js/config.js"></script>

const CONFIG = {
    // ==================== API CONFIGURATION ====================
    // Sirf yahan change karo agar server change ho
    API_BASE_URL: 'https://docker-server-c38j.onrender.com',
    
    // API Endpoints
    ENDPOINTS: {  
        // Auth  
        LOGIN: '/api/login',
        SIGNUP: '/api/signup',
        LOGOUT: '/api/logout',
        REFRESH_TOKEN: '/api/refresh-token',
        
        // Profile
        PROFILE: '/api/profile',
        CHANGE_PASSWORD: '/api/change-password',
        PROFILE_PHOTO: '/api/profile/photo',
        
        // OTP
        SEND_OTP: '/api/send-otp',
        VERIFY_OTP: '/api/verify-otp',
        RESEND_OTP: '/api/resend-otp',
        FORGOT_PASSWORD: '/api/forgot-password',
        RESET_PASSWORD: '/api/reset-password',
        
        // Books
        BOOKS: '/student/books',
        DOCUMENTS: '/list-documents',
        SWITCH_DOC: (docId) => `/switch-document/${docId}`,
        ASK: '/ask',
        DOCUMENT_CHATS: (userId, docId) => `/get-document-chats/${userId}/${docId}`,
        USER_CHATS: (userId) => `/get-user-chats/${userId}`,
        DOCUMENT_ID: (bookId) => `/get-document-id/${bookId}`,
        DOCUMENT_STUDIED_TOPICS: (userId, docId) => `/get-document-studied-topics/${userId}/${docId}`,
        BOOK_STUDIED_TOPICS: (userId, bookId) => `/get-book-studied-topics/${userId}/${bookId}`,
        TOPIC_DETAILS: (userId, docId, topic) => `/get-topic-details/${userId}/${docId}?topic=${encodeURIComponent(topic)}`,
        STUDY_STREAK: (userId) => `/get-study-streak/${userId}`,
        GENERATE_QUESTIONS: '/generate-questions',

        // AI News
        AI_NEWS: '/api/ai_news.php'
    },
    
    // ==================== FRONTEND PAGES ====================
    PAGES: { 
        LOGIN: '/pages/login.php',
        SIGNUP: '/pages/signup.php',
        DASHBOARD: '/index.php',
    },
    
    // ==================== HELPER FUNCTIONS ====================
    // Full API URL banane ke liye
    getApiUrl: function(endpoint) {
        // Check if endpoint already starts with http
        if (endpoint.startsWith('http')) {
            return endpoint;
        }
        return `${this.API_BASE_URL}${endpoint}`;
    },
    
    // Endpoint with params banane ke liye
    getEndpoint: function(key, ...params) {
        const endpoint = this.ENDPOINTS[key];
        if (typeof endpoint === 'function') {
            return endpoint(...params);
        }
        return endpoint;
    },
    
    // Full URL with params banane ke liye
    getUrl: function(key, ...params) {
        const endpoint = this.getEndpoint(key, ...params);
        // AI_NEWS is a local PHP endpoint, not on FastAPI
        if (endpoint && endpoint.startsWith('/neuraEdu/')) {
            return endpoint;
        }
        return this.getApiUrl(endpoint);
    }
};

// Global variable banao
window.CONFIG = CONFIG;

console.log('✅ Config loaded:', CONFIG.API_BASE_URL);
