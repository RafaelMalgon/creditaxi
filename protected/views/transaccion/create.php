<?php
/* @var $this TransaccionController */
/* @var $model Transaccion */

$this->breadcrumbs=array(
	'Transaccions'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Transaccion', 'url'=>array('index')),
	array('label'=>'Gestionar Transaccion', 'url'=>array('admin')),
);
?>

<h1>Crear Transaccion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>