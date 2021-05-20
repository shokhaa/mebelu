<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StaticInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="static-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo_photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagram_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telegram_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'slider_photo1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slider_photo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'working_time')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
