<?php

/**
 * This is the model class for table "encargado".
 *
 * The followings are the available columns in table 'encargado':
 * @property string $en_rut
 * @property string $en_nombres
 * @property string $en_apellidos
 * @property string $en_correo
 * @property integer $en_telefono
 *
 * The followings are the available model relations:
 * @property Practica[] $practicas
 */
class Encargado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'encargado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('en_rut', 'required'),
			array('en_telefono', 'numerical', 'integerOnly'=>true),
			array('en_rut, en_nombres, en_apellidos, en_correo', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('en_rut, en_nombres, en_apellidos, en_correo, en_telefono', 'safe', 'on'=>'search'),
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
			'practicas' => array(self::HAS_MANY, 'Practica', 'en_rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'en_rut' => 'Rut',
			'en_nombres' => 'Nombres',
			'en_apellidos' => 'Apellidos',
			'en_correo' => 'Correo Electrónico',
			'en_telefono' => 'Telefono',
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

		$criteria->compare('en_rut',$this->en_rut,true);
		$criteria->compare('en_nombres',$this->en_nombres,true);
		$criteria->compare('en_apellidos',$this->en_apellidos,true);
		$criteria->compare('en_correo',$this->en_correo,true);
		$criteria->compare('en_telefono',$this->en_telefono);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Encargado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
