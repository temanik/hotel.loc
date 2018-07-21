<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700",
        "css/bootstrap.css",
        "css/animate.css",
        "css/owl.carousel.min.css",
        "fonts/ionicons/css/ionicons.min.css",
        "fonts/fontawesome/css/font-awesome.min.css",
        "css/magnific-popup.css",
        "css/style.css",
    ];
    public $js = [
        "js/jquery-3.2.1.min.js",
        "js/jquery-migrate-3.0.0.js",
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/owl.carousel.min.js",
        "js/jquery.waypoints.min.js",
        "js/jquery.stellar.min.js",
        "js/jquery.magnific-popup.min.js",
        "js/magnific-popup-options.js",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
