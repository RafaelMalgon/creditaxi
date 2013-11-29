<?php
/* @var $this EstacionservicioController */
/* @var $data Estacionservicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estacion_servicio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_estacion_servicio), array('view', 'id'=>$data->id_estacion_servicio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />


</div>