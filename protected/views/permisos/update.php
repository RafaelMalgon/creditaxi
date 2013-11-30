<?php
/* @var $this PermisosController */
/* @var $model Permisos */

$this->breadcrumbs=array(
	'Permisoses'=>array('index'),
	$model->id_permiso=>array('view','id'=>$model->id_permiso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Permisos', 'url'=>array('index')),
	array('label'=>'Create Permisos', 'url'=>array('create')),
	array('label'=>'View Permisos', 'url'=>array('view', 'id'=>$model->id_permiso)),
	array('label'=>'Manage Permisos', 'url'=>array('admin')),
);
?>

<h1>Update Permisos <?php echo $model->id_permiso; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>