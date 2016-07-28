<?php

namespace App\Model\Table;

use App\Model\Entity\Estoque;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   msfidelis01@gmail.com
 * @date    30/05/2016
 */
class EstoquesTable extends Table {

  /**
   * Initialize method
   * @param array $config The configuration for the Table.
   * @return void
   */
  public function initialize(array $config) {
    parent::initialize($config);

    $this->table('estoques');
    $this->displayField('id');
    $this->primaryKey('id');

    $this->addBehavior('Timestamp');
  }

  /**
   * Default validation rules.
   * @param \Cake\Validation\Validator $validator Validator instance.
   * @return \Cake\Validation\Validator
   */
  public function validationDefault(Validator $validator) {
    $validator
        ->integer('id')
        ->allowEmpty('id', 'create');

    $validator
        ->integer('id_material')
        ->allowEmpty('id_material');

    $validator
        ->integer('tipo_movimento')
        ->allowEmpty('tipo_movimento');

//    $validator
//        ->date('dt_movimentacao')
//        ->allowEmpty('dt_movimentacao');

    $validator
        ->integer('stat')
        ->allowEmpty('stat');

    return $validator;
  }

}
