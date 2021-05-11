<?php

use common\models\Category;
use common\models\Product;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategoryProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Category Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-product-index">


    <p>
        <?= Html::a(Yii::t('app', 'Create Category Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


//            'category_id',
            [
                'attribute' => 'category_id',
                'format' =>'raw',
                'label'=>'Category Name',
                'filter' => Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'category_id',
                    'data' => ArrayHelper::map(Category::find()->all(), 'id', 'name'),
                    'theme' => Select2::THEME_BOOTSTRAP,
                    'options' => [
                        'placeholder' => Yii::t('app', 'Select ...'),
                    ],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])
            ],
            [
                'attribute' => 'product_id',
                'format' =>'raw',
                'label'=>'Product Name',
                'filter' => Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'product_id',
                    'data' => ArrayHelper::map(Product::find()->all(), 'id', 'name'),
                    'theme' => Select2::THEME_BOOTSTRAP,
                    'options' => [
                        'placeholder' => Yii::t('app', 'Select ...'),
                    ],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
