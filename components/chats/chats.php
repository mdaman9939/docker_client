<!-- Chats Section -->
<div id="chats-section" class="content-section" style="display: none;">

<style>
/* ===== NEURAEDU CHAT THEME - AI WORLD COLORS ===== */
:root {
    --wa-teal-dark: #129695;
    --wa-teal: #0ed3a2;
    --wa-teal-light: #3f66e6;
    --wa-light-green: #e8edff;
    --wa-chat-bg: #f8f9fa;
    --wa-sidebar-bg: #ffffff;
    --wa-header-bg: linear-gradient(135deg, #3f66e6 0%, #0ed3a2 50%, #129695 100%);
    --wa-header-bg-solid: #3f66e6;
    --wa-msg-in: #ffffff;
    --wa-msg-out: #e8edff;
    --wa-msg-out-deeper: #dce3ff;
    --wa-time-color: #8d99ae;
    --wa-bubble-shadow: 0 1px 3px rgba(63,102,230,0.08);
    --wa-unread-bg: #3f66e6;
    --wa-border: #e9ecef;
    --wa-panel-bg: #f8f9fa;
    --wa-search-bg: #f1f3f5;
    --wa-hover: #f1f3f5;
    --wa-active: #e8edff;
}

.chat-container {
    display: flex;
    height: calc(100vh - 140px);
    min-height: 400px;
    background: var(--wa-panel-bg);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    position: relative;
}

/* ===== SIDEBAR ===== */
.chat-sidebar {
    width: 360px;
    min-width: 360px;
    background: var(--wa-sidebar-bg);
    border-right: 1px solid var(--wa-border);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    z-index: 10;
}

.chat-sidebar-header {
    padding: 12px 16px;
    background: var(--wa-header-bg);
    display: flex;
    align-items: center;
    justify-content: space-between;
    min-height: 56px;
    border-bottom: 1px solid rgba(255,255,255,0.07);
}

.chat-sidebar-header h3 {
    font-size: 18px;
    font-weight: 600;
    color: #fff;
    margin: 0;
    letter-spacing: 0.3px;
}

.chat-create-group {
    padding: 8px 14px;
    background: rgba(255,255,255,0.15);
    color: #fff;
    border: none;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: background 0.2s;
    white-space: nowrap;
}

.chat-create-group:hover {
    background: rgba(255,255,255,0.25);
}

.chat-search-groups {
    padding: 8px 12px;
    background: var(--wa-sidebar-bg);
    position: relative;
    border-bottom: 1px solid var(--wa-border);
}

.chat-search-groups input {
    width: 100%;
    padding: 8px 12px 8px 36px;
    background: var(--wa-search-bg);
    border: none;
    border-radius: 8px;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    color: #3b4a54;
    box-sizing: border-box;
}

.chat-search-groups input:focus {
    background: #fff;
    box-shadow: 0 0 0 2px rgba(63,102,230,0.15);
}

.chat-search-groups input::placeholder {
    color: #8696a0;
}

.chat-search-groups i {
    position: absolute;
    left: 24px;
    top: 50%;
    transform: translateY(-50%);
    color: #8696a0;
    font-size: 13px;
}

.chat-groups-list {
    flex: 1;
    overflow-y: auto;
    background: var(--wa-sidebar-bg);
}

.chat-groups-list::-webkit-scrollbar {
    width: 6px;
}

.chat-groups-list::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 3px;
}

.chat-group-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 12px 16px;
    cursor: pointer;
    transition: background 0.15s;
    border-bottom: 1px solid #f0f2f5;
    position: relative;
}

.chat-group-item:hover {
    background: var(--wa-hover);
}

.chat-group-item.active {
    background: var(--wa-active);
}

.chat-group-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: #fff;
    flex-shrink: 0;
}

.chat-group-info {
    flex: 1;
    min-width: 0;
}

.chat-group-name {
    font-size: 16px;
    font-weight: 500;
    color: #2b2d42;
    margin: 0 0 2px;
    display: flex;
    align-items: center;
    gap: 6px;
}

.chat-group-last-msg {
    font-size: 13px;
    color: #667781;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 200px;
}

.chat-group-meta {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 4px;
    flex-shrink: 0;
}

.chat-group-time {
    font-size: 11px;
    color: #667781;
}

.chat-group-badge {
    background: var(--wa-unread-bg);
    color: #fff;
    font-size: 11px;
    font-weight: 500;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.chat-online-badge {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #0ed3a2;
    display: inline-block;
}

/* ===== MAIN CHAT AREA ===== */
.chat-main {
    flex: 1;
    display: flex;
    flex-direction: column;
    background: var(--wa-chat-bg);
    overflow: hidden;
    min-width: 0;
    position: relative;
}

.chat-main-header {
    padding: 10px 16px;
    background: var(--wa-header-bg);
    display: flex;
    align-items: center;
    justify-content: space-between;
    min-height: 56px;
    box-shadow: 0 2px 8px rgba(35, 63, 223, 0.15);
}

.chat-header-left {
    display: flex;
    align-items: center;
    gap: 12px;
    flex: 1;
    min-width: 0;
}

.chat-back-btn {
    display: none;
    background: none;
    border: none;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    padding: 4px;
    margin-right: 4px;
}

.chat-header-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 16px;
    flex-shrink: 0;
}

.chat-group-details {
    min-width: 0;
}

.chat-group-details h4 {
    font-size: 16px;
    font-weight: 500;
    color: #fff;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 6px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.chat-group-details p {
    font-size: 12px;
    color: rgba(255,255,255,0.7);
    margin: 0;
}

.chat-group-actions {
    display: flex;
    gap: 4px;
}

.chat-action-btn {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    border: none;
    background: transparent;
    cursor: pointer;
    color: rgba(255,255,255,0.85);
    font-size: 15px;
    transition: background 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.chat-action-btn:hover {
    background: rgba(255,255,255,0.1);
    color: #fff;
}

/* ===== MESSAGES AREA ===== */
.chat-messages {
    flex: 1;
    justify-content: flex-start;
    overflow-y: auto;
    padding: 16px 0px;
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.chat-messages::-webkit-scrollbar {
    width: 0;
    display: none;
}

.chat-messages {
    -ms-overflow-style: none;
    scrollbar-width: none;
}

/* ===== MESSAGE BUBBLES ===== */
.chat-message {
    display: flex;
    gap: 8px;
    animation: fadeIn 0.2s ease;
    margin-bottom: 4px;
    align-items: flex-start;
    width: 100%;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(6px); }
    to { opacity: 1; transform: translateY(0); }
}

.chat-message-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 600;
    color: #fff;
    flex-shrink: 0;
    background-size: cover;
    background-position: center;
}

.chat-message-avatar img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
}

.chat-message-content {
    max-width: 65%;
    min-width: 120px;
    display: flex;
    flex-direction: column;
}

.chat-message-sender {
    font-size: 12px;
    font-weight: 600;
    color: #3f66e6;
    margin-bottom: 2px;
    padding-left: 4px;
}

.chat-message-text {
    padding: 6px 8px 8px 9px;
    font-size: 14px;
    line-height: 1.35;
    color: #2b2d42;
    box-shadow: var(--wa-bubble-shadow);
    word-wrap: break-word;
    position: relative;
}

.chat-message-file {
    background: #f0f2f5;
    padding: 8px 12px;
    border-radius: 8px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 12px;
    margin-top: 4px;
}

.chat-message-file a {
    color: #3f66e6;
    text-decoration: none;
    font-weight: 500;
}

.chat-message-file a:hover {
    text-decoration: underline;
}

.chat-message-time {
    font-size: 11px;
    color: var(--wa-time-color);
    margin-top: 0;
    display: inline-flex;
    align-items: center;
    gap: 3px;
    float: right;
    margin-left: 8px;
    position: relative;
    top: 4px;
}

.chat-message-time .message-status {
    color: #0ed3a2;
    font-size: 13px;
    letter-spacing: -2px;
}

.chat-message-reactions {
    display: flex;
    gap: 4px;
    margin-top: 2px;
    flex-wrap: wrap;
}

.chat-message-reaction {
    background: #fff;
    padding: 2px 8px;
    border-radius: 12px;
    font-size: 12px;
    cursor: pointer;
    transition: background 0.15s;
    box-shadow: 0 1px 2px rgba(0,0,0,0.1);
    border: 1px solid #e9edef;
}

.chat-message-reaction:hover {
    background: #f0f2f5;
}

/* ===== RECEIVED MESSAGES - LEFT ALIGNED ===== */
.chat-message:not(.own) {
    justify-content: flex-start;
    margin-left: 0;
    padding-left: 4px;
    padding-right: 60px;
}

.chat-message:not(.own) .chat-message-avatar {
    display: flex;
    margin-right: 8px;
}

.chat-message:not(.own) .chat-message-content {
    align-items: flex-start;
}

.chat-message:not(.own) .chat-message-sender {
    display: block;
}

.chat-message:not(.own) .chat-message-text {
    background: var(--wa-msg-in);
    border-radius: 8px;
    border-top-left-radius: 0;
}

.chat-message:not(.own) .chat-message-time {
    color: #667781;
}

.chat-message:not(.own) .chat-message-reactions {
    justify-content: flex-start;
    padding-left: 4px;
}

/* ===== OWN MESSAGES - RIGHT ALIGNED ===== */
.chat-message.own {
    justify-content: flex-end;
    padding-right: 4px;
}

.chat-message.own .chat-message-avatar {
    display: none;
}

.chat-message.own .chat-message-content {
    align-items: flex-end;
    margin-left: auto;
    margin-right: 0;
    max-width: 70%;
}

.chat-message.own .chat-message-sender {
    display: none;
}

.chat-message.own .chat-message-text {
    background: linear-gradient(135deg, #e8edff, #dce3ff);
    border-radius: 8px;
    border-top-right-radius: 0;
    text-align: left;
}

.chat-message.own .chat-message-time {
    color: #667781;
}

.chat-message.own .chat-message-reactions {
    justify-content: flex-end;
    padding-right: 4px;
}

/* ===== TYPING INDICATOR ===== */
.chat-typing {
    padding: 6px 20px;
    font-size: 12px;
    color: #667781;
    display: flex;
    align-items: center;
    gap: 8px;
    z-index: 1;
}

.chat-typing-dots {
    display: flex;
    gap: 3px;
}

.chat-typing-dots span {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #0ed3a2;
    animation: typingBounce 1.4s infinite;
}

.chat-typing-dots span:nth-child(2) { animation-delay: 0.2s; }
.chat-typing-dots span:nth-child(3) { animation-delay: 0.4s; }

@keyframes typingBounce {
    0%, 60%, 100% { transform: translateY(0); }
    30% { transform: translateY(-4px); }
}

/* ===== INPUT AREA ===== */
.chat-input-area {
    padding: 8px 10px;
    background: #ffffff;
    border-top: 1px solid #e9ecef;
    z-index: 1;
}

.chat-input-wrapper {
    display: flex;
    gap: 8px;
    align-items: flex-end;
}

.chat-input-wrapper textarea {
    flex: 1;
    padding: 10px 14px;
    background: #f1f3f5;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    resize: none;
    outline: none;
    max-height: 100px;
    min-height: 42px;
    color: #2b2d42;
    box-shadow: none;
    box-sizing: border-box;
    transition: border-color 0.2s, background 0.2s;
}

.chat-input-wrapper textarea:focus {
    background: #fff;
    border-color: #3f66e6;
}

.chat-input-wrapper textarea::placeholder {
    color: #8696a0;
}

.chat-attach-btn {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    border: none;
    background: transparent;
    cursor: pointer;
    font-size: 20px;
    color: #8696a0;
    transition: color 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.chat-attach-btn:hover {
    color: #3f66e6;
}

.chat-send-btn {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.2s, transform 0.15s;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.chat-send-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(63,102,230,0.3);
}

.chat-send-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    transform: none;
}

/* ===== MODALS ===== */
.chat-modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.6);
    z-index: 10000;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(2px);
}

.chat-modal-overlay.open {
    display: flex;
}

.chat-modal {
    background: #fff;
    border-radius: 6px;
    padding: 24px;
    max-width: 500px;
    width: 92%;
    max-height: 80vh;
    overflow-y: auto;
    box-shadow: 0 16px 40px rgba(0,0,0,0.2);
}

.chat-modal h3 {
    font-size: 18px;
    font-weight: 600;
    color: #111b21;
    margin: 0 0 4px;
}

.chat-modal p {
    font-size: 13px;
    color: #667781;
    margin: 0 0 20px;
}

.chat-modal input,
.chat-modal select,
.chat-modal textarea {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #e9edef;
    border-radius: 8px;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 12px;
    outline: none;
    box-sizing: border-box;
    color: #111b21;
    background: #fff;
    transition: border-color 0.2s;
}

.chat-modal input:focus,
.chat-modal select:focus,
.chat-modal textarea:focus {
    border-color: #3f66e6;
}

.chat-modal-actions {
    display: flex;
    gap: 10px;
    justify-content: flex-end;
    margin-top: 16px;
}

.chat-modal-cancel {
    padding: 10px 20px;
    border-radius: 6px;
    border: none;
    background: #f0f2f5;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    color: #667781;
    transition: background 0.2s;
}

.chat-modal-cancel:hover {
    background: #e9edef;
}

.chat-modal-create {
    padding: 10px 24px;
    border-radius: 6px;
    background: linear-gradient(135deg, #3f66e6, #0ed3a2);
    color: #fff;
    border: none;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    transition: background 0.2s;
}

.chat-modal-create:hover {
    transform: translateY(-1px);
    box-shadow: 0 2px 8px rgba(63,102,230,0.3);
}

/* ===== EMPTY STATE ===== */
.chat-empty {
    text-align: center;
    padding: 60px 20px;
    color: #667781;
}

.chat-empty i {
    font-size: 56px;
    opacity: 0.2;
    margin-bottom: 16px;
    color: #3f66e6;
}

.chat-empty h4 {
    font-size: 17px;
    font-weight: 500;
    color: #41525d;
    margin: 0 0 6px;
}

.chat-empty p {
    font-size: 13px;
    color: #8696a0;
    margin: 0;
}

/* ===== LOADING ===== */
.chat-loading {
    text-align: center;
    padding: 40px;
    color: #8696a0;
}

.chat-loading i {
    font-size: 28px;
    color: #3f66e6;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* ===== MEMBER ITEM IN MODAL ===== */
.wa-member-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 0;
    border-bottom: 1px solid #f0f2f5;
}

.wa-member-item:last-child {
    border-bottom: none;
}

.wa-member-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.wa-member-info {
    flex: 1;
}

.wa-member-name {
    font-weight: 500;
    font-size: 14px;
    color: #111b21;
}

.wa-member-status {
    font-size: 12px;
}

.wa-member-role {
    font-size: 11px;
    color: #8696a0;
    background: #f0f2f5;
    padding: 2px 8px;
    border-radius: 4px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .chat-container {
        height: calc(100vh - 70px);
        border-radius: 0;
    }

    .chat-sidebar {
        width: 100%;
        min-width: 100%;
        position: absolute;
        inset: 0;
        z-index: 20;
        transition: transform 0.3s ease;
    }

    .chat-sidebar.hidden {
        transform: translateX(-100%);
    }

    .chat-back-btn {
        display: flex;
    }

    .chat-main {
        width: 100%;
    }

    .chat-message-content {
        max-width: 85%;
    }
}
</style>

<div class="chat-container">
    <!-- Sidebar -->
    <div class="chat-sidebar" id="chatSidebar">
        <div class="chat-sidebar-header">
            <h3>Chats</h3>
            <button class="chat-create-group" id="createGroupBtn">
                <i class="fas fa-plus"></i> New Group
            </button>
        </div>
        <div class="chat-search-groups">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search groups..." id="groupSearchInput">
        </div>
        <div class="chat-groups-list" id="groupsList">
            <div class="chat-loading"><i class="fas fa-spinner"></i></div>
        </div>
    </div>

    <!-- Main Chat Area -->
    <div class="chat-main" id="chatMain">
        <div class="chat-main-header">
            <div class="chat-header-left">
                <button class="chat-back-btn" id="chatBackBtn" title="Back">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <div class="chat-header-avatar">
                    <i class="fas fa-users"></i>
                </div>
                <div class="chat-group-details">
                    <h4 id="currentGroupName">
                        Select a group
                        <span id="onlineBadge" style="display: none;"></span>
                    </h4>
                    <p id="currentGroupInfo">Choose a group to start chatting</p>
                </div>
            </div>
            <div class="chat-group-actions">
                <button class="chat-action-btn" id="groupInfoBtn" title="Group Info">
                    <i class="fas fa-info-circle"></i>
                </button>
                <button class="chat-action-btn" id="groupMembersBtn" title="Members">
                    <i class="fas fa-user-friends"></i>
                </button>
            </div>
        </div>

        <div class="chat-messages" id="chatMessages">
            <div class="chat-empty">
                <i class="fas fa-comments"></i>
                <h4>No group selected</h4>
                <p>Select or create a study group to start chatting</p>
            </div>
        </div>

        <div class="chat-typing" id="typingIndicator" style="display: none;">
            <div class="chat-typing-dots">
                <span></span><span></span><span></span>
            </div>
            <span id="typingText">Someone is typing...</span>
        </div>

        <div class="chat-input-area">
            <div class="chat-input-wrapper">
                <button class="chat-attach-btn" id="attachFileBtn" title="Attach file">
                    <i class="fas fa-paperclip"></i>
                </button>
                <textarea id="messageInput" rows="1" placeholder="Type a message" disabled></textarea>
                <button class="chat-send-btn" id="sendMessageBtn" disabled>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
            <input type="file" id="fileInput" style="display: none;">
        </div>
    </div>
</div>

<!-- Create Group Modal -->
<div class="chat-modal-overlay" id="createGroupModal">
    <div class="chat-modal">
        <h3>Create Study Group</h3>
        <p>Create a group to study together, share resources, and discuss topics</p>
        <input type="text" id="groupNameInput" placeholder="Group Name (e.g., Math Study Group)">
        <select id="groupTypeInput">
            <option value="subject">Subject Group</option>
            <option value="study_group">Study Group</option>
        </select>
        <input type="text" id="groupSubjectInput" placeholder="Subject (e.g., Mathematics, Science)">
        <textarea id="groupDescInput" rows="3" placeholder="Group Description (optional)"></textarea>
        <div class="chat-modal-actions">
            <button class="chat-modal-cancel" id="closeGroupModalBtn">Cancel</button>
            <button class="chat-modal-create" id="confirmCreateGroupBtn">Create Group</button>
        </div>
    </div>
</div>

<!-- Members Modal -->
<div class="chat-modal-overlay" id="membersModal">
    <div class="chat-modal">
        <h3>Group Members</h3>
        <p id="membersGroupName"></p>
        <div id="membersList" style="max-height: 300px; overflow-y: auto;"></div>
        <div class="chat-modal-actions">
            <button class="chat-modal-cancel" id="closeMembersModalBtn">Close</button>
        </div>
    </div>
</div>

<script>
(function() {
    'use strict';

    // API Configuration
    const API_BASE_URL = CONFIG.API_BASE_URL + '/api';
    let ACCESS_TOKEN = localStorage.getItem('access_token');

    // Current user
    let CURRENT_USER = {
        id: null,
        name: '',
        email: '',
        role: '',
        class: null,
        avatar: ''
    };

    // Chat state
    let currentRoomId = null;
    let ws = null;
    let typingTimeout = null;
    let isLoadingMessages = false;
    let typingUsers = new Set();

    // DOM Elements
    const groupsListEl = document.getElementById('groupsList');
    const groupSearchInput = document.getElementById('groupSearchInput');
    const chatMessagesEl = document.getElementById('chatMessages');
    const messageInput = document.getElementById('messageInput');
    const sendMessageBtn = document.getElementById('sendMessageBtn');
    const attachFileBtn = document.getElementById('attachFileBtn');
    const fileInput = document.getElementById('fileInput');
    const currentGroupNameEl = document.getElementById('currentGroupName');
    const currentGroupInfoEl = document.getElementById('currentGroupInfo');
    const typingIndicator = document.getElementById('typingIndicator');
    const typingText = document.getElementById('typingText');
    const onlineBadge = document.getElementById('onlineBadge');
    const chatSidebar = document.getElementById('chatSidebar');
    const chatBackBtn = document.getElementById('chatBackBtn');

    // Modal elements
    const createGroupModal = document.getElementById('createGroupModal');
    const membersModal = document.getElementById('membersModal');
    const groupNameInput = document.getElementById('groupNameInput');
    const groupTypeInput = document.getElementById('groupTypeInput');
    const groupSubjectInput = document.getElementById('groupSubjectInput');
    const groupDescInput = document.getElementById('groupDescInput');

    // ======================
    // MOBILE SIDEBAR TOGGLE
    // ======================

    function isMobile() {
        return window.innerWidth <= 768;
    }

    function showChat() {
        if (isMobile()) {
            chatSidebar.classList.add('hidden');
        }
    }

    function showSidebar() {
        if (isMobile()) {
            chatSidebar.classList.remove('hidden');
        }
    }

    chatBackBtn.addEventListener('click', showSidebar);

    window.addEventListener('resize', () => {
        if (!isMobile()) {
            chatSidebar.classList.remove('hidden');
        }
    });

    // ======================
    // HELPER FUNCTIONS
    // ======================

    function getAuthHeaders() {
        return {
            'Authorization': `Bearer ${ACCESS_TOKEN}`,
            'Content-Type': 'application/json'
        };
    }

    // ✅ FIXED: Better error handling - NO AUTO-LOGOUT
    async function apiCall(method, url, data = null, isFormData = false) {
        const headers = {
            'Authorization': `Bearer ${ACCESS_TOKEN}`
        };

        if (!isFormData) {
            headers['Content-Type'] = 'application/json';
        }

        const options = {
            method: method,
            headers: headers
        };

        if (data) {
            if (isFormData) {
                options.body = data;
            } else {
                options.body = JSON.stringify(data);
            }
        }

        try {
            const response = await fetch(`${API_BASE_URL}${url}`, options);
            
            // ✅ FIX: Don't auto-logout on 401, just return error
            if (response.status === 401) {
                console.warn('Token expired or invalid');
                return { success: false, message: 'Session expired' };
            }
            
            // ✅ FIX: Handle 403/404 gracefully
            if (response.status === 403 || response.status === 404) {
                console.warn(`API ${url} returned ${response.status}`);
                return { success: false, message: 'Not available', data: [] };
            }

            const result = await response.json();

            if (!response.ok) {
                return { success: false, message: result.detail || result.message || 'API Error', data: [] };
            }

            return result;
        } catch (error) {
            console.error('API Error:', error);
            return { success: false, message: error.message, data: [] };
        }
    }

    // ======================
    // USER AUTHENTICATION
    // ======================

    async function loadCurrentUser() {
        try {
            const result = await apiCall('GET', '/me');
            if (result.success && result.data.user) {
                const user = result.data.user;
                CURRENT_USER = {
                    id: user.id,
                    name: user.full_name,
                    email: user.email,
                    role: user.role,
                    class: user.class,
                    avatar: user.profile_photo || `https://ui-avatars.com/api/?name=${encodeURIComponent(user.full_name)}&background=3f66e6&color=fff&bold=true`
                };

                console.log('User loaded:', CURRENT_USER);
                return true;
            }
        } catch (error) {
            console.error('Failed to load user:', error);
        }
        return false;
    }

    // ======================
    // ROOM MANAGEMENT
    // ======================

    async function loadRooms() {
        try {
            groupsListEl.innerHTML = '<div class="chat-loading"><i class="fas fa-spinner"></i></div>';

            const result = await apiCall('GET', '/chats/rooms');

            // ✅ FIX: Handle gracefully if API not available
            if (!result.success || !result.rooms) {
                groupsListEl.innerHTML = '<div class="chat-empty"><p>Chat feature will be available soon</p></div>';
                return;
            }

            const filteredRooms = result.rooms;
            renderRooms(filteredRooms);
        } catch (error) {
            console.error('Failed to load rooms:', error);
            groupsListEl.innerHTML = '<div class="chat-empty"><p>Unable to load groups</p></div>';
        }
    }

    function renderRooms(rooms) {
        const searchTerm = groupSearchInput.value.toLowerCase();
        const filteredRooms = rooms.filter(room =>
            room.room_name.toLowerCase().includes(searchTerm)
        );

        if (filteredRooms.length === 0) {
            groupsListEl.innerHTML = '<div class="chat-empty"><p>No groups found</p></div>';
            return;
        }

        groupsListEl.innerHTML = filteredRooms.map(room => `
            <div class="chat-group-item ${currentRoomId === room.id ? 'active' : ''}" data-room-id="${room.id}">
                <div class="chat-group-avatar">
                    <i class="fas ${getRoomIcon(room.room_type)}"></i>
                </div>
                <div class="chat-group-info">
                    <div class="chat-group-name">
                        ${escapeHtml(room.room_name)}
                        ${room.online_count > 0 ? `<span class="chat-online-badge" title="${room.online_count} online"></span>` : ''}
                    </div>
                    <div class="chat-group-last-msg">${escapeHtml(room.last_message || 'No messages yet')}</div>
                </div>
                <div class="chat-group-meta">
                    <div class="chat-group-time">${formatTime(room.last_message_time)}</div>
                    ${room.unread_count > 0 ? `<div class="chat-group-badge">${room.unread_count}</div>` : ''}
                </div>
            </div>
        `).join('');

        // Add click handlers
        document.querySelectorAll('.chat-group-item').forEach(el => {
            el.addEventListener('click', () => {
                const roomId = parseInt(el.dataset.roomId);
                switchRoom(roomId);
            });
        });
    }

    function getRoomIcon(roomType) {
        switch(roomType) {
            case 'class': return 'fa-school';
            case 'subject': return 'fa-book';
            case 'study_group': return 'fa-users';
            case 'private': return 'fa-user';
            default: return 'fa-comments';
        }
    }

    // ======================
    // ROOM SWITCHING
    // ======================

    async function switchRoom(roomId) {
        if (currentRoomId === roomId) return;

        // Disconnect from previous room
        if (ws) {
            ws.close();
            ws = null;
        }

        currentRoomId = roomId;

        // On mobile, show chat area
        showChat();

        // Update UI
        document.querySelectorAll('.chat-group-item').forEach(el => {
            if (parseInt(el.dataset.roomId) === roomId) {
                el.classList.add('active');
            } else {
                el.classList.remove('active');
            }
        });

        // Load room details
        await loadRoomDetails(roomId);

        // Load messages
        await loadMessages(roomId);

        // Connect WebSocket
        connectWebSocket(roomId);

        // Enable input
        messageInput.disabled = false;
        sendMessageBtn.disabled = false;
    }

    async function loadRoomDetails(roomId) {
        try {
            const result = await apiCall('GET', `/chats/rooms/${roomId}`);
            if (result.success) {
                const room = result.room;
                const members = result.members || [];
                const onlineCount = members.filter(m => m.status === 'online').length;

                currentGroupNameEl.innerHTML = `
                    ${escapeHtml(room.room_name)}
                    ${onlineCount > 0 ? `<span class="chat-online-badge" title="${onlineCount} online"></span>` : ''}
                `;
                currentGroupInfoEl.innerHTML = `${members.length} members &bull; ${room.room_type} group`;
            }
        } catch (error) {
            console.error('Failed to load room details:', error);
        }
    }

    async function loadMessages(roomId, beforeId = null) {
        if (isLoadingMessages) return;
        isLoadingMessages = true;

        try {
            let url = `/chats/rooms/${roomId}/messages?limit=50`;
            if (beforeId) {
                url += `&before_id=${beforeId}`;
            }

            const result = await apiCall('GET', url);

            if (result.success && result.messages) {
                if (!beforeId) {
                    renderMessages(result.messages);
                } else {
                    prependMessages(result.messages);
                }
            }
        } catch (error) {
            console.error('Failed to load messages:', error);
        } finally {
            isLoadingMessages = false;
        }
    }

    function renderMessages(messages) {
        if (!messages || messages.length === 0) {
            chatMessagesEl.innerHTML = '<div class="chat-empty"><i class="fas fa-comment-dots"></i><h4>No messages yet</h4><p>Be the first to send a message!</p></div>';
            return;
        }

        chatMessagesEl.innerHTML = messages.reverse().map(msg => renderMessage(msg)).join('');
        chatMessagesEl.scrollTop = chatMessagesEl.scrollHeight;

        attachReactionHandlers();
    }

    function prependMessages(messages) {
        const currentScrollHeight = chatMessagesEl.scrollHeight;
        const currentScrollTop = chatMessagesEl.scrollTop;

        const newMessagesHtml = messages.reverse().map(msg => renderMessage(msg)).join('');
        chatMessagesEl.insertAdjacentHTML('afterbegin', newMessagesHtml);

        const newScrollHeight = chatMessagesEl.scrollHeight;
        chatMessagesEl.scrollTop = currentScrollTop + (newScrollHeight - currentScrollHeight);

        attachReactionHandlers();
    }

    function renderMessage(msg) {
        const isOwn = String(msg.user_id) === String(CURRENT_USER.id);
        const avatarUrl = msg.user_avatar || `https://ui-avatars.com/api/?name=${encodeURIComponent(msg.user_name)}&background=3f66e6&color=fff&bold=true`;

        return `
            <div class="chat-message ${isOwn ? 'own' : ''}" data-message-id="${msg.id}">
                <div class="chat-message-avatar">
                    <img src="${avatarUrl}" alt="${escapeHtml(msg.user_name)}">
                </div>
                <div class="chat-message-content">
                    <div class="chat-message-sender">${escapeHtml(msg.user_name)}</div>
                    <div class="chat-message-text">
                        ${escapeHtml(msg.message)}
                        <span class="chat-message-time">
                            ${formatTime(msg.created_at)}
                            ${isOwn ? `<span class="message-status">✓✓</span>` : ''}
                        </span>
                    </div>
                    ${msg.file_url ? `
                        <div class="chat-message-file">
                            <i class="fas ${getFileIcon(msg.file_type)}"></i>
                            <a href="${msg.file_url}" target="_blank">Download file</a>
                        </div>
                    ` : ''}
                    <div class="chat-message-reactions" id="reactions-${msg.id}">
                        ${renderReactions(msg.reactions)}
                    </div>
                </div>
            </div>
        `;
    }

    function renderReactions(reactions) {
        if (!reactions || reactions.length === 0) return '';

        const reactionGroups = {};
        reactions.forEach(r => {
            if (!reactionGroups[r.reaction]) {
                reactionGroups[r.reaction] = [];
            }
            reactionGroups[r.reaction].push(r.user_id);
        });

        return Object.entries(reactionGroups).map(([reaction, users]) => `
            <span class="chat-message-reaction" data-reaction="${reaction}" data-users='${JSON.stringify(users)}'>
                ${reaction} ${users.length}
            </span>
        `).join('');
    }

    function attachReactionHandlers() {
        document.querySelectorAll('.chat-message-reaction').forEach(el => {
            el.addEventListener('click', async (e) => {
                e.stopPropagation();
                const messageEl = el.closest('.chat-message');
                const messageId = messageEl.dataset.messageId;
                const reaction = el.dataset.reaction;

                await addReaction(messageId, reaction);
            });
        });
    }

    function getFileIcon(fileType) {
        if (fileType?.includes('image')) return 'fa-image';
        if (fileType?.includes('pdf')) return 'fa-file-pdf';
        if (fileType?.includes('video')) return 'fa-video';
        return 'fa-file';
    }

    // ======================
    // WEBSOCKET (REAL-TIME)
    // ======================

    function connectWebSocket(roomId) {
        if (!ACCESS_TOKEN) return;

        if (ws && ws.readyState === WebSocket.OPEN) {
            ws.close();
        }

        const wsUrl = `${CONFIG.API_BASE_URL.replace('http', 'ws')}/api/chats/ws/${roomId}?token=${ACCESS_TOKEN}`;
        console.log('Connecting to WebSocket:', wsUrl);
        ws = new WebSocket(wsUrl);

        ws.onopen = () => {
            console.log('WebSocket connected to room:', roomId);
            updatePresence('online', roomId);
        };

        ws.onmessage = (event) => {
            try {
                const data = JSON.parse(event.data);
                handleWebSocketMessage(data);
            } catch (error) {
                console.error('Error parsing WebSocket message:', error);
            }
        };

        ws.onclose = (event) => {
            console.log('WebSocket disconnected:', event.code);
            setTimeout(() => {
                if (currentRoomId === roomId && document.visibilityState === 'visible') {
                    connectWebSocket(roomId);
                }
            }, 5000);
        };

        ws.onerror = (error) => {
            console.error('WebSocket error:', error);
        };
    }

    function handleWebSocketMessage(data) {
        switch(data.type) {
            case 'message':
                appendNewMessage(data.message);
                break;
            case 'typing':
                handleTypingIndicator(data.user, data.is_typing);
                break;
            case 'reaction':
                updateReaction(data.message_id, data.user_id, data.reaction);
                break;
            case 'unreact':
                removeReaction(data.message_id, data.user_id);
                break;
            case 'user_joined':
                showNotification(`${data.user.name} joined the chat`);
                updateRoomMemberCount();
                break;
            case 'user_left':
                showNotification(`${data.user.name} left the chat`);
                updateRoomMemberCount();
                break;
            case 'status_update':
                updateUserStatus(data.user_id, data.status);
                break;
        }
    }

    function appendNewMessage(message) {
        const messagesContainer = chatMessagesEl;

        const emptyState = messagesContainer.querySelector('.chat-empty');
        if (emptyState) {
            emptyState.remove();
        }

        const existingMessage = messagesContainer.querySelector(`.chat-message[data-message-id="${message.id}"]`);
        if (existingMessage) {
            return;
        }

        const messageHtml = renderMessage(message);
        messagesContainer.insertAdjacentHTML('beforeend', messageHtml);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;

        attachReactionHandlers();
    }

    function handleTypingIndicator(user, isTyping) {
        if (String(user.id) === String(CURRENT_USER.id)) return;

        if (isTyping) {
            typingUsers.add(user.name);
            if (typingUsers.size > 0) {
                const typingNames = Array.from(typingUsers);
                if (typingNames.length === 1) {
                    typingText.textContent = `${typingNames[0]} is typing...`;
                } else {
                    typingText.textContent = `${typingNames.length} people are typing...`;
                }
                typingIndicator.style.display = 'flex';
            }
        } else {
            typingUsers.delete(user.name);
            if (typingUsers.size === 0) {
                typingIndicator.style.display = 'none';
            }
        }
    }

    // ======================
    // MESSAGE ACTIONS
    // ======================

    async function sendMessage() {
        const text = messageInput.value.trim();
        if (!text || !currentRoomId) return;

        if (ws && ws.readyState === WebSocket.OPEN) {
            ws.send(JSON.stringify({
                type: 'message',
                message: text,
                message_type: 'text'
            }));
            messageInput.value = '';
            autoResizeTextarea();
        } else {
            try {
                const formData = new FormData();
                formData.append('message', text);
                formData.append('message_type', 'text');

                const result = await apiCall('POST', `/chats/rooms/${currentRoomId}/messages`, formData, true);
                if (result.success && result.message) {
                    appendNewMessage(result.message);
                }
            } catch (error) {
                console.error('Failed to send message:', error);
            }
            messageInput.value = '';
        }

        sendTyping(false);
    }

    async function sendFile(file) {
        if (!file || !currentRoomId) return;

        const formData = new FormData();
        formData.append('message', `Shared a file: ${file.name}`);
        formData.append('message_type', 'file');
        formData.append('file', file);

        try {
            const result = await apiCall('POST', `/chats/rooms/${currentRoomId}/messages`, formData, true);
            if (result.success && result.message) {
                appendNewMessage(result.message);
            }
        } catch (error) {
            console.error('Failed to send file:', error);
        }
    }

    function sendTyping(isTyping) {
        if (ws && ws.readyState === WebSocket.OPEN && currentRoomId) {
            ws.send(JSON.stringify({
                type: 'typing',
                is_typing: isTyping
            }));
        }
    }

    async function addReaction(messageId, reaction) {
        if (ws && ws.readyState === WebSocket.OPEN) {
            ws.send(JSON.stringify({
                type: 'react',
                message_id: messageId,
                reaction: reaction
            }));
        } else {
            try {
                const formData = new FormData();
                formData.append('reaction', reaction);
                await apiCall('POST', `/chats/messages/${messageId}/react`, formData, true);
            } catch (error) {
                console.error('Failed to add reaction:', error);
            }
        }
    }

    // ======================
    // PRESENCE & STATUS
    // ======================

    async function updatePresence(status, roomId = null) {
        try {
            const formData = new FormData();
            formData.append('status', status);
            if (roomId) formData.append('current_room_id', roomId);

            await apiCall('POST', '/chats/presence', formData, true);
        } catch (error) {
            console.error('Failed to update presence:', error);
        }
    }

    // ======================
    // GROUP CREATION
    // ======================

    async function createSubjectRoom() {
        const name = groupNameInput.value.trim();
        const type = groupTypeInput.value;
        const subject = groupSubjectInput.value.trim();
        const description = groupDescInput.value.trim();

        if (!name) {
            alert('Please enter a group name');
            return;
        }

        try {
            const result = await apiCall('POST', '/chats/rooms/subject', {
                room_name: name,
                room_type: type,
                subject: subject,
                description: description
            });

            if (result.success) {
                closeCreateGroupModal();
                await loadRooms();
                if (result.room) {
                    switchRoom(result.room.id);
                }

                groupNameInput.value = '';
                groupSubjectInput.value = '';
                groupDescInput.value = '';
            }
        } catch (error) {
            console.error('Failed to create group:', error);
            alert('Failed to create group: ' + error.message);
        }
    }

    // ======================
    // UI HELPERS
    // ======================

    function autoResizeTextarea() {
        messageInput.style.height = 'auto';
        messageInput.style.height = Math.min(messageInput.scrollHeight, 100) + 'px';
    }

    function handleTyping() {
        sendTyping(true);
        if (typingTimeout) clearTimeout(typingTimeout);
        typingTimeout = setTimeout(() => {
            sendTyping(false);
        }, 2000);
    }

    function formatTime(timestamp) {
        if (!timestamp) return '';
        const date = new Date(timestamp);
        const now = new Date();
        const diff = now - date;

        if (diff < 60000) return 'Just now';
        if (diff < 3600000) return Math.floor(diff / 60000) + 'm ago';
        if (diff < 86400000) return Math.floor(diff / 3600000) + 'h ago';
        if (diff < 604800000) return Math.floor(diff / 86400000) + 'd ago';
        return date.toLocaleDateString();
    }

    function escapeHtml(str) {
        if (!str) return '';
        const div = document.createElement('div');
        div.textContent = str;
        return div.innerHTML;
    }

    function showNotification(message) {
        const toast = document.createElement('div');
        toast.textContent = message;
        toast.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #1a1a2e;
            color: #fff;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 13px;
            z-index: 10001;
            animation: fadeIn 0.3s ease;
            font-family: 'Poppins', sans-serif;
        `;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
    }

    function updateRoomMemberCount() {
        if (currentRoomId) {
            loadRoomDetails(currentRoomId);
        }
    }

    function updateUserStatus(userId, status) {
        console.log(`User ${userId} is now ${status}`);
    }

    function updateReaction(messageId, userId, reaction) {
        loadMessages(currentRoomId);
    }

    function removeReaction(messageId, userId) {
        loadMessages(currentRoomId);
    }

    // ======================
    // MODAL HANDLERS
    // ======================

    function openCreateGroupModal() {
        createGroupModal.classList.add('open');
    }

    function closeCreateGroupModal() {
        createGroupModal.classList.remove('open');
    }

    async function openMembersModal() {
        if (!currentRoomId) return;

        try {
            const result = await apiCall('GET', `/chats/rooms/${currentRoomId}`);
            if (result.success) {
                document.getElementById('membersGroupName').textContent = result.room.room_name;
                const membersList = document.getElementById('membersList');
                const members = result.members || [];

                membersList.innerHTML = members.map(member => `
                    <div class="wa-member-item">
                        <img class="wa-member-avatar" src="${member.avatar || `https://ui-avatars.com/api/?name=${encodeURIComponent(member.name)}&background=3f66e6&color=fff&bold=true`}" alt="${escapeHtml(member.name)}">
                        <div class="wa-member-info">
                            <div class="wa-member-name">${escapeHtml(member.name)}</div>
                            <div class="wa-member-status" style="color: ${member.status === 'online' ? '#0ed3a2' : '#8696a0'}">
                                ${member.status === 'online' ? 'Online' : 'Offline'}
                            </div>
                        </div>
                        <span class="wa-member-role">${member.role || 'member'}</span>
                    </div>
                `).join('');

                membersModal.classList.add('open');
            }
        } catch (error) {
            console.error('Failed to load members:', error);
        }
    }

    function closeMembersModal() {
        membersModal.classList.remove('open');
    }

    // ======================
    // EVENT LISTENERS
    // ======================

    messageInput.addEventListener('input', () => {
        autoResizeTextarea();
        handleTyping();
    });

    sendMessageBtn.addEventListener('click', sendMessage);
    attachFileBtn.addEventListener('click', () => fileInput.click());

    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            sendFile(e.target.files[0]);
            fileInput.value = '';
        }
    });

    messageInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            sendMessage();
        }
    });

    document.getElementById('createGroupBtn').addEventListener('click', openCreateGroupModal);
    document.getElementById('closeGroupModalBtn').addEventListener('click', closeCreateGroupModal);
    document.getElementById('confirmCreateGroupBtn').addEventListener('click', createSubjectRoom);
    document.getElementById('groupMembersBtn').addEventListener('click', openMembersModal);
    document.getElementById('closeMembersModalBtn').addEventListener('click', closeMembersModal);
    document.getElementById('groupInfoBtn').addEventListener('click', () => openMembersModal());

    groupSearchInput.addEventListener('input', () => loadRooms());

    createGroupModal.addEventListener('click', (e) => {
        if (e.target === createGroupModal) closeCreateGroupModal();
    });

    membersModal.addEventListener('click', (e) => {
        if (e.target === membersModal) closeMembersModal();
    });

    // Handle page visibility (update presence)
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            updatePresence('away', currentRoomId);
        } else {
            updatePresence('online', currentRoomId);
        }
    });

    // Handle page unload
    window.addEventListener('beforeunload', () => {
        if (ws) {
            ws.close();
        }
        updatePresence('offline');
    });

    // ======================
    // INITIALIZATION
    // ======================

    let chatsInitialized = false;

    async function init() {
        if (chatsInitialized) return;

        ACCESS_TOKEN = localStorage.getItem('access_token');

        if (!ACCESS_TOKEN) {
            console.error('No access token found');
            groupsListEl.innerHTML = '<div class="chat-empty"><p>Please login to use chat</p></div>';
            return;
        }

        chatsInitialized = true;
        const userLoaded = await loadCurrentUser();
        if (userLoaded) {
            await loadRooms();
            updatePresence('online');
        }
    }

    // Lazy load: only init when chats section becomes visible
    const chatSection = document.getElementById('chats-section');
    if (chatSection && chatSection.style.display !== 'none') {
        init();
    }
    if (chatSection) {
        const chatObserver = new MutationObserver(function() {
            if (chatSection.style.display !== 'none') init();
        });
        chatObserver.observe(chatSection, { attributes: true, attributeFilter: ['style'] });
    }
})();
</script>
</div>