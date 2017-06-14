<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Area Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Volunteer
 *
 * @method \App\Model\Entity\Area get($primaryKey, $options = [])
 * @method \App\Model\Entity\Area newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Area[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Area|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Area patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Area[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Area findOrCreate($search, callable $callback = null)
 */
class AreaTable extends Table
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

        $this->table('area');
        $this->displayField('AREA_NOMBRE');
        $this->primaryKey('AREA_ID');

        $this->belongsToMany('Volunteer', [
            'foreignKey' => 'area_id',
            'targetForeignKey' => 'volunteer_id',
            'joinTable' => 'area_volunteer'
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
            ->integer('AREA_ID')
            ->allowEmpty('AREA_ID', 'create');

        $validator
            ->allowEmpty('AREA_NOMBRE');

        $validator
            ->integer('AREA_NUMERO')
            ->allowEmpty('AREA_NUMERO');

        return $validator;
    }
}
