


<div class="container margin_120_95">
    <div class="title mb-3">
        <h2 data-cue="slideInUp" data-delay="200"><?= Yii::t("app", "category")?></h2>
    </div>
    <div class="row justify-content-center add_bottom_90" data-cues="slideInUp" data-delay="300">
        <?php if (!empty($models)): ?>
            <?php foreach ($models as $model):?>
                <?php
                $img = app\models\StaticFunctions::getImage('tours_category', $model->id, $model->images);
                ?>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                    <a href="<?=\yii\helpers\Url::to(["tours/view","id"=>$model->id])?>" class="box_cat_rooms">
                        <figure>
                            <div class="background-image" data-background="url(<?=$img?>)"></div>
                            <div class="info">
                                <span style="font-size: 25px"><?=$model['name_'.Yii::$app->language];?></span>
                            </div>
                        </figure>
                    </a>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>
    <!-- /row-->

    <div class="title text-center mb-5">
        <h2 data-cue="slideInUp" data-delay="100"><?= Yii::t("app", "services1")?></h2>
    </div>
    <div class="row mt-4">
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities no-border" data-cue="slideInUp">
                <i class="bi bi-geo-alt"></i>
                <h3><?= Yii::t("app", "service1")?></h3>
                <p><?= Yii::t("app", "service1t")?></p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="bi bi-map"></i>
                <h3><?= Yii::t("app", "service2")?></h3>
                <p><?= Yii::t("app", "service2t")?></p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="bi bi-file-earmark-medical"></i>
                <h3><?= Yii::t("app", "service3")?></h3>
                <p><?= Yii::t("app", "service3t")?></p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="bi bi-check-lg"></i>
                <h3><?= Yii::t("app", "service4")?></h3>
                <p><?= Yii::t("app", "service4t")?></p>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>

<div class="marquee">
    <div class="track">
        <div  class="content">&nbsp;_____Ay Yildiz Travel</div>
    </div>
</div>