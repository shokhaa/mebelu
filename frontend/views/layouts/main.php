<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\db\Query;
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $url = Yii::$app->homeUrl."mebelu/template/assets/images/"; ?>
<?php $this->beginPage() ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php $static_infos =  (new Query())->from('static_info')->one()?>

    <nav class="navbar-fixed">

        <div class="container">


            <!-- ==========  Main navigation ========== -->

            <div class="navigation navigation-main">

                <!-- Setup your logo here-->

                <a href="/" class="logo">
                    <img src="<?= $url.$static_infos['logo_photo']?>" alt="logotip image" />
                </a>

                <!-- Mobile toggle menu -->

                <a href="#" class="open-menu">
                    <i class="icon icon-menu"></i>
                </a>

                <!-- Convertible menu (mobile/desktop)-->

                <div class="floating-menu">

                    <!-- Mobile toggle menu trigger-->

                    <div class="close-menu-wrapper">
                        <span class="close-menu">
                            <i class="icon icon-cross"></i>
                        </span>
                    </div>

                    <ul>
                        <!-- Furniture icons in dropdown-->

                        <li>
                            <a href="#">
                                Katalog
                                <span class="open-dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="navbar-dropdown">
                                <div class="navbar-box">
                                    <!-- box-2 (right-side)-->
                                    <div class="box-2">
                                        <div class="clearfix categories">
                                            <div class="row">

                                                <!--icon item-->
                                                <?php $categories = (new Query())->from('category')->all();
                                                foreach ($categories as $category){
?>
                                                <div class="col-sm-3 col-xs-6">
                                                    <a href="/category/view?id=<?=$category['id']?>">
                                                        <figure>
                                                            <i class="f-icon f-icon-<?=$category['category_icon']?>">
                                                            </i>
                                                            <figcaption><?=$category['name']?>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                </div>
                                                      <?php                                      }
                                                ?>
                                                    
                                            </div> <!--/row-->
                                        </div> <!--/categories-->
                                    </div> <!--/box-2-->
                                </div> <!--/navbar-box-->
                            </div> <!--/navbar-dropdown-->
                        </li>
                        <li><a href="/site/contacts">Kontaktlar</a></li>
                        <li><a href="/site/news">Maqolalar</a></li>
                        <li><a href="/site/video-news">Video maqolalar</a></li>
                        <li>
                            <div style="">
                                <a style="display: inline-block; background-color: #ffbb00; padding: 7px; border-radius: 2px; color: white" href="tel:+998977454255">+998977454255</a>
                            </div>
                        </li>

                    </ul>
                </div> <!--/floating-menu-->
            </div> <!--/navigation-main-->

        </div> <!--/container-->
    </nav>


        <div class="wrapper">

            <?= $content ?>
    </div>

<footer>
    <div class="container">

        <!--footer showroom-->
        <div class="footer-showroom">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Bizning showroomga tashrif buyuring.</h2>
                    <p>200 12th Ave, New York, NY 10001, USA</p>
                    <p>Mon - Sat: 10 am - 6 pm &nbsp; &nbsp; | &nbsp; &nbsp; Sun: 12pm - 2 pm</p>
                </div>
                <div class="col-sm-4 text-center">
                    <a href="https://www.google.com/maps/@41.3592287,69.276351,18z" class="btn btn-clean"><span class="icon icon-map-marker"></span>Manzilimiz</a>
                    <div class="call-us h4"><span class="icon icon-phone-handset"></span> <a href="tel:+998977454255">+998977454255</a></div>

                </div>
            </div>
        </div>

        <!--footer links-->
        <div class="footer-links">
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <h5>Orqali ko'rish</h5>
                    <ul>
<!--                        <li><a href="">Brand</a></li>-->
                        <li><a href="">Mahsulotlar</a></li>
                        <li><a href="">Kategoriyalar</a></li>
                    </ul>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h5>Bizning kompaniya</h5>
                    <ul>
                        <li><a href="/site/about">Biz haqimizda</a></li>
                        <li><a href="/site/news">Yangiliklar</a></li>
                        <li><a href="/site/contacts">Kontaktlarimiz</a></li>
                    </ul>
                </div>

                <div class="col-sm-4 col-md-2">
                </div>

                <div class="col-sm-12 col-md-6">
                    <h5>Yangiliklardan xabardor bo'ling</h5>
                    <p><i>Bizning yangliklardan doimiy xabardor bo'lish uchun emailingizni kiriting</i></p>
                    <div class="form-group form-newsletter">
                        <input class="form-control" type="email" name="email" value="" placeholder="Email adresingiz" />
                        <input type="submit" class="btn btn-clean btn-sm" value="Obuna bo'lish" />
                    </div>
                </div>
            </div>
        </div>

        <!--footer social-->

        <div class="footer-social">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6 links">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
