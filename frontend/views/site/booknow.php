<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">

                <div class="mb-5 element-animate">
                    <h1>Бронирование</h1>
                    <p>Открывайте Санкт-Петербург с Отелем Grand Memories.</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-5">Форма бронирования</h2>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-sm-6 form-group">

                            <label for="">Дата заезда:</label>
                            <div style="position: relative;">
                                <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                                <input type='text' placeholder="дд.мм.гг" class="form-control" id='arrival_date' />
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="">Дата выезда:</label>
                            <div style="position: relative;">
                                <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                                <input type='text' placeholder="дд.мм.гг" class="form-control" id='departure_date' />
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="room">Комната:</label>
                            <select name="" id="room" class="form-control">
                                <?php foreach ($rooms as $r): ?>
                                    <option <?php if($r->id == $room->id): ?> selected <?php endif; ?> value=""><?= $r->name ?></option>
                                <? endforeach; ?>
                            </select>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="room">Гостей:</label>
                            <select name="" id="room" class="form-control">
                                <option value="">1 Гость</option>
                                <option value="">2 Гостя</option>
                                <option value="">3 Гостя</option>
                                <option value="">4 Гостя</option>
                                <option value="">5+ Гостей</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Ваш Email:</label>
                            <input type="email" id="email" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Комментарии:</label>
                            <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Забронировать" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h3 class="mb-5">Ваша комната:</h3>
                <div class="media d-block room mb-0">
                    <figure>
                        <img src="<?= $room->image->getUrl() ?>" alt="Generic placeholder image" class="img-fluid">
                        <div class="overlap-text">
                  <span>
                    Комната
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                        </div>
                    </figure>
                    <div class="media-body">
                        <h3 class="mt-0"><a href="#"><?= $room->name ?></a></h3>
                        <ul class="room-specs">
                            <li><span class="ion-ios-people-outline"></span> Гостей: <?= $room->guest ?></li>
                            <li><span class="ion-ios-crop"></span> <?= $room->square ?> м <sup>2</sup></li>
                        </ul>
                        <p><?= $room->desc ?></p>
                        <!--<p><a href="#" class="btn btn-primary btn-sm">Book Now From $20</a></p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->