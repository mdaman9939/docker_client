<!-- Repository Section -->
<div id="repository-section" class="content-section" style="display: none;">

<style>
/* ===== AI WORLD STYLE FOR REPOSITORY ===== */
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
    --aiw-purple: #7209b7;
}

/* Hero Banner */
.repo-hero {
    background: linear-gradient(135deg, #3f66e6 0%, #0ed3a2 50%, #129695 100%);
    border-radius: 20px;
    padding: 30px 40px;
    color: #fff;
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
}

.repo-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(255,255,255,0.12) 0%, transparent 70%);
    border-radius: 50%;
}

.repo-hero::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: 10%;
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
    border-radius: 50%;
}

.repo-hero-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 24px;
}

.repo-hero-left {
    display: flex;
    align-items: center;
    gap: 24px;
}

.repo-hero-icon {
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

.repo-hero-info h2 {
    font-size: 28px;
    font-weight: 700;
    margin: 0 0 6px;
}

.repo-hero-info p {
    margin: 0;
    opacity: 0.85;
    font-size: 14px;
}

.repo-hero-badge {
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

.repo-action-buttons {
    display: flex;
    gap: 12px;
}

.repo-btn {
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
    font-family: 'Poppins', sans-serif;
}

.repo-btn:hover {
    background: rgba(255,255,255,0.25);
    border-color: rgba(255,255,255,0.6);
}

/* Stats Row */
.repo-stats-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.repo-stat-card {
    background: var(--aiw-card-bg);
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: flex;
    align-items: center;
    gap: 16px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.repo-stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(63,102,230,0.12);
}

.repo-stat-icon {
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

.repo-stat-info h4 {
    font-size: 13px;
    color: var(--aiw-text-light);
    margin: 0 0 4px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.repo-stat-info .repo-stat-val {
    font-size: 28px;
    font-weight: 700;
    color: var(--aiw-text-dark);
    line-height: 1;
}

/* Filter Bar */
.repo-filter-bar {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 24px;
    padding: 16px 20px;
    background: var(--aiw-card-bg);
    border-radius: 16px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}

.repo-filter-group {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}

.repo-filter-btn {
    padding: 8px 18px;
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

.repo-filter-btn:hover {
    border-color: var(--aiw-primary);
    color: var(--aiw-primary);
}

.repo-filter-btn.active {
    background: var(--aiw-primary);
    color: #fff;
    border-color: var(--aiw-primary);
}

.repo-search-box {
    margin-left: auto;
    position: relative;
    min-width: 260px;
}

.repo-search-box input {
    padding: 8px 16px 8px 38px;
    border-radius: 24px;
    border: 1.5px solid var(--aiw-border);
    font-size: 13px;
    width: 100%;
    font-family: 'Poppins', sans-serif;
    outline: none;
    transition: all 0.2s;
}

.repo-search-box input:focus {
    border-color: var(--aiw-primary);
    box-shadow: 0 0 0 3px rgba(63,102,230,0.1);
}

.repo-search-box i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--aiw-text-light);
    font-size: 13px;
}

/* Resource Cards Grid */
.repo-resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
    gap: 24px;
    margin-bottom: 30px;
}

.repo-resource-card {
    background: var(--aiw-card-bg);
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    position: relative;
}

.repo-resource-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(63,102,230,0.12);
}

.repo-card-header {
    padding: 20px;
    background: linear-gradient(135deg, rgba(63,102,230,0.05), rgba(14,211,162,0.05));
    border-bottom: 1px solid var(--aiw-border);
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}

.repo-type-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    background: #fff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.repo-type-textbook { color: #3f66e6; }
.repo-type-notes { color: #0ed3a2; }
.repo-type-question { color: #ffd166; }
.repo-type-video { color: #ef476f; }
.repo-type-worksheet { color: #7209b7; }
.repo-type-formula { color: #129695; }

.repo-card-actions {
    display: flex;
    gap: 8px;
}

.repo-card-action-btn {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    border: none;
    background: rgba(255,255,255,0.9);
    cursor: pointer;
    font-size: 14px;
    transition: all 0.2s;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.repo-card-action-btn.save-btn {
    color: var(--aiw-warning);
}

.repo-card-action-btn.save-btn:hover {
    background: var(--aiw-warning);
    color: #fff;
}

.repo-card-action-btn.saved {
    background: var(--aiw-warning);
    color: #fff;
}

.repo-card-body {
    padding: 20px;
}

.repo-resource-title {
    font-size: 18px;
    font-weight: 700;
    color: var(--aiw-text-dark);
    margin: 0 0 8px;
    line-height: 1.4;
}

.repo-resource-subject {
    display: inline-block;
    padding: 4px 12px;
    background: var(--aiw-active);
    color: var(--aiw-primary);
    border-radius: 12px;
    font-size: 11px;
    font-weight: 600;
    margin-bottom: 12px;
}

.repo-resource-desc {
    font-size: 13px;
    color: var(--aiw-text-light);
    line-height: 1.5;
    margin-bottom: 16px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.repo-resource-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    margin-bottom: 16px;
    padding-bottom: 16px;
    border-bottom: 1px solid var(--aiw-border);
}

.repo-meta-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: var(--aiw-text-light);
}

.repo-meta-item i {
    color: var(--aiw-primary);
    font-size: 12px;
}

.repo-progress-section {
    margin-top: 12px;
}

.repo-progress-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
    font-size: 12px;
    color: var(--aiw-text-light);
}

.repo-progress-bar {
    height: 6px;
    background: var(--aiw-border);
    border-radius: 3px;
    overflow: hidden;
}

.repo-progress-fill {
    height: 100%;
    background: linear-gradient(90deg, var(--aiw-primary), var(--aiw-primary-light));
    border-radius: 3px;
    transition: width 0.3s ease;
}

.repo-rating {
    display: flex;
    align-items: center;
    gap: 4px;
    font-size: 12px;
    color: var(--aiw-warning);
}

.repo-rating i {
    color: #ffd166;
}

/* Pagination */
.repo-pagination-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background: var(--aiw-card-bg);
    border-radius: 16px;
    flex-wrap: wrap;
    gap: 16px;
}

.repo-pagination-info {
    font-size: 13px;
    color: var(--aiw-text-light);
}

.repo-pagination-controls {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}

.repo-page-btn {
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

.repo-page-btn:hover:not(:disabled) {
    background: var(--aiw-primary);
    color: #fff;
    border-color: var(--aiw-primary);
}

.repo-page-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.repo-page-numbers {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
}

.repo-page-number {
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

.repo-page-number:hover {
    background: var(--aiw-primary);
    color: #fff;
    border-color: var(--aiw-primary);
}

.repo-page-number.active {
    background: var(--aiw-primary);
    color: #fff;
    border-color: var(--aiw-primary);
}

.repo-per-page-select {
    padding: 6px 12px;
    border-radius: 8px;
    border: 1px solid var(--aiw-border);
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    background: #fff;
    color: var(--aiw-text-dark);
}

/* Upload Modal */
.repo-modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(15,21,53,0.8);
    backdrop-filter: blur(4px);
    z-index: 10000;
    align-items: center;
    justify-content: center;
}

.repo-modal-overlay.open {
    display: flex;
}

.repo-modal {
    background: #fff;
    border-radius: 24px;
    padding: 32px;
    max-width: 550px;
    width: 92%;
    max-height: 85vh;
    overflow-y: auto;
    box-shadow: 0 24px 48px rgba(15,21,53,0.2);
}

.repo-modal h3 {
    font-size: 24px;
    font-weight: 700;
    color: var(--aiw-text-dark);
    margin: 0 0 8px;
}

.repo-modal p {
    font-size: 14px;
    color: var(--aiw-text-light);
    margin: 0 0 24px;
}

.repo-form-group {
    margin-bottom: 20px;
}

.repo-form-group label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    color: var(--aiw-text-dark);
    margin-bottom: 8px;
}

.repo-form-group input,
.repo-form-group select,
.repo-form-group textarea {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid var(--aiw-border);
    border-radius: 12px;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    transition: all 0.2s;
}

.repo-form-group input:focus,
.repo-form-group select:focus,
.repo-form-group textarea:focus {
    border-color: var(--aiw-primary);
    box-shadow: 0 0 0 3px rgba(63,102,230,0.1);
}

.repo-file-upload {
    border: 2px dashed var(--aiw-border);
    border-radius: 12px;
    padding: 30px;
    text-align: center;
    cursor: pointer;
    transition: all 0.2s;
}

.repo-file-upload:hover {
    border-color: var(--aiw-primary);
    background: rgba(63,102,230,0.02);
}

.repo-file-upload i {
    font-size: 40px;
    color: var(--aiw-text-light);
    margin-bottom: 12px;
}

.repo-file-upload p {
    margin: 0;
    font-size: 13px;
}

.repo-file-name {
    margin-top: 12px;
    font-size: 12px;
    color: var(--aiw-primary);
}

.repo-modal-actions {
    display: flex;
    gap: 12px;
    justify-content: flex-end;
    margin-top: 24px;
}

.repo-modal-cancel {
    padding: 10px 24px;
    border-radius: 12px;
    border: 1px solid var(--aiw-border);
    background: #fff;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    color: var(--aiw-text-light);
}

.repo-modal-submit {
    padding: 10px 28px;
    border-radius: 12px;
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-light));
    color: #fff;
    border: none;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
}

/* Loading & Empty */
.repo-loading {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 60px;
    gap: 16px;
}

.repo-spinner {
    width: 40px;
    height: 40px;
    border: 3px solid var(--aiw-border);
    border-top-color: var(--aiw-primary);
    border-radius: 50%;
    animation: repo-spin 0.8s linear infinite;
}

@keyframes repo-spin {
    to { transform: rotate(360deg); }
}

.repo-empty {
    text-align: center;
    padding: 60px;
    color: var(--aiw-text-light);
}

.repo-empty i {
    font-size: 64px;
    margin-bottom: 16px;
    opacity: 0.3;
}

/* Toast */
.repo-toast {
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

.repo-toast.error {
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

/* Responsive */
@media (max-width: 900px) {
    .repo-hero {
        padding: 24px;
    }
    .repo-hero-content {
        flex-direction: column;
        text-align: center;
    }
    .repo-hero-left {
        flex-direction: column;
    }
    .repo-stats-row {
        grid-template-columns: repeat(2, 1fr);
    }
    .repo-resources-grid {
        grid-template-columns: 1fr;
    }
    .repo-filter-bar {
        flex-direction: column;
        align-items: stretch;
    }
    .repo-search-box {
        margin-left: 0;
    }
}

@media (max-width: 560px) {
    .repo-stats-row {
        grid-template-columns: 1fr;
    }
    .repo-pagination-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
}
</style>

<!-- Hero Banner -->
<div class="repo-hero">
    <div class="repo-hero-content">
        <div class="repo-hero-left">
            <div class="repo-hero-icon">
                <i class="fas fa-book-open"></i>
            </div>
            <div class="repo-hero-info">
                <h2>Repository</h2>
                <p>Your AI-powered study resource library</p>
                <div class="repo-hero-badge">
                    <i class="fas fa-database"></i>
                    Curated Learning Materials
                </div>
            </div>
        </div>
        <div class="repo-action-buttons">
            <button class="repo-btn" id="uploadResourceBtn">
                <i class="fas fa-upload"></i> Upload
            </button>
            <button class="repo-btn" id="savedResourcesBtn">
                <i class="fas fa-bookmark"></i> Saved
            </button>
        </div>
    </div>
</div>

<!-- Stats Row -->
<div class="repo-stats-row">
    <div class="repo-stat-card">
        <div class="repo-stat-icon" style="background: linear-gradient(135deg, #3f66e6, #2b4fc1);">
            <i class="fas fa-folder-open"></i>
        </div>
        <div class="repo-stat-info">
            <h4>Total Resources</h4>
            <div class="repo-stat-val" id="totalResources">--</div>
        </div>
    </div>
    <div class="repo-stat-card">
        <div class="repo-stat-icon" style="background: linear-gradient(135deg, #0ed3a2, #0cb892);">
            <i class="fas fa-check-circle"></i>
        </div>
        <div class="repo-stat-info">
            <h4>Completed</h4>
            <div class="repo-stat-val" id="completedResources">--</div>
        </div>
    </div>
    <div class="repo-stat-card">
        <div class="repo-stat-icon" style="background: linear-gradient(135deg, #ffd166, #f9c74f);">
            <i class="fas fa-bookmark"></i>
        </div>
        <div class="repo-stat-info">
            <h4>Saved</h4>
            <div class="repo-stat-val" id="savedResources">--</div>
        </div>
    </div>
    <div class="repo-stat-card">
        <div class="repo-stat-icon" style="background: linear-gradient(135deg, #129695, #0f7c7b);">
            <i class="fas fa-clock"></i>
        </div>
        <div class="repo-stat-info">
            <h4>Study Hours</h4>
            <div class="repo-stat-val" id="studyHours">--</div>
        </div>
    </div>
</div>

<!-- Filter Bar -->
<div class="repo-filter-bar">
    <div class="repo-filter-group">
        <button class="repo-filter-btn active" data-filter-type="all">All Types</button>
        <button class="repo-filter-btn" data-filter-type="Textbook">Textbook</button>
        <button class="repo-filter-btn" data-filter-type="Notes">Notes</button>
        <button class="repo-filter-btn" data-filter-type="Question Paper">Question Paper</button>
        <button class="repo-filter-btn" data-filter-type="Video">Video</button>
        <button class="repo-filter-btn" data-filter-type="Worksheet">Worksheet</button>
        <button class="repo-filter-btn" data-filter-type="Formula Sheet">Formula Sheet</button>
    </div>
    <div class="repo-filter-group">
        <button class="repo-filter-btn" data-filter-class="all">All Classes</button>
        <button class="repo-filter-btn" data-filter-class="10">Class 10</button>
        <button class="repo-filter-btn" data-filter-class="9">Class 9</button>
        <button class="repo-filter-btn" data-filter-class="8">Class 8</button>
    </div>
    <div class="repo-search-box">
        <i class="fas fa-search"></i>
        <input type="text" id="searchResourceInput" placeholder="Search textbooks, notes, videos...">
    </div>
</div>

<!-- Resources Grid -->
<div class="repo-resources-grid" id="resourcesGrid">
    <div class="repo-loading">
        <div class="repo-spinner"></div>
        <p>Loading resources...</p>
    </div>
</div>

<!-- Pagination -->
<div class="repo-pagination-container" id="paginationContainer">
    <div class="repo-pagination-info" id="paginationInfo">
        Showing 0 to 0 of 0 entries
    </div>
    <div class="repo-pagination-controls">
        <button class="repo-page-btn" id="firstPageBtn" disabled>
            <i class="fas fa-angle-double-left"></i>
        </button>
        <button class="repo-page-btn" id="prevPageBtn" disabled>
            <i class="fas fa-angle-left"></i>
        </button>
        <div class="repo-page-numbers" id="pageNumbersContainer"></div>
        <button class="repo-page-btn" id="nextPageBtn" disabled>
            <i class="fas fa-angle-right"></i>
        </button>
        <button class="repo-page-btn" id="lastPageBtn" disabled>
            <i class="fas fa-angle-double-right"></i>
        </button>
        <select class="repo-per-page-select" id="perPageSelect">
            <option value="6">6 per page</option>
            <option value="12">12 per page</option>
            <option value="24">24 per page</option>
        </select>
    </div>
</div>

<!-- Upload Modal -->
<div class="repo-modal-overlay" id="uploadModal">
    <div class="repo-modal">
        <h3>Upload Resource</h3>
        <p>Share your study materials with the community</p>
        <form id="uploadForm">
            <div class="repo-form-group">
                <label>Resource Title *</label>
                <input type="text" id="resourceTitle" placeholder="e.g., NCERT Mathematics Textbook" required>
            </div>
            <div class="repo-form-group">
                <label>Resource Type *</label>
                <select id="resourceType" required>
                    <option value="">Select type</option>
                    <option value="Textbook">Textbook</option>
                    <option value="Notes">Notes</option>
                    <option value="Question Paper">Question Paper</option>
                    <option value="Video">Video</option>
                    <option value="Worksheet">Worksheet</option>
                    <option value="Formula Sheet">Formula Sheet</option>
                </select>
            </div>
            <div class="repo-form-group">
                <label>Subject *</label>
                <select id="resourceSubject" required>
                    <option value="">Select subject</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Science">Science</option>
                    <option value="English">English</option>
                    <option value="Social Studies">Social Studies</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Computer Science">Computer Science</option>
                </select>
            </div>
            <div class="repo-form-group">
                <label>Class *</label>
                <select id="resourceClass" required>
                    <option value="">Select class</option>
                    <option value="8">Class 8</option>
                    <option value="9">Class 9</option>
                    <option value="10">Class 10</option>
                </select>
            </div>
            <div class="repo-form-group">
                <label>Description</label>
                <textarea id="resourceDesc" rows="3" placeholder="Brief description of the resource..."></textarea>
            </div>
            <div class="repo-form-group">
                <label>Pages / Duration</label>
                <input type="text" id="resourceMeta" placeholder="e.g., 328 pg or 1h 20m">
            </div>
            <div class="repo-file-upload" id="fileUploadArea">
                <i class="fas fa-cloud-upload-alt"></i>
                <p>Click to upload or drag and drop</p>
                <p style="font-size: 11px; margin-top: 8px;">PDF, DOC, MP4, Images (Max 50MB)</p>
                <input type="file" id="resourceFile" style="display: none;">
            </div>
            <div id="fileNameDisplay" class="repo-file-name" style="display: none;"></div>
            <div class="repo-modal-actions">
                <button type="button" class="repo-modal-cancel" id="closeUploadModal">Cancel</button>
                <button type="submit" class="repo-modal-submit">Upload Resource</button>
            </div>
        </form>
    </div>
</div>

<script>
(function() {
    'use strict';

    // Mock data for demonstration
    let allResources = [
        { id: 1, title: "NCERT Mathematics Textbook", type: "Textbook", subject: "Mathematics", class: 10, description: "Complete Class 10 NCERT Math textbook with all 15 chapters.", pages: "328 pg", duration: "~24h", rating: 4.8, progress: 88, saved: false, completed: false },
        { id: 2, title: "Science — Physics Formula Sheet", type: "Formula Sheet", subject: "Science", class: 10, description: "All important physics formulas for Class 10 board exam preparation.", pages: "12 pg", duration: "~1h", rating: 4.9, progress: 100, saved: false, completed: true },
        { id: 3, title: "Previous Year Question Papers — Math", type: "Question Paper", subject: "Mathematics", class: 10, description: "5 years of CBSE board math papers with solutions (2021-2025).", pages: "85 pg", duration: "~8h", rating: 4.7, progress: 45, saved: false, completed: false },
        { id: 4, title: "English Literature — Prose & Poetry Notes", type: "Notes", subject: "English", class: 10, description: "Detailed chapter-wise notes for First Flight and Footprints without Feet.", pages: "64 pg", duration: "~5h", rating: 4.5, progress: 70, saved: false, completed: false },
        { id: 5, title: "Chemical Reactions & Equations", type: "Video", subject: "Science", class: 10, description: "Video lesson on types of chemical reactions with real-life examples.", pages: "", duration: "45 min", rating: 4.9, progress: 100, saved: false, completed: true },
        { id: 6, title: "India & the Contemporary World II", type: "Textbook", subject: "Social Studies", class: 10, description: "Complete Social Studies history textbook for Class 10 NCERT.", pages: "196 pg", duration: "~14h", rating: 4.4, progress: 60, saved: false, completed: false },
        { id: 7, title: "Hindi Vyakaran Worksheet", type: "Worksheet", subject: "Hindi", class: 10, description: "Practice worksheet covering sandhi, samas, alankar, and ras.", pages: "20 pg", duration: "~3h", rating: 4.2, progress: 30, saved: false, completed: false },
        { id: 8, title: "Python Programming — Beginner Guide", type: "Notes", subject: "Computer Science", class: 10, description: "Introduction to Python: variables, loops, functions, and file handling.", pages: "48 pg", duration: "~6h", rating: 4.8, progress: 55, saved: false, completed: false },
        { id: 9, title: "Trigonometry — Video Masterclass", type: "Video", subject: "Mathematics", class: 10, description: "In-depth video covering all trigonometric ratios, identities, and applications.", pages: "", duration: "1h 20m", rating: 4.7, progress: 20, saved: false, completed: false }
    ];

    let currentFilterType = 'all';
    let currentFilterClass = 'all';
    let currentSearchTerm = '';
    let savedOnly = false;
    let currentPage = 1;
    let itemsPerPage = 6;
    let currentFilteredData = [];

    // Load saved resources from localStorage
    function loadSavedResources() {
        const saved = localStorage.getItem('savedResources');
        if (saved) {
            const savedIds = JSON.parse(saved);
            allResources.forEach(r => {
                r.saved = savedIds.includes(r.id);
            });
        }
    }

    function saveSavedResources() {
        const savedIds = allResources.filter(r => r.saved).map(r => r.id);
        localStorage.setItem('savedResources', JSON.stringify(savedIds));
        updateStats();
    }

    function updateStats() {
        const total = allResources.length;
        const completed = allResources.filter(r => r.completed).length;
        const saved = allResources.filter(r => r.saved).length;
        const totalHours = allResources.reduce((sum, r) => {
            const hours = parseInt(r.duration) || 0;
            return sum + hours;
        }, 0);
        
        document.getElementById('totalResources').textContent = total;
        document.getElementById('completedResources').textContent = completed;
        document.getElementById('savedResources').textContent = saved;
        document.getElementById('studyHours').textContent = totalHours + 'h';
    }

    function applyFilters() {
        let filtered = [...allResources];
        
        if (savedOnly) {
            filtered = filtered.filter(r => r.saved);
        }
        
        if (currentFilterType !== 'all') {
            filtered = filtered.filter(r => r.type === currentFilterType);
        }
        
        if (currentFilterClass !== 'all') {
            filtered = filtered.filter(r => r.class === parseInt(currentFilterClass));
        }
        
        if (currentSearchTerm) {
            filtered = filtered.filter(r => 
                r.title.toLowerCase().includes(currentSearchTerm) ||
                r.subject.toLowerCase().includes(currentSearchTerm) ||
                r.description.toLowerCase().includes(currentSearchTerm)
            );
        }
        
        currentFilteredData = filtered;
        currentPage = 1;
        renderPagination();
        renderCurrentPage();
        updateStats();
    }

    function renderCurrentPage() {
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        const pageData = currentFilteredData.slice(startIndex, endIndex);
        renderResources(pageData);
        updatePaginationInfo();
        updateButtonStates();
    }

    function renderResources(resources) {
        const container = document.getElementById('resourcesGrid');
        
        if (resources.length === 0) {
            container.innerHTML = `
                <div class="repo-empty" style="grid-column: 1/-1;">
                    <i class="fas fa-folder-open"></i>
                    <h4>No resources found</h4>
                    <p>Try adjusting your filters or upload a new resource</p>
                </div>
            `;
            return;
        }
        
        const typeIcons = {
            'Textbook': 'fa-book',
            'Notes': 'fa-file-alt',
            'Question Paper': 'fa-file-pdf',
            'Video': 'fa-video',
            'Worksheet': 'fa-file',
            'Formula Sheet': 'fa-calculator'
        };
        
        container.innerHTML = resources.map(resource => `
            <div class="repo-resource-card" data-resource-id="${resource.id}">
                <div class="repo-card-header">
                    <span class="repo-type-badge repo-type-${resource.type.toLowerCase().replace(' ', '-')}">
                        <i class="fas ${typeIcons[resource.type] || 'fa-file'}"></i>
                        ${resource.type}
                    </span>
                    <div class="repo-card-actions">
                        <button class="repo-card-action-btn save-btn ${resource.saved ? 'saved' : ''}" onclick="toggleSaveResource(${resource.id})" title="${resource.saved ? 'Saved' : 'Save'}">
                            <i class="fas ${resource.saved ? 'fa-bookmark' : 'fa-bookmark'}"></i>
                        </button>
                    </div>
                </div>
                <div class="repo-card-body">
                    <h3 class="repo-resource-title">${escapeHtml(resource.title)}</h3>
                    <span class="repo-resource-subject">${resource.subject}</span>
                    <p class="repo-resource-desc">${escapeHtml(resource.description)}</p>
                    <div class="repo-resource-meta">
                        ${resource.pages ? `<span class="repo-meta-item"><i class="fas fa-file-alt"></i> ${resource.pages}</span>` : ''}
                        <span class="repo-meta-item"><i class="fas fa-clock"></i> ${resource.duration}</span>
                        <span class="repo-rating"><i class="fas fa-star"></i> ${resource.rating}</span>
                    </div>
                    <div class="repo-progress-section">
                        <div class="repo-progress-header">
                            <span>Progress</span>
                            <span>${resource.progress}%</span>
                        </div>
                        <div class="repo-progress-bar">
                            <div class="repo-progress-fill" style="width: ${resource.progress}%"></div>
                        </div>
                    </div>
                </div>
            </div>
        `).join('');
    }

    function renderPagination() {
        const totalPages = Math.ceil(currentFilteredData.length / itemsPerPage);
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
            pagesHtml += `<button class="repo-page-number" data-page="1">1</button>`;
            if (startPage > 2) {
                pagesHtml += `<span style="padding: 0 8px;">...</span>`;
            }
        }
        
        for (let i = startPage; i <= endPage; i++) {
            pagesHtml += `<button class="repo-page-number ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>`;
        }
        
        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                pagesHtml += `<span style="padding: 0 8px;">...</span>`;
            }
            pagesHtml += `<button class="repo-page-number" data-page="${totalPages}">${totalPages}</button>`;
        }
        
        pageNumbersContainer.innerHTML = pagesHtml;
        
        document.querySelectorAll('.repo-page-number').forEach(btn => {
            btn.addEventListener('click', () => {
                const page = parseInt(btn.dataset.page);
                if (page && page !== currentPage) {
                    currentPage = page;
                    renderCurrentPage();
                    renderPagination();
                }
            });
        });
    }

    function updatePaginationInfo() {
        const startIndex = (currentPage - 1) * itemsPerPage + 1;
        const endIndex = Math.min(currentPage * itemsPerPage, currentFilteredData.length);
        const infoText = currentFilteredData.length === 0 
            ? 'Showing 0 to 0 of 0 entries'
            : `Showing ${startIndex} to ${endIndex} of ${currentFilteredData.length} entries`;
        document.getElementById('paginationInfo').textContent = infoText;
    }

    function updateButtonStates() {
        const totalPages = Math.ceil(currentFilteredData.length / itemsPerPage);
        const firstBtn = document.getElementById('firstPageBtn');
        const prevBtn = document.getElementById('prevPageBtn');
        const nextBtn = document.getElementById('nextPageBtn');
        const lastBtn = document.getElementById('lastPageBtn');
        
        firstBtn.disabled = currentPage === 1;
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages || totalPages === 0;
        lastBtn.disabled = currentPage === totalPages || totalPages === 0;
    }

    function goToFirstPage() { if (currentPage !== 1) { currentPage = 1; renderCurrentPage(); renderPagination(); } }
    function goToPrevPage() { if (currentPage > 1) { currentPage--; renderCurrentPage(); renderPagination(); } }
    function goToNextPage() { const totalPages = Math.ceil(currentFilteredData.length / itemsPerPage); if (currentPage < totalPages) { currentPage++; renderCurrentPage(); renderPagination(); } }
    function goToLastPage() { const totalPages = Math.ceil(currentFilteredData.length / itemsPerPage); if (currentPage !== totalPages && totalPages > 0) { currentPage = totalPages; renderCurrentPage(); renderPagination(); } }
    function changePerPage() { itemsPerPage = parseInt(document.getElementById('perPageSelect').value); currentPage = 1; applyFilters(); }

    window.toggleSaveResource = function(resourceId) {
        const resource = allResources.find(r => r.id === resourceId);
        if (resource) {
            resource.saved = !resource.saved;
            saveSavedResources();
            showToast(resource.saved ? 'Resource saved!' : 'Resource removed from saved');
            applyFilters();
        }
    };

    function showToast(message, type = 'success') {
        const toast = document.createElement('div');
        toast.className = `repo-toast ${type === 'error' ? 'error' : ''}`;
        toast.innerHTML = `<i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i> ${message}`;
        document.body.appendChild(toast);
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(20px)';
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    }

    function escapeHtml(str) {
        if (!str) return '';
        const div = document.createElement('div');
        div.textContent = str;
        return div.innerHTML;
    }

    // Event Listeners
    document.getElementById('refreshStudentsBtn')?.addEventListener('click', () => applyFilters());
    document.getElementById('searchResourceInput').addEventListener('input', (e) => {
        currentSearchTerm = e.target.value.toLowerCase();
        applyFilters();
    });
    
    document.querySelectorAll('[data-filter-type]').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('[data-filter-type]').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentFilterType = this.dataset.filterType;
            applyFilters();
        });
    });
    
    document.querySelectorAll('[data-filter-class]').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('[data-filter-class]').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentFilterClass = this.dataset.filterClass;
            applyFilters();
        });
    });
    
    document.getElementById('savedResourcesBtn').addEventListener('click', () => {
        savedOnly = !savedOnly;
        document.getElementById('savedResourcesBtn').style.background = savedOnly ? 'rgba(255,255,255,0.25)' : '';
        applyFilters();
    });
    
    document.getElementById('firstPageBtn').addEventListener('click', goToFirstPage);
    document.getElementById('prevPageBtn').addEventListener('click', goToPrevPage);
    document.getElementById('nextPageBtn').addEventListener('click', goToNextPage);
    document.getElementById('lastPageBtn').addEventListener('click', goToLastPage);
    document.getElementById('perPageSelect').addEventListener('change', changePerPage);
    
    // Upload Modal
    const uploadModal = document.getElementById('uploadModal');
    const fileUploadArea = document.getElementById('fileUploadArea');
    const fileInput = document.getElementById('resourceFile');
    
    document.getElementById('uploadResourceBtn').addEventListener('click', () => {
        uploadModal.classList.add('open');
    });
    
    document.getElementById('closeUploadModal').addEventListener('click', () => {
        uploadModal.classList.remove('open');
    });
    
    fileUploadArea.addEventListener('click', () => fileInput.click());
    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            document.getElementById('fileNameDisplay').textContent = e.target.files[0].name;
            document.getElementById('fileNameDisplay').style.display = 'block';
        }
    });
    
    document.getElementById('uploadForm').addEventListener('submit', (e) => {
        e.preventDefault();
        const newResource = {
            id: allResources.length + 1,
            title: document.getElementById('resourceTitle').value,
            type: document.getElementById('resourceType').value,
            subject: document.getElementById('resourceSubject').value,
            class: parseInt(document.getElementById('resourceClass').value),
            description: document.getElementById('resourceDesc').value,
            pages: document.getElementById('resourceMeta').value,
            duration: document.getElementById('resourceMeta').value,
            rating: 0,
            progress: 0,
            saved: false,
            completed: false
        };
        allResources.push(newResource);
        showToast('Resource uploaded successfully!');
        uploadModal.classList.remove('open');
        document.getElementById('uploadForm').reset();
        document.getElementById('fileNameDisplay').style.display = 'none';
        applyFilters();
    });
    
    uploadModal.addEventListener('click', (e) => {
        if (e.target === uploadModal) uploadModal.classList.remove('open');
    });
    
    // Initialize
    loadSavedResources();
    applyFilters();
})();
</script>

</div>