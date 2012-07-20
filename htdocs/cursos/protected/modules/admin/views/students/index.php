<?php
$this->breadcrumbs=array(
	'Members',
);

$this->menu=array(
	array('label'=> Yii::t( 'members', 'create' ), 'url'=>array('create'), 'class' => 'icon-plus' ),
	array('label'=> Yii::t( 'members', 'manage' ), 'url'=>array('admin'), 'class' => 'icon-wrench' ),
);
?>

<h2><?php echo Yii::t( 'members', 'title_students' ) ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
