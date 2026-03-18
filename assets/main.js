// client/assets/main.js

document.addEventListener("DOMContentLoaded", function () {

    /* =========================================================
       MOBILE MENU / SIDEBAR
    ========================================================== */

    const menuToggle = document.getElementById("menuToggle");
    const sidebar = document.getElementById("sidebar");

    if (menuToggle && sidebar) {
        menuToggle.addEventListener("click", function () {
            sidebar.classList.toggle("active");
        });

        document.addEventListener("click", function (e) {
            if (window.innerWidth < 992) {
                if (!sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
                    sidebar.classList.remove("active");
                }
            }
        });
    }

    /* =========================================================
       SECTION SWITCHING WITH ROLE CHECK AND PERSISTENCE
    ========================================================== */

    const menuItems = document.querySelectorAll(".menu-item");
    const sections = document.querySelectorAll(".content-section");

    // Function to save active section to localStorage
    function saveActiveSection(sectionId) {
        localStorage.setItem("activeSection", sectionId);
    }

    // Function to load active section from localStorage
    function loadActiveSection() {
        return localStorage.getItem("activeSection") || "home-section";
    }

    // Function to show a specific section
    function showSection(sectionId) {
        // Hide all sections
        sections.forEach(section => {
            section.style.display = "none";
            section.classList.remove("active-section");
        });

        // Show target section
        const target = document.getElementById(sectionId);
        if (target) {
            target.style.display = "block";
            target.classList.add("active-section");
        }

        // Update active menu item
        menuItems.forEach(item => {
            item.classList.remove("active");
            if (item.getAttribute("data-section") === sectionId) {
                item.classList.add("active");
            }
        });

        // Save to localStorage
        saveActiveSection(sectionId);
    }

    // Add click handlers to menu items
    menuItems.forEach(item => {
        item.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = this.getAttribute("data-section");
            
            // Check if trying to access admin section
            if (targetId === "manage-books-section") {
                const userJson = localStorage.getItem("user");
                if (userJson) {
                    try {
                        const user = JSON.parse(userJson);
                        if (!user.role || user.role.toLowerCase() !== "administrator") {
                            alert("⚠️ Access Denied: Admin privileges required.");
                            return; // Don't proceed
                        }
                    } catch (err) {
                        console.error("Error checking role:", err);
                        alert("Error verifying permissions.");
                        return;
                    }
                } else {
                    alert("Please log in first.");
                    window.location.href = "login.php";
                    return;
                }
            }

            // Show the selected section
            showSection(targetId);

            // Close sidebar on mobile
            if (window.innerWidth < 992 && sidebar) {
                sidebar.classList.remove("active");
            }
        });
    });

    // Load saved section on page load
    const savedSection = loadActiveSection();
    
    // Verify if saved section is accessible for current user
    if (savedSection === "manage-books-section") {
        const userJson = localStorage.getItem("user");
        if (userJson) {
            try {
                const user = JSON.parse(userJson);
                if (user.role && user.role.toLowerCase() === "administrator") {
                    showSection(savedSection);
                } else {
                    showSection("home-section");
                }
            } catch (err) {
                showSection("home-section");
            }
        } else {
            showSection("home-section");
        }
    } else {
        showSection(savedSection);
    }

    /* =========================================================
       USER HEADER (FROM localStorage)
    ========================================================== */

    function updateUserHeader() {
        const userJson = localStorage.getItem("user");

        if (!userJson || userJson === "undefined" || userJson === "null") {
            // Redirect to login if no user
            // Uncomment the line below if you want to redirect
            // window.location.href = "login.php";
            return;
        }

        try {
            const user = JSON.parse(userJson);

            const fullName =
                user.full_name ||
                user.name ||
                user.username ||
                (user.email ? user.email.split("@")[0] : "User");

            const firstName = fullName.split(" ")[0];

            const welcomeHeading = document.getElementById("welcomeHeading");
            const welcomeSubtitle = document.getElementById("welcomeSubtitle");
            const userAvatar = document.getElementById("userAvatar");
            const userFullName = document.getElementById("userFullName");
            const userSubtitle = document.getElementById("userSubtitle");

            if (welcomeHeading)
                welcomeHeading.textContent = `Welcome back, ${firstName}!`;

            if (welcomeSubtitle)
                welcomeSubtitle.textContent = "Your academic progress summary";

            if (userFullName)
                userFullName.textContent = fullName;

            if (userAvatar) {
                const initials = fullName
                    .split(" ")
                    .map(w => w.charAt(0).toUpperCase())
                    .join("")
                    .substring(0, 2);
                userAvatar.textContent = initials || "??";
            }

            if (userSubtitle) {
                if (user.role) {
                    if (user.role.toLowerCase() === "administrator") {
                        userSubtitle.textContent = "Administrator";
                    } else if (user.role.toLowerCase() === "student") {
                        userSubtitle.textContent = user.grade
                            ? `Grade ${user.grade}`
                            : "Student";
                    } else {
                        userSubtitle.textContent = user.role;
                    }
                } else {
                    userSubtitle.textContent = "User";
                }
            }

            // After updating header, check role for admin components
            checkUserRoleAndShowAdminComponents();

        } catch (err) {
            console.error("User parse error:", err);
        }
    }

    /* =========================================================
       CHECK USER ROLE AND SHOW/HIDE ADMIN COMPONENTS
    ========================================================== */

    function checkUserRoleAndShowAdminComponents() {
        const userJson = localStorage.getItem("user");
        
        if (!userJson || userJson === "undefined" || userJson === "null") {
            return;
        }

        try {
            const user = JSON.parse(userJson);
            const adminSection = document.getElementById("adminSection");
            const adminMenuItems = document.querySelectorAll(".admin-menu-item");
            
            // Check if user is admin (case insensitive)
            if (user.role && user.role.toLowerCase() === "administrator") {
                // Show admin section
                if (adminSection) {
                    adminSection.style.display = "block";
                }
                
                // Show any admin-only menu items
                adminMenuItems.forEach(item => {
                    item.style.display = "block";
                });
                
                console.log("👑 Admin detected - showing admin components");
                
                // If current active section is admin section, keep it
                const currentActive = localStorage.getItem("activeSection");
                if (currentActive === "manage-books-section") {
                    showSection("manage-books-section");
                }
                
            } else {
                // Hide admin section for non-admins
                if (adminSection) {
                    adminSection.style.display = "none";
                }
                
                // Hide admin-only menu items
                adminMenuItems.forEach(item => {
                    item.style.display = "none";
                });
                
                // If admin section is currently active, switch to home
                const currentActive = localStorage.getItem("activeSection");
                if (currentActive === "manage-books-section") {
                    showSection("home-section");
                }
                
                console.log("👤 Student detected - hiding admin components");
            }
            
        } catch (err) {
            console.error("Error checking user role:", err);
        }
    }

    /* =========================================================
       USER DROPDOWN
    ========================================================== */

    const userDropdown = document.getElementById("userDropdown");
    const dropdownMenu = document.getElementById("userDropdownMenu");

    if (userDropdown && dropdownMenu) {
        userDropdown.addEventListener("click", function (e) {
            e.stopPropagation();
            dropdownMenu.style.display =
                dropdownMenu.style.display === "block" ? "none" : "block";
        });

        document.addEventListener("click", function (e) {
            if (!userDropdown.contains(e.target)) {
                dropdownMenu.style.display = "none";
            }
        });
    }

    /* =========================================================
       LOGOUT FUNCTIONALITY
    ========================================================== */

    const logoutBtn = document.getElementById("logoutBtn");
    if (logoutBtn) {
        logoutBtn.addEventListener("click", function(e) {
            e.preventDefault();
            if (confirm("Are you sure you want to logout?")) {
                // Clear all localStorage items
                localStorage.removeItem("user");
                localStorage.removeItem("activeSection");
                window.location.href = "login.php";
            }
        });
    }

    /* =========================================================
       INITIALIZATION
    ========================================================== */

    // Call updateUserHeader on page load
    updateUserHeader();

    // Watch for localStorage changes (in case role updates in another tab)
    window.addEventListener("storage", function(e) {
        if (e.key === "user") {
            updateUserHeader();
            
            // Also check if we need to switch sections based on role change
            const newUser = JSON.parse(e.newValue);
            const oldUser = JSON.parse(e.oldValue);
            
            if (newUser && oldUser && newUser.role !== oldUser.role) {
                if (newUser.role && newUser.role.toLowerCase() === "administrator") {
                    // If became admin, stay on current section or show admin
                    const currentActive = localStorage.getItem("activeSection");
                    if (currentActive === "manage-books-section") {
                        showSection("manage-books-section");
                    }
                } else {
                    // If no longer admin, switch from admin section
                    const currentActive = localStorage.getItem("activeSection");
                    if (currentActive === "manage-books-section") {
                        showSection("home-section");
                    }
                }
            }
        }
    });

});