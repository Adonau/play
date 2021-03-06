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
        'css/main.css',
    ];
    public $js = [
        'https://use.fontawesome.com/67b3feebd1.js',
        '//code.jquery.com/jquery-migrate-1.2.1.min.js',
        'js/oliwpageslider.js',
        'js/wheel-indicator.js',
        'js/slick.min.js',
        'js/active-main.js',
        'js/main.js',

    ];

    public $depends = [
        'yii\web\YiiAsset',

    ];
}
