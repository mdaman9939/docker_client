<!-- Settings Section -->
<div id="settings-section" class="content-section" style="display: none;">
    <div class="settings-header">
        <div>
            <h3><i class="fas fa-cog"></i> Settings</h3>
            <p>Manage your account preferences and system settings</p>
        </div>
    </div>
    
    <hr class="divider">
    
    <!-- Loading Spinner -->
    <div id="settings-loading" class="loading-spinner-container">
        <div class="spinner"></div>
        <p>Loading settings...</p>
    </div>
    
    <!-- Error Message -->
    <div id="settings-error" class="error-message" style="display: none;"></div>
    
    <!-- Success Message -->
    <div id="settings-success" class="success-message" style="display: none;"></div>
    
    <div class="settings-content" id="settings-content" style="display: none;">
        
        <!-- SETTINGS CONTENT WRAPPER -->
        <div id="settings-content-wrapper">
            
            <!-- Settings Overview Card (Like Profile Overview) -->
            <div class="settings-overview-card">
                <div class="settings-overview-content">
                    <div class="settings-icon-wrapper">
                        <div class="settings-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                    </div>
                    
                    <div class="settings-basic-info">
                        <h2 id="settings-fullname">Loading...</h2>
                        <p id="settings-role">Loading...</p>
                        <div class="settings-contact-info">
                            <div class="info-item">
                                <i class="fas fa-envelope"></i>
                                <span id="settings-email">loading...</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-check-circle"></i>
                                <span id="settings-verified">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Settings Navigation Tabs -->
            <div class="settings-tabs-card">
                <div class="settings-tabs">
                    <button class="settings-tab active" data-tab="account">
                        <i class="fas fa-user-circle"></i> Account
                    </button>
                    <button class="settings-tab" data-tab="privacy">
                        <i class="fas fa-shield-alt"></i> Privacy
                    </button>
                    <button class="settings-tab" data-tab="notifications">
                        <i class="fas fa-bell"></i> Notifications
                    </button>
                </div>
            </div>
            
            <!-- ==================== ACCOUNT SETTINGS PANEL ==================== -->
            <div id="account-settings" class="settings-panel active">
                
                <!-- Account Information Card -->
                <div class="settings-card">
                    <div class="card-header">
                        <h4>
                            <i class="fas fa-user-circle"></i> Account Information
                        </h4>
                        <button class="btn-edit" id="toggle-account-edit">
                            <i class="fas fa-pen"></i> Edit
                        </button>
                    </div>
                    
                    <!-- View Mode -->
                    <div id="account-view-mode">
                        <div class="info-grid">
                            <div class="info-field">
                                <label>Full Name</label>
                                <p id="settings-display-fullname">-</p>
                            </div>
                            <div class="info-field">
                                <label>Email</label>
                                <p id="settings-display-email">-</p>
                            </div>
                            <div class="info-field">
                                <label>Role</label>
                                <p id="settings-display-role">-</p>
                            </div>
                            <div class="info-field">
                                <label>Verified</label>
                                <p id="settings-display-verified">-</p>
                            </div>
                        </div>
                        
                        <!-- Student Information Section -->
                        <div id="settings-student-info-section" class="student-info-section">
                            <hr>
                            
                            <h4>
                                <i class="fas fa-graduation-cap"></i> Education Information
                            </h4>
                            
                            <div class="info-grid">
                                <div class="info-field">
                                    <label>Class</label>
                                    <p id="settings-display-class">-</p>
                                </div>
                                <div class="info-field">
                                    <label>School Name</label>
                                    <p id="settings-display-school">-</p>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <h4>
                            <i class="fas fa-clock"></i> Account Timeline
                        </h4>
                        
                        <div class="info-grid">
                            <div class="info-field">
                                <label>Member Since</label>
                                <p id="settings-display-created">-</p>
                            </div>
                            <div class="info-field">
                                <label>Last Updated</label>
                                <p id="settings-display-updated">-</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Edit Mode -->
                    <div id="account-edit-mode" style="display: none;">
                        <div class="settings-form">
                            <div class="form-group">
                                <label>Full Name <span class="required">*</span></label>
                                <input type="text" id="settings-edit-fullname" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label>Email (cannot be changed)</label>
                                <input type="email" id="settings-edit-email" class="form-control" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label>Role <span class="required">*</span></label>
                                <select id="settings-edit-role" class="form-control">
                                    <option value="student">Student</option>
                                    <option value="administrator">Administrator</option>
                                </select>
                            </div>
                            
                            <div id="settings-edit-student-fields" class="student-edit-fields">
                                <hr>
                                
                                <h4>Education Information</h4>
                                
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Class <span class="optional">(Optional)</span></label>
                                        <select id="settings-edit-class" class="form-control">
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
                                        <label>School Name <span class="optional">(Optional)</span></label>
                                        <input type="text" id="settings-edit-school" class="form-control" placeholder="Enter school name">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-actions">
                                <button class="btn-secondary" id="settings-cancel-account-edit">Cancel</button>
                                <button class="btn-primary" id="settings-save-account">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Change Password Card -->
                <div class="settings-card">
                    <div class="card-header">
                        <h4>
                            <i class="fas fa-key"></i> Change Password
                        </h4>
                        <button class="btn-edit" id="toggle-password-edit">
                            <i class="fas fa-pen"></i> Change
                        </button>
                    </div>
                    
                    <!-- Password View Mode -->
                    <div id="password-view-mode">
                        <p class="text-muted">••••••••</p>
                        <small class="form-text">Last changed: Recently</small>
                    </div>
                    
                    <!-- Password Edit Mode -->
                    <div id="password-edit-mode" style="display: none;">
                        <div class="settings-form">
                            <div class="form-group">
                                <label>Current Password <span class="required">*</span></label>
                                <input type="password" id="settings-current-password" class="form-control" placeholder="Enter current password">
                            </div>
                            
                            <div class="form-group">
                                <label>New Password <span class="required">*</span></label>
                                <input type="password" id="settings-new-password" class="form-control" placeholder="Enter new password">
                                <small class="form-text">Minimum 6 characters</small>
                            </div>
                            
                            <div class="form-group">
                                <label>Confirm New Password <span class="required">*</span></label>
                                <input type="password" id="settings-confirm-password" class="form-control" placeholder="Confirm new password">
                            </div>
                            
                            <div class="form-actions">
                                <button class="btn-secondary" id="settings-cancel-password">Cancel</button>
                                <button class="btn-primary" id="settings-update-password">Update Password</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Account Settings Card -->
                <div class="settings-card">
                    <h4>
                        <i class="fas fa-shield-alt"></i> Account Settings
                    </h4>
                    
                    <div class="settings-grid">
                        <button id="settings-delete-account-quick" class="setting-item delete">
                            <i class="fas fa-trash"></i>
                            <div>
                                <p>Delete Account</p>
                                <small>Permanently delete your account</small>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- ==================== PRIVACY SETTINGS PANEL ==================== -->
            <div id="privacy-settings" class="settings-panel">
                
                <!-- Profile Privacy Card -->
                <div class="settings-card">
                    <h4>
                        <i class="fas fa-user-lock"></i> Profile Privacy
                    </h4>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">Profile Visibility</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-profile-visibility" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">Show Email Address</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-show-email">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">Study Activity</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-show-activity" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="form-actions">
                        <button class="btn-primary" id="settings-save-privacy">Save Privacy Settings</button>
                    </div>
                </div>
                
                <!-- Data & Privacy Card -->
                <div class="settings-card">
                    <h4>
                        <i class="fas fa-database"></i> Data & Privacy
                    </h4>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">Usage Data Collection</div>
                            <div class="option-description">Help us improve by sharing anonymous usage data</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-data-collection" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">Personalized Recommendations</div>
                            <div class="option-description">Get personalized book and course recommendations</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-personalization" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <hr style="margin: 20px 0; border: none; border-top: 1px solid #eee;">
                    
                    <div class="danger-zone">
                        <h5 style="color: #dc3545; margin: 0 0 15px 0;">Danger Zone</h5>
                        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <button class="btn-danger" id="settings-download-data">
                                <i class="fas fa-download"></i> Download My Data
                            </button>
                            <button class="btn-danger" id="settings-delete-data">
                                <i class="fas fa-trash"></i> Delete Account Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ==================== NOTIFICATION SETTINGS PANEL ==================== -->
            <div id="notification-settings" class="settings-panel">
                
                <!-- Email Notifications Card -->
                <div class="settings-card">
                    <h4>
                        <i class="fas fa-envelope"></i> Email Notifications
                    </h4>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">Course Updates</div>
                            <div class="option-description">Get notified when new books are added to your class</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-email-courses" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">Study Reminders</div>
                            <div class="option-description">Daily reminders to maintain your study streak</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-email-reminders" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">Achievement Alerts</div>
                            <div class="option-description">Get notified when you earn badges or achievements</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-email-achievements" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">Newsletter</div>
                            <div class="option-description">Receive tips, updates, and learning resources</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-email-newsletter">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="form-actions">
                        <button class="btn-primary" id="settings-save-email">Save Email Settings</button>
                    </div>
                </div>
                
                <!-- Push Notifications Card -->
                <div class="settings-card">
                    <h4>
                        <i class="fas fa-bell"></i> Push Notifications
                    </h4>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">Enable Push Notifications</div>
                            <div class="option-description">Allow notifications on this device</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-push-enabled" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">Chat Messages</div>
                            <div class="option-description">Get notified when you receive new messages</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-push-chat" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="settings-option">
                        <div class="option-info">
                            <div class="option-title">AI Question Responses</div>
                            <div class="option-description">Notify when AI answers your questions</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="settings-push-ai" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <div class="form-actions">
                        <button class="btn-primary" id="settings-save-push">Save Push Settings</button>
                    </div>
                </div>
                
                <!-- Quiet Hours Card -->
                <div class="settings-card">
                    <h4>
                        <i class="fas fa-clock"></i> Quiet Hours
                    </h4>
                    
                    <div class="settings-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Start Time</label>
                                <input type="time" id="settings-quiet-start" class="form-control" value="22:00">
                            </div>
                            
                            <div class="form-group">
                                <label>End Time</label>
                                <input type="time" id="settings-quiet-end" class="form-control" value="08:00">
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button class="btn-primary" id="settings-save-quiet">Save Quiet Hours</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- DELETE ACCOUNT MODAL -->
<div id="settings-delete-modal" class="modal" style="display: none;">
    <div class="modal-content delete-modal">
        <i class="fas fa-exclamation-triangle"></i>
        <h3>Delete Account?</h3>
        <p>This action cannot be undone. All your data will be permanently deleted.</p>
        
        <div class="form-group">
            <input type="password" id="settings-delete-password" class="form-control" placeholder="Enter your password to confirm">
        </div>
        
        <div class="modal-actions">
            <button id="settings-delete-cancel" class="btn-secondary">Cancel</button>
            <button id="settings-delete-confirm" class="btn-danger">Delete</button>
        </div>
    </div>
</div>

<style>
/* ==================== SETTINGS PAGE STYLES ==================== */

.settings-header {
    margin-bottom: 20px;
}

.settings-header h3 {
    font-size: 28px;
    color: #333;
    margin: 0 0 5px 0;
}

.settings-header h3 i {
    color: #4361ee;
    margin-right: 10px;
}

.settings-header p {
    color: #666;
    margin: 0;
    font-size: 16px;
}

/* Loading Spinner */
.loading-spinner-container {
    text-align: center;
    padding: 50px;
}

.spinner {
    display: inline-block;
    width: 50px;
    height: 50px;
    border: 5px solid #f3f3f3;
    border-top: 5px solid #4361ee;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Messages */
.error-message, .success-message {
    display: none;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    margin-bottom: 20px;
}

.error-message {
    background: #f8d7da;
    color: #721c24;
}

.success-message {
    background: #d4edda;
    color: #155724;
}

/* Settings Overview Card */
.settings-overview-card {
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.settings-overview-content {
    display: flex;
    align-items: center;
    gap: 30px;
    flex-wrap: wrap;
}

.settings-icon-wrapper {
    flex-shrink: 0;
}

.settings-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #4361ee, #06d6a0);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 40px;
}

.settings-basic-info {
    flex: 1;
    min-width: 250px;
}

.settings-basic-info h2 {
    margin: 0 0 5px 0;
    color: #333;
    font-size: 28px;
}

.settings-basic-info p {
    margin: 0 0 15px 0;
    color: #666;
    font-size: 16px;
}

.settings-contact-info {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #555;
}

.info-item i {
    color: #4361ee;
}

/* Settings Tabs Card */
.settings-tabs-card {
    background: white;
    border-radius: 20px;
    padding: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.settings-tabs {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.settings-tab {
    padding: 12px 24px;
    border: none;
    background: transparent;
    border-radius: 30px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s;
    color: #666;
    font-size: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.settings-tab:hover {
    background: #f0f4ff;
    color: #4361ee;
}

.settings-tab.active {
    background: linear-gradient(135deg, #4361ee, #06d6a0);
    color: white;
}

/* Settings Panels */
.settings-panel {
    display: none;
}

.settings-panel.active {
    display: block;
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Settings Cards */
.settings-card {
    background: white;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    margin-bottom: 25px;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.card-header h4 {
    margin: 0;
}

.settings-card h4 {
    color: #333;
    font-size: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.settings-card h4 i {
    color: #4361ee;
}

.btn-edit {
    padding: 8px 16px;
    background: #f0f4ff;
    border: none;
    border-radius: 20px;
    color: #4361ee;
    cursor: pointer;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 5px;
    transition: all 0.3s;
}

.btn-edit:hover {
    background: #4361ee;
    color: white;
}

.text-muted {
    color: #999;
    font-size: 16px;
    margin: 10px 0;
}

/* Info Grid */
.info-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.info-field label {
    display: block;
    color: #666;
    font-size: 14px;
    margin-bottom: 5px;
}

.info-field p {
    margin: 0;
    color: #333;
    font-size: 16px;
    font-weight: 500;
}

/* Student Info Section */
.student-info-section hr,
.settings-card hr {
    margin: 25px 0;
    border: none;
    border-top: 1px solid #eee;
}

/* Form Styles */
.settings-form {
    max-width: 600px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #555;
    font-weight: 500;
}

.form-control {
    width: 100%;
    padding: 12px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 16px;
    transition: all 0.3s;
    box-sizing: border-box;
}

.form-control:focus {
    outline: none;
    border-color: #4361ee;
    box-shadow: 0 0 0 3px rgba(67,97,238,0.1);
}

.form-control[readonly] {
    background: #f5f5f5;
    color: #666;
}

.form-text {
    display: block;
    margin-top: 5px;
    color: #999;
    font-size: 12px;
}

.required {
    color: #dc3545;
}

.optional {
    color: #888;
    font-size: 12px;
    font-weight: normal;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

/* Form Actions */
.form-actions {
    display: flex;
    gap: 10px;
    justify-content: flex-end;
    flex-wrap: wrap;
    margin-top: 20px;
}

.btn-primary, .btn-secondary, .btn-danger {
    padding: 12px 24px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-primary {
    background: linear-gradient(135deg, #4361ee, #06d6a0);
    color: white;
}

.btn-secondary {
    background: white;
    border: 1px solid #ddd;
    color: #333;
}

.btn-danger {
    background: #dc3545;
    color: white;
}

.btn-primary:hover, .btn-secondary:hover, .btn-danger:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Settings Options */
.settings-option {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #f0f0f0;
}

.settings-option:last-child {
    border-bottom: none;
}

.option-info {
    flex: 1;
}

.option-title {
    font-weight: 600;
    color: #333;
    margin-bottom: 5px;
}

.option-description {
    color: #999;
    font-size: 13px;
}

/* Toggle Switch */
.switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 24px;
    margin-left: 15px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: .3s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 18px;
    width: 18px;
    left: 3px;
    bottom: 3px;
    background-color: white;
    transition: .3s;
}

input:checked + .slider {
    background: linear-gradient(135deg, #4361ee, #06d6a0);
}

input:focus + .slider {
    box-shadow: 0 0 1px #4361ee;
}

input:checked + .slider:before {
    transform: translateX(26px);
}

.slider.round {
    border-radius: 24px;
}

.slider.round:before {
    border-radius: 50%;
}

/* Settings Grid */
.settings-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.setting-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    background: #f8f9ff;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
    text-align: left;
    transition: all 0.3s;
}

.setting-item i {
    color: #4361ee;
    font-size: 20px;
}

.setting-item p {
    margin: 0;
    color: #333;
    font-weight: 500;
}

.setting-item small {
    color: #999;
    font-size: 12px;
}

.setting-item.delete {
    background: #fff8f8;
    border: 1px solid #dc3545;
}

.setting-item.delete i {
    color: #dc3545;
}

.setting-item.delete p {
    color: #dc3545;
}

.setting-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Modals */
.modal { 
    display: none;
    position: fixed;  
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 1000;
    align-items: center;
    justify-content: center;
    padding: 20px;
    box-sizing: border-box;
}

.modal-content {
    background: white;
    width: 90%;
    max-width: 450px;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.modal-content h3 {
    margin: 0 0 20px 0;
    color: #333;
}

.modal-actions {
    display: flex;
    gap: 10px;
    margin-top: 20px;
}

.modal-actions button {
    flex: 1;
    padding: 12px;
}

.delete-modal {
    text-align: center;
}

.delete-modal i {
    font-size: 50px;
    color: #dc3545;
    margin-bottom: 20px;
}

/* Divider */
.divider {
    border: none;
    height: 2px;
    background: linear-gradient(to right, #4361ee, #06d6a0);
    margin: 20px 0 40px 0;
}

/* Responsive */
@media (max-width: 992px) {
    .settings-tabs {
        justify-content: center;
    }
    
    .settings-overview-content {
        flex-direction: column;
        text-align: center;
    }
    
    .settings-contact-info {
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-actions {
        justify-content: stretch;
    }
    
    .form-actions button {
        flex: 1;
    }
    
    .settings-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 576px) {
    .settings-header h3 {
        font-size: 24px;
    }
    
    .settings-icon {
        width: 60px;
        height: 60px;
        font-size: 30px;
    }
    
    .settings-basic-info h2 {
        font-size: 22px;
    }
}
</style>

<!-- ==================== SETTINGS JAVASCRIPT ==================== -->
<script>
// Settings Module - With CONFIG.API_BASE_URL
(function() {
    'use strict';
    
    console.log("⚙️ Settings Module Initialized");
    console.log("✅ CONFIG available:", !!window.CONFIG);
    console.log("✅ API_BASE_URL:", CONFIG.API_BASE_URL);
    
    // ==================== CONFIGURATION - USING CONFIG ====================
    const API_BASE_URL = CONFIG.API_BASE_URL;  //直接从CONFIG取
    const API_URL = API_BASE_URL + '/api';  // No /api prefix
    
    // ==================== DOM ELEMENTS ====================
    const settingsElements = {
        // Main containers
        section: document.getElementById('settings-section'),
        loading: document.getElementById('settings-loading'),
        content: document.getElementById('settings-content'),
        error: document.getElementById('settings-error'),
        success: document.getElementById('settings-success'),
        
        // Overview elements
        fullname: document.getElementById('settings-fullname'),
        role: document.getElementById('settings-role'),
        email: document.getElementById('settings-email'),
        verified: document.getElementById('settings-verified'),
        
        // Display elements
        displayFullname: document.getElementById('settings-display-fullname'),
        displayEmail: document.getElementById('settings-display-email'),
        displayRole: document.getElementById('settings-display-role'),
        displayVerified: document.getElementById('settings-display-verified'),
        displayClass: document.getElementById('settings-display-class'),
        displaySchool: document.getElementById('settings-display-school'),
        displayCreated: document.getElementById('settings-display-created'),
        displayUpdated: document.getElementById('settings-display-updated'),
        
        // Student sections
        studentInfoSection: document.getElementById('settings-student-info-section'),
        editStudentFields: document.getElementById('settings-edit-student-fields'),
        
        // Edit form elements
        editFullname: document.getElementById('settings-edit-fullname'),
        editEmail: document.getElementById('settings-edit-email'),
        editRole: document.getElementById('settings-edit-role'),
        editClass: document.getElementById('settings-edit-class'),
        editSchool: document.getElementById('settings-edit-school'),
        
        // Password elements
        currentPassword: document.getElementById('settings-current-password'),
        newPassword: document.getElementById('settings-new-password'),
        confirmPassword: document.getElementById('settings-confirm-password'),
        
        // View/Edit mode elements
        accountViewMode: document.getElementById('account-view-mode'),
        accountEditMode: document.getElementById('account-edit-mode'),
        passwordViewMode: document.getElementById('password-view-mode'),
        passwordEditMode: document.getElementById('password-edit-mode'),
        
        // Buttons
        toggleAccountEdit: document.getElementById('toggle-account-edit'),
        togglePasswordEdit: document.getElementById('toggle-password-edit'),
        cancelAccountEdit: document.getElementById('settings-cancel-account-edit'),
        saveAccount: document.getElementById('settings-save-account'),
        cancelPassword: document.getElementById('settings-cancel-password'),
        updatePassword: document.getElementById('settings-update-password'),
        
        // Privacy buttons
        savePrivacy: document.getElementById('settings-save-privacy'),
        downloadData: document.getElementById('settings-download-data'),
        deleteData: document.getElementById('settings-delete-data'),
        
        // Notification buttons
        saveEmail: document.getElementById('settings-save-email'),
        savePush: document.getElementById('settings-save-push'),
        saveQuiet: document.getElementById('settings-save-quiet'),
        
        // Quick action buttons
        deleteAccountQuick: document.getElementById('settings-delete-account-quick'),
        
        // Modals
        deleteModal: document.getElementById('settings-delete-modal'),
        deletePassword: document.getElementById('settings-delete-password'),
        deleteCancel: document.getElementById('settings-delete-cancel'),
        deleteConfirm: document.getElementById('settings-delete-confirm'),
        
        // Tabs
        tabs: document.querySelectorAll('.settings-tab'),
        panels: document.querySelectorAll('.settings-panel'),
    };
    
    // ==================== STATE ====================
    const settingsState = {
        userData: null,
        isStudent: false,
        isLoading: false,
        activeTab: 'account'
    };
    
    // ==================== HELPER FUNCTIONS ====================
    const settingsHelpers = {
        showError: function(message) {
            if (!settingsElements.error) return;
            settingsElements.error.style.display = 'block';
            settingsElements.error.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
            setTimeout(() => {
                settingsElements.error.style.display = 'none';
            }, 5000);
        },
        
        showSuccess: function(message) {
            if (!settingsElements.success) return;
            settingsElements.success.style.display = 'block';
            settingsElements.success.innerHTML = `<i class="fas fa-check-circle"></i> ${message}`;
            setTimeout(() => {
                settingsElements.success.style.display = 'none';
            }, 3000);
        },
        
        setLoading: function(isLoading) {
            settingsState.isLoading = isLoading;
            if (settingsElements.loading) {
                settingsElements.loading.style.display = isLoading ? 'block' : 'none';
            }
            if (settingsElements.content) {
                settingsElements.content.style.display = isLoading ? 'none' : 'block';
            }
        },
        
        getToken: function() {
            return localStorage.getItem('access_token');
        },
        
        isAuthenticated: function() {
            const token = settingsHelpers.getToken();
            if (!token) return false;
            
            const expiry = localStorage.getItem('token_expiry');
            if (expiry && new Date().getTime() > parseInt(expiry)) {
                localStorage.clear();
                window.location.href = CONFIG.PAGES.LOGIN;
                return false;
            }
            return true;
        },
        
        toggleStudentFields: function() {
            const isStudent = settingsElements.editRole?.value === 'student';
            if (settingsElements.editStudentFields) {
                settingsElements.editStudentFields.style.display = isStudent ? 'block' : 'none';
            }
        },
        
        formatDate: function(dateString) {
            if (!dateString) return '-';
            const date = new Date(dateString);
            return date.toLocaleDateString('en-IN', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        },
        
        formatDateTime: function(dateString) {
            if (!dateString) return '-';
            const date = new Date(dateString);
            return date.toLocaleDateString('en-IN', {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            });
        }
    };
    
    // ==================== API FUNCTIONS ====================
    const settingsAPI = {
        async fetchWithAuth(url, options = {}) {
            const token = settingsHelpers.getToken();
            
            if (!token) {
                throw new Error('Not authenticated');
            }
            
            const response = await fetch(url, {
                ...options,
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    ...options.headers
                }
            });
            
            if (response.status === 401) {
                localStorage.clear();
                window.location.href = CONFIG.PAGES.LOGIN;
                throw new Error('Session expired');
            }
            
            return response;
        },
        
        async loadProfile() {
            if (!settingsHelpers.isAuthenticated()) {
                window.location.href = CONFIG.PAGES.LOGIN;
                return;
            }
            
            settingsHelpers.setLoading(true);
            
            try {
                const response = await settingsAPI.fetchWithAuth(`${API_URL}/profile`);
                const data = await response.json();
                
                if (!response.ok) {
                    throw new Error(data.detail || data.message || 'Failed to load profile');
                }
                
                if (data.success && data.data && data.data.profile) {
                    const user = data.data.profile;
                    settingsState.userData = user;
                    
                    // Update overview
                    if (settingsElements.fullname) settingsElements.fullname.textContent = user.full_name || 'Not set';
                    if (settingsElements.role) settingsElements.role.textContent = user.role === 'administrator' ? 'Administrator' : 'Student';
                    if (settingsElements.email) settingsElements.email.textContent = user.email || 'Not set';
                    
                    const verifiedText = user.is_verified ? 'Verified' : 'Not Verified';
                    const verifiedColor = user.is_verified ? '#28a745' : '#dc3545';
                    if (settingsElements.verified) {
                        settingsElements.verified.innerHTML = `<span style="color: ${verifiedColor};">${verifiedText}</span>`;
                    }
                    
                    // Update display fields
                    if (settingsElements.displayFullname) settingsElements.displayFullname.textContent = user.full_name || '-';
                    if (settingsElements.displayEmail) settingsElements.displayEmail.textContent = user.email || '-';
                    if (settingsElements.displayRole) settingsElements.displayRole.textContent = user.role === 'administrator' ? 'Administrator' : 'Student';
                    if (settingsElements.displayVerified) settingsElements.displayVerified.textContent = user.is_verified ? 'Yes' : 'No';
                    
                    settingsState.isStudent = user.role === 'student';
                    
                    if (settingsState.isStudent) {
                        if (settingsElements.studentInfoSection) settingsElements.studentInfoSection.style.display = 'block';
                        
                        const classValue = user.class || '-';
                        const schoolValue = user.school_name || '-';
                        
                        if (settingsElements.displayClass) settingsElements.displayClass.textContent = classValue !== '-' ? `Class ${classValue}` : '-';
                        if (settingsElements.displaySchool) settingsElements.displaySchool.textContent = schoolValue;
                        
                        if (settingsElements.editClass) settingsElements.editClass.value = user.class || '';
                        if (settingsElements.editSchool) settingsElements.editSchool.value = user.school_name || '';
                    } else {
                        if (settingsElements.studentInfoSection) settingsElements.studentInfoSection.style.display = 'none';
                        if (settingsElements.editStudentFields) settingsElements.editStudentFields.style.display = 'none';
                    }
                    
                    if (user.created_at) {
                        if (settingsElements.displayCreated) settingsElements.displayCreated.textContent = settingsHelpers.formatDate(user.created_at);
                    }
                    
                    if (user.updated_at) {
                        if (settingsElements.displayUpdated) settingsElements.displayUpdated.textContent = settingsHelpers.formatDateTime(user.updated_at);
                    }
                    
                    // Fill edit form
                    if (settingsElements.editFullname) settingsElements.editFullname.value = user.full_name || '';
                    if (settingsElements.editEmail) settingsElements.editEmail.value = user.email || '';
                    if (settingsElements.editRole) settingsElements.editRole.value = user.role || 'student';
                    
                    settingsHelpers.toggleStudentFields();
                } else {
                    throw new Error('Invalid response format');
                }
                
            } catch (error) {
                console.error('Error loading settings:', error);
                settingsHelpers.showError(error.message || 'Failed to load settings');
            } finally {
                settingsHelpers.setLoading(false);
            }
        },
        
        async updateProfile() {
            const fullName = settingsElements.editFullname?.value.trim();
            const role = settingsElements.editRole?.value;
            const classValue = settingsElements.editClass?.value ? parseInt(settingsElements.editClass.value) : null;
            const schoolName = settingsElements.editSchool?.value.trim() || null;
            
            if (!fullName) {
                settingsHelpers.showError('Full name is required');
                return;
            }
            
            try {
                const updateData = {
                    full_name: fullName,
                    role: role
                };
                
                if (role === 'student') {
                    if (classValue !== null) {
                        updateData.class = classValue;
                    }
                    if (schoolName !== null) {
                        updateData.school_name = schoolName;
                    }
                }
                
                const response = await settingsAPI.fetchWithAuth(`${API_URL}/profile`, {
                    method: 'PUT',
                    body: JSON.stringify(updateData)
                });
                
                const data = await response.json();
                
                if (!response.ok) {
                    throw new Error(data.detail || data.message || 'Failed to update profile');
                }
                
                if (data.success) {
                    settingsHelpers.showSuccess('Profile updated successfully!');
                    
                    // Switch back to view mode
                    if (settingsElements.accountViewMode) settingsElements.accountViewMode.style.display = 'block';
                    if (settingsElements.accountEditMode) settingsElements.accountEditMode.style.display = 'none';
                    
                    await settingsAPI.loadProfile();
                } else {
                    throw new Error(data.message || 'Update failed');
                }
                
            } catch (error) {
                console.error('Update error:', error);
                settingsHelpers.showError(error.message);
            }
        },
        
        async changePassword() {
            const currentPassword = settingsElements.currentPassword?.value;
            const newPassword = settingsElements.newPassword?.value;
            const confirmPassword = settingsElements.confirmPassword?.value;
            
            if (!currentPassword) {
                settingsHelpers.showError('Current password is required');
                return;
            }
            if (!newPassword) {
                settingsHelpers.showError('New password is required');
                return;
            }
            if (newPassword.length < 6) {
                settingsHelpers.showError('New password must be at least 6 characters');
                return;
            }
            if (newPassword !== confirmPassword) {
                settingsHelpers.showError('New passwords do not match');
                return;
            }
            
            try {
                const response = await settingsAPI.fetchWithAuth(`${API_URL}/change-password`, {
                    method: 'POST',
                    body: JSON.stringify({
                        current_password: currentPassword,
                        new_password: newPassword
                    })
                });
                
                const data = await response.json();
                
                if (!response.ok) {
                    throw new Error(data.detail || data.message || 'Failed to change password');
                }
                
                if (data.success) {
                    settingsHelpers.showSuccess('Password changed successfully!');
                    
                    // Clear password fields and switch back to view mode
                    if (settingsElements.currentPassword) settingsElements.currentPassword.value = '';
                    if (settingsElements.newPassword) settingsElements.newPassword.value = '';
                    if (settingsElements.confirmPassword) settingsElements.confirmPassword.value = '';
                    
                    if (settingsElements.passwordViewMode) settingsElements.passwordViewMode.style.display = 'block';
                    if (settingsElements.passwordEditMode) settingsElements.passwordEditMode.style.display = 'none';
                } else {
                    throw new Error(data.message || 'Password change failed');
                }
                
            } catch (error) {
                console.error('Password change error:', error);
                settingsHelpers.showError(error.message);
            }
        }
    };
    
    // ==================== UI FUNCTIONS ====================
    const settingsUI = {
        showAccountEdit: function() {
            if (settingsElements.accountViewMode && settingsElements.accountEditMode) {
                settingsElements.accountViewMode.style.display = 'none';
                settingsElements.accountEditMode.style.display = 'block';
            }
        },
        
        hideAccountEdit: function() {
            if (settingsElements.accountViewMode && settingsElements.accountEditMode) {
                settingsElements.accountViewMode.style.display = 'block';
                settingsElements.accountEditMode.style.display = 'none';
                
                // Reset form to original values
                if (settingsState.userData) {
                    if (settingsElements.editFullname) settingsElements.editFullname.value = settingsState.userData.full_name || '';
                    if (settingsElements.editRole) settingsElements.editRole.value = settingsState.userData.role || 'student';
                    if (settingsElements.editClass) settingsElements.editClass.value = settingsState.userData.class || '';
                    if (settingsElements.editSchool) settingsElements.editSchool.value = settingsState.userData.school_name || '';
                }
            }
        },
        
        showPasswordEdit: function() {
            if (settingsElements.passwordViewMode && settingsElements.passwordEditMode) {
                settingsElements.passwordViewMode.style.display = 'none';
                settingsElements.passwordEditMode.style.display = 'block';
                
                // Clear password fields
                if (settingsElements.currentPassword) settingsElements.currentPassword.value = '';
                if (settingsElements.newPassword) settingsElements.newPassword.value = '';
                if (settingsElements.confirmPassword) settingsElements.confirmPassword.value = '';
            }
        },
        
        hidePasswordEdit: function() {
            if (settingsElements.passwordViewMode && settingsElements.passwordEditMode) {
                settingsElements.passwordViewMode.style.display = 'block';
                settingsElements.passwordEditMode.style.display = 'none';
                
                // Clear password fields
                if (settingsElements.currentPassword) settingsElements.currentPassword.value = '';
                if (settingsElements.newPassword) settingsElements.newPassword.value = '';
                if (settingsElements.confirmPassword) settingsElements.confirmPassword.value = '';
            }
        },
        
        switchTab: function(tabId) {
            settingsState.activeTab = tabId;
            
            // Update tab buttons
            settingsElements.tabs.forEach(tab => {
                if (tab.dataset.tab === tabId) {
                    tab.classList.add('active');
                } else {
                    tab.classList.remove('active');
                }
            });
            
            // Update panels
            settingsElements.panels.forEach(panel => {
                if (panel.id === `${tabId}-settings`) {
                    panel.classList.add('active');
                } else {
                    panel.classList.remove('active');
                }
            });
        },
        
        openDeleteModal: function() {
            if (settingsElements.deleteModal) {
                if (settingsElements.deletePassword) settingsElements.deletePassword.value = '';
                settingsElements.deleteModal.style.display = 'flex';
            }
        },
        
        closeDeleteModal: function() {
            if (settingsElements.deleteModal) {
                settingsElements.deleteModal.style.display = 'none';
                if (settingsElements.deletePassword) settingsElements.deletePassword.value = '';
            }
        }
    };
    
    // ==================== EVENT LISTENERS ====================
    function setupSettingsEventListeners() {
        console.log('🔧 Setting up Settings event listeners');
        
        // Tab switching
        settingsElements.tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                settingsUI.switchTab(tab.dataset.tab);
            });
        });
        
        // Toggle account edit
        if (settingsElements.toggleAccountEdit) {
            settingsElements.toggleAccountEdit.addEventListener('click', settingsUI.showAccountEdit);
        }
        
        // Toggle password edit
        if (settingsElements.togglePasswordEdit) {
            settingsElements.togglePasswordEdit.addEventListener('click', settingsUI.showPasswordEdit);
        }
        
        // Role change
        if (settingsElements.editRole) {
            settingsElements.editRole.addEventListener('change', settingsHelpers.toggleStudentFields);
        }
        
        // Cancel account edit
        if (settingsElements.cancelAccountEdit) {
            settingsElements.cancelAccountEdit.addEventListener('click', settingsUI.hideAccountEdit);
        }
        
        // Save account
        if (settingsElements.saveAccount) {
            settingsElements.saveAccount.addEventListener('click', () => settingsAPI.updateProfile());
        }
        
        // Cancel password
        if (settingsElements.cancelPassword) {
            settingsElements.cancelPassword.addEventListener('click', settingsUI.hidePasswordEdit);
        }
        
        // Update password
        if (settingsElements.updatePassword) {
            settingsElements.updatePassword.addEventListener('click', () => settingsAPI.changePassword());
        }
        
        // Save privacy (simulated)
        if (settingsElements.savePrivacy) {
            settingsElements.savePrivacy.addEventListener('click', () => {
                settingsHelpers.showSuccess('Privacy settings saved!');
            });
        }
        
        // Download data (simulated)
        if (settingsElements.downloadData) {
            settingsElements.downloadData.addEventListener('click', () => {
                settingsHelpers.showSuccess('Your data download has started. You will receive an email when ready.');
            });
        }
        
        // Delete data (simulated)
        if (settingsElements.deleteData) {
            settingsElements.deleteData.addEventListener('click', () => {
                settingsHelpers.showSuccess('Account data deletion requested.');
            });
        }
        
        // Save email settings (simulated)
        if (settingsElements.saveEmail) {
            settingsElements.saveEmail.addEventListener('click', () => {
                settingsHelpers.showSuccess('Email settings saved!');
            });
        }
        
        // Save push settings (simulated)
        if (settingsElements.savePush) {
            settingsElements.savePush.addEventListener('click', () => {
                settingsHelpers.showSuccess('Push notification settings saved!');
            });
        }
        
        // Save quiet hours (simulated)
        if (settingsElements.saveQuiet) {
            settingsElements.saveQuiet.addEventListener('click', () => {
                settingsHelpers.showSuccess('Quiet hours saved!');
            });
        }
        
        // Delete account button
        if (settingsElements.deleteAccountQuick) {
            settingsElements.deleteAccountQuick.addEventListener('click', (e) => {
                e.preventDefault();
                settingsUI.openDeleteModal();
            });
        }
        
        // Modal cancel button
        if (settingsElements.deleteCancel) {
            settingsElements.deleteCancel.addEventListener('click', () => {
                settingsUI.closeDeleteModal();
            });
        }
        
        // Modal delete confirm
        if (settingsElements.deleteConfirm) {
            settingsElements.deleteConfirm.addEventListener('click', () => {
                const password = settingsElements.deletePassword?.value;
                if (!password) {
                    settingsHelpers.showError('Please enter your password');
                    return;
                }
                if (confirm('Are you absolutely sure? This cannot be undone!')) {
                    settingsHelpers.showSuccess('Account deletion requested. You will receive a confirmation email.');
                    settingsUI.closeDeleteModal();
                }
            });
        }
        
        // Click outside to close modal
        window.addEventListener('click', (e) => {
            if (e.target === settingsElements.deleteModal) {
                settingsUI.closeDeleteModal();
            }
        });
        
        // Escape key to close
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && settingsElements.deleteModal?.style.display === 'flex') {
                settingsUI.closeDeleteModal();
            }
        });
    }
    
    // ==================== INITIALIZATION ====================
    function initializeSettings() {
        console.log('🔄 Initializing Settings module...');
        console.log('✅ Using API_URL:', API_URL);
        
        // Hide modal initially
        if (settingsElements.deleteModal) settingsElements.deleteModal.style.display = 'none';
        
        setupSettingsEventListeners();
        
        // Check if settings section is visible
        if (settingsElements.section && settingsElements.section.style.display !== 'none') {
            settingsAPI.loadProfile();
        }
    }
    
    // Observer for section visibility
    if (settingsElements.section) {
        const observer = new MutationObserver(() => {
            if (settingsElements.section.style.display !== 'none') {
                settingsAPI.loadProfile();
            }
        });
        observer.observe(settingsElements.section, { attributes: true, attributeFilter: ['style'] });
    }
    
    // Initialize on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeSettings);
    } else {
        initializeSettings();
    }
    
})();
</script>