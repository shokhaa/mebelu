<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
?>
<div class="category-index">



    <p>
        <?= Html::a(Yii::t('app', 'Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'name',
            [
                'attribute' => 'category_icon',
                'value' => function ($model){
                    return  $model->category_icon;
                },
                'filter' =>   [
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


                ],
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
