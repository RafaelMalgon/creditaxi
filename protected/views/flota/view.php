<?php
/* @var $this FlotaController */
/* @var $model Flota */

$this->breadcrumbs=array(
	'Flotas'=>array('index'),
	$model->id_flota,
);

$this->menu=array(
	array('label'=>'List Flota', 'url'=>array('index')),
	array('label'=>'Create Flota', 'url'=>array('create')),
	array('label'=>'Update Flota', 'url'=>array('update', 'id'=>$model->id_flota)),
	array('label'=>'Delete Flota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_flota),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Flota', 'url'=>array('admin')),
);
?>

<h1>View Flota #<?php echo $model->id_flota; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_flota',
		'id_cliente',
		'sobrecupoAgotado',
	),
)); ?>
