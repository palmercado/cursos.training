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
					Focus Business
				</a>
			</h1>
			
		</div> <!-- /container -->
		
	</div> <!-- /header -->	
	<div id="nav" class="clearfix">
		
		<div class="container">
		
			<ul id="main-nav">
				<li class="active">
					<a href="./index.html"><?php echo Yii::t( 'global', 'homepage' ) ?></a>
				</li>
				
				<li>
					<a href="./about.html"><?php echo Yii::t( 'global', 'courses' ) ?></a>
				</li>
				
				<li>
					<a href="./services.html"><?php echo Yii::t( 'global', 'workshops' ) ?></a>
				</li>
				
				<li>
					<a href="./faq.html"><?php echo Yii::t( 'global', 'faq' ) ?></a>
				</li>
				
				<li>
					<a href="./contact.html"><?php echo Yii::t( 'global', 'contact' ) ?></a>
				</li>
				
			</ul>
			
		</div> <!-- /container -->
		
	</div> <!-- /nav -->
	
	
	
	
	<div id="masthead">
		
		<div class="container">
		
			<div id="masthead-carousel" class="carousel slide">
				
				<div class="carousel-inner">
					<div class="active item">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/masthead/masthead.jpg" alt="" />
				
						<div class="masthead-details">
							
							<h2>Masthead title goes right here!</h2>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
							
						</div> <!-- /masthead-details -->
					</div> <!-- /item -->
					
					<div class="item">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/masthead/masthead-2.jpg" alt="" />
				
						<div class="masthead-details">
							
							<h2>Masthead title goes right here!</h2>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
							
						</div> <!-- /masthead-details -->
					</div> <!-- /item -->
					
					<div class="item">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/masthead/masthead-4.jpg" alt="" />
				
						<div class="masthead-details">
							
							<h2>Masthead title goes right here!</h2>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
							
						</div> <!-- /masthead-details -->
					</div> <!-- /item -->
					
					<div class="item">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/masthead/masthead-3.jpg" alt="" />
				
						<div class="masthead-details">
							
							<h2>Masthead title goes right here!</h2>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
							
						</div> <!-- /masthead-details -->
					</div> <!-- /item -->
					
				</div> <!-- /carousel-inner -->
				
				<a class="carousel-control left" href="#masthead-carousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#masthead-carousel" data-slide="next">&rsaquo;</a>
				
			</div> <!-- /masthead-carousel -->
			
		</div> <!-- /container -->
	
	</div> <!-- /masthead -->
	
	
	
	
	<div id="content">
		<div class="container">
                    <?php echo $content; ?>
		</div> <!-- /container -->
		
	</div> <!-- /content -->
	
	
        <div class="content-footer">
            <div class="logo"><div class="image"></div></div>
        </div>
	<div id="footer">
		
		<div class="container">
		
			<div class="row">
				
				<div class="grid-4">
					<h1 id="footer-logo">Focus Business</h1>
					
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
				</div> <!-- /grid-4 -->
				
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
						
					<h3><span class="slash">//</span> <?php echo Yii::t( 'global', 'suscribe' ) ?></h3>
					
	
					<p>Subscribe to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
					
					
					<form>
						
						<input type="text" name="subscribe_email" placeholder="Your Email">
						
						<br>
						
						<button class="btn btn-warning">Subscribe</button>
					</form>
					
					
				</div><!-- /grid-4 -->
				
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
					<?php echo sprintf( Yii::t( 'global', 'owner' ) ) ?></a>
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
