 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.H.M ARIF BILLAH CHOWDHURY RUDDRO | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="glass-bg"></div>
    <div class="app-container">
        <aside class="sidebar">
            <div class="profile-area">
                <img src="assets/profile.jpg" alt="Ruddro" class="profile-img-passport">
                <h1 class="full-name">M.H.M ARIF BILLAH CHOWDHURY RUDDRO</h1>
                <p class="tagline">CSE Graduate from AIUB</p>
            </div>
            
            <nav class="sidebar-nav">
                <a href="#about"><i class="fas fa-user"></i> About</a>
                <a href="#skills"><i class="fas fa-code"></i> Skills</a>
                <a href="#projects"><i class="fas fa-tasks"></i> Projects</a>
                <a href="#contact"><i class="fas fa-envelope"></i> Contact</a>
            </nav>

            

            <div class="sidebar-contact-list">
                <p><i class="fas fa-phone"></i> 01794926342</p>
                <p><i class="fas fa-envelope"></i> mhmruddro1443@gmail.com</p>
            </div>

            <div class="social-links">
                <a href="https://github.com/ruddroo" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/ruddrochowdhury/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.facebook.com/ruddroo/" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
            </div>

            <a href="assets/ruddro_cv.pdf" download class="gloss-btn cv-btn">Download CV</a>
        </aside>

        <main class="main-content">
            <section id="about" class="glass-card section-spacer">
                <h2 class="section-title"><i class="fas fa-user-graduate"></i> About Me</h2>
                <div class="typing-container">
                    <span id="typing-text"></span><span class="cursor">|</span>
                </div>
            </section>

            <section id="skills" class="glass-card section-spacer">
                <h2 class="section-title"><i class="fas fa-tools"></i> Technical Skills</h2>
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

            <section id="projects" class="glass-card section-spacer">
                <h2 class="section-title"><i class="fas fa-project-diagram"></i> Projects</h2>
                <div class="project-grid">
                    <div class="project-item" onclick="openProject('p1')">
                        <span class="year">2025</span>
                        <h3>Sentiment Clustering</h3>
                        <p>Click for details</p>
                    </div>
                    <div class="project-item" onclick="openProject('p2')">
                        <span class="year">2026</span>
                        <h3>Turf Booking</h3>
                        <p>Click for details</p>
                    </div>
                    <div class="project-item" onclick="openProject('p3')">
                        <span class="year">2023</span>
                        <h3>Voting System</h3>
                        <p>Click for details</p>
                    </div>
                    <div class="project-item" onclick="openProject('p4')">
                        <span class="year">2024</span>
                        <h3>London Bridge View</h3>
                        <p>Click for details</p>
                    </div>
                </div>
            </section>

            <section id="contact" class="glass-card contact-section">
                <h2 class="section-title"><i class="fas fa-paper-plane"></i> Quick Connect</h2>
                <form action="process.php" method="POST" class="contact-form">
                    <div class="form-row">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <textarea name="message" rows="3" placeholder="How can I help you?" required></textarea>
                    <button type="submit" class="gloss-btn">Send Message</button>
                </form>
            </section>
        </main>
    </div>

    <div id="projectModal" class="modal">
        <div class="modal-content glass-card">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2 id="modalTitle"></h2>
            <p id="modalDescription" class="modal-p"></p>
            <div class="modal-link-box">
                <a id="modalLink" href="#" target="_blank" class="project-link-text">Visit Project/Repository <i class="fas fa-external-link-alt"></i></a>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>