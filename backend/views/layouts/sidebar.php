<?php

use hail812\adminlte\widgets\Menu;

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
                <a href="/category" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo Menu::widget([
                'items' => [

                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Category', 'icon' => 'fas fa-tree', 'url' => ['/category'],
                    ],
                    ['label' => 'Product', 'icon' => 'fas fa-couch', 'url' => ['/product']],
                    ['label' => 'Product Image', 'icon' => 'fas fa-images', 'url' => ['/product-image']],
                    ['label' => 'Category Product', 'icon' => 'fas fa-images', 'url' => ['/category-product']],
                    ['label' => 'Static Info', 'icon' => 'fas fa-images', 'url' => ['/static-info']],
                    ['label' => 'Slider', 'icon' => 'fas fa-images', 'url' => ['/slider']],


                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>