<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'courses-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class='alert alert-info'><?php echo Yii::t( 'global', 'fields_required' ) ?></div>

	<div class="alert alert-error" style="display: <?php echo $model->isDisplayErrors() ?>;"><?php echo $form->errorSummary($model); ?></div>

	<div class="control-group <?php echo $model->isError( 'category_id' ) ?>">
		<?php echo $form->textField($model,'category_id',array('size'=>11,'maxlength'=>11, 'placeholder' => $model->getAttributeLabel( 'category_id' ) )); ?>
	</div>

	<div class="control-group <?php echo $model->isError( 'name' ) ?>">
		<?php echo $form->textField($model,'name', array( 'placeholder' => $model->getAttributeLabel( 'name' ) )); ?>
	</div>

	<div class="control-group <?php echo $model->isError( 'description' ) ?>">
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50, 'placeholder' => $model->getAttributeLabel( 'description' ), 'class' => 'no-resize' )); ?>
	</div>

	<div class="control-group">
		<?php echo $form->textArea($model,'target',array('rows'=>6, 'cols'=>50, 'placeholder' => $model->getAttributeLabel( 'target' ), 'class'   => 'no-resize' )); ?>
	</div>

	<div class="control-group <?php echo $model->isError( 'place_id' ) ?>">
		<?php echo $form->textField($model,'place_id',array('size'=>11,'maxlength'=>11, 'placeholder' => $model->getAttributeLabel( 'place_id' ) )); ?>
	</div>

	<div class="control-group">
		<?php echo $form->checkbox($model,'enabled'); ?>&nbsp;&nbsp;<?php echo $model->getAttributeLabel( 'enabled' ) ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t( 'courses', 'create' ) : Yii::t( 'courses', 'update' ), array( 'class' => 'btn btn-primary') ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->