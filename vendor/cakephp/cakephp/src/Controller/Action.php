<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cake\Controller;
use \App\Controller\AppController;
use App\Controller\Components\Tools;
/**
 *
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    16/05/2016
 */
abstract class Action extends Tools {
  var $controller;
  
  public function __construct() {
    $this->controller = new AppController();
  }
  
  
}
