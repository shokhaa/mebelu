<?php $url = Yii::$app->homeUrl."mebelu/template/assets/images/"; ?>
<body>

<section class="header-content">

    <div class="owl-slider">

        <!-- === slide item === -->

        <div class="item" style="background-image:url(<?= $url?>gallery-1.jpg)">
            <div class="box">
                <div class="container">
                    <h2 class="title animated h1" data-animation="fadeInDown">Modern furniture theme</h2>
                    <div class="animated" data-animation="fadeInUp">
                        Modern & powerfull template. <br /> Clean design & reponsive
                        layout. Google fonts integration
                    </div>
                    <div class="animated" data-animation="fadeInUp">
                        <a href="https://themeforest.net/item/mobel-furniture-website-template/20382155" target="_blank" class="btn btn-main" ><i class="icon icon-cart"></i> Buy this template</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- === slide item === -->

        <div class="item" style="background-image:url(<?= $url?>/gallery-2.jpg)">
            <div class="box">
                <div class="container">
                    <h2 class="title animated h1" data-animation="fadeInDown">Mobile ready!</h2>
                    <div class="animated" data-animation="fadeInUp">Unlimited Choices. Unbeatable Prices. Free Shipping.</div>
                    <div class="animated" data-animation="fadeInUp">Furniture category icon fonts!</div>
                    <div class="animated" data-animation="fadeInUp">
                        <a href="category.html" class="btn btn-clean">Get insipred</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- === slide item === -->

        <div class="item" style="background-image:url(<?= $url?>gallery-3.jpg)">
            <div class="box">
                <div class="container">
                    <h2 class="title animated h1" data-animation="fadeInDown">
                        Very Animate.css Friend.
                    </h2>
                    <div class="desc animated" data-animation="fadeInUp">
                        Combine with animate.css. Or just use your own!.
                    </div>
                    <div class="desc animated" data-animation="fadeInUp">
                        Bunch of typography effects.
                    </div>
                    <div class="animated" data-animation="fadeInUp">
                        <a href="https://themeforest.net/item/mobel-furniture-website-template/20382155" target="_blank" class="btn btn-clean">Buy this template</a>
                    </div>
                </div>
            </div>
        </div>

    </div> <!--/owl-slider-->
</section>
<section class="owl-icons-wrapper owl-icons-frontpage">

    <!-- === header === -->

    <header class="hidden">
        <h2>Product categories</h2>
    </header>

    <div class="container">

        <div class="owl-icons">

            <!-- === icon item === -->
            <?php
            foreach ($categories as $category) {

                echo                              '<a href="/category/view?id=' . $category['id']. '">
                    <figure>
                        <i class= "f-icon f-icon-' . $category['category_icon'] . '"></i>
                        <figcaption>' . $category['name'] .'</figcaption>
                    </figure>
                </a>';
            }
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
                        <h2 class="title">Ommabop mahsulotlar</h2>
                        <div class="text">
                            <p>Eng xaridorgir tovarlar</p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row">

                <!-- === product-item === -->


                <?php
                ?>
<?php
    $count = 0;
    foreach ($products as $product) {


        if ($product['status'] == 2){
            $image = \common\models\ProductImage::find()->where(['product_id' => $product['id']])->asArray()->one();

            $count++;

            echo '<div class="col-md-4 col-xs-6">

                    <article>
                        <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(-1);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                           <span>
                                    <a href="'.$product['id'].'" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                </span>
                        </div>

                        <div class="figure-grid">
                            <div class="image ">
                                <a href="#'.$product['id'].'" class="mfp-open">
                                    <img src="'.$url.$image['image_url'].'" alt="product image" width="480" height="600"/>
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4"><a href="product.html">'.$product['name'].'</a></h2>
                                
                                <sup>'.$product['price'] .'</sup>
                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="popup-main mfp-hide" id="'.$product['id'].'">

                <!-- === product popup === -->

                <div class="product">

                    <!-- === popup-title === -->

                    <div class="popup-title">
                        <div class="h1 title">'.$product['name'].'<small>product category</small></div>
                    </div>

                    <!-- === product gallery === -->

                    <div class="owl-product-gallery">
                        <img src="'.$url.'product-1.png" alt="product image" width="640" />
                        <img src="'.$url.'product-2.png" alt="product image" width="640" />
                        <img src="'.$url.'product-3.png" alt="product image" width="640" />
                        <img src="'.$url.'product-4.png" alt="product image" width="640" />
                    </div>

                    <!-- === product-popup-info === -->

                    
                    <!-- === product-popup-footer === -->

                    <div class="popup-table">
                        <div class="popup-cell">
                            <div class="price">
                                <span class="h3">'.$product['price'].'</span>
                            </div>
                        </div>
                        <div class="popup-cell">
                            <div class="popup-buttons">
                                <a href="/product/view?id='.$product['id'].'"><span class="icon icon-eye"></span> <span class="hidden-xs">Ko\'proq ma\'lumot</span></a>
                              
                            </div>
                        </div>
                    </div>

                </div> <!--/product-->
            </div> <!--popup-main-->
                ';

            if ($count>5){
                echo '                <div class="wrapper-more">
                    <a href="products-grid.html" class="btn btn-main">Ko\'proq ko\'rish</a>
                </div>';
            }

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
                        <h2 class="title">Yangi mahsulotlar</h2>
                        <div class="text">
                            <p>Yangi qo'shilgan tovarlar</p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row">

                <!-- === product-item === -->



                <?php
                $count = 0;
                foreach ($products as $product) {

                    if ($product['status'] == 3){
                        $count++;
                        //                        <!--cart item-->

                        echo '<div class="col-md-4 col-xs-6">

                    <article>
                        <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(-1);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                           <span>
                                    <a href="'.$product['id'].'" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                </span>
                        </div>

                        <div class="figure-grid">
                            <div class="image">
                                <a href="#'.$product['id'].'"  class="mfp-open">
                                    <img src="'.$url.'product-1.png" alt="product image" width="200" height="300" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4"><a href="product.html">'.$product['name'].'</a></h2>
                                
                                <sup>'.$product['price'] .'</sup>
                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="popup-main mfp-hide" id="'.$product['id'].'">

                <!-- === product popup === -->

                <div class="product">

                    <!-- === popup-title === -->

                    <div class="popup-title">
                        <div class="h1 title">'.$product['name'].'<small>product category</small></div>
                    </div>

                    <!-- === product gallery === -->

                    <div class="owl-product-gallery">
                        <img src="'.$url.'product-1.png" alt="product image" width="640" />
                        <img src="'.$url.'product-2.png" alt="product image" width="640" />
                        <img src="'.$url.'product-3.png" alt="product image" width="640" />
                        <img src="'.$url.'product-4.png" alt="product image" width="640" />
                    </div>

                    <!-- === product-popup-info === -->

                    
                    <!-- === product-popup-footer === -->

                    <div class="popup-table">
                        <div class="popup-cell">
                            <div class="price">
                                <span class="h3">'.$product['price'] .'</span>
                            </div>
                        </div>
                        <div class="popup-cell">
                            <div class="popup-buttons">
                                <a href="/product/view?id='.$product['id'].'"><span class="icon icon-eye"></span> <span class="hidden-xs">Ko\'proq ma\'lumot</span></a>
                              
                            </div>
                        </div>
                    </div>

                </div> <!--/product-->
            </div> <!--popup-main-->
                ';

                        if ($count>5){
                            echo '                <div class="wrapper-more">
                    <a href="products-grid.html" class="btn btn-main">Ko\'proq ko\'rish</a>
                </div>';
                        }

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
                        <h2 class="title">Chegirmadagi mahsulotlar</h2>
                        <div class="text">
                            <p>Chegirma e'lon qilingan tovarlar</p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row">

                <!-- === product-item === -->


                <?php
                $count = 0;
                foreach ($products as $product) {

                    if ($product['status'] == 4){
                        $count++;
                        $product['price'] =ceil($product['price'] - $product['price']*($product['sales_procent']/100));

                        echo '<div class="col-md-4 col-xs-6">

                    <article>
                        <div class="info">
                                <span class="add-favorite">
                                    <a href="javascript:void(-1);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                           <span>
                                    <a href="'.$product['id'].'" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                </span>
                        </div>

                        <div class="figure-grid">
                            <div class="image">
                                <a href="#'.$product['id'].'"  class="mfp-open">
                                    <img src="'.$url.'product-1.png" alt="product image" width="360" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4">
                                    <a href="product.html">'.$product['name'].'</a>
                                </h2>                                
                                <sup>'.$product['price'] .'</sup>
                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="popup-main mfp-hide" id="'.$product['id'].'">

                <!-- === product popup === -->

                <div class="product">

                    <!-- === popup-title === -->

                    <div class="popup-title">
                        <div class="h1 title">'.$product['name'].'<small>product category</small></div>
                    </div>

                    <!-- === product gallery === -->

                    <div class="owl-product-gallery">
                        <img src="'.$url.'product-1.png" alt="product image" width="640" />
                        <img src="'.$url.'product-2.png" alt="product image" width="640" />
                        <img src="'.$url.'product-3.png" alt="product image" width="640" />
                        <img src="'.$url.'product-4.png" alt="product image" width="640" />
                    </div>

                    <!-- === product-popup-info === -->

                    
                    <!-- === product-popup-footer === -->

                    <div class="popup-table">
                        <div class="popup-cell">
                            <div class="price">
                                <span class="h3">'.$product['price'] .'</span>
                            </div>
                        </div>
                        <div class="popup-cell">
                            <div class="popup-buttons">
                                <a href="/product/view?id='.$product['id'].'"><span class="icon icon-eye"></span> <span class="hidden-xs">Ko\'proq ma\'lumot</span></a>
                              
                            </div>
                        </div>
                    </div>

                </div> <!--/product-->
            </div> <!--popup-main-->
                ';

                        if ($count>5)
                        {
                            echo '
                                    <div class="wrapper-more">
                                        <a href="products-grid.html" class="btn btn-main">Ko\'proq ko\'rish</a>
                                    </div>';
                        }

                    }
                } ?>
                <!-- === product-item === -->
            </div> <!--/row-->
        </div> <!--/container-->
    </section>

    <!-- ========================  Instagram ======================== -->

    <section class="instagram">

        <!-- === instagram header === -->

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="h2 title">Follow us <i class="fa fa-instagram fa-2x"></i> Instagram </h2>
                        <div class="text">
                            <p>@InstaFurnitureFactory</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- === instagram gallery === -->

        <div class="gallery clearfix">
            <a class="item" href="#">
                <img src="<?= $url?>square-1.jpg" alt="Alternate Text" />
            </a>
            <a class="item" href="#">
                <img src="<?= $url?>square-2.jpg" alt="Alternate Text" />
            </a>
            <a class="item" href="#">
                <img src="<?= $url?>square-3.jpg" alt="Alternate Text" />
            </a>
            <a class="item" href="#">
                <img src="<?= $url?>square-4.jpg" alt="Alternate Text" />
            </a>
            <a class="item" href="#">
                <img src="<?= $url?>square-5.jpg" alt="Alternate Text" />
            </a>
            <a class="item" href="#">
                <img src="<?= $url?>square-6.jpg" alt="Alternate Text" />
            </a>

        </div> <!--/gallery-->

    </section>

    <!-- ================== Footer  ================== -->



</div> <!--/wrapper-->


</body>

</html>