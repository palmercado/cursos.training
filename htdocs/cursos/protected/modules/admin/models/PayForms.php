<?php

/**
 * This is the model class for table "{{payForms}}".
 *
 * The followings are the available columns in table '{{payForms}}':
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $helpText
 * @property string $filename
 * @property integer $enabled
 *
 * The followings are the available model relations:
 * @property PayFormsCourse[] $payFormsCourses
 */
class PayForms extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PayForms the static model class
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
		return '{{payForms}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('enabled', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('description, helpText, filename', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, helpText, filename, enabled', 'safe', 'on'=>'search'),
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
			'payFormsCourses' => array(self::HAS_MANY, 'PayFormsCourse', 'payForm_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t( 'payforms', 'id' ),
			'name' => Yii::t( 'payforms', 'name' ),
			'description' => Yii::t( 'payforms', 'description' ),
			'helpText' => Yii::t( 'payforms', 'helptext' ),
			'filename' => Yii::t( 'payforms', 'filename' ),
			'enabled' => Yii::t( 'payforms', 'enabled' ),
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('helpText',$this->helpText,true);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('enabled',$this->enabled);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getEnabled()
	{
		if( $this->enabled )
		{
			return Yii::t( 'global', 'yes' );
		}
		else
		{
			return Yii::t( 'global', 'no' );
		}
	}
}