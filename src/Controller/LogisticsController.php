<?php

namespace App\Controller;

ob_start();

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

//use Cake\Controller\Controller;
//use Cake\Auth\DefaultPasswordHasher;
/**
 * All User management
 */
class LogisticsController extends AppController {

    public function beforeFilter(Event $event) {
        $this->loadComponent('Flash');
        parent::beforeFilter($event);
    }

    public function index() {
        $this->viewBuilder()->layout('admin_layout');
        $this->loadModel('Logistics');
        $this->loadModel('Departments');
        $locations_table = TableRegistry::get('Locations');
        $locations = $locations_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('Locations.status' => 1)))->toArray();
        
        //$departments_table = TableRegistry::get('Departments');
        //$departments = $departments_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('AND'=>['Departments.status' => 1,'Departments.department_id' => 0])))->toArray();
        //->distinct(['Departments.title'])
        $departments = $this->Departments->find('all')->select(['id','sub_department_id', 'title'])->where(['AND'=>['Departments.status' => 1,'Departments.sub_department_id' => 0]])->toArray();
        //pr($departments);die;
        
        //distinct(['Departments.id'])->
        $sub_departments = $this->Departments->find('all')->select(['id', 'title'])->where(['AND'=>['Departments.status' => 1,'Departments.sub_department_id >' => 0]])->toArray();
        //pr($sub_departments);die;
        
        $business_units_table = TableRegistry::get('BusinessUnits');
        $business_units = $business_units_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('BusinessUnits.status' => 1)))->toArray();
        
        //$logisticrecord = $this->Logistics->find('all', ['conditions' => ['Logistics.status ' => 1]],['contain' => ['Departments', 'BusinessUnits','Locations']],['distinct'=>['Logistics.id']])->toArray();
        //$logisticrecord = $this->Logistics->find('all')->contain(['Departments', 'BusinessUnits', 'Locations'])->distinct(['Logistics.id'])->where(['Logistics.status' => 1])->toArray();
        $logisticrecord = $this->Logistics->find('all')->contain(['Departments', 'BusinessUnits', 'Locations'])->distinct(['Logistics.id'])->toArray();
        
        $this->set(compact('business_units', 'locations','logisticrecord','departments','sub_departments'));
        //pr($logisticrecord);die;
        if ($this->request->is('ajax')) {
            $id = $this->request->data('id');
            $logisticrecords = array();
            $logisticrecords['logistics'] = $this->Logistics->find('all')->contain(['Departments', 'BusinessUnits', 'Locations'])->where(['Logistics.id' => $id])->toArray();
            $get_sub_department_id = $logisticrecords['logistics'][0]['sub_department_id'];
            //pr($get_sub_department_id);die;
            
            $logisticrecords['sub_departments'] = $this->Departments->find('all')->select(['id','sub_department_id', 'title'])->distinct(['Departments.id'])->where(['AND'=>['Departments.status' => 1,'Departments.id' => $get_sub_department_id]])->toArray();
            echo(json_encode($logisticrecords));
            exit;
        }
        
        
    }

    public function addLogistics() {
        $this->viewBuilder()->layout('admin_layout');
        $locations_table = TableRegistry::get('Locations');
        $locations = $locations_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('Locations.status' => 1)))->toArray();


        $business_units_table = TableRegistry::get('BusinessUnits');
        $business_units = $business_units_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('BusinessUnits.status' => 1)))->toArray();

        $departments = "";
        $sub_departments = "";


        if ($this->request->is('post')) {
            
            $logisticsTable = TableRegistry::get('logistics');
            $time = Time::now();
            $bu_name = $this->request->data('bu_name');
            $dept = $this->request->data('dept');
            $sub_dept = $this->request->data('sub_dept');
            $location = $this->request->data('location');
            $title = $this->request->data('title');
            $description = $this->request->data('description');
            $id=$this->request->data('id');
            if($id){
                $updatequery = $logisticsTable->query();
                $update_result = $updatequery->update()
                    ->set(['business_unit_id' => $bu_name,'department_id' => $dept,'sub_department_id' => $sub_dept,'location_id' => $location,'title' => $title,'description' => $description,'time_modified'=>$time])
                    ->where(['id' => $id])->execute();
                if ($update_result) {
                    $class = 'alert alert-success alert-dismissible fade in';
                    $iclass = 'fa fa-check';
                    $close = '&times';
                    $this->Flash->set('Logistics Updated Sucessfully.', ['element' => 'success']);
                    return $this->redirect(['controller' => 'Logistics', 'action' => 'index']);
                    }
            }else{
                $logisticsdata = $logisticsTable->newEntity();
                $logisticsdata->business_unit_id = $bu_name;
                $logisticsdata->department_id = $dept;
                $logisticsdata->sub_department_id = $sub_dept;
                $logisticsdata->location_id = $location;
                $logisticsdata->title = $title;
                $logisticsdata->description = $description;
                $logisticsdata->time_created = $time;
                if ($logisticsTable->save($logisticsdata)) {
                    $class = 'alert alert-success alert-dismissible fade in';
                    $iclass = 'fa fa-check';
                    $close = '&times';
                    $this->Flash->set('Logistics Added Sucessfully.', ['element' => 'success']);
                    return $this->redirect(['controller' => 'Logistics', 'action' => 'index']);
                    }
            }
            
        }
        $this->set(compact('business_units', 'locations', 'departments', 'sub_departments', 'sucessful', 'class', 'iclass', 'close'));
    }
    
    
    public function deletelogistics() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $id = $this->request->data('id');
            $status = $this->request->data('status');
            $logisticsTable = TableRegistry::get('logistics');
            $conditions = array('id' => $id);
            $fields = array('status' => $status);
            $logisticsTable->updateAll($fields, $conditions);
        }
    }
    
    
    public function getbusinessunits(){
        if ($this->request->is(array('ajax'))) {
            $this->autoRender = false;
        }
        if ($this->request->isPost()) {
        $business_units_table = TableRegistry::get('BusinessUnits');
        $business_units = $business_units_table->find('all', array('fields' => array('id', 'title'), 'conditions' => array('BusinessUnits.status' => 1)))->toArray();
        $html = '';
        foreach ($business_units as $key => $value) {
            $html .= '<option value="' . $value->id . '" >' . $value->title . '</option>';
        }
        header('Content-Type: application/json');
        echo json_encode(array($html));
        }
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
