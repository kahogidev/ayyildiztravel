<style>
    .dropbtn {
        border: none;
        color: #fff;
        background: #978667;
        outline: none;
        cursor: pointer;
        display: inline-flex;
        text-decoration: none;
        padding:10px!important;
        font-weight: 600;
        border-radius: 25px ;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black!important;
        padding: 12px 10px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #222a30;
        transition: all ease 1s!important;
    }
</style>
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
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn"><?=Yii::t("app", "lang") ?></button>
                                <div class="dropdown-content">
                                    <?php
                                    foreach (Yii::$app->params['language'] as $key => $value){
                                        echo " <a style='font-color:black' href='".\yii\helpers\Url::to(['site/ozgar',"til"=>$key])."'>".$value."</a>";
                                    }
                                    ?>

                                </div>
                            </div>
                        </li>

                        <li><a href="<?=\yii\helpers\Url::to(["admin/"])?>" class="btn_1 btn_scrollto">Login</a></li>
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
            <small class="slide-animated one"></small>
            <h3 class="slide-animated two"><?= Yii::t("app", "sliders1")?></h3>
        </div>
        <div class="mouse_wp slide-animated four">
            <a href="#first_section" class="btn_scrollto">
                <div class="mouse"></div>
            </a>
        </div>
        <!-- /mouse_wp -->
    </div>
</div>