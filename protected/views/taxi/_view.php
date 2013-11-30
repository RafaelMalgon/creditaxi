<?php
/* @var $this TaxiController */
/* @var $data Taxi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->placa), array('view', 'id'=>$data->placa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_flota')); ?>:</b>
	<?php echo CHtml::encode($data->id_flota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cupo')); ?>:</b>
	<?php echo CHtml::encode($data->cupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saldoCupo')); ?>:</b>
	<?php echo CHtml::encode($data->saldoCupo); ?>
	<br />


</div>