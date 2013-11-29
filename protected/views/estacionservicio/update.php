<?php
/* @var $this EstacionservicioController */
/* @var $model Estacionservicio */

$this->breadcrumbs=array(
	'Estacionservicios'=>array('index'),
	$model->id_estacion_servicio=>array('view','id'=>$model->id_estacion_servicio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estacionservicio', 'url'=>array('index')),
	array('label'=>'Create Estacionservicio', 'url'=>array('create')),
	array('label'=>'View Estacionservicio', 'url'=>array('view', 'id'=>$model->id_estacion_servicio)),
	array('label'=>'Manage Estacionservicio', 'url'=>array('admin')),
);
?>

<h1>Update Estacionservicio <?php echo $model->id_estacion_servicio; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>