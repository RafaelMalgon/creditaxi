<?php
/* @var $this CreditoController */
/* @var $model Credito */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_credito'); ?>
		<?php echo $form->textField($model,'id_credito'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cupoAprobado'); ?>
		<?php echo $form->textField($model,'cupoAprobado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaAprobacion'); ?>
		<?php echo $form->textField($model,'fechaAprobacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->