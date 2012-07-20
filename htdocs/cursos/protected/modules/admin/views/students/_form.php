<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'members-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="alert alert-info"><?php echo Yii::t( 'global', 'fields_required' ) ?></div>

	<div class='alert alert-error' style='display: <?php echo $model->isDisplayErrors() ?>;'><?php echo $form->errorSummary($model); ?></div>

	<div class="control-group <?php echo $model->isError( 'name' ) ?>">
		<?php echo $form->textField($model,'rol_id',array('size'=>79,'maxlength'=>11, 'placeholder' => $model->getAttributeLabel( 'rol_id' ) )); ?>
	</div>

	<div class="control-group <?php echo $model->isError( 'name' ) ?>">
		<?php echo $form->textField($model,'name',array('size'=>79,'maxlength'=>40, 'placeholder' => $model->getAttributeLabel( 'name' ) )); ?>
	</div>

	<div class="control-group <?php echo $model->isError( 'name' ) ?>">
		<?php echo $form->textField($model,'lastname',array('size'=>79,'maxlength'=>50, 'placeholder' => $model->getAttributeLabel( 'lastname' ) )); ?>
	</div>

	<div class="control-group <?php echo $model->isError( 'name' ) ?>">
		<?php echo $form->textField($model,'email',array('size'=>79,'maxlength'=>50, 'placeholder' => $model->getAttributeLabel( 'email' ) ) ); ?>
	</div>

	<div class="control-group">
		<?php echo $form->textField($model,'phone',array('size'=>79,'maxlength'=>15, 'placeholder' => $model->getAttributeLabel( 'phone' ) )); ?>
	</div>

	<div class="control-group">
		<?php echo $form->textArea($model,'extraInfo',array('rows'=>6, 'cols'=>76, 'class' => 'no-resize', 'placeholder' => $model->getAttributeLabel( 'extraInfo' ) )); ?>
	</div>

	<div class="control-group">
		<?php echo $form->checkbox($model,'enabled'); ?>&nbsp;&nbsp;<?php echo $model->getAttributeLabel( 'enabled' ) ?>
	</div>


	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t( 'members', 'create' ) : Yii::t( 'members', 'save' ), array( 'class' => 'btn btn-primary' ) ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->