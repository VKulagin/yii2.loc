<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pageName')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'pageAlias')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'pageContent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pageCreationTime')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'pageUpdateTime')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
