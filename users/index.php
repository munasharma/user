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
    
		
	// __construct with 2 params called: firstName,lastName
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
	
	
    public function getUserName() {
        return $this->userName;
    }
 
    public function getEmail() {
        return $this->email;
    }
}
?>