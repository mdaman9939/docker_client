// config.docker.js - Production configuration for Docker deployment
// Replace config.js with this file on the server, OR
// update the API_BASE_URL in config.js after deploying

const CONFIG = {
    // ==================== API CONFIGURATION ====================
    // In production: same domain, Nginx routes /api/ to backend
    // Replace 'your-domain.com' with your actual domain or VPS IP
    API_BASE_URL: '',   // Empty = same origin (Nginx proxies /api/ and other routes)

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
        if (endpoint && endpoint.startsWith('/neuraEdu/')) {
            return endpoint;
        }
        return this.getApiUrl(endpoint);
    }
};

window.CONFIG = CONFIG;

console.log('Config loaded:', CONFIG.API_BASE_URL || window.location.origin);
