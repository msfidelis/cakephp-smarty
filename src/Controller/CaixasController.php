<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    16/05/2016
 */

class CaixasController extends AppController {

  var $statCriacaoDefaul = 1;
  var $msgSucess = "Material salvo com sucesso!";
  var $msgError = "Erro ao salvar o material";

  public function index() {
    $where = 'stat = 1';
    $query = $this->Caixas->find()->where($where);
    //$caixas = $this->paginate($this->Caixas);

    $this->paginate = array(
      'limit' => 10
    );

    $materiais = $this->paginate($query);

    $this->set(compact('caixas'));
    $this->set('_serialize', ['caixas']);
  }

  /**
   * View method
   *
   * @param string|null $id Caixa id.
   * @return \Cake\Network\Response|null
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function view($id = null) {
    $caixa = $this->Caixas->get($id, [
      'contain' => []
    ]);

    $this->set('caixa', $caixa);
    $this->set('_serialize', ['caixa']);
  }

  /**
   * Add method
   *
   * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $caixa = $this->Caixas->newEntity();
    if ($this->request->is('post')) {
      $caixa = $this->Caixas->patchEntity($caixa, $this->request->data);
      if ($this->Caixas->save($caixa)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The caixa could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('caixa'));
    $this->set('_serialize', ['caixa']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Caixa id.
   * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $caixa = $this->Caixas->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $caixa = $this->Caixas->patchEntity($caixa, $this->request->data);
      if ($this->Caixas->save($caixa)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The caixa could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('caixa'));
    $this->set('_serialize', ['caixa']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Caixa id.
   * @return \Cake\Network\Response|null Redirects to index.
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $caixa = $this->Caixas->get($id);
    if ($this->Caixas->delete($caixa)) {
      $this->Flash->success(__('The caixa has been deleted.'));
    } else {
      $this->Flash->error(__('The caixa could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

}
