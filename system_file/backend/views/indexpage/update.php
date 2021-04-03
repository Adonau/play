<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\IndexPage */

$this->title = 'Update Index Page: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Index Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="index-page-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
