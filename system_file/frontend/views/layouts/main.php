<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

use frontend\widgets\HeaderWidget;
use frontend\widgets\PreloadWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link rel="canonical" href="https://design-wt.ru/">
    <meta name="description" content="Портфолио">
    <meta name="keywords" content="Портфолио">

    <?php $this->registerCsrfMetaTags() ?>
</head>

<body class="main-body">
    <?php $this->beginBody() ?>
    <?= HeaderWidget::widget() ?>
    <?= $content ?>

    <?= PreloadWidget::widget() ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>