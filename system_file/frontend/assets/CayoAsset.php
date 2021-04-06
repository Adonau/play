<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CayoAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
    ];
    public $js = [
        'https://kit.fontawesome.com/e825825160.js',
        '//code.jquery.com/jquery-migrate-1.2.1.min.js',
        'js/slick.min.js',
        'js/main.js',
        'js/main.cayo.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}

