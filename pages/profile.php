<!-- Profile Section -->
<div id="profile-section" class="content-section" style="display: none;">
    <div class="profile-header">
        <div>
            <h3>My Profile</h3>
            <p>Manage your personal information and account settings</p>
        </div>
    </div>
   
    <hr class="divider">
   
    <!-- Loading Spinner -->
    <div id="profile-loading" class="loading-spinner-container">
        <div class="spinner"></div>
        <p>Loading profile...</p>
    </div>

    <!-- Error Message -->
    <div id="profile-error" class="error-message" style="display: none;"></div>

    <!-- Success Message -->
    <div id="profile-success" class="success-message" style="display: none;"></div>

    <div class="profile-content" id="profile-content">
        
        <!-- PROFILE CONTENT WRAPPER -->
        <div id="profile-content-wrapper">
            
            <!-- Profile Overview Card -->
            <div class="profile-overview-card">
                <div class="profile-overview-content">
                    <!-- Profile Image -->
                    <div class="profile-image-wrapper">
                        <div class="profile-image-container">
                            <div class="profile-image" id="userProfileImage">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="profile-image-overlay" id="profileImageOverlay" onclick="document.getElementById('userPhotoInput').click();">
                                <i class="fas fa-camera"></i>
                                <span>Change Photo</span>
                            </div>
                            <input type="file" id="userPhotoInput" accept="image/jpeg,image/png,image/gif" style="display: none;">
                        </div>
                    </div>
                    
                    <!-- Basic Info -->
                    <div class="profile-basic-info">
                        <h2 id="userFullName"></h2>
                        <p id="userRole">Loading...</p>
                        <div class="profile-contact-info">
                            <div class="info-item">
                                <i class="fas fa-envelope"></i>
                                <span id="userEmail">loading...</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-check-circle"></i>
                                <span id="userVerified">Loading...</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Edit Button -->
                    <button id="editProfileBtn" class="edit-profile-btn">
                        <i class="fas fa-edit"></i> Edit Profile
                    </button>
                </div>
            </div>
            
            <!-- Profile Details Grid -->
            <div class="profile-details-grid">
                <!-- Left Column - Personal Information -->
                <div class="info-card">
                    <h4>
                        <i class="fas fa-user-circle"></i> Account Information
                    </h4>
                    
                    <div class="info-grid">
                        <div class="info-field">
                            <label>Full Name</label>
                            <p id="displayUserFullname">-</p>
                        </div>
                        <div class="info-field">
                            <label>Email</label>
                            <p id="displayUserEmail">-</p>
                        </div>
                        <div class="info-field">
                            <label>Role</label>
                            <p id="displayUserRole">-</p>
                        </div>
                        <div class="info-field">
                            <label>Verified</label>
                            <p id="displayUserVerified">-</p>
                        </div>
                    </div>
                    
                    <!-- Student Information Section -->
                    <div id="studentInfoSection" class="student-info-section">
                        <hr>
                        
                        <h4>
                            <i class="fas fa-graduation-cap"></i> Education Information
                        </h4>
                        
                        <div class="info-grid">
                            <div class="info-field">
                                <label>Class</label>
                                <p id="displayUserClass">-</p>
                            </div>
                            <div class="info-field">
                                <label>School Name</label>
                                <p id="displayUserSchool">-</p>
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
                            <p id="displayUserCreated">-</p>
                        </div>
                        <div class="info-field">
                            <label>Last Updated</label>
                            <p id="displayUserUpdated">-</p>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Quick Stats -->
                <div class="stats-card">
                    <h4>
                        <i class="fas fa-chart-line"></i> Account Status
                    </h4>
                    
                    <div class="status-card">
                        <div class="status-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 id="userStatusRole">-</h3>
                        <p id="userStatusVerification">-</p>
                    </div>
                    
                    <!-- Student Status Card -->
                    <div id="studentStatusCard" class="student-status-card">
                        <div class="student-status-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <p id="userStatusClass">-</p>
                        <p id="userStatusSchool">-</p>
                    </div>
                    
                    <hr>
                </div>
            </div>
            
            <!-- Account Settings Card -->
            <div class="settings-card">
                <h4>
                    <i class="fas fa-shield-alt"></i> Account Settings
                </h4>
                
                <div class="settings-grid">
                    <button id="changePasswordBtn" class="setting-item">
                        <i class="fas fa-key"></i>
                        <div>
                            <p>Change Password</p>
                            <small>Update your password regularly</small>
                        </div>
                    </button>
                    
                    <button id="deleteAccountBtn" class="setting-item delete">
                        <i class="fas fa-trash"></i>
                        <div>
                            <p>Delete Account</p>
                            <small>Permanently delete your account</small>
                        </div>
                    </button>
                </div>
            </div>
            
        </div>

        <!-- EDIT PROFILE FORM -->
        <div id="editProfileForm" class="edit-profile-form">
            <div class="edit-form-header">
                <h3>Edit Profile</h3>
                <button id="cancelEditBtn" class="close-btn">×</button>
            </div>
            
            <form id="profileEditForm">
                <div class="form-group">
                    <label>Full Name <span class="required">*</span></label>
                    <input type="text" id="editUserFullname" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email (cannot be changed)</label>
                    <input type="email" id="editUserEmail" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label>Role <span class="required">*</span></label>
                    <select id="editUserRole" class="form-control">
                        <option value="student">Student</option>
                        <option value="administrator">Administrator</option>
                    </select>
                </div>

                <div id="editStudentFields" class="student-edit-fields">
                    <hr>
                    
                    <h4>Education Information</h4>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Class <span class="optional">(Optional)</span></label>
                            <select id="editUserClass" class="form-control">
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
                            <input type="text" id="editUserSchool" class="form-control" placeholder="Enter school name">
                        </div>
                    </div>
                </div>

                <hr>
                
                <h4>Change Password (Optional)</h4>
                
                <div class="form-group">
                    <label>Current Password</label>
                    <input type="password" id="editCurrentPwd" class="form-control">
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" id="editNewPwd" class="form-control">
                        <small>Leave blank if no change</small>
                    </div>
                    
                    <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password" id="editConfirmPwd" class="form-control">
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="button" id="cancelEditBtn2" class="btn-secondary">Cancel</button>
                    <button type="button" id="saveProfileBtn" class="btn-primary">Save Changes</button>
                </div>
            </form>
        </div>

        <!-- CHANGE PASSWORD MODAL -->
        <div id="passwordChangeModal" class="modal" style="display: none;">
            <div class="modal-content">
                <h3>Change Password</h3>
                
                <div class="form-group">
                    <label>Current Password <span class="required">*</span></label>
                    <input type="password" id="modalCurrentPwd" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>New Password <span class="required">*</span></label>
                    <input type="password" id="modalNewPwd" class="form-control">
                    <small>Minimum 6 characters</small>
                </div>
                
                <div class="form-group">
                    <label>Confirm New Password <span class="required">*</span></label>
                    <input type="password" id="modalConfirmPwd" class="form-control">
                </div>
                
                <div class="modal-actions">
                    <button id="modalCancelBtn" class="btn-secondary">Cancel</button>
                    <button id="modalUpdateBtn" class="btn-primary">Update Password</button>
                </div>
            </div>
        </div>

        <!-- DELETE ACCOUNT MODAL -->
        <div id="accountDeleteModal" class="modal" style="display: none;">
            <div class="modal-content delete-modal">
                <i class="fas fa-exclamation-triangle"></i>
                <h3>Delete Account?</h3>
                <p>This action cannot be undone. All your data will be permanently deleted.</p>
                
                <div class="form-group">
                    <input type="password" id="deletePwdConfirm" class="form-control" placeholder="Enter your password to confirm">
                </div>
                
                <div class="modal-actions">
                    <button id="deleteCancelBtn" class="btn-secondary">Cancel</button>
                    <button id="deleteConfirmBtn" class="btn-danger">Delete</button>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
/* ==================== CORE STYLES ==================== */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
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

/* Profile Content */
.profile-content {
    margin-top: 20px;
}

/* Profile Overview Card */
.profile-overview-card {
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.profile-overview-content {
    display: flex;
    align-items: center;
    gap: 30px;
    flex-wrap: wrap;
}

.profile-image-wrapper {
    flex-shrink: 0;
}

/* Profile Image Container */
.profile-image-container {
    position: relative;
    cursor: pointer;
}

.profile-image {
    width: 120px;
    height: 120px;
    background: linear-gradient(135deg, #4361ee, #06d6a0);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 48px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.profile-image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    opacity: 0;
    transition: opacity 0.3s;
    font-size: 14px;
}

.profile-image-container:hover .profile-image-overlay {
    opacity: 1;
}

.profile-image-overlay i {
    font-size: 20px;
    margin-bottom: 5px;
}

.profile-basic-info {
    flex: 1;
    min-width: 250px;
}

.profile-basic-info h2 {
    margin: 0 0 5px 0;
    color: #333;
    font-size: 28px;
}

.profile-basic-info p {
    margin: 0 0 15px 0;
    color: #666;
    font-size: 16px;
}

.profile-contact-info {
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

.edit-profile-btn {
    background: linear-gradient(135deg, #4361ee, #06d6a0);
    color: white;
    border: none;
    padding: 12px 30px;
    border-radius: 30px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    white-space: nowrap;
    transition: all 0.3s;
}

.edit-profile-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(67,97,238,0.3);
}

/* Profile Details Grid */
.profile-details-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 25px;
    margin-bottom: 30px;
}

/* Info Card */
.info-card, .stats-card, .settings-card {
    background: white;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.info-card h4, .stats-card h4, .settings-card h4 {
    margin: 0 0 20px 0;
    color: #333;
    font-size: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.info-card h4 i, .stats-card h4 i, .settings-card h4 i {
    color: #4361ee;
}

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
.info-card hr,
.stats-card hr {
    margin: 25px 0;
    border: none;
    border-top: 1px solid #eee;
}

/* Stats Card */
.status-card {
    text-align: center;
    padding: 20px;
    background: #f8f9ff;
    border-radius: 12px;
    margin-bottom: 20px;
}

.status-icon {
    font-size: 48px;
    color: #4361ee;
    margin-bottom: 10px;
}

.status-card h3 {
    margin: 0;
    color: #333;
    font-size: 18px;
}

.status-card p {
    margin: 5px 0 0;
    color: #666;
    font-size: 14px;
}

.student-status-card {
    display: none;
    text-align: center;
    padding: 15px;
    background: #e8f4fd;
    border-radius: 12px;
}

.student-status-icon {
    font-size: 32px;
    color: #0284c7;
    margin-bottom: 10px;
}

.student-status-card p {
    margin: 0;
    color: #333;
    font-weight: 500;
}

.student-status-card p:last-child {
    margin: 5px 0 0;
    color: #666;
    font-size: 12px;
}

.action-btn {
    padding: 12px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s;
}

.action-btn.primary {
    background: #4361ee;
    color: white;
}

.action-btn.danger {
    background: #dc3545;
    color: white;
}

.action-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Settings Card */
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

/* Edit Profile Form */
.edit-profile-form {
    display: none;
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.edit-form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    flex-wrap: wrap;
    gap: 10px;
}

.edit-form-header h3 {
    margin: 0;
    color: #333;
}

.close-btn {
    background: none;
    border: none;
    color: #666;
    font-size: 28px;
    cursor: pointer;
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

.form-control:read-only {
    background-color: #f5f5f5;
    color: #666;
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

.form-actions {
    display: flex;
    gap: 15px;
    justify-content: flex-end;
    flex-wrap: wrap;
}

.btn-primary, .btn-secondary, .btn-danger {
    padding: 12px 30px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s;
}

.btn-primary {
    background: linear-gradient(135deg, #4361ee, #06d6a0);
    color: white;
}

.btn-secondary {
    background: white;
    border: 1px solid #ddd;
}

.btn-danger {
    background: #dc3545;
    color: white;
}

.btn-primary:hover, .btn-secondary:hover, .btn-danger:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
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

.modal-content small {
    display: block;
    color: #666;
    margin-top: 5px;
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

/* ==================== RESPONSIVE STYLES ==================== */

/* Tablet Landscape (1200px and below) */
@media (max-width: 1200px) {
    .profile-overview-card {
        padding: 25px;
    }
    
    .profile-image {
        width: 100px;
        height: 100px;
        font-size: 40px;
    }
}

/* Tablet Portrait (992px and below) */
@media (max-width: 992px) {
    .profile-details-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .profile-overview-content {
        flex-direction: column;
        text-align: center;
    }
    
    .profile-contact-info {
        justify-content: center;
    }
    
    .edit-profile-btn {
        width: 100%;
        justify-content: center;
    }
    
    .profile-header h3 {
        font-size: 24px;
    }
    
    .profile-header p {
        font-size: 14px;
    }
}

/* Large Phones (768px and below) */
@media (max-width: 768px) {
    .profile-header {
        margin-bottom: 20px;
    }
    
    .divider {
        margin: 15px 0 30px 0;
    }
    
    .profile-overview-card {
        padding: 20px;
    }
    
    .profile-image {
        width: 90px;
        height: 90px;
        font-size: 36px;
    }
    
    .profile-basic-info h2 {
        font-size: 24px;
    }
    
    .profile-basic-info p {
        font-size: 14px;
    }
    
    .profile-contact-info {
        flex-direction: column;
        align-items: center;
        gap: 8px;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .info-card, .stats-card, .settings-card {
        padding: 20px;
    }
    
    .info-card h4, .stats-card h4, .settings-card h4 {
        font-size: 18px;
    }
    
    .settings-grid {
        grid-template-columns: 1fr;
    }
    
    .quick-actions {
        flex-direction: row;
    }
    
    .quick-actions button {
        flex: 1;
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: 0;
    }
    
    .edit-profile-form {
        padding: 20px;
    }
    
    .edit-form-header h3 {
        font-size: 22px;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .form-actions button {
        width: 100%;
    }
    
    .modal-content {
        padding: 20px;
    }
    
    .modal-content h3 {
        font-size: 20px;
    }
    
    .modal-actions {
        flex-direction: column;
    }
    
    .modal-actions button {
        width: 100%;
    }
}

/* Small Phones (576px and below) */
@media (max-width: 576px) {
    .profile-header h3 {
        font-size: 22px;
    }
    
    .profile-header p {
        font-size: 13px;
    }
    
    .profile-overview-card {
        padding: 15px;
    }
    
    .profile-image {
        width: 80px;
        height: 80px;
        font-size: 32px;
    }
    
    .profile-basic-info h2 {
        font-size: 20px;
    }
    
    .profile-basic-info p {
        font-size: 13px;
    }
    
    .info-card, .stats-card, .settings-card {
        padding: 15px;
    }
    
    .info-card h4, .stats-card h4, .settings-card h4 {
        font-size: 16px;
        margin-bottom: 15px;
    }
    
    .info-field label {
        font-size: 12px;
    }
    
    .info-field p {
        font-size: 14px;
    }
    
    .status-icon {
        font-size: 40px;
    }
    
    .status-card h3 {
        font-size: 16px;
    }
    
    .status-card p {
        font-size: 12px;
    }
    
    .quick-actions {
        flex-direction: column;
    }
    
    .quick-actions button {
        width: 100%;
    }
    
    .setting-item {
        padding: 12px;
    }
    
    .setting-item p {
        font-size: 14px;
    }
    
    .setting-item small {
        font-size: 11px;
    }
    
    .edit-profile-form {
        padding: 15px;
    }
    
    .edit-form-header h3 {
        font-size: 20px;
    }
    
    .close-btn {
        font-size: 24px;
    }
    
    .form-control {
        padding: 10px;
        font-size: 14px;
    }
    
    .btn-primary, .btn-secondary, .btn-danger {
        padding: 10px 20px;
        font-size: 14px;
    }
    
    .modal-content {
        padding: 15px;
    }
    
    .modal-content h3 {
        font-size: 18px;
        margin-bottom: 15px;
    }
    
    .modal-content p {
        font-size: 14px;
    }
    
    .delete-modal i {
        font-size: 40px;
    }
}

/* Hover Effects */
.setting-item:hover,
.action-btn:hover,
.edit-profile-btn:hover,
.btn-primary:hover,
.btn-secondary:hover,
.btn-danger:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.setting-item.delete:hover {
    background: #dc3545;
}

.setting-item.delete:hover i,
.setting-item.delete:hover p {
    color: white;
}

/* Animation */
.content-section {
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<script>
// ==================== CONFIGURATION - PURE CONFIG ====================
// ✅ FIXED: Using ONLY CONFIG.API_BASE_URL - no hardcoded localhost
const API_BASE_URL = CONFIG.API_BASE_URL;  
const API_URL = API_BASE_URL + '/api';  // No /api prefix

console.log('🚀 Profile section loaded with API_URL:', API_URL);
console.log('✅ Using CONFIG:', CONFIG);

// ==================== DOM ELEMENTS ====================

// Loading and messages
const profileSpinner = document.getElementById('profile-loading');
const profileContainer = document.getElementById('profile-content');
const errorContainer = document.getElementById('profile-error');
const successContainer = document.getElementById('profile-success');

// Display elements
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

// Student sections
const studentInfoSectionEl = document.getElementById('studentInfoSection');
const studentStatusCardEl = document.getElementById('studentStatusCard');
const editStudentFieldsEl = document.getElementById('editStudentFields');

// Edit form elements
const editFullNameEl = document.getElementById('editUserFullname');
const editEmailEl = document.getElementById('editUserEmail');
const editRoleEl = document.getElementById('editUserRole');
const editClassEl = document.getElementById('editUserClass');
const editSchoolEl = document.getElementById('editUserSchool');
const editCurrentPwdEl = document.getElementById('editCurrentPwd');
const editNewPwdEl = document.getElementById('editNewPwd');
const editConfirmPwdEl = document.getElementById('editConfirmPwd');

// Buttons
const editProfileBtn = document.getElementById('editProfileBtn');
const cancelEditBtn1 = document.getElementById('cancelEditBtn');
const cancelEditBtn2 = document.getElementById('cancelEditBtn2');
const saveProfileBtn = document.getElementById('saveProfileBtn');
const profileWrapperEl = document.getElementById('profile-content-wrapper');
const editProfileFormEl = document.getElementById('editProfileForm');
const changePwdBtn = document.getElementById('changePasswordBtn');
const deleteAcctBtn = document.getElementById('deleteAccountBtn');
const logoutBtn = document.getElementById('logout-btn');

// Modals
const pwdChangeModal = document.getElementById('passwordChangeModal');
const acctDeleteModal = document.getElementById('accountDeleteModal');
const modalCancelBtn = document.getElementById('modalCancelBtn');
const modalUpdateBtn = document.getElementById('modalUpdateBtn');
const deleteCancelBtn = document.getElementById('deleteCancelBtn');
const deleteConfirmBtn = document.getElementById('deleteConfirmBtn');

// Modal inputs
const modalCurrentPwdEl = document.getElementById('modalCurrentPwd');
const modalNewPwdEl = document.getElementById('modalNewPwd');
const modalConfirmPwdEl = document.getElementById('modalConfirmPwd');
const deletePwdConfirmEl = document.getElementById('deletePwdConfirm');

// Photo upload elements
const photoInput = document.getElementById('userPhotoInput');
const profileImageEl = document.getElementById('userProfileImage');

// ==================== UTILITY FUNCTIONS ====================

function displayErrorMessage(msg) {
    if (errorContainer) {
        errorContainer.style.display = 'block';
        errorContainer.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${msg}`;
        setTimeout(() => {
            errorContainer.style.display = 'none';
        }, 5000);
    }
}

function displaySuccessMessage(msg) {
    if (successContainer) {
        successContainer.style.display = 'block';
        successContainer.innerHTML = `<i class="fas fa-check-circle"></i> ${msg}`;
        setTimeout(() => {
            successContainer.style.display = 'none';
        }, 3000);
    }
}

function toggleButtonLoading(btn, isLoading, originalText = '') {
    if (isLoading) {
        btn.disabled = true;
        btn.innerHTML = `<span class="spinner-small"></span> Processing...`;
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
        window.location.href = CONFIG.PAGES.LOGIN;
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
            alert('Please select a valid image file (JPEG, PNG, or GIF)');
            return;
        }
        
        if (selectedFile.size > 5 * 1024 * 1024) {
            alert('File size must be less than 5MB');
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
            headers: {
                'Authorization': `Bearer ${retrieveAuthToken()}`
            },
            body: formData
        });
        
        const result = await response.json();
        
        if (!response.ok) {
            throw new Error(result.detail || result.message || 'Upload failed');
        }
        
        if (result.success) {
            displaySuccessMessage('Profile photo uploaded successfully!');
        }
        
    } catch (error) {
        console.error('Upload error:', error);
        displayErrorMessage(error.message || 'Failed to upload photo');
        await fetchUserPhoto();
    }
}

async function fetchUserPhoto() {
    try {
        const response = await fetch(`${API_URL}/profile/photo`, {
            headers: {
                'Authorization': `Bearer ${retrieveAuthToken()}`
            }
        });
        
        const result = await response.json();
        
        if (result.success && result.data.photo_url) {
            // Using CONFIG.API_BASE_URL for the full URL
            const fullImageUrl = API_BASE_URL + result.data.photo_url;
            const urlWithTimestamp = `${fullImageUrl}?t=${Date.now()}`;
            
            profileImageEl.innerHTML = '';
            profileImageEl.style.backgroundImage = `url('${urlWithTimestamp}')`;
            profileImageEl.style.backgroundSize = 'cover';
            profileImageEl.style.backgroundPosition = 'center';
        } else {
            // Default icon
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
        window.location.href = CONFIG.PAGES.LOGIN;
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

        if (!response.ok) {
            throw new Error(result.detail || result.message || 'Failed to load profile');
        }

        if (result.success && result.data && result.data.profile) {
            const userInfo = result.data.profile;
            
            userFullNameEl.textContent = userInfo.full_name || 'Not set';
            userRoleEl.textContent = userInfo.role === 'administrator' ? 'Administrator' : 'Student';
            userEmailEl.textContent = userInfo.email || 'Not set';
            
            const verifiedStatus = userInfo.is_verified ? 'Verified' : 'Not Verified';
            const verifiedColor = userInfo.is_verified ? '#28a745' : '#dc3545';
            userVerifiedEl.innerHTML = `<span style="color: ${verifiedColor};">${verifiedStatus}</span>`;
            
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
                const date = new Date(userInfo.created_at);
                displayCreatedEl.textContent = date.toLocaleDateString('en-IN', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
            } else {
                displayCreatedEl.textContent = '-';
            }
            
            if (userInfo.updated_at) {
                const date = new Date(userInfo.updated_at);
                displayUpdatedEl.textContent = date.toLocaleDateString('en-IN', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                });
            } else {
                displayUpdatedEl.textContent = '-';
            }
            
            statusRoleEl.textContent = userInfo.role === 'administrator' ? 'Administrator' : 'Student';
            statusVerificationEl.textContent = userInfo.is_verified ? 'Verified Account' : 'Email Not Verified';
            
            editFullNameEl.value = userInfo.full_name || '';
            editEmailEl.value = userInfo.email || '';
            editRoleEl.value = userInfo.role || 'student';
            
            toggleStudentRoleFields();
            
            profileSpinner.style.display = 'none';
            profileContainer.style.display = 'block';
        } else {
            throw new Error('Invalid response format');
        }

    } catch (error) {
        console.error('Error loading profile:', error);
        profileSpinner.style.display = 'none';
        displayErrorMessage(error.message || 'Failed to load profile');
    }
}

// ==================== UPDATE PROFILE FUNCTIONS ====================

async function updateUserProfile() {
    const fullNameVal = editFullNameEl.value.trim();
    const roleVal = editRoleEl.value;
    const classVal = editClassEl.value ? parseInt(editClassEl.value) : null;
    const schoolVal = editSchoolEl.value.trim() || null;
    const currentPwdVal = editCurrentPwdEl.value;
    const newPwdVal = editNewPwdEl.value;
    const confirmPwdVal = editConfirmPwdEl.value;

    if (!fullNameVal) {
        displayErrorMessage('Full name is required');
        return;
    }

    if (newPwdVal || confirmPwdVal || currentPwdVal) {
        if (!currentPwdVal) {
            displayErrorMessage('Current password is required to change password');
            return;
        }
        if (!newPwdVal) {
            displayErrorMessage('New password is required');
            return;
        }
        if (newPwdVal.length < 6) {
            displayErrorMessage('New password must be at least 6 characters');
            return;
        }
        if (newPwdVal !== confirmPwdVal) {
            displayErrorMessage('New passwords do not match');
            return;
        }
    }

    toggleButtonLoading(saveProfileBtn, true, 'Save Changes');

    try {
        const updatePayload = {
            full_name: fullNameVal,
            role: roleVal
        };

        if (roleVal === 'student') {
            if (classVal !== null) {
                updatePayload.class = classVal;
            }
            if (schoolVal !== null) {
                updatePayload.school_name = schoolVal;
            }
        }

        if (newPwdVal && currentPwdVal) {
            updatePayload.current_password = currentPwdVal;
            updatePayload.new_password = newPwdVal;
        }

        const response = await fetch(`${API_URL}/profile`, {
            method: 'PUT',
            headers: {
                'Authorization': `Bearer ${retrieveAuthToken()}`,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(updatePayload)
        });

        const result = await response.json();

        if (!response.ok) {
            throw new Error(result.detail || result.message || 'Failed to update profile');
        }

        if (result.success) {
            displaySuccessMessage('Profile updated successfully!');
            
            editCurrentPwdEl.value = '';
            editNewPwdEl.value = '';
            editConfirmPwdEl.value = '';
            
            await loadUserProfile();
            cancelProfileEdit();
        } else {
            throw new Error(result.message || 'Update failed');
        }

    } catch (error) {
        console.error('Update error:', error);
        displayErrorMessage(error.message);
    } finally {
        toggleButtonLoading(saveProfileBtn, false);
    }
}

// ==================== PASSWORD FUNCTIONS ====================

async function handlePasswordChange() {
    const currentPwd = modalCurrentPwdEl.value;
    const newPwd = modalNewPwdEl.value;
    const confirmPwd = modalConfirmPwdEl.value;

    if (!currentPwd) {
        alert('Current password is required');
        return;
    }
    if (!newPwd) {
        alert('New password is required');
        return;
    }
    if (newPwd.length < 6) {
        alert('New password must be at least 6 characters');
        return;
    }
    if (newPwd !== confirmPwd) {
        alert('New passwords do not match');
        return;
    }

    toggleButtonLoading(modalUpdateBtn, true, 'Update Password');

    try {
        const response = await fetch(`${API_URL}/change-password`, {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${retrieveAuthToken()}`,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                current_password: currentPwd,
                new_password: newPwd
            })
        });

        const result = await response.json();

        if (!response.ok) {
            throw new Error(result.detail || result.message || 'Failed to change password');
        }

        if (result.success) {
            alert('Password changed successfully!');
            closePasswordModal();
        } else {
            throw new Error(result.message || 'Password change failed');
        }

    } catch (error) {
        console.error('Password change error:', error);
        alert(error.message);
    } finally {
        toggleButtonLoading(modalUpdateBtn, false);
    }
}

// ==================== DELETE ACCOUNT FUNCTIONS ====================

async function handleAccountDeletion() {
    const password = deletePwdConfirmEl.value;

    if (!password) {
        alert('Please enter your password to confirm');
        return;
    }

    toggleButtonLoading(deleteConfirmBtn, true, 'Delete');

    try {
        const response = await fetch(`${API_URL}/profile?password=${encodeURIComponent(password)}`, {
            method: 'DELETE',
            headers: {
                'Authorization': `Bearer ${retrieveAuthToken()}`,
                'Content-Type': 'application/json'
            }
        });

        const result = await response.json();

        if (!response.ok) {
            throw new Error(result.detail || result.message || 'Failed to delete account');
        }

        if (result.success) {
            localStorage.clear();
            alert('Account deleted successfully. Redirecting...');
            
            setTimeout(() => {
                window.location.href = CONFIG.PAGES.SIGNUP;
            }, 2000);
        } else {
            throw new Error(result.message || 'Delete failed');
        }

    } catch (error) {
        console.error('Delete error:', error);
        alert(error.message);
    } finally {
        toggleButtonLoading(deleteConfirmBtn, false);
        closeDeleteModal();
    }
}

// ==================== MODAL FUNCTIONS ====================

function openPasswordModal() {
    console.log('Opening password change modal');
    if (pwdChangeModal) {
        modalCurrentPwdEl.value = '';
        modalNewPwdEl.value = '';
        modalConfirmPwdEl.value = '';
        pwdChangeModal.style.display = 'flex';
    }
}

function closePasswordModal() {
    console.log('Closing password change modal');
    if (pwdChangeModal) {
        pwdChangeModal.style.display = 'none';
        modalCurrentPwdEl.value = '';
        modalNewPwdEl.value = '';
        modalConfirmPwdEl.value = '';
    }
}

function openDeleteModal() {
    console.log('Opening account delete modal');
    if (acctDeleteModal) {
        deletePwdConfirmEl.value = '';
        acctDeleteModal.style.display = 'flex';
    }
}

function closeDeleteModal() {
    console.log('Closing account delete modal');
    if (acctDeleteModal) {
        acctDeleteModal.style.display = 'none';
        deletePwdConfirmEl.value = '';
    }
}

// ==================== LOGOUT FUNCTION ====================

async function performLogout() {
    try {
        const token = retrieveAuthToken();
        const refreshToken = localStorage.getItem('refresh_token');

        if (token) {
            await fetch(`${API_URL}/logout`, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ refresh_token: refreshToken })
            });
        }
    } catch (error) {
        console.error('Logout error:', error);
    } finally {
        localStorage.clear();
        window.location.href = CONFIG.PAGES.LOGIN;
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

// ==================== EVENT LISTENERS SETUP ====================

function initializeEventListeners() {
    // Role change listener
    if (editRoleEl) {
        editRoleEl.addEventListener('change', toggleStudentRoleFields);
    }

    // Edit button
    if (editProfileBtn) {
        editProfileBtn.addEventListener('click', function() {
            profileWrapperEl.style.display = 'none';
            editProfileFormEl.style.display = 'block';
        });
    }

    // Cancel buttons
    if (cancelEditBtn1) cancelEditBtn1.addEventListener('click', cancelProfileEdit);
    if (cancelEditBtn2) cancelEditBtn2.addEventListener('click', cancelProfileEdit);

    // Save profile
    if (saveProfileBtn) {
        saveProfileBtn.addEventListener('click', updateUserProfile);
    }

    // Change Password button
    if (changePwdBtn) {
        changePwdBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Change password button clicked');
            openPasswordModal();
        });
    }

    // Delete Account button
    if (deleteAcctBtn) {
        deleteAcctBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Delete account button clicked');
            openDeleteModal();
        });
    }

    // Modal cancel buttons
    if (modalCancelBtn) {
        modalCancelBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            closePasswordModal();
        });
    }

    if (deleteCancelBtn) {
        deleteCancelBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            closeDeleteModal();
        });
    }

    // Modal action buttons
    if (modalUpdateBtn) {
        modalUpdateBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            handlePasswordChange();
        });
    }

    if (deleteConfirmBtn) {
        deleteConfirmBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            handleAccountDeletion();
        });
    }

    // Logout
    if (logoutBtn) {
        logoutBtn.addEventListener('click', performLogout);
    }

    // Click outside to close modals
    window.addEventListener('click', function(e) {
        if (e.target === pwdChangeModal) {
            closePasswordModal();
        }
        if (e.target === acctDeleteModal) {
            closeDeleteModal();
        }
    });

    // Escape key to close modals
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            if (pwdChangeModal && pwdChangeModal.style.display === 'flex') {
                closePasswordModal();
            }
            if (acctDeleteModal && acctDeleteModal.style.display === 'flex') {
                closeDeleteModal();
            }
        }
    });
}

// ==================== INITIALIZATION ====================

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing profile section');
    console.log('CONFIG available:', !!window.CONFIG);
    
    // Hide modals initially
    if (pwdChangeModal) pwdChangeModal.style.display = 'none';
    if (acctDeleteModal) acctDeleteModal.style.display = 'none';
    
    // Setup event listeners
    initializeEventListeners();
    
    // Check if profile is visible
    const profileSection = document.getElementById('profile-section');
    if (profileSection && profileSection.style.display !== 'none') {
        loadUserProfile();
        fetchUserPhoto();
    }
});

// Profile section visibility observer
const profileSection = document.getElementById('profile-section');
if (profileSection) {
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.attributeName === 'style') {
                if (profileSection.style.display !== 'none') {
                    loadUserProfile();
                    fetchUserPhoto();
                }
            }
        });
    });
    observer.observe(profileSection, { attributes: true });
}

console.log('Profile module initialized');
console.log('Change Password button exists:', !!changePwdBtn);
console.log('Delete Account button exists:', !!deleteAcctBtn);
console.log('Password modal exists:', !!pwdChangeModal);
console.log('Delete modal exists:', !!acctDeleteModal);
</script>