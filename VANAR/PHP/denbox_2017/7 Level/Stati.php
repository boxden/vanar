<?php
// Titles of articles
$articles = [
  "PHP 7.2 has been released",
  "Worldpress 6.x upgrade!",
  "Zend Engine v3.0.0 is now available"
];
// client search
$search = "PHP"
// loop
foreach ($articles as $i => $value) {
  if (strpos( $title, $search ) !== FALSE ) {
    print $title . "\n";
  }
}



// strpos/stripos
// strstr/stristr
//---------------------
// silimal_text
// levelstein

 ?>
