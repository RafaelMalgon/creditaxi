<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->id_producto,
);

$this->menu=array(
	//array('label'=>'List Producto', 'url'=>array('index')),
	array('label'=>'Crear Producto', 'url'=>array('create')),
	array('label'=>'Actualizar Producto', 'url'=>array('update', 'id'=>$model->id_producto)),
	array('label'=>'Eliminar Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_producto),'confirm'=>'¿Esta seguro que desea eliminar este elemento?')),
	array('label'=>'Gestionar Productos', 'url'=>array('admin')),
);
?>

<h1>Vista del producto # <?php echo $model->id_producto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_producto',
		'id_estacion_servicio',
		'nombre',
		'tipo',
		'valor',
	),
)); ?>
