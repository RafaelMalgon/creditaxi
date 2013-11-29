<?php
/* @var $this VendedorController */
/* @var $model Vendedor */

$this->breadcrumbs=array(
	'Vendedors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vendedor', 'url'=>array('index')),
	array('label'=>'Manage Vendedor', 'url'=>array('admin')),
);
?>

<h1>Create Vendedor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>