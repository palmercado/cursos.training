<?php
$this->breadcrumbs=array(
	'Pay Forms',
);

$this->menu=array(
	array('label'=>'Create PayForms', 'url'=>array('create')),
	array('label'=>'Manage PayForms', 'url'=>array('admin')),
);
?>

<h1>Pay Forms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
