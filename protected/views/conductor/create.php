<?php
/* @var $this ConductorController */
/* @var $model Conductor */

$this->breadcrumbs=array(
	'Conductors'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Conductor', 'url'=>array('index')),
	array('label'=>'Gestionar Conductores', 'url'=>array('admin')),
);
?>

<h1>Crear Conductor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>