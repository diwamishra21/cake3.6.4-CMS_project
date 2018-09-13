<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class AddSessionsTable extends Table
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

        $this->setTable('add_sessions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');
        
        $this->belongsTo('Departments', [
            'ClassName' => 'DepartmentsTable',
            'foreignKey' => 'department_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SubDepartments', [
            'ClassName' => 'DepartmentsTable',
            'foreignKey' => 'sub_department_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MeetingWithUsers', [
            'ClassName' => 'UsersTable',
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'ClassName' => 'UsersTable',
            'foreignKey' => 'joinee_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BusinessUnits', [
            'foreignKey' => 'business_unit_id',
            'joinType' => 'INNER'
        ]);
    }
}
