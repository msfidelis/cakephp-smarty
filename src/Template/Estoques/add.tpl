<script src="/js/Estoques/estoques-add.js" type="text/javascript"></script>
<div class="clientes form large-9 medium-8 columns content">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Nova Movimentação</div>
            </div>
        </div>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class=""><a href="/estoques" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
                <li role="presentation" class="active"><a href="/estoque/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-body col-md-6">
                    <div class="form-group">
                        {$this->Form->create($estoque, ['onsubmit' => 'return mimimi()'])}
                        {$this->Form->input('id_material', ['label' => 'Material', 'class' => 'form-control', 'type' => 'select', 'options' => $materiais])}
                        {$this->Form->input('tipo_movimento', ['class' => 'form-control', 'type' => 'select', 'options' => $status])}
                        <label for="dt_movimentacao"> Data Movimentação </label>
                        <input type="text" name="dt-movimentacao" class="form-control data" id="dt-movimentacao" value="{$estoque->dt_movimentacao|date_format:'%d/%m/%Y'|default:date("d/m/Y")}">
                        {$this->Form->input('quantidade',  [ 'label' => 'Quantidade', 'type' => 'text', 'class' => 'form-control standard-mask-integer'], ['empty' => false])}
                        {$this->Form->button(__('Submit'), ['class' => 'btn btn-primary'])}
                        {$this->Form->end()}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>