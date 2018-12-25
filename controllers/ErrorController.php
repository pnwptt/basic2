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
use app\models\errorcode;
use app\models\type;

class ErrorController extends Controller
{ 
	function actionIndex(){
		$errorcode = Errorcode::find()->all();
		return $this->render('index',[
			'errorcode'=>$errorcode,
		]);
	}

	function actionAdd(){
		return $this->render('add');
		// $formData = Yii::$app->request->errorcode();
		// if($errorcode->load($formData)){
		// 	if($errorcode->save()){
		// 		Yii::$app->getSession()->setFlash('message', 'Successfully');
		// 		return $this->render('index');
		// 	}
		// 	else{
		// 		Yii::$app->getSession()->setFlash('message', 'Failed');
		// 	}
		// }
		// return $this->render('add', ['errorcode'=>$erorcode]);
	} 

	function actionForm($i_errorcode_id = null) {

		$errorcode = new Errorcode();
		
		if(!empty($i_errorcode_id)) {
			$errorcode = Errorcode::findOne($errorcode);
		}

		$typeall = Type::find()->orderBy('n_errorcode_type asc')->all();
		$type = ArrayHelper::map($typeall,'i_errorcode_type_id','n_errorcode_type');

		//var_dump($type);

		if(!empty($_POST))
		{                                                                           
			$errorcode->n_errorcode = $_POST['Errorcode']['n_errorcode'];
			$errorcode->c_rank = $_POST['Errorcode']['c_rank'];
			$errorcode->c_code = $_POST['Errorcode']['c_code'];
			$errorcode->i_errorcode_type_id = $_POST['Errorcode']['i_errorcode_type_id'];

			if($errorcode->save())
			{
				return $this->redirect('index');
			}
		}

		return $this->render('form', [
			'errorcode'=>$errorcode,
			'type'=>$type,
		]);
	}

	// function actionView(){
	// 	$errorcode = Errorcode::fineOne($errorcode);
	// 	return $this->render('view', ['errorcode'=>$errorcode]);
	// }

	// function actionUpdate() {
	// 	$i_errorcode_id = $_GET['i_errorcode_id'];

	// 	$model = Errorcode::findOne($i_errorcode_id);
	// 	$model->loadErrorcode();

	// 	if ($model->load(Yii::$app->request->post()))
	// 	{
	// 		if ($model->save()) {
	// 			$model->saveErrorcode();
	// 			return $this->redirect(['index']);
	// 		}
	// 	}
	// 	return $this->render('update', [
	// 		'model' => $model,
	// 		'errorcode' => Errorcode::getAvailableErrorcode(),
	// 	]);
	// }
	function actionUpdate() {
		$model = Errorcode::findOne($_GET['i_errorcode_id']);
		if ($model->load(Yii::$app->request->post())) {
			if ($model->save()) {
				return $this->redirect(['index']);
			}
		}

		$typeall = Type::find()->orderBy('n_errorcode_type asc')->all();
		$type = ArrayHelper::map($typeall,'i_errorcode_type_id', 'n_errorcode_type');
		return $this->render('update',[
			'errorcode'=>$model,
			'type'=>$type,
		]);
	}

	function actionDelete() {
		$model = Errorcode::findOne($_GET['i_errorcode_id']);
		$model->delete();
		return $this->redirect(['index']);
	}
}