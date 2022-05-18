<!DOCTYPE html>
<html lang="en">
<?php session_start();?>


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
            <a href="#" class="nav__logo">Alfonso</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">

                    <li class="nav__item">
                        <a href="#" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i>Home
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i>About
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="loginhtml.php" class="nav__link">
                            <i class="uil uil-file nav__icon"></i>Login
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="register.php" class="nav__link">
                            <i class="uil uil-file nav__icon"></i>Register
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contacto" class="nav__link">
                            <i class="uil uil-message nav__icon"></i>Contact Me
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
        <!--==================== HOME ====================-->

        <!--====================  SECCION OCULTA CON LOGGIN ====================-->

        <section class="home__section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/alfonso-bern%C3%A1ldez-del-r%C3%ADo-78883812a/" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin"></i>
                        </a>
                        <a href="" class="home__social-icon">
                            <i class="uil uil-dribbble"></i>
                        </a>
                        <a href="https://github.com/alfonsobernaldez" class="home__social-icon">
                            <i class="uil uil-github"></i>
                        </a>
                    </div>

                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                <image class="home__blob-img" x="28" y="-10" xlink:href="img/foto_perfil.png" />
                            </g>
                        </svg>
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Hola, soy Alfonso</h1>
                        <h3 class="home__subtitle">Full stack developer</h3>
                        <p class="home__description">Recién graduado en Desarrollo de Aplicaciones Web, en búsqueda de
                            su primer empleo.</p>


                    </div>
                </div>

                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse home__scroll-mouse"></i>
                        <span class="home__scroll-name">Expandir</span>
                        <i class="uil uil-angle-down home__scroll-arrow"></i>
                    </a>
                </div>

            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about__section" id="about">
            <h2 class="section__title">Sobre mi</h2>
            <span class="section__subtitle">Mi introducción</span>
            <div class="about__container container grid">
                <img src="img/foto_perfil.png" alt="foto 2" class="about__img">
                <div class="about__data">
                    <p class="about__description">Full stack developer, recién graduado en Desarrollo de Aplicaciones
                        Web, con muchas ganas de aprender.</p>

                    <div class="about__info">
                        <div>
                            <span class="about__info-title">0.5</span>
                            <span class="about__info-name">Años de<br> experiencia</span>
                        </div>

                        <div>
                            <span class="about__info-title">4</span>
                            <span class="about__info-name">Meses de <br>prácticas <br> en empresa</span>
                        </div>
                    </div>


                </div>
            </div>
        </section>






        <!--==================== PROJECT IN MIND ====================-->
        <section class="project section">
            <div class="project__bg">
                <div class="project__container container grid">
                    <div class="project__data">
                        <h2 class="project__title">You have a new project?</h2>
                        <p class="project__description">Login to get in touch <br>or write a message down below</p>
                        <a href="#contact" class="button button--flex button--white">
                            Login
                            <i class="uil uil-message project__icon button__icon"></i>
                        </a>
                    </div>
                    <div class="adjust__img">
                        <img src="img/foto_perfil.png" alt="" class="project__img">
                    </div>
                </div>
            </div>
        </section>
        <!-----------------------------------------------FORMULARIO DE CONTACTO OFF----------------------------------------------->
        <section class="contact section" id="contacto">
            <h2 class="section__title">Contact me</h2>
            <span class="section__subtitle">Get in touch</span>
            <div class="contact__container container grid">

                <form action="" class="contact__form grid">
                    <div class="contact__inputs grid">

                        <div class="contact__content">
                            <label for="" class="contact__label">Name</label>
                            <input type="text" class="contact__input" style="width: 350px;">
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Email</label>
                            <input type="email" class="contact__input" style="width: 350px;">
                        </div>

                    </div>
                    <div class="contact__content message__box">
                        <label for="" class="contact__label">Mensaje</label>
                        <textarea name="" id="" cols="0" rows="7" class="contact__input" style="width: 700px;"></textarea>
                    </div>

                    <div>
                        <a href="#" class="button button--flex">
                            Send
                            <i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </form>
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