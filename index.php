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
</head>
<body>
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

        <!-- Main Menu -->
        <div class="menu-section">
            <h3 class="menu-title">Main Menu</h3>
            <ul class="menu-items">
                <li class="menu-item active" data-section="home-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="menu-text">Home</div>
                        <div class="menu-badge" id="dashboard-badge">5</div>
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
                        <div class="menu-badge" id="Al-Learning">3</div>
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
            </ul>
        </div>

        <!-- Admin Menu (Hidden by default, shown only to admins) -->
        <div class="menu-section admin-section" id="adminSection" style="display: none;">
            <h3 class="menu-title">Administration</h3>
            <ul class="menu-items">
                <li class="menu-item admin-menu-item" data-section="manage-books-section">
                    <a href="javascript:void(0);">
                        <div class="menu-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="menu-text">Manage Books</div>
                        <div class="menu-badge">Admin</div>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Resources -->
        <div class="menu-section">
            <h3 class="menu-title">Resources</h3>
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

        <!-- Your Learning Section -->
        <div id="learning-section" class="content-section" style="display: none; padding: 20px;">
            <h2>📈 Your Learning</h2>
            <p>Learning analytics will appear here.</p>
        </div>
 
        <!-- Repository Section -->
        <div id="repository-section" class="content-section" style="display: none; padding: 20px;">
            <h2>📚 Repository</h2>
            <p>Your learning resources will appear here.</p>
        </div>

        <!-- Chats Section -->
        <div id="chats-section" class="content-section" style="display: none; padding: 20px;">
            <h2>💬 Chats</h2>
            <p>Your conversations will appear here.</p>
        </div>

        <!-- Settings Section -->
        <?php include 'pages/settings.php'; ?>

        <!-- Help Section --> 
        <?php include 'pages/help_center.php'; ?>

        <!-- Manage Books Section (Admin Only) -->
        <?php include 'pages/admin_manage_book.php'; ?>

        <!-- Footer -->
        <?php include 'components/footer.php'; ?>
    </main>

    <script src="assets/main.js"></script>
</body>
</html>