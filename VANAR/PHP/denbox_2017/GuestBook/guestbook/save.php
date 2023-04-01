<?php
    $name = $_GET['author_name']; // Минимум 3 символа
    $email = $_GET['author_email']; // Минимум @ и .
    $message = $_GET['author_message']; // Минимум от 5 до 100 символа
    // php string funtions
    // if () 
    print $name . "<br>";
    print $email . "<br>";
    print $message;
 ?>
