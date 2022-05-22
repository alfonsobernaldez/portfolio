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

        <!--==================== SERVICES ====================-->
        <section class="services section" id="services">
            <h2 class="section__title">Servicios</h2>
            <span class="section__subtitle">Que puedo ofrecer</span>

            <div class="services__container container grid">

                <!--==================== SERVICES 1====================-->

                <div class="services__content">
                    <div>
                        <i class="uil uil-web-grid services__icon"></i>
                        <h3 class="services__title">Programador FrontEnd</h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button">
                        Ver más
                        <i class="uil uil-arrow-from-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Programador FrontEnd</h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Programador JavaScript</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>ReactJs, Vue</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Algunos conocimientos de Angular e Ionic</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--==================== SERVICES 2====================-->

                <div class="services__content">
                    <div>
                        <i class="uil uil-web-grid services__icon"></i>
                        <h3 class="services__title">Programador Backend</h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button">
                        Ver más
                        <i class="uil uil-arrow-from-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Programador Backend</h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Programador en Java</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>También en php o Nodejs</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Gestión en servidores</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--==================== SERVICES 3====================-->

                <div class="services__content">
                    <div>
                        <i class="uil uil-web-grid services__icon"></i>
                        <h3 class="services__title">Técnico de Redes</h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button">
                        Ver más
                        <i class="uil uil-arrow-from-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Técnico de Redes</h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Técnico de sistemas</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Instalación de redes</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Gestión de apps y BBDD</p>
                                </li>
                            </ul>
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
                    <a href="https://www.linkedin.com/in/alfonso-bern%C3%A1ldez-del-r%C3%ADo-78883812a/" target="_blank"
                        class="footer__social">
                        <i class="uil uil-linkedin"></i>
                    </a>

                </div>
            </div>

        </div>
    </footer>
     <!--==================== MAIN JS ====================-->
     <script src="js/main.js"></script>

     <!--==================== SWIPER JS ====================-->
     <script src="js/swiper-bundle.min.js" ></script>
 

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-location-arrow-alt scrollup__icon"></i>
    </a>


</body>

</html>