<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

use yii\helpers\ArrayHelper;

use yii\web\Controller;
use yii\web\Response;
use yii\web\Session;

use app\models\LoginForm;
use app\models\ContactForm;
use app\models\member;
use app\models\checklists;
use app\models\type;

class ChecklistsController extends Controller
{ 
	function actionIndex(){
		$checklists = Checklists::find()->all();
		return $this->render('index',[
			'checklists'=>$checklists,
		]);
    }
    
	function actionAdd(){
		return $this->render('Add');
	}

	function actionForm(){
		return $this->render('form');
	}
}

// 	function actionUpdate() {
// 		$model = Series::findOne($_GET['i_series_id']);
// 		if ($model->load(Yii::$app->request->post())){
// 			if ($model->save()){
// 				return $this->redirect(['index']);
// 			}
// 		}

// 		return $this->render('update', [
// 			'series'=>$model,
// 		]);
// 	}

// 	function actionDelete(){
// 		$model = Series::findOne($_GET['i_series_id']);
// 		$model->delete();
// 		return $this->redirect(['index']);
// 	}
// }