<div class="hero medium-height jarallax" data-jarallax="" data-speed="0.2">

    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero is-transitioned" data-opacity-mask="rgba(0, 0, 0, 0.5)" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="container">
            <h1 class="slide-animated two"><?= Yii::t("app", "hotels")?></h1>
        </div>
    </div>
    <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"><img class="jarallax-img" src="/frontend-files/img/rooms/2.jpg" alt="" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1349px; height: 305.5px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: 9.75px; transform: translate3d(0px, -9.75px, 0px);"></div></div>
<div class="container margin_120_0">


    <div class="row_list_version_2 inverted">
        <div class="row g-0 align-items-center">


            <div class="col-xl-8 order-xl-2">
                <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img">
                    <?php if (!empty($models)):?>
                        <?php foreach ($models as $model):?>
                        <?php $img = app\models\StaticFunctions::getImage('hotel',$model->id,$model->images)?>
                            <div class="item">
                                <a data-fslightbox="gallery_4" data-type="image" href="img/rooms/4.jpg"><img src="<?=$img?>" alt=""></a>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>


                <!-- /carousel -->
            </div>
            <?php if (!empty($models)):?>
                      <div class="col-xl-4 order-xl-1">
                        <div class="box_item_info" data-jarallax-element="-25">
                            <small></small>
                            <h2><?=$model->name?></h2>
                            <p><?= Yii::t("app", "hotels1")?></p>
                            <div class="facilities clearfix">
                                <ul>
                                    <li>
                                        <i class="bi bi-house"></i> <?= Yii::t("app", "hotels3")?>
                                    </li>
                                    <li>
                                        <i class="bi bi-tv"></i> <?= Yii::t("app", "hotels4")?>
                                    </li>
                                </ul>
                            </div>


                            <div class="box_item_footer d-flex align-items-center justify-content-between">

                    </div>
                    <!-- /box_item_footer -->
                </div>
                <!-- /box_item_info -->
            </div>
            <?php endif;?>

            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /row_list -->

</div>
