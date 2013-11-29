<?php
/* @var $this ConductorController */
/* @var $model Conductor */

$this->breadcrumbs=array(
	'Conductors'=>array('index'),
	$model->id_conductor=>array('view','id'=>$model->id_conductor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Conductor', 'url'=>array('index')),
	array('label'=>'Create Conductor', 'url'=>array('create')),
	array('label'=>'View Conductor', 'url'=>array('view', 'id'=>$model->id_conductor)),
	array('label'=>'Manage Conductor', 'url'=>array('admin')),
);
?>

<h1>Update Conductor <?php echo $model->id_conductor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>