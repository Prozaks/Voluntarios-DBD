<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NotAdm Model
 *
 * @method \App\Model\Entity\NotAdm get($primaryKey, $options = [])
 * @method \App\Model\Entity\NotAdm newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\NotAdm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NotAdm|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NotAdm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NotAdm[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\NotAdm findOrCreate($search, callable $callback = null)
 */
class NotAdmTable extends Table
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

        $this->table('not_adm');
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
            ->integer('ADM_ID')
            ->allowEmpty('ADM_ID');

        $validator
            ->integer('NOT_ID')
            ->allowEmpty('NOT_ID');

        $validator
            ->allowEmpty('NA_ESTADO');

        return $validator;
    }
}
