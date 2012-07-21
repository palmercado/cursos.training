<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/focus.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/focus-responsive.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/pages/homepage.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->baseUrl; ?>/css/global.css" rel="stylesheet" />


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="wrapper" class="clearfix">
	<div id="header">
		
		<div class="container">
			
			<h1 id="title">
				<a href="<?php echo Yii::app()->request->baseUrl; ?>">
					<?php echo CHtml::encode( $this->pageTitle ) ?>
				</a>
			</h1>
                    
                        <h1 id="suggest-course">
                            <i></i>
                            <?php echo CHtml::link( Yii::t( 'global', 'put_course' ), array( '/courses/create' ) ) ?>
                        </h1>
			
		</div> <!-- /container -->
		
	</div> <!-- /header -->	
	<div id="nav" class="clearfix">
		
		<div class="container">
		
			<ul id="main-nav">
				<li class="<?php if( Yii::app()->controller->id == 'site' ): ?>active<?php endif ?>">
                                    <a href="<?php echo CHtml::normalizeUrl( array( '/' ) ) ?>"><?php echo Yii::t( 'global', 'homepage' ) ?></a>
				</li>
				
				<li class="<?php if( Yii::app()->controller->id == 'courses' ): ?>active<?php endif ?>">
					<a href="<?php echo CHtml::normalizeUrl( array( '/courses' ) ) ?>"><?php echo Yii::t( 'global', 'courses' ) ?></a>
				</li>
				
				<li class="<?php if( Yii::app()->controller->id == 'workshops' ): ?>active<?php endif ?>">
					<a href="<?php echo CHtml::normalizeUrl( array( '/workshops' ) ) ?>"><?php echo Yii::t( 'global', 'workshops' ) ?></a>
				</li>
				
				<li class="<?php if( Yii::app()->controller->id == 'help' ): ?>active<?php endif ?>">
					<a href="<?php echo CHtml::normalizeUrl( array( '/help' ) ) ?>"><?php echo Yii::t( 'global', 'faq' ) ?></a>
				</li>
				
				<li class="<?php if( Yii::app()->controller->id == 'contact' ): ?>active<?php endif ?>">
					<a href="<?php echo CHtml::normalizeUrl( array( '/contact' ) ) ?>"><?php echo Yii::t( 'global', 'contact' ) ?></a>
				</li>
				
			</ul>
			
		</div> <!-- /container -->
		
	</div> <!-- /nav -->
	
	
	
	
	<div id="content">
		<div class="container">
                    <?php echo $content; ?>
		</div> <!-- /container -->
		
	</div> <!-- /content -->
	
	
        <div class="content-footer">
            <div class="logo"><div class="image"><a href="<?php echo CHtml::normalizeUrl( array( '/site/index' ) ) ?>"></a></div></div>
        </div>
	<div id="footer">
		
		<div class="container">
		
			<div class="row">
				
				<div class="grid-4">
						
					<h3><span class="slash">//</span> <?php echo Yii::t( 'global', 'suscribe' ) ?></h3>
					
	
					<p>Subscribe to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
					
					
					<form class="suscribe">
						
						<input type="text" name="subscribe_email" placeholder="correo@dominio">
						
						<input type="submit" class="btn btn-warning" value="Suscribete" />
					</form>
					
					
				</div><!-- /grid-4 -->
                                
				<div class="grid-4">
					
					<h3><span class="slash">//</span> <?php echo Yii::t( 'global', 'networks' ) ?></h3>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt magna aliqua.</p>
					
					<ul class="social-icons-container">						
						<li>
                                                        <a href="<?php echo CHtml::normalizeUrl( Yii::app()->params->networks[ 'twitter' ] ) ?>" class="social-icon social-icon-twitter">
								<?php echo Yii::t( 'global', 'twitter' ) ?>
							</a>
						</li>
							
						<li>
							<a href="<?php echo CHtml::normalizeUrl( Yii::app()->params->networks[ 'facebook' ] ) ?>" class="social-icon social-icon-googleplus">
								<?php echo Yii::t( 'global', 'google_plus' ) ?>
							</a>
						</li>
						
						<li>							
							<a href="<?php echo CHtml::normalizeUrl( Yii::app()->params->networks[ 'facebook' ] ) ?>" class="social-icon social-icon-facebook">
								<?php echo Yii::t( 'global', 'facebook' ) ?>
							</a>
						</li>
						
					</ul>
					
				</div> <!-- /grid-4 -->
                                
				<div class="grid-4">
					<h3>¿Necesitas algo más?,</h3>
					
					<p>Estamos para servirte, dejanos tus datos y en breve nos pondremos en contácto contigo.</p>
                                        <form class="contact">
                                            <input type="text" placeholder="Nombre" />
                                            <input type="text" placeholder="Correo@dominio.com" />
                                            <textarea placeholder="Duda o comentario" class="no-resize"></textarea>
                                            <input type='submit' class="btn btn-warning" value="Enviar" />
                                        </form>
					
				</div> <!-- /grid-4 -->
				
			</div> <!-- /row -->
			
		</div> <!-- /container -->
		
	</div> <!-- /footer -->
	
	
	
	<div id="copyright">
		
		<div class="container">
			
			<div class="row">
			
				<div id="rights" class="grid-6">
                                <?php echo sprintf( Yii::t( 'global', 'copyright' ), date( 'Y') ) ?>
				</div> <!-- /grid-6 -->
				
				<div id="totop" class="grid-6">
					<?php echo sprintf( Yii::t( 'global', 'owner' ) ) ?>
				</div> <!-- /grid-6 -->
				<div id="legal" class="grid-6">
                                        <ul>
                                            <li><?php echo CHtml::link( Yii::t( 'global', 'licence' ), array( '/licence' ) ) ?></li>
                                            <li><?php echo CHtml::link( Yii::t( 'global', 'tos' ), array( '/tos' ) ) ?></li>
                                            <li><?php echo CHtml::link( Yii::t( 'global', 'pop' ), array( '/pop' ) ) ?></li>
                                        </ul>
				</div> <!-- /grid-6 -->
				
			</div> <!-- /row -->
			
		</div> <!-- /container -->
			
	</div> <!-- /copyright -->
	
</div> <!-- /wrapper -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/focus.js"></script>

<script>

$(function () {
	
	$('#masthead-carousel').carousel ({ interval: false });
	
});

</script>

</body>
</html>
