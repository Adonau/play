<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'page_name') ?>
    
    <!-- <?= $form->field($model, 'title_head') ?>

    <?= $form->field($model, 'canonical') ?>

    <?= $form->field($model, 'h1_title') ?>

    <?= $form->field($model, 'h1_undertitle') ?> -->

    <?php // echo $form->field($model, 'h1_undertext') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
