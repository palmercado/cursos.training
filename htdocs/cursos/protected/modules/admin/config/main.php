<?php

/**
 * <pre>
 * Codebit.org
 * IP.Board v3.3.0
 * @description
 * Last Updated: $Date: 19-jul-2012 -006  $
 * </pre>
 * @filename            config.php
 * @author 		$Author: juliobarreraa@gmail.com $
 * @package		PRI
 * @subpackage	        
 * @link		http://www.codebit.org
 * @since		19-jul-2012
 * @timestamp           15:08:36
 * @version		$Rev:  $
 *
 */

$module_name = basename(dirname(dirname(__FILE__)));
$default_controller = 'default';

return array(
    'import' => array(
        'application.modules.' . $module_name . '.models.*',
    ),

    'modules' => array(
        $module_name => array(
            'defaultController' => $default_controller,
        ),
    ),

    'components' => array(
        'urlManager' => array(
            'rules' => array(
                $module_name . '/<action:\w+>/<id:\d+>' => $module_name . '/' . $default_controller . '/<action>',
            ),
        ),
        'user'      => array(
            'loginUrl'=>array( 'admin/default/login' ),
        ),
    ),
);


?>
