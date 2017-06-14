<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Skill Entity
 *
 * @property int $SKILL_ID
 * @property string $SKILL_NOMBRE
 * @property int $SKILL_DIFICULTAD
 * @property string $SKILL_DESCRIPCION
 *
 * @property \App\Model\Entity\Volunteer[] $volunteer
 * @property \App\Model\Entity\Task[] $task
 */
class Skill extends Entity
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
        'SKILL_ID' => false
    ];
}
