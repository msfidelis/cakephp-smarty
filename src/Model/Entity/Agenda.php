<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agenda Entity.
 *
 * @property int $id
 * @property \Cake\I18n\Time $dt_agendamento
 * @property int $id_cliente
 * @property int $id_servico
 * @property int $id_usuario
 * @property string $obs
 * @property int $stat
 * @property float $valor_pago
 * @property int $status_agendamento
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Agenda extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
