<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $categories common\models\Category */
/* @var $productCategories common\models\CategoryProduct */

$this->title = Yii::t('app', 'Create Product');
?>
<div class="product-create">


    <?= $this->render('_form', [
        'model' => $model,
        'categories' => $categories,
        'productCategories' => $productCategories
    ]) ?>

</div>
