<?php
/* @var $this CreditoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Creditos',
);

$this->menu=array(
	array('label'=>'Create Credito', 'url'=>array('create')),
	array('label'=>'Manage Credito', 'url'=>array('admin')),
);
?>

<h1>Creditos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
