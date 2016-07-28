<script src="/js/Validacoes/indexClientes.js" type="text/javascript"></script>
<div class="clientes index large-9 medium-8 columns content">
    <div class="card-header">
        <div class="card-title">
            <div class="title">Clientes</div>
        </div>
    </div>
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="/clientes" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
            <li role="presentation" class=""><a href="/clientes/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
        </ul>
        <br>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="card-body col-md-10">
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>{$this->Paginator->sort('id')}</th>
                            <th>{$this->Paginator->sort('nome')}</th>
                            <th>{$this->Paginator->sort('telefone')}</th>
                            <th>{$this->Paginator->sort('email')}</th>
                            <th>{$this->Paginator->sort('endereco')}</th>
                            <th>{$this->Paginator->sort('Status')}</th>
                            <th>{$this->Paginator->sort('Criado')}</th>
                            <th>{$this->Paginator->sort('Modificado')}</th>
                            <th class="actions">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $clientes as $cliente}
                          <tr>
                              <td>{$this->Number->format($cliente->id)}</td>
                              <td>{$cliente->nome}</td>
                              <td>{$cliente->telefone}</td>
                              <td>{$cliente->email}</td>
                              <td>{$cliente->endereco}</td>
                              <td>{$this->Number->format($cliente->stat)}</td>
                              <td>{$cliente->created}</td>
                              <td>{$cliente->modified}</td>
                              <td class="actions">
                                  {$this->Html->link(__('Detalhes'), ['action' => 'view', $cliente->id], ['class' => 'btn btn-xs btn-info'])}
                                  {$this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id], ['class' => 'btn btn-xs btn-success'])}
                                  {$this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['class' => 'btn btn-xs btn-danger'], ['confirm' => __('Tem certeza que deseja deletar o registro # {0}?', $cliente->id)])}
                              </td>
                          </tr>
                          {/foreach}
                    </tbody>
                </table>
                <div class="paginator">
                    <ul class="pagination">
                        {$this->Paginator->prev( __('Anterior'))}
                        {$this->Paginator->numbers()}
                        {$this->Paginator->next(__('Proximo'))}
                    </ul>
                    <p>{$this->Paginator->counter()}</p>
                </div>
            </div>
        </div>
    </div>
</div>
