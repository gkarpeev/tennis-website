<!-- header-start -->
<header>

    <div class="header-area">
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
                                        <li><a href="index.php">Главная</a></li>
                                        <li><a href="profile.php">Мои ученики</a></li>
                                        <li><a href="#">Тренировки <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="profile.php">Мой профиль </a></li>
                                                <li><a href="trainings.php">Мои тренировки</a></li>
                                                <!-- <li><a href="elements.html">elements</a></li> -->
                                            </ul>
                                        </li>
                                        <!-- <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="contact.php">Контакты</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="phone_num d-none d-xl-block">
                                    <!-- if the user logs in print info about him -->

                                    <?php if (isset($_SESSION['username'])) : ?>
                                        <a href="index.php?logout=1">Выйти</a>
                                    <?php else: ?>
                                        <a href="login.php">Войти</a>
                                    <?php endif; ?>
                                </div>
                                <div class="d-none d-lg-block">
                                    <a class="boxed-btn3" href="profile.php">Мой профиль</a>
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