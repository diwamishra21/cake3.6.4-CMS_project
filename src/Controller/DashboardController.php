<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\NotFoundException;


class DashboardController extends AppController {
    
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->layout('admin_layout');
        $this->loadModel('Dashboard');
    }
    
    //query for displaying charts
    public function dashboard(){
        //code for fething all business unit from table business_unit
        $business_units_table = TableRegistry::get('BusinessUnits');
        $business_units = $business_units_table->find('all', array('fields' => array('id', 'title'),
            'conditions' => array('BusinessUnits.status' => 1)))->toArray();
        //code for counting total in progress from logistics arrangement
        $logistics_arrangement_table = TableRegistry::get('LogisticsArrangement');
        $query = $logistics_arrangement_table->find();
        $toatl = $query->select(['count' => $query->func()->count('id')])->where(['r_status' => 0])->toArray();
        $inProgress = $toatl[0]->count;
        //code for counting total recevied from logistics arrangement
        $logistic_received = $logistics_arrangement_table->find();
        $result = $logistic_received->select(['count' => $query->func()->count('id')])
                ->where(['r_status' => 1])->toArray();
        $received = $result[0]->count;
        //query for getting distinct user id from logistics arrangement
        $unique_useid_log = $logistics_arrangement_table->find();
        $uniqueId = $unique_useid_log->find('all')->select(['user_id'])->distinct(['user_id'])->toArray();
        $arr = [];
        foreach ($uniqueId as $valarr){
            $arr[] = $valarr['user_id'];
        }
        //query for getting total pending from logistics by calling model
        $pending = $this->Dashboard->countPendingLogistics($arr);
        //query for getting city
        $location = $this->Dashboard->fetchCity();
        //code for getting yesterday date
        $yesterday = date('Y-m-d', strtotime("0 days"));
        //code for getting date 12 months ago i.e, i year back
        $previous12month = date('Y-m-d', strtotime("-12 month"));
        //code for getting no of on board in one year
        $onBoard = $this->Dashboard->CountBoardBasedOnDate($yesterday,$previous12month);
        //code for getting no of active/confirmed/rejected/inactive in one  year
        $confirmation = $this->Dashboard->countConfirmationBasedOnDate($yesterday,$previous12month);
        $this->set(compact('business_units','location','onBoard','confirmation','inProgress','received','pending'));
    }
    
    //query for getting department based on business unit selection with ajax
    public function getdepartments(){
        $this->autoRender = false;
        if($this->request->is('ajax')){
            $business_unit = $this->request->data('business_unit_id');
            $department_table = TableRegistry::get('Departments');
            $department = $department_table->find('all', array('fields' => array('id','title'),
                    'conditions' => array('Departments.status' => 1, 'business_unit_id' => $business_unit,
                        'sub_department_id' => 0)))->toArray();
            $html  = '';
            $html .= '<select class="form-control" name="department" id="department">';
            $html .= '<option selected="" value="All">All</option>';
            foreach ($department as $value_department):
                $html .= '<option value="'.$value_department['id'].'">'.$value_department['title'].'</option>';
            endforeach;
            $html .= '</select>';
            echo $html;
        }
    }
    
    //query for getting sub department based on selected department with ajax
    public function getSubDepartments(){
        $this->autoRender = false;
        if($this->request->is('ajax')){
            $department_id = $this->request->data('department_id');
            $subdepartment_table = TableRegistry::get('Departments');
            $subdepartment = $subdepartment_table->find('all', array('fields' => array('id','title'),
                    'conditions' => array('Departments.status' => 1, 'business_unit_id' => $department_id,
                        'sub_department_id <>' => 0)))->toArray();
            $html  = '';
            $html .= '<select name="sub_department" id="sub_department">';
            $html .= '<option selected="" value="All">All</option>';
            foreach ($subdepartment as $val):
                $html .= '<option value="'.$val['id'].'">'.$val['title'].'</option>';
            endforeach;
            $html .= '</select>';
            echo $html;
        }
    }
    
    
    //code for fetching onboard data according to filter and displaying it on dashbord page with ajax
    public function getFilterDashbordData(){
        $this->autoRender = false;
        if($this->request->is('post')){
            $business_units = $this->request->data('business_unit');
            $department = $this->request->data('department');
            $sub_department = $this->request->data('sub_department');
            $location = $this->request->data('location');
            $daysAgo = $this->request->data('days');
            
            if(trim($business_units) == 'All'){
                $business_units = '';
            }
            if(trim($department) == 'All'){
                $department = '';
            }
            if(trim($sub_department) == 'All'){
                $sub_department = '';
            }
            if(trim($location) == 'All'){
                $location = '';
            }
            if(trim($daysAgo) == 'All'){
                $daysAgo = '365';
            }
            
            $yesterday = date('Y-m-d', strtotime("0 days"));
            //code runs and fetches data when selected days is 7 days
            if($daysAgo == 7){
                $previous7days = date('Y-m-d', strtotime("-7 days"));
                //code for getting no of on board in last seven days count record
                $onBoard = $this->Dashboard->CountBoardBasedOnSearch($yesterday,$previous7days,$business_units,
                        $department,$sub_department,$location);
            }
            
            //code runs and fetches data when selected days is 30 days i.e, 1 month
            if($daysAgo == 30){
                $previous7days = date('Y-m-d', strtotime("-30 days"));
                //code for getting no of on board in last seven days count record
                $onBoard = $this->Dashboard->CountBoardBasedOnSearch($yesterday,$previous7days,$business_units,
                        $department,$sub_department,$location);
            }
            
            //code runs and fetches data when selected days is 90 days i.e, 3 month
            if($daysAgo == 90){
                $previous7days = date('Y-m-d', strtotime("-3 month"));
                //code for getting no of on board in last seven days count record
                $onBoard = $this->Dashboard->CountBoardBasedOnSearch($yesterday,$previous7days,$business_units,
                        $department,$sub_department,$location);
            }
            
            //code runs and fetches data when selected days is 180 days i.e, 6 month
            if($daysAgo == 180){
                $previous7days = date('Y-m-d', strtotime("-6 month"));
                //code for getting no of on board in last seven days count record
                $onBoard = $this->Dashboard->CountBoardBasedOnSearch($yesterday,$previous7days,$business_units,
                        $department,$sub_department,$location);
            }
            
            //code runs and fetches data when selected days is 365 days i.e, 1 year
            if($daysAgo == 365){
                $previous7days = date('Y-m-d', strtotime("-12 month"));
                //code for getting no of on board in last seven days count record
                $onBoard = $this->Dashboard->CountBoardBasedOnSearch($yesterday,$previous7days,$business_units,
                        $department,$sub_department,$location);
            }
            echo $onBoard;
        }
    }
    
    //code for fetching confirmation data according to filter and displaying it on dashbord page with ajax
    public function getFilterConfirmation(){
        $this->autoRender = false;
        if($this->request->is('post')){
            $business_units = $this->request->data('business_unit');
            $department = $this->request->data('department');
            $sub_department = $this->request->data('sub_department');
            $location = $this->request->data('location');
            $daysAgo = $this->request->data('days');
            
            if(trim($business_units) == 'All'){
                $business_units = '';
            }
            if(trim($department) == 'All'){
                $department = '';
            }
            if(trim($sub_department) == 'All'){
                $sub_department = '';
            }
            if(trim($location) == 'All'){
                $location = '';
            }
            if(trim($daysAgo) == 'All'){
                $daysAgo = '365';
            }
            //code to get current date
            $yesterday = date('Y-m-d', strtotime("0 days"));
            //code runs when selected date is 7 days
            if($daysAgo == 7){
                $previous7days = date('Y-m-d', strtotime("-7 days"));
                //code for getting no of active/confirmed/rejected/inactive in one  year
                $confirmation = $this->Dashboard->countConfirmationBasedOnSearch($yesterday,$previous7days,
                       $business_units,$department,$sub_department,$location); 
            }
            
            //code runs and fetches data when selected days is 30 days i.e, 1 month
            if($daysAgo == 30){
                $previous7days = date('Y-m-d', strtotime("-30 days"));
                //code for getting no of on board in last seven days count record
                $confirmation = $this->Dashboard->countConfirmationBasedOnSearch($yesterday,$previous7days,
                       $business_units,$department,$sub_department,$location);
            }
            
            //code runs and fetches data when selected days is 90 days i.e, 3 month
            if($daysAgo == 90){
                $previous7days = date('Y-m-d', strtotime("-3 month"));
                //code for getting no of on board in last seven days count record
                $confirmation = $this->Dashboard->countConfirmationBasedOnSearch($yesterday,$previous7days,
                       $business_units,$department,$sub_department,$location);
            }
            
            //code runs and fetches data when selected days is 180 days i.e, 6 month
            if($daysAgo == 180){
                $previous7days = date('Y-m-d', strtotime("-6 month"));
                //code for getting no of on board in last seven days count record
                $confirmation = $this->Dashboard->countConfirmationBasedOnSearch($yesterday,$previous7days,
                       $business_units,$department,$sub_department,$location);
            }
            
            //code runs and fetches data when selected days is 365 days i.e, 1 year
            if($daysAgo == 365){
               $previous365days = date('Y-m-d', strtotime("-12 month"));
                //code for getting no of on board in last seven days count record
                $confirmation = $this->Dashboard->countConfirmationBasedOnSearch($yesterday,$previous365days,
                       $business_units,$department,$sub_department,$location);
            }
           
           echo $confirmation;
        }
    }
}
