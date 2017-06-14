<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emergency Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Volunteer
 *
 * @method \App\Model\Entity\Emergency get($primaryKey, $options = [])
 * @method \App\Model\Entity\Emergency newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Emergency[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emergency|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emergency patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Emergency[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emergency findOrCreate($search, callable $callback = null)
 */
class EmergencyTable extends Table
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

        $this->table('emergency');
        $this->displayField('EMER_NOMBRE');
        $this->primaryKey('EMER_ID');


        $this->belongsToMany('Volunteer', [
            'foreignKey' => 'emergency_id',
            'targetForeignKey' => 'volunteer_id',
            'joinTable' => 'emergency_volunteer'
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
            ->integer('EMER_ID')
            ->allowEmpty('EMER_ID', 'create');

        $validator
            ->integer('AREA_ID')
            ->requirePresence('AREA_ID', 'create')
            ->notEmpty('AREA_ID');

        $validator
            ->integer('ADM_ID')
            ->requirePresence('ADM_ID', 'create')
            ->notEmpty('ADM_ID');

        $validator
            ->allowEmpty('EMER_NOMBRE');

        $validator
            ->date('EMER_FECHA')
            ->allowEmpty('EMER_FECHA');

        $validator
            ->allowEmpty('EMER_ESTADO');

        $validator
            ->allowEmpty('EMER_DESCRIPCION');

        $validator
            ->allowEmpty('EMER_GRAVEDAD');

        $validator
            ->integer('EMER_RANGO')
            ->allowEmpty('EMER_RANGO');

        return $validator;
    }
}
