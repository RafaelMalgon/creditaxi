<?php

/**
 * This is the model class for table "flota".
 *
 * The followings are the available columns in table 'flota':
 * @property integer $id_flota
 * @property integer $id_cliente
 * @property integer $sobrecupoAgotado
 * @property integer $sobrecupoAsignado
 *
 * The followings are the available model relations:
 * @property Cliente $idCliente
 * @property Taxi[] $taxis
 */
class Flota extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Flota the static model class
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
		return 'flota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cliente', 'required'),
			array('id_cliente, sobrecupoAgotado, sobrecupoAsignado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_flota, id_cliente, sobrecupoAgotado, sobrecupoAsignado', 'safe', 'on'=>'search'),
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
			'taxis' => array(self::HAS_MANY, 'Taxi', 'id_flota'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_flota' => 'Id Flota',
			'id_cliente' => 'Id Cliente',
			'sobrecupoAgotado' => 'Sobrecupo Agotado',
			'sobrecupoAsignado' => 'Sobrecupo Asignado',
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

		$criteria->compare('id_flota',$this->id_flota);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('sobrecupoAgotado',$this->sobrecupoAgotado);
		$criteria->compare('sobrecupoAsignado',$this->sobrecupoAsignado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function obtenerValorSobrecupo($id){
            $resultado = Yii::app()->db->createCommand(
                    "SELECT cr.cupoAprobado * 0.01 , cupoAprobado FROM credito cr , cliente cl WHERE cr.id_cliente="
                    . (int)$id)->queryColumn();
            
            if($resultado != NULL){
                return Conversion::conversionDouble(current($resultado));
            }else
                return 0;
        }
}