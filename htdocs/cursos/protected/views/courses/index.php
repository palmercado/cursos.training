<?php
$this->breadcrumbs=array(
	'Courses',
);

$this->menu=array(
	array('label'=> Yii::t( 'courses', 'create' ), 'url'=>array('create')),
	array('label'=> Yii::t( 'courses', 'manage' ), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t( 'courses', 'title' ) ?></h2>

<table class='table table-striped'>
    <thead>
        <th><?php echo $dataProvider->model->getAttributeLabel( 'id' ) ?></th>
        <th><?php echo $dataProvider->model->getAttributeLabel( 'name' ) ?></th>
        <th><?php echo $dataProvider->model->getAttributeLabel( 'getCategory' ) ?></th>
        <th><?php echo $dataProvider->model->getAttributeLabel( 'description' ) ?></th>
        <th><?php echo $dataProvider->model->getAttributeLabel( 'target' ) ?></th>
        <th><?php echo $dataProvider->model->getAttributeLabel( 'enabled' ) ?></th>
    </thead>
    <tbody>
    <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_view',
    )); ?>
    </tbody>
</table>
