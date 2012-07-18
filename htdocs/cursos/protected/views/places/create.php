<?php
$this->breadcrumbs=array(
	'Places'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Places', 'url'=>array('index')),
	array('label'=>'Manage Places', 'url'=>array('admin')),
);
?>

<h1>Create Places</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>