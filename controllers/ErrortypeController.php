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
use app\models\errortype;
use app\models\type;

class ErrortypeController extends Controller
{ 
	function actionIndex(){
		$errortype = errorType::find()->all();
		return $this->render('index',[
			'errortype'=>$errortype,
		]);
	}

	function actionAdd(){
		return $this->render('Add');
	}

	

	function actionForm($i_errorcode_type_id = null){
		// die(var_dump($_POST));
		$errortype = new errorType();
		if(!empty($i_errorcode_type_id)){
			$errortype = errorType::findone($errortype);
		}

		// $typeall = Type::find()->orderBy('c_series_code asc')->all();
		// $type = ArrayHelper::map($typeall, 'i_series_id','c_series_code');

		if(!empty($_POST)){
			$errortype->n_errorcode_type = $_POST['errorType']['n_errorcode_type'];
			// $errortype->n_series_name = $_POST['Series']['n_series_name'];
			// $series->i_pallet_qty = $_POST['Series']['i_pallet_qty'];
			// $series->c_series_deleted = $_POST['Series']['c_series_deleted'];
			// $series->i_series_id = $_POST['Series']['i_series_id'];

			if($errortype->save()){
				return $this->redirect('index');
			}
		}

		return $this->render('form',[
			'errortype'=>$errortype,
		]);
	}
}