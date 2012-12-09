<?php

/**
 * This is the model class for table "tbl_promotion".
 *
 * The followings are the available columns in table 'tbl_promotion':
 * @property integer $proID
 * @property integer $shopID
 * @property string $proName
 * @property string $proCondition
 * @property string $startDate
 * @property string $endDate
 * @property integer $conditionPoint
 * @property integer $amountBuy
 * @property string $unitBuy
 * @property integer $amountReward
 * @property string $unitReward
 * @property double $valueReward
 * @property string $proDetail
 * @property string $proPic
 * @property string $proQR
 */
class Promotion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Promotion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_promotion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proID, shopID, proName, proCondition, startDate, endDate, conditionPoint, amountBuy, unitBuy, amountReward, unitReward, valueReward, proQR', 'required'),
			array('proID, shopID, conditionPoint, amountBuy, amountReward', 'numerical', 'integerOnly'=>true),
			array('valueReward', 'numerical'),
			array('proName', 'length', 'max'=>50),
			array('proCondition', 'length', 'max'=>500),
			array('unitBuy, unitReward', 'length', 'max'=>10),
			array('proDetail', 'length', 'max'=>200),
			array('proPic, proQR', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('proID, shopID, proName, proCondition, startDate, endDate, conditionPoint, amountBuy, unitBuy, amountReward, unitReward, valueReward, proDetail, proPic, proQR', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'proID' => 'Promotion ID',
			'shopID' => 'Shop ID',
			'proName' => 'Promotion Name',
			'proCondition' => 'Condition',
			'startDate' => 'Start Date',
			'endDate' => 'End Date',
			'conditionPoint' => 'Condition Point',
			'amountBuy' => 'Amount Buy',
			'unitBuy' => 'Unit Buy',
			'amountReward' => 'Amount Reward',
			'unitReward' => 'Unit Reward',
			'valueReward' => 'Value Reward',
			'proDetail' => 'Detail',
			'proPic' => 'Picture',
			'proQR' => 'QR Code',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('proID',$this->proID);
		$criteria->compare('shopID',$this->shopID);
		$criteria->compare('proName',$this->proName,true);
		$criteria->compare('proCondition',$this->proCondition,true);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('endDate',$this->endDate,true);
		$criteria->compare('conditionPoint',$this->conditionPoint);
		$criteria->compare('amountBuy',$this->amountBuy);
		$criteria->compare('unitBuy',$this->unitBuy,true);
		$criteria->compare('amountReward',$this->amountReward);
		$criteria->compare('unitReward',$this->unitReward,true);
		$criteria->compare('valueReward',$this->valueReward);
		$criteria->compare('proDetail',$this->proDetail,true);
		$criteria->compare('proPic',$this->proPic,true);
		$criteria->compare('proQR',$this->proQR,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}