<?php

/**
 * This is the model class for table "tbl_account".
 *
 * The followings are the available columns in table 'tbl_account':
 * @property integer $accountID
 * @property string $studNum
 * @property integer $userID
 * @property string $lastName
 * @property string $firstName
 * @property string $MiddleName
 * @property integer $civilStat
 * @property integer $gender
 * @property string $birthDate
 * @property string $permAdd
 * @property string $emailAdd
 * @property string $contactNum
 * @property integer $gradYear
 * @property string $college
 * @property string $degree
 * @property string $major
 * @property string $avatar
 *
 * The followings are the available model relations:
 * @property User $user
 * @property EmpInfo[] $empInfos
 * @property Feedback[] $feedbacks
 */
class Account extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_account';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('studNum, userID, lastName, firstName, MiddleName, civilStat, gender, birthDate, permAdd, emailAdd, contactNum, gradYear, college, degree', 'required'),
			array('userID, civilStat, gradYear', 'numerical', 'integerOnly'=>true),
                        array('gender', 'in', 'range'=>array(0,1)),
                        array('civilStat', 'in', 'range'=>array()),
			array('studNum', 'length', 'min'=>10, 'max'=>10),
                        array('studNum', 'match', 'not'=>true, 'pattern'=>'/^[1980-2010]\-([0-9]{5})$/', 'message'=>'Student Number\'s format is invalid'),
			array('lastName, MiddleName', 'length', 'max'=>30),
			array('firstName, emailAdd, major', 'length', 'max'=>45),
                        array('emailAdd', 'email'),
                        array('major', 'match', 'not'=>true, 'pattern'=>'/^[a-zA-Z]{3-45$}/u', 'message'=>'Major must only contain letters'),
			array('permAdd', 'length', 'max'=>100),
                        //array('permAdd', 'match', 'not'=>true, 'pattern'=>'', 'message'=>''),
			array('contactNum', 'length', 'max'=>20),
                        //array('contactNum', 'match', 'not'=>true, 'pattern'=>'/^((+63)?)$/', 'message'=>'Invalid contact number'),
			array('college', 'length', 'max'=>4),
			array('degree', 'length', 'max'=>15),
			array('avatar', 'safe', 'on'=>'create'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
                        array('studNum, major', 'safe', 'on'=>'create'),
			array('accountID, studNum, userID, lastName, firstName, MiddleName, civilStat, gender, birthDate, permAdd, emailAdd, contactNum, gradYear, college, degree, major, avatar', 'safe', 'on'=>'search'),
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
			'empInfos' => array(self::HAS_MANY, 'EmpInfo', 'accountID'),
			'feedbacks' => array(self::HAS_MANY, 'Feedback', 'accountID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'accountID' => 'Account',
			'studNum' => 'Stud Num',
			'userID' => 'User',
			'lastName' => 'Last Name',
			'firstName' => 'First Name',
			'MiddleName' => 'Middle Name',
			'civilStat' => 'Civil Stat',
			'gender' => 'Gender',
			'birthDate' => 'Birth Date',
			'permAdd' => 'Perm Add',
			'emailAdd' => 'Email Add',
			'contactNum' => 'Contact Num',
			'gradYear' => 'Grad Year',
			'college' => 'College',
			'degree' => 'Degree',
			'major' => 'Major',
			'avatar' => 'Avatar',
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

		$criteria->compare('accountID',$this->accountID);
		$criteria->compare('studNum',$this->studNum,true);
		$criteria->compare('userID',$this->userID);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('MiddleName',$this->MiddleName,true);
		$criteria->compare('civilStat',$this->civilStat);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('birthDate',$this->birthDate,true);
		$criteria->compare('permAdd',$this->permAdd,true);
		$criteria->compare('emailAdd',$this->emailAdd,true);
		$criteria->compare('contactNum',$this->contactNum,true);
		$criteria->compare('gradYear',$this->gradYear);
		$criteria->compare('college',$this->college,true);
		$criteria->compare('degree',$this->degree,true);
		$criteria->compare('major',$this->major,true);
		$criteria->compare('avatar',$this->avatar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Account the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
