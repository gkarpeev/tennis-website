<?php include('server.php') ?>
<?php

if (!isset($_SESSION)) session_start();


if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first to view the page";
    header("location: login.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

?>

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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <?php include("header.php") ?>

    <!-- slider_area_start -->
    <div class="slider_area" >
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="slider_text">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Фабрика чемпионов</h3>
                            <!-- <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <a href="#" class="boxed-btn3">Upload your Goals</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
            <!-- <img src="img/banner/illustration.png" alt=""> -->
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- training_listing_area_start  -->
    <div class="training_listing_area plus_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="recent_traininglist_wrap">
                        <div class="recent_traininglist white-bg ">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h4>Предлагаемые тренировки</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="serch_cat d-flex justify-content-end">
                                        <select>
                                            <option data-display="Недавние">Недавние</option>
                                            <option value="1">Силовая Тренировка</option>
                                            <option value="2">Тренировка на гибкость</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="training_lists m-0">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="single_trainings white-bg d-flex justify-content-between">
                                    <div class="trainings_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/svg_icon/1.svg" alt="">
                                        </div>
                                        <div class="trainings_conetent">
                                            <a href="training_1_details.php"><h4>Силовая тренировка на руки и ноги</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  Время выполнения ~45 минут</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_1_details.php" class="boxed-btn3">Выполнить</a>
                                        </div>
                                        <div class="date">
                                            <p>Сложность: Легкая</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_trainings white-bg d-flex justify-content-between">
                                    <div class="trainings_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/svg_icon/2.svg" alt="">
                                        </div>
                                        <div class="trainings_conetent">
                                            <a href="training_2_details.php"><h4>Силовая тренировка на корпус и ноги</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  Время выполнения ~45 минут</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_2_details.php" class="boxed-btn3">Выполнить</a>
                                        </div>
                                        <div class="date">
                                            <p>Сложность: Легкая</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_trainings white-bg d-flex justify-content-between">
                                    <div class="trainings_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/svg_icon/3.svg" alt="">
                                        </div>
                                        <div class="trainings_conetent">
                                            <a href="training_3_details.php"><h4>Силовая тренировка на корпус</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  Время выполнения ~1 час</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_3_details.php" class="boxed-btn3">Выполнить</a>
                                        </div>
                                        <div class="date">
                                            <p>Сложность: Средняя</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_trainings white-bg d-flex justify-content-between">
                                    <div class="trainings_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/svg_icon/4.svg" alt="">
                                        </div>
                                        <div class="trainings_conetent">
                                            <a href="training_4_details.php"><h4>Силовая тренировка на руки</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  Время выполнения ~1 час</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_4_details.php" class="boxed-btn3">Выполнить</a>
                                        </div>
                                        <div class="date">
                                            <p>Сложность: Средняя</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_trainings white-bg d-flex justify-content-between">
                                    <div class="trainings_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/svg_icon/5.svg" alt="">
                                        </div>
                                        <div class="trainings_conetent">
                                            <a href="training_5_details.php"><h4>Силовая тренировка на все тело</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  Время выполнения ~90 минут </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_5_details.php" class="boxed-btn3">Выполнить </a>
                                        </div>
                                        <div class="date">
                                            <p>Сложность: Сложная</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_trainings white-bg d-flex justify-content-between">
                                    <div class="trainings_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/svg_icon/6.svg" alt="">
                                        </div>
                                        <div class="trainings_conetent">
                                            <a href="training_6_details.php"><h4>Силовая тренировка на корпус и кардио</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  Время выполнения ~1 час</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_6_details.php" class="boxed-btn3">Выполнить</a>
                                        </div>
                                        <div class="date">
                                            <p>Сложность: Средняя</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_trainings white-bg d-flex justify-content-between">
                                    <div class="trainings_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/svg_icon/1.svg" alt="">
                                        </div>
                                        <div class="trainings_conetent">
                                            <a href="training_7_details.php"><h4>Силовая тренировка на корпус и руки</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  Время выполнения ~45 минут </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_7_details.php" class="boxed-btn3">Выполнить</a>
                                        </div>
                                        <div class="date">
                                            <p>Сложность: Средняя</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pagination_wrap">
                                    <ul>
                                        <li><a href="#"> <i class="ti-angle-left"></i> </a></li>
                                        <li><a href="#"><span>01</span></a></li>
                                        <li><a href="#"><span>02</span></a></li>
                                        <li><a href="#"> <i class="ti-angle-right"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- training_listing_area_end  -->

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

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
</body>

</html>