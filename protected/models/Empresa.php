<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property string $emp_razon
 * @property string $emp_nombre
 * @property string $emp_rubro
 * @property string $emp_direccion
 * @property string $emp_ciudad
 * @property integer $emp_telefono
 *
 * The followings are the available model relations:
 * @property Supervisor[] $supervisors
 */
class Empresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('emp_razon', 'required'),
			array('emp_telefono', 'numerical', 'integerOnly'=>true),
			array('emp_razon, emp_nombre, emp_rubro, emp_direccion, emp_ciudad', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('emp_razon, emp_nombre, emp_rubro, emp_direccion, emp_ciudad, emp_telefono', 'safe', 'on'=>'search'),
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
			'supervisors' => array(self::MANY_MANY, 'Supervisor', 'trabaja(emp_razon, su_rut)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'emp_razon' => 'Razon',
			'emp_nombre' => 'Nombre Empresa',
			'emp_rubro' => 'Rubro',
			'emp_direccion' => 'Direccion',
			'emp_ciudad' => 'Ciudad',
			'emp_telefono' => 'Telefono',
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

		$criteria->compare('emp_razon',$this->emp_razon,true);
		$criteria->compare('emp_nombre',$this->emp_nombre,true);
		$criteria->compare('emp_rubro',$this->emp_rubro,true);
		$criteria->compare('emp_direccion',$this->emp_direccion,true);
		$criteria->compare('emp_ciudad',$this->emp_ciudad,true);
		$criteria->compare('emp_telefono',$this->emp_telefono);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
