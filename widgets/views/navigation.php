<div class="layer"></div><!-- Opacity Mask -->
<header class="reveal_header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
<!--                <a href="/" class="logo_normal"><img src="/frontend-files/img/logo.png" width="135" height="45" alt=""></a>-->
<!--                <a href="/" class="logo_sticky"><img src="/frontend-files/img/logo_sticky.png" width="135" height="45" alt=""></a>-->
            </div>
            <div class="col-6">
                <nav>
                    <ul>
                        <li><a href="#booking_section" class="btn_1 btn_scrollto">login</a></li>
                        <li>
                            <div class="hamburger_2 open_close_nav_panel">
                                <div class="hamburger__box">
                                    <div class="hamburger__inner"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div><!-- /container -->
</header><!-- /Header -->
<div class="nav_panel">
    <a href="#" class="closebt open_close_nav_panel"><i class="bi bi-x"></i></a>
<!--    <div class="logo_panel"><img src="frontend-files/img/logo_sticky.png" width="135" height="45" alt=""></div>-->
    <div class="sidebar-navigation">
        <nav>
            <ul class="level-1">
                <?php if(!empty($menues)):?>
                     <?php foreach ($menues as $menue): ?>
                        <li class="parent"><a href="<?=$menue->link?>"><?=$menue['name_'.Yii::$app->language];?></a></li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
            <!-- /panel_footer -->
        </nav>
    </div>
    <!-- /sidebar-navigation -->
</div>

<div class="hero full-height jarallax" data-jarallax-video="mp4:./frontend-files/video/sunset.mp4,webm:./frontend-files/video/sunset.webm,ogv:./frontend-files/video/sunset.ogv" data-speed="0.2">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">Luxury Hotel Experience</small>
            <h3 class="slide-animated two">A unique Experience<br>where to stay</h3>
        </div>
        <div class="mouse_wp slide-animated four">
            <a href="#first_section" class="btn_scrollto">
                <div class="mouse"></div>
            </a>
        </div>
        <!-- /mouse_wp -->
    </div>
</div>