<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Page */

$this->title = $model->pageID;
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
Yii::$app->formatter->timeZone='Europe/Kiev';
?>
<div class="page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pageID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pageID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pageID',
            'pageName',
            'pageAlias',
            'pageContent:ntext',
            [
                'attribute' => 'pageUpdateTime',
                //'format' => ['raw', 'Y-m-d H:i:s'],
                'format' =>  ['datetime', 'php:d.m.Y H:i:s'],
                'options' => ['width' => '150']
            ],
            [
                'attribute' => 'pageCreationTime',
                //'format' => ['raw', 'Y-m-d H:i:s'],
                'format' =>  ['datetime', 'php:d.m.Y H:i:s'],
                'options' => ['width' => '150']
            ],
        ],
    ]) ?>

</div>
