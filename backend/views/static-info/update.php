<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StaticInfo */

$this->title = 'Update Static Info: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Static Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="static-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
