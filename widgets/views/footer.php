<footer >
    <div class="footer_bg">
        <div class="gradient_over"></div>
        <div class="background-image" data-background="url(/frontend-files/img/rooms/3.jpg)"></div>
    </div>
    <div class="container">
        <div class="row move_content">
            <div class="col-lg-4 col-md-12">
                <h5><?= Yii::t("app", "contactt")?></h5>
                <?php if (!empty($contacts)):?>
                    <?php foreach ($contacts as $contact):?>
                        <ul>
                            <li><?=$contact->addres?><br><br></li>
                            <li><strong><a href="#"><?=$contact->email?></a></strong></li>
                            <li><strong><a href="#"><?=$contact->first_phone?></a></strong></li>
                        </ul>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
            <div class="col-lg-3 col-md-6 ms-lg-auto">
                <h5><?= Yii::t("app", "menulinks")?></h5>
                <div class="footer_links">

                    <ul>
                        <?php if (!empty($menues)):?>
                            <?php foreach ($menues as $menue):?>

                                <li><a href="<?=$menue->link?>"><?=$menue['name_'.Yii::$app->language];?></a></li>

                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div id="newsletter">
                    <h5>Ayyildiz Travel</h5>
                    <div id="message-newsletter"></div>

                    <p><?= Yii::t("app", "about2")?></p>
                </div>
            </div>
        </div>
        <!--/row-->
    </div>
    <!--/container-->
    <div class="copy">
        <div class="container">
            © Ayyildiz Travel - by <a href="">Webspace</a>
        </div>
    </div>
</footer>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>