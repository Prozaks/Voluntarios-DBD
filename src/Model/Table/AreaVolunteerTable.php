<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AreaVolunteer Model
 *
 * @method \App\Model\Entity\AreaVolunteer get($primaryKey, $options = [])
 * @method \App\Model\Entity\AreaVolunteer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AreaVolunteer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AreaVolunteer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AreaVolunteer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AreaVolunteer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AreaVolunteer findOrCreate($search, callable $callback = null)
 */
class AreaVolunteerTable extends Table
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

        $this->table('area_volunteer');
        $this->displayField('AREA_ID');
        $this->primaryKey(['AREA_ID', 'VOL_ID']);
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
            ->integer('AREA_ID')
            ->allowEmpty('AREA_ID', 'create');

        $validator
            ->integer('VOL_ID')
            ->allowEmpty('VOL_ID', 'create');

        return $validator;
    }
}
