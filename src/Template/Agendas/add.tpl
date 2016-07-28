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
                <li role="presentation" class=""><a href="/agendas" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
                <li role="presentation" class="active"><a href="/agendas/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-body col-md-6">
                    <div class="form-group">
                        {$this->Form->create($agenda)}
                        <fieldset>
                            <legend>{__('Add Agenda')}</legend>

                            {$this->Form->input('dt_agendamento', ['class' => 'form-control', 'type' => 'text', 'label' => 'Data Agendamento'])}
                            {$this->Form->input('id_cliente', ['class' => 'form-control', 'label' => 'Cliente', 'type' => 'select', 'options' => $clientes])}
                            {$this->Form->input('id_servico', ['class' => 'form-control', 'label' => 'Servicos', 'type' => 'select', 'options' => $servicos])}
                            {$this->Form->input('id_usuario', ['class' => 'form-control', 'label' => 'Usuario Atendente', 'type' => 'select', 'options' => $usuarios])}
                            {$this->Form->input('obs', ['class' => 'form-control', 'label' => 'Observações'])}
                            {$this->Form->input('valor_pago', ['class' => 'form-control', 'label' => 'Valor Pago'])}
                            {$this->Form->input('status_agendamento', ['class' => 'form-control', 'label' => 'Status Agendamento', 'type' => 'select', 'options' => $status])}

                        </fieldset>
                        {$this->Form->button(__('Submit'), ['class' => 'btn btn-primary'])}
                        {$this->Form->end()}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>