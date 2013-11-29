<?php
/* @var $this CreditoController */
/* @var $model Credito */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'credito-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
		<?php echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cupoAprobado'); ?>
		<?php echo $form->textField($model,'cupoAprobado'); ?>
		<?php echo $form->error($model,'cupoAprobado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaAprobacion'); ?>
		<?php echo $form->textField($model,'fechaAprobacion'); ?>
		<?php echo $form->error($model,'fechaAprobacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->