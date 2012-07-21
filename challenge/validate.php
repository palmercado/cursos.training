<?php

/**
 * <pre>
 * Codebit.org
 * IP.Board v3.3.0
 * @description
 * Last Updated: $Date: 21-jul-2012 -006  $
 * </pre>
 * @filename            validate.php
 * @author 		$Author: juliobarreraa@gmail.com $
 * @package		PRI
 * @subpackage	        
 * @link		http://www.codebit.org
 * @since		21-jul-2012
 * @timestamp           4:02:33
 * @version		$Rev:  $
 *
 */

/**
 * Description of validate
 *
 * @author juliobarreraa@gmail.com
 */
class validate {
     private $user = null;
     private $id = 0;
     
     private $answers = array(
         'usuario1'    => array( 1 => 4, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario2'    => array( 1 => 3, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario3'    => array( 1 => 5, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario4'    => array( 1 => 6, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario5'    => array( 1 => 3, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario6'    => array( 1 => 5, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario7'    => array( 1 => 4, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario8'    => array( 1 => 3, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario9'    => array( 1 => 5, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario10'    => array( 1 => 6, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario11'    => array( 1 => 3, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario12'    => array( 1 => 5, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario13'    => array( 1 => 5, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario14'    => array( 1 => 6, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario15'    => array( 1 => 3, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost',  4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
         'usuario16'    => array( 1 => 5, 2 => 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', 3 => 'dXN1YXJpbzE@localhost', 4 => 'members', 5 => 'passwd', 6 => '18yegdbu21' ),
     );
     
     function __construct( $user, $id )
     {
         $this->user = $user;
         $this->id = intval( $id );
     }
     
     function isValide()
     {
         if( ! ( strtolower( $this->answers[ $this->user ][ $this->id ] ) == strtolower( $_POST[ 'answer' ] ) ) )
         {
             return false;
         }
         return true;
     }
}

?>
