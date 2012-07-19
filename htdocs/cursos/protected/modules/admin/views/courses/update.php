<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=> Yii::t( 'courses', 'list' ), 'url'=>array('index'), 'class' => 'icon-list'),
	array('label'=> Yii::t( 'courses', 'create' ), 'url'=>array('create'), 'class' => 'icon-plus'),
	array('label'=> Yii::t( 'courses', 'view' ), 'url'=>array('view', 'id'=>$model->id), 'class' => 'icon-eye-open'),
	array('label'=> Yii::t( 'courses', 'manage' ), 'url'=>array('admin'), 'class' => 'icon-wrench'),
);
?>

<h1>Update Courses <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>