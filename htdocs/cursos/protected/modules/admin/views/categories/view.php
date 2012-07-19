<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=> Yii::t( 'categories', 'list' ), 'url'=>array('index'), 'class'  => 'icon-list'),
	array('label'=> Yii::t( 'categories', 'create' ), 'url'=>array('create'), 'class' => 'icon-plus'),
	array('label'=> Yii::t( 'categories', 'update' ), 'url'=>array('update', 'id'=>$model->id), 'class' => 'icon-edit'),
	array('label'=> Yii::t( 'categories', 'delete' ), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'class' => 'icon-minus'),
	array('label'=> Yii::t( 'categories', 'admin' ), 'url'=>array('admin'), 'class' => 'icon-wrench'),
);
?>
<h2><?php echo sprintf( Yii::t( 'categories', 'view' ), $model->name ) ?></h2>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th><?php echo CHtml::encode( $model->getAttributeLabel( 'id' ) ) ?></th>
            <th><?php echo CHtml::encode( $model->getAttributeLabel( 'name' ) ) ?></th>
            <th><?php echo CHtml::encode( $model->getAttributeLabel( 'description' ) ) ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo CHtml::encode( $model->id ) ?></td>
            <td><?php echo CHtml::encode( $model->name ) ?></td>
            <td><?php echo CHtml::encode( $model->description ) ?></td>
        </tr>
    </tbody>
</table>
