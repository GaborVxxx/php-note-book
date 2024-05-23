<?php
/** Class Inheritance */

// public <-- accessible and inherited
// protected <-- accessible only in the class and can be inherited
// private <-- not accessible can not be inherited and used in other class

class UserC {

    /** properties **/
    public $name;
    public $email;
    private $id = 'gergdrvgergfve';
    protected $status = 'xyz';

    /** constructor function **/ // <-- initialize at creation!
    public function __construct($name, $email) {
        $this->name = $name; // <-- use this to bind!
        $this->email = $email;
    }

    /** methods **/
    public function  login() {
        echo 'login';
    }

    private function reportId() { // if you like to show private data use public method to access!
        return $this->id;
    }

    /** getter **/
    public function reportIdPublic() { // if you like to show private data use public method to access!
        return $this->id;
    }
    /** setter **/
    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

}

// Initialise
$user1 = new UserC('John Doe', 'john@doe.com');

/** Extend the UserC class */
class Admin extends UserC {
    public $level;

    public function __construct($level, $name, $email) {
        $this->level = $level; // <-- set the local class variable
        parent::__construct($name, $email); // <-- pass the other props to parent class
    }

    /** Override the parents functions **/
    public function  login() {  // <-- login function is override here! Polymorphism
        echo 'login admin';
    }
}

// Initialise
$user2 = new Admin('admin','John Doe2', 'john2@doe.com');

var_dump($user2);

echo $user2->name; // all public variable is available  ...etc.
echo $user2->login();
