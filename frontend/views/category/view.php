<!-- ========================  Main header ======================== -->
<?php use common\models\CategoryProduct;
use common\models\Product;

$url = Yii::$app->homeUrl.'mebelu/template/assets/images/';
/* @var $model common\models\Category */

$this->title = $model->name;
?>

<section class="main-header" style="background-image:url(<?= $url?>gallery-2.jpg)">
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

            <?php
            for($i = 0; $i < count($category); $i++){
                $product = Product::findOne($category[$i]->product_id);
                if ($product){
                    if ($product->status == 4){
                        $product->price =strval($product->price - $product->price*($product->sales_procent/100));
                    }
                    echo '<div class="col-md-4 col-xs-6">

                    <article>
                        <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(-1);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                </span>
                        </div>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="#productid1"  class="mfp-open">
                                    <img src="'.$url.'product-1.png" alt="" width="360" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4"><a href="product.html">'.$product->name.'</a></h2>
                                <sup>'.$product->price.'</sup>
                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="popup-main mfp-hide" id="productid1">

                <!-- === product popup === -->

                <div class="product">

                    <!-- === popup-title === -->

                    <div class="popup-title">
                        <div class="h1 title">'.$product->name.'<small>product category</small></div>
                    </div>

                    <!-- === product gallery === -->

                    <div class="owl-product-gallery">
                        <img src="'.$url.'product-1.png" alt="" width="640" />
                        <img src="'.$url.'product-2.png" alt="" width="640" />
                        <img src="'.$url.'product-3.png" alt="" width="640" />
                        <img src="'.$url.'product-4.png" alt="" width="640" />
                    </div>

                    <!-- === product-popup-info === -->

                    
                    <!-- === product-popup-footer === -->

                    <div class="popup-table">
                        <div class="popup-cell">
                            <div class="price">
                                <span class="h3">'.$product->price .'</span>
                            </div>
                        </div>
                        <div class="popup-cell">
                            <div class="popup-buttons">
                                <a href="/product/view?id='.$product->id.'"><span class="icon icon-eye"></span> <span class="hidden-xs">Ko\'proq ma\'lumot</span></a>
                              
                            </div>
                        </div>
                    </div>

                </div> <!--/product-->
            </div> <!--popup-main-->
                ';
                }
                else echo "hech nima topilmadi";
            }

            ?>




        </div><!--/row-->

    </div><!--/container-->
</section>

<!-- ================== Footer  ================== -->
