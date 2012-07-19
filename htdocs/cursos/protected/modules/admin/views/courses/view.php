<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=> Yii::t( 'courses', 'list' ), 'url'=>array('index'), 'class'  => 'icon-list'),
	array('label'=> Yii::t( 'courses', 'create' ), 'url'=>array('create'), 'class'  => 'icon-plus'),
	array('label'=> Yii::t( 'courses', 'update' ), 'url'=>array('update', 'id'=>$model->id), 'class'  => 'icon-edit'),
	array('label'=> Yii::t( 'courses', 'delete' ), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'class'  => 'icon-minus'),
	array('label'=> Yii::t( 'courses', 'manage' ), 'url'=>array('admin'), 'class'  => 'icon-wrench'),
);
?>

<h2><?php echo sprintf( Yii::t( 'courses', 'title_view' ), $model->name ) ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_id',
		'name',
		'description',
		'target',
		'place_id',
		'enabled',
		'created_at',
		'updated_at',
	),
)); ?>
