<div class="clientes form large-9 medium-8 columns content">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Cadastrar Novo Cliente</div>
            </div>
        </div>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class=""><a href="/clientes" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
                <li role="presentation" class="active"><a href="/clientes/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-body col-md-6">
                    <div class="form-group">
                        {$this->Form->create($cliente)}
                        {$this->Form->input('nome', ['class' => 'form-control'])}
                        {$this->Form->input('telefone', ['class' => 'form-control'])}
                        {$this->Form->input('email', ['class' => 'form-control'])}
                        {$this->Form->input('endereco', ['class' => 'form-control'])}
                        {$this->Form->input('observacao', ['class' => 'form-control'])}


                        </br> 
                        {$this->Form->button(__('Submit'), ['class' => 'btn btn-primary'])}
                        {$this->Form->end()}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

