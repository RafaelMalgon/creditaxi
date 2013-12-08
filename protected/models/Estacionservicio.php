<?php

/**
 * This is the model class for table "estacionservicio".
 *
 * The followings are the available columns in table 'estacionservicio':
 * @property integer $id_estacion_servicio
 * @property string $nombre
 * @property string $direccion
 *
 * The followings are the available model relations:
 * @property Administrador[] $administradors
 * @property Producto[] $productos
 * @property Vendedor[] $vendedors
 */
class Estacionservicio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estacionservicio the static model class
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
		return 'estacionservicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, direccion', 'required'),
			array('nombre, direccion', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_estacion_servicio, nombre, direccion', 'safe', 'on'=>'search'),
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
			'administradors' => array(self::HAS_MANY, 'Administrador', 'id_estacion_servicio'),
			'productos' => array(self::HAS_MANY, 'Producto', 'id_estacion_servicio'),
			'vendedors' => array(self::HAS_MANY, 'Vendedor', 'id_estacion_servicio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_estacion_servicio' => 'Id Estacion Servicio',
			'nombre' => 'Nombre estacion',
			'direccion' => 'Direccion',
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

		$criteria->compare('id_estacion_servicio',$this->id_estacion_servicio);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}