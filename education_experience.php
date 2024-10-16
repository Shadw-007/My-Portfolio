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



        <a href="index.php" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="index.php" class="active">Home</a>
            <a href="index.php#about">About</a>
            <a href="index.php#services">Services</a>
            <a href="index.php#skills">Skills</a>
            <a href="index.php#portfolio">Certifications</a>
            <a href="index.php#contact">Contact</a>
        </nav>


        <div class="bx bx-moon" id="darkMode-icon"></div>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <!-- header section ends -->

    <!-- Home section starts -->

    <section class="edu-exp" id="edu-exp">

        <div class="content">
            <h3>Experience</h3>
            <p>Kindly refer to my Curriculum Vitae for full details </p>


            <div class="box">
                <span>(01/2021 - Present)</span>
                <h4>Web Developer | Freelance - Zambia </h4>
                <ul>
                    <li>Running debugging tools to eliminate flaws and glitches prior tools
                        pblishing
                    </li>
                    <li>Coding websites using HTML, CSS, JavaScript, and PHP languages</li>
                </ul>
            </div>

            <div class="box">
                <span>(04/2024 - 07/2024)</span>
                <h4>Logistics Officer | Sunline International Logistics </h4>
                <ul>
                    <li>Consistently met company and department objectives within budget and time constraints</li>
                    <li>Supervised fleet dispatch activities and validated operations after service</li>
                </ul>
            </div>

        </div>


        <div class="profession-container">
            <div class="profession-box">
                <div class="profession" style="--i:0;">
                    <i class='bx bxs-school'></i>
                    <h3>Education</h3>
                </div>
                <div class="profession" style="--i:1;">
                    <i class='bx bxs-graduation'></i>
                    <h3>Northrise University</h3>
                    <small>2020-2023: Web & Software Development (Bachelors)</small>
                </div>
                <div class="profession" style="--i:2;">
                    <i class='bx bxs-graduation'></i>
                    <h3>Fontys University</h3>
                    <small>2022-2023: International Business (Minor)</small>
                </div>
                <div class="profession" style="--i:3;">
                    <i class='bx bxs-graduation'></i>
                    <h3>NuYew</h3>
                    <small>2024-Present: Cybersecurity</small>
                </div>


                <div class="circle"></div>
            </div>

            <div class="overlay"></div>
        </div>

        <div class="edu-exp-img">
            <img src="images/scroll.png" alt="education image">
        </div>
    </section>

    <!-- Home section ends -->


    <!-- Footer section starts -->

    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by Cholwe Muleya | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#edu-exp"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    <!-- Footer section ends -->


    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- js file link -->

    <script src="js/script.js"></script>

</body>

</html>