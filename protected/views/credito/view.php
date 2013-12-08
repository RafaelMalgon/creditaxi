<?php
/* @var $this CreditoController */
/* @var $model Credito */

$this->breadcrumbs=array(
	'Creditos'=>array('index'),
	$model->id_credito,
);

$this->menu=array(
	//array('label'=>'List Credito', 'url'=>array('index')),
	array('label'=>'Gestionar Credito', 'url'=>array('admin')),
	array('label'=>'Crear Credito', 'url'=>array('create')),
	array('label'=>'Actualizar Credito', 'url'=>array('update', 'id'=>$model->id_credito)),
	array('label'=>'Eliminar Credito', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_credito),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Vista Credito # <?php echo $model->id_credito; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_credito',
		'id_cliente',
		'cupoAprobado',
		'fechaAprobacion',
	),
)); ?>
