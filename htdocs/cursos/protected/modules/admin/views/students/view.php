<?php
$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=> Yii::t( 'members', 'list' ), 'url'=>array('index'), 'class' => 'icon-list' ),
	array('label'=> Yii::t( 'members', 'create' ), 'url'=>array('create'), 'class' => 'icon-plus' ),
	array('label'=> Yii::t( 'members', 'edit' ), 'url'=>array('update', 'id'=>$model->id), 'class' => 'icon-edit' ),
	array('label'=> Yii::t( 'members', 'delete' ), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'class' => 'icon-minus' ),
	array('label'=> Yii::t( 'members', 'manage' ), 'url'=>array('admin'), 'class' => 'icon-wrench' ),
);
?>

<h1>View Members #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rol_id',
		'name',
		'lastname',
		'email',
		'phone',
		'extraInfo',
		'enabled',
		'updated_at',
		'created_at',
	),
)); ?>
