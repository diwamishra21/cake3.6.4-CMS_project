<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class UsersTable extends Table {

    public function initialize(array $config) {
        $this->setTable('users');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');

        $this->hasMany('LogisticsArrangement', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('FeedbackUsers', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('BusinessUnits', [
            'foreignKey' => 'businees_unit'
        ]);
        $this->belongsTo('Departments', [
            'foreignKey' => 'department',
            'propertyName' => 'department'
        ]);
        $this->belongsTo('SubDepart', [
            'className' => 'Departments',
            'foreignKey' => 'sub_department'
        ]);
        $this->belongsTo('Users', [
            'ClassName' => 'Users',
            'foreignKey' => 'manager_emp_id',
            'propertyName' => 'manager_emp_id'
        ]);
        $this->hasMany('FeedbackVerifyUser', [
            'className' => 'FeedbackResponses',
            'foreignKey' => 'response_by'
        ]);
    }

    public function findAuth(\Cake\ORM\Query $query, array $options) {
        $query
                ->find('all')
                ->where(['Users.status !=' => 0, 'ob_status' => 1]);
        return $query;
    }

}
