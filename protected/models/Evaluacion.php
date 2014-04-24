<?php

/**
 * This is the model class for table "evaluacion".
 *
 * The followings are the available columns in table 'evaluacion':
 * @property integer $ev_id
 * @property string $su_rut
 * @property integer $pra_id
 * @property integer $ev_asistencia
 * @property integer $ev_comportamiento
 * @property integer $ev_responsabilidad
 * @property integer $ev_capacidad
 * @property integer $ev_calidad
 * @property integer $ev_estructuracion
 * @property integer $ev_conocimientos
 * @property integer $ev_innovacion
 * @property integer $ev_producto
 * @property string $ev_fortalezas
 * @property string $ev_debilidades
 *
 * The followings are the available model relations:
 * @property Supervisor $suRut
 * @property Practica $pra
 * @property Practica[] $practicas
 */
class Evaluacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evaluacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ev_id, su_rut, pra_id', 'required'),
			array('ev_id, pra_id, ev_asistencia, ev_comportamiento, ev_responsabilidad, ev_capacidad, ev_calidad, ev_estructuracion, ev_conocimientos, ev_innovacion, ev_producto', 'numerical', 'integerOnly'=>true),
			array('su_rut, ev_fortalezas, ev_debilidades', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ev_id, su_rut, pra_id, ev_asistencia, ev_comportamiento, ev_responsabilidad, ev_capacidad, ev_calidad, ev_estructuracion, ev_conocimientos, ev_innovacion, ev_producto, ev_fortalezas, ev_debilidades', 'safe', 'on'=>'search'),
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
			'suRut' => array(self::BELONGS_TO, 'Supervisor', 'su_rut'),
			'pra' => array(self::BELONGS_TO, 'Practica', 'pra_id'),
			'practicas' => array(self::HAS_MANY, 'Practica', 'ev_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ev_id' => 'Codigo Evaluacion',
			'su_rut' => 'Rut Supervisor',
			'pra_id' => 'Practica (codigo)',
			'ev_asistencia' => 'Asistencia',
			'ev_comportamiento' => 'Comportamiento',
			'ev_responsabilidad' => 'Responsabilidad',
			'ev_capacidad' => 'Capacidad',
			'ev_calidad' => 'Calidad',
			'ev_estructuracion' => 'Estructuracion',
			'ev_conocimientos' => 'Conocimientos',
			'ev_innovacion' => 'Innovacion',
			'ev_producto' => 'Producto',
			'ev_fortalezas' => 'Fortalezas',
			'ev_debilidades' => 'Debilidades',
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

		$criteria->compare('ev_id',$this->ev_id);
		$criteria->compare('su_rut',$this->su_rut,true);
		$criteria->compare('pra_id',$this->pra_id);
		$criteria->compare('ev_asistencia',$this->ev_asistencia);
		$criteria->compare('ev_comportamiento',$this->ev_comportamiento);
		$criteria->compare('ev_responsabilidad',$this->ev_responsabilidad);
		$criteria->compare('ev_capacidad',$this->ev_capacidad);
		$criteria->compare('ev_calidad',$this->ev_calidad);
		$criteria->compare('ev_estructuracion',$this->ev_estructuracion);
		$criteria->compare('ev_conocimientos',$this->ev_conocimientos);
		$criteria->compare('ev_innovacion',$this->ev_innovacion);
		$criteria->compare('ev_producto',$this->ev_producto);
		$criteria->compare('ev_fortalezas',$this->ev_fortalezas,true);
		$criteria->compare('ev_debilidades',$this->ev_debilidades,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Evaluacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
