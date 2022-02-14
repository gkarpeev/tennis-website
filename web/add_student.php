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
    <link rel="stylesheet" href="css/jquery-ui.css">
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

    <!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8">
                        <h2 class="mb-30">Добавить ученика</h2>
                        <?php include('errors.php') ?>
						<form action="add_student.php" method="post">
							<div class="mt-10">
								<input type="text" name="student_name" placeholder="Имя ученика"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Имя ученика'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="email" name="student_email" placeholder="Эл. Почта"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Эл. Почт'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="tel" name="student_phone_number" placeholder="Номер телефона"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Номер телефона'"
                                	required
									class="single-input">
							</div>
                            <div class="form-group input-group">
                            <div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
									<select>
									<option value="0">Страна</option>
									<option value="1">Россия</option>
									<option value="2">Украина</option>
									<option value="3">Великобритания</option>
									<option value="4">Китай</option>
									</select>
								</div>
							</div>
                            <div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
									<select>
									<option value="0">Город</option>
									<option value="1">Москва</option>
									<option value="2">Санкт - Петербург</option>
									<option value="3">Казань</option>
									<option value="4">Чебоксары</option>
									</select>
								</div>
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
								<input type="text" name="student_home_address" placeholder="Адрес"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Адрес'" required
									class="single-input">
							</div>
                            </div>
                            <div class="mt-10">
								<input type="text" name="student_age" placeholder="Возраст"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Возраст'" required
									class="single-input">
							</div> 
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="bi bi-gender-ambiguous" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
									<select>
									<option value="0">Пол</option>
									<option value="1">M</option>
									<option value="2">Ж</option>
									</select>
								</div>
							</div>
                            <div class="mt-10">
                                <button type="submit" class="btn btn-primary btn-block" name="add_student"> Добавить ученика </button>
							</div> 
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

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

	

	<script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>

</body>
</html>