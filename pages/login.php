<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Login | NeuraEduBot - AI Learning Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- ⭐ CONFIG.JS - Must be loaded first ⭐ -->
    <script src="../js/config.js"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            overflow: hidden;
        }

        /* ===================== LEFT PANEL ===================== */
        .left-panel {
            flex: 0 0 55%;
            background: linear-gradient(145deg, #3f66e6 0%, #129695 50%, #0ed3a2 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 56px 60px 130px;
            position: relative;
            overflow: hidden;
        }

        /* Decorative circles */
        .left-panel::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: rgba(255,255,255,0.04);
            top: -160px;
            right: -160px;
        }

        .left-panel::after {
            content: '';
            position: absolute;
            width: 360px;
            height: 360px;
            border-radius: 50%;
            background: rgba(255,255,255,0.04);
            bottom: -100px;
            left: -80px;
        }

        .left-inner { position: relative; z-index: 2; }

        /* Brand badge */
        .brand-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.2);
            padding: 7px 16px;
            border-radius: 40px;
            margin-bottom: 32px;
        }

        .brand-badge i { font-size: 14px; color: #a5f0e0; }
        .brand-badge span { font-size: 12px; font-weight: 600; color: rgba(255,255,255,0.85); letter-spacing: 0.8px; text-transform: uppercase; }

        .left-panel h1 {
            font-size: 44px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1.15;
            letter-spacing: -1px;
            margin-bottom: 16px;
        }

        .left-panel h1 span { color: #a5f0e0; }

        .left-panel > .left-inner > p {
            font-size: 15px;
            color: rgba(255,255,255,0.68);
            line-height: 1.65;
            margin-bottom: 44px;
            max-width: 380px;
        }

        /* Feature list */
        .feature-list { display: flex; flex-direction: column; gap: 18px; }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .feature-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border: 1px solid rgba(255,255,255,0.12);
        }

        .feature-icon i { font-size: 16px; color: #a5f0e0; }

        .feature-item span {
            font-size: 14px;
            font-weight: 500;
            color: rgba(255,255,255,0.82);
        }

        /* ===================== RIGHT PANEL ===================== */
        .right-panel {
            flex: 1;
            background: #f0f4f9;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 32px;
            overflow-y: auto;
        }

        /* Card */
        .login-container {
            width: 100%;
            max-width: 420px;
            animation: cardIn 0.5s cubic-bezier(0.34, 1.1, 0.64, 1);
        }

        @keyframes cardIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .login-card {
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 8px 40px rgba(30,50,120,0.10), 0 1px 3px rgba(30,50,120,0.06);
            overflow: hidden;
        }

        /* Card top logo area */
        .login-header {
            padding: 36px 36px 24px;
            text-align: center;
            border-bottom: 1px solid #f0f2f6;
        }

        .logo-circle {
            width: 68px;
            height: 68px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3f66e6, #129695, #0ed3a2);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            box-shadow: 0 6px 20px rgba(63,102,230,0.30);
        }

        .logo-circle i { font-size: 28px; color: #fff; }

        .login-header h1 {
            font-size: 22px;
            font-weight: 700;
            color: #1a1f36;
            margin-bottom: 5px;
            letter-spacing: -0.3px;
        }

        .login-header p {
            font-size: 13px;
            color: #8a94a6;
            font-weight: 400;
        }

        /* Card body */
        .login-body { padding: 28px 36px 36px; }

        /* Form */
        .form-group {
            margin-bottom: 18px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            font-weight: 600;
            color: #1a1f36;
            font-size: 13px;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 14px;
            color: #8a94a6;
            font-size: 14px;
            pointer-events: none;
            z-index: 1;
        }

        .form-group input {
            width: 100%;
            padding: 12px 14px 12px 42px;
            border: 1.5px solid #e4e7ef;
            border-radius: 12px;
            font-size: 14px;
            font-family: 'Inter', sans-serif;
            background: #f7f9fc;
            color: #1a1f36;
            transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #3f66e6;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(63,102,230,0.10);
        }

        .form-group input:hover { border-color: #b0b8d0; }
        .form-group input.error { border-color: #ef4444; background: #fef2f2; }

        .toggle-password {
            position: absolute;
            right: 14px;
            cursor: pointer;
            color: #b0b8d0;
            font-size: 14px;
            transition: color 0.2s;
            z-index: 2;
        }

        .toggle-password:hover { color: #3f66e6; }

        /* Options row */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .remember-checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 13px;
            color: #4b5563;
        }

        .remember-checkbox input {
            width: 15px;
            height: 15px;
            cursor: pointer;
            accent-color: #3f66e6;
        }

        .forgot-link {
            color: #3f66e6;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: color 0.2s;
        }

        .forgot-link:hover { color: #129695; text-decoration: underline; }

        /* Sign in button */
        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #3f66e6, #129695, #0ed3a2);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 700;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 14px rgba(63,102,230,0.30);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .login-btn:hover {
            background: linear-gradient(135deg, #129695, #0ed3a2);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(63,102,230,0.38);
        }

        .login-btn:active { transform: translateY(0); }

        .login-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        /* Messages */
        .success-msg, .error-msg, .info-msg {
            display: none;
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 18px;
            font-weight: 500;
            font-size: 13px;
            animation: msgIn 0.3s ease;
        }

        @keyframes msgIn {
            from { opacity: 0; transform: translateY(-8px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .success-msg { background: #ecfdf5; color: #065f46; border: 1px solid #6ee7b7; }
        .error-msg   { background: #fef2f2; color: #991b1b; border: 1px solid #fca5a5; }
        .info-msg    { background: #eff6ff; color: #1e40af; border: 1px solid #93c5fd; }

        /* Spinner */
        .loading {
            display: inline-block;
            width: 16px;
            height: 16px;
            border: 2px solid rgba(255,255,255,0.4);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
            vertical-align: middle;
        }

        @keyframes spin { to { transform: rotate(360deg); } }

        /* Sign up link */
        .signup-link {
            text-align: center;
            margin-top: 22px;
            padding-top: 20px;
            border-top: 1px solid #eef0f6;
            font-size: 13px;
            color: #8a94a6;
        }

        .signup-link a {
            color: #3f66e6;
            text-decoration: none;
            font-weight: 700;
            transition: color 0.2s;
        }

        .signup-link a:hover { color: #129695; text-decoration: underline; }

        /* ===================== MODAL ===================== */
        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(10,15,60,0.55);
            backdrop-filter: blur(6px);
            z-index: 2000;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.25s ease;
        }

        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        .modal-content {
            background: white;
            width: 100%;
            max-width: 420px;
            margin: 20px;
            border-radius: 20px;
            padding: 32px 28px;
            box-shadow: 0 20px 60px rgba(10,15,60,0.20);
            animation: modalUp 0.35s cubic-bezier(0.34, 1.1, 0.64, 1);
        }

        @keyframes modalUp {
            from { opacity: 0; transform: translateY(24px) scale(0.97); }
            to   { opacity: 1; transform: translateY(0) scale(1); }
        }

        .modal-content > i { font-size: 36px; color: #129695; margin-bottom: 10px; display: block; }
        .modal-content h3 { font-size: 20px; font-weight: 700; color: #1a1f36; margin-bottom: 5px; }
        .modal-content > p { color: #8a94a6; margin-bottom: 22px; font-size: 13px; }

        /* Modal form */
        .modal .form-group { margin-bottom: 16px; }
        .modal .form-group label { font-size: 13px; margin-bottom: 6px; }
        .modal .input-icon { font-size: 13px; left: 13px; }
        .modal .form-group input { padding: 11px 13px 11px 38px; font-size: 14px; border-radius: 10px; }
        .modal .toggle-password { font-size: 13px; right: 13px; }

        .modal-btn {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
        }

        .modal-btn-primary { background: linear-gradient(135deg, #3f66e6, #129695, #0ed3a2); color: white; box-shadow: 0 3px 10px rgba(63,102,230,0.25); }
        .modal-btn-primary:hover { background: linear-gradient(135deg, #129695, #0ed3a2); transform: translateY(-1px); }
        .modal-btn-secondary { background: #f3f4f6; color: #4b5563; border: 1px solid #e5e7eb; }
        .modal-btn-secondary:hover { background: #e5e7eb; }
        .modal-btn-cancel { background: white; color: #6b7280; border: 1px solid #e5e7eb; margin-top: 10px; }
        .modal-btn-cancel:hover { background: #f9fafb; }

        #resetOtp { text-align: center; letter-spacing: 6px; font-size: 18px; font-weight: 600; }

        /* ===================== RESPONSIVE ===================== */
        @media (max-width: 900px) {
            .left-panel { flex: 0 0 48%; padding: 48px 36px 48px 56px; }
            .left-panel h1 { font-size: 34px; }
        }

        @media (max-width: 720px) {
            body { flex-direction: column; overflow: auto; }

            .left-panel {
                flex: none;
                padding: 36px 28px 32px;
            }

            .left-panel h1 { font-size: 28px; }
            .left-panel > .left-inner > p { display: none; }
            .feature-list { display: none; }

            .right-panel { padding: 32px 20px 40px; }
            .login-body { padding: 24px 24px 30px; }
            .login-header { padding: 28px 24px 20px; }
        }

        @media (max-width: 480px) {
            .form-options { flex-direction: column; gap: 12px; align-items: flex-start; }
            .login-container { max-width: 100%; }
        }
    </style>
</head>
<body>

<!-- Left Panel -->
<div class="left-panel">
    <div class="left-inner">
        <div class="brand-badge">
            <i class="fas fa-graduation-cap"></i>
            <span>NeuraEduBot Platform</span>
        </div>

        <h1>Welcome<br>Back <span>Student</span></h1>
        <p>Your AI-powered learning companion. Pick up right where you left off and keep growing every day.</p>

        <div class="feature-list">
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-robot"></i></div>
                <span>AI-Powered Personalised Learning</span>
            </div>
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                <span>Track Your Progress & Analytics</span>
            </div>
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-book-open"></i></div>
                <span>Access All Course Materials & Books</span>
            </div>
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-tasks"></i></div>
                <span>Interactive Assignments & Quizzes</span>
            </div>
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-comments"></i></div>
                <span>Live Chat & Peer Collaboration</span>
            </div>
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-trophy"></i></div>
                <span>Earn Points & Certificates</span>
            </div>
        </div>
    </div>
</div>

<!-- Right Panel -->
<div class="right-panel">
    <div class="login-container">
        <div class="login-card">

            <div class="login-header">
                <div class="logo-circle">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h1>Sign In</h1>
                <p>Welcome back to NeuraEduBot</p>
            </div>

            <div class="login-body">

                <div id="successMsg" class="success-msg">
                    <i class="fas fa-check-circle" style="margin-right:6px;"></i>
                    Login Successful! Redirecting...
                </div>
                <div id="errorMsg" class="error-msg"></div>
                <div id="infoMsg" class="info-msg"></div>

                <form id="loginForm" onsubmit="return false;">
                    <div class="form-group">
                        <label>Email Address</label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" id="email" placeholder="Enter your email" autocomplete="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" id="password" placeholder="Enter your password" autocomplete="current-password" required>
                            <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="remember-checkbox">
                            <input type="checkbox" id="remember">
                            <span>Remember me (30 days)</span>
                        </label>
                        <span class="forgot-link" id="forgotLink">Forgot Password?</span>
                    </div>

                    <button type="button" id="loginBtn" class="login-btn">
                        <i class="fas fa-arrow-right-to-bracket"></i>
                        Sign In
                    </button>
                </form>

                <div class="signup-link">
                    Don't have an account?
                    <a href="signup.php">Create free account →</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Forgot Password Modal -->
<div id="forgotModal" class="modal">
    <div class="modal-content">
        <i class="fas fa-key"></i>
        <h3 id="modalTitle">Reset Your Password</h3>
        <p id="modalSubtitle">Enter your email and we'll send you an OTP to reset your password.</p>

        <!-- Step 1: Email -->
        <div id="resetStep1">
            <div class="form-group">
                <label>Email Address</label>
                <div class="input-wrapper">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" id="resetEmail" placeholder="your@email.com">
                </div>
            </div>
            
            <button onclick="sendResetOtp()" id="sendOtpBtn" class="modal-btn modal-btn-primary">
                <i class="fas fa-paper-plane" style="margin-right: 6px; font-size: 12px;"></i>
                Send OTP
            </button>
        </div>

        <!-- Step 2: OTP + New Password -->
        <div id="resetStep2" style="display: none;">
            <div class="form-group">
                <label>OTP Code</label>
                <div class="input-wrapper">
                    <i class="fas fa-qrcode input-icon"></i>
                    <input type="text" id="resetOtp" placeholder="123456" maxlength="6">
                </div>
            </div>

            <div class="form-group">
                <label>New Password</label>
                <div class="input-wrapper">
                    <i class="fas fa-key input-icon"></i>
                    <input type="password" id="newPassword" placeholder="Enter new password">
                    <i class="fas fa-eye toggle-password" id="toggleNewPass"></i>
                </div>
            </div>

            <div class="form-group">
                <label>Confirm New Password</label>
                <div class="input-wrapper">
                    <i class="fas fa-check-circle input-icon"></i>
                    <input type="password" id="confirmPassword" placeholder="Confirm new password">
                    <i class="fas fa-eye toggle-password" id="toggleConfirmPass"></i>
                </div>
            </div>

            <button onclick="performPasswordReset()" id="resetPasswordBtn" class="modal-btn modal-btn-primary">
                <i class="fas fa-sync-alt" style="margin-right: 6px; font-size: 12px;"></i>
                Reset Password
            </button>

            <button onclick="backToEmailStep()" class="modal-btn modal-btn-secondary" style="margin-top: 10px;">
                <i class="fas fa-arrow-left" style="margin-right: 6px; font-size: 12px;"></i>
                Back
            </button>
        </div>

        <button onclick="closeModal()" class="modal-btn modal-btn-cancel">
            Cancel
        </button>
    </div>
</div>

<script>
// ==================== CONFIGURATION - 30 DAYS TOKEN EXPIRY ====================
const API_BASE_URL = CONFIG.API_BASE_URL;
const API_URL = API_BASE_URL + '/api';

// 30 days in seconds = 30 * 24 * 60 * 60 = 2,592,000 seconds
const THIRTY_DAYS_IN_SECONDS = 30 * 24 * 60 * 60;

console.log('🚀 Login page loaded with API_URL:', API_URL);
console.log('✅ 30 days token expiry configured:', THIRTY_DAYS_IN_SECONDS, 'seconds');

// Get DOM elements
const loginBtn = document.getElementById('loginBtn');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const rememberCheckbox = document.getElementById('remember');
const successMsg = document.getElementById('successMsg');
const errorMsg = document.getElementById('errorMsg');
const infoMsg = document.getElementById('infoMsg');
const togglePassword = document.getElementById('togglePassword');

// Modal elements
const modal = document.getElementById('forgotModal');
const forgotLink = document.getElementById('forgotLink');
const modalTitle = document.getElementById('modalTitle');
const modalSubtitle = document.getElementById('modalSubtitle');
const resetStep1 = document.getElementById('resetStep1');
const resetStep2 = document.getElementById('resetStep2');
const resetEmailInput = document.getElementById('resetEmail');
const resetOtpInput = document.getElementById('resetOtp');
const newPasswordInput = document.getElementById('newPassword');
const confirmPasswordInput = document.getElementById('confirmPassword');
const sendOtpBtn = document.getElementById('sendOtpBtn');
const resetPasswordBtn = document.getElementById('resetPasswordBtn');
const toggleNewPass = document.getElementById('toggleNewPass');
const toggleConfirmPass = document.getElementById('toggleConfirmPass');

// Global variable for reset flow
let currentResetEmail = '';

// ==================== TOKEN MANAGEMENT ====================

/**
 * Calculate token expiry time (30 days from now)
 */
function calculateTokenExpiry(expiresInSeconds = THIRTY_DAYS_IN_SECONDS) {
    const expiryTime = new Date().getTime() + (expiresInSeconds * 1000);
    const expiryDate = new Date(expiryTime);
    console.log(`📅 Token will expire on: ${expiryDate.toLocaleString()}`);
    console.log(`📆 Days remaining: ${Math.floor(expiresInSeconds / (24 * 60 * 60))} days`);
    return expiryTime;
}

/**
 * Check if token is still valid
 */
function isTokenValid() {
    const token = localStorage.getItem('access_token');
    const tokenExpiry = localStorage.getItem('token_expiry');
    
    if (!token || !tokenExpiry) return false;
    
    const now = new Date().getTime();
    const isValid = now < parseInt(tokenExpiry);
    
    if (!isValid) {
        console.log('❌ Token expired, clearing storage');
        clearAuthData();
        return false;
    }
    
    const daysRemaining = Math.floor((parseInt(tokenExpiry) - now) / (1000 * 60 * 60 * 24));
    console.log(`✅ Token valid. Days remaining: ${daysRemaining}`);
    return true;
}

/**
 * Clear all authentication data
 */
function clearAuthData() {
    localStorage.removeItem('access_token');
    localStorage.removeItem('refresh_token');
    localStorage.removeItem('token_expiry');
    localStorage.removeItem('user');
    localStorage.removeItem('user_id');
    localStorage.removeItem('user_role');
    localStorage.removeItem('rememberedEmail');
    localStorage.removeItem('rememberedPassword');
    console.log('🗑️ All auth data cleared');
}

/**
 * Store tokens after login
 */
function storeTokens(accessToken, refreshToken, expiresInSeconds, userData, remember) {
    const expiryTime = calculateTokenExpiry(expiresInSeconds);
    
    localStorage.setItem('access_token', accessToken);
    if (refreshToken) localStorage.setItem('refresh_token', refreshToken);
    localStorage.setItem('token_expiry', expiryTime.toString());
    localStorage.setItem('user', JSON.stringify(userData));
    localStorage.setItem('user_id', userData.id || userData.userId || '');
    localStorage.setItem('user_role', userData.role || 'student');
    
    if (remember) {
        localStorage.setItem('rememberedEmail', userData.email);
        // ⚠️ IMPORTANT: NEVER store password in localStorage for security reasons
        // Password is only stored in memory during session
        console.log('📧 Remembered email stored');
    } else {
        localStorage.removeItem('rememberedEmail');
        localStorage.removeItem('rememberedPassword');
    }
    
    console.log('✅ Tokens stored successfully');
}

// ==================== CHECK SAVED SESSION ====================
document.addEventListener('DOMContentLoaded', async function() {
    // Check if already logged in with valid token
    if (isTokenValid()) {
        console.log('🎉 Valid token found, redirecting to dashboard...');
        window.location.href = '../index.php';
        return;
    }
    
    // Load remembered email only (not password for security)
    const savedEmail = localStorage.getItem('rememberedEmail');
    if (savedEmail) {
        emailInput.value = savedEmail;
        rememberCheckbox.checked = true;
        console.log('📧 Loaded remembered email');
        // Focus on password field
        passwordInput.focus();
    }

    loginBtn.setAttribute('data-original-text', 'Sign In');
    sendOtpBtn.setAttribute('data-original-text', 'Send OTP');
    resetPasswordBtn.setAttribute('data-original-text', 'Reset Password');
    
    console.log('🚀 Ready for login (30 days session)');
});

// ==================== PASSWORD TOGGLE ====================
function togglePasswordVisibility(input, icon) {
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}

togglePassword.addEventListener('click', () => togglePasswordVisibility(passwordInput, togglePassword));
toggleNewPass.addEventListener('click', () => togglePasswordVisibility(newPasswordInput, toggleNewPass));
toggleConfirmPass.addEventListener('click', () => togglePasswordVisibility(confirmPasswordInput, toggleConfirmPass));

// ==================== UTILITY FUNCTIONS ====================
function showError(message) {
    errorMsg.innerHTML = `<i class="fas fa-exclamation-circle" style="margin-right: 8px;"></i> ${message}`;
    errorMsg.style.display = 'block';
    setTimeout(() => errorMsg.style.display = 'none', 5000);
}

function showInfo(message) {
    infoMsg.innerHTML = `<i class="fas fa-info-circle" style="margin-right: 8px;"></i> ${message}`;
    infoMsg.style.display = 'block';
    setTimeout(() => infoMsg.style.display = 'none', 4000);
}

function setLoading(button, isLoading) {
    if (isLoading) {
        button.disabled = true;
        button.innerHTML = `<span class="loading"></span> ${button.getAttribute('data-original-text')}...`;
    } else {
        button.disabled = false;
        button.innerHTML = button.getAttribute('data-original-text');
        if (button.id === 'loginBtn') {
            button.innerHTML = `<i class="fas fa-arrow-right-to-bracket"></i> Sign In`;
        } else if (button.id === 'sendOtpBtn') {
            button.innerHTML = `<i class="fas fa-paper-plane" style="margin-right: 6px; font-size: 12px;"></i> Send OTP`;
        } else if (button.id === 'resetPasswordBtn') {
            button.innerHTML = `<i class="fas fa-sync-alt" style="margin-right: 6px; font-size: 12px;"></i> Reset Password`;
        }
    }
}

function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function removeErrorClass() {
    emailInput.classList.remove('error');
    passwordInput.classList.remove('error');
}

// ==================== FORGOT PASSWORD MODAL ====================
function showStep1() {
    resetStep1.style.display = 'block';
    resetStep2.style.display = 'none';
    modalTitle.textContent = 'Reset Your Password';
    modalSubtitle.textContent = "Enter your email and we'll send you an OTP to reset your password.";
    resetEmailInput.focus();
}

function showStep2() {
    resetStep1.style.display = 'none';
    resetStep2.style.display = 'block';
    modalTitle.textContent = 'Enter OTP & New Password';
    modalSubtitle.textContent = `OTP sent to ${currentResetEmail}`;
    resetOtpInput.focus();
}

forgotLink.addEventListener('click', () => {
    modal.style.display = 'flex';
    showStep1();
    resetEmailInput.value = emailInput.value.trim();
});

function closeModal() {
    modal.style.display = 'none';
    showStep1();
    resetOtpInput.value = '';
    newPasswordInput.value = '';
    confirmPasswordInput.value = '';
}

async function sendResetOtp() {
    const email = resetEmailInput.value.trim();

    if (!email) {
        alert('Please enter your email');
        return;
    }
    if (!isValidEmail(email)) {
        alert('Please enter a valid email address');
        return;
    }

    setLoading(sendOtpBtn, true);

    try {
        const response = await fetch(`${API_URL}/forgot-password`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email: email })
        });

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.detail || 'Failed to send OTP');
        }

        currentResetEmail = email;
        showStep2();
        showInfo('OTP sent successfully! Check your email.');

    } catch (error) {
        alert('Error: ' + error.message);
    } finally {
        setLoading(sendOtpBtn, false);
    }
}

async function performPasswordReset() {
    const otp = resetOtpInput.value.trim();
    const newPass = newPasswordInput.value;
    const confirmPass = confirmPasswordInput.value;

    if (otp.length !== 6) {
        alert('Please enter the 6-digit OTP');
        return;
    }
    if (newPass.length < 6) {
        alert('New password must be at least 6 characters long');
        return;
    }
    if (newPass !== confirmPass) {
        alert('Passwords do not match');
        return;
    }

    setLoading(resetPasswordBtn, true);

    try {
        const response = await fetch(`${API_URL}/reset-password`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                email: currentResetEmail,
                otp: otp,
                new_password: newPass
            })
        });

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.detail || 'Password reset failed');
        }

        closeModal();
        showInfo('Password reset successfully! You can now login with your new password.');
        passwordInput.value = '';

    } catch (error) {
        alert('Error: ' + error.message);
    } finally {
        setLoading(resetPasswordBtn, false);
    }
}

function backToEmailStep() {
    showStep1();
    resetOtpInput.value = '';
    newPasswordInput.value = '';
    confirmPasswordInput.value = '';
}

// ==================== LOGIN FUNCTION WITH 30 DAYS TOKEN ====================
loginBtn.addEventListener('click', async () => {
    const email = emailInput.value.trim();
    const password = passwordInput.value;
    const remember = rememberCheckbox.checked;

    if (!email) {
        showError('Please enter your email');
        emailInput.classList.add('error');
        return;
    }
    if (!isValidEmail(email)) {
        showError('Please enter a valid email address');
        emailInput.classList.add('error');
        return;
    }
    if (!password) {
        showError('Please enter your password');
        passwordInput.classList.add('error');
        return;
    }

    removeErrorClass();
    setLoading(loginBtn, true);

    try {
        console.log('🔐 Attempting login for:', email);
        
        const response = await fetch(`${API_URL}/login`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email: email, password: password })
        });

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.detail || data.message || 'Login failed');
        }

        if (data.success) {
            const accessToken = data.data?.access_token;
            const refreshToken = data.data?.refresh_token;
            // Server se aaya hua expires_in (30 days = 2,592,000 seconds)
            const expiresIn = data.data?.expires_in || THIRTY_DAYS_IN_SECONDS;
            const userData = data.data?.user || data.user;

            if (!accessToken) throw new Error('No access token received');
            if (!userData) throw new Error('No user data received');

            console.log(`🎉 Login successful! Token expires in: ${Math.floor(expiresIn / (24 * 60 * 60))} days`);
            
            // Store tokens with 30 days expiry
            storeTokens(accessToken, refreshToken, expiresIn, userData, remember);

            setAuthHeader(accessToken);
            successMsg.style.display = 'block';

            setTimeout(() => {
                window.location.href = '../index.php';
            }, 2000);
        } else {
            showError(data.message || 'Login failed');
        }

    } catch (error) {
        console.error("LOGIN ERROR:", error);
        showError(error.message || 'Something went wrong. Please try again.');
    } finally {
        setLoading(loginBtn, false);
    }
});

// ==================== TOKEN REFRESH FUNCTION ====================
async function refreshAccessToken() {
    const refreshToken = localStorage.getItem('refresh_token');
    if (!refreshToken) return false;

    try {
        console.log('🔄 Refreshing access token...');
        
        const response = await fetch(`${API_URL}/refresh-token`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ refresh_token: refreshToken })
        });

        const data = await response.json();

        if (data.success && data.data?.access_token) {
            const newAccessToken = data.data.access_token;
            const expiresIn = data.data.expires_in || THIRTY_DAYS_IN_SECONDS;
            const expiryTime = calculateTokenExpiry(expiresIn);
            
            localStorage.setItem('access_token', newAccessToken);
            localStorage.setItem('token_expiry', expiryTime.toString());
            
            console.log('✅ Access token refreshed successfully');
            return true;
        }
        return false;
    } catch (error) {
        console.error('Token refresh failed:', error);
        return false;
    }
}

function setAuthHeader(token) {
    window.authToken = token;
}

// ==================== LOGOUT FUNCTION ====================
async function logout() {
    const token = localStorage.getItem('access_token');
    const refreshToken = localStorage.getItem('refresh_token');

    try {
        if (token) {
            await fetch(`${API_URL}/logout`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${token}`
                },
                body: JSON.stringify({ refresh_token: refreshToken })
            });
        }
    } catch (error) {
        console.error('Logout error:', error);
    } finally {
        clearAuthData();
        window.location.href = 'login.php';
    }
}

// ==================== EVENT LISTENERS ====================
modal.addEventListener('click', function(e) {
    if (e.target === modal) closeModal();
});

passwordInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') loginBtn.click();
});

emailInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') passwordInput.focus();
});

emailInput.addEventListener('input', removeErrorClass);
passwordInput.addEventListener('input', removeErrorClass);

// ==================== EXPORT FUNCTIONS ====================
window.logout = logout;
window.refreshAccessToken = refreshAccessToken;
window.isTokenValid = isTokenValid;

console.log('✅ Login page initialized with 30-day token expiry');
</script>

</body>
</html>