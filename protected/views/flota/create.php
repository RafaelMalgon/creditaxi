<?php
/* @var $this FlotaController */
/* @var $model Flota */

$this->breadcrumbs=array(
	'Flotas'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Flota', 'url'=>array('index')),
	array('label'=>'Gestionar Flota', 'url'=>array('admin')),
);
?>

<h1>Crear Flota</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>