<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii;

class Member extends ActiveRecord{
  public static function tableName(){
    return 'b_member';
  }

  public static function getDb(){
    return Yii::$app->get('db2');
  }

  public function attributeLabels(){
    return[
      'i_member_id'=>'ID',
      'n_member'=>'Department',
      'c_user'=>'Username',
      'c_password'=>'Password',
      'c_email'=>'Email',
    ];
  }
}
 ?>