<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $id_cliente
 * @property integer $id_rol
 * @property string $nombre
 * @property string $telefono
 * @property string $correo
 * @property integer $Activo
 *
 * The followings are the available model relations:
 * @property Usuario $idCliente
 * @property Credito[] $creditos
 * @property Flota[] $flotas
 */
class Cliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cliente the static model class
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
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cliente, id_rol, nombre, telefono, correo, Activo', 'required'),
			array('id_cliente, id_rol, Activo', 'numerical', 'integerOnly'=>true),
			array('nombre, correo', 'length', 'max'=>50),
			array('telefono', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_cliente, id_rol, nombre, telefono, correo, Activo', 'safe', 'on'=>'search'),
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
			'idCliente' => array(self::BELONGS_TO, 'Usuario', 'id_cliente'),
			'creditos' => array(self::HAS_MANY, 'Credito', 'id_cliente'),
			'flotas' => array(self::HAS_MANY, 'Flota', 'id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cliente' => 'Cedula Cliente',
			'id_rol' => 'Id Rol',
			'nombre' => 'Nombre',
			'telefono' => 'Telefono',
			'correo' => 'Correo',
			'Activo' => 'Activo',
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

		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_rol',$this->id_rol);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('Activo',$this->Activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}