<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii;

class Checklists extends ActiveRecord{

  public $primaryKey = "i_checklists_id";

  public static function tableName(){
    return 'b_checklists';
  }

  public function getType()
	{
		return $this->hasOne(Series::className(),['i_series_id'
			=>'i_series_id']);
  }
  
  public static function getChecklist($i_series_id, $on_list=true){
    if($on_list) {
      // query errorcode on list
    } else {
      // query errorcode not on list
    }
    // return list;
  }

//   public function rules() {
//   	return [
//   		[['c_series_code', 'n_series_name', 'i_pallet_qty'], 'required']
//   	];
//   }

//   public function attributeLabels() {
//   	return [
//   		'c_series_code' => 'Serie code',
//   		'n_series_name' => 'Serie name',
//   		'i_pallet_qty' => 'Quantity/Pallet'
//   	];
//   }

  // public function getType(){
  // 	return $this->hasOne(Type::className(),['i_errorcode_type_id'=>'i_errorcode_type_id']);
  // }
}