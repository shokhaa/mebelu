<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',

  'backend/plugins/fontawesome-free/css/all.min.css',
  'backend/dist/css/adminlte.min.css'
    ];
    public $js = [
        'backend/plugins/jquery/jquery.min.js',
    'backend/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'backend/dist/js/adminlte.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
