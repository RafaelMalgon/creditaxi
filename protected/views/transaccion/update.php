<?php
/* @var $this TransaccionController */
/* @var $model Transaccion */

$this->breadcrumbs=array(
	'Transaccions'=>array('index'),
	$model->id_Transaccion=>array('view','id'=>$model->id_Transaccion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transaccion', 'url'=>array('index')),
	array('label'=>'Create Transaccion', 'url'=>array('create')),
	array('label'=>'View Transaccion', 'url'=>array('view', 'id'=>$model->id_Transaccion)),
	array('label'=>'Manage Transaccion', 'url'=>array('admin')),
);
?>

<h1>Update Transaccion <?php echo $model->id_Transaccion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>