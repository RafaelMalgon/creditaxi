<?php
/* @var $this CreditoController */
/* @var $data Credito */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_credito')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_credito), array('view', 'id'=>$data->id_credito)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cupoAprobado')); ?>:</b>
	<?php echo CHtml::encode($data->cupoAprobado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAprobacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAprobacion); ?>
	<br />


</div>