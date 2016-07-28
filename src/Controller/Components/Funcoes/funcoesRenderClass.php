<?php
namespace App\Controller\Components\Funcoes;

use Cake\Controller\Action;
/**
 *
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    04/06/2016
 */
class funcoesRenderClass extends Action {
  
 
  public static function trataPostFuncoes ($data) {
    return array(
      'descricao' => $data['descricao'],
      'stat' => 1
    );
  }
}
