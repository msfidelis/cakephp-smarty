<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\Components\Funcoes\funcoesRenderClass;


/**
 * @author  Matheus Scarpato Fidelis
 * @email   msfidelis01@gmail.com
 * @date    04/06/2016
 */
class FuncoesController extends AppController {

  var $msgSucess = "Registro salvo com sucesso!";
  var $msgError = "Erro ao salvar o registro";

  public function index() {
    $where = 'stat = 1';
    $query = $this->Funcoes->find()->where($where);
    $this->paginate = array(
      'limit' => 10
    );
    $funcoes = $this->paginate($query);
    $this->set(compact('funcoes'));
    $this->set('_serialize', ['funcoes']);
  }

  public function add() {
    $funco = $this->Funcoes->newEntity();
    if ($this->request->is('post')) {
      $data = funcoesRenderClass::trataPostFuncoes($this->request->data);
      $funco = $this->Funcoes->patchEntity($funco, $data);
      if ($this->Funcoes->save($funco)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('error', $this->msgError);
      }
    }
    $this->set(compact('funco'));
    $this->set('_serialize', ['funco']);
  }

  public function edit($id = null) {
    $funco = $this->Funcoes->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $funco = $this->Funcoes->patchEntity($funco, $this->request->data);
      if ($this->Funcoes->save($funco)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('error', $this->msgError);
      }
    }
    $this->set(compact('funco'));
    $this->set('_serialize', ['funco']);
  }

  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $funcao = $this->Funcoes->get($id);
    if ($this->Funcoes->delete($funcao)) {
      $this->setAlert('success', 'Registro excluído com sucesso!');
    } else {
      $this->setAlert('danger', 'Erro ao excluir o registro');
    }
    return $this->redirect(['action' => 'index']);
  }

}
