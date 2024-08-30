<?php
 class Person
 {
   public  $name = 'Shreynik' ;
    public $age = 19;
    public $isLocal = true;

     public function __construct($name ,$age)//constructor
     {
       $this->name=$name; // class data ko set kar diya 
       $this->age=$age;    // from constructor 
     }

     public function makelocal()// method
     {
        $this->isLocal=true; 
     }
 }
 $person = new Person('rahul',32);
 $person->makelocal();

 var_dump($person);
 
 ?>