<?php
/* @var $this ConductorController */
/* @var $data Conductor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_conductor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_conductor), array('view', 'id'=>$data->id_conductor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::encode($data->placa); ?>
	<br />


</div>