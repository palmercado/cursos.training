<?php

class AdminModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
		Yii::app()->theme = 'admin';
                Yii::app()->setComponents(     array
                                               (
                                                    'messages' => array
                                                                  (
                                                                        'class'         =>'CPhpMessageSource',
                                                                        'basePath'      =>'protected/modules/admin/messages',
                                                                   ),
                                               )
                                          );

	}

	public function beforeControllerAction($controller, $action)
	{
                if( Yii::app()->user->isGuest && ( ( $controller->id != 'default' && $action->id != 'login' )  || ( $controller->id == 'default' && $action->id != 'login' ) ) )
                {
                    $controller->redirect( array( '/admin/default/login' ) );
                }
                
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
