<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\Components\Usuarios\usuariosRenderClass;
use App\Controller\Components\Usuarios\usuariosSaveClass;

/**
 *
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    04/06/2016
 */
class usuariosController extends AppController {

  public function index() {
    $class = new usuariosRenderClass();
    $query = $class->getUsuariosData();
    $this->paginate = array(
      'limit' => 10
    );
    $this->set('users', $query);
  }

  public function add() {
    $data = $this->request->data;
    if ($this->request->is('post')) {
      $saveClass = new usuariosSaveClass();
      if ($saveClass->addNew($data)) {
        return $this->redirect(['action' => 'index']);
      }
    }

    $renderClass = new usuariosRenderClass();
    $funcoes = $renderClass->renderFuncoes();
    $this->set('funcoes', $funcoes);
  }

  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $this->loadModel('Users');
    $user = $this->Users->get($id);
    if ($this->Users->delete($user)) {
      $this->setAlert('success', 'Usuario deletado com sucesso!');
    } else {
      $this->setAlert('danger', 'Erro ao excluir o usuario');
    }
    return $this->redirect(['action' => 'index']);
  }

  public function edit($id = null) {
    $renderClass = new usuariosRenderClass();
    $user = $renderClass->getUser($id);

    $funcoes = $renderClass->renderFuncoes();
    if ($this->request->is(['patch', 'post', 'put'])) {
      $saveClass = new usuariosSaveClass();
      if ($saveClass->updUser($this->request->data, $user)) {
        return $this->redirect(['action' => 'index']);
      }
    }
    $this->set('funcoes', $funcoes);
    $this->set(compact('user'));
    $this->set('_serialize', ['user']);
  }

  public function changepassword() {
    $class = new usuariosSaveClass();
    echo json_encode($class->trocaSenha($this->request->data));
    die();
  }

}
