<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Courses', 'url'=>array('index')),
	array('label'=>'Manage Courses', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t( 'courses', 'create' ) ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>