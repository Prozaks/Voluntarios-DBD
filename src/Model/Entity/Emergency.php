<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emergency Entity
 *
 * @property int $EMER_ID
 * @property int $AREA_ID
 * @property int $ADM_ID
 * @property string $EMER_NOMBRE
 * @property \Cake\I18n\Time $EMER_FECHA
 * @property string $EMER_ESTADO
 * @property string $EMER_DESCRIPCION
 * @property string $EMER_GRAVEDAD
 * @property int $EMER_RANGO
 *
 * @property \App\Model\Entity\Volunteer[] $volunteer
 */
class Emergency extends Entity
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
        'EMER_ID' => false
    ];
}
