<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class UnconqueredAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
    ];
    public $js = [
        'https://kit.fontawesome.com/e825825160.js',
        'js/main.js',
        'js/main.unc.js',
        'js/parallax.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        
    ];
}