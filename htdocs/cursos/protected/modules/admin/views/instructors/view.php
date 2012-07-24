<?php
$this->breadcrumbs=array(
	'Carry Out Date Course Instructors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CarryOutDateCourseInstructors', 'url'=>array('index')),
	array('label'=>'Create CarryOutDateCourseInstructors', 'url'=>array('create')),
	array('label'=>'Update CarryOutDateCourseInstructors', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CarryOutDateCourseInstructors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CarryOutDateCourseInstructors', 'url'=>array('admin')),
);
?>

<h1>View CarryOutDateCourseInstructors #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'carryOutDateCourse_id',
		'member_id',
	),
)); ?>
