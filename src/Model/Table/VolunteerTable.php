<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Volunteer Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Area
 * @property \Cake\ORM\Association\BelongsToMany $Emergency
 * @property \Cake\ORM\Association\BelongsToMany $Skill
 * @property \Cake\ORM\Association\BelongsToMany $Task
 *
 * @method \App\Model\Entity\Volunteer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Volunteer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Volunteer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Volunteer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Volunteer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Volunteer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Volunteer findOrCreate($search, callable $callback = null)
 */
class VolunteerTable extends Table
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

        $this->table('volunteer');
        $this->displayField('VOL_NOMBRE1');
        $this->primaryKey('VOL_ID');

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
            ->allowEmpty('VOL_ID', 'create');

        $validator
            ->integer('ADD_ID')
            ->allowEmpty('ADD_ID');

        $validator
            ->allowEmpty('VOL_NOMBRE1');

        $validator
            ->allowEmpty('VOL_NOMBRE2');

        $validator
            ->allowEmpty('VOL_APELLIDO1');

        $validator
            ->allowEmpty('VOL_APELLIDO2');

        $validator
            ->integer('VOL_TELEFONO')
            ->allowEmpty('VOL_TELEFONO');

        $validator
            ->allowEmpty('VOL_EMAIL');

        $validator
            ->boolean('VOL_DISPONIBILIDAD')
            ->allowEmpty('VOL_DISPONIBILIDAD');

        $validator
            ->integer('VOL_RANK')
            ->allowEmpty('VOL_RANK');

        $validator
            ->integer('VOL_IDUSER')
            ->allowEmpty('VOL_IDUSER');

        return $validator;
    }
}
