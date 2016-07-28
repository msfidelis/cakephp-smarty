<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Caixa Entity.
 *
 * @property int $id
 * @property int $id_servico_executado
 * @property \Cake\I18n\Time $dt_lancamento
 * @property float $valor
 * @property int $stat
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Caixa extends Entity
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
