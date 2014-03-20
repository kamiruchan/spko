<?php

/**
 * This is the model class for table "tbl_emp_info".
 *
 * The followings are the available columns in table 'tbl_emp_info':
 * @property integer $empInfoID
 * @property integer $empOrNot
 * @property string $occupation
 * @property string $workplaceName
 * @property string $workplaceAdd
 * @property integer $currJobRelToCourse
 * @property integer $unemploymentReason
 * @property string $tbl_account_studNum
 *
 * The followings are the available model relations:
 * @property Account $tblAccountStudNum
 */
class EmpInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_emp_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empOrNot, occupation, workplaceName, currJobRelToCourse, tbl_account_studNum', 'required'),
			array('empOrNot, currJobRelToCourse, unemploymentReason', 'numerical', 'integerOnly'=>true),
			array('occupation, workplaceName, workplaceAdd', 'length', 'max'=>45),
			array('tbl_account_studNum', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('empInfoID, empOrNot, occupation, workplaceName, workplaceAdd, currJobRelToCourse, unemploymentReason, tbl_account_studNum', 'safe', 'on'=>'search'),
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
			'tblAccountStudNum' => array(self::BELONGS_TO, 'Account', 'tbl_account_studNum'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'empInfoID' => 'Emp Info',
			'empOrNot' => 'Emp Or Not',
			'occupation' => 'Occupation',
			'workplaceName' => 'Workplace Name',
			'workplaceAdd' => 'Workplace Add',
			'currJobRelToCourse' => 'Curr Job Rel To Course',
			'unemploymentReason' => 'Unemployment Reason',
			'tbl_account_studNum' => 'Student Number',
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

		$criteria->compare('empInfoID',$this->empInfoID);
		$criteria->compare('empOrNot',$this->empOrNot);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('workplaceName',$this->workplaceName,true);
		$criteria->compare('workplaceAdd',$this->workplaceAdd,true);
		$criteria->compare('currJobRelToCourse',$this->currJobRelToCourse);
		$criteria->compare('unemploymentReason',$this->unemploymentReason);
		$criteria->compare('tbl_account_studNum',$this->tbl_account_studNum,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmpInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
