<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Administrator Model
 *
 * @method \App\Model\Entity\Administrator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Administrator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Administrator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administrator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administrator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Administrator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administrator findOrCreate($search, callable $callback = null)
 */
class AdministratorTable extends Table
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

        $this->table('administrator');
        $this->displayField('ADM_ID');
        $this->primaryKey('ADM_ID');
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
            ->allowEmpty('ADM_ID', 'create');

        $validator
            ->allowEmpty('ADM_NOMBRE1');

        $validator
            ->allowEmpty('ADM_NOMBRE2');

        $validator
            ->allowEmpty('ADM_APELLIDO1');

        $validator
            ->allowEmpty('ADM_APELLIDO2');

        $validator
            ->integer('ADM_TELEFONO')
            ->allowEmpty('ADM_TELEFONO');

        $validator
            ->allowEmpty('ADM_MAIL');

        $validator
            ->allowEmpty('ADM_UBICACION');

        $validator
            ->boolean('ADM_DISPONIBILIDAD')
            ->allowEmpty('ADM_DISPONIBILIDAD');

        $validator
            ->integer('ADM_IDUSER')
            ->allowEmpty('ADM_IDUSER');

        return $validator;
    }
}
