<?php

/**
 * This is the model class for table "{{carryOutDate_course}}".
 *
 * The followings are the available columns in table '{{carryOutDate_course}}':
 * @property string $id
 * @property string $carryOutDateCourse_id
 * @property string $course_id
 * @property string $created_at
 *
 * The followings are the available model relations:
 * @property CarryOutDateCourseInstructors[] $carryOutDateCourseInstructors
 * @property CarryOutDateCoursePrices[] $carryOutDateCoursePrices
 * @property CarryOutDateCourseStudents[] $carryOutDateCourseStudents
 * @property CarryOutDateCourse $carryOutDateCourse
 * @property CarryOutDateCourse[] $carryOutDateCourses
 * @property Courses $course
 * @property PayFormsCourse[] $payFormsCourses
 * @property TagsCourse[] $tagsCourses
 */
class CarryOutDateCourse extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CarryOutDateCourse the static model class
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
		return '{{carryOutDate_course}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('carryOutDateCourse_id, course_id, created_at', 'required'),
			array('carryOutDateCourse_id, course_id', 'length', 'max'=>11),
			array('created_at', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, carryOutDateCourse_id, course_id, created_at', 'safe', 'on'=>'search'),
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
			'carryOutDateCourseInstructors' => array(self::HAS_MANY, 'CarryOutDateCourseInstructors', 'carryOutDateCourse_id'),
			'carryOutDateCoursePrices' => array(self::HAS_MANY, 'CarryOutDateCoursePrices', 'carryOutDateCourse_id'),
			'carryOutDateCourseStudents' => array(self::HAS_MANY, 'CarryOutDateCourseStudents', 'carryOutDateCourse_id'),
			'carryOutDateCourse' => array(self::BELONGS_TO, 'CarryOutDateCourse', 'carryOutDateCourse_id'),
			'carryOutDateCourses' => array(self::HAS_MANY, 'CarryOutDateCourse', 'carryOutDateCourse_id'),
			'course' => array(self::BELONGS_TO, 'Courses', 'course_id'),
			'payFormsCourses' => array(self::HAS_MANY, 'PayFormsCourse', 'carryOutDateCourse_id'),
			'tagsCourses' => array(self::HAS_MANY, 'TagsCourse', 'carryOutDateCourse_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'carryOutDateCourse_id' => 'Carry Out Date Course',
			'course_id' => 'Course',
			'created_at' => 'Created At',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('carryOutDateCourse_id',$this->carryOutDateCourse_id,true);
		$criteria->compare('course_id',$this->course_id,true);
		$criteria->compare('created_at',$this->created_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}