<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class FeedbackQuestionsTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->hasOne('FeedbackResponses');
        $this->belongsTo('Questions', [
            'foreignKey' => 'question_id'
        ]);
    }

    function removeBulk($feedback_id) {
        return $this->deleteAll(['feedback_id' => $feedback_id]);
    }

}
