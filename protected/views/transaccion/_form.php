<?php
/* @var $this TransaccionController */
/* @var $model Transaccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaccion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_vendedor'); ?>
		<?php // echo $form->textField($model,'id_vendedor'); ?>
                <?php echo CHtml::dropDownList('Transaccion[id_vendedor]',$model->id_vendedor,CHtml::listData(Vendedor::model()->findAll(), "id_vendedor", "nombre")); ?>
		<?php echo $form->error($model,'id_vendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_producto'); ?>
		<?php  echo $form->textField($model,'id_producto'); ?>
                <?php //echo CHtml::dropDownList('Producto[id_producto]',$model->id_producto,CHtml::listData(Producto::model()->findAll(), "id_producto", "nombre")); ?>
		<?php echo $form->error($model,'id_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php  echo $form->textField($model,'placa',array('size'=>6,'maxlength'=>6)); ?>
                <?php //echo CHtml::dropDownList('Taxi[placa]',$model->placa,CHtml::listData(Taxi::model()->findAll(), "placa", "placa")); ?>
		<?php echo $form->error($model,'placa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorTotal'); ?>
		<?php echo $form->textField($model,'valorTotal'); ?>
                <?php //echo CHtml::dropDownList('Transaccion[valorTotal]',$model->valorTotal,CHtml::listData(Transaccion::model()->findAll(), "valor", "valor")); ?>
		<?php echo $form->error($model,'valorTotal'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'fecha'); ?>
		<?php // echo $form->textField($model,'fecha'); ?>                
		<?php // echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->