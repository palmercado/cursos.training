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

<table class="table table-striped">
    <thead>
        <tr>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('id')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('getCategory')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('name')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('description')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('target')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('getPlace')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('enabled')); ?></th>
        </tr>
    </thead>
    <tbody>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
    </tbody>
</table>