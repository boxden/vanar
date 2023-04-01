<?php
 $username        = "phpdeveloper^^";
 $email           = "dev@mail.local";
 $phone           = "+123456789";
 $avatar          = "./images/avatar.jpg";  // Адрес картинки
 $stars           = 4.56789;                // Рейтинг
 $is_for_hire     = true;                   // e disponibil pentru angajare
 // ... ???
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php print $username?>'s profile</title>
</head>
<body>
  <h1><?php print $username?></h1>
  <img src="http://icons.iconarchive.com/icons/designbolts/free-male-avatars/128/Male-Avatar-Emo-Haircut-icon.png"/>
  <strong><small>rating: </small><?echo round($stars,1);?></strong>
  <!-- * urmatorul block trebuie sa apara doar daca $is_for_hire este adevar  -->

 <?php if($is_for_hire):?>
  <h4>You can hire me!</h4>
  <a href="mailto:dev@mail.local"><?php print $email ?></a><br>
  <a href="tel:+123456789"><? print $phone ?></a><br>
<?php endif ?>

</body>
</html>

Сделать тоже самое только с другими значениями

название учителей
кто деректор
какие напровления
5 -6 переменных
и приукрасить 
