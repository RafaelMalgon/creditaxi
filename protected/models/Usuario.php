<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idUsuario
 * @property string $clave
 * @property integer $idRol
 *
 * The followings are the available model relations:
 * @property Administrador $administrador
 * @property Cliente $cliente
 * @property Rol $idRol0
 * @property Vendedor $vendedor
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, clave, idRol', 'required'),
			array('idUsuario, idRol', 'numerical', 'integerOnly'=>true),
			array('clave', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUsuario, clave, idRol', 'safe', 'on'=>'search'),
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
			'administrador' => array(self::HAS_ONE, 'Administrador', 'id_administrador'),
			'cliente' => array(self::HAS_ONE, 'Cliente', 'id_cliente'),
			'idRol0' => array(self::BELONGS_TO, 'Rol', 'idRol'),
			'vendedor' => array(self::HAS_ONE, 'Vendedor', 'id_vendedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'clave' => 'Clave',
			'idRol' => 'Id Rol',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('idRol',$this->idRol);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}