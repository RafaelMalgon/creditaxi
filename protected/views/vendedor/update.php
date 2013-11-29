<?php
/* @var $this VendedorController */
/* @var $model Vendedor */

$this->breadcrumbs=array(
	'Vendedors'=>array('index'),
	$model->id_vendedor=>array('view','id'=>$model->id_vendedor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vendedor', 'url'=>array('index')),
	array('label'=>'Create Vendedor', 'url'=>array('create')),
	array('label'=>'View Vendedor', 'url'=>array('view', 'id'=>$model->id_vendedor)),
	array('label'=>'Manage Vendedor', 'url'=>array('admin')),
);
?>

<h1>Update Vendedor <?php echo $model->id_vendedor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>