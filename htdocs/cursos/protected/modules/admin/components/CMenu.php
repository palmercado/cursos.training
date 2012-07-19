<?php

/**
 * <pre>
 * Codebit.org
 * IP.Board v3.3.0
 * @description
 * Last Updated: $Date: 19-jul-2012 -006  $
 * </pre>
 * @filename            CMenu.php
 * @author 		$Author: juliobarreraa@gmail.com $
 * @package		Training
 * @subpackage	        
 * @link		http://www.codebit.org
 * @since		19-jul-2012
 * @timestamp           2:07:46
 * @version		$Rev:  $
 *
 */
class CMenu extends CWidget
{
     public $items = array();
     public function init()
     {
     }
     
     public function run()
     {
         // this method is called by CController::endWidget()
         $this->render( 'showCMenu', array( 'items' => $this->items ) );
     }
     
     public function parseTemplate( array $item )
     {
         if( ! array_key_exists( 'class', $item ) )
         {
             $item[ 'class' ] = '';
         }
         
         return array(
             'label'    => $item[ 'label' ],
             'url'      => $item[ 'url' ],
             'class'    => $item[ 'class' ],
         );
     }
}
?>
