<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MissionVolunteer Model
 *
 * @method \App\Model\Entity\MissionVolunteer get($primaryKey, $options = [])
 * @method \App\Model\Entity\MissionVolunteer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MissionVolunteer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MissionVolunteer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MissionVolunteer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MissionVolunteer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MissionVolunteer findOrCreate($search, callable $callback = null)
 */
class MissionVolunteerTable extends Table
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

        $this->table('mission_volunteer');
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
            ->allowEmpty('VOL_ID');

        $validator
            ->integer('MIS_ID')
            ->allowEmpty('MIS_ID');

        return $validator;
    }
}
