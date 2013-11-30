<?php
/* @var $this PermisosController */
/* @var $data Permisos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_permiso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_permiso), array('view', 'id'=>$data->id_permiso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rol')); ?>:</b>
	<?php echo CHtml::encode($data->id_rol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accion')); ?>:</b>
	<?php echo CHtml::encode($data->accion); ?>
	<br />


</div>