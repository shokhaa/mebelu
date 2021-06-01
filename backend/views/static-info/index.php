<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StaticInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Static Infos';

?>
<div class="static-info-index">



    <p>
        <?= Html::a('Create Static Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'phone_number',
            'location',
            'logo_photo',
            'instagram_profile',
            'telegram_profile',
            'facebook_profile',
            'youtube_profile',
            'address:ntext',
            'working_time:ntext',
            'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
