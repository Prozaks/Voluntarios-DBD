<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Province Entity
 *
 * @property int $PRO_ID
 * @property int $REG_ID
 * @property string $PRO_NOMBRE
 */
class Province extends Entity
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
        'PRO_ID' => false
    ];
}
