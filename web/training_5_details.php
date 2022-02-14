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

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Физическая подготовка</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="training_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="training_details_header">
                        <div class="single_trainings white-bg d-flex justify-content-between">
                            <div class="trainings_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/5.svg" alt="">
                                </div>
                                <div class="trainings_conetent">
                                    <a href="#"><h4>Силовая тренировка на все тело</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <!-- <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                        </div> -->
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> Время выполнения ~90 минут</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trainings_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                        <div class="single_wrap">
                            <h4>Описание тренировки</h4>
                            <p> Силовая тренировка, акцент на все тело. </p>
                        </div>
                        <div class="single_wrap">
                            <h4>Программа тренировки</h4>
                            <ul>
                                <li>3 круга. Пауза между кругами 1-2 минуты. Пауза отдыха между упражнениями не больше 30 секунд.
                                </li>
                                <li>1. Поза супермен в динамике: 15 повторений</li>
                                <video width="320" height="240" controls muted="muted">
                                    <source src="trainings/strength_complex/17.mp4" type="video/mp4">
                                </video>
                                <li>2. Подъем прямых ног лежа на земле 10 повторений </li>
                                <video width="320" height="240" controls muted="muted">
                                    <source src="trainings/strength_complex/11.mp4" type="video/mp4">
                                </video>
                                <li>3. Скручивания туловища велосипед 20 повторений </li>
                                <video width="320" height="240" controls muted="muted">
                                    <source src="trainings/strength_complex/13.mp4" type="video/mp4">
                                </video>
                                <li>4. Скручивания лежа на спине с прямыми ногами 8 повторений</li>
                                <video width="320" height="240" controls muted="muted">
                                    <source src="trainings/strength_complex/29.mp4" type="video/mp4">
                                </video>
                                <li>5. Отведение бедра, лежа на животе 15 повторений</li>
                                <video width="320" height="240" controls muted="muted">
                                    <source src="trainings/strength_complex/34.mp4" type="video/mp4">
                                </video>
                                <li>6. Приседания на одной ноге 3 повторения</li>
                                <video width="320" height="240" controls muted="muted">
                                    <source src="trainings/strength_complex/39.mp4" type="video/mp4">
                                </video>
                                <li>7. Приседания сумо 20 повторений</li>
                                <video width="320" height="240" controls muted="muted">
                                    <source src="trainings/strength_complex/44.mp4" type="video/mp4">
                                </video>
                                <li>8. Приседания на одной ноге 3 повторения</li>
                                <video width="320" height="240" controls muted="muted">
                                    <source src="trainings/strength_complex/39.mp4" type="video/mp4">
                                </video>
                                <li>9. Отжимания спайдермен 10 повторений</li>
                                <video width="320" height="240" controls muted="muted">
                                    <source src="trainings/strength_complex/62.mp4" type="video/mp4">
                                </video>
                                <li>10. Приседания на одной ноге 3 повторения</li>
                                <video width="320" height="240" controls muted="muted">
                                    <source src="trainings/strength_complex/39.mp4" type="video/mp4">
                                </video>
                                <li>11. Берпи с отжиманием 5 повторений</li>
                                <video width="320" height="240" controls muted="muted">
                                    <source src="trainings/strength_complex/64.mp4" type="video/mp4">
                                </video>
                            </ul>
                        </div>
                        <!-- <div class="single_wrap">
                            <h4>Qualifications</h4>
                            <ul>
                                <li>The applicants should have experience in the following areas.
                                </li>
                                <li>Have sound knowledge of commercial activities.</li>
                                <li>Leadership, analytical, and problem-solving abilities.</li>
                                <li>Should have vast knowledge in IAS/ IFRS, Company Act, Income Tax, VAT.</li>
                            </ul>
                        </div> -->
                        <div class="single_wrap">
                            <h4>Рекомендации</h4>
                            <p> После выполнения комплекса рекомендуем выполнить упражнения на гибкость </p>
                        </div>
                    </div>
                    <div class="apply_training_form white-bg">
                        <h4>Добавить тренировку</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Ваше имя">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Эл. Почта">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <button type="button" id="inputGroupFileAddon03"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                          </button>
                                        </div>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                          <label class="custom-file-label" for="inputGroupFile03">Загрузить комплекс тренировок</label>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input_field">
                                        <textarea name="#" id="" cols="30" rows="10" placeholder="Описание"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn3 w-100" type="submit">Добавить тренировку</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="training_sumary">
                        <div class="summery_header">
                            <h3>Сводка тренировки</h3>
                        </div>
                        <div class="training_content">
                            <ul>
                                <li>Опубликовано: <span>15 Мая, 2021</span></li>
                                <li>Сложность: <span>Сложная</span></li>
                                <li>Количество упражнений: <span>11</span></li>
                                <li>Время выполнения: <span> ~90 минут</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="share_wrap d-flex">
                        <span>Поделиться:</span>
                        <ul>
                            <li><a href="#"> <i class="fa fa-facebook"></i></a> </li>
                            <li><a href="#"> <i class="fa fa-google-plus"></i></a> </li>
                            <li><a href="#"> <i class="fa fa-twitter"></i></a> </li>
                            <li><a href="#"> <i class="fa fa-envelope"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

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