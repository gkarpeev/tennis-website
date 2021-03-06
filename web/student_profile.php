<?php include('server.php') ?>
<?php

if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first to view the page";
    header("location: login.php");
}

if (!isset($_GET['student_name'])) {
    $_SESSION['msg'] = "You must choose student first to view the page";
    header("location: profile.php");
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
    
    <div>
    
        </div>
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

    <!-- popular_catagory_area_start  -->
    <div class="featured_candidates_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-4 mt-4">
                        <h3>???????????????????? ???????????????????? ????????????????????????????????</h3>
                    </div>
                </div>
            </div>
        <div class="container mt-4">
        <?php
        // show students
        if (isset($_SESSION['username'])) :
            $username = $_SESSION['username'];
            $student_name = $_GET['student_name'];
        ?>
         <?php
        $student_check_query = "SELECT * FROM student WHERE coach_username = '$username' and student_name = '$student_name' LIMIT 1";
        $result = mysqli_query($db, $student_check_query);
        $student = mysqli_fetch_assoc($result);
    
        if ($student) {
            if ($student['coach_username'] != $username) {
                $_SESSION['msg'] = "You must choose student first to view the page";
                header("location: profile.php");
            }
            if ($student['student_name'] != $student_name) {
                $_SESSION['msg'] = "You must choose student first to view the page";
                header("location: profile.php");
            }
        } else {
            $_SESSION['msg'] = "You must choose student first to view the page";
            header("location: profile.php");
        }
        
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-20">
                    <h3> <?php echo $student_name ?> </h3>
                </div>
                <div class="section_title text-center mb-20">
                    <p> <?php echo $student['age'] ?> ?????? </p>
                </div>
                <div class="col-lg-12">
                    <div class="brouse_training text-right mb-4">
                        <a href="add_physique_data.php?student_name=<?php echo $student_name ?>" class="boxed-btn4">???????????????? ??????. ???????????? ??????????????</a>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="col-lg-12 col-md-10">
            <table class="table table-bordered" style="text-align: center">
                <?php
                $physique_data_query = "SELECT * FROM physique_data WHERE username = '$username' and student_name = '$student_name'";
                $result = mysqli_query($db, $physique_data_query);?>
                <thead>
                    <tr>
                    <th scope="col">????????????????</th>
                    <th scope="col">????????????????????</th>
                    <?php while ($statistics = mysqli_fetch_assoc($result)) : ?>
                        <th scope="col"> <?php echo $statistics['date'] ?> </th>
                    <?php endwhile ?>
                    <!-- <th scope="col">????????</th>  -->
                    <th scope="col">????????????????</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                    <th scope="row" rowspan="3">????????????????????</th>
                    <td>
                    ?????? 5 ?? (??)
                    </td>
                    <?php $type_stat = 'run_5_m';?>
                    <?php include('construct_table2.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <td>
                    ?????? 10 ?? (??)
                    </td>
                    <?php $type_stat = 'run_10_m';?>
                    <?php include('construct_table2.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <td>
                    ???????????????? ??????????????
                    </td>
                    <?php $type_stat = 'speed_of_reaction';?>
                    <?php include('construct_table1.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <th scope="row" rowspan="3">??????????????????-??????????????</th>
                    <td>???????????? ?? ?????????? ?? ?????????? (????)</td>
                    <?php $type_stat = 'long_jump';?>
                    <?php include('construct_table1.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>
                    
                    <tr>
                    <td>
                    ???????????? ?????????? (????)
                    </td>
                    <?php $type_stat = 'up_jump';?>
                    <?php include('construct_table1.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <td>
                    ?????????????? ?????????????????? ???????? (??)
                    </td>
                    <?php $type_stat = 'ball_throw';?>
                    <?php include('construct_table1.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>
                    
                    <tr>
                    <th scope="row" rowspan="4">??????????????????????????????</th>
                    <td>?????????????????????? ?? ????????????????????????
                    ???????????????? (??????-???? ?????? ???? 15 ??????)</td>
                    <?php $type_stat = 'realignment_of_movements';?>
                    <?php include('construct_table1.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    
                    <tr>
                    <td>
                    ?????????????????????????????? ???????????????? (????)
                    </td>
                    <?php $type_stat = 'consistency_of_actions';?>
                    <?php include('construct_table1.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <td>
                    ???????????????????????????? ???????????????? ???????????? (????)
                    </td>
                    <?php $type_stat = 'differentiation_of_muscle_efforts';?>
                    <?php include('construct_table2.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <td>
                    ?????????????? ???????? (??????-????)
                    </td>
                    <?php $type_stat = 'ball_feeling';?>
                    <?php include('construct_table1.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <th scope="row" rowspan="2">????????????????</th>
                    <td>???????????? ???????? (????)</td>
                    <?php $type_stat = 'downward_tilt';?>
                    <?php include('construct_table1.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <td>
                    ???????????? ?????????? (????)
                    </td>
                    <?php $type_stat = 'twist_stick';?>
                    <?php include('construct_table1.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <th scope="row">???????????????????? ???????????????????? ????????????????????????</th>
                    <td>?????? "????????????" (??)</td>
                    <?php $type_stat = 'shuttle_run';?>
                    <?php include('construct_table2.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <th scope="row">???????????????????? ?????????????????? ????????????????????????</th>
                    <td>?????? "????????" (??)</td>
                    <?php $type_stat = 'fan_run';?>
                    <?php include('construct_table2.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <th scope="row" rowspan="2">??????????????????-?????????????? ????????????????????????</th>
                    <td> 10 ?????????????? ???????????? ???????????? (????)</td>
                    <?php $type_stat = 'jumps_sum_height';?>
                    <?php include('construct_table1.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>

                    <tr>
                    <td>
                    10 ?????????????? ?????????? ?????????????????????????? (??)
                    </td>
                    <?php $type_stat = 'jumps_time_repulsion';?>
                    <?php include('construct_table2.php'); ?>
                    <td>
                    <?php include('build_graph.php'); ?>
                    </td>
                    </tr>
                </tbody>
            </table>
            </div>
            <?php endif ?>
        </div>
        </div>
    </div>
    <!-- popular_catagory_area_end  -->


    <!-- trainings_listing_area_start  -->
    <div class="training_listing_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3>?????????????????????????? ????????????????????</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="brouse_training text-right">
                        <a href="trainings.php" class="boxed-btn4">???????????????? ???????????? ????????????????????</a>
                    </div>
                </div>
            </div>
            <div class="training_lists">
                <div class="row">
                    <div class="col-lg-9">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trainings_listing_area_end  -->

    <!-- featured_candidates_area_start  -->
    <div class="featured_candidates_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3>?????? ??????????????</h3>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                    <?php
                    // show students

                    if (isset($_SESSION['username'])) :
                        $username = $_SESSION['username'];
                        $user_check_query = "SELECT * FROM student WHERE coach_username = '$username'";
                        $result = mysqli_query($db, $user_check_query);
                        while ($student = mysqli_fetch_assoc($result)) : ?>
                            <div class="single_candidates text-center">
                                <div class="thumb">
                                    <img src="img/candiateds/1.png" alt="">
                                </div>
                                <a href="student_profile.php?student_name=<?php echo $student['student_name']?>" ><h4><?php echo $student['student_name'] ?></h4></a>
                                <p><?php echo $student['age']?> ??????</p>
                            </div>
                        <?php endwhile ?>

                    <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured_candidates_area_end  -->


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