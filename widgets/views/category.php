


<div class="container margin_120_95">
    <div class="title mb-3">
        <small data-cue="slideInUp">Luxury experience</small>
        <h2 data-cue="slideInUp" data-delay="200">Rooms & Suites</h2>
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
        <p class="text-end"><a href="room-list-1.html" class="btn_1 outline mt-2">View all Rooms</a></p>
    </div>
    <!-- /row-->

    <div class="title text-center mb-5">
        <small data-cue="slideInUp">Paradise Hotel</small>
        <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
    </div>
    <div class="row mt-4">
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities no-border" data-cue="slideInUp">
                <i class="bi bi-geo-alt"></i>
                <h3>Private Parking</h3>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="bi bi-map"></i>
                <h3>High Speed Wifi</h3>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="bi bi-file-earmark-medical"></i>
                <h3>Bar & Restaurant</h3>
                <p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="box_facilities" data-cue="slideInUp">
                <i class="bi bi-check-lg"></i>
                <h3>Swimming Pool</h3>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
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