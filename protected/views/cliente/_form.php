<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false, )); 
    if($a->isNewRecord==false) { $b= Usuario::model()->findByPk($a->id_cliente); }
    
    echo $form->errorSummary(array($a,$b)); ?>
        
	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>


	<div class="row">
		<?php echo $form->labelEx($a,'id_cliente'); ?>
		<?php echo $form->textField($a,'id_cliente'); ?>
		<?php echo $form->error($a,'id_cliente'); ?>
	</div>
	<div class="row">
		<?php // $b->idUsuario = $a->id_cliente ; ?>
		<?php  //echo $a->id_cliente ; ?>
		<?php echo $form->labelEx($b,'idUsuario'); ?>
		<?php echo $form->textField($b,'idUsuario'); ?>
		<?php // echo $form->textField($b,'idUsuario',array('value'=>Yii::app()->user->getUsername(),'disabled'=>'disabled')); ?>
		<?php  echo $form->error($b,'idUsuario'); ?>
	</div>

	<div  class="row">
                
		<?php // echo $form->labelEx($model,'id_rol'); ?>
		<?php // echo $form->textField($model,'id_rol'); ?>
		<?php // echo $form->error($model,'id_rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($a,'nombre'); ?>
		<?php echo $form->textField($a,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($a,'nombre'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($b,'clave'); ?>
		<?php echo $form->textField($b,'clave',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($b,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($a,'telefono'); ?>
		<?php echo $form->textField($a,'telefono',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($a,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($a,'correo'); ?>
		<?php echo $form->textField($a,'correo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($a,'correo'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($a,'Activo'); ?>
		<?php echo $form->textField($a,'Activo'); ?>
		<?php echo $form->error($a,'Activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($a->isNewRecord ? 'Crear' : 'Save'); ?>
	</div> <?php $this->endWidget(); ?>

</div><!-- form -->