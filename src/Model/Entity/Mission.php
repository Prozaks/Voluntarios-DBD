<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mission Entity
 *
 * @property int $MIS_ID
 * @property int $IN_ID
 * @property int $EMER_ID
 * @property string $MIS_NOMBRE
 * @property string $MIS_DESCRIPCION
 * @property string $MIS_ESTADO
 */
class Mission extends Entity
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
        'MIS_ID' => false
    ];
}
