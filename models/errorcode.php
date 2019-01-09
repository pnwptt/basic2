<?php
	namespace app\models;
	use yii\db\ActiveRecord;
	use yii;

	class Errorcode extends ActiveRecord{
	
		public $primaryKey = "i_errorcode_id";
		
		public static function tableName(){
			return 'b_errorcode';
		}

		public function rules(){
			return [
				[['n_errorcode', 'c_rank', 'c_code', 'i_errorcode_type_id'], 'required']
			];
		}

		public function attributeLabels(){
			return [
				'n_errorcode' => 'Errorcode name',
				'c_rank' => 'Rank',
				'c_code' => 'Code',
				'i_errorcode_type_id' => 'Type'
			];
		}

		public function getType()
		{
			return $this->hasOne(Type::className(), ['i_errorcode_type_id'=>'i_errorcode_type_id']);
		}
	}
?>