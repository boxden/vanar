<?php include 'templates/navigation.php' ?>
<hr>
<?php
  // ?page=home / -> homepage
 // ?page=comments -> comments
 // ?page=newcomment -> form
//print_r( $_GET );

  // ROUTER //////////////////
  if ( isset($_GET["page"]) ) {
    $page = $_GET["page"];
  } else {
    $page = "home";
  }
  if ( $page == "home") {
    print "homepage";
  } elseif ( $page == "comments") {
    print "coments page";
  } elseif ( $page == "newcomment") {
    include 'templates/comment-form.php';
  } elseif ( $page == "contant") {
    print "contants form";
  }
  // ROUTER //////////////////
 ?>
