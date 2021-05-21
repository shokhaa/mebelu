<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CategoryProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-product-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">    <?= $form->field($model, 'category_id')->dropDownList(
                ArrayHelper::map(\common\models\Category::find()->all(), 'id', 'name'),
                ['prompt' => 'Select Category name']
            ) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'product_id')->dropDownList(
                ArrayHelper::map(\common\models\Product::find()->all(), 'id', 'name'),
                ['prompt' => 'Select product name']
            ) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
