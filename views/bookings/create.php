<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bookings $model */

$this->title = 'Создать заявку';

?>
<div class="bookings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
