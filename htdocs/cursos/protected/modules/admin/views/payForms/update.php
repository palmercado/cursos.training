<?php
$this->breadcrumbs=array(
	'Pay Forms'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=> Yii::t('payforms','list'), 'url'=>array('index'), 'class' => 'icon-list'),
	array('label'=> Yii::t('payforms','create'), 'url'=>array('create'), 'class' => 'icon-plus'),
	array('label'=> Yii::t('payforms','view_individual'), 'url'=>array('view', 'id'=>$model->id), 'class' => 'icon-eye-open'),
	array('label'=> Yii::t('payforms','manage'), 'url'=>array('admin'), 'class' => 'icon-wrench'),
);
?>

<h1>Update PayForms <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>