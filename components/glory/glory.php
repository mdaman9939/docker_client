<!-- Glory Section -->
<div id="glory-section" class="content-section" style="display: none;">

<style>
/* ===== GLORY SECTION STYLES - AI WORLD THEME ===== */

/* Hero Banner - AI World Gradient */
.glory-hero {
    background: linear-gradient(135deg, #3f66e6 0%, #0ed3a2 50%, #129695 100%);
    border-radius: 24px;
    padding: 40px;
    color: #fff;
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
}
.glory-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, transparent 70%);
    border-radius: 50%;
}
.glory-hero::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: 10%;
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    border-radius: 50%;
}
.glory-hero-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 24px;
}
.glory-hero-left {
    display: flex;
    align-items: center;
    gap: 24px;
}
.glory-avatar {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(10px);
    border: 3px solid rgba(255,255,255,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 38px;
    flex-shrink: 0;
}
.glory-hero-info h2 {
    font-size: 26px;
    font-weight: 700;
    margin: 0 0 4px;
    color: #fff;
}
.glory-hero-info p {
    margin: 0;
    opacity: 0.9;
    font-size: 15px;
}
.glory-level-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(8px);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    margin-top: 8px;
}
.glory-xp-ring {
    text-align: center;
    flex-shrink: 0;
}
.glory-xp-ring svg {
    width: 110px;
    height: 110px;
    transform: rotate(-90deg);
}
.glory-xp-ring circle {
    fill: none;
    stroke-width: 8;
}
.glory-xp-ring .xp-track {
    stroke: rgba(255,255,255,0.2);
}
.glory-xp-ring .xp-fill {
    stroke: #ffd166;
    stroke-linecap: round;
    transition: stroke-dashoffset 1.5s ease;
}
.glory-xp-label {
    margin-top: 6px;
    font-size: 13px;
    opacity: 0.9;
}

/* Stats Row */
.glory-stats-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}
.glory-stat-card {
    background: var(--card-bg, #fff);
    border-radius: 20px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all 0.3s ease;
    border: 1.5px solid #eef0f5;
}
.glory-stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(63, 102, 230, 0.12);
    border-color: #0ed3a2;
}
.glory-stat-icon {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #fff;
    flex-shrink: 0;
}
.glory-stat-info h4 {
    font-size: 13px;
    color: #8d99ae;
    margin: 0 0 4px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.glory-stat-info .glory-stat-val {
    font-size: 26px;
    font-weight: 700;
    color: #1a1a2e;
    line-height: 1;
}

/* Section Cards */
.glory-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(420px, 1fr));
    gap: 25px;
    margin-bottom: 30px;
}
.glory-card {
    background: var(--card-bg, #fff);
    border-radius: 20px;
    padding: 28px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    border: 1.5px solid #eef0f5;
    transition: all 0.3s ease;
}
.glory-card:hover {
    box-shadow: 0 8px 28px rgba(63, 102, 230, 0.08);
}
.glory-card-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 24px;
}
.glory-card-header i {
    font-size: 20px;
    color: #3f66e6;
}
.glory-card-header h3 {
    font-size: 18px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0;
}
.glory-card-header .glory-card-action {
    margin-left: auto;
    font-size: 13px;
    color: #3f66e6;
    cursor: pointer;
    font-weight: 500;
    transition: color 0.2s;
}
.glory-card-header .glory-card-action:hover {
    color: #0ed3a2;
}

/* Achievements / Badges */
.glory-badges-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
    gap: 16px;
}
.glory-badge {
    text-align: center;
    padding: 20px 12px;
    border-radius: 16px;
    background: linear-gradient(135deg, #f8faff, #fff);
    transition: all 0.3s ease;
    cursor: default;
    position: relative;
    border: 1.5px solid #eef0f5;
}
.glory-badge:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 20px rgba(63, 102, 230, 0.12);
    border-color: #0ed3a2;
}
.glory-badge.locked {
    opacity: 0.55;
    filter: grayscale(0.6);
}
.glory-badge-icon {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    margin-bottom: 10px;
}
.glory-badge-name {
    font-size: 12px;
    font-weight: 600;
    color: #1a1a2e;
    line-height: 1.3;
}
.glory-badge-date {
    font-size: 10px;
    color: #8d99ae;
    margin-top: 4px;
}
.glory-badge .glory-lock-overlay {
    position: absolute;
    top: 8px;
    right: 8px;
    font-size: 12px;
    color: #adb5bd;
}

/* Skills Section */
.glory-skills-list {
    display: flex;
    flex-direction: column;
    gap: 18px;
}
.glory-skill-item {
    display: flex;
    align-items: center;
    gap: 14px;
}
.glory-skill-icon {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #fff;
    flex-shrink: 0;
}
.glory-skill-details {
    flex: 1;
    min-width: 0;
}
.glory-skill-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 6px;
}
.glory-skill-name {
    font-size: 14px;
    font-weight: 600;
    color: #1a1a2e;
}
.glory-skill-level {
    font-size: 12px;
    font-weight: 500;
    padding: 2px 10px;
    border-radius: 10px;
}
.glory-skill-bar {
    height: 8px;
    background: #eef0f5;
    border-radius: 4px;
    overflow: hidden;
}
.glory-skill-fill {
    height: 100%;
    border-radius: 4px;
    transition: width 1.2s ease;
}

/* Leaderboard */
.glory-leaderboard {
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.glory-lb-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 14px 16px;
    border-radius: 14px;
    background: #f8faff;
    transition: all 0.2s ease;
    border: 1px solid transparent;
}
.glory-lb-item:hover {
    background: #f0f4ff;
    border-color: #0ed3a2;
}
.glory-lb-item.glory-lb-self {
    background: linear-gradient(135deg, rgba(63, 102, 230, 0.08), rgba(14, 211, 162, 0.06));
    border: 1px solid rgba(63, 102, 230, 0.2);
}
.glory-lb-rank {
    width: 36px;
    height: 36px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    flex-shrink: 0;
}
.glory-lb-rank.rank-1 {
    background: linear-gradient(135deg, #ffd166, #f9c74f);
    color: #7c5e00;
}
.glory-lb-rank.rank-2 {
    background: linear-gradient(135deg, #c0c0c0, #a8a8a8);
    color: #4a4a4a;
}
.glory-lb-rank.rank-3 {
    background: linear-gradient(135deg, #e8a87c, #d4845c);
    color: #5a3118;
}
.glory-lb-rank.rank-other {
    background: #e9ecef;
    color: #8d99ae;
}
.glory-lb-avatar {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    flex-shrink: 0;
}
.glory-lb-info {
    flex: 1;
    min-width: 0;
}
.glory-lb-name {
    font-size: 14px;
    font-weight: 600;
    color: #1a1a2e;
}
.glory-lb-school {
    font-size: 12px;
    color: #8d99ae;
}
.glory-lb-xp {
    font-size: 15px;
    font-weight: 700;
    color: #3f66e6;
    white-space: nowrap;
}

/* Streak Calendar */
.glory-streak-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 6px;
    margin-top: 12px;
}
.glory-streak-day-label {
    font-size: 10px;
    color: #8d99ae;
    text-align: center;
    font-weight: 500;
    padding-bottom: 4px;
}
.glory-streak-cell {
    aspect-ratio: 1;
    border-radius: 8px;
    background: #eef0f5;
    position: relative;
    transition: all 0.2s;
}
.glory-streak-cell.active-1 { background: rgba(14, 211, 162, 0.25); }
.glory-streak-cell.active-2 { background: rgba(14, 211, 162, 0.50); }
.glory-streak-cell.active-3 { background: rgba(14, 211, 162, 0.75); }
.glory-streak-cell.active-4 { background: #0ed3a2; }
.glory-streak-cell.today {
    outline: 2px solid #3f66e6;
    outline-offset: 1px;
}
.glory-streak-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 16px;
    flex-wrap: wrap;
    gap: 8px;
}
.glory-streak-stat {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    color: #1a1a2e;
    font-weight: 500;
}
.glory-streak-stat i {
    color: #0ed3a2;
}
.glory-streak-legend {
    display: flex;
    align-items: center;
    gap: 4px;
    font-size: 11px;
    color: #8d99ae;
}
.glory-streak-legend span {
    width: 12px;
    height: 12px;
    border-radius: 4px;
    display: inline-block;
}

/* Goals */
.glory-goals-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.glory-goal-item {
    padding: 18px;
    border-radius: 14px;
    background: linear-gradient(135deg, #f8faff, #fff);
    border-left: 4px solid #3f66e6;
    transition: all 0.3s;
}
.glory-goal-item:hover {
    transform: translateX(4px);
    box-shadow: 0 4px 12px rgba(63, 102, 230, 0.08);
}
.glory-goal-item.completed {
    border-left-color: #0ed3a2;
    background: linear-gradient(135deg, #f0faf5, #fff);
}
.glory-goal-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 10px;
}
.glory-goal-title {
    font-size: 14px;
    font-weight: 600;
    color: #1a1a2e;
}
.glory-goal-tag {
    font-size: 11px;
    font-weight: 600;
    padding: 3px 10px;
    border-radius: 8px;
    white-space: nowrap;
}
.glory-goal-bar {
    height: 6px;
    background: #eef0f5;
    border-radius: 3px;
    overflow: hidden;
    margin-bottom: 8px;
}
.glory-goal-fill {
    height: 100%;
    border-radius: 3px;
    transition: width 1s ease;
}
.glory-goal-meta {
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    color: #8d99ae;
}

/* Subject Performance */
.glory-subject-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
}
.glory-subject-item {
    display: flex;
    align-items: center;
    gap: 14px;
}
.glory-subject-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #fff;
    flex-shrink: 0;
}
.glory-subject-details {
    flex: 1;
    min-width: 0;
}
.glory-subject-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 6px;
}
.glory-subject-name {
    font-size: 14px;
    font-weight: 600;
    color: #1a1a2e;
}
.glory-subject-grade {
    font-size: 13px;
    font-weight: 700;
}
.glory-subject-bar {
    height: 6px;
    background: #eef0f5;
    border-radius: 3px;
    overflow: hidden;
}
.glory-subject-fill {
    height: 100%;
    border-radius: 3px;
    transition: width 1.2s ease;
}
.glory-subject-change {
    font-size: 11px;
    margin-top: 4px;
}
.glory-subject-change.up { color: #0ed3a2; }
.glory-subject-change.down { color: #ef476f; }

/* Responsive */
@media (max-width: 900px) {
    .glory-grid {
        grid-template-columns: 1fr;
    }
    .glory-hero {
        padding: 28px;
    }
    .glory-hero-content {
        flex-direction: column;
        text-align: center;
    }
    .glory-hero-left {
        flex-direction: column;
    }
    .glory-stats-row {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 560px) {
    .glory-stats-row {
        grid-template-columns: 1fr;
    }
    .glory-badges-grid {
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
    }
}
</style>

<!-- ========== HERO BANNER - AI WORLD THEME ========== -->
<div class="glory-hero">
    <div class="glory-hero-content">
        <div class="glory-hero-left">
            <div class="glory-avatar">
                <i class="fas fa-user-graduate"></i>
            </div>
            <div class="glory-hero-info">
                <h2 id="glory-student-name">Student</h2>
                <p>Class <span id="glory-student-class">10</span> &bull; Academic Year 2025-26</p>
                <div class="glory-level-badge">
                    <i class="fas fa-fire"></i>
                    Level 12 &mdash; Rising Scholar
                </div>
            </div>
        </div>
        <div class="glory-xp-ring">
            <svg viewBox="0 0 120 120">
                <circle class="xp-track" cx="60" cy="60" r="50"/>
                <circle class="xp-fill" cx="60" cy="60" r="50"
                    stroke-dasharray="314"
                    stroke-dashoffset="78"/>
            </svg>
            <div style="margin-top:-75px; position:relative;">
                <div style="font-size:24px; font-weight:800;">1,850</div>
                <div class="glory-xp-label">XP Points</div>
            </div>
            <div class="glory-xp-label" style="margin-top:12px;">2,500 XP to Level 13</div>
        </div>
    </div>
</div>

<!-- ========== QUICK STATS ========== -->
<div class="glory-stats-row">
    <div class="glory-stat-card">
        <div class="glory-stat-icon" style="background: linear-gradient(135deg, #ffd166, #f9c74f);">
            <i class="fas fa-medal"></i>
        </div>
        <div class="glory-stat-info">
            <h4>Badges Earned</h4>
            <div class="glory-stat-val">18</div>
        </div>
    </div>
    <div class="glory-stat-card">
        <div class="glory-stat-icon" style="background: linear-gradient(135deg, #0ed3a2, #129695);">
            <i class="fas fa-fire-alt"></i>
        </div>
        <div class="glory-stat-info">
            <h4>Day Streak</h4>
            <div class="glory-stat-val">27</div>
        </div>
    </div>
    <div class="glory-stat-card">
        <div class="glory-stat-icon" style="background: linear-gradient(135deg, #3f66e6, #0ed3a2);">
            <i class="fas fa-chart-line"></i>
        </div>
        <div class="glory-stat-info">
            <h4>Class Rank</h4>
            <div class="glory-stat-val">#4</div>
        </div>
    </div>
    <div class="glory-stat-card">
        <div class="glory-stat-icon" style="background: linear-gradient(135deg, #ef476f, #e63946);">
            <i class="fas fa-tasks"></i>
        </div>
        <div class="glory-stat-info">
            <h4>Quests Done</h4>
            <div class="glory-stat-val">42</div>
        </div>
    </div>
</div>

<!-- ========== ROW 1: BADGES + LEADERBOARD ========== -->
<div class="glory-grid">
    <!-- Achievements / Badges -->
    <div class="glory-card">
        <div class="glory-card-header">
            <i class="fas fa-award"></i>
            <h3>Achievements</h3>
            <span class="glory-card-action">View All</span>
        </div>
        <div class="glory-badges-grid">
            <div class="glory-badge">
                <div class="glory-badge-icon" style="background: linear-gradient(135deg, #ffd166, #f9c74f);">
                    <i class="fas fa-star"></i>
                </div>
                <div class="glory-badge-name">First Login</div>
                <div class="glory-badge-date">Jan 2026</div>
            </div>
            <div class="glory-badge">
                <div class="glory-badge-icon" style="background: linear-gradient(135deg, #0ed3a2, #129695);">
                    <i class="fas fa-book-reader"></i>
                </div>
                <div class="glory-badge-name">Bookworm</div>
                <div class="glory-badge-date">Feb 2026</div>
            </div>
            <div class="glory-badge">
                <div class="glory-badge-icon" style="background: linear-gradient(135deg, #3f66e6, #0ed3a2);">
                    <i class="fas fa-brain"></i>
                </div>
                <div class="glory-badge-name">Quiz Master</div>
                <div class="glory-badge-date">Feb 2026</div>
            </div>
            <div class="glory-badge">
                <div class="glory-badge-icon" style="background: linear-gradient(135deg, #ef476f, #e63946);">
                    <i class="fas fa-fire"></i>
                </div>
                <div class="glory-badge-name">7-Day Streak</div>
                <div class="glory-badge-date">Mar 2026</div>
            </div>
            <div class="glory-badge">
                <div class="glory-badge-icon" style="background: linear-gradient(135deg, #7209b7, #560bad);">
                    <i class="fas fa-code"></i>
                </div>
                <div class="glory-badge-name">Code Ninja</div>
                <div class="glory-badge-date">Mar 2026</div>
            </div>
            <div class="glory-badge">
                <div class="glory-badge-icon" style="background: linear-gradient(135deg, #4cc9f0, #4895ef);">
                    <i class="fas fa-calculator"></i>
                </div>
                <div class="glory-badge-name">Math Wizard</div>
                <div class="glory-badge-date">Mar 2026</div>
            </div>
            <div class="glory-badge locked">
                <span class="glory-lock-overlay"><i class="fas fa-lock"></i></span>
                <div class="glory-badge-icon" style="background: #c0c4cc;">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="glory-badge-name">Top 3 Rank</div>
                <div class="glory-badge-date">Locked</div>
            </div>
            <div class="glory-badge locked">
                <span class="glory-lock-overlay"><i class="fas fa-lock"></i></span>
                <div class="glory-badge-icon" style="background: #c0c4cc;">
                    <i class="fas fa-gem"></i>
                </div>
                <div class="glory-badge-name">30-Day Streak</div>
                <div class="glory-badge-date">Locked</div>
            </div>
        </div>
    </div>

    <!-- Leaderboard -->
    <div class="glory-card">
        <div class="glory-card-header">
            <i class="fas fa-crown"></i>
            <h3>Leaderboard</h3>
            <span class="glory-card-action">Full Rankings</span>
        </div>
        <div class="glory-leaderboard">
            <div class="glory-lb-item">
                <div class="glory-lb-rank rank-1">1</div>
                <div class="glory-lb-avatar" style="background: linear-gradient(135deg, #ffd166, #f9c74f); color:#7c5e00;">A</div>
                <div class="glory-lb-info">
                    <div class="glory-lb-name">Aarav Sharma</div>
                    <div class="glory-lb-school">Class 10 &bull; DPS Noida</div>
                </div>
                <div class="glory-lb-xp">2,340 XP</div>
            </div>
            <div class="glory-lb-item">
                <div class="glory-lb-rank rank-2">2</div>
                <div class="glory-lb-avatar" style="background: linear-gradient(135deg, #c0c0c0, #a8a8a8);">P</div>
                <div class="glory-lb-info">
                    <div class="glory-lb-name">Priya Patel</div>
                    <div class="glory-lb-school">Class 10 &bull; KV Delhi</div>
                </div>
                <div class="glory-lb-xp">2,180 XP</div>
            </div>
            <div class="glory-lb-item">
                <div class="glory-lb-rank rank-3">3</div>
                <div class="glory-lb-avatar" style="background: linear-gradient(135deg, #e8a87c, #d4845c); color:#5a3118;">R</div>
                <div class="glory-lb-info">
                    <div class="glory-lb-name">Rohan Gupta</div>
                    <div class="glory-lb-school">Class 10 &bull; Ryan Intl</div>
                </div>
                <div class="glory-lb-xp">2,020 XP</div>
            </div>
            <div class="glory-lb-item glory-lb-self">
                <div class="glory-lb-rank rank-other" style="background: linear-gradient(135deg, #3f66e6, #0ed3a2); color:#fff;">4</div>
                <div class="glory-lb-avatar"><i class="fas fa-user"></i></div>
                <div class="glory-lb-info">
                    <div class="glory-lb-name">You</div>
                    <div class="glory-lb-school">Class 10</div>
                </div>
                <div class="glory-lb-xp">1,850 XP</div>
            </div>
            <div class="glory-lb-item">
                <div class="glory-lb-rank rank-other">5</div>
                <div class="glory-lb-avatar" style="background: linear-gradient(135deg, #0ed3a2, #129695);">S</div>
                <div class="glory-lb-info">
                    <div class="glory-lb-name">Sneha Iyer</div>
                    <div class="glory-lb-school">Class 10 &bull; DAV Chennai</div>
                </div>
                <div class="glory-lb-xp">1,710 XP</div>
            </div>
        </div>
    </div>
</div>

<!-- ========== ROW 2: STUDY STREAK + SKILLS ========== -->
<div class="glory-grid">
    <!-- Study Streak Calendar -->
    <div class="glory-card">
        <div class="glory-card-header">
            <i class="fas fa-calendar-check"></i>
            <h3>Study Streak</h3>
        </div>
        <div class="glory-streak-grid">
            <div class="glory-streak-day-label">M</div>
            <div class="glory-streak-day-label">T</div>
            <div class="glory-streak-day-label">W</div>
            <div class="glory-streak-day-label">T</div>
            <div class="glory-streak-day-label">F</div>
            <div class="glory-streak-day-label">S</div>
            <div class="glory-streak-day-label">S</div>
            <!-- Week 1 -->
            <div class="glory-streak-cell active-2"></div>
            <div class="glory-streak-cell active-4"></div>
            <div class="glory-streak-cell active-3"></div>
            <div class="glory-streak-cell active-4"></div>
            <div class="glory-streak-cell active-2"></div>
            <div class="glory-streak-cell active-1"></div>
            <div class="glory-streak-cell"></div>
            <!-- Week 2 -->
            <div class="glory-streak-cell active-3"></div>
            <div class="glory-streak-cell active-4"></div>
            <div class="glory-streak-cell active-4"></div>
            <div class="glory-streak-cell active-2"></div>
            <div class="glory-streak-cell active-4"></div>
            <div class="glory-streak-cell active-3"></div>
            <div class="glory-streak-cell active-1"></div>
            <!-- Week 3 -->
            <div class="glory-streak-cell active-4"></div>
            <div class="glory-streak-cell active-3"></div>
            <div class="glory-streak-cell active-4"></div>
            <div class="glory-streak-cell active-4"></div>
            <div class="glory-streak-cell active-2"></div>
            <div class="glory-streak-cell active-4"></div>
            <div class="glory-streak-cell active-1"></div>
            <!-- Week 4 -->
            <div class="glory-streak-cell active-3"></div>
            <div class="glory-streak-cell active-4"></div>
            <div class="glory-streak-cell active-4"></div>
            <div class="glory-streak-cell active-3"></div>
            <div class="glory-streak-cell today active-4"></div>
            <div class="glory-streak-cell"></div>
            <div class="glory-streak-cell"></div>
        </div>
        <div class="glory-streak-meta">
            <div style="display:flex; gap:16px; flex-wrap:wrap;">
                <div class="glory-streak-stat"><i class="fas fa-fire-alt"></i> 27 day streak</div>
                <div class="glory-streak-stat"><i class="fas fa-bolt"></i> Best: 34 days</div>
            </div>
            <div class="glory-streak-legend">
                Less
                <span style="background:#eef0f5;"></span>
                <span style="background:rgba(14,211,162,0.25);"></span>
                <span style="background:rgba(14,211,162,0.5);"></span>
                <span style="background:rgba(14,211,162,0.75);"></span>
                <span style="background:#0ed3a2;"></span>
                More
            </div>
        </div>
    </div>

    <!-- Skills Progress -->
    <div class="glory-card">
        <div class="glory-card-header">
            <i class="fas fa-layer-group"></i>
            <h3>Skills Mastery</h3>
        </div>
        <div class="glory-skills-list">
            <div class="glory-skill-item">
                <div class="glory-skill-icon" style="background: linear-gradient(135deg, #3f66e6, #0ed3a2);">
                    <i class="fas fa-square-root-alt"></i>
                </div>
                <div class="glory-skill-details">
                    <div class="glory-skill-top">
                        <span class="glory-skill-name">Problem Solving</span>
                        <span class="glory-skill-level" style="background:#eef2ff; color:#3f66e6;">Advanced</span>
                    </div>
                    <div class="glory-skill-bar">
                        <div class="glory-skill-fill" style="width:85%; background: linear-gradient(90deg, #3f66e6, #0ed3a2);"></div>
                    </div>
                </div>
            </div>
            <div class="glory-skill-item">
                <div class="glory-skill-icon" style="background: linear-gradient(135deg, #0ed3a2, #129695);">
                    <i class="fas fa-flask"></i>
                </div>
                <div class="glory-skill-details">
                    <div class="glory-skill-top">
                        <span class="glory-skill-name">Scientific Reasoning</span>
                        <span class="glory-skill-level" style="background:#e8faf4; color:#0ed3a2;">Intermediate</span>
                    </div>
                    <div class="glory-skill-bar">
                        <div class="glory-skill-fill" style="width:68%; background: linear-gradient(90deg, #0ed3a2, #129695);"></div>
                    </div>
                </div>
            </div>
            <div class="glory-skill-item">
                <div class="glory-skill-icon" style="background: linear-gradient(135deg, #ffd166, #f9c74f);">
                    <i class="fas fa-pen-fancy"></i>
                </div>
                <div class="glory-skill-details">
                    <div class="glory-skill-top">
                        <span class="glory-skill-name">Creative Writing</span>
                        <span class="glory-skill-level" style="background:#fff8e5; color:#d4a017;">Intermediate</span>
                    </div>
                    <div class="glory-skill-bar">
                        <div class="glory-skill-fill" style="width:60%; background: linear-gradient(90deg, #ffd166, #f9c74f);"></div>
                    </div>
                </div>
            </div>
            <div class="glory-skill-item">
                <div class="glory-skill-icon" style="background: linear-gradient(135deg, #7209b7, #560bad);">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="glory-skill-details">
                    <div class="glory-skill-top">
                        <span class="glory-skill-name">Coding & Logic</span>
                        <span class="glory-skill-level" style="background:#f3e8ff; color:#7209b7;">Advanced</span>
                    </div>
                    <div class="glory-skill-bar">
                        <div class="glory-skill-fill" style="width:78%; background: linear-gradient(90deg, #7209b7, #560bad);"></div>
                    </div>
                </div>
            </div>
            <div class="glory-skill-item">
                <div class="glory-skill-icon" style="background: linear-gradient(135deg, #ef476f, #e63946);">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="glory-skill-details">
                    <div class="glory-skill-top">
                        <span class="glory-skill-name">Communication</span>
                        <span class="glory-skill-level" style="background:#fdeef1; color:#ef476f;">Beginner</span>
                    </div>
                    <div class="glory-skill-bar">
                        <div class="glory-skill-fill" style="width:42%; background: linear-gradient(90deg, #ef476f, #e63946);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ========== ROW 3: SUBJECT PERFORMANCE + GOALS ========== -->
<div class="glory-grid">
    <!-- Subject Performance -->
    <div class="glory-card">
        <div class="glory-card-header">
            <i class="fas fa-graduation-cap"></i>
            <h3>Subject Performance</h3>
        </div>
        <div class="glory-subject-list">
            <div class="glory-subject-item">
                <div class="glory-subject-icon" style="background: linear-gradient(135deg, #3f66e6, #0ed3a2);">
                    <i class="fas fa-calculator"></i>
                </div>
                <div class="glory-subject-details">
                    <div class="glory-subject-top">
                        <span class="glory-subject-name">Mathematics</span>
                        <span class="glory-subject-grade" style="color:#3f66e6;">A+</span>
                    </div>
                    <div class="glory-subject-bar">
                        <div class="glory-subject-fill" style="width:92%; background: linear-gradient(90deg, #3f66e6, #0ed3a2);"></div>
                    </div>
                    <div class="glory-subject-change up"><i class="fas fa-arrow-up"></i> +5% from last term</div>
                </div>
            </div>
            <div class="glory-subject-item">
                <div class="glory-subject-icon" style="background: linear-gradient(135deg, #0ed3a2, #129695);">
                    <i class="fas fa-atom"></i>
                </div>
                <div class="glory-subject-details">
                    <div class="glory-subject-top">
                        <span class="glory-subject-name">Science</span>
                        <span class="glory-subject-grade" style="color:#0ed3a2;">A</span>
                    </div>
                    <div class="glory-subject-bar">
                        <div class="glory-subject-fill" style="width:85%; background: linear-gradient(90deg, #0ed3a2, #129695);"></div>
                    </div>
                    <div class="glory-subject-change up"><i class="fas fa-arrow-up"></i> +8% from last term</div>
                </div>
            </div>
            <div class="glory-subject-item">
                <div class="glory-subject-icon" style="background: linear-gradient(135deg, #ffd166, #f9c74f);">
                    <i class="fas fa-book"></i>
                </div>
                <div class="glory-subject-details">
                    <div class="glory-subject-top">
                        <span class="glory-subject-name">English</span>
                        <span class="glory-subject-grade" style="color:#d4a017;">B+</span>
                    </div>
                    <div class="glory-subject-bar">
                        <div class="glory-subject-fill" style="width:74%; background: linear-gradient(90deg, #ffd166, #f9c74f);"></div>
                    </div>
                    <div class="glory-subject-change up"><i class="fas fa-arrow-up"></i> +3% from last term</div>
                </div>
            </div>
            <div class="glory-subject-item">
                <div class="glory-subject-icon" style="background: linear-gradient(135deg, #7209b7, #560bad);">
                    <i class="fas fa-globe-asia"></i>
                </div>
                <div class="glory-subject-details">
                    <div class="glory-subject-top">
                        <span class="glory-subject-name">Social Studies</span>
                        <span class="glory-subject-grade" style="color:#7209b7;">A</span>
                    </div>
                    <div class="glory-subject-bar">
                        <div class="glory-subject-fill" style="width:82%; background: linear-gradient(90deg, #7209b7, #560bad);"></div>
                    </div>
                    <div class="glory-subject-change down"><i class="fas fa-arrow-down"></i> -2% from last term</div>
                </div>
            </div>
            <div class="glory-subject-item">
                <div class="glory-subject-icon" style="background: linear-gradient(135deg, #ef476f, #e63946);">
                    <i class="fas fa-language"></i>
                </div>
                <div class="glory-subject-details">
                    <div class="glory-subject-top">
                        <span class="glory-subject-name">Hindi</span>
                        <span class="glory-subject-grade" style="color:#ef476f;">B</span>
                    </div>
                    <div class="glory-subject-bar">
                        <div class="glory-subject-fill" style="width:68%; background: linear-gradient(90deg, #ef476f, #e63946);"></div>
                    </div>
                    <div class="glory-subject-change up"><i class="fas fa-arrow-up"></i> +6% from last term</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Goals & Quests -->
    <div class="glory-card">
        <div class="glory-card-header">
            <i class="fas fa-bullseye"></i>
            <h3>Goals & Quests</h3>
        </div>
        <div class="glory-goals-list">
            <div class="glory-goal-item completed">
                <div class="glory-goal-top">
                    <div class="glory-goal-title"><i class="fas fa-check-circle" style="color:#0ed3a2; margin-right:6px;"></i>Complete 5 Math Chapters</div>
                    <span class="glory-goal-tag" style="background:#e8faf4; color:#0ed3a2;">Done</span>
                </div>
                <div class="glory-goal-bar">
                    <div class="glory-goal-fill" style="width:100%; background: linear-gradient(90deg, #0ed3a2, #129695);"></div>
                </div>
                <div class="glory-goal-meta">
                    <span>5/5 chapters</span>
                    <span>+120 XP earned</span>
                </div>
            </div>
            <div class="glory-goal-item">
                <div class="glory-goal-top">
                    <div class="glory-goal-title"><i class="fas fa-spinner" style="color:#3f66e6; margin-right:6px;"></i>Score 90%+ in Science Quiz</div>
                    <span class="glory-goal-tag" style="background:#eef2ff; color:#3f66e6;">In Progress</span>
                </div>
                <div class="glory-goal-bar">
                    <div class="glory-goal-fill" style="width:70%; background: linear-gradient(90deg, #3f66e6, #0ed3a2);"></div>
                </div>
                <div class="glory-goal-meta">
                    <span>Best: 87% (target: 90%)</span>
                    <span>+150 XP reward</span>
                </div>
            </div>
            <div class="glory-goal-item">
                <div class="glory-goal-top">
                    <div class="glory-goal-title"><i class="fas fa-spinner" style="color:#7209b7; margin-right:6px;"></i>Read 3 English Novels</div>
                    <span class="glory-goal-tag" style="background:#f3e8ff; color:#7209b7;">In Progress</span>
                </div>
                <div class="glory-goal-bar">
                    <div class="glory-goal-fill" style="width:66%; background: linear-gradient(90deg, #7209b7, #560bad);"></div>
                </div>
                <div class="glory-goal-meta">
                    <span>2/3 novels</span>
                    <span>+100 XP reward</span>
                </div>
            </div>
            <div class="glory-goal-item">
                <div class="glory-goal-top">
                    <div class="glory-goal-title"><i class="fas fa-lock" style="color:#8d99ae; margin-right:6px;"></i>30-Day Study Streak</div>
                    <span class="glory-goal-tag" style="background:#f1f3f5; color:#8d99ae;">27/30 days</span>
                </div>
                <div class="glory-goal-bar">
                    <div class="glory-goal-fill" style="width:90%; background: linear-gradient(90deg, #ffd166, #f9c74f);"></div>
                </div>
                <div class="glory-goal-meta">
                    <span>3 more days to go!</span>
                    <span>+200 XP reward</span>
                </div>
            </div>
            <div class="glory-goal-item">
                <div class="glory-goal-top">
                    <div class="glory-goal-title"><i class="fas fa-rocket" style="color:#ef476f; margin-right:6px;"></i>Reach Top 3 on Leaderboard</div>
                    <span class="glory-goal-tag" style="background:#fdeef1; color:#ef476f;">170 XP away</span>
                </div>
                <div class="glory-goal-bar">
                    <div class="glory-goal-fill" style="width:55%; background: linear-gradient(90deg, #ef476f, #e63946);"></div>
                </div>
                <div class="glory-goal-meta">
                    <span>Current rank: #4</span>
                    <span>+300 XP reward</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Populate student name from localStorage/session if available
(function() {
    try {
        const token = localStorage.getItem('access_token');
        if (token) {
            const payload = JSON.parse(atob(token.split('.')[1]));
            const nameEl = document.getElementById('glory-student-name');
            if (payload.full_name && nameEl) nameEl.textContent = payload.full_name;
            const classEl = document.getElementById('glory-student-class');
            if (payload.class && classEl) classEl.textContent = payload.class;
        }
    } catch(e) { /* silent */ }
})();
</script>

</div>