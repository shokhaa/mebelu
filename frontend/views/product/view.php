<?php $url = Yii::$app->homeUrl.'mebelu/template/assets/images/'; ?>

<div class="page-loader"></div>

<div class="wrapper">

    <!-- ========================  Main header ======================== -->

    <section class="main-header" style=" background-image:url(<?= $url ?>gallery-2.jpg)">
        <header>
            <div class="container">
                <h1 class="h2 title"><?= $model->name ?></h1>
                <ol class="breadcrumb breadcrumb-inverted">
                    <li><a href="/site/index"><span class="icon icon-home"></span></a></li>
                    <li><a class="active" href="/product/view?id=<?= $model->id ?>"><?= Yii::t('app', 'Mahsulot') ?></a></li>
                </ol>
            </div>
        </header>
    </section>

    <!-- ========================  Product ======================== -->

    <section class="product">
        <div class="main">
            <div class="container">
                <div class="row product-flex">

                    <div class="col-md-4 col-sm-12 product-flex-info">
                        <div class="clearfix">

                            <h1 class="title" data-title="mebelu"> <?= $model->name ?></h1>

                            <div class="clearfix">

                                <div class="price">
                                        <span class="h3">
                                            <?php
                                            if ($model->status == 4 ){
                                                $price =strval( $model->price - $model->price*($model->sales_procent/100));
                                                echo $price." "."so'm".'<small>'. $model->price ." "."so'm".'</small>';
                                            }
                                            else {
                                                 echo $model->price." so'm";
                                            }
                                            ?>
                                        </span>
                                </div>
                                <hr />
                                <?= $model->description; ?>

                            </div> <!--/clearfix-->
                        </div> <!--/product-info-wrapper-->
                    </div> <!--/col-md-4-->
                    <!-- === product item gallery === -->

                    <div class="col-md-8 col-sm-12 product-flex-gallery">
                        <div class="owl-product-gallery open-popup-gallery">
                            <?php
                            $image = ProductImage::find()->where(['product_id' => $model->id])->asArray()->all();
                            foreach ($image as $item){
                                ?>
                                <a href="<?=  $url . ((sizeof($item)) ? ($item['image_url']) : ('product-1.png'))?>">
                                    <img src="<?=  $url . ((sizeof($image)) ? ($item['image_url']) : ('product-1.png')) ?>  " alt="product image" height="500" /></a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>

</div>
<!--/wrapper-->


