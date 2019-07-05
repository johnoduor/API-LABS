<?php

class user{

  public $id;
  private $password;
  public $name;
  protected $role;

  public function __construct($id,$pass,$name,$role){

    $this->id = $id;
    $this->password = $pass;
    $this->name = $name;
    $this->role = $role;

  }

  //getter
  public function getPassword(){
    return $this->password;
  }
  //setter - type hinting
  public function setPassword(string $password){
    $this->password = $password;
  }
}
class admin extends user{
  use reports;
}
trait reports{
  public function generate($class,$format){
    return $class.' in '.$format;
  }
}
$johnteh = new admin(1,'pass','Johnteh','admin');
echo $johnteh->name; //public
//access the trait methods...
echo $johnteh->generate('Admin','Toyoya Kenya');




 ?>
