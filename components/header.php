<?php
// Header component - NeuraEduBot v2
?>

<header class="header">
    <div class="header-container">

        <!-- Left Side: Menu Button + Page Context -->
        <div class="header-left">
            <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
                <div class="hamburger" id="hamburgerIcon">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </div>
            </button>
            <div class="header-breadcrumb" id="headerBreadcrumb">
                <span class="breadcrumb-section" id="breadcrumbSection">Home</span>
            </div>
        </div>

        <!-- Center: Search Bar -->
        <div class="header-search" id="headerSearch">
            <i class="fas fa-search header-search-icon"></i>
            <input type="text" class="header-search-input" id="headerSearchInput" placeholder="Search courses, topics, quizzes..." autocomplete="off">
            <kbd class="header-search-kbd">Ctrl+K</kbd>
        </div>

        <!-- Right Side: Actions -->
        <div class="header-actions">

            <!-- Notification Bell -->
            <div class="notification-wrapper">
                

                <!-- Notification Dropdown -->
                <div class="notification-dropdown" id="notificationDropdown">
                    <div class="dropdown-header">
                        <h3>Notifications</h3>
                        <span class="mark-read" id="markAllRead">Mark all read</span>
                    </div>
                    <div class="notification-list" id="notificationList">
                        <div class="notification-item unread">
                            <div class="notification-icon" style="background:rgba(6,214,160,0.12);"><i class="fas fa-trophy" style="color:#06d6a0;"></i></div>
                            <div class="notification-content">
                                <p><strong>Quiz Completed!</strong> You scored 85% on Science</p>
                                <span class="notification-time">Just now</span>
                            </div>
                        </div>
                        <div class="notification-item unread">
                            <div class="notification-icon"><i class="fas fa-fire"></i></div>
                            <div class="notification-content">
                                <p><strong>Streak Alert!</strong> 7-day study streak achieved</p>
                                <span class="notification-time">2 hours ago</span>
                            </div>
                        </div>
                        <div class="notification-item">
                            <div class="notification-icon" style="background:rgba(255,209,102,0.12);"><i class="fas fa-book-open" style="color:#ffd166;"></i></div>
                            <div class="notification-content">
                                <p>New chapter available in Mathematics</p>
                                <span class="notification-time">Yesterday</span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-footer">
                        <a href="#" id="viewAllNotifications">View all notifications</a>
                    </div>
                </div>
            </div>

            <!-- User Profile Dropdown -->
            <div class="user-dropdown" id="userDropdown">
                <div class="dropdown-trigger">
                    <div class="dropdown-avatar" id="userAvatar">
                        <img id="profileImage" class="profile-img" alt="Profile">
                        <span id="profileInitials" class="profile-initials">??</span>
                    </div>
                    <div class="user-info">
                        <div class="user-name" id="userFullName">Guest User</div>
                        <div class="user-role" id="userSubtitle">Not logged in</div>
                    </div>
                    <i class="fas fa-chevron-down dropdown-icon"></i>
                </div>

                <!-- Dropdown Menu -->
                <div class="dropdown-menu" id="userDropdownMenu">
                    <div class="dropdown-user-card">
                        <div class="dropdown-user-avatar" id="dropdownAvatar">
                            <span id="dropdownInitials">??</span>
                        </div>
                        <div>
                            <div class="dropdown-user-name" id="dropdownName">Guest User</div>
                            <div class="dropdown-user-email" id="dropdownEmail">Not logged in</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="#" id="profile-link" class="dropdown-item">
                        <i class="fas fa-user"></i>
                        <span>My Profile</span>
                    </a>
                    <a href="#" id="settings-link" class="dropdown-item">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                    <a href="#" id="help-link" class="dropdown-item">
                        <i class="fas fa-question-circle"></i>
                        <span>Help & Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" id="logout-link" class="dropdown-item logout-item">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
/* ============================================================
   HEADER STYLES - NeuraEduBot v2
   Frosted glass with refined layout
   ============================================================ */

.header {
    background: rgba(255, 255, 255, 0.82);
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    border-bottom: 1px solid rgba(0, 0, 0, 0.06);
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 1px 12px rgba(0, 0, 0, 0.04);
    padding: 0 !important;
    margin-left: -30px;
    margin-right: -30px;
    width: calc(100% + 60px);
    height: 60px;
    min-height: 60px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
}

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1100;
}

/* menu-toggle visible on all screens */

.header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    max-width: 100%;
    margin: 0;
    padding: 0 24px;
    gap: 16px;
}

/* ---- Left Side ---- */
.header-left {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0;
}

.menu-toggle {
    width: 38px !important;
    height: 38px !important;
    border-radius: 10px !important;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    background: transparent;
    cursor: pointer;
    transition: background 0.2s ease;
    flex-shrink: 0;
    margin: 0 !important;
    padding: 0 !important;
}

.menu-toggle:hover {
    background: #f1f3f9;
}

.menu-toggle:active {
    transform: scale(0.92);
}

/* ---- Hamburger Animation ---- */
.hamburger {
    width: 20px;
    height: 14px;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.hamburger-line {
    display: block;
    width: 100%;
    height: 2px;
    background: #2b2d42;
    border-radius: 2px;
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    transform-origin: center;
}

.hamburger-line:nth-child(2) {
    width: 14px;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
}

.menu-toggle:hover .hamburger-line {
    background: #4361ee;
}

.menu-toggle:hover .hamburger-line:nth-child(2) {
    width: 20px;
}

/* Active state: morph to X */
.menu-toggle.active .hamburger-line:nth-child(1) {
    transform: translateY(6px) rotate(45deg);
    background: #4361ee;
}

.menu-toggle.active .hamburger-line:nth-child(2) {
    opacity: 0;
    transform: scaleX(0);
}

.menu-toggle.active .hamburger-line:nth-child(3) {
    transform: translateY(-6px) rotate(-45deg);
    background: #4361ee;
}

/* Breadcrumb */
.header-breadcrumb {
    display: flex;
    align-items: center;
    gap: 6px;
}

.breadcrumb-section {
    font-size: 15px;
    font-weight: 600;
    color: #2b2d42;
    letter-spacing: -0.2px;
}

/* ---- Center: Search ---- */
.header-search {
    flex: 1;
    max-width: 420px;
    position: relative;
    display: flex;
    align-items: center;
}

.header-search-icon {
    position: absolute;
    left: 14px;
    font-size: 13px;
    color: #8d99ae;
    pointer-events: none;
}

.header-search-input {
    width: 100%;
    height: 38px;
    padding: 0 80px 0 38px;
    border: 1.5px solid #e9ecef;
    border-radius: 10px;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
    color: #2b2d42;
    background: rgba(248, 249, 252, 0.7);
    outline: none;
    transition: all 0.2s ease;
}

.header-search-input::placeholder {
    color: #adb5c4;
    font-weight: 400;
}

.header-search-input:focus {
    border-color: #4361ee;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.08);
}

.header-search-kbd {
    position: absolute;
    right: 12px;
    font-size: 10px;
    font-family: 'Poppins', sans-serif;
    color: #8d99ae;
    background: #f1f3f7;
    border: 1px solid #e0e4ea;
    border-radius: 5px;
    padding: 2px 7px;
    pointer-events: none;
    line-height: 1.4;
    font-weight: 500;
}

/* ---- Right Side ---- */
.header-actions {
    display: flex;
    align-items: center;
    gap: 8px !important;
    margin-left: auto;
    margin-right: 30px !important;
    flex-shrink: 0;
}

/* Icon Buttons (Notification) */
.header-icon-btn {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1.5px solid #e9ecef;
    background: rgba(255, 255, 255, 0.6);
    cursor: pointer;
    color: #5a6275;
    font-size: 16px;
    transition: all 0.2s ease;
    position: relative;
}

.header-icon-btn:hover {
    background: #f1f3f9;
    border-color: #d0d5e0;
    color: #4361ee;
}

.notif-dot {
    position: absolute;
    top: 9px;
    right: 9px;
    width: 8px;
    height: 8px;
    background: #ef476f;
    border-radius: 50%;
    border: 2px solid #fff;
    display: none;
}

.notif-dot.show {
    display: block;
    animation: notifPulse 2s ease-in-out infinite;
}

@keyframes notifPulse {
    0%, 100% { box-shadow: 0 0 0 0 rgba(239, 71, 111, 0.4); }
    50%      { box-shadow: 0 0 0 4px rgba(239, 71, 111, 0); }
}

.notification-wrapper {
    position: relative;
    margin: 0;
    padding: 0;
}

/* ---- User Profile Trigger ---- */
.user-dropdown {
    position: relative;
    margin-left: 6px;
    padding: 0;
}

.dropdown-trigger {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 4px 10px 4px 4px;
    background: rgba(255, 255, 255, 0.5);
    border-radius: 12px;
    cursor: pointer;
    border: 1.5px solid #e9ecef;
    transition: all 0.2s ease;
}

.dropdown-trigger:hover {
    background: #f5f7fb;
    border-color: #d0d5e0;
}

.dropdown-avatar {
    width: 34px !important;
    height: 34px !important;
    background: linear-gradient(135deg, #4361ee, #7209b7);
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
}

.profile-img {
    width: 100%;
    height: 100%;
    border-radius: 9px;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    display: none;
}

.profile-initials {
    font-weight: 600;
    font-size: 13px !important;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    z-index: 1;
    position: relative;
}

.user-info {
    display: flex;
    flex-direction: column;
    line-height: 1.2;
}

.user-name {
    font-size: 13px !important;
    font-weight: 600;
    color: #2b2d42;
    letter-spacing: -0.1px;
}

.user-role {
    font-size: 11px !important;
    color: #8d99ae;
    font-weight: 400;
}

.dropdown-icon {
    font-size: 10px !important;
    color: #8d99ae;
    transition: transform 0.25s ease;
    margin-left: 2px;
}

.user-dropdown.open .dropdown-icon {
    transform: rotate(180deg);
}

/* ---- Dropdown Panels ---- */
.notification-dropdown,
.dropdown-menu {
    position: absolute;
    top: calc(100% + 8px);
    right: 0;
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12), 0 0 0 1px rgba(0, 0, 0, 0.04);
    border: none;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-8px) scale(0.98);
    transition: all 0.22s ease;
    z-index: 1000;
    min-width: 240px;
    overflow: hidden;
}

.notification-dropdown {
    width: 380px;
}

.notification-dropdown.show,
.dropdown-menu.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0) scale(1);
}

/* Dropdown header */
.dropdown-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 18px 12px;
    border-bottom: 1px solid #f3f4f6;
}

.dropdown-header h3 {
    font-size: 15px;
    font-weight: 700;
    color: #2b2d42;
}

.mark-read {
    font-size: 11px;
    color: #4361ee;
    cursor: pointer;
    font-weight: 500;
}

.mark-read:hover { text-decoration: underline; }

/* Notification items */
.notification-list {
    max-height: 340px;
    overflow-y: auto;
}

.notification-item {
    display: flex;
    gap: 12px;
    padding: 12px 18px;
    cursor: pointer;
    transition: background 0.15s ease;
    border-bottom: 1px solid #fafafa;
}

.notification-item:last-child {
    border-bottom: none;
}

.notification-item:hover {
    background: #f8f9fc;
}

.notification-item.unread {
    background: rgba(67, 97, 238, 0.03);
}

.notification-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: rgba(67, 97, 238, 0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.notification-icon i {
    font-size: 14px;
    color: #4361ee;
}

.notification-content {
    flex: 1;
    min-width: 0;
}

.notification-content p {
    font-size: 13px;
    color: #2b2d42;
    margin-bottom: 3px;
    line-height: 1.4;
}

.notification-content p strong {
    font-weight: 600;
}

.notification-time {
    font-size: 11px;
    color: #8d99ae;
}

.dropdown-footer {
    padding: 10px 18px;
    text-align: center;
    border-top: 1px solid #f3f4f6;
    background: #fafbfc;
}

.dropdown-footer a {
    color: #4361ee;
    text-decoration: none;
    font-size: 12px;
    font-weight: 500;
}

.dropdown-footer a:hover {
    text-decoration: underline;
}

/* ---- User Dropdown Card ---- */
.dropdown-user-card {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px 18px;
}

.dropdown-user-avatar {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #4361ee, #7209b7);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #fff;
    font-weight: 700;
    font-size: 14px;
}

.dropdown-user-name {
    font-size: 14px;
    font-weight: 600;
    color: #2b2d42;
}

.dropdown-user-email {
    font-size: 11px;
    color: #8d99ae;
    margin-top: 1px;
}

/* Menu items */
.dropdown-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 18px;
    text-decoration: none;
    color: #4a5270;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.15s ease;
    cursor: pointer;
}

.dropdown-item i {
    width: 18px;
    text-align: center;
    font-size: 14px;
    opacity: 0.65;
}

.dropdown-item:hover {
    background: #f5f7fb;
    color: #2b2d42;
}

.dropdown-item:hover i {
    opacity: 1;
    color: #4361ee;
}

.dropdown-divider {
    height: 1px;
    background: #f1f3f6;
    margin: 4px 0;
}

.logout-item {
    color: #ef476f !important;
}

.logout-item i {
    color: #ef476f !important;
    opacity: 0.8 !important;
}

.logout-item:hover {
    background: rgba(239, 71, 111, 0.05) !important;
}

.logout-item:hover i {
    color: #ef476f !important;
}

/* ---- Responsive ---- */
@media (max-width: 768px) {
    .header {
        height: 56px !important;
        min-height: 56px;
        margin-left: -16px;
        margin-right: -16px;
        width: calc(100% + 32px);
        overflow: visible !important;
    }
    .header-container {
        padding: 0 18px 0 14px;
        gap: 8px;
        justify-content: space-between;
    }
    .header-search { flex: 1; max-width: none; min-width: 0; }
    .header-search-kbd { display: none; }
    .header-breadcrumb { display: none; }
    .header-left { flex-shrink: 0; }
    .header-actions {
        display: flex !important;
        flex-shrink: 0;
        gap: 6px !important;
        margin-left: auto;
        margin-right: 0 !important;
    }
    .header-icon-btn { width: 34px; height: 34px; font-size: 15px; border: none; }
    .user-info { display: none !important; }
    .dropdown-icon { display: none !important; }
    .user-dropdown {
        display: flex !important;
        flex-shrink: 0;
    }
    .dropdown-trigger {
        padding: 3px !important;
        gap: 0 !important;
        border: none !important;
        background: transparent !important;
        border-radius: 10px !important;
        flex-shrink: 0;
    }
    .dropdown-avatar {
        width: 34px !important;
        height: 34px !important;
        min-width: 34px !important;
        display: flex !important;
        visibility: visible !important;
        opacity: 1 !important;
    }
    .notification-dropdown { width: 300px; right: 0; }
    .dropdown-menu { min-width: 220px; right: 0; }
}

@media (max-width: 480px) {
    .header {
        height: 52px !important;
        min-height: 52px;
        margin-left: -16px;
        margin-right: -16px;
        width: calc(100% + 32px);
    }
    .header-container { padding: 0 16px 0 12px; gap: 6px; }
    .header-icon-btn { width: 32px; height: 32px; font-size: 14px; }
    .dropdown-avatar { width: 32px !important; height: 32px !important; min-width: 32px !important; }
    .notification-dropdown { width: calc(100vw - 24px); right: 0; }
    .dropdown-menu { min-width: 200px; right: 0; }
}
</style>

<script>
(function () {
    'use strict';

    if (typeof CONFIG === 'undefined') {
        window.CONFIG = {
            API_BASE_URL: 'http://localhost:8000',
            PAGES: { LOGIN: '/neuraEdu/client/pages/login.php', DASHBOARD: '/index.php' }
        };
    }

    const API_BASE_URL = CONFIG.API_BASE_URL + '/api';
    const LOGIN_PAGE_URL = CONFIG.PAGES.LOGIN;

    let tokenCheckInterval = null;
    let logoutTimer = null;

    /* ==============================
       BREADCRUMB SYNC
    ============================== */
    function updateBreadcrumb() {
        const active = document.querySelector('.menu-item.active .menu-text');
        const el = document.getElementById('breadcrumbSection');
        if (el && active) {
            el.textContent = active.textContent.trim();
        }
    }

    // Watch for menu changes
    const observer = new MutationObserver(updateBreadcrumb);
    document.querySelectorAll('.menu-item').forEach(item => {
        observer.observe(item, { attributes: true, attributeFilter: ['class'] });
    });

    /* ==============================
       SEARCH BAR (Ctrl+K)
    ============================== */
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            const input = document.getElementById('headerSearchInput');
            if (input) input.focus();
        }
        if (e.key === 'Escape') {
            const input = document.getElementById('headerSearchInput');
            if (input && document.activeElement === input) input.blur();
        }
    });

    /* ==============================
       NOTIFICATION DOT
    ============================== */
    function updateNotifDot() {
        const unread = document.querySelectorAll('.notification-item.unread').length;
        const dot = document.getElementById('notificationDot');
        if (dot) {
            if (unread > 0) {
                dot.classList.add('show');
            } else {
                dot.classList.remove('show');
            }
        }
    }

    /* ==============================
       PROFILE PHOTO
    ============================== */
    async function loadProfilePhoto() {
        const token = localStorage.getItem('access_token');
        if (!token) return;

        try {
            const response = await fetch(`${API_BASE_URL}/profile/photo`, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                }
            });

            const data = await response.json();

            if (response.ok && data.success && data.data && data.data.photo_url) {
                const photoUrl = data.data.photo_url;
                let fullPhotoUrl = photoUrl;
                if (!photoUrl.startsWith('http')) {
                    fullPhotoUrl = `${CONFIG.API_BASE_URL}${photoUrl}`;
                }

                const profileImg = document.getElementById('profileImage');
                const profileInitials = document.getElementById('profileInitials');

                if (profileImg && profileInitials) {
                    profileImg.style.display = 'none';
                    profileInitials.style.display = 'flex';
                    profileInitials.textContent = getInitials();
                    profileImg.src = '';

                    const imgWithTimestamp = `${fullPhotoUrl}?t=${Date.now()}`;
                    profileImg.src = imgWithTimestamp;

                    profileImg.onload = function() {
                        profileImg.style.display = 'block';
                        profileInitials.style.display = 'none';
                        profileImg.onload = null;
                        profileImg.onerror = null;
                    };

                    profileImg.onerror = function() {
                        profileImg.style.display = 'none';
                        profileInitials.style.display = 'flex';
                        profileInitials.textContent = getInitials();
                        profileImg.onload = null;
                        profileImg.onerror = null;
                    };
                }
            } else {
                showInitialsOnly();
            }
        } catch (error) {
            showInitialsOnly();
        }
    }

    function getInitials() {
        const nameEl = document.getElementById("userFullName");
        const fullName = nameEl ? nameEl.textContent : "User";
        if (fullName && fullName !== "Guest User") {
            const nameParts = fullName.split(" ");
            if (nameParts.length >= 2) {
                return (nameParts[0][0] + nameParts[1][0]).toUpperCase();
            } else if (nameParts.length === 1) {
                return nameParts[0].substring(0, 2).toUpperCase();
            }
            return fullName.substring(0, 2).toUpperCase();
        }
        return "??";
    }

    function showInitialsOnly() {
        const profileImg = document.getElementById('profileImage');
        const profileInitials = document.getElementById('profileInitials');
        if (profileImg) profileImg.style.display = 'none';
        if (profileInitials) {
            profileInitials.style.display = 'flex';
            profileInitials.textContent = getInitials();
        }
    }

    /* ==============================
       TOKEN MANAGEMENT
    ============================== */
    function isTokenValid() {
        const token = localStorage.getItem('access_token');
        const tokenExpiry = localStorage.getItem('token_expiry');
        if (!token) return false;
        if (tokenExpiry) {
            if (new Date().getTime() > parseInt(tokenExpiry)) return false;
        }
        return true;
    }

    function getTimeUntilExpiry() {
        const tokenExpiry = localStorage.getItem('token_expiry');
        if (!tokenExpiry) return 0;
        return parseInt(tokenExpiry) - new Date().getTime();
    }

    function clearAuthData() {
        ['access_token', 'refresh_token', 'token_expiry', 'user', 'user_id', 'user_role'].forEach(i => {
            localStorage.removeItem(i);
            sessionStorage.removeItem(i);
        });
    }

    function redirectToLogin() {
        clearAuthData();
        window.location.href = LOGIN_PAGE_URL;
    }

    async function handleTokenExpiry() {
        stopTokenMonitoring();
        const token = localStorage.getItem('access_token');
        if (token) {
            try {
                await fetch(`${API_BASE_URL}/logout`, {
                    method: 'POST',
                    headers: { 'Authorization': `Bearer ${token}` }
                });
            } catch(e) {}
        }
        redirectToLogin();
    }

    function startTokenMonitoring() {
        stopTokenMonitoring();
        const timeLeft = getTimeUntilExpiry();
        if (timeLeft <= 0) { handleTokenExpiry(); return; }
        // setTimeout max safe value is ~24.8 days (2^31-1 ms). Cap at 24 hours and let setInterval re-check.
        const MAX_TIMEOUT = 24 * 60 * 60 * 1000; // 24 hours
        logoutTimer = setTimeout(handleTokenExpiry, Math.min(timeLeft, MAX_TIMEOUT));
        tokenCheckInterval = setInterval(() => {
            if (getTimeUntilExpiry() <= 0) handleTokenExpiry();
        }, 10000);
    }

    function stopTokenMonitoring() {
        if (logoutTimer) clearTimeout(logoutTimer);
        if (tokenCheckInterval) clearInterval(tokenCheckInterval);
    }

    /* ==============================
       USER DATA
    ============================== */
    function loadUserData() {
        if (!isTokenValid()) { redirectToLogin(); return; }

        let userJson = localStorage.getItem("user") || sessionStorage.getItem("user");
        if (!userJson) { redirectToLogin(); return; }

        try {
            const user = JSON.parse(userJson);
            const fullName = user.full_name || user.name || user.username ||
                           (user.email ? user.email.split("@")[0] : "User");
            const initials = getInitialsFromName(fullName);

            const nameEl = document.getElementById("userFullName");
            const roleEl = document.getElementById("userSubtitle");
            const profileInitials = document.getElementById("profileInitials");

            if (nameEl) nameEl.textContent = fullName;
            if (roleEl) roleEl.textContent = user.role || "User";
            if (profileInitials) profileInitials.textContent = initials || "??";

            // Sync dropdown card
            const ddName = document.getElementById("dropdownName");
            const ddEmail = document.getElementById("dropdownEmail");
            const ddInitials = document.getElementById("dropdownInitials");
            if (ddName) ddName.textContent = fullName;
            if (ddEmail) ddEmail.textContent = user.email || user.role || "User";
            if (ddInitials) ddInitials.textContent = initials || "??";

            setTimeout(() => loadProfilePhoto(), 100);
            startTokenMonitoring();
        } catch(e) {
            redirectToLogin();
        }
    }

    function getInitialsFromName(name) {
        if (!name || name === "Guest User") return "??";
        const nameParts = name.split(" ");
        if (nameParts.length >= 2) return (nameParts[0][0] + nameParts[1][0]).toUpperCase();
        if (nameParts.length === 1) return nameParts[0].substring(0, 2).toUpperCase();
        return name.substring(0, 2).toUpperCase();
    }

    function showGuestView() {
        const nameEl = document.getElementById("userFullName");
        const roleEl = document.getElementById("userSubtitle");
        const profileInitials = document.getElementById("profileInitials");

        if (nameEl) nameEl.textContent = "Guest User";
        if (roleEl) roleEl.textContent = "Not logged in";
        if (profileInitials) profileInitials.textContent = "??";

        showInitialsOnly();
        closeAllDropdowns();
    }

    function closeAllDropdowns() {
        const userMenu = document.getElementById("userDropdownMenu");
        const userDropdown = document.getElementById("userDropdown");
        const notifDropdown = document.getElementById("notificationDropdown");

        if (userMenu) { userMenu.classList.remove('show'); userMenu.style.display = ''; }
        if (userDropdown) userDropdown.classList.remove('open');
        if (notifDropdown) notifDropdown.classList.remove('show');
    }

    /* ==============================
       SECTION SWITCHING
    ============================== */
    function switchToSection(sectionId) {
        const allSections = document.querySelectorAll('.content-section');
        allSections.forEach(section => section.style.display = 'none');

        const targetSection = document.getElementById(sectionId);
        if (targetSection) {
            targetSection.style.display = 'block';
        } else {
            createSectionIfNotExists(sectionId);
        }

        const allMenuItems = document.querySelectorAll('.menu-item');
        allMenuItems.forEach(item => {
            item.classList.remove('active');
            if (item.dataset.section === sectionId) item.classList.add('active');
        });

        window.scrollTo({ top: 0, behavior: 'smooth' });
        closeAllDropdowns();
        updateBreadcrumb();
    }

    function createSectionIfNotExists(sectionId) {
        const mainContent = document.querySelector('.main-content') || document.querySelector('main') || document.body;
        let sectionTitle = '';

        switch(sectionId) {
            case 'profile-section': sectionTitle = 'My Profile'; break;
            case 'settings-section': sectionTitle = 'Settings'; break;
            case 'help-section': sectionTitle = 'Help & Support'; break;
            default: return;
        }

        const newSection = document.createElement('div');
        newSection.id = sectionId;
        newSection.className = 'content-section';
        newSection.style.display = 'none';
        newSection.style.padding = '24px';
        newSection.innerHTML = `
            <div style="background: white; border-radius: 16px; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <h2 style="font-size: 24px; margin-bottom: 16px;">${sectionTitle}</h2>
                <p style="color: #6c7a91;">${sectionTitle} section content will appear here.</p>
            </div>
        `;
        mainContent.appendChild(newSection);
    }

    /* ==============================
       DROPDOWN HANDLERS
    ============================== */
    let isDropdownInitialized = false;

    function setupDropdowns() {
        if (isDropdownInitialized) return;

        const userDropdown = document.getElementById("userDropdown");
        const userMenu = document.getElementById("userDropdownMenu");
        const notifBtn = document.getElementById("notificationBtn");
        const notifDropdown = document.getElementById("notificationDropdown");

        if (!userDropdown || !userMenu) return;

        const trigger = userDropdown.querySelector('.dropdown-trigger');
        if (trigger) {
            const newTrigger = trigger.cloneNode(true);
            trigger.parentNode.replaceChild(newTrigger, trigger);

            newTrigger.addEventListener("click", function(e) {
                e.stopPropagation();
                e.preventDefault();

                if (isTokenValid()) {
                    const isVisible = userMenu.classList.contains('show');
                    if (isVisible) {
                        userMenu.classList.remove('show');
                        userDropdown.classList.remove('open');
                    } else {
                        if (notifDropdown) notifDropdown.classList.remove('show');
                        userMenu.classList.add('show');
                        userDropdown.classList.add('open');
                        userMenu.style.display = 'block';
                    }
                } else {
                    window.location.href = LOGIN_PAGE_URL;
                }
            });
        }

        if (notifBtn && notifDropdown) {
            const newNotifBtn = notifBtn.cloneNode(true);
            notifBtn.parentNode.replaceChild(newNotifBtn, notifBtn);

            newNotifBtn.addEventListener("click", function(e) {
                e.stopPropagation();
                e.preventDefault();

                const isVisible = notifDropdown.classList.contains('show');
                if (isVisible) {
                    notifDropdown.classList.remove('show');
                } else {
                    if (userMenu) {
                        userMenu.classList.remove('show');
                        userDropdown.classList.remove('open');
                    }
                    notifDropdown.classList.add('show');
                }
            });
        }

        document.addEventListener("click", function(e) {
            let clickedInsideUser = userDropdown && userDropdown.contains(e.target);
            let clickedInsideNotif = (notifDropdown && notifDropdown.contains(e.target)) || (notifBtn && notifBtn.contains(e.target));

            if (!clickedInsideUser && !clickedInsideNotif) {
                if (userMenu && userMenu.classList.contains('show')) {
                    userMenu.classList.remove('show');
                    userDropdown.classList.remove('open');
                }
                if (notifDropdown && notifDropdown.classList.contains('show')) {
                    notifDropdown.classList.remove('show');
                }
            }
        });

        isDropdownInitialized = true;
    }

    /* ==============================
       MENU TOGGLE
    ============================== */
    function setupMenuToggle() {
        const menuToggle = document.getElementById("menuToggle");
        if (menuToggle) {
            const newMenuToggle = menuToggle.cloneNode(true);
            menuToggle.parentNode.replaceChild(newMenuToggle, menuToggle);
            newMenuToggle.addEventListener("click", () => {
                newMenuToggle.classList.toggle('active');
                window.dispatchEvent(new CustomEvent('menuToggle'));
            });

            // Sync: when sidebar closes via overlay click or outside click, reset hamburger
            const sidebar = document.getElementById('sidebar');
            if (sidebar) {
                const obs = new MutationObserver(() => {
                    const isOpen = sidebar.classList.contains('active');
                    if (isOpen) {
                        newMenuToggle.classList.add('active');
                    } else {
                        newMenuToggle.classList.remove('active');
                    }
                });
                obs.observe(sidebar, { attributes: true, attributeFilter: ['class'] });
            }
        }
    }

    /* ==============================
       NAV LINKS
    ============================== */
    function setupLink(id, sectionId) {
        const link = document.getElementById(id);
        if (!link) return;
        const newLink = link.cloneNode(true);
        link.parentNode.replaceChild(newLink, link);
        newLink.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();
            if (sectionId && !isTokenValid()) { window.location.href = LOGIN_PAGE_URL; return; }
            closeAllDropdowns();
            if (sectionId) switchToSection(sectionId);
        });
        return newLink;
    }

    function setupLogout() {
        const link = document.getElementById("logout-link");
        if (!link) return;
        const newLink = link.cloneNode(true);
        link.parentNode.replaceChild(newLink, link);
        newLink.addEventListener("click", async (e) => {
            e.preventDefault();
            e.stopPropagation();
            stopTokenMonitoring();
            const token = localStorage.getItem('access_token');
            if (token) {
                try { await fetch(`${API_BASE_URL}/logout`, { method: 'POST', headers: { 'Authorization': `Bearer ${token}` } }); } catch(e) {}
            }
            clearAuthData();
            window.location.href = LOGIN_PAGE_URL;
        });
    }

    /* ==============================
       NOTIFICATION HANDLERS
    ============================== */
    function setupNotificationHandlers() {
        const markAllRead = document.getElementById("markAllRead");
        if (markAllRead) {
            const newEl = markAllRead.cloneNode(true);
            markAllRead.parentNode.replaceChild(newEl, markAllRead);
            newEl.addEventListener("click", () => {
                document.querySelectorAll('.notification-item.unread').forEach(item => item.classList.remove('unread'));
                updateNotifDot();
            });
        }

        document.querySelectorAll('.notification-item').forEach(item => {
            const newItem = item.cloneNode(true);
            item.parentNode.replaceChild(newItem, item);
            newItem.addEventListener("click", () => {
                newItem.classList.remove('unread');
                updateNotifDot();
            });
        });
    }

    /* ==============================
       FETCH INTERCEPTOR
    ============================== */
    function setupFetchInterceptor() {
        const oldFetch = window.fetch;
        window.fetch = async (...args) => {
            try {
                const res = await oldFetch(...args);
                if (res.status === 401) handleTokenExpiry();
                return res;
            } catch (error) {
                throw error;
            }
        };
    }

    /* ==============================
       INIT
    ============================== */
    function init() {
        setupFetchInterceptor();

        if (isTokenValid()) {
            loadUserData();
        } else {
            // Token is null or expired — redirect to login page
            redirectToLogin();
            return;
        }

        setupDropdowns();
        setupLink('profile-link', 'profile-section');
        setupLink('settings-link', 'settings-section');
        setupLink('help-link', 'help-section');
        setupLogout();
        setupMenuToggle();
        setupNotificationHandlers();
        updateNotifDot();
        updateBreadcrumb();
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", init);
    } else {
        init();
    }

    window.addEventListener('beforeunload', () => stopTokenMonitoring());
})();
</script>
