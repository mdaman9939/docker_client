<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | NeuraEduBot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- ⭐ CONFIG.JS - Must be loaded first ⭐ -->
    <script src="../js/config.js"></script>
    <style>
        /* Your existing CSS - no changes */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #4361ee 0%, #3a56d4 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px;
        }
        .signup-card {
            background: white;
            width: 100%;
            max-width: 500px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.25);
            overflow: hidden;
        }
        .signup-header {
            background: linear-gradient(135deg, #4361ee, #3a56d4);
            color: white;
            padding: 35px 30px;
            text-align: center;
        }
        .signup-header i { font-size: 42px; margin-bottom: 12px; }
        .signup-body { padding: 40px 35px; }
        .form-group { margin-bottom: 20px; }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 16px;
            box-sizing: border-box;
            transition: all 0.3s;
            font-family: 'Poppins', sans-serif;
        }
        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #4361ee;
            box-shadow: 0 0 0 4px rgba(67,97,238,0.15);
        }
        .form-group input.error, .form-group select.error {
            border-color: #dc3545;
            background-color: #fff8f8;
        }
        .role-options {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }
        .role-card {
            flex: 1;
            padding: 18px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        .role-card.active {
            border-color: #4361ee;
            background: #f0f4ff;
        }
        .password-wrapper { position: relative; }
        .toggle-password {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            font-size: 20px;
        }
        .btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #4361ee, #3a56d4);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s;
        }
        .btn:hover { 
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67,97,238,0.3);
        }
        .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        .btn-secondary {
            background: linear-gradient(135deg, #6c757d, #5a6268);
        }
        .success-msg {
            display: none;
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 500;
        }
        .error-msg {
            display: none;
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 500;
        }
        .info-msg {
            display: none;
            background: #cce5ff;
            color: #004085;
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 500;
        }
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid #f3f3f3;
            border-top: 3px solid #4361ee;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-right: 8px;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            padding: 0 10px;
        }
        .step {
            flex: 1;
            text-align: center;
            position: relative;
        }
        .step:not(:last-child):after {
            content: '';
            position: absolute;
            top: 20px;
            right: -50%;
            width: 100%;
            height: 2px;
            background: #e0e0e0;
            z-index: 1;
        }
        .step.active .step-circle {
            background: #4361ee;
            color: white;
            border-color: #4361ee;
        }
        .step.completed .step-circle {
            background: #28a745;
            color: white;
            border-color: #28a745;
        }
        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            border: 2px solid #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: 600;
            position: relative;
            z-index: 2;
        }
        .step-label {
            font-size: 12px;
            color: #666;
        }
        .password-requirements {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
            padding-left: 5px;
        }
        .password-requirements i {
            color: #28a745;
            margin-right: 5px;
        }
        .info-text {
            font-size: 12px;
            color: #888;
            margin-top: 5px;
            font-style: italic;
        }
        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }
        .form-row .form-group {
            flex: 1;
            margin-bottom: 0;
        }
        .required-asterisk {
            color: #dc3545;
            margin-left: 4px;
        }
        .field-note {
            font-size: 12px;
            color: #888;
            margin-top: 5px;
            font-style: italic;
        }
    </style>
</head>
<body>

<div class="signup-card">
    <div class="signup-header">
        <i class="fas fa-user-plus"></i>
        <h1 style="font-size: 28px;">Create Account</h1>
        <p>Join NeuraEduBot Today</p>
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

        <!-- Success Message -->
        <div id="successMsg" class="success-msg">
            🎉 Registration Successful!<br>
            Redirecting to Login...
        </div>

        <!-- Error Message -->
        <div id="errorMsg" class="error-msg"></div>

        <!-- Info Message -->
        <div id="infoMsg" class="info-msg"></div>

        <form id="signupForm" onsubmit="return false;">

            <!-- Step 1: Register User -->
            <div id="step1Content">
                <!-- Role Selection -->
                <label style="font-weight:500; color:#555;">I am a <span class="required-asterisk">*</span></label>
                <div class="role-options">
                    <div class="role-card active" data-role="student">
                        <i class="fas fa-graduation-cap" style="font-size:28px; color:#4361ee;"></i>
                        <p style="margin:8px 0 0; font-weight:500;">Student</p>
                        <input type="radio" name="role" value="student" checked hidden>
                    </div>
                    <div class="role-card" data-role="administrator">
                        <i class="fas fa-user-shield" style="font-size:28px; color:#4361ee;"></i>
                        <p style="margin:8px 0 0; font-weight:500;">Administrator</p>
                        <input type="radio" name="role" value="administrator" hidden>
                    </div>
                </div>

                <!-- Full Name -->
                <div class="form-group">
                    <label>Full Name <span class="required-asterisk">*</span></label>
                    <input type="text" id="full_name" placeholder="Enter your full name" required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label>Email Address <span class="required-asterisk">*</span></label>
                    <input type="email" id="email" placeholder="your@email.com" required>
                </div>

                <!-- Class and School Name (For Students) -->
                <div id="studentFields">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Class <span class="required-asterisk">*</span></label>
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
                        <div class="form-group">
                            <label>School Name <span style="color: #888; font-size: 12px; font-weight: normal;">(Optional)</span></label>
                            <input type="text" id="school_name" placeholder="Enter school name">
                            <div class="field-note">You can skip this field</div>
                        </div>
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label>Password <span class="required-asterisk">*</span></label>
                    <div class="password-wrapper">
                        <input type="password" id="password" placeholder="Create a password (min. 6 characters)" required>
                        <i class="fas fa-eye toggle-password" id="togglePass1"></i>
                    </div>
                    <div class="password-requirements">
                        <i class="fas fa-circle-check"></i> At least 6 characters
                    </div>
                </div>
                <div class="form-group">
                    <label>Confirm Password <span class="required-asterisk">*</span></label>
                    <div class="password-wrapper">
                        <input type="password" id="confirm_password" placeholder="Confirm your password" required>
                        <i class="fas fa-eye toggle-password" id="togglePass2"></i>
                    </div>
                </div>

                <button type="button" id="registerStep1Btn" class="btn">Register & Continue</button>
            </div>

            <!-- Step 2: OTP Verification -->
            <div id="step2Content" style="display: none;">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" id="email_step2" readonly style="background-color: #f5f5f5;">
                </div>

                <div class="form-group">
                    <label>Enter 6-Digit OTP <span class="required-asterisk">*</span></label>
                    <input type="text" id="otpInput" maxlength="6" inputmode="numeric" placeholder="123456" style="text-align:center; font-size:22px; letter-spacing:8px;" required>
                </div>

                <button type="button" id="sendOtpBtn" class="btn">Send OTP</button>
                <button type="button" id="verifyOtpBtn" class="btn" style="display: none;">Verify OTP</button>
                
                <p id="resendTimer" style="text-align:center; margin-top:12px; font-size:14px; color:#666;"></p>
                
                <button type="button" id="backToStep1Btn" class="btn btn-secondary" style="margin-top: 10px;">Back</button>
            </div>

            <!-- Step 3: Welcome / Completion -->
            <div id="step3Content" style="display: none; text-align: center;">
                <i class="fas fa-check-circle" style="font-size: 80px; color: #28a745; margin: 20px 0;"></i>
                <h2 style="color: #333; margin-bottom: 15px;">Email Verified!</h2>
                <p style="color: #666; margin-bottom: 25px;">Your email has been successfully verified. You can now login to your account.</p>
            </div>
        </form>

        <div style="text-align:center; margin-top:25px; font-size:14px;">
            Already have an account? 
            <a href="login.php" style="color:#4361ee; font-weight:600;">Login here</a>
        </div>
    </div>
</div>

<script>
// ==================== CONFIGURATION - PURE CONFIG ====================
// ✅ BEST: Sirf CONFIG se le rahe hain, koi fallback nahi
const API_BASE_URL = CONFIG.API_BASE_URL;
const API_URL = API_BASE_URL + '/api';  // No /api prefix

console.log('🚀 Signup page loaded with API_URL:', API_URL);
console.log('✅ CONFIG loaded:', CONFIG);

// State variables
let userEmail = '';
let isOtpVerified = false;

// Role Selection
document.querySelectorAll('.role-card').forEach(card => {
    card.addEventListener('click', () => {
        document.querySelectorAll('.role-card').forEach(c => c.classList.remove('active'));
        card.classList.add('active');
        card.querySelector('input').checked = true;
        
        // Show/hide student fields based on role
        const role = card.querySelector('input').value;
        const studentFields = document.getElementById('studentFields');
        if (role === 'student') {
            studentFields.style.display = 'block';
            // Make class required for students
            document.getElementById('class').setAttribute('required', 'required');
        } else {
            studentFields.style.display = 'none';
            // Remove required attribute for administrators
            document.getElementById('class').removeAttribute('required');
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
const studentFields = document.getElementById('studentFields');

// Initially show student fields (since student is selected by default)
studentFields.style.display = 'block';

// Utility Functions
function showError(message) {
    errorMsg.textContent = message;
    errorMsg.style.display = 'block';
    setTimeout(() => {
        errorMsg.style.display = 'none';
    }, 5000);
}

function showInfo(message) {
    infoMsg.textContent = message;
    infoMsg.style.display = 'block';
    setTimeout(() => {
        infoMsg.style.display = 'none';
    }, 3000);
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
    // Reset all steps
    step1.classList.remove('active', 'completed');
    step2.classList.remove('active', 'completed');
    step3.classList.remove('active', 'completed');

    // Set active step
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

// Remove error class on input
fullNameInput.addEventListener('input', () => {
    fullNameInput.classList.remove('error');
});

emailInput.addEventListener('input', () => {
    emailInput.classList.remove('error');
});

classSelect.addEventListener('change', () => {
    classSelect.classList.remove('error');
});

schoolNameInput.addEventListener('input', () => {
    schoolNameInput.classList.remove('error');
});

passwordInput.addEventListener('input', () => {
    passwordInput.classList.remove('error');
});

confirmPasswordInput.addEventListener('input', () => {
    confirmPasswordInput.classList.remove('error');
});

otpInput.addEventListener('input', () => {
    otpInput.classList.remove('error');
});

// Step 1: Register User
registerStep1Btn.addEventListener('click', async () => {
    const fullName = fullNameInput.value.trim();
    const email = emailInput.value.trim();
    const role = document.querySelector('input[name="role"]:checked').value;
    const classValue = classSelect.value ? parseInt(classSelect.value) : null;
    const schoolName = schoolNameInput.value.trim() || null;
    const password = passwordInput.value;
    const confirmPass = confirmPasswordInput.value;

    // Validate inputs
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

    // For students, class is required
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
        showError('❌ Passwords do not match!');
        confirmPasswordInput.classList.add('error');
        return;
    }

    // Remove error classes
    fullNameInput.classList.remove('error');
    emailInput.classList.remove('error');
    if (role === 'student') {
        classSelect.classList.remove('error');
    }
    passwordInput.classList.remove('error');
    confirmPasswordInput.classList.remove('error');

    setLoading(registerStep1Btn, true, 'Register & Continue');

    try {
        // Prepare request body
        const requestBody = {
            full_name: fullName,
            email: email,
            password: password,
            role: role
        };

        // Add class and school name only for students
        if (role === 'student') {
            requestBody.class = classValue;
            if (schoolName) {
                requestBody.school_name = schoolName;
            }
        }

        console.log('Sending request:', requestBody);

        // ✅ Signup the user - using CONFIG
        const signupResponse = await fetch(`${API_URL}/signup`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(requestBody)
        });

        const signupData = await signupResponse.json();

        if (!signupResponse.ok) {
            throw new Error(signupData.detail || signupData.message || 'Registration failed');
        }

        // Store email for later use
        userEmail = email;
        emailStep2.value = email;

        showInfo('Registration successful! Now verify your email.');

        // Move to step 2
        updateStep(2);

        // Automatically trigger OTP sending
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
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email: userEmail })
        });

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.detail || 'Failed to send OTP');
        }

        // Show verify OTP button and hide send OTP button
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
            timerEl.innerHTML = `<a href="#" onclick="resendOTP()" style="color:#4361ee">Resend OTP</a>`;
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
            headers: {
                'Content-Type': 'application/json',
            },
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
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                email: userEmail,
                otp: otp
            })
        });

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.detail || 'OTP verification failed');
        }

        // OTP verified successfully
        isOtpVerified = true;
        showInfo('✅ Email verified successfully!');
        
        // Move to step 3 (Welcome page)
        updateStep(3);

    } catch (error) {
        showError(error.message);
    } finally {
        setLoading(verifyOtpBtn, false);
    }
});

// Auto-submit OTP when 6 digits are entered
otpInput.addEventListener('input', (e) => {
    // Only allow numbers
    e.target.value = e.target.value.replace(/[^0-9]/g, '');
    
    if (e.target.value.length === 6 && verifyOtpBtn.style.display !== 'none') {
        verifyOtpBtn.click();
    }
});

// Store original button texts
registerStep1Btn.setAttribute('data-original-text', 'Register & Continue');
sendOtpBtn.setAttribute('data-original-text', 'Send OTP');
verifyOtpBtn.setAttribute('data-original-text', 'Verify OTP');

// Initialize
updateStep(1);

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

<?php
// PHP fallback for server-side validation (optional)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = ['success' => false, 'message' => 'Please enable JavaScript to use this form.'];
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>

</body>
</html>