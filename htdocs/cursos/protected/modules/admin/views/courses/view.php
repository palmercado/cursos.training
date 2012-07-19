<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=> Yii::t( 'courses', 'list' ), 'url'=>array('index'), 'class'  => 'icon-list'),
	array('label'=> Yii::t( 'courses', 'create' ), 'url'=>array('create'), 'class'  => 'icon-plus'),
	array('label'=> Yii::t( 'courses', 'update' ), 'url'=>array('update', 'id'=>$model->id), 'class'  => 'icon-edit'),
	array('label'=> Yii::t( 'courses', 'delete' ), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'class'  => 'icon-minus'),
	array('label'=> Yii::t( 'courses', 'manage' ), 'url'=>array('admin'), 'class'  => 'icon-wrench'),
);
?>

<h2><?php echo sprintf( Yii::t( 'courses', 'title_view' ), $model->name ) ?></h2>

<table class='table table-bordered'>
    <thead>
        <tr>
            <th><?php echo CHtml::encode( $model->getAttributeLabel( 'id' ) ) ?></th>
            <th><?php echo CHtml::encode( $model->getAttributeLabel( 'getCategory' ) ) ?></th>
            <th><?php echo CHtml::encode( $model->getAttributeLabel( 'name' ) ) ?></th>
            <th><?php echo CHtml::encode( $model->getAttributeLabel( 'description' ) ) ?></th>
            <th><?php echo CHtml::encode( $model->getAttributeLabel( 'target' ) ) ?></th>
            <th><?php echo CHtml::encode( $model->getAttributeLabel( 'getPlace' ) ) ?></th>
            <th><?php echo CHtml::encode( $model->getAttributeLabel( 'enabled' ) ) ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo CHtml::encode( $model->id ) ?></td>
            <td><?php echo CHtml::encode( $model->category->name ) ?></td>
            <td><?php echo CHtml::encode( $model->name ) ?></td>
            <td><?php echo CHtml::encode( $model->description ) ?></td>
            <td><?php echo CHtml::encode( $model->target ) ?></td>
            <td><?php echo CHtml::encode( $model->place->description ) ?></td>
            <td><?php echo CHtml::encode( $model->getEnabled() ) ?></td>
        </tr>
    </tbody>
</table>