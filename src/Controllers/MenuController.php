<?php

namespace App\Controllers;

use App\Controllers\CoreController;

class MenuController extends CoreController {

  /**
   * Manages the display of the bakery page
   *
   * @return void
   */
  public function bakery() {
    $this->show('bakery', $viewDate = []);
  }

  /**
   * Manages the display of the bouffeBox page
   *
   * @return void
   */
  public function bouffeBox() {
    $this->show('bouffebox', $viewDate = []);
  }

  /**
   * Manages the display of the beachBox page
   *
   * @return void
   */
  public function beachBox() {
    $this->show('beachbox', $viewDate = []);
  }
}