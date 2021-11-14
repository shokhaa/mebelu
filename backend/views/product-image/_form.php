<?php

use common\models\Product;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductImage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-image-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'image_url')->fileInput() ?>


    <?php

    if (!$id) {

        echo $form->field($model, 'product_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Product::find()->all(), 'id', 'name'),
            'language' => 'en',
            'options' => ['placeholder' => Yii::t('app', 'Select ...')],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    }

    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
