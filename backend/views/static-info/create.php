<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StaticInfo */

$this->title = 'Create Static Info';
$this->params['breadcrumbs'][] = ['label' => 'Static Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
