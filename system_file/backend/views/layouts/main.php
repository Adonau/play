<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

use common\widgets\Alert;

use backend\widgets\HeaderWidget;
use backend\widgets\AsideWidget;
use backend\widgets\FooterWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <?= HeaderWidget::widget() ?>

    <div class="wrapper">

        <?= AsideWidget::widget() ?>

        <main class="main">
            <?= Alert::widget() ?>
            <?= $content ?>
            
        </main>

    </div>
  
    <?= FooterWidget::widget() ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>