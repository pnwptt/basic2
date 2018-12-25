<?php
  namespace app\models;
  use yii\db\ActiveRecord;
  use yii;

  class errorType extends ActiveRecord{

    public $primaryKey = "i_errorcode_type_id";

    public static function tableName(){
      return 'b_errorcode_type';
    }

    public function rules() {
      return [
        [['n_errorcode_type'], 'required']
      ];
    }

    public function attributeLabels() {
      return [
        'n_errorcode_type' => 'Errorcode type name'
      ];
    }


  //  public function getType()
    // {
    // 	return $this->hasOne(Type::className(),['i_errorcode_type_id'=>'i_errorcode_type_id']);
    // }
}