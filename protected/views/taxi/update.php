<?php
/* @var $this TaxiController */
/* @var $model Taxi */

$this->breadcrumbs=array(
	'Taxis'=>array('index'),
	$model->placa=>array('view','id'=>$model->placa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Taxi', 'url'=>array('index')),
	array('label'=>'Create Taxi', 'url'=>array('create')),
	array('label'=>'View Taxi', 'url'=>array('view', 'id'=>$model->placa)),
	array('label'=>'Manage Taxi', 'url'=>array('admin')),
);
?>

<h1>Update Taxi <?php echo $model->placa; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>