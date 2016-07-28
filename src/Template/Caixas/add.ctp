<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Caixas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="caixas form large-9 medium-8 columns content">
    <?= $this->Form->create($caixa) ?>
    <fieldset>
        <legend><?= __('Add Caixa') ?></legend>
        <?php
            echo $this->Form->input('id_servico_executado');
            echo $this->Form->input('dt_lancamento');
            echo $this->Form->input('valor');
            echo $this->Form->input('stat');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
