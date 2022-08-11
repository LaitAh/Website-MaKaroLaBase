<?php

require __DIR__ . '/../vendor/autoload.php';
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);


// *** ROUTES *** //

$router->map(
  'GET',
  '/',
  [
    'method'     => 'home',
    'controller' => 'MainController'
  ],
  'home'
);
// TODO : Contact route, Bakery route & Error route


$match = $router->match();

if ($match !== false) {
  $methodToUse = $match['target']['method'];
  
  $controllerToUse = $match['target']['controller'];
  $controllerToUse = "App\Controllers\\" . $controllerToUse;
  
  $controller = new $controllerToUse;
  $controller->$methodToUse($match['params']);
} 
// else {
//   $controller = new App\Controllers\ErrorController;
//   $controller->error();
// }