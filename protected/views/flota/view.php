<?php
/* @var $this FlotaController */
/* @var $model Flota */

$this->breadcrumbs=array(
	'Flotas'=>array('index'),
	$model->id_flota,
);

$this->menu=array(
	//array('label'=>'List Flota', 'url'=>array('index')),
	array('label'=>'Crear Flota', 'url'=>array('create')),
	array('label'=>'Actualizar Flota', 'url'=>array('update', 'id'=>$model->id_flota)),
	array('label'=>'Eliminar Flota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_flota),'confirm'=>'¿Esta seguro que desea eliminar este elemento?')),
	array('label'=>'Gestionar Flota', 'url'=>array('admin')),
);
?>

<h1>Ver Flota # <?php echo $model->id_flota; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_flota',
		'id_cliente',
		'sobrecupoAgotado',
                'sobrecupoApobado',
	),
)); ?>
