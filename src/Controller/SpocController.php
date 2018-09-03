<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

// For Supervisor role
class SpocController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->layout('admin_layout');
    }

    public function dashboard() {
    	$this->viewBuilder()->layout('admin_layout');
        $userTbl = TableRegistry::getTableLocator()->get('Users');
        // Get joinee
        $users = [];
        $query1 = $userTbl->find('all')
                ->where(['user_type' => 4]);

        foreach ($query1 as $rw) {
            if (!empty($rw)) {
                $users[] = $rw->toArray();
            }
        }
        // pr($users);die;
        $this->set(compact('users'));
        
    }

}
