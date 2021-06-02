<?php

use common\models\constants\ProductStatus;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

            <?= ($model->status == 4)?$form->field($model, 'sales_procent')->textInput(['min'=>0,'max' => 100]):false
            ?>

            <?= $form->field($model, 'status')->dropDownList(ProductStatus::getList()) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'description')->textarea(['rows' => 9]) ?>
        </div>
    </div>




    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
