<!-- ========================  Main header ======================== -->
<?php use common\models\CategoryProduct;
use common\models\Product;

$url = Yii::$app->homeUrl.'mebelu/template/';
/* @var $model common\models\Category */

$this->title = $model->name;
?>

<section class="main-header" style="background-image:url(<?= $url?>assets/images/gallery-2.jpg)">
    <header class="hidden">
        <div class="container">
            <h1 class="h2 title">Category</h1>
        </div>
    </header>
</section>

<!-- ========================  Products ======================== -->

<section class="products">
    <div class="container">

        <header>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="title"><?= $model->name ?></h2>
                    <div class="text">
                        <p>Tanlangan kategoriya</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">

            <?php $category=CategoryProduct::find()->where(['category_id' => $model->id])->asArray()->all();
            foreach ($category as $item){
            if($item){
                $product = Product::find()->where(['id' => $item['product_id']])->asArray()->one();
                if ($product){
                    $sales_price =strval( $product['price']*($product['sales_procent']/100));
                    echo '<div class="col-md-4 col-xs-6">

                    <article>
                        <div class="info">
                                <span class="add-favorite added">
                                    <a href="javascript:void(-1);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                           <span>
                                    <a href="#'.$product['id'].'" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                </span>
                        </div>
                        <div class="btn btn-add">
                            <i class="icon icon-cart"></i>
                        </div>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="/product/view?id='.$product['id'].'" class="mfp-open">
                                    <img src="'.$url.'assets/images/product-1.png" alt="" width="360" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4"><a href="product.html">'.$product['name'].'</a></h2>
                                <sub>'.$product['price'].'</sub>
                                <sup>'.$sales_price .'</sup>
                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                            </div>
                        </div>
                    </article>
                </div>';
                }
                else echo "hech nima topilmadi";

            }}

            ?>




        </div><!--/row-->

    </div><!--/container-->
</section>

<!-- ================== Footer  ================== -->
