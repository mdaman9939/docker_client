<!-- Manage Students Section -->
<div id="manage-students-section" class="content-section" style="display: none;">

<style>
/* ===== AI WORLD STYLE FOR MANAGE STUDENTS ===== */
:root {
    --aiw-primary: #3f66e6;
    --aiw-primary-dark: #2b4fc1;
    --aiw-primary-light: #0ed3a2;
    --aiw-primary-teal: #129695;
    --aiw-dark-bg: linear-gradient(135deg, #3f66e6 0%, #0ed3a2 50%, #129695 100%);
    --aiw-card-bg: #ffffff;
    --aiw-text-dark: #2b2d42;
    --aiw-text-light: #8d99ae;
    --aiw-border: #e9ecef;
    --aiw-hover: #f1f3f5;
    --aiw-active: #e8edff;
    --aiw-success: #0ed3a2;
    --aiw-danger: #ef476f;
    --aiw-warning: #ffd166;
}

/* Header Banner with New Gradient */
.ms-hero {
    background: linear-gradient(135deg, #3f66e6 0%, #0ed3a2 50%, #129695 100%);
    border-radius: 20px;
    padding: 30px 40px;
    color: #fff;
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
}

.ms-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(255,255,255,0.12) 0%, transparent 70%);
    border-radius: 50%;
}

.ms-hero::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: 10%;
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
    border-radius: 50%;
}

.ms-hero-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 24px;
}

.ms-hero-left {
    display: flex;
    align-items: center;
    gap: 24px;
}

.ms-hero-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: rgba(255,255,255,0.15);
    border: 2px solid rgba(255,255,255,0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 34px;
    flex-shrink: 0;
}

.ms-hero-info h2 {
    font-size: 28px;
    font-weight: 700;
    margin: 0 0 6px;
}

.ms-hero-info p {
    margin: 0;
    opacity: 0.85;
    font-size: 14px;
}

.ms-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255,255,255,0.12);
    backdrop-filter: blur(6px);
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
    margin-top: 8px;
}

.ms-refresh-btn {
    padding: 10px 22px;
    border-radius: 14px;
    border: 2px solid rgba(255,255,255,0.4);
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(6px);
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.25s ease;
}

.ms-refresh-btn:hover {
    background: rgba(255,255,255,0.25);
    border-color: rgba(255,255,255,0.6);
}

/* Stats Row */
.ms-stats-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.ms-stat-card {
    background: var(--aiw-card-bg);
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: flex;
    align-items: center;
    gap: 16px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.ms-stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(63,102,230,0.12);
}

.ms-stat-icon {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #fff;
    flex-shrink: 0;
}

.ms-stat-info h4 {
    font-size: 13px;
    color: var(--aiw-text-light);
    margin: 0 0 4px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.ms-stat-info .ms-stat-val {
    font-size: 28px;
    font-weight: 700;
    color: var(--aiw-text-dark);
    line-height: 1;
}

/* Filter Bar */
.ms-filter-bar {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 24px;
}

.ms-filter-btn {
    padding: 8px 20px;
    border-radius: 24px;
    border: 1.5px solid var(--aiw-border);
    background: #fff;
    color: var(--aiw-text-light);
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s;
    font-family: 'Poppins', sans-serif;
}

.ms-filter-btn:hover {
    border-color: var(--aiw-primary);
    color: var(--aiw-primary);
}

.ms-filter-btn.active {
    background: var(--aiw-primary);
    color: #fff;
    border-color: var(--aiw-primary);
}

.ms-search-box {
    margin-left: auto;
    position: relative;
}

.ms-search-box input {
    padding: 8px 16px 8px 38px;
    border-radius: 24px;
    border: 1.5px solid var(--aiw-border);
    font-size: 13px;
    width: 260px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    transition: all 0.2s;
}

.ms-search-box input:focus {
    border-color: var(--aiw-primary);
    box-shadow: 0 0 0 3px rgba(63,102,230,0.1);
}

.ms-search-box i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--aiw-text-light);
    font-size: 13px;
}

/* Bulk Actions */
.ms-bulk-actions {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    padding: 12px 16px;
    background: #f8f9fa;
    border-radius: 12px;
}

.ms-bulk-select {
    display: flex;
    align-items: center;
    gap: 10px;
}

.ms-bulk-select input[type="checkbox"] {
    width: 18px;
    height: 18px;
    cursor: pointer;
}

.ms-bulk-btn {
    padding: 6px 16px;
    border-radius: 8px;
    border: none;
    font-size: 12px;
    font-weight: 500;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    transition: all 0.2s;
}

.ms-bulk-btn.activate {
    background: var(--aiw-success);
    color: #fff;
}

.ms-bulk-btn.deactivate {
    background: var(--aiw-warning);
    color: #fff;
}

.ms-bulk-btn:hover {
    transform: translateY(-1px);
    filter: brightness(0.95);
}

/* Students Table */
.ms-table-container {
    background: var(--aiw-card-bg);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    margin-bottom: 20px;
}

.ms-students-table {
    width: 100%;
    border-collapse: collapse;
}

.ms-students-table thead {
    background: #f8f9fa;
}

.ms-students-table th {
    padding: 16px 20px;
    text-align: left;
    font-size: 13px;
    font-weight: 600;
    color: var(--aiw-text-dark);
    border-bottom: 1px solid var(--aiw-border);
}

.ms-students-table td {
    padding: 16px 20px;
    font-size: 14px;
    color: var(--aiw-text-dark);
    border-bottom: 1px solid var(--aiw-border);
}

.ms-students-table tr:hover {
    background: var(--aiw-hover);
}

.ms-student-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.ms-status-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
}

.ms-status-active {
    background: #e8f5e9;
    color: #2e7d32;
}

.ms-status-inactive {
    background: #ffebee;
    color: #c62828;
}

.ms-action-buttons {
    display: flex;
    gap: 8px;
}

.ms-action-btn {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    font-size: 14px;
    transition: all 0.2s;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.ms-action-btn.activate-btn {
    background: #e8f5e9;
    color: #2e7d32;
}

.ms-action-btn.activate-btn:hover {
    background: #2e7d32;
    color: #fff;
}

.ms-action-btn.deactivate-btn {
    background: #fff3e0;
    color: #e65100;
}

.ms-action-btn.deactivate-btn:hover {
    background: #e65100;
    color: #fff;
}

.ms-action-btn.view-btn {
    background: #e3f2fd;
    color: #1565c0;
}

.ms-action-btn.view-btn:hover {
    background: #1565c0;
    color: #fff;
}

/* Pagination Styles */
.ms-pagination-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 20px;
    background: #fff;
    border-radius: 12px;
    margin-top: 20px;
    flex-wrap: wrap;
    gap: 16px;
}

.ms-pagination-info {
    font-size: 13px;
    color: var(--aiw-text-light);
}

.ms-pagination-controls {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}

.ms-page-btn {
    padding: 8px 14px;
    border-radius: 8px;
    border: 1px solid var(--aiw-border);
    background: #fff;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s;
    font-family: 'Poppins', sans-serif;
    color: var(--aiw-text-dark);
}

.ms-page-btn:hover:not(:disabled) {
    background: var(--aiw-primary);
    color: #fff;
    border-color: var(--aiw-primary);
}

.ms-page-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.ms-page-btn.active {
    background: var(--aiw-primary);
    color: #fff;
    border-color: var(--aiw-primary);
}

.ms-page-numbers {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
}

.ms-page-number {
    min-width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 8px;
    border-radius: 8px;
    border: 1px solid var(--aiw-border);
    background: #fff;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s;
    font-family: 'Poppins', sans-serif;
    color: var(--aiw-text-dark);
}

.ms-page-number:hover {
    background: var(--aiw-primary);
    color: #fff;
    border-color: var(--aiw-primary);
}

.ms-page-number.active {
    background: var(--aiw-primary);
    color: #fff;
    border-color: var(--aiw-primary);
}

.ms-per-page-select {
    padding: 6px 12px;
    border-radius: 8px;
    border: 1px solid var(--aiw-border);
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    background: #fff;
    color: var(--aiw-text-dark);
}

/* Loading & Empty States */
.ms-loading {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 60px;
    gap: 16px;
}

.ms-spinner {
    width: 40px;
    height: 40px;
    border: 3px solid var(--aiw-border);
    border-top-color: var(--aiw-primary);
    border-radius: 50%;
    animation: ms-spin 0.8s linear infinite;
}

@keyframes ms-spin {
    to { transform: rotate(360deg); }
}

.ms-empty {
    text-align: center;
    padding: 60px;
    color: var(--aiw-text-light);
}

.ms-empty i {
    font-size: 48px;
    margin-bottom: 16px;
    opacity: 0.5;
}

/* Modal */
.ms-modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(15,21,53,0.8);
    backdrop-filter: blur(4px);
    z-index: 10000;
    align-items: center;
    justify-content: center;
}

.ms-modal-overlay.open {
    display: flex;
}

.ms-modal {
    background: #fff;
    border-radius: 24px;
    padding: 28px;
    max-width: 450px;
    width: 92%;
    box-shadow: 0 24px 48px rgba(15,21,53,0.2);
}

.ms-modal h3 {
    font-size: 22px;
    font-weight: 700;
    color: var(--aiw-text-dark);
    margin: 0 0 12px;
}

.ms-modal p {
    font-size: 14px;
    color: var(--aiw-text-light);
    margin: 0 0 24px;
    line-height: 1.5;
}

.ms-modal-actions {
    display: flex;
    gap: 12px;
    justify-content: flex-end;
}

.ms-modal-cancel {
    padding: 10px 24px;
    border-radius: 12px;
    border: 1px solid var(--aiw-border);
    background: #fff;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    color: var(--aiw-text-light);
    transition: all 0.2s;
}

.ms-modal-cancel:hover {
    background: #f8f9fa;
    border-color: #cbd5e1;
}

.ms-modal-confirm {
    padding: 10px 28px;
    border-radius: 12px;
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-dark));
    color: #fff;
    border: none;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    transition: all 0.2s;
}

.ms-modal-confirm:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(63,102,230,0.3);
}

/* View Details Modal */
.ms-detail-row {
    display: flex;
    padding: 12px 0;
    border-bottom: 1px solid var(--aiw-border);
}

.ms-detail-label {
    width: 100px;
    font-weight: 600;
    color: var(--aiw-text-dark);
}

.ms-detail-value {
    flex: 1;
    color: var(--aiw-text-light);
}

/* Toast Notification */
.ms-toast {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: var(--aiw-success);
    color: #fff;
    padding: 12px 20px;
    border-radius: 12px;
    font-size: 13px;
    z-index: 10001;
    animation: fadeInUp 0.3s ease;
    font-family: 'Poppins', sans-serif;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.ms-toast.error {
    background: var(--aiw-danger);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Access Denied Message */
.ms-access-denied {
    text-align: center;
    padding: 80px 40px;
    background: var(--aiw-card-bg);
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
}

.ms-access-denied i {
    font-size: 64px;
    color: var(--aiw-danger);
    margin-bottom: 20px;
    opacity: 0.7;
}

.ms-access-denied h3 {
    font-size: 24px;
    color: var(--aiw-text-dark);
    margin: 0 0 10px;
}

.ms-access-denied p {
    color: var(--aiw-text-light);
    margin: 0;
}

/* Responsive */
@media (max-width: 900px) {
    .ms-hero {
        padding: 24px;
    }
    .ms-hero-content {
        flex-direction: column;
        text-align: center;
    }
    .ms-hero-left {
        flex-direction: column;
    }
    .ms-stats-row {
        grid-template-columns: repeat(2, 1fr);
    }
    .ms-table-container {
        overflow-x: auto;
    }
    .ms-students-table {
        min-width: 700px;
    }
    .ms-pagination-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
}

@media (max-width: 560px) {
    .ms-stats-row {
        grid-template-columns: 1fr;
    }
    .ms-filter-bar {
        flex-direction: column;
        align-items: stretch;
    }
    .ms-search-box {
        margin-left: 0;
    }
    .ms-search-box input {
        width: 100%;
    }
    .ms-pagination-controls {
        justify-content: center;
    }
    .ms-page-numbers {
        order: 1;
        width: 100%;
        justify-content: center;
    }
}
</style>

<!-- Hero Banner -->
<div class="ms-hero">
    <div class="ms-hero-content">
        <div class="ms-hero-left">
            <div class="ms-hero-icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <div class="ms-hero-info">
                <h2>Manage Students</h2>
                <p>View, manage, and control student accounts</p>
                <div class="ms-hero-badge">
                    <i class="fas fa-shield-alt"></i>
                    Admin Access Only
                </div>
            </div>
        </div>
        <div class="ms-hero-right">
            <button class="ms-refresh-btn" id="refreshStudentsBtn">
                <i class="fas fa-sync-alt"></i> Refresh
            </button>
        </div>
    </div>
</div>

<!-- Access Denied Message (shown for non-admin users) -->
<div id="ms-access-denied" class="ms-access-denied" style="display: none;">
    <i class="fas fa-lock"></i>
    <h3>Access Restricted</h3>
    <p>This section is only available to administrators.</p>
    <p style="margin-top: 10px;">Please contact your administrator if you need access.</p>
</div>

<!-- Stats Row -->
<div class="ms-stats-row" id="ms-stats-row">
    <div class="ms-stat-card">
        <div class="ms-stat-icon" style="background: linear-gradient(135deg, #3f66e6, #2b4fc1);">
            <i class="fas fa-users"></i>
        </div>
        <div class="ms-stat-info">
            <h4>Total Students</h4>
            <div class="ms-stat-val" id="totalStudents">--</div>
        </div>
    </div>
    <div class="ms-stat-card">
        <div class="ms-stat-icon" style="background: linear-gradient(135deg, #0ed3a2, #0cb892);">
            <i class="fas fa-check-circle"></i>
        </div>
        <div class="ms-stat-info">
            <h4>Active</h4>
            <div class="ms-stat-val" id="activeStudents">--</div>
        </div>
    </div>
    <div class="ms-stat-card">
        <div class="ms-stat-icon" style="background: linear-gradient(135deg, #ef476f, #e63946);">
            <i class="fas fa-ban"></i>
        </div>
        <div class="ms-stat-info">
            <h4>Inactive</h4>
            <div class="ms-stat-val" id="inactiveStudents">--</div>
        </div>
    </div>
    <div class="ms-stat-card">
        <div class="ms-stat-icon" style="background: linear-gradient(135deg, #129695, #0f7c7b);">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="ms-stat-info">
            <h4>Classes</h4>
            <div class="ms-stat-val" id="classCount">--</div>
        </div>
    </div>
</div>

<!-- Filter Bar -->
<div class="ms-filter-bar" id="ms-filter-bar">
    <button class="ms-filter-btn active" data-filter-type="all">All</button>
    <button class="ms-filter-btn" data-filter-type="active">Active</button>
    <button class="ms-filter-btn" data-filter-type="inactive">Inactive</button>
    <div class="ms-search-box">
        <i class="fas fa-search"></i>
        <input type="text" id="searchStudentInput" placeholder="Search by name or email...">
    </div>
</div>

<!-- Bulk Actions -->
<div class="ms-bulk-actions" id="bulkActionsContainer" style="display: none;">
    <div class="ms-bulk-select">
        <input type="checkbox" id="masterSelectCheckbox">
        <label for="masterSelectCheckbox" style="font-size: 13px;">Select All (<span id="selectedItemsCount">0</span>)</label>
    </div>
    <button class="ms-bulk-btn activate" id="bulkActivateActionBtn">
        <i class="fas fa-check-circle"></i> Activate All
    </button>
    <button class="ms-bulk-btn deactivate" id="bulkDeactivateActionBtn">
        <i class="fas fa-ban"></i> Deactivate All
    </button>
</div>

<!-- Students Table -->
<div class="ms-table-container" id="ms-table-container">
    <table class="ms-students-table">
        <thead>
            <tr>
                <th style="width: 40px;"><input type="checkbox" id="headerMasterCheckbox"></th>
                <th>Student</th>
                <th>Email</th>
                <th>Class</th>
                <th>School</th>
                <th>Status</th>
                <th>Joined</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="studentsTableBody">
            <tr>
                <td colspan="8" style="text-align: center;">
                    <div class="ms-loading">
                        <div class="ms-spinner"></div>
                        <p>Loading students...</p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="ms-pagination-container" id="paginationContainer">
    <div class="ms-pagination-info" id="paginationInfo">
        Showing 0 to 0 of 0 entries
    </div>
    <div class="ms-pagination-controls">
        <button class="ms-page-btn" id="firstPageBtn" disabled>
            <i class="fas fa-angle-double-left"></i>
        </button>
        <button class="ms-page-btn" id="prevPageBtn" disabled>
            <i class="fas fa-angle-left"></i>
        </button>
        <div class="ms-page-numbers" id="pageNumbersContainer"></div>
        <button class="ms-page-btn" id="nextPageBtn" disabled>
            <i class="fas fa-angle-right"></i>
        </button>
        <button class="ms-page-btn" id="lastPageBtn" disabled>
            <i class="fas fa-angle-double-right"></i>
        </button>
        <select class="ms-per-page-select" id="perPageSelect">
            <option value="10">10 per page</option>
            <option value="20">20 per page</option>
            <option value="50">50 per page</option>
            <option value="100">100 per page</option>
        </select>
    </div>
</div>

<!-- Confirmation Modal -->
<div class="ms-modal-overlay" id="actionConfirmModal">
    <div class="ms-modal">
        <h3 id="confirmModalTitle">Confirm Action</h3>
        <p id="confirmModalMessage">Are you sure you want to perform this action?</p>
        <div class="ms-modal-actions">
            <button class="ms-modal-cancel" id="cancelActionBtn">Cancel</button>
            <button class="ms-modal-confirm" id="confirmActionBtn">Confirm</button>
        </div>
    </div>
</div>

<!-- View Details Modal -->
<div class="ms-modal-overlay" id="studentDetailsModal">
    <div class="ms-modal">
        <h3><i class="fas fa-user-graduate"></i> Student Details</h3>
        <div id="studentDetailsContent"></div>
        <div class="ms-modal-actions">
            <button class="ms-modal-cancel" id="closeDetailsModalBtn">Close</button>
        </div>
    </div>
</div>

<script>
(function() {
    'use strict';

    // ==================== CONFIGURATION ====================
    const API_BASE_URL = CONFIG.API_BASE_URL + '/api';
    let ACCESS_TOKEN = localStorage.getItem('access_token');
    let allStudentsData = [];
    let currentFilterType = 'all';
    let selectedStudentIds = new Set();
    
    // Pagination variables
    let currentPage = 1;
    let itemsPerPage = 10;
    let totalFilteredItems = 0;
    let currentFilteredData = [];
    
    // Modal state management
    let pendingModalAction = null;
    let targetStudentId = null;
    let targetStudentName = '';
    let isBulkAction = false;
    let bulkStudentIds = [];
    
    // Role check
    let isAdmin = false;

    // ==================== CHECK USER ROLE ====================
    async function checkUserRole() {
        try {
            const token = ACCESS_TOKEN;
            if (!token) {
                console.log('No token found');
                return false;
            }
            
            const response = await fetch(`${API_BASE_URL}/me`, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                }
            });
            
            if (!response.ok) {
                if (response.status === 401) {
                    localStorage.removeItem('access_token');
                    window.location.href = '/login';
                }
                return false;
            }
            
            const result = await response.json();
            if (result.success && result.data && result.data.user) {
                const userRole = result.data.user.role;
                isAdmin = userRole === 'administrator';
                console.log('User role:', userRole, 'Is Admin:', isAdmin);
                return isAdmin;
            }
            return false;
        } catch (error) {
            console.error('Error checking user role:', error);
            return false;
        }
    }

    // ==================== SHOW ACCESS DENIED ====================
    function showAccessDenied() {
        const accessDeniedEl = document.getElementById('ms-access-denied');
        const statsRow = document.getElementById('ms-stats-row');
        const filterBar = document.getElementById('ms-filter-bar');
        const tableContainer = document.getElementById('ms-table-container');
        const paginationContainer = document.getElementById('paginationContainer');
        const bulkActions = document.getElementById('bulkActionsContainer');
        
        if (accessDeniedEl) accessDeniedEl.style.display = 'block';
        if (statsRow) statsRow.style.display = 'none';
        if (filterBar) filterBar.style.display = 'none';
        if (tableContainer) tableContainer.style.display = 'none';
        if (paginationContainer) paginationContainer.style.display = 'none';
        if (bulkActions) bulkActions.style.display = 'none';
        
        document.getElementById('studentsTableBody').innerHTML = `
            <tr>
                <td colspan="8" style="text-align: center; padding: 60px;">
                    <div class="ms-empty">
                        <i class="fas fa-lock"></i>
                        <p>You don't have permission to view this page.</p>
                    </div>
                </td>
            </tr>
        `;
    }

    // ==================== HELPER FUNCTIONS ====================
    
    // Toast notification
    function displayToast(message, type = 'success') {
        const toast = document.createElement('div');
        toast.className = `ms-toast ${type === 'error' ? 'error' : ''}`;
        toast.innerHTML = `<i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i> ${message}`;
        document.body.appendChild(toast);
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(20px)';
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    }

    // API call helper - Modified to handle 403 without logout
    async function callApi(method, endpoint, data = null) {
        const headers = {
            'Authorization': `Bearer ${ACCESS_TOKEN}`,
            'Content-Type': 'application/json'
        };

        const options = {
            method: method,
            headers: headers
        };

        if (data) {
            options.body = JSON.stringify(data);
        }

        try {
            const response = await fetch(`${API_BASE_URL}${endpoint}`, options);
            const result = await response.json();

            if (!response.ok) {
                // Only logout on 401 (Unauthorized), NOT on 403 (Forbidden)
                if (response.status === 401) {
                    localStorage.removeItem('access_token');
                    window.location.href = '/login';
                }
                // For 403, throw error but don't logout
                throw new Error(result.detail || result.message || 'API Error');
            }

            return result;
        } catch (error) {
            console.error('API Error:', error);
            throw error;
        }
    }

    // ==================== DATA LOADING ====================
    
    async function fetchAllStudents() {
        // Skip if not admin
        if (!isAdmin) {
            console.log('Not admin, skipping student fetch');
            return;
        }
        
        try {
            const result = await callApi('GET', '/admin/students');
            if (result.success && result.data.students) {
                allStudentsData = result.data.students;
                
                // Update stats
                document.getElementById('totalStudents').textContent = result.data.stats.total;
                document.getElementById('activeStudents').textContent = result.data.stats.active;
                document.getElementById('inactiveStudents').textContent = result.data.stats.inactive;
                
                const uniqueClasses = new Set(allStudentsData.map(s => s.class).filter(c => c));
                document.getElementById('classCount').textContent = uniqueClasses.size;
                
                applyFiltersAndRender();
            }
        } catch (error) {
            console.error('Failed to load students:', error);
            // Don't show error if it's a 403, we already handled that
            if (error.message !== 'API Error' || !error.message.includes('403')) {
                document.getElementById('studentsTableBody').innerHTML = `
                    <tr><td colspan="8" style="text-align: center;">
                        <div class="ms-empty">
                            <i class="fas fa-exclamation-circle"></i>
                            <p>Failed to load students. Please try again.</p>
                        </div>
                    </td></tr>
                `;
            }
        }
    }
    
    // ==================== FILTERING & PAGINATION ====================
    
    function applyFiltersAndRender() {
        if (!isAdmin) return;
        
        const searchTerm = document.getElementById('searchStudentInput').value.toLowerCase();
        let filteredData = allStudentsData;
        
        // Apply status filter
        if (currentFilterType === 'active') {
            filteredData = filteredData.filter(s => s.is_active === 1);
        } else if (currentFilterType === 'inactive') {
            filteredData = filteredData.filter(s => s.is_active === 0);
        }
        
        // Apply search filter
        if (searchTerm) {
            filteredData = filteredData.filter(s => 
                s.full_name.toLowerCase().includes(searchTerm) || 
                s.email.toLowerCase().includes(searchTerm)
            );
        }
        
        currentFilteredData = filteredData;
        totalFilteredItems = filteredData.length;
        
        // Reset to first page when filters change
        currentPage = 1;
        
        renderPagination();
        renderCurrentPageData();
    }
    
    function renderCurrentPageData() {
        if (!isAdmin) return;
        
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        const pageData = currentFilteredData.slice(startIndex, endIndex);
        
        renderStudentsTable(pageData);
        updatePaginationInfo();
        updateButtonStates();
    }
    
    function renderStudentsTable(students) {
        if (!isAdmin) return;
        
        if (students.length === 0) {
            document.getElementById('studentsTableBody').innerHTML = `
                <tr><td colspan="8" style="text-align: center;">
                    <div class="ms-empty">
                        <i class="fas fa-user-graduate"></i>
                        <p>No students found</p>
                    </div>
                 </tr>
            `;
            return;
        }
        
        document.getElementById('studentsTableBody').innerHTML = students.map(student => `
            <tr data-student-row-id="${student.id}">
                <td><input type="checkbox" class="studentRowCheckbox" value="${student.id}" ${selectedStudentIds.has(student.id) ? 'checked' : ''}</td>
                <td>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <img class="ms-student-avatar" src="${student.profile_photo || `https://ui-avatars.com/api/?name=${encodeURIComponent(student.full_name)}&background=3f66e6&color=fff`}" alt="${escapeHtmlString(student.full_name)}">
                        <strong>${escapeHtmlString(student.full_name)}</strong>
                    </div>
                </td>
                <td>${escapeHtmlString(student.email)}</td>
                <td>${student.class || 'Not set'}</td>
                <td>${escapeHtmlString(student.school_name) || 'Not set'}</td>
                <td>
                    <span class="ms-status-badge ${student.is_active ? 'ms-status-active' : 'ms-status-inactive'}">
                        <i class="fas ${student.is_active ? 'fa-circle' : 'fa-circle'}"></i>
                        ${student.is_active ? 'Active' : 'Inactive'}
                    </span>
                </td>
                <td>${formatDateString(student.created_at)}</td>
                <td>
                    <div class="ms-action-buttons">
                        <button class="ms-action-btn view-btn" onclick="viewStudentDetails(${student.id})" title="View Details">
                            <i class="fas fa-eye"></i>
                        </button>
                        ${student.is_active ? 
                            `<button class="ms-action-btn deactivate-btn" onclick="openDeactivateModal(${student.id}, '${escapeHtmlString(student.full_name)}')" title="Deactivate">
                                <i class="fas fa-ban"></i>
                            </button>` :
                            `<button class="ms-action-btn activate-btn" onclick="openActivateModal(${student.id}, '${escapeHtmlString(student.full_name)}')" title="Activate">
                                <i class="fas fa-check-circle"></i>
                            </button>`
                        }
                    </div>
                </td>
            </tr>
        `).join('');
        
        attachCheckboxEventListeners();
    }
    
    function renderPagination() {
        if (!isAdmin) return;
        
        const totalPages = Math.ceil(totalFilteredItems / itemsPerPage);
        const pageNumbersContainer = document.getElementById('pageNumbersContainer');
        
        if (totalPages <= 1) {
            pageNumbersContainer.innerHTML = '';
            return;
        }
        
        let startPage = Math.max(1, currentPage - 2);
        let endPage = Math.min(totalPages, currentPage + 2);
        
        if (endPage - startPage < 4) {
            if (startPage === 1) {
                endPage = Math.min(totalPages, startPage + 4);
            } else if (endPage === totalPages) {
                startPage = Math.max(1, endPage - 4);
            }
        }
        
        let pagesHtml = '';
        
        if (startPage > 1) {
            pagesHtml += `<button class="ms-page-number" data-page="1">1</button>`;
            if (startPage > 2) {
                pagesHtml += `<span style="padding: 0 8px;">...</span>`;
            }
        }
        
        for (let i = startPage; i <= endPage; i++) {
            pagesHtml += `<button class="ms-page-number ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>`;
        }
        
        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                pagesHtml += `<span style="padding: 0 8px;">...</span>`;
            }
            pagesHtml += `<button class="ms-page-number" data-page="${totalPages}">${totalPages}</button>`;
        }
        
        pageNumbersContainer.innerHTML = pagesHtml;
        
        document.querySelectorAll('.ms-page-number').forEach(btn => {
            btn.addEventListener('click', () => {
                const page = parseInt(btn.dataset.page);
                if (page && page !== currentPage) {
                    currentPage = page;
                    renderCurrentPageData();
                    renderPagination();
                }
            });
        });
    }
    
    function updatePaginationInfo() {
        if (!isAdmin) return;
        
        const startIndex = (currentPage - 1) * itemsPerPage + 1;
        const endIndex = Math.min(currentPage * itemsPerPage, totalFilteredItems);
        const infoText = totalFilteredItems === 0 
            ? 'Showing 0 to 0 of 0 entries'
            : `Showing ${startIndex} to ${endIndex} of ${totalFilteredItems} entries`;
        document.getElementById('paginationInfo').textContent = infoText;
    }
    
    function updateButtonStates() {
        if (!isAdmin) return;
        
        const totalPages = Math.ceil(totalFilteredItems / itemsPerPage);
        const firstBtn = document.getElementById('firstPageBtn');
        const prevBtn = document.getElementById('prevPageBtn');
        const nextBtn = document.getElementById('nextPageBtn');
        const lastBtn = document.getElementById('lastPageBtn');
        
        firstBtn.disabled = currentPage === 1;
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages || totalPages === 0;
        lastBtn.disabled = currentPage === totalPages || totalPages === 0;
    }
    
    // ==================== ACTIONS ====================
    
    async function performActivateStudent(studentId) {
        try {
            const result = await callApi('PUT', `/admin/students/${studentId}/activate`);
            if (result.success) {
                displayToast(result.message, 'success');
                await fetchAllStudents();
            }
        } catch (error) {
            displayToast(error.message, 'error');
        }
    }
    
    async function performDeactivateStudent(studentId) {
        try {
            const result = await callApi('PUT', `/admin/students/${studentId}/deactivate`);
            if (result.success) {
                displayToast(result.message, 'success');
                await fetchAllStudents();
            }
        } catch (error) {
            displayToast(error.message, 'error');
        }
    }
    
    async function performBulkActivate() {
        const studentIds = Array.from(selectedStudentIds);
        if (studentIds.length === 0) return;
        
        try {
            const result = await callApi('POST', '/admin/students/bulk-action', {
                student_ids: studentIds,
                action: 'activate'
            });
            if (result.success) {
                displayToast(result.message, 'success');
                selectedStudentIds.clear();
                await fetchAllStudents();
            }
        } catch (error) {
            displayToast(error.message, 'error');
        }
    }
    
    async function performBulkDeactivate() {
        const studentIds = Array.from(selectedStudentIds);
        if (studentIds.length === 0) return;
        
        try {
            const result = await callApi('POST', '/admin/students/bulk-action', {
                student_ids: studentIds,
                action: 'deactivate'
            });
            if (result.success) {
                displayToast(result.message, 'success');
                selectedStudentIds.clear();
                await fetchAllStudents();
            }
        } catch (error) {
            displayToast(error.message, 'error');
        }
    }
    
    // ==================== MODAL HANDLERS ====================
    
    window.openActivateModal = function(studentId, studentName) {
        pendingModalAction = 'activate';
        targetStudentId = studentId;
        targetStudentName = studentName;
        isBulkAction = false;
        
        document.getElementById('confirmModalTitle').textContent = 'Activate Student';
        document.getElementById('confirmModalMessage').innerHTML = `Are you sure you want to activate <strong>"${studentName}"</strong>?`;
        document.getElementById('actionConfirmModal').classList.add('open');
    };
    
    window.openDeactivateModal = function(studentId, studentName) {
        pendingModalAction = 'deactivate';
        targetStudentId = studentId;
        targetStudentName = studentName;
        isBulkAction = false;
        
        document.getElementById('confirmModalTitle').textContent = 'Deactivate Student';
        document.getElementById('confirmModalMessage').innerHTML = `Are you sure you want to deactivate <strong>"${studentName}"</strong>?<br><span style="color: #ef476f;">The student will not be able to login.</span>`;
        document.getElementById('actionConfirmModal').classList.add('open');
    };
    
    function openBulkActivateModal() {
        if (selectedStudentIds.size === 0) return;
        
        pendingModalAction = 'bulkActivate';
        isBulkAction = true;
        bulkStudentIds = Array.from(selectedStudentIds);
        
        document.getElementById('confirmModalTitle').textContent = 'Bulk Activate';
        document.getElementById('confirmModalMessage').innerHTML = `Are you sure you want to activate <strong>${selectedStudentIds.size}</strong> student(s)?`;
        document.getElementById('actionConfirmModal').classList.add('open');
    }
    
    function openBulkDeactivateModal() {
        if (selectedStudentIds.size === 0) return;
        
        pendingModalAction = 'bulkDeactivate';
        isBulkAction = true;
        bulkStudentIds = Array.from(selectedStudentIds);
        
        document.getElementById('confirmModalTitle').textContent = 'Bulk Deactivate';
        document.getElementById('confirmModalMessage').innerHTML = `Are you sure you want to deactivate <strong>${selectedStudentIds.size}</strong> student(s)?`;
        document.getElementById('actionConfirmModal').classList.add('open');
    }
    
    function closeActionModal() {
        document.getElementById('actionConfirmModal').classList.remove('open');
        pendingModalAction = null;
        targetStudentId = null;
        targetStudentName = '';
        isBulkAction = false;
        bulkStudentIds = [];
    }
    
    async function executeModalAction() {
        if (pendingModalAction === 'activate' && !isBulkAction) {
            await performActivateStudent(targetStudentId);
        } else if (pendingModalAction === 'deactivate' && !isBulkAction) {
            await performDeactivateStudent(targetStudentId);
        } else if (pendingModalAction === 'bulkActivate') {
            await performBulkActivate();
        } else if (pendingModalAction === 'bulkDeactivate') {
            await performBulkDeactivate();
        }
        closeActionModal();
    }
    
    // ==================== VIEW DETAILS ====================
    
    window.viewStudentDetails = async function(studentId) {
        try {
            const result = await callApi('GET', `/admin/students/${studentId}`);
            if (result.success) {
                const student = result.data.student;
                const detailsHtml = `
                    <div class="ms-detail-row">
                        <div class="ms-detail-label">Full Name:</div>
                        <div class="ms-detail-value"><strong>${escapeHtmlString(student.full_name)}</strong></div>
                    </div>
                    <div class="ms-detail-row">
                        <div class="ms-detail-label">Email:</div>
                        <div class="ms-detail-value">${escapeHtmlString(student.email)}</div>
                    </div>
                    <div class="ms-detail-row">
                        <div class="ms-detail-label">Class:</div>
                        <div class="ms-detail-value">${student.class || 'Not set'}</div>
                    </div>
                    <div class="ms-detail-row">
                        <div class="ms-detail-label">School:</div>
                        <div class="ms-detail-value">${escapeHtmlString(student.school_name) || 'Not set'}</div>
                    </div>
                    <div class="ms-detail-row">
                        <div class="ms-detail-label">Status:</div>
                        <div class="ms-detail-value">
                            <span class="ms-status-badge ${student.is_active ? 'ms-status-active' : 'ms-status-inactive'}">
                                ${student.is_active ? 'Active' : 'Inactive'}
                            </span>
                        </div>
                    </div>
                    <div class="ms-detail-row">
                        <div class="ms-detail-label">Joined:</div>
                        <div class="ms-detail-value">${formatDateString(student.created_at)}</div>
                    </div>
                    <div class="ms-detail-row">
                        <div class="ms-detail-label">Last Updated:</div>
                        <div class="ms-detail-value">${formatDateString(student.updated_at)}</div>
                    </div>
                `;
                document.getElementById('studentDetailsContent').innerHTML = detailsHtml;
                document.getElementById('studentDetailsModal').classList.add('open');
            }
        } catch (error) {
            displayToast(error.message, 'error');
        }
    };
    
    function closeDetailsModal() {
        document.getElementById('studentDetailsModal').classList.remove('open');
    }
    
    // ==================== UI HELPERS ====================
    
    function updateBulkActionsVisibility() {
        if (!isAdmin) return;
        
        const bulkContainer = document.getElementById('bulkActionsContainer');
        bulkContainer.style.display = selectedStudentIds.size > 0 ? 'flex' : 'none';
        document.getElementById('selectedItemsCount').textContent = selectedStudentIds.size;
    }
    
    function attachCheckboxEventListeners() {
        if (!isAdmin) return;
        
        const checkboxes = document.querySelectorAll('.studentRowCheckbox');
        checkboxes.forEach(cb => {
            cb.removeEventListener('change', handleCheckboxChange);
            cb.addEventListener('change', handleCheckboxChange);
        });
        
        const headerCheckbox = document.getElementById('headerMasterCheckbox');
        const masterCheckbox = document.getElementById('masterSelectCheckbox');
        
        if (headerCheckbox) {
            headerCheckbox.removeEventListener('change', handleHeaderCheckboxChange);
            headerCheckbox.addEventListener('change', handleHeaderCheckboxChange);
        }
        
        if (masterCheckbox) {
            masterCheckbox.removeEventListener('change', handleHeaderCheckboxChange);
            masterCheckbox.addEventListener('change', handleHeaderCheckboxChange);
        }
    }
    
    function handleCheckboxChange(e) {
        const studentId = parseInt(e.target.value);
        if (e.target.checked) {
            selectedStudentIds.add(studentId);
        } else {
            selectedStudentIds.delete(studentId);
        }
        updateBulkActionsVisibility();
        updateMasterCheckboxes();
    }
    
    function handleHeaderCheckboxChange(e) {
        const isChecked = e.target.checked;
        const currentPageCheckboxes = document.querySelectorAll('.studentRowCheckbox');
        currentPageCheckboxes.forEach(cb => {
            cb.checked = isChecked;
            const studentId = parseInt(cb.value);
            if (isChecked) {
                selectedStudentIds.add(studentId);
            } else {
                selectedStudentIds.delete(studentId);
            }
        });
        updateBulkActionsVisibility();
        updateMasterCheckboxes();
    }
    
    function updateMasterCheckboxes() {
        if (!isAdmin) return;
        
        const totalBoxes = document.querySelectorAll('.studentRowCheckbox').length;
        const checkedBoxes = document.querySelectorAll('.studentRowCheckbox:checked').length;
        const headerCheckbox = document.getElementById('headerMasterCheckbox');
        const masterCheckbox = document.getElementById('masterSelectCheckbox');
        
        if (headerCheckbox) {
            headerCheckbox.checked = totalBoxes > 0 && checkedBoxes === totalBoxes;
            headerCheckbox.indeterminate = checkedBoxes > 0 && checkedBoxes < totalBoxes;
        }
        
        if (masterCheckbox) {
            masterCheckbox.checked = totalBoxes > 0 && checkedBoxes === totalBoxes;
            masterCheckbox.indeterminate = checkedBoxes > 0 && checkedBoxes < totalBoxes;
        }
    }
    
    function formatDateString(dateStr) {
        if (!dateStr) return 'N/A';
        const date = new Date(dateStr);
        return date.toLocaleDateString('en-IN', { day: 'numeric', month: 'short', year: 'numeric' });
    }
    
    function escapeHtmlString(str) {
        if (!str) return '';
        const div = document.createElement('div');
        div.textContent = str;
        return div.innerHTML;
    }
    
    // ==================== PAGINATION NAVIGATION ====================
    
    function goToFirstPage() {
        if (currentPage !== 1) {
            currentPage = 1;
            renderCurrentPageData();
            renderPagination();
        }
    }
    
    function goToPrevPage() {
        if (currentPage > 1) {
            currentPage--;
            renderCurrentPageData();
            renderPagination();
        }
    }
    
    function goToNextPage() {
        const totalPages = Math.ceil(totalFilteredItems / itemsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            renderCurrentPageData();
            renderPagination();
        }
    }
    
    function goToLastPage() {
        const totalPages = Math.ceil(totalFilteredItems / itemsPerPage);
        if (currentPage !== totalPages && totalPages > 0) {
            currentPage = totalPages;
            renderCurrentPageData();
            renderPagination();
        }
    }
    
    function changePerPage() {
        itemsPerPage = parseInt(document.getElementById('perPageSelect').value);
        currentPage = 1;
        renderCurrentPageData();
        renderPagination();
    }
    
    // ==================== EVENT LISTENERS ====================
    
    function setupEventListeners() {
        if (!isAdmin) return;
        
        document.getElementById('refreshStudentsBtn').addEventListener('click', () => fetchAllStudents());
        document.getElementById('searchStudentInput').addEventListener('input', () => applyFiltersAndRender());
        document.getElementById('closeDetailsModalBtn').addEventListener('click', closeDetailsModal);
        
        document.getElementById('bulkActivateActionBtn').addEventListener('click', openBulkActivateModal);
        document.getElementById('bulkDeactivateActionBtn').addEventListener('click', openBulkDeactivateModal);
        
        document.getElementById('cancelActionBtn').addEventListener('click', closeActionModal);
        document.getElementById('confirmActionBtn').addEventListener('click', executeModalAction);
        
        document.getElementById('firstPageBtn').addEventListener('click', goToFirstPage);
        document.getElementById('prevPageBtn').addEventListener('click', goToPrevPage);
        document.getElementById('nextPageBtn').addEventListener('click', goToNextPage);
        document.getElementById('lastPageBtn').addEventListener('click', goToLastPage);
        document.getElementById('perPageSelect').addEventListener('change', changePerPage);
        
        document.querySelectorAll('.ms-filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.ms-filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                currentFilterType = this.dataset.filterType;
                applyFiltersAndRender();
            });
        });
        
        document.getElementById('studentDetailsModal').addEventListener('click', (e) => {
            if (e.target === document.getElementById('studentDetailsModal')) {
                closeDetailsModal();
            }
        });
        
        document.getElementById('actionConfirmModal').addEventListener('click', (e) => {
            if (e.target === document.getElementById('actionConfirmModal')) {
                closeActionModal();
            }
        });
    }
    
    // ==================== INITIALIZATION ====================
    
    async function initialize() {
        if (!ACCESS_TOKEN) {
            document.getElementById('studentsTableBody').innerHTML = `
                <tr><td colspan="8" style="text-align: center;">
                    <div class="ms-empty">
                        <i class="fas fa-lock"></i>
                        <p>Please login to access this page</p>
                    </div>
                </tr>
            `;
            return;
        }
        
        // First check if user is admin
        const adminStatus = await checkUserRole();
        
        if (!adminStatus) {
            showAccessDenied();
            return;
        }
        
        // User is admin, show normal content
        isAdmin = true;
        document.getElementById('ms-access-denied').style.display = 'none';
        
        // Show all admin sections
        document.getElementById('ms-stats-row').style.display = 'grid';
        document.getElementById('ms-filter-bar').style.display = 'flex';
        document.getElementById('ms-table-container').style.display = 'block';
        document.getElementById('paginationContainer').style.display = 'flex';
        
        // Load data
        await fetchAllStudents();
        setupEventListeners();
    }
    
    // Start initialization
    initialize();
})();
</script>

</div>