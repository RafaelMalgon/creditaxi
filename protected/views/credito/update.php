<?php
/* @var $this CreditoController */
/* @var $model Credito */

$this->breadcrumbs=array(
	'Creditos'=>array('index'),
	$model->id_credito=>array('view','id'=>$model->id_credito),
	'Update',
);

$this->menu=array(
	array('label'=>'List Credito', 'url'=>array('index')),
	array('label'=>'Create Credito', 'url'=>array('create')),
	array('label'=>'View Credito', 'url'=>array('view', 'id'=>$model->id_credito)),
	array('label'=>'Manage Credito', 'url'=>array('admin')),
);
?>

<h1>Update Credito <?php echo $model->id_credito; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>