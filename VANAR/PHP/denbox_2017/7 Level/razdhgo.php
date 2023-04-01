<?php


// USER FUNCTIONS / CUSTOM FUNCTIONS

// strlen() // string
// array_key_exists() // array

//

function my_func( $arg1, $arg2){ // <IN
  //code
  return value;  // > OUT
}







// DECLARATION

function hello(){ // <IN
  print "Здесь выводит только то что ты написал в Принте, функция вызывается 3 раза. По этому этот текст будет выводиться 3 раза ";
   // > OUT
}


// CAL
hello();
hello();
hello();



//---------------------------



/// GLOBAL SPACE

$name = "GLOBAL NAME";
function f(){
  global $name;
  // LOCAL SPACE
  //$name = "Local Name";
  print $name;

}


// CAL
f();
f();
f();
 ?>
