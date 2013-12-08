<?php

/**
 * This is the model class for table "vendedor".
 *
 * The followings are the available columns in table 'vendedor':
 * @property integer $id_vendedor
 * @property integer $id_estacion_servicio
 * @property integer $id_rol
 * @property string $nombre
 *
 * The followings are the available model relations:
 * @property Transaccion[] $transaccions
 * @property Usuario $idVendedor
 * @property Estacionservicio $idEstacionServicio
 */
class Vendedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vendedor the static model class
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
		return 'vendedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_vendedor, id_estacion_servicio, id_rol, nombre', 'required'),
			array('id_vendedor, id_estacion_servicio, id_rol', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_vendedor, id_estacion_servicio, id_rol, nombre', 'safe', 'on'=>'search'),
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
			'transaccions' => array(self::HAS_MANY, 'Transaccion', 'id_vendedor'),
			'idVendedor' => array(self::BELONGS_TO, 'Usuario', 'id_vendedor'),
			'idEstacionServicio' => array(self::BELONGS_TO, 'Estacionservicio', 'id_estacion_servicio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_vendedor' => 'Id Vendedor',
			'id_estacion_servicio' => 'Id Estacion Servicio',
			'id_rol' => 'Id Rol',
			'nombre' => 'Nombre vendedor',
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

		$criteria->compare('id_vendedor',$this->id_vendedor);
		$criteria->compare('id_estacion_servicio',$this->id_estacion_servicio);
		$criteria->compare('id_rol',$this->id_rol);
		$criteria->compare('nombre',$this->nombre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}