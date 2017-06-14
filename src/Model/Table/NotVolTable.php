<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NotVol Model
 *
 * @method \App\Model\Entity\NotVol get($primaryKey, $options = [])
 * @method \App\Model\Entity\NotVol newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\NotVol[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NotVol|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NotVol patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NotVol[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\NotVol findOrCreate($search, callable $callback = null)
 */
class NotVolTable extends Table
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

        $this->table('not_vol');
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
            ->integer('VOL_ID')
            ->allowEmpty('VOL_ID');

        $validator
            ->allowEmpty('NV_ESTADO');

        return $validator;
    }
}
