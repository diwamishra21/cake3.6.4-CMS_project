<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class FeedbacksTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->hasMany('FeedbackQuestions');
    }

}
