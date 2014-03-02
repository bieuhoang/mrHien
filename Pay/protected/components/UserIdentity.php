 <?php
 
 /**
  * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
 class UserIdentity extends CUserIdentity
 {
 	private $_id; 	
 	public function __construct($username, $password) {
 		$this->username = $username;
 		$this->password = $password;
 	}
 	 public function authenticate() {
 	 	$user = Users::model()->find(array ("condition" => "email = '" . $this->username."'"));
         if ($user === null) {
             $this->errorCode = self::ERROR_USERNAME_INVALID;
         } else {
             $password = md5($this->password);
             if ($user->password !== $password) {
                 $this->errorCode = self::ERROR_PASSWORD_INVALID;
             } else {
             	$this->errorCode = self::ERROR_NONE;
 				$this->_id = $user->userId;
             }
         }
         return !$this->errorCode;
     }
 }