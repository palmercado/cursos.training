<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	Yii::t( 'courses', 'create' ),
);

$this->menu=array(
	array('label'=> Yii::t( 'courses', 'list' ), 'url'=>array('index')),
	array('label'=> Yii::t( 'courses', 'manage' ), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t( 'courses', 'create' ) ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>