        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer-grid">
                    
                    <!-- Column 1: Social -->
                    <div class="footer-col">
                        <h4>Social</h4>
                        <div class="footer-links-list">
                            <a target="_blank" href="https://x.com/triggerlabsio">Twitter (X)</a>
                            <a target="_blank" href="https://www.linkedin.com/company/triggerlabsio/">LinkedIn</a>
                            <a target="_blank" href="https://www.tiktok.com/@triggerlabs.io">Titok</a>
                            <a target="_blank" href="https://www.youtube.com/@triggerlabsio">YouTube</a>
                        </div>
                    </div>

                    <!-- Column 2: Partners -->
                    <div class="footer-col">
                        <h4>Partners</h4>
                        <div class="footer-links-list">
                            <a target="_blank" href="https://www.hubspot.com/">HubSpot</a>
                            <a target="_blank" href="https://wordpress.org/">WordPress</a>
                            <a target="_blank" href="https://www.make.com/en">Make.com</a>
                            <a target="_blank" href="https://cloud.google.com/">Google Cloud</a>
                        </div>
                    </div>

                    <!-- Column 3: Navigation -->
                    <div class="footer-col">
                        <h4>Navigation</h4>
                        <div class="footer-links-list">
                            <a href="#system">The System</a>
                            <a href="#process">How It Works</a>
                            <a href="#pillars">Five Pillars</a>
                            <a href="#faq">FAQ</a>
                            <a href="#" class="trigger-modal">Free Audit</a>
                        </div>
                    </div>

                    <!-- Column 4: Mission Statement -->
                    <div class="footer-col footer-mission">
                        <h4>Mission</h4>
                        <a href="#" class="logo" style="margin-bottom: 16px; display: inline-flex;">
                            <span>trigger<span class="logo-bold">_labs</span></span>
                        </a>
                        <p>We build intelligent, round-the-clock background processes that orbit your core business. Stop doing repetitive tasks and let our AI systems run the engine.</p>
                    </div>
                    
                </div>

                <div class="footer-bottom">
                    <div class="footer-copyright">
                        © <span id="year">2026</span> Trigger Labs. Systemic Automation.<br />
                        1178 Broadway, New York, NY 10001
                    </div>
                </div>
            </div>
        </footer>

        <!-- Global Modal Overlay -->
        <div class="modal-overlay" id="audit-modal">
            <div class="modal-content">
                <button class="modal-close" aria-label="Close modal">✕</button>
                
                <div id="modal-form-content">
                    <h2>System Audit Request</h2>
                    <p style="margin-top: 8px; font-size: 0.9rem;">Tell us a bit about your operations, and we'll blueprint an autonomous system for you.</p>
                    
                    <form class="modal-form" id="audit-form">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" class="form-input" placeholder="John Doe" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Work Email</label>
                            <input type="email" id="email" class="form-input" placeholder="john@company.com" required>
                        </div>

                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" id="company" class="form-input" placeholder="Acme Corp" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="bottleneck">What is your biggest manual bottleneck?</label>
                            <textarea id="bottleneck" class="form-textarea" placeholder="e.g. We spend 15 hours a week manually moving data from our CRM to our billing software..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 8px;">Initialize Audit</button>
                    </form>
                </div>

                <div class="form-success-message" id="modal-success-message">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#FF4801" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin: 0 auto 24px;">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    <h3>Request Received.</h3>
                    <p style="color: var(--color-text-muted);">Our agents are analyzing your request. We will be in touch shortly.</p>
                </div>
            </div>
        </div>

        <!-- AI Chatbot Widget -->
        <div class="chatbot-widget" id="chatbot-widget">
            <button class="chatbot-toggle-btn" id="chatbot-toggle" aria-label="Toggle AI Agent">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
            </button>
            
            <div class="chatbot-window">
                <div class="chatbot-header">
                    <div class="chatbot-header-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="11" width="18" height="10" rx="2"></rect>
                            <circle cx="12" cy="5" r="2"></circle>
                            <path d="M12 7v4"></path>
                            <line x1="8" y1="16" x2="8" y2="16"></line>
                            <line x1="16" y1="16" x2="16" y2="16"></line>
                        </svg>
                    </div>
                    <div class="chatbot-header-info">
                        <h4>Trigger AI Agent</h4>
                        <p><span class="chatbot-status-dot"></span> Online & Orbiting</p>
                    </div>
                </div>
                
                <div class="chatbot-messages" id="chatbot-messages">
                    <!-- Initial System Message -->
                    <div class="chat-msg-wrapper bot">
                        <div class="chat-msg bot">
                            Hello! I'm the Trigger Labs autonomous agent. I can help answer questions about our systemic automation processes or schedule a free audit. How can I assist you today?
                        </div>
                        <span class="chat-time">Just now</span>
                    </div>
                    
                    <!-- Typing Indicator (Hidden by default) -->
                    <div class="typing-indicator" id="typing-indicator">
                        <div class="typing-dot"></div>
                        <div class="typing-dot"></div>
                        <div class="typing-dot"></div>
                    </div>
                </div>
                
                <form class="chatbot-input-area" id="chatbot-input-form">
                    <input type="text" class="chatbot-input" id="chatbot-input" placeholder="Type your message..." required autocomplete="off">
                    <button type="submit" class="chatbot-send-btn" aria-label="Send message">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- JavaScript Interactions -->
        <script>
            // Set dynamic year
            document.getElementById('year').textContent = new Date().getFullYear();

            // Mobile Menu Toggle
            const mobileToggle = document.getElementById('mobile-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileLinks = document.querySelectorAll('.mobile-link');

            mobileToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('active');
                mobileToggle.textContent = mobileMenu.classList.contains('active') ? '✕' : '☰';
            });

            // Close mobile menu on link click
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('active');
                    mobileToggle.textContent = '☰';
                });
            });

            // Show Desktop CTA Button on larger screens only
            if(window.innerWidth > 768) {
                document.getElementById('nav-cta-desktop').style.display = 'inline-flex';
            }

            window.addEventListener('resize', () => {
                if(window.innerWidth > 768) {
                    document.getElementById('nav-cta-desktop').style.display = 'inline-flex';
                    mobileMenu.classList.remove('active');
                    mobileToggle.textContent = '☰';
                } else {
                    document.getElementById('nav-cta-desktop').style.display = 'none';
                }
            });

            // Intersection Observer for Fade-Up Scroll Animations
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-up').forEach(element => {
                observer.observe(element);
            });

            // Newsletter Form Handling
            const newsletterForm = document.getElementById('newsletter-form');
            const newsletterMessage = document.getElementById('newsletter-message');

            if (newsletterForm) {
                newsletterForm.addEventListener('submit', (e) => {
                    e.preventDefault(); 
                    const emailInput = newsletterForm.querySelector('input[type="email"]');
                    
                    if (emailInput.value) {
                        newsletterMessage.classList.add('success');
                        newsletterForm.reset();
                        
                        setTimeout(() => {
                            newsletterMessage.classList.remove('success');
                        }, 5000);
                    }
                });
            }

            // Modal Logic
            const modalOverlay = document.getElementById('audit-modal');
            const modalCloseBtn = document.querySelector('.modal-close');
            const modalTriggers = document.querySelectorAll('.trigger-modal');
            const auditForm = document.getElementById('audit-form');
            const formContent = document.getElementById('modal-form-content');
            const successMessage = document.getElementById('modal-success-message');

            function openModal(e) {
                if(e) e.preventDefault();
                modalOverlay.classList.add('active');
                document.body.style.overflow = 'hidden'; 
                
                if(mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                    mobileToggle.textContent = '☰';
                }
            }

            function closeModal() {
                modalOverlay.classList.remove('active');
                document.body.style.overflow = ''; 
                
                setTimeout(() => {
                    auditForm.reset();
                    formContent.style.display = 'block';
                    successMessage.classList.remove('active');
                }, 300);
            }

            modalTriggers.forEach(btn => btn.addEventListener('click', openModal));
            modalCloseBtn.addEventListener('click', closeModal);

            modalOverlay.addEventListener('click', (e) => {
                if (e.target === modalOverlay) closeModal();
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && modalOverlay.classList.contains('active')) {
                    closeModal();
                }
            });

            if (auditForm) {
                auditForm.addEventListener('submit', (e) => {
                    e.preventDefault(); 
                    
                    formContent.style.display = 'none';
                    successMessage.classList.add('active');
                    
                    setTimeout(() => {
                        closeModal();
                    }, 4000);
                });
            }

            // Process Steps Animation
            const stepNumbers = document.querySelectorAll('.step-number');
            if (stepNumbers.length > 0) {
                let currentStepIdx = 0;
                
                setInterval(() => {
                    stepNumbers[currentStepIdx].classList.remove('active');
                    currentStepIdx = (currentStepIdx + 1) % stepNumbers.length;
                    stepNumbers[currentStepIdx].classList.add('active');
                }, 3000); 
            }

            // FAQ Accordion Logic
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    
                    faqItems.forEach(i => i.classList.remove('active'));
                    
                    if (!isActive) {
                        item.classList.add('active');
                    }
                });
            });

            // Chatbot Logic
            const chatbotWidget = document.getElementById('chatbot-widget');
            const chatbotToggleBtn = document.getElementById('chatbot-toggle');
            const chatbotForm = document.getElementById('chatbot-input-form');
            const chatbotInput = document.getElementById('chatbot-input');
            const chatbotMessages = document.getElementById('chatbot-messages');
            const typingIndicator = document.getElementById('typing-indicator');

            // Toggle Chatbot Window
            chatbotToggleBtn.addEventListener('click', () => {
                chatbotWidget.classList.toggle('open');
                if (chatbotWidget.classList.contains('open')) {
                    setTimeout(() => chatbotInput.focus(), 300);
                }
            });

            // Format Current Time
            function getCurrentTime() {
                const now = new Date();
                let hours = now.getHours();
                let minutes = now.getMinutes();
                const ampm = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12;
                hours = hours ? hours : 12; 
                minutes = minutes < 10 ? '0' + minutes : minutes;
                return hours + ':' + minutes + ' ' + ampm;
            }

            // Add Message to Chat
            function addMessage(text, sender) {
                const msgWrapper = document.createElement('div');
                msgWrapper.className = `chat-msg-wrapper ${sender}`;
                
                const msgBubble = document.createElement('div');
                msgBubble.className = `chat-msg ${sender}`;
                msgBubble.textContent = text;
                
                const timeSpan = document.createElement('span');
                timeSpan.className = 'chat-time';
                timeSpan.textContent = getCurrentTime();

                msgWrapper.appendChild(msgBubble);
                msgWrapper.appendChild(timeSpan);
                
                chatbotMessages.insertBefore(msgWrapper, typingIndicator);
                scrollToBottom();
            }

            // Scroll Chat to Bottom
            function scrollToBottom() {
                chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
            }

            // Mock AI Responses based on keywords
            const getBotResponse = (text) => {
                const lowerText = text.toLowerCase();
                if (lowerText.includes('audit') || lowerText.includes('quote') || lowerText.includes('price')) {
                    return "Our pricing is transparent and flat-rate, based entirely on the complexity of the workflows. I'd highly recommend claiming a Free System Audit using the button at the top of the site so our engineers can map your specific bottlenecks first!";
                } else if (lowerText.includes('human') || lowerText.includes('team') || lowerText.includes('replace')) {
                    return "We don't replace humans; we supercharge them! Systemic automation handles the repetitive data-entry so your team can focus on high-value creative and strategic work.";
                } else if (lowerText.includes('integrate') || lowerText.includes('software') || lowerText.includes('stack')) {
                    return "We can connect with nearly any platform that has an open API, including Salesforce, HubSpot, Stripe, Slack, and custom databases. The Autonomous Core acts as the central brain linking them all together.";
                } else {
                    return "That's a great question. While I am an AI agent designed to help navigate our platform, our human automation engineers would love to discuss this with you in detail. Would you like me to help you schedule a free audit?";
                }
            };

            // Handle User Submission
            chatbotForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const message = chatbotInput.value.trim();
                
                if (message) {
                    // Add User Message
                    addMessage(message, 'user');
                    chatbotInput.value = '';
                    
                    // Show Typing Indicator
                    typingIndicator.classList.add('active');
                    scrollToBottom();

                    // Simulate Network Delay & Bot Response
                    setTimeout(() => {
                        typingIndicator.classList.remove('active');
                        const botReply = getBotResponse(message);
                        addMessage(botReply, 'bot');
                    }, 1500 + Math.random() * 1000); // Random delay between 1.5s - 2.5s
                }
            });
        </script>
    </body>
</html>