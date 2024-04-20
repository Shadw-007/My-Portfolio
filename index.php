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
            <a href="#portfolio">Portfolio</a>
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
                <a href="https://twitter.com/cholwe_muleya" target="_blank"><i class='bx bxl-twitter' ></i></a>
                <a href="https://www.linkedin.com/in/cholwe-muleya-198a861b2/" target="_blank"><i class='bx bxl-linkedin-square' ></i></a>
                <a href="https://www.instagram.com/charlie_m_kirk/" target="_blank"><i class='bx bxl-instagram' ></i></a>
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
                    <i class='bx bx-data' ></i>
                    <h3>Database Admin</h3>
                </div>
                <div class="profession" style="--i:2;">
                    <i class='bx bx-laptop' ></i>
                    <h3>Tech Enthusiast</h3>
                </div>
                <div class="profession" style="--i:3;">
                    <i class='bx bx-terminal' ></i>
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
                <div class="bar"><h3><span>HTML</span> <span>95%</span></h3></div>
                <div class="bar"><h3><span>CSS</span> <span>90%</span></h3></div>
                <div class="bar"><h3><span>JavaScript</span><span>75%</span></h3></div>
                <div class="bar"><h3><span>PHP</span> <span>85%</span></h3></div>
                <div class="bar"><h3><span>Laravel</span> <span>60%</span></h3></div>
                <div class="bar"><h3><span>C++</span> <span>65%</span></h3></div>
                <div class="bar"><h3><span>Python</span> <span>60%</span></h3></div>
                <div class="bar"><h3><span>SQL</span> <span>88%</span></h3></div>

            </div>
        </div>

    </section>
    <!-- Skills section ends -->

    <!-- Portfolio section starts -->

        <section class="portfolio" id="portfolio">
            <h2 class="heading">Latest <span>Projects</span></h2>

            <div class="portfolio-container">
                <div class="portfolio-box">
                    <img src="images/lucho.png" alt="">

                    <div class="portfolio-layer">
                        <h4>LuCho Motorways</h4>
                        <small>(To be Launched!)</small>
                        <p>This is a project focused on a future idea that I 
                            would like to implement when the time presents itself. 
                            This is a website focused on a bus transportation company 
                            which will allow customers to book their trips online, make 
                            payments, get notified of any promotions as well as stay up 
                            to date with the latest news that the bus company has to offer!</p>
                        <a href="https://github.com/Shadw-007/LuCho-Motorways" target="_blank"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="images/btt.png" alt="">

                    <div class="portfolio-layer">
                        <h4>Best Travel & Tours</h4>
                        <p>This is a website I plan to develop further as I work on my Travel 
                            agency project. I am excited for it as this is something I did a 
                            while back but I get to continue working on it to make it better!</p>
                        <a href="https://best-travel-and-tours.netlify.app" target="_blank"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="images/coverdot.png" alt="">

                    <div class="portfolio-layer">
                        <h4>Coverdot Solutions</h4>
                        <small>(To be Launched!)</small>
                        <p>This project focused on creating a website for a media company. 
                            It outlined the services they offered and also allowed for interested 
                            individuals to get in contact with the company. Another old project I 
                            wish to develop further.</p>
                        <a href="https://github.com/Shadw-007/Media-Website" target="_blank"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>



                <div class="portfolio-box">
                    <img src="images/mobile.jpg" alt="">

                    <div class="portfolio-layer">
                        <h4>Mobile App Development</h4>
                        <small>(Coming Soon!)</small>
                        <p>Watch this space!</p>
                        <a href="#portfolio"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="images/data.jpg" alt="">

                    <div class="portfolio-layer">
                        <h4>Database Admin</h4>
                        <small>(Coming Soon!)</small>
                        <p>Watch this space!</p>
                        <a href="#portfolio"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="images/pentest.jpg" alt="">

                    <div class="portfolio-layer">
                        <h4>Pen Testing</h4>
                        <small>(Coming Soon!)</small>
                        <p>Watch this space!</p>
                        <a href="#portfolio"><i class='bx bx-link-external'></i></a>
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