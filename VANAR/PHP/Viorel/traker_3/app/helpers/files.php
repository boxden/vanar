<?php

use Gregwar\Image\Image;

class FileHelper{

  public static function getImage(   $image_name ){
    $dst = "./public/images/$image_name";
    @$data_image = file_get_contents($dst);
    if($data_image){
      $ext = explode("." , $image_name  );
      $ext = $ext[1];
      if((isset($_GET['w'])) || (isset($_GET['h'])) ) {
      $image = Image::open($dst);
      $image->resize( $_GET['w'] , $_GET['h'] , "black");
      header('content-type:image/jpeg');
      print file_get_contents($image);

    } else if(isset($_GET['size'])){
      $image = Image::open($dst);
           if(!isset($_GET['resize'])){
               if($_GET['size'] == "small"){
                 $image->cropResize( 100 , 100 );
               }
               if($_GET['size'] == "medium"){
               $image->cropResize( 400 , 300 , "black");
              }
              if($_GET['size'] == "large"){
              $image->cropResize( 800 , 600 , "black");
             }
         }else {
           if($_GET['size'] == "small"){
             $image->resize( 100 , 100 );
           }
           if($_GET['size'] == "medium"){
           $image->resize( 400 , 300 , "black");
           }
           if($_GET['size'] == "large"){
           $image->resize( 800 , 600 , "black");
           }

         }


      header('content-type:image/jpeg');
      print file_get_contents($image);
     }
     else {
      if( $ext == "jpg" ) $type='image/jpeg';
      if( $ext == "png" ) $type='image/png';
      if( $ext == "gif" ) $type='image/gif';
      header('content-type:'.$type);

      print $data_image;
   }
    //var_dump($data_image);
    //print $data_image;

    } else {
      print "Not Found";
    }
  }
 public static function getStyle( $css_name ){
   @$css_data = file_get_contents("./public/css/$css_name");
   if( $css_data ){
      header('content-type:text.css');
      print $css_data;
   }
   else {
print "Not found";

   }
 }
}
 ?>
