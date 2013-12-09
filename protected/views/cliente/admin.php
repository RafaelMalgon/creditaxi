<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs = array(
    'Clientes' => array('index'),
    'Manage',
);

$this->menu = array(
    //array('label'=>'List Cliente', 'url'=>array('index')),
    array('label' => 'Crear Cliente', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestion de Clientes</h1>


<?php echo CHtml::link('Buesqueda avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'cliente-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_cliente',
        //'id_rol',
        'nombre',
        'telefono',
        'correo',
        array(
            'name' => 'creditos.cupoAprobado',
            'type' => 'raw',
            'filter' => false,
            'value' => array($this, 'gridDataColumn'),
        ), array(
            'name' => 'Activo',
            'type' => 'raw',
            'filter' => false,
            'value' => '$data->Activo?"Si":"No"',
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{enable}{disable}',
            'buttons' => array(
                'enable' => array(
                    'label' => 'Activar',
                    'url' => 'Yii::app()->createUrl("cliente/enable", array("id"=>$data->id_cliente))',
                    'visible' => '!$data->Activo',
                ),
                'disable' => array(
                    'label' => 'Desactivar',
                    'url' => 'Yii::app()->createUrl("cliente/disable", array("id"=>$data->id_cliente))',
                    'visible' => '$data->Activo',
                ),
            ),
        ),
    ),
));
?>
