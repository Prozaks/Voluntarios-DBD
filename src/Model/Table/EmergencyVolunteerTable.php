<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmergencyVolunteer Model
 *
 * @method \App\Model\Entity\EmergencyVolunteer get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmergencyVolunteer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmergencyVolunteer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmergencyVolunteer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmergencyVolunteer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmergencyVolunteer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmergencyVolunteer findOrCreate($search, callable $callback = null)
 */
class EmergencyVolunteerTable extends Table
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

        $this->table('emergency_volunteer');
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
            ->integer('EMER_ID')
            ->allowEmpty('EMER_ID');

        return $validator;
    }
}
