<?php
/* @var $this TaxiController */
/* @var $model Taxi */

$this->breadcrumbs=array(
	'Taxis'=>array('index'),
	$model->placa,
);

$this->menu=array(
	//array('label'=>'List Taxi', 'url'=>array('index')),
	array('label'=>'Crear Taxi', 'url'=>array('create')),
	array('label'=>'Actualizar Taxi', 'url'=>array('update', 'id'=>$model->placa)),
	array('label'=>'Eliminar Taxi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->placa),'confirm'=>'¿Esta seguro que desea eliminar este elemento?')),
	array('label'=>'Gestionar Taxis', 'url'=>array('admin')),
);
?>

<h1>Taxi con placa: <?php echo $model->placa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'placa',
		'id_flota',
		'cupo',
		'saldoCupo',
	),
)); ?>
