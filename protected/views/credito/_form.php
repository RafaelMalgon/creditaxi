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

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cliente'); ?>
		<?php // echo $form->textField($model,'id_cliente'); ?>
                <?php echo CHtml::dropDownList('Credito[id_cliente]',$model->id_cliente,CHtml::listData(Cliente::model()->findAll(), "id_cliente", "id_cliente")); ?>
		<?php echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cupoAprobado'); ?>
		<?php echo $form->textField($model,'cupoAprobado'); ?>
		<?php echo $form->error($model,'cupoAprobado'); ?>
	</div>

		<?php //echo $form->labelEx($model,'fechaAprobacion'); ?>
		
        <div class="row">
                <?php echo $form->labelEx($model,'fechaAprobacion'); ?>
                <?php
                if ($model->fechaAprobacion!='') {
                $model->fechaAprobacion=date('d-m-Y',strtotime($model->fechaAprobacion));
                }
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'attribute'=>'fechaAprobacion',
                'value'=>$model->fechaAprobacion,
                'language' => 'es',
                'htmlOptions' => array('readonly'=>"readonly"),

                'options'=>array(
                'autoSize'=>true,
                'defaultDate'=>$model->fechaAprobacion,
                'dateFormat'=>'yy-mm-dd',
                'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
                'buttonImageOnly'=>true,
                'buttonText'=>'Fecha',
                'selectOtherMonths'=>true,
                'showAnim'=>'slide',
                'showButtonPanel'=>true,
                'showOn'=>'button',
                'showOtherMonths'=>true,
                'changeMonth' => 'true',
                'changeYear' => 'true',
                ),
                )); ?>
                <?php echo $form->error($model,'fechaAprobacion'); ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->