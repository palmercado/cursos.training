<?php
$this->breadcrumbs=array(
	'Pay Forms'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PayForms', 'url'=>array('index')),
	array('label'=>'Create PayForms', 'url'=>array('create')),
	array('label'=>'Update PayForms', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PayForms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PayForms', 'url'=>array('admin')),
);
?>

<h1>View PayForms #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'helpText',
		'filename',
		'enabled',
	),
)); ?>
