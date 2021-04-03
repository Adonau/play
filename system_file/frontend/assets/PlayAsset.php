<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class PlayAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
    ];
    public $js = [
        'https://use.fontawesome.com/67b3feebd1.js',
        '//code.jquery.com/jquery-migrate-1.2.1.min.js',
        'js/slick.min.js',
        'js/parallax.min.js',
        'js/play.main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',

    ];
}