<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\LineageAsset;

use frontend\widgets\PreloadWidget;

LineageAsset::register($this);
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
    <?php $this->registerCsrfMetaTags() ?>
</head>

<body class="line-body">
    <?php $this->beginBody() ?>
    <?= $content ?>

    <?= PreloadWidget::widget() ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>