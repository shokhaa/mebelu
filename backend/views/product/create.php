<?php

use yii\helpers\Html;
use common\models\constants\ProductStatus;
use dosamigos\tinymce\TinyMce;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $categories common\models\Category */
/* @var $productCategories common\models\CategoryProduct */

$this->title = Yii::t('app', 'Create Product');
?>
<div class="product-create">


    <div class="product-form">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-5">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-1">
                <?= $form->field($model, 'status')->dropDownList(ProductStatus::getList()) ?>
            </div>

            <div class="col-md-2">
                <?= ($model->status == 4)?$form->field($model, 'sales_procent')->textInput(['min'=>0,'max' => 100]):false
                ?>
            </div>
        </div>
        <?= $form->field($model, 'image_url')->fileInput() ?>

        <?= $form->field($model, 'description')->widget(TinyMce::className(),  [
            'options' => ['rows' => 6],
            'language' => 'en',
            'clientOptions' => [
                'plugins' => [
                    "advlist autolink lists link charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            ]
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


</div>
