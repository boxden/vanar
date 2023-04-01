<?php
$key = [  // ciper
  'a' => 'x',
  'b' => 'f',
  'c' => 'g',
  'd' => 'w',
  'e' => 'q',
  //...

];

$url = "bbc.de"; //
for($i=0;$i<strlen($url);$i++){
  print $i. "-". $url[$i] ."\n";
}
$url_encrypted = ''; // 'ffg.wq'


///------------------------------------------




$key = [  // ciper
  'a' => 'x',
  'b' => 'f',
  'c' => 'g',
  'd' => 'w',
  'e' => 'q',
  //...

];

$url           = "bbc.de"; //
$url_encrypted = ''; // 'ffg.wq'
for($i=0;$i<strlen($url);$i++){
  print $i. "-". $url[$i] ."\n";

  if( array_key_exists('bbc.de',$i) ){
    $url_encrypted .=$url[$i];
  }else{
    $url_encrypted .=$url[$i];
  }
}



// ----------------Pravilno--------------------------

$key = [  // ciper
  'a' => 'x',
  'b' => 'f',
  'c' => 'g',
  'd' => 'w',
  'e' => 'q',
  //...

];

$url           = "bbc.de"; //
$url_encrypted = ''; // 'ffg.wq'
for($i=0;$i<strlen($url);$i++){
  print $i. "-". $url[$i] ."\n";

  if( array_key_exists($url[$i],$key) ){
    $url_encrypted .= $key[ $url[$i] ];
  }else{
    $url_encrypted .=$url[$i];
  }
}

print $url_encrypted;

 ?>
