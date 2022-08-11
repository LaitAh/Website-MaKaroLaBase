<?php

namespace app\Controllers;

class CoreController {

  /**
   * Display the pages
   *
   * @param [type] $viewName
   * @param array $viewData
   * @return void
   */
  public function show($viewName, $viewData = []) {
    global $router;
  
    $absolutUrl = $_SERVER['BASE_URI'];
  
    extract($viewData);
  
    require_once __DIR__ . '/../view/header.tpl.php';
    require_once __DIR__ . '/../view/' . $viewName . '.tpl.php';
    require_once __DIR__ . '/../view/footer.tpl.php';
  }
}