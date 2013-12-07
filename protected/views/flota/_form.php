<?php
/* @var $this FlotaController */
/* @var $model Flota */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'flota-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cliente'); ?>
		<?php //echo $form->textField($model,'id_cliente'); ?>
                <?php echo CHtml::dropDownList('Flota[id_cliente]',$model->id_cliente,CHtml::listData(Cliente::model()->findAll(), "id_cliente", "id_cliente")); ?>
		<?php echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sobrecupoAgotado'); ?>
		<?php echo $form->textField($model,'sobrecupoAgotado'); ?>
		<?php echo $form->error($model,'sobrecupoAgotado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->