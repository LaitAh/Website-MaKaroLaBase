<?php

namespace App\Controllers;

use App\Controllers\CoreController;

class MainController extends CoreController {

  /**
   * Manages the display of the home page
   *
   * @return void
   */
  public function home() {
    $this->show('home', $viewDate = []);
  }
}