<div class="materiais form large-9 medium-8 columns content">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Cadastrar Novo Usuário do Sistema</div>
            </div>
        </div>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class=""><a href="/usuarios" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
                <li role="presentation" class="active"><a href="/usuarios/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-body col-md-6">
                    <div class="form-group">
                        {$this->Form->create($user)}
                        {$this->Form->input('NAME', ['class' => 'form-control', 'label' => 'Nome do Usuário'])}
                        {$this->Form->input('email', ['class' => 'form-control', 'label' => 'E-mail', 'type' => 'email'])}
                        {$this->Form->input('username', ['class' => 'form-control', 'label' => 'Username'])}
                        {$this->Form->input('tipo', ['label' => 'Função', 'class' => 'form-control', 'type' => 'select', 'options' => $funcoes])}
                        <br><br>

                        {$this->Form->input('password', ['class' => 'form-control', 'label' => 'Digite a Senha', 'type' => 'password'])}
                        {$this->Form->input('passwordconfirm', ['class' => 'form-control', 'label' => 'Confirme a Senha', 'type' => 'password'])}

                        {$this->Form->button(__('Submit'), ['class' => 'btn btn-primary'])}
                        {$this->Form->end()}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
