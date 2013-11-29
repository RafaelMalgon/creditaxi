<?php
/* @var $this EstacionservicioController */
/* @var $model Estacionservicio */

$this->breadcrumbs=array(
	'Estacionservicios'=>array('index'),
	$model->id_estacion_servicio,
);

$this->menu=array(
	array('label'=>'List Estacionservicio', 'url'=>array('index')),
	array('label'=>'Create Estacionservicio', 'url'=>array('create')),
	array('label'=>'Update Estacionservicio', 'url'=>array('update', 'id'=>$model->id_estacion_servicio)),
	array('label'=>'Delete Estacionservicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_estacion_servicio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estacionservicio', 'url'=>array('admin')),
);
?>

<h1>View Estacionservicio #<?php echo $model->id_estacion_servicio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_estacion_servicio',
		'nombre',
		'direccion',
	),
)); ?>
