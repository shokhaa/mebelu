<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\components\LanguageWidget;
use yii\db\Query;
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $url = Yii::$app->homeUrl."mebelu/template/assets/images/"; ?>
<?php $this->beginPage() ?>


<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

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
    <script src="https://api-maps.yandex.ru/2.1/?apikey=c1aa91e4-4c0e-4c25-a6c5-d03d03c70273&lang=ru_RU" type="text/javascript">
    </script>
    <script type="text/javascript">
        ymaps.ready(init);
        function init(){
            var myMap = new ymaps.Map("map", {
                center: [41.270390, 69.245214],
                zoom: 15
            }, {
                searchControlProvider: 'yandex#search'
            });
            var myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                balloonContentBody: [
                    '<address>',
                    '<strong>Lusiana mebel</strong>',
                    '<br/>',
                    'Адрес: Toshkent, Qushbegi koʻchasi, 18',
                    '<br/>',
                    'За дополнительной информацией, видеть: <a href="https://mebelu.uz">https://mebelu.uz</a>',
                    '</address>'
                ].join('')
            }, {
                preset: 'islands#redDotIcon'
            });

            myMap.geoObjects.add(myPlacemark);
        }
    </script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php
$static_infos =  (new Query())->from('static_info')->one()?>

    <nav class="navbar-fixed">

        <div class="container">


            <!-- ==========  Main navigation ========== -->

            <div class="navigation navigation-main">

                <!-- Setup your logo here-->

                <a href="/" class="logo">
                    <img src="<?= $url.$static_infos['logo_photo'] ?>" alt="logotip image" />
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
                                <?= Yii::t('app', 'Katalog') ?>
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
                                                    <a href="<?= Url::to('/category/view') ?>?id=<?=$category['id']?>">
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
                        <li><a href="<?= Url::to('/site/contacts') ?>"><?= Yii::t('app', 'Kontaktlar') ?></a></li>


                            <?= LanguageWidget::widget() ?>

                        <li>
                            <div style="">
                                <a style="display: inline-block; background-color: #ffbb00; padding: 7px; border-radius: 2px; color: white" href="tel:<?= $static_infos['phone_number'] ?>"><?= $static_infos['phone_number'] ?></a>
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
<section class="products" style="background-color: #ffbb00">
    <div class="container  d-flex justify-content-center">
        <div style="width: 210px; margin-right: 15px;" class="col-md-2">
            <a href=""><img style="width: 210px; height: 121px" src="<?= $url."blum.jpg" ?>" alt="brand image"></a>
        </div>
        <div style="width: 210px; margin-right: 15px;" class="col-md-2">
            <a href=""><img style="width: 210px; height: 121px" src="<?= $url."samet.jpg" ?>" alt="brand image"></a>
        </div>
        <div style="width: 210px; margin-right: 15px;" class="col-md-2">
            <a href=""><img style="width: 210px; height: 121px" src="<?= $url."starax.jpg" ?>" alt="brand image"></a>
        </div>
        <div style="width: 210px; margin-right: 15px;" class="col-md-2">
            <a href=""><img style="width: 210px; height: 121px" src="<?= $url."hafele.jpg" ?>" alt="brand image"></a>
        </div>
        <div style="width: 210px;" class="col-md-2">
            <a href=""><img style="width: 210px; height: 121px" src="<?= $url."hettich.jpg" ?>" alt="brand image"></a>
        </div>
    </div>
</section>
<div id="map" style="width: 100%; height: 400px" class="center"></div>
<footer>
    <div class="container">

        <!--footer showroom-->
        <div class="footer-showroom">
            <div class="row">
                <div class="col-sm-8">
                    <h2><?= Yii::t('app', 'Bizning showroomga tashrif buyuring') ?></h2>
                   <p><?= $static_infos['address'] ?></p>
                </div>
                <div class="col-sm-4 text-center">
                    <a href="<?= $static_infos['location'] ?>" class="btn btn-clean"><span class="icon icon-map-marker"></span><?= Yii::t('app', 'Manzilimiz') ?></a>
                    <div class="call-us h4"><span class="icon icon-phone-handset"></span> <a href="tel:+998977454255"><?= $static_infos['phone_number'] ?></a></div>

                </div>
            </div>
        </div>

        <!--footer links-->
        <div class="footer-links">
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <h5><?= Yii::t('app', 'Orqali ko\'rish') ?></h5>
                    <ul>
<!--                        <li><a href="">Brand</a></li>-->
                        <li><a href=""><?= Yii::t('app', 'Mahsulotlar') ?></a></li>
                        <li><a href=""><?= Yii::t('app', 'Kategoriyalar') ?></a></li>
                    </ul>
                </div>

                <div class="col-sm-4 col-md-2">
                    <h5><?= Yii::t('app', 'Bizning kompaniya') ?></h5>
                    <ul>
                        <li><a href="<?= Url::to('/site/contacts') ?>"><?= Yii::t('app', 'Kontaktlarimiz') ?></a></li>
                    </ul>
                </div>

                <div class="col-sm-4 col-md-2">
                </div>

                <div class="col-sm-12 col-md-6">
                    <h5><?= Yii::t('app', 'Yangiliklarimizdan xabardor bo\'ling') ?></h5>
                    <p><i><?= Yii::t('app', 'Bizning yangiliklarimizdan doimiy xabardor bo\'lish uchun emailingizni kiriting') ?></i></p>
                    <div class="form-group form-newsletter">
                        <input class="form-control" type="email" name="email" value="" placeholder="<?= Yii::t('app', 'Email adresingiz') ?>" />
                        <input type="submit" class="btn btn-clean btn-sm" value="<?= Yii::t('app', 'Obuna bo\'lish') ?>" />
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
                        <li><a target="_blank" href="<?= $static_infos['facebook_profile'] ?>"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="<?= $static_infos['instagram_profile'] ?>"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="<?= $static_infos['telegram_profile'] ?>"><i class="fa fa-telegram"></i></a></li>
                        <li><a target="_blank" href="<?= $static_infos['youtube_profile'] ?>"><i class="fa fa-youtube"></i></a></li>
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
