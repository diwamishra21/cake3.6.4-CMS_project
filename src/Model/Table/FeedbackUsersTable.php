<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class FeedbackUsersTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior('Timestamp');

        $this->belongsTo('Feedbacks');
    }

}
