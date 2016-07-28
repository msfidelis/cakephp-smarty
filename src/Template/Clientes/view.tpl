<div class="clientes form large-9 medium-8 columns content">
    {$this->Form->create($cliente)}
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Visualizar</div>
            </div>
        </div>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class=""><a href="/clientes" aria-controls="Listar"  aria-expanded="false">Listar</a></li>
                <li role="presentation" class=""><a href="/clientes/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
                <li role="presentation" class=""><a href="/clientes/edit/{$cliente->id}" aria-controls="Novo"  aria-expanded="false">Editar</a></li>
                <li role="presentation" class="active"><a href="/clientes/view/{$cliente->id}" aria-controls="Detalhes" aria-expanded="false">Detalhes</a></li>
            </ul>
            <div class="clientes view large-9 medium-8 columns content">
                <h3>{$cliente->id}</h3>
                <table class="vertical-table">
                    <tr>
                        <th>{__('Nome')}</th>
                        <td>{($cliente->nome)}</td>
                    </tr>
                    <tr>
                        <th>{__('Telefone')}</th>
                        <td>{($cliente->telefone)}</td>
                    </tr>
                    <tr>
                        <th>{__('Email')}   </th>
                        <td>{($cliente->email)}</td>
                    </tr>
                    <tr>
                        <th>{__('Endereco')}</th>
                        <td>{$cliente->endereco}</td>
                    </tr>
                    <tr>
                        <th>{__('Id')}</th>
                        <td>{$this->Number->format($cliente->id)}</td>
                    </tr>
                    <tr>
                        <th>{__('Stat')}</th>
                        <td>{$this->Number->format($cliente->stat)}</td>
                    </tr>
                    <tr>
                        <th>{__('Created')}</th>
                        <td>{($cliente->created)}</td>
                    </tr>
                    <tr>
                        <th>{__('Modified')}</th>
                        <td>{$cliente->modified}</td>
                    </tr>
                </table>

                <h4>  Observações</h4>
                {$this->Text->autoParagraph(h($cliente->observacao))}

            </div>
        </div>
    </div>
</div>
