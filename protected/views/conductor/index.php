<?php
/* @var $this ConductorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conductors',
);

$this->menu=array(
	array('label'=>'Crear Conductor', 'url'=>array('create')),
	array('label'=>'Gestionar Conductores', 'url'=>array('admin')),
);
?>

<h1>Conductores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
