<?php
$this->breadcrumbs=array(
	'Pay Forms'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PayForms', 'url'=>array('index')),
	array('label'=>'Create PayForms', 'url'=>array('create')),
	array('label'=>'View PayForms', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PayForms', 'url'=>array('admin')),
);
?>

<h1>Update PayForms <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>