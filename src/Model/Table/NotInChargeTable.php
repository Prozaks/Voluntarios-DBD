<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NotInCharge Model
 *
 * @method \App\Model\Entity\NotInCharge get($primaryKey, $options = [])
 * @method \App\Model\Entity\NotInCharge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\NotInCharge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NotInCharge|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NotInCharge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NotInCharge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\NotInCharge findOrCreate($search, callable $callback = null)
 */
class NotInChargeTable extends Table
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

        $this->table('not_in_charge');
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
            ->integer('NOT_ID')
            ->allowEmpty('NOT_ID');

        $validator
            ->integer('IN_ID')
            ->allowEmpty('IN_ID');

        $validator
            ->allowEmpty('NI_ESTADO');

        return $validator;
    }
}
