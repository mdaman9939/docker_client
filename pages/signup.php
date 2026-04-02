<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Sign Up | NeuraEduBot - AI Learning Platform</title>
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
            flex: 0 0 45%;
            background: linear-gradient(145deg, #3f66e6 0%, #129695 50%, #0ed3a2 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 56px 60px 80px;
            position: relative;
            overflow: hidden;
        }

        .left-panel::before {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            border-radius: 50%;
            background: rgba(255,255,255,0.04);
            top: -160px; right: -160px;
        }

        .left-panel::after {
            content: '';
            position: absolute;
            width: 360px; height: 360px;
            border-radius: 50%;
            background: rgba(255,255,255,0.04);
            bottom: -100px; left: -80px;
        }

        .left-inner { position: relative; z-index: 2; }

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
            font-size: 40px;
            font-weight: 800;
            color: #fff;
            line-height: 1.15;
            letter-spacing: -1px;
            margin-bottom: 16px;
        }

        .left-panel h1 span { color: #a5f0e0; }

        .left-panel > .left-inner > p {
            font-size: 14px;
            color: rgba(255,255,255,0.68);
            line-height: 1.65;
            margin-bottom: 36px;
            max-width: 340px;
        }

        .feature-list { display: flex; flex-direction: column; gap: 14px; }

        .feature-item { display: flex; align-items: center; gap: 14px; }

        .feature-icon {
            width: 38px; height: 38px;
            border-radius: 10px;
            background: rgba(255,255,255,0.1);
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
            border: 1px solid rgba(255,255,255,0.12);
        }

        .feature-icon i { font-size: 15px; color: #a5f0e0; }
        .feature-item span { font-size: 13px; font-weight: 500; color: rgba(255,255,255,0.82); }

        /* ===================== RIGHT PANEL ===================== */
        .right-panel {
            flex: 1;
            background: #f0f4f9;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 28px;
            overflow-y: auto;
        }

        .signup-container {
            width: 100%;
            max-width: 520px;
            animation: cardIn 0.5s cubic-bezier(0.34, 1.1, 0.64, 1);
        }

        @keyframes cardIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .signup-card {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 8px 40px rgba(30,50,120,0.10), 0 1px 3px rgba(30,50,120,0.06);
            overflow: hidden;
        }

        /* Card top */
        .signup-header {
            padding: 28px 32px 20px;
            text-align: center;
            border-bottom: 1px solid #f0f2f6;
        }

        .logo-circle {
            width: 60px; height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3f66e6, #129695, #0ed3a2);
            display: inline-flex; align-items: center; justify-content: center;
            margin-bottom: 14px;
            box-shadow: 0 6px 20px rgba(63,102,230,0.30);
        }

        .logo-circle i { font-size: 24px; color: #fff; }

        .signup-header h1 {
            font-size: 20px; font-weight: 700;
            color: #1a1f36; margin-bottom: 4px; letter-spacing: -0.3px;
        }

        .signup-header p { font-size: 13px; color: #8a94a6; }

        /* Card body */
        .signup-body { padding: 24px 32px 32px; }

        /* Step Indicator */
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 24px;
            padding: 0 4px;
        }

        .step { flex: 1; text-align: center; position: relative; }

        .step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 16px; right: -50%;
            width: 100%; height: 2px;
            background: #e4e7ef; z-index: 1;
        }

        .step.completed::after { background: #10b981; }

        .step-circle {
            width: 34px; height: 34px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid #e4e7ef;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 8px;
            font-size: 13px; font-weight: 700;
            position: relative; z-index: 2;
            transition: all 0.3s ease;
        }

        .step.active .step-circle  { background: linear-gradient(135deg, #3f66e6, #0ed3a2); color: #fff; border-color: #0ed3a2; box-shadow: 0 0 0 3px rgba(14,211,162,0.18); }
        .step.completed .step-circle { background: #10b981; color: #fff; border-color: #10b981; }

        .step-label { font-size: 11px; color: #8a94a6; font-weight: 500; }
        .step.active .step-label    { color: #129695; font-weight: 600; }
        .step.completed .step-label { color: #10b981; }

        /* Grid layout */
        .three-columns {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
            margin-bottom: 14px;
        }

        .full-width { grid-column: span 2; }

        /* Form groups */
        .form-group { margin-bottom: 0; position: relative; }

        .form-group label {
            display: block; margin-bottom: 6px;
            font-weight: 600; color: #1a1f36;
            font-size: 12px;
        }

        .input-wrapper { position: relative; display: flex; align-items: center; }

        .input-icon {
            position: absolute; left: 13px;
            color: #8a94a6; font-size: 13px;
            pointer-events: none; z-index: 1;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px 12px 10px 36px;
            border: 1.5px solid #e4e7ef;
            border-radius: 10px;
            font-size: 13px;
            font-family: 'Inter', sans-serif;
            background: #f7f9fc;
            color: #1a1f36;
            transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
        }

        .form-group select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%238a94a6'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 14px;
            padding-right: 36px;
        }

        .form-group input:focus, .form-group select:focus {
            outline: none; border-color: #3f66e6;
            background: #fff; box-shadow: 0 0 0 3px rgba(63,102,230,0.10);
        }

        .form-group input:hover, .form-group select:hover { border-color: #b0b8d0; }
        .form-group input.error, .form-group select.error { border-color: #ef4444; background: #fef2f2; }

        .toggle-password {
            position: absolute; right: 12px;
            cursor: pointer; color: #b0b8d0;
            font-size: 13px; transition: color 0.2s; z-index: 2;
        }

        .toggle-password:hover { color: #3f66e6; }

        /* Role cards */
        .role-options { display: flex; gap: 12px; margin-bottom: 0; }

        .role-card {
            flex: 1; padding: 14px 10px;
            border: 1.5px solid #e4e7ef;
            border-radius: 12px;
            text-align: center; cursor: pointer;
            transition: all 0.2s; background: #f7f9fc;
        }

        .role-card i { font-size: 22px; color: #129695; margin-bottom: 5px; display: block; }
        .role-card p { margin: 0; font-weight: 600; color: #1a1f36; font-size: 12px; }

        .role-card.active {
            border-color: #0ed3a2;
            background: #eefaf6;
            box-shadow: 0 3px 10px rgba(63,102,230,0.14);
        }

        /* Password hint & notes */
        .password-requirements { font-size: 11px; color: #8a94a6; margin-top: 5px; padding-left: 2px; }
        .password-requirements i { color: #10b981; margin-right: 4px; font-size: 10px; }
        .field-note { font-size: 11px; color: #b0b8d0; margin-top: 4px; font-style: italic; }
        .required-asterisk { color: #ef4444; margin-left: 3px; }

        /* Buttons */
        .btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #3f66e6, #129695, #0ed3a2);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 14px; font-weight: 700;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 14px rgba(63,102,230,0.28);
            margin-top: 16px;
            display: flex; align-items: center; justify-content: center; gap: 8px;
        }

        .btn:hover { background: linear-gradient(135deg, #129695, #0ed3a2); transform: translateY(-1px); box-shadow: 0 6px 18px rgba(63,102,230,0.36); }
        .btn:active { transform: translateY(0); }
        .btn:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }
        .btn-secondary { background: #6b7280; box-shadow: 0 4px 14px rgba(75,85,99,0.22); }
        .btn-secondary:hover { background: #4b5563; }

        /* Messages */
        .success-msg, .error-msg, .info-msg {
            display: none; padding: 11px 14px;
            border-radius: 10px; margin-bottom: 16px;
            font-weight: 500; font-size: 12.5px;
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
            display: inline-block; width: 14px; height: 14px;
            border: 2px solid rgba(255,255,255,0.4);
            border-top-color: #fff; border-radius: 50%;
            animation: spin 0.7s linear infinite; vertical-align: middle;
        }

        @keyframes spin { to { transform: rotate(360deg); } }

        /* OTP */
        #otpInput { text-align: center; font-size: 20px; letter-spacing: 6px; font-weight: 600; }

        /* Resend timer */
        #resendTimer { text-align: center; margin-top: 12px; font-size: 12px; color: #8a94a6; }
        #resendTimer a { color: #3f66e6; text-decoration: none; font-weight: 600; cursor: pointer; }
        #resendTimer a:hover { text-decoration: underline; }

        /* Step 3 welcome */
        .welcome-icon { font-size: 60px; color: #10b981; margin: 16px 0; }
        .welcome-title { font-size: 22px; font-weight: 700; color: #1a1f36; margin-bottom: 10px; }
        .welcome-text { color: #8a94a6; margin-bottom: 22px; font-size: 13px; }

        /* Login link */
        .login-link {
            text-align: center; margin-top: 18px;
            padding-top: 16px; border-top: 1px solid #eef0f6;
            font-size: 13px; color: #8a94a6;
        }

        .login-link a { color: #3f66e6; text-decoration: none; font-weight: 700; transition: color 0.2s; }
        .login-link a:hover { color: #129695; text-decoration: underline; }

        /* ===================== RESPONSIVE ===================== */
        @media (max-width: 960px) {
            .left-panel { flex: 0 0 42%; padding: 48px 36px 48px 52px; }
            .left-panel h1 { font-size: 32px; }
        }

        @media (max-width: 720px) {
            body { flex-direction: column; overflow: auto; }
            .left-panel { flex: none; padding: 28px 24px; }
            .left-panel h1 { font-size: 24px; }
            .left-panel > .left-inner > p, .feature-list { display: none; }
            .right-panel { padding: 24px 16px 36px; }
            .signup-body { padding: 20px 20px 28px; }
            .signup-header { padding: 22px 20px 16px; }
        }

        @media (max-width: 480px) {
            .three-columns { grid-template-columns: 1fr; gap: 12px; }
            .full-width { grid-column: span 1; }
            .role-options { flex-direction: column; }
            .signup-container { max-width: 100%; }
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

        <h1>Start Your<br>Learning <span>Journey</span></h1>
        <p>Join thousands of students already learning smarter with AI-powered tools and personalised study plans.</p>

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
                <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                <span>Secure & Private — Your Data is Safe</span>
            </div>
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-trophy"></i></div>
                <span>Earn Points, Badges & Certificates</span>
            </div>
        </div>
    </div>
</div>

<!-- Right Panel -->
<div class="right-panel">
<div class="signup-container">
    <div class="signup-card">

        <div class="signup-header">
            <div class="logo-circle">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <h1>Create Account</h1>
            <p>Join NeuraEduBot — it's free</p>
        </div>

        <div class="signup-body">

            <!-- Step Indicator -->
            <div class="step-indicator">
                <div class="step active" id="step1">
                    <div class="step-circle">1</div>
                    <div class="step-label">Register</div>
                </div>
                <div class="step" id="step2">
                    <div class="step-circle">2</div>
                    <div class="step-label">Verify Email</div>
                </div>
                <div class="step" id="step3">
                    <div class="step-circle">3</div>
                    <div class="step-label">Welcome</div>
                </div>
            </div>

            <!-- Messages -->
            <div id="successMsg" class="success-msg"></div>
            <div id="errorMsg" class="error-msg"></div>
            <div id="infoMsg" class="info-msg"></div>

            <form id="signupForm" onsubmit="return false;">

                <!-- Step 1: Register -->
                <div id="step1Content">
                    <!-- Role Selection - Full Width -->
                    <div class="form-group full-width" style="margin-bottom: 24px;">
                        <label>I am a <span class="required-asterisk">*</span></label>
                        <div class="role-options">
                            <div class="role-card active" data-role="student">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Student</p>
                                <input type="radio" name="role" value="student" checked hidden>
                            </div>
                            <div class="role-card" data-role="administrator">
                                <i class="fas fa-user-shield"></i>
                                <p>Administrator</p>
                                <input type="radio" name="role" value="administrator" hidden>
                            </div>
                        </div>
                    </div>

                    <!-- Three Column Layout for Inputs -->
                    <div class="three-columns">
                        <!-- Full Name -->
                        <div class="form-group">
                            <label>Full Name <span class="required-asterisk">*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" id="full_name" placeholder="Enter your full name" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label>Email Address <span class="required-asterisk">*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-envelope input-icon"></i>
                                <input type="email" id="email" placeholder="your@email.com" required>
                            </div>
                        </div>

                        <!-- Class (only for students) -->
                        <div id="classField" class="form-group">
                            <label>Class <span class="required-asterisk">*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-graduation-cap input-icon"></i>
                                <select id="class" required>
                                    <option value="">Select Class</option>
                                    <option value="1">Class 1</option>
                                    <option value="2">Class 2</option>
                                    <option value="3">Class 3</option>
                                    <option value="4">Class 4</option>
                                    <option value="5">Class 5</option>
                                    <option value="6">Class 6</option>
                                    <option value="7">Class 7</option>
                                    <option value="8">Class 8</option>
                                    <option value="9">Class 9</option>
                                    <option value="10">Class 10</option>
                                    <option value="11">Class 11</option>
                                    <option value="12">Class 12</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Second Row - School Name, Password, Confirm Password -->
                    <div class="three-columns">
                        <!-- School Name (only for students) -->
                        <div id="schoolField" class="form-group">
                            <label>School Name <span style="color: #9ca3af; font-size: 11px;">(Optional)</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-school input-icon"></i>
                                <input type="text" id="school_name" placeholder="Enter school name">
                            </div>
                            <div class="field-note">You can skip this field</div>
                        </div>

                        <!-- Password (for both roles) -->
                        <div class="form-group">
                            <label>Password <span class="required-asterisk">*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-lock input-icon"></i>
                                <input type="password" id="password" placeholder="Create password (min. 6 chars)" required>
                                <i class="fas fa-eye toggle-password" id="togglePass1"></i>
                            </div>
                            <div class="password-requirements">
                                <i class="fas fa-circle-check"></i> At least 6 characters
                            </div>
                        </div>

                        <!-- Confirm Password (for both roles) -->
                        <div class="form-group">
                            <label>Confirm Password <span class="required-asterisk">*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-check-circle input-icon"></i>
                                <input type="password" id="confirm_password" placeholder="Confirm your password" required>
                                <i class="fas fa-eye toggle-password" id="togglePass2"></i>
                            </div>
                        </div>
                    </div>

                    <button type="button" id="registerStep1Btn" class="btn">
                        <i class="fas fa-arrow-right"></i> Register & Continue
                    </button>
                </div>

                <!-- Step 2: OTP Verification -->
                <div id="step2Content" style="display: none;">
                    <div class="form-group full-width">
                        <label>Email Address</label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" id="email_step2" readonly style="background-color: #f8fafc;">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label>Enter 6-Digit OTP <span class="required-asterisk">*</span></label>
                        <div class="input-wrapper">
                            <i class="fas fa-qrcode input-icon"></i>
                            <input type="text" id="otpInput" maxlength="6" inputmode="numeric" placeholder="123456" required>
                        </div>
                    </div>

                    <button type="button" id="sendOtpBtn" class="btn">
                        <i class="fas fa-paper-plane" style="margin-right: 8px;"></i>
                        Send OTP
                    </button>
                    
                    <button type="button" id="verifyOtpBtn" class="btn" style="display: none;">
                        <i class="fas fa-check-circle" style="margin-right: 8px;"></i>
                        Verify OTP
                    </button>
                    
                    <p id="resendTimer" style="text-align: center; margin-top: 16px;"></p>
                    
                    <button type="button" id="backToStep1Btn" class="btn btn-secondary" style="margin-top: 12px;">
                        <i class="fas fa-arrow-left" style="margin-right: 8px;"></i>
                        Back
                    </button>
                </div>

                <!-- Step 3: Welcome -->
                <div id="step3Content" style="display: none; text-align: center;">
                    <div class="welcome-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="welcome-title">Email Verified!</div>
                    <div class="welcome-text">Your email has been successfully verified. You can now sign in to your account.</div>
                    <a href="login.php" class="btn" style="display: inline-block; text-decoration: none;">
                        <i class="fas fa-sign-in-alt" style="margin-right: 8px;"></i>
                        Go to sign in
                    </a>
                </div>
            </form>

            <div class="login-link">
                Already have an account?
                <a href="login.php">Sign in →</a>
            </div>
        </div>
    </div>
</div>
</div>

<script>
// ==================== CONFIGURATION - PURE CONFIG ====================
const API_BASE_URL = CONFIG.API_BASE_URL;
const API_URL = API_BASE_URL + '/api';

console.log('🚀 Signup page loaded with API_URL:', API_URL);
console.log('✅ CONFIG loaded:', CONFIG);

// State variables
let userEmail = '';
let isOtpVerified = false;

// Get DOM elements
const step1 = document.getElementById('step1');
const step2 = document.getElementById('step2');
const step3 = document.getElementById('step3');
const step1Content = document.getElementById('step1Content');
const step2Content = document.getElementById('step2Content');
const step3Content = document.getElementById('step3Content');
const registerStep1Btn = document.getElementById('registerStep1Btn');
const backToStep1Btn = document.getElementById('backToStep1Btn');
const sendOtpBtn = document.getElementById('sendOtpBtn');
const verifyOtpBtn = document.getElementById('verifyOtpBtn');
const successMsg = document.getElementById('successMsg');
const errorMsg = document.getElementById('errorMsg');
const infoMsg = document.getElementById('infoMsg');
const emailStep2 = document.getElementById('email_step2');
const fullNameInput = document.getElementById('full_name');
const emailInput = document.getElementById('email');
const classSelect = document.getElementById('class');
const schoolNameInput = document.getElementById('school_name');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm_password');
const otpInput = document.getElementById('otpInput');
const classField = document.getElementById('classField');
const schoolField = document.getElementById('schoolField');

// Role Selection
document.querySelectorAll('.role-card').forEach(card => {
    card.addEventListener('click', () => {
        document.querySelectorAll('.role-card').forEach(c => c.classList.remove('active'));
        card.classList.add('active');
        card.querySelector('input').checked = true;
        
        const role = card.querySelector('input').value;
        if (role === 'student') {
            // Student: Show class and school fields
            classField.style.display = 'block';
            schoolField.style.display = 'block';
            classSelect.setAttribute('required', 'required');
        } else {
            // Administrator: Hide class and school fields
            classField.style.display = 'none';
            schoolField.style.display = 'none';
            classSelect.removeAttribute('required');
            // Clear values when switching to admin
            classSelect.value = '';
            schoolNameInput.value = '';
        }
    });
});

// Password Toggle
document.querySelectorAll('.toggle-password').forEach(toggle => {
    toggle.addEventListener('click', function() {
        const input = this.previousElementSibling;
        if (input.type === 'password') {
            input.type = 'text';
            this.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            input.type = 'password';
            this.classList.replace('fa-eye-slash', 'fa-eye');
        }
    });
});

// Utility Functions
function showError(message) {
    errorMsg.innerHTML = `<i class="fas fa-exclamation-circle" style="margin-right: 8px;"></i> ${message}`;
    errorMsg.style.display = 'block';
    setTimeout(() => errorMsg.style.display = 'none', 5000);
}

function showInfo(message) {
    infoMsg.innerHTML = `<i class="fas fa-info-circle" style="margin-right: 8px;"></i> ${message}`;
    infoMsg.style.display = 'block';
    setTimeout(() => infoMsg.style.display = 'none', 3000);
}

function showSuccess(message) {
    successMsg.innerHTML = `<i class="fas fa-check-circle" style="margin-right: 8px;"></i> ${message}`;
    successMsg.style.display = 'block';
    setTimeout(() => successMsg.style.display = 'none', 5000);
}

function setLoading(button, isLoading, originalText = '') {
    if (isLoading) {
        button.disabled = true;
        button.innerHTML = '<span class="loading"></span> Loading...';
    } else {
        button.disabled = false;
        button.innerHTML = originalText || button.getAttribute('data-original-text');
    }
}

function updateStep(activeStep) {
    step1.classList.remove('active', 'completed');
    step2.classList.remove('active', 'completed');
    step3.classList.remove('active', 'completed');

    if (activeStep === 1) {
        step1.classList.add('active');
        step1Content.style.display = 'block';
        step2Content.style.display = 'none';
        step3Content.style.display = 'none';
    } else if (activeStep === 2) {
        step1.classList.add('completed');
        step2.classList.add('active');
        step1Content.style.display = 'none';
        step2Content.style.display = 'block';
        step3Content.style.display = 'none';
    } else if (activeStep === 3) {
        step1.classList.add('completed');
        step2.classList.add('completed');
        step3.classList.add('active');
        step1Content.style.display = 'none';
        step2Content.style.display = 'none';
        step3Content.style.display = 'block';
    }
}

function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function removeErrorClass() {
    fullNameInput.classList.remove('error');
    emailInput.classList.remove('error');
    classSelect.classList.remove('error');
    passwordInput.classList.remove('error');
    confirmPasswordInput.classList.remove('error');
    otpInput.classList.remove('error');
}

// Input event listeners
fullNameInput.addEventListener('input', () => fullNameInput.classList.remove('error'));
emailInput.addEventListener('input', () => emailInput.classList.remove('error'));
classSelect.addEventListener('change', () => classSelect.classList.remove('error'));
passwordInput.addEventListener('input', () => passwordInput.classList.remove('error'));
confirmPasswordInput.addEventListener('input', () => confirmPasswordInput.classList.remove('error'));
otpInput.addEventListener('input', () => otpInput.classList.remove('error'));

// Step 1: Register User
registerStep1Btn.addEventListener('click', async () => {
    const fullName = fullNameInput.value.trim();
    const email = emailInput.value.trim();
    const role = document.querySelector('input[name="role"]:checked').value;
    const classValue = classSelect.value ? parseInt(classSelect.value) : null;
    const schoolName = schoolNameInput.value.trim() || null;
    const password = passwordInput.value;
    const confirmPass = confirmPasswordInput.value;

    if (!fullName) {
        showError('Please enter your full name');
        fullNameInput.classList.add('error');
        return;
    }

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

    if (role === 'student' && !classValue) {
        showError('Please select your class');
        classSelect.classList.add('error');
        return;
    }

    if (!password) {
        showError('Please enter a password');
        passwordInput.classList.add('error');
        return;
    }

    if (password.length < 6) {
        showError('Password must be at least 6 characters');
        passwordInput.classList.add('error');
        return;
    }

    if (password !== confirmPass) {
        showError('Passwords do not match!');
        confirmPasswordInput.classList.add('error');
        return;
    }

    removeErrorClass();
    setLoading(registerStep1Btn, true, 'Register & Continue');

    try {
        const requestBody = {
            full_name: fullName,
            email: email,
            password: password,
            role: role
        };

        if (role === 'student') {
            requestBody.class = classValue;
            if (schoolName) {
                requestBody.school_name = schoolName;
            }
        }

        const signupResponse = await fetch(`${API_URL}/signup`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(requestBody)
        });

        const signupData = await signupResponse.json();

        if (!signupResponse.ok) {
            throw new Error(signupData.detail || signupData.message || 'Registration failed');
        }

        userEmail = email;
        emailStep2.value = email;
        showInfo('Registration successful! Now verify your email.');
        updateStep(2);

        setTimeout(() => {
            sendOtpBtn.click();
        }, 500);

    } catch (error) {
        showError(error.message);
        console.error('Signup error:', error);
    } finally {
        setLoading(registerStep1Btn, false);
    }
});

// Back to Step 1
backToStep1Btn.addEventListener('click', () => {
    updateStep(1);
});

// Send OTP
sendOtpBtn.addEventListener('click', async () => {
    if (!userEmail) {
        showError('Email not found. Please go back and try again.');
        return;
    }

    setLoading(sendOtpBtn, true, 'Send OTP');

    try {
        const response = await fetch(`${API_URL}/send-otp`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email: userEmail })
        });

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.detail || 'Failed to send OTP');
        }

        sendOtpBtn.style.display = 'none';
        verifyOtpBtn.style.display = 'block';
        startResendTimer();
        showInfo('OTP has been sent to your email! Check your inbox.');

    } catch (error) {
        showError(error.message);
        sendOtpBtn.style.display = 'block';
    } finally {
        setLoading(sendOtpBtn, false);
    }
});

// OTP Timer
function startResendTimer() {
    let time = 60;
    const timerEl = document.getElementById('resendTimer');
    timerEl.textContent = `Resend OTP in ${time} seconds`;
    
    const interval = setInterval(() => {
        time--;
        timerEl.textContent = `Resend OTP in ${time} seconds`;
        if (time <= 0) {
            clearInterval(interval);
            timerEl.innerHTML = `<a href="#" onclick="resendOTP()">Resend OTP</a>`;
        }
    }, 1000);
}

// Resend OTP
window.resendOTP = async function() {
    if (!userEmail) {
        showError('Email not found. Please try again.');
        return;
    }

    try {
        const response = await fetch(`${API_URL}/resend-otp`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email: userEmail })
        });

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.detail || 'Failed to resend OTP');
        }

        startResendTimer();
        showInfo('New OTP has been sent to your email!');

    } catch (error) {
        showError(error.message);
    }
};

// Verify OTP
verifyOtpBtn.addEventListener('click', async () => {
    const otp = otpInput.value.trim();

    if (!otp || otp.length !== 6 || !/^\d+$/.test(otp)) {
        showError('Please enter a valid 6-digit OTP');
        otpInput.classList.add('error');
        return;
    }

    otpInput.classList.remove('error');
    setLoading(verifyOtpBtn, true, 'Verify OTP');

    try {
        const response = await fetch(`${API_URL}/verify-otp`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                email: userEmail,
                otp: otp
            })
        });

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.detail || 'OTP verification failed');
        }

        isOtpVerified = true;
        showSuccess('Email verified successfully!');
        updateStep(3);

    } catch (error) {
        showError(error.message);
    } finally {
        setLoading(verifyOtpBtn, false);
    }
});

// Auto-submit OTP when 6 digits are entered
otpInput.addEventListener('input', (e) => {
    e.target.value = e.target.value.replace(/[^0-9]/g, '');
    if (e.target.value.length === 6 && verifyOtpBtn.style.display !== 'none') {
        verifyOtpBtn.click();
    }
});

// Store original button texts
registerStep1Btn.setAttribute('data-original-text', 'Register & Continue');
sendOtpBtn.setAttribute('data-original-text', 'Send OTP');
verifyOtpBtn.setAttribute('data-original-text', 'Verify OTP');

// Initialize - Student is selected by default
updateStep(1);
classField.style.display = 'block';
schoolField.style.display = 'block';

// Prevent form submission on enter
document.getElementById('signupForm').addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
        e.preventDefault();
        if (step1Content.style.display !== 'none') {
            registerStep1Btn.click();
        } else if (step2Content.style.display !== 'none') {
            if (sendOtpBtn.style.display !== 'none') {
                sendOtpBtn.click();
            } else if (verifyOtpBtn.style.display !== 'none') {
                verifyOtpBtn.click();
            }
        }
    }
});
</script>

</body>
</html>