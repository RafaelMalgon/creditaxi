<?php
/* @var $this TransaccionController */
/* @var $data Transaccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Transaccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Transaccion), array('view', 'id'=>$data->id_Transaccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vendedor')); ?>:</b>
	<?php echo CHtml::encode($data->id_vendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::encode($data->id_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::encode($data->placa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorTotal')); ?>:</b>
	<?php echo CHtml::encode($data->valorTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>