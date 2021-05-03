<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

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
            "sho-cabinet" => "Poyafzal Jovoni",
            "sofa" => "Divan",
            "table" => "Kichik tol",
            "wardrobe" => "Gardirob",


            ]
//        ['prompt' => 'Tanlang']
    ); ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
