<?php

/**
 * This is the model class for table "taxi".
 *
 * The followings are the available columns in table 'taxi':
 * @property string $placa
 * @property integer $id_flota
 * @property integer $cupo
 * @property integer $saldoCupo
 *
 * The followings are the available model relations:
 * @property Conductor[] $conductors
 * @property Flota $idFlota
 * @property Transaccion[] $transaccions
 */
class Taxi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Taxi the static model class
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
		return 'taxi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('placa, id_flota', 'required'),
			array('id_flota, cupo, saldoCupo', 'numerical', 'integerOnly'=>true),
			array('placa', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('placa, id_flota, cupo, saldoCupo', 'safe', 'on'=>'search'),
                        array('cupo','validarCupo')
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
			'conductors' => array(self::HAS_MANY, 'Conductor', 'placa'),
			'idFlota' => array(self::BELONGS_TO, 'Flota', 'id_flota'),
			'transaccions' => array(self::HAS_MANY, 'Transaccion', 'placa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'placa' => 'Placa',
			'id_flota' => 'Id Flota',
			'cupo' => 'Cupo',
			'saldoCupo' => 'Saldo Cupo',
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

		$criteria->compare('placa',$this->placa,true);
		$criteria->compare('id_flota',$this->id_flota);
		$criteria->compare('cupo',$this->cupo);
		$criteria->compare('saldoCupo',$this->saldoCupo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function validarCupo($cupoAsignado) {
            $cupoTotal=10;     
            $cliente=Yii::app()->session['Usuario'];
            $resultado = Yii::app()->db->createCommand(
                                "SELECT cupoAprobado  FROM credito WHERE id_cliente="
                    .$cliente->id_cliente
                    )->queryColumn();
            
            //var_dump($cliente->id_cliente);
            var_dump($resultado);
            //die();
            if ($this->cupo < $resultado) {
                $this->addError($cupoAsignado,'sobrepasa el valor del cupo de su credito.');                
            }
            
            
        }
}