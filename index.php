<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="portfolio.png" type="image">
    <link rel="icon" type="image" href="pf logo.png">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="title-container">
                <h1>Portfolio</h1>
            </div>
            <div class="nav-container">
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>        
    
    <!-- Hero Section -->
    <section id="home">
        <div class="content">
            <div>
                <p>Welcome to My Portfolio</p>
                <h1>I'm Mohit Gupta</h1>
                <div id="nameDisplay"></div>
                <div class="button-container">
                    <a href="#contact" class="btn-hire">Hire Me</a>
                    <a href="resume.pdf" class="btn-download" download>Download CV</a>
                </div>
            </div>
            <div>
                <img src="mohit gupta.jpg" alt="Your Image">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About</h2>
        <p>My Name is Mohit Gupta, and I am a passionate web developer with a knack for creating user-friendly, visually appealing websites. With a solid foundation in HTML, CSS, and JavaScript, I specialize in transforming ideas into engaging digital experiences. My journey in the tech world has equipped me with diverse skills in graphic design and SEO optimization, enabling me to build websites that not only look great but also rank well in search engines. I thrive on collaboration and continuous learning, always eager to stay updated with the latest trends and technologies in the industry.</p>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <h2>Projects</h2>
        <div class="project">
            <img src="calculator.png" alt="Project 1">
            <h3>calculator</h3>
            <p>A dynamic e-commerce platform that integrates advanced features for easy product management, providing a smooth shopping experience for users.</p>
        </div>
        <div class="project">
            <img src="Portfolio1.png" alt="Project 2">
            <h3>Portfolio</h3>
            <p>Built using HTML, CSS, and JavaScript, this project showcases real-time updates and responsive design, ensuring a seamless experience across devices.</p>
        </div>
        <div class="project">
            <img src="animation pro.png" alt="Project 3">
            <h3>Animation</h3>
            <p>A captivating animated showcase that brings ideas to life through vibrant visuals and engaging storytelling, designed to capture the viewer's attention.</p>
        </div>
        <div class="project">
            <img src="utkarsh.png" alt="Project 4">
            <h3>Utkarsh Clone</h3>
            <p>Utilizing CSS and JavaScript, this project demonstrates smooth transitions and interactive elements, enhancing user engagement and experience.</p>
        </div>
        <div class="project">
            <img src="php.png" alt="Project 5">
            <h3>Project Title 5</h3>
            <p>Utilizing CSS and JavaScript, this project demonstrates smooth transitions and interactive elements, enhancing user engagement and experience.</p>
        </div>
    </section>
    
    <!-- Services Section -->
    <section id="services">
        <h2>Services</h2>
        <div class="service">
            <h3>Web Development</h3>
            <p>Web Development encompasses the creation and maintenance of websites, involving various aspects from web design to programming and database management. As a web developer, I specialize in building modern, responsive websites that not only enhance user experience but also ensure seamless functionality across devices. I utilize cutting-edge technologies such as HTML, CSS, JavaScript, and various frameworks to develop dynamic web applications tailored to meet specific client needs. My goal is to deliver visually appealing and highly efficient websites that drive engagement and contribute to your business's success.</p>
        </div>
        <div class="service">
            <h3>SEO Optimization</h3>
            <p>Search Engine Optimization (SEO) is the practice of enhancing a website's visibility in search engine results pages (SERPs). By employing techniques such as keyword research, on-page optimization, and quality content creation, SEO aims to improve organic traffic and user engagement. Effective SEO strategies help businesses reach their target audience, boost brand awareness, and ultimately drive conversions.
                Off-page SEO, such as building quality backlinks, further boosts credibility and authority. Regularly updating content and optimizing for mobile devices are essential in today's digital landscape. Analytics tools play a vital role in tracking performance and making data-driven.
            </p>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact US</h2>
        <form action="submit_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            
            <label for="message">Message:</label>
            <textarea id="message" name="message"></textarea>
            
            <button type="submit">Send</button>
        </form>
    </section>
    
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Mohit Gupta. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>