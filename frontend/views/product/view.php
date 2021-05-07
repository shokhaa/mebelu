<?php $url = Yii::$app->homeUrl.'mebelu/template/'; ?>

<div class="page-loader"></div>

<div class="wrapper">

    <!--Use class "navbar-fixed" or "navbar-default" -->
    <!--If you use "navbar-fixed" it will be sticky menu on scroll (only for large screens)-->


    <!-- ========================  Main header ======================== -->

    <section class="main-header" style="background-image:url(<?= $url ?>assets/images/gallery-2.jpg)">
        <header>
            <div class="container">
                <h1 class="h2 title">Sofa Laura</h1>
                <ol class="breadcrumb breadcrumb-inverted">
                    <li><a href="index.html"><span class="icon icon-home"></span></a></li>
                    <li><a href="category.html">Product Category</a></li>
                    <li><a href="products-grid.html">Product Sub-category</a></li>
                    <li><a class="active" href="product.html">Product overview</a></li>
                </ol>
            </div>
        </header>
    </section>

    <!-- ========================  Product ======================== -->

    <section class="product">
        <div class="main">
            <div class="container">
                <div class="row product-flex">

                    <!-- product flex is used only for mobile order -->
                    <!-- on mobile 'product-flex-info' goes bellow gallery 'product-flex-gallery' -->

                    <div class="col-md-4 col-sm-12 product-flex-info">
                        <div class="clearfix">

                            <!-- === product-title === -->

                            <h1 class="title" data-title="Sofa"><?= $model->name ?> <small>La Linea de Lucco</small></h1>

                            <div class="clearfix">

                                <!-- === price wrapper === -->

                                <div class="price">
                                        <span class="h3">
                                            $ 1999,00
                                            <small><?= $model->price ?></small>
                                        </span>
                                </div>
                                <hr />

                                <!-- === info-box === -->

                                <div class="info-box">
                                    <span><strong>Maifacturer</strong></span>
                                    <span>Brand name</span>
                                </div>

                                <!-- === info-box === -->

                                <div class="info-box">
                                    <span><strong>Materials</strong></span>
                                    <span>Wood, Leather, Acrylic</span>
                                </div>

                                <!-- === info-box === -->

                                <div class="info-box">
                                    <span><strong>Availability</strong></span>
                                    <span><i class="fa fa-check-square-o"></i> In stock</span>
                                    <span class="hidden"><i class="fa fa-truck"></i> Out of stock</span>
                                </div>

                                <hr />

                                <div class="info-box info-box-addto added">
                                    <span><strong>Favourites</strong></span>
                                    <span>
                                            <i class="add"><i class="fa fa-heart-o"></i> Add to favorites</i>
                                            <i class="added"><i class="fa fa-heart"></i> Remove from favorites</i>
                                        </span>
                                </div>

                                <div class="info-box info-box-addto">
                                    <span><strong>Wishlist</strong></span>
                                    <span>
                                            <i class="add"><i class="fa fa-eye-slash"></i> Add to Watch list</i>
                                            <i class="added"><i class="fa fa-eye"></i> Remove from Watch list</i>
                                        </span>
                                </div>

                                <div class="info-box info-box-addto">
                                    <span><strong>Collection</strong></span>
                                    <span>
                                            <i class="add"><i class="fa fa-star-o"></i> Add to Collection</i>
                                            <i class="added"><i class="fa fa-star"></i> Remove from Collection</i>
                                        </span>
                                </div>

                                <hr />

                                <!-- === info-box === -->

                                <div class="info-box">
                                    <span><strong>Available Colors</strong></span>
                                    <div class="product-colors clearfix">
                                        <span class="color-btn color-btn-red"></span>
                                        <span class="color-btn color-btn-blue checked"></span>
                                        <span class="color-btn color-btn-green"></span>
                                        <span class="color-btn color-btn-gray"></span>
                                        <span class="color-btn color-btn-biege"></span>
                                    </div>
                                </div>

                                <!-- === info-box === -->

                                <div class="info-box">
                                    <span><strong>Choose size</strong></span>
                                    <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-biege">
                                                <span class="product-size" data-text="">S</span>
                                            </span>
                                        <span class="color-btn color-btn-biege checked">M</span>
                                        <span class="color-btn color-btn-biege">XL</span>
                                        <span class="color-btn color-btn-biege">XXL</span>
                                    </div>
                                </div>

                            </div> <!--/clearfix-->
                        </div> <!--/product-info-wrapper-->
                    </div> <!--/col-md-4-->
                    <!-- === product item gallery === -->

                    <div class="col-md-8 col-sm-12 product-flex-gallery">

                        <!-- === product gallery === -->

                        <div class="owl-product-gallery open-popup-gallery">
                            <a href="<?= $url ?>assets/images/product-1.png"><img src="<?= $url ?>assets/images/product-1.png" alt="" height="500" /></a>
                            <a href="<?= $url ?>assets/images/product-2.png"><img src="<?= $url ?>assets/images/product-2.png" alt="" height="500" /></a>
                            <a href="<?= $url ?>assets/images/product-3.png"><img src="<?= $url ?>assets/images/product-3.png" alt="" height="500" /></a>
                            <a href="<?= $url ?>assets/images/product-4.png"><img src="<?= $url ?>assets/images/product-4.png" alt="" height="500" /></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <!-- ========================  Product info popup - quick view ======================== -->

    <div class="popup-main mfp-hide" id="productid1">

        <!-- === product popup === -->

        <div class="product">

            <!-- === popup-title === -->

            <div class="popup-title">
                <div class="h1 title"><?= $model->name ?> <small>product category</small></div>
            </div>

            <!-- === product gallery === -->

            <div class="owl-product-gallery">
                <img src="assets/images/product-1.png" alt="" width="640" />
                <img src="assets/images/product-2.png" alt="" width="640" />
                <img src="assets/images/product-3.png" alt="" width="640" />
                <img src="assets/images/product-4.png" alt="" width="640" />
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

                    </div><!--/row-->
                </div> <!--/product-info-wrapper-->
            </div><!--/popup-content-->
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


</div>
<!--/wrapper-->


