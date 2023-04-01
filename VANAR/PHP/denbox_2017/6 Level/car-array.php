<?php


// from dadabase

$car = [
  "model" => "BMW 5 series", // string
  "color" => "Black",         // string
  "year" => 2001,            // int
  "volume" => 1.6,            // float
  "diesel" => true,           // boolean
  "owners" => [
      "John Doe",     // current
      "Marry Kiddo", // second
      "Arnold S."   //first
  ]
];

// show

print $car["model"] . "<br>";
print $car["color"] . "<br>";
print $car["year"] . "<br>";
print $car["volume"] . "<br>";
print $car["diesel"] . "<br>";

for ($i=0; $i < count($car["owners"]) ; $i++) {
  print $car["owners"][$i] . "<br>";
}


 ?>
