<?php

use common\models\Category;
use common\models\Product;
use common\models\ProductImage;
use common\models\Slider;

$url = Yii::$app->homeUrl . "mebelu/template/assets/images/"; ?>


<section class="header-content">

    <div class="owl-slider">

        <!-- === slide item === -->

        <?php
        /** @var Slider $sliders */
        foreach ($sliders as $slider){
        ?>
        <div class="item" style="background-image:url(<?= $url.$slider['image_url'] ?>)">
            <div class="box">
                <div class="container">
                    <h2 class="title animated h1" data-animation="fadeInDown"><?= $slider['slider_title'] ?></h2>
                    <div class="animated" data-animation="fadeInUp">
                        <?= $slider['slider_info'] ?>
                    </div>
                    <div class="animated" data-animation="fadeInUp">
                        <a href="<?= $slider['slider_btn_link'] ?>" target="_blank"
                           class="btn btn-main"><i class="icon icon-cart"></i><?= $slider['slider_btn_title'] ?></a>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

    </div> <!--/owl-slider-->
</section>
<section class="owl-icons-wrapper owl-icons-frontpage">

    <!-- === header === -->

    <header class="hidden">
        <h2><?= Yii::t('app', 'Product Categories') ?></h2>
    </header>

    <div class="container">

        <div class="owl-icons">

            <!-- === icon item === -->
            <?php
            /** @var Category $categories */
            foreach ($categories as $category) {
                ?>

                <a href="/category/view?id=<?= $category['id'] ?>">
                    <figure>
                        <i class="f-icon f-icon-<?= $category['category_icon'] ?>"></i>
                        <figcaption><?= $category['name'] ?></figcaption>
                    </figure>
                </a>

            <?php }
            ?>

        </div> <!--/owl-icons-->
    </div> <!--/container-->
</section>

<section class="products">

    <div class="container">

        <!-- === header title === -->

        <header>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="title"><?= Yii::t('app', 'Ommabop Mahsulotlar') ?></h2>
                    <div class="text">
                        <p><?= Yii::t('app', 'Eng xaridorgir tovarlar') ?></p>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">

            <!-- === product-item === -->


            <?php
            $count = 0;
            /** @var Product $products */
            foreach ($products as $product) {


                if ($product['status'] == 2 && $count < 6) {
                    $image = ProductImage::find()->where(['product_id' => $product['id']])->asArray()->all();
                    $count++;
                    ?>
                    <div class="col-md-4 col-xs-6">

                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(-1);" data-title="Add to favorites"
                                       data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="<?= $product['id'] ?>" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                </span>
                            </div>

                            <div class="figure-grid">
                                <div class="image ">
                                    <a href="#<?= $product['id'] ?>" class="mfp-open">
                                        <img src="<?= $url . ((sizeof($image)) ? ($image[0]['image_url']) : ('product-1.png')) ?>"
                                             alt="product image" width="200" height="300"/>
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a href="/product/view/id=<?=$product['id']?>"><?= $product['name'] ?></a></h2>

                                    <sup><?= $product['price']." " ?><?= Yii::t('app', 'so\'m') ?></sup>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="popup-main mfp-hide" id="<?= $product['id'] ?>">

                        <!-- === product popup === -->

                        <div class="product">

                            <!-- === popup-title === -->

                            <div class="popup-title">
                                <div class="h1 title"><?= $product['name'] ?></div>
                            </div>

                            <!-- === product gallery === -->

                            <div class="owl-product-gallery ">
                                <?php
                                foreach ($image as $item)

                                {
                                ?>
                                <img src="<?= $url . ((is_array($image)) ? ($item['image_url']) : ('product-1.png')) ?>"
                                     alt="product image" width="200" height="300"/>
                            <?php
                            }
                            ?>
                            </div>

                            <!-- === product-popup-info === -->


                            <!-- === product-popup-footer === -->

                            <div class="popup-table">
                                <div class="popup-cell">
                                    <div class="price">
                                        <span class="h3"><?= $product['price'] ?> <?= Yii::t('app', 'so\'m') ?></span>
                                    </div>
                                </div>
                                <div class="popup-cell">
                                    <div class="popup-buttons">
                                        <a href="/product/view?id=<?= $product['id'] ?>"><span
                                                    class="icon icon-eye"></span> <span class="hidden-xs"><?= Yii::t('app', 'Ko\'proq mahsulot') ?></span></a>

                                    </div>
                                </div>
                            </div>

                        </div> <!--/product-->
                    </div> <!--popup-main-->

                    <?php
                    if ($count == 6) {
                        ?>
                        <div class="wrapper-more">
                            <a href="products-grid.html" class="btn btn-main"><?= Yii::t('app', 'Ko\'proq ko\'rish') ?></a>
                        </div>
                    <?php }

                }
            } ?>
            <!-- === product-item === -->


        </div> <!--/row-->
        <!-- === button more === -->


    </div> <!--/container-->
</section>
<!-- ========================  Products widget ======================== -->

<section class="products">

    <div class="container">

        <!-- === header title === -->

        <header>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="title"><?= Yii::t('app', 'Yangi mahsulotlar') ?></h2>
                    <div class="text">
                        <p><?= Yii::t('app', 'Yangi qo\'shilgan tovarlar') ?></p>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">

            <!-- === product-item === -->


            <?php
            $count = 0;
            foreach ($products as $product) {

                if ($product['status'] == 3 && $count < 6) {
                    $image_new = ProductImage::find()->where(['product_id' => $product['id']])->asArray()->all();
                    $count++;
                    //                        <!--cart item-->
                    ?>
                    <div class="col-md-4 col-xs-6">

                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(-1);" data-title="Add to favorites"
                                       data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="<?= $product['id'] ?>" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                </span>
                            </div>

                            <div class="figure-grid">
                                <div class="image">
                                    <a href="#<?= $product['id'] ?>" class="mfp-open">
                                        <img src="<?= $url . ((sizeof($image_new)) ? ($image_new[0]['image_url']) : ('product-1.png')) ?>"
                                             alt="product image" width="200" height="300"/>
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4"><a href="/product/view/id=<?=$product['id']?>"><?= $product['name'] ?></a></h2>

                                    <sup><?= $product['price']." " ?><?= Yii::t('app', 'So\'m') ?></sup>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="popup-main mfp-hide" id="<?= $product['id'] ?>">

                        <!-- === product popup === -->

                        <div class="product">

                            <!-- === popup-title === -->

                            <div class="popup-title">
                                <div class="h1 title"><?= $product['name'] ?></div>
                            </div>

                            <!-- === product gallery === -->

                            <div class="owl-product-gallery">
                                <?php
                                foreach ($image_new as $item)

                                {
                                    ?>
                                    <img src="<?= $url . ((is_array($image_new)) ? ($item['image_url']) : ('product-1.png')) ?>"
                                         alt="product image" width="200" height="300"/>
                                    <?php
                                }
                                ?>
                            </div>

                            <!-- === product-popup-info === -->


                            <!-- === product-popup-footer === -->

                            <div class="popup-table">
                                <div class="popup-cell">
                                    <div class="price">
                                        <span class="h3"><?= $product['price'] ?> so'm</span>
                                    </div>
                                </div>
                                <div class="popup-cell">
                                    <div class="popup-buttons">
                                        <a href="/product/view?id=<?= $product['id'] ?>"><span
                                                    class="icon icon-eye"></span> <span class="hidden-xs"><?= Yii::t('app', 'Ko\'proq ma\'lumot') ?></span></a>

                                    </div>
                                </div>
                            </div>

                        </div> <!--/product-->
                    </div> <!--popup-main-->

                    <?php
                    if ($count == 6) {
                        ?>
                        <div class="wrapper-more">
                            <a href="products-grid.html" class="btn btn-main"><?= Yii::t('app', 'Ko\'proq ko\'rish') ?></a>
                        </div>
                    <?php }

                }
            } ?>
            <!-- === product-item === -->


        </div> <!--/row-->

    </div> <!--/container-->
</section>
<!-- ========================  Products widget ======================== -->

<section class="products">

    <div class="container">

        <!-- === header title === -->

        <header>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="title"><?= Yii::t('app', 'Chegirmadagi mahsulotlar') ?></h2>
                    <div class="text">
                        <p><?= Yii::t('app', 'Chegirma e\'lon qilingan tovarlar') ?></p>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">

            <!-- === product-item === -->


            <?php
            $count = 0;
            foreach ($products as $product) {

                if ($product['status'] == 4 && $count < 6) {
                    $image_sale = ProductImage::find()->where(['product_id' => $product['id']])->asArray()->all();
                    $count++;
                    $product['price'] = ceil($product['price'] - $product['price'] * ($product['sales_procent'] / 100));
                    ?>
                    <div class="col-md-4 col-xs-6">

                        <article>
                            <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(-1);" data-title="Add to favorites"
                                       data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                                <span>
                                    <a href="<?=$product['id']?>" class="mfp-open" data-title="Quick wiew"><i
                                                class="icon icon-eye"></i></a>
                                </span>
                            </div>

                            <div class="figure-grid">
                                <div class="image">
                                    <a href="#<?= $product['id'] ?>" class="mfp-open">
                                        <img src="<?= $url . ((sizeof($image_sale)) ? ($image_sale[0]['image_url']) : ('product-1.png')) ?>"
                                             alt="product image" width="360"/>
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4">
                                        <a href="/product/view/id=<?=$product['id']?>"><?= $product['name'] ?></a>
                                    </h2>
                                    <sup><?= $product['price']." " ?><?= Yii::t('app', 'so\'m') ?></sup>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="popup-main mfp-hide" id="<?= $product['id'] ?>">

                        <!-- === product popup === -->

                        <div class="product">

                            <!-- === popup-title === -->

                            <div class="popup-title">
                                <div class="h1 title"><?= $product['name'] ?></div>
                            </div>

                            <!-- === product gallery === -->

                            <div class="owl-product-gallery">
                                <?php
                                foreach ($image_sale as $item)
                                {
                                    ?>
                                    <img src="<?= $url . ((is_array($image_sale)) ? ($item['image_url']) : ('product-1.png')) ?>"
                                         alt="product image" width="300" height="400"/>
                                    <?php
                                }
                                ?>
                            </div>

                            <!-- === product-popup-info === -->


                            <!-- === product-popup-footer === -->

                            <div class="popup-table">
                                <div class="popup-cell">
                                    <div class="price">
                                        <span class="h3"><?= $product['price'] ?><?= Yii::t('app', 'so\'m') ?></span>
                                    </div>
                                </div>
                                <div class="popup-cell">
                                    <div class="popup-buttons">
                                        <a href="/product/view?id=<?= $product['id'] ?>">
                                            <span class="icon icon-eye"></span>
                                            <span class="hidden-xs"><?= Yii::t('app', 'Ko\'proq ma\'lumot') ?></span></a>

                                    </div>
                                </div>
                            </div>

                        </div> <!--/product-->
                    </div> <!--popup-main-->

                    <?php
                    if ($count == 6) { ?>

                        <div class="wrapper-more">
                            <a href="products-grid.html" class="btn btn-main"><?= Yii::t('app', 'Ko\'proq ko\'rish') ?></a>
                        </div>
                    <?php
                    }

                }
            } ?>
            <!-- === product-item === -->
        </div> <!--/row-->
    </div> <!--/container-->
</section>
