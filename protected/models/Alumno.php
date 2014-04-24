<?php

/**
 * This is the model class for table "alumno".
 *
 * The followings are the available columns in table 'alumno':
 * @property string $al_rut
 * @property integer $ca_id
 * @property string $al_nombres
 * @property string $al_apellidos
 * @property string $al_correo
 * @property integer $al_telefono
 * @property string $al_direccion
 *
 * The followings are the available model relations:
 * @property PostulaPropuesta[] $postulaPropuestas
 * @property Carrera $ca
 * @property Practica[] $practicas
 */
class Alumno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('al_rut, ca_id', 'required'),
			array('ca_id, al_telefono', 'numerical', 'integerOnly'=>true),
			array('al_rut, al_nombres, al_apellidos, al_correo, al_direccion', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('al_rut, ca_id, al_nombres, al_apellidos, al_correo, al_telefono, al_direccion', 'safe', 'on'=>'search'),
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
			'postulaPropuestas' => array(self::HAS_MANY, 'PostulaPropuesta', 'al_rut'),
			'ca' => array(self::BELONGS_TO, 'Carrera', 'ca_id'),
			'practicas' => array(self::HAS_MANY, 'Practica', 'al_rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'al_rut' => 'RUT',
			'ca_id' => 'Carrera (codigo)',
			'al_nombres' => 'Nombres',
			'al_apellidos' => 'Apellidos',
			'al_correo' => 'Correo Electrónico',
			'al_telefono' => 'Teléfono',
			'al_direccion' => 'Direccion',
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

		$criteria->compare('al_rut',$this->al_rut,true);
		$criteria->compare('ca_id',$this->ca_id);
		$criteria->compare('al_nombres',$this->al_nombres,true);
		$criteria->compare('al_apellidos',$this->al_apellidos,true);
		$criteria->compare('al_correo',$this->al_correo,true);
		$criteria->compare('al_telefono',$this->al_telefono);
		$criteria->compare('al_direccion',$this->al_direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
