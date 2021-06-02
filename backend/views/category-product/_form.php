<?php

use common\models\Category;
use common\models\Product;
use kartik\select2\Select2;
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
        <div class="col-md-6">
            <?= $form->field($model, 'category_id')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(Category::find()->all(), 'id', 'name'),
                'language' => 'en',
                'options' => ['placeholder' => Yii::t('app', 'Select ...')],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ])
            ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'product_id')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(Product::find()->all(), 'id', 'name'),
                'language' => 'en',
                'options' => ['placeholder' => Yii::t('app', 'Select ...')],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ])
            ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
