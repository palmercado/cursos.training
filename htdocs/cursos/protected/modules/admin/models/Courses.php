<?php

/**
 * This is the model class for table "{{courses}}".
 *
 * The followings are the available columns in table '{{courses}}':
 * @property string $id
 * @property string $category_id
 * @property integer $name
 * @property string $description
 * @property string $target
 * @property string $place_id
 * @property integer $enabled
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property CarryOutDateCourse[] $carryOutDateCourses
 * @property Places $place
 * @property Categories $category
 */
class Courses extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Courses the static model class
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
		return '{{courses}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, name, description, place_id, created_at', 'required'),
			array('enabled', 'numerical', 'integerOnly'=>true),
			array('category_id, place_id', 'length', 'max'=>11),
			array('created_at, updated_at', 'length', 'max'=>10),
			array('target', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, category_id, name, description, target, place_id, enabled, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'carryOutDateCourses' => array(self::HAS_MANY, 'CarryOutDateCourse', 'course_id'),
			'place' => array(self::BELONGS_TO, 'Places', 'place_id'),
			'category' => array(self::BELONGS_TO, 'Categories', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t( 'courses', 'id' ),
			'category_id' => Yii::t( 'courses', 'select_category' ),
			'name' => Yii::t( 'courses', 'name' ),
			'description' => Yii::t( 'courses', 'description' ),
			'target' => Yii::t( 'courses', 'target' ),
			'place_id' => Yii::t( 'courses', 'place' ),
			'enabled' => Yii::t( 'courses', 'enabled' ),
			'created_at' => '',
			'updated_at' => '',
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
		$criteria->compare('category_id',$this->category_id,true);
		$criteria->compare('name',$this->name);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('target',$this->target,true);
		$criteria->compare('place_id',$this->place_id,true);
		$criteria->compare('enabled',$this->enabled);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

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
        
        public function getCategories()
        {
            return CHtml::listData( self::model( 'categories' )->findAll(), 'id', 'name' );
        }
        
        public function getPlaces()
        {
            return CHtml::listData( self::model( 'places' )->findAll(), 'id', 'description');
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