<!-- Neuralab Section -->
<div id="neuralab-section" class="content-section" style="display: none;">

<style>
/* ===== NEURALAB STYLES - AI WORLD THEME ===== */

/* Top Bar */
.nlab-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 16px;
    margin-bottom: 24px;
}
.nlab-title-group {
    display: flex;
    align-items: center;
    gap: 14px;
}
.nlab-title-icon {
    width: 52px;
    height: 52px;
    border-radius: 16px;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #fff;
}
.nlab-title-group h2 {
    font-size: 24px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0;
}
.nlab-title-group p {
    font-size: 13px;
    color: #8d99ae;
    margin: 2px 0 0;
}
.nlab-controls {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
}
.nlab-select {
    padding: 10px 16px;
    border-radius: 12px;
    border: 2px solid #e8ecf4;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
    color: #1a1a2e;
    background: #fff;
    cursor: pointer;
    outline: none;
    transition: all 0.3s;
}
.nlab-select:focus {
    border-color: #0ed3a2;
}
.nlab-btn {
    padding: 10px 20px;
    border-radius: 12px;
    border: none;
    font-size: 13px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s;
}
.nlab-btn:hover {
    transform: translateY(-2px);
}
.nlab-btn-primary {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: #fff;
    box-shadow: 0 4px 12px rgba(63, 102, 230, 0.25);
}
.nlab-btn-success {
    background: linear-gradient(135deg, #0ed3a2, #129695);
    color: #fff;
    box-shadow: 0 4px 12px rgba(14, 211, 162, 0.25);
}
.nlab-btn-danger {
    background: linear-gradient(135deg, #ef476f, #e63946);
    color: #fff;
}
.nlab-btn-ghost {
    background: transparent;
    color: #1a1a2e;
    border: 2px solid #e8ecf4;
}
.nlab-btn-ghost:hover {
    background: #f8faff;
    border-color: #0ed3a2;
}

/* Main Layout */
.nlab-layout {
    display: grid;
    grid-template-columns: 280px 1fr 300px;
    gap: 20px;
    min-height: 520px;
}

/* Sidebar - Element Tray */
.nlab-tray {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    border: 1.5px solid #eef0f5;
}
.nlab-tray-header {
    padding: 18px 20px;
    border-bottom: 1px solid #f0f1f5;
    display: flex;
    align-items: center;
    gap: 10px;
}
.nlab-tray-header i {
    color: #3f66e6;
}
.nlab-tray-header h4 {
    font-size: 14px;
    font-weight: 600;
    color: #1a1a2e;
    margin: 0;
}
.nlab-tray-search {
    padding: 12px 20px;
    border-bottom: 1px solid #f0f1f5;
}
.nlab-tray-search input {
    width: 100%;
    padding: 9px 14px;
    border-radius: 10px;
    border: 2px solid #e8ecf4;
    font-size: 12px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    transition: all 0.3s;
}
.nlab-tray-search input:focus {
    border-color: #0ed3a2;
}
.nlab-tray-items {
    flex: 1;
    overflow-y: auto;
    padding: 12px;
}
.nlab-tray-category {
    margin-bottom: 16px;
}
.nlab-tray-category-label {
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #8d99ae;
    padding: 0 8px 8px;
}
.nlab-element {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 12px;
    border-radius: 12px;
    cursor: grab;
    transition: all 0.3s;
    user-select: none;
    margin-bottom: 4px;
    background: #fff;
    border: 1.5px solid transparent;
}
.nlab-element:hover {
    background: linear-gradient(135deg, #f8faff, #f0faf5);
    border-color: #0ed3a2;
    transform: translateX(4px);
}
.nlab-element:active {
    cursor: grabbing;
}
.nlab-element.dragging {
    opacity: 0.5;
}
.nlab-el-icon {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    color: #fff;
    flex-shrink: 0;
}
.nlab-el-info {
    min-width: 0;
}
.nlab-el-name {
    font-size: 13px;
    font-weight: 600;
    color: #1a1a2e;
}
.nlab-el-desc {
    font-size: 11px;
    color: #8d99ae;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Workspace */
.nlab-workspace {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
    border: 1.5px solid #eef0f5;
}
.nlab-workspace-header {
    padding: 14px 20px;
    border-bottom: 1px solid #f0f1f5;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.nlab-workspace-header h4 {
    font-size: 14px;
    font-weight: 600;
    color: #1a1a2e;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 8px;
}
.nlab-workspace-toolbar {
    display: flex;
    gap: 6px;
}
.nlab-tool-btn {
    width: 34px;
    height: 34px;
    border-radius: 10px;
    border: 2px solid #e8ecf4;
    background: #fff;
    color: #8d99ae;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 13px;
    transition: all 0.3s;
}
.nlab-tool-btn:hover, .nlab-tool-btn.active {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: #fff;
    border-color: transparent;
    transform: translateY(-1px);
}
.nlab-canvas {
    flex: 1;
    position: relative;
    min-height: 400px;
    background:
        radial-gradient(circle at 1px 1px, #eef0f5 1px, transparent 0);
    background-size: 28px 28px;
    overflow: hidden;
}
.nlab-canvas.drag-over {
    background-color: rgba(63, 102, 230, 0.03);
    outline: 2px dashed rgba(14, 211, 162, 0.5);
    outline-offset: -8px;
}

/* Empty state */
.nlab-empty-state {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    pointer-events: none;
    color: #8d99ae;
}
.nlab-empty-icon {
    font-size: 48px;
    margin-bottom: 14px;
    opacity: 0.35;
}
.nlab-empty-state h4 {
    font-size: 16px;
    font-weight: 600;
    margin: 0 0 6px;
    color: #1a1a2e;
}
.nlab-empty-state p {
    font-size: 13px;
    margin: 0;
}

/* Dropped items on canvas */
.nlab-dropped-item {
    position: absolute;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 16px;
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    cursor: move;
    user-select: none;
    z-index: 10;
    border: 2px solid transparent;
    transition: all 0.3s;
    min-width: 60px;
}
.nlab-dropped-item:hover {
    border-color: #0ed3a2;
    box-shadow: 0 6px 28px rgba(14, 211, 162, 0.18);
    transform: translateY(-2px);
}
.nlab-dropped-item.selected {
    border-color: #3f66e6;
}
.nlab-dropped-item .nlab-item-remove {
    position: absolute;
    top: -8px;
    right: -8px;
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: linear-gradient(135deg, #ef476f, #e63946);
    color: #fff;
    display: none;
    align-items: center;
    justify-content: center;
    font-size: 10px;
    cursor: pointer;
    border: 2px solid #fff;
}
.nlab-dropped-item:hover .nlab-item-remove {
    display: flex;
}
.nlab-dropped-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    color: #fff;
    flex-shrink: 0;
}
.nlab-dropped-label {
    font-size: 12px;
    font-weight: 600;
    color: #1a1a2e;
    white-space: nowrap;
}

/* Connector lines */
.nlab-connector {
    position: absolute;
    pointer-events: none;
    z-index: 5;
}

/* Reaction/Result Animation */
.nlab-reaction-flash {
    position: absolute;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(14,211,162,0.8) 0%, transparent 70%);
    animation: nlabFlash 0.8s ease-out forwards;
    pointer-events: none;
    z-index: 15;
}
@keyframes nlabFlash {
    0% { transform: scale(0.3); opacity: 1; }
    100% { transform: scale(2.5); opacity: 0; }
}

/* Right Panel */
.nlab-panel {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    border: 1.5px solid #eef0f5;
}
.nlab-panel-tabs {
    display: flex;
    border-bottom: 1px solid #f0f1f5;
}
.nlab-panel-tab {
    flex: 1;
    padding: 14px 10px;
    text-align: center;
    font-size: 12px;
    font-weight: 600;
    color: #8d99ae;
    cursor: pointer;
    border-bottom: 2px solid transparent;
    transition: all 0.3s;
}
.nlab-panel-tab:hover {
    color: #1a1a2e;
}
.nlab-panel-tab.active {
    color: #3f66e6;
    border-bottom-color: #0ed3a2;
}
.nlab-panel-body {
    flex: 1;
    overflow-y: auto;
    padding: 20px;
}
.nlab-panel-content {
    display: none;
}
.nlab-panel-content.active {
    display: block;
    animation: nlabSlideIn 0.3s ease;
}
@keyframes nlabSlideIn {
    from { opacity: 0; transform: translateY(8px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Experiment Info */
.nlab-exp-info {
    text-align: center;
    padding: 10px 0 20px;
}
.nlab-exp-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    margin-bottom: 14px;
}
.nlab-exp-info h4 {
    font-size: 16px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 8px;
}
.nlab-exp-info p {
    font-size: 13px;
    color: #8d99ae;
    margin: 0;
    line-height: 1.5;
}

/* Steps / Instructions */
.nlab-steps {
    display: flex;
    flex-direction: column;
    gap: 12px;
}
.nlab-step {
    display: flex;
    gap: 12px;
    align-items: flex-start;
}
.nlab-step-num {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: linear-gradient(135deg, #f0f4ff, #e8faf3);
    color: #3f66e6;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
    flex-shrink: 0;
}
.nlab-step.done .nlab-step-num {
    background: linear-gradient(135deg, #0ed3a2, #129695);
    color: #fff;
}
.nlab-step-text {
    font-size: 13px;
    color: #1a1a2e;
    line-height: 1.5;
    padding-top: 3px;
}
.nlab-step.done .nlab-step-text {
    text-decoration: line-through;
    color: #8d99ae;
}

/* Result Card */
.nlab-result-card {
    background: linear-gradient(135deg, rgba(63, 102, 230, 0.06), rgba(14, 211, 162, 0.04));
    border-radius: 14px;
    padding: 20px;
    margin-top: 16px;
    border: 1px solid rgba(14, 211, 162, 0.2);
    display: none;
}
.nlab-result-card.visible {
    display: block;
    animation: nlabSlideIn 0.4s ease;
}
.nlab-result-card h5 {
    font-size: 14px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.nlab-result-text {
    font-size: 13px;
    color: #1a1a2e;
    line-height: 1.6;
}
.nlab-result-formula {
    display: inline-block;
    background: #fff;
    border: 1px solid #e8ecf4;
    border-radius: 10px;
    padding: 8px 14px;
    font-family: 'Courier New', monospace;
    font-size: 14px;
    font-weight: 600;
    color: #3f66e6;
    margin: 10px 0;
}
.nlab-result-xp {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    border-radius: 20px;
    background: linear-gradient(135deg, #ffd166, #f9c74f);
    color: #7c5e00;
    font-size: 12px;
    font-weight: 700;
    margin-top: 12px;
}

/* Observation Log */
.nlab-observation {
    display: flex;
    gap: 10px;
    align-items: flex-start;
    padding: 12px;
    border-radius: 12px;
    background: linear-gradient(135deg, #f8faff, #f0faf5);
    margin-bottom: 10px;
    animation: nlabSlideIn 0.3s ease;
    border-left: 3px solid #0ed3a2;
}
.nlab-obs-time {
    font-size: 10px;
    color: #8d99ae;
    white-space: nowrap;
    padding-top: 2px;
}
.nlab-obs-text {
    font-size: 13px;
    color: #1a1a2e;
    line-height: 1.4;
}
.nlab-obs-icon {
    font-size: 16px;
    flex-shrink: 0;
}

/* Experiment Selector Modal Overlay */
.nlab-exp-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}
.nlab-exp-card {
    background: #fff;
    border-radius: 20px;
    padding: 22px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    cursor: pointer;
    transition: all 0.3s;
    border: 2px solid #eef0f5;
    position: relative;
    overflow: hidden;
}
.nlab-exp-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(63, 102, 230, 0.12);
    border-color: #0ed3a2;
}
.nlab-exp-card.active-exp {
    border-color: #3f66e6;
}
.nlab-exp-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #fff;
    margin-bottom: 14px;
}
.nlab-exp-card h5 {
    font-size: 15px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 6px;
}
.nlab-exp-card p {
    font-size: 12px;
    color: #8d99ae;
    margin: 0 0 12px;
    line-height: 1.4;
}
.nlab-exp-card-meta {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 11px;
}
.nlab-exp-card-meta span {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    color: #8d99ae;
}
.nlab-exp-card-diff {
    padding: 3px 10px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 600;
}

/* Status bar */
.nlab-statusbar {
    padding: 10px 20px;
    border-top: 1px solid #f0f1f5;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 12px;
    color: #8d99ae;
}
.nlab-status-left {
    display: flex;
    align-items: center;
    gap: 16px;
}
.nlab-status-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 4px;
}

/* Subject filter chips */
.nlab-chips {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 24px;
}
.nlab-chip {
    padding: 8px 20px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    border: 2px solid #e8ecf4;
    background: #fff;
    color: #1a1a2e;
    transition: all 0.3s;
}
.nlab-chip:hover {
    border-color: #0ed3a2;
    color: #3f66e6;
    transform: translateY(-1px);
}
.nlab-chip.active {
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: #fff;
    border-color: transparent;
}

/* View Toggle */
.nlab-view-selector { display: none; }
.nlab-view-lab { display: none; }
.nlab-view-selector.visible { display: block; }
.nlab-view-lab.visible { display: block; }

/* Responsive */
@media (max-width: 1100px) {
    .nlab-layout {
        grid-template-columns: 1fr;
    }
    .nlab-tray {
        max-height: 250px;
    }
}
@media (max-width: 700px) {
    .nlab-exp-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- ========== EXPERIMENT SELECTOR VIEW ========== -->
<div class="nlab-view-selector visible" id="nlabViewSelector">
    <div class="nlab-topbar">
        <div class="nlab-title-group">
            <div class="nlab-title-icon"><i class="fas fa-flask"></i></div>
            <div>
                <h2>Neuralab</h2>
                <p>Virtual AI Lab &mdash; Pick an experiment to begin</p>
            </div>
        </div>
        <div class="nlab-controls">
            <select class="nlab-select" id="nlabClassFilter">
                <option value="all">All Classes</option>
                <option value="1-5">Class 1-5</option>
                <option value="6-8">Class 6-8</option>
                <option value="9-10">Class 9-10</option>
                <option value="11-12">Class 11-12</option>
            </select>
        </div>
    </div>

    <!-- Subject Chips -->
    <div class="nlab-chips" id="nlabChips">
        <div class="nlab-chip active" data-subject="all">All Subjects</div>
        <div class="nlab-chip" data-subject="chemistry"><i class="fas fa-flask"></i> Chemistry</div>
        <div class="nlab-chip" data-subject="physics"><i class="fas fa-bolt"></i> Physics</div>
        <div class="nlab-chip" data-subject="biology"><i class="fas fa-leaf"></i> Biology</div>
        <div class="nlab-chip" data-subject="math"><i class="fas fa-calculator"></i> Math</div>
    </div>

    <!-- Experiment Cards -->
    <div class="nlab-exp-grid" id="nlabExpGrid">
        <!-- Cards are populated by JS -->
    </div>
</div>

<!-- ========== LAB VIEW ========== -->
<div class="nlab-view-lab" id="nlabViewLab">
    <!-- Top Bar -->
    <div class="nlab-topbar">
        <div class="nlab-title-group">
            <button class="nlab-btn nlab-btn-ghost" id="nlabBackBtn" title="Back to experiments">
                <i class="fas fa-arrow-left"></i>
            </button>
            <div>
                <h2 id="nlabExpTitle">Experiment</h2>
                <p id="nlabExpSubtitle">Drag elements into the workspace</p>
            </div>
        </div>
        <div class="nlab-controls">
            <button class="nlab-btn nlab-btn-success" id="nlabRunBtn">
                <i class="fas fa-play"></i> Run Experiment
            </button>
            <button class="nlab-btn nlab-btn-danger" id="nlabResetBtn">
                <i class="fas fa-redo"></i> Reset
            </button>
        </div>
    </div>

    <!-- 3-Column Layout -->
    <div class="nlab-layout">
        <!-- Left: Element Tray -->
        <div class="nlab-tray">
            <div class="nlab-tray-header">
                <i class="fas fa-cubes"></i>
                <h4>Elements & Tools</h4>
            </div>
            <div class="nlab-tray-search">
                <input type="text" placeholder="Search elements..." id="nlabTraySearch">
            </div>
            <div class="nlab-tray-items" id="nlabTrayItems">
                <!-- Populated by JS -->
            </div>
        </div>

        <!-- Center: Workspace Canvas -->
        <div class="nlab-workspace">
            <div class="nlab-workspace-header">
                <h4><i class="fas fa-border-all"></i> Workspace</h4>
                <div class="nlab-workspace-toolbar">
                    <button class="nlab-tool-btn" title="Zoom in" onclick="nlabZoom(1)"><i class="fas fa-search-plus"></i></button>
                    <button class="nlab-tool-btn" title="Zoom out" onclick="nlabZoom(-1)"><i class="fas fa-search-minus"></i></button>
                    <button class="nlab-tool-btn" title="Clear all" onclick="nlabClearCanvas()"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
            <div class="nlab-canvas" id="nlabCanvas">
                <div class="nlab-empty-state" id="nlabEmptyState">
                    <div class="nlab-empty-icon"><i class="fas fa-hand-pointer"></i></div>
                    <h4>Drag elements here</h4>
                    <p>Pick items from the left tray and<br>drop them into the workspace</p>
                </div>
            </div>
            <div class="nlab-statusbar">
                <div class="nlab-status-left">
                    <span><span class="nlab-status-dot" style="background:#0ed3a2;" id="nlabStatusDot"></span> <span id="nlabStatusText">Ready</span></span>
                    <span>Items: <strong id="nlabItemCount">0</strong></span>
                </div>
                <span id="nlabZoomLevel">100%</span>
            </div>
        </div>

        <!-- Right: Info / Observations Panel -->
        <div class="nlab-panel">
            <div class="nlab-panel-tabs">
                <div class="nlab-panel-tab active" data-panel="info">Info</div>
                <div class="nlab-panel-tab" data-panel="steps">Steps</div>
                <div class="nlab-panel-tab" data-panel="log">Log</div>
            </div>
            <div class="nlab-panel-body">
                <!-- Info Tab -->
                <div class="nlab-panel-content active" data-panel="info">
                    <div class="nlab-exp-info" id="nlabPanelInfo">
                        <div class="nlab-exp-badge" id="nlabPanelBadge" style="background:#eef2ff; color:#3f66e6;">
                            <i class="fas fa-flask"></i> Chemistry
                        </div>
                        <h4 id="nlabPanelTitle">Acid-Base Reaction</h4>
                        <p id="nlabPanelDesc">Mix an acid and a base to observe neutralization. Watch the color change!</p>
                    </div>
                    <div class="nlab-result-card" id="nlabResultCard">
                        <h5><i class="fas fa-star" style="color:#ffd166;"></i> Result</h5>
                        <div class="nlab-result-text" id="nlabResultText"></div>
                        <div class="nlab-result-xp" id="nlabResultXp" style="display:none;">
                            <i class="fas fa-bolt"></i> +50 XP Earned!
                        </div>
                    </div>
                </div>

                <!-- Steps Tab -->
                <div class="nlab-panel-content" data-panel="steps">
                    <div class="nlab-steps" id="nlabSteps">
                        <!-- Populated by JS -->
                    </div>
                </div>

                <!-- Observation Log Tab -->
                <div class="nlab-panel-content" data-panel="log">
                    <div id="nlabObsLog">
                        <div style="text-align:center; padding:30px 0; color:#8d99ae;">
                            <i class="fas fa-clipboard-list" style="font-size:28px; opacity:0.3; margin-bottom:10px;"></i>
                            <p style="font-size:13px;">Observations will appear here<br>as you interact with the lab.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    'use strict';

    // ==================== EXPERIMENT DATA ====================
    const EXPERIMENTS = [
        {
            id: 'acid-base',
            title: 'Acid-Base Neutralization',
            desc: 'Mix an acid with a base and observe the neutralization reaction with color indicators.',
            subject: 'chemistry',
            classRange: '6-8',
            difficulty: 'Easy',
            diffColor: '#0ed3a2',
            xp: 50,
            icon: 'fas fa-vial',
            iconBg: 'linear-gradient(135deg, #ef476f, #e63946)',
            steps: [
                'Drag a Beaker into the workspace',
                'Add Hydrochloric Acid (HCl) to the beaker',
                'Add Sodium Hydroxide (NaOH) to the beaker',
                'Add Litmus Indicator to observe the change',
                'Click "Run Experiment" to see the reaction'
            ],
            elements: [
                { id: 'beaker', name: 'Beaker', desc: '250ml glass beaker', icon: 'fas fa-prescription-bottle', color: '#3f66e6', category: 'Apparatus' },
                { id: 'hcl', name: 'Hydrochloric Acid', desc: 'HCl - Strong acid', icon: 'fas fa-tint', color: '#ef476f', category: 'Chemicals' },
                { id: 'naoh', name: 'Sodium Hydroxide', desc: 'NaOH - Strong base', icon: 'fas fa-tint', color: '#0ed3a2', category: 'Chemicals' },
                { id: 'litmus', name: 'Litmus Indicator', desc: 'pH color indicator', icon: 'fas fa-eye-dropper', color: '#7209b7', category: 'Chemicals' },
                { id: 'thermometer', name: 'Thermometer', desc: 'Measure temperature', icon: 'fas fa-thermometer-half', color: '#ffd166', category: 'Apparatus' },
                { id: 'stirrer', name: 'Glass Stirrer', desc: 'Stir the solution', icon: 'fas fa-utensils', color: '#129695', category: 'Apparatus' }
            ],
            requiredItems: ['beaker', 'hcl', 'naoh'],
            resultHTML: `
                <p>The acid (HCl) reacted with the base (NaOH) to form <strong>salt and water</strong>.</p>
                <div class="nlab-result-formula">HCl + NaOH → NaCl + H₂O</div>
                <p>This is a <strong>neutralization reaction</strong>. The solution became neutral (pH ~7). The litmus indicator changed from red to green, indicating the shift from acidic to neutral.</p>
                <p style="margin-top:8px; font-size:12px; color:#8d99ae;">Temperature rose slightly due to the exothermic nature of the reaction.</p>
            `
        },
        {
            id: 'circuit',
            title: 'Simple Electric Circuit',
            desc: 'Build a basic electric circuit with a battery, switch, and bulb to understand current flow.',
            subject: 'physics',
            classRange: '6-8',
            difficulty: 'Easy',
            diffColor: '#0ed3a2',
            xp: 50,
            icon: 'fas fa-bolt',
            iconBg: 'linear-gradient(135deg, #ffd166, #f9c74f)',
            steps: [
                'Drag a Battery into the workspace',
                'Add a Light Bulb',
                'Add connecting Wires',
                'Add a Switch to control the circuit',
                'Click "Run Experiment" to complete the circuit'
            ],
            elements: [
                { id: 'battery', name: 'Battery (9V)', desc: 'Power source', icon: 'fas fa-battery-full', color: '#0ed3a2', category: 'Components' },
                { id: 'bulb', name: 'Light Bulb', desc: '6V incandescent', icon: 'fas fa-lightbulb', color: '#ffd166', category: 'Components' },
                { id: 'wire', name: 'Copper Wire', desc: 'Conductor wire', icon: 'fas fa-minus', color: '#3f66e6', category: 'Components' },
                { id: 'switch', name: 'Switch', desc: 'On/Off toggle', icon: 'fas fa-toggle-on', color: '#ef476f', category: 'Components' },
                { id: 'resistor', name: 'Resistor (100Ω)', desc: 'Limits current', icon: 'fas fa-wave-square', color: '#7209b7', category: 'Components' },
                { id: 'ammeter', name: 'Ammeter', desc: 'Measures current', icon: 'fas fa-tachometer-alt', color: '#4cc9f0', category: 'Instruments' }
            ],
            requiredItems: ['battery', 'bulb', 'wire'],
            resultHTML: `
                <p>The circuit is complete! Current flows from the battery through the wire to the bulb.</p>
                <div class="nlab-result-formula">V = I × R (Ohm's Law)</div>
                <p>The <strong>light bulb glows</strong> because electrical energy is converted to <strong>light and heat energy</strong>. The switch controls whether the circuit is open (off) or closed (on).</p>
                <p style="margin-top:8px; font-size:12px; color:#8d99ae;">Current measured: ~0.09A with the 100Ω resistor in series.</p>
            `
        },
        {
            id: 'photosynthesis',
            title: 'Photosynthesis Simulation',
            desc: 'Observe how plants convert sunlight, water, and CO₂ into glucose and oxygen.',
            subject: 'biology',
            classRange: '6-8',
            difficulty: 'Medium',
            diffColor: '#ffd166',
            xp: 75,
            icon: 'fas fa-leaf',
            iconBg: 'linear-gradient(135deg, #0ed3a2, #129695)',
            steps: [
                'Place the Plant in the workspace',
                'Add Sunlight source',
                'Add Water (H₂O)',
                'Add Carbon Dioxide (CO₂)',
                'Click "Run Experiment" to observe photosynthesis'
            ],
            elements: [
                { id: 'plant', name: 'Green Plant', desc: 'Aquatic plant (Hydrilla)', icon: 'fas fa-seedling', color: '#0ed3a2', category: 'Specimens' },
                { id: 'sunlight', name: 'Sunlight', desc: 'Light energy source', icon: 'fas fa-sun', color: '#ffd166', category: 'Energy' },
                { id: 'water', name: 'Water (H₂O)', desc: 'Essential reactant', icon: 'fas fa-tint', color: '#3f66e6', category: 'Chemicals' },
                { id: 'co2', name: 'Carbon Dioxide', desc: 'CO₂ gas', icon: 'fas fa-cloud', color: '#8d99ae', category: 'Chemicals' },
                { id: 'testTube', name: 'Test Tube', desc: 'Collect oxygen', icon: 'fas fa-prescription-bottle', color: '#7209b7', category: 'Apparatus' },
                { id: 'magnifier', name: 'Magnifying Glass', desc: 'Observe bubbles', icon: 'fas fa-search', color: '#ef476f', category: 'Apparatus' }
            ],
            requiredItems: ['plant', 'sunlight', 'water', 'co2'],
            resultHTML: `
                <p>Photosynthesis is occurring! The plant converts light energy into chemical energy.</p>
                <div class="nlab-result-formula">6CO₂ + 6H₂O + Light → C₆H₁₂O₆ + 6O₂</div>
                <p><strong>Oxygen bubbles</strong> rise from the plant's leaves. The plant produces <strong>glucose</strong> (stored as starch) and releases O₂. Chlorophyll in the leaves absorbs light energy to drive this reaction.</p>
                <p style="margin-top:8px; font-size:12px; color:#8d99ae;">More light = more bubbles. Try blocking the light to stop the reaction!</p>
            `
        },
        {
            id: 'pendulum',
            title: 'Simple Pendulum',
            desc: 'Study the motion of a pendulum and measure how length affects its time period.',
            subject: 'physics',
            classRange: '9-10',
            difficulty: 'Medium',
            diffColor: '#ffd166',
            xp: 75,
            icon: 'fas fa-clock',
            iconBg: 'linear-gradient(135deg, #3f66e6, #0ed3a2)',
            steps: [
                'Set up the Clamp Stand',
                'Attach a String to the stand',
                'Attach a Bob (weight) to the string',
                'Add a Stopwatch to measure time',
                'Click "Run Experiment" to observe oscillation'
            ],
            elements: [
                { id: 'stand', name: 'Clamp Stand', desc: 'Support structure', icon: 'fas fa-drafting-compass', color: '#3f66e6', category: 'Apparatus' },
                { id: 'string', name: 'String (1m)', desc: 'Inextensible thread', icon: 'fas fa-link', color: '#8d99ae', category: 'Materials' },
                { id: 'bob', name: 'Metal Bob', desc: '50g spherical weight', icon: 'fas fa-circle', color: '#ef476f', category: 'Materials' },
                { id: 'stopwatch', name: 'Stopwatch', desc: 'Digital timer', icon: 'fas fa-stopwatch', color: '#0ed3a2', category: 'Instruments' },
                { id: 'ruler', name: 'Meter Scale', desc: 'Measure string length', icon: 'fas fa-ruler', color: '#ffd166', category: 'Instruments' },
                { id: 'protractor', name: 'Protractor', desc: 'Measure angle', icon: 'fas fa-compass', color: '#7209b7', category: 'Instruments' }
            ],
            requiredItems: ['stand', 'string', 'bob'],
            resultHTML: `
                <p>The pendulum swings with a regular period. For a 1m string:</p>
                <div class="nlab-result-formula">T = 2π√(L/g) ≈ 2.0 seconds</div>
                <p>The <strong>time period (T)</strong> depends only on the <strong>length (L)</strong> and <strong>gravity (g)</strong>, not on the mass of the bob. This is <strong>Simple Harmonic Motion</strong> for small angles.</p>
                <p style="margin-top:8px; font-size:12px; color:#8d99ae;">Try changing the string length — a shorter string swings faster!</p>
            `
        },
        {
            id: 'cell-division',
            title: 'Mitosis — Cell Division',
            desc: 'Watch a cell undergo mitosis and identify each phase of division.',
            subject: 'biology',
            classRange: '9-10',
            difficulty: 'Medium',
            diffColor: '#ffd166',
            xp: 75,
            icon: 'fas fa-microscope',
            iconBg: 'linear-gradient(135deg, #7209b7, #560bad)',
            steps: [
                'Place the Cell on the workspace',
                'Add the Microscope to observe',
                'Add a Stain to highlight chromosomes',
                'Add a Slide for preparation',
                'Click "Run Experiment" to watch mitosis'
            ],
            elements: [
                { id: 'cell', name: 'Onion Root Cell', desc: 'Actively dividing cell', icon: 'fas fa-circle', color: '#0ed3a2', category: 'Specimens' },
                { id: 'microscope', name: 'Microscope', desc: '400x magnification', icon: 'fas fa-microscope', color: '#7209b7', category: 'Apparatus' },
                { id: 'stain', name: 'Acetocarmine Stain', desc: 'Chromosome stain', icon: 'fas fa-eye-dropper', color: '#ef476f', category: 'Chemicals' },
                { id: 'slide', name: 'Glass Slide', desc: 'Prepared mount', icon: 'fas fa-square', color: '#3f66e6', category: 'Apparatus' },
                { id: 'coverslip', name: 'Cover Slip', desc: 'Thin glass cover', icon: 'fas fa-clone', color: '#8d99ae', category: 'Apparatus' },
                { id: 'forceps', name: 'Forceps', desc: 'Handling tool', icon: 'fas fa-cut', color: '#ffd166', category: 'Apparatus' }
            ],
            requiredItems: ['cell', 'microscope', 'stain', 'slide'],
            resultHTML: `
                <p>The onion root tip cells are actively dividing! You can observe 4 phases:</p>
                <p><strong>Prophase</strong> → Chromosomes condense, become visible<br>
                <strong>Metaphase</strong> → Chromosomes align at the center<br>
                <strong>Anaphase</strong> → Chromatids pull apart to opposite poles<br>
                <strong>Telophase</strong> → Two new nuclei form</p>
                <div class="nlab-result-formula">1 Cell → 2 Identical Daughter Cells</div>
                <p style="margin-top:8px; font-size:12px; color:#8d99ae;">Mitosis maintains the same chromosome number (2n → 2n).</p>
            `
        },
        {
            id: 'geometric-transformations',
            title: 'Geometric Transformations',
            desc: 'Explore reflection, rotation, and translation of shapes on a coordinate plane.',
            subject: 'math',
            classRange: '6-8',
            difficulty: 'Easy',
            diffColor: '#0ed3a2',
            xp: 50,
            icon: 'fas fa-shapes',
            iconBg: 'linear-gradient(135deg, #4cc9f0, #4895ef)',
            steps: [
                'Place a Shape on the coordinate plane',
                'Add a Mirror Line for reflection',
                'Add a Rotation Point',
                'Add a Translation Vector',
                'Click "Run Experiment" to see transformations'
            ],
            elements: [
                { id: 'triangle', name: 'Triangle', desc: 'Right-angled triangle', icon: 'fas fa-play', color: '#3f66e6', category: 'Shapes' },
                { id: 'square', name: 'Square', desc: '4-sided polygon', icon: 'fas fa-square', color: '#0ed3a2', category: 'Shapes' },
                { id: 'mirror', name: 'Mirror Line', desc: 'Axis of reflection', icon: 'fas fa-grip-lines-vertical', color: '#ef476f', category: 'Tools' },
                { id: 'rotPoint', name: 'Rotation Center', desc: 'Point of rotation', icon: 'fas fa-sync-alt', color: '#ffd166', category: 'Tools' },
                { id: 'vector', name: 'Translation Vector', desc: 'Direction & distance', icon: 'fas fa-arrows-alt', color: '#7209b7', category: 'Tools' },
                { id: 'protractor2', name: 'Protractor', desc: 'Measure rotation angle', icon: 'fas fa-compass', color: '#4cc9f0', category: 'Instruments' }
            ],
            requiredItems: ['triangle', 'mirror'],
            resultHTML: `
                <p>The triangle has been reflected across the mirror line!</p>
                <div class="nlab-result-formula">Reflection: (x, y) → (−x, y) across Y-axis</div>
                <p><strong>Reflection</strong> flips the shape across a line. <strong>Rotation</strong> turns it around a point. <strong>Translation</strong> slides it without changing size or shape.</p>
                <p style="margin-top:8px; font-size:12px; color:#8d99ae;">All three are "rigid transformations" — the shape's size and angles stay the same!</p>
            `
        }
    ];

    // ==================== STATE ====================
    let currentExp = null;
    let canvasItems = [];
    let canvasIdCounter = 0;
    let zoomLevel = 100;
    let draggedElement = null;
    let movingItem = null;
    let moveOffset = { x: 0, y: 0 };

    // ==================== SELECTORS ====================
    const viewSelector = document.getElementById('nlabViewSelector');
    const viewLab = document.getElementById('nlabViewLab');
    const expGrid = document.getElementById('nlabExpGrid');
    const canvas = document.getElementById('nlabCanvas');
    const trayItems = document.getElementById('nlabTrayItems');
    const traySearch = document.getElementById('nlabTraySearch');
    const emptyState = document.getElementById('nlabEmptyState');
    const itemCountEl = document.getElementById('nlabItemCount');
    const statusText = document.getElementById('nlabStatusText');
    const statusDot = document.getElementById('nlabStatusDot');

    // ==================== RENDER EXPERIMENT CARDS ====================
    function renderExpCards(filter, classFilter) {
        let exps = EXPERIMENTS;
        if (filter && filter !== 'all') exps = exps.filter(e => e.subject === filter);
        if (classFilter && classFilter !== 'all') exps = exps.filter(e => e.classRange === classFilter);

        expGrid.innerHTML = exps.map(e => `
            <div class="nlab-exp-card" data-exp-id="${e.id}">
                <div class="nlab-exp-card-icon" style="background:${e.iconBg};"><i class="${e.icon}"></i></div>
                <h5>${e.title}</h5>
                <p>${e.desc}</p>
                <div class="nlab-exp-card-meta">
                    <span class="nlab-exp-card-diff" style="background:${e.diffColor}22; color:${e.diffColor};">${e.difficulty}</span>
                    <span><i class="fas fa-graduation-cap"></i> Class ${e.classRange}</span>
                    <span><i class="fas fa-bolt"></i> ${e.xp} XP</span>
                </div>
            </div>
        `).join('');

        expGrid.querySelectorAll('.nlab-exp-card').forEach(card => {
            card.addEventListener('click', () => loadExperiment(card.dataset.expId));
        });
    }

    // Chip filters
    document.getElementById('nlabChips').addEventListener('click', function(e) {
        const chip = e.target.closest('.nlab-chip');
        if (!chip) return;
        this.querySelectorAll('.nlab-chip').forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        renderExpCards(chip.dataset.subject, document.getElementById('nlabClassFilter').value);
    });
    document.getElementById('nlabClassFilter').addEventListener('change', function() {
        const activeChip = document.querySelector('#nlabChips .nlab-chip.active');
        renderExpCards(activeChip ? activeChip.dataset.subject : 'all', this.value);
    });

    // ==================== LOAD EXPERIMENT ====================
    function loadExperiment(expId) {
        currentExp = EXPERIMENTS.find(e => e.id === expId);
        if (!currentExp) return;

        // Switch view
        viewSelector.classList.remove('visible');
        viewLab.classList.add('visible');

        // Set titles
        document.getElementById('nlabExpTitle').textContent = currentExp.title;
        document.getElementById('nlabExpSubtitle').textContent = currentExp.desc;
        document.getElementById('nlabPanelTitle').textContent = currentExp.title;
        document.getElementById('nlabPanelDesc').textContent = currentExp.desc;

        const subjectColors = { chemistry: '#ef476f', physics: '#ffd166', biology: '#0ed3a2', math: '#3f66e6' };
        const badge = document.getElementById('nlabPanelBadge');
        const sc = subjectColors[currentExp.subject] || '#3f66e6';
        badge.style.background = sc + '18';
        badge.style.color = sc;
        badge.innerHTML = `<i class="${currentExp.icon}"></i> ${currentExp.subject.charAt(0).toUpperCase() + currentExp.subject.slice(1)}`;

        // Render steps
        const stepsEl = document.getElementById('nlabSteps');
        stepsEl.innerHTML = currentExp.steps.map((s, i) => `
            <div class="nlab-step" id="nlabStep${i}">
                <div class="nlab-step-num">${i + 1}</div>
                <div class="nlab-step-text">${s}</div>
            </div>
        `).join('');

        // Render tray
        renderTray(currentExp.elements);

        // Reset canvas
        nlabClearCanvas();

        // Reset result
        document.getElementById('nlabResultCard').classList.remove('visible');
        document.getElementById('nlabResultXp').style.display = 'none';

        // Clear observations
        document.getElementById('nlabObsLog').innerHTML = `
            <div style="text-align:center; padding:30px 0; color:#8d99ae;">
                <i class="fas fa-clipboard-list" style="font-size:28px; opacity:0.3; margin-bottom:10px;"></i>
                <p style="font-size:13px;">Observations will appear here<br>as you interact with the lab.</p>
            </div>
        `;

        setStatus('Ready — drag elements to begin', '#0ed3a2');
    }

    // ==================== RENDER TRAY ====================
    function renderTray(elements) {
        const cats = {};
        elements.forEach(el => {
            if (!cats[el.category]) cats[el.category] = [];
            cats[el.category].push(el);
        });

        trayItems.innerHTML = Object.entries(cats).map(([cat, items]) => `
            <div class="nlab-tray-category">
                <div class="nlab-tray-category-label">${cat}</div>
                ${items.map(el => `
                    <div class="nlab-element" draggable="true" data-el-id="${el.id}" data-el-name="${el.name}" data-el-icon="${el.icon}" data-el-color="${el.color}">
                        <div class="nlab-el-icon" style="background:${el.color};"><i class="${el.icon}"></i></div>
                        <div class="nlab-el-info">
                            <div class="nlab-el-name">${el.name}</div>
                            <div class="nlab-el-desc">${el.desc}</div>
                        </div>
                    </div>
                `).join('')}
            </div>
        `).join('');

        // Attach drag events
        trayItems.querySelectorAll('.nlab-element').forEach(el => {
            el.addEventListener('dragstart', onDragStart);
            el.addEventListener('dragend', onDragEnd);
        });
    }

    // Tray search
    traySearch.addEventListener('input', function() {
        const q = this.value.toLowerCase();
        trayItems.querySelectorAll('.nlab-element').forEach(el => {
            const name = el.dataset.elName.toLowerCase();
            el.style.display = name.includes(q) ? '' : 'none';
        });
    });

    // ==================== DRAG & DROP ====================
    function onDragStart(e) {
        draggedElement = {
            id: this.dataset.elId,
            name: this.dataset.elName,
            icon: this.dataset.elIcon,
            color: this.dataset.elColor
        };
        this.classList.add('dragging');
        e.dataTransfer.effectAllowed = 'copy';
        e.dataTransfer.setData('text/plain', this.dataset.elId);
    }

    function onDragEnd(e) {
        this.classList.remove('dragging');
        canvas.classList.remove('drag-over');
        draggedElement = null;
    }

    canvas.addEventListener('dragover', function(e) {
        e.preventDefault();
        e.dataTransfer.dropEffect = 'copy';
        this.classList.add('drag-over');
    });

    canvas.addEventListener('dragleave', function() {
        this.classList.remove('drag-over');
    });

    canvas.addEventListener('drop', function(e) {
        e.preventDefault();
        this.classList.remove('drag-over');
        if (!draggedElement) return;

        const rect = canvas.getBoundingClientRect();
        const x = e.clientX - rect.left - 40;
        const y = e.clientY - rect.top - 20;

        addItemToCanvas(draggedElement, x, y);
        draggedElement = null;
    });

    // ==================== CANVAS ITEMS ====================
    function addItemToCanvas(elData, x, y) {
        const id = 'citem-' + (++canvasIdCounter);
        const item = { ...elData, canvasId: id, x, y };
        canvasItems.push(item);

        const div = document.createElement('div');
        div.className = 'nlab-dropped-item';
        div.id = id;
        div.style.left = x + 'px';
        div.style.top = y + 'px';
        div.innerHTML = `
            <div class="nlab-dropped-icon" style="background:${elData.color};"><i class="${elData.icon}"></i></div>
            <div class="nlab-dropped-label">${elData.name}</div>
            <div class="nlab-item-remove" data-cid="${id}"><i class="fas fa-times"></i></div>
        `;

        // Remove button
        div.querySelector('.nlab-item-remove').addEventListener('click', function(ev) {
            ev.stopPropagation();
            removeCanvasItem(this.dataset.cid);
        });

        // Dragging on canvas
        div.addEventListener('mousedown', startMoveItem);
        div.addEventListener('touchstart', startMoveItemTouch, { passive: false });

        canvas.appendChild(div);
        updateCanvasState();
        addObservation('info', `Added <strong>${elData.name}</strong> to workspace`);

        // Check steps
        checkStepCompletion();
    }

    function removeCanvasItem(cid) {
        canvasItems = canvasItems.filter(i => i.canvasId !== cid);
        const el = document.getElementById(cid);
        if (el) el.remove();
        updateCanvasState();
        addObservation('remove', `Removed an item from workspace`);
    }

    function updateCanvasState() {
        const count = canvasItems.length;
        itemCountEl.textContent = count;
        emptyState.style.display = count === 0 ? '' : 'none';
    }

    // ==================== MOVE ITEMS ON CANVAS ====================
    function startMoveItem(e) {
        if (e.target.closest('.nlab-item-remove')) return;
        e.preventDefault();
        const item = e.currentTarget;
        movingItem = item;
        const rect = item.getBoundingClientRect();
        moveOffset.x = e.clientX - rect.left;
        moveOffset.y = e.clientY - rect.top;
        item.classList.add('selected');
        document.addEventListener('mousemove', doMoveItem);
        document.addEventListener('mouseup', stopMoveItem);
    }

    function doMoveItem(e) {
        if (!movingItem) return;
        const canvasRect = canvas.getBoundingClientRect();
        let nx = e.clientX - canvasRect.left - moveOffset.x;
        let ny = e.clientY - canvasRect.top - moveOffset.y;
        nx = Math.max(0, Math.min(nx, canvasRect.width - movingItem.offsetWidth));
        ny = Math.max(0, Math.min(ny, canvasRect.height - movingItem.offsetHeight));
        movingItem.style.left = nx + 'px';
        movingItem.style.top = ny + 'px';
    }

    function stopMoveItem() {
        if (movingItem) movingItem.classList.remove('selected');
        movingItem = null;
        document.removeEventListener('mousemove', doMoveItem);
        document.removeEventListener('mouseup', stopMoveItem);
    }

    // Touch support
    function startMoveItemTouch(e) {
        if (e.target.closest('.nlab-item-remove')) return;
        e.preventDefault();
        const touch = e.touches[0];
        const item = e.currentTarget;
        movingItem = item;
        const rect = item.getBoundingClientRect();
        moveOffset.x = touch.clientX - rect.left;
        moveOffset.y = touch.clientY - rect.top;
        item.classList.add('selected');
        document.addEventListener('touchmove', doMoveItemTouch, { passive: false });
        document.addEventListener('touchend', stopMoveItemTouch);
    }

    function doMoveItemTouch(e) {
        if (!movingItem) return;
        e.preventDefault();
        const touch = e.touches[0];
        const canvasRect = canvas.getBoundingClientRect();
        let nx = touch.clientX - canvasRect.left - moveOffset.x;
        let ny = touch.clientY - canvasRect.top - moveOffset.y;
        nx = Math.max(0, Math.min(nx, canvasRect.width - movingItem.offsetWidth));
        ny = Math.max(0, Math.min(ny, canvasRect.height - movingItem.offsetHeight));
        movingItem.style.left = nx + 'px';
        movingItem.style.top = ny + 'px';
    }

    function stopMoveItemTouch() {
        if (movingItem) movingItem.classList.remove('selected');
        movingItem = null;
        document.removeEventListener('touchmove', doMoveItemTouch);
        document.removeEventListener('touchend', stopMoveItemTouch);
    }

    // ==================== STEP TRACKING ====================
    function checkStepCompletion() {
        if (!currentExp) return;
        const placed = canvasItems.map(i => i.id);
        const reqItems = currentExp.requiredItems;
        let completedCount = 0;
        reqItems.forEach(reqId => {
            if (placed.includes(reqId)) completedCount++;
        });

        for (let i = 0; i < currentExp.steps.length - 1; i++) {
            const stepEl = document.getElementById('nlabStep' + i);
            if (stepEl) {
                if (i < completedCount) {
                    stepEl.classList.add('done');
                    stepEl.querySelector('.nlab-step-num').innerHTML = '<i class="fas fa-check"></i>';
                } else {
                    stepEl.classList.remove('done');
                    stepEl.querySelector('.nlab-step-num').textContent = i + 1;
                }
            }
        }
    }

    // ==================== RUN EXPERIMENT ====================
    document.getElementById('nlabRunBtn').addEventListener('click', function() {
        if (!currentExp) return;

        const placed = canvasItems.map(i => i.id);
        const missing = currentExp.requiredItems.filter(r => !placed.includes(r));

        if (missing.length > 0) {
            const missingNames = missing.map(id => {
                const el = currentExp.elements.find(e => e.id === id);
                return el ? el.name : id;
            });
            setStatus('Missing: ' + missingNames.join(', '), '#ef476f');
            addObservation('warning', `Cannot run — missing: <strong>${missingNames.join(', ')}</strong>`);
            return;
        }

        // Animate reaction
        setStatus('Running experiment...', '#ffd166');
        this.disabled = true;
        const btn = this;

        // Flash animation on canvas center
        const flash = document.createElement('div');
        flash.className = 'nlab-reaction-flash';
        const canvasRect = canvas.getBoundingClientRect();
        flash.style.left = (canvasRect.width / 2 - 40) + 'px';
        flash.style.top = (canvasRect.height / 2 - 40) + 'px';
        canvas.appendChild(flash);
        setTimeout(() => flash.remove(), 900);

        setTimeout(() => {
            // Show result
            const resultCard = document.getElementById('nlabResultCard');
            document.getElementById('nlabResultText').innerHTML = currentExp.resultHTML;
            resultCard.classList.add('visible');

            const xpBadge = document.getElementById('nlabResultXp');
            xpBadge.innerHTML = `<i class="fas fa-bolt"></i> +${currentExp.xp} XP Earned!`;
            xpBadge.style.display = 'inline-flex';

            // Mark last step done
            const lastStep = document.getElementById('nlabStep' + (currentExp.steps.length - 1));
            if (lastStep) {
                lastStep.classList.add('done');
                lastStep.querySelector('.nlab-step-num').innerHTML = '<i class="fas fa-check"></i>';
            }

            setStatus('Experiment complete!', '#0ed3a2');
            addObservation('success', `Experiment completed successfully! <strong>+${currentExp.xp} XP</strong>`);

            // Switch to info tab to show result
            switchPanelTab('info');

            btn.disabled = false;
        }, 1200);
    });

    // ==================== RESET ====================
    document.getElementById('nlabResetBtn').addEventListener('click', function() {
        if (!currentExp) return;
        nlabClearCanvas();
        document.getElementById('nlabResultCard').classList.remove('visible');
        document.getElementById('nlabResultXp').style.display = 'none';
        setStatus('Reset — ready for a new attempt', '#0ed3a2');
        addObservation('info', 'Workspace has been reset');

        // Reset steps
        if (currentExp) {
            currentExp.steps.forEach((_, i) => {
                const stepEl = document.getElementById('nlabStep' + i);
                if (stepEl) {
                    stepEl.classList.remove('done');
                    stepEl.querySelector('.nlab-step-num').textContent = i + 1;
                }
            });
        }
    });

    // ==================== BACK BUTTON ====================
    document.getElementById('nlabBackBtn').addEventListener('click', function() {
        viewLab.classList.remove('visible');
        viewSelector.classList.add('visible');
        nlabClearCanvas();
        currentExp = null;
    });

    // ==================== PANEL TABS ====================
    document.querySelectorAll('.nlab-panel-tab').forEach(tab => {
        tab.addEventListener('click', function() {
            switchPanelTab(this.dataset.panel);
        });
    });

    function switchPanelTab(panelName) {
        document.querySelectorAll('.nlab-panel-tab').forEach(t => t.classList.toggle('active', t.dataset.panel === panelName));
        document.querySelectorAll('.nlab-panel-content').forEach(c => c.classList.toggle('active', c.dataset.panel === panelName));
    }

    // ==================== HELPERS ====================
    window.nlabClearCanvas = function() {
        canvasItems = [];
        canvasIdCounter = 0;
        canvas.querySelectorAll('.nlab-dropped-item').forEach(el => el.remove());
        canvas.querySelectorAll('.nlab-reaction-flash').forEach(el => el.remove());
        updateCanvasState();
    };

    window.nlabZoom = function(dir) {
        zoomLevel = Math.max(50, Math.min(150, zoomLevel + dir * 10));
        canvas.style.transform = `scale(${zoomLevel / 100})`;
        canvas.style.transformOrigin = 'top left';
        document.getElementById('nlabZoomLevel').textContent = zoomLevel + '%';
    };

    function setStatus(text, color) {
        statusText.textContent = text;
        statusDot.style.background = color;
    }

    function addObservation(type, html) {
        const log = document.getElementById('nlabObsLog');
        // Remove empty state
        if (log.querySelector('p') && log.querySelector('p').textContent.includes('Observations will appear')) log.innerHTML = '';

        const icons = { info: '🔬', warning: '⚠️', success: '✅', remove: '🗑️' };
        const now = new Date();
        const time = now.getHours().toString().padStart(2,'0') + ':' + now.getMinutes().toString().padStart(2,'0') + ':' + now.getSeconds().toString().padStart(2,'0');

        const obs = document.createElement('div');
        obs.className = 'nlab-observation';
        obs.innerHTML = `
            <div class="nlab-obs-icon">${icons[type] || '📝'}</div>
            <div style="flex:1; min-width:0;">
                <div class="nlab-obs-text">${html}</div>
                <div class="nlab-obs-time">${time}</div>
            </div>
        `;
        log.prepend(obs);
    }

    // ==================== INIT ====================
    renderExpCards('all', 'all');

})();
</script>

</div>