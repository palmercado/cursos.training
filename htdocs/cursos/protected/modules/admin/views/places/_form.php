<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'places-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'coordinates'); ?>
		<?php echo $form->textField($model,'coordinates',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'coordinates'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<div class="control-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->