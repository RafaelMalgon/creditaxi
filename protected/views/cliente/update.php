<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$a->id_cliente=>array('view','id'=>$a->id_cliente),
    
	'Update',
);

$this->menu=array(
	//array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Gestionar Clientes', 'url'=>array('admin')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Ver Cliente', 'url'=>array('view', 'id'=>$a->id_cliente)),
);
?>

<h1>Actualizar Cliente <?php echo $a->id_cliente; ?></h1>

<?php // echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php echo $this->renderPartial('_form', array('a'=>$a, 'b'=>$b)); ?>