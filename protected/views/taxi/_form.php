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

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'placa'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_flota'); ?>
		<?php // echo $form->textField($model,'id_flota'); ?>
                <?php //echo CHtml::dropDownList('Taxi[id_flota]',$model->id_flota,CHtml::listData(Flota::model()->findAll(), "id_flota", "id_flota")); ?>
		<?php //echo $form->error($model,'id_flota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cupo'); ?>
		<?php echo $form->textField($model,'cupo'); ?>
		<?php echo $form->error($model,'cupo'); ?>
	</div>
        
        <?php if(!$model->isNewRecord){ ?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'saldoCupo'); ?>
		<?php echo $form->textField($model,'saldoCupo'); ?>
		<?php echo $form->error($model,'saldoCupo'); ?>
	</div>
        
        <?php } ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->