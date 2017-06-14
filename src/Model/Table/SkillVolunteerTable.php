<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SkillVolunteer Model
 *
 * @method \App\Model\Entity\SkillVolunteer get($primaryKey, $options = [])
 * @method \App\Model\Entity\SkillVolunteer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SkillVolunteer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SkillVolunteer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SkillVolunteer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SkillVolunteer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SkillVolunteer findOrCreate($search, callable $callback = null)
 */
class SkillVolunteerTable extends Table
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

        $this->table('skill_volunteer');
        $this->displayField('SKILL_ID');
        $this->primaryKey('SKILL_ID');
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
            ->integer('VOL_ID')
            ->requirePresence('VOL_ID', 'create')
            ->notEmpty('VOL_ID');

        $validator
            ->integer('SKILL_ID')
            ->requirePresence('SKILL_ID', 'create')
            ->notEmpty('SKILL_ID');

        return $validator;
    }
}
