<?php

use app\models\Bookings;
use app\models\Roles;
use app\models\Status;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BookingsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

?>
<div class="bookings-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            'table',
            'date',
            'time',
            'status',
            [
                'attribute' => 'Сменить статус',
                'visible' => (Yii::$app->user->identity->role_id == Roles::ADMIN_ID ? true : false),
                'format' => 'raw',
                'value' => function($model){

                    if($model->status_id == Status::NEW_STATUS){
                        $html = Html::beginForm(Url::to(['update', 'id' => $model->id]));
                        $html .= Html::activeDropDownList($model, 'status_id',[
                            '2' => 'Принять',
                            '3' => 'Отклонить',
                        ],
                        [
                            'prompt' => [
                                'text'=> 'Новая',
                                'options' => [
                                    'value'=> '1',
                                    'style'=> 'display: none',
                                ]
                            ]
                        ]);

                        $html .= Html::submitButton('Save', ['class' => 'btn btn-success']);
                        $html .= Html::endForm();
                        return $html;
                    }

                    return "";
                }
                
            ],
        ],
    ]); ?>


</div>
