<?php
// load all that is necess.
require './app/helpers/composer/vendor/autoload.php';
include 'vendor/autoload.php';
require './app/helpers/files.php';
require './app/helpers/session.php';



$loader = new Twig_Loader_Filesystem('app/views');
$twig = new Twig_Environment($loader, array(
    'cache' => 'public/cache',
    'debug' => true
));

include './app/helpers/render.php';

/// Models

include 'app/models/user.php';
include 'app/models/torrent.php';


////////////////////// Controllers ////////////////


include 'app/controllers/user.php';
include 'app/controllers/torrent.php';




////// AT THE END !!!!!!!!
include 'app/rotes.php';
include 'app/urls.php';
if ( !empty($_GET) ){
    $url = key($_GET);
    Router::execute( $url );
}
