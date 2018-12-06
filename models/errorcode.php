<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii;

class Errorcode extends ActiveRecord{
  public static function tableName(){
    return 'b_errorcode';
  }

  public function getType()
	{
		return $this->hasOne(Type::className(),['i_errorcode_type_id'=>'i_errorcode_type_id']);
	}
}