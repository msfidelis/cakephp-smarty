<script src="/js/Estoques/estoques-add.js" type="text/javascript"></script>
<div class="clientes form large-9 medium-8 columns content">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Editar Funcao</div>
            </div>
        </div>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class=""><a href="/funcoes" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
                <li role="presentation" class=""><a href="/funcoes/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
                <li role="presentation" class="active"><a href="/funcoes/edit" aria-controls="Novo"  aria-expanded="false">Editar</a></li>
                <li role="presentation" class=""><a href="/funcoes/view/{$estoque->id}" aria-controls="Detalhes" aria-expanded="false">Detalhes</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-body col-md-6">
                    <div class="form-group">
                        {$this->Form->create($funco)}
                        <fieldset>
                            {$this->Form->input('descricao',  [ 'label' => 'Descrição', 'type' => 'text', 'class' => 'form-control'], ['empty' => false])}
                        </fieldset>
                        {$this->Form->button(__('Submit'), ['class' => 'btn btn-primary'])}
                        {$this->Form->end()}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
