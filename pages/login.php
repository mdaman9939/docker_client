<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | NeuraEduBot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- ⭐ CONFIG.JS - Must be loaded first ⭐ -->
    <script src="../js/config.js"></script>
    <style>
        /* Your existing CSS - no changes */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #4361ee 0%, #3a56d4 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
        }
        .login-card {
            background: white;
            width: 100%;
            max-width: 420px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }
        .login-header {
            background: linear-gradient(135deg, #4361ee, #3a56d4);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        .login-header i {
            font-size: 48px;
            margin-bottom: 15px;
        }
        .login-body {
            padding: 40px 35px;
        }
        .form-group {
            margin-bottom: 22px;
            position: relative;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s;
            box-sizing: border-box;
        }
        .form-group input:focus {
            outline: none;
            border-color: #4361ee;
            box-shadow: 0 0 0 4px rgba(67, 97, 238, 0.15);
        }
        .form-group input.error {
            border-color: #dc3545;
            background-color: #fff8f8;
        }
        .password-wrapper {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            font-size: 20px;
        }
        .login-btn {
            width: 100%;
            padding: 16px;
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
        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(67, 97, 238, 0.4);
        }
        .login-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        .forgot-link {
            color: #4361ee;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }
        .forgot-link:hover { text-decoration: underline; }

        /* Messages */
        .success-msg, .error-msg, .info-msg {
            display: none;
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 500;
        }
        .success-msg { background: #d4edda; color: #155724; }
        .error-msg { background: #f8d7da; color: #721c24; }
        .info-msg { background: #cce5ff; color: #004085; }

        /* Loading */
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

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.6);
            z-index: 3000;
            align-items: center;
            justify-content: center;
        }
        .modal-content {
            background: white;
            width: 100%;
            max-width: 420px;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        .remember-checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            cursor: pointer;
        }
        .remember-checkbox input {
            width: auto;
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <!-- Header -->
    <div class="login-header">
        <i class="fas fa-graduation-cap"></i>
        <h1 style="font-size: 28px; margin-bottom: 8px;">NeuraEduBot</h1>
        <p>Welcome back!</p>
    </div>

    <!-- Body -->
    <div class="login-body">
        
        <!-- Success Message -->
        <div id="successMsg" class="success-msg">
            ✅ Login Successful!<br>
            Redirecting to Dashboard...
        </div>

        <!-- Error Message -->
        <div id="errorMsg" class="error-msg"></div>

        <!-- Info Message -->
        <div id="infoMsg" class="info-msg"></div>

        <form id="loginForm" onsubmit="return false;">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" id="email" placeholder="your@email.com" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password" placeholder="••••••••" required>
                    <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                <label class="remember-checkbox">
                    <input type="checkbox" id="remember"> Remember me
                </label>
                <span class="forgot-link" id="forgotLink">Forgot Password?</span>
            </div>

            <button type="button" id="loginBtn" class="login-btn">Login</button>
        </form>

        <div style="text-align: center; margin-top: 30px; font-size: 14px;">
            Don't have an account? 
            <a href="signup.php" style="color: #4361ee; font-weight: 500;">Sign up</a>
        </div>
    </div>
</div>

<!-- Forgot Password Modal (Full Reset Flow - 2 Steps) -->
<div id="forgotModal" class="modal">
    <div class="modal-content">
        <h3 id="modalTitle" style="margin-bottom: 10px;">Reset Your Password</h3>
        <p id="modalSubtitle" style="color: #666; margin-bottom: 25px;">Enter your email and we'll send you an OTP.</p>

        <!-- Step 1: Email -->
        <div id="resetStep1">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" id="resetEmail" placeholder="your@email.com">
            </div>
            
            <button onclick="sendResetOtp()" id="sendOtpBtn" class="login-btn" style="margin-top: 0;">
                Send OTP
            </button>
        </div>

        <!-- Step 2: OTP + New Password -->
        <div id="resetStep2" style="display: none;">
            <div class="form-group">
                <label>OTP Code</label>
                <input type="text" id="resetOtp" placeholder="123456" maxlength="6" 
                       style="text-align: center; font-size: 22px; letter-spacing: 10px;">
            </div>

            <div class="form-group">
                <label>New Password</label>
                <div class="password-wrapper">
                    <input type="password" id="newPassword" placeholder="••••••••">
                    <i class="fas fa-eye toggle-password" id="toggleNewPass"></i>
                </div>
            </div>

            <div class="form-group">
                <label>Confirm New Password</label>
                <div class="password-wrapper">
                    <input type="password" id="confirmPassword" placeholder="••••••••">
                    <i class="fas fa-eye toggle-password" id="toggleConfirmPass"></i>
                </div>
            </div>

            <button onclick="performPasswordReset()" id="resetPasswordBtn" class="login-btn" style="margin-top: 10px;">
                Reset Password
            </button>

            <button onclick="backToEmailStep()" 
                    style="margin-top: 10px; width: 100%; padding: 14px; background: #f1f1f1; color: #333; border: none; border-radius: 12px; cursor: pointer;">
                ← Back
            </button>
        </div>

        <button onclick="closeModal()" 
                style="margin-top: 15px; width: 100%; padding: 14px; background: #f1f1f1; color: #333; border: none; border-radius: 12px; cursor: pointer;">
            Cancel
        </button>
    </div>
</div>

<script>
// ==================== CONFIGURATION - PURE CONFIG ====================
// ✅ BEST: Sirf CONFIG se le rahe hain, koi fallback nahi, koi hardcoding nahi
const API_BASE_URL = CONFIG.API_BASE_URL;  // Directly from CONFIG
const API_URL = API_BASE_URL + '/api';  // No /api prefix

console.log('🚀 Login page loaded with API_URL:', API_URL);
console.log('✅ CONFIG loaded:', CONFIG);

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

// Check for saved credentials and token validity
document.addEventListener('DOMContentLoaded', async function() {
    // Check if already logged in with valid token
    const token = localStorage.getItem('access_token');
    const tokenExpiry = localStorage.getItem('token_expiry');
    
    if (token && tokenExpiry) {
        const now = new Date().getTime();
        if (now < parseInt(tokenExpiry)) {
            // Token still valid, redirect to dashboard
            window.location.href = '../index.php';
            return;
        } else {
            // Token expired, clear storage
            clearAuthData();
        }
    }

    // Load saved email if remember me was checked
    const savedEmail = localStorage.getItem('rememberedEmail');
    const savedPassword = localStorage.getItem('rememberedPassword');
    
    if (savedEmail && savedPassword) {
        emailInput.value = savedEmail;
        passwordInput.value = savedPassword;
        rememberCheckbox.checked = true;
    }

    // Set original button text for loading
    loginBtn.setAttribute('data-original-text', 'Login');
    sendOtpBtn.setAttribute('data-original-text', 'Send OTP');
    resetPasswordBtn.setAttribute('data-original-text', 'Reset Password');
});

// Password toggle helper
function togglePasswordVisibility(input, icon) {
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}

// Password toggles
togglePassword.addEventListener('click', () => togglePasswordVisibility(passwordInput, togglePassword));
toggleNewPass.addEventListener('click', () => togglePasswordVisibility(newPasswordInput, toggleNewPass));
toggleConfirmPass.addEventListener('click', () => togglePasswordVisibility(confirmPasswordInput, toggleConfirmPass));

// Utility Functions
function showError(message) {
    errorMsg.textContent = message;
    errorMsg.style.display = 'block';
    setTimeout(() => errorMsg.style.display = 'none', 5000);
}

function showInfo(message) {
    infoMsg.textContent = message;
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
    }
}

function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function removeErrorClass() {
    emailInput.classList.remove('error');
    passwordInput.classList.remove('error');
}

// Clear all authentication data
function clearAuthData() {
    localStorage.removeItem('access_token');
    localStorage.removeItem('refresh_token');
    localStorage.removeItem('token_expiry');
    localStorage.removeItem('user');
    localStorage.removeItem('user_id');
    localStorage.removeItem('user_role');
    localStorage.removeItem('rememberedEmail');
    localStorage.removeItem('rememberedPassword');
}

// Show Step 1 (Email)
function showStep1() {
    resetStep1.style.display = 'block';
    resetStep2.style.display = 'none';
    modalTitle.textContent = 'Reset Your Password';
    modalSubtitle.textContent = "Enter your email and we'll send you an OTP.";
    resetEmailInput.focus();
}

// Show Step 2 (OTP + New Password)
function showStep2() {
    resetStep1.style.display = 'none';
    resetStep2.style.display = 'block';
    modalTitle.textContent = 'Enter OTP & New Password';
    modalSubtitle.textContent = `OTP sent to ${currentResetEmail}`;
    resetOtpInput.focus();
}

// Open Modal
forgotLink.addEventListener('click', () => {
    modal.style.display = 'flex';
    showStep1();
    resetEmailInput.value = emailInput.value.trim(); // pre-fill from login form
});

// Close Modal
function closeModal() {
    modal.style.display = 'none';
    showStep1(); // reset for next time
    resetOtpInput.value = '';
    newPasswordInput.value = '';
    confirmPasswordInput.value = '';
}

// Send OTP for Password Reset - ✅ PURE CONFIG URL
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
        // ✅ PURE CONFIG: No /api, no hardcoding
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

// Perform Password Reset - ✅ PURE CONFIG URL
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
        // ✅ PURE CONFIG: No /api, no hardcoding
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
        
        // Clear password field
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

// Login Button Click - ✅ PURE CONFIG URL
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
        // ✅ PURE CONFIG: No /api, no hardcoding
        const response = await fetch(`${API_URL}/login`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email: email, password: password })
        });

        const data = await response.json();

        console.log("LOGIN RESPONSE:", data);

        if (!response.ok) {
            throw new Error(data.detail || data.message || 'Login failed');
        }

        if (data.success) {
            // Extract token and user data from response
            const accessToken = data.data?.access_token;
            const refreshToken = data.data?.refresh_token;
            const expiresIn = data.data?.expires_in || 3600;
            const userData = data.data?.user || data.user;

            if (!accessToken) {
                throw new Error('No access token received from server');
            }

            if (!userData) {
                throw new Error('No user data received from server');
            }

            // Calculate token expiry time
            const expiryTime = new Date().getTime() + (expiresIn * 1000);

            // Store tokens securely
            localStorage.setItem('access_token', accessToken);
            
            if (refreshToken) {
                localStorage.setItem('refresh_token', refreshToken);
            }
            
            localStorage.setItem('token_expiry', expiryTime.toString());
            
            // Store user data
            localStorage.setItem('user', JSON.stringify(userData));
            localStorage.setItem('user_id', userData.id || userData.userId || '');
            localStorage.setItem('user_role', userData.role || 'student');

            // Remember me functionality
            if (remember) {
                localStorage.setItem('rememberedEmail', email);
                localStorage.setItem('rememberedPassword', password);
            } else {
                localStorage.removeItem('rememberedEmail');
                localStorage.removeItem('rememberedPassword');
            }

            // Set authorization header for future requests
            setAuthHeader(accessToken);

            // Show success message
            successMsg.style.display = 'block';

            // Redirect after short delay
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

// Function to set authorization header for future API calls
function setAuthHeader(token) {
    window.authToken = token;
}

// Function to make authenticated API calls
async function authenticatedFetch(url, options = {}) {
    const token = localStorage.getItem('access_token');
    
    if (!token) {
        window.location.href = 'login.php';
        throw new Error('No authentication token');
    }

    // Check if token is expired
    const expiry = localStorage.getItem('token_expiry');
    if (expiry && new Date().getTime() > parseInt(expiry)) {
        // Token expired, try to refresh
        const refreshed = await refreshAccessToken();
        if (!refreshed) {
            window.location.href = 'login.php';
            throw new Error('Session expired');
        }
    }

    const headers = {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${localStorage.getItem('access_token')}`,
        ...options.headers
    };

    const response = await fetch(url, { ...options, headers });
    
    if (response.status === 401) {
        // Token invalid, try to refresh
        const refreshed = await refreshAccessToken();
        if (refreshed) {
            // Retry with new token
            return authenticatedFetch(url, options);
        } else {
            window.location.href = 'login.php';
            throw new Error('Session expired');
        }
    }
    
    return response;
}

// Refresh access token using refresh token - ✅ PURE CONFIG URL
async function refreshAccessToken() {
    const refreshToken = localStorage.getItem('refresh_token');
    
    if (!refreshToken) {
        return false;
    }

    try {
        // ✅ PURE CONFIG: No /api, no hardcoding
        const response = await fetch(`${API_URL}/refresh-token`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ refresh_token: refreshToken })
        });

        const data = await response.json();

        if (data.success && data.data?.access_token) {
            localStorage.setItem('access_token', data.data.access_token);
            
            // Update expiry
            const expiresIn = data.data.expires_in || 3600;
            const expiryTime = new Date().getTime() + (expiresIn * 1000);
            localStorage.setItem('token_expiry', expiryTime.toString());
            
            return true;
        }
        return false;
    } catch (error) {
        console.error('Token refresh failed:', error);
        return false;
    }
}

// Logout function - ✅ PURE CONFIG URL
async function logout() {
    const token = localStorage.getItem('access_token');
    const refreshToken = localStorage.getItem('refresh_token');

    try {
        if (token) {
            // ✅ PURE CONFIG: No /api, no hardcoding
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
        // Clear all auth data regardless of API success
        clearAuthData();
        window.location.href = 'login.php';
    }
}

// Close modal when clicking outside
modal.addEventListener('click', function(e) {
    if (e.target === modal) closeModal();
});

// Keyboard support
passwordInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') loginBtn.click();
});

emailInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') passwordInput.focus();
});

// Remove error styling on input
emailInput.addEventListener('input', removeErrorClass);
passwordInput.addEventListener('input', removeErrorClass);

// Make logout function globally available
window.logout = logout;

</script>

<?php
// PHP fallback (optional)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = ['success' => false, 'message' => 'Please enable JavaScript to use this form.'];
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>

</body>
</html>