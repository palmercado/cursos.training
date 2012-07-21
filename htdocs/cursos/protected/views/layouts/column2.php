<?php $this->beginContent('//layouts/main'); ?>
	<div id="content">
            <div class='span6'>
		<?php echo $content; ?>
            </div>
            <div class='span5'>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
            </div>
	</div><!-- content -->
<?php $this->endContent(); ?>