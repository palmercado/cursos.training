<?php
$this->breadcrumbs=array(
	'Carry Out Date Course Instructors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CarryOutDateCourseInstructors', 'url'=>array('index')),
	array('label'=>'Manage CarryOutDateCourseInstructors', 'url'=>array('admin')),
);
?>

<h1>Create CarryOutDateCourseInstructors</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>