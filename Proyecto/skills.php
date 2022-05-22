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
        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section">
            <h2 class="section__title">Cualificación</h2>
            <span class="section__subtitle">Mi camino hasta ahora</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target="#education">
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Educación
                    </div>

                    <div class="qualification__button button--flex" data-target="#work">
                        <i class="uil uil-bag qualification__icon"></i>
                        Experiencia
                    </div>
                </div>

                <div class="qualification__sections">

                    <!--==================== QUALIFICATION CONTENT 1====================-->
                    <div class="qualification__content qualification__active" data-content id="education">
                        <!--==================== QUALIFICATION 1====================-->
                        <div class="qualification__data">

                            <div>
                                <h3 class="qualification__title">Desarrollo de Aplicaciones Web</h3>
                                <span class="qualification__subtitle">España - LinkiaFP</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-schedule"></i>
                                    2020 - 2022
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>

                        </div>

                        <!--==================== QUALIFICATION 2====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                            <div>
                                <h3 class="qualification__title">Bootcamp: Java - Angular</h3>
                                <span class="qualification__subtitle">España - InstitutoTM</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-schedule"></i>
                                    2019 - 2020
                                </div>
                            </div>


                        </div>

                        <!--==================== QUALIFICATION 3====================-->
                        <div class="qualification__data">

                            <div>
                                <h3 class="qualification__title">Técnico de Redes</h3>
                                <span class="qualification__subtitle">Madrid - España</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-schedule"></i>
                                    2018 - 2019
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>

                        </div>

                        <!--==================== QUALIFICATION 4====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <!--<span class="qualification__line"></span>-->

                            </div>
                            <div>
                                <h3 class="qualification__title">Bootcamp: FullStack</h3>
                                <span class="qualification__subtitle">España - UpgradeHub</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-schedule"></i>
                                    2018 - 2019
                                </div>
                            </div>


                        </div>
                    </div>


                    <!--==================== QUALIFICATION CONTENT 2====================-->
                    <div class="qualification__content" data-content id="work">


                        <!--==================== QUALIFICATION 1====================-->
                        <div class="qualification__data">


                            <div>
                                <h3 class="qualification__title">Practicas Full Stack</h3>
                                <span class="qualification__subtitle">España - <a href="https://www.nibw.es">NIBW</a></span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-schedule"></i>
                                    2020 - 2022
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>


                        </div>

                        <!--==================== QUALIFICATION 2====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                            <div>
                                <h3 class="qualification__title">El Corte Inglés</h3>
                                <span class="qualification__subtitle">España - Madrid</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-schedule"></i>
                                    2018 - 2020
                                </div>
                            </div>


                        </div>
                        <!--==================== QUALIFICATION 3====================-->

                        <div class="qualification__data">

                            <div>
                                <h3 class="qualification__title">Técnico de Redes</h3>
                                <span class="qualification__subtitle">España - Arroyomolinos</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-schedule"></i>
                                    2019
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                        </div>
                        <!--==================== QUALIFICATION 4====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                            <div>
                                <h3 class="qualification__title">Flight Distpacher</h3>
                                <span class="qualification__subtitle">España - Aeropuerto Barajas</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-schedule"></i>
                                    2018 - 2019
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">Habilidades</h2>
            <span class="section__subtitle">Esto es solo informativo, los números son solo para<br> ver las animaciones y el diseño. Tan solo orientativo</span>

            <!--==================== SKILLS 1====================-->

            <div class="skills__container container grid">
                <div>
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Frontend developer</h1>
                                <span class="skills__subtitle">Lenguajes de diseño y marcas</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__title">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__title">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__title">
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__title">
                                    <h3 class="skills__name">VueJS</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__vue"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--==================== SKILLS 2====================-->

                <div>
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-server-alt skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Backend developer</h1>
                                <span class="skills__subtitle">Recién graduado</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__title">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__title">
                                    <h3 class="skills__name">Java</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__java"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__title">
                                    <h3 class="skills__name">MySql</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__mysql"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__title">
                                    <h3 class="skills__name">NodeJS</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__node"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>

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