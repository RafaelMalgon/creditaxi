<?php
/* @var $this ConductorController */
/* @var $model Conductor */

$this->breadcrumbs=array(
	'Conductors'=>array('index'),
	$model->id_conductor,
);

$this->menu=array(
	//array('label'=>'List Conductor', 'url'=>array('index')),
	array('label'=>'Gestionar Conductor', 'url'=>array('admin')),
	array('label'=>'Crear Conductor', 'url'=>array('create')),
	array('label'=>'Actualizar Conductor', 'url'=>array('update', 'id'=>$model->id_conductor)),
	array('label'=>'Eliminar Conductor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_conductor),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Conductor cedula # <?php echo $model->id_conductor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_conductor',
		'placa',
	),
)); ?>
