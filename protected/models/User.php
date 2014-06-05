<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $userID
 * @property string $username
 * @property string $password
 * @property integer $rolesID
 * @property string $hint
 *
 * The followings are the available model relations:
 * @property Account[] $accounts
 * @property Email[] $emails
 * @property Roles $roles
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        //confirmation
        public $repeatPassword=null;
        //encrypted
       // public $passwordChanged=false;


        public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, hint, rolesID', 'required', 'on'=>'create'),
			array('rolesID', 'numerical', 'integerOnly'=>true),
			array('username', 'unique'),
                        array('username', 'length', 'min'=>6, 'max'=>30),
                        array('password', 'length', 'min'=>6, 'max'=>30),
                        array('hint', 'length', 'max'=>30),
                        //array('salt', 'length', 'max'=>30),
                        array('username', 'match', 'not'=>true, 'pattern'=>'/[^a-zA-Z0-9_.]/', 'message'=>'Username must at least have 6 characters. Only letters, numbers, underscore and period allowed'),
                        array('password', 'match', 'not'=>true, 'pattern'=>'/[^a-zA-Z0-9_.]/', 'message'=>'Password must at least have 6 characters. Only letters, numbers, underscore and period allowed'),
                        //array('password', 'compare', 'message'=>'Passwords don\'t match', 'on'=>'create'),
			array('repeatPassword', 'safe'),
                        //array('username', 'compare', 'compareAttribute'=>'password', 'message'=>'Username and Password must not be the same', 'on'=>'create'),
                        // The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userID, username, password, hint, rolesID', 'safe', 'on'=>'search'),
		);
	}
        /**
        protected function saltPassword($salt)
        {
            return md5($salt);
        }
        
        public function setAttributes($attributes, $safe=true) {
            foreach ($attributes as $name => $value) {
                $this->setAttribute($name, $value);
            }
            return true;
        }
        
        public function setAttribute($name, $value) {
            if($name==$this->password)
                $this->passwordChanged=true;
            parent::setAttribute($name, $value);
        }
        
        protected function beforeSave() {
            if($this->isNewRecord){
                $this->password=$this->createPassword();
            }
            return parent::beforeSave();
                
        }
        
        public function createPassword(){
            $this->salt=$this->saltPassword($this->username . "salt0103938273646");
            return $this->encrypt($this->password, $this->salt);
        }

        public function encrypt($rawPassword, $salt){
            return md5("{$rawPassword}.{$salt}");
        }
        **/
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'accounts' => array(self::HAS_MANY, 'Account', 'userID'),
			'emails' => array(self::HAS_MANY, 'Email', 'userID'),
			'roles' => array(self::BELONGS_TO, 'Roles', 'rolesID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userID' => 'User',
			'username' => 'Username',
			'password' => 'Password',
                        //'repeatPassword' => 'Confirm Password',
                        'hint' => 'Password Hint',
			'rolesID' => 'Role',
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

		$criteria->compare('userID',$this->userID);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('rolesID',$this->rolesID);
                $criteria->compare('hint', $this->hint,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
