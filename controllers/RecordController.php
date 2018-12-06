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
use app\models\record;
use app\models\series;
use app\models\type;

class RecordController extends Controller
{ 
	function actionIndex(){ 
		$record = Record::find()->all();
		
		$series = new Series();
		$seriesall = Series::find()->orderBy('n_series_name asc')->all();
		$serieslist = ArrayHelper::map($seriesall, 'i_series_id', 'n_series_name');
		// die(var_dump($serieslist));

		// if(!empty($_POST)){
		// 	$record->c_order_number = $_POST['Record']['c_order_number'];
		// 	$record->c_part_number = $_POST['Record']['c_part_number'];
		// 	$record->c_part_name = $_POST['Record']['c_part_name'];
		// 	$record->c_customer = $_POST['Record']['c_customer'];
		// 	$record->i_qty = $_POST['Record']['i_qty'];
		// 	$record->i_sampling_qty = $_POST['Record']['i_sampling_qty'];
		// 	$record->d_record_date = $_POST['Record']['d_record_date'];
		// 	$record->c_ncr_number = $_POST['Record']['c_ncr_number'];
		// 	$record->c_8d_report_no = $_POST['Record']['c_8d_report_no'];
		// 	$record->i_series_id = $_POST['Record']['i_series_id'];

		// 	if($record->save()){
		// 		return $this->redirect('index');
		// 	}
	// }

		return $this->render('index',[
			'record'=>$record,
			'series'=>$series,
			'serieslist'=>$serieslist,
		]);
	}

	// function actionAdd(){
	// 	return $this->render('Add');
	// }

	// function actionForm($i_record_id = null){
	// 	// die(var_dump($_POST));
	// 	$record = new Record();
	// 	if(!empty($i_record_id)){
	// 		$record = Record::findone($record);
	// 	}

	// 	$seriesall = Series::find()->orderBy('n_series_name asc')->all();
	// 	$serieslist = ArrayHelper::map($seriesall, 'i_series_id','n_series_name');

	// 	if(!empty($_POST)){
	// 		$record->c_order_number = $_POST['Record']['c_order_number'];
	// 		$record->c_part_number = $_POST['Record']['c_part_number'];
	// 		$record->c_part_name = $_POST['Record']['c_part_name'];
	// 		$record->c_customer = $_POST['Record']['c_customer'];
	// 		$record->i_qty = $_POST['Record']['i_qty'];
	// 		$record->i_sampling_qty = $_POST['Record']['i_sampling_qty'];
	// 		$record->d_record_date = $_POST['Record']['d_record_date'];
	// 		$record->c_ncr_number = $_POST['Record']['c_ncr_number'];
	// 		$record->c_8d_report_no = $_POST['Record']['c_8d_report_no'];
	// 		$record->i_series_id = $_POST['Record']['i_series_id'];

	// 		if($record->save()){
	// 			return $this->redirect('index');
	// 		}
	// 	}

	// 	return $this->render('form',[
	// 		'record'=>$record,
	// 	]);
	// }
}