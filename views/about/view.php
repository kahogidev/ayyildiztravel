<div class="pattern_2">
    <div class="container margin_120_95" id="first_section">
        <div class="row justify-content-between flex-lg-row-reverse align-items-center">
            <div class="col-lg-5">
                <div class="parallax_wrapper">
                    <img src="/frontend-files/img/home_2.jpg" style="height: 500px; object-fit: cover" alt="" class="img-fluid rounded-img">
                    <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img  src="/frontend-files/img/home_1.jpg" alt="" class="rounded-img"></span></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="intro">
                    <div class="title">
                        <small><?= Yii::t("app", "about")?></small>
                        <h2><?= Yii::t("app", "about1")?></h2>
                    </div>
                    <p class="lead"><?= Yii::t("app", "about2")?></p>
                    <p><em>Ayyildiz Travel...</em></p>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>
    <div class="pinned-image pinned-image--medium">
        <div class="pinned-image__container" id="section_video">
            <video loop="loop" muted="muted" id="video_home">
                <source src="/frontend-files/video/sunset.mp4" type="video/mp4">
                <source src="/frontend-files/video/sunset.webm" type="video/webm">
                <source src="/frontend-files/video/sunset.ogv" type="video/ogg">
            </video>
            <div class="pinned-image__container-overlay"></div>
        </div>
        <div class="pinned_over_content">
            <div class="title white">
                <h2 data-cue="slideInUp" data-delay="300"><?= Yii::t("app", "about3")?></h2>
            </div>
        </div>
    </div>
    <!-- /pinned content -->
</div>