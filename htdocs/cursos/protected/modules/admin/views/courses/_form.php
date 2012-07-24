<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'courses-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class='alert alert-info'><?php echo Yii::t( 'global', 'fields_required' ) ?></div>

	<div class="alert alert-error" style="display: <?php echo $model->isDisplayErrors() ?>;"><?php echo $form->errorSummary($model); ?></div>

	<div class="control-group <?php echo $model->isError( 'category_id' ) ?>">
		<?php echo $form->dropDownList($model,'category_id', $model->getCategories(), array( 'style' => 'width: 568px;', 'prompt' => $model->getAttributeLabel( 'category_id' ) )); ?>
	</div>

	<div class="control-group <?php echo $model->isError( 'name' ) ?>">
		<?php echo $form->textField($model,'name', array( 'size' => 78, 'placeholder' => $model->getAttributeLabel( 'name' ) )); ?>
	</div>

	<div class="control-group <?php echo $model->isError( 'description' ) ?>">
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=> 76, 'placeholder' => $model->getAttributeLabel( 'description' ), 'class' => 'no-resize' )); ?>
	</div>

	<div class="control-group">
		<?php echo $form->textArea($model,'target',array('rows'=>6, 'cols'=>76, 'placeholder' => $model->getAttributeLabel( 'target' ), 'class'   => 'no-resize' )); ?>
	</div>

	<div class="control-group <?php echo $model->isError( 'place_id' ) ?>">
		<?php echo $form->dropDownList($model,'place_id', $model->getPlaces(), array('style' => 'width: 420px', 'prompt' => $model->getAttributeLabel( 'place_id' ) )); ?>
                &nbsp;<span><i class='icon-plus'></i><?php echo CHtml::link( Yii::t( 'courses', 'create_place' ), 'javascript:showDialogPlace(this);' ) ?></span>
	</div>
        
	<div class="control-group">
            <fieldset>
                <legend>Instructores</legend>
                <a href="javascript:showDialogInstructor(this);"><span class="icon-plus"></span><?php echo Yii::t( 'instructors', 'select_title' ) ?></a>
            </fieldset>
	</div>


	<div class="control-group">
		<?php echo $form->checkbox($model,'enabled'); ?>&nbsp;&nbsp;<?php echo $model->getAttributeLabel( 'enabled' ) ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t( 'courses', 'create' ) : Yii::t( 'courses', 'update' ), array( 'class' => 'btn btn-primary') ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->