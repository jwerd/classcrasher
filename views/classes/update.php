<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Classes */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="classes-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('<< Back to Classes', ['index'], ['class'=>'btn btn-default']) ?><br /><br />

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
