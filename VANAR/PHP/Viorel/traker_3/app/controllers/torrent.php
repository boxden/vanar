<?php

class TorrentController{

 static function create(){
   if(empty($_POST))
 r( "torrentin-form" , []);
  else{
    // public $type;
    // public $gen;
    // public $name;
    // public $file;
    // public $image;
    // public $description;

    $type   = strip_tags(trim($_POST['type']));
    $gen    = strip_tags(trim($_POST['gen']));
    $name   = ucfirst(strip_tags(trim($_POST['name'])));
    @$file  = $_FILES['torrent'];
    @$image = $_FILES['photo'];
    $description =strip_tags(trim($_POST['description']));

    if( !TorrentController::isValideName( $name )){
    r("torrentin-form" , ["error" =>"Too short name"]);
    die;
  }elseif( !TorrentController::isValideFile( $file )){
    r("torrentin-form" , ["error" =>"Incorect type of file"]);
    die;
  }elseif( !TorrentController::isValideName( $type )){
  r("torrentin-form" , ["error" =>"Too short type"]);
  die;
}elseif( !TorrentController::isValideName( $gen )){
r("torrentin-form" , ["error" =>"Too short gen"]);
die;
}elseif( !TorrentController::isValideDescription( $description )){
r("torrentin-form" , ["error" =>"Too short description"]);
die;
}elseif( !TorrentController::isValideImage( $image )){
r("torrentin-form" , ["error" =>"incorect image type onle JPEG is admitet"]);
die;
}
else {


    $torrent = new torrent(  $type, $gen, $name, $file, $image, $description );
    $torrent->save();
      echo "Register!!!";
  }
 }
 }
 static function isValideName( $name ){
   return preg_match( '/^[A-Za-z][A-Za-z0-9]{2,31}$/', $name);
 }
 static function isValideFile( $file ){
   return ($file['type'] == 'application/x-bittorrent');
 }
 static function isValideDescription( $description ){
   return (strlen($description)> 5);
 }

 static function isValideImage( $image ){
   return ($image['type'] == 'image/jpeg');
 }

 static function list(){
   $torrents = Torrent::all();
foreach ($torrents as &$torrent) {
  var_dump($torrent);
  
}


   r("torrent-list", ["torrents"=>$torrents]);
 }



}
