<?php

/**
 * This is the model class for table "tbl_accounts".
 *
 * The followings are the available columns in table 'tbl_accounts':
 * @property integer $id
 * @property string $picture
 * @property string $stud_num
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $civil_status
 * @property string $gender
 * @property string $birth_date
 * @property string $perm_add
 * @property string $email_add
 * @property integer $contact_num
 * @property integer $grad_year
 * @property string $college
 * @property string $dept_insti
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
 * @property string $was_curr_rel_to_job
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
			array('stud_num, last_name, first_name, middle_name, civil_status, gender, birth_date, perm_add, email_add, college, course', 'required'),
			array('contact_num, grad_year', 'numerical', 'integerOnly'=>true),
			array('last_name, first_name, middle_name, course, major, occupation, workplace_name', 'length', 'max'=>30),
			array('perm_add, email_add, workplace_addr', 'length', 'max'=>50),
			//array('college, dept_insti', 'in', 'range'=>range(2,7)),
			array('college, dept_insti', 'length', 'min'=>2, 'max'=>7),
			array('birth_date', 'length', 'min'=>8, 'max'=>8),
			array('contact_num', 'length', 'min'=>7, 'max'=>12),
			array('grad_year', 'length', 'min'=>4, 'max'=>4),
			array('civil_status, gender, employed_or_not, emp_status, job_rel_course, reasons_not_emp, not_rel_course, was_curr_rel_to_job, competencies, suggestions, useful_things_or_practices, values_used, how_then', 'length', 'max'=>175),
			array('picture', 'safe'),
			array('email_add', 'email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('stud_num, last_name, first_name, middle_name, grad_year, college, course, major', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'picture' => 'Upload your picture here!',
			'stud_num' => 'Student Number (Please Follow this pattern:(200x-xxxxx, 19xx-xxxxx))',
			'last_name' => 'Last Name',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'civil_status' => 'Civil Status',
			'gender' => 'Gender',
			'birth_date' => 'Birth Date',
			'perm_add' => 'Permanent Address',
			'email_add' => 'Email Address',
			'contact_num' => 'Contact Number',
			'grad_year' => 'Graduation Year',
			'college' => 'College',
			'dept_insti' => 'Department/ Institute',
			'course' => 'Course',
			'major' => 'Major',
			'employed_or_not' => 'Are you employed or not?',
			'emp_status' => 'Employment Status',
			'occupation' => 'Occupation',
			'workplace_name' => 'Workplace Name',
			'workplace_addr' => 'Workplace Address',
			'job_rel_course' => 'Is your job relevant to your course?',
			'reasons_not_emp' => 'Reason/s why you are currently not employed?',
			'not_rel_course' => 'Was your first job not relevant to your course?',
			'was_curr_rel_to_job' => 'Was your curriculum relevant to your job?',
			'competencies' => 'What competencies have you found useful to your job?',
			'suggestions' => 'Suggestions for improving the curriculum',
			'useful_things_or_practices' => 'What useful things or practices have you learnt from your curriculum that you still practice?',
			'values_used' => 'What values have you learnt from your Alma Mater that you still practice?',
			'how_then' => 'In what ways are they being practiced?',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('stud_num',$this->stud_num);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('civil_status',$this->civil_status,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('birth_date',$this->birth_date,true);
		$criteria->compare('perm_add',$this->perm_add,true);
		$criteria->compare('email_add',$this->email_add,true);
		$criteria->compare('contact_num',$this->contact_num);
		$criteria->compare('grad_year',$this->grad_year);
		$criteria->compare('college',$this->college,true);
		$criteria->compare('dept_insti',$this->dept_insti,true);
		$criteria->compare('course',$this->course,true);
		$criteria->compare('major',$this->major,true);
		$criteria->compare('employed_or_not',$this->employed_or_not,true);
		$criteria->compare('emp_status',$this->emp_status,true);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('workplace_name',$this->workplace_name,true);
		$criteria->compare('workplace_addr',$this->workplace_addr,true);
		$criteria->compare('job_rel_course',$this->job_rel_course,true);
		$criteria->compare('reasons_not_emp',$this->reasons_not_emp,true);
		$criteria->compare('not_rel_course',$this->not_rel_course,true);
		$criteria->compare('was_curr_rel_to_job',$this->was_curr_rel_to_job,true);
		$criteria->compare('competencies',$this->competencies,true);
		$criteria->compare('suggestions',$this->suggestions,true);
		$criteria->compare('useful_things_or_practices',$this->useful_things_or_practices,true);
		$criteria->compare('values_used',$this->values_used,true);
		$criteria->compare('how_then',$this->how_then,true);

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
