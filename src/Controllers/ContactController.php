<?php

namespace App\Controllers;

use App\Controllers\CoreController;

class ContactController extends CoreController {

  /**
   * Manages the display of the contact page
   *
   * @return void
   */
  public function contact() {
    $this->show('contact', $viewDate = []);
  }
}