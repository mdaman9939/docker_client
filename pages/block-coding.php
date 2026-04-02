<!-- ============================================
     Visual Learning Lab - Scratch-like Block Coding
     Stage + Sprites + Blocks + Output
     ============================================ -->
<link rel="stylesheet" href="assets/block-coding.css">

<div id="block-coding-section" class="content-section" style="display: none;">

<!-- Hero Bar -->
<div class="vll-hero">
    <div class="vll-hero-left">
        <div class="vll-hero-icon"><i class="fas fa-puzzle-piece"></i></div>
        <div>
            <h2>Visual Learning Lab</h2>
            <p>Drag blocks, move sprites, draw, play sounds, and ask AI!</p>
        </div>
    </div>
    <div class="vll-hero-actions">
        <button class="vll-btn vll-btn-save" onclick="VLLApp.saveWorkspace()">
            <i class="fas fa-save"></i> Save
        </button>
        <button class="vll-btn vll-btn-load" onclick="VLLApp.loadWorkspace()">
            <i class="fas fa-folder-open"></i> Load
        </button>
    </div>
</div>

    <!-- Main Workspace (3-panel layout) -->
    <div class="vll-workspace-container">

        <!-- LEFT: Blockly Panel -->
        <div class="vll-blockly-panel">
            <div class="vll-blockly-header">
                <div class="vll-blockly-header-left">
                    <i class="fas fa-puzzle-piece"></i>
                    <span>Code</span>
                    <span class="vll-block-count" id="vllBlockCount">0 blocks</span>
                </div>
                <div style="display:flex;gap:4px;">
                    <button class="vll-btn-sm" onclick="VLLApp.clearWorkspace()" title="Clear"><i class="fas fa-trash-alt"></i></button>
                    <button class="vll-btn-sm" onclick="VLLApp.undoAction()" title="Undo"><i class="fas fa-undo"></i></button>
                    <button class="vll-btn-sm" onclick="VLLApp.redoAction()" title="Redo"><i class="fas fa-redo"></i></button>
                </div>
            </div>
            <div class="vll-blockly-area">
                <div id="vllBlocklyDiv"></div>
            </div>
        </div>

        <!-- RIGHT: Stage + Sprites + Output -->
        <div class="vll-right-panel">

            <!-- Stage -->
            <div class="vll-stage-wrapper">
                <div class="vll-stage-controls">
                    <div class="vll-stage-flags">
                        <button class="vll-flag-btn green-flag" id="vllGreenFlag" onclick="VLLApp.runCode()" title="Green Flag - Run">
                            <i class="fas fa-flag"></i>
                        </button>
                        <button class="vll-flag-btn stop-btn" id="vllStopBtn" onclick="VLLApp.stopCode()" title="Stop">
                            <i class="fas fa-stop"></i>
                        </button>
                    </div>
                    <div class="vll-stage-info">
                        <span><span class="label">x:</span> <span id="vllSpriteX">0</span></span>
                        <span><span class="label">y:</span> <span id="vllSpriteY">0</span></span>
                        <span><span class="label">dir:</span> <span id="vllSpriteDir">90</span></span>
                    </div>
                </div>
                <div style="position:relative;">
                    <div class="vll-stage-canvas-wrap" id="vllStageWrap">
                        <canvas id="vllPenCanvas" width="480" height="360"></canvas>
                        <canvas id="vllStageCanvas" width="480" height="360"></canvas>
                    </div>
                    <div class="vll-speech-bubble" id="vllSpeechBubble"></div>
                </div>
            </div>

            <!-- Sprite Panel -->
            <div class="vll-sprite-panel">
                <div class="vll-sprite-panel-header">
                    <h4><i class="fas fa-cat" style="color:#4361ee"></i> Sprites</h4>
                </div>
                <div class="vll-sprite-list" id="vllSpriteList">
                    <!-- Populated by JS -->
                </div>
            </div>

            <!-- Output Tabs -->
            <div class="vll-output-section">
                <div class="vll-output-tabs">
                    <button class="vll-output-tab active" data-tab="console" onclick="VLLApp.switchTab('console')">
                        <i class="fas fa-terminal"></i> Console
                    </button>
                    <button class="vll-output-tab" data-tab="code" onclick="VLLApp.switchTab('code')">
                        <i class="fab fa-python"></i> Python
                    </button>
                </div>
                <div class="vll-output-content">
                    <div class="vll-output-pane active" id="vllConsolePane">
                        <div class="vll-console" id="vllConsoleOutput">
                            <div class="vll-console-empty">
                                <i class="fas fa-flag"></i>
                                <p>Click the <strong>green flag</strong> to run your program</p>
                            </div>
                        </div>
                    </div>
                    <div class="vll-output-pane" id="vllCodePane">
                        <pre class="vll-code-preview" id="vllCodePreview"># Add blocks to see generated Python code</pre>
                    </div>
                </div>
            </div>

            <!-- Status Bar -->
            <div class="vll-status-bar">
                <div class="vll-status-left">
                    <span class="vll-status-dot" id="vllStatusDot"></span>
                    <span id="vllStatusText">Ready</span>
                </div>
                <div class="vll-status-right">
                    <span id="vllStatusBlocks">0 blocks</span>
                </div>
            </div>
        </div>
    </div>

</div>

<link rel="stylesheet" href="assets/block-coding.css">


<style>
/* Hero Bar - AI World Theme */
.vll-hero {
    background: linear-gradient(135deg, #3f66e6 0%, #0ed3a2 50%, #129695 100%);
    border-radius: 24px;
    padding: 24px 32px;
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.vll-hero-left {
    display: flex;
    align-items: center;
    gap: 16px;
}

.vll-hero-icon {
    width: 56px;
    height: 56px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.vll-hero-left h2 {
    margin: 0;
    font-size: 24px;
    font-weight: 700;
    color: #fff;
}

.vll-hero-left p {
    margin: 4px 0 0;
    font-size: 13px;
    color: rgba(255, 255, 255, 0.85);
}

.vll-hero-actions {
    display: flex;
    gap: 12px;
}

.vll-btn {
    padding: 10px 24px;
    border: none;
    border-radius: 14px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    font-family: inherit;
}

.vll-btn-save {
    background: #fff;
    color: #3f66e6;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.vll-btn-save:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(63, 102, 230, 0.3);
    background: #f0f4ff;
}

.vll-btn-load {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.vll-btn-load:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

/* Responsive */
@media (max-width: 768px) {
    .vll-hero {
        flex-direction: column;
        text-align: center;
        padding: 20px;
    }
    
    .vll-hero-left {
        flex-direction: column;
        text-align: center;
    }
    
    .vll-hero-actions {
        width: 100%;
        justify-content: center;
    }
    
    .vll-btn {
        flex: 1;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .vll-hero-left h2 {
        font-size: 20px;
    }
    
    .vll-hero-icon {
        width: 48px;
        height: 48px;
        font-size: 24px;
    }
}
</style>

<!-- Add this inline CSS for responsive fixes -->
<style>
/* ============================================
   RESPONSIVE FIXES FOR BLOCKLY (Screen < 993px)
   ============================================ */

/* Responsive layout for smaller screens */
@media (max-width: 992px) {
    .vll-workspace-container {
        flex-direction: column !important;
    }
    
    .vll-blockly-panel {
        min-height: 400px !important;
        height: 50vh !important;
    }
    
    .vll-blockly-area {
        min-height: 350px !important;
    }
    
    /* Ensure Blockly SVG gets proper dimensions */
    .vll-blockly-area svg,
    .blocklySvg {
        width: 100% !important;
        height: 100% !important;
    }
}

/* Ensure Blockly container has proper dimensions */
.vll-blockly-area {
    flex: 1;
    position: relative;
    min-height: 400px;
    overflow: hidden;
}

#vllBlocklyDiv {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
}

/* Fix for Blockly toolbox on small screens */
@media (max-width: 768px) {
    .vll-blockly-panel {
        height: 60vh !important;
    }
    
    .vll-blockly-area {
        min-height: 300px !important;
    }
}
</style>

<!-- VLL Custom Scripts (lazy-loaded, safe before Blockly) -->
<script src="js/blockly-blocks.js"></script>
<script src="js/blockly-generators.js"></script>
<script src="js/blockly-tutorial.js"></script>

<!-- Blockly Core (CDN - pinned version, AMD-safe) -->
<script>
(function () {
    // FIX: Monaco Editor's AMD loader (loader.min.js) intercepts Blockly's define() calls.
    // Only hide define() - keep require() so Monaco still works.
    var _define = window.define;

    var CDN = 'https://cdn.jsdelivr.net/npm/blockly@11.1.1/';
    var scripts = [
        CDN + 'blockly_compressed.js',
        CDN + 'blocks_compressed.js',
        CDN + 'javascript_compressed.js',
        CDN + 'msg/en.js'
    ];
    var loaded = 0;

    function done() {
        // Restore AMD define after Blockly is fully loaded
        window.define = _define;
        console.log('[VLL] All Blockly scripts loaded, AMD define restored');
        window._vllBlocklyReady = true;
    }

    function loadFromCDN(baseUrls, urlIndex) {
        if (urlIndex >= baseUrls.length) {
            // All CDNs failed
            window.define = _define;
            console.error('[VLL] CRITICAL: Cannot load Blockly from any CDN');
            var el = document.getElementById('vllBlocklyDiv');
            if (el) el.innerHTML = '<div style="display:flex;align-items:center;justify-content:center;height:100%;color:#ef476f;font-family:Poppins;text-align:center;padding:40px;"><div><i class="fas fa-exclamation-triangle" style="font-size:48px;margin-bottom:16px;display:block;opacity:0.5"></i><b>Could not load Blockly</b><br><small style="color:#8d99ae">Check internet connection and reload.</small></div></div>';
            return;
        }

        var base = baseUrls[urlIndex];
        var fileList = [
            base + 'blockly_compressed.js',
            base + 'blocks_compressed.js',
            base + 'javascript_compressed.js',
            base + 'msg/en.js'
        ];
        loaded = 0;

        // Disable AMD define before loading (keep require for Monaco)
        window.define = undefined;

        function loadNext(i) {
            if (i >= fileList.length) { done(); return; }
            var s = document.createElement('script');
            s.src = fileList[i];
            s.onload = function () {
                loaded++;
                console.log('[VLL] Blockly script loaded (' + loaded + '/' + fileList.length + ')');
                loadNext(i + 1);
            };
            s.onerror = function () {
                console.warn('[VLL] Failed from ' + base + ', trying next CDN...');
                // Restore before trying next CDN
                window.define = _define;
                loadFromCDN(baseUrls, urlIndex + 1);
            };
            document.body.appendChild(s);
        }
        loadNext(0);
    }

    // Try jsdelivr first, then unpkg as fallback
    loadFromCDN([
        'https://cdn.jsdelivr.net/npm/blockly@11.1.1/',
        'https://unpkg.com/blockly@11.1.1/'
    ], 0);
})();
</script>

<script>
/**
 * VLLStage - Canvas-based Stage Engine (Sprite rendering, Pen, Sound)
 * Implements a Scratch-like coordinate system: center is (0,0), x: -240 to 240, y: -180 to 180
 */
const VLLStage = (function () {
    const W = 480, H = 360;
    let stageCanvas, stageCtx, penCanvas, penCtx;
    let sprites = [];
    let activeSprite = 0;
    let animFrame = null;
    let _mouseX = 0, _mouseY = 0, _mouseDown = false;
    let _keys = {};
    let _timer = 0, _timerStart = Date.now();
    let _volume = 80;
    let _audioCtx = null;
    let _backdrop = 'white';

    // Costume drawing functions
    const COSTUMES = {
        cat: function (ctx, s, size) {
            var r = size * 0.35;
            // Body
            ctx.fillStyle = s.color;
            ctx.beginPath();
            ctx.ellipse(0, 4, r, r * 1.2, 0, 0, Math.PI * 2);
            ctx.fill();
            ctx.strokeStyle = '#2b2d42';
            ctx.lineWidth = 1.5;
            ctx.stroke();
            // Ears
            ctx.beginPath();
            ctx.moveTo(-r * 0.7, -r * 0.8);
            ctx.lineTo(-r * 0.3, -r * 1.5);
            ctx.lineTo(0, -r * 0.8);
            ctx.moveTo(0, -r * 0.8);
            ctx.lineTo(r * 0.3, -r * 1.5);
            ctx.lineTo(r * 0.7, -r * 0.8);
            ctx.fillStyle = s.color;
            ctx.fill();
            ctx.stroke();
            // Eyes
            ctx.fillStyle = '#fff';
            ctx.beginPath(); ctx.arc(-r * 0.3, -r * 0.1, r * 0.2, 0, Math.PI * 2); ctx.fill(); ctx.stroke();
            ctx.beginPath(); ctx.arc(r * 0.3, -r * 0.1, r * 0.2, 0, Math.PI * 2); ctx.fill(); ctx.stroke();
            ctx.fillStyle = '#2b2d42';
            ctx.beginPath(); ctx.arc(-r * 0.25, -r * 0.05, r * 0.08, 0, Math.PI * 2); ctx.fill();
            ctx.beginPath(); ctx.arc(r * 0.35, -r * 0.05, r * 0.08, 0, Math.PI * 2); ctx.fill();
            // Mouth
            ctx.beginPath();
            ctx.arc(0, r * 0.2, r * 0.15, 0, Math.PI);
            ctx.strokeStyle = '#2b2d42';
            ctx.lineWidth = 1;
            ctx.stroke();
            // Whiskers
            ctx.beginPath();
            ctx.moveTo(-r * 0.6, r * 0.1); ctx.lineTo(-r * 1.2, -r * 0.1);
            ctx.moveTo(-r * 0.6, r * 0.25); ctx.lineTo(-r * 1.2, r * 0.3);
            ctx.moveTo(r * 0.6, r * 0.1); ctx.lineTo(r * 1.2, -r * 0.1);
            ctx.moveTo(r * 0.6, r * 0.25); ctx.lineTo(r * 1.2, r * 0.3);
            ctx.stroke();
        },
        robot: function (ctx, s, size) {
            var r = size * 0.35;
            ctx.fillStyle = s.color;
            ctx.strokeStyle = '#2b2d42';
            ctx.lineWidth = 1.5;
            // Head
            ctx.fillRect(-r * 0.7, -r * 1.1, r * 1.4, r * 1.0);
            ctx.strokeRect(-r * 0.7, -r * 1.1, r * 1.4, r * 1.0);
            // Body
            ctx.fillRect(-r * 0.8, -r * 0.1, r * 1.6, r * 1.2);
            ctx.strokeRect(-r * 0.8, -r * 0.1, r * 1.6, r * 1.2);
            // Eyes
            ctx.fillStyle = '#fff';
            ctx.fillRect(-r * 0.45, -r * 0.8, r * 0.35, r * 0.35);
            ctx.fillRect(r * 0.1, -r * 0.8, r * 0.35, r * 0.35);
            ctx.fillStyle = '#06d6a0';
            ctx.fillRect(-r * 0.35, -r * 0.7, r * 0.15, r * 0.15);
            ctx.fillRect(r * 0.2, -r * 0.7, r * 0.15, r * 0.15);
            // Antenna
            ctx.strokeStyle = '#2b2d42';
            ctx.beginPath(); ctx.moveTo(0, -r * 1.1); ctx.lineTo(0, -r * 1.5); ctx.stroke();
            ctx.fillStyle = '#ef476f';
            ctx.beginPath(); ctx.arc(0, -r * 1.55, r * 0.1, 0, Math.PI * 2); ctx.fill();
        },
        rocket: function (ctx, s, size) {
            var r = size * 0.35;
            ctx.fillStyle = s.color;
            ctx.strokeStyle = '#2b2d42';
            ctx.lineWidth = 1.5;
            // Body
            ctx.beginPath();
            ctx.moveTo(0, -r * 1.5);
            ctx.quadraticCurveTo(r * 0.7, -r * 0.5, r * 0.5, r * 1.0);
            ctx.lineTo(-r * 0.5, r * 1.0);
            ctx.quadraticCurveTo(-r * 0.7, -r * 0.5, 0, -r * 1.5);
            ctx.fill(); ctx.stroke();
            // Window
            ctx.fillStyle = '#48bfe3';
            ctx.beginPath(); ctx.arc(0, -r * 0.3, r * 0.25, 0, Math.PI * 2); ctx.fill(); ctx.stroke();
            // Fins
            ctx.fillStyle = '#ef476f';
            ctx.beginPath(); ctx.moveTo(-r * 0.5, r * 0.5); ctx.lineTo(-r * 0.9, r * 1.2); ctx.lineTo(-r * 0.3, r * 1.0); ctx.fill(); ctx.stroke();
            ctx.beginPath(); ctx.moveTo(r * 0.5, r * 0.5); ctx.lineTo(r * 0.9, r * 1.2); ctx.lineTo(r * 0.3, r * 1.0); ctx.fill(); ctx.stroke();
            // Flame
            ctx.fillStyle = '#ffd166';
            ctx.beginPath(); ctx.moveTo(-r * 0.3, r * 1.0); ctx.lineTo(0, r * 1.6); ctx.lineTo(r * 0.3, r * 1.0); ctx.fill();
        },
        star: function (ctx, s, size) {
            var r = size * 0.4;
            ctx.fillStyle = s.color;
            ctx.strokeStyle = '#2b2d42';
            ctx.lineWidth = 1.5;
            ctx.beginPath();
            for (var i = 0; i < 5; i++) {
                var angle = (i * 72 - 90) * Math.PI / 180;
                var innerAngle = ((i * 72) + 36 - 90) * Math.PI / 180;
                ctx.lineTo(Math.cos(angle) * r, Math.sin(angle) * r);
                ctx.lineTo(Math.cos(innerAngle) * r * 0.4, Math.sin(innerAngle) * r * 0.4);
            }
            ctx.closePath();
            ctx.fill(); ctx.stroke();
            // Face
            ctx.fillStyle = '#2b2d42';
            ctx.beginPath(); ctx.arc(-r * 0.15, -r * 0.08, 2.5, 0, Math.PI * 2); ctx.fill();
            ctx.beginPath(); ctx.arc(r * 0.15, -r * 0.08, 2.5, 0, Math.PI * 2); ctx.fill();
            ctx.beginPath(); ctx.arc(0, r * 0.12, r * 0.1, 0, Math.PI); ctx.stroke();
        },
        ball: function (ctx, s, size) {
            var r = size * 0.35;
            ctx.fillStyle = s.color;
            ctx.strokeStyle = '#2b2d42';
            ctx.lineWidth = 1.5;
            ctx.beginPath(); ctx.arc(0, 0, r, 0, Math.PI * 2); ctx.fill(); ctx.stroke();
            // Shine
            ctx.fillStyle = 'rgba(255,255,255,0.3)';
            ctx.beginPath(); ctx.arc(-r * 0.3, -r * 0.3, r * 0.3, 0, Math.PI * 2); ctx.fill();
        },
        arrow: function (ctx, s, size) {
            var r = size * 0.4;
            ctx.fillStyle = s.color;
            ctx.strokeStyle = '#2b2d42';
            ctx.lineWidth = 1.5;
            ctx.beginPath();
            ctx.moveTo(0, -r);
            ctx.lineTo(r * 0.6, r * 0.3);
            ctx.lineTo(r * 0.2, r * 0.3);
            ctx.lineTo(r * 0.2, r);
            ctx.lineTo(-r * 0.2, r);
            ctx.lineTo(-r * 0.2, r * 0.3);
            ctx.lineTo(-r * 0.6, r * 0.3);
            ctx.closePath();
            ctx.fill(); ctx.stroke();
        }
    };

    const BACKDROPS = {
        white: function (ctx) { ctx.fillStyle = '#fff'; ctx.fillRect(0, 0, W, H); },
        sky: function (ctx) {
            var g = ctx.createLinearGradient(0, 0, 0, H);
            g.addColorStop(0, '#87CEEB'); g.addColorStop(1, '#E0F7FA');
            ctx.fillStyle = g; ctx.fillRect(0, 0, W, H);
            ctx.fillStyle = '#4CAF50'; ctx.fillRect(0, H - 40, W, 40);
        },
        space: function (ctx) {
            ctx.fillStyle = '#0a0a2e'; ctx.fillRect(0, 0, W, H);
            for (var i = 0; i < 80; i++) {
                ctx.fillStyle = 'rgba(255,255,255,' + (Math.random() * 0.6 + 0.4) + ')';
                ctx.fillRect(Math.random() * W, Math.random() * H, 2, 2);
            }
        },
        grass: function (ctx) {
            ctx.fillStyle = '#87CEEB'; ctx.fillRect(0, 0, W, H * 0.6);
            ctx.fillStyle = '#4CAF50'; ctx.fillRect(0, H * 0.6, W, H * 0.4);
        },
        underwater: function (ctx) {
            var g = ctx.createLinearGradient(0, 0, 0, H);
            g.addColorStop(0, '#0077B6'); g.addColorStop(1, '#023E8A');
            ctx.fillStyle = g; ctx.fillRect(0, 0, W, H);
            ctx.fillStyle = '#0096C7';
            for (var i = 0; i < 15; i++) {
                ctx.beginPath(); ctx.arc(Math.random() * W, Math.random() * H, Math.random() * 8 + 3, 0, Math.PI * 2);
                ctx.globalAlpha = 0.2; ctx.fill();
            }
            ctx.globalAlpha = 1;
        },
        grid: function (ctx) {
            ctx.fillStyle = '#fff'; ctx.fillRect(0, 0, W, H);
            ctx.strokeStyle = '#e0e0e0'; ctx.lineWidth = 0.5;
            for (var x = 0; x <= W; x += 24) { ctx.beginPath(); ctx.moveTo(x, 0); ctx.lineTo(x, H); ctx.stroke(); }
            for (var y = 0; y <= H; y += 24) { ctx.beginPath(); ctx.moveTo(0, y); ctx.lineTo(W, y); ctx.stroke(); }
            ctx.strokeStyle = '#bbb'; ctx.lineWidth = 1;
            ctx.beginPath(); ctx.moveTo(W / 2, 0); ctx.lineTo(W / 2, H); ctx.stroke();
            ctx.beginPath(); ctx.moveTo(0, H / 2); ctx.lineTo(W, H / 2); ctx.stroke();
        }
    };

    function Sprite(name, costume, color) {
        this.name = name;
        this.x = 0; this.y = 0;
        this.direction = 90;
        this.size = 100;
        this.visible = true;
        this.costume = costume || 'cat';
        this.costumeIndex = 0;
        this.color = color || '#4361ee';
        this.sayText = '';
        this.sayType = 'say';
        this.penIsDown = false;
        this.penColor = '#4361ee';
        this.penSize = 2;
    }

    function init() {
        stageCanvas = document.getElementById('vllStageCanvas');
        stageCtx = stageCanvas.getContext('2d');
        penCanvas = document.getElementById('vllPenCanvas');
        penCtx = penCanvas.getContext('2d');

        sprites = [new Sprite('Sprite1', 'cat', '#4361ee')];
        activeSprite = 0;

        // Mouse tracking
        var wrap = document.getElementById('vllStageWrap');
        wrap.addEventListener('mousemove', function (e) {
            var rect = stageCanvas.getBoundingClientRect();
            var scaleX = W / rect.width, scaleY = H / rect.height;
            _mouseX = Math.round((e.clientX - rect.left) * scaleX - W / 2);
            _mouseY = Math.round(H / 2 - (e.clientY - rect.top) * scaleY);
        });
        wrap.addEventListener('mousedown', function () { _mouseDown = true; });
        wrap.addEventListener('mouseup', function () { _mouseDown = false; });

        // Key tracking
        document.addEventListener('keydown', function (e) { _keys[e.key] = true; });
        document.addEventListener('keyup', function (e) { _keys[e.key] = false; });

        renderSpriteList();
        render();
    }

    function render() {
        // stageCanvas (top layer) - sprites only, clear every frame
        stageCtx.clearRect(0, 0, W, H);

        // Draw backdrop on stage canvas (pen drawings overlay on penCanvas separately)
        if (BACKDROPS[_backdrop]) BACKDROPS[_backdrop](stageCtx);
        else { stageCtx.fillStyle = '#fff'; stageCtx.fillRect(0, 0, W, H); }

        // Copy pen canvas on top of backdrop
        stageCtx.drawImage(penCanvas, 0, 0);

        // Draw all sprites
        var hasSay = false;
        for (var i = 0; i < sprites.length; i++) {
            var s = sprites[i];
            if (!s.visible) continue;

            var sx = s.x + W / 2;
            var sy = H / 2 - s.y;
            var scale = s.size / 100;
            var drawFn = COSTUMES[s.costume] || COSTUMES.cat;

            stageCtx.save();
            stageCtx.translate(sx, sy);
            stageCtx.rotate((s.direction - 90) * Math.PI / 180);
            stageCtx.scale(scale, scale);
            drawFn(stageCtx, s, 80);
            stageCtx.restore();

            // Speech/think bubble
            if (s.sayText) {
                hasSay = true;
                var bubble = document.getElementById('vllSpeechBubble');
                bubble.textContent = s.sayText;
                bubble.className = 'vll-speech-bubble visible' + (s.sayType === 'think' ? ' think' : '');
                // Position bubble above the sprite
                var bxPct = (sx / W) * 100;
                var byPct = (sy / H) * 100;
                bubble.style.left = Math.min(Math.max(bxPct - 5, 2), 55) + '%';
                bubble.style.bottom = (100 - byPct + 12) + '%';
            }
        }

        // Hide bubble if no sprite is saying anything
        if (!hasSay) {
            var bubble = document.getElementById('vllSpeechBubble');
            if (bubble && bubble.classList.contains('visible')) {
                bubble.className = 'vll-speech-bubble';
            }
        }

        // Update position display
        var cs = sprites[activeSprite];
        if (cs) {
            document.getElementById('vllSpriteX').textContent = Math.round(cs.x);
            document.getElementById('vllSpriteY').textContent = Math.round(cs.y);
            document.getElementById('vllSpriteDir').textContent = Math.round(cs.direction);
        }

        animFrame = requestAnimationFrame(render);
    }

    function getSprite() { return sprites[activeSprite]; }

    // --- Motion ---
    // Keep sprite within stage bounds
    function clamp(s) {
        s.x = Math.max(-230, Math.min(230, s.x));
        s.y = Math.max(-170, Math.min(170, s.y));
    }

    function moveSteps(n) {
        var s = getSprite();
        var rad = (s.direction - 90) * Math.PI / 180;
        var oldX = s.x, oldY = s.y;
        s.x += n * Math.cos(rad);
        s.y -= n * Math.sin(rad);
        clamp(s);
        if (s.penIsDown) drawPenLine(oldX, oldY, s.x, s.y, s);
        return new Promise(function (r) { setTimeout(r, 16); });
    }

    function turnRight(d) { getSprite().direction = (getSprite().direction + d) % 360; }
    function turnLeft(d) { getSprite().direction = (getSprite().direction - d + 360) % 360; }

    function goTo(x, y) {
        var s = getSprite();
        var oldX = s.x, oldY = s.y;
        s.x = x; s.y = y;
        clamp(s);
        if (s.penIsDown) drawPenLine(oldX, oldY, s.x, s.y, s);
    }

    function goToRandom() {
        goTo(Math.floor(Math.random() * 480) - 240, Math.floor(Math.random() * 360) - 180);
    }

    function glideTo(secs, tx, ty) {
        var s = getSprite();
        var sx = s.x, sy = s.y;
        var start = performance.now();
        var dur = secs * 1000;
        return new Promise(function (resolve) {
            function step() {
                if (window._vllStopped) { resolve(); return; }
                var elapsed = performance.now() - start;
                var t = Math.min(elapsed / dur, 1);
                var oldX = s.x, oldY = s.y;
                s.x = sx + (tx - sx) * t;
                s.y = sy + (ty - sy) * t;
                if (s.penIsDown) drawPenLine(oldX, oldY, s.x, s.y, s);
                if (t < 1) requestAnimationFrame(step);
                else resolve();
            }
            step();
        });
    }

    function pointDirection(d) { getSprite().direction = d; }
    function changeX(dx) { var s = getSprite(); var ox = s.x; s.x += dx; clamp(s); if (s.penIsDown) drawPenLine(ox, s.y, s.x, s.y, s); }
    function changeY(dy) { var s = getSprite(); var oy = s.y; s.y += dy; clamp(s); if (s.penIsDown) drawPenLine(s.x, oy, s.x, s.y, s); }
    function setX(x) { var s = getSprite(); var ox = s.x; s.x = x; clamp(s); if (s.penIsDown) drawPenLine(ox, s.y, s.x, s.y, s); }
    function setY(y) { var s = getSprite(); var oy = s.y; s.y = y; clamp(s); if (s.penIsDown) drawPenLine(s.x, oy, s.x, s.y, s); }

    function bounceEdge() {
        var s = getSprite();
        var margin = 20 * (s.size / 100);
        if (s.x > 240 - margin || s.x < -240 + margin) s.direction = (180 - s.direction + 360) % 360;
        if (s.y > 180 - margin || s.y < -180 + margin) s.direction = (360 - s.direction) % 360;
        s.x = Math.max(-240, Math.min(240, s.x));
        s.y = Math.max(-180, Math.min(180, s.y));
    }

    // --- Looks ---
    function say(msg) {
        var s = getSprite();
        s.sayText = msg;
        s.sayType = 'say';
        if (!msg) document.getElementById('vllSpeechBubble').className = 'vll-speech-bubble';
    }

    function think(msg) {
        var s = getSprite();
        s.sayText = msg;
        s.sayType = 'think';
        if (!msg) document.getElementById('vllSpeechBubble').className = 'vll-speech-bubble';
    }

    function showSprite() { getSprite().visible = true; }
    function hideSprite() { getSprite().visible = false; }
    function changeSizeBy(n) { var s = getSprite(); s.size = Math.max(5, Math.min(500, s.size + n)); }
    function setSize(n) { getSprite().size = Math.max(5, Math.min(500, n)); }
    function setSpriteColor(c) { getSprite().color = c; }

    function nextCostume() {
        var names = Object.keys(COSTUMES);
        var s = getSprite();
        var idx = names.indexOf(s.costume);
        s.costume = names[(idx + 1) % names.length];
    }

    function setCostume(name) {
        if (COSTUMES[name]) getSprite().costume = name;
    }

    function setBackdrop(name) { _backdrop = name; }

    // --- Pen ---
    function drawPenLine(x1, y1, x2, y2, s) {
        var sx1 = x1 + W / 2, sy1 = H / 2 - y1;
        var sx2 = x2 + W / 2, sy2 = H / 2 - y2;
        penCtx.strokeStyle = s.penColor;
        penCtx.lineWidth = s.penSize;
        penCtx.lineCap = 'round';
        penCtx.beginPath();
        penCtx.moveTo(sx1, sy1);
        penCtx.lineTo(sx2, sy2);
        penCtx.stroke();
    }

    function penDown() { getSprite().penIsDown = true; }
    function penUp() { getSprite().penIsDown = false; }
    function penClear() { penCtx.clearRect(0, 0, W, H); }
    function setPenColor(c) { getSprite().penColor = c; }
    function setPenSize(s) { getSprite().penSize = s; }

    function stamp() {
        var s = getSprite();
        var sx = s.x + W / 2, sy = H / 2 - s.y;
        var scale = s.size / 100;
        var drawFn = COSTUMES[s.costume] || COSTUMES.cat;
        penCtx.save();
        penCtx.translate(sx, sy);
        penCtx.rotate((s.direction - 90) * Math.PI / 180);
        penCtx.scale(scale, scale);
        drawFn(penCtx, s, 80);
        penCtx.restore();
    }

    // --- Sound ---
    function getAudioCtx() {
        if (!_audioCtx) _audioCtx = new (window.AudioContext || window.webkitAudioContext)();
        return _audioCtx;
    }

    function playSound(name) {
        var ctx = getAudioCtx();
        var freq, dur = 0.2, type = 'sine';
        switch (name) {
            case 'pop': freq = 600; dur = 0.1; type = 'sine'; break;
            case 'beep': freq = 800; dur = 0.15; type = 'square'; break;
            case 'click': freq = 1200; dur = 0.05; type = 'sine'; break;
            case 'ding': freq = 1000; dur = 0.4; type = 'sine'; break;
            case 'whoosh': freq = 300; dur = 0.3; type = 'sawtooth'; break;
            case 'error': freq = 200; dur = 0.3; type = 'square'; break;
            case 'success': freq = 523; dur = 0.15; type = 'sine'; break;
            case 'coin': freq = 988; dur = 0.1; type = 'square'; break;
            default: freq = 440; dur = 0.2;
        }
        return _playTone(ctx, freq, dur, type);
    }

    function playNote(freq, beats) {
        var ctx = getAudioCtx();
        return _playTone(ctx, freq, beats * 0.5, 'sine');
    }

    function _playTone(ctx, freq, dur, type) {
        var osc = ctx.createOscillator();
        var gain = ctx.createGain();
        osc.type = type;
        osc.frequency.setValueAtTime(freq, ctx.currentTime);
        gain.gain.setValueAtTime(_volume / 100, ctx.currentTime);
        gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + dur);
        osc.connect(gain);
        gain.connect(ctx.destination);
        osc.start();
        osc.stop(ctx.currentTime + dur);
        return new Promise(function (r) { setTimeout(r, dur * 1000); });
    }

    function setVolume(v) { _volume = Math.max(0, Math.min(100, v)); }

    // --- Sensing ---
    function isTouchingEdge() {
        var s = getSprite();
        var m = 15 * (s.size / 100);
        return s.x > 240 - m || s.x < -240 + m || s.y > 180 - m || s.y < -180 + m;
    }

    function mouseX() { return _mouseX; }
    function mouseY() { return _mouseY; }
    function isMouseDown() { return _mouseDown; }
    function isKeyPressed(key) { return !!_keys[key]; }
    function getTimer() { return Math.round((Date.now() - _timerStart) / 100) / 10; }
    function resetTimer() { _timerStart = Date.now(); }

    function distanceTo(target) {
        var s = getSprite();
        var tx = 0, ty = 0;
        if (target === 'mouse') { tx = _mouseX; ty = _mouseY; }
        return Math.round(Math.sqrt((s.x - tx) ** 2 + (s.y - ty) ** 2));
    }

    // --- Sprite Management ---
    function addSprite(name, costume, color) {
        sprites.push(new Sprite(name || 'Sprite' + (sprites.length + 1), costume || 'cat', color || '#ef476f'));
        renderSpriteList();
    }

    function selectSprite(index) {
        activeSprite = index;
        renderSpriteList();
    }

    function renderSpriteList() {
        var list = document.getElementById('vllSpriteList');
        if (!list) return;
        var html = '';
        for (var i = 0; i < sprites.length; i++) {
            html += '<div class="vll-sprite-thumb' + (i === activeSprite ? ' active' : '') + '" onclick="VLLStage.selectSprite(' + i + ')" title="' + sprites[i].name + '">'
                + '<canvas width="36" height="36" id="vllSpriteThumb' + i + '"></canvas>'
                + '<span class="name">' + sprites[i].name + '</span></div>';
        }
        html += '<button class="vll-sprite-add" onclick="VLLStage.promptAddSprite()" title="Add Sprite"><i class="fas fa-plus"></i></button>';
        list.innerHTML = html;

        // Draw thumbnails
        setTimeout(function () {
            for (var i = 0; i < sprites.length; i++) {
                var tc = document.getElementById('vllSpriteThumb' + i);
                if (!tc) continue;
                var tctx = tc.getContext('2d');
                tctx.clearRect(0, 0, 36, 36);
                tctx.save();
                tctx.translate(18, 18);
                tctx.scale(0.5, 0.5);
                var drawFn = COSTUMES[sprites[i].costume] || COSTUMES.cat;
                drawFn(tctx, sprites[i], 30);
                tctx.restore();
            }
        }, 10);
    }

    function promptAddSprite() {
        // Show inline sprite picker instead of prompt()
        var existing = document.getElementById('vllSpritePicker');
        if (existing) { existing.remove(); return; }

        var costumes = Object.keys(COSTUMES);
        var colors = ['#ef476f', '#06d6a0', '#ffd166', '#7209b7', '#ff6b35', '#48bfe3'];
        var html = '<div id="vllSpritePicker" style="position:absolute;bottom:70px;right:10px;background:#fff;border-radius:12px;padding:14px;box-shadow:0 8px 30px rgba(0,0,0,0.18);z-index:100;min-width:200px;font-family:Poppins,sans-serif;">';
        html += '<div style="font-size:12px;font-weight:600;color:#2b2d42;margin-bottom:10px;">Choose a Sprite</div>';
        html += '<div style="display:flex;flex-wrap:wrap;gap:8px;">';
        costumes.forEach(function (name, i) {
            var col = colors[i % colors.length];
            html += '<div onclick="VLLStage.addSpriteByName(\'' + name + '\',\'' + col + '\')" style="width:56px;height:56px;border-radius:10px;border:2px solid #e0e0e0;background:#f8f9fa;cursor:pointer;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:3px;transition:all 0.15s;" onmouseover="this.style.borderColor=\'#4361ee\';this.style.background=\'#e8ecff\'" onmouseout="this.style.borderColor=\'#e0e0e0\';this.style.background=\'#f8f9fa\'">';
            html += '<div style="width:28px;height:28px;background:' + col + ';border-radius:50%;"></div>';
            html += '<span style="font-size:9px;font-weight:600;color:#2b2d42;">' + name + '</span></div>';
        });
        html += '</div></div>';

        var panel = document.querySelector('.vll-sprite-panel');
        panel.style.position = 'relative';
        panel.insertAdjacentHTML('beforeend', html);

        // Close when clicking outside
        setTimeout(function () {
            document.addEventListener('click', function closePicker(e) {
                var picker = document.getElementById('vllSpritePicker');
                if (picker && !picker.contains(e.target) && !e.target.closest('.vll-sprite-add')) {
                    picker.remove();
                    document.removeEventListener('click', closePicker);
                }
            });
        }, 100);
    }

    function addSpriteByName(costume, color) {
        addSprite(null, costume, color);
        var picker = document.getElementById('vllSpritePicker');
        if (picker) picker.remove();
    }

    function resetAll() {
        sprites = [new Sprite('Sprite1', 'cat', '#4361ee')];
        activeSprite = 0;
        _backdrop = 'white';
        penClear();
        document.getElementById('vllSpeechBubble').className = 'vll-speech-bubble';
        _timerStart = Date.now();
        renderSpriteList();
    }

    return {
        init: init, getSprite: getSprite, render: render,
        moveSteps: moveSteps, turnRight: turnRight, turnLeft: turnLeft,
        goTo: goTo, goToRandom: goToRandom, glideTo: glideTo,
        pointDirection: pointDirection, changeX: changeX, changeY: changeY,
        setX: setX, setY: setY, bounceEdge: bounceEdge,
        say: say, think: think, showSprite: showSprite, hideSprite: hideSprite,
        changeSizeBy: changeSizeBy, setSize: setSize, setSpriteColor: setSpriteColor,
        nextCostume: nextCostume, setCostume: setCostume, setBackdrop: setBackdrop,
        penDown: penDown, penUp: penUp, penClear: penClear,
        setPenColor: setPenColor, setPenSize: setPenSize, stamp: stamp,
        playSound: playSound, playNote: playNote, setVolume: setVolume,
        isTouchingEdge: isTouchingEdge, mouseX: mouseX, mouseY: mouseY,
        isMouseDown: isMouseDown, isKeyPressed: isKeyPressed,
        getTimer: getTimer, resetTimer: resetTimer, distanceTo: distanceTo,
        addSprite: addSprite, selectSprite: selectSprite, promptAddSprite: promptAddSprite,
        addSpriteByName: addSpriteByName, renderSpriteList: renderSpriteList, resetAll: resetAll
    };
})();


/**
 * VLLApp - Main Application Controller
 */
const VLLApp = (function () {
    let workspace = null;
    let isRunning = false;

    window.vllVars = {};
    window._vllStopped = false;

    window.vllConsole = function (type, message) {
        var el = document.getElementById('vllConsoleOutput');
        var empty = el.querySelector('.vll-console-empty');
        if (empty) empty.remove();

        var time = new Date().toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit', second: '2-digit' });
        var line = document.createElement('div');

        if (type === 'ai') {
            line.className = 'vll-console-line ai-response';
            line.innerHTML = '<span class="ai-label"><i class="fas fa-robot"></i> AI Response</span><span class="message">' + escapeHTML(String(message)) + '</span>';
        } else {
            line.className = 'vll-console-line ' + type;
            line.innerHTML = '<span class="timestamp">' + time + '</span><span class="message">' + escapeHTML(String(message)) + '</span>';
        }
        el.appendChild(line);
        el.scrollTop = el.scrollHeight;
    };

    // In-stage prompt (replaces browser prompt())
    window.vllPrompt = function (question) {
        return new Promise(function (resolve) {
            var consoleEl = document.getElementById('vllConsoleOutput');
            var empty = consoleEl.querySelector('.vll-console-empty');
            if (empty) empty.remove();

            var id = 'vllInput' + Date.now();
            var html = '<div class="vll-console-line info" style="flex-direction:column;gap:6px;">';
            html += '<span class="message" style="font-weight:600;">' + question + '</span>';
            html += '<div style="display:flex;gap:6px;"><input id="' + id + '" type="text" style="flex:1;padding:6px 10px;border:2px solid #4361ee;border-radius:6px;font-size:13px;font-family:Poppins,sans-serif;outline:none;" placeholder="Type your answer...">';
            html += '<button onclick="document.getElementById(\'' + id + '\').dispatchEvent(new Event(\'submit\'))" style="padding:6px 14px;background:#4361ee;color:#fff;border:none;border-radius:6px;font-weight:600;cursor:pointer;font-family:Poppins,sans-serif;font-size:12px;">OK</button></div></div>';
            consoleEl.insertAdjacentHTML('beforeend', html);
            consoleEl.scrollTop = consoleEl.scrollHeight;

            var input = document.getElementById(id);
            input.focus();
            function submit() {
                var val = input.value || '';
                input.parentElement.parentElement.innerHTML = '<span class="timestamp">' + new Date().toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit', second: '2-digit' }) + '</span><span class="message">' + question + ' <b>' + val + '</b></span>';
                resolve(val);
            }
            input.addEventListener('submit', submit);
            input.addEventListener('keydown', function (e) { if (e.key === 'Enter') submit(); });
        });
    };

    window.vllAskAI = async function (question) {
        try {
            var user = JSON.parse(localStorage.getItem('user') || '{}');
            var token = user.access_token || '';
            var response = await fetch(CONFIG.getApiUrl(CONFIG.ENDPOINTS.ASK), {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'Authorization': 'Bearer ' + token },
                body: JSON.stringify({ question: question, context: 'Visual Learning Lab' })
            });
            if (response.ok) {
                var data = await response.json();
                return data.answer || data.response || JSON.stringify(data);
            }
            return generateLocalResponse(question);
        } catch (e) { return generateLocalResponse(question); }
    };

    function generateLocalResponse(q) {
        q = q.toLowerCase();
        if (q.includes('quiz') || q.includes('question')) return 'Quiz Q: What is the basic unit of life?\nA) Atom\nB) Cell (correct)\nC) Molecule\nD) Organ\n\n(Connect AI backend for real quizzes!)';
        if (q.includes('translate')) return '(Translation requires AI backend. Start your FastAPI server!)';
        if (q.includes('define')) return 'Definition: A concise explanation of a word.\n(Connect AI backend for real definitions!)';
        return 'AI Response to: "' + q.substring(0, 60) + '"\n\nThis is a demo. Connect your FastAPI server at ' + CONFIG.API_BASE_URL + ' for real AI responses!';
    }

    function escapeHTML(str) { var d = document.createElement('div'); d.textContent = str; return d.innerHTML; }

    function initBlockly() {
        // Wait for Blockly CDN to finish loading
        if (!window._vllBlocklyReady || typeof Blockly === 'undefined') {
            console.log('[VLL] Waiting for Blockly to load...');
            setTimeout(initBlockly, 200);
            return;
        }

        try {
            // Register custom blocks and generators (lazy, safe now)
            if (typeof window.registerVLLBlocks === 'function') window.registerVLLBlocks();
            if (typeof window.registerVLLGenerators === 'function') window.registerVLLGenerators();

            // Use JSON toolbox (more reliable than XML parsing)
            workspace = Blockly.inject('vllBlocklyDiv', {
                toolbox: window.VLL_TOOLBOX_JSON,
                theme: Blockly.Themes.Classic,
                grid: { spacing: 25, length: 3, colour: '#e8ecf1', snap: true },
                zoom: { controls: true, wheel: true, startScale: 0.85, maxScale: 2, minScale: 0.3, scaleSpeed: 1.2 },
                trashcan: true,
                move: { scrollbars: true, drag: true, wheel: true },
                renderer: 'zelos',
                sounds: true
            });

            window.vllWorkspace = workspace;
            workspace.addChangeListener(function () { updateBlockCount(); updateCodePreview(); });

            VLLStage.init();
            VLLTutorial.init();

            console.log('[VLL] Blockly workspace initialized successfully');
            // Tutorial is manual only — user clicks "Tutorial" button if they want it
        } catch (err) {
            console.error('[VLL] Init error:', err);
            document.getElementById('vllBlocklyDiv').innerHTML =
                '<div style="display:flex;align-items:center;justify-content:center;height:100%;color:#ef476f;font-family:Poppins;text-align:center;padding:40px;">' +
                '<div><b>Initialization Error</b><br><small style="color:#8d99ae;">' + err.message + '</small></div></div>';
        }
    }

    function updateBlockCount() {
        var count = workspace.getAllBlocks(false).length;
        var label = count === 1 ? '1 block' : count + ' blocks';
        document.getElementById('vllBlockCount').textContent = label;
        document.getElementById('vllStatusBlocks').textContent = label;
    }

    function jsToPython(js) {
        if (!js || !js.trim()) return '';
        var py = js;

        // Remove async/await wrappers
        py = py.replace(/async\s+function\s*\(\)\s*\{/g, '');
        py = py.replace(/await\s+/g, '');
        py = py.replace(/new Promise\(function\(r\)\{setTimeout\(r,\s*\d+\)\}\);?\n?/g, '');

        // Variable declarations
        py = py.replace(/var\s+(\w+)\s*=/g, '$1 =');
        py = py.replace(/let\s+(\w+)\s*=/g, '$1 =');
        py = py.replace(/const\s+(\w+)\s*=/g, '$1 =');

        // Comments
        py = py.replace(/\/\/(.*)/g, '#$1');

        // Boolean & null
        py = py.replace(/\btrue\b/g, 'True');
        py = py.replace(/\bfalse\b/g, 'False');
        py = py.replace(/\bnull\b/g, 'None');

        // Console/print
        py = py.replace(/vllConsole\(\s*['"][^'"]*['"]\s*,\s*/g, 'print(');
        py = py.replace(/console\.log\(/g, 'print(');

        // For loops: for (var i = 0; i < N; i++) {
        py = py.replace(/for\s*\(\s*\w+\s*=\s*0\s*;\s*\w+\s*<\s*(\w+)\s*;[^)]*\)\s*\{/g, 'for i in range($1):');

        // While loops
        py = py.replace(/while\s*\(([^)]+)\)\s*\{/g, 'while $1:');

        // If/else
        py = py.replace(/if\s*\(([^)]+)\)\s*\{/g, 'if $1:');
        py = py.replace(/\}\s*else\s*\{/g, 'else:');
        py = py.replace(/\}\s*else\s+if\s*\(([^)]+)\)\s*\{/g, 'elif $1:');

        // VLLStage methods → Python-style
        py = py.replace(/VLLStage\.moveSteps\(([^)]+)\)/g, 'move($1)');
        py = py.replace(/VLLStage\.turnRight\(([^)]+)\)/g, 'turn_right($1)');
        py = py.replace(/VLLStage\.turnLeft\(([^)]+)\)/g, 'turn_left($1)');
        py = py.replace(/VLLStage\.goTo\(([^)]+)\)/g, 'go_to($1)');
        py = py.replace(/VLLStage\.goToRandom\(\)/g, 'go_to_random()');
        py = py.replace(/VLLStage\.glideTo\(([^)]+)\)/g, 'glide_to($1)');
        py = py.replace(/VLLStage\.pointDirection\(([^)]+)\)/g, 'point_direction($1)');
        py = py.replace(/VLLStage\.changeX\(([^)]+)\)/g, 'change_x($1)');
        py = py.replace(/VLLStage\.changeY\(([^)]+)\)/g, 'change_y($1)');
        py = py.replace(/VLLStage\.setX\(([^)]+)\)/g, 'set_x($1)');
        py = py.replace(/VLLStage\.setY\(([^)]+)\)/g, 'set_y($1)');
        py = py.replace(/VLLStage\.bounceEdge\(\)/g, 'bounce_edge()');
        py = py.replace(/VLLStage\.say\(([^)]*)\)/g, 'say($1)');
        py = py.replace(/VLLStage\.think\(([^)]*)\)/g, 'think($1)');
        py = py.replace(/VLLStage\.showSprite\(\)/g, 'show()');
        py = py.replace(/VLLStage\.hideSprite\(\)/g, 'hide()');
        py = py.replace(/VLLStage\.changeSizeBy\(([^)]+)\)/g, 'change_size($1)');
        py = py.replace(/VLLStage\.setSize\(([^)]+)\)/g, 'set_size($1)');
        py = py.replace(/VLLStage\.setSpriteColor\(([^)]+)\)/g, 'set_color($1)');
        py = py.replace(/VLLStage\.nextCostume\(\)/g, 'next_costume()');
        py = py.replace(/VLLStage\.setCostume\(([^)]+)\)/g, 'set_costume($1)');
        py = py.replace(/VLLStage\.setBackdrop\(([^)]+)\)/g, 'set_backdrop($1)');
        py = py.replace(/VLLStage\.playSound\(([^)]+)\)/g, 'play_sound($1)');
        py = py.replace(/VLLStage\.playNote\(([^)]+)\)/g, 'play_note($1)');
        py = py.replace(/VLLStage\.setVolume\(([^)]+)\)/g, 'set_volume($1)');
        py = py.replace(/VLLStage\.penDown\(\)/g, 'pen_down()');
        py = py.replace(/VLLStage\.penUp\(\)/g, 'pen_up()');
        py = py.replace(/VLLStage\.penClear\(\)/g, 'pen_clear()');
        py = py.replace(/VLLStage\.stamp\(\)/g, 'stamp()');
        py = py.replace(/VLLStage\.setPenColor\(([^)]+)\)/g, 'set_pen_color($1)');
        py = py.replace(/VLLStage\.setPenSize\(([^)]+)\)/g, 'set_pen_size($1)');
        py = py.replace(/VLLStage\.isTouchingEdge\(\)/g, 'is_touching_edge()');
        py = py.replace(/VLLStage\.mouseX\(\)/g, 'mouse_x()');
        py = py.replace(/VLLStage\.mouseY\(\)/g, 'mouse_y()');
        py = py.replace(/VLLStage\.isMouseDown\(\)/g, 'is_mouse_down()');
        py = py.replace(/VLLStage\.isKeyPressed\(([^)]+)\)/g, 'is_key_pressed($1)');
        py = py.replace(/VLLStage\.getTimer\(\)/g, 'get_timer()');
        py = py.replace(/VLLStage\.resetTimer\(\)/g, 'reset_timer()');
        py = py.replace(/VLLStage\.distanceTo\(([^)]+)\)/g, 'distance_to($1)');
        py = py.replace(/VLLStage\.getSprite\(\)\./g, 'sprite.');

        // vllVars → simple variable names
        py = py.replace(/vllVars\['(\w+)'\]/g, '$1');
        py = py.replace(/vllVars\["(\w+)"\]/g, '$1');

        // AI functions
        py = py.replace(/vllAskAI\(/g, 'ask_ai(');
        py = py.replace(/vllPrompt\(/g, 'input(');

        // JS string methods → Python
        py = py.replace(/\.split\(''\)\.reverse\(\)\.join\(''\)/g, '[::-1]');
        py = py.replace(/\.toUpperCase\(\)/g, '.upper()');
        py = py.replace(/\.toLowerCase\(\)/g, '.lower()');
        py = py.replace(/\.includes\(/g, ' in ');
        py = py.replace(/\.length/g, ')  # len(');

        // Math
        py = py.replace(/Math\.floor\(/g, 'int(');
        py = py.replace(/Math\.round\(/g, 'round(');
        py = py.replace(/Math\.ceil\(/g, 'math.ceil(');
        py = py.replace(/Math\.abs\(/g, 'abs(');
        py = py.replace(/Math\.random\(\)/g, 'random.random()');
        py = py.replace(/\*\*/g, '**');

        // Remove closing braces, semicolons
        py = py.replace(/\};?\s*$/gm, '');
        py = py.replace(/;\s*$/gm, '');

        // Remove window._vllStopped checks
        py = py.replace(/if\s*\(window\._vllStopped\)\s*break;?\n?/g, '');
        py = py.replace(/&&\s*!window\._vllStopped/g, '');
        py = py.replace(/!window\._vllStopped\s*&&\s*/g, '');

        // Remove try/catch wrappers
        py = py.replace(/try\s*\{/g, '');
        py = py.replace(/\}\s*catch\s*\(\w+\)\s*\{[^}]*\}/g, '');

        // Clean up empty lines and trailing whitespace
        py = py.replace(/\n{3,}/g, '\n\n');
        py = py.split('\n').map(function(line) { return line.trimEnd(); }).filter(function(line, i, arr) {
            return !(line === '' && i > 0 && arr[i-1] === '');
        }).join('\n').trim();

        return py;
    }

    function updateCodePreview() {
        try {
            var code = javascript.javascriptGenerator.workspaceToCode(workspace);
            var pyCode = jsToPython(code);
            document.getElementById('vllCodePreview').textContent = pyCode || '# Add blocks to see generated Python code';
        } catch (e) {}
    }

    async function runCode() {
        if (isRunning) return;

        var code = javascript.javascriptGenerator.workspaceToCode(workspace);
        if (!code.trim()) {
            vllConsole('warn', 'No blocks to run! Drag blocks into the workspace first.');
            return;
        }

        isRunning = true;
        window._vllStopped = false;
        setStatus('running', 'Running...');
        document.getElementById('vllGreenFlag').classList.add('active');

        if (window._vllTutorialRunWatcher) window._vllTutorialRunWatcher();

        vllConsole('info', '--- Program started ---');
        window.vllVars = {};
        VLLStage.resetTimer();

        try {
            var asyncCode = '(async function() {\n' + code + '\n})()';
            await eval(asyncCode);
            if (!window._vllStopped) vllConsole('success', '--- Program finished ---');
        } catch (err) {
            vllConsole('error', 'Error: ' + err.message);
            setStatus('error', 'Error');
        }

        isRunning = false;
        window._vllStopped = false;
        document.getElementById('vllGreenFlag').classList.remove('active');
        setStatus('ready', 'Ready');
    }

    function stopCode() {
        window._vllStopped = true;
        isRunning = false;
        document.getElementById('vllGreenFlag').classList.remove('active');
        vllConsole('warn', '--- Stopped ---');
        setStatus('ready', 'Stopped');
    }

    function setStatus(state, text) {
        document.getElementById('vllStatusDot').className = 'vll-status-dot' + (state !== 'ready' ? ' ' + state : '');
        document.getElementById('vllStatusText').textContent = text;
    }

    function switchTab(tabName) {
        document.querySelectorAll('.vll-output-tab').forEach(function (t) { t.classList.toggle('active', t.dataset.tab === tabName); });
        document.querySelectorAll('.vll-output-pane').forEach(function (p) { p.classList.remove('active'); });
        document.getElementById(tabName === 'code' ? 'vllCodePane' : 'vllConsolePane').classList.add('active');
        if (tabName === 'code') updateCodePreview();
    }

    function clearConsole() {
        document.getElementById('vllConsoleOutput').innerHTML = '<div class="vll-console-empty"><i class="fas fa-flag"></i><p>Click the <strong>green flag</strong> to run your program</p></div>';
    }

    function clearWorkspace() {
        if (!workspace || workspace.getAllBlocks(false).length === 0) return;
        showVLLModal('Clear Workspace', '<p style="color:#5a6577;margin:0;font-size:14px;">Remove all blocks from the workspace?</p>', function () {
            workspace.clear();
            VLLStage.resetAll();
            clearConsole();
            closeVLLModal();
        });
    }

    function undoAction() { workspace.undo(false); }
    function redoAction() { workspace.undo(true); }

    function saveWorkspace() {
        if (!workspace) return;
        showVLLModal('Save Program', '<input type="text" id="vllSaveName" placeholder="Enter program name..." value="My Program" style="width:100%;padding:10px 14px;border:2px solid #e0e0e0;border-radius:8px;font-size:14px;font-family:Poppins,sans-serif;outline:none;box-sizing:border-box;" onfocus="this.select()">', function () {
            var name = document.getElementById('vllSaveName').value.trim();
            if (!name) return;
            var xml = Blockly.Xml.workspaceToDom(workspace);
            var xmlText = Blockly.Xml.domToText(xml);
            var saves = JSON.parse(localStorage.getItem('vll_saves') || '{}');
            saves[name] = { xml: xmlText, date: new Date().toISOString(), blockCount: workspace.getAllBlocks(false).length };
            localStorage.setItem('vll_saves', JSON.stringify(saves));
            vllConsole('success', 'Saved as "' + name + '"');
            closeVLLModal();
        });
        setTimeout(function () { var el = document.getElementById('vllSaveName'); if (el) el.focus(); }, 100);
    }

    function loadWorkspace() {
        var saves = JSON.parse(localStorage.getItem('vll_saves') || '{}');
        var names = Object.keys(saves);
        if (names.length === 0) {
            showVLLModal('No Saved Programs', '<p style="color:#8d99ae;text-align:center;margin:0;">You haven\'t saved any programs yet.<br>Build something and click <b>Save</b>!</p>', null);
            return;
        }
        var html = '<div style="display:flex;flex-direction:column;gap:6px;max-height:250px;overflow-y:auto;">';
        names.forEach(function (n, i) {
            var s = saves[n];
            var date = new Date(s.date).toLocaleDateString();
            html += '<div onclick="VLLApp._loadByIndex(' + i + ')" style="padding:10px 14px;border:2px solid #e9ecef;border-radius:8px;cursor:pointer;display:flex;justify-content:space-between;align-items:center;transition:all 0.15s;font-family:Poppins,sans-serif;" onmouseover="this.style.borderColor=\'#4361ee\';this.style.background=\'#f0f4ff\'" onmouseout="this.style.borderColor=\'#e9ecef\';this.style.background=\'#fff\'">';
            html += '<div><div style="font-size:13px;font-weight:600;color:#2b2d42;">' + escapeHTML(n) + '</div>';
            html += '<div style="font-size:11px;color:#8d99ae;">' + s.blockCount + ' blocks &middot; ' + date + '</div></div>';
            html += '<i class="fas fa-chevron-right" style="color:#8d99ae;font-size:12px;"></i></div>';
        });
        html += '</div>';
        showVLLModal('Load Program', html, null);
    }

    // Called by load list items
    function _loadByIndex(idx) {
        var saves = JSON.parse(localStorage.getItem('vll_saves') || '{}');
        var names = Object.keys(saves);
        if (idx < 0 || idx >= names.length) return;
        workspace.clear();
        VLLStage.resetAll();
        var xml = Blockly.utils.xml.textToDom(saves[names[idx]].xml);
        Blockly.Xml.domToWorkspace(xml, workspace);
        vllConsole('success', 'Loaded "' + names[idx] + '"');
        closeVLLModal();
    }

    // Reusable inline modal (no browser prompt/alert)
    function showVLLModal(title, bodyHTML, onConfirm) {
        closeVLLModal();
        var html = '<div id="vllModal" style="position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,0.45);backdrop-filter:blur(3px);z-index:10020;display:flex;align-items:center;justify-content:center;">';
        html += '<div style="background:#fff;border-radius:16px;padding:28px;max-width:400px;width:90%;box-shadow:0 16px 50px rgba(0,0,0,0.2);animation:vllModalIn 0.25s ease;font-family:Poppins,sans-serif;">';
        html += '<h3 style="margin:0 0 16px 0;font-size:17px;font-weight:700;color:#2b2d42;">' + title + '</h3>';
        html += bodyHTML;
        html += '<div style="display:flex;justify-content:flex-end;gap:8px;margin-top:18px;">';
        html += '<button onclick="VLLApp.closeVLLModal()" style="padding:8px 18px;border:none;border-radius:8px;background:#f0f0f0;color:#2b2d42;font-size:13px;font-weight:600;cursor:pointer;font-family:Poppins,sans-serif;">Cancel</button>';
        if (onConfirm) {
            html += '<button id="vllModalConfirm" style="padding:8px 18px;border:none;border-radius:8px;background:linear-gradient(135deg,#4361ee,#3a56d4);color:#fff;font-size:13px;font-weight:600;cursor:pointer;font-family:Poppins,sans-serif;">Save</button>';
        }
        html += '</div></div></div>';
        document.body.insertAdjacentHTML('beforeend', html);
        if (onConfirm) {
            document.getElementById('vllModalConfirm').addEventListener('click', onConfirm);
        }
        // Close on backdrop click
        document.getElementById('vllModal').addEventListener('click', function (e) {
            if (e.target.id === 'vllModal') closeVLLModal();
        });
    }

    function closeVLLModal() {
        var m = document.getElementById('vllModal');
        if (m) m.remove();
    }

    function showWelcome() { document.getElementById('vllWelcomeModal').classList.add('active'); }
    function closeWelcome() { document.getElementById('vllWelcomeModal').classList.remove('active'); }
    function startTutorial() { closeWelcome(); VLLTutorial.start(); }

    // Initialize when section becomes visible
    var initialized = false;

    function tryInit() {
        var section = document.getElementById('block-coding-section');
        if (!section) return;

        var isVisible = section.style.display !== 'none';

        if (isVisible && !initialized) {
            initialized = true;
            console.log('[VLL] Section visible, initializing...');
            initBlockly();
        }
        if (isVisible && workspace) {
            try { Blockly.svgResize(workspace); } catch(e) {}
        }

        // Toggle body class so CSS hides Blockly's overlay divs when not on VLL
        if (isVisible) {
            document.body.classList.add('vll-active');
        } else {
            document.body.classList.remove('vll-active');
        }
    }

    // Watch for section becoming visible via style change
    var observer = new MutationObserver(tryInit);

    function setupObserver() {
        var section = document.getElementById('block-coding-section');
        if (section) {
            observer.observe(section, { attributes: true, attributeFilter: ['style'] });
            tryInit(); // Check immediately in case already visible
        }
    }

    // Setup now if DOM is ready, or wait for DOMContentLoaded
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', setupObserver);
    } else {
        setupObserver();
    }

    return {
        runCode: runCode, stopCode: stopCode, switchTab: switchTab,
        clearConsole: clearConsole, clearWorkspace: clearWorkspace,
        undoAction: undoAction, redoAction: redoAction,
        saveWorkspace: saveWorkspace, loadWorkspace: loadWorkspace,
        _loadByIndex: _loadByIndex, closeVLLModal: closeVLLModal,
        startTutorial: startTutorial, closeWelcome: closeWelcome
    };
})();
</script>
