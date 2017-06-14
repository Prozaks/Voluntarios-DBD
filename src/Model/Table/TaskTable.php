<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Task Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Skill
 * @property \Cake\ORM\Association\BelongsToMany $Volunteer
 *
 * @method \App\Model\Entity\Task get($primaryKey, $options = [])
 * @method \App\Model\Entity\Task newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Task[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Task|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Task patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Task[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Task findOrCreate($search, callable $callback = null)
 */
class TaskTable extends Table
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

        $this->table('task');
        $this->displayField('TASK_NOMBRE');
        $this->primaryKey('TASK_ID');

        $this->belongsToMany('Skill', [
            'foreignKey' => 'task_id',
            'targetForeignKey' => 'skill_id',
            'joinTable' => 'task_skill'
        ]);
        $this->belongsToMany('Volunteer', [
            'foreignKey' => 'task_id',
            'targetForeignKey' => 'volunteer_id',
            'joinTable' => 'task_volunteer'
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
            ->integer('TASK_ID')
            ->allowEmpty('TASK_ID', 'create');

        $validator
            ->integer('MIS_ID')
            ->allowEmpty('MIS_ID');

        $validator
            ->allowEmpty('TASK_NOMBRE');

        $validator
            ->integer('TASK_CANTIDAD')
            ->allowEmpty('TASK_CANTIDAD');

        $validator
            ->allowEmpty('TASK_ESTADO');

        $validator
            ->allowEmpty('TASK_DESCRIPCION');

        return $validator;
    }
}
