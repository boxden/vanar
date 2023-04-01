<?php

$max_price = 100;

$photo    = [ '1.jpg', '2.jpg'   , '3.jpg' , '4.jpg']; // <img>
$food     = [ 'Салат', 'Мамалыга', 'Курица', 'Суп'  ]; // <h3>
$price    = [  35.50 ,   25.00   ,  55.00  ,  15,75 ]; // <strong>
$quantity = [    1   ,      1    ,    0    ,    5   ]; // <strong
// *
$rating   = [    3   ,      5    ,    4    ,    1   ]; // strong
// 1) -> for()+if() -> <table/tr/td> HTML + total
// 2) -> $max_price < user $max_price = 30; // filter + if()    \\  // 1.3 index
// 3)* ->for() -> + if() stars rating
//for ($i=0; $i < count($food) ; $i++) {
//  if  $max_price >= $price[$i]
//};
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SHOP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style media="screen">
      *{
        text-align: center;
      }
      </style>
  </head>
  <body>
    <table  border="4">
      <tr>
        <td>Фото</td>
        <td>Название</td>
        <td>Цена за 1</td>
        <td>Количество</td>
        <td>Итоговая цена</td>
        <td>Оценка</td>
      </tr>
<?php
for ($i=0; $i < count($food) ; $i++) {
  if ($max_price >= $price[$i]) {
    print "
    <tr>
     <td><img src='img/$photo[$i]' style='width:200px;  height: auto;'></td>
     <td><h3>$food[$i]</h3></td>
     <td><strong>$price[$i] Лей</strong></td>
     <td><strong>$quantity[$i] Шт.</strong></td>
     <td><strong>" . $quantity[$i] * $price[$i] ." Лей</strong></td>
     <td><strong>";
     for( $n=0; $n<$rating[$i] ; $n++ ){
       print "<i class='fa fa-star' style='color: red;'></i>";
     };
     print "</strong></td></tr>";
  };
};


 ?>
    </table>
  </body>
</html>
