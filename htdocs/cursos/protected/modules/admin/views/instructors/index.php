<?php
$this->breadcrumbs=array(
	'Carry Out Date Course Instructors',
);

$this->menu=array(
	array('label'=>'Create CarryOutDateCourseInstructors', 'url'=>array('create')),
	array('label'=>'Manage CarryOutDateCourseInstructors', 'url'=>array('admin')),
);
?>

<h1>Carry Out Date Course Instructors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
