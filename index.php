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

        

        <a href="#" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#skills">Skills</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

        
        <div class="bx bx-moon" id="darkMode-icon"></div>
    </header>

    <!-- header section ends -->
        
    <!-- Home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>Hello 👋🏾, I am</h3>
            <h1>Cholwe Muleya</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Dolores et non ducimus unde, provident labore!</p>

            <div class="social">
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-linkedin-square' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
                <a href="#"><i class='bx bxl-whatsapp' ></i></a>
        </div>

            <a href="#" class="btn">Download CV</a>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Exercitationem quas eius aperiam ipsa quisquam veniam 
                    rerum ab architecto blanditiis voluptatum, deserunt 
                    labore quia tempora porro recusandae, voluptates tenetur 
                    saepe numquam velit ea? Illo, maxime quod?</p>
                <a href="#" class="btn">Read More</a>
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
                    <p>Lorem ipsum dolor sit, amet consectetur
                         adipisicing elit. Eius necessitatibus
                          eveniet sed, accusantium nobis 
                          corporis?</p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="services-box">
                    <i class="bx bx-data"></i>
                    <h3>Database Administration</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur
                         adipisicing elit. Eius necessitatibus
                          eveniet sed, accusantium nobis 
                          corporis?</p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="services-box">
                    <i class="bx bx-terminal"></i>
                    <h3>Penetration Testing</h3>
                    <small>(Coming Soon!)</small>
                    <p>Lorem ipsum dolor sit, amet consectetur
                         adipisicing elit. Eius necessitatibus
                          eveniet sed, accusantium nobis 
                          corporis?</p>
                    <a href="#" class="btn">Read More</a>
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
                <div class="bar"><h3><span>SQL</span> <span>88%</span></h3></div>
                <div class="bar"><h3><span>C++</span> <span>65%</span></h3></div>
                <div class="bar"><h3><span>Python</span> <span>60%</span></h3></div>
            </div>
        </div>

    </section>
    <!-- Skills section ends -->

    <!-- Portfolio section starts -->

        <section class="portfolio" id="portfolio">
            <h2 class="heading">Latest <span>Projects</span></h2>

            <div class="portfolio-container">
                <div class="portfolio-box">
                    <img src="images/webdev.jpg" alt="">

                    <div class="portfolio-layer">
                        <h4>Web Development</h4>
                        <p>Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Fuga, optio quae nesciunt 
                            blanditiis quas odio.</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="images/data.jpg" alt="">

                    <div class="portfolio-layer">
                        <h4>Database Admin</h4>
                        <small>(Coming Soon!)</small>
                        <p>Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Fuga, optio quae nesciunt 
                            blanditiis quas odio.</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="images/pentest.jpg" alt="">

                    <div class="portfolio-layer">
                        <h4>Pen Testing</h4>
                        <small>(Coming Soon!)</small>
                        <p>Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Fuga, optio quae nesciunt 
                            blanditiis quas odio.</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>
            </div>
        </section>

    <!-- Portfolio section ends -->

   


<!-- js file link -->

<script src="js/script.js"></script>

</body>
</html>