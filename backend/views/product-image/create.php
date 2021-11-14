<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProductImage */

$this->title = Yii::t('app', 'Create Product Image');

?>
<div class="product-image-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id' => $id
    ]) ?>

</div>
