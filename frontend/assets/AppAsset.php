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
        'css/site.css',
    'mebelu/template/css/bootstrap.css',
    'mebelu/template/css/animate.css',
    'mebelu/template/css/font-awesome.css',
    'mebelu/template/css/furniture-icons.css',
    'mebelu/template/css/linear-icons.css',
    'mebelu/template/css/magnific-popup.css',
    'mebelu/template/css/owl.carousel.css',
    'mebelu/template/css/ion-range-slider.css',
    'mebelu/template/css/theme.css'
    ];
    public $js = [
    'mebelu/template/js/jquery.min.js',
    'mebelu/template/js/jquery.bootstrap.js',
    'mebelu/template/js/jquery.magnific-popup.js',
    'mebelu/template/js/jquery.owl.carousel.js',
    'mebelu/template/js/jquery.ion.rangeSlider.js',
    'mebelu/template/js/jquery.isotope.pkgd.js',
    'mebelu/template/js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
