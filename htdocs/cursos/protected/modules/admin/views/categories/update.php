<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=> Yii::t( 'categories', 'list' ), 'url'=>array('index'), 'class' => 'icon-list'),
	array('label'=> Yii::t( 'categories', 'create' ), 'url'=>array('create'), 'class' => 'icon-plus'),
	array('label'=> Yii::t( 'categories', 'title' ), 'url'=>array('view', 'id'=>$model->id), 'class' => 'icon-eye-open'),
	array('label'=> Yii::t( 'categories', 'manage' ), 'url'=>array('admin'), 'class' => 'icon-wrench'),
);
?>

<h2><?php echo sprintf( Yii::t( 'categories', 'update_title' ), CHtml::encode( $model->name ) ) ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>