<div id="home-section" class="content-section active-section">

<style>
/* ===== HOME MASTER HUB STYLES - AI WORLD THEME ===== */
:root {
    --aiw-primary: #3f66e6;
    --aiw-primary-dark: #2b4fc1;
    --aiw-primary-light: #0ed3a2;
    --aiw-primary-teal: #129695;
    --aiw-card-bg: #ffffff;
    --aiw-text-dark: #2b2d42;
    --aiw-text-light: #8d99ae;
    --aiw-border: #e9ecef;
    --aiw-success: #0ed3a2;
    --aiw-danger: #ef476f;
    --aiw-warning: #ffd166;
    --aiw-purple: #7209b7;
    --aiw-pink: #f72585;
}

/* Hero Banner with AI World Gradient */
.home-hero {
    background: linear-gradient(135deg, var(--aiw-primary) 0%, var(--aiw-primary-teal) 50%, var(--aiw-primary-light) 100%);
    border-radius: 20px;
    padding: 40px;
    color: #fff;
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
}
.home-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(255,255,255,0.12) 0%, transparent 70%);
    border-radius: 50%;
}
.home-hero::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: 10%;
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
    border-radius: 50%;
}
.home-hero-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 24px;
}
.home-hero-left {
    display: flex;
    align-items: center;
    gap: 24px;
}
.home-hero-icon {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    border: 3px solid rgba(255,255,255,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 38px;
    flex-shrink: 0;
}
.home-hero-info h2 {
    font-size: 26px;
    font-weight: 700;
    margin: 0 0 4px;
}
.home-hero-info p {
    margin: 0;
    opacity: 0.85;
    font-size: 15px;
}
.home-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(6px);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    margin-top: 8px;
}
.home-hero-right {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0;
}
.home-time-badge {
    padding: 10px 22px;
    border-radius: 14px;
    border: 2px solid rgba(255,255,255,0.4);
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(6px);
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* Quick Stats Row */
.home-stats-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}
.home-stat-card {
    background: var(--aiw-card-bg);
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: flex;
    align-items: center;
    gap: 16px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.home-stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(63,102,230,0.12);
}
.home-stat-icon {
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
.home-stat-info h4 {
    font-size: 13px;
    color: var(--aiw-text-light);
    margin: 0 0 4px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.home-stat-info .home-stat-val {
    font-size: 26px;
    font-weight: 700;
    color: var(--aiw-text-dark);
    line-height: 1;
}

/* Section Title */
.home-section-title {
    font-size: 20px;
    font-weight: 700;
    color: var(--aiw-text-dark);
    margin: 0 0 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.home-section-title i {
    color: var(--aiw-primary);
    font-size: 18px;
}

/* Navigation Cards Grid */
.home-nav-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 22px;
    margin-bottom: 35px;
}
.home-nav-card {
    background: var(--aiw-card-bg);
    border-radius: 16px;
    padding: 28px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    cursor: pointer;
    transition: all 0.3s ease;
    border: 1px solid transparent;
    position: relative;
    overflow: hidden;
}
.home-nav-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    border-radius: 16px 16px 0 0;
    opacity: 0;
    transition: opacity 0.3s ease;
}
.home-nav-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 35px rgba(63,102,230,0.15);
}
.home-nav-card:hover::before {
    opacity: 1;
}
.home-nav-card-header {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 14px;
}
.home-nav-card-icon {
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
.home-nav-card-title {
    font-size: 17px;
    font-weight: 700;
    color: var(--aiw-text-dark);
    margin: 0;
}
.home-nav-card-desc {
    font-size: 13px;
    color: var(--aiw-text-light);
    line-height: 1.6;
    margin-bottom: 16px;
}
.home-nav-card-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.home-nav-card-tag {
    font-size: 11px;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 10px;
}
.home-nav-card-arrow {
    font-size: 13px;
    font-weight: 600;
    color: var(--aiw-primary);
    display: flex;
    align-items: center;
    gap: 6px;
    transition: gap 0.2s;
}
.home-nav-card:hover .home-nav-card-arrow {
    gap: 10px;
}

/* Quick Access Row */
.home-quick-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
    gap: 16px;
    margin-bottom: 35px;
}
.home-quick-item {
    text-align: center;
    padding: 22px 14px;
    border-radius: 16px;
    background: var(--aiw-card-bg);
    box-shadow: 0 4px 16px rgba(0,0,0,0.05);
    cursor: pointer;
    transition: all 0.3s ease;
}
.home-quick-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(63,102,230,0.15);
}
.home-quick-icon {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 10px;
    color: #fff;
}
.home-quick-name {
    font-size: 13px;
    font-weight: 600;
    color: var(--aiw-text-dark);
    line-height: 1.3;
}
.home-quick-sub {
    font-size: 11px;
    color: var(--aiw-text-light);
    margin-top: 4px;
}

/* Responsive */
@media (max-width: 900px) {
    .home-hero { padding: 28px; }
    .home-hero-content { flex-direction: column; text-align: center; }
    .home-hero-left { flex-direction: column; }
    .home-nav-grid { grid-template-columns: 1fr; }
}
@media (max-width: 560px) {
    .home-stats-row { grid-template-columns: repeat(2, 1fr); }
    .home-quick-grid { grid-template-columns: repeat(3, 1fr); }
}
</style>

<!-- ========== HERO BANNER ========== -->
<div class="home-hero">
    <div class="home-hero-content">
        <div class="home-hero-left">
            <div class="home-hero-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="home-hero-info">
                <h2 id="homeWelcomeText">Welcome back!</h2>
                <p>Your all-in-one learning command center</p>
                <div class="home-hero-badge">
                    <i class="fas fa-bolt"></i>
                    <span id="homeGreetingBadge">Explore all features below</span>
                </div>
            </div>
        </div>
        <div class="home-hero-right">
            <div class="home-time-badge">
                <i class="fas fa-clock"></i>
                <span id="homeCurrentTime">--:--</span>
            </div>
        </div>
    </div>
</div>

<!-- ========== QUICK ACCESS ========== -->
<h3 class="home-section-title"><i class="fas fa-bolt"></i> Quick Access</h3>
<div class="home-quick-grid">
    <div class="home-quick-item" data-navigate="courses-section">
        <div class="home-quick-icon" style="background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-dark));"><i class="fas fa-book-open"></i></div>
        <div class="home-quick-name">My Courses</div>
        <div class="home-quick-sub">Books & PDFs</div>
    </div>
    <div class="home-quick-item" data-navigate="ai-section">
        <div class="home-quick-icon" style="background: linear-gradient(135deg, var(--aiw-purple), #560bad);"><i class="fas fa-tasks"></i></div>
        <div class="home-quick-name">AI Learning</div>
        <div class="home-quick-sub">Smart Study</div>
    </div>
    <div class="home-quick-item" data-navigate="chats-section">
        <div class="home-quick-icon" style="background: linear-gradient(135deg, var(--aiw-success), #0cb892);"><i class="fas fa-comments"></i></div>
        <div class="home-quick-name">Chats</div>
        <div class="home-quick-sub">Messaging</div>
    </div>
    <div class="home-quick-item" data-navigate="cypher-section">
        <div class="home-quick-icon" style="background: linear-gradient(135deg, var(--aiw-pink), #e63946);"><i class="fas fa-code"></i></div>
        <div class="home-quick-name">Cypher</div>
        <div class="home-quick-sub">Code Editor</div>
    </div>
    <div class="home-quick-item" data-navigate="learning-section">
        <div class="home-quick-icon" style="background: linear-gradient(135deg, var(--aiw-warning), #f9c74f);"><i class="fas fa-chart-line"></i></div>
        <div class="home-quick-name">Your Learning</div>
        <div class="home-quick-sub">Progress</div>
    </div>
    <div class="home-quick-item" data-navigate="ai-world-section">
        <div class="home-quick-icon" style="background: linear-gradient(135deg, var(--aiw-primary-teal), var(--aiw-success));"><i class="fas fa-globe"></i></div>
        <div class="home-quick-name">AI World</div>
        <div class="home-quick-sub">News & Trends</div>
    </div>
</div>

<!-- ========== LEARNING TOOLS ========== -->
<h3 class="home-section-title"><i class="fas fa-book-reader"></i> Learning Tools</h3>
<div class="home-nav-grid">
    <!-- My Courses -->
    <div class="home-nav-card" data-navigate="courses-section" style="--card-color: var(--aiw-primary);">
        <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg, var(--aiw-primary), var(--aiw-primary-dark));border-radius:16px 16px 0 0;"></div>
        <div class="home-nav-card-header">
            <div class="home-nav-card-icon" style="background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-dark));"><i class="fas fa-book-open"></i></div>
            <div class="home-nav-card-title">My Courses</div>
        </div>
        <div class="home-nav-card-desc">Access your books, read PDFs, and study with AI-powered assistance for every subject.</div>
        <div class="home-nav-card-footer">
            <span class="home-nav-card-tag" style="background: #eef2ff; color: var(--aiw-primary);">Study Material</span>
            <span class="home-nav-card-arrow">Open <i class="fas fa-arrow-right"></i></span>
        </div>
    </div>

    <!-- AI Learning -->
    <div class="home-nav-card" data-navigate="ai-section">
        <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg, var(--aiw-purple), #560bad);border-radius:16px 16px 0 0;"></div>
        <div class="home-nav-card-header">
            <div class="home-nav-card-icon" style="background: linear-gradient(135deg, var(--aiw-purple), #560bad);"><i class="fas fa-tasks"></i></div>
            <div class="home-nav-card-title">AI Learning</div>
        </div>
        <div class="home-nav-card-desc">Learn from websites with AI chatbot. Ask questions, take quizzes, and boost your knowledge.</div>
        <div class="home-nav-card-footer">
            <span class="home-nav-card-tag" style="background: #f3e5f5; color: var(--aiw-purple);">AI Powered</span>
            <span class="home-nav-card-arrow">Open <i class="fas fa-arrow-right"></i></span>
        </div>
    </div>

    <!-- Your Learning -->
    <div class="home-nav-card" data-navigate="learning-section">
        <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg, var(--aiw-warning), #f9c74f);border-radius:16px 16px 0 0;"></div>
        <div class="home-nav-card-header">
            <div class="home-nav-card-icon" style="background: linear-gradient(135deg, var(--aiw-warning), #f9c74f);"><i class="fas fa-chart-line"></i></div>
            <div class="home-nav-card-title">Your Learning</div>
        </div>
        <div class="home-nav-card-desc">Track your study streaks, learning stats, quiz results, and weak areas all in one place.</div>
        <div class="home-nav-card-footer">
            <span class="home-nav-card-tag" style="background: #fff8e1; color: #856404;">Analytics</span>
            <span class="home-nav-card-arrow">Open <i class="fas fa-arrow-right"></i></span>
        </div>
    </div>

    <!-- Repository -->
    <div class="home-nav-card" data-navigate="repository-section">
        <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg, var(--aiw-success), #0cb892);border-radius:16px 16px 0 0;"></div>
        <div class="home-nav-card-header">
            <div class="home-nav-card-icon" style="background: linear-gradient(135deg, var(--aiw-success), #0cb892);"><i class="fas fa-calendar-alt"></i></div>
            <div class="home-nav-card-title">Repository</div>
        </div>
        <div class="home-nav-card-desc">Browse and manage your shared resources, files, and educational materials in one hub.</div>
        <div class="home-nav-card-footer">
            <span class="home-nav-card-tag" style="background: #e8faf4; color: var(--aiw-success);">Resources</span>
            <span class="home-nav-card-arrow">Open <i class="fas fa-arrow-right"></i></span>
        </div>
    </div>

    <!-- Glory -->
    <div class="home-nav-card" data-navigate="glory-section">
        <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg, var(--aiw-danger), #e63946);border-radius:16px 16px 0 0;"></div>
        <div class="home-nav-card-header">
            <div class="home-nav-card-icon" style="background: linear-gradient(135deg, var(--aiw-danger), #e63946);"><i class="fas fa-star"></i></div>
            <div class="home-nav-card-title">Glory</div>
        </div>
        <div class="home-nav-card-desc">Celebrate achievements, earn badges, and track your milestones on your learning journey.</div>
        <div class="home-nav-card-footer">
            <span class="home-nav-card-tag" style="background: #fce4ec; color: var(--aiw-danger);">Achievements</span>
            <span class="home-nav-card-arrow">Open <i class="fas fa-arrow-right"></i></span>
        </div>
    </div>
</div>

<!-- ========== AI & CREATIVE TOOLS ========== -->
<h3 class="home-section-title"><i class="fas fa-robot"></i> AI & Creative Tools</h3>
<div class="home-nav-grid">
    <div class="home-nav-card" data-navigate="cypher-section">
        <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg, var(--aiw-pink), #e63946);border-radius:16px 16px 0 0;"></div>
        <div class="home-nav-card-header">
            <div class="home-nav-card-icon" style="background: linear-gradient(135deg, var(--aiw-pink), #e63946);"><i class="fas fa-code"></i></div>
            <div class="home-nav-card-title">Cypher</div>
        </div>
        <div class="home-nav-card-desc">Write, run, and test code in multiple programming languages with a built-in editor.</div>
        <div class="home-nav-card-footer">
            <span class="home-nav-card-tag" style="background: #fce4ec; color: var(--aiw-pink);">Code Editor</span>
            <span class="home-nav-card-arrow">Open <i class="fas fa-arrow-right"></i></span>
        </div>
    </div>
    <div class="home-nav-card" data-navigate="somnus-section">
        <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg, #3a0ca3, var(--aiw-primary));border-radius:16px 16px 0 0;"></div>
        <div class="home-nav-card-header">
            <div class="home-nav-card-icon" style="background: linear-gradient(135deg, #3a0ca3, var(--aiw-primary));"><i class="fas fa-moon"></i></div>
            <div class="home-nav-card-title">Somnus</div>
        </div>
        <div class="home-nav-card-desc">A creative canvas for drawing, sketching, and visualizing your ideas freely.</div>
        <div class="home-nav-card-footer">
            <span class="home-nav-card-tag" style="background: #ede7f6; color: #3a0ca3;">Canvas</span>
            <span class="home-nav-card-arrow">Open <i class="fas fa-arrow-right"></i></span>
        </div>
    </div>
    <div class="home-nav-card" data-navigate="neuralab-section">
        <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg, var(--aiw-primary-teal), var(--aiw-success));border-radius:16px 16px 0 0;"></div>
        <div class="home-nav-card-header">
            <div class="home-nav-card-icon" style="background: linear-gradient(135deg, var(--aiw-primary-teal), var(--aiw-success));"><i class="fas fa-brain"></i></div>
            <div class="home-nav-card-title">Neuralab</div>
        </div>
        <div class="home-nav-card-desc">Explore interactive science experiments and simulations in a virtual lab environment.</div>
        <div class="home-nav-card-footer">
            <span class="home-nav-card-tag" style="background: #e8faf4; color: var(--aiw-primary-teal);">Experiments</span>
            <span class="home-nav-card-arrow">Open <i class="fas fa-arrow-right"></i></span>
        </div>
    </div>
    <div class="home-nav-card" data-navigate="block-coding-section">
        <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg, #ff6b6b, var(--aiw-warning));border-radius:16px 16px 0 0;"></div>
        <div class="home-nav-card-header">
            <div class="home-nav-card-icon" style="background: linear-gradient(135deg, #ff6b6b, var(--aiw-warning));"><i class="fas fa-puzzle-piece"></i></div>
            <div class="home-nav-card-title">Visual Lab</div>
        </div>
        <div class="home-nav-card-desc">Learn programming through visual block-based coding. Drag, drop, and create logic easily.</div>
        <div class="home-nav-card-footer">
            <span class="home-nav-card-tag" style="background: #fff3e0; color: #ff6b6b;">Block Coding</span>
            <span class="home-nav-card-arrow">Open <i class="fas fa-arrow-right"></i></span>
        </div>
    </div>
</div>

<!-- ========== COMMUNICATION & NEWS ========== -->
<h3 class="home-section-title"><i class="fas fa-satellite-dish"></i> Communication & News</h3>
<div class="home-nav-grid">
    <!-- Chats -->
    <div class="home-nav-card" data-navigate="chats-section">
        <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg, var(--aiw-success), #4cc9f0);border-radius:16px 16px 0 0;"></div>
        <div class="home-nav-card-header">
            <div class="home-nav-card-icon" style="background: linear-gradient(135deg, var(--aiw-success), #4cc9f0);"><i class="fas fa-comments"></i></div>
            <div class="home-nav-card-title">Chats</div>
        </div>
        <div class="home-nav-card-desc">Connect with classmates in subject-based chat rooms. Discuss, share, and learn together.</div>
        <div class="home-nav-card-footer">
            <span class="home-nav-card-tag" style="background: #e0f7fa; color: #00838f;">Messaging</span>
            <span class="home-nav-card-arrow">Open <i class="fas fa-arrow-right"></i></span>
        </div>
    </div>

    <!-- AI World -->
    <div class="home-nav-card" data-navigate="ai-world-section">
        <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg, var(--aiw-primary), var(--aiw-success));border-radius:16px 16px 0 0;"></div>
        <div class="home-nav-card-header">
            <div class="home-nav-card-icon" style="background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-success));"><i class="fas fa-globe"></i></div>
            <div class="home-nav-card-title">AI World</div>
        </div>
        <div class="home-nav-card-desc">Stay updated with the latest AI news, trends, breakthroughs, and industry updates.</div>
        <div class="home-nav-card-footer">
            <span class="home-nav-card-tag" style="background: #eef2ff; color: var(--aiw-primary);">Live Feed</span>
            <span class="home-nav-card-arrow">Open <i class="fas fa-arrow-right"></i></span>
        </div>
    </div>
</div>

<!-- ========== JAVASCRIPT ========== -->
<script>
(function() {
    // Navigate to section on card click
    document.querySelectorAll('[data-navigate]').forEach(card => {
        card.addEventListener('click', function() {
            const sectionId = this.getAttribute('data-navigate');
            // Trigger sidebar menu item click
            const menuItem = document.querySelector(`.menu-item[data-section="${sectionId}"]`);
            if (menuItem) menuItem.click();
        });
    });

    // Welcome text with user name from localStorage
    function updateHomeWelcome() {
        const token = localStorage.getItem('access_token');
        if (!token) return;
        
        // Try to get user from localStorage
        let userName = null;
        try {
            const userData = localStorage.getItem('user_data');
            if (userData) {
                const user = JSON.parse(userData);
                userName = user.full_name || user.name;
            }
        } catch(e) {}
        
        if (!userName) {
            // Try to get from /me API
            fetch(CONFIG.getApiUrl('/me'), {
                headers: { 'Authorization': `Bearer ${token}` }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success && data.data.user) {
                    const fullName = data.data.user.full_name;
                    const firstName = fullName ? fullName.split(' ')[0] : 'Student';
                    const welcomeEl = document.getElementById('homeWelcomeText');
                    if (welcomeEl) welcomeEl.textContent = `Welcome back, ${firstName}!`;
                    
                    // Store user data
                    localStorage.setItem('user_data', JSON.stringify(data.data.user));
                }
            })
            .catch(err => console.log('Error fetching user:', err));
        } else {
            const firstName = userName.split(' ')[0];
            const welcomeEl = document.getElementById('homeWelcomeText');
            if (welcomeEl) welcomeEl.textContent = `Welcome back, ${firstName}!`;
        }
    }

    // Live clock
    function updateHomeClock() {
        const el = document.getElementById('homeCurrentTime');
        if (!el) return;
        const now = new Date();
        const hours = now.getHours();
        const mins = String(now.getMinutes()).padStart(2, '0');
        const ampm = hours >= 12 ? 'PM' : 'AM';
        const h = hours % 12 || 12;
        el.textContent = `${h}:${mins} ${ampm}`;

        // Update greeting badge
        const badge = document.getElementById('homeGreetingBadge');
        if (badge) {
            if (hours < 12) badge.textContent = 'Good Morning! Start your learning journey 🌅';
            else if (hours < 17) badge.textContent = 'Good Afternoon! Keep the momentum going 📚';
            else badge.textContent = 'Good Evening! Review what you learned today 🌙';
        }
    }

    updateHomeWelcome();
    updateHomeClock();
    setInterval(updateHomeClock, 30000);
})();
</script>

</div>