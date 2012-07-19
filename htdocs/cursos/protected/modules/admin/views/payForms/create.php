<?php
$this->breadcrumbs=array(
	'Pay Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PayForms', 'url'=>array('index')),
	array('label'=>'Manage PayForms', 'url'=>array('admin')),
);
?>

<h1>Create PayForms</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>