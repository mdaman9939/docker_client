<?php
// admin_manage_books.php
// This file contains both HTML + CSS + JS for the Admin Books Management section with Class Filter
?>

<!-- Manage Books Section (Admin Only) -->
<div id="manage-books-section" class="content-section" style="display: none;">

    <!-- Hero Banner -->
    <div class="mb-hero-banner">
        <div class="mb-hero-left">
            <div class="mb-hero-icon">
                <i class="fas fa-book-open"></i>
            </div>
            <div class="mb-hero-text">
                <h2>Manage Books</h2>
                <p>Add, edit, delete and manage school/NCERT books</p>
            </div>
        </div>
        <div class="mb-hero-right">
            <div class="mb-hero-search">
                <i class="fas fa-search"></i>
                <input type="text" id="admin-book-search" placeholder="Search books...">
            </div>
            <button class="mb-add-btn" id="addNewBookBtn">
                <i class="fas fa-plus"></i> Add New Book
            </button>
        </div>
    </div>

    <!-- Messages -->
    <div id="admin-books-loading" class="loading-spinner-container" style="display: none;">
        <div class="spinner"></div>
        <p>Loading all books...</p>
    </div>
    <div id="admin-books-error" class="mb-error-message" style="display: none;"></div>
    <div id="admin-books-success" class="mb-success-message" style="display: none;"></div>

    <!-- Filters Bar -->
    <div class="mb-filters-bar">
        <div class="mb-subject-filters">
            <button class="mb-filter-chip active" data-filter="all">All Books</button>
            <button class="mb-filter-chip" data-filter="mathematics"><i class="fas fa-calculator"></i> Mathematics</button>
            <button class="mb-filter-chip" data-filter="science"><i class="fas fa-flask"></i> Science</button>
            <button class="mb-filter-chip" data-filter="hindi"><i class="fas fa-language"></i> Hindi</button>
            <button class="mb-filter-chip" data-filter="english"><i class="fas fa-book"></i> English</button>
            <button class="mb-filter-chip" data-filter="social"><i class="fas fa-globe-americas"></i> Social Studies</button>
            <button class="mb-filter-chip" data-filter="sanskrit"><i class="fas fa-om"></i> Sanskrit</button>
            <button class="mb-filter-chip" data-filter="computer"><i class="fas fa-laptop-code"></i> Computer</button>
        </div>
        <div class="mb-class-filter">
            <i class="fas fa-graduation-cap"></i>
            <select id="classFilter">
                <option value="all">All Classes</option>
                <?php for($i=1; $i<=12; $i++): ?>
                    <option value="<?= $i ?>">Class <?= $i ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </div>

    <!-- Active Filters & Summary -->
    <div class="mb-active-filters" id="activeFiltersContainer">
        <div class="mb-filter-summary" id="filterSummary"></div>
        <div class="mb-active-tags" id="activeFilters"></div>
        <button id="clearAllFilters" class="mb-clear-filters-btn" style="display: none;">
            <i class="fas fa-times-circle"></i> Clear all
        </button>
    </div>

    <!-- Books Grid -->
    <div class="mb-grid" id="admin-books-grid"></div>
</div>

<!-- ====================== MODALS ====================== -->

<!-- Add Book Modal -->
<div id="addBookModal" class="mb-modal" style="display: none;">
    <div class="mb-modal-content">
        <div class="mb-modal-header">
            <span class="mb-close-modal" onclick="closeAddBookModal()">&times;</span>
            <div class="mb-modal-header-icon"><i class="fas fa-cloud-upload-alt"></i></div>
            <h2>Add New Book</h2>
            <p>Upload a new book for students</p>
        </div>
        <form id="addBookForm" class="mb-form">
            <div class="mb-form-row">
                <div class="mb-form-group">
                    <label><i class="fas fa-heading"></i> Title *</label>
                    <input type="text" id="bookTitle" placeholder="e.g., Mathematics Class 10" required>
                </div>
                <div class="mb-form-group">
                    <label><i class="fas fa-user"></i> Author *</label>
                    <input type="text" id="bookAuthor" value="NCERT" required>
                </div>
            </div>
            <div class="mb-form-row">
                <div class="mb-form-group">
                    <label><i class="fas fa-graduation-cap"></i> Class *</label>
                    <select id="bookClass" required>
                        <option value="">Select Class</option>
                        <?php for($i=1; $i<=12; $i++): ?>
                            <option value="<?= $i ?>">Class <?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="mb-form-group">
                    <label><i class="fas fa-book"></i> Subject *</label>
                    <select id="bookSubject" required>
                        <option value="">Select Subject</option>
                        <option value="mathematics">Mathematics</option>
                        <option value="science">Science</option>
                        <option value="hindi">Hindi</option>
                        <option value="english">English</option>
                        <option value="social">Social Studies</option>
                        <option value="sanskrit">Sanskrit</option>
                        <option value="computer">Computer</option>
                    </select>
                </div>
            </div>
            <div class="mb-form-group">
                <label><i class="fas fa-align-left"></i> Description (optional)</label>
                <textarea id="bookDescription" placeholder="Brief description of the book..."></textarea>
            </div>
            <div class="mb-form-group">
                <label><i class="fas fa-list-ol"></i> Chapters JSON (optional)</label>
                <textarea id="bookChapters" placeholder='[{"chapter_number":1,"title":"Chapter 1","page_start":1,"page_end":20}, ...]'></textarea>
            </div>
            <div class="mb-form-row">
                <div class="mb-form-group">
                    <label><i class="fas fa-image"></i> Cover Image (optional)</label>
                    <div class="mb-file-upload">
                        <input type="file" id="bookCover" accept="image/*">
                        <div class="mb-file-label">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Choose image</span>
                        </div>
                    </div>
                </div>
                <div class="mb-form-group">
                    <label><i class="fas fa-file-pdf"></i> PDF File *</label>
                    <div class="mb-file-upload">
                        <input type="file" id="bookPdf" accept=".pdf" required>
                        <div class="mb-file-label">
                            <i class="fas fa-file-pdf"></i>
                            <span>Choose PDF</span>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" id="submitBookBtn" class="mb-submit-btn">
                <i class="fas fa-cloud-upload-alt"></i> Upload Book
            </button>
        </form>
    </div>
</div>

<!-- Edit Book Modal -->
<div id="editBookModal" class="mb-modal" style="display: none;">
    <div class="mb-modal-content">
        <div class="mb-modal-header" style="background: linear-gradient(135deg, #3f66e6, #0ed3a2);">
            <span class="mb-close-modal" onclick="closeEditBookModal()">&times;</span>
            <div class="mb-modal-header-icon" style="background: rgba(255,255,255,0.2);"><i class="fas fa-edit"></i></div>
            <h2>Edit Book</h2>
            <p>Update book details and files</p>
        </div>
        <form id="editBookForm" class="mb-form">
            <input type="hidden" id="editBookId">
            <div class="mb-form-row">
                <div class="mb-form-group">
                    <label><i class="fas fa-heading"></i> Title *</label>
                    <input type="text" id="editTitle" required>
                </div>
                <div class="mb-form-group">
                    <label><i class="fas fa-user"></i> Author *</label>
                    <input type="text" id="editAuthor" required>
                </div>
            </div>
            <div class="mb-form-row">
                <div class="mb-form-group">
                    <label><i class="fas fa-graduation-cap"></i> Class *</label>
                    <select id="editClass" required>
                        <option value="">Select Class</option>
                        <?php for($i=1; $i<=12; $i++): ?>
                            <option value="<?= $i ?>">Class <?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="mb-form-group">
                    <label><i class="fas fa-book"></i> Subject *</label>
                    <select id="editSubject" required>
                        <option value="">Select Subject</option>
                        <option value="mathematics">Mathematics</option>
                        <option value="science">Science</option>
                        <option value="hindi">Hindi</option>
                        <option value="english">English</option>
                        <option value="social">Social Studies</option>
                        <option value="sanskrit">Sanskrit</option>
                        <option value="computer">Computer</option>
                    </select>
                </div>
            </div>
            <div class="mb-form-group">
                <label><i class="fas fa-align-left"></i> Description</label>
                <textarea id="editDescription"></textarea>
            </div>
            <div class="mb-form-group">
                <label><i class="fas fa-list-ol"></i> Chapters JSON (optional)</label>
                <textarea id="editChapters" placeholder='[{"chapter_number":1,"title":"Chapter 1","page_start":1,"page_end":20}]'></textarea>
                <small class="mb-form-hint">Edit the JSON array directly</small>
            </div>
            <div class="mb-form-row">
                <div class="mb-form-group">
                    <label><i class="fas fa-image"></i> Cover Image</label>
                    <div id="currentCoverContainer" class="mb-current-file"></div>
                    <div class="mb-file-upload" style="margin-top: 8px;">
                        <input type="file" id="editCover" accept="image/*">
                        <div class="mb-file-label">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>New image</span>
                        </div>
                    </div>
                </div>
                <div class="mb-form-group">
                    <label><i class="fas fa-file-pdf"></i> PDF File</label>
                    <div id="currentPdfContainer" class="mb-current-file"></div>
                    <div class="mb-file-upload" style="margin-top: 8px;">
                        <input type="file" id="editPdf" accept=".pdf">
                        <div class="mb-file-label">
                            <i class="fas fa-file-pdf"></i>
                            <span>New PDF</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-modal-actions">
                <button type="submit" id="updateBookBtn" class="mb-submit-btn" style="background: linear-gradient(135deg, #3f66e6, #0ed3a2);">
                    <i class="fas fa-save"></i> Update Book
                </button>
                <button type="button" onclick="closeEditBookModal()" class="mb-cancel-btn">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- ====================== STYLES ====================== -->
<style>
/* ==================== HERO BANNER ==================== */
.mb-hero-banner {
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

.mb-hero-left {
    display: flex;
    align-items: center;
    gap: 20px;
}

.mb-hero-icon {
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

.mb-hero-text h2 {
    font-size: 24px;
    font-weight: 700;
    margin: 0 0 4px 0;
    color: white;
}

.mb-hero-text p {
    font-size: 14px;
    margin: 0;
    opacity: 0.88;
}

.mb-hero-right {
    display: flex;
    align-items: center;
    gap: 15px;
    flex-wrap: wrap;
}

.mb-hero-search {
    position: relative;
    min-width: 260px;
}

.mb-hero-search i {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255, 255, 255, 0.7);
    font-size: 14px;
}

.mb-hero-search input {
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

.mb-hero-search input::placeholder {
    color: rgba(255, 255, 255, 0.65);
}

.mb-hero-search input:focus {
    outline: none;
    border-color: rgba(255, 255, 255, 0.7);
    background: rgba(255, 255, 255, 0.25);
    box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.15);
}

.mb-add-btn {
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

.mb-add-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
}

/* ==================== FILTERS BAR ==================== */
.mb-filters-bar {
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

.mb-subject-filters {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
}

.mb-filter-chip {
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

.mb-filter-chip:hover {
    background: #f0f4ff;
    color: #3f66e6;
}

.mb-filter-chip.active {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: white;
}

.mb-class-filter {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #666;
}

.mb-class-filter i {
    font-size: 14px;
}

.mb-class-filter select {
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

.mb-class-filter select:focus {
    border-color: #3f66e6;
    box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
}

/* ==================== ACTIVE FILTERS ==================== */
.mb-active-filters {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    flex-wrap: wrap;
    min-height: 36px;
}

.mb-filter-summary {
    font-size: 13px;
    color: #666;
    padding: 8px 16px;
    background: #f8f9fa;
    border-radius: 25px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.mb-filter-summary strong {
    color: #3f66e6;
}

.mb-active-tags {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}

.mb-active-tag {
    background: #eef1ff;
    color: #3f66e6;
    padding: 6px 14px;
    border-radius: 25px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 500;
    animation: mbSlideIn 0.3s ease;
}

.mb-active-tag i.fa-times {
    cursor: pointer;
    opacity: 0.6;
    font-size: 12px;
    transition: opacity 0.2s;
}

.mb-active-tag i.fa-times:hover {
    opacity: 1;
}

@keyframes mbSlideIn {
    from { opacity: 0; transform: translateX(-10px); }
    to { opacity: 1; transform: translateX(0); }
}

.mb-clear-filters-btn {
    background: none;
    border: none;
    color: #dc3545;
    cursor: pointer;
    font-size: 13px;
    padding: 6px 12px;
    border-radius: 20px;
    transition: all 0.2s;
}

.mb-clear-filters-btn:hover {
    background: #fff0f0;
}

/* ==================== BOOKS GRID ==================== */
.mb-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 24px;
    margin-bottom: 40px;
}

/* ==================== BOOK CARD ==================== */
.mb-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    position: relative;
}

.mb-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 40px rgba(67, 97, 238, 0.15);
}

.mb-card-cover {
    height: 200px;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
}

.mb-card-cover-gradient {
    display: flex;
    align-items: center;
    justify-content: center;
}

.mb-card-cover-emoji {
    font-size: 56px;
    filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.25));
    z-index: 1;
}

/* Hover overlay with action buttons */
.mb-card-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5));
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    opacity: 0;
    transition: opacity 0.3s;
}

.mb-card:hover .mb-card-overlay {
    opacity: 1;
}

.mb-card-action {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: white;
    border: none;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    cursor: pointer;
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s;
    transform: translateY(10px);
}

.mb-card:hover .mb-card-action {
    transform: translateY(0);
}

.mb-card-action.edit {
    color: #3f66e6;
}

.mb-card-action.edit:hover {
    background: #3f66e6;
    color: white;
}

.mb-card-action.delete {
    color: #dc3545;
}

.mb-card-action.delete:hover {
    background: #dc3545;
    color: white;
}

/* Badges on cover */
.mb-card-subject-badge {
    position: absolute;
    top: 14px;
    right: 14px;
    background: rgba(255, 255, 255, 0.95);
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    color: #3f66e6;
    z-index: 2;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.mb-card-class-badge {
    position: absolute;
    bottom: 14px;
    left: 14px;
    background: rgba(67, 97, 238, 0.9);
    color: white;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    display: flex;
    align-items: center;
    gap: 5px;
    z-index: 2;
}

/* Card body */
.mb-card-body {
    padding: 18px 20px 20px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.mb-card-title {
    font-size: 17px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 6px 0;
    line-height: 1.3;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.mb-card-author {
    font-size: 13px;
    color: #888;
    margin: 0 0 12px 0;
    display: flex;
    align-items: center;
    gap: 6px;
}

.mb-card-author i {
    color: #aaa;
    font-size: 11px;
}

.mb-card-stats {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
    margin-top: auto;
}

.mb-stat {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 11px;
    color: #888;
    background: #f5f7fb;
    padding: 5px 10px;
    border-radius: 20px;
}

.mb-stat i {
    font-size: 10px;
    color: #aaa;
}

/* ==================== EMPTY STATE ==================== */
.mb-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 20px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
}

.mb-empty-icon {
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

.mb-empty h3 {
    font-size: 20px;
    color: #333;
    margin: 0 0 8px 0;
}

.mb-empty p {
    color: #888;
    font-size: 14px;
    margin: 4px 0;
}

/* ==================== MODAL ==================== */
.mb-modal {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    backdrop-filter: blur(6px);
    animation: mbFadeIn 0.25s ease;
}

@keyframes mbFadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.mb-modal-content {
    background: white;
    border-radius: 24px;
    width: 90%;
    max-width: 660px;
    max-height: 90vh;
    overflow-y: auto;
    position: relative;
    animation: mbSlideUp 0.3s ease;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
    -ms-overflow-style: none;
    scrollbar-width: none;
}

.mb-modal-content::-webkit-scrollbar {
    display: none;
}

@keyframes mbSlideUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

.mb-modal-header {
    background: linear-gradient(135deg, #3f66e6, #129695, #0ed3a2);
    color: white;
    padding: 28px 30px 22px;
    border-radius: 24px 24px 0 0;
    text-align: center;
    position: relative;
}

.mb-modal-header-icon {
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

.mb-modal-header h2 {
    margin: 0 0 4px 0;
    font-size: 22px;
    font-weight: 700;
    color: white;
}

.mb-modal-header p {
    margin: 0;
    font-size: 14px;
    opacity: 0.85;
}

.mb-close-modal {
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

.mb-close-modal:hover {
    color: white;
    transform: scale(1.1);
    background: rgba(255, 255, 255, 0.3);
}

/* ==================== FORM ==================== */
.mb-form {
    padding: 28px 30px 30px;
}

.mb-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}

.mb-form-group {
    margin-bottom: 18px;
}

.mb-form-group label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #444;
    font-size: 13px;
}

.mb-form-group label i {
    margin-right: 6px;
    color: #3f66e6;
    font-size: 12px;
}

.mb-form-group input[type="text"],
.mb-form-group input[type="url"],
.mb-form-group select,
.mb-form-group textarea {
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

.mb-form-group input:focus,
.mb-form-group select:focus,
.mb-form-group textarea:focus {
    outline: none;
    border-color: #3f66e6;
    box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
    background: white;
}

.mb-form-group textarea {
    min-height: 80px;
    resize: vertical;
}

.mb-form-hint {
    display: block;
    margin-top: 4px;
    font-size: 12px;
    color: #999;
}

/* File upload styling */
.mb-file-upload {
    position: relative;
}

.mb-file-upload input[type="file"] {
    position: absolute;
    inset: 0;
    opacity: 0;
    cursor: pointer;
    z-index: 2;
}

.mb-file-label {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px;
    border: 2px dashed #d0d5e0;
    border-radius: 12px;
    color: #888;
    font-size: 13px;
    transition: all 0.3s;
    background: #fafbff;
}

.mb-file-upload:hover .mb-file-label {
    border-color: #3f66e6;
    color: #3f66e6;
    background: #f0f4ff;
}

.mb-current-file {
    margin-bottom: 4px;
}

.mb-current-file img {
    max-width: 80px;
    max-height: 80px;
    border-radius: 10px;
    border: 2px solid #e8ecf4;
}

.mb-current-file a {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 14px;
    background: #f0f4ff;
    border: 2px solid #e8ecf4;
    border-radius: 10px;
    color: #3f66e6;
    text-decoration: none;
    font-weight: 600;
    font-size: 13px;
    transition: all 0.2s;
}

.mb-current-file a:hover {
    background: #e0e8ff;
    border-color: #3f66e6;
}

.mb-submit-btn {
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

.mb-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(67, 97, 238, 0.3);
}

.mb-modal-actions {
    display: flex;
    gap: 12px;
    margin-top: 6px;
}

.mb-modal-actions .mb-submit-btn {
    flex: 1;
}

.mb-cancel-btn {
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

.mb-cancel-btn:hover {
    border-color: #dc3545;
    color: #dc3545;
    background: #fff5f5;
}

/* ==================== LOADING / MESSAGES ==================== */
.loading-spinner-container { text-align: center; padding: 40px; }
.spinner { border: 4px solid #f3f3f3; border-top: 4px solid #3f66e6; border-radius: 50%; width: 40px; height: 40px; animation: mbSpin 1s linear infinite; margin: 0 auto 15px; }
@keyframes mbSpin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }

.mb-error-message, .mb-success-message {
    padding: 15px 20px;
    border-radius: 12px;
    margin: 10px 0;
    display: flex;
    align-items: center;
    gap: 10px;
    border-left: 4px solid;
    font-size: 14px;
}

.mb-error-message { background: #fff5f5; color: #dc3545; border-left-color: #dc3545; }
.mb-success-message { background: #f0fdf4; color: #16a34a; border-left-color: #16a34a; }

/* ==================== RESPONSIVE ==================== */
@media (max-width: 768px) {
    .mb-hero-banner {
        padding: 20px 22px;
        flex-direction: column;
        align-items: stretch;
    }

    .mb-hero-right {
        flex-direction: column;
    }

    .mb-hero-search {
        min-width: 100%;
    }

    .mb-add-btn {
        justify-content: center;
    }

    .mb-filters-bar {
        border-radius: 16px;
        padding: 12px 16px;
        flex-direction: column;
        align-items: stretch;
    }

    .mb-grid {
        grid-template-columns: 1fr;
    }

    .mb-form-row {
        grid-template-columns: 1fr;
    }

    .mb-modal-content {
        width: 95%;
        margin: 10px;
    }
}
</style>

<!-- ====================== JAVASCRIPT ====================== -->
<script>
// Admin Manage Books - Complete with Class Filter Support
(function() {
    console.log("=== Admin Manage Books Script Loaded ===");

    const API_BASE_URL = 'http://127.0.0.1:8000';
    const BOOKS_API = `${API_BASE_URL}/student/books`;
    const UPLOAD_API = `${API_BASE_URL}/admin/upload-book`;
    const UPDATE_API = (id) => `${API_BASE_URL}/admin/book/${id}`;
    const DELETE_API = (id) => `${API_BASE_URL}/admin/book/${id}`;

    // DOM Elements
    const section       = document.getElementById('manage-books-section');
    const loading       = document.getElementById('admin-books-loading');
    const errorDiv      = document.getElementById('admin-books-error');
    const successDiv    = document.getElementById('admin-books-success');
    const grid          = document.getElementById('admin-books-grid');
    const searchInput   = document.getElementById('admin-book-search');
    const addBtn        = document.getElementById('addNewBookBtn');
    const classFilter   = document.getElementById('classFilter');
    const clearAllBtn   = document.getElementById('clearAllFilters');
    const activeFilters = document.getElementById('activeFilters');
    const filterSummary = document.getElementById('filterSummary');

    // State
    let allBooks = [];
    let currentSubjectFilter = 'all';
    let currentClassFilter = 'all';
    let currentSearch = '';

    // Subject config
    const subjectNames = {
        mathematics: 'Mathematics', science: 'Science', hindi: 'Hindi',
        english: 'English', social: 'Social Studies', sanskrit: 'Sanskrit', computer: 'Computer'
    };

    const subjectEmojis = {
        mathematics: '📐', science: '🔬', hindi: '📗', english: '📘',
        social: '🌍', sanskrit: '🕉️', computer: '💻'
    };

    const subjectGradients = {
        mathematics: 'linear-gradient(135deg, #667eea, #764ba2)',
        science:     'linear-gradient(135deg, #06d6a0, #0891b2)',
        hindi:       'linear-gradient(135deg, #f97316, #ef4444)',
        english:     'linear-gradient(135deg, #8b5cf6, #6d28d9)',
        social:      'linear-gradient(135deg, #fbbf24, #f59e0b)',
        sanskrit:    'linear-gradient(135deg, #ec4899, #be185d)',
        computer:    'linear-gradient(135deg, #3b82f6, #1d4ed8)'
    };

    // Helpers
    function getToken() {
        return localStorage.getItem('access_token');
    }

    function showError(msg) {
        errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${msg}`;
        errorDiv.style.display = 'flex';
        setTimeout(() => errorDiv.style.display = 'none', 6000);
    }

    function showSuccess(msg) {
        successDiv.innerHTML = `<i class="fas fa-check-circle"></i> ${msg}`;
        successDiv.style.display = 'flex';
        setTimeout(() => successDiv.style.display = 'none', 4000);
    }

    function showLoading(show) {
        loading.style.display = show ? 'block' : 'none';
        grid.style.display = show ? 'none' : 'grid';
    }

    function escapeHtml(str) {
        if (!str) return '';
        return String(str).replace(/[&<>"']/g, function(m) {
            return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[m];
        });
    }

    // Load Books
    async function loadBooks() {
        if (!getToken()) {
            showError("Please login again");
            return;
        }

        showLoading(true);

        try {
            const res = await fetch(BOOKS_API, {
                headers: {
                    'Authorization': `Bearer ${getToken()}`,
                    'Accept': 'application/json'
                }
            });

            if (!res.ok) {
                if (res.status === 401) {
                    localStorage.clear();
                    window.location.href = '/login.php';
                    return;
                }
                throw new Error(`HTTP ${res.status}`);
            }

            const data = await res.json();

            if (data.success && Array.isArray(data.books)) {
                allBooks = data.books.map(book => ({
                    ...book,
                    cover_image: book.cover_image ? `${API_BASE_URL}${book.cover_image.replace(/\\/g, '/')}` : null,
                    pdf_path: book.pdf_path ? `${API_BASE_URL}${book.pdf_path.replace(/\\/g, '/')}` : null
                }));

                filterAndRenderBooks();
                showSuccess(`Loaded ${allBooks.length} books`);
            } else {
                allBooks = [];
                filterAndRenderBooks();
            }
        } catch (err) {
            console.error(err);
            showError("Failed to load books: " + err.message);
        } finally {
            showLoading(false);
        }
    }

    // Filter and Render
    function filterAndRenderBooks() {
        let books = [...allBooks];

        if (currentSubjectFilter !== 'all') {
            books = books.filter(b => b.subject === currentSubjectFilter);
        }

        if (currentClassFilter !== 'all') {
            books = books.filter(b => b.class == currentClassFilter);
        }

        if (currentSearch.trim()) {
            const term = currentSearch.toLowerCase().trim();
            books = books.filter(b =>
                b.title?.toLowerCase().includes(term) ||
                b.author?.toLowerCase().includes(term) ||
                b.subject?.toLowerCase().includes(term)
            );
        }

        renderBooks(books);
        updateActiveFilters();
        updateFilterSummary(books.length);
    }

    // Render Books
    function renderBooks(books) {
        if (books.length === 0) {
            grid.innerHTML = `
                <div class="mb-empty">
                    <div class="mb-empty-icon"><i class="fas fa-book-open"></i></div>
                    <h3>No books found</h3>
                    <p>${currentSearch ? 'No matches for your search' : 'No books available yet'}</p>
                    ${currentSubjectFilter !== 'all' || currentClassFilter !== 'all' ?
                        `<p style="font-size: 13px; color: #aaa; margin-top: 4px;">
                            ${currentSubjectFilter !== 'all' ? `Subject: ${subjectNames[currentSubjectFilter] || currentSubjectFilter}` : ''}
                            ${currentSubjectFilter !== 'all' && currentClassFilter !== 'all' ? ' &middot; ' : ''}
                            ${currentClassFilter !== 'all' ? `Class: ${currentClassFilter}` : ''}
                        </p>` : ''}
                </div>
            `;
            return;
        }

        let html = '';
        books.forEach(book => {
            const emoji = subjectEmojis[book.subject] || '📚';
            const subjectName = subjectNames[book.subject] || book.subject || 'Unknown';
            const gradient = subjectGradients[book.subject] || 'linear-gradient(135deg, #3f66e6, #129695)';
            const hasCover = !!book.cover_image;
            const coverStyle = hasCover
                ? `background-image: url('${book.cover_image}'); background-size: cover; background-position: center;`
                : `background: ${gradient};`;
            const escapedTitle = escapeHtml(book.title).replace(/'/g, "\\'");

            html += `
                <div class="mb-card">
                    <div class="mb-card-cover ${!hasCover ? 'mb-card-cover-gradient' : ''}" style="${coverStyle}">
                        ${!hasCover ? `<div class="mb-card-cover-emoji">${emoji}</div>` : ''}
                        <div class="mb-card-overlay">
                            <button class="mb-card-action edit" onclick="editBook(${book.id})" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="mb-card-action delete" onclick="deleteBook(${book.id}, '${escapedTitle}')" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <span class="mb-card-subject-badge">${emoji} ${escapeHtml(subjectName)}</span>
                        <span class="mb-card-class-badge"><i class="fas fa-graduation-cap"></i> Class ${book.class}</span>
                    </div>
                    <div class="mb-card-body">
                        <h4 class="mb-card-title">${escapeHtml(book.title) || 'Untitled'}</h4>
                        <p class="mb-card-author"><i class="fas fa-user"></i> ${escapeHtml(book.author) || 'NCERT'}</p>
                        <div class="mb-card-stats">
                            <span class="mb-stat"><i class="fas fa-file-pdf"></i> ${book.pages || '?'} pages</span>
                            <span class="mb-stat"><i class="fas fa-list"></i> ${book.chapters?.length || 0} chapters</span>
                        </div>
                    </div>
                </div>
            `;
        });

        grid.innerHTML = html;
    }

    // Update Active Filters Display
    function updateActiveFilters() {
        if (!activeFilters || !clearAllBtn) return;

        activeFilters.innerHTML = '';
        let hasActiveFilters = false;

        if (currentSubjectFilter !== 'all') {
            hasActiveFilters = true;
            const name = subjectNames[currentSubjectFilter] || currentSubjectFilter;
            activeFilters.innerHTML += `<span class="mb-active-tag">
                <i class="fas fa-book"></i> ${name} <i class="fas fa-times" onclick="removeFilter('subject')"></i>
            </span>`;
        }

        if (currentClassFilter !== 'all') {
            hasActiveFilters = true;
            activeFilters.innerHTML += `<span class="mb-active-tag">
                <i class="fas fa-graduation-cap"></i> Class ${currentClassFilter} <i class="fas fa-times" onclick="removeFilter('class')"></i>
            </span>`;
        }

        if (currentSearch.trim()) {
            hasActiveFilters = true;
            activeFilters.innerHTML += `<span class="mb-active-tag">
                <i class="fas fa-search"></i> "${escapeHtml(currentSearch)}" <i class="fas fa-times" onclick="removeFilter('search')"></i>
            </span>`;
        }

        clearAllBtn.style.display = hasActiveFilters ? 'inline-block' : 'none';
    }

    // Update Filter Summary
    function updateFilterSummary(count) {
        if (!filterSummary) return;

        let summaryHtml = `<i class="fas fa-chart-bar"></i> Showing <strong>${count}</strong> of <strong>${allBooks.length}</strong> books`;

        if (currentSubjectFilter !== 'all') {
            summaryHtml += ` &middot; Subject: <strong>${subjectNames[currentSubjectFilter] || currentSubjectFilter}</strong>`;
        }
        if (currentClassFilter !== 'all') {
            summaryHtml += ` &middot; Class: <strong>${currentClassFilter}</strong>`;
        }
        if (currentSearch.trim()) {
            summaryHtml += ` &middot; Search: <strong>"${escapeHtml(currentSearch)}"</strong>`;
        }

        filterSummary.innerHTML = summaryHtml;
    }

    // Remove Individual Filter
    window.removeFilter = function(type) {
        if (type === 'subject') {
            currentSubjectFilter = 'all';
            document.querySelectorAll('.mb-filter-chip').forEach(b => {
                b.classList.remove('active');
                if (b.dataset.filter === 'all') b.classList.add('active');
            });
        } else if (type === 'class') {
            currentClassFilter = 'all';
            if (classFilter) classFilter.value = 'all';
        } else if (type === 'search') {
            currentSearch = '';
            if (searchInput) searchInput.value = '';
        }
        filterAndRenderBooks();
    };

    // Clear All Filters
    if (clearAllBtn) {
        clearAllBtn.addEventListener('click', () => {
            currentSubjectFilter = 'all';
            currentClassFilter = 'all';
            currentSearch = '';

            document.querySelectorAll('.mb-filter-chip').forEach(b => {
                b.classList.remove('active');
                if (b.dataset.filter === 'all') b.classList.add('active');
            });
            if (classFilter) classFilter.value = 'all';
            if (searchInput) searchInput.value = '';

            filterAndRenderBooks();
        });
    }

    // Add Book Modal
    document.getElementById('addNewBookBtn').addEventListener('click', () => {
        document.getElementById('addBookModal').style.display = 'flex';
    });

    window.closeAddBookModal = function() {
        document.getElementById('addBookModal').style.display = 'none';
        document.getElementById('addBookForm').reset();
    };

    // Add Book Form Submit
    document.getElementById('addBookForm').addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData();
        formData.append('title', document.getElementById('bookTitle').value.trim());
        formData.append('author', document.getElementById('bookAuthor').value.trim());
        formData.append('class_value', document.getElementById('bookClass').value);
        formData.append('subject', document.getElementById('bookSubject').value);
        formData.append('description', document.getElementById('bookDescription').value.trim());
        formData.append('chapters', document.getElementById('bookChapters').value.trim());

        const pdfFile = document.getElementById('bookPdf').files[0];
        const coverFile = document.getElementById('bookCover').files[0];

        if (!pdfFile) return showError("PDF file is required");
        formData.append('pdf_file', pdfFile);
        if (coverFile) formData.append('cover_image', coverFile);

        const submitBtn = document.getElementById('submitBookBtn');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Uploading...';

        try {
            const res = await fetch(UPLOAD_API, {
                method: 'POST',
                headers: { 'Authorization': `Bearer ${getToken()}` },
                body: formData
            });

            const result = await res.json();

            if (res.ok && result.success) {
                showSuccess("Book uploaded successfully!");
                closeAddBookModal();
                loadBooks();
            } else {
                showError(result.message || result.detail || "Upload failed");
            }
        } catch (err) {
            showError("Network error: " + err.message);
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fas fa-cloud-upload-alt"></i> Upload Book';
        }
    });

    // Edit Book
    window.editBook = async function(id) {
        const book = allBooks.find(b => b.id === id);
        if (!book) {
            showError("Book not found");
            return;
        }

        document.getElementById('editBookId').value = book.id;
        document.getElementById('editTitle').value = book.title || '';
        document.getElementById('editAuthor').value = book.author || '';
        document.getElementById('editClass').value = book.class || '';
        document.getElementById('editSubject').value = book.subject || '';
        document.getElementById('editDescription').value = book.description || '';

        let chaptersStr = '';
        if (book.chapters && book.chapters.length > 0) {
            chaptersStr = JSON.stringify(book.chapters, null, 2);
        } else {
            chaptersStr = '[{"chapter_number":1,"title":"Chapter 1","page_start":1,"page_end":20}]';
        }
        document.getElementById('editChapters').value = chaptersStr;

        const coverContainer = document.getElementById('currentCoverContainer');
        if (book.cover_image) {
            coverContainer.innerHTML = `<img src="${book.cover_image}" alt="Current cover">`;
        } else {
            coverContainer.innerHTML = '<p style="font-size: 13px; color: #999;">No cover image</p>';
        }

        const pdfContainer = document.getElementById('currentPdfContainer');
        if (book.pdf_path) {
            pdfContainer.innerHTML = `<a href="${book.pdf_path}" target="_blank"><i class="fas fa-file-pdf"></i> View Current PDF</a>`;
        } else {
            pdfContainer.innerHTML = '<p style="font-size: 13px; color: #999;">No PDF file</p>';
        }

        document.getElementById('editCover').value = '';
        document.getElementById('editPdf').value = '';

        document.getElementById('editBookModal').style.display = 'flex';
    };

    window.closeEditBookModal = function() {
        document.getElementById('editBookModal').style.display = 'none';
        document.getElementById('editBookForm').reset();
    };

    // Edit Book Form Submit
    document.getElementById('editBookForm').addEventListener('submit', async (e) => {
        e.preventDefault();

        const bookId = document.getElementById('editBookId').value;
        const updateBtn = document.getElementById('updateBookBtn');

        const formData = new FormData();
        formData.append('title', document.getElementById('editTitle').value.trim());
        formData.append('author', document.getElementById('editAuthor').value.trim());
        formData.append('class_value', document.getElementById('editClass').value);
        formData.append('subject', document.getElementById('editSubject').value);

        const description = document.getElementById('editDescription').value.trim();
        if (description) formData.append('description', description);

        const chapters = document.getElementById('editChapters').value.trim();
        try {
            JSON.parse(chapters);
            formData.append('chapters', chapters);
        } catch (err) {
            showError("Invalid chapters JSON format");
            return;
        }

        const coverFile = document.getElementById('editCover').files[0];
        const pdfFile = document.getElementById('editPdf').files[0];
        if (coverFile) formData.append('cover_image', coverFile);
        if (pdfFile) formData.append('pdf_file', pdfFile);

        updateBtn.disabled = true;
        updateBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Updating...';

        try {
            const res = await fetch(UPDATE_API(bookId), {
                method: 'PUT',
                headers: { 'Authorization': `Bearer ${getToken()}` },
                body: formData
            });

            const result = await res.json();

            if (res.ok && result.success) {
                showSuccess("Book updated successfully!");
                closeEditBookModal();
                loadBooks();
            } else {
                showError(result.message || result.detail || "Update failed");
            }
        } catch (err) {
            showError("Network error: " + err.message);
        } finally {
            updateBtn.disabled = false;
            updateBtn.innerHTML = '<i class="fas fa-save"></i> Update Book';
        }
    });

    // Delete Book
    window.deleteBook = async function(id, title) {
        if (!confirm(`Are you sure you want to delete "${title}"? This action cannot be undone.`)) return;

        try {
            const res = await fetch(DELETE_API(id), {
                method: 'DELETE',
                headers: {
                    'Authorization': `Bearer ${getToken()}`,
                    'Accept': 'application/json'
                }
            });

            const result = await res.json();

            if (res.ok && result.success) {
                showSuccess("Book deleted successfully");
                loadBooks();
            } else {
                showError(result.message || "Delete failed");
            }
        } catch (err) {
            showError("Error deleting book: " + err.message);
        }
    };

    // Event Listeners
    document.querySelectorAll('.mb-filter-chip').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.mb-filter-chip').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentSubjectFilter = btn.dataset.filter;
            filterAndRenderBooks();
        });
    });

    if (classFilter) {
        classFilter.addEventListener('change', (e) => {
            currentClassFilter = e.target.value;
            filterAndRenderBooks();
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            currentSearch = e.target.value;
            filterAndRenderBooks();
        });
    }

    // Close modals when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target.classList.contains('mb-modal')) {
            if (event.target.id === 'addBookModal') closeAddBookModal();
            if (event.target.id === 'editBookModal') closeEditBookModal();
        }
    });

    // File input labels update
    document.querySelectorAll('.mb-file-upload input[type="file"]').forEach(input => {
        input.addEventListener('change', function() {
            const label = this.nextElementSibling?.querySelector('span');
            if (label && this.files.length > 0) {
                label.textContent = this.files[0].name;
            }
        });
    });

    // Observer - load when section becomes visible
    let manageBooksLoaded = false;
    function checkAndLoad() {
        if (section && section.style.display !== 'none' && !manageBooksLoaded) {
            manageBooksLoaded = true;
            loadBooks();
        }
    }

    const observer = new MutationObserver(checkAndLoad);
    if (section) observer.observe(section, { attributes: true, attributeFilter: ['style'] });
    setTimeout(checkAndLoad, 300);
})();
</script>
