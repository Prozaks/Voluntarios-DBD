<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mission Model
 *
 * @method \App\Model\Entity\Mission get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mission newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mission[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mission|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mission patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mission[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mission findOrCreate($search, callable $callback = null)
 */
class MissionTable extends Table
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

        $this->table('mission');
        $this->displayField('MIS_ID');
        $this->primaryKey('MIS_ID');
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
            ->integer('MIS_ID')
            ->allowEmpty('MIS_ID', 'create');

        $validator
            ->integer('IN_ID')
            ->allowEmpty('IN_ID');

        $validator
            ->integer('EMER_ID')
            ->allowEmpty('EMER_ID');

        $validator
            ->allowEmpty('MIS_NOMBRE');

        $validator
            ->allowEmpty('MIS_DESCRIPCION');

        $validator
            ->allowEmpty('MIS_ESTADO');

        return $validator;
    }
}
