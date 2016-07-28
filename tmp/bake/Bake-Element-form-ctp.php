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
  return $schema->columnType($field) !== 'binary';
});

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
  $fields = $fields->reject(function ($field) {
    return $field === 'lft' || $field === 'rght';
  });
}
?>
<div class="materiais form large-9 medium-8 columns content">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Cadastrar Novo Registro</div>
            </div>
        </div>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class=""><a href="/<?= $singularVar ?>s" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
                <li role="presentation" class="active"><a href="/<?= $singularVar ?>s/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-body col-md-6">
                    <div class="form-group">
                        {$this->Form->create($<?= $singularVar ?>)}
                        <fieldset>
                            <legend>{__('<?= Inflector::humanize($action) ?> <?= $singularHumanName ?>')}</legend>
                            <CakePHPBakeOpenTagphp
                            <?php
                            foreach ($fields as $field) {
                              if (in_array($field, $primaryKey)) {
                                continue;
                              }
                              if (isset($keyFields[$field])) {
                                $fieldData = $schema->column($field);
                                if (!empty($fieldData['null'])) {
                                  ?>
                            {$this->Form->input('<?= $field ?>', ['options' => $<?= $keyFields[$field] ?>, 'empty' => true])}
                                  <?php
                                } else {
                                  ?>
                            {$this->Form->input('<?= $field ?>', ['options' => $<?= $keyFields[$field] ?>])?
                                  <?php
                                }
                                continue;
                              }
                              if (!in_array($field, ['created', 'modified', 'updated'])) {
                                $fieldData = $schema->column($field);
                                if (in_array($fieldData['type'], ['date', 'datetime', 'time']) && (!empty($fieldData['null']))) {
                                  ?>
                            {$this->Form->input('<?= $field ?>', ['empty' => true], ['class' => 'form-control'])}
                                  <?php
                                } else {
                                  ?>
                            {$this->Form->input('<?= $field ?>', ['class' => 'form-control'])}
                                  <?php
                                }
                              }
                            }
                            if (!empty($associations['BelongsToMany'])) {
                              foreach ($associations['BelongsToMany'] as $assocName => $assocData) {
                                ?>
                            {$this->Form->input('<?= $assocData['property'] ?>._ids', ['options' => $<?= $assocData['variable'] ?>])}
                                <?php
                              }
                            }
                            ?>
       
                        </fieldset>
                        {$this->Form->button(__('Submit'), ['class' => 'btn btn-primary'])}
                        {$this->Form->end()}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>