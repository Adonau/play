<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LineageAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        
    ];
    public $js = [
        'https://use.fontawesome.com/67b3feebd1.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js',
        'js/pageslider/wheel-indicator.js',
        'js/pageslider/oliwpageslider.js',
        'js/lineage.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',

    ];
}