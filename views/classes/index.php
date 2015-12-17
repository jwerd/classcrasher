<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Class', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            [
            'attribute' => 'school_id',
            'value' => 'school.name'
            ],
            //'school_id',
            'instructor',
            'duration',
            'date',
            'start_time',
            'end_time',
            // 'description:ntext',
            // 'price',
            // 'school_id',

            ['class' => 'yii\grid\ActionColumn','template' => '{update} {delete}'],
        ],
    ]); ?>

</div>
