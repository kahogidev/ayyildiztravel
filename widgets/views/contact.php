<?php if (!empty($models)):?>
    <?php foreach ($models as $model):?>
        <div class="container margin_120_95" id="booking_section">
    <div class="row justify-content-between">
        <div class="col-xl-4">
            <div data-cue="slideInUp">
                <div class="title">
                    <small>Ayyildiz Travel</small>
                    <h2><?= Yii::t("app", "contactp")?></h2>
                </div>
                <p class="phone_element no_borders"><a href="tel://<?=$model->first_phone?>"><i class="bi bi-telephone"></i><span><em></em><?=$model->first_phone?></span></a></p>
            </div>
        </div>
        <div class="col-xl-7">
            <div data-cue="slideInUp" data-delay="200">
                <div class="booking_wrapper">
                    <p id="daterangepicker-result" class="d-none"></p>
                    <input id="date_booking" type="hidden">
                    <div id="daterangepicker-embedded-container" class="embedded-daterangepicker clearfix mb-4"></div>

                </div>
                <!-- / row -->

            </div>
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
</div>
    <?php endforeach;?>
<?php endif;?>
<div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="/frontend-files/img/hero_home_2.jpg" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <h1 class="slide-animated two"><?= Yii::t("app", "contactt")?></h1>
        </div>
    </div>
</div>
<!-- /Background Img Parallax -->

<div class="container margin_120_95">
    <div class="row justify-content-between">
        <div class="col-xl-4 col-lg-5 order-lg-2">
            <?php if (!empty($models)):?>
                <?php foreach ($models as $model):?>
                    <div class="contact_info">
                <ul class="clearfix">
                    <li>
                        <i class="bi bi-geo-alt"></i>
                        <h4><?= Yii::t("app", "location")?></h4>
                        <div><?=$model->addres?></div>
                    </li>
                    <li>
                        <i class="bi bi-envelope-paper"></i>
                        <h4><?= Yii::t("app", "email")?></h4>
                        <div><?=$model->addres?></div>

                    </li>
                    <li>
                        <i class="bi bi-telephone"></i>
                        <h4><?= Yii::t("app", "tel")?></h4>
                        <div><?=$model->first_phone?><br><small> <?= Yii::t("app", "schedule1")?></small></div>
                    </li>
                </ul>
            </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <div class="col-xl-7 col-lg-7 order-lg-1">
            <h3 class="mb-3"><?= Yii::t("app", "contactinfo")?></h3>
            <div id="message-contact"></div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="name" name="name_contact" placeholder="Ism">
                            <label for="name_contact"><?= Yii::t("app", "name")?></label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email">
                            <label for="lastname_contact"><?= Yii::t("app", "email")?></label>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="tel" id="phone" name="phone" placeholder="Phone">
                            <label for="email_contact"><?= Yii::t("app", "tel")?></label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="date" id="date" name="phone_contact">
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="form-floating mb-4">
                    <select style="height: 42px; border: 1px solid #f1f1f1; width: 100%;  margin-top: 15px; padding-left: 15px;padding-right: 15px;" name="message" id="select" >
                        <option disabled selected style="color: #333;"><?= Yii::t("app", "category1")?></option>
                        <?php if(!empty($tours)):?>
                            <?php foreach ($tours as $tour):?>
                                <option><?=$tour["title_".Yii::$app->language];?></option>
                            <?php endforeach;?>
                        <?php endif;?>
                    </select>
                </div>
                <p class="mt-3"><input type="submit"  onclick="booking()" class="btn_1 outline"></p>
            
        </div>
    </div>
    <!-- /row -->
</div>
<!--/container -->

<div class="map_contact">
    <div class="mapouter"><div class="gmap_canvas"><iframe width="1350" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=namangan%20shahar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-i.net">the meg 123movies</a><br><style>.mapouter{position:relative;text-align:right;height:450px;width:1350px;}</style><a href="https://www.embedgooglemap.net">google iframe</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:1350px;}</style></div></div>
</div>