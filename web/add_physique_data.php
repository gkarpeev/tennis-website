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
    					
    <div class="featured_candidates_area">
        <div class="container">
    
    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h1 class="card-title mt-3 text-center">???????????????????? ???????????????????? ???????????? <?php if (isset($_GET['student_name'])) {echo $_GET['student_name'];}?></h1>
        <form action="add_physique_data.php" method="post">
        <?php include('errors.php') ?>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <?php if (isset($_GET['student_name'])) : ?>
                <input type="text" class="form-control" name="student_name" placeholder="Student name" value="<?php echo $_GET['student_name']?>" required>
            <?php else : ?>
                <input type="text" class="form-control" name="student_name" placeholder="Student name" value="" required>
            <?php endif ?>
        </div> <!-- form-group// -->

        <p> ?????????????? ???????? ???????????????????? ?????????? </p>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="date" class="form-control" name="statistics_date" placeholder="????????" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="run_5_m" placeholder="?????? 5 ?? (??)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="run_10_m" placeholder="?????? 10 ?? (??)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="speed_of_reaction" placeholder="???????????????? ??????????????" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="long_jump" placeholder="???????????? ?? ?????????? ?? ?????????? (????)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="up_jump" placeholder="???????????? ?????????? (????)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="ball_throw" placeholder="?????????????? ?????????????????? ???????? (??)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="realignment_of_movements" placeholder="?????????????????????? ?? ???????????????????????? ???????????????? (??????-???? ?????? ???? 15 ??????)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="consistency_of_actions" placeholder="?????????????????????????????? ???????????????? (????)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="differentiation_of_muscle_efforts" placeholder="???????????????????????????? ???????????????? ???????????? (????)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="ball_feeling" placeholder="?????????????? ???????? (??????-????)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="downward_tilt" placeholder="???????????? ???????? (????)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="twist_stick" placeholder="???????????? ?????????? (????)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="shuttle_run" placeholder="?????? ???????????? (??)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="fan_run" placeholder="?????? ???????? (??)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="jumps_sum_height" placeholder="10 ?????????????? ???????????? ???????????? (????)" required>
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <!-- <span class="input-group-text"> <i class="fa fa-user"></i> </span> -->
            </div>
            <input type="text" class="form-control" name="jumps_time_repulsion" placeholder="10 ?????????????? ?????????? ???????????????????????? (??)" required>
        </div> <!-- form-group// -->

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="add_physique_data"> ???????????????? ???????????? </button>
        </div> <!-- form-group// -->                                               
    </form>
    </article>
    </div> <!-- card.// -->

    </div> 
    <!--container end.//-->
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
</body>
</html>