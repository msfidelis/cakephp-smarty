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
                        {$this->Form->input('NAME', ['class' => 'form-control', 'label' => 'Nome do Usuário', 'default' => $user->NAME|default:''])}
                        {$this->Form->input('email', ['class' => 'form-control', 'label' => 'E-mail', 'type' => 'email'])}
                        {$this->Form->input('username', ['class' => 'form-control', 'label' => 'Username'])}
                        {$this->Form->input('tipo', ['label' => 'Função', 'class' => 'form-control', 'type' => 'select', 'options' => $funcoes])}
                        <br><br>

                        {$this->Form->button(__('Submit'), ['class' => 'btn btn-primary'])}
                        <button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#modalSuccess">
                            Trocar Senha
                        </button>
                        {$this->Form->end()}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modal-success" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <script src="/js/Usuarios/validateSenha.js" type="text/javascript"></script>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Troca de Senha :: {$user->NAME}</h4>
            </div>
            <div id="return">
                
            </div>
            <div class="modal-body">
                <form action="/usuarios/changepassword" method="post">
                    <input type="hidden" name="id" id="id" value="{$user->id}">
                    <label for="password">Digite a Nova Senha:</label>
                    <input type="password" name="password" class="form-control passwd" id="password" placeholder="********">
                    
                    <label for="password">Confirme a Nova Senha:</label>
                    <input type="password" name="passwordconfirm" class="form-control passwd" id="passwordconfirm" placeholder="********">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success" onclick="passwdValidate(this);">Trocar Senha  </button>
            </div>
        </div>
    </div>
</div>