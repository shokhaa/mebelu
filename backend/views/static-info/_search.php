<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StaticInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="static-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'phone_number') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'logo_photo') ?>

    <?= $form->field($model, 'instagram_profile') ?>

    <?php // echo $form->field($model, 'telegram_profile') ?>

    <?php // echo $form->field($model, 'facebook_profile') ?>

    <?php // echo $form->field($model, 'youtube_profile') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'slider_photo1') ?>

    <?php // echo $form->field($model, 'slider_photo2') ?>

    <?php // echo $form->field($model, 'working_time') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
