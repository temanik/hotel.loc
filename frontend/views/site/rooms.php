<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">

                <div class="mb-5 element-animate">
                    <h1>Наши комнаты</h1>
                    <p>Открывайте Санкт-Петербург с Отелем Grand Memories</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="site-section">
    <div class="container">
        <div class="row">

        <?php $count = 1; ?>
        <?php foreach ($rooms as $room): ?>
            <div class="col-md-4 mb-4">
                <div class="media d-block room mb-0">
                    <figure>
                        <img src="<?= $room->image->getUrl() ?>" alt="Generic placeholder image" class="img-fluid">
                        <div class="overlap-text">
                  <span>
                    Номер
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                        </div>
                    </figure>
                    <div class="media-body">
                        <h3 class="mt-0"><a href="booknow?room_id=<?= $room->id ?>"><?= $room->name ?></a></h3>
                        <ul class="room-specs">
                            <li><span class="ion-ios-people-outline"></span>Гостей: <?= $room->guest ?></li>
                            <li><span class="ion-ios-crop"></span> <?= $room->square ?> м <sup>2</sup></li>
                        </ul>
                        <p><?= $room->desc ?></p>
                        <p><a href="booknow?room_id=<?= $room->id ?>" class="btn btn-primary btn-sm">Забронировать за <?= $room->price ?> &#8381</a></p>
                    </div>
                </div>
            </div>
        <?php if($count % 3 === 0 || $count === count($rooms)) : ?>
            </div>
            <?php if($count !== count($rooms)) : ?>
                <div class="row">
            <?php endif; ?>
        <?php endif; ?>
        <?php $count++ ?>
        <?php endforeach; ?>

        </div>
    </div>
</section>