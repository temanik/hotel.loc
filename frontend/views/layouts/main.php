<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= Html::csrfMetaTags() ?>

    <script src="//cdn.jsdelivr.net/g/jquery@1.11.0"></script>
    <script src="//cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script>

<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header role="banner">

    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Grand Memories</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">

                <?= Menu::widget([
                    'items' => [
                        ['label' => 'Главная', 'url' => ['/'], 'active' => \Yii::$app->controller->action->id == 'index', 'template' => '<a class="nav-link" href="{url}">{label}</a>'],
                        ['label' => 'Комнаты', 'url' => ['rooms'], 'active' => \Yii::$app->controller->action->id == 'rooms', 'template' => '<a class="nav-link" href="{url}">{label}</a>'],
                        /*['label' => 'Блог', 'url' => ['blog'], 'active' => \Yii::$app->controller->action->id == 'blog', 'template' => '<a class="nav-link" href="{url}">{label}</a>'],*/
                        ['label' => 'О нас', 'url' => ['about'], 'active' => \Yii::$app->controller->action->id == 'about', 'template' => '<a class="nav-link" href="{url}">{label}</a>'],
                        ['label' => 'Контакты', 'url' => ['contact'], 'active' => \Yii::$app->controller->action->id == 'contact', 'template' => '<a class="nav-link" href="{url}">{label}</a>'],
                        ['label' => 'Забронировать', 'url' => ['booknow'], 'active' => \Yii::$app->controller->action->id == 'booknow', 'template' => '<a class="nav-link" href="{url}"><span>{label}</span></a>'],
                    ],
                    'options' => [
                        'class' => 'navbar-nav ml-auto pl-lg-5 pl-0',
                    ],
                    'itemOptions'=>['class'=>'nav-item'],
                    'lastItemCssClass' =>'cta',
                ]); ?>
            </div>
        </div>
    </nav>

  <!-- OtelMS -->
  <script>
      var is_safari = navigator.userAgent.indexOf("Safari") > -1; // safari detection
      if (is_safari) {

          if (!$.cookie("grandmemories_fixed")) {
              $.cookie("grandmemories_fixed", "fixed", { expires: 365, path: "/" }); // 1 year
              if (document.body.clientWidth > 767) {  window.location.replace("//grandmemories-book.otelms.com/_safari_fix.html");}
              else { window.location.replace("//grandmemories-book-m.otelms.com/_safari_fix.html");}
          }
      }
  </script>

  <script type="text/javascript">// <![CDATA[
      var myEventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
      var myEventListener = window[myEventMethod];
      var myEventMessage = myEventMethod == "attachEvent" ? "onmessage" : "message";
      myEventListener(myEventMessage, function(e) {
          if (e.data === parseInt(e.data))
          { document.getElementById("my-iframe-id").height = e.data + "px"; console.log(e.data);
          }
      }, false);
      function getParameterByName(name) {
          name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
          var regex = new RegExp("[\?"+"\u0026"+"]" + name + "=([^"+"\u0026"+"#]*)"),
              results = regex.exec(location.search);
          return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
      }
      // ]]>
      document.addEventListener("DOMContentLoaded", function(event) {
          var url;
          if (document.body.clientWidth > 767) {
              url = "//grandmemories-book.otelms.com/bookit/step1/?inline=true" + "\u0026"
                  +  "datein=" + getParameterByName("datein") + "\u0026"
                  + "dateout=" + getParameterByName("dateout") + "\u0026"
                  + "lang=" + getParameterByName("lang");
          }
          else {
              url = "//grandmemories-book-m.otelms.com/bookit/step1/?inline=true" + "\u0026"
                  + "datein=" + getParameterByName("datein") + "\u0026"
                  + "dateout=" + getParameterByName("dateout") + "\u0026"
                  + "lang=" + getParameterByName("lang");
          };
          document.getElementById("my-iframe-id").src = url;
      });
      // ]]>
  </script>
  <div style="margin: 0px;">
    <iframe id="my-iframe-id" src="" style="border: 0;" width="100%" height="240" scrolling="no"></iframe>
  </div>
  <!-- end of OtelMS -->

</header>
<!-- END header -->

<?= $content; ?>

<section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/img_5.jpg);">
    <div class="container">
        <div class="row justify-content-center align-items-center intro">
            <div class="col-md-9 text-center element-animate">
                <h2>Расслабьтесь и наслаждайтесь отдыхом</h2>
                <p class="lead mb-5">В числе удобств всех номеров гостиный уголок, телевизор с плоским экраном и кабельными каналами, собственная ванная комната с бесплатными туалетно-косметическими принадлежностями и душем, а также письменный стол и чайник.</p>
            </div>
        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <h3>Телефон поддержки</h3>
                <p>24/7 Позвоните нам сейчас.</p>
                <p class="lead"><a href="tel://">+ 7 999 99 99</a></p>
            </div>
            <div class="col-md-4">
                <h3>Свяжитесь с нами</h3>
                <p>Мы в социальных сетях.</p>
                <p>
                    <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
                    <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a>
                </p>
            </div>
            <div class="col-md-4">
                <h3>Свяжитесь с нами</h3>
                <p>Если у вас остались вопросы, задайте их по e-mail.</p>
                <form action="#" class="subscribe">
                    <div class="form-group">
                        <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>

                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены | Grand Memories Hotel.
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>