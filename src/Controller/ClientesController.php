<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    13/05/2016
 */
class ClientesController extends AppController {

  var $statCriacaoDefaul = 1;
  var $msgSucess = "Cliente salvo com sucesso!";

  public function index() {
    $where = 'stat = 1';
    $query = $this->Clientes->find()->where($where);
    $this->paginate = array(
      'limit' => 10
    );
    $clientes = $this->paginate($query);
    $this->set(compact('clientes'));
    $this->set('_serialize', ['clientes']);
  }

  public function view($id = null) {
    $cliente = $this->Clientes->get($id, [
      'contain' => []
    ]);
    $this->set('cliente', $cliente);
    $this->set('_serialize', ['cliente']);
  }

  public function add() {
    $cliente = $this->Clientes->newEntity();
    if ($this->request->is('post')) {
      $data = $this->trataCliente($this->request->data);
      $cliente = $this->Clientes->patchEntity($cliente, $data);
      if ($this->Clientes->save($cliente)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', 'Erro ao Cadastrar o Cliente');
      }
    }
  }

  public function edit($id = null) {
    $cliente = $this->Clientes->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
      if ($this->Clientes->save($cliente)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', 'Erro ao salvar o cliente');
      }
    }
    $this->set(compact('cliente'));
    $this->set('_serialize', ['cliente']);
  }

  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $cliente = $this->Clientes->get($id);
    if ($this->Clientes->delete($cliente)) {
      $this->setAlert('success', 'Cliente deletado com sucesso!');
    } else {
      $this->setAlert('danger', 'Erro ao excluir o cliente');
    }
    return $this->redirect(['action' => 'index']);
  }

  private function trataCliente($post) {
    return array(
      'nome' => $post['nome'] ? $post['nome'] : NULL,
      'telefone' => $post['telefone'] ? $post['telefone'] : NULL,
      'email' => $post['email'] ? $post['email'] : NULL,
      'endereco' => $post['endereco'] ? $post['endereco'] : NULL,
      'observacao' => $post['observacao'] ? $post['observacao'] : NULL,
      'stat' => $this->statCriacaoDefaul
    );
  }
  

}
