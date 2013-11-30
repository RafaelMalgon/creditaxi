<?php
/* @var $this FlotaController */
/* @var $model Flota */

$this->breadcrumbs=array(
	'Flotas'=>array('index'),
	$model->id_flota=>array('view','id'=>$model->id_flota),
	'Update',
);

$this->menu=array(
	array('label'=>'List Flota', 'url'=>array('index')),
	array('label'=>'Create Flota', 'url'=>array('create')),
	array('label'=>'View Flota', 'url'=>array('view', 'id'=>$model->id_flota)),
	array('label'=>'Manage Flota', 'url'=>array('admin')),
);
?>

<h1>Update Flota <?php echo $model->id_flota; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>