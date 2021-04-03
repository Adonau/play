<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Portfolio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="portfolio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'select_port')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'port_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'port_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'port_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'port_main')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
