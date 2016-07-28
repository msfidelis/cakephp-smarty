<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Components\Usuarios;

use Cake\Controller\Action;
use App\Controller\Components\CryptoClass;
use App\Controller\Components\Usuarios\usuariosRenderClass;

/**
 *
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    04/06/2016
 */
class usuariosSaveClass extends Action {

  var $msgSucess = "Registro salvo com sucesso!";
  var $msgError = "Erro ao salvar o registro";

  public function addNew(array $array) {
    $data = $this->trataDados($array);

    $this->controller->loadModel('Users');
    $users = $this->controller->Users->newEntity();
    $users = $this->controller->Users->patchEntity($users, $data);
    if ($this->controller->Users->save($users)) {
      $this->controller->setAlert('success', $this->msgSucess);
      return true;
    } else {
      $this->controller->setAlert('danger', $this->msgError);
      return false;
    }
  }

  public function updUser(array $array, $users) {
    $data = $this->trataDados($array);
    $this->controller->loadModel('Users');
    $users = $this->controller->Users->patchEntity($users, $data);
    if ($this->controller->Users->save($users)) {
      $this->controller->setAlert('success', $this->msgSucess);
      return true;
    } else {
      $this->controller->setAlert('danger', $this->msgError);
      return false;
    }
  }

  public function trocaSenha($post) {
    $render = new usuariosRenderClass();
    if (!empty($post['id'])) {
      $user = $render->getUser($post['id']);
      $data = $this->trataPasswd($post);
      $this->controller->loadModel('Users');
      $user = $this->controller->Users->patchEntity($user, $data);
      
      if ($this->controller->Users->save($user)) {
        return array('return' => 'true');
      } else {
        return array('return' => 'false');
      }
    }
  }
  
  private function trataPasswd($array) {
    $crypt = new CryptoClass;
    return array(
      'PASSWORD' => $crypt->generateHash($array['password'])
    );
  }

  private function trataDados($data) {
    $array = array(
      'NAME' => $data['NAME'],
      'email' => $data['email'],
      'username' => $data['username'],
      'tipo' => $data['tipo'],
      'stat' => 1
    );

    if (!empty($data['password'])) {
      $crypt = new CryptoClass;
      $array['PASSWORD'] = $crypt->generateHash($data['password']);
    }

    return $array;
  }

}
