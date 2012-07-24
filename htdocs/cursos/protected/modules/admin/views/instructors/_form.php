<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carry-out-date-course-instructors-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'carryOutDateCourse_id'); ?>
		<?php echo $form->textField($model,'carryOutDateCourse_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'carryOutDateCourse_id'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'member_id'); ?>
		<?php echo $form->textField($model,'member_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'member_id'); ?>
	</div>

	<div class="control-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->