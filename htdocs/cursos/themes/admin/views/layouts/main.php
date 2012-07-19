<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo Yii::app()->name ?> - <?php echo Yii::t( 'global', 'administrator') ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.css" rel="stylesheet">
    
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/base-admin.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/base-admin-responsive.css" rel="stylesheet">
    
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/pages/dashboard.css" rel="stylesheet">   
    <link href="<?php echo Yii::app()->baseUrl; ?>/css/global.css" rel="stylesheet">   

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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
					<li class="dropdown">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
							<?php echo Yii::t( 'global', 'settings' ) ?>
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;"><?php echo Yii::t( 'global', 'account_settings' ) ?></a></li>
							<li class="divider"></li>
							<li><a href="javascript:;"><?php echo Yii::t( 'global', 'help' ) ?></a></li>
						</ul>
						
					</li>
			
					<li class="dropdown">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							<?php echo Yii::app()->user->name ?>
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;"><?php echo Yii::t( 'global', 'my_profile' ) ?></a></li>
							<li><a href="javascript:;"><?php echo Yii::t( 'global', 'my_groups' ) ?></a></li>
							<li class="divider"></li>
							<?php if( ! Yii::app()->user->isGuest ): ?><li><?php echo CHtml::link( Yii::t( 'global', 'logout' ), CHtml::normalizeUrl( array( '/admin/default/logout' ) ) ) ?></li><?php endif ?>
						</ul>
						
					</li>
				</ul>
			
				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="<?php echo Yii::t( 'global', 'search' ) ?>">
				</form>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
    



    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">

				<li class="<?php echo ( $this->getAction()->getController()->id == 'default' ? 'active' : '' ) ?>">
					<a href="<?php echo CHtml::normalizeUrl( array( '/admin/' ) ) ?>">
						<i class="icon-home"></i>
						<span><?php echo Yii::t( 'global', 'homepage' ) ?></span>
					</a>	    				
				</li>
                                
				<li class="<?php echo ( $this->getAction()->getController()->id == 'categories' ? 'active' : '' ) ?>">
                                        <a href="<?php echo CHtml::normalizeUrl( array( '/admin/categories/' ) ) ?>">
						<i class="icon-book"></i>
						<span><?php echo Yii::t( 'global', 'categories' ) ?></span>
					</a>
				</li>
                                
				<li class="<?php echo ( $this->getAction()->getController()->id == 'courses' ? 'active' : '' ) ?>">
                                        <a href="<?php echo CHtml::normalizeUrl( array( '/admin/courses/' ) ) ?>">
						<i class="icon-book"></i>
						<span><?php echo Yii::t( 'global', 'courses' ) ?></span>
					</a>	    				
				</li>
                                
				<li class="<?php echo ( $this->getAction()->getController()->id == 'members' ? 'active' : '' ) ?>">
					<a href="<?php echo CHtml::normalizeUrl( array( '/admin/members/' ) ) ?>">
						<i class="icon-group"></i>
						<span><?php echo Yii::t( 'global', 'students' ) ?></span>
					</a>	    				
				</li>
                                
				<li class="<?php echo ( $this->getAction()->getController()->id == 'members' ? 'active' : '' ) ?>">
					<a href="<?php echo CHtml::normalizeUrl( array( '/admin/members/' ) ) ?>">
						<i class="icon-certificate"></i>
						<span><?php echo Yii::t( 'global', 'instructors' ) ?></span>
					</a>	    				
				</li>
				
				<li class="<?php echo ( $this->getAction()->getController()->id == 'payforms' ? 'active' : '' ) ?>">					
					<a href="<?php echo CHtml::normalizeUrl( array( '/admin/payforms/' ) ) ?>" class="dropdown-toggle">
						<i class="icon-credit-card"></i>
						<span><?php echo Yii::t( 'global', 'payform' ) ?></span>
					</a>	  				
				</li>
				
				<li class="<?php echo ( $this->getAction()->getController()->id == 'reports' ? 'active' : '' ) ?>">
					<a href="<?php echo CHtml::normalizeUrl( array( '/admin/reports/' ) ) ?>">
						<i class="icon-bar-chart"></i>
						<span><?php echo Yii::t( 'global', 'reports' ) ?></span>
					</a>    				
				</li>
				
				<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-share-alt"></i>
						<span><?php echo Yii::t( 'global', 'morepages' ) ?></span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
                                                <li><a href="<?php echo CHtml::normalizeUrl( array( '/admin/places/' ) ) ?>"><?php echo Yii::t( 'global', 'places' ) ?></a></li>
						<li><a href="./charts.html">Charts</a></li>
						<li><a href="./account.html">User Account</a></li>
						<li class="divider"></li>
						<li><a href="./login.html">Login</a></li>
						<li><a href="./signup.html">Signup</a></li>
						<li><a href="./error.html">Error</a></li>
					</ul>    				
				</li>
			
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    
    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	      <?php echo $content; ?>
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
    


<div class="extra">

	<div class="extra-inner">

		<div class="container">

			<div class="row">
				
    			<div class="span3">
    				
    				<h4><?php echo Yii::t( 'global', 'about' ) ?></h4>
    				
    				<ul>
                                        <li><i class='icon-group'></i>&nbsp;<a href="javascript:;"><?php echo Yii::t( 'global', 'about_us' ) ?></a></li>
    					<li><i class='icon-twitter'></i>&nbsp;<a href="<?php echo Yii::app()->params->networks[ 'twitter' ] ?>"><?php echo Yii::t( 'global', 'twitter' ) ?></a></li>
    					<li><i class='icon-facebook'></i>&nbsp;<a href="<?php echo Yii::app()->params->networks[ 'facebook' ] ?>"><?php echo Yii::t( 'global', 'facebook' ) ?></a></li>
    					<li><i class='icon-google-plus'></i>&nbsp;<a href="javascript:;"><?php echo Yii::t( 'global', 'google_plus' ) ?></a></li>
    				</ul>
    				
    			</div> <!-- /span3 -->
    			
    			<div class="span3">
    				
    				<h4><?php echo Yii::t( 'global', 'support' ) ?></h4>
    				
    				<ul>
    					<li><a href="javascript:;"><?php echo Yii::t( 'global', 'faq' ) ?></a></li>
    					<li><a href="javascript:;"><?php echo Yii::t( 'global', 'submit_ticket' ) ?></a></li>
    				</ul>
    				
    			</div> <!-- /span3 -->
    			
    			<div class="span3">
    				
    				<h4><?php echo Yii::t( 'global', 'legal' ) ?></h4>
    				
    				<ul>
    					<li><a href="javascript:;"><?php echo Yii::t( 'global', 'licence' ) ?></a></li>
    					<li><a href="javascript:;"><?php echo Yii::t( 'global', 'tos' ) ?></a></li>
    					<li><a href="javascript:;"><?php echo Yii::t( 'global', 'policy' ) ?></a></li>
    				</ul>
    				
    			</div> <!-- /span3 -->
    			
    		</div> <!-- /row -->

		</div> <!-- /container -->

	</div> <!-- /extra-inner -->

</div> <!-- /extra -->


    
    
<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			<div class="row">
				
    			<div class="span12">
    				<?php echo sprintf( Yii::t( 'global', 'copyright' ), date( 'Y' ) ) ?>.
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->
    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/excanvas.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.pie.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.orderBars.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.resize.js"></script>


<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/base.js"></script>

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/charts/area.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/charts/donut.js"></script>

  </body>
</html>