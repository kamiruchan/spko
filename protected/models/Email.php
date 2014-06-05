<?php

/**
 * This is the model class for table "tbl_email".
 *
 * The followings are the available columns in table 'tbl_email':
 * @property integer $emailID
 * @property string $emailAdd
 * @property integer $userID
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Email extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_email';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('emailAdd, userID', 'required'),
			array('userID', 'numerical', 'integerOnly'=>true),
			array('emailAdd', 'length', 'max'=>60),
                        array('emailAdd', 'email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('emailID, emailAdd, userID', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'userID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'emailID' => 'Email',
			'emailAdd' => 'Email Add',
			'userID' => 'User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('emailID',$this->emailID);
		$criteria->compare('emailAdd',$this->emailAdd,true);
		$criteria->compare('userID',$this->userID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Email the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
