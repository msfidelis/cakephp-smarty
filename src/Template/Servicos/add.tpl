<div class="materiais form large-9 medium-8 columns content">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Cadastrar Novo Registro</div>
            </div>
        </div>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class=""><a href="/servicos" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
                <li role="presentation" class="active"><a href="/servicos/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-body col-md-6">
                    <div class="form-group">
                        {$this->Form->create($servico)}
                        <fieldset>
                            <legend>{__('Add Servico')}</legend>
                            <?php
                                                        {$this->Form->input('nome', ['class' => 'form-control'])}
                                                              {$this->Form->input('descricao', ['class' => 'form-control'])}
                                                              {$this->Form->input('stat', ['class' => 'form-control'])}
                                                              {$this->Form->input('valor_aproximado', ['class' => 'form-control'])}
                                         
                        </fieldset>
                        {$this->Form->button(__('Submit'), ['class' => 'btn btn-primary'])}
                        {$this->Form->end()}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>