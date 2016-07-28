<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
  return !in_array($schema->columnType($field), ['binary', 'text']);
});

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
  $fields = $fields->reject(function ($field) {
    return $field === 'lft' || $field === 'rght';
  });
}

if (!empty($indexColumns)) {
  $fields = $fields->take($indexColumns);
}
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">{$this->Html->link(__('Listar'), ['action' => 'index'])}</li>
        <li role="presentation" class="">{$this->Html->link(__('Novo'), ['action' => 'add'])}</li>
        <?php
        $done = [];
        foreach ($associations as $type => $data):
          foreach ($data as $alias => $details):
            if (!empty($details['navLink']) && $details['controller'] !== $this->name && !in_array($details['controller'], $done)):
              ?>
        <li>{$this->Html->link(__('List <?= $this->_pluralHumanName($alias) ?>'), ['controller' => '<?= $details['controller'] ?>', 'action' => 'index'])}</li>
              <li>{$this->Html->link(__('New <?= $this->_singularHumanName($alias) ?>'), ['controller' => '<?= $details['controller'] ?>', 'action' => 'add'])}</li>
              <?php
              $done[] = $details['controller'];
            endif;
          endforeach;
        endforeach;
        ?>
    </ul>
</nav>
<div class="tab-content">
    <div class="card-body col-md-10">
        <table class='table table-striped'>
            <thead>
                <tr>
                    <?php foreach ($fields as $field): ?>
                    <th>{$this->Paginator->sort('<?= $field ?>')}</th>
                    <?php endforeach; ?>
                    <th class="actions">{__('Actions')}</th>
                </tr>
            </thead>
            <tbody>
                {foreach $<?= $pluralVar ?> as $<?= $singularVar ?>}
                <tr>
                    <?php
                    foreach ($fields as $field) {
                      $isKey = false;
                      if (!empty($associations['BelongsTo'])) {
                        foreach ($associations['BelongsTo'] as $alias => $details) {
                          if ($field === $details['foreignKey']) {
                            $isKey = true;
                            ?>
                    <td>{$<?= $singularVar ?>->has('<?= $details['property'] ?>') ? $this->Html->link($<?= $singularVar ?>-><?= $details['property'] ?>-><?= $details['displayField'] ?>, ['controller' => '<?= $details['controller'] ?>', 'action' => 'view', $<?= $singularVar ?>-><?= $details['property'] ?>-><?= $details['primaryKey'][0] ?>]) : ''}</td>
                            <?php
                            break;
                          }
                        }
                      }
                      if ($isKey !== true) {
                        if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
                          ?>
                    <td>{$<?= $singularVar ?>-><?= $field ?>}</td>
                          <?php
                        } else {
                          ?>
                    <td>{$this->Number->format($<?= $singularVar ?>-><?= $field ?>)}</td>
                          <?php
                        }
                      }
                    }

                    $pk = '$' . $singularVar . '->' . $primaryKey[0];
                    ?>
                    <td class="actions">
                        {$this->Html->link(__('View'), ['action' => 'view', <?= $pk ?>], ['class' => 'btn btn-xs btn-info'])}
                        {$this->Html->link(__('Edit'), ['action' => 'edit', <?= $pk ?>], ['class' => 'btn btn-xs btn-success'])}
                        {$this->Form->postLink(__('Delete'), ['action' => 'delete', <?= $pk ?>], ['class' => 'btn btn-xs btn-danger'])}
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                {$this->Paginator->prev( __('Anterior'))}
                {$this->Paginator->numbers()}
                {$this->Paginator->next(__('Proximo'))}
            </ul>
            <p>{$this->Paginator->counter()}</p>
        </div>
    </div>
