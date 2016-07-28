<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">{$this->Html->link(__('Listar'), ['action' => 'index'])}</li>
        <li role="presentation" class="">{$this->Html->link(__('Novo'), ['action' => 'add'])}</li>
            </ul>
</nav>
<div class="tab-content">
    <div class="card-body col-md-10">
        <table class='table table-striped'>
            <thead>
                <tr>
                                        <th>{$this->Paginator->sort('id')}</th>
                                        <th>{$this->Paginator->sort('nome')}</th>
                                        <th>{$this->Paginator->sort('descricao')}</th>
                                        <th>{$this->Paginator->sort('stat')}</th>
                                        <th>{$this->Paginator->sort('valor_aproximado')}</th>
                                        <th>{$this->Paginator->sort('created')}</th>
                                        <th>{$this->Paginator->sort('modified')}</th>
                                        <th class="actions">{__('Actions')}</th>
                </tr>
            </thead>
            <tbody>
                {foreach $servicos as $servico}
                <tr>
                                        <td>{$this->Number->format($servico->id)}</td>
                                              <td>{$servico->nome}</td>
                                              <td>{$servico->descricao}</td>
                                              <td>{$this->Number->format($servico->stat)}</td>
                                              <td>{$this->Number->format($servico->valor_aproximado)}</td>
                                              <td>{$servico->created}</td>
                                              <td>{$servico->modified}</td>
                                              <td class="actions">
                        {$this->Html->link(__('View'), ['action' => 'view', $servico->id], ['class' => 'btn btn-xs btn-info'])}
                        {$this->Html->link(__('Edit'), ['action' => 'edit', $servico->id], ['class' => 'btn btn-xs btn-success'])}
                        {$this->Form->postLink(__('Delete'), ['action' => 'delete', $servico->id], ['class' => 'btn btn-xs btn-danger'])}
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
