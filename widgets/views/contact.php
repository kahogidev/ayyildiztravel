<?php if (!empty($models)):?>
    <?php foreach ($models as $model):?>
        <div class="container margin_120_95" id="booking_section">
    <div class="row justify-content-between">
        <div class="col-xl-4">
            <div data-cue="slideInUp">
                <div class="title">
                    <small>Paradise Hotel</small>
                    <h2>Check Availability</h2>
                </div>
                <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. </p>
                <p class="phone_element no_borders"><a href="tel://423424234"><i class="bi bi-telephone"></i><span><em>Info and bookings</em><?=$model->first_phone?></span></a></p>
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
            <small class="slide-animated one">Luxury Hotel Experience</small>
            <h1 class="slide-animated two">Contact Us</h1>
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
                        <h4>Address</h4>
                        <div><?=$model->addres?></div>
                    </li>
                    <li>
                        <i class="bi bi-envelope-paper"></i>
                        <h4><?=$model->email?></h4>
                        </li>
                    <li>
                        <i class="bi bi-telephone"></i>
                        <h4>Telephone</h4>
                        <div><?=$model->first_phone?><br><small>Monday to Friday 9am - 7pm</small></div>
                    </li>
                </ul>
            </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <div class="col-xl-7 col-lg-7 order-lg-1">
            <h3 class="mb-3">Get in Touch</h3>
            <div id="message-contact"></div>
            <form method="post" action="" autocomplete="on">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="name" name="name_contact" placeholder="Ism">
                            <label for="name_contact">Ism</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email">
                            <label for="lastname_contact">Email</label>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="tel" id="phone" name="phone" placeholder="Phone">
                            <label for="email_contact">Phone</label>
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
                        <option disabled selected>Tur kategoriyani tanlang</option>
                        <?php if(!empty($tours)):?>
                            <?php foreach ($tours as $tour):?>
                                <option><?=$tour["title_".Yii::$app->language];?></option>
                            <?php endforeach;?>
                        <?php endif;?>
                    </select>
                </div>
                <p class="mt-3"><input type="submit"  onclick="booking()" class="btn_1 outline"></p>
            </form>
        </div>
    </div>
    <!-- /row -->
</div>
<!--/container -->

<div class="map_contact">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.4364241114604!2d-73.96780638459853!3d40.774418641731515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258a29d3847f5%3A0x564dfbba0141774a!2s5th%20Ave%2C%20New%20York%2C%20NY%2C%20Stati%20Uniti!5e0!3m2!1sit!2ses!4v1661414716655!5m2!1sit!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>