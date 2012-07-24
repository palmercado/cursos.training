<?php
$this->breadcrumbs=array(
	'Carry Out Date Course Instructors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CarryOutDateCourseInstructors', 'url'=>array('index')),
	array('label'=>'Create CarryOutDateCourseInstructors', 'url'=>array('create')),
	array('label'=>'View CarryOutDateCourseInstructors', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CarryOutDateCourseInstructors', 'url'=>array('admin')),
);
?>

<h1>Update CarryOutDateCourseInstructors <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>