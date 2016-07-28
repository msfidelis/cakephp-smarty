<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Components;
use Cake\Utility\Security;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    04/06/2016
 */
class CryptoClass {
  
  public function generateHash($text) {
    return $this->crypherPlainText($text);
  }

  private function crypherPlainText($plain) {
    $key = Security::salt();
    return Security::hash($plain, 'sha256', $key);
  }

}
