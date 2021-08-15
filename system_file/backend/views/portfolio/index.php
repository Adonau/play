<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PortfolioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Portfolios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-admin">

    <h1 class="page-admin__title"><?= Html::encode($this->title) ?></h1>


    <?= Html::a('Create Portfolio', ['create'], ['class' => 'btn btn-success']) ?>


    <?php Pjax::begin(); ?>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            $sumbol = '/';
            return Html::a(Html::encode( stristr($model->port_link, $sumbol) ), ['view', 'id' => $model->id]);
            
        },
    ]) ?>

    <?php Pjax::end(); ?>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'form-add']]) ?>

    <div class="flex-column add--wrap--input">
        <input type="file" id="uploadform-imagefile" name="UploadForm[imageFile]" class="btn inputfile">
        <label for="uploadform-imagefile" class="add--label-input flex-row">
        </label>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end() ?>

</div>