// config.js - Sabhi pages ke liye central configuration
const CONFIG = {
    // ==================== API CONFIGURATION ====================
    API_BASE_URL: 'https://docker-server-c38j.onrender.com',
    FRONTEND_URL: 'https://docker-client-m892.onrender.com',  // ✅ ADD THIS
    
    ENDPOINTS: {  
        LOGIN: '/api/login',
        SIGNUP: '/api/signup',
        LOGOUT: '/api/logout',
        REFRESH_TOKEN: '/api/refresh-token',
        
        PROFILE: '/api/profile',
        CHANGE_PASSWORD: '/api/change-password',
        PROFILE_PHOTO: '/api/profile/photo',
        
        SEND_OTP: '/api/send-otp',
        VERIFY_OTP: '/api/verify-otp',
        RESEND_OTP: '/api/resend-otp',
        FORGOT_PASSWORD: '/api/forgot-password',
        RESET_PASSWORD: '/api/reset-password',
        
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

        AI_NEWS: '/api/ai_news.php'
    },
    
    PAGES: { 
        LOGIN: '/pages/login.php',
        SIGNUP: '/pages/signup.php',
        DASHBOARD: '/index.php',
    },
    
    getApiUrl: function(endpoint) {
        if (endpoint.startsWith('http')) {
            return endpoint;
        }
        return `${this.API_BASE_URL}${endpoint}`;
    },
    
    getEndpoint: function(key, ...params) {
        const endpoint = this.ENDPOINTS[key];
        if (typeof endpoint === 'function') {
            return endpoint(...params);
        }
        return endpoint;
    },
    
    getUrl: function(key, ...params) {
        const endpoint = this.getEndpoint(key, ...params);
        
        // ✅ SPECIAL HANDLING FOR AI_NEWS
        if (key === 'AI_NEWS') {
            return `${this.FRONTEND_URL}${endpoint}?limit=30`;
        }
        
        if (endpoint && endpoint.startsWith('/neuraEdu/')) {
            return endpoint;
        }
        return this.getApiUrl(endpoint);
    }
};

window.CONFIG = CONFIG;
console.log('✅ Config loaded - Backend:', CONFIG.API_BASE_URL);
console.log('✅ Config loaded - Frontend:', CONFIG.FRONTEND_URL);
