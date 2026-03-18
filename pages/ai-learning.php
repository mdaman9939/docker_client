<!-- AI Learning Section -->
<div id="ai-section" class="content-section" style="display: none;">
    <div class="chart-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <div>
            <h3 style="margin: 0; color: #333; font-size: 28px; font-weight: 600;">Explore & Learn</h3>
            <p style="margin: 5px 0 0; color: #666; font-size: 16px;">Discover AI-powered learning paths tailored for you</p>
        </div>
    </div>
   
    <hr style="border: none; height: 2px; background: linear-gradient(to right, #4361ee, #06d6a0); margin: 20px 0 40px 0;">
   
    <div class="ai-learning-content" style="margin-top: 20px;">
        
        <!-- LEARNING CONTENT -->
        <div id="learning-content-wrapper">
            
            <!-- Platform Cards Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-bottom: 40px;">
                <!-- Shodhganga Card -->
                <div class="platform-card" style="background: linear-gradient(135deg, #4361ee 0%, #3a56d4 100%); border-radius: 15px; padding: 25px; color: white; box-shadow: 0 10px 30px rgba(67, 97, 238, 0.3);">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
                        <h4 style="margin: 0; font-size: 22px; font-weight: 600;">Shodhganga</h4>
                        <div style="width: 50px; height: 50px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                    </div>
                    <div style="margin-bottom: 25px;">
                        <p style="margin: 0; font-size: 15px; opacity: 0.8;">Digital repository of Indian theses with AI-powered search and recommendation</p>
                    </div>
                    <div style="display: flex; gap: 10px;">
                        <button class="start-learning-btn" data-platform="shodhganga" data-url="https://shodhganga.inflibnet.ac.in/" style="background: rgba(255, 255, 255, 0.2); color: white; border: 1px solid rgba(255, 255, 255, 0.3); padding: 8px 20px; border-radius: 6px; cursor: pointer; font-weight: 500; transition: all 0.3s;">Start Learning</button>
                    </div>
                </div>
            </div>

            <!-- Iframe Container -->
            <div id="learning-iframe-container" style="display: none; margin-top: 40px; background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); overflow: hidden;">
                
                <!-- Iframe Header with Ask Button on Top-Right -->
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px 20px; background: #f8f9ff; border-bottom: 1px solid #e6e9ff;">
                    <div>
                        <h4 id="iframe-platform-title" style="margin: 0; color: #333; font-size: 18px; font-weight: 600;">Loading...</h4>
                        <p id="iframe-platform-subtitle" style="margin: 5px 0 0; color: #666; font-size: 14px;">AI-Powered Learning Platform</p>
                    </div>
                    
                    <!-- Ask Button + Close Button (Top Right) -->
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <button id="ask-chatbot-in-iframe-btn" 
                                style="background: linear-gradient(135deg, #4361ee, #06d6a0); color: white; border: none; padding: 10px 24px; border-radius: 30px; font-size: 15px; font-weight: 600; cursor: pointer; box-shadow: 0 6px 20px rgba(67,97,238,0.35); display: flex; align-items: center; gap: 8px;">
                            <i class="fas fa-comments"></i> 
                            Ask Questions through this Website
                        </button>
                        <button id="close-iframe-btn" 
                                style="background: none; border: none; color: #666; font-size: 28px; cursor: pointer; padding: 0 10px; line-height: 1;">×</button>
                    </div>
                </div>
                
                <div id="iframe-wrapper" style="position: relative; width: 100%; height: 80vh; background: #f5f5f5;">
                    <!-- Iframe inserted by JS -->
                </div>
            </div>
           
            <!-- AI Features + Quick Stats (same as before) -->
            <div style="background: #f8f9ff; border-radius: 15px; padding: 30px; margin-top: 40px; border: 1px solid #e6e9ff;">
                <h4 style="margin: 0 0 25px 0; color: #333; font-size: 22px; font-weight: 600;">AI-Powered Learning Features</h4>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                    <!-- Feature 1,2,3 same -->
                    <div class="ai-feature-item" style="background: white; border-radius: 10px; padding: 20px; border-left: 4px solid #4361ee; transition: transform 0.3s ease;">
                        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                            <div style="width: 40px; height: 40px; background: #f0f4ff; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #4361ee;"><i class="fas fa-robot"></i></div>
                            <h5 style="margin: 0; color: #333; font-size: 16px;">Smart Content Curation</h5>
                        </div>
                        <p style="margin: 0; color: #666; font-size: 14px;">AI analyzes your learning patterns to recommend the most relevant study materials</p>
                    </div>
                    <!-- Feature 2 & 3 same as your previous code -->
                </div>
            </div>
           
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 40px;">
                <!-- Quick Stats same -->
            </div>

        </div>
        <!-- END learning-content-wrapper -->

        <!-- CHATBOT -->
        <div id="chatbot-container" style="display: none; height: 85vh; background: white; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); overflow: hidden; flex-direction: column;">
            <!-- Chat Header, Messages, Input same as before -->
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px 20px; background: linear-gradient(135deg, #4361ee, #3a56d4); color: white;">
                <div style="display: flex; align-items: center; gap: 12px;">
                    <div>
                        <h4 style="margin: 0; font-size: 19px;">AI Learning Assistant</h4>
                        <p style="margin: 0; font-size: 13px; opacity: 0.95;">Ask anything about learning platforms</p>
                    </div>
                </div>
                <button id="close-chatbot-btn" style="background: none; border: none; color: white; font-size: 32px; cursor: pointer; padding: 0 12px; line-height: 1;">×</button>
            </div>
            
            <div id="chat-messages" style="flex: 1; padding: 20px; overflow-y: auto; background: #f8f9ff; display: flex; flex-direction: column; gap: 15px;"></div>
            
            <div style="padding: 15px 20px; background: white; border-top: 1px solid #e6e9ff;">
                <div style="display: flex; gap: 10px;">
                    <input id="chat-input" type="text" placeholder="Type your question... (e.g. Shodhganga kaise use karein?)" 
                           style="flex: 1; padding: 14px 22px; border: 1px solid #ddd; border-radius: 30px; font-size: 16px; outline: none;">
                    <button id="send-chat-btn" style="background: #4361ee; color: white; border: none; width: 55px; height: 55px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {

    // ────────────────────────────────────────────────
    // Your original hover effects
    // ────────────────────────────────────────────────
    document.querySelectorAll('.platform-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.transition = 'transform 0.3s ease';
        });
       
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
   
    document.querySelectorAll('.ai-feature-item').forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
        });
       
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // ────────────────────────────────────────────────
    // Your original iframe loading function
    // ────────────────────────────────────────────────
    function loadWebsiteInIframe(platform, url, title) {
        const container = document.getElementById('learning-iframe-container');
        const wrapper = document.getElementById('iframe-wrapper');
        const platformTitle = document.getElementById('iframe-platform-title');
        const platformSubtitle = document.getElementById('iframe-platform-subtitle');
        
        // Store the current platform URL for context
        if (platform === 'shodhganga') {
            // Index the website in backend
            indexWebsite(url);
        }
        
        wrapper.innerHTML = '';
       
        const iframe = document.createElement('iframe');
        iframe.src = url;
        iframe.style.width = '100%';
        iframe.style.height = '100%';
        iframe.style.border = 'none';
        iframe.style.background = 'white';
        iframe.setAttribute('loading', 'lazy');
        iframe.setAttribute('sandbox', 'allow-same-origin allow-scripts allow-forms allow-popups allow-top-navigation');
        iframe.setAttribute('allow', 'fullscreen');
       
        wrapper.appendChild(iframe);
       
        platformTitle.textContent = title || platform.charAt(0).toUpperCase() + platform.slice(1);
        platformSubtitle.textContent = `Exploring ${platform.charAt(0).toUpperCase() + platform.slice(1)} - AI-Powered Learning Platform`;
       
        container.style.display = 'block';
        container.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
       
        showLoadingState(wrapper, iframe);
    }
    
    // Function to index website in backend
    async function indexWebsite(url) {
        try {
            const response = await fetch(`http://127.0.0.1:8000/index-website?url=${encodeURIComponent(url)}&max_chunks=300`, {
                method: 'POST',
                headers: {
                    'accept': 'application/json'
                }
            });
            
            if (response.ok) {
                const data = await response.json();
                console.log('Website indexed successfully:', data);
            }
        } catch (error) {
            console.error('Error indexing website:', error);
        }
    }
   
    function showLoadingState(wrapper, iframe) {
        const loadingDiv = document.createElement('div');
        loadingDiv.id = 'iframe-loading';
        loadingDiv.style.cssText = `
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.95);
            z-index: 1000;
            transition: opacity 0.3s ease;
        `;
       
        loadingDiv.innerHTML = `
            <div style="width: 50px; height: 50px; border: 3px solid #f3f3f3; border-top: 3px solid #4361ee; border-radius: 50%; animation: spin 1s linear infinite; margin-bottom: 20px;"></div>
            <p style="color: #333; font-size: 16px; margin: 0;">Loading learning platform...</p>
            <p style="color: #666; font-size: 14px; margin: 10px 0 0;">AI is preparing your personalized learning environment</p>
        `;
       
        wrapper.style.position = 'relative';
        wrapper.appendChild(loadingDiv);
       
        if (!document.querySelector('#iframe-animation-style')) {
            const style = document.createElement('style');
            style.id = 'iframe-animation-style';
            style.textContent = `
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
            `;
            document.head.appendChild(style);
        }
       
        iframe.onload = function() {
            setTimeout(() => {
                loadingDiv.style.opacity = '0';
                setTimeout(() => {
                    if (loadingDiv.parentNode === wrapper) {
                        wrapper.removeChild(loadingDiv);
                    }
                }, 300);
            }, 500);
        };
       
        setTimeout(() => {
            if (loadingDiv.parentNode === wrapper) {
                loadingDiv.style.opacity = '0';
                setTimeout(() => {
                    if (loadingDiv.parentNode === wrapper) {
                        wrapper.removeChild(loadingDiv);
                    }
                }, 300);
            }
        }, 8000);
    }

    // ────────────────────────────────────────────────
    // Your original Start Learning buttons
    // ────────────────────────────────────────────────
    document.querySelectorAll('.platform-card button').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const card = this.closest('.platform-card');
            const platform = card.querySelector('h4').textContent.toLowerCase();
            const action = this.textContent;
           
            if (action === 'Start Learning') {
                let url = this.dataset.url;
               
                if (!url) {
                    const urls = {
                        'shodhganga': 'https://shodhganga.inflibnet.ac.in/',
                        'swayam': 'https://swayam.gov.in/',
                        'diksha': 'https://diksha.gov.in/'
                    };
                    url = urls[platform] || '#';
                }
               
                const title = platform === 'shodhganga' ? 'Shodhganga' :
                            platform === 'swayam' ? 'Swayam - Ministry of Education' :
                            'Diksha - National Digital Infrastructure';
               
                loadWebsiteInIframe(platform, url, title);
            }
        });
    });

    // ────────────────────────────────────────────────
    // Your original iframe close
    // ────────────────────────────────────────────────
    const closeBtn = document.getElementById('close-iframe-btn');
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            const container = document.getElementById('learning-iframe-container');
            const wrapper = document.getElementById('iframe-wrapper');
            container.style.display = 'none';
            wrapper.innerHTML = '';
        });
    }
   
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const container = document.getElementById('learning-iframe-container');
            if (container && container.style.display === 'block') {
                container.style.display = 'none';
                document.getElementById('iframe-wrapper').innerHTML = '';
            }
        }
    });

    // ────────────────────────────────────────────────
    // Chatbot logic with API integration - FIXED VERSION
    // ────────────────────────────────────────────────

    // Store current document ID from the API response
    let currentDocumentId = null;
    // Store user ID
    const USER_ID = 'default';

    function showChatbot() {
        document.getElementById('learning-content-wrapper').style.display = 'none';
        document.getElementById('chatbot-container').style.display = 'flex';

        const messages = document.getElementById('chat-messages');
        if (messages.children.length === 0) {
            addBotMessage("नमस्ते! 👋 मैं आपका AI Learning Assistant हूँ।<br>मैं वर्तमान डॉक्यूमेंट के बारे में आपके सवालों का जवाब दे सकता हूँ।<br>कृपया अपना सवाल पूछें।");
        }
    }

    function hideChatbot() {
        document.getElementById('learning-content-wrapper').style.display = 'block';
        document.getElementById('chatbot-container').style.display = 'none';
    }

    function addUserMessage(text) {
        const messages = document.getElementById('chat-messages');
        const div = document.createElement('div');
        div.style.cssText = 'align-self: flex-end; background: #4361ee; color: white; padding: 12px 18px; border-radius: 18px 18px 5px 18px; max-width: 75%; word-wrap: break-word;';
        div.innerHTML = `<p style="margin:0;">${text}</p>`;
        messages.appendChild(div);
        messages.scrollTop = messages.scrollHeight;
    }

    function addBotMessage(text) {
        const messages = document.getElementById('chat-messages');
        const div = document.createElement('div');
        div.style.cssText = 'align-self: flex-start; background: white; color: #333; padding: 12px 18px; border-radius: 18px 18px 18px 5px; max-width: 75%; box-shadow: 0 2px 8px rgba(0,0,0,0.08); word-wrap: break-word;';
        div.innerHTML = `<p style="margin:0;">${text}</p>`;
        messages.appendChild(div);
        messages.scrollTop = messages.scrollHeight;
    }

    function addTypingIndicator() {
        const messages = document.getElementById('chat-messages');
        const div = document.createElement('div');
        div.id = 'typing-indicator';
        div.style.cssText = 'align-self: flex-start; background: white; color: #333; padding: 12px 18px; border-radius: 18px 18px 18px 5px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);';
        div.innerHTML = `
            <div style="display: flex; gap: 4px;">
                <span style="width: 8px; height: 8px; background: #4361ee; border-radius: 50%; animation: typing 1s infinite;"></span>
                <span style="width: 8px; height: 8px; background: #4361ee; border-radius: 50%; animation: typing 1s infinite 0.2s;"></span>
                <span style="width: 8px; height: 8px; background: #4361ee; border-radius: 50%; animation: typing 1s infinite 0.4s;"></span>
            </div>
        `;
        messages.appendChild(div);
        messages.scrollTop = messages.scrollHeight;

        // Add typing animation if not exists
        if (!document.querySelector('#typing-animation-style')) {
            const style = document.createElement('style');
            style.id = 'typing-animation-style';
            style.textContent = `
                @keyframes typing {
                    0%, 60%, 100% { transform: translateY(0); opacity: 0.6; }
                    30% { transform: translateY(-10px); opacity: 1; }
                }
            `;
            document.head.appendChild(style);
        }
    }

    function removeTypingIndicator() {
        const indicator = document.getElementById('typing-indicator');
        if (indicator) {
            indicator.remove();
        }
    }

  async function askQuestion(question) {
    const controller = new AbortController();
    const timeoutId = setTimeout(() => controller.abort(), 25000);

    try {
        addTypingIndicator();

        const url = `http://127.0.0.1:8000/ask?question=${encodeURIComponent(question)}&user_id=${USER_ID}&save_to_history=true`;

        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({}),   // empty body is correct
            signal: controller.signal
        });

        clearTimeout(timeoutId);
        removeTypingIndicator();

        if (!response.ok) {
            let errorMsg = await response.text().catch(() => "");
            throw new Error(`API error ${response.status}: ${errorMsg}`);
        }

        const data = await response.json();
        currentDocumentId = data.document_id || currentDocumentId;
        return data.answer || "कोई जवाब नहीं मिला।";

    } catch (err) {
        clearTimeout(timeoutId);
        removeTypingIndicator();

        console.error("Ask API failed:", err);

        if (err.name === 'AbortError') {
            return "⏳ सर्वर बहुत धीमा है या टाइमआउट हो गया। कृपया दोबारा ट्राई करें।";
        }
        if (err.message.includes('Failed to fetch')) {
            return "⚠️ बैकएंड सर्वर से कनेक्शन नहीं हो पा रहा।\n1. सुनिश्चित करें uvicorn चल रहा है\n2. http://127.0.0.1:8000/docs खोलकर चेक करें\n3. फायरवॉल/एंटीवायरस ब्लॉक तो नहीं कर रहा";
        }

        return `तकनीकी समस्या: ${err.message}`;
    }
}

    // Attach events for Ask buttons
    // FIXED: Select all possible ask buttons
    const askButtons = document.querySelectorAll('.ask-chatbot-btn, #ask-chatbot-in-iframe-btn, [id*="ask"]');
    askButtons.forEach(btn => {
        btn.addEventListener('click', showChatbot);
    });

    // Close chatbot button
    const closeChatbotBtn = document.getElementById('close-chatbot-btn');
    if (closeChatbotBtn) {
        closeChatbotBtn.addEventListener('click', hideChatbot);
    }

    const chatInput = document.getElementById('chat-input');
    const sendBtn = document.getElementById('send-chat-btn');

    async function sendMessage() {
        const text = chatInput.value.trim();
        if (!text) return;

        // Disable input and button while processing
        chatInput.disabled = true;
        sendBtn.disabled = true;

        // Add user message
        addUserMessage(text);
        chatInput.value = '';

        // Get response from API
        const reply = await askQuestion(text);
        addBotMessage(reply);

        // Re-enable input and button
        chatInput.disabled = false;
        sendBtn.disabled = false;
        chatInput.focus();
    }

    if (sendBtn) {
        sendBtn.addEventListener('click', sendMessage);
    }

    if (chatInput) {
        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                sendMessage();
            }
        });
    }

    // Escape key also closes chatbot
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const chatbotContainer = document.getElementById('chatbot-container');
            if (chatbotContainer && chatbotContainer.style.display === 'flex') {
                hideChatbot();
            }
            
            const iframeContainer = document.getElementById('learning-iframe-container');
            if (iframeContainer && iframeContainer.style.display === 'block') {
                iframeContainer.style.display = 'none';
                document.getElementById('iframe-wrapper').innerHTML = '';
            }
        }
    });

    // Add a test function to check if API is reachable
    async function testAPIConnection() {
        try {
            const response = await fetch('http://127.0.0.1:8000/list-documents', {
                method: 'GET',
                headers: {
                    'accept': 'application/json'
                }
            });
            
            if (response.ok) {
                console.log('✅ API connection successful');
                const data = await response.json();
                console.log('Documents:', data);
            } else {
                console.error('❌ API connection failed:', response.status);
            }
        } catch (error) {
            console.error('❌ API connection error:', error);
        }
    }

    // Test API connection on page load
    testAPIConnection();

    // ==================== NEW: Ask button inside Iframe (Top-Right) ====================
    const askInIframeBtn = document.getElementById('ask-chatbot-in-iframe-btn');
    if (askInIframeBtn) {
        askInIframeBtn.addEventListener('click', showChatbot);
    }

    // Optional: Add a function to clear chat history if needed
    window.clearChatHistory = function() {
        const messages = document.getElementById('chat-messages');
        messages.innerHTML = '';
        currentDocumentId = null;
        addBotMessage("Chat history cleared. आप नया सवाल पूछ सकते हैं।");
    };
});
</script>