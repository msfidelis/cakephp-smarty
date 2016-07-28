<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estoque'), ['action' => 'edit', $estoque->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estoque'), ['action' => 'delete', $estoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estoques'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estoque'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estoques view large-9 medium-8 columns content">
    <h3><?= h($estoque->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($estoque->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Material') ?></th>
            <td><?= $this->Number->format($estoque->id_material) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Movimento') ?></th>
            <td><?= $this->Number->format($estoque->tipo_movimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Stat') ?></th>
            <td><?= $this->Number->format($estoque->stat) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Movimentacao') ?></th>
            <td><?= h($estoque->dt_movimentacao) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($estoque->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($estoque->modified) ?></td>
        </tr>
    </table>
</div>
