<?php
/** Creating a Class */

// if you not set ti it will be public

// public <-- accessible
// protected <-- accessible only in the class and can be inherited
// private <-- not accessible can not be inherited and used in other class

class User {

    /** properties **/
    public $name;
    public $age;
    public $email;
    // public $nationality = 'english'; <-- we can set defaults.

    /** methods **/
    public function  login() {
        echo 'login';
    }

}

/** we use -> instead of . **/

// Instantiate anew object
$user1 = new User();
$user1->name = 'John Doe';
$user1->age = 20;
$user1->email = 'john@doe.com';

$user1->login(); // call method

var_dump($user1);


/** Using constructor **/
class UserOther {

    /** properties **/
    public $name;
    public $age;
    public $email;
    // public $nationality = 'english'; <-- we can set defaults.

    /** constructor function **/ // <-- initialize at creation!
    public function __construct($name, $age, $email) {
        echo 'Constructor run...';
        $this->name = $name; // <-- use this to bind!
        $this->age = $age;
        $this->email = $email;
    }

    /** methods **/
    public function  login() {
        echo 'login';
    }

}

$user2 = new UserOther('John Doe', '20', 'john@doe.com');
var_dump($user2);

/** Access Modifiers, Getters & Setters **/
class UserOtherMod {

    /** properties **/
    public $name;
    public $age;
    public $email;
    // public $nationality = 'english'; <-- we can set defaults.
    private $id = 'gergdrvgergfve';

    /** constructor function **/ // <-- initialize at creation!
    public function __construct($name, $age, $email) {
        echo 'Constructor run...';
        $this->name = $name; // <-- use this to bind!
        $this->age = $age;
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

}

$user3 = new UserOtherMod('John Doe2', '25', 'john2@doe.com');

// $user3->reportId(); // the function is private can not be used
/** get */
$user3->reportIdPublic(); // we can access private data with public methods
/** set */
$user3->setId('xxxx');

var_dump($user3);