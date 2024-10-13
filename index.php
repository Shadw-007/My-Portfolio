<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/logo1.jpg">

</head>

<body>

    <!-- header section starts -->

    <header class="header">



        <a href="#home" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#skills">Skills</a>
            <a href="#portfolio">Certifications</a>
            <a href="#contact">Contact</a>
        </nav>


        <div class="bx bx-moon" id="darkMode-icon"></div>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <!-- header section ends -->

    <!-- Home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>Hello 👋🏾, I am</h3>
            <h1>Cholwe Muleya</h1>
            <p>Empowering the future with keystrokes, shaping tomorrow through web development and ethical hacking –
                where innovation meets integrity in the digital realm.</p>

            <div class="social">
                <a href="https://twitter.com/cholwe_muleya" target="_blank"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.linkedin.com/in/cholwe-muleya-198a861b2/" target="_blank"><i class='bx bxl-linkedin-square'></i></a>
                <a href="https://www.instagram.com/charlie_m_kirk/" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="https://github.com/Shadw-007" target="_blank"><i class='bx bxl-github'></i></a>
            </div>

            <a href="cv/Cholwe_Muleya_CV.pdf" class="btn" download>Download CV</a>
        </div>


        <div class="profession-container">
            <div class="profession-box">
                <div class="profession" style="--i:0;">
                    <i class='bx bx-code-alt'></i>
                    <h3>Web Developer</h3>
                </div>
                <div class="profession" style="--i:1;">
                    <i class='bx bx-data'></i>
                    <h3>DBT Admin</h3>
                </div>
                <div class="profession" style="--i:2;">
                    <i class='bx bx-laptop'></i>
                    <h3>Tech Enthusiast</h3>
                </div>
                <div class="profession" style="--i:3;">
                    <i class='bx bx-terminal'></i>
                    <h3>Ethical Hacker</h3>
                </div>


                <div class="circle"></div>
            </div>

            <div class="overlay"></div>
        </div>

        <div class="home-img">
            <img src="images/charlie.png" alt="home image">
        </div>
    </section>

    <!-- Home section ends -->

    <!-- About section starts -->

    <section class="about" id="about">

        <div class="about-img">
            <img src="images/cholwe1.png" alt="about image">
        </div>


        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Hi, I'm Here To Help You On Your Next Project!</h3>
            <p>Dedicated and results-driven web developer with a proven
                track record of delivering high-quality projects on time
                and exceeding client expectations. Armed with a strong
                work ethic, I thrive in dynamic environments and leverage
                effective communication skills honed through international
                exposure. Collaborative by nature, I excel in team
                settings, fostering synergy to achieve collective goals.
                My commitment to excellence, coupled with a deep
                understanding of web development technologies, positions
                me as a valuable asset in creating innovative and
                impactful digital solutions.</p>
            <a href="education_experience.php" class="btn">Learn More</a>
        </div>
    </section>


    <!-- About seciton ends -->

    <!-- Services section begins -->
    <section class="services" id="services">

        <h2 class="heading">My <span>Services</span></h2>


        <div class="services-container">
            <div class="services-box">
                <i class="bx bx-code-alt"></i>
                <h3>Web Development</h3>
                <p>Bringing a blend of technical expertise and creative
                    problem-solving to the table. Proficient in a diverse range
                    of programming languages and frameworks, I specialize
                    in crafting robust and scalable web solutions.
                    With a keen eye for detail and a passion for user-centric design,
                    I strive to deliver not just functional websites, but exceptional
                    digital experiences.</p>
            </div>

            <div class="services-box">
                <i class="bx bx-data"></i>
                <h3>Database Administration</h3>
                <p> Bringing a wealth of expertise and dedication to ensuring the seamless
                    management and optimization of your data infrastructure. Proficient in
                    designing, implementing, and maintaining robust database systems,
                    I specialize in enhancing performance, scalability, and security.
                    Partner with me to unlock the full potential of your data assets, with a
                    focus on precision, security, and performance in every aspect of database
                    administration.</p>
            </div>

            <div class="services-box">
                <i class="bx bx-terminal"></i>
                <h3>Penetration Testing</h3>
                <small>(Coming Soon!)</small>
                <p>Bringing a comprehensive approach to fortifying your digital defenses. My expertise
                    lies in proactively identifying and addressing vulnerabilities in your
                    systems, applications, and networks, ensuring they withstand the
                    ever-evolving threat landscape. With a methodical and ethical hacking
                    mindset, I conduct thorough assessments to expose potential weaknesses
                    and provide actionable insights for remediation.</p>
            </div>
        </div>
    </section>
    <!-- Services section ends -->

    <!-- Skills section begins -->
    <section class="skills" id="skills">

        <div class="skills-content">
            <h1 class="heading">My <span>Skills</span></h1>

            <div class="progress">
                <div class="bar">
                    <h3><span>HTML</span> <span>95%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>CSS</span> <span>90%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>JavaScript</span><span>75%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>PHP</span> <span>85%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>Laravel</span> <span>60%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>C++</span> <span>65%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>Python</span> <span>60%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>SQL</span> <span>88%</span></h3>
                </div>

            </div>
        </div>

    </section>
    <!-- Skills section ends -->

    <!-- Portfolio section starts -->

    <section class="portfolio" id="portfolio">
        <h2 class="heading">My <span>Certifications</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="images/Web Dev.png" alt="Udemy Web Development Certificate">

                <div class="portfolio-layer">
                    <h4>Web Development</h4>
                    <p>This certification highlights my knowledge in being able to develop and deploy
                        a fully functional website that is both aesthetically pleasing, interactive and
                        user friendly. I am able to build a wide range of websites, following details to
                        utmost precision according to the needs of the client(s).
                    </p>
                    <a href="https://www.udemy.com/certificate/UC-61101c14-bcdb-457c-b8fe-a6c8cb7d1924/" target="_blank"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="images/ITF+ Logo Certified.jpg" alt="CompTIA ITF+ Certificate">

                <div class="portfolio-layer">
                    <h4>CompTIA ITF+</h4>
                    <p>This certification highlights my knowledge and skills required to identify and explain the
                        basics of computing, IT infrastructure, application and software, software
                        development, database fundamentals, and security. As well as being able to
                        demonstrate the ability to install software, establish basic network connectivity,
                        and identify and prevent basic security risks.</p>
                    <a href="https://www.credly.com/earner/earned/badge/09b2bdb5-3377-4d18-9cc8-572ea2fd1e7d" target="_blank"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="images/CEH.png" alt="Udemy Ethical Hacking Certificate">

                <div class="portfolio-layer">
                    <h4>Ethical Hacking</h4>
                    <p>This certificate highlights my knowledge in utilising technical expertise to identify 
                        vulnerabilities in computer systems, networks, and applications, simulating attacks to assess 
                        their security posture. By evaluating potential risks and recommending mitigation strategies, 
                        I help organisations enhance their overall security. </p>
                    <a href="https://www.udemy.com/certificate/UC-403aaec4-8d80-4889-9639-9323022342b8/" target="_blank"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

        </div>
    </section>

    <!-- Portfolio section ends -->

    <!-- Contact section starts -->

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>

        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full Name...." required>
                <input type="email" placeholder="Email Address..." required>
            </div>

            <div class="input-box">
                <input type="number" placeholder="Phone Number..." required>
                <input type="text" placeholder="Subject..." required>
            </div>

            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message Here..." required></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

    <!-- Contact section ends -->

    <!-- Footer section starts -->

    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by Cholwe Muleya | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    <!-- Footer section ends -->


    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- js file link -->

    <script src="js/script.js"></script>

</body>

</html>