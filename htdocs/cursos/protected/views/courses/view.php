<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->name,
);
?>

<h2><?php echo sprintf( Yii::t( 'courses', 'title_view' ), $model->name ) ?></h2>

<h3>Introducción</h3>
<div style='text-align: center;'><img src="<?php echo Yii::app()->baseUrl . Yii::app()->params->course_upload ?>/hacker-irlandes-en-libertad-300x300.jpg" /></div>
<br />
<pre>
Hacking, ¿Legal o ilegal?

En un mundo donde los cyber terroristas diariamente se adueñan más de la red necesitamos prepararnos para enfrentar los obstáculos que ello implica. Ese es el fin de este curso, el cual te llevará de la mano para explorar territorios muy poco conocidos.

Preparense para vivir una de las mejores experiencias en cuanto a la informática se refiere.

El día de hoy aprenderás:

- ¿Cómo trabaja un hacker?
- ¿Cómo ser un hacker?

Y sobre todo, aprenderás que el conocimiento es la clave del éxito de todo buen hacker.
</pre>

<h3>Temario</h3>
<pre>
- Explicación esquema Cliente - Servidor.
- Introducción a SQL.
- Identificación de la vulnerabilidad.
- Marco teórico de aprovechamiento de una vulnerabilidad SQL Injection.
- Determinando SQL Injection o SQL Blind.
- Averiguando el número de campos que componen la consulta.
- Averiguando el nombre de la base de datos.
- Averiguando el usuario.
- Averiguando el nombre de las tablas de la base de datos.
- Averiguando campos de las tablas importantes del sistema.
- Obteniendo contraseñas.
- Ingresando al sistema.
- Cargando archivos al servidor.
- Leyendo archivos del servidor.
- Creando una Shell.
</pre>
<h3>Descargas</h3>
<a href="<?php echo Yii::app()->baseUrl ?>/downloads/Hacking SQLi.pptx"></a>
<br />
<a href="<?php echo Yii::app()->baseUrl ?>/downloads/Hacking SQLi.ppt"></a>
<h3>Prácticas</h3>
<br />
<div class="alert alert-block">Para realizar este ejercicio primeramente deberás identificarte en: <a href="<?php echo CHtml::normalizeUrl( array( '/site/login/' ) ) ?>"><?php echo CHtml::normalizeUrl( array( '/site/login/' ) ) ?>.</a> con el nombre de usuario y contraseña que te proporciono algún miembro del staff. </div>
<br />
<ol>
    <li><a href="<?php echo Yii::app()->baseUrl . '/challenge/1/' . Yii::app()->user->name ?>.php">Obteniendo el número de campos.</a></li>
    <li><a href="<?php echo Yii::app()->baseUrl . '/challenge/2/' . Yii::app()->user->name ?>.php">Obteniendo el nombre de la base de datos.</a></li>
    <li><a href="<?php echo Yii::app()->baseUrl . '/challenge/3/' . Yii::app()->user->name ?>.php">Obteniendo el usuario.</a></li>
    <li><a href="<?php echo Yii::app()->baseUrl . '/challenge/4/' . Yii::app()->user->name ?>.php">Buscando tablas de usuarios.</a></li>
    <li><a href="<?php echo Yii::app()->baseUrl . '/challenge/5/' . Yii::app()->user->name ?>.php">Obteniendo campos de la tabla de usuarios.</a></li>
    <li><a href="<?php echo Yii::app()->baseUrl . '/challenge/6/' . Yii::app()->user->name ?>.php">Obteniendo contraseña y nombre de usuario.</a>
        <ol><li><a href="<?php echo CHtml::normalizeUrl( array( '/admin/' ) ) ?>">Identificarse en el sistema.</a></li></ol>
    </li>
    <li><a href="<?php echo Yii::app()->baseUrl . '/challenge/7/' . Yii::app()->user->name ?>.php">Cargar archivo en el sistema. (hacked-nombreusuario.txt)</a></li>
    <li><a href="<?php echo Yii::app()->baseUrl . '/challenge/7/' . Yii::app()->user->name ?>.php">Leer el archivo passwd.php</a></li>
    <li><a href="<?php echo Yii::app()->baseUrl . '/challenge/7/' . Yii::app()->user->name ?>.php">Crear una shell</a></li>
    <li><a href="<?php echo Yii::app()->baseUrl . '/challenge/7/' . Yii::app()->user->name ?>.php">Modificar el archivo index.html con el texto Hacked by [nombre de usuario]</a></li>
</ol>

<h3>Concurso</h3>
<pre>El que acumule la mayor cantidad de puntos será el ganador del concurso y obtendrá un pase automático para la segunda sesión.

Los puntos serán dados de la siguiente manera:

- 3 puntos primera persona en terminar una práctica.
- 2 puntos segunda persona en terminar una práctica.
- 1 punto tercera persona en terminar una práctica.
</pre>

<pre>Nota: En caso de empate se les cobrará solo la mitad del costo de la entrada. </pre>