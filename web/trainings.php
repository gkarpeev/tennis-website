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
                    <div class="bradcam_text">
                        <h3>???????????????? 20+ ???????????????? ????????????????????</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- training_listing_area_start  -->
    <div class="training_listing_area plus_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="training_filter white-bg">
                        <div class="form_inner white-bg">
                            <h3>????????????</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <input type="text" placeholder="?????????? ???? ?????????????????? ??????????">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="??????????????????">??????????????????</option>
                                                <option value="1">???????????? ????????????????????</option>
                                                <option value="2">?????????????? ????????????????????</option>
                                                <option value="3">?????????????? ????????????????????</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="???????? ????????????????????">???????? ????????????????????</option>
                                                <option value="1">?????????????? ????????????????????</option>
                                                <option value="2">???????????????????? ???? ????????????????</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="reset_btn">
                            <button  class="boxed-btn3 w-100" type="submit">????????????????</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="recent_traininglist_wrap">
                        <div class="recent_traininglist white-bg ">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h4>???????????????????????? ????????????????????</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="serch_cat d-flex justify-content-end">
                                        <select>
                                            <option data-display="????????????????">????????????????</option>
                                            <option value="1">?????????????? ????????????????????</option>
                                            <option value="2">???????????????????? ???? ????????????????</option>
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
                                            <a href="training_1_details.php"><h4>?????????????? ???????????????????? ???? ???????? ?? ????????</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  ?????????? ???????????????????? ~45 ??????????</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_1_details.php" class="boxed-btn3">??????????????????</a>
                                        </div>
                                        <div class="date">
                                            <p>??????????????????: ????????????</p>
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
                                            <a href="training_2_details.php"><h4>?????????????? ???????????????????? ???? ???????????? ?? ????????</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  ?????????? ???????????????????? ~45 ??????????</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_2_details.php" class="boxed-btn3">??????????????????</a>
                                        </div>
                                        <div class="date">
                                            <p>??????????????????: ????????????</p>
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
                                            <a href="training_3_details.php"><h4>?????????????? ???????????????????? ???? ????????????</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  ?????????? ???????????????????? ~1 ??????</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_3_details.php" class="boxed-btn3">??????????????????</a>
                                        </div>
                                        <div class="date">
                                            <p>??????????????????: ??????????????</p>
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
                                            <a href="training_4_details.php"><h4>?????????????? ???????????????????? ???? ????????</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  ?????????? ???????????????????? ~1 ??????</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_4_details.php" class="boxed-btn3">??????????????????</a>
                                        </div>
                                        <div class="date">
                                            <p>??????????????????: ??????????????</p>
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
                                            <a href="training_5_details.php"><h4>?????????????? ???????????????????? ???? ?????? ????????</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  ?????????? ???????????????????? ~90 ?????????? </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_5_details.php" class="boxed-btn3">?????????????????? </a>
                                        </div>
                                        <div class="date">
                                            <p>??????????????????: ??????????????</p>
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
                                            <a href="training_6_details.php"><h4>?????????????? ???????????????????? ???? ???????????? ?? ????????????</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  ?????????? ???????????????????? ~1 ??????</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_6_details.php" class="boxed-btn3">??????????????????</a>
                                        </div>
                                        <div class="date">
                                            <p>??????????????????: ??????????????</p>
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
                                            <a href="training_7_details.php"><h4>?????????????? ???????????????????? ???? ???????????? ?? ????????</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <!-- <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                                </div> -->
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>  ?????????? ???????????????????? ~45 ?????????? </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trainings_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                                            <a href="training_7_details.php" class="boxed-btn3">??????????????????</a>
                                        </div>
                                        <div class="date">
                                            <p>??????????????????: ??????????????</p>
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
                                ??????????????????, ?????????????????? ????????????????????
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
                                ????????????????
                            </h3>
                            <ul>
                                <li><a href="contact.html">?? ?????? </a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <h3 class="footer_title">
                                ??????????????????
                            </h3>
                            <ul>
                                <li><a href="profile.php">?????? ??????????????</a></li>
                                <li><a href="contact.html">?????? ????????????????????</a></li>
                                <li><a href="profile.php">?????? ??????????????</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                            <h3 class="footer_title">
                                ??????????????????????
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="?????????????? ???????? ????. ??????????">
                                <button type="submit">??????????????????</button>
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
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/range.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>


	<script>
        $( function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 24600,
                values: [ 750, 24600 ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] +"/ Year" );
                }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                " - $" + $( "#slider-range" ).slider( "values", 1 ) + "/ Year");
        } );
        </script>
</body>

</html>