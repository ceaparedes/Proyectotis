<?php

/**
 * This is the model class for table "postula_propuesta".
 *
 * The followings are the available columns in table 'postula_propuesta':
 * @property integer $so_id
 * @property integer $as_id
 * @property integer $pr_id
 * @property string $al_rut
 * @property string $so_titulo
 * @property string $so_descripcion
 * @property string $so_tipo
 *
 * The followings are the available model relations:
 * @property Propuesta $pr
 * @property Asignatura $as
 * @property Alumno $alRut
 */
class PostulaPropuesta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'postula_propuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('so_id, as_id, al_rut', 'required'),
			array('so_id, as_id, pr_id', 'numerical', 'integerOnly'=>true),
			array('al_rut, so_titulo, so_descripcion, so_tipo', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('so_id, as_id, pr_id, al_rut, so_titulo, so_descripcion, so_tipo', 'safe', 'on'=>'search'),
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
			'pr' => array(self::BELONGS_TO, 'Propuesta', 'pr_id'),
			'as' => array(self::BELONGS_TO, 'Asignatura', 'as_id'),
			'alRut' => array(self::BELONGS_TO, 'Alumno', 'al_rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'so_id' => 'Codigo Propuesta',
			'as_id' => 'Coodigo Asignatura',
			'pr_id' => 'Practica (codigo)',
			'al_rut' => 'RUT',
			'so_titulo' => 'Titulo',
			'so_descripcion' => 'Descripcion',
			'so_tipo' => 'Tipo',
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

		$criteria->compare('so_id',$this->so_id);
		$criteria->compare('as_id',$this->as_id);
		$criteria->compare('pr_id',$this->pr_id);
		$criteria->compare('al_rut',$this->al_rut,true);
		$criteria->compare('so_titulo',$this->so_titulo,true);
		$criteria->compare('so_descripcion',$this->so_descripcion,true);
		$criteria->compare('so_tipo',$this->so_tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PostulaPropuesta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
