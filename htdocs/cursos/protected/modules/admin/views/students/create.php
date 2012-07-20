<?php
$this->breadcrumbs=array(
	'Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=> Yii::t( 'members', 'list' ), 'url'=>array('index'), 'class' => 'icon-list' ),
	array('label'=> Yii::t( 'members', 'manage' ), 'url'=>array('admin'), 'class' => 'icon-wrench' ),
);
?>

<h2> <?php echo Yii::t( 'members', 'create' ) ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>