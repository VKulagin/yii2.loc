<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use backend\models\Page;

class PageController extends \yii\web\Controller
{
    public function actionIndex()
    {
//        if (!\Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }

        $model = new Page();
	$model->find()->all();
        return $this->render('view', [
                'model' => $model,
            ]);


//        return $this->render('index');
    }

}
