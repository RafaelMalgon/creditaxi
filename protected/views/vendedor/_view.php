<?php
/* @var $this VendedorController */
/* @var $data Vendedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vendedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_vendedor), array('view', 'id'=>$data->id_vendedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estacion_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->id_estacion_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rol')); ?>:</b>
	<?php echo CHtml::encode($data->id_rol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>