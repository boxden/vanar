<?php

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
// skeleton of user(create,read ,update, delete)

class Torrent{
  public $type;
  public $gen;
  public $name;
  public $file;
  public $image;
  public $description;


  //////////////////////////////////////////////////////// create
  public function __construct( $type, $gen, $name, $file, $image, $description ){

$this->type  = $type;
$this->gen   = $gen;
$this->name  = $name;
$this->file  = $file;
$this->image = $image;
$this->description = $description;

 }
 /////////////////////////////////////////////// save user to disk/database
public function save(){
  $uuid1 = Uuid::uuid1();

move_uploaded_file($this->file['tmp_name'], "public/torrent/TorrentFiles/{$uuid1->toString()}.torrent" );
$this->file= "public/torrent/TorrentFiles/{$uuid1->toString()}.torrent" ;
  imagejpeg( imagecreatefromjpeg($this->image['tmp_name']), "public/torrent/images/{$uuid1->toString()}.jpg");
$this->image="public/torrent/images/{$uuid1->toString()}.jpg";
 $torrent = json_encode( $this );
  file_put_contents( "database/torrent/{$uuid1->toString()}.json" , $torrent ) ; //

 }
 //////////////////////////////////////////// Find torrent function
 public static function find( $words ){
   // 1) scan
   $files = scandir('database/torrent');
   unset($files[0]);
   unset($files[1]);
//stristr($email, 'e')
$Findtorrent = [];
   foreach ($files as $file) {
     $torrent = json_decode(file_get_contents('database/torrent/'.$file)) ;
     var_dump(stripos( $torrent->gen , $words));
     if(( stripos( $torrent->name , $words) !==FALSE ) or ( stripos( $torrent->gen , $words ) !==FALSE ) or ( stripos( $torrent->type , $words )!==FALSE ) ) {
      $Findtorrent[]= $torrent;
     }
   }
   return $Findtorrent;
 }
 ///////////////////////////////////////////// List torrent function
 public static function all(){
   $files = scandir('database/torrent');
   unset($files[0]);
   unset($files[1]);
   $allTorrent;
   foreach ($files as $file) {
     $torrent = json_decode(file_get_contents('database/torrent/'.$file)) ;
     $allTorrent[]= $torrent;
   }
   return $allTorrent;
 }



}
