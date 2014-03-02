<?php

class Users extends AnlabActiveRecord {
	
	public $userId;
	public $email;
	public $password;
	public $remember;
	public $status;
	public $lastLogin;
	public $created;
	public $updated;	
	private $_identity;
		
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	
     public function attributeLabels() {
         return array(
             'email' => Yii::t('default', 'Email'),
             'password' => Yii::t('default', 'Password'),
             'repassword' => Yii::t('default', 'Re-password'),
         );
     }
	 
     public function authenticate($attribute, $params) {
         if (!$this->hasErrors()) {
             $this->_identity = new UserIdentity($this->email, $this->password);
             if (!$this->_identity->authenticate())
                 $this->addError('password', Yii::t('default', 'Incorrect email or password !'));
         }
     }
	 
     public function login() {
         if ($this->_identity === null) {
             $this->_identity = new UserIdentity($this->email, $this->password);
             $this->_identity->authenticate();
         }
         if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
         	echo "Thanh cong";
         	if ($this->remember) {
            	Yii::app()->user->login($this->_identity,24*3600*7);
		 	} else {
		 		Yii::app()->user->login($this->_identity, 0);	
			}
             return true;
         }else{
         	return false;
         }
     }
	
	
}