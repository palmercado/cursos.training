<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/base-admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/pages/signin.css" rel="stylesheet" type="text/css">

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
						<a href="<?php echo CHtml::normalizeUrl( array( '/admin/' ) ) ?>" class="">
							<i class="icon-chevron-left"></i>
							<?php echo Yii::t( 'global', 'backdashboard' ) ?>
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'login-form',
                    'enableClientValidation'=>true,
                    'clientOptions'=>array(
                            'validateOnSubmit'=>true,
                    ),
                 )); ?>
		
			<h1><?php echo Yii::t( 'login', 'signin' ) ?></h1>		
			
			<div class="login-fields">
				
				<p><?php echo Yii::t( 'login', 'signin_description' ) ?>:</p>
				
				<div class="field">
					<?php echo $form->labelEx($model,'username'); ?>
                                        <?php echo $form->textField($model,'username', array( 'placeholder' => $model->getAttributeLabel( 'username' ), 'class'  => 'login username-field' )); ?>
				</div> <!-- /field -->
				
				<div class="field">
					<?php echo $form->labelEx($model,'password'); ?>
                                        <?php echo $form->passwordField($model,'password', array( 'placeholder' => $model->getAttributeLabel( 'password' ), 'class'  => 'login password-field' )); ?>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
                                        <?php echo $form->checkBox($model,'rememberMe', array( 'class'  => 'field login-checkbox' )); ?>
                                        <?php echo $form->label($model,'rememberMe', array( 'class' => 'choice' ) ); ?>
				</span>
						
                                <?php echo CHtml::submitButton( Yii::t( 'login', 'login' ), array( 'class' => 'button btn btn-warning btn-large' )); ?>
				
			</div> <!-- .actions -->
			
			<div class="login-social">
				<p><?php echo Yii::t( 'login', 'login_with' ) ?>:</p>
				
				<div class="twitter">
					<a href="#" class="btn_1"><?php echo Yii::t( 'global', 'twitter' ) ?></a>				
				</div>
				
				<div class="fb">
					<a href="#" class="btn_2"><?php echo Yii::t( 'global', 'facebook' ) ?></a>				
				</div>
			</div>
			
		<?php $this->endWidget(); ?>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	<?php echo sprintf( Yii::t( 'login', 'forget_password' ), '#' ) ?>
</div> <!-- /login-extra -->


<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/signin.js"></script>

</body>
</html>
