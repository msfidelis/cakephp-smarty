<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   msfidelis01@gmail.com
 * @date    16/05/2016
 */
class ServicosController extends AppController {

  var $statCriacaoDefaul = 1;
  var $msgSucess = "Registro salvo com sucesso!";
  var $msgError = "Erro ao salvar o registro";

  public function index() {
    $servicos = $this->paginate($this->Servicos);

    $this->set(compact('servicos'));
    $this->set('_serialize', ['servicos']);
  }

  public function view($id = null) {
    $servico = $this->Servicos->get($id, [
      'contain' => []
    ]);

    $this->set('servico', $servico);
    $this->set('_serialize', ['servico']);
  }

  public function add() {
    $servico = $this->Servicos->newEntity();
    if ($this->request->is('post')) {
      $servico = $this->Servicos->patchEntity($servico, $this->request->data);
      if ($this->Servicos->save($servico)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }
    $this->set(compact('servico'));
    $this->set('_serialize', ['servico']);
  }

  public function edit($id = null) {
    $servico = $this->Servicos->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $servico = $this->Servicos->patchEntity($servico, $this->request->data);
      if ($this->Servicos->save($servico)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }
    $this->set(compact('servico'));
    $this->set('_serialize', ['servico']);
  }

  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $servico = $this->Servicos->get($id);
    if ($this->Servicos->delete($servico)) {
      $this->Flash->success(__('The servico has been deleted.'));
    } else {
      $this->Flash->error(__('The servico could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

}
