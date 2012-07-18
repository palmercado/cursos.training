<?php

/**
 * <pre>
 * Codebit.org
 * IP.Board v3.3.0
 * @description
 * Last Updated: $Date: 18-jul-2012 -006  $
 * </pre>
 * @filename            column2.php
 * @author 		$Author: juliobarreraa@gmail.com $
 * @package		training
 * @subpackage	        
 * @link		http://www.codebit.org
 * @since		18-jul-2012
 * @timestamp           13:21:59
 * @version		$Rev:  $
 *
 */

$this->beginContent('//layouts/main'); ?>
	<div id="content">
            <div class='span6'>
		<?php echo $content; ?>
            </div>
            <div class='span4'>
                <?php
                        $this->beginWidget('zii.widgets.CPortlet', array(
                                'title'=> Yii::t( 'categories', 'operations' ),
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
