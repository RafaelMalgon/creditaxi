<?php

/**
 * This is the model class for table "transaccion".
 *
 * The followings are the available columns in table 'transaccion':
 * @property integer $id_Transaccion
 * @property integer $id_vendedor
 * @property integer $id_producto
 * @property string $placa
 * @property integer $valorTotal
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Taxi $placa0
 * @property Vendedor $idVendedor
 * @property Producto $idProducto
 */
class Transaccion extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Transaccion the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'transaccion';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_vendedor, id_producto, placa, valorTotal', 'required'),
            array('id_vendedor, id_producto, valorTotal', 'numerical', 'integerOnly' => true),
            array('placa', 'length', 'max' => 6),
            array('fecha', 'safe'),
            array('valorTotal', 'validateValor'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id_Transaccion, id_vendedor, id_producto, placa, valorTotal, fecha', 'safe', 'on' => 'search'),
        );
    }

    public function validateValor($attribute) {
        $taxi = Taxi::model()->findByPk($this->placa);
        $saldoCupo = $taxi->saldoCupo === null ? 0 : $taxi->saldoCupo;
        $saldoCupo = $saldoCupo + $this->valorTotal;
        $error = false;
        if ($taxi->cupo === null) {
            $this->addError($attribute, 'No se ha asignado cupo al taxi seleccionado');
            $error = true;
        } else if ($saldoCupo > $taxi->cupo && !$taxi->getRelated('idFlota')->sobrecupoApobado) {
            $this->addError($attribute, 'El valor de la venta supera el cupo aprobado, porfavor solicite un sobrecupo');
            $error = true;
        } else if ($taxi->getRelated('idFlota')->sobrecupoApobado) {
            $flota = $taxi->getRelated('idFlota');
            if ($flota->sobrecupoAgotado + $this->valorTotal > $flota->obtenerValorSobrecupo()) {
                $this->addError($attribute, 'El valor de la venta supera el valor del sobrecupo');
                $error = true;
            }
        }
        if (!$this->hasErrors()) {
            if ($error == false) {
                if ($taxi->saldoCupo > 0) {
                    if ($taxi->saldoCupo >= $this->valorTotal) {
                        $taxi->saldoCupo = $taxi->saldoCupo - $this->valorTotal;
                        if (!$taxi->save()) {
                            $this->addError($attribute, 'Ha ocurrido un error al actualizar el sado, intente más tarde');
                        }
                    } else {
                        $flota->sobrecupoAgotado = $this->valorTotal - $taxi->saldoCupo;
                        $taxi->saldoCupo = 0;
                        $flota->save();
                        $taxi->save();
                    }
                } else {
                    $flota->sobrecupoAgotado = $flota->sobrecupoAgotado + $this->valorTotal;
                    $flota->save();
                }
            }
        }
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'placa0' => array(self::BELONGS_TO, 'Taxi', 'placa'),
            'idVendedor' => array(self::BELONGS_TO, 'Vendedor', 'id_vendedor'),
            'idProducto' => array(self::BELONGS_TO, 'Producto', 'id_producto'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_Transaccion' => 'Transaccion numero',
            'id_vendedor' => 'Vendedor',
            'id_producto' => 'Producto',
            'placa' => 'Placa',
            'valorTotal' => 'Valor',
            'fecha' => 'Fecha',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_Transaccion', $this->id_Transaccion);
        $criteria->compare('id_vendedor', $this->id_vendedor);
        $criteria->compare('id_producto', $this->id_producto);
        $criteria->compare('placa', $this->placa, true);
        $criteria->compare('valorTotal', $this->valorTotal);
        $criteria->compare('fecha', $this->fecha, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /* public function behaviors() {
      return array(
      'CTimestampBehavior' => array(
      'class' => 'zii.behaviors.CTimestampBehavior',
      'createAttribute' => 'fecha',
      //'updateAttribute' => 'modified_date',
      'setUpdateOnCreate' => true,
      ),
      );
      }
     * 
     */
}
