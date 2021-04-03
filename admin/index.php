<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'def');

require __DIR__ . '/../system_file/vendor/autoload.php';
require __DIR__ . '/../system_file/vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../system_file/common/config/bootstrap.php';
require __DIR__ . '/../system_file/backend/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../system_file/common/config/main.php',
    require __DIR__ . '/../system_file/common/config/main-local.php',
    require __DIR__ . '/../system_file/backend/config/main.php',
    require __DIR__ . '/../system_file/backend/config/main-local.php'
);

(new yii\web\Application($config))->run();
