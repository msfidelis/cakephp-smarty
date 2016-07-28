<?php
namespace App\Model\Table;

use App\Model\Entity\Caixa;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Caixas Model
 *
 */
class CaixasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('caixas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_servico_executado')
            ->requirePresence('id_servico_executado', 'create')
            ->notEmpty('id_servico_executado');

        $validator
            ->date('dt_lancamento')
            ->requirePresence('dt_lancamento', 'create')
            ->notEmpty('dt_lancamento');

        $validator
            ->numeric('valor')
            ->allowEmpty('valor');

        $validator
            ->integer('stat')
            ->requirePresence('stat', 'create')
            ->notEmpty('stat');

        return $validator;
    }
}
