<?php

use hail812\adminlte\widgets\Menu;
use yii\helpers\Url;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= Url::to('/category') ?>" class="d-block"><?= Yii::t('app', 'Admin') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo Menu::widget([
                'items' => [

                    ['label' => Yii::t('app', 'Login'), 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => Yii::t('app', 'Category'), 'icon' => 'fas fa-tree', 'url' => ['/category'],],
                    ['label' => Yii::t('app', 'Product'), 'icon' => 'fas fa-couch', 'url' => ['/product']],
                    ['label' => Yii::t('app', 'Category Product'), 'icon' => 'fas fa-users', 'url' => ['/category-product']],
                    ['label' => Yii::t('app', 'Static Info'), 'icon' => 'fas fa-info-circle', 'url' => ['/static-info']],
                    ['label' => Yii::t('app', 'Slider'), 'icon' => 'fas fa-stream', 'url' => ['/slider']],


                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>