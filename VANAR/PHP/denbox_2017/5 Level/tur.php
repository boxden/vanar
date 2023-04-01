<?php

// available destinations
$ava = [
  'UK',   // 0
  'USA',
  'China',// 2
  'Russia Federation',
  'Romania',
  'Chile',
  'Moldova'
];

// client destinations
$cli= [
  'UK',
  'China',
  'Japan'
];
$pos = array_intersect($ava, $cli);
//print_r( $pos );
//for ($i=0; $i < count( $pos) ; $i++) {
//  print $pos[$i];
//};
 foreach ( $pos as $index => $value ) {
   print " $value <br>" ;
 };
$pos2 = array_diff($ava, $cli);
//print_r ( $pos2);
 foreach ($pos2 as $index => $value) {
   print " $value <br>";
 };
 ?>
