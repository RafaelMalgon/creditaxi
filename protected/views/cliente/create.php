<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Gestionar Clientes', 'url'=>array('admin')),
);
?>

<h1>Create Cliente</h1>

<?php echo $this->renderPartial('_form', array('a'=>$a , 'b'=>$b)); ?>