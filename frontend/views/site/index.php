<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">

                <div class="mb-5 element-animate">
                    <h1>Добро пожаловать в Grand Memories</h1>
                    <p>Откройте для себя роскошный номер в мире Grand Memories.</p>
                    <p><a href="rooms" class="btn btn-primary">Забронировать</a></p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="heading-wrap text-center element-animate">
                    <h4 class="sub-heading">ОСТАНОВИТЕСЬ НА НАШИХ РОСКОШНЫХ НОМЕРАХ</h4>
                    <h2 class="heading">Оставайтесь и наслаждайтесь</h2>
                    <p class="mb-5">Отель Grand Memories расположен в Санкт-Петербурге, в 20 минутах ходьбы от храма Спаса-на-Крови и в 1,8 км от Государственного Русского музея. К услугам гостей бесплатный Wi-Fi. В некоторых номерах есть балкон с видом на город.</p>
                    <p><a href="about" class="btn btn-primary btn-sm">Узнать больше о нас</a></p>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <img src="images/f_img_1.png" alt="Image placeholder" class="img-md-fluid">
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 heading-wrap text-center">
                <h4 class="sub-heading">Наши роскошные номера</h4>
                <h2 class="heading">Наши лучшие номера</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-7">
                <div class="media d-block room mb-0">
                    <figure>
                        <img src="<?= $rooms[0]->image->getUrl() ?>" alt="Generic placeholder image" class="img-fluid">
                        <div class="overlap-text">
                  <span>
                    Лучший номер
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                        </div>
                    </figure>
                    <div class="media-body">
                        <h3 class="mt-0"><a href="#"><?= $rooms[0]->name ?></a></h3>
                        <ul class="room-specs">
                            <li><span class="ion-ios-people-outline"></span> <?= $rooms[0]->guest ?></li>
                            <li><span class="ion-ios-crop"></span> <?= $rooms[0]->square ?> М <sup>2</sup></li>
                        </ul>
                        <p><?= $rooms[0]->desc ?></p>
                        <p><a href="booknow?room_id=1" class="btn btn-primary btn-sm">Забронировать за <?= $rooms[0]->price ?> &#8381</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 room-thumbnail-absolute">
                <a href="booknow?room_id=2" class="media d-block room bg first-room" style="background-image: url(<?= $rooms[1]->image->getUrl() ?>); ">
                    <!-- <figure> -->
                    <div class="overlap-text">
                  <span>
                    Номер
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                        <span class="pricing-from">
                    за <?= $rooms[1]->price ?> &#8381
                  </span>
                    </div>
                    <!-- </figure> -->
                </a>

                <a href="booknow?room_id=5" class="media d-block room bg second-room" style="background-image: url(<?= $rooms[2]->image->getUrl() ?>); ">
                    <!-- <figure> -->
                    <div class="overlap-text">
                  <span>
                    Номер
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                        <span class="pricing-from">
                    за <?= $rooms[1]->price ?> &#8381
                  </span>
                    </div>
                    <!-- </figure> -->
                </a>

            </div>
        </div>
    </div>
</section>

<!-- END section -->

<!--<section class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 heading-wrap text-center">
                <h4 class="sub-heading">Наш Блог</h4>
                <h2 class="heading">Последние новости</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4">
                <div class="post-entry">
                    <img src="images/img_3.jpg" alt="Image placeholder" class="img-fluid">
                    <div class="body-text">
                        <div class="category">Rooms</div>
                        <h3 class="mb-3"><a href="#">New Rooms</a></h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-entry">
                    <img src="images/img_6.jpg" alt="Image placeholder" class="img-fluid">
                    <div class="body-text">
                        <div class="category">News</div>
                        <h3 class="mb-3"><a href="#">New Staff Added</a></h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-entry">
                    <img src="images/img_5.jpg" alt="Image placeholder" class="img-fluid">
                    <div class="body-text">
                        <div class="category">New Rooms</div>
                        <h3 class="mb-3"><a href="#">Big Rooms for All</a></h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- END section -->