<?php
$this->breadcrumbs=array(
	'Pay Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=> Yii::t( 'payforms', 'list' ), 'url'=>array('index'), 'class' => 'icon-list'),
	array('label'=> Yii::t( 'payforms', 'manage' ), 'url'=>array('admin'), 'class' => 'icon-wrench'),
);
?>

<h2><?php echo Yii::t( 'payforms', 'create' ) ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>