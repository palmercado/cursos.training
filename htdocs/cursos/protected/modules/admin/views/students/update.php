<?php
$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=> Yii::t( 'members', 'list' ), 'url'=>array('index'), 'class' => 'icon-list' ),
	array('label'=> Yii::t( 'members', 'create' ), 'url'=>array('create'), 'class' => 'icon-plus' ),
	array('label'=> Yii::t( 'members', 'view' ), 'url'=>array('view', 'id'=>$model->id), 'class' => 'icon-eye-open' ),
	array('label'=> Yii::t( 'members', 'manage' ), 'url'=>array('admin'), 'class' => 'icon-wrench' ),
);
?>

<h1>Update Members <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>