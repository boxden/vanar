<?php
// renders a page with twig
function r( $file_name, $data){
  global $twig;
  print $twig->render( $file_name.".tpl.php", $data);

}
