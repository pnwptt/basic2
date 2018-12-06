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
use app\models\series;
use app\models\type;

class SeriesController extends Controller
{ 
	function actionIndex(){
		$series = Series::find()->all();
		return $this->render('index',[
			'series'=>$series,
		]);
	}

	function actionAdd(){
		return $this->render('Add');
	}

	

	function actionForm($i_series_id = null){
		// die(var_dump($_POST));
		$series = new Series();
		if(!empty($i_series_id)){
			$series = Series::findone($series);
		}

		// $typeall = Type::find()->orderBy('c_series_code asc')->all();
		// $type = ArrayHelper::map($typeall, 'i_series_id','c_series_code');

		$_POST = Yii::$app->request->post();


		if (!empty($i_series_id)){
			$series = \models\series::find()->where(['i_series_id' => $i_series_id])->one(); 
		}

		if(!empty($_POST)){
			$series->c_series_code = $_POST['Series']['c_series_code'];
			$series->n_series_name = $_POST['Series']['n_series_name'];
			$series->i_pallet_qty = $_POST['Series']['i_pallet_qty'];
			// $series->c_series_deleted = $_POST['Series']['c_series_deleted'];
			// $series->i_series_id = $_POST['Series']['i_series_id'];

			if($series->save()){
				return $this->redirect('index');
			}
		}

		return $this->render('form',[
			'series'=>$series,
		]);
	}

	public function actionIndexdelete ($i_series_id) {
		$series = \models\series::find()->where(['i_series_id'=>$i_series_id])->one();

		if (!empty($i_series_id)){
			if ($series->delete()) {
				return $series->redirect(['index']);
			}
		}
	}
}