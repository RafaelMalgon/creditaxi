<?php
/* @var $this TransaccionController */
/* @var $model Transaccion */

$this->breadcrumbs=array(
	'Transaccions'=>array('index'),
	$model->id_Transaccion,
);

$this->menu=array(
	//array('label'=>'List Transaccion', 'url'=>array('index')),
	array('label'=>'Gestionar Transacciones', 'url'=>array('admin')),
	array('label'=>'Crear Transaccion', 'url'=>array('create')),
);
?>

<h1>Ver transaccion # <?php echo $model->id_Transaccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Transaccion',
		'id_vendedor',
		'id_producto',
		'placa',
		'valorTotal',
		'fecha',
	),
)); ?>
