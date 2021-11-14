<?php

use yii\helpers\Url;

?>


<div class="wrapper">


    <!-- ========================  Main header ======================== -->

    <section class="main-header" style="background-image:url(assets/images/gallery-2.jpg)">
        <header>
            <div class="container text-center">
                <h2 class="h2 title"><?= Yii::t('app', 'Kontakt') ?></h2>
                <ol class="breadcrumb breadcrumb-inverted">
                    <li><a href="<?= Url::to('/site/index') ?>"><span class="icon icon-home"></span></a></li>
                    <li><a class="active" href="<?= Url::to('/site/contact') ?>"><?= Yii::t('app', 'Kontakt') ?></a></li>
                </ol>
            </div>
        </header>
    </section>

    <!-- ========================  Contact ======================== -->

    <section class="contact">

        <!-- === Goolge map === -->

        <div id="map"></div>

        <div class="container">

            <div class="row">

                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

                    <div class="contact-block">

                        <div class="contact-info">
                            <div class="row">
                                <div class="col-sm-4">
                                    <figure class="text-center">
                                        <span class="icon icon-map-marker"></span>
                                        <figcaption>
                                            <strong><?= Yii::t('app', 'Bizni qayerdan topasiz?') ?></strong>
                                            <span>улица Кушбеги, 18 <br> Яккасарайский район, Ташкент, Узбекистан</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-4">
                                    <figure class="text-center">
                                        <span class="icon icon-phone"></span>
                                        <figcaption>
                                            <strong><?= Yii::t('app', 'Call us') ?></strong>
                                            <span>
                                                     +998 99 794 77 44 <br />
                                                     +998 99 921 67 41
                                                </span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-4">
                                    <figure class="text-center">
                                        <span class="icon icon-clock"></span>
                                        <figcaption>
                                            <strong><?= Yii::t('app', 'Working hours')?></strong>
                                            <span>
                                                    <strong>Mon</strong> - Sat: 10 am - 6 pm <br />
                                                    <strong>Sun</strong> 12pm - 2 pm
                                                </span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>



                    </div>


                </div><!--col-sm-8-->
            </div> <!--/row-->
        </div><!--/container-->
    </section>
</div>
<!--/wrapper-->

