<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StaticInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="static-info-form">

    <?php $form = ActiveForm::begin(); ?>


<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'logo_photo')->textInput(['maxlength' => true]) ?></div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'instagram_profile')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'telegram_profile')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'facebook_profile')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'youtube_profile')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>
    </div>
</div>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'working_time')->textarea(['rows' => 9]) ?>

        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'slider_photo1')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'slider_photo2')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        </div>
    </div>





    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
