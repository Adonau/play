<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'page_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_head')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'canonical')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h1_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h1_undertitle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'h1_undertext')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
