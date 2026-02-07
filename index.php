<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.H.M ARIF BILLAH CHOWDHURY RUDDRO | Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="bg-glow"></div>
    
    <div class="app-container">
        <aside class="sidebar">
            <div class="profile-area">
                <div class="img-wrapper">
                    <img src="assets/profile.jpg" alt="Ruddro" class="profile-img-passport">
                </div>
                <h1 class="full-name">M.H.M ARIF BILLAH CHOWDHURY<br><span>RUDDRO</span></h1>
                <p class="tagline">CSE Graduate from AIUB</p>
            </div>
            
            <nav class="sidebar-nav">
                <a href="#about" class="nav-link"><i class="fas fa-fingerprint"></i> About</a>
                <a href="#skills" class="nav-link"><i class="fas fa-layer-group"></i> Skills</a>
                <a href="#projects" class="nav-link"><i class="fas fa-rocket"></i> Projects</a>
                <a href="#contact" class="nav-link"><i class="fas fa-bolt"></i> Contact</a>
            </nav>

            <div class="sidebar-footer">
                <div class="social-grid">
                    <a href="https://github.com/ruddroo" target="_blank" class="social-box" title="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/ruddrochowdhury/" target="_blank" class="social-box" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.facebook.com/ruddroo/" target="_blank" class="social-box" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>

                <div class="contact-details">
                    <a href="tel:01794926342" class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>01794926342</span>
                    </a>
                    <a href="mailto:mhmruddro1443@gmail.com" class="contact-item">
                        <i class="far fa-envelope"></i>
                        <span>mhmruddro1443@gmail.com</span>
                    </a>
                </div>

                <a href="assets/ruddro_cv.pdf" download class="modern-cv-btn">
                    <span>Download CV</span> <i class="fas fa-download"></i>
                </a>
            </div>
        </aside>

        <main class="main-content">
            <section id="about" class="glass-card reveal">
                <h2 class="section-title">About Me</h2>
                <div class="typing-container">
                    <span id="typing-text"></span><span class="cursor">|</span>
                </div>
            </section>

            <section id="skills" class="glass-card reveal">
                <h2 class="section-title">Technical Expertise</h2>
                <div class="skills-grid">
                    <span class="skill-pill">R-script</span>
                    <span class="skill-pill">Python</span>
                    <span class="skill-pill">PHP</span>
                    <span class="skill-pill">HTML/CSS</span>
                    <span class="skill-pill">C++</span>
                    <span class="skill-pill">C#</span>
                    <span class="skill-pill">MySQL</span>
                    <span class="skill-pill">Linux</span>
                </div>
            </section>

            <section id="projects" class="glass-card reveal">
                <h2 class="section-title">Selected Works</h2>
                <div class="project-grid">
                    <div class="project-item" onclick="openProject('p1')">
                        <div class="project-header"><span>2025</span><i class="fas fa-chart-pie"></i></div>
                        <h3>Sentiment Clustering</h3>
                        <p>Data Science / R-Script</p>
                    </div>
                    <div class="project-item" onclick="openProject('p2')">
                        <div class="project-header"><span>2026</span><i class="fas fa-calendar-check"></i></div>
                        <h3>Turf Booking</h3>
                        <p>Full-Stack / PHP</p>
                    </div>
                    <div class="project-item" onclick="openProject('p3')">
                        <div class="project-header"><span>2023</span><i class="fas fa-check-to-slot"></i></div>
                        <h3>Voting System</h3>
                        <p>Software / C#</p>
                    </div>
                    <div class="project-item" onclick="openProject('p4')">
                        <div class="project-header"><span>2024</span><i class="fas fa-vr-cardboard"></i></div>
                        <h3>London Bridge View</h3>
                        <p>Graphics / OpenGL</p>
                    </div>
                </div>
            </section>

            <section id="contact" class="glass-card reveal">
                <h2 class="section-title">Get In Touch</h2>
                <form action="https://formspree.io/f/mykdyzka" method="POST" class="contact-form">
                    <div class="form-row">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <textarea name="message" rows="3" placeholder="How can we collaborate?" required></textarea>
                    <button type="submit" class="modern-cv-btn" style="border:none; cursor:pointer; width:auto; padding: 12px 30px;">
                        <span>Send Message</span> <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </section>
        </main>
    </div>

    <div id="projectModal" class="modal">
        <div class="modal-content glass-card">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2 id="modalTitle"></h2>
            <div class="modal-body">
                <p id="modalDescription" style="color: #9ca3af; margin: 15px 0;"></p>
                <a id="modalLink" href="#" target="_blank" class="modern-cv-btn" style="text-decoration:none;">Explore Repository</a>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>