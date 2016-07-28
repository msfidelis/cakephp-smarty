<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agenda'), ['action' => 'edit', $agenda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agenda'), ['action' => 'delete', $agenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agendas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agenda'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agendas view large-9 medium-8 columns content">
    <h3><?= h($agenda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($agenda->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Cliente') ?></th>
            <td><?= $this->Number->format($agenda->id_cliente) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Servico') ?></th>
            <td><?= $this->Number->format($agenda->id_servico) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Usuario') ?></th>
            <td><?= $this->Number->format($agenda->id_usuario) ?></td>
        </tr>
        <tr>
            <th><?= __('Stat') ?></th>
            <td><?= $this->Number->format($agenda->stat) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Pago') ?></th>
            <td><?= $this->Number->format($agenda->valor_pago) ?></td>
        </tr>
        <tr>
            <th><?= __('Status Agendamento') ?></th>
            <td><?= $this->Number->format($agenda->status_agendamento) ?></td>
        </tr>
        <tr>
            <th><?= __('Dt Agendamento') ?></th>
            <td><?= h($agenda->dt_agendamento) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($agenda->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($agenda->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Obs') ?></h4>
        <?= $this->Text->autoParagraph(h($agenda->obs)); ?>
    </div>
</div>
