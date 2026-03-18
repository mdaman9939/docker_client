<?php
// Ensure config.js is loaded (this is just a check, actual loading happens in index.php)
?>

<header class="header">
    <button class="menu-toggle" id="menuToggle">
        <i class="fas fa-bars"></i>
    </button>
   
    <div class="page-title" id="pageTitle">
        <h2 id="welcomeHeading">Welcome back, Guest!</h2>
        <p id="welcomeSubtitle">Your academic progress summary</p>
    </div>
   
    <div class="header-actions">
        <button class="notification-btn">
            <i class="fas fa-bell"></i>
            <span class="notification-badge" id="notificationCount">0</span>
        </button>
       
        <!-- User Dropdown -->
        <div class="user-dropdown" id="userDropdown" style="position: relative; cursor: pointer;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <div class="dropdown-avatar" id="userAvatar" 
                     style="width: 38px; height: 38px; background: #4361ee; color: white; border-radius: 50%; 
                            display: flex; align-items: center; justify-content: center; font-weight: 600;">
                    ??
                </div>
                <div>
                    <div style="font-weight: 500; font-size: 15px;" id="userFullName">Guest User</div>
                    <div style="font-size: 13px; color: var(--text-light);" id="userSubtitle">Not logged in</div>
                </div>
                <i class="fas fa-chevron-down" style="margin-left: 5px; font-size: 14px;"></i>
            </div>

            <!-- Dropdown Menu -->
            <div id="userDropdownMenu" class="dropdown-menu" 
                 style="display: none; position: absolute; top: 110%; right: 0; background: white; 
                        border: 1px solid #e0e0e0; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); 
                        min-width: 220px; z-index: 2000; overflow: hidden;">
                
                <!-- Profile Link -->
                <a href="#" id="profile-link" class="dropdown-item">👤 My Profile</a>
                
                <!-- Settings Link -->
                <a href="#" id="settings-link" class="dropdown-item">⚙️ Settings</a>
                
                <!-- Help & Support Link -->
                <a href="#" id="help-link" class="dropdown-item">❓ Help & Support</a>
                
                <hr style="margin: 6px 0; border: none; border-top: 1px solid #eee;">
                
                <!-- Logout Button -->
                <a href="#" id="logout-link" class="dropdown-item" style="color: #e74c3c; font-weight: 500;">
                    🚪 Logout
                </a>
            </div>
        </div>
    </div>
</header>

<script>
/* ==========================================
   HEADER / USER SYSTEM SCRIPT
   WITH AUTO-REDIRECT ON TOKEN EXPIRY
========================================== */

(function () {
    'use strict';

    console.log('🚀 Header script loaded');

    // API Configuration
    const API_BASE_URL = CONFIG.API_BASE_URL + '/api';
    const LOGIN_PAGE_URL = CONFIG.PAGES.LOGIN;
    const DASHBOARD_PAGE_URL = CONFIG.PAGES.DASHBOARD;

    // Store timeout IDs
    let tokenCheckInterval = null;
    let logoutTimer = null;

    /* ==============================
       CHECK IF TOKEN IS VALID
    ============================== */
    function isTokenValid() {
        const token = localStorage.getItem('access_token');
        const tokenExpiry = localStorage.getItem('token_expiry');

        console.log('🔍 Checking token:', { 
            token: token ? 'exists' : 'missing', 
            expiry: tokenExpiry 
        });

        if (!token) {
            console.log('⚠️ No token found');
            return false;
        }

        if (tokenExpiry) {
            const now = new Date().getTime();
            const expiry = parseInt(tokenExpiry);
            
            console.log(`⏰ Current time: ${new Date(now).toLocaleString()}`);
            console.log(`⏰ Token expiry: ${new Date(expiry).toLocaleString()}`);
            console.log(`⏰ Time remaining: ${Math.round((expiry - now) / 1000)} seconds`);

            if (now > expiry) {
                console.log('⚠️ Token has EXPIRED');
                return false;
            }
        }

        return true;
    }

    /* ==============================
       GET TIME UNTIL EXPIRY
    ============================== */
    function getTimeUntilExpiry() {
        const tokenExpiry = localStorage.getItem('token_expiry');
        
        if (!tokenExpiry) {
            return 0;
        }

        const now = new Date().getTime();
        const expiry = parseInt(tokenExpiry);
        
        return expiry - now;
    }

    /* ==============================
       REDIRECT TO LOGIN PAGE
    ============================== */
    function redirectToLogin(message) {
        console.log(`➡️ Redirecting to login: ${message}`);
        
        // Clear all auth data
        clearAuthData();
        
        // Show guest view
        showGuestView();
        
        // Redirect to login page
        window.location.href = LOGIN_PAGE_URL;
    }

    /* ==============================
       AUTO REDIRECT ON TOKEN EXPIRY
    ============================== */
    async function handleTokenExpiry() {
        console.log('🔔 Token expired! Redirecting to login...');
        
        // Clear timers
        stopTokenMonitoring();

        // Call logout API
        const accessToken = localStorage.getItem('access_token');
        
        if (accessToken) {
            try {
                await fetch(`${API_BASE_URL}/logout`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${accessToken}`
                    }
                });
                console.log('📡 Logout API called');
            } catch (error) {
                console.error('Logout API error:', error);
            }
        }

        // Redirect to login
        redirectToLogin('Your session has expired. Please login again.');
    }

    /* ==============================
       START TOKEN MONITORING
    ============================== */
    function startTokenMonitoring() {
        // Clear existing monitoring
        stopTokenMonitoring();

        // Check if we're on dashboard/index page
        const currentPath = window.location.pathname;
        const isDashboard = currentPath.includes('index.php') || currentPath === '/neuraEdu/client/';
        
        console.log(`📍 Current page: ${currentPath}, isDashboard: ${isDashboard}`);

        // Calculate time until expiry
        const timeUntilExpiry = getTimeUntilExpiry();
        
        console.log(`⏰ Token expires in ${Math.round(timeUntilExpiry / 1000)} seconds`);

        if (timeUntilExpiry <= 0) {
            // Token already expired
            console.log('⚠️ Token already expired on page load');
            
            if (isDashboard) {
                handleTokenExpiry();
            } else {
                // Just show guest view for non-dashboard pages
                clearAuthData();
                showGuestView();
            }
            return;
        }

        // Set timer for auto-redirect at expiry
        logoutTimer = setTimeout(() => {
            console.log('⏰ Token expiry timer triggered');
            
            if (isDashboard || confirm('Your session has expired. Would you like to login again?')) {
                handleTokenExpiry();
            } else {
                clearAuthData();
                showGuestView();
            }
        }, timeUntilExpiry);

        // Also check every 10 seconds as backup
        tokenCheckInterval = setInterval(() => {
            const remaining = getTimeUntilExpiry();
            
            console.log(`⏰ Interval check: ${Math.round(remaining / 1000)} seconds remaining`);
            
            if (remaining <= 0) {
                console.log('⚠️ Token expired during interval check');
                
                if (isDashboard) {
                    handleTokenExpiry();
                } else {
                    clearAuthData();
                    showGuestView();
                }
            } else if (remaining < 60000) { // Less than 1 minute
                console.log(`⚠️ Token expiring soon: ${Math.round(remaining / 1000)} seconds`);
            }
        }, 10000); // Check every 10 seconds

        console.log('✅ Token monitoring started');
    }

    /* ==============================
       STOP TOKEN MONITORING
    ============================== */
    function stopTokenMonitoring() {
        if (logoutTimer) {
            clearTimeout(logoutTimer);
            logoutTimer = null;
        }
        
        if (tokenCheckInterval) {
            clearInterval(tokenCheckInterval);
            tokenCheckInterval = null;
        }
    }

    /* ==============================
       CLEAR AUTH DATA
    ============================== */
    function clearAuthData() {
        stopTokenMonitoring();

        const authItems = [
            'access_token',
            'refresh_token',
            'token_expiry',
            'user',
            'user_id',
            'user_role',
            'rememberedEmail',
            'rememberedPassword',
            'auth',
            'loginHistory'
        ];

        authItems.forEach(item => {
            localStorage.removeItem(item);
            sessionStorage.removeItem(item);
        });

        console.log('✅ All auth data cleared');
    }

    /* ==============================
       LOAD USER DATA
    ============================== */
    function loadUserData() {
        try {
            // Check token first
            if (!isTokenValid()) {
                console.log('⚠️ Token invalid, checking if on dashboard...');
                
                const currentPath = window.location.pathname;
                const isDashboard = currentPath.includes('index.php') || currentPath === '/neuraEdu/client/';
                
                if (isDashboard) {
                    console.log('📍 On dashboard with invalid token - redirecting...');
                    handleTokenExpiry();
                } else {
                    showGuestView();
                }
                return;
            }

            let userJson = localStorage.getItem("user");

            if (!userJson || userJson === "undefined" || userJson === "null") {
                userJson = sessionStorage.getItem("user");
            }

            if (!userJson) {
                console.log('⚠️ No user data found');
                showGuestView();
                return;
            }

            const user = JSON.parse(userJson);

            const welcomeHeading = document.getElementById("welcomeHeading");
            const welcomeSubtitle = document.getElementById("welcomeSubtitle");
            const userAvatar = document.getElementById("userAvatar");
            const userFullName = document.getElementById("userFullName");
            const userSubtitle = document.getElementById("userSubtitle");

            const fullName = user.full_name || user.name || user.username || 
                            (user.email ? user.email.split("@")[0] : "User");

            const firstName = fullName.split(" ")[0];

            if (welcomeHeading) {
                welcomeHeading.textContent = `Welcome back, ${firstName}!`;
            }

            if (welcomeSubtitle) {
                if (user.role && user.role.toLowerCase() === "administrator") {
                    welcomeSubtitle.textContent = "System overview and analytics";
                } else {
                    welcomeSubtitle.textContent = "Your academic progress summary";
                }
            }

            if (userAvatar) {
                const initials = fullName
                    .split(" ")
                    .map(p => p.charAt(0).toUpperCase())
                    .join("")
                    .substring(0, 2);
                userAvatar.textContent = initials || "??";
            }

            if (userFullName) {
                userFullName.textContent = fullName;
            }

            if (userSubtitle) {
                userSubtitle.textContent = user.role || "User";
            }

            console.log('✅ User data loaded:', fullName);

            // Start monitoring token expiry
            startTokenMonitoring();

        } catch (error) {
            console.error("❌ User load error:", error);
            showGuestView();
        }
    }

    /* ==============================
       SHOW GUEST VIEW
    ============================== */
    function showGuestView() {
        const elements = {
            welcomeHeading: document.getElementById("welcomeHeading"),
            welcomeSubtitle: document.getElementById("welcomeSubtitle"),
            userAvatar: document.getElementById("userAvatar"),
            userFullName: document.getElementById("userFullName"),
            userSubtitle: document.getElementById("userSubtitle"),
            dropdownMenu: document.getElementById("userDropdownMenu")
        };

        if (elements.welcomeHeading) {
            elements.welcomeHeading.textContent = "Welcome back, Guest!";
        }

        if (elements.welcomeSubtitle) {
            elements.welcomeSubtitle.textContent = "Your academic progress summary";
        }

        if (elements.userAvatar) {
            elements.userAvatar.textContent = "??";
        }

        if (elements.userFullName) {
            elements.userFullName.textContent = "Guest User";
        }

        if (elements.userSubtitle) {
            elements.userSubtitle.textContent = "Not logged in";
        }

        if (elements.dropdownMenu) {
            elements.dropdownMenu.style.display = "none";
        }
    }

    /* ==============================
       DROPDOWN SETUP
    ============================== */
    function setupDropdown() {
        const userDropdown = document.getElementById("userDropdown");
        const dropdownMenu = document.getElementById("userDropdownMenu");

        if (!userDropdown || !dropdownMenu) {
            console.error('❌ Dropdown elements not found');
            return;
        }

        const toggleArea = userDropdown.querySelector("div:first-child");

        toggleArea.addEventListener("click", function (e) {
            e.stopPropagation();
            
            if (isTokenValid()) {
                const isVisible = dropdownMenu.style.display === "block";
                dropdownMenu.style.display = isVisible ? "none" : "block";
            } else {
                window.location.href = LOGIN_PAGE_URL;
            }
        });

        document.addEventListener("click", function (e) {
            if (!userDropdown.contains(e.target)) {
                dropdownMenu.style.display = "none";
            }
        });
    }

    /* ==============================
       PROFILE HANDLER
    ============================== */
    function setupProfileLink() {
        const profileLink = document.getElementById("profile-link");
        
        if (!profileLink) {
            console.error('❌ Profile link not found');
            return;
        }

        const newProfileLink = profileLink.cloneNode(true);
        profileLink.parentNode.replaceChild(newProfileLink, profileLink);

        newProfileLink.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('👤 Opening profile section...');
            
            if (!isTokenValid()) {
                window.location.href = LOGIN_PAGE_URL + '?redirect=index.php';
                return;
            }
            
            const dropdownMenu = document.getElementById("userDropdownMenu");
            if (dropdownMenu) dropdownMenu.style.display = "none";
            
            const currentPath = window.location.pathname;
            const isDashboard = currentPath.includes('index.php') || currentPath === '/neuraEdu/client/';
            
            if (isDashboard) {
                const profileSection = document.getElementById('profile-section');
                if (profileSection) {
                    document.querySelectorAll('.content-section').forEach(section => {
                        section.style.display = 'none';
                    });
                    profileSection.style.display = 'block';
                    
                    document.querySelectorAll('.menu-item').forEach(item => {
                        item.classList.remove('active');
                        if (item.dataset.section === 'profile-section') {
                            item.classList.add('active');
                        }
                    });
                    
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    console.log('✅ Profile section displayed');
                }
            } else {
                window.location.href = DASHBOARD_PAGE_URL + '#profile';
            }
        });

        console.log('✅ Profile link handler attached');
    }

    /* ==============================
       SETTINGS HANDLER
    ============================== */
    function setupSettingsLink() {
        const settingsLink = document.getElementById("settings-link");
        
        if (!settingsLink) {
            console.error('❌ Settings link not found');
            return;
        }

        const newSettingsLink = settingsLink.cloneNode(true);
        settingsLink.parentNode.replaceChild(newSettingsLink, settingsLink);

        newSettingsLink.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('⚙️ Opening settings section...');
            
            if (!isTokenValid()) {
                window.location.href = LOGIN_PAGE_URL + '?redirect=index.php';
                return;
            }
            
            const dropdownMenu = document.getElementById("userDropdownMenu");
            if (dropdownMenu) dropdownMenu.style.display = "none";
            
            const currentPath = window.location.pathname;
            const isDashboard = currentPath.includes('index.php') || currentPath === '/neuraEdu/client/';
            
            if (isDashboard) {
                const settingsSection = document.getElementById('settings-section');
                if (settingsSection) {
                    document.querySelectorAll('.content-section').forEach(section => {
                        section.style.display = 'none';
                    });
                    settingsSection.style.display = 'block';
                    
                    document.querySelectorAll('.menu-item').forEach(item => {
                        item.classList.remove('active');
                        if (item.dataset.section === 'settings-section') {
                            item.classList.add('active');
                        }
                    });
                    
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    console.log('✅ Settings section displayed');
                } else {
                    console.error('❌ Settings section not found in DOM');
                }
            } else {
                window.location.href = DASHBOARD_PAGE_URL + '#settings';
            }
        });

        console.log('✅ Settings link handler attached');
    }

    /* ==============================
       HELP HANDLER
    ============================== */
    function setupHelpLink() {
        const helpLink = document.getElementById("help-link");
        
        if (!helpLink) {
            console.error('❌ Help link not found');
            return;
        }

        const newHelpLink = helpLink.cloneNode(true);
        helpLink.parentNode.replaceChild(newHelpLink, helpLink);

        newHelpLink.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log('❓ Opening help section...');
            
            if (!isTokenValid()) {
                window.location.href = LOGIN_PAGE_URL + '?redirect=index.php';
                return;
            }
            
            const dropdownMenu = document.getElementById("userDropdownMenu");
            if (dropdownMenu) dropdownMenu.style.display = "none";
            
            const currentPath = window.location.pathname;
            const isDashboard = currentPath.includes('index.php') || currentPath === '/neuraEdu/client/';
            
            if (isDashboard) {
                const helpSection = document.getElementById('help-section');
                if (helpSection) {
                    document.querySelectorAll('.content-section').forEach(section => {
                        section.style.display = 'none';
                    });
                    helpSection.style.display = 'block';
                    
                    document.querySelectorAll('.menu-item').forEach(item => {
                        item.classList.remove('active');
                        if (item.dataset.section === 'help-section') {
                            item.classList.add('active');
                        }
                    });
                    
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    console.log('✅ Help section displayed');
                } else {
                    console.error('❌ Help section not found in DOM');
                }
            } else {
                window.location.href = DASHBOARD_PAGE_URL + '#help';
            }
        });

        console.log('✅ Help link handler attached');
    }

    /* ==============================
       LOGOUT HANDLER
    ============================== */
    async function performLogout() {
        console.log('🚪 Manual logout');

        stopTokenMonitoring();

        const accessToken = localStorage.getItem('access_token');
        const refreshToken = localStorage.getItem('refresh_token');

        try {
            if (accessToken) {
                await fetch(`${API_BASE_URL}/logout`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${accessToken}`
                    },
                    body: JSON.stringify({ refresh_token: refreshToken })
                });
            }
        } catch (error) {
            console.error('Logout API error:', error);
        } finally {
            clearAuthData();
            window.location.href = LOGIN_PAGE_URL;
        }
    }

    function setupLogout() {
        const logoutLink = document.getElementById("logout-link");
        
        if (!logoutLink) {
            console.error('❌ Logout link not found');
            return;
        }

        const newLogoutLink = logoutLink.cloneNode(true);
        logoutLink.parentNode.replaceChild(newLogoutLink, logoutLink);

        newLogoutLink.addEventListener("click", async function (e) {
            e.preventDefault();
            e.stopPropagation();
            await performLogout();
        });

        console.log('✅ Logout handler attached');
    }

    /* ==============================
       FETCH INTERCEPTOR
    ============================== */
    function setupFetchInterceptor() {
        const originalFetch = window.fetch;
        
        window.fetch = async function(...args) {
            const response = await originalFetch.apply(this, args);
            
            if (response.status === 401) {
                console.log('🔔 Received 401 response');
                
                const currentPath = window.location.pathname;
                const isDashboard = currentPath.includes('index.php') || currentPath === '/neuraEdu/client/';
                
                if (isDashboard) {
                    handleTokenExpiry();
                } else {
                    clearAuthData();
                    showGuestView();
                }
            }
            
            return response;
        };
        
        console.log('✅ Fetch interceptor setup');
    }

    /* ==============================
       INITIALIZATION
    ============================== */
    function init() {
        console.log('🔄 Initializing header...');
        
        setupFetchInterceptor();
        
        const isValid = isTokenValid();
        const currentPath = window.location.pathname;
        const isDashboard = currentPath.includes('index.php') || currentPath === '/neuraEdu/client/';
        
        console.log(`📍 Page: ${currentPath}, isDashboard: ${isDashboard}, tokenValid: ${isValid}`);
        
        if (isValid) {
            loadUserData();
        } else {
            if (isDashboard) {
                console.log('⚠️ On dashboard with invalid token - redirecting...');
                handleTokenExpiry();
            } else {
                showGuestView();
            }
        }
        
        setupDropdown();
        setupProfileLink();
        setupSettingsLink();
        setupHelpLink();
        setupLogout();
        
        console.log('✅ Header initialization complete');
    }

    // Run initialization
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", init);
    } else {
        init();
    }

    // Check on visibility change
    document.addEventListener('visibilitychange', function() {
        if (!document.hidden) {
            console.log('👁️ Page became visible');
            
            if (!isTokenValid()) {
                const currentPath = window.location.pathname;
                const isDashboard = currentPath.includes('index.php') || currentPath === '/neuraEdu/client/';
                
                if (isDashboard) {
                    handleTokenExpiry();
                } else {
                    clearAuthData();
                    showGuestView();
                }
            }
        }
    });

    // Cleanup on unload
    window.addEventListener('beforeunload', function() {
        stopTokenMonitoring();
    });

})();
</script>

<style>
.loading {
    display: inline-block;
    width: 16px;
    height: 16px;
    border: 2px solid #f3f3f3;
    border-top: 2px solid #e74c3c;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin-right: 5px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

#logout-link[style*="pointer-events: none"] {
    opacity: 0.7;
}
</style>