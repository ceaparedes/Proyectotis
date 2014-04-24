<?php

/**
 * This is the model class for table "practica".
 *
 * The followings are the available columns in table 'practica':
 * @property integer $pra_id
 * @property string $en_rut
 * @property integer $as_id
 * @property string $su_rut
 * @property string $al_rut
 * @property integer $ev_id
 * @property string $pra_inicio
 * @property string $pra_fin
 * @property string $pra_estado
 * @property string $pra_descripcion
 * @property integer $pra_nota
 * @property string $pra_informe
 * @property string $pra_horas
 *
 * The followings are the available model relations:
 * @property Bitacora[] $bitacoras
 * @property Evaluacion[] $evaluacions
 * @property Alumno $alRut
 * @property Encargado $enRut
 * @property Evaluacion $ev
 * @property Asignatura $as
 * @property Supervisor $suRut
 */
class Practica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'practica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pra_id, en_rut, as_id, su_rut, al_rut', 'required'),
			array('pra_id, as_id, ev_id, pra_nota', 'numerical', 'integerOnly'=>true),
			array('en_rut, su_rut, al_rut, pra_estado, pra_descripcion, pra_informe', 'length', 'max'=>1024),
			array('pra_inicio, pra_fin, pra_horas', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pra_id, en_rut, as_id, su_rut, al_rut, ev_id, pra_inicio, pra_fin, pra_estado, pra_descripcion, pra_nota, pra_informe, pra_horas', 'safe', 'on'=>'search'),
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
			'bitacoras' => array(self::HAS_MANY, 'Bitacora', 'pra_id'),
			'evaluacions' => array(self::HAS_MANY, 'Evaluacion', 'pra_id'),
			'alRut' => array(self::BELONGS_TO, 'Alumno', 'al_rut'),
			'enRut' => array(self::BELONGS_TO, 'Encargado', 'en_rut'),
			'ev' => array(self::BELONGS_TO, 'Evaluacion', 'ev_id'),
			'as' => array(self::BELONGS_TO, 'Asignatura', 'as_id'),
			'suRut' => array(self::BELONGS_TO, 'Supervisor', 'su_rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pra_id' => 'Practica (codigo)',
			'en_rut' => 'Rut Empresa',
			'as_id' => 'Asignatura (codigo)',
			'su_rut' => 'Rut Supervisor',
			'al_rut' => 'Rut Alumno',
			'ev_id' => 'Evaluación (codigo)',
			'pra_inicio' => 'Inicio Práctica',
			'pra_fin' => 'Fin Practica',
			'pra_estado' => 'Estado Practica',
			'pra_descripcion' => 'Descripcion',
			'pra_nota' => 'Nota',
			'pra_informe' => 'Informe',
			'pra_horas' => 'Horas',
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

		$criteria->compare('pra_id',$this->pra_id);
		$criteria->compare('en_rut',$this->en_rut,true);
		$criteria->compare('as_id',$this->as_id);
		$criteria->compare('su_rut',$this->su_rut,true);
		$criteria->compare('al_rut',$this->al_rut,true);
		$criteria->compare('ev_id',$this->ev_id);
		$criteria->compare('pra_inicio',$this->pra_inicio,true);
		$criteria->compare('pra_fin',$this->pra_fin,true);
		$criteria->compare('pra_estado',$this->pra_estado,true);
		$criteria->compare('pra_descripcion',$this->pra_descripcion,true);
		$criteria->compare('pra_nota',$this->pra_nota);
		$criteria->compare('pra_informe',$this->pra_informe,true);
		$criteria->compare('pra_horas',$this->pra_horas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Practica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
