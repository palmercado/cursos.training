<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=> Yii::t( 'categories', 'list' ), 'url'=>array('index'), 'class' =>  'icon-list' ),
	array('label'=> Yii::t( 'categories', 'admin' ), 'url'=>array('admin'), 'class' => 'icon-wrench' ),
);
?>

<h2><?php echo Yii::t( 'categories', 'create_categorie_description' ) ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>