<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Administrator Entity
 *
 * @property int $ADM_ID
 * @property string $ADM_NOMBRE1
 * @property string $ADM_NOMBRE2
 * @property string $ADM_APELLIDO1
 * @property string $ADM_APELLIDO2
 * @property int $ADM_TELEFONO
 * @property string $ADM_MAIL
 * @property string $ADM_UBICACION
 * @property bool $ADM_DISPONIBILIDAD
 * @property int $ADM_IDUSER
 */
class Administrator extends Entity
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
        'ADM_ID' => false
    ];
}
