<script src="/js/Validacoes/indexClientes.js" type="text/javascript"></script>
<div class="agendas index large-9 medium-8 columns content">
    <div class="card-header">
        <div class="card-title">
            <div class="title">Agendas</div>
        </div>
    </div>
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="/agendas" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
            <li role="presentation" class=""><a href="/agendas/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
        </ul>
        <br>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="card-body col-md-10">
                <table class='table table-hover table-responsive'>
                    <thead>
                        <tr>
                            <th>{$this->Paginator->sort('id')}</th>
                            <th>{$this->Paginator->sort('Data do Agendament0')}</th>
                            <th>{$this->Paginator->sort('Cliente')}</th>
                            <th>{$this->Paginator->sort('Serviço ')}</th>
                            <th>{$this->Paginator->sort('Status do Agendamento')}</th>
                            <th>{$this->Paginator->sort('Criado')}</th>
                            <th>{$this->Paginator->sort('Modificado')}</th>
                            <th class="actions">{__('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $agendas as $agenda}
                            <tr>
                                <td>{$this->Number->format($agenda->id)}</td>
                                <td>{($agenda->dt_agendamento) }</td>
                                <td>{$agenda->cliente}</td>
                                <td>{$agenda->servico}</td>
                                <td>{$this->Number->format($agenda->status_agendamento) }</td>
                                <td>{h($agenda->created)}</td>
                                <td>{h($agenda->modified)}</td>
                                <td class="actions">
                                    {$this->Html->link(__('Detalhes'), ['action' => 'view', $agenda->id], ['class' => 'btn btn-xs btn-info'])}
                                    {$this->Html->link(__('Editar'), ['action' => 'edit', $agenda->id], ['class' => 'btn btn-xs btn-success'])}
                                    {$this->Form->postLink(__('Delete'), ['action' => 'delete', $agenda->id], ['class' => 'btn btn-xs btn-danger'], ['confirm' => __('Tem certeza que deseja deletar o registro # {0}?', $agenda->id)])}
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
