<?php
/* @var $this FlotaController */
/* @var $data Flota */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_flota')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_flota), array('view', 'id'=>$data->id_flota)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sobrecupoAgotado')); ?>:</b>
	<?php echo CHtml::encode($data->sobrecupoAgotado); ?>
	<br />


</div>