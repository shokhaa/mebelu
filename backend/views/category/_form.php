<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

<div class="row  p-5" style="font-size: 20px!important;">
    <div class="col-md-6">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'category_icon')->dropDownList(
            [
                "accessories" => "Aksesuarlar",
                "armchair" => "Kreslo",
                "bar-set" => "Bar",
                "bathroom" => "Dush",
                "bedroom" => "Yotoqxona",
                "bookcase" => "Kitob jovoni",
                "carpet" => "Gilam",
                "chair" => "Stul",
                "children-room" => "Bolalar xonasi",
                "dining-table" => "Kattta stol",
                "kitchen" => "Oshxona",
                "lightning" => "Lyustra",
                "media-cabinet" => "Shkafcha",
                "nightstand" => "Tumba",
                "office" => "Office mebel",
                "retro" => "Retro",
                "shoe-cabinet" => "Poyafzal Jovoni",
                "sofa" => "Divan",
                "table" => "Kichik tol",
                "wardrobe" => "Gardirob",


            ]
//        ['prompt' => 'Tanlang']
        ); ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>
</div>

    <?php ActiveForm::end(); ?>

</div>
