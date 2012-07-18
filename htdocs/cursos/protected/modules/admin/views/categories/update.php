<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categories', 'url'=>array('index')),
	array('label'=>'Create Categories', 'url'=>array('create')),
	array('label'=>'View Categories', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Categories', 'url'=>array('admin')),
);
?>

<h2><?php echo sprintf( Yii::t( 'categories', 'update_title' ), CHtml::encode( $model->name ) ) ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>