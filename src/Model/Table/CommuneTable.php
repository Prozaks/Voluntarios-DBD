<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Commune Model
 *
 * @method \App\Model\Entity\Commune get($primaryKey, $options = [])
 * @method \App\Model\Entity\Commune newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Commune[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Commune|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commune patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Commune[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Commune findOrCreate($search, callable $callback = null)
 */
class CommuneTable extends Table
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

        $this->table('commune');
        $this->displayField('COM_NOMBRE');
        $this->primaryKey('COM_ID');
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
            ->integer('COM_ID')
            ->allowEmpty('COM_ID', 'create');

        $validator
            ->integer('PRO_ID')
            ->allowEmpty('PRO_ID');

        $validator
            ->allowEmpty('COM_NOMBRE');

        return $validator;
    }
}
