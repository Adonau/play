<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;

use frontend\widgets\PortfolioHeaderWidget;
use frontend\widgets\PortfolioIntroWidget;
use frontend\widgets\FooterWidget;
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
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="portfolio-body">
    <?php $this->beginBody() ?>
    <?= PortfolioHeaderWidget::widget() ?>
    <?= PortfolioIntroWidget::widget() ?>

    <?= $content ?>

    <?= FooterWidget::widget() ?>
    <?= PreloadWidget::widget() ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>