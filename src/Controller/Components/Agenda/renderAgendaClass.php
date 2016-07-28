<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Components\Agenda;

use App\Controller\Components\Tools;
use Cake\Controller\Action;

/**
 * Classe responsável por renderizar os itens relacionados a entidade
 * de agendamento 
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    21/06/2016
 */
class renderAgendaClass extends Action {

  /**
   * Retorna um array para criação de um combo de clientes com id e nome
   */
  public function renderClientes() {
    $where = 'stat = 1';
    $fields = array('id', 'nome');
    $this->controller->loadModel('Clientes');
    $clientes = $this->controller->Clientes->find('all', array(
          'fields' => $fields))->where($where)->toArray();

    $array = array("" => "SELECIONE");
    foreach ($clientes as $cliente) {
      $array[$cliente->id] = $cliente->nome;
    }
    return $array;
  }
  
  public function renderUsuarios() {
    $where = 'stat = 1';
    $fields = array('id', 'NAME');
    $this->controller->loadModel('Users');
    
    $usuarios = $this->controller->Users->find('all', array(
      'fields' => $fields))->where($where)->toArray();
    
    $array = array("" => "SELECIONE");
    
    foreach ($usuarios as $usuario) {
      $array[$usuario->id] = $usuario->NAME;
    }
    
    return $array;
  }

  /**
   * Retorna um array para a criação do compo de serviços
   * @return type
   */
  public function renderServicos() {
    $where = 'stat = 1';
    $fields = array('id', 'nome');
    $this->controller->loadModel('Servicos');
    $servicos = $this->controller->Servicos->find('all', array(
          'fields' => $fields))->where($where)->toArray();

    $array = array("" => "SELECIONE");
    foreach ($servicos as $servico) {
      $array[$servico->id] = $servico->nome;
    }

    return $array;
  }

  /**
   * Retorna o status do agendamento
   * @return type/
   */
  public function renderStatusAgenda() {
    return array(
      '' => 'SELECIONE',
      1 => 'AGUARDANDO',
      2 => 'ADIADO',
      3 => 'CONCLUIDO',
      4 => 'CANCELADO'
    );
  }

  public static function trataPostAgendamento($i) {
    return array(
      'dt_agendamento' => Tools::formataDataToDatetime($i['dt_agendamento']),
      'id_cliente' => $i['id_cliente'] ? (int) $i['id_cliente'] : NULL,
      'id_servico' => $i['id_servico'] ? (int) $i['id_servico'] : NULL,
      'obs' => $i['obs'] ? (string) trim($i['obs']) : NULL,
      'status_agendamento' => $i['status_agendamento'] ? (int) $i['status_agendamento'] : NULL,
      'stat' => 1
    );
  }

  public function renderAll() {
    $where = 'Agendas.stat = 1';
    $this->controller->loadModel('Agendas');
    //Pega os dados da listagem
    $registros = $this->controller->Agendas
        ->find('all')
        ->select([
          'Agendas.id', 'Agendas.id_cliente', 'Agendas.id_servico',
          'Agendas.id_usuario', 'Agendas.obs', 'Agendas.stat', 'Agendas.valor_pago',
          'Agendas.status_agendamento', 'Agendas.created', 'Agendas.modified',
          'servico' => 's.nome',
          'servico_des' => 's.descricao',
          'cliente' => 'c.nome'])
        ->where($where)
        ->order(['Agendas.id' => 'DESC'])
        ->join([
          'table' => 'clientes',
          'alias' => 'c',
          'type' => 'LEFT',
          'conditions' => 'c.id = Agendas.id_cliente'])
        ->join([
      'table' => 'servicos',
      'alias' => 's',
      'type' => 'LEFT',
      'conditions' => 's.id = Agendas.id_servico'
    ]);

    return $registros;
  }

}
