<?php
/* @var $this TaxiController */
/* @var $model Taxi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_flota'); ?>
		<?php echo $form->textField($model,'id_flota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cupo'); ?>
		<?php echo $form->textField($model,'cupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saldoCupo'); ?>
		<?php echo $form->textField($model,'saldoCupo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->