<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class TattooAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.css',
        'css/main.css',
    ];
    public $js = [
        'js/main.js',
        'js/wow.min.js',
        'js/tat.main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}