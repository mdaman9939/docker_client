<!-- Your Learning Section -->
<div id="learning-section" class="content-section" style="display: none;">

<style>
/* ===== YOUR LEARNING - AI WORLD THEME ===== */
:root {
    --aiw-primary: #3f66e6;
    --aiw-primary-dark: #2b4fc1;
    --aiw-primary-light: #0ed3a2;
    --aiw-primary-teal: #129695;
    --aiw-card-bg: #ffffff;
    --aiw-text-dark: #2b2d42;
    --aiw-text-light: #8d99ae;
    --aiw-border: #e9ecef;
    --aiw-hover: #f1f3f5;
    --aiw-success: #0ed3a2;
    --aiw-danger: #ef476f;
    --aiw-warning: #ffd166;
}

/* Top Bar */
.yl-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 14px;
    margin-bottom: 24px;
}
.yl-title-group {
    display: flex;
    align-items: center;
    gap: 14px;
}
.yl-title-icon {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-light));
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #fff;
}
.yl-title-group h2 {
    font-size: 22px;
    font-weight: 700;
    color: var(--aiw-text-dark);
    margin: 0;
}
.yl-title-group p {
    font-size: 12px;
    color: var(--aiw-text-light);
    margin: 2px 0 0;
}
.yl-period-select {
    padding: 9px 16px;
    border-radius: 10px;
    border: 1.5px solid #e0e4ea;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
    color: var(--aiw-text-dark);
    background: #fff;
    cursor: pointer;
    outline: none;
}
.yl-period-select:focus { border-color: var(--aiw-primary); }

/* Overview Stat Cards */
.yl-stats-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(195px, 1fr));
    gap: 18px;
    margin-bottom: 26px;
}
.yl-stat-card {
    background: var(--aiw-card-bg);
    border-radius: 14px;
    padding: 20px;
    box-shadow: 0 3px 16px rgba(0,0,0,0.05);
    display: flex;
    align-items: center;
    gap: 14px;
    transition: transform 0.2s, box-shadow 0.2s;
}
.yl-stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 24px rgba(63,102,230,0.12);
}
.yl-stat-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: #fff;
    flex-shrink: 0;
}
.yl-stat-info h4 {
    font-size: 11px;
    color: var(--aiw-text-light);
    margin: 0 0 3px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.yl-stat-val {
    font-size: 22px;
    font-weight: 700;
    color: var(--aiw-text-dark);
    line-height: 1;
}
.yl-stat-change {
    font-size: 11px;
    font-weight: 600;
    margin-top: 3px;
}
.yl-stat-change.up { color: var(--aiw-success); }
.yl-stat-change.down { color: var(--aiw-danger); }

/* Grid layout for cards */
.yl-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
    gap: 22px;
    margin-bottom: 26px;
}
.yl-grid-full {
    grid-template-columns: 1fr;
}

/* Card */
.yl-card {
    background: var(--aiw-card-bg);
    border-radius: 14px;
    padding: 24px;
    box-shadow: 0 3px 16px rgba(0,0,0,0.05);
}
.yl-card-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}
.yl-card-title {
    display: flex;
    align-items: center;
    gap: 10px;
}
.yl-card-title i {
    font-size: 16px;
    color: var(--aiw-primary);
}
.yl-card-title h3 {
    font-size: 16px;
    font-weight: 700;
    color: var(--aiw-text-dark);
    margin: 0;
}
.yl-card-action {
    font-size: 12px;
    color: var(--aiw-primary);
    cursor: pointer;
    font-weight: 500;
}

/* ===== WEEKLY ACTIVITY CHART ===== */
.yl-bar-chart {
    display: flex;
    align-items: flex-end;
    gap: 10px;
    height: 180px;
    padding-top: 10px;
}
.yl-bar-col {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    height: 100%;
    justify-content: flex-end;
}
.yl-bar {
    width: 100%;
    max-width: 40px;
    border-radius: 8px 8px 4px 4px;
    transition: height 1s ease;
    position: relative;
    cursor: pointer;
    min-height: 4px;
}
.yl-bar:hover { opacity: 0.85; }
.yl-bar-label {
    font-size: 11px;
    color: var(--aiw-text-light);
    font-weight: 500;
}
.yl-bar-value {
    font-size: 10px;
    font-weight: 700;
    color: var(--aiw-text-dark);
}
.yl-bar-legend {
    display: flex;
    align-items: center;
    gap: 18px;
    margin-top: 16px;
    justify-content: center;
}
.yl-bar-legend-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 11px;
    color: var(--aiw-text-light);
}
.yl-bar-legend-dot {
    width: 10px;
    height: 10px;
    border-radius: 3px;
}

/* ===== SUBJECT PROGRESS ===== */
.yl-subject-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.yl-subject-item {
    display: flex;
    align-items: center;
    gap: 14px;
}
.yl-subject-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    color: #fff;
    flex-shrink: 0;
}
.yl-subject-details {
    flex: 1;
    min-width: 0;
}
.yl-subject-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 5px;
}
.yl-subject-name {
    font-size: 13px;
    font-weight: 600;
    color: var(--aiw-text-dark);
}
.yl-subject-pct {
    font-size: 12px;
    font-weight: 700;
}
.yl-subject-bar {
    height: 7px;
    background: #eef0f4;
    border-radius: 4px;
    overflow: hidden;
}
.yl-subject-fill {
    height: 100%;
    border-radius: 4px;
    transition: width 1.2s ease;
}
.yl-subject-meta {
    font-size: 10px;
    color: var(--aiw-text-light);
    margin-top: 3px;
}

/* ===== PERFORMANCE TREND ===== */
.yl-line-chart {
    position: relative;
    height: 200px;
}
.yl-line-chart canvas {
    width: 100% !important;
    height: 100% !important;
}
.yl-svg-chart {
    width: 100%;
    height: 180px;
}
.yl-chart-labels {
    display: flex;
    justify-content: space-between;
    margin-top: 8px;
    font-size: 10px;
    color: var(--aiw-text-light);
}

/* ===== STRENGTH / WEAKNESS ===== */
.yl-sw-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
}
.yl-sw-card {
    padding: 16px;
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
}
.yl-sw-card.strength { background: rgba(14,211,162,0.07); border: 1px solid rgba(14,211,162,0.15); }
.yl-sw-card.weakness { background: rgba(239,71,111,0.06); border: 1px solid rgba(239,71,111,0.12); }
.yl-sw-icon {
    width: 34px;
    height: 34px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
    color: #fff;
    flex-shrink: 0;
}
.yl-sw-info h5 {
    font-size: 13px;
    font-weight: 600;
    color: var(--aiw-text-dark);
    margin: 0 0 3px;
}
.yl-sw-info p {
    font-size: 11px;
    color: var(--aiw-text-light);
    margin: 0;
    line-height: 1.4;
}

/* ===== AI RECOMMENDATIONS ===== */
.yl-rec-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}
.yl-rec-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 14px 16px;
    border-radius: 12px;
    background: #f8f9ff;
    transition: background 0.15s, transform 0.15s;
    cursor: pointer;
}
.yl-rec-item:hover { background: #eef2ff; transform: translateX(3px); }
.yl-rec-icon {
    width: 42px;
    height: 42px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #fff;
    flex-shrink: 0;
}
.yl-rec-info {
    flex: 1;
    min-width: 0;
}
.yl-rec-title {
    font-size: 13px;
    font-weight: 600;
    color: var(--aiw-text-dark);
    margin: 0 0 2px;
}
.yl-rec-desc {
    font-size: 11px;
    color: var(--aiw-text-light);
    margin: 0;
}
.yl-rec-tag {
    font-size: 10px;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 8px;
    white-space: nowrap;
}
.yl-rec-arrow {
    color: var(--aiw-text-light);
    font-size: 14px;
    flex-shrink: 0;
}

/* ===== STUDY STREAK CALENDAR ===== */
.yl-streak-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 6px;
    margin-top: 12px;
}
.yl-streak-day-label {
    font-size: 11px;
    color: var(--aiw-text-light);
    text-align: center;
    font-weight: 600;
    padding-bottom: 6px;
}
.yl-streak-cell {
    aspect-ratio: 1;
    border-radius: 8px;
    background: #eef0f4;
    position: relative;
    transition: transform 0.2s ease;
}
.yl-streak-cell:hover {
    transform: scale(1.1);
}
.yl-streak-cell.s1 { background: rgba(63,102,230,0.18); }
.yl-streak-cell.s2 { background: rgba(63,102,230,0.38); }
.yl-streak-cell.s3 { background: rgba(63,102,230,0.6); }
.yl-streak-cell.s4 { background: var(--aiw-primary); }
.yl-streak-cell.today {
    outline: 2.5px solid var(--aiw-primary);
    outline-offset: 2px;
}
.yl-streak-cell.future {
    opacity: 0.35;
}
.yl-streak-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 16px;
    flex-wrap: wrap;
    gap: 8px;
}
.yl-streak-stat {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    color: var(--aiw-text-dark);
    font-weight: 500;
}
.yl-streak-stat i {
    color: var(--aiw-primary);
}
.yl-streak-legend {
    display: flex;
    align-items: center;
    gap: 4px;
    font-size: 11px;
    color: var(--aiw-text-light);
}
.yl-streak-legend span {
    width: 14px;
    height: 14px;
    border-radius: 4px;
    display: inline-block;
}

/* ===== RECENT ACTIVITY ===== */
.yl-activity-list {
    display: flex;
    flex-direction: column;
    gap: 0;
}
.yl-activity-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 12px 0;
    border-bottom: 1px solid #f3f4f6;
}
.yl-activity-item:last-child { border-bottom: none; }
.yl-activity-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    flex-shrink: 0;
    margin-top: 4px;
}
.yl-activity-content {
    flex: 1;
    min-width: 0;
}
.yl-activity-text {
    font-size: 13px;
    color: var(--aiw-text-dark);
    line-height: 1.4;
}
.yl-activity-time {
    font-size: 11px;
    color: var(--aiw-text-light);
    margin-top: 2px;
}
.yl-activity-xp {
    font-size: 11px;
    font-weight: 700;
    color: var(--aiw-primary);
    white-space: nowrap;
    flex-shrink: 0;
    margin-top: 2px;
}

/* ===== GOAL TRACKER ===== */
.yl-goals-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
}
.yl-goal-item {
    padding: 14px 16px;
    border-radius: 12px;
    background: #f8f9fb;
    border-left: 4px solid var(--aiw-primary);
}
.yl-goal-item.done { border-left-color: var(--aiw-success); background: #f0fdf8; }
.yl-goal-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
}
.yl-goal-title {
    font-size: 13px;
    font-weight: 600;
    color: var(--aiw-text-dark);
    display: flex;
    align-items: center;
    gap: 6px;
}
.yl-goal-pct {
    font-size: 12px;
    font-weight: 700;
}
.yl-goal-bar {
    height: 6px;
    background: #e0e4ea;
    border-radius: 3px;
    overflow: hidden;
}
.yl-goal-fill {
    height: 100%;
    border-radius: 3px;
    transition: width 1s ease;
}

/* ===== LEARNING SCORE RING ===== */
.yl-score-ring-wrap {
    display: flex;
    align-items: center;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
}
.yl-score-ring {
    position: relative;
    width: 140px;
    height: 140px;
    flex-shrink: 0;
}
.yl-score-ring svg {
    width: 100%;
    height: 100%;
    transform: rotate(-90deg);
}
.yl-score-ring circle {
    fill: none;
    stroke-width: 10;
}
.yl-score-ring .ring-track { stroke: #eef0f4; }
.yl-score-ring .ring-fill {
    stroke-linecap: round;
    transition: stroke-dashoffset 1.5s ease;
}
.yl-score-center {
    position: absolute;
    inset: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.yl-score-val {
    font-size: 32px;
    font-weight: 800;
    color: var(--aiw-text-dark);
    line-height: 1;
}
.yl-score-label {
    font-size: 11px;
    color: var(--aiw-text-light);
    margin-top: 4px;
}
.yl-score-breakdown {
    display: flex;
    flex-direction: column;
    gap: 12px;
}
.yl-score-metric {
    display: flex;
    align-items: center;
    gap: 10px;
}
.yl-score-metric-dot {
    width: 10px;
    height: 10px;
    border-radius: 3px;
    flex-shrink: 0;
}
.yl-score-metric-info {
    flex: 1;
}
.yl-score-metric-name {
    font-size: 12px;
    color: var(--aiw-text-light);
}
.yl-score-metric-val {
    font-size: 14px;
    font-weight: 700;
    color: var(--aiw-text-dark);
}

/* Loading Spinner */
.yl-loading {
    text-align: center;
    padding: 60px;
}
.yl-spinner {
    width: 50px;
    height: 50px;
    border: 3px solid #e0e4ea;
    border-top-color: var(--aiw-primary);
    border-radius: 50%;
    animation: ylSpin 0.8s linear infinite;
    margin: 0 auto 15px;
}
@keyframes ylSpin {
    to { transform: rotate(360deg); }
}

/* Responsive */
@media (max-width: 860px) {
    .yl-grid { grid-template-columns: 1fr; }
    .yl-sw-grid { grid-template-columns: 1fr; }
    .yl-stats-row { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 500px) {
    .yl-stats-row { grid-template-columns: 1fr; }
}
</style>

<!-- ========== TOP BAR ========== -->
<div class="yl-topbar">
    <div class="yl-title-group">
        <div class="yl-title-icon"><i class="fas fa-chart-line"></i></div>
        <div>
            <h2>Your Learning</h2>
            <p>AI-powered learning analytics &mdash; track your growth</p>
        </div>
    </div>
</div>

<!-- ========== OVERVIEW STATS ========== -->
<div class="yl-stats-row" id="ylStatsRow">
    <div class="yl-stat-card">
        <div class="yl-stat-icon" style="background: linear-gradient(135deg, var(--aiw-primary), var(--aiw-primary-dark));">
            <i class="fas fa-clock"></i>
        </div>
        <div class="yl-stat-info">
            <h4>Study Time</h4>
            <div class="yl-stat-val" id="ylStudyTime">--</div>
            <div class="yl-stat-change up" id="ylStudyTimeChange"><i class="fas fa-arrow-up"></i> Loading...</div>
        </div>
    </div>
    <div class="yl-stat-card">
        <div class="yl-stat-icon" style="background: linear-gradient(135deg, var(--aiw-success), #0cb892);">
            <i class="fas fa-book-open"></i>
        </div>
        <div class="yl-stat-info">
            <h4>Questions Asked</h4>
            <div class="yl-stat-val" id="ylTotalQuestions">--</div>
            <div class="yl-stat-change up" id="ylQuestionsChange"><i class="fas fa-arrow-up"></i> Loading...</div>
        </div>
    </div>
    <div class="yl-stat-card">
        <div class="yl-stat-icon" style="background: linear-gradient(135deg, var(--aiw-warning), #f9c74f);">
            <i class="fas fa-bullseye"></i>
        </div>
        <div class="yl-stat-info">
            <h4>Avg. Quiz Score</h4>
            <div class="yl-stat-val" id="ylAvgScore">--</div>
            <div class="yl-stat-change up" id="ylScoreChange"><i class="fas fa-arrow-up"></i> Loading...</div>
        </div>
    </div>
    <div class="yl-stat-card">
        <div class="yl-stat-icon" style="background: linear-gradient(135deg, var(--aiw-danger), #e63946);">
            <i class="fas fa-question-circle"></i>
        </div>
        <div class="yl-stat-info">
            <h4>Quizzes Taken</h4>
            <div class="yl-stat-val" id="ylTotalQuizzes">--</div>
            <div class="yl-stat-change up" id="ylQuizzesChange"><i class="fas fa-arrow-up"></i> Loading...</div>
        </div>
    </div>
    <div class="yl-stat-card">
        <div class="yl-stat-icon" style="background: linear-gradient(135deg, #7209b7, #560bad);">
            <i class="fas fa-fire-alt"></i>
        </div>
        <div class="yl-stat-info">
            <h4>Study Streak</h4>
            <div class="yl-stat-val" id="ylStreak">--</div>
            <div class="yl-stat-change up" id="ylStreakChange"><i class="fas fa-arrow-up"></i> Loading...</div>
        </div>
    </div>
</div>

<!-- ========== ROW 1: LEARNING SCORE + WEEKLY ACTIVITY ========== -->
<div class="yl-grid">
    <!-- Learning Score -->
    <div class="yl-card">
        <div class="yl-card-header">
            <div class="yl-card-title"><i class="fas fa-brain"></i><h3>Learning Score</h3></div>
            <span class="yl-card-action" id="ylScoreInfo">How is this calculated?</span>
        </div>
        <div class="yl-score-ring-wrap">
            <div class="yl-score-ring">
                <svg viewBox="0 0 160 160">
                    <circle class="ring-track" cx="80" cy="80" r="65"/>
                    <circle class="ring-fill" cx="80" cy="80" r="65"
                        stroke="var(--aiw-primary)"
                        stroke-dasharray="408.4"
                        stroke-dashoffset="73.5" id="ylScoreRing"/>
                </svg>
                <div class="yl-score-center">
                    <div class="yl-score-val" id="ylLearningScore">0</div>
                    <div class="yl-score-label">out of 100</div>
                </div>
            </div>
            <div class="yl-score-breakdown" id="ylScoreBreakdown">
                <!-- Dynamic breakdown from API -->
            </div>
        </div>
    </div>

    <!-- Weekly Activity -->
    <div class="yl-card">
        <div class="yl-card-header">
            <div class="yl-card-title"><i class="fas fa-chart-bar"></i><h3>Weekly Study Activity</h3></div>
        </div>
        <div class="yl-bar-chart" id="ylBarChart">
            <div class="yl-loading" style="padding: 40px;"><div class="yl-spinner"></div><p>Loading activity data...</p></div>
        </div>
        <div class="yl-bar-legend">
            <div class="yl-bar-legend-item"><div class="yl-bar-legend-dot" style="background:var(--aiw-primary);"></div> Questions Asked</div>
            <div class="yl-bar-legend-item"><div class="yl-bar-legend-dot" style="background:var(--aiw-success);"></div> Quizzes Taken</div>
        </div>
    </div>
</div>

<!-- ========== ROW 2: SUBJECT PROGRESS + PERFORMANCE TREND ========== -->
<div class="yl-grid">
    <!-- Subject Progress -->
    <div class="yl-card">
        <div class="yl-card-header">
            <div class="yl-card-title"><i class="fas fa-graduation-cap"></i><h3>Subject Progress</h3></div>
            <span class="yl-card-action" id="ylViewSubjects">See Details</span>
        </div>
        <div class="yl-subject-list" id="ylSubjectList">
            <div class="yl-loading" style="padding: 40px;"><div class="yl-spinner"></div><p>Loading subject progress...</p></div>
        </div>
    </div>

    <!-- Performance Trend -->
    <div class="yl-card">
        <div class="yl-card-header">
            <div class="yl-card-title"><i class="fas fa-chart-area"></i><h3>Performance Trend</h3></div>
        </div>
        <div class="yl-line-chart">
            <svg class="yl-svg-chart" viewBox="0 0 500 180" preserveAspectRatio="none" id="ylTrendChart">
                <line x1="0" y1="0" x2="500" y2="0" stroke="#eef0f4" stroke-width="1"/>
                <line x1="0" y1="45" x2="500" y2="45" stroke="#eef0f4" stroke-width="1"/>
                <line x1="0" y1="90" x2="500" y2="90" stroke="#eef0f4" stroke-width="1"/>
                <line x1="0" y1="135" x2="500" y2="135" stroke="#eef0f4" stroke-width="1"/>
                <line x1="0" y1="180" x2="500" y2="180" stroke="#eef0f4" stroke-width="1"/>
                <path id="ylTrendArea" fill="url(#ylGrad)" opacity="0.3"/>
                <polyline id="ylTrendLine" fill="none" stroke="var(--aiw-primary)" stroke-width="2.5"/>
                <defs>
                    <linearGradient id="ylGrad" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="var(--aiw-primary)" stop-opacity="0.3"/>
                        <stop offset="100%" stop-color="var(--aiw-primary)" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="yl-chart-labels" id="ylTrendLabels">
            <span>Loading...</span>
        </div>
        <div class="yl-bar-legend" style="margin-top:12px;">
            <div class="yl-bar-legend-item"><div class="yl-bar-legend-dot" style="background:var(--aiw-primary);"></div> Quiz Score Trend</div>
        </div>
    </div>
</div>

<!-- ========== ROW 3: STRENGTHS/WEAKNESSES + AI RECOMMENDATIONS ========== -->
<div class="yl-grid">
    <!-- Strengths & Weaknesses -->
    <div class="yl-card">
        <div class="yl-card-header">
            <div class="yl-card-title"><i class="fas fa-balance-scale"></i><h3>Strengths & Weak Areas</h3></div>
        </div>
        <div class="yl-sw-grid" id="ylStrengthsWeaknesses">
            <div class="yl-loading" style="grid-column: 1/-1; padding: 40px;"><div class="yl-spinner"></div><p>Analyzing performance...</p></div>
        </div>
    </div>

    <!-- AI Recommendations -->
    <div class="yl-card">
        <div class="yl-card-header">
            <div class="yl-card-title"><i class="fas fa-robot"></i><h3>AI Study Recommendations</h3></div>
        </div>
        <div class="yl-rec-list" id="ylRecommendations">
            <div class="yl-loading" style="padding: 40px;"><div class="yl-spinner"></div><p>Generating recommendations...</p></div>
        </div>
    </div>
</div>

<!-- ========== ROW 4: STUDY HEATMAP + GOALS ========== -->
<div class="yl-grid">
    <!-- Study Streak -->
    <div class="yl-card">
        <div class="yl-card-header">
            <div class="yl-card-title"><i class="fas fa-fire-alt"></i><h3>Study Streak</h3></div>
            <span style="font-size:11px; color:var(--aiw-text-light);" id="ylStreakMonth">This month</span>
        </div>
        <div class="yl-streak-grid" id="ylStreakGrid">
            <div class="yl-loading" style="grid-column: 1/-1; padding: 40px;"><div class="yl-spinner"></div><p>Loading streak data...</p></div>
        </div>
        <div class="yl-streak-meta">
            <div style="display:flex; gap:16px; flex-wrap:wrap;">
                <div class="yl-streak-stat"><i class="fas fa-fire-alt"></i> <span id="ylStreakCurrent">0</span> day streak</div>
                <div class="yl-streak-stat"><i class="fas fa-bolt"></i> Best: <span id="ylStreakBest">0</span> days</div>
                <div class="yl-streak-stat"><i class="fas fa-calendar-check"></i> <span id="ylStreakDaysThisMonth">0</span> days this month</div>
            </div>
            <div class="yl-streak-legend">
                Less
                <span style="background:#eef0f4;"></span>
                <span style="background:rgba(63,102,230,0.18);"></span>
                <span style="background:rgba(63,102,230,0.38);"></span>
                <span style="background:rgba(63,102,230,0.6);"></span>
                <span style="background:var(--aiw-primary);"></span>
                More
            </div>
        </div>
    </div>

    <!-- Weekly Goals -->
    <div class="yl-card">
        <div class="yl-card-header">
            <div class="yl-card-title"><i class="fas fa-flag"></i><h3>Weekly Goals</h3></div>
            <span style="font-size:11px; color:var(--aiw-text-light);" id="ylGoalProgress">Loading goals...</span>
        </div>
        <div class="yl-goals-list" id="ylGoalsList">
            <div class="yl-loading" style="padding: 40px;"><div class="yl-spinner"></div><p>Loading goals...</p></div>
        </div>
    </div>
</div>

<!-- ========== ROW 5: RECENT ACTIVITY ========== -->
<div class="yl-grid yl-grid-full">
    <div class="yl-card">
        <div class="yl-card-header">
            <div class="yl-card-title"><i class="fas fa-history"></i><h3>Recent Activity</h3></div>
        </div>
        <div class="yl-activity-list" id="ylActivityList">
            <div class="yl-loading" style="padding: 40px;"><div class="yl-spinner"></div><p>Loading recent activity...</p></div>
        </div>
    </div>
</div>

<script>
(function() {
    'use strict';

    // ==================== CONFIGURATION ====================
    const API = CONFIG.API_BASE_URL;

    // ==================== AUTH HELPERS ====================
    const auth = {
        getToken: () => localStorage.getItem('access_token'),
        getUserId: () => localStorage.getItem('user_id') || '15',
        isAuthenticated: () => !!localStorage.getItem('access_token')
    };

    // ==================== STATE ====================
    let state = {
        studyStreak: null,
        studyStats: null,
        quizHistory: [],
        quizStatsByWebsite: {},
        weakAreas: [],
        strengths: [],
        userChats: [],
        wbChats: [],
        websites: [],
        books: [],
        isLoading: false,
        initialized: false,
        currentPeriod: 'month'
    };

    // ==================== UI HELPERS ====================
    const ui = {
        escapeHtml: (text) => {
            const d = document.createElement('div');
            d.textContent = text;
            return d.innerHTML;
        },
        timeAgo: (ts) => {
            if (!ts) return '';
            const now = new Date(), date = new Date(ts);
            const m = Math.floor((now - date) / 60000);
            if (m < 1) return 'Just now';
            if (m < 60) return m + ' min ago';
            const h = Math.floor(m / 60);
            if (h < 24) return h + 'h ago';
            const d = Math.floor(h / 24);
            if (d < 7) return d + 'd ago';
            return date.toLocaleDateString('en-IN', { day: 'numeric', month: 'short' });
        },
        dur: (mins) => {
            if (!mins) return '0 min';
            const h = Math.floor(mins / 60), m = mins % 60;
            return h > 0 ? `${h}h ${m}m` : `${m} min`;
        }
    };

    // ==================== API LAYER ====================
    async function apiFetch(url) {
        const token = auth.getToken();
        const res = await fetch(url, {
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json'
            }
        });
        if (res.status === 401) throw new Error('Session expired');
        return res.json();
    }

    const apis = {
        studyStreak: () => apiFetch(`${API}/get-study-streak/${auth.getUserId()}`),
        userChats: (limit = 200) => apiFetch(`${API}/get-user-chats/${auth.getUserId()}?limit=${limit}`),
        exportTopics: () => apiFetch(`${API}/export-studied-topics/${auth.getUserId()}?format=json`),
        websites: () => apiFetch(`${API}/wb/student/websites`),
        studyStats: (days = 90) => apiFetch(`${API}/wb/student/website/study-stats?days=${days}`),
        wbChatHistory: (limit = 200) => apiFetch(`${API}/wb/student/chat-history?limit=${limit}&sort_desc=true`),
        quizHistory: (wid, limit = 50) => apiFetch(`${API}/wb/student/quiz/history/${wid}?limit=${limit}`),
        weakAreas: (wid) => apiFetch(`${API}/wb/student/quiz/weak-areas/${wid}`),
        websiteProgress: (docId) => apiFetch(`${API}/wb/student/website/${docId}/progress`),
        websiteTopics: (docId) => apiFetch(`${API}/wb/student/website/${docId}/studied-topics?limit=50`),
        books: () => apiFetch(`${API}/student/books`)
    };

    // ==================== DATA LOADING ====================
    async function loadAllData() {
        if (state.isLoading) return;
        state.isLoading = true;

        try {
            const [streakRes, statsRes, websitesRes, booksRes, userChatsRes, wbChatsRes, exportRes] = await Promise.allSettled([
                apis.studyStreak(),
                apis.studyStats(state.currentPeriod === 'week' ? 7 : state.currentPeriod === 'year' ? 365 : 30),
                apis.websites(),
                apis.books(),
                apis.userChats(200),
                apis.wbChatHistory(200),
                apis.exportTopics()
            ]);

            const streakData = streakRes.status === 'fulfilled' && streakRes.value.success ? streakRes.value : null;
            const statsData = statsRes.status === 'fulfilled' && statsRes.value.success ? statsRes.value.data : null;
            const websitesList = websitesRes.status === 'fulfilled' && websitesRes.value.success ? websitesRes.value.websites : [];
            const booksList = booksRes.status === 'fulfilled' && booksRes.value.success ? booksRes.value.books : [];
            const kbChats = userChatsRes.status === 'fulfilled' && userChatsRes.value.success ? userChatsRes.value.chats : [];
            const wbChats = wbChatsRes.status === 'fulfilled' && wbChatsRes.value.success ? wbChatsRes.value.chats : [];
            const exportData = exportRes.status === 'fulfilled' && exportRes.value.success ? exportRes.value.data : null;

            state.studyStreak = streakData;
            state.studyStats = statsData;
            state.websites = websitesList;
            state.books = booksList;
            state.userChats = kbChats;
            state.wbChats = wbChats;

            const quizPromises = websitesList.map(w =>
                apis.quizHistory(w.id, 50).then(r => ({ wid: w.id, title: w.title, data: r.success ? r.data : null })).catch(() => ({ wid: w.id, title: w.title, data: null }))
            );
            const weakPromises = websitesList.map(w =>
                apis.weakAreas(w.id).then(r => ({ wid: w.id, data: r.success ? r.data : null })).catch(() => ({ wid: w.id, data: null }))
            );

            const [quizResults, weakResults] = await Promise.all([
                Promise.all(quizPromises),
                Promise.all(weakPromises)
            ]);

            let allQuizzes = [];
            let allStats = {};
            quizResults.forEach(r => {
                if (r.data) {
                    if (r.data.history) allQuizzes.push(...r.data.history);
                    if (r.data.statistics) allStats[r.wid] = { ...r.data.statistics, title: r.title };
                }
            });
            allQuizzes.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
            state.quizHistory = allQuizzes;
            state.quizStatsByWebsite = allStats;

            let allWeak = [], allStrong = [];
            weakResults.forEach(r => {
                if (r.data) {
                    if (r.data.weak_areas) allWeak.push(...r.data.weak_areas);
                    if (r.data.strengths) allStrong.push(...r.data.strengths);
                }
            });
            const weakMap = {};
            allWeak.forEach(w => {
                if (!weakMap[w.question_text] || weakMap[w.question_text].wrong_percentage < w.wrong_percentage) {
                    weakMap[w.question_text] = w;
                }
            });
            state.weakAreas = Object.values(weakMap).sort((a, b) => b.wrong_percentage - a.wrong_percentage);
            state.strengths = allStrong;

            // ==================== RENDER ALL SECTIONS ====================
            renderOverviewStats(streakData, statsData);
            renderLearningScore(streakData);
            renderWeeklyActivity(statsData, kbChats, wbChats);
            renderSubjectProgress(statsData, websitesList, wbChats, kbChats);
            renderPerformanceTrend();
            renderStrengthsWeaknesses();
            renderRecommendations(statsData, exportData);
            renderStudyStreak(streakData, statsData);
            renderGoals(streakData, statsData);
            renderRecentActivity(kbChats, wbChats);

        } catch (err) {
            console.error('Analytics load error:', err);
        } finally {
            state.isLoading = false;
            state.initialized = true;
        }
    }

    // ==================== 1. OVERVIEW STATS ====================
    function renderOverviewStats(streakData, statsData) {
        const streak = streakData?.study_streak || {};
        const summary = statsData?.summary || {};

        const wbStudyMins = summary.total_study_time_minutes || 0;
        const kbEstMins = (streak.total_questions || 0) * 2;
        const totalMins = wbStudyMins + kbEstMins;
        document.getElementById('ylStudyTime').textContent = ui.dur(totalMins);
        document.getElementById('ylStudyTimeChange').innerHTML = `<i class="fas fa-clock"></i> ${ui.dur(wbStudyMins)} websites + ${ui.dur(kbEstMins)} books`;

        const totalQ = (streak.total_questions || 0) + (summary.total_questions_asked || 0);
        document.getElementById('ylTotalQuestions').textContent = totalQ;
        document.getElementById('ylQuestionsChange').innerHTML = `<i class="fas fa-book"></i> ${streak.total_questions || 0} books + ${summary.total_questions_asked || 0} web`;

        let totalScore = 0, quizCount = state.quizHistory.length;
        state.quizHistory.forEach(q => totalScore += q.score_percentage || 0);
        const avgScore = quizCount > 0 ? Math.round(totalScore / quizCount) : 0;
        document.getElementById('ylAvgScore').textContent = `${avgScore}%`;

        const bestScore = quizCount > 0 ? Math.round(Math.max(...state.quizHistory.map(q => q.score_percentage || 0))) : 0;
        document.getElementById('ylScoreChange').innerHTML = `<i class="fas fa-trophy"></i> Best: ${bestScore}%`;

        document.getElementById('ylTotalQuizzes').textContent = quizCount;
        let totalDur = 0;
        state.quizHistory.forEach(q => totalDur += q.duration_seconds || 0);
        const avgDur = quizCount > 0 ? Math.round(totalDur / quizCount) : 0;
        document.getElementById('ylQuizzesChange').innerHTML = `<i class="fas fa-stopwatch"></i> Avg ${avgDur}s per quiz`;

        const currentStreak = streak.current_streak_days || (summary.study_streak_days || 0);
        document.getElementById('ylStreak').textContent = currentStreak;
        document.getElementById('ylStreakChange').innerHTML = `<i class="fas fa-calendar-check"></i> ${streak.total_study_days || 0} total study days`;
    }

    // ==================== 2. LEARNING SCORE ====================
    function renderLearningScore(streakData) {
        const streak = streakData?.study_streak || {};
        const totalQ = streak.total_questions || 0;
        const totalDays = streak.total_study_days || 1;
        const currentStreak = streak.current_streak_days || 0;

        let totalQuizScore = 0;
        state.quizHistory.forEach(q => totalQuizScore += q.score_percentage || 0);
        const quizPerf = state.quizHistory.length > 0 ? Math.round(totalQuizScore / state.quizHistory.length) : 0;

        const consistency = Math.min(100, Math.round((currentStreak / 30) * 100));
        const topicCoverage = Math.min(100, Math.round((totalQ / 50) * 100));
        const engagement = Math.min(100, Math.round((totalQ / totalDays) * 20));

        const wbQuestions = state.studyStats?.summary?.total_questions_asked || 0;
        const wbEngagement = Math.min(100, Math.round((wbQuestions / Math.max(totalDays, 1)) * 15));
        const finalEngagement = Math.min(100, Math.round((engagement + wbEngagement) / 2));

        const total = Math.round(
            (consistency * 0.25) +
            (quizPerf * 0.35) +
            (topicCoverage * 0.2) +
            (finalEngagement * 0.2)
        );

        document.getElementById('ylLearningScore').textContent = total;

        const circ = 408.4;
        const offset = circ - (total / 100) * circ;
        const ring = document.getElementById('ylScoreRing');
        if (ring) ring.setAttribute('stroke-dashoffset', offset);

        if (ring) {
            if (total >= 80) ring.setAttribute('stroke', 'var(--aiw-success)');
            else if (total >= 60) ring.setAttribute('stroke', 'var(--aiw-primary)');
            else if (total >= 40) ring.setAttribute('stroke', 'var(--aiw-warning)');
            else ring.setAttribute('stroke', 'var(--aiw-danger)');
        }

        document.getElementById('ylScoreBreakdown').innerHTML = `
            <div class="yl-score-metric"><div class="yl-score-metric-dot" style="background:var(--aiw-primary);"></div><div class="yl-score-metric-info"><div class="yl-score-metric-name">Consistency</div><div class="yl-score-metric-val">${consistency}/100</div></div></div>
            <div class="yl-score-metric"><div class="yl-score-metric-dot" style="background:var(--aiw-success);"></div><div class="yl-score-metric-info"><div class="yl-score-metric-name">Quiz Performance</div><div class="yl-score-metric-val">${quizPerf}/100</div></div></div>
            <div class="yl-score-metric"><div class="yl-score-metric-dot" style="background:var(--aiw-warning);"></div><div class="yl-score-metric-info"><div class="yl-score-metric-name">Topic Coverage</div><div class="yl-score-metric-val">${topicCoverage}/100</div></div></div>
            <div class="yl-score-metric"><div class="yl-score-metric-dot" style="background:#7209b7;"></div><div class="yl-score-metric-info"><div class="yl-score-metric-name">Engagement</div><div class="yl-score-metric-val">${finalEngagement}/100</div></div></div>
        `;
    }

    // ==================== 3. WEEKLY ACTIVITY BAR CHART ====================
    function renderWeeklyActivity(statsData, kbChats, wbChats) {
        const days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
        const questionsByDay = [0, 0, 0, 0, 0, 0, 0];
        const quizzesByDay = [0, 0, 0, 0, 0, 0, 0];

        const now = new Date();
        const dayOfWeek = now.getDay();
        const mondayOffset = dayOfWeek === 0 ? -6 : 1 - dayOfWeek;
        const monday = new Date(now);
        monday.setDate(now.getDate() + mondayOffset);
        monday.setHours(0, 0, 0, 0);

        kbChats.forEach(chat => {
            const d = new Date(chat.timestamp);
            if (d >= monday) {
                const idx = d.getDay() === 0 ? 6 : d.getDay() - 1;
                questionsByDay[idx]++;
            }
        });

        wbChats.forEach(chat => {
            const d = new Date(chat.created_at);
            if (d >= monday) {
                const idx = d.getDay() === 0 ? 6 : d.getDay() - 1;
                questionsByDay[idx]++;
            }
        });

        state.quizHistory.forEach(q => {
            const d = new Date(q.created_at);
            if (d >= monday) {
                const idx = d.getDay() === 0 ? 6 : d.getDay() - 1;
                quizzesByDay[idx]++;
            }
        });

        const maxQ = Math.max(...questionsByDay, 1);
        const maxQz = Math.max(...quizzesByDay, 1);

        const barChart = document.getElementById('ylBarChart');
        if (barChart) {
            barChart.innerHTML = days.map((day, i) => {
                const qPct = (questionsByDay[i] / maxQ) * 100;
                const qzPct = (quizzesByDay[i] / maxQz) * 100;
                return `
                    <div class="yl-bar-col">
                        <div class="yl-bar-value">${questionsByDay[i]}</div>
                        <div style="display:flex;align-items:flex-end;gap:4px;height:100%;width:100%;justify-content:center;">
                            <div class="yl-bar" style="height:${qPct}%;background:linear-gradient(to top,var(--aiw-primary),#6384ff);width:45%;" title="${questionsByDay[i]} questions"></div>
                            <div class="yl-bar" style="height:${qzPct}%;background:linear-gradient(to top,var(--aiw-success),#34e8bb);width:45%;" title="${quizzesByDay[i]} quizzes"></div>
                        </div>
                        <div class="yl-bar-label">${day}</div>
                    </div>
                `;
            }).join('');
        }
    }

    // ==================== 4. SUBJECT PROGRESS ====================
    function renderSubjectProgress(statsData, websites, wbChats, kbChats) {
        const subjectList = document.getElementById('ylSubjectList');
        if (!subjectList) return;

        const subjectData = {};
        const colorMap = {
            'Mathematics': { icon: 'fa-calculator', color: 'var(--aiw-primary)' },
            'Science': { icon: 'fa-atom', color: 'var(--aiw-success)' },
            'English': { icon: 'fa-book', color: 'var(--aiw-warning)' },
            'Social Studies': { icon: 'fa-globe-asia', color: '#7209b7' },
            'Hindi': { icon: 'fa-language', color: 'var(--aiw-danger)' },
            'Computer Science': { icon: 'fa-laptop-code', color: '#4cc9f0' },
            'General': { icon: 'fa-lightbulb', color: 'var(--aiw-text-light)' }
        };

        if (statsData?.by_subject) {
            statsData.by_subject.forEach(s => {
                const name = s.subject || 'General';
                subjectData[name] = subjectData[name] || { questions: 0, websites: 0, quizzes: 0, totalStudyTime: 0 };
                subjectData[name].questions += s.chat_count || 0;
            });
        }

        websites.forEach(w => {
            const name = w.subject || 'General';
            subjectData[name] = subjectData[name] || { questions: 0, websites: 0, quizzes: 0, totalStudyTime: 0 };
            subjectData[name].websites++;
            subjectData[name].totalStudyTime += w.study_time_minutes || 0;
        });

        state.quizHistory.forEach(q => {
            const website = websites.find(w => w.id === q.website_id);
            if (website) {
                const name = website.subject || 'General';
                subjectData[name] = subjectData[name] || { questions: 0, websites: 0, quizzes: 0, totalStudyTime: 0 };
                subjectData[name].quizzes++;
            }
        });

        const subjectKeywords = {
            'Mathematics': ['math', 'algebra', 'geometry', 'calculus', 'equation', 'trigonometry', 'number', 'arithmetic'],
            'Science': ['science', 'physics', 'chemistry', 'biology', 'experiment', 'atom', 'molecule', 'cell'],
            'English': ['english', 'grammar', 'essay', 'writing', 'reading', 'novel', 'poem', 'literature'],
            'Social Studies': ['history', 'geography', 'civics', 'social', 'polity', 'economy', 'constitution'],
            'Hindi': ['hindi', 'व्याकरण', 'कविता', 'कहानी', 'साहित्य'],
            'Computer Science': ['computer', 'programming', 'python', 'java', 'code', 'algorithm', 'html', 'css']
        };

        kbChats.forEach(chat => {
            const text = (chat.question + ' ' + chat.answer).toLowerCase();
            for (const [subject, keywords] of Object.entries(subjectKeywords)) {
                if (keywords.some(kw => text.includes(kw))) {
                    subjectData[subject] = subjectData[subject] || { questions: 0, websites: 0, quizzes: 0, totalStudyTime: 0 };
                    subjectData[subject].questions++;
                    break;
                }
            }
        });

        const entries = Object.entries(subjectData).sort((a, b) => b[1].questions - a[1].questions);
        const maxQ = Math.max(...entries.map(([, d]) => d.questions), 1);

        if (entries.length === 0) {
            subjectList.innerHTML = '<div style="text-align:center;padding:30px;color:var(--aiw-text-light);">No subject data yet. Start studying!</div>';
            return;
        }

        subjectList.innerHTML = entries.map(([name, data]) => {
            const cfg = colorMap[name] || colorMap['General'];
            const pct = Math.min(100, Math.round((data.questions / maxQ) * 100));
            return `
                <div class="yl-subject-item">
                    <div class="yl-subject-icon" style="background:linear-gradient(135deg, ${cfg.color}, ${cfg.color}cc);"><i class="fas ${cfg.icon}"></i></div>
                    <div class="yl-subject-details">
                        <div class="yl-subject-top">
                            <span class="yl-subject-name">${name}</span>
                            <span class="yl-subject-pct" style="color:${cfg.color};">${data.questions} Q</span>
                        </div>
                        <div class="yl-subject-bar"><div class="yl-subject-fill" style="width:${pct}%; background:linear-gradient(90deg,${cfg.color},${cfg.color}cc);"></div></div>
                        <div class="yl-subject-meta">${data.websites} website${data.websites !== 1 ? 's' : ''} &bull; ${data.quizzes} quiz${data.quizzes !== 1 ? 'zes' : ''} &bull; ${ui.dur(data.totalStudyTime)} studied</div>
                    </div>
                </div>
            `;
        }).join('');
    }

    // ==================== 5. PERFORMANCE TREND ====================
    function renderPerformanceTrend() {
        const monthlyMap = {};
        state.quizHistory.forEach(q => {
            const d = new Date(q.created_at);
            const key = `${d.getFullYear()}-${String(d.getMonth() + 1).padStart(2, '0')}`;
            const label = d.toLocaleString('default', { month: 'short' });
            if (!monthlyMap[key]) monthlyMap[key] = { label, scores: [], key };
            monthlyMap[key].scores.push(q.score_percentage || 0);
        });

        let months = Object.values(monthlyMap).sort((a, b) => a.key.localeCompare(b.key));

        if (months.length === 0) {
            months = [{ label: 'Now', scores: [0] }];
        }

        if (months.length === 1) {
            months.unshift({ label: 'Start', scores: [0] });
        }

        const averages = months.map(m => Math.round(m.scores.reduce((a, b) => a + b, 0) / m.scores.length));

        const width = 500, height = 180;
        const step = width / (averages.length - 1);

        const points = averages.map((s, i) => `${i * step},${height - (s / 100) * height}`).join(' ');

        const area = document.getElementById('ylTrendArea');
        const line = document.getElementById('ylTrendLine');
        if (area) area.setAttribute('d', `M${points} L${width},${height} L0,${height} Z`);
        if (line) line.setAttribute('points', points);

        const chart = document.getElementById('ylTrendChart');
        if (chart) {
            chart.querySelectorAll('.yl-trend-dot').forEach(d => d.remove());
            averages.forEach((s, i) => {
                const circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
                circle.setAttribute('cx', i * step);
                circle.setAttribute('cy', height - (s / 100) * height);
                circle.setAttribute('r', '4');
                circle.setAttribute('fill', 'var(--aiw-primary)');
                circle.setAttribute('class', 'yl-trend-dot');
                const title = document.createElementNS('http://www.w3.org/2000/svg', 'title');
                title.textContent = `${months[i].label}: ${s}%`;
                circle.appendChild(title);
                chart.appendChild(circle);
            });
        }

        const labels = document.getElementById('ylTrendLabels');
        if (labels) labels.innerHTML = months.map(m => `<span>${m.label}</span>`).join('');
    }

    // ==================== 6. STRENGTHS & WEAKNESSES ====================
    function renderStrengthsWeaknesses() {
        const container = document.getElementById('ylStrengthsWeaknesses');
        if (!container) return;

        let html = '';

        const highScores = state.quizHistory.filter(q => q.score_percentage >= 80);
        if (highScores.length > 0) {
            const avg = Math.round(highScores.reduce((a, b) => a + b.score_percentage, 0) / highScores.length);
            html += `<div class="yl-sw-card strength"><div class="yl-sw-icon" style="background:var(--aiw-success);"><i class="fas fa-trophy"></i></div><div class="yl-sw-info"><h5>High Quiz Scores</h5><p>Scored 80%+ on ${highScores.length} quiz${highScores.length > 1 ? 'zes' : ''} — ${avg}% avg</p></div></div>`;
        }

        state.strengths.slice(0, 2).forEach(s => {
            html += `<div class="yl-sw-card strength"><div class="yl-sw-icon" style="background:var(--aiw-success);"><i class="fas fa-check"></i></div><div class="yl-sw-info"><h5>${ui.escapeHtml((s.question_text || '').substring(0, 40))}</h5><p>${s.correct_percentage || s.times_correct || 0}% correct</p></div></div>`;
        });

        const streak = state.studyStreak?.study_streak || {};
        if ((streak.current_streak_days || 0) >= 7) {
            html += `<div class="yl-sw-card strength"><div class="yl-sw-icon" style="background:var(--aiw-success);"><i class="fas fa-fire"></i></div><div class="yl-sw-info"><h5>Great Consistency</h5><p>${streak.current_streak_days} day study streak — keep it up!</p></div></div>`;
        }

        state.weakAreas.slice(0, 3).forEach(w => {
            html += `<div class="yl-sw-card weakness"><div class="yl-sw-icon" style="background:var(--aiw-danger);"><i class="fas fa-exclamation"></i></div><div class="yl-sw-info"><h5>${ui.escapeHtml((w.question_text || '').substring(0, 40))}${w.question_text.length > 40 ? '...' : ''}</h5><p>Wrong ${Math.round(w.wrong_percentage)}% of the time (${w.times_wrong}/${w.times_asked} attempts)</p></div></div>`;
        });

        Object.entries(state.quizStatsByWebsite).forEach(([wid, stats]) => {
            if (stats.average_score < 50 && stats.total_attempts >= 2) {
                html += `<div class="yl-sw-card weakness"><div class="yl-sw-icon" style="background:var(--aiw-danger);"><i class="fas fa-chart-line"></i></div><div class="yl-sw-info"><h5>${ui.escapeHtml((stats.title || 'Website').substring(0, 40))}</h5><p>Avg score ${Math.round(stats.average_score)}% across ${stats.total_attempts} attempts</p></div></div>`;
            }
        });

        if (!html) {
            html = `
                <div class="yl-sw-card strength"><div class="yl-sw-icon" style="background:var(--aiw-success);"><i class="fas fa-check"></i></div><div class="yl-sw-info"><h5>Keep Learning!</h5><p>Take quizzes to discover your strengths</p></div></div>
                <div class="yl-sw-card weakness"><div class="yl-sw-icon" style="background:var(--aiw-danger);"><i class="fas fa-exclamation"></i></div><div class="yl-sw-info"><h5>Practice More</h5><p>Complete quizzes to identify weak areas</p></div></div>
            `;
        }

        container.innerHTML = html;
    }

    // ==================== 7. AI RECOMMENDATIONS ====================
    function renderRecommendations(statsData, exportData) {
        const recs = [];
        const streak = state.studyStreak?.study_streak || {};

        if (state.weakAreas.length > 0) {
            recs.push({ title: 'Review Weak Topics', desc: `Focus on: ${state.weakAreas[0].question_text.substring(0, 60)}`, icon: 'fa-bullseye', color: 'var(--aiw-danger)', tag: 'Priority' });
        }

        if (state.quizHistory.length < 5) {
            recs.push({ title: 'Take More Quizzes', desc: `Only ${state.quizHistory.length} quizzes taken — complete 5 for detailed analysis`, icon: 'fa-question-circle', color: 'var(--aiw-warning)', tag: 'Suggested' });
        }

        const easyQuizzes = state.quizHistory.filter(q => q.difficulty === 'easy');
        const mediumQuizzes = state.quizHistory.filter(q => q.difficulty === 'medium');
        const easyAvg = easyQuizzes.length > 0 ? easyQuizzes.reduce((a, b) => a + b.score_percentage, 0) / easyQuizzes.length : 0;
        if (easyAvg >= 80 && mediumQuizzes.length < 3) {
            recs.push({ title: 'Try Medium Difficulty', desc: `Scoring ${Math.round(easyAvg)}% on easy — time to level up!`, icon: 'fa-level-up-alt', color: '#7209b7', tag: 'Challenge' });
        }

        const subjectsStudied = new Set(state.websites.map(w => w.subject));
        if (subjectsStudied.size < 3) {
            recs.push({ title: 'Explore More Subjects', desc: `Only studying ${subjectsStudied.size} subject${subjectsStudied.size > 1 ? 's' : ''} — diversify your learning`, icon: 'fa-compass', color: '#4cc9f0', tag: 'Explore' });
        }

        const activity = state.studyStreak?.activity_pattern || {};
        if ((streak.current_streak_days || 0) > 0) {
            recs.push({ title: 'Protect Your Streak', desc: `${streak.current_streak_days} day streak active — study today to keep it!`, icon: 'fa-shield-alt', color: 'var(--aiw-success)', tag: 'Daily' });
        }

        if (activity.peak_study_hour !== undefined && activity.peak_study_hour !== null) {
            const hr = activity.peak_study_hour;
            const label = hr < 12 ? `${hr} AM` : hr === 12 ? '12 PM' : `${hr - 12} PM`;
            recs.push({ title: `Your Peak Hour: ${label}`, desc: 'You study best at this time — schedule sessions here', icon: 'fa-clock', color: 'var(--aiw-primary)', tag: 'Insight' });
        }

        const container = document.getElementById('ylRecommendations');
        if (container) {
            if (recs.length === 0) {
                recs.push({ title: 'Start Learning', desc: 'Ask questions and take quizzes to get personalized tips', icon: 'fa-rocket', color: 'var(--aiw-primary)', tag: 'Get Started' });
            }
            container.innerHTML = recs.map(r => `
                <div class="yl-rec-item">
                    <div class="yl-rec-icon" style="background:linear-gradient(135deg,${r.color},${r.color}cc);"><i class="fas ${r.icon}"></i></div>
                    <div class="yl-rec-info"><div class="yl-rec-title">${r.title}</div><div class="yl-rec-desc">${r.desc}</div></div>
                    <span class="yl-rec-tag" style="background:${r.color}15;color:${r.color};">${r.tag}</span>
                    <i class="fas fa-chevron-right yl-rec-arrow"></i>
                </div>
            `).join('');
        }
    }

    // ==================== 8. STUDY STREAK CALENDAR ====================
    function renderStudyStreak(streakData, statsData) {
        const grid = document.getElementById('ylStreakGrid');
        if (!grid) return;

        const streak = streakData?.study_streak || {};
        const currentStreak = streak.current_streak_days || 0;
        const longestStreak = streak.longest_streak_days || currentStreak;

        const questionsPerDate = {};

        (streak.study_dates || []).forEach(d => {
            const ds = (typeof d === 'string') ? d.split('T')[0] : d;
            questionsPerDate[ds] = (questionsPerDate[ds] || 0) + 1;
        });

        Object.entries(streak.daily_activity || {}).forEach(([ds, count]) => {
            if (count > 0) questionsPerDate[ds] = (questionsPerDate[ds] || 0) + count;
        });

        (statsData?.daily_activity || []).forEach(entry => {
            const ds = entry.study_date;
            if (ds && entry.chat_count > 0) {
                questionsPerDate[ds] = (questionsPerDate[ds] || 0) + entry.chat_count;
            }
        });

        (streakData?.recent_activity || []).forEach(([dateStr, chats]) => {
            if (chats && chats.length > 0) {
                const ds = dateStr.split('T')[0];
                questionsPerDate[ds] = (questionsPerDate[ds] || 0) + chats.length;
            }
        });

        const today = new Date();
        const year = today.getFullYear(), month = today.getMonth();
        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const totalDays = lastDay.getDate();
        let startDow = firstDay.getDay();
        startDow = startDow === 0 ? 6 : startDow - 1;

        const ml = document.getElementById('ylStreakMonth');
        if (ml) ml.textContent = today.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });

        const allCounts = Object.values(questionsPerDate);
        const maxQ = Math.max(...allCounts, 1);

        let html = '';
        ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'].forEach(d => {
            html += `<div class="yl-streak-day-label">${d}</div>`;
        });
        for (let i = 0; i < startDow; i++) html += '<div class="yl-streak-cell" style="visibility:hidden;"></div>';

        let daysStudied = 0;
        for (let day = 1; day <= totalDays; day++) {
            const date = new Date(year, month, day);
            const ds = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            const isToday = day === today.getDate();
            const isFuture = date > today;
            const count = questionsPerDate[ds] || 0;

            let lvl = '';
            if (count > 0) {
                daysStudied++;
                const r = count / maxQ;
                lvl = r > 0.75 ? 's4' : r > 0.5 ? 's3' : r > 0.25 ? 's2' : 's1';
            }

            const cls = ['yl-streak-cell', lvl, isToday ? 'today' : '', isFuture ? 'future' : ''].filter(Boolean).join(' ');
            const tip = count > 0 ? `${day} ${today.toLocaleDateString('en-US', { month: 'short' })} — ${count} question${count !== 1 ? 's' : ''}` : `${day} ${today.toLocaleDateString('en-US', { month: 'short' })} — No activity`;
            html += `<div class="${cls}" title="${tip}"></div>`;
        }

        grid.innerHTML = html;

        const ce = document.getElementById('ylStreakCurrent');
        const be = document.getElementById('ylStreakBest');
        const de = document.getElementById('ylStreakDaysThisMonth');
        if (ce) ce.textContent = currentStreak;
        if (be) be.textContent = longestStreak;
        if (de) de.textContent = daysStudied;
    }

    // ==================== 9. GOALS ====================
    function renderGoals(streakData, statsData) {
        const streak = streakData?.study_streak || {};
        const summary = statsData?.summary || {};
        const totalQ = (streak.total_questions || 0) + (summary.total_questions_asked || 0);
        const currentStreak = streak.current_streak_days || 0;
        const quizCount = state.quizHistory.length;
        const totalStudyMins = (summary.total_study_time_minutes || 0) + ((streak.total_questions || 0) * 2);

        let avgScore = 0;
        if (quizCount > 0) {
            avgScore = Math.round(state.quizHistory.reduce((a, b) => a + b.score_percentage, 0) / quizCount);
        }

        const goals = [
            { title: 'Ask 100 questions', progress: Math.min(100, Math.round((totalQ / 100) * 100)), completed: totalQ >= 100, detail: `${totalQ}/100 questions` },
            { title: 'Complete 10 quizzes', progress: Math.min(100, Math.round((quizCount / 10) * 100)), completed: quizCount >= 10, detail: `${quizCount}/10 quizzes` },
            { title: 'Reach 80% average score', progress: Math.min(100, Math.round((avgScore / 80) * 100)), completed: avgScore >= 80, detail: `Current: ${avgScore}%` },
            { title: '14 day study streak', progress: Math.min(100, Math.round((currentStreak / 14) * 100)), completed: currentStreak >= 14, detail: `${currentStreak}/14 days` },
            { title: 'Study 5 hours total', progress: Math.min(100, Math.round((totalStudyMins / 300) * 100)), completed: totalStudyMins >= 300, detail: `${ui.dur(totalStudyMins)}/5h` }
        ];

        const done = goals.filter(g => g.completed).length;
        const pEl = document.getElementById('ylGoalProgress');
        if (pEl) pEl.textContent = `${done} of ${goals.length} completed`;

        const container = document.getElementById('ylGoalsList');
        if (container) {
            container.innerHTML = goals.map(g => `
                <div class="yl-goal-item ${g.completed ? 'done' : ''}">
                    <div class="yl-goal-top">
                        <div class="yl-goal-title">
                            ${g.completed ? '<i class="fas fa-check-circle" style="color:var(--aiw-success);"></i>' : '<i class="fas fa-circle" style="color:#e0e4ea;font-size:11px;"></i>'}
                            ${g.title}
                        </div>
                        <span class="yl-goal-pct" style="color:${g.completed ? 'var(--aiw-success)' : 'var(--aiw-warning)'};">${g.progress}%</span>
                    </div>
                    <div class="yl-goal-bar"><div class="yl-goal-fill" style="width:${g.progress}%;background:linear-gradient(90deg,${g.completed ? 'var(--aiw-success),var(--aiw-success)' : 'var(--aiw-warning),var(--aiw-warning)'});"></div></div>
                    <div style="font-size:11px;color:var(--aiw-text-light);margin-top:4px;">${g.detail}</div>
                </div>
            `).join('');
        }
    }

    // ==================== 10. RECENT ACTIVITY ====================
    function renderRecentActivity(kbChats, wbChats) {
        const activities = [];

        state.quizHistory.slice(0, 8).forEach(q => {
            activities.push({
                dotColor: q.score_percentage >= 70 ? 'var(--aiw-success)' : q.score_percentage >= 50 ? 'var(--aiw-warning)' : 'var(--aiw-danger)',
                text: `Quiz: ${Math.round(q.score_percentage)}% (${q.correct_answers}/${q.total_questions} correct) — ${q.difficulty || 'mixed'}`,
                rawTime: new Date(q.created_at),
                time: ui.timeAgo(q.created_at),
                xp: Math.round(q.score_percentage),
                website: q.website_title || ''
            });
        });

        kbChats.slice(0, 8).forEach(c => {
            const isCorrect = c.answer.includes('Correct!') || c.answer.includes('✅');
            const isWrong = c.answer.includes('Wrong.') || c.answer.includes('❌');
            activities.push({
                dotColor: isCorrect ? 'var(--aiw-success)' : isWrong ? 'var(--aiw-danger)' : 'var(--aiw-primary)',
                text: `Book: ${ui.escapeHtml(c.question.substring(0, 80))}`,
                rawTime: new Date(c.timestamp),
                time: ui.timeAgo(c.timestamp),
                xp: isCorrect ? 25 : isWrong ? 5 : 10
            });
        });

        activities.sort((a, b) => b.rawTime - a.rawTime);

        const container = document.getElementById('ylActivityList');
        if (container) {
            if (activities.length === 0) {
                container.innerHTML = '<div style="text-align:center;padding:40px;"><i class="fas fa-comments" style="font-size:48px;color:#ccc;"></i><p style="margin-top:10px;">No activity yet. Start asking questions!</p></div>';
            } else {
                container.innerHTML = activities.slice(0, 12).map(a => `
                    <div class="yl-activity-item">
                        <div class="yl-activity-dot" style="background:${a.dotColor};"></div>
                        <div class="yl-activity-content">
                            <div class="yl-activity-text">${a.text}</div>
                            <div class="yl-activity-time">${a.time}${a.website ? ' &bull; ' + ui.escapeHtml(a.website) : ''}</div>
                        </div>
                        <div class="yl-activity-xp">+${a.xp} XP</div>
                    </div>
                `).join('');
            }
        }
    }

    // ==================== INITIALIZATION ====================
    let initCalled = false;

    async function initialize() {
        if (initCalled) return;
        initCalled = true;
        console.log('📊 Initializing Your Learning analytics...');

        if (!auth.isAuthenticated()) {
            console.log('Not authenticated');
            initCalled = false;
            return;
        }

        await loadAllData();

        const scoreInfo = document.getElementById('ylScoreInfo');
        if (scoreInfo) {
            scoreInfo.addEventListener('click', () => {
                alert('Learning Score is calculated from:\n\n• Consistency (25%): Study streak\n• Quiz Performance (35%): Average quiz scores\n• Topic Coverage (20%): Total questions asked\n• Engagement (20%): Daily activity across books + websites');
            });
        }
    }

    function checkAndLoad() {
        const section = document.getElementById('learning-section');
        if (section && section.style.display !== 'none' && !state.initialized) {
            initialize();
        }
    }

    document.addEventListener('DOMContentLoaded', () => setTimeout(checkAndLoad, 100));

    const observer = new MutationObserver(checkAndLoad);
    const section = document.getElementById('learning-section');
    if (section) observer.observe(section, { attributes: true, attributeFilter: ['style'] });

})();
</script>

</div>