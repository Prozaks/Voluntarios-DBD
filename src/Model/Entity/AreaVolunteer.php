<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AreaVolunteer Entity
 *
 * @property int $AREA_ID
 * @property int $VOL_ID
 */
class AreaVolunteer extends Entity
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
        'AREA_ID' => false,
        'VOL_ID' => false
    ];
}
