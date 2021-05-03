<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ParentCategory */

$this->title = Yii::t('app', 'Create Parent Category');

?>
<div class="parent-category-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
