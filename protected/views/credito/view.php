<?php
/* @var $this CreditoController */
/* @var $model Credito */

$this->breadcrumbs=array(
	'Creditos'=>array('index'),
	$model->id_credito,
);

$this->menu=array(
	array('label'=>'List Credito', 'url'=>array('index')),
	array('label'=>'Create Credito', 'url'=>array('create')),
	array('label'=>'Update Credito', 'url'=>array('update', 'id'=>$model->id_credito)),
	array('label'=>'Delete Credito', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_credito),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Credito', 'url'=>array('admin')),
);
?>

<h1>View Credito #<?php echo $model->id_credito; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_credito',
		'id_cliente',
		'cupoAprobado',
		'fechaAprobacion',
	),
)); ?>
