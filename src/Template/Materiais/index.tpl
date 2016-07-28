<div class="clientes index large-9 medium-8 columns content">
    <div class="card-header">
        <div class="card-title">
            <div class="title">Materiais</div>
        </div>
    </div>
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="/materiais" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
            <li role="presentation" class=""><a href="/materiais/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
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
                            <th>{$this->Paginator->sort('descricao')}</th>
                            <th>{$this->Paginator->sort('created')}</th>
                            <th>{$this->Paginator->sort('modified')}</th>
                            <th class="actions">{__('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $materiais as $material}
                            <tr>
                                <td>{$this->Number->format($material->id)}</td>
                                <td>{$material->nome}</td>
                                <td>{$material->descricao}</td>
                                <td>{$material->created}</td>
                                <td>{$material->modified}</td>
                                <td class="actions">
                                    {$this->Html->link(__('Detalhes'), ['action' => 'view', $material->id], ['class' => 'btn btn-xs btn-info'])}
                                    {$this->Html->link(__('Editar'), ['action' => 'edit', $material->id], ['class' => 'btn btn-xs btn-success'])}
                                    {$this->Form->postLink(__('Delete'), ['action' => 'delete', $material->id], ['class' => 'btn btn-xs btn-danger'], ['confirm' => __('Tem certeza que deseja deletar o registro # {0}?', $material->id)])}
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