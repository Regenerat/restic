<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;

/** @var yii\web\View $this */
/** @var app\models\Bookings $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bookings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'table_id')->dropDownList( [
        '1' => 'Столик у окна #1',
        '2' => 'Столик у окна #2',
        '3' => 'Столик на двоих в среднем зале #1',
        '4' => 'Столик на двоих в среднем зале #2',
        '5' => 'Большой столик в среднем зале',
    ]) ?>

    <?= $form->field($model, 'date')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'time')->textInput(['type' => 'time']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
