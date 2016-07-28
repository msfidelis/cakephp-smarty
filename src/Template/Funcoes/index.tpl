<div class="clientes index large-9 medium-8 columns content">
    <div class="card-header">
        <div class="card-title">
            <div class="title">Cadastro de Funções</div>
        </div>
    </div>
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="/funcoes" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
            <li role="presentation" class=""><a href="/funcoes/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
        </ul>
        <br>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="card-body col-md-10">
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>{$this->Paginator->sort('id')}</th>
                            <th>{$this->Paginator->sort('descricao')}</th>
                            <th>{$this->Paginator->sort('created')}</th>
                            <th>{$this->Paginator->sort('modified')}</th>
                            <th class="actions">{__('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $funcoes as $funcao}  
                            <tr>
                                <td>{$this->Number->format($funcao->id)}</td>
                                <td>{$funcao->descricao}</td>
                                <td>{$funcao->created}</td>
                                <td>{$funcao->modified}</td>
                                <td class="actions">
                                    {$this->Html->link(__('Detalhes'), ['action' => 'view', $funcao->id], ['class' => 'btn btn-xs btn-info'])}
                                    {$this->Html->link(__('Editar'), ['action' => 'edit', $funcao->id], ['class' => 'btn btn-xs btn-success'])}
                                    {$this->Form->postLink(__('Delete'), ['action' => 'delete', $funcao->id], ['class' => 'btn btn-xs btn-danger'], ['confirm' => __('Tem certeza que deseja deletar o registro # {0}?', $funcao->id)])}
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