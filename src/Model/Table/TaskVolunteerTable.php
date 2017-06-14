<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TaskVolunteer Model
 *
 * @method \App\Model\Entity\TaskVolunteer get($primaryKey, $options = [])
 * @method \App\Model\Entity\TaskVolunteer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TaskVolunteer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TaskVolunteer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TaskVolunteer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TaskVolunteer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TaskVolunteer findOrCreate($search, callable $callback = null)
 */
class TaskVolunteerTable extends Table
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

        $this->table('task_volunteer');
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
            ->integer('TASK_ID')
            ->allowEmpty('TASK_ID');

        $validator
            ->integer('VOL_ID')
            ->allowEmpty('VOL_ID');

        $validator
            ->allowEmpty('TV_SOLICITUD');

        return $validator;
    }
}
