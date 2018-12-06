<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii;

class Record extends ActiveRecord{
  public static function tableName(){
    return 'b_record';
  }

public function getType()
	{
		return $this->hasOne(Series::className(),['i_series_id'
			=>'i_series_id']);
	}
 //  public function getType()
	// {
	// 	return $this->hasOne(Type::className(),['i_errorcode_type_id'=>'i_errorcode_type_id']);
	// }
}