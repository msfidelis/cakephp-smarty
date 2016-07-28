<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Caixa'), ['action' => 'edit', $caixa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Caixa'), ['action' => 'delete', $caixa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caixa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Caixas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Caixa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caixas view large-9 medium-8 columns content">
    <h3><?= h($caixa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($caixa->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Servico Executado') ?></th>
            <td><?= $this->Number->format($caixa->id_servico_executado) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($caixa->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Stat') ?></th>
            <td><?= $this->Number->format($caixa->stat) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Lancamento') ?></th>
            <td><?= h($caixa->dt_lancamento) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($caixa->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($caixa->modified) ?></td>
        </tr>
    </table>
</div>
