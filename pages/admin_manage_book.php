<?php
// admin_manage_books.php
// This file contains both HTML + CSS + JS for the Admin Books Management section with Class Filter
?>

<!-- Manage Books Section (Admin Only) -->
<div id="manage-books-section" class="content-section" style="display: none;">
    <div class="courses-header">
        <div>
            <h3>📚 Manage Books (Admin)</h3>
            <p>Add, edit, delete and manage school/NCERT books</p>
        </div>
        <div class="courses-search">
            <i class="fas fa-search"></i>
            <input type="text" id="admin-book-search" placeholder="Search books by title, author or subject...">
        </div>
    </div>

    <hr class="divider">

    <!-- Messages -->
    <div id="admin-books-loading" class="loading-spinner-container" style="display: none;">
        <div class="spinner"></div>
        <p>Loading all books...</p>
    </div>

    <div id="admin-books-error" class="error-message" style="display: none;"></div>
    <div id="admin-books-success" class="success-message" style="display: none;"></div>

    <!-- Filters + Add Button -->
    <div class="subject-filters" style="justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <div style="display: flex; gap: 10px; flex-wrap: wrap; align-items: center;">
            <!-- Subject Filters -->
            <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                <button class="subject-filter-btn active" data-filter="all">📚 All Books</button>
                <button class="subject-filter-btn" data-filter="mathematics">📐 Mathematics</button>
                <button class="subject-filter-btn" data-filter="science">🔬 Science</button>
                <button class="subject-filter-btn" data-filter="hindi">📗 Hindi</button>
                <button class="subject-filter-btn" data-filter="english">📘 English</button>
                <button class="subject-filter-btn" data-filter="social">🌍 Social Studies</button>
                <button class="subject-filter-btn" data-filter="sanskrit">🕉️ Sanskrit</button>
                <button class="subject-filter-btn" data-filter="computer">💻 Computer</button>
            </div>
            
            <!-- Class Filter Dropdown -->
            <div style="display: flex; gap: 10px; align-items: center; margin-left: 15px;">
                <select id="classFilter" style="
                    padding: 10px 20px;
                    border: 2px solid #e0e0e0;
                    border-radius: 30px;
                    font-size: 15px;
                    color: #333;
                    background: white;
                    cursor: pointer;
                    outline: none;
                    min-width: 150px;
                ">
                    <option value="all">🎓 All Classes</option>
                    <?php for($i=1; $i<=12; $i++): ?>
                        <option value="<?= $i ?>">Class <?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>

        <button class="edit-profile-btn" id="addNewBookBtn">
            <i class="fas fa-plus"></i> Add New Book
        </button>
    </div>

    <!-- Active Filters Display -->
    <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 20px; min-height: 40px;" id="activeFiltersContainer">
        <div style="display: flex; gap: 10px; flex-wrap: wrap;" id="activeFilters"></div>
        <button id="clearAllFilters" style="
            background: none;
            border: none;
            color: #dc3545;
            cursor: pointer;
            font-size: 14px;
            display: none;
            padding: 5px 10px;
            border-radius: 20px;
            transition: all 0.3s;
        ">
            <i class="fas fa-times-circle"></i> Clear all filters
        </button>
    </div>

    <!-- Filter Summary -->
    <div id="filterSummary" style="margin: 10px 0 20px 0; color: #666; font-size: 14px;"></div>

    <!-- Books Grid -->
    <div class="books-grid" id="admin-books-grid">
        <!-- Dynamically populated -->
    </div>
</div>

<!-- ====================== MODALS ====================== -->

<!-- Add Book Modal -->
<div id="addBookModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal" onclick="closeAddModal()">&times;</span>
        <h2>Add New Book</h2>
        <form id="addBookForm">
            <div class="form-group">
                <label>Title *</label>
                <input type="text" id="bookTitle" required>
            </div>
            <div class="form-group">
                <label>Author *</label>
                <input type="text" id="bookAuthor" value="NCERT" required>
            </div>
            <div class="form-group">
                <label>Class *</label>
                <select id="bookClass" required>
                    <option value="">Select Class</option>
                    <?php for($i=1; $i<=12; $i++): ?>
                        <option value="<?= $i ?>">Class <?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Subject *</label>
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
            <div class="form-group">
                <label>Description (optional)</label>
                <textarea id="bookDescription"></textarea>
            </div>
            <div class="form-group">
                <label>Chapters JSON (optional)</label>
                <textarea id="bookChapters"  placeholder='[{"chapter_number":1,"title":"Chapter 1","page_start":1,"page_end":20}, ...]'></textarea>
            </div>
            <div class="form-group">
                <label>Cover Image (optional)</label>
                <input type="file" id="bookCover" accept="image/*">
            </div>
            <div class="form-group">
                <label>PDF File *</label>
                <input type="file" id="bookPdf" accept=".pdf" required>
            </div>
            <button type="submit" id="submitBookBtn">Upload Book</button>
        </form>
    </div>
</div>

<!-- Edit Book Modal -->
<div id="editBookModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal" onclick="closeEditModal()">&times;</span>
        <h2>Edit Book</h2>
        <form id="editBookForm">
            <input type="hidden" id="editBookId">
            
            <div class="form-group">
                <label>Title *</label>
                <input type="text" id="editTitle" required>
            </div>
            
            <div class="form-group">
                <label>Author *</label>
                <input type="text" id="editAuthor" required>
            </div>
            
            <div class="form-group">
                <label>Class *</label>
                <select id="editClass" required>
                    <option value="">Select Class</option>
                    <?php for($i=1; $i<=12; $i++): ?>
                        <option value="<?= $i ?>">Class <?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label>Subject *</label>
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
            
            <div class="form-group">
                <label>Description</label>
                <textarea id="editDescription"></textarea>
            </div>
            
            <div class="form-group">
                <label>Chapters JSON (optional)</label>
                <textarea id="editChapters"  placeholder='[{"chapter_number":1,"title":"Chapter 1","page_start":1,"page_end":20}]'></textarea>
                <small style="color: #666;">Edit the JSON array directly</small>
            </div>
            
            <div class="form-group">
                <label>Current Cover Image</label>
                <div id="currentCoverContainer"></div>
                <label style="margin-top: 10px; display: block;">Upload New Cover Image (optional)</label>
                <input type="file" id="editCover" accept="image/*">
            </div>
            
            <div class="form-group">
                <label>Current PDF</label>
                <div id="currentPdfContainer"></div>
                <label style="margin-top: 10px; display: block;">Upload New PDF (optional)</label>
                <input type="file" id="editPdf" accept=".pdf">
            </div>
            
            <div style="display: flex; gap: 10px; margin-top: 20px;">
                <button type="submit" id="updateBookBtn">Update Book</button>
                <button type="button" onclick="closeEditModal()" style="background: #6c757d;">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- ====================== STYLES ====================== -->
<style>
/* Reuse same styles as student view + admin specific tweaks */
.books-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 24px;
}

.book-card {
    position: relative;
    cursor: default;
}

.book-actions {
    position: absolute;
    top: 10px;
    right: 10px;
    display: flex;
    gap: 8px;
    opacity: 0;
    transition: opacity 0.3s;
}

.book-card:hover .book-actions {
    opacity: 1;
}

.action-btn {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: white;
    border: none;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    cursor: pointer;
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
}

.action-btn.edit {
    color: #4361ee;
}

.action-btn.delete {
    color: #dc3545;
}

.action-btn:hover {
    transform: scale(1.1);
}

.edit-profile-btn {
    background: linear-gradient(135deg, #06d6a0, #118ab2);
    color: white !important;
    padding: 12px 24px;
    border-radius: 30px;
    border: none;
    cursor: pointer;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
}

.modal {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

/* Hide scrollbar for Chrome, Safari and Opera */
.modal-content::-webkit-scrollbar {
    display: none;
}

.modal-content {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
    background: white;
    padding: 30px;
    border-radius: 16px;
    width: 90%;
    max-width: 600px;
    max-height: 90vh;
    overflow-y: auto;
    position: relative;
}

.close-modal {
    position: absolute;
    right: 20px;
    top: 15px;
    font-size: 32px;
    cursor: pointer;
    color: #666;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 12px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 15px;
    box-sizing: border-box;
}

.form-group textarea {
    min-height: 100px;
    resize: vertical;
}

#submitBookBtn,
#updateBookBtn {
    background: linear-gradient(135deg, #4361ee, #3a0ca3);
    color: white;
    border: none;
    padding: 14px 30px;
    border-radius: 30px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    width: 100%;
    margin-top: 20px;
}

#currentCoverContainer img {
    max-width: 100px;
    max-height: 100px;
    border-radius: 8px;
    margin: 10px 0;
    border: 2px solid #e0e0e0;
}

#currentPdfContainer a {
    display: inline-block;
    margin: 10px 0;
    padding: 8px 16px;
    background: #f8f9fa;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    color: #4361ee;
    text-decoration: none;
    font-weight: 600;
}

#currentPdfContainer a:hover {
    background: #e9ecef;
}

/* Filter chips animation */
#activeFilters span {
    animation: slideIn 0.3s ease;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-10px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

#clearAllFilters:hover {
    background: #fee;
    color: #c82333 !important;
}
</style>

<!-- ====================== JAVASCRIPT ====================== -->
<script>
// Admin Manage Books - Complete with Class Filter Support

(function() {
    console.log("=== Admin Manage Books Script Loaded with Class Filter ===");

    const API_BASE_URL = 'http://127.0.0.1:8000';  
    const BOOKS_API = `${API_BASE_URL}/student/books`;           // GET all books (admin sees all)
    const UPLOAD_API = `${API_BASE_URL}/admin/upload-book`;     // POST new book
    const UPDATE_API = (id) => `${API_BASE_URL}/admin/book/${id}`; // PUT update book
    const DELETE_API = (id) => `${API_BASE_URL}/admin/book/${id}`; // DELETE book  

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

    // Load Books (Admin sees ALL books)
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
            grid.innerHTML = `<div class="empty-books"><h3>Error loading books</h3><p>${err.message}</p></div>`;
        } finally {
            showLoading(false);
        }
    }

    // Filter and Render Books
    function filterAndRenderBooks() {
        let books = [...allBooks];

        // Subject filter apply
        if (currentSubjectFilter !== 'all') {
            books = books.filter(b => b.subject === currentSubjectFilter);
        }
        
        // Class filter apply
        if (currentClassFilter !== 'all') {
            books = books.filter(b => b.class == currentClassFilter);
        }

        // Search filter apply
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

    // Render Books Grid
    function renderBooks(books) {
        if (books.length === 0) {
            grid.innerHTML = `
                <div class="empty-books">
                    <i class="fas fa-book-open"></i>
                    <h3>No books found</h3>
                    <p>${currentSearch ? 'No matches for your search' : 'No books available yet'}</p>
                    <p style="font-size: 14px; color: #999;">
                        ${currentSubjectFilter !== 'all' ? `Subject: ${currentSubjectFilter} • ` : ''}
                        ${currentClassFilter !== 'all' ? `Class: ${currentClassFilter}` : ''}
                    </p>
                </div>
            `;
            return;
        }

        let html = '';

        books.forEach(book => {
            const subjectEmoji = {
                mathematics: '📐', science: '🔬', hindi: '📗', english: '📘',
                social: '🌍', sanskrit: '🕉️', computer: '💻'
            }[book.subject] || '📚';

            html += `
                <div class="book-card" data-subject="${book.subject}" data-class="${book.class}">
                    <div class="book-cover" style="background-image: url('${book.cover_image || 'https://via.placeholder.com/280x200/4361ee/fff?text=' + encodeURIComponent(book.title?.[0] || 'B')}')">
                        <div class="book-actions">
                            <button class="action-btn edit" onclick="editBook(${book.id})" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="action-btn delete" onclick="deleteBook(${book.id}, '${book.title.replace(/'/g,"\\'")}')" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="book-info">
                        <h4 class="book-title">${book.title || 'Untitled'}</h4>
                        <p class="book-author"><i class="fas fa-user"></i> ${book.author || 'NCERT'}</p>
                        <div class="book-meta">
                            <span><i class="fas fa-graduation-cap"></i> Class ${book.class}</span>
                            <span>${subjectEmoji} ${book.subject?.charAt(0).toUpperCase() + book.subject?.slice(1) || 'Unknown'}</span>
                        </div>
                        <div style="margin-top:10px; font-size:13px; color:#777;">
                            <i class="fas fa-file-pdf"></i> ${book.pages || '?'} pages • 
                            <i class="fas fa-list"></i> ${book.chapters?.length || 0} chapters
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
        
        // Subject filter chip
        if (currentSubjectFilter !== 'all') {
            hasActiveFilters = true;
            const subjectName = {
                mathematics: 'Mathematics', science: 'Science', hindi: 'Hindi',
                english: 'English', social: 'Social Studies', sanskrit: 'Sanskrit', computer: 'Computer'
            }[currentSubjectFilter] || currentSubjectFilter;
            
            activeFilters.innerHTML += `
                <span style="
                    background: #f0f4ff;
                    color: #4361ee;
                    padding: 5px 12px;
                    border-radius: 20px;
                    font-size: 13px;
                    display: inline-flex;
                    align-items: center;
                    gap: 5px;
                    box-shadow: 0 2px 5px rgba(67,97,238,0.2);
                ">
                    📚 ${subjectName}
                    <i class="fas fa-times" onclick="removeFilter('subject')" style="cursor: pointer; font-size: 12px;"></i>
                </span>
            `;
        }
        
        // Class filter chip
        if (currentClassFilter !== 'all') {
            hasActiveFilters = true;
            activeFilters.innerHTML += `
                <span style="
                    background: #f0f4ff;
                    color: #4361ee;
                    padding: 5px 12px;
                    border-radius: 20px;
                    font-size: 13px;
                    display: inline-flex;
                    align-items: center;
                    gap: 5px;
                    box-shadow: 0 2px 5px rgba(67,97,238,0.2);
                ">
                    🎓 Class ${currentClassFilter}
                    <i class="fas fa-times" onclick="removeFilter('class')" style="cursor: pointer; font-size: 12px;"></i>
                </span>
            `;
        }
        
        // Search filter chip
        if (currentSearch.trim()) {
            hasActiveFilters = true;
            activeFilters.innerHTML += `
                <span style="
                    background: #f0f4ff;
                    color: #4361ee;
                    padding: 5px 12px;
                    border-radius: 20px;
                    font-size: 13px;
                    display: inline-flex;
                    align-items: center;
                    gap: 5px;
                    box-shadow: 0 2px 5px rgba(67,97,238,0.2);
                ">
                    🔍 "${currentSearch}"
                    <i class="fas fa-times" onclick="removeFilter('search')" style="cursor: pointer; font-size: 12px;"></i>
                </span>
            `;
        }
        
        clearAllBtn.style.display = hasActiveFilters ? 'inline-block' : 'none';
    }

    // Update Filter Summary
    function updateFilterSummary(count) {
        if (!filterSummary) return;
        
        let filterParts = [];
        if (currentSubjectFilter !== 'all') {
            const subjectName = {
                mathematics: 'Mathematics', science: 'Science', hindi: 'Hindi',
                english: 'English', social: 'Social Studies', sanskrit: 'Sanskrit', computer: 'Computer'
            }[currentSubjectFilter] || currentSubjectFilter;
            filterParts.push(`Subject: ${subjectName}`);
        }
        if (currentClassFilter !== 'all') {
            filterParts.push(`Class: ${currentClassFilter}`);
        }
        if (currentSearch.trim()) {
            filterParts.push(`Search: "${currentSearch}"`);
        }
        
        if (filterParts.length > 0) {
            filterSummary.innerHTML = `📊 Showing <strong>${count}</strong> books • Filters: ${filterParts.join(' • ')}`;
        } else {
            filterSummary.innerHTML = `📊 Showing all <strong>${count}</strong> books`;
        }
    }

    // Remove Individual Filter
    window.removeFilter = function(type) {
        if (type === 'subject') {
            currentSubjectFilter = 'all';
            document.querySelectorAll('.subject-filter-btn').forEach(b => {
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
            
            // Reset UI
            document.querySelectorAll('.subject-filter-btn').forEach(b => {
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

    window.closeAddModal = function() {
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
        submitBtn.textContent = "Uploading...";

        try {
            const res = await fetch(UPLOAD_API, {
                method: 'POST',
                headers: { 'Authorization': `Bearer ${getToken()}` },
                body: formData
            });

            const result = await res.json();

            if (res.ok && result.success) {
                showSuccess("Book uploaded successfully!");
                closeAddModal();
                loadBooks();
            } else {
                showError(result.message || result.detail || "Upload failed");
            }
        } catch (err) {
            showError("Network error: " + err.message);
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = "Upload Book";
        }
    });

    // Edit Book
    window.editBook = async function(id) {
        const book = allBooks.find(b => b.id === id);
        if (!book) {
            showError("Book not found");
            return;
        }

        // Populate the edit modal with current book data
        document.getElementById('editBookId').value = book.id;
        document.getElementById('editTitle').value = book.title || '';
        document.getElementById('editAuthor').value = book.author || '';
        document.getElementById('editClass').value = book.class || '';
        document.getElementById('editSubject').value = book.subject || '';
        document.getElementById('editDescription').value = book.description || '';
        
        // Format chapters for display
        let chaptersStr = '';
        if (book.chapters && book.chapters.length > 0) {
            chaptersStr = JSON.stringify(book.chapters, null, 2);
        } else {
            chaptersStr = '[{"chapter_number":1,"title":"Chapter 1","page_start":1,"page_end":20}]';
        }
        document.getElementById('editChapters').value = chaptersStr;

        // Show current cover image
        const coverContainer = document.getElementById('currentCoverContainer');
        if (book.cover_image) {
            coverContainer.innerHTML = `<img src="${book.cover_image}" alt="Current cover">`;
        } else {
            coverContainer.innerHTML = '<p>No cover image</p>';
        }

        // Show current PDF link
        const pdfContainer = document.getElementById('currentPdfContainer');
        if (book.pdf_path) {
            pdfContainer.innerHTML = `<a href="${book.pdf_path}" target="_blank">View Current PDF</a>`;
        } else {
            pdfContainer.innerHTML = '<p>No PDF file</p>';
        }

        // Clear file inputs
        document.getElementById('editCover').value = '';
        document.getElementById('editPdf').value = '';

        // Show modal
        document.getElementById('editBookModal').style.display = 'flex';
    };

    window.closeEditModal = function() {
        document.getElementById('editBookModal').style.display = 'none';
        document.getElementById('editBookForm').reset();
    };

    // Edit Book Form Submit (PUT request)
    document.getElementById('editBookForm').addEventListener('submit', async (e) => {
        e.preventDefault();

        const bookId = document.getElementById('editBookId').value;
        const updateBtn = document.getElementById('updateBookBtn');
        
        const formData = new FormData();
        
        const title = document.getElementById('editTitle').value.trim();
        const author = document.getElementById('editAuthor').value.trim();
        const classValue = document.getElementById('editClass').value;
        const subject = document.getElementById('editSubject').value;
        const description = document.getElementById('editDescription').value.trim();
        const chapters = document.getElementById('editChapters').value.trim();
        
        formData.append('title', title);
        formData.append('author', author);
        formData.append('class_value', classValue);
        formData.append('subject', subject);
        
        if (description) {
            formData.append('description', description);
        }
        
        try {
            JSON.parse(chapters);
            formData.append('chapters', chapters);
        } catch (err) {
            showError("Invalid chapters JSON format");
            return;
        }

        const coverFile = document.getElementById('editCover').files[0];
        const pdfFile = document.getElementById('editPdf').files[0];

        if (coverFile) {
            formData.append('cover_image', coverFile);
        }
        
        if (pdfFile) {
            formData.append('pdf_file', pdfFile);
        }

        console.log("Updating book with ID:", bookId);
        for (let pair of formData.entries()) {
            console.log(pair[0] + ': ' + (pair[1] instanceof File ? pair[1].name : pair[1]));
        }

        updateBtn.disabled = true;
        updateBtn.textContent = "Updating...";

        try {
            const res = await fetch(UPDATE_API(bookId), {
                method: 'PUT',
                headers: { 
                    'Authorization': `Bearer ${getToken()}`
                },
                body: formData
            });

            const result = await res.json();
            console.log("Update response:", result);

            if (res.ok && result.success) {
                showSuccess("Book updated successfully!");
                closeEditModal();
                loadBooks();
            } else {
                showError(result.message || result.detail || "Update failed");
            }
        } catch (err) {
            console.error("Update error:", err);
            showError("Network error: " + err.message);
        } finally {
            updateBtn.disabled = false;
            updateBtn.textContent = "Update Book";
        }
    });

    // Delete Book
    window.deleteBook = async function(id, title) {

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
    // Subject filter buttons
    document.querySelectorAll('.subject-filter-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.subject-filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentSubjectFilter = btn.dataset.filter;
            filterAndRenderBooks();
        });
    });

    // Class filter dropdown
    if (classFilter) {
        classFilter.addEventListener('change', (e) => {
            currentClassFilter = e.target.value;
            filterAndRenderBooks();
        });
    }

    // Search input
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            currentSearch = e.target.value;
            filterAndRenderBooks();
        });
    }

    // Close modals when clicking outside
    window.onclick = function(event) {
        const addModal = document.getElementById('addBookModal');
        const editModal = document.getElementById('editBookModal');
        if (event.target === addModal) {
            closeAddModal();
        }
        if (event.target === editModal) {
            closeEditModal();
        }
    };

    // Observer - load when section becomes visible
    function checkAndLoad() {
        if (section && section.style.display !== 'none') {
            loadBooks();
        }
    }

    const observer = new MutationObserver(checkAndLoad);
    if (section) observer.observe(section, { attributes: true, attributeFilter: ['style'] });

    // Initial check
    setTimeout(checkAndLoad, 300);

    console.log("Admin Manage Books initialized with Class Filter support");
})();
</script>