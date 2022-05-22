<?php
session_start();
if (!isset($_SESSION['nID']))
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="styles/swiper-bundle.min.css">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="styles/styles.css">



    <title>Responsive Portfolio Website</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="indexlog.php" class="nav__logo">Alfonso</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">

                    <li class="nav__item">
                        <a href="indexlog.php" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i>Home
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="services.php" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i>Services
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="skills.php" class="nav__link">
                            <i class="uil uil-file nav__icon"></i>Skills
                        </a>
                    </li>

                
                    <li class="nav__item">
                        <a href="portfolio.php" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i>Portfolio
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="contacto.php" class="nav__link">
                            <i class="uil uil-message nav__icon"></i>Contact Me
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="php/logout.php" class="nav__link">
                        <i class="uil uil-signout nav__icon"></i>Log out
                        </a>
                    </li>

                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>



            <div class="nav__btns">
                <!---------------------------------Night Button---------------------------------->
                <div onclick="modoNoche()">
                    <i class="uil uil-moon change-theme" id="theme-button"></i>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">


        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Aqui se añadiran los trabajos recientes</span>

            <div class="portfolio__container container swiper">
                <div class="swiper-wrapper">
                    <!--==================== PORTFOLIO 1====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="img/proyectos.png" alt="IMAGEN DE PORTFOLIO" class="portfolio__img">


                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Web CV Responsive</h3>
                            <p class="portfolio__description">Proyecto final DAW</p>
                            <a href="https://github.com/alfonsobernaldez" class="button button--flex button--small portfolio__button">
                               Proyectos
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>


              

            </div>

        </section>









        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h1 class="footer__title">Alfonso</h1>
                        <span class="footer__subtitle">Full Stack Developer</span>
                    </div>

                    <ul class="footer__links">
                        <li>
                            <a href="#services" class="footer__link">Services</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="footer__link">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer__link">Contact me</a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a href="https://www.linkedin.com/in/alfonso-bern%C3%A1ldez-del-r%C3%ADo-78883812a/" target="_blank" class="footer__social">
                            <i class="uil uil-linkedin"></i>
                        </a>

                    </div>
                </div>

            </div>
        </footer>
        <!--==================== MAIN JS ====================-->
        <script src="js/main.js"></script>

        <!--==================== SWIPER JS ====================-->
        <script src="js/swiper-bundle.min.js"></script>


        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-location-arrow-alt scrollup__icon"></i>
        </a>


</body>

</html>