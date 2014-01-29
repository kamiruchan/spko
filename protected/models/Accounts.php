<?php

/**
 * This is the model class for table "tbl_accounts".
 *
 * The followings are the available columns in table 'tbl_accounts':
 * @property integer $student_num
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $civil_status
 * @property string $gender
 * @property integer $birth_date
 * @property string $perm_add
 * @property string $email_add
 * @property integer $contact_num
 * @property integer $grad_year
 * @property string $course
 * @property string $major
 * @property string $employed_or_not
 * @property string $emp_status
 * @property string $occupation
 * @property string $workplace_name
 * @property string $workplace_addr
 * @property string $job_rel_course
 * @property string $reasons_not_emp
 * @property string $not_rel_course
 * @property string $was_curr_rel_to_course
 * @property string $competencies
 * @property string $suggestions
 * @property string $useful_things_or_practices
 * @property string $values_used
 * @property string $how_then
 */
class Accounts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_accounts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('last_name, first_name, middle_name, civil_status, gender, birth_date, perm_add, email_add, course', 'required'),
			array('birth_date, contact_num, grad_year', 'numerical', 'integerOnly'=>true),
			array('last_name, first_name, middle_name, civil_status, gender, perm_add, email_add, course, major, employed_or_not, emp_status, occupation, workplace_name, workplace_addr, job_rel_course, reasons_not_emp, not_rel_course, was_curr_rel_to_course, competencies, suggestions, useful_things_or_practices, values_used, how_then', 'length', 'max'=>255),
			//array('email_add')
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('student_num, last_name, first_name, middle_name, course, major', 'safe', 'on'=>'search'),
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
			'student_num' => '1. Student Number',
			'last_name' => '2. Last Name',
			'first_name' => '3. First Name',
			'middle_name' => '4. Middle Name',
			'civil_status' => '5. Civil Status',
			'gender' => '6. Gender',
			'birth_date' => '7. Birth Date (mmddyyyy)',
			'perm_add' => '8. Permanent Address',
			'email_add' => '9. Email Address',
			'contact_num' => '10. Contact Number',
			'grad_year' => '11. Year of Graduation',
			'course' => '12. Course',
			'major' => '13. Major',
			'employed_or_not' => '14. Are you employed or not?, If not, proceed to No. 20',
			'emp_status' => '15. Employment Status (Regular, Contractual, Self-employed)',
			'occupation' => '16. Occupation',
			'workplace_name' => '17. Name of your workplace',
			'workplace_addr' => '18. Workplace Address',
			'job_rel_course' => '19. Is your job related to your course?',
			'reasons_not_emp' => '20. Please state the reason/s of your unemployment',
			'not_rel_course' => '21. Was your first job not related to your course?',
			'was_curr_rel_to_course' => '22. Was your curriculum relevant to your job?',
			'competencies' => '23. What competencies did you find useful?',
			'suggestions' => '24. Suggestions for improvement of the curriculum',
			'useful_things_or_practices' => 'Useful Things Or Practices',
			'values_used' => '25. What values have you learnt from your Alma Mater that you still practice now?',
			'how_then' => '26. In what way are they practiced?',
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

		$criteria->compare('student_num',$this->student_num);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('course',$this->course,true);
		$criteria->compare('major',$this->major,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Accounts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
