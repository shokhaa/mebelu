<?php $url = Yii::$app->homeUrl."mebelu/template/"; ?>
<body>

    <!-- ========================  Header content ======================== -->

    <section class="header-content">

        <div class="owl-slider">

            <!-- === slide item === -->

            <div class="item" style="background-image:url(<?= $url?>assets/images/gallery-1.jpg)">
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

            <div class="item" style="background-image:url(<?= $url?>assets/images/gallery-2.jpg)">
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

            <div class="item" style="background-image:url(<?= $url?>assets/images/gallery-3.jpg)">
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

    <!-- ========================  Icons slider ======================== -->

    <section class="owl-icons-wrapper owl-icons-frontpage">

        <!-- === header === -->

        <header class="hidden">
            <h2>Product categories</h2>
        </header>

        <div class="container">

            <div class="owl-icons">

                <!-- === icon item === -->
                <?php $categories = (new \yii\db\Query())->from('category')->all();
                foreach ($categories as $category) {

                    echo                              '<a href=href="category/' . $category['name']. '">
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

    <!-- ========================  Products widget ======================== -->

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


                <?php $products = (new \yii\db\Query())->from('product')->all(); ?>
<?php                foreach ($products as $product) {
                    if ($product['status'] == 2){
                        //                        <!--cart item-->
                        $sales_price =strval( $product['price']*($product['sales_procent']/100));
                        echo '<div class="col-md-4 col-xs-6">

                    <article>
                        <div class="info">
                                <span class="add-favorite added">
                                    <a href="javascript:void(-1);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                </span>
                           <span>
                                    <a href="#productid1" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                </span>
                        </div>
                        <div class="btn btn-add">
                            <i class="icon icon-cart"></i>
                        </div>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="#productid1" class="mfp-open">
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
} ?>
                <!-- === product-item === -->



            </div> <!--/row-->
            <!-- === button more === -->

            <div class="wrapper-more">
                <a href="products-grid.html" class="btn btn-main">View store</a>
            </div>

            <!-- ========================  Product info popup - quick view ======================== -->

            <div class="popup-main mfp-hide" id="productid1">

                <!-- === product popup === -->

                <div class="product">

                    <!-- === popup-title === -->

                    <div class="popup-title">
                        <div class="h1 title">Laura <small>product category</small></div>
                    </div>

                    <!-- === product gallery === -->

                    <div class="owl-product-gallery">
                        <img src="<?= $url?>assets/images/product-1.png" alt="" width="640" />
                        <img src="<?= $url?>assets/images/product-2.png" alt="" width="640" />
                        <img src="<?= $url?>assets/images/product-3.png" alt="" width="640" />
                        <img src="<?= $url?>assets/images/product-4.png" alt="" width="640" />
                    </div>

                    <!-- === product-popup-info === -->

                    <div class="popup-content">
                        <div class="product-info-wrapper">
                            <div class="row">

                                <!-- === left-column === -->

                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <strong>Maifacturer</strong>
                                        <span>Brand name</span>
                                    </div>
                                    <div class="info-box">
                                        <strong>Materials</strong>
                                        <span>Wood, Leather, Acrylic</span>
                                    </div>
                                    <div class="info-box">
                                        <strong>Availability</strong>
                                        <span><i class="fa fa-check-square-o"></i> in stock</span>
                                    </div>
                                </div>

                                <!-- === right-column === -->

                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <strong>Available Colors</strong>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-red"></span>
                                            <span class="color-btn color-btn-blue checked"></span>
                                            <span class="color-btn color-btn-green"></span>
                                            <span class="color-btn color-btn-gray"></span>
                                            <span class="color-btn color-btn-biege"></span>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <strong>Choose size</strong>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-biege">S</span>
                                            <span class="color-btn color-btn-biege checked">M</span>
                                            <span class="color-btn color-btn-biege">XL</span>
                                            <span class="color-btn color-btn-biege">XXL</span>
                                        </div>
                                    </div>
                                </div>

                            </div> <!--/row-->
                        </div> <!--/product-info-wrapper-->
                    </div> <!--/popup-content-->
                    <!-- === product-popup-footer === -->

                    <div class="popup-table">
                        <div class="popup-cell">
                            <div class="price">
                                <span class="h3">$ 1999,00 <small>$ 2999,00</small></span>
                            </div>
                        </div>
                        <div class="popup-cell">
                            <div class="popup-buttons">
                                <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                                <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                            </div>
                        </div>
                    </div>

                </div> <!--/product-->
            </div> <!--popup-main-->
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


                <?php $products = (new \yii\db\Query())->from('product')->all(); ?>
                <?php                foreach ($products as $product) {
                    if ($product['status'] == 3){
                        //                        <!--cart item-->
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
                } ?>
                <!-- === product-item === -->



            </div> <!--/row-->
            <!-- === button more === -->

            <div class="wrapper-more">
                <a href="products-grid.html" class="btn btn-main">View store</a>
            </div>

            <!-- ========================  Product info popup - quick view ======================== -->

            <div class="popup-main mfp-hide" id="productid1">

                <!-- === product popup === -->

                <div class="product">

                    <!-- === popup-title === -->

                    <div class="popup-title">
                        <div class="h1 title">Laura <small>product category</small></div>
                    </div>

                    <!-- === product gallery === -->

                    <div class="owl-product-gallery">
                        <img src="<?= $url?>assets/images/product-1.png" alt="" width="640" />
                        <img src="<?= $url?>assets/images/product-2.png" alt="" width="640" />
                        <img src="<?= $url?>assets/images/product-3.png" alt="" width="640" />
                        <img src="<?= $url?>assets/images/product-4.png" alt="" width="640" />
                    </div>

                    <!-- === product-popup-info === -->

                    <div class="popup-content">
                        <div class="product-info-wrapper">
                            <div class="row">

                                <!-- === left-column === -->

                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <strong>Maifacturer</strong>
                                        <span>Brand name</span>
                                    </div>
                                    <div class="info-box">
                                        <strong>Materials</strong>
                                        <span>Wood, Leather, Acrylic</span>
                                    </div>
                                    <div class="info-box">
                                        <strong>Availability</strong>
                                        <span><i class="fa fa-check-square-o"></i> in stock</span>
                                    </div>
                                </div>

                                <!-- === right-column === -->

                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <strong>Available Colors</strong>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-red"></span>
                                            <span class="color-btn color-btn-blue checked"></span>
                                            <span class="color-btn color-btn-green"></span>
                                            <span class="color-btn color-btn-gray"></span>
                                            <span class="color-btn color-btn-biege"></span>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <strong>Choose size</strong>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-biege">S</span>
                                            <span class="color-btn color-btn-biege checked">M</span>
                                            <span class="color-btn color-btn-biege">XL</span>
                                            <span class="color-btn color-btn-biege">XXL</span>
                                        </div>
                                    </div>
                                </div>

                            </div> <!--/row-->
                        </div> <!--/product-info-wrapper-->
                    </div> <!--/popup-content-->
                    <!-- === product-popup-footer === -->

                    <div class="popup-table">
                        <div class="popup-cell">
                            <div class="price">
                                <span class="h3">$ 1999,00 <small>$ 2999,00</small></span>
                            </div>
                        </div>
                        <div class="popup-cell">
                            <div class="popup-buttons">
                                <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                                <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                            </div>
                        </div>
                    </div>

                </div> <!--/product-->
            </div> <!--popup-main-->
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


                <?php $products = (new \yii\db\Query())->from('product')->all(); ?>
                <?php                foreach ($products as $product) {
                    if ($product['status'] == 4){
                        //                        <!--cart item-->
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
                                <a href="#productid1" class="mfp-open">
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
                } ?>
                <!-- === product-item === -->



            </div> <!--/row-->
            <!-- === button more === -->

            <div class="wrapper-more">
                <a href="products-grid.html" class="btn btn-main">View store</a>
            </div>

            <!-- ========================  Product info popup - quick view ======================== -->

            <div class="popup-main mfp-hide" id="<?php $product['id']; ?>">

                <!-- === product popup === -->

                <div class="product">

                    <!-- === popup-title === -->

                    <div class="popup-title">
                        <div class="h1 title">Laura <small>product category</small></div>
                    </div>

                    <!-- === product gallery === -->

                    <div class="owl-product-gallery">
                        <img src="<?= $url?>assets/images/product-1.png" alt="" width="640" />
                        <img src="<?= $url?>assets/images/product-2.png" alt="" width="640" />
                        <img src="<?= $url?>assets/images/product-3.png" alt="" width="640" />
                        <img src="<?= $url?>assets/images/product-4.png" alt="" width="640" />
                    </div>

                    <!-- === product-popup-info === -->

                    <div class="popup-content">
                        <div class="product-info-wrapper">
                            <div class="row">

                                <!-- === left-column === -->

                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <strong>Maifacturer</strong>
                                        <span>Brand name</span>
                                    </div>
                                    <div class="info-box">
                                        <strong>Materials</strong>
                                        <span>Wood, Leather, Acrylic</span>
                                    </div>
                                    <div class="info-box">
                                        <strong>Availability</strong>
                                        <span><i class="fa fa-check-square-o"></i> in stock</span>
                                    </div>
                                </div>

                                <!-- === right-column === -->

                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <strong>Available Colors</strong>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-red"></span>
                                            <span class="color-btn color-btn-blue checked"></span>
                                            <span class="color-btn color-btn-green"></span>
                                            <span class="color-btn color-btn-gray"></span>
                                            <span class="color-btn color-btn-biege"></span>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <strong>Choose size</strong>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-biege">S</span>
                                            <span class="color-btn color-btn-biege checked">M</span>
                                            <span class="color-btn color-btn-biege">XL</span>
                                            <span class="color-btn color-btn-biege">XXL</span>
                                        </div>
                                    </div>
                                </div>

                            </div> <!--/row-->
                        </div> <!--/product-info-wrapper-->
                    </div> <!--/popup-content-->
                    <!-- === product-popup-footer === -->

                    <div class="popup-table">
                        <div class="popup-cell">
                            <div class="price">
                                <span class="h3">$ 1999,00 <small>$ 2999,00</small></span>
                            </div>
                        </div>
                        <div class="popup-cell">
                            <div class="popup-buttons">
                                <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                                <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                            </div>
                        </div>
                    </div>

                </div> <!--/product-->
            </div> <!--popup-main-->
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
                <img src="<?= $url?>assets/images/square-1.jpg" alt="Alternate Text" />
            </a>
            <a class="item" href="#">
                <img src="<?= $url?>assets/images/square-2.jpg" alt="Alternate Text" />
            </a>
            <a class="item" href="#">
                <img src="<?= $url?>assets/images/square-3.jpg" alt="Alternate Text" />
            </a>
            <a class="item" href="#">
                <img src="<?= $url?>assets/images/square-4.jpg" alt="Alternate Text" />
            </a>
            <a class="item" href="#">
                <img src="<?= $url?>assets/images/square-5.jpg" alt="Alternate Text" />
            </a>
            <a class="item" href="#">
                <img src="<?= $url?>assets/images/square-6.jpg" alt="Alternate Text" />
            </a>

        </div> <!--/gallery-->

    </section>

    <!-- ================== Footer  ================== -->



</div> <!--/wrapper-->


</body>

</html>