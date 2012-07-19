<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo Yii::app()->name ?> - <?php echo Yii::t( 'global', 'error_not_found') ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes"> 
	    
	<link href="<?php echo Yii::app()->theme->baseUrl ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo Yii::app()->theme->baseUrl ?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	
	<link href="<?php echo Yii::app()->theme->baseUrl ?>/css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="<?php echo Yii::app()->theme->baseUrl ?>/css/base-admin.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo Yii::app()->theme->baseUrl ?>/css/base-admin-responsive.css" rel="stylesheet" type="text/css" />

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<?php echo CHtml::link(Yii::t( 'global', 'administrator' ), CHtml::normalizeUrl( array( '/admin/' ) ), array( 'class' => 'brand' ) ) ?>
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="./" class="">
							<i class="icon-chevron-left"></i>
							<?php echo Yii::t( 'global', 'backdashboard' ) ?>
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="container">
	
	<div class="row">
		
		<div class="span12">
			
			<div class="error-container">
				<h1><?php echo Yii::t( 'global', 'oops' ) ?></h1>
				
				<h2><?php echo sprintf( Yii::t( 'global', 'description_error' ), $code ) ?></h2>
				
				<div class="error-details">
					<?php echo Yii::t( 'global', 'error_404' ) ?>
					
				</div> <!-- /error-details -->
				
				<div class="error-actions">
					<a href="./" class="btn btn-large btn-primary">
						<i class="icon-chevron-left"></i>
						&nbsp;
						<?php echo Yii::t( 'global', 'backdashboard' ) ?>
					</a>
					
					<a href="./" class="btn btn-large">
						<i class="icon-envelope"></i>
						&nbsp;
						<?php echo Yii::t( 'global', 'support_contact' ) ?>
					</a>
					
				</div> <!-- /error-actions -->
							
			</div> <!-- /error-container -->			
			
		</div> <!-- /span12 -->
		
	</div> <!-- /row -->
	
</div> <!-- /container -->


<script src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl ?>/js/bootstrap.js"></script>

</body>
</html>