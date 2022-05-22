<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="styles/swiper-bundle.min.css">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="styles/styles.css">



</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">Alfonso</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">

                    <li class="nav__item">
                        <a href="index.php" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i>Home
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="index.php#about" class="nav__link">
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

    <!-----------------------------------------------FORMULARIO DE CONTACTO LOGIN----------------------------------------------->
    <section class="contact section" id="contact">
        <h2 class="section__title">Login Zone</h2>
        <span class="section__subtitle">Welcome, please login to acces to the private zone</span>
        <div class="contact__container container grid">

            <form action="php/login.php" method="post" class="contact__form grid">
                <div class="contact__inputs grid">

                    <div class="contact__content">
                        <label for="" class="contact__label">Email</label>
                        <input type="email" class="contact__input" name='correo' style="width: 350px;">
                    </div>
                    <div class="contact__content">
                        <label for="" class="contact__label">Password</label>
                        <input type="password" class="contact__input" name='contra' style="width: 350px;">
                    </div>

                    <div>
                        <input type='submit' value='Entrar' class="button button--flex" style="width: 200px;">
                    </div>
            </form>


        </div>
    </section>

    <?php

    if (isset($_SESSION['error_login'])) {
        echo $_SESSION['error_login'];
        unset($_SESSION['error_login']);
    }
    ?>


<script src='js/main.js'></script>
<script src="js/swiper-bundle.min.js"></script>
</body>


</html>