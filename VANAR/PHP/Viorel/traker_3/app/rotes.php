<?php
// url -> controller/apache_get_version
// url -> view

class Router{

  static $list = [];
  // adresa noua dupa metoda get
  static function get( $url, $callback){
    Router::$list[] = [
      'url'    => $url,
      'method' => 'get',
      'action' => $callback
    ];
  }
  // adresa noua dupa metoda get
  static function post( $url, $callback ){
    Router::$list[] = [
      'url'    => $url,
      'method' => 'post',
      'action' => $callback
    ];
  }
  // executa actiunea pentru adresa indicata
  static function execute( $url, $method="get" ){
    $found = false;
    foreach(Router::$list as $route ){
      if ($route["url"] == $url and $route["method"] == $method )
      {
        /// apelut functiei fara nume
        $route["action"]();
        $found = true;
      }
    }
    if(!$found){
      echo "404";
    }
  }
}

// Router::get("hellow", function(){ echo })
