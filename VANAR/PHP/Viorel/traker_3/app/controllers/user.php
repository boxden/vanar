<?php
/// User constroller class

class UserController{

  static function all(){
    print "<pre>";
      var_dump(User::all());

  }
  static function list(){
    print "<pre>";
      $users = User::all();
      r("user-list", ["users"=>$users]);
  }

  static function test(){
  //  echo "User test function!!!!! :) ";
// print "<pre>";
//   var_dump(User::find( 'Jon' , 'lucreaza' ));
////////////// Torent ////////////
// $t= new Torrent ("movie", "satyr", "fiorst" , "fishier", "iamgine");
// $t->save();
echo"<pre>";
  var_dump( Torrent::find( 'horror' ));
  }
  static function listtorent(){
    print "<pre>";
    var_dump( Torrent::all() );
  }
  static function login(){
    if(empty($_POST))
    r("signin-form", []);
    else{
      $username  =strip_tags(trim($_POST['username']));
      $password = strip_tags(trim($_POST['password1']));
      if( $user = User::find( $username, $password )){
      Session::set( "user", $username );
    }else
     r("signin-form", ["error"=>"Invalid username or password"]);
    }
  }
  static function create(){
    if(empty($_POST))
  r( "signup-form" , []);
    else{


      $username  =strip_tags(trim($_POST['username']));

      $password1 = strip_tags(trim($_POST['password1']));

      $password2 = strip_tags(trim($_POST['password2']));

      $email     = strip_tags(trim($_POST['email']));



      if( !UserController::isValidUsername( $username )){
          r( "signup-form" , ["error" => "Invalid username!"]);
          die;
      }elseif( !UserController::isValidPassword( $password1 )){
          r( "signup-form" , ["error" =>"Invalid password"]);
          die;
     }elseif( !UserController::isPasswordMatch( $password1, $password2 )){
          r( "signup-form" , ["error" =>"Password confirmation doesn't match"]);
          die;
     }elseif( !UserController::isValidPassword( $password1 )){
        r( "signup-form" , ["error" =>"Invalid password"]);
        die;
     }elseif( !UserController::isValidEmail( $email )){
       r( "signup-form" , ["error" =>"Invalid Email"]);
       die;
  }else {
      echo "Register!!!";
      $user = new User( $username,$password1 ,$email );
      $user->save();
     }
    }
  }
  static function isValidUsername( $username ){
    return preg_match( '/^[A-Za-z][A-Za-z0-9]{2,31}$/', $username );
  }
  static function isPasswordMatch( $password1, $password2 ){
    return ($password1 === $password2);
  }
  static function isValidPassword( $password1 ){
    return preg_match( '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{3,31}$/', $password1);
  }
  static function isValidEmail( $email ){
    return preg_match( '/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $email );
  }
}
