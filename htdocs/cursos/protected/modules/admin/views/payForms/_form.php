<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pay-forms-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class='alert alert-info'><?php echo Yii::t( 'global', 'fields_required' ) ?></div>
	<div class='alert alert-error' style='display: <?php echo ( $model->hasErrors() ? 'block' : 'none' ) ?>;'><?php echo $form->errorSummary($model); ?></div>

	<div class="control-group <?php echo $model->hasErrors( 'name' ) ? 'error' : 'warning' ?>">
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50, 'placeholder' => Yii::t( 'payforms', 'name' ) ) ); ?>
	</div>

	<div class="control-group">
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255, 'placeholder' => Yii::t( 'payforms', 'description' ))); ?>
	</div>

	<div class="control-group">
		<?php echo $form->textField($model,'helpText',array('size'=>60,'maxlength'=>255, 'placeholder' => Yii::t( 'payforms', 'helpText' ))); ?>
	</div>

	<div class="control-group">
		<?php echo $form->textField($model,'filename',array('size'=>60,'maxlength'=>255, 'placeholder' => Yii::t( 'payforms', 'filename' ))); ?>
	</div>

	<div class="control-group">
		<?php echo $form->checkbox($model,'enabled'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t( 'payforms', 'create' ) : Yii::t( 'payforms', 'update' ), array( 'class' => 'btn btn-primary' )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->