<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class JoineeRoadmapsTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->hasOne('Roadmaps', [
            'foreignKey' => 'roadmap_id'
        ]);
    }

}
