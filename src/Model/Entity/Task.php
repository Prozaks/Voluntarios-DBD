<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity
 *
 * @property int $TASK_ID
 * @property int $MIS_ID
 * @property string $TASK_NOMBRE
 * @property int $TASK_CANTIDAD
 * @property string $TASK_ESTADO
 * @property string $TASK_DESCRIPCION
 *
 * @property \App\Model\Entity\Skill[] $skill
 * @property \App\Model\Entity\Volunteer[] $volunteer
 */
class Task extends Entity
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
        'TASK_ID' => false
    ];
}
