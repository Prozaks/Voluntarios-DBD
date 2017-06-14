<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Addres Entity
 *
 * @property int $ADD_ID
 * @property int $COM_ID
 * @property string $ADD_CALLE
 * @property int $ADD_NUMERO
 */
class Addres extends Entity
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
        'ADD_ID' => false
    ];
}
