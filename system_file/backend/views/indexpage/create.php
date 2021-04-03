<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\IndexPage */

$this->title = 'Create Index Page';
$this->params['breadcrumbs'][] = ['label' => 'Index Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-page-create">

    <h1 class="index-page__title"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
