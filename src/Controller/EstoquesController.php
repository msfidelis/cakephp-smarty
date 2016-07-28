<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\Components\Estoques\renderEstoqueClass;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   msfidelis01@gmail.com
 * @date    16/05/2016
 */
class EstoquesController extends AppController {

  var $statCriacaoDefaul = 1;
  var $msgSucess = "Registro salvo com sucesso!";
  var $msgError = "Erro ao salvar o registro";

  public function index() {
    $this->paginate = array('limit' => 20);
    $where = 'Estoques.stat = 1';

    //Pega os dados da listagem
    $estoques = $this->paginate($this->Estoques
            ->find('all')
            ->select(['id' => 'Estoques.id',
              'qtd' => 'Estoques.quantidade',
              'material' => 'm.nome',
              'created', 'modified', 'quantidade',
              'stat', 'tipo_movimento', 'dt_movimentacao'])
            ->where($where)
            ->order(['id' => 'DESC'])
            ->join([
              'table' => 'materiais',
              'alias' => 'm',
              'type' => 'LEFT',
              'conditions' => 'm.id = Estoques.id_material',
    ]));

    $this->set(compact('estoques'));
    $this->set('_serialize', ['estoques']);
  }

  /**
   * View Controller
   * @param type $id
   */
  public function view($id = null) {
    $estoque = $this->Estoques->get($id, [
      'contain' => []
    ]);

    $this->set('estoque', $estoque);
    $this->set('_serialize', ['estoque']);
  }

  public function add() {
    $estoque = $this->Estoques->newEntity();
    if ($this->request->is('post')) {
      $data = $this->trataMovimentacao($this->request->data);
      $estoque = $this->Estoques->patchEntity($estoque, $data);
      if ($this->Estoques->save($estoque)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }

    //Carrega os materiais
    $renderClass = new renderEstoqueClass();
    $materiais = $renderClass->renderMateriais();
    $this->set('materiais', $materiais);

    //Carrega os status
    $status = renderEstoqueClass::renderStatus();
    $this->set('status', $status);

    //Serializa os componentes do estoque
    $this->set(compact('estoque'));
    $this->set('_serialize', ['estoque']);
  }

  public function edit($id = null) {
    $estoque = $this->Estoques->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $estoque = $this->Estoques->patchEntity($estoque, $this->request->data);
      if ($this->Estoques->save($estoque)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }

    //Carrega os materiais
    $renderClass = new renderEstoqueClass();
    $materiais = $renderClass->renderMateriais();
    $this->set('materiais', $materiais);

    //Carrega os status
    $status = renderEstoqueClass::renderStatus();
    $this->set('status', $status);
    
    $this->set(compact('estoque'));
    $this->set('_serialize', ['estoque']);
  }

  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $estoque = $this->Estoques->get($id);
    if ($this->Estoques->delete($estoque)) {
      $this->setAlert('success', 'Registro excluído com sucesso!');
    } else {
      $this->setAlert('danger', 'Erro ao excluir o registro');
    }
    return $this->redirect(['action' => 'index']);
  }

  private function trataMovimentacao($post) {
    return array(
      'id_material' => $post['id_material'],
      'tipo_movimento' => $post['tipo_movimento'],
      'quantidade' => $post['quantidade'],
      'dt_movimentacao' => date("Y-m-d", strtotime(str_replace("/", "-", $post["dt-movimentacao"]))),
      'stat' => 1
    );
  }

}
