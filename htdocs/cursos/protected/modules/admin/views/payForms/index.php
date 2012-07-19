<?php
$this->breadcrumbs=array(
	'Pay Forms',
);

$this->menu=array(
	array('label'=> Yii::t('payforms','create'), 'url'=>array('create')),
	array('label'=>Yii::t('payforms','manage'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t( 'payforms', 'title' ) ?></h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('id')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('name')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('description')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('helpText')); ?></th>
            <th><?php echo CHtml::encode($dataProvider->model->getAttributeLabel('filename')); ?></th>
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