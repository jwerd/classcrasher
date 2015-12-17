<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Classes;
use app\models\School;
/* Custom jui DatePicker widget */
//use yii\jui\DatePicker;
/* Custom timepicker widget */
use kartik\time\TimePicker;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Classes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    echo $form->field($model, 'school_id')->dropdownList(
        School::find()->select(['name'])->indexBy('id')->column(),
        ['prompt'=>'Select School']
    );
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instructor')->textInput(['maxlength' => true]) ?>

    <?php
    /*echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'date',
        //'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]);
    */
    ?>

    <div class="form-group field-classes-date">
    <label class="control-label" for="classes-instructor">Date of Class</label>
    <?php
    echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'date',
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'value' => @$model->date,
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
    ?>
    <div class="help-block"></div>
    </div>

    <div class="form-group field-classes-date">
    <label class="control-label" for="classes-start-time">Start Time</label>

    <?php
    // Manipulate display of seconds, meridian (12h/24h), and the time increment steps
    echo TimePicker::widget([
        'model' => $model,
        'attribute' => 'start_time',
        //'name' => 'Classes[start_time]',
        'pluginOptions' => [
            'showSeconds' => false,
            'showMeridian' => false,
            'minuteStep' => 30,
            'secondStep' => 5,
        ]
    ]);
    ?>
    </div>

    <div class="form-group field-classes-date">
    <label class="control-label" for="classes-end-time">End Time</label>
    <?php
    // Manipulate display of seconds, meridian (12h/24h), and the time increment steps
    echo TimePicker::widget([
        'model' => $model,
        'attribute' => 'end_time',
        'pluginOptions' => [
            'showSeconds' => false,
            'showMeridian' => false,
            'minuteStep' => 30,
            'secondStep' => 5,
        ]
    ]);
    ?>
    </div>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6,'placeholder'=>'The details about the class go here...']) ?>

    <?= $form->field($model, 'price')->textInput(['placeholder'=>'0']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
