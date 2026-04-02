<div id="ai-creative-section" class="content-section" style="display: none;">

<style>
/* ===== AI & CREATIVE TOOLS HUB ===== */

/* Hero */
.act-hero {
    background: linear-gradient(135deg, #7209b7 0%, #3a0ca3 40%, #4361ee 100%);
    border-radius: 20px;
    padding: 40px;
    color: #fff;
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
}
.act-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(255,255,255,0.12) 0%, transparent 70%);
    border-radius: 50%;
}
.act-hero::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: 10%;
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
    border-radius: 50%;
}
.act-hero-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 24px;
}
.act-hero-left {
    display: flex;
    align-items: center;
    gap: 24px;
}
.act-hero-icon {
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
.act-hero-info h2 {
    font-size: 26px;
    font-weight: 700;
    margin: 0 0 4px;
}
.act-hero-info p {
    margin: 0;
    opacity: 0.85;
    font-size: 15px;
}
.act-hero-badge {
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
.act-hero-right {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0;
}
.act-tools-count {
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

/* Stats Row */
.act-stats-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}
.act-stat-card {
    background: var(--card-bg, #fff);
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: flex;
    align-items: center;
    gap: 16px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.act-stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(114,9,183,0.12);
}
.act-stat-icon {
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
.act-stat-info h4 {
    font-size: 13px;
    color: var(--text-light, #8d99ae);
    margin: 0 0 4px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.act-stat-info .act-stat-val {
    font-size: 26px;
    font-weight: 700;
    color: var(--text-dark, #2b2d42);
    line-height: 1;
}

/* Tool Cards Grid */
.act-tools-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 24px;
    margin-bottom: 35px;
}

.act-tool-card {
    background: var(--card-bg, #fff);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0,0,0,0.06);
    cursor: pointer;
    transition: all 0.35s ease;
    border: 1px solid transparent;
    position: relative;
}
.act-tool-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 40px rgba(114,9,183,0.15);
    border-color: rgba(114,9,183,0.15);
}

/* Card Banner */
.act-card-banner {
    height: 140px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.act-card-banner::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 40px;
    background: linear-gradient(to top, var(--card-bg, #fff), transparent);
}
.act-card-banner-icon {
    font-size: 56px;
    color: rgba(255,255,255,0.9);
    z-index: 1;
    filter: drop-shadow(0 4px 12px rgba(0,0,0,0.15));
}
.act-card-banner-pattern {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    opacity: 0.15;
    background-image:
        radial-gradient(circle at 20% 30%, rgba(255,255,255,0.4) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, rgba(255,255,255,0.3) 0%, transparent 50%);
}

/* Card Body */
.act-card-body {
    padding: 24px 28px 28px;
}
.act-card-title-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
}
.act-card-title {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-dark, #2b2d42);
    margin: 0;
}
.act-card-badge {
    font-size: 11px;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 10px;
    white-space: nowrap;
}
.act-card-desc {
    font-size: 13.5px;
    color: var(--text-light, #8d99ae);
    line-height: 1.65;
    margin-bottom: 20px;
}

/* Features list */
.act-card-features {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 20px;
}
.act-feature-chip {
    font-size: 11.5px;
    font-weight: 500;
    padding: 5px 12px;
    border-radius: 8px;
    background: #f5f5f5;
    color: #555;
    display: flex;
    align-items: center;
    gap: 5px;
}
.act-feature-chip i {
    font-size: 10px;
}

/* Open button */
.act-card-open {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    padding: 12px;
    border-radius: 12px;
    border: none;
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    transition: all 0.25s ease;
}
.act-card-open:hover {
    filter: brightness(1.1);
    transform: scale(1.02);
}
.act-card-open i {
    transition: transform 0.2s;
}
.act-tool-card:hover .act-card-open i {
    transform: translateX(4px);
}

/* Responsive */
@media (max-width: 900px) {
    .act-hero { padding: 28px; }
    .act-hero-content { flex-direction: column; text-align: center; }
    .act-hero-left { flex-direction: column; }
    .act-tools-grid { grid-template-columns: 1fr; }
}
@media (max-width: 560px) {
    .act-stats-row { grid-template-columns: repeat(2, 1fr); }
    .act-card-banner { height: 110px; }
}
</style>

<!-- ========== HERO BANNER ========== -->
<div class="act-hero">
    <div class="act-hero-content">
        <div class="act-hero-left">
            <div class="act-hero-icon">
                <i class="fas fa-rocket"></i>
            </div>
            <div class="act-hero-info">
                <h2>AI & Creative Tools</h2>
                <p>Code, draw, experiment, and build with powerful creative tools</p>
                <div class="act-hero-badge">
                    <i class="fas fa-magic"></i>
                    4 Tools Available &mdash; Pick your playground
                </div>
            </div>
        </div>
        <div class="act-hero-right">
            <div class="act-tools-count">
                <i class="fas fa-toolbox"></i>
                4 Tools
            </div>
        </div>
    </div>
</div>

<!-- ========== QUICK STATS ========== -->
<div class="act-stats-row">
    <div class="act-stat-card">
        <div class="act-stat-icon" style="background: linear-gradient(135deg, #f72585, #e63946);">
            <i class="fas fa-code"></i>
        </div>
        <div class="act-stat-info">
            <h4>Cypher</h4>
            <div class="act-stat-val">Code</div>
        </div>
    </div>
    <div class="act-stat-card">
        <div class="act-stat-icon" style="background: linear-gradient(135deg, #3a0ca3, #4361ee);">
            <i class="fas fa-moon"></i>
        </div>
        <div class="act-stat-info">
            <h4>Somnus</h4>
            <div class="act-stat-val">Draw</div>
        </div>
    </div>
    <div class="act-stat-card">
        <div class="act-stat-icon" style="background: linear-gradient(135deg, #0f9b8e, #06d6a0);">
            <i class="fas fa-brain"></i>
        </div>
        <div class="act-stat-info">
            <h4>Neuralab</h4>
            <div class="act-stat-val">Explore</div>
        </div>
    </div>
    <div class="act-stat-card">
        <div class="act-stat-icon" style="background: linear-gradient(135deg, #ff6b6b, #ffd93d);">
            <i class="fas fa-puzzle-piece"></i>
        </div>
        <div class="act-stat-info">
            <h4>Visual Lab</h4>
            <div class="act-stat-val">Build</div>
        </div>
    </div>
</div>

<!-- ========== TOOL CARDS ========== -->
<div class="act-tools-grid">

    <!-- Cypher -->
    <div class="act-tool-card" data-act-navigate="cypher-section">
        <div class="act-card-banner" style="background: linear-gradient(135deg, #f72585, #b5179e, #7209b7);">
            <div class="act-card-banner-pattern"></div>
            <div class="act-card-banner-icon"><i class="fas fa-code"></i></div>
        </div>
        <div class="act-card-body">
            <div class="act-card-title-row">
                <h3 class="act-card-title">Cypher</h3>
                <span class="act-card-badge" style="background: #fce4ec; color: #f72585;">Code Editor</span>
            </div>
            <div class="act-card-desc">Write, run, and test code in multiple programming languages. Built-in Monaco editor with syntax highlighting, themes, and instant output.</div>
            <div class="act-card-features">
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#f72585;"></i> Multi-language</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#f72585;"></i> Syntax Highlighting</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#f72585;"></i> Dark/Light Themes</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#f72585;"></i> Export Code</span>
            </div>
            <button class="act-card-open" style="background: linear-gradient(135deg, #f72585, #b5179e);">
                Open Cypher <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <!-- Somnus -->
    <div class="act-tool-card" data-act-navigate="somnus-section">
        <div class="act-card-banner" style="background: linear-gradient(135deg, #3a0ca3, #4361ee, #4cc9f0);">
            <div class="act-card-banner-pattern"></div>
            <div class="act-card-banner-icon"><i class="fas fa-moon"></i></div>
        </div>
        <div class="act-card-body">
            <div class="act-card-title-row">
                <h3 class="act-card-title">Somnus</h3>
                <span class="act-card-badge" style="background: #ede7f6; color: #3a0ca3;">Canvas</span>
            </div>
            <div class="act-card-desc">A creative digital canvas for drawing, sketching, and visualizing ideas. Freehand drawing with multiple tools, colors, and autosave support.</div>
            <div class="act-card-features">
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#3a0ca3;"></i> Freehand Draw</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#3a0ca3;"></i> Shape Tools</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#3a0ca3;"></i> Text Support</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#3a0ca3;"></i> Autosave</span>
            </div>
            <button class="act-card-open" style="background: linear-gradient(135deg, #3a0ca3, #4361ee);">
                Open Somnus <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <!-- Neuralab -->
    <div class="act-tool-card" data-act-navigate="neuralab-section">
        <div class="act-card-banner" style="background: linear-gradient(135deg, #0f9b8e, #06d6a0, #00f5d4);">
            <div class="act-card-banner-pattern"></div>
            <div class="act-card-banner-icon"><i class="fas fa-brain"></i></div>
        </div>
        <div class="act-card-body">
            <div class="act-card-title-row">
                <h3 class="act-card-title">Neuralab</h3>
                <span class="act-card-badge" style="background: #e8faf4; color: #0f9b8e;">Experiments</span>
            </div>
            <div class="act-card-desc">Explore interactive science experiments and simulations. Virtual lab environment with physics, chemistry, and biology experiments.</div>
            <div class="act-card-features">
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#0f9b8e;"></i> Interactive</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#0f9b8e;"></i> Physics Sims</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#0f9b8e;"></i> Chemistry Lab</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#0f9b8e;"></i> Visual Output</span>
            </div>
            <button class="act-card-open" style="background: linear-gradient(135deg, #0f9b8e, #06d6a0);">
                Open Neuralab <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <!-- Visual Lab -->
    <div class="act-tool-card" data-act-navigate="block-coding-section">
        <div class="act-card-banner" style="background: linear-gradient(135deg, #ff6b6b, #ffd93d, #06d6a0);">
            <div class="act-card-banner-pattern"></div>
            <div class="act-card-banner-icon"><i class="fas fa-puzzle-piece"></i></div>
        </div>
        <div class="act-card-body">
            <div class="act-card-title-row">
                <h3 class="act-card-title">Visual Lab</h3>
                <span class="act-card-badge" style="background: #fff3e0; color: #ff6b6b;">Block Coding</span>
            </div>
            <div class="act-card-desc">Learn programming through visual block-based coding. Drag, drop, and snap logic blocks together to create programs without typing code.</div>
            <div class="act-card-features">
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#ff6b6b;"></i> Drag & Drop</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#ff6b6b;"></i> Visual Logic</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#ff6b6b;"></i> Beginner Friendly</span>
                <span class="act-feature-chip"><i class="fas fa-check" style="color:#ff6b6b;"></i> Instant Preview</span>
            </div>
            <button class="act-card-open" style="background: linear-gradient(135deg, #ff6b6b, #ffd93d);">
                Open Visual Lab <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

</div>

<!-- ========== JAVASCRIPT ========== -->
<script>
(function() {
    // Navigate to tool section on card click
    document.querySelectorAll('[data-act-navigate]').forEach(card => {
        card.addEventListener('click', function() {
            const sectionId = this.getAttribute('data-act-navigate');
            // Use showSection from main.js (it's in the global closure but we can trigger via menu item click)
            const menuItem = document.querySelector(`.menu-item[data-section="${sectionId}"]`);
            if (menuItem) {
                menuItem.click();
            } else {
                // Fallback: directly show section
                document.querySelectorAll('.content-section').forEach(s => {
                    s.style.display = 'none';
                    s.classList.remove('active-section');
                });
                const target = document.getElementById(sectionId);
                if (target) {
                    target.style.display = 'block';
                    target.classList.add('active-section');
                }
            }
        });
    });
})();
</script>

</div>
