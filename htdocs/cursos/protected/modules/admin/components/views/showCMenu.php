<?php

/**
 * <pre>
 * Codebit.org
 * IP.Board v3.3.0
 * @description
 * Last Updated: $Date: 19-jul-2012 -006  $
 * </pre>
 * @filename            showCMenu.php
 * @author 		$Author: juliobarreraa@gmail.com $
 * @package		training
 * @subpackage	        
 * @link		http://www.codebit.org
 * @since		19-jul-2012
 * @timestamp           2:09:27
 * @version		$Rev:  $
 *
 */
?>
<div class="widget">

    <div class="widget-header">
        <i class="icon-bookmark"></i>
        <h3><?php echo Yii::t( 'global', 'operations' ) ?></h3>
    </div> <!-- /widget-header -->

    <div class="widget-content">

        <div class="shortcuts">
<?php foreach( $items as $item ):
    $item = $this->parseTemplate( $item );
?>
            <a class="shortcut" href="<?php echo CHtml::normalizeUrl( $item[ 'url' ] ) ?>">
                <i class="shortcut-icon <?php echo $item[ 'class' ] ?>"></i>
                <span class="shortcut-label"><?php echo CHtml::encode( $item[ 'label' ] ) ?></span>
            </a>
<?php
endforeach;
?>
        </div> <!-- /shortcuts -->	

    </div> <!-- /widget-content -->

</div>
