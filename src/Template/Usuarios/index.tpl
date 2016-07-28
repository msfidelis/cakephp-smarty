<div class="clientes index large-9 medium-8 columns content">
    <div class="card-header">
        <div class="card-title">
            <div class="title">Cadastro de Funções</div>
        </div>
    </div>
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="/usuarios" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
            <li role="presentation" class=""><a href="/usuarios/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
        </ul>
        <br>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="card-body col-md-10">
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>{$this->Paginator->sort('id')}</th>
                            <th>{$this->Paginator->sort('Nome')}</th>
                            <th>{$this->Paginator->sort('E-mail')}</th>
                            <th>{$this->Paginator->sort('Função')}</th>
                            <th>{$this->Paginator->sort('created')}</th>
                            <th>{$this->Paginator->sort('modified')}</th>

                            <th class="actions">{__('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $users as $user}  
                            <tr>
                                <td>{$this->Number->format($user->id)}</td>
                                <td>{$user->NAME}</td>
                                <td>{$user->email}</td>
                                <td>{$user->funcao}</td>
                                <td>{$user->created}</td>
                                <td>{$user->modified}</td>
                                <td class="actions">
                                    {$this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn btn-xs btn-success'])}
                                    {$this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-xs btn-danger'], ['confirm' => __('Tem certeza que deseja deletar o registro # {0}?', $user->id)])}
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