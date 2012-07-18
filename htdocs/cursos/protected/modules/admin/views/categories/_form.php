<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categories-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="alert alert-info"><?php echo Yii::t( 'global', 'fields_required' ) ?></div>
	<div class='alert alert-error' style='display: <?php echo ( $model->hasErrors() ? 'block' : 'none' ) ?>;'><?php echo $form->errorSummary($model); ?></div>

	<div class="control-group <?php echo $model->hasErrors( 'name' ) ? 'error' : 'warning' ?>">
		<?php echo $form->textField($model,'name',array('size'=>62,'maxlength'=>50, 'placeholder' => Yii::t( 'categories', 'name' ) ) ); ?>
	</div>

	<div class="control-group <?php echo $model->hasErrors( 'description' ) ? 'error' : 'warning' ?>">
		<?php echo $form->textArea($model,'description',array('cols' => 60, 'rows' => 4, 'placeholder' => Yii::t( 'categories', 'description' ), 'class'  => 'no-resize' )); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t( 'categories', 'create' ) : Yii::t( 'categories', 'save' ), array( 'class' => 'btn btn-primary' ) ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->