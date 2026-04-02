<!-- Somnus Section -->
<div id="somnus-section" class="content-section" style="display: none;">

<style>
/* ===== SOMNUS STYLES - AI WORLD THEME ===== */

/* Top Bar */
.som-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 14px;
    margin-bottom: 20px;
}
.som-title-group {
    display: flex;
    align-items: center;
    gap: 14px;
}
.som-title-icon {
    width: 48px;
    height: 48px;
    border-radius: 16px;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #fff;
}
.som-title-group h2 {
    font-size: 22px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0;
}
.som-title-group p {
    font-size: 12px;
    color: #8d99ae;
    margin: 2px 0 0;
}
.som-actions {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}
.som-btn {
    padding: 9px 18px;
    border-radius: 12px;
    border: none;
    font-size: 12px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 7px;
    transition: all 0.3s;
}
.som-btn:hover { transform: translateY(-1px); box-shadow: 0 4px 14px rgba(0,0,0,0.1); }
.som-btn-primary { background: linear-gradient(135deg, #3f66e6, #0ed3a2); color: #fff; box-shadow: 0 2px 8px rgba(63, 102, 230, 0.2); }
.som-btn-ghost { background: #fff; color: #1a1a2e; border: 2px solid #e8ecf4; }
.som-btn-ghost:hover { background: #f8faff; border-color: #0ed3a2; }
.som-btn-success { background: linear-gradient(135deg, #0ed3a2, #129695); color: #fff; }
.som-btn-danger { background: linear-gradient(135deg, #ef476f, #e63946); color: #fff; }
.som-btn-sm { padding: 7px 12px; font-size: 11px; }

/* Layout */
.som-layout {
    display: grid;
    grid-template-columns: 1fr 280px;
    gap: 20px;
    height: calc(100vh - 200px);
    min-height: 500px;
}

/* Toolbar */
.som-toolbar {
    background: #fff;
    border-radius: 14px 14px 0 0;
    box-shadow: 0 2px 12px rgba(0,0,0,0.05);
    padding: 10px 16px;
    display: flex;
    align-items: center;
    gap: 6px;
    flex-wrap: wrap;
    border-bottom: 2px solid #eef0f5;
}
.som-toolbar-sep {
    width: 1px;
    height: 28px;
    background: #e8ecf4;
    margin: 0 6px;
}
.som-tool {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    border: 2px solid transparent;
    background: transparent;
    color: #8d99ae;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 14px;
    transition: all 0.2s;
    position: relative;
}
.som-tool:hover { background: #f8faff; color: #3f66e6; border-color: #0ed3a2; }
.som-tool.active { background: linear-gradient(135deg, #3f66e6, #0ed3a2); color: #fff; border-color: transparent; }
.som-tool[title]::after {
    content: attr(title);
    position: absolute;
    bottom: -28px;
    left: 50%;
    transform: translateX(-50%);
    background: #1a1a2e;
    color: #fff;
    font-size: 10px;
    padding: 3px 8px;
    border-radius: 6px;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.15s;
    z-index: 20;
}
.som-tool:hover[title]::after { opacity: 1; }

/* Color Swatches */
.som-color-picker {
    display: flex;
    align-items: center;
    gap: 4px;
}
.som-swatch {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    cursor: pointer;
    border: 2px solid transparent;
    transition: all 0.2s;
}
.som-swatch:hover { transform: scale(1.15); }
.som-swatch.active { border-color: #1a1a2e; transform: scale(1.15); }

/* Font size control */
.som-font-size {
    display: flex;
    align-items: center;
    gap: 4px;
}
.som-font-size select {
    padding: 5px 8px;
    border-radius: 8px;
    border: 2px solid #e8ecf4;
    font-size: 12px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    cursor: pointer;
    transition: all 0.2s;
}
.som-font-size select:focus { border-color: #0ed3a2; }

/* Canvas Area */
.som-canvas-wrap {
    background: #fff;
    border-radius: 0 0 16px 16px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    flex: 1;
    position: relative;
    overflow: hidden;
    border: 2px solid #eef0f5;
    border-top: none;
}
.som-canvas {
    width: 100%;
    height: 100%;
    cursor: crosshair;
    display: block;
}
.som-canvas.mode-select { cursor: default; }
.som-canvas.mode-move { cursor: move; }
.som-canvas.mode-text { cursor: text; }
.som-canvas.mode-pan { cursor: grab; }
.som-canvas.panning { cursor: grabbing; }

/* Text editing overlay */
.som-text-input {
    position: absolute;
    background: #fff;
    border: 2px solid #0ed3a2;
    border-radius: 8px;
    outline: none;
    font-family: 'Poppins', sans-serif;
    color: #1a1a2e;
    resize: none;
    overflow: hidden;
    padding: 8px 12px;
    z-index: 50;
    min-width: 80px;
    min-height: 30px;
    box-shadow: 0 4px 12px rgba(63, 102, 230, 0.15);
}

/* Zoom / Status */
.som-statusbar {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 8px 16px;
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(8px);
    border-top: 1px solid #eef0f5;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 11px;
    color: #8d99ae;
    z-index: 5;
}
.som-zoom-controls {
    display: flex;
    align-items: center;
    gap: 6px;
}
.som-zoom-btn {
    width: 28px;
    height: 28px;
    border-radius: 8px;
    border: 2px solid #e8ecf4;
    background: #fff;
    color: #1a1a2e;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 11px;
    transition: all 0.2s;
}
.som-zoom-btn:hover { background: linear-gradient(135deg, #3f66e6, #0ed3a2); color: #fff; border-color: transparent; }

/* Right Sidebar - Notes list / Properties */
.som-sidebar {
    display: flex;
    flex-direction: column;
    gap: 16px;
    overflow-y: auto;
}
.som-panel {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    overflow: hidden;
    border: 2px solid #eef0f5;
}
.som-panel-header {
    padding: 14px 18px;
    border-bottom: 2px solid #eef0f5;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(135deg, #f8faff, #f0faf5);
}
.som-panel-header h4 {
    font-size: 13px;
    font-weight: 600;
    color: #1a1a2e;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 8px;
}
.som-panel-header h4 i { color: #3f66e6; font-size: 14px; }
.som-panel-body { padding: 14px 18px; }

/* Properties panel */
.som-prop-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 12px;
}
.som-prop-label {
    font-size: 12px;
    color: #8d99ae;
    font-weight: 500;
}
.som-prop-value {
    font-size: 12px;
    font-weight: 600;
    color: #1a1a2e;
}
.som-prop-input {
    padding: 6px 10px;
    border-radius: 8px;
    border: 2px solid #e8ecf4;
    font-size: 12px;
    font-family: 'Poppins', sans-serif;
    width: 80px;
    outline: none;
    transition: all 0.2s;
}
.som-prop-input:focus { border-color: #0ed3a2; }

/* Notes List */
.som-notes-list {
    display: flex;
    flex-direction: column;
    gap: 8px;
    max-height: 300px;
    overflow-y: auto;
}
.som-note-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 12px;
    border-radius: 12px;
    background: linear-gradient(135deg, #f8faff, #fff);
    cursor: pointer;
    transition: all 0.2s;
    border: 2px solid transparent;
}
.som-note-item:hover { background: linear-gradient(135deg, #f0f4ff, #e8faf3); transform: translateX(2px); border-color: #0ed3a2; }
.som-note-item.active { background: linear-gradient(135deg, #e8faf3, #d0f0e8); border-left: 4px solid #0ed3a2; }
.som-note-shape {
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
}
.som-note-info {
    flex: 1;
    min-width: 0;
}
.som-note-title {
    font-size: 12px;
    font-weight: 600;
    color: #1a1a2e;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.som-note-meta {
    font-size: 10px;
    color: #8d99ae;
}
.som-note-delete {
    width: 24px;
    height: 24px;
    border-radius: 8px;
    border: none;
    background: transparent;
    color: #ccc;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    transition: all 0.2s;
}
.som-note-delete:hover { color: #ef476f; background: #fdeef1; }

/* Templates */
.som-templates {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 8px;
}
.som-template {
    padding: 14px 10px;
    border-radius: 12px;
    background: linear-gradient(135deg, #f8faff, #fff);
    text-align: center;
    cursor: pointer;
    transition: all 0.3s;
    border: 2px solid #eef0f5;
}
.som-template:hover {
    background: linear-gradient(135deg, #f0f4ff, #e8faf3);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(63, 102, 230, 0.1);
    border-color: #0ed3a2;
}
.som-template-icon {
    font-size: 24px;
    margin-bottom: 6px;
}
.som-template-name {
    font-size: 11px;
    font-weight: 600;
    color: #1a1a2e;
}

/* Empty state for notes */
.som-empty {
    text-align: center;
    padding: 24px 10px;
    color: #8d99ae;
}
.som-empty i { font-size: 28px; opacity: 0.3; margin-bottom: 8px; color: #3f66e6; }
.som-empty p { font-size: 12px; margin: 0; }

/* Selection handles */
.som-handle {
    position: absolute;
    width: 10px;
    height: 10px;
    background: #fff;
    border: 2px solid #0ed3a2;
    border-radius: 3px;
    z-index: 60;
    cursor: nwse-resize;
}

/* Export Modal */
.som-modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.5);
    backdrop-filter: blur(4px);
    z-index: 9999;
    align-items: center;
    justify-content: center;
}
.som-modal-overlay.open { display: flex; }
.som-modal {
    background: #fff;
    border-radius: 20px;
    padding: 30px;
    max-width: 400px;
    width: 90%;
    box-shadow: 0 20px 60px rgba(0,0,0,0.2);
    border: 2px solid #eef0f5;
}
.som-modal h3 {
    font-size: 18px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 6px;
}
.som-modal p {
    font-size: 13px;
    color: #8d99ae;
    margin: 0 0 20px;
}
.som-modal-options {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 20px;
}
.som-modal-opt {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px 16px;
    border-radius: 12px;
    border: 2px solid #e8ecf4;
    cursor: pointer;
    transition: all 0.2s;
}
.som-modal-opt:hover { border-color: #0ed3a2; background: linear-gradient(135deg, #f8faff, #f0faf5); }
.som-modal-opt i {
    font-size: 20px;
    color: #3f66e6;
    width: 30px;
    text-align: center;
}
.som-modal-opt span { font-size: 13px; font-weight: 600; color: #1a1a2e; }
.som-modal-close {
    width: 100%;
    padding: 12px;
    border-radius: 12px;
    border: 2px solid #e8ecf4;
    background: transparent;
    font-size: 13px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    color: #8d99ae;
    cursor: pointer;
    transition: all 0.2s;
}
.som-modal-close:hover { background: #f8faff; border-color: #0ed3a2; }

/* Responsive */
@media (max-width: 900px) {
    .som-layout {
        grid-template-columns: 1fr;
        height: auto;
    }
    .som-canvas-wrap { min-height: 400px; }
    .som-sidebar { flex-direction: row; overflow-x: auto; }
    .som-panel { min-width: 260px; }
}
</style>

<!-- Top Bar -->
<div class="som-topbar">
    <div class="som-title-group">
        <div class="som-title-icon"><i class="fas fa-moon"></i></div>
        <div>
            <h2>Somnus</h2>
            <p>Shape-based visual notes &mdash; think in shapes, learn better</p>
        </div>
    </div>
    <div class="som-actions">
        <button class="som-btn som-btn-ghost" id="somUndoBtn" title="Undo"><i class="fas fa-undo"></i></button>
        <button class="som-btn som-btn-ghost" id="somRedoBtn" title="Redo"><i class="fas fa-redo"></i></button>
        <button class="som-btn som-btn-ghost" id="somExportBtn"><i class="fas fa-download"></i> Export</button>
        <button class="som-btn som-btn-primary" id="somSaveBtn"><i class="fas fa-save"></i> Save</button>
    </div>
</div>

<!-- Main Layout -->
<div class="som-layout">
    <!-- Left: Canvas Area -->
    <div style="display:flex; flex-direction:column; min-height:0;">
        <!-- Toolbar -->
        <div class="som-toolbar" id="somToolbar">
            <!-- Select / Move -->
            <button class="som-tool active" data-tool="select" title="Select"><i class="fas fa-mouse-pointer"></i></button>
            <button class="som-tool" data-tool="pan" title="Pan"><i class="fas fa-hand-paper"></i></button>

            <div class="som-toolbar-sep"></div>

            <!-- Shapes -->
            <button class="som-tool" data-tool="rect" title="Rectangle"><i class="fas fa-square"></i></button>
            <button class="som-tool" data-tool="circle" title="Circle"><i class="fas fa-circle"></i></button>
            <button class="som-tool" data-tool="triangle" title="Triangle"><i class="fas fa-play" style="transform:rotate(-90deg);"></i></button>
            <button class="som-tool" data-tool="diamond" title="Diamond"><i class="fas fa-square" style="transform:rotate(45deg) scale(0.8);"></i></button>
            <button class="som-tool" data-tool="hexagon" title="Hexagon"><i class="fas fa-hexagon-xmark"></i></button>
            <button class="som-tool" data-tool="star" title="Star"><i class="fas fa-star"></i></button>

            <div class="som-toolbar-sep"></div>

            <!-- Text & Line -->
            <button class="som-tool" data-tool="text" title="Text Note"><i class="fas fa-font"></i></button>
            <button class="som-tool" data-tool="line" title="Connector"><i class="fas fa-long-arrow-alt-right"></i></button>
            <button class="som-tool" data-tool="freehand" title="Freehand"><i class="fas fa-pencil-alt"></i></button>

            <div class="som-toolbar-sep"></div>

            <!-- Colors -->
            <div class="som-color-picker" id="somColorPicker">
                <div class="som-swatch active" data-color="#3f66e6" style="background:#3f66e6;"></div>
                <div class="som-swatch" data-color="#0ed3a2" style="background:#0ed3a2;"></div>
                <div class="som-swatch" data-color="#ef476f" style="background:#ef476f;"></div>
                <div class="som-swatch" data-color="#ffd166" style="background:#ffd166;"></div>
                <div class="som-swatch" data-color="#7209b7" style="background:#7209b7;"></div>
                <div class="som-swatch" data-color="#1a1a2e" style="background:#1a1a2e;"></div>
                <div class="som-swatch" data-color="#f8f9fa" style="background:#f8f9fa; border:1px solid #ddd;"></div>
            </div>

            <div class="som-toolbar-sep"></div>

            <!-- Font size -->
            <div class="som-font-size">
                <select id="somFontSize">
                    <option value="12">12px</option>
                    <option value="14" selected>14px</option>
                    <option value="16">16px</option>
                    <option value="18">18px</option>
                    <option value="22">22px</option>
                    <option value="28">28px</option>
                </select>
            </div>

            <!-- Fill toggle -->
            <button class="som-tool" data-tool="toggle-fill" title="Toggle Fill" id="somFillToggle">
                <i class="fas fa-fill-drip"></i>
            </button>
        </div>

        <!-- Canvas -->
        <div class="som-canvas-wrap" id="somCanvasWrap">
            <canvas class="som-canvas mode-select" id="somCanvas"></canvas>
            <div class="som-statusbar">
                <span id="somStatusText">Select a shape tool and draw on canvas</span>
                <div class="som-zoom-controls">
                    <button class="som-zoom-btn" id="somZoomOut"><i class="fas fa-minus"></i></button>
                    <span id="somZoomLabel">100%</span>
                    <button class="som-zoom-btn" id="somZoomIn"><i class="fas fa-plus"></i></button>
                    <button class="som-zoom-btn" id="somZoomFit" title="Fit"><i class="fas fa-expand"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Sidebar -->
    <div class="som-sidebar">
        <!-- Quick Templates -->
        <div class="som-panel">
            <div class="som-panel-header">
                <h4><i class="fas fa-magic"></i> Quick Templates</h4>
            </div>
            <div class="som-panel-body">
                <div class="som-templates" id="somTemplates">
                    <div class="som-template" data-template="mindmap">
                        <div class="som-template-icon">🧠</div>
                        <div class="som-template-name">Mind Map</div>
                    </div>
                    <div class="som-template" data-template="flowchart">
                        <div class="som-template-icon">🔀</div>
                        <div class="som-template-name">Flowchart</div>
                    </div>
                    <div class="som-template" data-template="compare">
                        <div class="som-template-icon">⚖️</div>
                        <div class="som-template-name">Compare</div>
                    </div>
                    <div class="som-template" data-template="timeline">
                        <div class="som-template-icon">📅</div>
                        <div class="som-template-name">Timeline</div>
                    </div>
                    <div class="som-template" data-template="concept">
                        <div class="som-template-icon">💡</div>
                        <div class="som-template-name">Concept Map</div>
                    </div>
                    <div class="som-template" data-template="blank">
                        <div class="som-template-icon">📄</div>
                        <div class="som-template-name">Blank Canvas</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Properties Panel -->
        <div class="som-panel" id="somPropsPanel" style="display:none;">
            <div class="som-panel-header">
                <h4><i class="fas fa-sliders-h"></i> Properties</h4>
            </div>
            <div class="som-panel-body" id="somPropsBody">
                <!-- Populated dynamically -->
            </div>
        </div>

        <!-- Shape Notes List -->
        <div class="som-panel" style="flex:1; min-height:0;">
            <div class="som-panel-header">
                <h4><i class="fas fa-shapes"></i> Shape Notes</h4>
                <span style="font-size:11px; color:#8d99ae;" id="somNoteCount">0 notes</span>
            </div>
            <div class="som-panel-body" style="padding:10px 12px;">
                <div class="som-notes-list" id="somNotesList">
                    <div class="som-empty">
                        <i class="fas fa-draw-polygon"></i>
                        <p>Draw shapes to create notes.<br>Click a shape to add text inside.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Export Modal -->
<div class="som-modal-overlay" id="somExportModal">
    <div class="som-modal">
        <h3>Export Notes</h3>
        <p>Choose how to save your shape notes</p>
        <div class="som-modal-options">
            <div class="som-modal-opt" id="somExportPng">
                <i class="fas fa-image"></i>
                <span>Export as PNG Image</span>
            </div>
            <div class="som-modal-opt" id="somExportJson">
                <i class="fas fa-file-code"></i>
                <span>Save as Project (.json)</span>
            </div>
            <div class="som-modal-opt" id="somImportJson">
                <i class="fas fa-file-upload"></i>
                <span>Import Project (.json)</span>
            </div>
        </div>
        <button class="som-modal-close" onclick="document.getElementById('somExportModal').classList.remove('open');">Cancel</button>
    </div>
</div>
<input type="file" id="somFileInput" accept=".json" style="display:none;">

<script>
(function() {
    'use strict';

    // ==================== CANVAS SETUP ====================
    const canvasEl = document.getElementById('somCanvas');
    const wrap = document.getElementById('somCanvasWrap');
    const ctx = canvasEl.getContext('2d');

    function resizeCanvas() {
        const r = wrap.getBoundingClientRect();
        canvasEl.width = r.width * devicePixelRatio;
        canvasEl.height = (r.height - 36) * devicePixelRatio; // minus statusbar
        canvasEl.style.width = r.width + 'px';
        canvasEl.style.height = (r.height - 36) + 'px';
        ctx.setTransform(devicePixelRatio * zoom, 0, 0, devicePixelRatio * zoom, panX * devicePixelRatio, panY * devicePixelRatio);
        render();
    }

    // ==================== STATE ====================
    let shapes = [];
    let selectedId = null;
    let tool = 'select';
    let fillColor = '#3f66e6';
    let filled = false;
    let fontSize = 14;
    let zoom = 1;
    let panX = 0, panY = 0;
    let idCounter = 0;
    let undoStack = [];
    let redoStack = [];

    // Drawing state
    let isDrawing = false;
    let drawStart = null;
    let freehandPoints = [];
    let isPanning = false;
    let panStart = null;
    let isDragging = false;
    let dragStart = null;
    let dragOrigPos = null;
    let isResizing = false;
    let resizeHandle = null;
    let resizeOrig = null;

    // Text editing
    let editingTextId = null;
    let textInputEl = null;

    // ==================== HELPERS ====================
    function uid() { return 's' + (++idCounter); }

    function saveState() {
        undoStack.push(JSON.stringify(shapes));
        if (undoStack.length > 50) undoStack.shift();
        redoStack = [];
    }

    function undo() {
        if (undoStack.length === 0) return;
        redoStack.push(JSON.stringify(shapes));
        shapes = JSON.parse(undoStack.pop());
        selectedId = null;
        render();
        updateNotesList();
    }

    function redo() {
        if (redoStack.length === 0) return;
        undoStack.push(JSON.stringify(shapes));
        shapes = JSON.parse(redoStack.pop());
        selectedId = null;
        render();
        updateNotesList();
    }

    function screenToCanvas(sx, sy) {
        return { x: (sx - panX) / zoom, y: (sy - panY) / zoom };
    }

    function getMousePos(e) {
        const r = canvasEl.getBoundingClientRect();
        const sx = e.clientX - r.left;
        const sy = e.clientY - r.top;
        return screenToCanvas(sx, sy);
    }

    // ==================== SHAPE DRAWING ====================
    function drawShape(ctx, s, selected) {
        ctx.save();
        ctx.lineWidth = selected ? 2.5 : 1.5;
        ctx.strokeStyle = s.color || '#3f66e6';

        if (s.filled) {
            ctx.fillStyle = s.color + '22';
        }

        const cx = s.x + s.w / 2;
        const cy = s.y + s.h / 2;

        switch (s.type) {
            case 'rect':
                roundRect(ctx, s.x, s.y, s.w, s.h, 8);
                if (s.filled) ctx.fill();
                ctx.stroke();
                break;

            case 'circle': {
                const rx = Math.abs(s.w) / 2;
                const ry = Math.abs(s.h) / 2;
                ctx.beginPath();
                ctx.ellipse(cx, cy, rx, ry, 0, 0, Math.PI * 2);
                if (s.filled) ctx.fill();
                ctx.stroke();
                break;
            }

            case 'triangle':
                ctx.beginPath();
                ctx.moveTo(cx, s.y);
                ctx.lineTo(s.x + s.w, s.y + s.h);
                ctx.lineTo(s.x, s.y + s.h);
                ctx.closePath();
                if (s.filled) ctx.fill();
                ctx.stroke();
                break;

            case 'diamond':
                ctx.beginPath();
                ctx.moveTo(cx, s.y);
                ctx.lineTo(s.x + s.w, cy);
                ctx.lineTo(cx, s.y + s.h);
                ctx.lineTo(s.x, cy);
                ctx.closePath();
                if (s.filled) ctx.fill();
                ctx.stroke();
                break;

            case 'hexagon':
                drawPolygon(ctx, cx, cy, Math.min(Math.abs(s.w), Math.abs(s.h)) / 2, 6);
                if (s.filled) ctx.fill();
                ctx.stroke();
                break;

            case 'star':
                drawStar(ctx, cx, cy, Math.min(Math.abs(s.w), Math.abs(s.h)) / 2);
                if (s.filled) ctx.fill();
                ctx.stroke();
                break;

            case 'line':
                ctx.beginPath();
                ctx.moveTo(s.x, s.y);
                ctx.lineTo(s.x + s.w, s.y + s.h);
                ctx.stroke();
                // Arrow head
                const angle = Math.atan2(s.h, s.w);
                const hLen = 12;
                const ex = s.x + s.w;
                const ey = s.y + s.h;
                ctx.beginPath();
                ctx.moveTo(ex, ey);
                ctx.lineTo(ex - hLen * Math.cos(angle - 0.4), ey - hLen * Math.sin(angle - 0.4));
                ctx.moveTo(ex, ey);
                ctx.lineTo(ex - hLen * Math.cos(angle + 0.4), ey - hLen * Math.sin(angle + 0.4));
                ctx.stroke();
                break;

            case 'freehand':
                if (s.points && s.points.length > 1) {
                    ctx.beginPath();
                    ctx.moveTo(s.points[0].x, s.points[0].y);
                    for (let i = 1; i < s.points.length; i++) {
                        ctx.lineTo(s.points[i].x, s.points[i].y);
                    }
                    ctx.stroke();
                }
                break;

            case 'text':
                // Text-only node (no outline, just for standalone text)
                break;
        }

        // Draw text inside shape
        if (s.text && s.type !== 'line' && s.type !== 'freehand') {
            ctx.fillStyle = s.textColor || '#1a1a2e';
            ctx.font = `${s.fontSize || 14}px Poppins, sans-serif`;
            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';
            wrapText(ctx, s.text, cx, cy, Math.abs(s.w) - 20, (s.fontSize || 14) * 1.3);
        }

        // Selection highlight
        if (selected) {
            ctx.setLineDash([5, 4]);
            ctx.strokeStyle = '#0ed3a2';
            ctx.lineWidth = 1.5;
            if (s.type === 'freehand' && s.points) {
                // bounding box
                let mnx = Infinity, mny = Infinity, mxx = -Infinity, mxy = -Infinity;
                s.points.forEach(p => { mnx = Math.min(mnx, p.x); mny = Math.min(mny, p.y); mxx = Math.max(mxx, p.x); mxy = Math.max(mxy, p.y); });
                ctx.strokeRect(mnx - 4, mny - 4, mxx - mnx + 8, mxy - mny + 8);
            } else {
                ctx.strokeRect(s.x - 4, s.y - 4, s.w + 8, s.h + 8);
            }
            ctx.setLineDash([]);
        }

        ctx.restore();
    }

    function roundRect(ctx, x, y, w, h, r) {
        ctx.beginPath();
        ctx.moveTo(x + r, y);
        ctx.lineTo(x + w - r, y);
        ctx.quadraticCurveTo(x + w, y, x + w, y + r);
        ctx.lineTo(x + w, y + h - r);
        ctx.quadraticCurveTo(x + w, y + h, x + w - r, y + h);
        ctx.lineTo(x + r, y + h);
        ctx.quadraticCurveTo(x, y + h, x, y + h - r);
        ctx.lineTo(x, y + r);
        ctx.quadraticCurveTo(x, y, x + r, y);
        ctx.closePath();
    }

    function drawPolygon(ctx, cx, cy, r, sides) {
        ctx.beginPath();
        for (let i = 0; i < sides; i++) {
            const a = (Math.PI * 2 / sides) * i - Math.PI / 2;
            const px = cx + r * Math.cos(a);
            const py = cy + r * Math.sin(a);
            if (i === 0) ctx.moveTo(px, py);
            else ctx.lineTo(px, py);
        }
        ctx.closePath();
    }

    function drawStar(ctx, cx, cy, r) {
        const spikes = 5;
        const outerR = r;
        const innerR = r * 0.45;
        ctx.beginPath();
        for (let i = 0; i < spikes * 2; i++) {
            const rad = (Math.PI / spikes) * i - Math.PI / 2;
            const cr = i % 2 === 0 ? outerR : innerR;
            const px = cx + cr * Math.cos(rad);
            const py = cy + cr * Math.sin(rad);
            if (i === 0) ctx.moveTo(px, py);
            else ctx.lineTo(px, py);
        }
        ctx.closePath();
    }

    function wrapText(ctx, text, x, y, maxWidth, lineHeight) {
        const lines = text.split('\n');
        const allLines = [];
        lines.forEach(line => {
            const words = line.split(' ');
            let cur = '';
            words.forEach(word => {
                const test = cur ? cur + ' ' + word : word;
                if (ctx.measureText(test).width > maxWidth && cur) {
                    allLines.push(cur);
                    cur = word;
                } else {
                    cur = test;
                }
            });
            allLines.push(cur);
        });
        const startY = y - ((allLines.length - 1) * lineHeight) / 2;
        allLines.forEach((line, i) => {
            ctx.fillText(line, x, startY + i * lineHeight);
        });
    }

    // ==================== RENDER ====================
    function render() {
        ctx.save();
        ctx.setTransform(1, 0, 0, 1, 0, 0);
        ctx.clearRect(0, 0, canvasEl.width, canvasEl.height);

        // Grid dots
        ctx.fillStyle = '#e0e4ea';
        const step = 28 * zoom;
        const offX = (panX * devicePixelRatio) % step;
        const offY = (panY * devicePixelRatio) % step;
        for (let gx = offX; gx < canvasEl.width; gx += step) {
            for (let gy = offY; gy < canvasEl.height; gy += step) {
                ctx.beginPath();
                ctx.arc(gx, gy, 1 * devicePixelRatio, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        ctx.setTransform(devicePixelRatio * zoom, 0, 0, devicePixelRatio * zoom, panX * devicePixelRatio, panY * devicePixelRatio);
        ctx.restore();

        ctx.save();
        ctx.setTransform(devicePixelRatio * zoom, 0, 0, devicePixelRatio * zoom, panX * devicePixelRatio, panY * devicePixelRatio);
        shapes.forEach(s => {
            drawShape(ctx, s, s.id === selectedId);
        });

        // Drawing preview
        if (isDrawing && drawStart && !['select', 'pan', 'freehand', 'text'].includes(tool)) {
            ctx.save();
            ctx.globalAlpha = 0.5;
            drawShape(ctx, {
                type: tool,
                x: Math.min(drawStart.x, drawStart.cx),
                y: Math.min(drawStart.y, drawStart.cy),
                w: Math.abs(drawStart.cx - drawStart.x),
                h: Math.abs(drawStart.cy - drawStart.y),
                color: fillColor,
                filled: filled
            }, false);
            ctx.restore();
        }

        // Freehand preview
        if (isDrawing && tool === 'freehand' && freehandPoints.length > 1) {
            ctx.strokeStyle = fillColor;
            ctx.lineWidth = 1.5;
            ctx.beginPath();
            ctx.moveTo(freehandPoints[0].x, freehandPoints[0].y);
            freehandPoints.forEach(p => ctx.lineTo(p.x, p.y));
            ctx.stroke();
        }

        ctx.restore();
    }

    // ==================== HIT TESTING ====================
    function hitTest(pos) {
        // Reverse order so topmost shape is hit first
        for (let i = shapes.length - 1; i >= 0; i--) {
            const s = shapes[i];
            if (s.type === 'freehand' && s.points) {
                let mnx = Infinity, mny = Infinity, mxx = -Infinity, mxy = -Infinity;
                s.points.forEach(p => { mnx = Math.min(mnx, p.x); mny = Math.min(mny, p.y); mxx = Math.max(mxx, p.x); mxy = Math.max(mxy, p.y); });
                if (pos.x >= mnx - 5 && pos.x <= mxx + 5 && pos.y >= mny - 5 && pos.y <= mxy + 5) return s;
            } else {
                const x1 = Math.min(s.x, s.x + s.w);
                const y1 = Math.min(s.y, s.y + s.h);
                const x2 = Math.max(s.x, s.x + s.w);
                const y2 = Math.max(s.y, s.y + s.h);
                if (pos.x >= x1 - 5 && pos.x <= x2 + 5 && pos.y >= y1 - 5 && pos.y <= y2 + 5) return s;
            }
        }
        return null;
    }

    function hitResizeHandle(pos) {
        if (!selectedId) return null;
        const s = shapes.find(sh => sh.id === selectedId);
        if (!s || s.type === 'freehand') return null;
        const handles = [
            { name: 'br', x: s.x + s.w + 4, y: s.y + s.h + 4 }
        ];
        for (const h of handles) {
            if (Math.abs(pos.x - h.x) < 8 && Math.abs(pos.y - h.y) < 8) return h;
        }
        return null;
    }

    // ==================== MOUSE EVENTS ====================
    canvasEl.addEventListener('mousedown', function(e) {
        const pos = getMousePos(e);

        // Pan
        if (tool === 'pan') {
            isPanning = true;
            panStart = { x: e.clientX - panX, y: e.clientY - panY };
            canvasEl.classList.add('panning');
            return;
        }

        // Middle click pan
        if (e.button === 1) {
            isPanning = true;
            panStart = { x: e.clientX - panX, y: e.clientY - panY };
            canvasEl.classList.add('panning');
            e.preventDefault();
            return;
        }

        // Select mode
        if (tool === 'select') {
            const rh = hitResizeHandle(pos);
            if (rh) {
                isResizing = true;
                resizeHandle = rh;
                const s = shapes.find(sh => sh.id === selectedId);
                resizeOrig = { w: s.w, h: s.h, mx: pos.x, my: pos.y };
                saveState();
                return;
            }

            const hit = hitTest(pos);
            if (hit) {
                selectedId = hit.id;
                isDragging = true;
                dragStart = { x: pos.x, y: pos.y };
                dragOrigPos = { x: hit.x, y: hit.y };
                saveState();
            } else {
                selectedId = null;
            }
            render();
            updatePropsPanel();
            updateNotesList();
            return;
        }

        // Text tool
        if (tool === 'text') {
            const hit = hitTest(pos);
            if (hit) {
                openTextEdit(hit);
            } else {
                // Create standalone text
                saveState();
                const ns = {
                    id: uid(), type: 'rect',
                    x: pos.x - 60, y: pos.y - 25,
                    w: 120, h: 50,
                    color: fillColor, filled: false,
                    text: '', fontSize: fontSize, textColor: '#1a1a2e'
                };
                shapes.push(ns);
                selectedId = ns.id;
                render();
                updateNotesList();
                openTextEdit(ns);
            }
            return;
        }

        // Drawing shapes / lines / freehand
        isDrawing = true;
        drawStart = { x: pos.x, y: pos.y, cx: pos.x, cy: pos.y };

        if (tool === 'freehand') {
            freehandPoints = [{ x: pos.x, y: pos.y }];
        }
    });

    canvasEl.addEventListener('mousemove', function(e) {
        const pos = getMousePos(e);

        if (isPanning && panStart) {
            panX = e.clientX - panStart.x;
            panY = e.clientY - panStart.y;
            ctx.setTransform(devicePixelRatio * zoom, 0, 0, devicePixelRatio * zoom, panX * devicePixelRatio, panY * devicePixelRatio);
            render();
            return;
        }

        if (isResizing && resizeOrig && selectedId) {
            const s = shapes.find(sh => sh.id === selectedId);
            if (s) {
                const dx = pos.x - resizeOrig.mx;
                const dy = pos.y - resizeOrig.my;
                s.w = Math.max(30, resizeOrig.w + dx);
                s.h = Math.max(30, resizeOrig.h + dy);
                render();
            }
            return;
        }

        if (isDragging && selectedId && dragStart) {
            const s = shapes.find(sh => sh.id === selectedId);
            if (s) {
                const dx = pos.x - dragStart.x;
                const dy = pos.y - dragStart.y;
                s.x = dragOrigPos.x + dx;
                s.y = dragOrigPos.y + dy;
                render();
            }
            return;
        }

        if (isDrawing && drawStart) {
            drawStart.cx = pos.x;
            drawStart.cy = pos.y;
            if (tool === 'freehand') {
                freehandPoints.push({ x: pos.x, y: pos.y });
            }
            render();
        }

        // Cursor hint
        if (tool === 'select') {
            const rh = hitResizeHandle(pos);
            if (rh) { canvasEl.style.cursor = 'nwse-resize'; return; }
            const hit = hitTest(pos);
            canvasEl.style.cursor = hit ? 'move' : 'default';
        }
    });

    canvasEl.addEventListener('mouseup', function(e) {
        if (isPanning) {
            isPanning = false;
            canvasEl.classList.remove('panning');
            panStart = null;
            return;
        }

        if (isResizing) {
            isResizing = false;
            resizeHandle = null;
            resizeOrig = null;
            updateNotesList();
            return;
        }

        if (isDragging) {
            isDragging = false;
            dragStart = null;
            dragOrigPos = null;
            return;
        }

        if (isDrawing && drawStart) {
            isDrawing = false;
            const ds = drawStart;
            drawStart = null;

            if (tool === 'freehand') {
                if (freehandPoints.length > 2) {
                    saveState();
                    shapes.push({
                        id: uid(), type: 'freehand',
                        x: 0, y: 0, w: 0, h: 0,
                        points: [...freehandPoints],
                        color: fillColor, filled: false,
                        text: '', fontSize: fontSize, textColor: '#1a1a2e'
                    });
                }
                freehandPoints = [];
                render();
                updateNotesList();
                return;
            }

            const w = Math.abs(ds.cx - ds.x);
            const h = Math.abs(ds.cy - ds.y);
            if (w < 10 && h < 10) { render(); return; } // too small

            saveState();
            const ns = {
                id: uid(), type: tool,
                x: Math.min(ds.x, ds.cx),
                y: Math.min(ds.y, ds.cy),
                w: w, h: h,
                color: fillColor, filled: filled,
                text: '', fontSize: fontSize, textColor: '#1a1a2e'
            };
            shapes.push(ns);
            selectedId = ns.id;
            render();
            updateNotesList();
            updatePropsPanel();
            setStatus(`Created ${tool} — double-click to add text`);
        }
    });

    // Double click to edit text
    canvasEl.addEventListener('dblclick', function(e) {
        const pos = getMousePos(e);
        const hit = hitTest(pos);
        if (hit && hit.type !== 'line' && hit.type !== 'freehand') {
            openTextEdit(hit);
        }
    });

    // Mouse wheel zoom
    canvasEl.addEventListener('wheel', function(e) {
        e.preventDefault();
        const delta = e.deltaY > 0 ? -0.08 : 0.08;
        const newZoom = Math.max(0.3, Math.min(3, zoom + delta));

        // Zoom towards mouse position
        const r = canvasEl.getBoundingClientRect();
        const mx = e.clientX - r.left;
        const my = e.clientY - r.top;
        panX = mx - (mx - panX) * (newZoom / zoom);
        panY = my - (my - panY) * (newZoom / zoom);
        zoom = newZoom;

        document.getElementById('somZoomLabel').textContent = Math.round(zoom * 100) + '%';
        render();
    }, { passive: false });

    // ==================== TEXT EDITING ====================
    function openTextEdit(shape) {
        closeTextEdit();
        editingTextId = shape.id;
        selectedId = shape.id;

        const r = canvasEl.getBoundingClientRect();
        const sx = shape.x * zoom + panX;
        const sy = shape.y * zoom + panY;
        const sw = shape.w * zoom;
        const sh = shape.h * zoom;

        textInputEl = document.createElement('textarea');
        textInputEl.className = 'som-text-input';
        textInputEl.style.left = (sx + 8) + 'px';
        textInputEl.style.top = (sy + 8) + 'px';
        textInputEl.style.width = Math.max(80, sw - 16) + 'px';
        textInputEl.style.height = Math.max(30, sh - 16) + 'px';
        textInputEl.style.fontSize = (shape.fontSize || 14) * zoom + 'px';
        textInputEl.value = shape.text || '';
        textInputEl.placeholder = 'Type your note...';

        wrap.appendChild(textInputEl);
        textInputEl.focus();

        textInputEl.addEventListener('blur', closeTextEdit);
        textInputEl.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeTextEdit();
            }
        });
    }

    function closeTextEdit() {
        if (textInputEl && editingTextId) {
            const s = shapes.find(sh => sh.id === editingTextId);
            if (s) {
                saveState();
                s.text = textInputEl.value;
            }
            textInputEl.remove();
            textInputEl = null;
            editingTextId = null;
            render();
            updateNotesList();
        }
    }

    // ==================== KEYBOARD SHORTCUTS ====================
    document.addEventListener('keydown', function(e) {
        // Only when Somnus is visible
        const section = document.getElementById('somnus-section');
        if (!section || section.style.display === 'none') return;
        // Don't intercept when typing in an input
        if (e.target.tagName === 'TEXTAREA' || e.target.tagName === 'INPUT') return;

        if ((e.ctrlKey || e.metaKey) && e.key === 'z') { e.preventDefault(); undo(); }
        if ((e.ctrlKey || e.metaKey) && e.key === 'y') { e.preventDefault(); redo(); }
        if (e.key === 'Delete' || e.key === 'Backspace') {
            if (selectedId) {
                saveState();
                shapes = shapes.filter(s => s.id !== selectedId);
                selectedId = null;
                render();
                updateNotesList();
                updatePropsPanel();
            }
        }
        if (e.key === 'Escape') {
            selectedId = null;
            setTool('select');
            render();
        }
    });

    // ==================== TOOL SELECTION ====================
    function setTool(t) {
        if (t === 'toggle-fill') {
            filled = !filled;
            document.getElementById('somFillToggle').classList.toggle('active', filled);
            setStatus(filled ? 'Fill enabled' : 'Fill disabled (outline only)');
            return;
        }
        tool = t;
        document.querySelectorAll('#somToolbar .som-tool[data-tool]').forEach(btn => {
            if (btn.dataset.tool === 'toggle-fill') return;
            btn.classList.toggle('active', btn.dataset.tool === t);
        });

        // Update cursor
        canvasEl.className = 'som-canvas';
        if (t === 'select') canvasEl.classList.add('mode-select');
        else if (t === 'pan') canvasEl.classList.add('mode-pan');
        else if (t === 'text') canvasEl.classList.add('mode-text');
        else canvasEl.style.cursor = 'crosshair';

        const labels = {
            select: 'Click to select, drag to move shapes',
            pan: 'Click and drag to pan the canvas',
            rect: 'Click and drag to draw a rectangle',
            circle: 'Click and drag to draw a circle',
            triangle: 'Click and drag to draw a triangle',
            diamond: 'Click and drag to draw a diamond',
            hexagon: 'Click and drag to draw a hexagon',
            star: 'Click and drag to draw a star',
            text: 'Click to add text, or click a shape to type inside',
            line: 'Click and drag to draw an arrow connector',
            freehand: 'Click and drag to draw freehand'
        };
        setStatus(labels[t] || '');
    }

    document.getElementById('somToolbar').addEventListener('click', function(e) {
        const btn = e.target.closest('.som-tool');
        if (!btn || !btn.dataset.tool) return;
        setTool(btn.dataset.tool);
    });

    // ==================== COLOR PICKER ====================
    document.getElementById('somColorPicker').addEventListener('click', function(e) {
        const sw = e.target.closest('.som-swatch');
        if (!sw) return;
        fillColor = sw.dataset.color;
        this.querySelectorAll('.som-swatch').forEach(s => s.classList.remove('active'));
        sw.classList.add('active');

        // Apply to selected shape
        if (selectedId) {
            const s = shapes.find(sh => sh.id === selectedId);
            if (s) { saveState(); s.color = fillColor; render(); }
        }
    });

    // Font size
    document.getElementById('somFontSize').addEventListener('change', function() {
        fontSize = parseInt(this.value);
        if (selectedId) {
            const s = shapes.find(sh => sh.id === selectedId);
            if (s) { saveState(); s.fontSize = fontSize; render(); }
        }
    });

    // ==================== ZOOM CONTROLS ====================
    document.getElementById('somZoomIn').addEventListener('click', function() {
        zoom = Math.min(3, zoom + 0.15);
        document.getElementById('somZoomLabel').textContent = Math.round(zoom * 100) + '%';
        render();
    });
    document.getElementById('somZoomOut').addEventListener('click', function() {
        zoom = Math.max(0.3, zoom - 0.15);
        document.getElementById('somZoomLabel').textContent = Math.round(zoom * 100) + '%';
        render();
    });
    document.getElementById('somZoomFit').addEventListener('click', function() {
        zoom = 1; panX = 0; panY = 0;
        document.getElementById('somZoomLabel').textContent = '100%';
        render();
    });

    // ==================== NOTES LIST ====================
    function updateNotesList() {
        const list = document.getElementById('somNotesList');
        const noteShapes = shapes.filter(s => s.type !== 'line' && s.type !== 'freehand');
        document.getElementById('somNoteCount').textContent = noteShapes.length + ' note' + (noteShapes.length !== 1 ? 's' : '');

        if (noteShapes.length === 0) {
            list.innerHTML = `<div class="som-empty"><i class="fas fa-draw-polygon"></i><p>Draw shapes to create notes.<br>Click a shape to add text inside.</p></div>`;
            return;
        }

        const shapeIcons = {
            rect: '⬜', circle: '⚪', triangle: '🔺', diamond: '🔷',
            hexagon: '⬡', star: '⭐', text: '📝'
        };

        list.innerHTML = noteShapes.map(s => `
            <div class="som-note-item ${s.id === selectedId ? 'active' : ''}" data-sid="${s.id}">
                <div class="som-note-shape">${shapeIcons[s.type] || '📝'}</div>
                <div class="som-note-info">
                    <div class="som-note-title">${s.text || '(empty ' + s.type + ')'}</div>
                    <div class="som-note-meta">${s.type} &bull; ${Math.round(s.w)}×${Math.round(s.h)}</div>
                </div>
                <button class="som-note-delete" data-sid="${s.id}" title="Delete"><i class="fas fa-trash-alt"></i></button>
            </div>
        `).join('');

        // Click to select
        list.querySelectorAll('.som-note-item').forEach(item => {
            item.addEventListener('click', function(e) {
                if (e.target.closest('.som-note-delete')) return;
                selectedId = this.dataset.sid;
                render();
                updateNotesList();
                updatePropsPanel();
                // Pan to shape
                const s = shapes.find(sh => sh.id === selectedId);
                if (s) {
                    const r = canvasEl.getBoundingClientRect();
                    panX = r.width / 2 - (s.x + s.w / 2) * zoom;
                    panY = r.height / 2 - (s.y + s.h / 2) * zoom;
                    render();
                }
            });
        });

        list.querySelectorAll('.som-note-delete').forEach(btn => {
            btn.addEventListener('click', function() {
                saveState();
                const sid = this.dataset.sid;
                shapes = shapes.filter(s => s.id !== sid);
                if (selectedId === sid) selectedId = null;
                render();
                updateNotesList();
                updatePropsPanel();
            });
        });
    }

    // ==================== PROPERTIES PANEL ====================
    function updatePropsPanel() {
        const panel = document.getElementById('somPropsPanel');
        const body = document.getElementById('somPropsBody');

        if (!selectedId) {
            panel.style.display = 'none';
            return;
        }

        const s = shapes.find(sh => sh.id === selectedId);
        if (!s) { panel.style.display = 'none'; return; }

        panel.style.display = '';
        body.innerHTML = `
            <div class="som-prop-row">
                <span class="som-prop-label">Type</span>
                <span class="som-prop-value" style="text-transform:capitalize;">${s.type}</span>
            </div>
            <div class="som-prop-row">
                <span class="som-prop-label">Position</span>
                <span class="som-prop-value">${Math.round(s.x)}, ${Math.round(s.y)}</span>
            </div>
            <div class="som-prop-row">
                <span class="som-prop-label">Size</span>
                <span class="som-prop-value">${Math.round(s.w)} × ${Math.round(s.h)}</span>
            </div>
            <div class="som-prop-row">
                <span class="som-prop-label">Color</span>
                <div style="display:flex; align-items:center; gap:6px;">
                    <div style="width:18px; height:18px; border-radius:4px; background:${s.color}; border:1px solid #ddd;"></div>
                    <span class="som-prop-value">${s.color}</span>
                </div>
            </div>
            <div class="som-prop-row">
                <span class="som-prop-label">Filled</span>
                <span class="som-prop-value">${s.filled ? 'Yes' : 'No'}</span>
            </div>
            ${s.text ? `<div class="som-prop-row"><span class="som-prop-label">Text</span><span class="som-prop-value" style="max-width:120px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">${s.text}</span></div>` : ''}
            <div style="margin-top:8px;">
                <button class="som-btn som-btn-sm som-btn-ghost" onclick="somDuplicateSelected()"><i class="fas fa-copy"></i> Duplicate</button>
                <button class="som-btn som-btn-sm som-btn-danger" style="margin-left:4px;" onclick="somDeleteSelected()"><i class="fas fa-trash-alt"></i> Delete</button>
            </div>
        `;
    }

    window.somDuplicateSelected = function() {
        if (!selectedId) return;
        const s = shapes.find(sh => sh.id === selectedId);
        if (!s) return;
        saveState();
        const clone = { ...s, id: uid(), x: s.x + 20, y: s.y + 20 };
        if (s.points) clone.points = s.points.map(p => ({ x: p.x + 20, y: p.y + 20 }));
        shapes.push(clone);
        selectedId = clone.id;
        render();
        updateNotesList();
        updatePropsPanel();
    };

    window.somDeleteSelected = function() {
        if (!selectedId) return;
        saveState();
        shapes = shapes.filter(s => s.id !== selectedId);
        selectedId = null;
        render();
        updateNotesList();
        updatePropsPanel();
    };

    // ==================== TEMPLATES ====================
    document.getElementById('somTemplates').addEventListener('click', function(e) {
        const t = e.target.closest('.som-template');
        if (!t) return;
        const tpl = t.dataset.template;
        saveState();
        shapes = [];
        selectedId = null;
        zoom = 1; panX = 0; panY = 0;

        const templates = {
            mindmap: () => {
                const c = '#7209b7', b = '#3f66e6', g = '#0ed3a2', r = '#ef476f', y = '#ffd166';
                shapes.push({ id: uid(), type: 'circle', x: 250, y: 200, w: 160, h: 100, color: c, filled: true, text: 'Main Topic', fontSize: 18, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'line', x: 330, y: 200, w: -100, h: -100, color: '#8d99ae', filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'rect', x: 120, y: 60, w: 130, h: 60, color: b, filled: true, text: 'Idea 1', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'line', x: 410, y: 200, w: 100, h: -80, color: '#8d99ae', filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'rect', x: 430, y: 70, w: 130, h: 60, color: g, filled: true, text: 'Idea 2', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'line', x: 330, y: 300, w: -110, h: 80, color: '#8d99ae', filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'rect', x: 110, y: 340, w: 130, h: 60, color: r, filled: true, text: 'Idea 3', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'line', x: 410, y: 300, w: 100, h: 80, color: '#8d99ae', filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'rect', x: 430, y: 340, w: 130, h: 60, color: y, filled: true, text: 'Idea 4', fontSize: 14, textColor: '#1a1a2e' });
            },
            flowchart: () => {
                const b = '#3f66e6', g = '#0ed3a2', p = '#7209b7', r = '#ef476f';
                shapes.push({ id: uid(), type: 'rect', x: 230, y: 30, w: 180, h: 60, color: b, filled: true, text: 'Start', fontSize: 16, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'line', x: 320, y: 90, w: 0, h: 40, color: '#8d99ae', filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'rect', x: 230, y: 130, w: 180, h: 60, color: p, filled: true, text: 'Process Step 1', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'line', x: 320, y: 190, w: 0, h: 40, color: '#8d99ae', filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'diamond', x: 250, y: 230, w: 150, h: 100, color: r, filled: true, text: 'Decision?', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'line', x: 325, y: 330, w: 0, h: 40, color: '#8d99ae', filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'rect', x: 230, y: 370, w: 180, h: 60, color: g, filled: true, text: 'End', fontSize: 16, textColor: '#1a1a2e' });
            },
            compare: () => {
                const b = '#3f66e6', r = '#ef476f';
                shapes.push({ id: uid(), type: 'rect', x: 60, y: 40, w: 260, h: 360, color: b, filled: true, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'rect', x: 100, y: 60, w: 180, h: 50, color: b, filled: false, text: 'Topic A', fontSize: 18, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'circle', x: 110, y: 130, w: 160, h: 40, color: b, filled: false, text: 'Point 1', fontSize: 13, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'circle', x: 110, y: 190, w: 160, h: 40, color: b, filled: false, text: 'Point 2', fontSize: 13, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'circle', x: 110, y: 250, w: 160, h: 40, color: b, filled: false, text: 'Point 3', fontSize: 13, textColor: '#1a1a2e' });

                shapes.push({ id: uid(), type: 'rect', x: 370, y: 40, w: 260, h: 360, color: r, filled: true, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'rect', x: 410, y: 60, w: 180, h: 50, color: r, filled: false, text: 'Topic B', fontSize: 18, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'circle', x: 420, y: 130, w: 160, h: 40, color: r, filled: false, text: 'Point 1', fontSize: 13, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'circle', x: 420, y: 190, w: 160, h: 40, color: r, filled: false, text: 'Point 2', fontSize: 13, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'circle', x: 420, y: 250, w: 160, h: 40, color: r, filled: false, text: 'Point 3', fontSize: 13, textColor: '#1a1a2e' });
            },
            timeline: () => {
                const colors = ['#3f66e6', '#7209b7', '#0ed3a2', '#ef476f', '#ffd166'];
                // Horizontal line
                shapes.push({ id: uid(), type: 'line', x: 40, y: 200, w: 600, h: 0, color: '#8d99ae', filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                for (let i = 0; i < 5; i++) {
                    const x = 60 + i * 135;
                    shapes.push({ id: uid(), type: 'circle', x: x, y: 185, w: 30, h: 30, color: colors[i], filled: true, text: '', fontSize: 12, textColor: '#1a1a2e' });
                    const yOff = i % 2 === 0 ? 100 : 230;
                    shapes.push({ id: uid(), type: 'rect', x: x - 20, y: yOff, w: 110, h: 55, color: colors[i], filled: true, text: 'Event ' + (i + 1), fontSize: 13, textColor: '#1a1a2e' });
                    shapes.push({ id: uid(), type: 'line', x: x + 15, y: i % 2 === 0 ? 155 : 215, w: 0, h: i % 2 === 0 ? 30 : -15, color: colors[i], filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                }
            },
            concept: () => {
                const c = '#7209b7', b = '#3f66e6', g = '#0ed3a2';
                shapes.push({ id: uid(), type: 'hexagon', x: 220, y: 20, w: 200, h: 180, color: c, filled: true, text: 'Central\nConcept', fontSize: 18, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'line', x: 220, y: 110, w: -100, h: 60, color: '#8d99ae', filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'circle', x: 30, y: 170, w: 130, h: 80, color: b, filled: true, text: 'Sub-topic A', fontSize: 13, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'line', x: 420, y: 110, w: 80, h: 60, color: '#8d99ae', filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'circle', x: 430, y: 170, w: 130, h: 80, color: g, filled: true, text: 'Sub-topic B', fontSize: 13, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'line', x: 320, y: 200, w: 0, h: 90, color: '#8d99ae', filled: false, text: '', fontSize: 14, textColor: '#1a1a2e' });
                shapes.push({ id: uid(), type: 'star', x: 250, y: 290, w: 140, h: 130, color: '#ffd166', filled: true, text: 'Key Idea', fontSize: 14, textColor: '#1a1a2e' });
            },
            blank: () => { /* empty canvas */ }
        };

        if (templates[tpl]) templates[tpl]();
        render();
        updateNotesList();
        setStatus(`Loaded "${t.querySelector('.som-template-name').textContent}" template`);
    });

    // ==================== SAVE / EXPORT ====================
    document.getElementById('somSaveBtn').addEventListener('click', function() {
        const data = { shapes, zoom, panX, panY, version: 1 };
        localStorage.setItem('somnus_autosave', JSON.stringify(data));
        setStatus('Saved to browser storage');
        this.innerHTML = '<i class="fas fa-check"></i> Saved!';
        setTimeout(() => { this.innerHTML = '<i class="fas fa-save"></i> Save'; }, 1500);
    });

    document.getElementById('somExportBtn').addEventListener('click', function() {
        document.getElementById('somExportModal').classList.add('open');
    });

    document.getElementById('somExportPng').addEventListener('click', function() {
        // Render to offscreen canvas at 2x
        const tempCanvas = document.createElement('canvas');
        const padding = 40;
        let minX = Infinity, minY = Infinity, maxX = -Infinity, maxY = -Infinity;
        shapes.forEach(s => {
            if (s.type === 'freehand' && s.points) {
                s.points.forEach(p => { minX = Math.min(minX, p.x); minY = Math.min(minY, p.y); maxX = Math.max(maxX, p.x); maxY = Math.max(maxY, p.y); });
            } else {
                minX = Math.min(minX, s.x);
                minY = Math.min(minY, s.y);
                maxX = Math.max(maxX, s.x + s.w);
                maxY = Math.max(maxY, s.y + s.h);
            }
        });
        if (shapes.length === 0) { minX = 0; minY = 0; maxX = 600; maxY = 400; }
        const w = maxX - minX + padding * 2;
        const h = maxY - minY + padding * 2;
        tempCanvas.width = w * 2;
        tempCanvas.height = h * 2;
        const tc = tempCanvas.getContext('2d');
        tc.scale(2, 2);
        tc.fillStyle = '#fff';
        tc.fillRect(0, 0, w, h);
        tc.translate(-minX + padding, -minY + padding);
        shapes.forEach(s => drawShape(tc, s, false));

        const link = document.createElement('a');
        link.download = 'somnus-notes.png';
        link.href = tempCanvas.toDataURL('image/png');
        link.click();
        document.getElementById('somExportModal').classList.remove('open');
        setStatus('Exported as PNG');
    });

    document.getElementById('somExportJson').addEventListener('click', function() {
        const data = JSON.stringify({ shapes, version: 1 }, null, 2);
        const blob = new Blob([data], { type: 'application/json' });
        const link = document.createElement('a');
        link.download = 'somnus-notes.json';
        link.href = URL.createObjectURL(blob);
        link.click();
        document.getElementById('somExportModal').classList.remove('open');
        setStatus('Exported as JSON project');
    });

    document.getElementById('somImportJson').addEventListener('click', function() {
        document.getElementById('somFileInput').click();
        document.getElementById('somExportModal').classList.remove('open');
    });

    document.getElementById('somFileInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = function(ev) {
            try {
                const data = JSON.parse(ev.target.result);
                if (data.shapes) {
                    saveState();
                    shapes = data.shapes;
                    idCounter = shapes.length + 10;
                    selectedId = null;
                    zoom = 1; panX = 0; panY = 0;
                    render();
                    updateNotesList();
                    setStatus('Imported project successfully');
                }
            } catch(err) {
                setStatus('Failed to import — invalid file');
            }
        };
        reader.readAsText(file);
        this.value = '';
    });

    // Undo / Redo buttons
    document.getElementById('somUndoBtn').addEventListener('click', undo);
    document.getElementById('somRedoBtn').addEventListener('click', redo);

    // ==================== STATUS ====================
    function setStatus(msg) {
        document.getElementById('somStatusText').textContent = msg;
    }

    // ==================== LOAD AUTOSAVE ====================
    function loadAutosave() {
        try {
            const saved = localStorage.getItem('somnus_autosave');
            if (saved) {
                const data = JSON.parse(saved);
                if (data.shapes && data.shapes.length > 0) {
                    shapes = data.shapes;
                    zoom = data.zoom || 1;
                    panX = data.panX || 0;
                    panY = data.panY || 0;
                    idCounter = shapes.length + 10;
                    render();
                    updateNotesList();
                    setStatus('Loaded autosaved notes');
                    return;
                }
            }
        } catch(e) {}
        setStatus('Select a shape tool and draw on canvas');
    }

    // ==================== INIT ====================
    window.addEventListener('resize', resizeCanvas);
    // Use MutationObserver to detect when section becomes visible
    const observer = new MutationObserver(function() {
        const section = document.getElementById('somnus-section');
        if (section && section.style.display !== 'none') {
            setTimeout(resizeCanvas, 50);
        }
    });
    const somSection = document.getElementById('somnus-section');
    if (somSection) observer.observe(somSection, { attributes: true, attributeFilter: ['style'] });

    // Initial resize
    setTimeout(() => {
        resizeCanvas();
        loadAutosave();
    }, 100);

})();
</script>

</div>