<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estacion_servicio'); ?>
		<?php // echo $form->textField($model,'id_estacion_servicio'); ?>
                <?php echo CHtml::dropDownList('Producto[id_estacion_servicio]',$model->id_estacion_servicio,CHtml::listData(Estacionservicio::model()->findAll(), "id_estacion_servicio", "nombre")); ?>
		<?php echo $form->error($model,'id_estacion_servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

        <?php 
                    $listG["l"]="Lavada";
                    $listG["c"]="Combustible";
        ?>
	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php // echo $form->textField($model,'tipo',array('size'=>1,'maxlength'=>1)); ?>
                <?php echo CHtml::dropDownList('Producto[tipo]', $model->tipo, $listG); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php // echo $form->textField($model,'valor'); ?>
                <?php    $this->widget('CMaskedTextField', array(
                            'model' => $model,
                            'attribute' => 'valor',
                            'mask' => '99.999',
                            'htmlOptions' => array('size' => 5)
                            )); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->