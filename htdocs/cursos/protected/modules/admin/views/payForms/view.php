<?php
$this->breadcrumbs=array(
	'Pay Forms'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PayForms', 'url'=>array('index')),
	array('label'=> Yii::t( 'payforms', 'create' ), 'url'=>array('create')),
	array('label'=>'Update PayForms', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PayForms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=> Yii::t( 'payforms', 'manage' ), 'url'=>array('admin')),
);
?>

<h2><?php echo sprintf( Yii::t( 'payforms', 'view'), CHtml::encode( $model->name ) ) ?></h2>

<table class='table table-bordered'>
   <thead>
   		<tr>
   			<th><?php echo CHtml::encode( $model->getAttributeLabel( 'id' ) ) ?></th>
   			<th><?php echo CHtml::encode( $model->getAttributeLabel( 'name' ) ) ?></th>
   			<th><?php echo CHtml::encode( $model->getAttributeLabel( 'description' ) ) ?></th>
   			<th><?php echo CHtml::encode( $model->getAttributeLabel( 'helpText' ) ) ?></th>
   			<th><?php echo CHtml::encode( $model->getAttributeLabel( 'filename' ) ) ?></th>
   			<th><?php echo CHtml::encode( $model->getAttributeLabel( 'enabled' ) ) ?></th>
   		</tr>
   </thead>
   <tbody>
   		<tr>
   		     <td><?php echo CHtml::encode( $model->id ) ?></td>
   		     <td><?php echo CHtml::encode( $model->name ) ?></td>
   		     <td><?php echo CHtml::encode( $model->description ) ?></td>
   		     <td><?php echo CHtml::encode( $model->helpText ) ?></td>
   		     <td><?php echo CHtml::encode( $model->filename ) ?></td>
   		     <td><?php echo CHtml::encode( $model->enabled ) ?></td>
   		</tr>
   </tbody>
</table>
