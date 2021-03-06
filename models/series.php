<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii;

class Series extends ActiveRecord{

  public $primaryKey = "i_series_id";

  public static function tableName(){
    return 'b_series';
  }

  public function rules() {
  	return [
  		[['c_series_code', 'n_series_name', 'i_pallet_qty'], 'required']
  	];
  }

  public function attributeLabels() {
  	return [
  		'c_series_code' => 'Serie code',
  		'n_series_name' => 'Serie name',
  		'i_pallet_qty' => 'Quantity/Pallet'
  	];
  }

  // public function getType(){
  // 	return $this->hasOne(Type::className(),['i_errorcode_type_id'=>'i_errorcode_type_id']);
  // }
}