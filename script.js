 // Professional Summary for M.H.M ARIF BILLAH CHOWDHURY RUDDRO
const aboutText = "As a CSE Graduate from American International Univarsity , I am a solution-driven professional specializing in Data Science and Information Systems. I bridge the gap between complex data analysis and functional software development, with a proven track record in R-script clustering and full-stack PHP systems. I am dedicated to leveraging my technical expertise to solve real-world challenges and drive innovation in the tech industry.";
let index = 0;

function typeEffect() {
    if (index < aboutText.length) {
        document.getElementById("typing-text").innerHTML += aboutText.charAt(index);
        index++;
        setTimeout(typeEffect, 5); // Slightly faster typing for better readability
    }
}

const projects = {
    p1: { 
        title: "Sentiment Product Clustering", 
        desc: "A data science project using R-script. Applies K-Means, Hierarchical, and DBSCAN algorithms to identify patterns in consumer feedback.",
        link: "https://github.com/ruddroo/Sentiment-Based-Product-Clustering-Using-KMeans-Hierarchical-and-DBSCAN-Algorithms.git"
    },
    p2: { 
        title: "Online Turf Booking", 
        desc: "A full-stack sports management system using PHP, HTML, CSS, and MySQL for seamless field reservations.",
        link: "https://github.com/ruddroo/Turf-booking-system.git"
    },
    p3: { 
        title: "Electronic Voting System", 
        desc: "A secure digital voting solution built with C# and MySQL, focusing on database integrity and user authentication.",
        link: "https://github.com/ruddroo/Electronic-Voting-System-using-C-.git"
    },
    p4: { 
        title: "London Bridge View", 
        desc: "An interactive graphics simulation using C++ and OpenGL, featuring dynamic camera controllers and 3D rendering.",
        link: "https://github.com/ruddroo/compiler-design-using-c-.git"
    }
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

window.onload = typeEffect;
window.onclick = (e) => { if (e.target.id == 'projectModal') closeModal(); };
