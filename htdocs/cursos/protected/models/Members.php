<?php

/**
 * This is the model class for table "{{members}}".
 *
 * The followings are the available columns in table '{{members}}':
 * @property string $id
 * @property string $rol_id
 * @property string $name
 * @property string $lastname
 * @property string $email
 * @property string $phone
 * @property string $extraInfo
 * @property integer $enabled
 * @property string $updated_at
 * @property string $created_at
 *
 * The followings are the available model relations:
 * @property CarryOutDateCourseInstructors[] $carryOutDateCourseInstructors
 * @property CarryOutDateCourseStudents[] $carryOutDateCourseStudents
 */
class Members extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Members the static model class
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
		return '{{members}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rol_id, name, lastname, email, created_at', 'required'),
			array('enabled', 'numerical', 'integerOnly'=>true),
			array('rol_id', 'length', 'max'=>11),
			array('name', 'length', 'max'=>40),
			array('lastname, email', 'length', 'max'=>50),
			array('phone', 'length', 'max'=>15),
			array('updated_at, created_at', 'length', 'max'=>10),
			array('extraInfo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rol_id, name, lastname, email, phone, extraInfo, enabled, updated_at, created_at', 'safe', 'on'=>'search'),
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
			'carryOutDateCourseInstructors' => array(self::HAS_MANY, 'CarryOutDateCourseInstructors', 'member_id'),
			'carryOutDateCourseStudents' => array(self::HAS_MANY, 'CarryOutDateCourseStudents', 'member_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t( 'members', 'id' ),
			'rol_id' => Yii::t( 'members', 'select_rol' ),
			'name' => Yii::t( 'members', 'name' ),
			'lastname' => Yii::t( 'members', 'lastname' ),
			'email' => Yii::t( 'members', 'email' ),
			'phone' => Yii::t( 'members', 'phone' ),
			'extraInfo' => Yii::t( 'members', '' ),
			'enabled' => Yii::t( 'members', 'enabled' ),
			'updated_at' => '',
			'created_at' => '',
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
		$criteria->compare('rol_id',$this->rol_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('extraInfo',$this->extraInfo,true);
		$criteria->compare('enabled',$this->enabled);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('created_at',$this->created_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
    public function isDisplayErrors()
    {
        if( $this->hasErrors() )
        {
            return 'block';
        }
        else
        {
            return 'none';
        }
    }
    
    
    public function isError( $field )
    {
        if( $this->hasErrors( $field ) )
        {
            return 'error';
        }
        else
        {
            return 'warning';
        }
    }
    
        
    public function onBeforeValidate($event) {
        //Se crea la fecha con el timestamp actual, si es un nuevo registro, en caso contrario se actualiza el valor de $this->update_at
        if( ! $this->getIsNewRecord() )
        {
            $this->updated_at = time();
        }
        else
        {
            $this->created_at = time();
        }
        return parent::onBeforeValidate($event);
    }
}