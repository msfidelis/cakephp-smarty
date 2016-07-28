<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Controller Responsável pelas Views da Homepage
 * @author Matheus Scarpato Fidelis
 * @email msfidelis01@gmail.com
 * @version $Revision: 1.0 
 * @date 27/07/2016 
 */
class HomepageController extends AppController {

  public function beforeFilter(Event $event) {
    $this->Auth->allow('index', 'contact');
  }

  public function beforeRender(Event $event) {
    parent::beforeRender($event);
    $this->viewBuilder()->layout('material');
  }

  public function index() {
    
  }
  
  public function contact() {
    
  }

}
