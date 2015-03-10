<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pageID') ?>

    <?= $form->field($model, 'pageName') ?>

    <?= $form->field($model, 'pageAlias') ?>

    <?= $form->field($model, 'pageContent') ?>

    <?= $form->field($model, 'pageUpdateTime') ?>

    <?php // echo $form->field($model, 'pageCreationTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
