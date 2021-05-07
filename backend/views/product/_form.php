<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= ($model->status == 4)?$form->field($model, 'sales_procent')->textInput(['min'=>0,'max' => 100]):false
     ?>

    <?= $form->field($model, 'status')->dropDownList(
        [
            '1' => 'simple',
            '2' => 'famous',
            '3' => 'new',
            '4' => 'sale'
        ],
        ['prompt' => 'Tanlang']
    ) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
