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
                                            <span>200 12th Ave, New York, <br />NY 10001, USA</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-4">
                                    <figure class="text-center">
                                        <span class="icon icon-phone"></span>
                                        <figcaption>
                                            <strong><?= Yii::t('app', 'Call us') ?></strong>
                                            <span>
                                                    <strong>T</strong> +1 222 333 4444 <br />
                                                    <strong>F</strong> +1 222 333 5555
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

                        <div class="banner">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10 text-center">
                                    <h2 class="title"><?= Yii::t('app', 'Send an email')?></h2>
                                    <p>
                                        Thanks for your interest in Mobel Theme. We believe in creativity as one of the major forces of progress.
                                        Please use this form if you have any questions about our products and we'll get back with you very soon.
                                    </p>

                                    <div class="contact-form-wrapper">

                                        <a class="btn btn-clean open-form" data-text-open="Contact us via form" data-text-close="Close form">Contact us via form</a>

                                        <div class="contact-form clearfix">
                                            <form id="sendmail" name="sendmail" action="sendmail.php" method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input id="Name" name="Name" type="text" value="" class="form-control" placeholder="Your name" >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input id="Email" name="Email" type="email" value="" class="form-control" placeholder="Your email" >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input id="Subject" name="Subject" type="text" value="" class="form-control" placeholder="Subject" >
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea id="Comment" name="Comment" class="form-control" placeholder="Your message" rows="10"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 text-center">
                                                        <input type="submit" class="btn btn-clean" value="Send message" />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

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

