<?php
/* @var $this TaxiController */
/* @var $model Taxi */

$this->breadcrumbs=array(
	'Taxis'=>array('index'),
	$model->placa,
);

$this->menu=array(
	array('label'=>'List Taxi', 'url'=>array('index')),
	array('label'=>'Create Taxi', 'url'=>array('create')),
	array('label'=>'Update Taxi', 'url'=>array('update', 'id'=>$model->placa)),
	array('label'=>'Delete Taxi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->placa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Taxi', 'url'=>array('admin')),
);
?>

<h1>View Taxi #<?php echo $model->placa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'placa',
		'id_flota',
		'cupo',
		'saldoCupo',
	),
)); ?>
