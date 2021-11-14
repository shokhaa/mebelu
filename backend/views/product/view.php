<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
$url = 'http://mebelu.uz/'.'mebelu/template/assets/images/'; ?>

$this->title = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">


    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Add photo'), ['product-image/create', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'price',
            'sales_procent',
            'status',
            'description:ntext',
        ],
    ]) ?>


    <?php foreach ($images as $image) : ?>

        <img src="<?=$url. $image['image_url'] ?>" alt="" width="100" height="100">
    <?php endforeach; ?>

</div>
