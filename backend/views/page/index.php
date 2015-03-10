<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Page', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'pageID',
                'options' => ['width' => '50']
            ],
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
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
