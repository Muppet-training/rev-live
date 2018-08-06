<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// print_r($request_uri);

// Route it up!
switch ($request_uri[0]) {
  // Home page
  case '/':
      require 'services/home.php';
      break;
  // Media page
  case '/research':
      require 'services/research.php';
      break;
  // About page
  case '/paid':
      require 'services/paid-media.html';
      break;
  // Everything else
  default:
      header('HTTP/1.0 404 Not Found');
      require '../views/404.php';
      break;
}
