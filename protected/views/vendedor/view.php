<?php
/* @var $this VendedorController */
/* @var $model Vendedor */

$this->breadcrumbs=array(
	'Vendedors'=>array('index'),
	$model->id_vendedor,
);

$this->menu=array(
	array('label'=>'List Vendedor', 'url'=>array('index')),
	array('label'=>'Create Vendedor', 'url'=>array('create')),
	array('label'=>'Update Vendedor', 'url'=>array('update', 'id'=>$model->id_vendedor)),
	array('label'=>'Delete Vendedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_vendedor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vendedor', 'url'=>array('admin')),
);
?>

<h1>View Vendedor #<?php echo $model->id_vendedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_vendedor',
		'id_estacion_servicio',
		'id_rol',
		'nombre',
	),
)); ?>
