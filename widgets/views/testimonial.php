<div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img kenburns-2" src="/frontend-files/img/hero_home_1.jpg" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title white">
                        <h2><?= Yii::t("app", "test_info")?></h2>
                    </div>
                    <div class="carousel_testimonials owl-carousel owl-theme nav-dots-orizontal">

                        <?php if (!empty($models)):?>
                            <?php foreach ($models as $model):?>

                                <div>
                                    <div class="box_overlay">
                                        <div  class="pic">
                                            <h4 style="margin-left: -50px"><?=$model->name?><small><?=$model->email?></small></h4>
                                        </div>
                                        <div class="comment">
                                            <?=$model['comment_'.Yii::$app->language];?>
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                    <!-- End carousel_testimonials -->
                </div>
            </div>
        </div>
    </div>
</div>