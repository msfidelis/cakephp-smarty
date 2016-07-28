<?php

namespace App\Controller\Components\Estoques;

use Cake\Controller\Action;

/**
 * Classe responsável por gerar os combos da tela de estoque
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    02/06/2016
 */
class renderEstoqueClass extends Action {

  /**
   * Status da aba "NOVO"
   * @return type
   */
  public static function renderStatus() {
    return array(
      '' => 'SELECIONE',
      '1' => "ENTRADA",
      '2' => "SAIDA"
    );
  }

  public function renderMateriais() {
    $where = "stat = 1";
    $fields = array('id', 'nome');
    $this->controller->loadModel('Materiais');
    $materiais = $this->controller->Materiais->find('all', array(
          'fields' => $fields))->where($where);

    $array = array();
    foreach ($materiais as $material) {
      $array[$material->id] = $material->nome;
    }
    return $array;
  }

}
