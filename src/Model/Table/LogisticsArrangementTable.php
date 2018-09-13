<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LogisticsArrangement Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\LogisticsTable|\Cake\ORM\Association\BelongsTo $Logistics
 *
 * @method \App\Model\Entity\LogisticsArrangement get($primaryKey, $options = [])
 * @method \App\Model\Entity\LogisticsArrangement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LogisticsArrangement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LogisticsArrangement|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LogisticsArrangement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LogisticsArrangement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LogisticsArrangement findOrCreate($search, callable $callback = null, $options = [])
 */
class LogisticsArrangementTable extends Table
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

        $this->setTable('logistics_arrangement');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Logistics', [
            'foreignKey' => 'logistic_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->allowEmpty('status');

        $validator
            ->dateTime('time_created')
            ->requirePresence('time_created', 'create')
            ->allowEmpty('time_created');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
    

        return $rules;
    }
}
