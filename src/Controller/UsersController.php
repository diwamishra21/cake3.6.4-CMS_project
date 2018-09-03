<?php

namespace App\Controller;

ob_start();

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\View\Form\EntityContext;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\NotFoundException;

//use Cake\Controller\Controller;
//use Cake\Auth\DefaultPasswordHasher;
/**
 * All User management
 */
class UsersController extends AppController {

    public function beforeFilter(Event $event) {
        $this->loadComponent('Flash');
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'searchuser', 'addUser', 'updatesearchuser', 'logisticinsert']);
    }

//query for login via post method
    public function login() {
        $this->viewBuilder()->layout('login');
        $this->loadModel('Users');
        $user = '';
        if ($this->request->is('post')) {
            $user = $this->Auth->identify($this->request->data);
            if ($user) {
                $this->Auth->setUser($user);
                $this->redirecturlafterlogin();
            } else {
                $this->Flash->set('Invalid Username or Password, try again.', [
                    'element' => 'error'
                ]);
            }
        }
        $this->set(compact('user'));
    }

//query to redirect to page after successfull login
    public function redirecturlafterlogin() {
        $user = $this->Auth->user();
        $session = $this->request->session();
        $session_data = $session->read();
        $user_type = $session_data["Auth"]["User"]["user_type"];

        if ($user_type == 1) {
            return $this->redirect(['controller' => 'Users', 'action' => 'manageUser']);
        } else if ($user_type == 4) {
            return $this->redirect(['controller' => 'Users', 'action' => 'employeeDashboard']);
        } else if ($user_type == 2) {  // Supervisor
            return $this->redirect(['controller' => 'Supervisor', 'action' => 'dashboard']);
        } else if ($user_type == 3) {
            return $this->redirect(['controller' => 'Spoc', 'action' => 'dashboard']);
        }
    }

//method for displaying users details on dashboard page
    public function manageUser() {
        $this->viewBuilder()->layout('admin_layout');
        $userTbl = TableRegistry::getTableLocator()->get('Users');
        // Get joinee
        $users = [];
        $query1 = $userTbl->find('all')
                ->where(['user_type' => 4, 'ob_status' => 1])->order(['id' => 'DESC']);
        foreach ($query1 as $rw) {
            if (!empty($rw)) {
                $users[] = $rw->toArray();
            }
        }
      $userTbl = TableRegistry::getTableLocator()->get('logistics');
     $query2 = $userTbl->find('all')->where(['status'=>'1'])->toArray();
           
		  
	   $cstatusTable = TableRegistry::getTableLocator()->get('departments');
        $query4 = $cstatusTable->find('all')->where(['status' => 1]);
        $cstatusData = [];
        foreach ($query4 as $stts) {
            if (!empty($stts)) {
                $cstatusData[$stts->id] = $stts->title;
            }
        }
	   	   $locationTable=TableRegistry::getTableLocator()->get('locations');
	   $locationrecord=$locationTable->find()->where(['status'=>'1']);
	   $locationarr= [];
	   foreach($locationrecord as $locationrecords){
		   if(!empty($locationrecords)) {
		    $locationarr[$locationrecords->id]=$locationrecords->title;
	   }
	   }
		  		   
        $this->set(compact('users','query2','cstatusData','locationarr'));
    }

//method for fetching data based on id of selected row with ajax for dashboard page
    public function fetchDashboardPopup() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $id = $this->request->data['id'];
            //$users = TableRegistry::get('Users')->find()
                    //->where(['id' => $id])
                    //->contain(['LogisticsArrangement'])
                   // ->toArray();
               $connection = ConnectionManager::get('default');
            $sql = "SELECT users.* ,l.user_id,l.logistic_id from users LEFT JOIN logistics_arrangement as l on l.user_id=users.id where  users.id = '" . $id . "'   ";
            $users  = $connection->execute($sql)->fetchAll('assoc');
            if (!empty($users)) {
                $arrData = json_encode($users);
            }
            echo $arrData;
        }
    }

    public function searchuser() {
        $this->autoRender = false;

        if ($this->request->is('ajax')) {
            $search_data = $this->request->data('search');
            $connection = ConnectionManager::get('default');
            $sql = "SELECT * from users where  email = '" . $search_data . "' or emp_id = '" . $search_data . "'  or doj = '" . $search_data . "'  ";
            $userresult = $connection->execute($sql)->fetchAll('assoc');

            $resultArr = [];
            foreach ($userresult as $result) {

                $resultArr[] = $result;
            }
            if (!empty($resultArr)) {
                echo json_encode($resultArr);
            }
        }
        $this->set(compact('userrecord', 'userresult'));
    }

    public function updatesearchuser() {
        if ($this->request->is('post')) {

            $ob_status = $this->request->data('ob_status');
            $empid = $this->request->data('emp_id');
            $update_query = TableRegistry::get('users');
            $query = $update_query->query();
            $result = $query->update()
                    ->set(['users.ob_status' => '1'])
                    ->where(['users.emp_id' => $empid])
                    ->execute();


            //$this->Flash->set('employee is onboarding' );
            $this->Flash->set('');
            return $this->redirect(['controller' => 'Users', 'action' => 'addUser']);
        }
        $this->set(compact(''));
        exit;
    }

    public function userManagement() {
        $this->viewBuilder()->layout('admin_layout');
       $usersTable = TableRegistry::get('users');
       $business_units_table = TableRegistry::get('BusinessUnits');
        $department_table = TableRegistry::get('Departments');

        $business_units = $business_units_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('BusinessUnits.status' => 1)))->toArray();

        $departments = $department_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('Departments.sub_department_id' => 0)))->toArray();
        
        $sub_departments = $department_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('Departments.sub_department_id !=' => 0)))->toArray();
      
        $conn = ConnectionManager::get('default');
        $query = "select u.*, d.title as department from users as u inner join departments as d on u.department = d.id order by u.id desc ";
         $userrecord = $conn->execute($query)->fetchAll('assoc');
        $this->set(compact('userrecord','business_units','departments','sub_departments'));
        if ($this->request->is('ajax')) {
            $id = $this->request->data('id');
            $userrecords = $this->Users->find('all')->where(['Users.id' => $id])->toArray();
            echo(json_encode($userrecords));
            exit;
        }
    }

    public function manageRole() {
        $this->viewBuilder()->layout('admin_layout');
        $accessCatTbl = TableRegistry::getTableLocator()->get('AccessCategories');
        $roleTbl = TableRegistry::getTableLocator()->get('Roles');

        if ($this->request->is('post')) {
            $requestData = $this->request->data;
            $role = $roleTbl->newEntity();
            $role->title = $requestData['name'];
            $role->description = $requestData['description'];
            $accesDt = "";
            if (!empty($requestData['access-cat'])) {
                $accesDt = json_encode($requestData['access-cat']);
            }
            $role->access = $accesDt;
            $role->status = 1;
            $roleTbl->save($role);
        }

        // Get category list
        $query1 = $accessCatTbl->find('threaded');
        $aCatData = [];
        foreach ($query1 as $rw) {
            if (!empty($rw)) {
                $aCatData[] = $rw->toArray();
            }
        }
        // Get role data
        $query2 = $roleTbl->find('all')
                ->where(['status' => 1]);
        $roleData = [];
        foreach ($query2 as $rw) {
            if (!empty($rw)) {
                $roleData[] = $rw->toArray();
            }
        }
        // pr($aCatData);die;
        $this->set(compact('aCatData', 'roleData'));
    }

    public function roadmap() {
        $this->viewBuilder()->layout('admin_layout');
        $usertable = TableRegistry::getTableLocator()->get('Users');
        $roadmaplisting = $usertable->find()->where(['ob_status' => '1'])->toArray();
        $departmentdata = TableRegistry::getTableLocator()->get('departments');
        $departmentrecord = $departmentdata->find()->where(['status' => 1])->toArray();
        $departmentarray = [];
        foreach ($departmentrecord as $departmentarrays) {
            if (!empty($departmentarrays)) {
                $departmentarray[$departmentarrays->id] = $departmentarrays->title;
            }
        }

        $userTbl = TableRegistry::getTableLocator()->get('logistics');
        $query2 = $userTbl->find('all')->where(['status' => '1'])->toArray();


        $locationTable = TableRegistry::getTableLocator()->get('locations');
        $locationrecord = $locationTable->find()->where(['status' => '1']);
        $locationarr = [];
        foreach ($locationrecord as $locationrecords) {
            if (!empty($locationrecords)) {
                $locationarr[$locationrecords->id] = $locationrecords->title;
            }
        }
        $business_units_table = TableRegistry::get('BusinessUnits');
        $business_units = $business_units_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('BusinessUnits.status' => 1)))->toArray();
        $this->set(compact('roadmaplisting', 'departmentarray', 'locationarr', 'query2', 'business_units'));
    }
    
    
    
    
    public function addsession(){
         if ($this->request->is('post')) {
             $message ="";
            foreach($this->request->data('bu_name') as $k => $bu_name) {
                    $add_sessionsTable = TableRegistry::get('add_sessions');
                    $time = Time::now();
                    $joinee_id = $this->request->data('as_id_0');
                    $bu_name_0 = $this->request->data('bu_name')[$k];
                    $dept_0 = $this->request->data('dept')[$k];
                    $sub_dept_0 = $this->request->data('sub_dept')[$k];
                    $user_id_0 = $this->request->data('user_id')[$k];
                    $note_0 = $this->request->data('note')[$k];
                    $session_date_0 = $this->request->data('session_date')[$k];
                    $start_time_0 = $this->request->data('start_time')[$k];
                    $end_time_0 = $this->request->data('end_time')[$k];
                    //pr("$joinee_id - ".$joinee_id);die;
                    //pr("bu_name_0 - ".$bu_name_0."dept_0 - ".$dept_0."sub_dept_0 - ".$sub_dept_0."user_id_0 - ".$user_id_0."note_0 - ".$note_0."session_date_0 - ".$session_date_0."start_time_0 - ".$start_time_0."end_time_0 - ".$end_time_0);

                    $add_sessionsdata = $add_sessionsTable->newEntity();
                    $add_sessionsdata->joinee_id = $joinee_id;
                    $add_sessionsdata->business_unit_id = $bu_name_0;
                    $add_sessionsdata->department_id = $dept_0;
                    $add_sessionsdata->sub_department_id = $sub_dept_0;
                    $add_sessionsdata->user_id = $user_id_0;
                    $add_sessionsdata->note = $note_0;
                    $add_sessionsdata->session_date = $session_date_0;
                    $add_sessionsdata->start_time = $start_time_0;
                    $add_sessionsdata->end_time = $end_time_0;
                    $add_sessionsdata->time_created = $time;

                    if ($add_sessionsTable->save($add_sessionsdata)) {
                        $message = "Session added Sucessfully";
                    }else{
                        $message = "Error in data insertion";
                    }
                }
                    $class = 'alert alert-success alert-dismissible fade in';
                    $iclass = 'fa fa-check';
                    $close = '&times';
                    $this->Flash->set($message, ['element' => 'success']);
                    return $this->redirect(['controller' => 'Users', 'action' => 'roadmap']);
              }
            
    }
    
    /* function used for roadmap page edit */
    public function fetchuserbyid(){
        if ($this->request->is('ajax')) {
            $id = $this->request->data('id');
            $usertable = TableRegistry::getTableLocator()->get('Users');
            $userbyid = $usertable->find('all')->select(['id','user_type','username','user_type','emp_id','first_name', 'last_name', 'doj'])->where(['id'=>$id])->toArray();
            //pr($get_sub_department_id);die;
            echo(json_encode($userbyid));
            exit;
        }
    }
    
    
    
    
    /* function for showing session list */
    public function sessionlist(){
            if ($this->request->is('post')) {
            $add_sessionsTable = TableRegistry::get('add_sessions');
            $time = Time::now();
            $joinee_id = $this->request->data('as_id_0');
            $bu_name_0 = $this->request->data('bu_name_0');
            $dept_0 = $this->request->data('dept_0');
            $sub_dept_0 = $this->request->data('sub_dept_0');
            $user_id_0 = $this->request->data('user_id_0');
            $note_0 = $this->request->data('note_0');
            $session_date_0 = $this->request->data('session_date_0');
            $start_time_0 = $this->request->data('start_time_0');
            $end_time_0 = $this->request->data('end_time_0');
            //pr("$joinee_id - ".$joinee_id);die;
            //pr("s_time".$start_time_0."e_time -".$end_time_0);die;
            
            $add_sessionsdata = $add_sessionsTable->newEntity();
            $add_sessionsdata->joinee_id = $joinee_id;
            $add_sessionsdata->business_unit_id = $bu_name_0;
            $add_sessionsdata->department_id = $dept_0;
            $add_sessionsdata->sub_department_id = $sub_dept_0;
            $add_sessionsdata->user_id = $user_id_0;
            $add_sessionsdata->note = $note_0;
            $add_sessionsdata->session_date = $session_date_0;
            $add_sessionsdata->start_time = $start_time_0;
            $add_sessionsdata->end_time = $end_time_0;
            $add_sessionsdata->time_created = $time;
            
            if ($add_sessionsTable->save($add_sessionsdata)) {
                    $class = 'alert alert-success alert-dismissible fade in';
                    $iclass = 'fa fa-check';
                    $close = '&times';
                    $this->Flash->set('Logistics Added Sucessfully.', ['element' => 'success']);
                    return $this->redirect(['controller' => 'Users', 'action' => 'roadmap']);
              }
            }
    }
    
    
    /* function used for getting user name on basis of subdepartment */
    public function getmeetingwithuser() {
        if ($this->request->is(array('ajax'))) {
            $this->autoRender = false;
        }
        if ($this->request->isPost()) {
            $business_unit_id = $this->request->data['business_unit_id'];
            $department_id = $this->request->data['department_id'];
            $sub_department_id = $this->request->data['sub_department_id'];
            $users_table = TableRegistry::get('Users');
            $meeting_with_username = $users_table->find('all', array(
                        'fields' => array('id', 'first_name', 'last_name'),
                        'conditions' => array('AND' => ['Users.businees_unit' => $business_unit_id, 'Users.department' => $department_id, 'Users.sub_department' => $sub_department_id])))->toArray();

            $html = '';
            foreach ($meeting_with_username as $key => $value) {
                $html .= '<option value="' . $value->id . '" >' . $value->first_name .' '. $value->last_name . '</option>';
            }
            header('Content-Type: application/json');
            echo json_encode(array($html));
        }
    }
    

//method for fetching data based on id of selected row with ajax for logistics page
    public function  fetchroadmapPopup(){
$this->autoRender = false;
        if ($this->request->is('ajax')) {
            $id = $this->request->data['id'];
              $connection = ConnectionManager::get('default');
            $sql = "SELECT users.* ,l.user_id,l.logistic_id from users LEFT JOIN logistics_arrangement as l on l.user_id=users.id where  users.id = '" . $id . "'   ";
            $users  = $connection->execute($sql)->fetchAll('assoc');
            if (!empty($users)) {
                $arrData = json_encode($users);
            }
            echo $arrData;
        }

}

public function addbussiness(){
	$this->autoRender = false;
	 if ($this->request->is('ajax')) {
	$business_units_table = TableRegistry::get('BusinessUnits');
        $business_units = $business_units_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('BusinessUnits.status' => 1)))->toArray();     
	    
            $html = '';
        foreach ( $business_units as  $value) {
            $html .= '<option value="' . $value->id . '" >' .$value->title. '</option>';
        }
        header('Content-Type: application/json');
        echo json_encode(array($html));
        }
	 
	 
	 
	
}



    public function report() {
        $this->viewBuilder()->layout('admin_layout');
    }

    public function logistics() {
        $time1 = Time::now();
        $this->set('active', 'logisticas');
		$this->loadModel('Users');
		$this->loadModel('LogisticsArrangement');
	        $this->viewBuilder()->layout('admin_layout');
          
       $userrecord=$this->Users->find()->where(['ob_status' => '1'])->contain(['LogisticsArrangement'])->toArray();
	    $logisticsTable = TableRegistry::get('logistics');
       $logistics = $logisticsTable->find()->where(['status' => '1'])->toArray();
	   $cstatusTable = TableRegistry::getTableLocator()->get('departments');
        $query4 = $cstatusTable->find('all')->where(['status' => 1]);
        $cstatusData = [];
        foreach ($query4 as $stts) {
            if (!empty($stts)) {
                $cstatusData[$stts->id] = $stts->title;
            }
        }
	   	   $locationTable=TableRegistry::getTableLocator()->get('locations');
	   $locationrecord=$locationTable->find()->where(['status'=>'1']);
	   $locationarr= [];
	   foreach($locationrecord as $locationrecords){
		   if(!empty($locationrecords)) {
		    $locationarr[$locationrecords->id]=$locationrecords->title;
	   }
	   }
	        
        $this->set(compact('userrecord', 'logistics','cstatusData','locationarr'));
    }

//method for fetching data based on id of selected row with ajax for logistics page
    public function fetchlogisticsPopup() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $id = $this->request->data['id'];
		$connection = ConnectionManager::get('default');
            $sql = "SELECT users.* ,l.user_id from users LEFT JOIN logistics_arrangement as l on l.user_id=users.id where  users.id = '" . $id . "'   ";
            $users  = $connection->execute($sql)->fetchAll('assoc');
            //$users = TableRegistry::get('Users')->find()
                   // ->where(['id' => $id])
                   // ->toArray();
            if (!empty($users)) {
                $arrData = json_encode($users);
            }
            echo $arrData;
        }
    }
	//method for matching fetching user and sub_department data based on id of selected row with ajax for roadmap page
    public function matchingusers() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $sub_dept = $this->request->data('sub_dept');
			 
		//$connection = ConnectionManager::get('default');
            //$sql = "SELECT emp_id,sub_department from users where  sub_department = '" . $id . "'   ";
            //$users  = $connection->execute($sql)->fetchAll('assoc');
			  $user_table = TableRegistry::get('Users');
            $users = $user_table->find('all')->where(['sub_department'=>$sub_dept])->toArray();
			
               
            $html = '';
        foreach ($users as  $value) {
            $html .= '<option value="' . $value->id . '" >' .$value->first_name. ' '.$value->last_name.'&nbsp('.$value->emp_id . ')</option>';
        }
        header('Content-Type: application/json');
        echo json_encode(array($html));
        }
    }
	
	
//method for insert logistic arrangement  data based on id of selected row with ajax for logistics page
    public function logisticinsert() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $time1 = Time::now();
            $userid = $this->request->data('userid');
            $logistic_id = $this->request->data('logistic_id');
	
            $logisticsarrangementTable = TableRegistry::get('logistics_arrangement');
           
            
                           foreach($logistic_id as $logistic_ids){
                        $logdata = $logisticsarrangementTable->newEntity();
                       $logdata->logistic_id= $logistic_ids;
                   $logdata->user_id = $userid;
             $logdata->time_created= $time1;
                          if ($logisticsarrangementTable->save($logdata)) {
                
            }
        }
        }
        exit;
    }

    public function viewUsers() {
        $this->viewBuilder()->layout('admin_layout');
    }

    public function employee() {
        $this->viewBuilder()->layout('admin_layout');
    }

    public function changepassword() {
        $this->viewBuilder()->layout('admin_layout');
        if ($this->request->is('post')) {
            $oldpassword = $this->request->data['old_password'];
            $password1 = $this->request->data['new_password'];
            $password2 = $this->request->data['confirm_password'];
            $user_id = $this->request->data['userid'];
            $hasher = new DefaultPasswordHasher();
            $password = $hasher->hash($password1);
            $connection = ConnectionManager::get('default');
            $connection->update('users', ['password' => $password], ['id' => $user_id]);
            $sucessful = 'Password changed sucessfully';
            $class = 'alert alert-success alert-dismissible fade in';
            $iclass = 'fa fa-check';
            $close = '&times';
        }
        $this->set(compact('sucessful', 'class', 'iclass', 'close'));
    }

    public function forgotpassword() {
        $this->viewBuilder()->layout('');
    }

    public function supervisorManageUser() {
        $this->viewBuilder()->layout('admin_layout');
    }

    public function confirmation() {
        $this->viewBuilder()->layout('admin_layout');
    }

// method for logout
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function addUser() {


        $this->viewBuilder()->layout('admin_layout');
        $this->loadModel('Users');
        if ($this->request->is('post')) {
            $time = Time::now();
            $id = $this->request->data('id');
            $username = $this->request->data('username');
            $user_type = $this->request->data('user_type');
            $auth_type = $this->request->data('auth_type');
            $first_name = $this->request->data('first_name');
            $last_name = $this->request->data('last_name');
            $doj = $this->request->data('doj');

            $empid = $this->request->data('emp_id');
            $email = $this->request->data('email');
            $business = $this->request->data('businees_unit');
            $mobile = $this->request->data('mobile');
            $city = $this->request->data('city');
            $country = $this->request->data('country');
            $dept = $this->request->data('department');
            $subdept = $this->request->data('sub_department');

            $designation = $this->request->data('designation');
            $band = $this->request->data('band');
            $manager_emp_id = $this->request->data('manager_emp_id');
            $bhr_emp_id = $this->request->data('bhr_emp_id');
            $password = $this->request->data('password');
            //$password1 = md5($this->request->data['password']);

            $usersTable = TableRegistry::get('users');
            $usersdata = $usersTable->newEntity();
            $usersdata->user_type = $user_type;
            $usersdata->first_name = $first_name;
            $usersdata->last_name = $last_name;

            $usersdata->doj = $doj;
            $usersdata->username = $username;
            $usersdata->user_type = $user_type;
            $usersdata->emp_id = $empid;
            $usersdata->email = $email;
            $usersdata->businees_unit = $business;

            $usersdata->businees_unit = $business;
            $usersdata->mobile = $mobile;
            $usersdata->city = $city;
            $usersdata->country = $country;
            $usersdata->sub_department = $subdept;

            $usersdata->designation = $designation;
            $usersdata->manager_emp_id = $manager_emp_id;
            $usersdata->bhr_emp_id = $bhr_emp_id;
            $usersdata->password = $password;
            $userdata->time_created = $time;

            if (empty($id)) {
                if ($usersTable->save($usersdata)) {
                    $id = $usersdata->id;
                    return $this->redirect(['controller' => 'Users', 'action' => 'userManagement']);
                    $sucessful = "User added sucessfully";
                }
            } else {
                $conditions = array('id' => $id);
                $fields = array('username' => $username, 'city' => $city, 'user_type' => $user_type, 'emp_id' => $empid, 'email' => $email, 'mobile' => $mobile, 'department' => $dept, 'sub_department' => $subdept, 'designation' => $designation, 'country' => $country, 'first_name' => $first_name, 'last_name' => $last_name, 'auth_type' => $auth_type, 'businees_unit' => $business, 'manager_emp_id' => $manager_emp_id, 'bhr_emp_id' => $bhr_emp_id, 'band' => $band);
                $usersTable->updateAll($fields, $conditions);
            }
        }


        $this->set(compact('sucessful'));
    }

// function for adding user when user is not in the database

    public function addUsers() {
        $this->viewBuilder()->layout('admin_layout');
        $this->loadModel('Users');
        $business_units_table = TableRegistry::get('BusinessUnits');
        $business_units = $business_units_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('BusinessUnits.status' => 1)))->toArray();
            
        if ($this->request->is('post')) {
            $time = Time::now();
            $id = $this->request->data('id');
            $username = $this->request->data('username');
            $user_type = $this->request->data('user_type');
            $auth_type = $this->request->data('auth_type');
            $first_name = $this->request->data('first_name');
            $last_name = $this->request->data('last_name');
            $doj = $this->request->data('doj');

            $empid = $this->request->data('emp_id');
            $email = $this->request->data('email');
            $business = $this->request->data('businees_unit');
            $mobile = $this->request->data('mobile');
            $city = $this->request->data('city');
            $country = $this->request->data('country');
            $dept = $this->request->data('department');
            $subdept = $this->request->data('sub_department');
            $status = $this->request->data('status');
            $designation = $this->request->data('designation');
            $band = $this->request->data('band');
            $manager_emp_id = $this->request->data('manager_emp_id');
            $manager_name = $this->request->data('manager_name');
            $manager_email = $this->request->data('manager_email');
            $bhr_emp_id = $this->request->data('bhr_emp_id');
            $bhr_name = $this->request->data('bhr_name');
            $bhr_email = $this->request->data('bhr_email');
            $password = $this->request->data('password');
            //$password1 = md5($this->request->data['password']);

            $usersTable = TableRegistry::get('users');
            $usersdata = $usersTable->newEntity();
            $usersdata->user_type = $user_type;
            $usersdata->first_name = $first_name;
            $usersdata->last_name = $last_name;

            $usersdata->doj = $doj;
            $usersdata->username = $username;
            $usersdata->user_type = $user_type;
            $usersdata->emp_id = $empid;
            $usersdata->email = $email;
            $usersdata->businees_unit = $business;
            $usersdata->status = $status;
            $usersdata->businees_unit = $business;
            $usersdata->mobile = $mobile;
            $usersdata->city = $city;
            $usersdata->country = $country;
            $usersdata->sub_department = $subdept;
            $usersdata->department = $dept;
            $usersdata->auth_type = $auth_type;
            $usersdata->band = $band;
            $usersdata->designation = $designation;
            $usersdata->manager_emp_id = $manager_emp_id;
            $usersdata->manager_name = $manager_name;
            $usersdata->manager_email = $manager_email;
            $usersdata->bhr_emp_id = $bhr_emp_id;
            $usersdata->bhr_name = $bhr_name;
            $usersdata->bhr_email = $bhr_email;
            $usersdata->password = $password;
            $usersdata->time_created = $time;
             

            if ($usersTable->save($usersdata)) {
                $id = $usersdata->id;
                $sucessful = 'User Added Sucessfully';
                $class = 'alert alert-success alert-dismissible fade in';
                $iclass = 'fa fa-check';
                $close = '&times';
            }
           
        }

        $this->set(compact('sucessful', 'class', 'iclass', 'close','business_units'));
    }

    public function deleteuser() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {

            $id = $this->request->data('id');
            $status = $this->request->data('status');
            $usersTable = TableRegistry::get('users');
            $conditions = array('id' => $id);
            $fields = array('status' => $status);
            $usersTable->updateAll($fields, $conditions);
        }
    }

    // employee dashboard function
    public function employeeDashboard() {
        $session = $this->request->session();
        $session_data = $session->read();
        $user_id = $session_data["Auth"]["User"]["id"];
       
        $usersTable = TableRegistry::get('users');
        $usersLogistic = TableRegistry::get('logistics_arrangement');
       
        $conn = ConnectionManager::get('default');
        $id = $this->request->data('id');
        $sql = "select l.*, lg.title as logistic_name from logistics_arrangement as l inner join logistics as lg on l.logistic_id = lg.id where l.user_id = '".$user_id."'";
        $logistic_detail = $conn->execute($sql)->fetchAll('assoc');

        $query2 = "select u.*, d.title as department, d1.title as sub_department, bu.title as businees_unit from users as u inner join departments as d on u.department = d.id  left join departments as d1 on u.sub_department = d1.id left join business_units as bu on bu.id = u.businees_unit where u.id = '".$user_id."'";
         $user_details = $conn->execute($query2)->fetchAll('assoc');
        
        if($this->request->is('ajax'))
        {
            $r_status = $this->request->data('r_status');
            $id = $this->request->data('id');
             
            $conditions = array('id'=>$id);
            $fields = array('r_status' => $r_status);
            $usersLogistic->updateAll($fields, $conditions);
        }


        //queries to track status bar in dashboard 
         $query = "select count(id) as no from logistics_arrangement where user_id = '".$user_id."'";
         $logistic_status = $conn->execute($query)->fetchAll('assoc');
          $value = $logistic_status[0]['no'];

         if($value != 0)
         {
            $status1 = "complete";
         }
         else
         {
            $status1 = "disabled";
         }


          $query3 = "select count(id) as nos from logistics_arrangement where user_id = '".$user_id."' AND  r_status = '0' ";
         $logistic = $conn->execute($query3)->fetchAll('assoc');
          $value1 = $logistic[0]['nos'];

         if($value1 != 0)
         {
            $status2 = 1;
         }
         else
         {
            $status2 = 0;
         }


        $this->set(compact('user_deatil','logistic_detail','status1','value','logistic_status','user_details','status2')); 
    }

   public function getdepartments() {
        if ($this->request->is(array('ajax'))) {
            $this->autoRender = false;
        }
        if ($this->request->isPost()) {
            $business_unit_id = $this->request->data['business_unit_id'];
             $this->loadModel('Departments');
            /*$departments_data = $departments_table->find('all', array(
                'fields' => array('id', 'title'),
                'conditions' => array('AND' => ['Departments.business_unit_id' => $business_unit_id, 'Departments.sub_department_id =' => 0])))->toArray();*/
            
            $departments_data = $this->Departments->find('all')->select(['id','title'])->distinct(['Departments.title'])->where(['AND'=>['Departments.business_unit_id' => $business_unit_id,'Departments.sub_department_id' => 0]])->toArray();
        }
        $html = '';
        foreach ($departments_data as $key => $value) {
            $html .= '<option value="' . $value->id . '" >' . $value->title . '</option>';
        }
        header('Content-Type: application/json');
        echo json_encode(array($html));
    }


   public function getsubdepartments() {
        if ($this->request->is(array('ajax'))) {
            $this->autoRender = false;
        }
        if ($this->request->isPost()) {
            $business_unit_id = $this->request->data['business_unit_id'];
            $department_id = $this->request->data['id'];
            $departments_table = TableRegistry::get('Departments');
            $sub_departments = $departments_table->find('all', array(
                        'fields' => array('id', 'title'),
                        'conditions' => array('AND' => ['Departments.business_unit_id' => $business_unit_id, 'Departments.sub_department_id' => $department_id])))->toArray();

            $html = '';
            foreach ($sub_departments as $key => $value) {
                $html .= '<option value="' . $value->id . '" >' . $value->title . '</option>';
            }
            header('Content-Type: application/json');
            echo json_encode(array($html));
        }
    }


}
