<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  // properties are attributed that belonfg to a class
  // public - can be accessed from anywhere
  // private - can only be accessed from within the class
  // protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;

  // Method - function belonging to this class
  function set_name($name){
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }
  // constructor - runs when an object is created
  public function __construct($name, $email, $password){
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }
}

// initialise a user object

// $user1->set_name('Chloe');
// $user2->set_name('Sally');
// var_dump($user1);

// echo $user1->get_name();
// echo $user2->get_name();
$user1 = new User('Chloe', 'cg@test.com', 'chloe23');
$user2 = new User('John', 'john@test.com', 'john23');

// echo $user1->name;
// echo $user2->email;

// inheritance
class Employee extends User {
  public function __construct($name, $email, $password, $title){
    // from the parent user class above
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle(){
    return $this->title;
  }
}

$employee1 = new Employee('Sara', 'sara@test.com', 'pass123', 'Manager');
echo $employee1->getTitle();