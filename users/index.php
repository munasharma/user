<?php

/**
* @author: Muna Kumar Sharma
* @email: muna.sharma@impelsys.com
* @version: 1.0 
* @copyright 2015 Impelsys
* @Description: Simple login system using interface
*/

require_once('includes/nameableInterface.php');
require_once('includes/emailableInterface.php');


/**
 * @implements nameable and emailable
 */

class User implements nameable, emailable {
	/**
	* @type string $firstName The user's first name
	* @type string $lastName The user's last name
	* @type string $userName The user's name
	* @type string $email The user's email
	*/
 
    private $firstName;
    private $lastName;
	private $userName;
	private $email;
	private $password;
    
		
	// __construct with 5 params called: firstName,lastName, userName, email, password
    public function __construct($firstName, $lastName, $userName, $email ,$password) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
    }	
	
    public function getUserName() {
        return $this->userName;
    }
 
    public function getEmail() {
        return $this->email;
    }
	
	public function getPassword() {
        return $this->password;
    }
	
}


?>