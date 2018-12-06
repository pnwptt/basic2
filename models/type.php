<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii;

class Type extends ActiveRecord{
  public static function tableName(){
    return 'b_errorcode_type';
  }

}