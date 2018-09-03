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
    }

    public function findAuth(\Cake\ORM\Query $query, array $options) {
        $query
                ->find('all')
                ->where(['Users.status' => 1]);
        return $query;
    }

}
