<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Caixa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caixas index large-9 medium-8 columns content">
    <h3><?= __('Caixas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('id_servico_executado') ?></th>
                <th><?= $this->Paginator->sort('dt_lancamento') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th><?= $this->Paginator->sort('stat') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($caixas as $caixa): ?>
              <tr>
                  <td><?= $this->Number->format($caixa->id) ?></td>
                  <td><?= $this->Number->format($caixa->id_servico_executado) ?></td>
                  <td><?= h($caixa->dt_lancamento) ?></td>
                  <td><?= $this->Number->format($caixa->valor) ?></td>
                  <td><?= $this->Number->format($caixa->stat) ?></td>
                  <td><?= h($caixa->created) ?></td>
                  <td><?= h($caixa->modified) ?></td>
                  <td class="actions">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $caixa->id]) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caixa->id]) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caixa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caixa->id)]) ?>
                  </td>
              </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
