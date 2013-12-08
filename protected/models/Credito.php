<?php

/**
 * This is the model class for table "credito".
 *
 * The followings are the available columns in table 'credito':
 * @property integer $id_credito
 * @property integer $id_cliente
 * @property integer $cupoAprobado
 * @property string $fechaAprobacion
 *
 * The followings are the available model relations:
 * @property Cliente $idCliente
 */
class Credito extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Credito the static model class
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
		return 'credito';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cliente, cupoAprobado, fechaAprobacion', 'required'),
			array('id_cliente, cupoAprobado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_credito, id_cliente, cupoAprobado, fechaAprobacion', 'safe', 'on'=>'search'),
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
			'idCliente' => array(self::BELONGS_TO, 'Cliente', 'id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_credito' => 'Id credito',
			'id_cliente' => 'Cedula cliente',
			'cupoAprobado' => 'Cupo aprobado',
			'fechaAprobacion' => 'Fecha aprobacion',
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

		$criteria->compare('id_credito',$this->id_credito);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('cupoAprobado',$this->cupoAprobado);
		$criteria->compare('fechaAprobacion',$this->fechaAprobacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}