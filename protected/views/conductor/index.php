<?php
/* @var $this ConductorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conductors',
);

$this->menu=array(
	array('label'=>'Create Conductor', 'url'=>array('create')),
	array('label'=>'Manage Conductor', 'url'=>array('admin')),
);
?>

<h1>Conductors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
