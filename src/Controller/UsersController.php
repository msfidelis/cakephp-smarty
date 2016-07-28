<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\Components\CryptoClass;
use Cake\Event\Event;
use Cake\Utility\Security;

/**
 *
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    03/04/2016
 */
class usersController extends AppController {

  public function beforeRender(Event $event) {
    parent::beforeRender($event);
    $this->viewBuilder()->layout('login');
  }

  public function login() {
    if ($this->request->is('post')) {
      $userData = $this->validaUsuario($this->request->data);
      if ($userData) {
        $this->Auth->setUser($userData);
        return $this->redirect($this->Auth->redirectUrl());
      }
    }
  }

  public function logout() {
    return $this->redirect($this->Auth->logout());
  }

  private function validaUsuario($post) {
    $cryptoClass = new CryptoClass();
    $password = $cryptoClass->generateHash($post['password']);

    $where = array(
      'password' => $password,
      'email' => $post['email']
    );

    $user = $this->Users->find()->where($where)->first();

    if ($user) {
      $data = array(
        'id' => $user['id'],
        'name' => $user['name'],
        'username' => $user['username']
      );
      return $data;
    } else {
      return null;
    }
  }

  private function crypherPlainText($plain) {
    $key = Security::salt();
    return Security::hash($plain, 'sha256', $key);
  }

}
