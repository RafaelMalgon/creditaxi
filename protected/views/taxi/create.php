<?php
/* @var $this TaxiController */
/* @var $model Taxi */

$this->breadcrumbs=array(
	'Taxis'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Taxi', 'url'=>array('index')),
	array('label'=>'Gestionar Taxi', 'url'=>array('admin')),
);
?>

<h1>Crear Taxi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>