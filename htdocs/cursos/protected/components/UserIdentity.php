<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users=array(
			// username => password
			'demo' => 'demo',
			'admin' => 'admin',
                        'usuario1' => '7gbwni1ebyd',
                        'usuario2' => '81yhebdnk2r',
                        'usuario3' => '81y73bnei2k',
                        'usuario4' => '1iuegbi2kq2',
                        'usuario5' => 'asnhuq183ts',
                        'usuario6' => 'uh23hgenwid',
                        'usuario7' => '8eghdi273yr',
                        'usuario8' => '1u3g2neir3u',
                        'usuario9' => '81gedi2bru2',
                        'usuario10' => '1873gebni2r',
                        'usuario11' => '18h12nine2u',
                        'usuario12' => '18h3be2u37y',
                        'usuario13' => '183gebru3yd',
                        'usuario14' => 'jbxcsjyvw13',
                        'usuario15' => '17egeb28ufs',
                        'usuario16' => '173g2enried',
                        'sarahi.lopez' => '18yegdbu21',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}