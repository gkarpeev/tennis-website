<?php include('server.php') ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tennis Club</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<!-- header-start -->
<header>
    <div class="header-area" style="margin-top: 10px;">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="d-none d-lg-block">
                                    <a class="boxed-btn3" href="login.php">Вход</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->

<div class="container" style="
   margin-top: 120px;
   max-width: 600px;
   height: 650px;">
   
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h1 class="card-title mt-3 text-center">Регистрация</h1>
	<!-- <p class="text-center">Get started with your free account</p> -->
    <div class="row align-items-center">
        <div class="col-xl-3 col-lg-2" style="margin-left: 45px;">
            <div class="logo">
                <a href="index.php">
                    <img src="img/logo2.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
	<form action="registration.php" method="post">
        <?php include('errors.php') ?>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email address" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" placeholder="Create password" type="password" name="password_1" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" placeholder="Repeat password" type="password" name="password_2" required>
        </div> <!-- form-group// -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="reg_user"> Создать Профиль </button>
        </div> <!-- form-group// -->      
        <p class="text-center"> Есть аккаунт? <a href="login.php"><b>Войти</b></a></p>                                     
    </form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
</body>

<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <p>
                            glebkarpeev046@gmail.com <br>
                            +7 906 380 50 27 <br>
                            Чебоксары, Чувашская Республика
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="https://t.me/gkarp">
                                        <i class="fa fa-telegram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                        <h3 class="footer_title">
                            Компания
                        </h3>
                        <ul>
                            <li><a href="contact.html">О нас </a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <h3 class="footer_title">
                            Категории
                        </h3>
                        <ul>
                            <li><a href="profile.php">Мой профиль</a></li>
                            <li><a href="contact.html">Мои тренировки</a></li>
                            <li><a href="profile.php">Мои ученики</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                        <h3 class="footer_title">
                            Подписаться
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Введите свою эл. почту">
                            <button type="submit">Подписать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->

</html>