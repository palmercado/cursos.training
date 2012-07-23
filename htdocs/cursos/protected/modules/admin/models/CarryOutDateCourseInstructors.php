<?php

/**
 * This is the model class for table "{{carryOutDateCourse_instructors}}".
 *
 * The followings are the available columns in table '{{carryOutDateCourse_instructors}}':
 * @property string $id
 * @property string $carryOutDateCourse_id
 * @property string $member_id
 *
 * The followings are the available model relations:
 * @property CarryOutDateCourse $carryOutDateCourse
 * @property Members $member
 */
class CarryOutDateCourseInstructors extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CarryOutDateCourseInstructors the static model class
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
		return '{{carryOutDateCourse_instructors}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('carryOutDateCourse_id, member_id', 'required'),
			array('carryOutDateCourse_id, member_id', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, carryOutDateCourse_id, member_id', 'safe', 'on'=>'search'),
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
			'carryOutDateCourse' => array(self::BELONGS_TO, 'CarryOutDateCourse', 'carryOutDateCourse_id'),
			'member' => array(self::BELONGS_TO, 'Members', 'member_id'),
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
			'member_id' => 'Member',
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
		$criteria->compare('member_id',$this->member_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}