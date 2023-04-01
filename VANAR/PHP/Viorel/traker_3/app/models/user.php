<?php

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
// skeleton of user(create,read ,update, delete)

class User{
  public $nikname;
  public $password;
  public $email;


  //// create
  public function __construct( $nikname, $password, $email){

$this->nikname = $nikname;
$this->password = $password;
$this->email    = $email;
 }
 /// save user to disk/database
public function save(){
  $user = json_encode( $this );
  $uuid1 = Uuid::uuid1();


 file_put_contents( "database/user/{$uuid1->toString()}.json" , $user) ; //
 }
 public static function find($name, $password=null){
   // 1) scan
   $files = scandir('database/user');
   unset($files[0]);
   unset($files[1]);

   foreach ($files as $file) {
     $user = json_decode(file_get_contents('database/user/'.$file)) ;
     if( $user->nikname == $name) {

       if($password){
         if( $user->password == $password )
         return $user;
         else
         return null;
       }

     }
   }
   return null;
 }
 public static function all(){
   $files = scandir('database/user');
   unset($files[0]);
   unset($files[1]);
   $all;
   foreach ($files as $file) {
     $user = json_decode(file_get_contents('database/user/'.$file)) ;
     $allUsers[]= $user;
   }
   return $allUsers;
 }



}
