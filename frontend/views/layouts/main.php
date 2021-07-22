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
                        <li><a href="<?= Url::to('/site/news') ?>"><?= Yii::t('app', 'Публикации') ?></a></li>
                        <li><a href="<?= Url::to('/site/video-news') ?>"><?= Yii::t('app', 'Видеоблог') ?></a></li>

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
            <div id="map" style="width: 100%; height: 400px" class="mb-4"></div>
        </div>

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
                        <li><a href="<?= Url::to('/site/about') ?>"><?= Yii::t('app', 'Biz haqimizda') ?></a></li>
                        <li><a href="<?= Url::to('/site/news') ?>"><?= Yii::t('app', 'Yangiliklar') ?></a></li>
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
<script>
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("map", {
                center: [55.76, 37.64],
                zoom: 10
            }, {
                searchControlProvider: 'yandex#search'
            }),

            // Создаем геообъект с типом геометрии "Точка".
            myGeoObject = new ymaps.GeoObject({
                // Описание геометрии.
                geometry: {
                    type: "Point",
                    coordinates: [55.8, 37.8]
                },
                // Свойства.
                properties: {
                    // Контент метки.
                    iconContent: 'Я тащусь',
                    hintContent: 'Ну давай уже тащи'
                }
            }, {
                // Опции.
                // Иконка метки будет растягиваться под размер ее содержимого.
                preset: 'islands#blackStretchyIcon',
                // Метку можно перемещать.
                draggable: true
            }),
            myPieChart = new ymaps.Placemark([
                55.847, 37.6
            ], {
                // Данные для построения диаграммы.
                data: [
                    {weight: 8, color: '#0E4779'},
                    {weight: 6, color: '#1E98FF'},
                    {weight: 4, color: '#82CDFF'}
                ],
                iconCaption: "Диаграмма"
            }, {
                // Зададим произвольный макет метки.
                iconLayout: 'default#pieChart',
                // Радиус диаграммы в пикселях.
                iconPieChartRadius: 30,
                // Радиус центральной части макета.
                iconPieChartCoreRadius: 10,
                // Стиль заливки центральной части.
                iconPieChartCoreFillStyle: '#ffffff',
                // Cтиль линий-разделителей секторов и внешней обводки диаграммы.
                iconPieChartStrokeStyle: '#ffffff',
                // Ширина линий-разделителей секторов и внешней обводки диаграммы.
                iconPieChartStrokeWidth: 3,
                // Максимальная ширина подписи метки.
                iconPieChartCaptionMaxWidth: 200
            });

        myMap.geoObjects
            .add(myGeoObject)
            .add(myPieChart)
            .add(new ymaps.Placemark([55.684758, 37.738521], {
                balloonContent: 'цвет <strong>воды пляжа бонди</strong>'
            }, {
                preset: 'islands#icon',
                iconColor: '#0095b6'
            }))
            .add(new ymaps.Placemark([55.833436, 37.715175], {
                balloonContent: '<strong>серобуромалиновый</strong> цвет'
            }, {
                preset: 'islands#dotIcon',
                iconColor: '#735184'
            }))
            .add(new ymaps.Placemark([55.687086, 37.529789], {
                balloonContent: 'цвет <strong>влюбленной жабы</strong>'
            }, {
                preset: 'islands#circleIcon',
                iconColor: '#3caa3c'
            }))
            .add(new ymaps.Placemark([55.782392, 37.614924], {
                balloonContent: 'цвет <strong>детской неожиданности</strong>'
            }, {
                preset: 'islands#circleDotIcon',
                iconColor: 'yellow'
            }))
            .add(new ymaps.Placemark([55.642063, 37.656123], {
                balloonContent: 'цвет <strong>красный</strong>'
            }, {
                preset: 'islands#redSportIcon'
            }))
            .add(new ymaps.Placemark([55.826479, 37.487208], {
                balloonContent: 'цвет <strong>фэйсбука</strong>'
            }, {
                preset: 'islands#governmentCircleIcon',
                iconColor: '#3b5998'
            }))
            .add(new ymaps.Placemark([55.694843, 37.435023], {
                balloonContent: 'цвет <strong>носика Гены</strong>',
                iconCaption: 'Очень длиннный, но невероятно интересный текст'
            }, {
                preset: 'islands#greenDotIconWithCaption'
            }))
            .add(new ymaps.Placemark([55.790139, 37.814052], {
                balloonContent: 'цвет <strong>голубой</strong>',
                iconCaption: 'Очень длиннный, но невероятно интересный текст'
            }, {
                preset: 'islands#blueCircleDotIconWithCaption',
                iconCaptionMaxWidth: '50'
            }));
    }
</script>
</body>

</html>

<?php $this->endPage() ?>
