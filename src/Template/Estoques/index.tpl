<div class="clientes index large-9 medium-8 columns content">
    <div class="card-header">
        <div class="card-title">
            <div class="title">Estoque</div>
        </div>
    </div>
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="/estoques" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
            <li role="presentation" class=""><a href="/estoques/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
        </ul>
        <br>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="card-body col-md-10">

                <table class='table table-responsive'>
                    <thead>
                        <tr>
                            <th>{$this->Paginator->sort('id')}</th>
                            <th>{$this->Paginator->sort('id_material', ['alias' => 'Material'])}</th>
                            <th>{$this->Paginator->sort('qtd', ['alias' => 'Quantidade'])}</th>
                            <th>{$this->Paginator->sort('tipo_movimento')}</th>
                            <th>{$this->Paginator->sort('dt_movimentacao', ['alias' => 'Data Movimentação'])}</th>
                            <th>{$this->Paginator->sort('created')}</th>
                            <th>{$this->Paginator->sort('modified')}</th>
                            <th class="actions">{__('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $estoques as $estoque}
                            {if $estoque->tipo_movimento eq "1" } 
                                <tr class="success">
                                {else}
                                <tr class="danger">
                                {/if}
                                <td>{$this->Number->format($estoque->id)}</td>
                                <td>{$estoque->material}</td>
                                 <td>{$this->Number->format($estoque->qtd)}</td>
                                {if $estoque->tipo_movimento eq "1" } 
                                    <td>ENTRADA</td>
                                {else} 
                                    <td>SAIDA</td>
                                {/if}
                                <td>{$estoque->dt_movimentacao|date_format:'%d/%m/%Y'|default:date("d/m/Y")}</td>
                                <td>{$estoque->created}</td>
                                <td>{$estoque->modified}</td>
                                <td class="actions">
                                    {$this->Html->link(__('Editar'), ['action' => 'edit', $estoque->id], ['class' => 'btn btn-xs btn-success'])}
                                    {$this->Form->postLink(__('Delete'), ['action' => 'delete', $estoque->id], ['class' => 'btn btn-xs btn-danger'], ['confirm' => __('Tem certeza que deseja deletar o registro # {0}?', $estoque->id)])}
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
