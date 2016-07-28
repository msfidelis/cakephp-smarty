<?php

namespace App\Controller;
use App\Controller\AppController;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   msfidelis01@gmail.com
 * @date    16/05/2016
 */

class MateriaisController extends AppController {

  var $statCriacaoDefaul = 1;
  var $msgSucess = "Material salvo com sucesso!";
  var $msgError = "Erro ao salvar o material";

  public function index() {
    $where = 'stat = 1';
    $query = $this->Materiais->find()->where($where);
    $this->paginate = array('limit' => 20);
    $materiais = $this->paginate($query);
    $this->set(compact('materiais'));
    $this->set('_serialize', ['materiais']);
  }

  public function view($id = null) {
    $materiai = $this->Materiais->get($id, [
      'contain' => []
    ]);
    $this->set('materiai', $materiai);
    $this->set('_serialize', ['materiai']);
  }

  public function add() {
    $materiai = $this->Materiais->newEntity();
    if ($this->request->is('post')) {
      $data = $this->trataMaterial($this->request->data);

      $materiai = $this->Materiais->patchEntity($materiai, $data);
      if ($this->Materiais->save($materiai)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }
    $this->set(compact('materiais'));
    $this->set('_serialize', ['materiais']);
  }

  public function edit($id = null) {
    $materiai = $this->Materiais->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $materiai = $this->Materiais->patchEntity($materiai, $this->request->data);
      if ($this->Materiais->save($materiai)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }
    $this->set(compact('materiai'));
    $this->set('_serialize', ['materiai']);
  }

  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $materiai = $this->Materiais->get($id);
    if ($this->Materiais->delete($materiai)) {
      $this->setAlert('success', 'Registro deletado com sucesso');
    } else {
      $this->setAlert('danger', 'Erro ao deletar o registro');
    }
    return $this->redirect(['action' => 'index']);
  }

  private function trataMaterial($post) {
    return array(
      'nome' => $post['nome'] ? $post['nome'] : NULL,
      'descricao' => $post['descricao'] ? $post['descricao'] : NULL,
      'stat' => $this->statCriacaoDefaul
    );
  }

}
