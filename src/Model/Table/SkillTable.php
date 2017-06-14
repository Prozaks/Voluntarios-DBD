<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Skill Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Volunteer
 * @property \Cake\ORM\Association\BelongsToMany $Task
 *
 * @method \App\Model\Entity\Skill get($primaryKey, $options = [])
 * @method \App\Model\Entity\Skill newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Skill[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Skill|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Skill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Skill[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Skill findOrCreate($search, callable $callback = null)
 */
class SkillTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('skill');
        $this->displayField('SKILL_ID');
        $this->primaryKey('SKILL_ID');

        $this->belongsToMany('Volunteer', [
            'foreignKey' => 'skill_id',
            'targetForeignKey' => 'volunteer_id',
            'joinTable' => 'skill_volunteer'
        ]);
        $this->belongsToMany('Task', [
            'foreignKey' => 'skill_id',
            'targetForeignKey' => 'task_id',
            'joinTable' => 'task_skill'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('SKILL_ID')
            ->allowEmpty('SKILL_ID', 'create');

        $validator
            ->allowEmpty('SKILL_NOMBRE');

        $validator
            ->integer('SKILL_DIFICULTAD')
            ->allowEmpty('SKILL_DIFICULTAD');

        $validator
            ->allowEmpty('SKILL_DESCRIPCION');

        return $validator;
    }
}
