/* --- script.js --- */

const aboutText = "I am a Computer Science graduate from AIUB with strong academic performance and practical experience in Information Systems. I work with technologies such as R, PHP, HTML, C++, and Python, and have hands-on experience in data science, data mining, and network security. I enjoy solving real-world problems through both individual and team projects. I am dedicated, responsible, and committed to delivering high-quality results in everything I do.";
let index = 0;

function typeEffect() {
    const typingElement = document.getElementById("typing-text");
    if (typingElement && index < aboutText.length) {
        typingElement.innerHTML += aboutText.charAt(index);
        index++;
        setTimeout(typeEffect, 25);
    }
}

const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('visible');
    });
}, { threshold: 0.1 });

const projects = {
    p1: { title: "Sentiment Product Clustering", desc: "Data Science using R. categorization of consumer datasets using K-Means and DBSCAN algorithms.", link: "https://github.com/ruddroo" },
    p2: { title: "Online Turf Booking", desc: "Full-stack PHP reservation engine with real-time MySQL tracking.", link: "https://github.com/ruddroo" },
    p3: { title: "Electronic Voting System", desc: "C# application with focus on integrity and secure digital elections.", link: "https://github.com/ruddroo" },
    p4: { title: "London Bridge View", desc: "3D rendering graphics project using C++ and OpenGL.", link: "https://github.com/ruddroo" }
};

function openProject(id) {
    document.getElementById('modalTitle').innerText = projects[id].title;
    document.getElementById('modalDescription').innerText = projects[id].desc;
    document.getElementById('modalLink').href = projects[id].link;
    document.getElementById('projectModal').style.display = "flex";
}

function closeModal() { 
    document.getElementById('projectModal').style.display = "none"; 
}

window.onload = () => {
    typeEffect();
    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
};

window.onclick = (e) => { 
    if (e.target.id == 'projectModal') closeModal(); 
};