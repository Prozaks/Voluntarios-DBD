<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InCharge Model
 *
 * @method \App\Model\Entity\InCharge get($primaryKey, $options = [])
 * @method \App\Model\Entity\InCharge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InCharge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InCharge|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InCharge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InCharge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InCharge findOrCreate($search, callable $callback = null)
 */
class InChargeTable extends Table
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

        $this->table('in_charge');
        $this->displayField('IN_NOMBRE1');
        $this->primaryKey('IN_ID');
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
            ->integer('IN_ID')
            ->allowEmpty('IN_ID', 'create');

        $validator
            ->integer('ADD_ID')
            ->allowEmpty('ADD_ID');

        $validator
            ->allowEmpty('IN_NOMBRE1');

        $validator
            ->allowEmpty('IN_NOMBRE2');

        $validator
            ->allowEmpty('IN_APELLIDO2');

        $validator
            ->integer('IN_TELEFONO')
            ->allowEmpty('IN_TELEFONO');

        $validator
            ->allowEmpty('IN_EMAIL');

        $validator
            ->allowEmpty('IN_UBICACION');

        $validator
            ->boolean('IN_DISPONIBILIDAD')
            ->allowEmpty('IN_DISPONIBILIDAD');

        $validator
            ->integer('IN_IDUSER')
            ->allowEmpty('IN_IDUSER');

        return $validator;
    }
}
