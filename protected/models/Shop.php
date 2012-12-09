<?php

/**
 * This is the model class for table "tbl_shop".
 *
 * The followings are the available columns in table 'tbl_shop':
 * @property integer $shopID
 * @property integer $couponID
 * @property integer $cardID
 * @property integer $branchID
 * @property string $shopName
 * @property string $shopPwd
 * @property string $shopEmail
 * @property string $shopPic
 * @property string $shopType
 * @property string $shopDetail
 * @property string $colorFish
 */
class Shop extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Shop the static model class
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
		return 'tbl_shop';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('shopID, branchID, shopName, shopPwd, shopEmail, colorFish', 'required'),
			array('shopID, couponID, cardID, branchID', 'numerical', 'integerOnly'=>true),
			array('shopName, shopEmail, shopDetail', 'length', 'max'=>50),
			array('shopPwd', 'length', 'max'=>15),
			array('shopPic, colorFish', 'length', 'max'=>100),
			array('shopType', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('shopID, couponID, cardID, branchID, shopName, shopPwd, shopEmail, shopPic, shopType, shopDetail, colorFish', 'safe', 'on'=>'search'),
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
			'shopID' => 'Shop ID',
			'couponID' => 'Coupon',
			'cardID' => 'Card',
			'branchID' => 'Branch ID',
			'shopName' => 'Shop Name',
			'shopPwd' => 'Password',
			'shopEmail' => 'Email',
			'shopPic' => 'Picture',
			'shopType' => 'Shop Type',
			'shopDetail' => 'Detail',
			'colorFish' => 'Color Fish',
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

		$criteria->compare('shopID',$this->shopID);
		$criteria->compare('couponID',$this->couponID);
		$criteria->compare('cardID',$this->cardID);
		$criteria->compare('branchID',$this->branchID);
		$criteria->compare('shopName',$this->shopName,true);
		$criteria->compare('shopPwd',$this->shopPwd,true);
		$criteria->compare('shopEmail',$this->shopEmail,true);
		$criteria->compare('shopPic',$this->shopPic,true);
		$criteria->compare('shopType',$this->shopType,true);
		$criteria->compare('shopDetail',$this->shopDetail,true);
		$criteria->compare('colorFish',$this->colorFish,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}