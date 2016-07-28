<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

/**
 *
 * @author  Matheus Scarpato Fidelis
 * @email   msfidelis@gmail.com
 * @date    11/04/2016
 */
class IndexController extends AppController {

  public function beforeRender(Event $event) {
    parent::beforeRender($event);
    $this->viewBuilder()->layout('login');
  }

  public function index() {
    
  }

}
