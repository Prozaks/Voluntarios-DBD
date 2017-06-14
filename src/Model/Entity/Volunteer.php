<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Volunteer Entity
 *
 * @property int $VOL_ID
 * @property int $ADD_ID
 * @property string $VOL_NOMBRE1
 * @property string $VOL_NOMBRE2
 * @property string $VOL_APELLIDO1
 * @property string $VOL_APELLIDO2
 * @property int $VOL_TELEFONO
 * @property string $VOL_EMAIL
 * @property bool $VOL_DISPONIBILIDAD
 * @property int $VOL_RANK
 * @property int $VOL_IDUSER
 *
 * @property \App\Model\Entity\Area[] $area
 * @property \App\Model\Entity\Emergency[] $emergency
 * @property \App\Model\Entity\Skill[] $skill
 * @property \App\Model\Entity\Task[] $task
 */
class Volunteer extends Entity
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
        'VOL_ID' => false
    ];
}
