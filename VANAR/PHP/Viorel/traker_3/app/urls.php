<?php
// Lista de cai prelucrate
// Router::get("hello", function(){echo "Hello";});
// Router::get("bye", function(){echo "bye";});
// Router::get("logout", function(){echo "logout";});

Router::get("user/create", "UserController::create");
Router::get("user/delte", "UserController::test");
Router::get("user/profile", "UserController::test");
Router::get("user/list", "UserController::list");
Router::get("user/login", "UserController::login");
Router::get("user/logout", "UserController::test");


Router::get("user/test", "UserController::test");
Router::get("user/all", "UserController::all");
Router::get("torrent/list", "TorrentController::list");
Router::get("torrent/create", "TorrentController::create");
