<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materiai'), ['action' => 'edit', $materiai->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materiai'), ['action' => 'delete', $materiai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiai->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materiais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiai'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materiais view large-9 medium-8 columns content">
    <h3><?= h($materiai->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($materiai->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($materiai->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($materiai->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Stat') ?></th>
            <td><?= $this->Number->format($materiai->stat) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($materiai->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($materiai->modified) ?></td>
        </tr>
    </table>
</div>
