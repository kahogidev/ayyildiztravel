<div class="bg_white">
    <div class="container margin_120_95">
        <div class="title mb-3">
            <h2 data-cue="slideInUp" data-delay="200"><?= Yii::t("app", "tours")?></h2>
        </div>
        <div class="row justify-content-center home">
            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                    <?php
                    $img = \app\models\StaticFunctions::getImage('tours', $model->id, $model->images); ?>
                    <div class="item col-xl-4 col-lg-6">
                        <a href="<?=yii\helpers\Url::to(['toursview/view', "id"=>$model->id]);?>" class="box_contents" data-cue="slideInUp" data-delay="300">
                            <figure><img style="width: 360px; object-fit: cover" src="<?=$img?>" alt="" class="img-fluid"><em><?=$model->period?> </em></figure>
                            <div class="wrapper">
                                <small style="color: #0b0d0f"><?=$model->price?> UZS<span></span></small>
                                <h2><?=$model['title_'.Yii::$app->language];?></h2>
                                <h6><?=$model['description_'.Yii::$app->language];?></h6>
                                <em><?= Yii::t("app", "more")?></em>
                            </div>
                        </a>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <!--/row -->
    </div>
    <!--/container -->
</div>