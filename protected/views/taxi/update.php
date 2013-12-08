<?php
/* @var $this TaxiController */
/* @var $model Taxi */

$this->breadcrumbs=array(
	'Taxis'=>array('index'),
	$model->placa=>array('view','id'=>$model->placa),
	'Update',
);

$this->menu=array(
	array('label'=>'Gestionar Taxi', 'url'=>array('admin')),
	//array('label'=>'List Taxi', 'url'=>array('index')),
	array('label'=>'Crear Taxi', 'url'=>array('create')),
	array('label'=>'Ver Taxi', 'url'=>array('view', 'id'=>$model->placa)),
);
?>

<h1>Actualizar Taxi: <?php echo $model->placa; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>