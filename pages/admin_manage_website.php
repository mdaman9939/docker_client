<?php
// admin_manage_website.php
// Complete Website Management System with FastAPI Backend Integration
?>

<!-- Manage Website Section (Admin Only) -->
<div id="manage-website-section" class="content-section" style="display: none;">

    <!-- Hero Banner -->
    <div class="mw-hero-banner">
        <div class="mw-hero-left">
            <div class="mw-hero-icon">
                <i class="fas fa-globe"></i>
            </div>
            <div class="mw-hero-text">
                <h2>Manage Websites</h2>
                <p>Add, edit, delete and manage class-wise educational websites</p>
            </div>
        </div>
        <div class="mw-hero-right">
            <div class="mw-hero-search">
                <i class="fas fa-search"></i>
                <input type="text" id="admin-website-search" placeholder="Search websites...">
            </div>
            <button class="mw-add-btn" id="addNewWebsiteBtn">
                <i class="fas fa-plus"></i> Add New Website
            </button>
        </div>
    </div>

    <!-- Messages -->
    <div id="admin-websites-loading" class="loading-spinner-container" style="display: none;">
        <div class="spinner"></div>
        <p>Loading websites...</p>
    </div>
    <div id="admin-websites-error" class="error-message" style="display: none;"></div>
    <div id="admin-websites-success" class="success-message" style="display: none;"></div>

    <!-- Filters Bar -->
    <div class="mw-filters-bar">
        <div class="mw-subject-filters">
            <button class="mw-filter-chip active" data-subject="all">All Subjects</button>
            <button class="mw-filter-chip" data-subject="Mathematics"><i class="fas fa-calculator"></i> Mathematics</button>
            <button class="mw-filter-chip" data-subject="Science"><i class="fas fa-flask"></i> Science</button>
            <button class="mw-filter-chip" data-subject="English"><i class="fas fa-book"></i> English</button>
            <button class="mw-filter-chip" data-subject="History"><i class="fas fa-landmark"></i> History</button>
            <button class="mw-filter-chip" data-subject="Geography"><i class="fas fa-map-marked-alt"></i> Geography</button>
            <button class="mw-filter-chip" data-subject="Computer Science"><i class="fas fa-laptop-code"></i> Computer Science</button>
        </div>
        <div class="mw-class-filter">
            <i class="fas fa-graduation-cap"></i>
            <select id="classFilterDropdown">
                <option value="all">All Classes</option>
                <?php for($classNum=1; $classNum<=12; $classNum++): ?>
                    <option value="<?= $classNum ?>">Class <?= $classNum ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </div>

    <!-- Active Filters & Summary -->
    <div class="mw-active-filters" id="activeFiltersContainer">
        <div class="mw-filter-summary" id="filterSummaryText"></div>
        <div class="mw-active-tags" id="activeFiltersList"></div>
        <button id="clearAllFiltersBtn" class="mw-clear-filters-btn" style="display: none;">
            <i class="fas fa-times-circle"></i> Clear all
        </button>
    </div>

    <!-- Websites Grid -->
    <div class="mw-grid" id="admin-websites-grid"></div>
</div>

<!-- Add Website Modal -->
<div id="addWebsiteModal" class="mw-modal" style="display: none;">
    <div class="mw-modal-content">
        <div class="mw-modal-header">
            <span class="mw-close-modal" onclick="closeAddWebsiteModal()">&times;</span>
            <div class="mw-modal-header-icon"><i class="fas fa-plus-circle"></i></div>
            <h2>Add New Website</h2>
            <p>Index an educational website for students</p>
        </div>
        <form id="addWebsiteForm" class="mw-form">
            <div class="mw-form-row">
                <div class="mw-form-group">
                    <label><i class="fas fa-heading"></i> Website Title *</label>
                    <input type="text" id="websiteTitle" placeholder="e.g., Khan Academy" required>
                </div>
                <div class="mw-form-group">
                    <label><i class="fas fa-link"></i> Website URL *</label>
                    <input type="url" id="websiteUrl" placeholder="https://www.example.com" required>
                </div>
            </div>
            <div class="mw-form-row">
                <div class="mw-form-group">
                    <label><i class="fas fa-book"></i> Subject *</label>
                    <select id="websiteSubject" required>
                        <option value="">Select Subject</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Science">Science</option>
                        <option value="English">English</option>
                        <option value="History">History</option>
                        <option value="Geography">Geography</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="General">General</option>
                        <option value="Research">Research</option>
                    </select>
                </div>
                <div class="mw-form-group">
                    <label><i class="fas fa-graduation-cap"></i> Class *</label>
                    <select id="websiteClassSelect" required>
                        <option value="">Select Class</option>
                        <?php for($classNum=1; $classNum<=12; $classNum++): ?>
                            <option value="<?= $classNum ?>">Class <?= $classNum ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="mw-form-group">
                <label><i class="fas fa-align-left"></i> Description</label>
                <textarea id="websiteDescriptionText" placeholder="Brief description of the website..."></textarea>
            </div>
            <div class="mw-form-group">
                <label><i class="fas fa-tags"></i> Tags (comma separated)</label>
                <input type="text" id="websiteTagsInput" placeholder="e.g., math, algebra, equations">
            </div>
            <button type="submit" id="submitWebsiteBtn" class="mw-submit-btn">
                <i class="fas fa-plus-circle"></i> Add Website
            </button>
        </form>
    </div>
</div>

<!-- Edit Website Modal -->
<div id="editWebsiteModal" class="mw-modal" style="display: none;">
    <div class="mw-modal-content">
        <div class="mw-modal-header">
            <span class="mw-close-modal" onclick="closeEditWebsiteModal()">&times;</span>
            <div class="mw-modal-header-icon" style="background: linear-gradient(135deg, #3f66e6, #129695, #0ed3a2);"><i class="fas fa-edit"></i></div>
            <h2>Edit Website</h2>
            <p>Update website details</p>
        </div>
        <form id="editWebsiteForm" class="mw-form">
            <input type="hidden" id="editDocId">
            <div class="mw-form-row">
                <div class="mw-form-group">
                    <label><i class="fas fa-heading"></i> Website Title *</label>
                    <input type="text" id="editWebsiteTitle" required>
                </div>
                <div class="mw-form-group">
                    <label><i class="fas fa-link"></i> Website URL *</label>
                    <input type="url" id="editWebsiteUrl" required>
                </div>
            </div>
            <div class="mw-form-row">
                <div class="mw-form-group">
                    <label><i class="fas fa-book"></i> Subject *</label>
                    <select id="editWebsiteSubject" required>
                        <option value="">Select Subject</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Science">Science</option>
                        <option value="English">English</option>
                        <option value="History">History</option>
                        <option value="Geography">Geography</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="General">General</option>
                        <option value="Research">Research</option>
                    </select>
                </div>
                <div class="mw-form-group">
                    <label><i class="fas fa-graduation-cap"></i> Class *</label>
                    <select id="editWebsiteClassSelect" required>
                        <option value="">Select Class</option>
                        <?php for($classNum=1; $classNum<=12; $classNum++): ?>
                            <option value="<?= $classNum ?>">Class <?= $classNum ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="mw-form-group">
                <label><i class="fas fa-align-left"></i> Description</label>
                <textarea id="editWebsiteDescription"></textarea>
            </div>
            <div class="mw-form-group">
                <label><i class="fas fa-tags"></i> Tags (comma separated)</label>
                <input type="text" id="editWebsiteTags" placeholder="e.g., math, algebra, equations">
            </div>
            <div class="mw-modal-actions">
                <button type="submit" id="updateWebsiteBtn" class="mw-submit-btn" style="background: linear-gradient(135deg, #3f66e6, #129695, #0ed3a2);">
                    <i class="fas fa-save"></i> Update Website
                </button>
                <button type="button" onclick="closeEditWebsiteModal()" class="mw-cancel-btn">Cancel</button>
            </div>
        </form>
    </div>
</div>

<style>
/* ==================== HERO BANNER ==================== */
.mw-hero-banner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(135deg, #3f66e6 0%, #129695 50%, #0ed3a2 100%);
    border-radius: 20px;
    padding: 28px 36px;
    margin-bottom: 24px;
    flex-wrap: wrap;
    gap: 20px;
    color: white;
}

.mw-hero-left {
    display: flex;
    align-items: center;
    gap: 20px;
}

.mw-hero-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    flex-shrink: 0;
}

.mw-hero-text h2 {
    font-size: 24px;
    font-weight: 700;
    margin: 0 0 4px 0;
    color: white;
}

.mw-hero-text p {
    font-size: 14px;
    margin: 0;
    opacity: 0.88;
}

.mw-hero-right {
    display: flex;
    align-items: center;
    gap: 15px;
    flex-wrap: wrap;
}

.mw-hero-search {
    position: relative;
    min-width: 260px;
}

.mw-hero-search i {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255, 255, 255, 0.7);
    font-size: 14px;
}

.mw-hero-search input {
    width: 100%;
    padding: 11px 18px 11px 42px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 30px;
    font-size: 14px;
    background: rgba(255, 255, 255, 0.15);
    color: white;
    backdrop-filter: blur(4px);
    box-sizing: border-box;
    transition: all 0.3s;
}

.mw-hero-search input::placeholder {
    color: rgba(255, 255, 255, 0.65);
}

.mw-hero-search input:focus {
    outline: none;
    border-color: rgba(255, 255, 255, 0.7);
    background: rgba(255, 255, 255, 0.25);
    box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.15);
}

.mw-add-btn {
    background: white;
    color: #3f66e6;
    padding: 11px 24px;
    border-radius: 30px;
    border: none;
    cursor: pointer;
    font-weight: 600;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s;
    white-space: nowrap;
}

.mw-add-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
}

/* ==================== FILTERS BAR ==================== */
.mw-filters-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: white;
    padding: 12px 20px;
    border-radius: 50px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 20px;
    flex-wrap: wrap;
    gap: 12px;
}

.mw-subject-filters {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
}

.mw-filter-chip {
    padding: 8px 16px;
    border: none;
    background: transparent;
    border-radius: 30px;
    cursor: pointer;
    font-weight: 500;
    color: #666;
    font-size: 13px;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 6px;
}

.mw-filter-chip:hover {
    background: #f0f4ff;
    color: #3f66e6;
}

.mw-filter-chip.active {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: white;
}

.mw-class-filter {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #666;
}

.mw-class-filter i {
    font-size: 14px;
}

.mw-class-filter select {
    padding: 8px 16px;
    border: 2px solid #e8ecf4;
    border-radius: 25px;
    font-size: 13px;
    color: #333;
    background: white;
    cursor: pointer;
    outline: none;
    min-width: 130px;
    transition: all 0.3s;
}

.mw-class-filter select:focus {
    border-color: #3f66e6;
    box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
}

/* ==================== ACTIVE FILTERS ==================== */
.mw-active-filters {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.mw-filter-summary {
    font-size: 13px;
    color: #666;
    padding: 8px 16px;
    background: #f8f9fa;
    border-radius: 25px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.mw-filter-summary strong {
    color: #3f66e6;
}

.mw-active-tags {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}

.mw-active-tag {
    background: #eef1ff;
    color: #3f66e6;
    padding: 6px 14px;
    border-radius: 25px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 500;
}

.mw-active-tag i.fa-times {
    cursor: pointer;
    opacity: 0.6;
    transition: opacity 0.2s;
}

.mw-active-tag i.fa-times:hover {
    opacity: 1;
}

.mw-clear-filters-btn {
    background: none;
    border: none;
    color: #dc3545;
    cursor: pointer;
    font-size: 13px;
    padding: 6px 12px;
    border-radius: 20px;
    transition: all 0.2s;
}

.mw-clear-filters-btn:hover {
    background: #fff0f0;
}

/* ==================== WEBSITES GRID ==================== */
.mw-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 24px;
    margin-bottom: 40px;
}

/* ==================== WEBSITE CARD ==================== */
.mw-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    position: relative;
}

.mw-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 40px rgba(67, 97, 238, 0.15);
}

.mw-card-thumb {
    height: 140px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 8px;
    position: relative;
    overflow: hidden;
}

.mw-card-thumb::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 50%;
    transition: all 0.5s;
}

.mw-card:hover .mw-card-thumb::before {
    transform: scale(2.5);
}

.mw-card-thumb-icon {
    width: 64px;
    height: 64px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    color: white;
    z-index: 1;
    backdrop-filter: blur(4px);
}

.mw-card-thumb-label {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
    z-index: 1;
}

.mw-card-class-badge {
    position: absolute;
    top: 14px;
    right: 14px;
    background: rgba(255, 255, 255, 0.95);
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 4px;
    z-index: 1;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.mw-card-body {
    padding: 20px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.mw-card-title {
    font-size: 17px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 6px 0;
    line-height: 1.3;
}

.mw-card-url {
    font-size: 12px;
    margin: 0 0 12px 0;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.mw-card-url a {
    color: #3f66e6;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

.mw-card-url a:hover {
    text-decoration: underline;
}

.mw-card-stats {
    display: flex;
    gap: 6px;
    margin-bottom: 12px;
    flex-wrap: wrap;
}

.mw-stat {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 11px;
    color: #888;
    background: #f5f7fb;
    padding: 4px 10px;
    border-radius: 20px;
}

.mw-stat i {
    font-size: 10px;
    color: #aaa;
}

.mw-card-desc {
    font-size: 13px;
    color: #777;
    line-height: 1.5;
    margin: 0 0 12px 0;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    flex: 1;
}

.mw-card-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin-bottom: 16px;
}

.mw-tag {
    background: #f0f4ff;
    color: #3f66e6;
    padding: 3px 10px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 500;
}

.mw-card-actions {
    display: flex;
    gap: 8px;
    padding-top: 14px;
    border-top: 1px solid #f0f2f5;
}

.mw-action-btn {
    flex: 1;
    padding: 9px 0;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    font-size: 13px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    transition: all 0.3s;
}

.mw-action-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
}

.mw-action-btn.open {
    background: #eef1ff;
    color: #3f66e6;
}

.mw-action-btn.open:hover {
    background: #3f66e6;
    color: white;
}

.mw-action-btn.edit {
    background: #e8faf3;
    color: #06d6a0;
}

.mw-action-btn.edit:hover {
    background: #06d6a0;
    color: white;
}

.mw-action-btn.delete {
    background: #fff0f0;
    color: #dc3545;
}

.mw-action-btn.delete:hover {
    background: #dc3545;
    color: white;
}

/* ==================== EMPTY STATE ==================== */
.mw-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 20px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
}

.mw-empty-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #e8edff, #dff5ef);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 32px;
    color: #3f66e6;
}

.mw-empty h3 {
    font-size: 20px;
    color: #333;
    margin: 0 0 8px 0;
}

.mw-empty p {
    color: #888;
    font-size: 14px;
    margin: 0 0 24px 0;
}

.mw-empty-btn {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: white;
    border: none;
    padding: 12px 28px;
    border-radius: 30px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.mw-empty-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(67, 97, 238, 0.3);
}

/* ==================== MODAL ==================== */
.mw-modal {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    backdrop-filter: blur(6px);
    animation: mwFadeIn 0.25s ease;
}

@keyframes mwFadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.mw-modal-content {
    background: white;
    border-radius: 24px;
    width: 90%;
    max-width: 640px;
    max-height: 90vh;
    overflow-y: auto;
    position: relative;
    animation: mwSlideUp 0.3s ease;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
}

@keyframes mwSlideUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

.mw-modal-header {
    background: linear-gradient(135deg, #3f66e6, #129695, #0ed3a2);
    color: white;
    padding: 28px 30px 22px;
    border-radius: 24px 24px 0 0;
    text-align: center;
    position: relative;
}

.mw-modal-header-icon {
    width: 52px;
    height: 52px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 12px;
    font-size: 22px;
}

.mw-modal-header h2 {
    margin: 0 0 4px 0;
    font-size: 22px;
    font-weight: 700;
    color: white;
}

.mw-modal-header p {
    margin: 0;
    font-size: 14px;
    opacity: 0.85;
}

.mw-close-modal {
    position: absolute;
    right: 16px;
    top: 14px;
    font-size: 28px;
    cursor: pointer;
    color: rgba(255, 255, 255, 0.8);
    line-height: 1;
    transition: all 0.2s;
    z-index: 10;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.15);
}

.mw-close-modal:hover {
    color: white;
    transform: scale(1.1);
    background: rgba(255, 255, 255, 0.3);
}

/* ==================== FORM ==================== */
.mw-form {
    padding: 28px 30px 30px;
}

.mw-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.mw-form-group {
    margin-bottom: 18px;
}

.mw-form-group label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #444;
    font-size: 13px;
}

.mw-form-group label i {
    margin-right: 6px;
    color: #3f66e6;
    font-size: 12px;
}

.mw-form-group input,
.mw-form-group select,
.mw-form-group textarea {
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

.mw-form-group input:focus,
.mw-form-group select:focus,
.mw-form-group textarea:focus {
    outline: none;
    border-color: #3f66e6;
    box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
    background: white;
}

.mw-form-group textarea {
    min-height: 80px;
    resize: vertical;
}

.mw-submit-btn {
    background: linear-gradient(135deg, #3f66e6, #129695, #0ed3a2);
    color: white;
    border: none;
    padding: 13px 30px;
    border-radius: 14px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s;
    margin-top: 6px;
}

.mw-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(67, 97, 238, 0.3);
}

.mw-modal-actions {
    display: flex;
    gap: 12px;
    margin-top: 6px;
}

.mw-modal-actions .mw-submit-btn {
    flex: 1;
}

.mw-cancel-btn {
    padding: 13px 28px;
    border: 2px solid #e0e0e0;
    border-radius: 14px;
    background: white;
    color: #666;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
}

.mw-cancel-btn:hover {
    border-color: #dc3545;
    color: #dc3545;
    background: #fff5f5;
}

/* ==================== LOADING / MESSAGES ==================== */
.loading-spinner-container { text-align: center; padding: 40px; }
.spinner { border: 4px solid #f3f3f3; border-top: 4px solid #3f66e6; border-radius: 50%; width: 40px; height: 40px; animation: spin 1s linear infinite; margin: 0 auto 15px; }
@keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
.error-message, .success-message { padding: 15px 20px; border-radius: 12px; margin: 10px 0; display: flex; align-items: center; gap: 10px; border-left: 4px solid; font-size: 14px; }
.error-message { background: #fff5f5; color: #dc3545; border-left-color: #dc3545; }
.success-message { background: #f0fdf4; color: #16a34a; border-left-color: #16a34a; }

/* ==================== RESPONSIVE ==================== */
@media (max-width: 768px) {
    .mw-hero-banner {
        padding: 20px 22px;
        flex-direction: column;
        align-items: stretch;
    }

    .mw-hero-right {
        flex-direction: column;
    }

    .mw-hero-search {
        min-width: 100%;
    }

    .mw-add-btn {
        justify-content: center;
    }

    .mw-filters-bar {
        border-radius: 16px;
        padding: 12px 16px;
        flex-direction: column;
        align-items: stretch;
    }

    .mw-grid {
        grid-template-columns: 1fr;
    }

    .mw-form-row {
        grid-template-columns: 1fr;
    }

    .mw-modal-content {
        width: 95%;
        margin: 10px;
    }
}

@media (max-width: 480px) {
    .mw-card-actions {
        flex-direction: column;
    }
}
</style>

<script>
(function() {
    console.log("=== Admin Manage Websites ===");

    const API_BASE_URL = 'https://docker-server-c38j.onrender.com';

    // DOM Elements
    const sectionElement = document.getElementById('manage-website-section');
    const loadingElement = document.getElementById('admin-websites-loading');
    const errorElement = document.getElementById('admin-websites-error');
    const successElement = document.getElementById('admin-websites-success');
    const gridElement = document.getElementById('admin-websites-grid');
    const searchInputElement = document.getElementById('admin-website-search');
    const classFilterDropdown = document.getElementById('classFilterDropdown');
    const clearAllFiltersBtn = document.getElementById('clearAllFiltersBtn');
    const activeFiltersList = document.getElementById('activeFiltersList');
    const filterSummaryText = document.getElementById('filterSummaryText');

    // State variables
    let allWebsitesData = [];
    let selectedSubject = 'all';
    let selectedClass = 'all';
    let searchQuery = '';

    function getAuthToken() {
        return localStorage.getItem('access_token');
    }

    function displayError(message) {
        errorElement.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
        errorElement.style.display = 'flex';
        setTimeout(() => errorElement.style.display = 'none', 5000);
    }

    function displaySuccess(message) {
        successElement.innerHTML = `<i class="fas fa-check-circle"></i> ${message}`;
        successElement.style.display = 'flex';
        setTimeout(() => successElement.style.display = 'none', 3000);
    }

    function toggleLoading(show) {
        loadingElement.style.display = show ? 'block' : 'none';
        gridElement.style.display = show ? 'none' : 'grid';
    }

    // API Call: Get all websites
    async function fetchAllWebsites() {
        toggleLoading(true);
        try {
            const token = getAuthToken();
            if (!token) {
                displayError('Authentication token not found');
                toggleLoading(false);
                return;
            }

            const response = await fetch(`${API_BASE_URL}/wb/student/websites`, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                }
            });

            if (!response.ok) {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }

            const result = await response.json();
            console.log('Websites fetched:', result);

            if (result.success && result.websites) {
                allWebsitesData = result.websites.map(website => ({
                    id: website.id,
                    doc_id: website.doc_id,
                    title: website.title,
                    url: website.url,
                    subject: website.subject,
                    class: website.class,
                    description: website.description,
                    tags: website.tags || [],
                    pages_indexed: website.pages_indexed,
                    chunks_count: website.chunks_count,
                    study_time_minutes: website.study_time_minutes,
                    last_studied: website.last_studied,
                    created_at: website.created_at
                }));
                applyFiltersAndRender();
                displaySuccess(`Loaded ${allWebsitesData.length} websites`);
            } else {
                throw new Error(result.message || 'Failed to load websites');
            }
        } catch (error) {
            console.error('Error fetching websites:', error);
            displayError(`Failed to load websites: ${error.message}`);
        } finally {
            toggleLoading(false);
        }
    }

    // API Call: Add website
    async function addNewWebsite(websiteData) {
        try {
            const token = getAuthToken();
            if (!token) {
                displayError('Authentication token not found');
                return false;
            }

            const payload = {
                url: websiteData.url,
                title: websiteData.title,
                subject: websiteData.subject,
                class: parseInt(websiteData.class),
                description: websiteData.description,
                tags: websiteData.tags
            };

            const response = await fetch(`${API_BASE_URL}/wb/admin/website/index`, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(payload)
            });

            const result = await response.json();

            if (response.ok && result.success) {
                displaySuccess(`Website "${websiteData.title}" added successfully!`);
                await fetchAllWebsites();
                return true;
            } else {
                throw new Error(result.message || 'Failed to add website');
            }
        } catch (error) {
            console.error('Error adding website:', error);
            displayError(`Failed to add website: ${error.message}`);
            return false;
        }
    }

    // API Call: Update website
    async function updateExistingWebsite(docId, websiteData) {
        try {
            const token = getAuthToken();
            if (!token) {
                displayError('Authentication token not found');
                return false;
            }

            const payload = {
                title: websiteData.title,
                subject: websiteData.subject,
                class: parseInt(websiteData.class),
                description: websiteData.description,
                tags: JSON.stringify(websiteData.tags)
            };

            const response = await fetch(`${API_BASE_URL}/wb/admin/website/${docId}`, {
                method: 'PUT',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(payload)
            });

            const result = await response.json();

            if (response.ok && result.success) {
                displaySuccess(`Website "${websiteData.title}" updated successfully!`);
                await fetchAllWebsites();
                return true;
            } else {
                throw new Error(result.message || 'Failed to update website');
            }
        } catch (error) {
            console.error('Error updating website:', error);
            displayError(`Failed to update website: ${error.message}`);
            return false;
        }
    }

// API Call: Delete website
async function deleteExistingWebsite(docId, title) {
    try {
        const token = getAuthToken();
        if (!token) {
            displayError('Authentication token not found');
            return false;
        }

        const response = await fetch(`${API_BASE_URL}/wb/admin/website/${docId}`, {
            method: 'DELETE',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json'
            }
        });

        const result = await response.json();

        if (response.ok && result.success) {
            displaySuccess(`Website "${title}" deleted successfully!`);
            await fetchAllWebsites();
            return true;
        } else {
            throw new Error(result.message || 'Failed to delete website');
        }
    } catch (error) {
        console.error('Error deleting website:', error);
        displayError(`Failed to delete website: ${error.message}`);
        return false;
    }
}

    function applyFiltersAndRender() {
        let filteredWebsites = [...allWebsitesData];

        if (selectedSubject !== 'all') {
            filteredWebsites = filteredWebsites.filter(website => website.subject === selectedSubject);
        }

        if (selectedClass !== 'all') {
            filteredWebsites = filteredWebsites.filter(website => {
                return parseInt(website.class) === parseInt(selectedClass);
            });
        }

        if (searchQuery.trim()) {
            const searchTerm = searchQuery.toLowerCase().trim();
            filteredWebsites = filteredWebsites.filter(website =>
                website.title?.toLowerCase().includes(searchTerm) ||
                website.url?.toLowerCase().includes(searchTerm) ||
                website.subject?.toLowerCase().includes(searchTerm) ||
                website.description?.toLowerCase().includes(searchTerm)
            );
        }

        renderWebsitesList(filteredWebsites);
        updateActiveFiltersDisplay();
        updateFilterSummaryDisplay(filteredWebsites.length);
    }

    function updateFilterSummaryDisplay(displayCount) {
        if (filterSummaryText) {
            let summaryHtml = `<i class="fas fa-chart-bar"></i> Showing <strong>${displayCount}</strong> of <strong>${allWebsitesData.length}</strong> websites`;

            if (selectedSubject !== 'all') {
                summaryHtml += ` &middot; Subject: <strong>${selectedSubject}</strong>`;
            }

            if (selectedClass !== 'all') {
                summaryHtml += ` &middot; Class: <strong>${selectedClass}</strong>`;
            }

            if (searchQuery.trim()) {
                summaryHtml += ` &middot; Search: <strong>"${escapeHtmlContent(searchQuery)}"</strong>`;
            }

            filterSummaryText.innerHTML = summaryHtml;
        }
    }

    // Subject-specific gradients for card thumbnails
    const subjectGradients = {
        'Mathematics': 'linear-gradient(135deg, #667eea, #764ba2)',
        'Science': 'linear-gradient(135deg, #06d6a0, #0891b2)',
        'English': 'linear-gradient(135deg, #8b5cf6, #6d28d9)',
        'History': 'linear-gradient(135deg, #f97316, #dc2626)',
        'Geography': 'linear-gradient(135deg, #14b8a6, #0d9488)',
        'Computer Science': 'linear-gradient(135deg, #3b82f6, #1d4ed8)',
        'General': 'linear-gradient(135deg, #6366f1, #4f46e5)',
        'Research': 'linear-gradient(135deg, #a855f7, #7c3aed)'
    };

    function renderWebsitesList(websites) {
        if (!websites || websites.length === 0) {
            gridElement.innerHTML = `
                <div class="mw-empty">
                    <div class="mw-empty-icon"><i class="fas fa-globe"></i></div>
                    <h3>No websites found</h3>
                    <p>Try adjusting your filters or add a new website</p>
                    <button class="mw-empty-btn" onclick="document.getElementById('addNewWebsiteBtn').click()">
                        <i class="fas fa-plus"></i> Add Your First Website
                    </button>
                </div>
            `;
            return;
        }

        let html = '';
        websites.forEach(website => {
            const tagsHtml = (website.tags || []).map(tag => `<span class="mw-tag">${escapeHtmlContent(tag)}</span>`).join('');
            const subjectIcon = getSubjectIconClass(website.subject);
            const classColor = getClassColorCode(website.class);
            const gradient = subjectGradients[website.subject] || subjectGradients['General'];

            html += `
                <div class="mw-card">
                    <div class="mw-card-thumb" style="background: ${gradient};">
                        <div class="mw-card-thumb-icon">
                            <i class="fas ${subjectIcon}"></i>
                        </div>
                        <div class="mw-card-thumb-label">${escapeHtmlContent(website.subject || 'General')}</div>
                        <div class="mw-card-class-badge" style="color: ${classColor};">
                            <i class="fas fa-graduation-cap"></i> Class ${website.class}
                        </div>
                    </div>
                    <div class="mw-card-body">
                        <h4 class="mw-card-title">${escapeHtmlContent(website.title)}</h4>
                        <p class="mw-card-url"><a href="${website.url}" target="_blank"><i class="fas fa-external-link-alt"></i> ${escapeHtmlContent(website.url)}</a></p>
                        <div class="mw-card-stats">
                            <span class="mw-stat"><i class="fas fa-book"></i> ${escapeHtmlContent(website.subject || 'General')}</span>
                            <span class="mw-stat"><i class="fas fa-file-alt"></i> ${website.pages_indexed || 0} sections</span>
                            <span class="mw-stat"><i class="fas fa-puzzle-piece"></i> ${website.chunks_count || 0} chunks</span>
                            <span class="mw-stat"><i class="fas fa-calendar"></i> ${formatDateString(website.created_at)}</span>
                        </div>
                        <p class="mw-card-desc">${escapeHtmlContent(website.description || 'No description provided')}</p>
                        ${tagsHtml ? `<div class="mw-card-tags">${tagsHtml}</div>` : ''}
                        <div class="mw-card-actions">
                            <button class="mw-action-btn open" onclick="window.open('${website.url}', '_blank')">
                                <i class="fas fa-external-link-alt"></i> Open
                            </button>
                            <button class="mw-action-btn edit" onclick="editWebsiteById('${website.doc_id}')">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="mw-action-btn delete" onclick="deleteWebsiteById('${website.doc_id}', '${escapeHtmlContent(website.title)}')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            `;
        });
        gridElement.innerHTML = html;
    }

    function getClassColorCode(classNum) {
        const colors = {
            1: '#ff6b6b', 2: '#4ecdc4', 3: '#45b7d1', 4: '#96ceb4',
            5: '#feca57', 6: '#ff9f4a', 7: '#ff6b6b', 8: '#4ecdc4',
            9: '#45b7d1', 10: '#96ceb4', 11: '#feca57', 12: '#ff9f4a'
        };
        return colors[classNum] || '#6c757d';
    }

    function getSubjectIconClass(subject) {
        const icons = {
            'Mathematics': 'fa-calculator',
            'Science': 'fa-flask',
            'English': 'fa-book',
            'History': 'fa-landmark',
            'Geography': 'fa-map-marked-alt',
            'Computer Science': 'fa-laptop-code',
            'Research': 'fa-graduation-cap',
            'General': 'fa-globe'
        };
        return icons[subject] || 'fa-globe';
    }

    function formatDateString(dateStr) {
        if (!dateStr) return 'N/A';
        const date = new Date(dateStr);
        return date.toLocaleDateString('en-IN', { day: 'numeric', month: 'short', year: 'numeric' });
    }

    function escapeHtmlContent(str) {
        if (!str) return '';
        return String(str).replace(/[&<>"']/g, function(match) {
            const map = { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' };
            return map[match];
        });
    }

    function updateActiveFiltersDisplay() {
        if (!activeFiltersList) return;
        activeFiltersList.innerHTML = '';
        let hasActiveFilters = false;

        if (selectedSubject !== 'all') {
            hasActiveFilters = true;
            activeFiltersList.innerHTML += `<span class="mw-active-tag">
                <i class="fas fa-book"></i> ${selectedSubject} <i class="fas fa-times" onclick="removeFilterByType('subject')"></i>
            </span>`;
        }

        if (selectedClass !== 'all') {
            hasActiveFilters = true;
            activeFiltersList.innerHTML += `<span class="mw-active-tag">
                <i class="fas fa-graduation-cap"></i> Class ${selectedClass} <i class="fas fa-times" onclick="removeFilterByType('class')"></i>
            </span>`;
        }

        if (searchQuery.trim()) {
            hasActiveFilters = true;
            activeFiltersList.innerHTML += `<span class="mw-active-tag">
                <i class="fas fa-search"></i> "${escapeHtmlContent(searchQuery)}" <i class="fas fa-times" onclick="removeFilterByType('search')"></i>
            </span>`;
        }

        if (clearAllFiltersBtn) clearAllFiltersBtn.style.display = hasActiveFilters ? 'inline-block' : 'none';
    }

    window.removeFilterByType = function(type) {
        if (type === 'subject') {
            selectedSubject = 'all';
            document.querySelectorAll('.mw-filter-chip').forEach(btn => {
                btn.classList.remove('active');
                if(btn.dataset.subject === 'all') btn.classList.add('active');
            });
        } else if (type === 'class') {
            selectedClass = 'all';
            if (classFilterDropdown) classFilterDropdown.value = 'all';
        } else if (type === 'search') {
            searchQuery = '';
            if (searchInputElement) searchInputElement.value = '';
        }
        applyFiltersAndRender();
    };

    window.deleteWebsiteById = function(docId, title) {
        deleteExistingWebsite(docId, title);
    };

    window.editWebsiteById = function(docId) {
        const website = allWebsitesData.find(w => w.doc_id === docId);
        if (!website) {
            displayError('Website not found');
            return;
        }

        document.getElementById('editDocId').value = website.doc_id;
        document.getElementById('editWebsiteTitle').value = website.title || '';
        document.getElementById('editWebsiteUrl').value = website.url || '';
        document.getElementById('editWebsiteSubject').value = website.subject || '';
        document.getElementById('editWebsiteClassSelect').value = website.class || '';
        document.getElementById('editWebsiteDescription').value = website.description || '';
        document.getElementById('editWebsiteTags').value = (website.tags || []).join(', ');

        document.getElementById('editWebsiteModal').style.display = 'flex';
    };

    window.closeAddWebsiteModal = function() {
        document.getElementById('addWebsiteModal').style.display = 'none';
        document.getElementById('addWebsiteForm').reset();
    };

    window.closeEditWebsiteModal = function() {
        document.getElementById('editWebsiteModal').style.display = 'none';
        document.getElementById('editWebsiteForm').reset();
    };

    // Event Listeners
    document.getElementById('addNewWebsiteBtn').addEventListener('click', () => {
        document.getElementById('addWebsiteModal').style.display = 'flex';
    });

    document.getElementById('addWebsiteForm').addEventListener('submit', async (e) => {
        e.preventDefault();

        const tagsInput = document.getElementById('websiteTagsInput').value;
        const tags = tagsInput ? tagsInput.split(',').map(t => t.trim()).filter(t => t) : [];

        const websiteData = {
            title: document.getElementById('websiteTitle').value.trim(),
            url: document.getElementById('websiteUrl').value.trim(),
            subject: document.getElementById('websiteSubject').value,
            class: document.getElementById('websiteClassSelect').value,
            description: document.getElementById('websiteDescriptionText').value.trim(),
            tags: tags
        };

        if (!websiteData.title || !websiteData.url || !websiteData.subject || !websiteData.class) {
            displayError('Please fill all required fields');
            return;
        }

        const submitBtn = document.getElementById('submitWebsiteBtn');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Adding...';

        const success = await addNewWebsite(websiteData);

        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class="fas fa-plus-circle"></i> Add Website';

        if (success) {
            closeAddWebsiteModal();
        }
    });

    document.getElementById('editWebsiteForm').addEventListener('submit', async (e) => {
        e.preventDefault();

        const docId = document.getElementById('editDocId').value;
        const tagsInput = document.getElementById('editWebsiteTags').value;
        const tags = tagsInput ? tagsInput.split(',').map(t => t.trim()).filter(t => t) : [];

        const websiteData = {
            title: document.getElementById('editWebsiteTitle').value.trim(),
            url: document.getElementById('editWebsiteUrl').value.trim(),
            subject: document.getElementById('editWebsiteSubject').value,
            class: document.getElementById('editWebsiteClassSelect').value,
            description: document.getElementById('editWebsiteDescription').value.trim(),
            tags: tags
        };

        if (!websiteData.title || !websiteData.url || !websiteData.subject || !websiteData.class) {
            displayError('Please fill all required fields');
            return;
        }

        const updateBtn = document.getElementById('updateWebsiteBtn');
        updateBtn.disabled = true;
        updateBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Updating...';

        const success = await updateExistingWebsite(docId, websiteData);

        updateBtn.disabled = false;
        updateBtn.innerHTML = '<i class="fas fa-save"></i> Update Website';

        if (success) {
            closeEditWebsiteModal();
        }
    });

    // Subject filter event listeners
    document.querySelectorAll('.mw-filter-chip').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.mw-filter-chip').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            selectedSubject = btn.dataset.subject;
            applyFiltersAndRender();
        });
    });

    // Class filter dropdown
    if (classFilterDropdown) {
        classFilterDropdown.addEventListener('change', (e) => {
            selectedClass = e.target.value;
            applyFiltersAndRender();
        });
    }

    // Search input filter
    if (searchInputElement) {
        searchInputElement.addEventListener('input', (e) => {
            searchQuery = e.target.value;
            applyFiltersAndRender();
        });
    }

    // Clear all filters button
    if (clearAllFiltersBtn) {
        clearAllFiltersBtn.addEventListener('click', () => {
            selectedSubject = 'all';
            selectedClass = 'all';
            searchQuery = '';

            document.querySelectorAll('.mw-filter-chip').forEach(btn => {
                btn.classList.remove('active');
                if(btn.dataset.subject === 'all') btn.classList.add('active');
            });

            if (classFilterDropdown) classFilterDropdown.value = 'all';
            if (searchInputElement) searchInputElement.value = '';

            applyFiltersAndRender();
        });
    }

    // Modal close on outside click
    window.addEventListener('click', function(event) {
        if (event.target.classList.contains('mw-modal')) {
            if (event.target.id === 'addWebsiteModal') closeAddWebsiteModal();
            if (event.target.id === 'editWebsiteModal') closeEditWebsiteModal();
        }
    });

    // Initialize the page
    function initializePage() {
        if (sectionElement && sectionElement.style.display !== 'none') {
            if (allWebsitesData.length === 0) {
                fetchAllWebsites();
            }
        }
    }

    const observer = new MutationObserver(initializePage);
    if (sectionElement) observer.observe(sectionElement, { attributes: true, attributeFilter: ['style'] });
    setTimeout(initializePage, 300);
})();
</script>
