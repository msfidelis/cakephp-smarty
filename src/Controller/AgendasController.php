<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\Components\Agenda\renderAgendaClass;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   msfidelis01@gmail.com
 * @date    16/05/2016
 */
class AgendasController extends AppController {

  var $statCriacaoDefaul = 1;
  var $msgSucess = "Registro salvo com sucesso!";
  var $msgError = "Erro ao salvar o registro";

  public function index() {

    $this->paginate = array(
      'limit' => 20
    );

    $model = new renderAgendaClass();
    $agendas = $this->paginate($model->renderAll());

    $this->set(compact('agendas'));
    $this->set('_serialize', ['agendas']);
  }

  public function view($id = null) {
    $agenda = $this->Agendas->get($id, [
      'contain' => []
    ]);

    $this->set('agenda', $agenda);
    $this->set('_serialize', ['agenda']);
  }

  public function add() {
    $agenda = $this->Agendas->newEntity();
    if ($this->request->is('post')) {
      $data = renderAgendaClass::trataPostAgendamento($this->request->data);
      //var_dump($data); die();
      $agenda = $this->Agendas->patchEntity($agenda, $data);
      if ($this->Agendas->save($agenda)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }
    $clientes = (new renderAgendaClass)->renderClientes();
    $servicos = (new renderAgendaClass)->renderServicos();
    $usuarios = (new renderAgendaClass)->renderUsuarios();
    $status = (new renderAgendaClass)->renderStatusAgenda();

    $this->set('clientes', $clientes);
    $this->set('servicos', $servicos);
    $this->set('usuarios', $usuarios);
    $this->set('status', $status);
    $this->set(compact('agenda'));
    $this->set('_serialize', ['agenda']);
  }

  public function edit($id = null) {
    $agenda = $this->Agendas->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $agenda = $this->Agendas->patchEntity($agenda, $this->request->data);
      if ($this->Agendas->save($agenda)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }


    $clientes = (new renderAgendaClass)->renderClientes();
    $servicos = (new renderAgendaClass)->renderServicos();
    $usuarios = (new renderAgendaClass)->renderUsuarios();
    $status = (new renderAgendaClass)->renderStatusAgenda();

    $this->set('clientes', $clientes);
    $this->set('servicos', $servicos);
    $this->set('usuarios', $usuarios);
    $this->set('status', $status);
    
    $this->set(compact('agenda'));
    $this->set('_serialize', ['agenda']);
  }

  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $agenda = $this->Agendas->get($id);
    if ($this->Agendas->delete($agenda)) {
      $this->Flash->success(__('The agenda has been deleted.'));
    } else {
      $this->Flash->error(__('The agenda could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

}
