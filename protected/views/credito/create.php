<?php
/* @var $this CreditoController */
/* @var $model Credito */

$this->breadcrumbs=array(
	'Creditos'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Credito', 'url'=>array('index')),
	array('label'=>'Gestionar Creditos', 'url'=>array('admin')),
);
?>

<h1>Crear Credito</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>