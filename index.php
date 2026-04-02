<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeuraEduBot | Student Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <!-- Add PDF.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <!-- ⭐ YEH LINE ADD KARO - CONFIG.JS ⭐ -->
    <script src="js/config.js"></script>
    <link rel="stylesheet" href="assets/sidebar.css">
</head>
<body>
    <!-- Sidebar Overlay (mobile) -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">

        <div class="logo-area">
            <div class="logo-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="logo-text">
                <h1>NeuraEduBot</h1>
                <p>Student Learning Platform</p>
            </div>
        </div>

        <div class="sidebar-inner">
        <!-- Main Menu -->
        <div class="menu-section">
            <h3 class="menu-title">MAIN MENU</h3>
            <ul class="menu-items">
                <li class="menu-item active" data-section="home-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="menu-text">Home</div>
                    </a>
                </li>
                <li class="menu-item" data-section="courses-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="menu-text">My Courses</div>
                    </a>
                </li> 
                <li class="menu-item" data-section="ai-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="menu-text">AI Learning</div>
                    </a>
                </li>
                <li class="menu-item" data-section="learning-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="menu-text">Your Learning</div>
                    </a>
                </li>
                <li class="menu-item" data-section="repository-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="menu-text">Repository</div>
                    </a>
                </li>
                <li class="menu-item" data-section="chats-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="menu-text">Chats</div>
                    </a>
                </li>
                <!-- AI & Creative Tools Dropdown -->
                <li class="menu-item admin-parent-item" id="aiCreativeToggleItem">
                    <a href="javascript:void(0);" id="aiCreativeToggleBtn">
                        <div class="menu-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="menu-text">AI & Creative Tools</div>
                        <div class="admin-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </a>
                </li>
                <ul class="admin-submenu" id="aiCreativeSubmenu">
                    <li class="menu-item admin-sub-item" data-section="cypher-section">
                        <a href="javascript:void(0);">
                            <div class="menu-icon"><i class="fas fa-code"></i></div>
                            <div class="menu-text">Cypher</div>
                        </a>
                    </li>
                    <li class="menu-item admin-sub-item" data-section="somnus-section">
                        <a href="javascript:void(0);">
                            <div class="menu-icon"><i class="fas fa-moon"></i></div>
                            <div class="menu-text">Somnus</div>
                        </a>
                    </li>
                    <li class="menu-item admin-sub-item" data-section="neuralab-section">
                        <a href="javascript:void(0);">
                            <div class="menu-icon"><i class="fas fa-brain"></i></div>
                            <div class="menu-text">Neuralab</div>
                        </a>
                    </li>
                    <li class="menu-item admin-sub-item" data-section="block-coding-section">
                        <a href="javascript:void(0);">
                            <div class="menu-icon"><i class="fas fa-puzzle-piece"></i></div>
                            <div class="menu-text">Visual Lab</div>
                        </a>
                    </li>
                </ul>

<li class="menu-item" data-section="glory-section">
    <a href="javascript:void(0);">
        <div class="menu-icon">
            <i class="fas fa-star"></i>
        </div>
        <div class="menu-text">Glory</div>
    </a>
</li>
<li class="menu-item" data-section="ai-world-section">
    <a href="javascript:void(0);">
        <div class="menu-icon">
            <i class="fas fa-brain"></i>
        </div>
        <div class="menu-text">AI World</div>
    </a>
</li>
            </ul>
        </div>

        <!-- Admin Menu (Hidden by default, shown only to admins) -->
        <div id="adminSection" style="display: none;">
            <li class="menu-item admin-parent-item" id="adminToggleItem">
                <a href="javascript:void(0);" id="adminToggleBtn">
                    <div class="menu-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="menu-text">Administrator</div>
                    <div class="admin-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </a>
            </li>
            <ul class="admin-submenu" id="adminSubmenu">
                <li class="menu-item admin-menu-item admin-sub-item" data-section="manage-books-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="menu-text">Manage Books</div>
                    </a>
                </li>
                <li class="menu-item admin-menu-item admin-sub-item" data-section="manage-website-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="menu-text">Manage Website</div>
                    </a>
                </li>
                <li class="menu-item admin-menu-item admin-sub-item" data-section="manage-students-section">
    <a href="javascript:void(0);">
        <div class="menu-icon">
            <i class="fas fa-users"></i>
        </div>
        <div class="menu-text">Manage Students</div>
    </a>
</li>
            </ul>
        </div>

        <!-- Resources -->
        <div class="menu-section">
            <h3 class="menu-title">RESOURCES</h3>
            <ul class="menu-items">
                <li class="menu-item" data-section="settings-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="menu-text">Settings</div>
                    </a>
                </li>
                <li class="menu-item" data-section="help-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <div class="menu-text">Help & Support</div>
                    </a>
                </li>
                <li class="menu-item" data-section="profile-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="menu-text">My Profile</div>
                    </a>
                </li>
            </ul>
        </div>
        </div><!-- /.sidebar-inner -->
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <?php include 'components/header.php'; ?>

       
        <!-- Home Section -->
       <?php include 'pages/home.php'; ?>

        <!-- AI Learning Section -->
        <?php include 'pages/ai-learning.php'; ?>

        <!-- Courses Section -->
        <?php include 'pages/courses.php'; ?>

        <!-- Profile Section -->
        <?php include 'pages/profile.php'; ?>

        <!-- Cypher Section -->
         <?php include 'components/cypher/cypher.php'; ?>

        <!-- Your Learning Section -->
      <?php include 'components/your_learning/your_learning.php'; ?>
 
        <!-- Repository Section -->
        <?php include 'components/repository/repository.php'; ?>

        <!-- Chats Section -->
        <?php include 'components/chats/chats.php'; ?>

        <!-- Somnus Section -->
        <?php include 'components/somnus/somnus.php'; ?>

        <!-- Neuralab Section -->
        <?php include 'components/neuralab/neuralab.php'; ?>

        <!-- Glory Section -->
        <?php include 'components/glory/glory.php'; ?>

        <!-- Ai World -->
         <?php include 'components/ai_world/ai_world.php'; ?>

        <!-- Visual Learning Lab (Block Coding) -->
        <?php include 'pages/block-coding.php'; ?>

        <!-- Settings Section -->
        <?php include 'pages/settings.php'; ?>

        <!-- Help Section --> 
        <?php include 'pages/help_center.php'; ?>

        <!-- Manage Books Section (Admin Only) -->
        <?php include 'pages/admin_manage_book.php'; ?>

        <!-- Manage Website Section (Admin Only) -->    
        <?php include 'pages/admin_manage_website.php'; ?>

        <!-- Manage Students Section (Admin Only) -->
        <?php include 'components/admin_manage_students/admin_manage_students.php'; ?>

        <!-- Footer -->
        <?php include 'components/footer.php'; ?>
    </main>
    
    <script src="assets/main.js"></script>
</body>
</html>