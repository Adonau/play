<?php

use yii\helpers\Html;
use frontend\assets\PlayAsset;
use frontend\widgets\PreloadWidget;

PlayAsset::register($this);

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

<body class="pl-body">
    <?php $this->beginBody() ?>

    <?= $content ?>
    <?= PreloadWidget::widget() ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>