<!-- Settings Section -->
<div id="settings-section" class="content-section" style="display: none;">

    <!-- Loading Spinner -->
    <div id="settings-loading" class="loading-spinner-container">
        <div class="spinner"></div>
        <p>Loading settings...</p>
    </div>

    <!-- Messages -->
    <div id="settings-error" class="st-msg st-msg-error" style="display: none;"></div>
    <div id="settings-success" class="st-msg st-msg-success" style="display: none;"></div>

    <div class="settings-content" id="settings-content" style="display: none;">
        <div id="settings-content-wrapper">

            <!-- Hero Banner -->
            <div class="st-hero">
                <div class="st-hero-left">
                    <div class="st-hero-avatar">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="st-hero-info">
                        <h2 id="settings-fullname">Loading...</h2>
                        <span class="st-role-badge" id="settings-role">Loading...</span>
                        <div class="st-hero-meta">
                            <span class="st-meta"><i class="fas fa-envelope"></i> <span id="settings-email">loading...</span></span>
                            <span class="st-meta" id="settings-verified"><i class="fas fa-check-circle"></i> Loading...</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Tabs -->
            <div class="st-tabs-bar">
                <button class="st-tab active" data-tab="account"><i class="fas fa-user-circle"></i> Account</button>
                <button class="st-tab" data-tab="privacy"><i class="fas fa-shield-alt"></i> Privacy</button>
                <button class="st-tab" data-tab="notifications"><i class="fas fa-bell"></i> Notifications</button>
            </div>

            <!-- ==================== ACCOUNT TAB ==================== -->
            <div id="account-settings" class="settings-panel active">

                <!-- Account Info Card -->
                <div class="st-card">
                    <div class="st-card-top">
                        <div class="st-card-title">
                            <div class="st-icon-box"><i class="fas fa-user-circle"></i></div>
                            <h4>Account Information</h4>
                        </div>
                        <button class="st-edit-btn" id="toggle-account-edit"><i class="fas fa-pen"></i> Edit</button>
                    </div>

                    <!-- View Mode -->
                    <div id="account-view-mode">
                        <div class="st-info-grid">
                            <div class="st-info-item"><span class="st-label">Full Name</span><span class="st-value" id="settings-display-fullname">-</span></div>
                            <div class="st-info-item"><span class="st-label">Email</span><span class="st-value" id="settings-display-email">-</span></div>
                            <div class="st-info-item"><span class="st-label">Role</span><span class="st-value" id="settings-display-role">-</span></div>
                            <div class="st-info-item"><span class="st-label">Verified</span><span class="st-value" id="settings-display-verified">-</span></div>
                        </div>

                        <div id="settings-student-info-section" class="st-student-section">
                            <div class="st-divider"></div>
                            <div class="st-card-title" style="margin-bottom: 16px;">
                                <div class="st-icon-box" style="background: linear-gradient(135deg, #0ed3a2, #129695);"><i class="fas fa-graduation-cap"></i></div>
                                <h4>Education</h4>
                            </div>
                            <div class="st-info-grid">
                                <div class="st-info-item"><span class="st-label">Class</span><span class="st-value" id="settings-display-class">-</span></div>
                                <div class="st-info-item"><span class="st-label">School Name</span><span class="st-value" id="settings-display-school">-</span></div>
                            </div>
                        </div>

                        <div class="st-divider"></div>
                        <div class="st-card-title" style="margin-bottom: 16px;">
                            <div class="st-icon-box" style="background: linear-gradient(135deg, #ffd166, #f9c74f);"><i class="fas fa-clock"></i></div>
                            <h4>Timeline</h4>
                        </div>
                        <div class="st-info-grid">
                            <div class="st-info-item"><span class="st-label">Member Since</span><span class="st-value" id="settings-display-created">-</span></div>
                            <div class="st-info-item"><span class="st-label">Last Updated</span><span class="st-value" id="settings-display-updated">-</span></div>
                        </div>
                    </div>

                    <!-- Edit Mode -->
                    <div id="account-edit-mode" style="display: none;">
                        <div class="st-form">
                            <div class="st-form-row">
                                <div class="st-form-group">
                                    <label><i class="fas fa-user"></i> Full Name <span class="st-req">*</span></label>
                                    <input type="text" id="settings-edit-fullname" class="st-input">
                                </div>
                                <div class="st-form-group">
                                    <label><i class="fas fa-envelope"></i> Email (read-only)</label>
                                    <input type="email" id="settings-edit-email" class="st-input" readonly>
                                </div>
                            </div>
                            <div class="st-form-group">
                                <label><i class="fas fa-user-tag"></i> Role <span class="st-req">*</span></label>
                                <select id="settings-edit-role" class="st-input">
                                    <option value="student">Student</option>
                                    <option value="administrator">Administrator</option>
                                </select>
                            </div>
                            <div id="settings-edit-student-fields">
                                <div class="st-divider"></div>
                                <h4 style="margin: 0 0 16px; font-size: 15px; color: #333;"><i class="fas fa-graduation-cap" style="color: #0ed3a2; margin-right: 6px;"></i> Education</h4>
                                <div class="st-form-row">
                                    <div class="st-form-group">
                                        <label>Class <span class="st-opt">(Optional)</span></label>
                                        <select id="settings-edit-class" class="st-input">
                                            <option value="">Select Class</option>
                                            <option value="1">Class 1</option><option value="2">Class 2</option><option value="3">Class 3</option>
                                            <option value="4">Class 4</option><option value="5">Class 5</option><option value="6">Class 6</option>
                                            <option value="7">Class 7</option><option value="8">Class 8</option><option value="9">Class 9</option>
                                            <option value="10">Class 10</option><option value="11">Class 11</option><option value="12">Class 12</option>
                                        </select>
                                    </div>
                                    <div class="st-form-group">
                                        <label>School Name <span class="st-opt">(Optional)</span></label>
                                        <input type="text" id="settings-edit-school" class="st-input" placeholder="Enter school name">
                                    </div>
                                </div>
                            </div>
                            <div class="st-form-actions">
                                <button class="st-btn-secondary" id="settings-cancel-account-edit">Cancel</button>
                                <button class="st-btn-primary" id="settings-save-account"><i class="fas fa-save"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Change Password Card -->
                <div class="st-card">
                    <div class="st-card-top">
                        <div class="st-card-title">
                            <div class="st-icon-box" style="background: linear-gradient(135deg, #ffd166, #f9c74f);"><i class="fas fa-key"></i></div>
                            <h4>Change Password</h4>
                        </div>
                        <button class="st-edit-btn" id="toggle-password-edit"><i class="fas fa-pen"></i> Change</button>
                    </div>

                    <div id="password-view-mode">
                        <div class="st-password-display">
                            <i class="fas fa-lock"></i>
                            <div>
                                <span class="st-pwd-dots">••••••••••</span>
                                <small>Your password is secure. Change it regularly for safety.</small>
                            </div>
                        </div>
                    </div>

                    <div id="password-edit-mode" style="display: none;">
                        <div class="st-form">
                            <div class="st-form-group">
                                <label>Current Password <span class="st-req">*</span></label>
                                <input type="password" id="settings-current-password" class="st-input" placeholder="Enter current password">
                            </div>
                            <div class="st-form-row">
                                <div class="st-form-group">
                                    <label>New Password <span class="st-req">*</span></label>
                                    <input type="password" id="settings-new-password" class="st-input" placeholder="Min 6 characters">
                                </div>
                                <div class="st-form-group">
                                    <label>Confirm Password <span class="st-req">*</span></label>
                                    <input type="password" id="settings-confirm-password" class="st-input" placeholder="Confirm new password">
                                </div>
                            </div>
                            <div class="st-form-actions">
                                <button class="st-btn-secondary" id="settings-cancel-password">Cancel</button>
                                <button class="st-btn-primary" id="settings-update-password"><i class="fas fa-save"></i> Update Password</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Danger Zone -->
                <div class="st-card st-danger-card">
                    <div class="st-card-title" style="margin-bottom: 16px;">
                        <div class="st-icon-box" style="background: linear-gradient(135deg, #ef476f, #e63946);"><i class="fas fa-exclamation-triangle"></i></div>
                        <h4>Danger Zone</h4>
                    </div>
                    <button id="settings-delete-account-quick" class="st-danger-btn">
                        <div class="st-danger-icon"><i class="fas fa-trash-alt"></i></div>
                        <div class="st-danger-text">
                            <span>Delete Account</span>
                            <small>Permanently delete your account and all data</small>
                        </div>
                        <i class="fas fa-chevron-right st-arrow"></i>
                    </button>
                </div>
            </div>

            <!-- ==================== PRIVACY TAB ==================== -->
            <div id="privacy-settings" class="settings-panel">
                <div class="st-card">
                    <div class="st-card-title" style="margin-bottom: 20px;">
                        <div class="st-icon-box" style="background: linear-gradient(135deg, #8b5cf6, #6d28d9);"><i class="fas fa-user-lock"></i></div>
                        <h4>Profile Privacy</h4>
                    </div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">Profile Visibility</span><span class="st-toggle-desc">Allow others to see your profile</span></div><label class="st-switch"><input type="checkbox" id="settings-profile-visibility" checked><span class="st-slider"></span></label></div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">Show Email Address</span><span class="st-toggle-desc">Display your email on your profile</span></div><label class="st-switch"><input type="checkbox" id="settings-show-email"><span class="st-slider"></span></label></div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">Study Activity</span><span class="st-toggle-desc">Show your learning activity to others</span></div><label class="st-switch"><input type="checkbox" id="settings-show-activity" checked><span class="st-slider"></span></label></div>
                    <div class="st-form-actions"><button class="st-btn-primary" id="settings-save-privacy"><i class="fas fa-save"></i> Save Privacy Settings</button></div>
                </div>

                <div class="st-card">
                    <div class="st-card-title" style="margin-bottom: 20px;">
                        <div class="st-icon-box" style="background: linear-gradient(135deg, #0ed3a2, #129695);"><i class="fas fa-database"></i></div>
                        <h4>Data & Privacy</h4>
                    </div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">Usage Data Collection</span><span class="st-toggle-desc">Help us improve by sharing anonymous usage data</span></div><label class="st-switch"><input type="checkbox" id="settings-data-collection" checked><span class="st-slider"></span></label></div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">Personalized Recommendations</span><span class="st-toggle-desc">Get personalized book and course recommendations</span></div><label class="st-switch"><input type="checkbox" id="settings-personalization" checked><span class="st-slider"></span></label></div>
                    <div class="st-divider"></div>
                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <button class="st-btn-outline" id="settings-download-data"><i class="fas fa-download"></i> Download My Data</button>
                        <button class="st-btn-outline danger" id="settings-delete-data"><i class="fas fa-trash"></i> Delete Account Data</button>
                    </div>
                </div>
            </div>

            <!-- ==================== NOTIFICATIONS TAB ==================== -->
            <div id="notification-settings" class="settings-panel">
                <div class="st-card">
                    <div class="st-card-title" style="margin-bottom: 20px;">
                        <div class="st-icon-box" style="background: linear-gradient(135deg, #3f66e6, #0ed3a2);"><i class="fas fa-envelope"></i></div>
                        <h4>Email Notifications</h4>
                    </div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">Course Updates</span><span class="st-toggle-desc">Get notified when new books are added to your class</span></div><label class="st-switch"><input type="checkbox" id="settings-email-courses" checked><span class="st-slider"></span></label></div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">Study Reminders</span><span class="st-toggle-desc">Daily reminders to maintain your study streak</span></div><label class="st-switch"><input type="checkbox" id="settings-email-reminders" checked><span class="st-slider"></span></label></div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">Achievement Alerts</span><span class="st-toggle-desc">Get notified when you earn badges or achievements</span></div><label class="st-switch"><input type="checkbox" id="settings-email-achievements" checked><span class="st-slider"></span></label></div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">Newsletter</span><span class="st-toggle-desc">Receive tips, updates, and learning resources</span></div><label class="st-switch"><input type="checkbox" id="settings-email-newsletter"><span class="st-slider"></span></label></div>
                    <div class="st-form-actions"><button class="st-btn-primary" id="settings-save-email"><i class="fas fa-save"></i> Save Email Settings</button></div>
                </div>

                <div class="st-card">
                    <div class="st-card-title" style="margin-bottom: 20px;">
                        <div class="st-icon-box" style="background: linear-gradient(135deg, #ffd166, #f9c74f);"><i class="fas fa-bell"></i></div>
                        <h4>Push Notifications</h4>
                    </div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">Enable Push Notifications</span><span class="st-toggle-desc">Allow notifications on this device</span></div><label class="st-switch"><input type="checkbox" id="settings-push-enabled" checked><span class="st-slider"></span></label></div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">Chat Messages</span><span class="st-toggle-desc">Get notified when you receive new messages</span></div><label class="st-switch"><input type="checkbox" id="settings-push-chat" checked><span class="st-slider"></span></label></div>
                    <div class="st-toggle-item"><div class="st-toggle-info"><span class="st-toggle-title">AI Question Responses</span><span class="st-toggle-desc">Notify when AI answers your questions</span></div><label class="st-switch"><input type="checkbox" id="settings-push-ai" checked><span class="st-slider"></span></label></div>
                    <div class="st-form-actions"><button class="st-btn-primary" id="settings-save-push"><i class="fas fa-save"></i> Save Push Settings</button></div>
                </div>

                <div class="st-card">
                    <div class="st-card-title" style="margin-bottom: 20px;">
                        <div class="st-icon-box" style="background: linear-gradient(135deg, #8b5cf6, #6d28d9);"><i class="fas fa-moon"></i></div>
                        <h4>Quiet Hours</h4>
                    </div>
                    <p style="color: #888; font-size: 13px; margin: 0 0 16px;">No notifications will be sent during these hours.</p>
                    <div class="st-form-row">
                        <div class="st-form-group"><label>Start Time</label><input type="time" id="settings-quiet-start" class="st-input" value="22:00"></div>
                        <div class="st-form-group"><label>End Time</label><input type="time" id="settings-quiet-end" class="st-input" value="08:00"></div>
                    </div>
                    <div class="st-form-actions"><button class="st-btn-primary" id="settings-save-quiet"><i class="fas fa-save"></i> Save Quiet Hours</button></div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- DELETE ACCOUNT MODAL -->
<div id="settings-delete-modal" class="st-modal" style="display: none;">
    <div class="st-modal-content">
        <div class="st-modal-header" style="background: linear-gradient(135deg, #ef476f, #e63946);">
            <div class="st-modal-icon"><i class="fas fa-exclamation-triangle"></i></div>
            <h3>Delete Account?</h3>
            <p>This action cannot be undone</p>
        </div>
        <div class="st-modal-body">
            <p style="color: #666; margin-bottom: 20px; text-align: center;">All your data will be permanently deleted. Enter your password to confirm.</p>
            <div class="st-form-group">
                <input type="password" id="settings-delete-password" class="st-input" placeholder="Enter your password to confirm">
            </div>
            <div class="st-modal-actions">
                <button id="settings-delete-cancel" class="st-btn-secondary">Cancel</button>
                <button id="settings-delete-confirm" class="st-btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
            </div>
        </div>
    </div>
</div>

<style>
/* ==================== SETTINGS - AI WORLD THEME ==================== */

/* Hero Banner with AI World Gradient */
.st-hero {
    background: linear-gradient(135deg, #3f66e6 0%, #0ed3a2 50%, #129695 100%);
    border-radius: 20px;
    padding: 28px 32px;
    margin-bottom: 24px;
    color: white;
}

.st-hero-left {
    display: flex;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
}

.st-hero-avatar {
    width: 64px;
    height: 64px;
    background: rgba(255,255,255,0.2);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    flex-shrink: 0;
}

.st-hero-info h2 {
    margin: 0 0 4px;
    font-size: 24px;
    font-weight: 700;
    color: white;
}

.st-role-badge {
    display: inline-block;
    padding: 3px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    background: rgba(255,255,255,0.2);
    margin-bottom: 8px;
}

.st-hero-meta {
    display: flex;
    gap: 18px;
    flex-wrap: wrap;
}

.st-meta {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    opacity: 0.9;
}

.st-meta i { font-size: 12px; }

/* Tabs */
.st-tabs-bar {
    display: flex;
    gap: 6px;
    background: white;
    padding: 10px 16px;
    border-radius: 50px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    margin-bottom: 24px;
    flex-wrap: wrap;
}

.st-tab {
    padding: 10px 22px;
    border: none;
    background: transparent;
    border-radius: 30px;
    cursor: pointer;
    font-weight: 500;
    color: #666;
    font-size: 14px;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 8px;
}

.st-tab:hover { background: #f0f4ff; color: #3f66e6; }
.st-tab.active { background: linear-gradient(135deg, #3f66e6, #0ed3a2); color: white; }

/* Panels */
.settings-panel { display: none; }
.settings-panel.active { display: block; animation: stFade 0.3s ease; }
@keyframes stFade { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }

/* Cards */
.st-card {
    background: white;
    border-radius: 20px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    margin-bottom: 20px;
}

.st-card-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.st-card-title {
    display: flex;
    align-items: center;
    gap: 12px;
}

.st-icon-box {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 16px;
    flex-shrink: 0;
}

.st-card-title h4 { margin: 0; font-size: 17px; font-weight: 700; color: #1a1a2e; }

.st-edit-btn {
    padding: 8px 18px;
    background: #eef1ff;
    border: none;
    border-radius: 12px;
    color: #3f66e6;
    cursor: pointer;
    font-weight: 600;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: all 0.3s;
}

.st-edit-btn:hover { background: #3f66e6; color: white; }

.st-divider { height: 1px; background: #f0f2f5; margin: 20px 0; }

/* Info Grid */
.st-info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.st-info-item { display: flex; flex-direction: column; gap: 4px; }
.st-label { font-size: 12px; color: #999; text-transform: uppercase; letter-spacing: 0.5px; font-weight: 600; }
.st-value { font-size: 15px; color: #333; font-weight: 500; }

/* Password Display */
.st-password-display {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 16px;
    background: #f8f9ff;
    border-radius: 14px;
}

.st-password-display > i {
    font-size: 20px;
    color: #3f66e6;
}

.st-pwd-dots {
    display: block;
    font-size: 18px;
    color: #333;
    letter-spacing: 3px;
    font-weight: 600;
}

.st-password-display small {
    display: block;
    color: #999;
    font-size: 12px;
    margin-top: 2px;
}

/* Toggle Items */
.st-toggle-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 14px 0;
    border-bottom: 1px solid #f5f5f5;
}

.st-toggle-item:last-of-type { border-bottom: none; }

.st-toggle-info { flex: 1; }
.st-toggle-title { font-weight: 600; color: #333; font-size: 14px; display: block; }
.st-toggle-desc { color: #999; font-size: 12px; margin-top: 2px; display: block; }

/* Toggle Switch */
.st-switch {
    position: relative;
    display: inline-block;
    width: 48px;
    height: 26px;
    flex-shrink: 0;
    margin-left: 15px;
}

.st-switch input { opacity: 0; width: 0; height: 0; }

.st-slider {
    position: absolute;
    cursor: pointer;
    inset: 0;
    background: #ddd;
    border-radius: 26px;
    transition: 0.3s;
}

.st-slider::before {
    content: "";
    position: absolute;
    height: 20px;
    width: 20px;
    left: 3px;
    bottom: 3px;
    background: white;
    border-radius: 50%;
    transition: 0.3s;
    box-shadow: 0 1px 4px rgba(0,0,0,0.15);
}

.st-switch input:checked + .st-slider { background: linear-gradient(135deg, #3f66e6, #0ed3a2); }
.st-switch input:checked + .st-slider::before { transform: translateX(22px); }

/* Danger Zone */
.st-danger-card { border: 2px solid #fee; }

.st-danger-btn {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 16px;
    background: #fff5f5;
    border: 2px solid transparent;
    border-radius: 14px;
    cursor: pointer;
    width: 100%;
    text-align: left;
    transition: all 0.3s;
}

.st-danger-btn:hover {
    border-color: #ef476f;
    transform: translateX(4px);
}

.st-danger-icon {
    width: 44px;
    height: 44px;
    background: linear-gradient(135deg, #ef476f, #e63946);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 16px;
    flex-shrink: 0;
}

.st-danger-text { flex: 1; }
.st-danger-text span { display: block; font-size: 15px; font-weight: 600; color: #ef476f; }
.st-danger-text small { color: #999; font-size: 12px; }
.st-arrow { color: #ccc; font-size: 12px; transition: transform 0.3s; }
.st-danger-btn:hover .st-arrow { transform: translateX(4px); color: #ef476f; }

/* Forms */
.st-form { max-width: 640px; }
.st-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.st-form-group { margin-bottom: 18px; }
.st-form-group label { display: block; margin-bottom: 6px; font-weight: 600; color: #444; font-size: 13px; }
.st-form-group label i { margin-right: 6px; color: #3f66e6; font-size: 12px; }

.st-input {
    width: 100%;
    padding: 11px 14px;
    border: 2px solid #e8ecf4;
    border-radius: 12px;
    font-size: 14px;
    box-sizing: border-box;
    transition: all 0.3s;
    background: #fafbff;
    color: #333;
}

.st-input:focus { outline: none; border-color: #3f66e6; box-shadow: 0 0 0 3px rgba(63,102,230,0.1); background: white; }
.st-input[readonly] { background: #f5f5f5; color: #888; }

.st-req { color: #ef476f; }
.st-opt { color: #999; font-size: 12px; font-weight: 400; }

.st-form-actions { display: flex; gap: 12px; justify-content: flex-end; margin-top: 8px; }

.st-btn-primary, .st-btn-secondary, .st-btn-danger, .st-btn-outline {
    padding: 11px 24px;
    border: none;
    border-radius: 14px;
    cursor: pointer;
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.st-btn-primary { background: linear-gradient(135deg, #3f66e6, #0ed3a2); color: white; }
.st-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(63,102,230,0.3); }
.st-btn-secondary { background: white; border: 2px solid #e0e0e0; color: #666; }
.st-btn-secondary:hover { border-color: #999; background: #f8f8f8; }
.st-btn-danger { background: linear-gradient(135deg, #ef476f, #e63946); color: white; }
.st-btn-danger:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(239,71,111,0.3); }

.st-btn-outline {
    padding: 10px 20px;
    border: 2px solid #e0e0e0;
    background: white;
    color: #666;
}

.st-btn-outline:hover { border-color: #3f66e6; color: #3f66e6; background: #f0f4ff; }
.st-btn-outline.danger:hover { border-color: #ef476f; color: #ef476f; background: #fff5f5; }

/* Modal */
.st-modal {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    backdrop-filter: blur(6px);
    padding: 20px;
    box-sizing: border-box;
    animation: stFadeIn 0.25s ease;
}

@keyframes stFadeIn { from { opacity: 0; } to { opacity: 1; } }

.st-modal-content {
    background: white;
    border-radius: 24px;
    width: 90%;
    max-width: 460px;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(0,0,0,0.15);
    animation: stSlideUp 0.3s ease;
}

@keyframes stSlideUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

.st-modal-header {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: white;
    padding: 24px 28px 20px;
    text-align: center;
}

.st-modal-icon {
    width: 48px;
    height: 48px;
    background: rgba(255,255,255,0.2);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    font-size: 20px;
}

.st-modal-header h3 { margin: 0 0 4px; font-size: 20px; font-weight: 700; color: white; }
.st-modal-header p { margin: 0; font-size: 13px; opacity: 0.85; }

.st-modal-body { padding: 24px 28px 28px; }
.st-modal-actions { display: flex; gap: 12px; margin-top: 8px; }
.st-modal-actions button { flex: 1; }

/* Loading & Messages */
.loading-spinner-container { text-align: center; padding: 50px; }
.spinner { display: inline-block; width: 50px; height: 50px; border: 5px solid #f3f3f3; border-top: 5px solid #3f66e6; border-radius: 50%; animation: stSpin 1s linear infinite; }
@keyframes stSpin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }

.st-msg { padding: 15px 20px; border-radius: 12px; margin-bottom: 16px; display: flex; align-items: center; gap: 10px; border-left: 4px solid; font-size: 14px; }
.st-msg-error { background: #fff5f5; color: #ef476f; border-left-color: #ef476f; }
.st-msg-success { background: #f0fdf4; color: #0ed3a2; border-left-color: #0ed3a2; }

/* Responsive */
@media (max-width: 768px) {
    .st-hero { padding: 20px 22px; }
    .st-hero-left { flex-direction: column; text-align: center; align-items: center; }
    .st-hero-meta { justify-content: center; }
    .st-info-grid { grid-template-columns: 1fr; }
    .st-form-row { grid-template-columns: 1fr; }
    .st-card { padding: 20px; }
    .st-tabs-bar { border-radius: 16px; padding: 10px 12px; justify-content: center; }
    .st-form-actions { flex-direction: column; }
    .st-form-actions button { width: 100%; justify-content: center; }
    .st-modal-actions { flex-direction: column; }
    .st-toggle-item { flex-wrap: wrap; gap: 10px; }
}

@media (max-width: 576px) {
    .st-hero-info h2 { font-size: 20px; }
    .st-tab { padding: 8px 14px; font-size: 13px; }
    .st-hero-avatar { width: 52px; height: 52px; font-size: 22px; }
}
</style>

<script>
// Settings JavaScript (same as your existing code - all features preserved)
(function() {
    'use strict';
    console.log("Settings Module Initialized");

    const API_BASE_URL = CONFIG.API_BASE_URL;
    const API_URL = API_BASE_URL + '/api';

    // DOM Elements
    const settingsElements = {
        section: document.getElementById('settings-section'),
        loading: document.getElementById('settings-loading'),
        content: document.getElementById('settings-content'),
        error: document.getElementById('settings-error'),
        success: document.getElementById('settings-success'),

        fullname: document.getElementById('settings-fullname'),
        role: document.getElementById('settings-role'),
        email: document.getElementById('settings-email'),
        verified: document.getElementById('settings-verified'),

        displayFullname: document.getElementById('settings-display-fullname'),
        displayEmail: document.getElementById('settings-display-email'),
        displayRole: document.getElementById('settings-display-role'),
        displayVerified: document.getElementById('settings-display-verified'),
        displayClass: document.getElementById('settings-display-class'),
        displaySchool: document.getElementById('settings-display-school'),
        displayCreated: document.getElementById('settings-display-created'),
        displayUpdated: document.getElementById('settings-display-updated'),

        studentInfoSection: document.getElementById('settings-student-info-section'),
        editStudentFields: document.getElementById('settings-edit-student-fields'),

        editFullname: document.getElementById('settings-edit-fullname'),
        editEmail: document.getElementById('settings-edit-email'),
        editRole: document.getElementById('settings-edit-role'),
        editClass: document.getElementById('settings-edit-class'),
        editSchool: document.getElementById('settings-edit-school'),

        currentPassword: document.getElementById('settings-current-password'),
        newPassword: document.getElementById('settings-new-password'),
        confirmPassword: document.getElementById('settings-confirm-password'),

        accountViewMode: document.getElementById('account-view-mode'),
        accountEditMode: document.getElementById('account-edit-mode'),
        passwordViewMode: document.getElementById('password-view-mode'),
        passwordEditMode: document.getElementById('password-edit-mode'),

        toggleAccountEdit: document.getElementById('toggle-account-edit'),
        togglePasswordEdit: document.getElementById('toggle-password-edit'),
        cancelAccountEdit: document.getElementById('settings-cancel-account-edit'),
        saveAccount: document.getElementById('settings-save-account'),
        cancelPassword: document.getElementById('settings-cancel-password'),
        updatePassword: document.getElementById('settings-update-password'),

        savePrivacy: document.getElementById('settings-save-privacy'),
        downloadData: document.getElementById('settings-download-data'),
        deleteData: document.getElementById('settings-delete-data'),
        saveEmail: document.getElementById('settings-save-email'),
        savePush: document.getElementById('settings-save-push'),
        saveQuiet: document.getElementById('settings-save-quiet'),
        deleteAccountQuick: document.getElementById('settings-delete-account-quick'),

        deleteModal: document.getElementById('settings-delete-modal'),
        deletePassword: document.getElementById('settings-delete-password'),
        deleteCancel: document.getElementById('settings-delete-cancel'),
        deleteConfirm: document.getElementById('settings-delete-confirm'),

        tabs: document.querySelectorAll('.st-tab'),
        panels: document.querySelectorAll('.settings-panel'),
    };

    const settingsState = { userData: null, isStudent: false, isLoading: false, activeTab: 'account' };

    // Helpers
    const settingsHelpers = {
        showError(message) {
            if (!settingsElements.error) return;
            settingsElements.error.style.display = 'flex';
            settingsElements.error.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
            setTimeout(() => { settingsElements.error.style.display = 'none'; }, 5000);
        },
        showSuccess(message) {
            if (!settingsElements.success) return;
            settingsElements.success.style.display = 'flex';
            settingsElements.success.innerHTML = `<i class="fas fa-check-circle"></i> ${message}`;
            setTimeout(() => { settingsElements.success.style.display = 'none'; }, 3000);
        },
        setLoading(isLoading) {
            settingsState.isLoading = isLoading;
            if (settingsElements.loading) settingsElements.loading.style.display = isLoading ? 'block' : 'none';
            if (settingsElements.content) settingsElements.content.style.display = isLoading ? 'none' : 'block';
        },
        getToken() { return localStorage.getItem('access_token'); },
        isAuthenticated() {
            const token = settingsHelpers.getToken();
            if (!token) return false;
            const expiry = localStorage.getItem('token_expiry');
            if (expiry && new Date().getTime() > parseInt(expiry)) { localStorage.clear(); window.location.href = CONFIG.PAGES.LOGIN; return false; }
            return true;
        },
        toggleStudentFields() {
            const isStudent = settingsElements.editRole?.value === 'student';
            if (settingsElements.editStudentFields) settingsElements.editStudentFields.style.display = isStudent ? 'block' : 'none';
        },
        formatDate(dateString) {
            if (!dateString) return '-';
            return new Date(dateString).toLocaleDateString('en-IN', { year: 'numeric', month: 'long', day: 'numeric' });
        },
        formatDateTime(dateString) {
            if (!dateString) return '-';
            return new Date(dateString).toLocaleDateString('en-IN', { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' });
        }
    };

    // API Functions
    const settingsAPI = {
        async fetchWithAuth(url, options = {}) {
            const token = settingsHelpers.getToken();
            if (!token) throw new Error('Not authenticated');
            const response = await fetch(url, { ...options, headers: { 'Authorization': `Bearer ${token}`, 'Content-Type': 'application/json', 'Accept': 'application/json', ...options.headers } });
            if (response.status === 401) { localStorage.clear(); window.location.href = CONFIG.PAGES.LOGIN; throw new Error('Session expired'); }
            return response;
        },

        async loadProfile() {
            if (!settingsHelpers.isAuthenticated()) { window.location.href = CONFIG.PAGES.LOGIN; return; }
            settingsHelpers.setLoading(true);
            try {
                const response = await settingsAPI.fetchWithAuth(`${API_URL}/profile`);
                const data = await response.json();
                if (!response.ok) throw new Error(data.detail || data.message || 'Failed to load profile');

                if (data.success && data.data && data.data.profile) {
                    const user = data.data.profile;
                    settingsState.userData = user;

                    if (settingsElements.fullname) settingsElements.fullname.textContent = user.full_name || 'Not set';
                    if (settingsElements.role) settingsElements.role.textContent = user.role === 'administrator' ? 'Administrator' : 'Student';
                    if (settingsElements.email) settingsElements.email.textContent = user.email || 'Not set';

                    const verifiedColor = user.is_verified ? '#0ed3a2' : '#ef476f';
                    const verifiedText = user.is_verified ? 'Verified' : 'Not Verified';
                    if (settingsElements.verified) settingsElements.verified.innerHTML = `<i class="fas fa-check-circle" style="color: ${verifiedColor};"></i> <span style="color: ${verifiedColor};">${verifiedText}</span>`;

                    if (settingsElements.displayFullname) settingsElements.displayFullname.textContent = user.full_name || '-';
                    if (settingsElements.displayEmail) settingsElements.displayEmail.textContent = user.email || '-';
                    if (settingsElements.displayRole) settingsElements.displayRole.textContent = user.role === 'administrator' ? 'Administrator' : 'Student';
                    if (settingsElements.displayVerified) settingsElements.displayVerified.textContent = user.is_verified ? 'Yes' : 'No';

                    settingsState.isStudent = user.role === 'student';
                    if (settingsState.isStudent) {
                        if (settingsElements.studentInfoSection) settingsElements.studentInfoSection.style.display = 'block';
                        if (settingsElements.displayClass) settingsElements.displayClass.textContent = user.class ? `Class ${user.class}` : '-';
                        if (settingsElements.displaySchool) settingsElements.displaySchool.textContent = user.school_name || '-';
                        if (settingsElements.editClass) settingsElements.editClass.value = user.class || '';
                        if (settingsElements.editSchool) settingsElements.editSchool.value = user.school_name || '';
                    } else {
                        if (settingsElements.studentInfoSection) settingsElements.studentInfoSection.style.display = 'none';
                        if (settingsElements.editStudentFields) settingsElements.editStudentFields.style.display = 'none';
                    }

                    if (settingsElements.displayCreated) settingsElements.displayCreated.textContent = settingsHelpers.formatDate(user.created_at);
                    if (settingsElements.displayUpdated) settingsElements.displayUpdated.textContent = settingsHelpers.formatDateTime(user.updated_at);

                    if (settingsElements.editFullname) settingsElements.editFullname.value = user.full_name || '';
                    if (settingsElements.editEmail) settingsElements.editEmail.value = user.email || '';
                    if (settingsElements.editRole) settingsElements.editRole.value = user.role || 'student';
                    settingsHelpers.toggleStudentFields();
                } else { throw new Error('Invalid response format'); }
            } catch (error) {
                console.error('Error loading settings:', error);
                settingsHelpers.showError(error.message || 'Failed to load settings');
            } finally { settingsHelpers.setLoading(false); }
        },

        async updateProfile() {
            const fullName = settingsElements.editFullname?.value.trim();
            const role = settingsElements.editRole?.value;
            if (!fullName) { settingsHelpers.showError('Full name is required'); return; }
            try {
                const updateData = { full_name: fullName, role: role };
                if (role === 'student') {
                    const classVal = settingsElements.editClass?.value ? parseInt(settingsElements.editClass.value) : null;
                    const schoolVal = settingsElements.editSchool?.value.trim() || null;
                    if (classVal !== null) updateData.class = classVal;
                    if (schoolVal !== null) updateData.school_name = schoolVal;
                }
                const response = await settingsAPI.fetchWithAuth(`${API_URL}/profile`, { method: 'PUT', body: JSON.stringify(updateData) });
                const data = await response.json();
                if (!response.ok) throw new Error(data.detail || data.message || 'Failed to update profile');
                if (data.success) {
                    settingsHelpers.showSuccess('Profile updated successfully!');
                    if (settingsElements.accountViewMode) settingsElements.accountViewMode.style.display = 'block';
                    if (settingsElements.accountEditMode) settingsElements.accountEditMode.style.display = 'none';
                    await settingsAPI.loadProfile();
                } else { throw new Error(data.message || 'Update failed'); }
            } catch (error) { settingsHelpers.showError(error.message); }
        },

        async changePassword() {
            const currentPassword = settingsElements.currentPassword?.value;
            const newPassword = settingsElements.newPassword?.value;
            const confirmPassword = settingsElements.confirmPassword?.value;
            if (!currentPassword) { settingsHelpers.showError('Current password is required'); return; }
            if (!newPassword) { settingsHelpers.showError('New password is required'); return; }
            if (newPassword.length < 6) { settingsHelpers.showError('New password must be at least 6 characters'); return; }
            if (newPassword !== confirmPassword) { settingsHelpers.showError('New passwords do not match'); return; }
            try {
                const response = await settingsAPI.fetchWithAuth(`${API_URL}/change-password`, { method: 'POST', body: JSON.stringify({ current_password: currentPassword, new_password: newPassword }) });
                const data = await response.json();
                if (!response.ok) throw new Error(data.detail || data.message || 'Failed to change password');
                if (data.success) {
                    settingsHelpers.showSuccess('Password changed successfully!');
                    if (settingsElements.currentPassword) settingsElements.currentPassword.value = '';
                    if (settingsElements.newPassword) settingsElements.newPassword.value = '';
                    if (settingsElements.confirmPassword) settingsElements.confirmPassword.value = '';
                    if (settingsElements.passwordViewMode) settingsElements.passwordViewMode.style.display = 'block';
                    if (settingsElements.passwordEditMode) settingsElements.passwordEditMode.style.display = 'none';
                } else { throw new Error(data.message || 'Password change failed'); }
            } catch (error) { settingsHelpers.showError(error.message); }
        }
    };

    // UI Functions
    const settingsUI = {
        showAccountEdit() {
            if (settingsElements.accountViewMode) settingsElements.accountViewMode.style.display = 'none';
            if (settingsElements.accountEditMode) settingsElements.accountEditMode.style.display = 'block';
        },
        hideAccountEdit() {
            if (settingsElements.accountViewMode) settingsElements.accountViewMode.style.display = 'block';
            if (settingsElements.accountEditMode) settingsElements.accountEditMode.style.display = 'none';
            if (settingsState.userData) {
                if (settingsElements.editFullname) settingsElements.editFullname.value = settingsState.userData.full_name || '';
                if (settingsElements.editRole) settingsElements.editRole.value = settingsState.userData.role || 'student';
                if (settingsElements.editClass) settingsElements.editClass.value = settingsState.userData.class || '';
                if (settingsElements.editSchool) settingsElements.editSchool.value = settingsState.userData.school_name || '';
            }
        },
        showPasswordEdit() {
            if (settingsElements.passwordViewMode) settingsElements.passwordViewMode.style.display = 'none';
            if (settingsElements.passwordEditMode) settingsElements.passwordEditMode.style.display = 'block';
            if (settingsElements.currentPassword) settingsElements.currentPassword.value = '';
            if (settingsElements.newPassword) settingsElements.newPassword.value = '';
            if (settingsElements.confirmPassword) settingsElements.confirmPassword.value = '';
        },
        hidePasswordEdit() {
            if (settingsElements.passwordViewMode) settingsElements.passwordViewMode.style.display = 'block';
            if (settingsElements.passwordEditMode) settingsElements.passwordEditMode.style.display = 'none';
        },
        switchTab(tabId) {
            settingsState.activeTab = tabId;
            settingsElements.tabs.forEach(tab => tab.classList.toggle('active', tab.dataset.tab === tabId));
            settingsElements.panels.forEach(panel => panel.classList.toggle('active', panel.id === `${tabId}-settings`));
        },
        openDeleteModal() {
            if (settingsElements.deleteModal) { if (settingsElements.deletePassword) settingsElements.deletePassword.value = ''; settingsElements.deleteModal.style.display = 'flex'; }
        },
        closeDeleteModal() {
            if (settingsElements.deleteModal) { settingsElements.deleteModal.style.display = 'none'; if (settingsElements.deletePassword) settingsElements.deletePassword.value = ''; }
        }
    };

    // Event Listeners
    function setupSettingsEventListeners() {
        settingsElements.tabs.forEach(tab => tab.addEventListener('click', () => settingsUI.switchTab(tab.dataset.tab)));

        if (settingsElements.toggleAccountEdit) settingsElements.toggleAccountEdit.addEventListener('click', settingsUI.showAccountEdit);
        if (settingsElements.togglePasswordEdit) settingsElements.togglePasswordEdit.addEventListener('click', settingsUI.showPasswordEdit);
        if (settingsElements.editRole) settingsElements.editRole.addEventListener('change', settingsHelpers.toggleStudentFields);
        if (settingsElements.cancelAccountEdit) settingsElements.cancelAccountEdit.addEventListener('click', settingsUI.hideAccountEdit);
        if (settingsElements.saveAccount) settingsElements.saveAccount.addEventListener('click', () => settingsAPI.updateProfile());
        if (settingsElements.cancelPassword) settingsElements.cancelPassword.addEventListener('click', settingsUI.hidePasswordEdit);
        if (settingsElements.updatePassword) settingsElements.updatePassword.addEventListener('click', () => settingsAPI.changePassword());

        if (settingsElements.savePrivacy) settingsElements.savePrivacy.addEventListener('click', () => settingsHelpers.showSuccess('Privacy settings saved!'));
        if (settingsElements.downloadData) settingsElements.downloadData.addEventListener('click', () => settingsHelpers.showSuccess('Your data download has started.'));
        if (settingsElements.deleteData) settingsElements.deleteData.addEventListener('click', () => settingsHelpers.showSuccess('Account data deletion requested.'));
        if (settingsElements.saveEmail) settingsElements.saveEmail.addEventListener('click', () => settingsHelpers.showSuccess('Email settings saved!'));
        if (settingsElements.savePush) settingsElements.savePush.addEventListener('click', () => settingsHelpers.showSuccess('Push notification settings saved!'));
        if (settingsElements.saveQuiet) settingsElements.saveQuiet.addEventListener('click', () => settingsHelpers.showSuccess('Quiet hours saved!'));

        if (settingsElements.deleteAccountQuick) settingsElements.deleteAccountQuick.addEventListener('click', (e) => { e.preventDefault(); settingsUI.openDeleteModal(); });
        if (settingsElements.deleteCancel) settingsElements.deleteCancel.addEventListener('click', () => settingsUI.closeDeleteModal());
        if (settingsElements.deleteConfirm) settingsElements.deleteConfirm.addEventListener('click', () => {
            const password = settingsElements.deletePassword?.value;
            if (!password) { settingsHelpers.showError('Please enter your password'); return; }
            if (confirm('Are you absolutely sure? This cannot be undone!')) {
                settingsHelpers.showSuccess('Account deletion requested.');
                settingsUI.closeDeleteModal();
            }
        });

        window.addEventListener('click', (e) => { if (e.target === settingsElements.deleteModal) settingsUI.closeDeleteModal(); });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && settingsElements.deleteModal?.style.display === 'flex') settingsUI.closeDeleteModal(); });
    }

    // Initialization
    let settingsProfileLoaded = false;

    function loadSettingsProfileIfNeeded() {
        if (settingsElements.section && settingsElements.section.style.display !== 'none' && !settingsProfileLoaded) {
            settingsProfileLoaded = true;
            settingsAPI.loadProfile();
        }
    }

    function initializeSettings() {
        if (settingsElements.deleteModal) settingsElements.deleteModal.style.display = 'none';
        setupSettingsEventListeners();
        loadSettingsProfileIfNeeded();
    }

    if (settingsElements.section) {
        const observer = new MutationObserver(() => { loadSettingsProfileIfNeeded(); });
        observer.observe(settingsElements.section, { attributes: true, attributeFilter: ['style'] });
    }

    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', initializeSettings);
    else initializeSettings();
})();
</script>
</div>