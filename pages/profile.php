<!-- Profile Section -->
<div id="profile-section" class="content-section" style="display: none;">

    <!-- Loading Spinner -->
    <div id="profile-loading" class="loading-spinner-container">
        <div class="spinner"></div>
        <p>Loading profile...</p>
    </div>

    <!-- Error / Success Messages -->
    <div id="profile-error" class="pf-error-message" style="display: none;"></div>
    <div id="profile-success" class="pf-success-message" style="display: none;"></div>

    <div class="profile-content" id="profile-content">

        <!-- PROFILE CONTENT WRAPPER -->
        <div id="profile-content-wrapper">

            <!-- Profile Hero Card -->
            <div class="pf-hero-card">
                <div class="pf-hero-bg"></div>
                <div class="pf-hero-content">
                    <!-- Profile Image -->
                    <div class="pf-avatar-wrapper">
                        <div class="pf-avatar" id="userProfileImage">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="pf-avatar-overlay" id="profileImageOverlay" onclick="document.getElementById('userPhotoInput').click();">
                            <i class="fas fa-camera"></i>
                        </div>
                        <input type="file" id="userPhotoInput" accept="image/jpeg,image/png,image/gif" style="display: none;">
                    </div>
                    <!-- User Info -->
                    <div class="pf-hero-info">
                        <h2 id="userFullName"></h2>
                        <span class="pf-role-badge" id="userRole">Loading...</span>
                        <div class="pf-hero-meta">
                            <span class="pf-meta-item">
                                <i class="fas fa-envelope"></i>
                                <span id="userEmail">loading...</span>
                            </span>
                            <span class="pf-meta-item" id="userVerified">
                                <i class="fas fa-check-circle"></i> Loading...
                            </span>
                        </div>
                    </div>
                    <!-- Edit Button -->
                    <button id="editProfileBtn" class="pf-edit-btn">
                        <i class="fas fa-edit"></i> Edit Profile
                    </button>
                </div>
            </div>

            <!-- Details Grid -->
            <div class="pf-details-grid">

                <!-- Account Information -->
                <div class="pf-card">
                    <div class="pf-card-header">
                        <div class="pf-card-icon"><i class="fas fa-user-circle"></i></div>
                        <h4>Account Information</h4>
                    </div>
                    <div class="pf-info-grid">
                        <div class="pf-info-item">
                            <span class="pf-info-label">Full Name</span>
                            <span class="pf-info-value" id="displayUserFullname">-</span>
                        </div>
                        <div class="pf-info-item">
                            <span class="pf-info-label">Email</span>
                            <span class="pf-info-value" id="displayUserEmail">-</span>
                        </div>
                        <div class="pf-info-item">
                            <span class="pf-info-label">Role</span>
                            <span class="pf-info-value" id="displayUserRole">-</span>
                        </div>
                        <div class="pf-info-item">
                            <span class="pf-info-label">Verified</span>
                            <span class="pf-info-value" id="displayUserVerified">-</span>
                        </div>
                    </div>

                    <!-- Student Info -->
                    <div id="studentInfoSection" class="pf-student-section">
                        <div class="pf-section-divider"></div>
                        <div class="pf-card-header" style="margin-top: 4px;">
                            <div class="pf-card-icon" style="background: linear-gradient(135deg, #0ed3a2, #129695);"><i class="fas fa-graduation-cap"></i></div>
                            <h4>Education</h4>
                        </div>
                        <div class="pf-info-grid">
                            <div class="pf-info-item">
                                <span class="pf-info-label">Class</span>
                                <span class="pf-info-value" id="displayUserClass">-</span>
                            </div>
                            <div class="pf-info-item">
                                <span class="pf-info-label">School Name</span>
                                <span class="pf-info-value" id="displayUserSchool">-</span>
                            </div>
                        </div>
                    </div>

                    <div class="pf-section-divider"></div>
                    <div class="pf-card-header" style="margin-top: 4px;">
                        <div class="pf-card-icon" style="background: linear-gradient(135deg, #ffd166, #f9c74f);"><i class="fas fa-clock"></i></div>
                        <h4>Timeline</h4>
                    </div>
                    <div class="pf-info-grid">
                        <div class="pf-info-item">
                            <span class="pf-info-label">Member Since</span>
                            <span class="pf-info-value" id="displayUserCreated">-</span>
                        </div>
                        <div class="pf-info-item">
                            <span class="pf-info-label">Last Updated</span>
                            <span class="pf-info-value" id="displayUserUpdated">-</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="pf-right-col">
                    <!-- Status Card -->
                    <div class="pf-card">
                        <div class="pf-card-header">
                            <div class="pf-card-icon" style="background: linear-gradient(135deg, #8b5cf6, #6d28d9);"><i class="fas fa-chart-line"></i></div>
                            <h4>Account Status</h4>
                        </div>
                        <div class="pf-status-block">
                            <div class="pf-status-icon-wrap">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3 id="userStatusRole">-</h3>
                            <p id="userStatusVerification">-</p>
                        </div>

                        <div id="studentStatusCard" class="pf-student-status" style="display: none;">
                            <div class="pf-student-status-icon"><i class="fas fa-graduation-cap"></i></div>
                            <p id="userStatusClass">-</p>
                            <p id="userStatusSchool" class="pf-sub-text">-</p>
                        </div>
                    </div>

                    <!-- Settings Card -->
                    <div class="pf-card">
                        <div class="pf-card-header">
                            <div class="pf-card-icon" style="background: linear-gradient(135deg, #ef4444, #dc2626);"><i class="fas fa-cog"></i></div>
                            <h4>Quick Actions</h4>
                        </div>
                        <div class="pf-settings-list">
                            <button id="changePasswordBtn" class="pf-setting-btn">
                                <div class="pf-setting-icon"><i class="fas fa-key"></i></div>
                                <div class="pf-setting-text">
                                    <span>Change Password</span>
                                    <small>Update your password regularly</small>
                                </div>
                                <i class="fas fa-chevron-right pf-setting-arrow"></i>
                            </button>
                            <button id="deleteAccountBtn" class="pf-setting-btn danger">
                                <div class="pf-setting-icon danger"><i class="fas fa-trash-alt"></i></div>
                                <div class="pf-setting-text">
                                    <span>Delete Account</span>
                                    <small>Permanently delete your account</small>
                                </div>
                                <i class="fas fa-chevron-right pf-setting-arrow"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- EDIT PROFILE FORM -->
        <div id="editProfileForm" class="pf-edit-panel">
            <div class="pf-edit-header">
                <div style="display: flex; align-items: center; gap: 12px;">
                    <div class="pf-card-icon"><i class="fas fa-user-edit"></i></div>
                    <h3>Edit Profile</h3>
                </div>
                <button id="cancelEditBtn" class="pf-close-btn">&times;</button>
            </div>

            <form id="profileEditForm" class="pf-form">
                <div class="pf-form-row">
                    <div class="pf-form-group">
                        <label><i class="fas fa-user"></i> Full Name <span class="pf-required">*</span></label>
                        <input type="text" id="editUserFullname" class="pf-input">
                    </div>
                    <div class="pf-form-group">
                        <label><i class="fas fa-envelope"></i> Email (read-only)</label>
                        <input type="email" id="editUserEmail" class="pf-input" readonly>
                    </div>
                </div>

                <div class="pf-form-group">
                    <label><i class="fas fa-user-tag"></i> Role <span class="pf-required">*</span></label>
                    <select id="editUserRole" class="pf-input">
                        <option value="student">Student</option>
                        <option value="administrator">Administrator</option>
                    </select>
                </div>

                <div id="editStudentFields" class="pf-student-edit">
                    <div class="pf-section-divider"></div>
                    <h4><i class="fas fa-graduation-cap" style="color: #0ed3a2;"></i> Education Information</h4>
                    <div class="pf-form-row">
                        <div class="pf-form-group">
                            <label>Class <span class="pf-optional">(Optional)</span></label>
                            <select id="editUserClass" class="pf-input">
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
                        <div class="pf-form-group">
                            <label>School Name <span class="pf-optional">(Optional)</span></label>
                            <input type="text" id="editUserSchool" class="pf-input" placeholder="Enter school name">
                        </div>
                    </div>
                </div>

                <div class="pf-section-divider"></div>
                <h4><i class="fas fa-lock" style="color: #ffd166;"></i> Change Password (Optional)</h4>

                <div class="pf-form-group">
                    <label>Current Password</label>
                    <input type="password" id="editCurrentPwd" class="pf-input" placeholder="Enter current password">
                </div>
                <div class="pf-form-row">
                    <div class="pf-form-group">
                        <label>New Password</label>
                        <input type="password" id="editNewPwd" class="pf-input" placeholder="New password (min. 6 characters)">
                        <small class="pf-hint">Leave blank if no change</small>
                    </div>
                    <div class="pf-form-group">
                        <label>Confirm New Password</label>
                        <input type="password" id="editConfirmPwd" class="pf-input" placeholder="Confirm password">
                    </div>
                </div>

                <div class="pf-form-actions">
                    <button type="button" id="cancelEditBtn2" class="pf-btn-secondary">Cancel</button>
                    <button type="button" id="saveProfileBtn" class="pf-btn-primary">
                        <i class="fas fa-save"></i> Save Changes
                    </button>
                </div>
            </form>
        </div>

        <!-- CHANGE PASSWORD MODAL -->
        <div id="passwordChangeModal" class="pf-modal" style="display: none;">
            <div class="pf-modal-content">
                <div class="pf-modal-header" style="background: linear-gradient(135deg, #3f66e6, #0ed3a2);">
                    <div class="pf-modal-header-icon"><i class="fas fa-lock"></i></div>
                    <h3>Change Password</h3>
                    <p>Enter your current and new password</p>
                </div>
                <div class="pf-modal-body">
                    <div class="pf-form-group">
                        <label>Current Password <span class="pf-required">*</span></label>
                        <input type="password" id="modalCurrentPwd" class="pf-input" placeholder="Enter current password">
                    </div>
                    <div class="pf-form-group">
                        <label>New Password <span class="pf-required">*</span></label>
                        <input type="password" id="modalNewPwd" class="pf-input" placeholder="Minimum 6 characters">
                    </div>
                    <div class="pf-form-group">
                        <label>Confirm New Password <span class="pf-required">*</span></label>
                        <input type="password" id="modalConfirmPwd" class="pf-input" placeholder="Confirm new password">
                    </div>
                    <div class="pf-modal-actions">
                        <button id="modalCancelBtn" class="pf-btn-secondary">Cancel</button>
                        <button id="modalUpdateBtn" class="pf-btn-primary"><i class="fas fa-save"></i> Update Password</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- DELETE ACCOUNT MODAL -->
        <div id="accountDeleteModal" class="pf-modal" style="display: none;">
            <div class="pf-modal-content pf-delete-modal">
                <div class="pf-modal-header" style="background: linear-gradient(135deg, #ef476f, #e63946);">
                    <div class="pf-modal-header-icon"><i class="fas fa-exclamation-triangle"></i></div>
                    <h3>Delete Account?</h3>
                    <p>This action cannot be undone</p>
                </div>
                <div class="pf-modal-body" style="text-align: center;">
                    <p style="color: #666; margin-bottom: 20px;">All your data will be permanently deleted. Enter your password to confirm.</p>
                    <div class="pf-form-group">
                        <input type="password" id="deletePwdConfirm" class="pf-input" placeholder="Enter your password to confirm">
                    </div>
                    <div class="pf-modal-actions">
                        <button id="deleteCancelBtn" class="pf-btn-secondary">Cancel</button>
                        <button id="deleteConfirmBtn" class="pf-btn-danger"><i class="fas fa-trash-alt"></i> Delete Account</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
/* ==================== PROFILE SECTION - AI WORLD THEME ==================== */

/* Hero Banner */
.pf-hero-card {
    position: relative;
    background: white;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    margin-bottom: 24px;
}

.pf-hero-bg {
    height: 120px;
    background: linear-gradient(135deg, #3f66e6 0%, #0ed3a2 50%, #129695 100%);
}

.pf-hero-content {
    display: flex;
    align-items: flex-end;
    gap: 24px;
    padding: 0 32px 28px;
    margin-top: -50px;
    position: relative;
    flex-wrap: wrap;
}

/* Avatar */
.pf-avatar-wrapper {
    position: relative;
    flex-shrink: 0;
}

.pf-avatar {
    width: 110px;
    height: 110px;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 44px;
    border: 4px solid white;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.pf-avatar-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    opacity: 0;
    transition: opacity 0.3s;
    cursor: pointer;
    font-size: 20px;
    border: 4px solid transparent;
}

.pf-avatar-wrapper:hover .pf-avatar-overlay {
    opacity: 1;
}

/* Hero Info */
.pf-hero-info {
    flex: 1;
    min-width: 200px;
    padding-bottom: 4px;
}

.pf-hero-info h2 {
    margin: 0 0 6px 0;
    font-size: 26px;
    font-weight: 700;
    color: #1a1a2e;
}

.pf-role-badge {
    display: inline-block;
    padding: 4px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: white;
    margin-bottom: 10px;
}

.pf-hero-meta {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.pf-meta-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 14px;
    color: #666;
}

.pf-meta-item i {
    color: #3f66e6;
    font-size: 13px;
}

/* Edit Button */
.pf-edit-btn {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: white;
    border: none;
    padding: 11px 28px;
    border-radius: 14px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    white-space: nowrap;
    transition: all 0.3s;
    margin-left: auto;
    align-self: center;
}

.pf-edit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(63, 102, 230, 0.3);
}

/* Details Grid */
.pf-details-grid {
    display: grid;
    grid-template-columns: 1.6fr 1fr;
    gap: 24px;
    margin-bottom: 30px;
}

.pf-right-col {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

/* Card */
.pf-card {
    background: white;
    border-radius: 20px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
}

.pf-card-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
}

.pf-card-icon {
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

.pf-card-header h4 {
    margin: 0;
    font-size: 17px;
    font-weight: 700;
    color: #1a1a2e;
}

.pf-section-divider {
    height: 1px;
    background: #f0f2f5;
    margin: 20px 0;
}

/* Info Grid */
.pf-info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.pf-info-item {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.pf-info-label {
    font-size: 12px;
    color: #999;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
}

.pf-info-value {
    font-size: 15px;
    color: #333;
    font-weight: 500;
}

/* Status Block */
.pf-status-block {
    text-align: center;
    padding: 24px 16px;
    background: linear-gradient(135deg, #f0f4ff, #e8faf3);
    border-radius: 16px;
    margin-bottom: 16px;
}

.pf-status-icon-wrap {
    width: 56px;
    height: 56px;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 12px;
    color: white;
    font-size: 24px;
}

.pf-status-block h3 {
    margin: 0;
    color: #1a1a2e;
    font-size: 18px;
    font-weight: 700;
}

.pf-status-block p {
    margin: 4px 0 0;
    color: #666;
    font-size: 13px;
}

/* Student Status */
.pf-student-status {
    text-align: center;
    padding: 16px;
    background: #e8f4fd;
    border-radius: 12px;
}

.pf-student-status-icon {
    font-size: 28px;
    color: #0ed3a2;
    margin-bottom: 8px;
}

.pf-student-status p {
    margin: 0;
    color: #333;
    font-weight: 600;
    font-size: 14px;
}

.pf-sub-text {
    color: #888 !important;
    font-weight: 400 !important;
    font-size: 12px !important;
    margin-top: 4px !important;
}

/* Settings List */
.pf-settings-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.pf-setting-btn {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 14px 16px;
    background: #f8f9ff;
    border: 2px solid transparent;
    border-radius: 14px;
    cursor: pointer;
    width: 100%;
    text-align: left;
    transition: all 0.3s;
}

.pf-setting-btn:hover {
    border-color: #3f66e6;
    background: #f0f4ff;
    transform: translateX(4px);
}

.pf-setting-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 14px;
    flex-shrink: 0;
}

.pf-setting-icon.danger {
    background: linear-gradient(135deg, #ef476f, #e63946);
}

.pf-setting-text {
    flex: 1;
}

.pf-setting-text span {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #333;
}

.pf-setting-text small {
    color: #999;
    font-size: 12px;
}

.pf-setting-arrow {
    color: #ccc;
    font-size: 12px;
    transition: transform 0.3s;
}

.pf-setting-btn:hover .pf-setting-arrow {
    transform: translateX(4px);
    color: #3f66e6;
}

.pf-setting-btn.danger:hover {
    border-color: #ef476f;
    background: #fff5f5;
}

.pf-setting-btn.danger:hover .pf-setting-arrow {
    color: #ef476f;
}

/* Edit Panel */
.pf-edit-panel {
    display: none;
    background: white;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
}

.pf-edit-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 28px;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: white;
}

.pf-edit-header h3 {
    margin: 0;
    font-size: 20px;
    color: white;
}

.pf-edit-header .pf-card-icon {
    background: rgba(255, 255, 255, 0.2);
}

.pf-close-btn {
    background: rgba(255, 255, 255, 0.15);
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
}

.pf-close-btn:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: scale(1.1);
}

/* Form */
.pf-form {
    padding: 28px;
}

.pf-form h4 {
    margin: 0 0 16px 0;
    font-size: 16px;
    color: #333;
    display: flex;
    align-items: center;
    gap: 8px;
}

.pf-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.pf-form-group {
    margin-bottom: 18px;
}

.pf-form-group label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #444;
    font-size: 13px;
}

.pf-form-group label i {
    margin-right: 6px;
    color: #3f66e6;
    font-size: 12px;
}

.pf-input {
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

.pf-input:focus {
    outline: none;
    border-color: #3f66e6;
    box-shadow: 0 0 0 3px rgba(63, 102, 230, 0.1);
    background: white;
}

.pf-input:read-only {
    background: #f5f5f5;
    color: #888;
}

.pf-required { color: #ef476f; }
.pf-optional { color: #999; font-size: 12px; font-weight: 400; }
.pf-hint { display: block; margin-top: 4px; font-size: 12px; color: #999; }

.pf-form-actions {
    display: flex;
    gap: 12px;
    justify-content: flex-end;
    margin-top: 8px;
}

.pf-btn-primary, .pf-btn-secondary, .pf-btn-danger {
    padding: 12px 28px;
    border: none;
    border-radius: 14px;
    cursor: pointer;
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 8px;
}

.pf-btn-primary {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: white;
}

.pf-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(63, 102, 230, 0.3);
}

.pf-btn-secondary {
    background: white;
    border: 2px solid #e0e0e0;
    color: #666;
}

.pf-btn-secondary:hover {
    border-color: #999;
    background: #f8f8f8;
}

.pf-btn-danger {
    background: linear-gradient(135deg, #ef476f, #e63946);
    color: white;
}

.pf-btn-danger:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(239, 71, 111, 0.3);
}

/* Modal */
.pf-modal {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    backdrop-filter: blur(6px);
    padding: 20px;
    box-sizing: border-box;
    animation: pfFadeIn 0.25s ease;
}

@keyframes pfFadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.pf-modal-content {
    background: white;
    border-radius: 24px;
    width: 90%;
    max-width: 480px;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
    animation: pfSlideUp 0.3s ease;
}

@keyframes pfSlideUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

.pf-modal-header {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: white;
    padding: 24px 28px 20px;
    text-align: center;
}

.pf-modal-header-icon {
    width: 48px;
    height: 48px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    font-size: 20px;
}

.pf-modal-header h3 {
    margin: 0 0 4px 0;
    font-size: 20px;
    font-weight: 700;
    color: white;
}

.pf-modal-header p {
    margin: 0;
    font-size: 13px;
    opacity: 0.85;
}

.pf-modal-body {
    padding: 24px 28px 28px;
}

.pf-modal-actions {
    display: flex;
    gap: 12px;
    margin-top: 8px;
}

.pf-modal-actions button {
    flex: 1;
}

/* Messages */
.loading-spinner-container { text-align: center; padding: 50px; }
.spinner { display: inline-block; width: 50px; height: 50px; border: 5px solid #f3f3f3; border-top: 5px solid #3f66e6; border-radius: 50%; animation: pfSpin 1s linear infinite; }
@keyframes pfSpin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }

.pf-error-message, .pf-success-message {
    padding: 15px 20px;
    border-radius: 12px;
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 10px;
    border-left: 4px solid;
    font-size: 14px;
}
.pf-error-message { background: #fff5f5; color: #ef476f; border-left-color: #ef476f; }
.pf-success-message { background: #f0fdf4; color: #0ed3a2; border-left-color: #0ed3a2; }

/* Responsive */
@media (max-width: 992px) {
    .pf-details-grid {
        grid-template-columns: 1fr;
    }
    .pf-hero-content {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .pf-hero-meta { justify-content: center; }
    .pf-edit-btn { margin-left: 0; }
}

@media (max-width: 768px) {
    .pf-hero-bg { height: 100px; }
    .pf-hero-content { padding: 0 20px 24px; margin-top: -40px; }
    .pf-avatar { width: 90px; height: 90px; font-size: 36px; }
    .pf-hero-info h2 { font-size: 22px; }
    .pf-info-grid { grid-template-columns: 1fr; }
    .pf-form-row { grid-template-columns: 1fr; }
    .pf-card { padding: 20px; }
    .pf-form { padding: 20px; }
    .pf-form-actions { flex-direction: column; }
    .pf-form-actions button { width: 100%; justify-content: center; }
    .pf-hero-meta { flex-direction: column; gap: 6px; }
    .pf-modal-actions { flex-direction: column; }
}

@media (max-width: 576px) {
    .pf-hero-content { padding: 0 16px 20px; }
    .pf-avatar { width: 80px; height: 80px; font-size: 32px; }
    .pf-hero-info h2 { font-size: 20px; }
    .pf-card { padding: 16px; }
    .pf-edit-header { padding: 16px 20px; }
    .pf-form { padding: 16px; }
}
</style>

<script>
// ==================== CONFIGURATION ====================
const API_BASE_URL = CONFIG.API_BASE_URL;
const API_URL = API_BASE_URL + '/api';

console.log('Profile section loaded with API_URL:', API_URL);

// ==================== DOM ELEMENTS ====================
const profileSpinner = document.getElementById('profile-loading');
const profileContainer = document.getElementById('profile-content');
const errorContainer = document.getElementById('profile-error');
const successContainer = document.getElementById('profile-success');

const userFullNameEl = document.getElementById('userFullName');
const userRoleEl = document.getElementById('userRole');
const userEmailEl = document.getElementById('userEmail');
const userVerifiedEl = document.getElementById('userVerified');
const displayFullNameEl = document.getElementById('displayUserFullname');
const displayEmailEl = document.getElementById('displayUserEmail');
const displayRoleEl = document.getElementById('displayUserRole');
const displayVerifiedEl = document.getElementById('displayUserVerified');
const displayClassEl = document.getElementById('displayUserClass');
const displaySchoolEl = document.getElementById('displayUserSchool');
const displayCreatedEl = document.getElementById('displayUserCreated');
const displayUpdatedEl = document.getElementById('displayUserUpdated');
const statusRoleEl = document.getElementById('userStatusRole');
const statusVerificationEl = document.getElementById('userStatusVerification');
const statusClassEl = document.getElementById('userStatusClass');
const statusSchoolEl = document.getElementById('userStatusSchool');

const studentInfoSectionEl = document.getElementById('studentInfoSection');
const studentStatusCardEl = document.getElementById('studentStatusCard');
const editStudentFieldsEl = document.getElementById('editStudentFields');

const editFullNameEl = document.getElementById('editUserFullname');
const editEmailEl = document.getElementById('editUserEmail');
const editRoleEl = document.getElementById('editUserRole');
const editClassEl = document.getElementById('editUserClass');
const editSchoolEl = document.getElementById('editUserSchool');
const editCurrentPwdEl = document.getElementById('editCurrentPwd');
const editNewPwdEl = document.getElementById('editNewPwd');
const editConfirmPwdEl = document.getElementById('editConfirmPwd');

const editProfileBtn = document.getElementById('editProfileBtn');
const cancelEditBtn1 = document.getElementById('cancelEditBtn');
const cancelEditBtn2 = document.getElementById('cancelEditBtn2');
const saveProfileBtn = document.getElementById('saveProfileBtn');
const profileWrapperEl = document.getElementById('profile-content-wrapper');
const editProfileFormEl = document.getElementById('editProfileForm');
const changePwdBtn = document.getElementById('changePasswordBtn');
const deleteAcctBtn = document.getElementById('deleteAccountBtn');

const pwdChangeModal = document.getElementById('passwordChangeModal');
const acctDeleteModal = document.getElementById('accountDeleteModal');
const modalCancelBtn = document.getElementById('modalCancelBtn');
const modalUpdateBtn = document.getElementById('modalUpdateBtn');
const deleteCancelBtn = document.getElementById('deleteCancelBtn');
const deleteConfirmBtn = document.getElementById('deleteConfirmBtn');

const modalCurrentPwdEl = document.getElementById('modalCurrentPwd');
const modalNewPwdEl = document.getElementById('modalNewPwd');
const modalConfirmPwdEl = document.getElementById('modalConfirmPwd');
const deletePwdConfirmEl = document.getElementById('deletePwdConfirm');

const photoInput = document.getElementById('userPhotoInput');
const profileImageEl = document.getElementById('userProfileImage');

// ==================== UTILITY FUNCTIONS ====================
function displayErrorMessage(msg) {
    if (errorContainer) {
        errorContainer.style.display = 'flex';
        errorContainer.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${msg}`;
        setTimeout(() => { errorContainer.style.display = 'none'; }, 5000);
    }
}

function displaySuccessMessage(msg) {
    if (successContainer) {
        successContainer.style.display = 'flex';
        successContainer.innerHTML = `<i class="fas fa-check-circle"></i> ${msg}`;
        setTimeout(() => { successContainer.style.display = 'none'; }, 3000);
    }
}

function toggleButtonLoading(btn, isLoading, originalText = '') {
    if (isLoading) {
        btn.disabled = true;
        btn.innerHTML = `<i class="fas fa-spinner fa-spin"></i> Processing...`;
    } else {
        btn.disabled = false;
        btn.innerHTML = originalText;
    }
}

function retrieveAuthToken() {
    return localStorage.getItem('access_token');
}

function checkAuthStatus() {
    const token = retrieveAuthToken();
    if (!token) return false;
    const expiry = localStorage.getItem('token_expiry');
    if (expiry && new Date().getTime() > parseInt(expiry)) {
        localStorage.clear();
        window.location.href = '/login';
        return false;
    }
    return true;
}

function toggleStudentRoleFields() {
    const isStudent = editRoleEl.value === 'student';
    if (editStudentFieldsEl) {
        editStudentFieldsEl.style.display = isStudent ? 'block' : 'none';
    }
}

// ==================== PROFILE PHOTO FUNCTIONS ====================
if (photoInput) {
    photoInput.addEventListener('change', async function(e) {
        const selectedFile = e.target.files[0];
        if (!selectedFile) return;

        const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];
        if (!allowedTypes.includes(selectedFile.type)) {
            displayErrorMessage('Please select a valid image file (JPEG, PNG, or GIF)');
            return;
        }
        if (selectedFile.size > 5 * 1024 * 1024) {
            displayErrorMessage('File size must be less than 5MB');
            return;
        }

        const reader = new FileReader();
        reader.onload = function(e) {
            profileImageEl.innerHTML = '';
            profileImageEl.style.backgroundImage = `url('${e.target.result}')`;
        };
        reader.readAsDataURL(selectedFile);
        await uploadUserPhoto(selectedFile);
    });
}

async function uploadUserPhoto(file) {
    const formData = new FormData();
    formData.append('file', file);
    try {
        const response = await fetch(`${API_URL}/profile/photo`, {
            method: 'POST',
            headers: { 'Authorization': `Bearer ${retrieveAuthToken()}` },
            body: formData
        });
        const result = await response.json();
        if (!response.ok) throw new Error(result.detail || result.message || 'Upload failed');
        if (result.success) displaySuccessMessage('Profile photo uploaded successfully!');
    } catch (error) {
        console.error('Upload error:', error);
        displayErrorMessage(error.message || 'Failed to upload photo');
        await fetchUserPhoto();
    }
}

async function fetchUserPhoto() {
    try {
        const response = await fetch(`${API_URL}/profile/photo`, {
            headers: { 'Authorization': `Bearer ${retrieveAuthToken()}` }
        });
        const result = await response.json();
        if (result.success && result.data.photo_url) {
            const fullImageUrl = API_BASE_URL + result.data.photo_url;
            const urlWithTimestamp = `${fullImageUrl}?t=${Date.now()}`;
            profileImageEl.innerHTML = '';
            profileImageEl.style.backgroundImage = `url('${urlWithTimestamp}')`;
            profileImageEl.style.backgroundSize = 'cover';
            profileImageEl.style.backgroundPosition = 'center';
        } else {
            profileImageEl.innerHTML = '<i class="fas fa-user-graduate"></i>';
            profileImageEl.style.backgroundImage = 'none';
        }
    } catch (error) {
        console.error('Error loading profile photo:', error);
        profileImageEl.innerHTML = '<i class="fas fa-user-graduate"></i>';
        profileImageEl.style.backgroundImage = 'none';
    }
}

// ==================== PROFILE DATA FUNCTIONS ====================
async function loadUserProfile() {
    if (!checkAuthStatus()) {
        window.location.href = '/login';
        return;
    }

    profileSpinner.style.display = 'block';
    profileContainer.style.display = 'none';

    try {
        const response = await fetch(`${API_URL}/profile`, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${retrieveAuthToken()}`,
                'Content-Type': 'application/json'
            }
        });
        const result = await response.json();
        if (!response.ok) throw new Error(result.detail || result.message || 'Failed to load profile');

        if (result.success && result.data && result.data.profile) {
            const userInfo = result.data.profile;

            userFullNameEl.textContent = userInfo.full_name || 'Not set';
            userRoleEl.textContent = userInfo.role === 'administrator' ? 'Administrator' : 'Student';
            userEmailEl.textContent = userInfo.email || 'Not set';

            const verifiedStatus = userInfo.is_verified ? 'Verified' : 'Not Verified';
            const verifiedColor = userInfo.is_verified ? '#0ed3a2' : '#ef476f';
            userVerifiedEl.innerHTML = `<i class="fas fa-check-circle" style="color: ${verifiedColor};"></i> <span style="color: ${verifiedColor};">${verifiedStatus}</span>`;

            displayFullNameEl.textContent = userInfo.full_name || '-';
            displayEmailEl.textContent = userInfo.email || '-';
            displayRoleEl.textContent = userInfo.role === 'administrator' ? 'Administrator' : 'Student';
            displayVerifiedEl.textContent = userInfo.is_verified ? 'Yes' : 'No';

            const isStudentUser = userInfo.role === 'student';
            if (isStudentUser) {
                studentInfoSectionEl.style.display = 'block';
                studentStatusCardEl.style.display = 'block';
                const classVal = userInfo.class || '-';
                const schoolVal = userInfo.school_name || '-';
                displayClassEl.textContent = classVal !== '-' ? `Class ${classVal}` : '-';
                displaySchoolEl.textContent = schoolVal;
                statusClassEl.textContent = classVal !== '-' ? `Class ${classVal}` : 'Class not set';
                statusSchoolEl.textContent = schoolVal !== '-' ? schoolVal : 'School not set';
                editClassEl.value = userInfo.class || '';
                editSchoolEl.value = userInfo.school_name || '';
            } else {
                studentInfoSectionEl.style.display = 'none';
                studentStatusCardEl.style.display = 'none';
                editStudentFieldsEl.style.display = 'none';
            }

            if (userInfo.created_at) {
                displayCreatedEl.textContent = new Date(userInfo.created_at).toLocaleDateString('en-IN', { year: 'numeric', month: 'long', day: 'numeric' });
            } else { displayCreatedEl.textContent = '-'; }

            if (userInfo.updated_at) {
                displayUpdatedEl.textContent = new Date(userInfo.updated_at).toLocaleDateString('en-IN', { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' });
            } else { displayUpdatedEl.textContent = '-'; }

            statusRoleEl.textContent = userInfo.role === 'administrator' ? 'Administrator' : 'Student';
            statusVerificationEl.textContent = userInfo.is_verified ? 'Verified Account' : 'Email Not Verified';

            editFullNameEl.value = userInfo.full_name || '';
            editEmailEl.value = userInfo.email || '';
            editRoleEl.value = userInfo.role || 'student';
            toggleStudentRoleFields();

            profileSpinner.style.display = 'none';
            profileContainer.style.display = 'block';
        } else { throw new Error('Invalid response format'); }
    } catch (error) {
        console.error('Error loading profile:', error);
        profileSpinner.style.display = 'none';
        displayErrorMessage(error.message || 'Failed to load profile');
    }
}

// ==================== UPDATE PROFILE ====================
async function updateUserProfile() {
    const fullNameVal = editFullNameEl.value.trim();
    const roleVal = editRoleEl.value;
    const classVal = editClassEl.value ? parseInt(editClassEl.value) : null;
    const schoolVal = editSchoolEl.value.trim() || null;
    const currentPwdVal = editCurrentPwdEl.value;
    const newPwdVal = editNewPwdEl.value;
    const confirmPwdVal = editConfirmPwdEl.value;

    if (!fullNameVal) { displayErrorMessage('Full name is required'); return; }

    if (newPwdVal || confirmPwdVal || currentPwdVal) {
        if (!currentPwdVal) { displayErrorMessage('Current password is required to change password'); return; }
        if (!newPwdVal) { displayErrorMessage('New password is required'); return; }
        if (newPwdVal.length < 6) { displayErrorMessage('New password must be at least 6 characters'); return; }
        if (newPwdVal !== confirmPwdVal) { displayErrorMessage('New passwords do not match'); return; }
    }

    toggleButtonLoading(saveProfileBtn, true, '<i class="fas fa-save"></i> Save Changes');

    try {
        const updatePayload = { full_name: fullNameVal, role: roleVal };
        if (roleVal === 'student') {
            if (classVal !== null) updatePayload.class = classVal;
            if (schoolVal !== null) updatePayload.school_name = schoolVal;
        }
        if (newPwdVal && currentPwdVal) {
            updatePayload.current_password = currentPwdVal;
            updatePayload.new_password = newPwdVal;
        }

        const response = await fetch(`${API_URL}/profile`, {
            method: 'PUT',
            headers: { 'Authorization': `Bearer ${retrieveAuthToken()}`, 'Content-Type': 'application/json' },
            body: JSON.stringify(updatePayload)
        });
        const result = await response.json();
        if (!response.ok) throw new Error(result.detail || result.message || 'Failed to update profile');

        if (result.success) {
            displaySuccessMessage('Profile updated successfully!');
            editCurrentPwdEl.value = '';
            editNewPwdEl.value = '';
            editConfirmPwdEl.value = '';
            await loadUserProfile();
            cancelProfileEdit();
        } else { throw new Error(result.message || 'Update failed'); }
    } catch (error) {
        console.error('Update error:', error);
        displayErrorMessage(error.message);
    } finally {
        toggleButtonLoading(saveProfileBtn, false, '<i class="fas fa-save"></i> Save Changes');
    }
}

// ==================== PASSWORD FUNCTIONS ====================
async function handlePasswordChange() {
    const currentPwd = modalCurrentPwdEl.value;
    const newPwd = modalNewPwdEl.value;
    const confirmPwd = modalConfirmPwdEl.value;

    if (!currentPwd) { displayErrorMessage('Current password is required'); return; }
    if (!newPwd) { displayErrorMessage('New password is required'); return; }
    if (newPwd.length < 6) { displayErrorMessage('New password must be at least 6 characters'); return; }
    if (newPwd !== confirmPwd) { displayErrorMessage('New passwords do not match'); return; }

    toggleButtonLoading(modalUpdateBtn, true, '<i class="fas fa-save"></i> Update Password');

    try {
        const response = await fetch(`${API_URL}/change-password`, {
            method: 'POST',
            headers: { 'Authorization': `Bearer ${retrieveAuthToken()}`, 'Content-Type': 'application/json' },
            body: JSON.stringify({ current_password: currentPwd, new_password: newPwd })
        });
        const result = await response.json();
        if (!response.ok) throw new Error(result.detail || result.message || 'Failed to change password');
        if (result.success) { displaySuccessMessage('Password changed successfully!'); closePasswordModal(); }
        else throw new Error(result.message || 'Password change failed');
    } catch (error) {
        console.error('Password change error:', error);
        displayErrorMessage(error.message);
    } finally {
        toggleButtonLoading(modalUpdateBtn, false, '<i class="fas fa-save"></i> Update Password');
    }
}

// ==================== DELETE ACCOUNT ====================
async function handleAccountDeletion() {
    const password = deletePwdConfirmEl.value;
    if (!password) { displayErrorMessage('Please enter your password to confirm'); return; }

    toggleButtonLoading(deleteConfirmBtn, true, '<i class="fas fa-trash-alt"></i> Delete Account');

    try {
        const response = await fetch(`${API_URL}/profile?password=${encodeURIComponent(password)}`, {
            method: 'DELETE',
            headers: { 'Authorization': `Bearer ${retrieveAuthToken()}`, 'Content-Type': 'application/json' }
        });
        const result = await response.json();
        if (!response.ok) throw new Error(result.detail || result.message || 'Failed to delete account');

        if (result.success) {
            localStorage.clear();
            displaySuccessMessage('Account deleted successfully. Redirecting...');
            setTimeout(() => { window.location.href = '/signup'; }, 2000);
        } else throw new Error(result.message || 'Delete failed');
    } catch (error) {
        console.error('Delete error:', error);
        displayErrorMessage(error.message);
    } finally {
        toggleButtonLoading(deleteConfirmBtn, false, '<i class="fas fa-trash-alt"></i> Delete Account');
        closeDeleteModal();
    }
}

// ==================== MODAL FUNCTIONS ====================
function openPasswordModal() {
    if (pwdChangeModal) {
        modalCurrentPwdEl.value = '';
        modalNewPwdEl.value = '';
        modalConfirmPwdEl.value = '';
        pwdChangeModal.style.display = 'flex';
    }
}

function closePasswordModal() {
    if (pwdChangeModal) {
        pwdChangeModal.style.display = 'none';
        modalCurrentPwdEl.value = '';
        modalNewPwdEl.value = '';
        modalConfirmPwdEl.value = '';
    }
}

function openDeleteModal() {
    if (acctDeleteModal) {
        deletePwdConfirmEl.value = '';
        acctDeleteModal.style.display = 'flex';
    }
}

function closeDeleteModal() {
    if (acctDeleteModal) {
        acctDeleteModal.style.display = 'none';
        deletePwdConfirmEl.value = '';
    }
}

// ==================== UI FUNCTIONS ====================
function cancelProfileEdit() {
    editProfileFormEl.style.display = 'none';
    profileWrapperEl.style.display = 'block';
    editCurrentPwdEl.value = '';
    editNewPwdEl.value = '';
    editConfirmPwdEl.value = '';
}

// ==================== EVENT LISTENERS ====================
function initializeEventListeners() {
    if (editRoleEl) editRoleEl.addEventListener('change', toggleStudentRoleFields);

    if (editProfileBtn) {
        editProfileBtn.addEventListener('click', function() {
            profileWrapperEl.style.display = 'none';
            editProfileFormEl.style.display = 'block';
        });
    }

    if (cancelEditBtn1) cancelEditBtn1.addEventListener('click', cancelProfileEdit);
    if (cancelEditBtn2) cancelEditBtn2.addEventListener('click', cancelProfileEdit);
    if (saveProfileBtn) saveProfileBtn.addEventListener('click', updateUserProfile);

    if (changePwdBtn) {
        changePwdBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            openPasswordModal();
        });
    }

    if (deleteAcctBtn) {
        deleteAcctBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            openDeleteModal();
        });
    }

    if (modalCancelBtn) modalCancelBtn.addEventListener('click', function(e) { e.preventDefault(); closePasswordModal(); });
    if (deleteCancelBtn) deleteCancelBtn.addEventListener('click', function(e) { e.preventDefault(); closeDeleteModal(); });
    if (modalUpdateBtn) modalUpdateBtn.addEventListener('click', function(e) { e.preventDefault(); handlePasswordChange(); });
    if (deleteConfirmBtn) deleteConfirmBtn.addEventListener('click', function(e) { e.preventDefault(); handleAccountDeletion(); });

    window.addEventListener('click', function(e) {
        if (e.target === pwdChangeModal) closePasswordModal();
        if (e.target === acctDeleteModal) closeDeleteModal();
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            if (pwdChangeModal && pwdChangeModal.style.display === 'flex') closePasswordModal();
            if (acctDeleteModal && acctDeleteModal.style.display === 'flex') closeDeleteModal();
        }
    });
}

// ==================== INITIALIZATION ====================
let profileDataLoaded = false;

function loadProfileIfNeeded() {
    const profileSection = document.getElementById('profile-section');
    if (profileSection && profileSection.style.display !== 'none') {
        if (profileDataLoaded) {
            console.log('⏭️ Profile already loaded, skipping API call');
            return;
        }
        profileDataLoaded = true;
        console.log('📡 Profile loading for the first time');
        loadUserProfile();
        fetchUserPhoto();
    }
}

document.addEventListener('DOMContentLoaded', function() {
    if (pwdChangeModal) pwdChangeModal.style.display = 'none';
    if (acctDeleteModal) acctDeleteModal.style.display = 'none';
    initializeEventListeners();
    loadProfileIfNeeded();
});

const profileSection = document.getElementById('profile-section');
if (profileSection) {
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.attributeName === 'style') {
                loadProfileIfNeeded();
            }
        });
    });
    observer.observe(profileSection, { attributes: true, attributeFilter: ['style'] });
}
</script>
</div>