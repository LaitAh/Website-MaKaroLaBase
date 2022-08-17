<?php

require __DIR__ . '/../vendor/autoload.php';
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);


// *** ROUTES *** //

// --- HOME PAGE ---//
$router->map(
  'GET',
  '/',
  [
    'method'     => 'home',
    'controller' => 'MainController'
  ],
  'home'
);

// --- BAKERY PAGE ---//
$router->map(
  'GET',
  '/patisserie',
  [
    'method' => 'bakery',
    'controller' => 'MenuController',
  ],
  'bakery'
);

// --- BOUFFE PAGE ---//
$router->map(
  'GET',
  '/bouffebox',
  [
    'method' => 'bouffebox',
    'controller' => 'MenuController',
  ],
  'bouffebox'
);

// --- BEACH PAGE ---//
$router->map(
  'GET',
  '/beachBox',
  [
    'method' => 'beachbox',
    'controller' => 'MenuController',
  ],
  'beachbox'
);

// --- CONTACT PAGE ---//
$router->map(
  'GET',
  '/contact',
  [
    'method' => 'contact',
    'controller' => 'ContactController',
  ],
  'contact'
);

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