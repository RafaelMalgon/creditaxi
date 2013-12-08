

<h1>Ver <?php echo $producto; ?></h1>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'producto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_producto',
		'idEstacionServicio.nombre',
		'nombre',
		'valor',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
