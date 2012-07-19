<?php
$this->breadcrumbs=array(
	'Categories',
);

$this->menu=array(
	array('label'=> Yii::t( 'categories', 'create' ), 'url'=>array('create'), 'class' => 'icon-plus'),
	array('label'=> Yii::t( 'categories', 'admin' ), 'url'=>array('admin'), 'class' => 'icon-wrench'),
);
?>

<h2><?php echo Yii::t( 'categories', 'title' ) ?></h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('id')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('name')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('description')); ?></th>
        </tr>
    </thead>
    <tbody>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
    </tbody>
</table>