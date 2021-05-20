<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\StaticInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Static Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="static-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'phone_number',
            'location',
            'logo_photo',
            'instagram_profile',
            'telegram_profile',
            'facebook_profile',
            'youtube_profile',
            'address:ntext',
            'slider_photo1',
            'slider_photo2',
            'working_time:ntext',
            'email:email',
        ],
    ]) ?>

</div>
