<footer class="dashboard-footer">
    <p>© 2026 NeuraEduBot - Student Learning Platform | All Rights Reserved</p>
</footer>

<script>
// Advanced Last Login System
(function() {
    'use strict';

    // Function to format date nicely
    function formatDateTime(date) {
        const now = new Date();
        const today = now.toDateString();
        const yesterday = new Date(now);
        yesterday.setDate(yesterday.getDate() - 1);
        
        const options = { hour: 'numeric', minute: '2-digit', hour12: true };
        
        if (date.toDateString() === today) {
            return `Today, ${date.toLocaleTimeString('en-US', options)}`;
        } else if (date.toDateString() === yesterday.toDateString()) {
            return `Yesterday, ${date.toLocaleTimeString('en-US', options)}`;
        } else {
            return date.toLocaleDateString('en-US', { 
                month: 'short', 
                day: 'numeric',
                ...options
            });
        }
    }

    // Main function to update last login
    function initializeLastLogin() {
        const lastLoginElement = document.getElementById('lastLoginDisplay');
        if (!lastLoginElement) return;

        // Check if user is logged in
        const userJson = localStorage.getItem('user') || sessionStorage.getItem('user');
        
        if (!userJson) {
            lastLoginElement.textContent = 'Last login: Not logged in';
            return;
        }

        try {
            const user = JSON.parse(userJson);
            
            // Get login history from localStorage
            let loginHistory = JSON.parse(localStorage.getItem('loginHistory') || '[]');
            
            // Get current login time
            const currentLogin = new Date();
            
            if (loginHistory.length === 0) {
                // First login ever
                lastLoginElement.textContent = 'Last login: First time login';
                
                // Record this login
                loginHistory.push({
                    userId: user.id || user.email,
                    timestamp: currentLogin.toISOString(),
                    type: 'first'
                });
            } else {
                // Get last login (second last in history)
                const userLogins = loginHistory
                    .filter(entry => entry.userId === (user.id || user.email))
                    .sort((a, b) => new Date(b.timestamp) - new Date(a.timestamp));
                
                if (userLogins.length > 1) {
                    // User has logged in before
                    const lastLogin = new Date(userLogins[1].timestamp);
                    lastLoginElement.textContent = `Last login: ${formatDateTime(lastLogin)}`;
                } else {
                    // First login for this user
                    lastLoginElement.textContent = 'Last login: First time login';
                }
                
                // Record this login
                loginHistory.push({
                    userId: user.id || user.email,
                    timestamp: currentLogin.toISOString(),
                    type: 'regular'
                });
            }
            
            // Keep only last 10 logins per user to prevent storage overflow
            const maxEntries = 10;
            const userLogins = loginHistory
                .filter(entry => entry.userId === (user.id || user.email))
                .sort((a, b) => new Date(b.timestamp) - new Date(a.timestamp))
                .slice(0, maxEntries);
            
            // Keep only these entries plus other users' entries
            loginHistory = [
                ...userLogins,
                ...loginHistory.filter(entry => entry.userId !== (user.id || user.email))
            ];
            
            localStorage.setItem('loginHistory', JSON.stringify(loginHistory));
            
        } catch (error) {
            console.error('Error in last login system:', error);
            lastLoginElement.textContent = 'Last login: Unable to load';
        }
    }

    // Initialize on page load
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeLastLogin);
    } else {
        initializeLastLogin();
    }

})();
</script>