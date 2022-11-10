<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP 
  in either a procedural or object 
  oriented way. OOP consists of classes
   that can hold "properties" and 
   "methods". Objects can be created 
   from classes.
*/
class User{
    //propeties su atributi koji pripadaju klasama
    // Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;
    // The constructor is called whenever an object is created from the class.
  // We pass in properties to the constructor from the outside.
    function __construct($name,$email,$password){
        // We assign the properties passed in from the outside to the properties we created inside the class.
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
    }

    //metoda je funkcija koja pripada klasi

    function setname($name){
        $this->name=$name;
    }
    function getname(){
        return $this->name;
    }
}

//inastanciranje user objekta

$user1=new User('Daniela','dberic00@fesb.hr','baja');
$user2=new User('Ana','ana@gmail.com','8788');


//echo $user1->getname();
echo $user1->email. '<br>';
echo $user2->password;

/* ----------- Inheritence ---------- */

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class Employee extends User{

    public function __construct($name,$email, $password, $title)
    {
        parent::__construct($name,$email,$password);
        $this->title=$title;
    }

    function gettitle(){
        return $this->title;
    }
}

$employee1=new Employee('Maja','maji@gmail.com','9764','programer');

echo $employee1->gettitle();