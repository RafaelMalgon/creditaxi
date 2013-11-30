<?php
/* @var $this TaxiController */
/* @var $model Taxi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'taxi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'placa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_flota'); ?>
		<?php echo $form->textField($model,'id_flota'); ?>
		<?php echo $form->error($model,'id_flota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cupo'); ?>
		<?php echo $form->textField($model,'cupo'); ?>
		<?php echo $form->error($model,'cupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saldoCupo'); ?>
		<?php echo $form->textField($model,'saldoCupo'); ?>
		<?php echo $form->error($model,'saldoCupo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->