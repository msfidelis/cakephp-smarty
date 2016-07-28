<?php

namespace App\Controller\Components\Usuarios;

use Cake\Controller\Action;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    04/06/2016
 */
class usuariosRenderClass extends Action {

  private $where = "Users.stat = 1";

  /**
   * Renderiza os registros do combo de funções
   */
  public function renderFuncoes() {
    $this->controller->loadModel('Funcoes');
    $where = 'stat = 1';
    $fields = array('id', 'descricao');
    $funcoes = $this->controller->Funcoes->find('all', array(
          'fields' => $fields))->where($where);

    $array = array();
    foreach ($funcoes as $funcao) {
      $array[$funcao->id] = $funcao->descricao;
    }

    return $array;
  }

  public function getUsuariosData($where = null) {
    if (isset($where)) {
      $this->where = $where;
    }
    return $this->getUsersWithJoins();
  }
  
  public function getUser($id) {
    return $this->getRegister($id);
  }

  /**
   * Retorna os dados dos usuários do banco de dados
   * @param type $where clausula da pesquisa
   * @return type array 
   */
  private function getUsersWithJoins() {
    $this->controller->loadModel('Users');
    return $this->controller->Users->find()->select([
          'funcao' => 'f.descricao',
          'id', 'NAME', 'email', 'PASSWORD', 'created', 'modified',
        ])->join([
          'table' => 'funcoes',
          'alias' => 'f',
          'type' => 'LEFT',
          'conditions' => 'Users.tipo = f.id']
        )->where($this->where);
  }

  private function getRegister($id) {
    $this->controller->loadModel('Users');
    return  $this->controller->Users->get($id, [
      'contain' => []
    ]);
  }

}
