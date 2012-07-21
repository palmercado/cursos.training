<!-- 3 -->
<br /><br />
<fieldset>
    <legend>Coloca aquí el total de campos que tiene la consulta.</legend>
    <form method="post">
        Total: <input type="text" value="" name="answer" />
        <input type="submit"  value="Validar" />
    </form>
</fieldset>
<?php

/**
 * <pre>
 * Codebit.org
 * IP.Board v3.3.0
 * @description
 * Last Updated: $Date: 21-jul-2012 -006  $
 * </pre>
 * @filename            admin.php
 * @author 		$Author: juliobarreraa@gmail.com $
 * @package		trainer
 * @subpackage	        
 * @link		http://www.codebit.org
 * @since		21-jul-2012
 * @timestamp           3:30:30
 * @version		$Rev:  $
 *
 */
header ('Content-type: text/html; charset=utf-8');



if( is_array( $_POST ) && count( $_POST ) )
{
    $link = mysql_connect( 'localhost', 'dXN1YXJpbzE', 'dXN1YXJpbzE' );
    $db = mysql_select_db( 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', $link );
    
    require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/cursos/challenge/validate.php' );

    $validate = new Validate( 'usuario15', '2' );

    if( ! $validate->isValide() )
    {
        die ( "<h1 align='center'>No es correcto</h1>" );
    }
    else
        die( "<h1 align='center'>Es correcto juacker D:</h1><a href='http://localhost/cursos/htdocs/cursos/courses/view/1'>Regresar atrás</a>");
}

$juacked = array( 
    '¿No estarás intentando hackearme o si?',
    'Really?, yo se que puedes hacer algo mejor.',
    'No juegues conmigo',
    'Te denunciare',
    'Buahahahaha soy más poderoso que tu',
    'Comeré un panesillo mientras tu intentas pasarme, no lo lograrás',
);

$link = mysql_connect( 'localhost', 'dXN1YXJpbzE', 'dXN1YXJpbzE' );
$db = mysql_select_db( 'db_Y2hhbGxlbmdlLHVzdWFyaW8x', $link );

if( array_key_exists( 'id', $_GET ) )
{
    $result = mysql_query( 'select * from prefix_cHJlZml4LHVzdWFyaW9zLCB1c3Vhcasas12y736t where id = ' . @$_GET[ 'id' ] );
}else {
    die( "Juacker no pasaste un id de usuario ¬¬." );
}


if( ! $result )
{
    die ( "<h1 align='center'>".$juacked[ intval( rand(0, intval( count($juacked) - 1 ) ) ) ]  ."</h1>");
}

if( ! $rows = mysql_fetch_array( $result ) )
{
    die( "El usuario no existe" );
}

mysql_close( $link );
?>

Bienvenido <?php echo "<b>{$rows[ 'username' ]}</b>" ?> ¿Estás listo para jugar?, lo primero que deberás hacer es encontrar el número total de campos que contiene esta consulta, <b>adelante</b>.
