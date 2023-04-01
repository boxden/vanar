<?php

  // database of users
  $users = [                                            // индексированый
    [
      "avatar"   => "https://www.maiuri.net/wp-content/uploads/2013/03/avatar-facebook-hynco-15.jpg",
      "nickname" => "Nikita 987",
      "year"     => 2009,
      "likes"    => 55,
      "friends"  => [ "Alioncik", "Timati(c)" ]
    ],
    [
      "avatar"   => "http://4.bp.blogspot.com/-3gIdShDlVS0/TwUCZb0-svI/AAAAAAAAaCA/scaPYBMD5fI/s1600/avatar-facebook.jpg",
      "nickname" => "Vasilich",
      "year"     => 2011,
      "likes"    => 1337,
      "friends"  => [ "Kolea", "Dima", "Vanea", "Petia" ]
    ],
    [
      "avatar"   => "http://dravenstales.ch/wp-content/uploads/2012/01/fb_avatar31_special.jpg",
      "nickname" => "Vlad",
      "year"     => 2017,
      "likes"    => 228,
      "friends"  => [ "Valik", "Marina", "Denis" ]
    ]
  ];
  // TEMPLATE - foreach, for, if/else,...                                                       // count считает количество ичеек
 ?>
 <h1>Number of users <?php print count($users) ?> </h1>

<!--php
//  foreach ($users as $i => $u ){

//    print $u["nickname"];

//  }

?> -->
<?php foreach ($users as $i => $u) { ?>
 <div>
   <h4> Ник: <?php print $u["nickname"] ?> </h4>
   <img src="<?php print $u["avatar"] ?>"; style="width: 100px;"/> <br>
   <strong>Год регистрации: <?php print $u["year"] ?><br></strong>
   <strong>Всего лайков: <?php print $u["likes"] ?><br></strong>
   <strong>Друзья: <br> <?php foreach ($u["friends"] as $f => $value) {
     print $value . "<br>" ;
   } ?></strong>
 </div>
<?php  } ?>
