<?php
namespace App\Model\Table;

use App\Model\Entity\Agenda;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agendas Model
 *
 */
class AgendasTable extends Table
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

        $this->table('agendas');
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
            ->dateTime('dt_agendamento')
            ->allowEmpty('dt_agendamento');

        $validator
            ->integer('id_cliente')
            ->allowEmpty('id_cliente');

        $validator
            ->integer('id_servico')
            ->allowEmpty('id_servico');

        $validator
            ->integer('id_usuario')
            ->allowEmpty('id_usuario');

        $validator
            ->allowEmpty('obs');

        $validator
            ->integer('stat')
            ->allowEmpty('stat');

        $validator
            ->decimal('valor_pago')
            ->allowEmpty('valor_pago');

        $validator
            ->integer('status_agendamento')
            ->allowEmpty('status_agendamento');

        return $validator;
    }
}
