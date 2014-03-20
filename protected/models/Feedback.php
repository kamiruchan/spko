<?php

/**
 * This is the model class for table "tbl_feedback".
 *
 * The followings are the available columns in table 'tbl_feedback':
 * @property string $studNum
 * @property integer $feedbackID
 * @property integer $firstJobRelToCourse
 * @property string $competencies
 * @property string $skillsRelToCourse
 * @property string $thingsFromCurr
 * @property string $suggestionsToCurr
 * @property string $valuesLearntAlmaMater
 * @property string $howPracticed
 *
 * The followings are the available model relations:
 * @property Account $studNum0
 */
class Feedback extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_feedback';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('studNum, firstJobRelToCourse, competencies, thingsFromCurr, valuesLearntAlmaMater', 'required'),
			array('firstJobRelToCourse', 'numerical', 'integerOnly'=>true),
			array('studNum', 'length', 'max'=>10),
			array('competencies, skillsRelToCourse, thingsFromCurr, suggestionsToCurr, valuesLearntAlmaMater, howPracticed', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('studNum, feedbackID, firstJobRelToCourse, competencies, skillsRelToCourse, thingsFromCurr, suggestionsToCurr, valuesLearntAlmaMater, howPracticed', 'safe', 'on'=>'search'),
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
			'studNum0' => array(self::BELONGS_TO, 'Account', 'studNum'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'studNum' => 'Stud Num',
			'feedbackID' => 'Feedback',
			'firstJobRelToCourse' => 'First Job Rel To Course',
			'competencies' => 'Competencies',
			'skillsRelToCourse' => 'Skills Rel To Course',
			'thingsFromCurr' => 'Things From Curr',
			'suggestionsToCurr' => 'Suggestions To Curr',
			'valuesLearntAlmaMater' => 'Values Learnt Alma Mater',
			'howPracticed' => 'How Practiced',
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

		$criteria->compare('studNum',$this->studNum,true);
		$criteria->compare('feedbackID',$this->feedbackID);
		$criteria->compare('firstJobRelToCourse',$this->firstJobRelToCourse);
		$criteria->compare('competencies',$this->competencies,true);
		$criteria->compare('skillsRelToCourse',$this->skillsRelToCourse,true);
		$criteria->compare('thingsFromCurr',$this->thingsFromCurr,true);
		$criteria->compare('suggestionsToCurr',$this->suggestionsToCurr,true);
		$criteria->compare('valuesLearntAlmaMater',$this->valuesLearntAlmaMater,true);
		$criteria->compare('howPracticed',$this->howPracticed,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Feedback the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
