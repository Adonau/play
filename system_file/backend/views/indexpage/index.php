<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\IndexPageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Текст Индексной страницы';
?>
<div class="general">
    <h1 class="general__title"><?= Html::encode($this->title) ?></h1>

    <?= Html::a('Создать Массив', ['create'], ['class' => 'btn general__btn']) ?>


    <?php Pjax::begin(); ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= ListView::widget([
        'layout' => "{pager}\n{items}\n{pager}",
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'bd-data'],
        'itemView' => function ($model, $key, $index, $widget) {
            return
                Html::tag('div', Html::encode('Заголовок Первого уровня'), ['class' => 'bd-data__name']) .
                Html::tag('div', Html::encode($model->h1_title), ['class' => 'bd-data__item']) .

                Html::tag('div', Html::encode('Текст Ссылки'), ['class' => 'bd-data__name']) .
                Html::tag('div', Html::encode($model->link_text), ['class' => 'bd-data__item']) .

                Html::tag('div', Html::encode('Интро текст'), ['class' => 'bd-data__name']) .
                Html::tag('div', Html::encode($model->intro_text), ['class' => 'bd-data__item']) .

                Html::a(Html::encode('Изменить'), ['view', 'id' => $model->id], ['class' => 'btn bd-data__link']);
        },
    ]) ?>

    <?php Pjax::end(); ?>

</div>