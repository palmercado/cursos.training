<?php
$this->breadcrumbs=array(
	Yii::t( 'courses', 'title' ),
);

$this->menu=array(
	array('label'=> Yii::t( 'courses', 'create' ), 'url'=>array('create'), 'class' => 'icon-plus' ),
	array('label'=> Yii::t( 'courses', 'manage' ), 'url'=>array('admin'), 'class'  => 'icon-wrench' ),
);
?>

<h2><?php echo Yii::t( 'courses', 'title' ) ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
