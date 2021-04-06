<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Портфолио в ожидании контента';
?>


<section class="intro">
    <?php foreach ($indexpage as $index) : ?>
        <div class="intro__text-container">
            <h1 class="intro__title"> <?= $index->h1_title; ?> </h1>
            <a class="intro__link" href="<?= Url::to(['/portfolio']) ?>"><?= $index->link_text; ?></a>

            <a class="intro__link" href="<?= Url::to(['/about-me']) ?>">В кратце о навыках</a>
        </div>
    <?php endforeach; ?>

    <div class="intro__slider">
        <div class="intro__image intro__image-1"></div>
        <div class="intro__image intro__image-2"></div>
        <div class="intro__image intro__image-3"></div>
    </div>

</section>