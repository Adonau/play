<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>

<header class="header">

    <div class="header__user"><span class="header__user-name">Name User :&nbsp</span><?= Yii::$app->user->identity->username; ?></div>
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'header__nav',
        ],
    ]);
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li class="header__item">'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout',
                ['class' => 'header__btn']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'header__list'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>