<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;

class DashboardTable extends Table {

    public function initialize(array $config) {
        parent::initialize($config);
        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    //query for fetching cities from city column in users table
    public function fetchCity() {
        $query = $this->find();
        $query->select(['city']);
        $query->distinct(['city']);
        $query->where(['city <>' => '']);
//                if(!empty($year)){
//                $query->where(['YEAR(complaint_id_genrate_date)' => $year]);
//                }
        $query->order(['city']);
        $city = $query->toArray();
        return $city;
    }

    //query for counting total pending logistics
    public function countPendingLogistics($arr) {
        $query = $this->find();
        $query->select(['count' => $query->func()->count('id')]);
        $query->where(['ob_status' => 1]);
        $query->where(['id NOT IN' => $arr]);
        $total = $query->toArray();
        $result = $total[0]->count;
        return $result;
    }
    
    //query to get onboard count data datewise of one year
    public function CountBoardBasedOnDate($yesterday, $previous12month) {
        $query = $this->find();
        $row = $query->select(['date' => 'DATE(created)', 'value' => $query->func()->count('*')])
                ->where(['ob_status' => 1])
                ->where(['DATE(created) <=' => $yesterday, 'DATE(created) >=' => $previous12month])
                ->group('DATE(created)')
                ->order('DATE(created)');
        $uData = [];
        foreach ($row as $r) {
            $uData[] = $r->toArray();
        }
        if (!empty($uData)) {
            $uData = json_encode($uData);
        }
        return $uData;
    }
    
    //qyery to get Active/confirmed/rejected and inactive count data datewise of one year
    public function countConfirmationBasedOnDate($yesterday, $previous12month) {
        $query = $this->find();
        $row = $query->select(['date' => 'DATE(created)', 'value' => $query->func()->count('*'), 'status'])
                        ->where(['ob_status' => 1])
                        ->where(['DATE(created) <=' => $yesterday, 'DATE(created) >=' => $previous12month])
                        ->group('DATE(created)')
                        ->order('DATE(created)')->toArray();
        $uData = [];
        foreach ($row as $r) {
            $tmp = [];
            $tmp['date'] = $r['date'];
            $tmp['value1'] = "";
            $tmp['value2'] = "";
            $tmp['value3'] = "";
            $tmp['value4'] = "";
            if($r['status'] == 1){
                $tmp['value1'] = $r['value'];
            }
            if($r['status'] == 2){
                $tmp['value2'] = $r['value'];
            }
            if($r['status'] == 3){
                $tmp['value3'] = $r['value'];
            }
            if($r['status'] == 0){
                $tmp['value4'] = $r['value'];
            }
            $uData[]=$tmp;
        }
        
        if(!empty($uData)){
            $uData = json_encode($uData);
        }
        return $uData;
    }
    
    //query to get board count data datewise based on search
     public function CountBoardBasedOnSearch($fromdate,$todate,$business_unit = '', 
             $department = '', $sub_department = '', $city = ''){
        $query = $this->find();
        $row = $query->select(['date' => 'DATE(created)', 'value' => $query->func()->count('*')])
                ->where(['ob_status' => 1]);
                    if (!empty($business_unit)) {
                        $row->where(['businees_unit' => $business_unit]);
                    }
                    if (!empty($department)) {
                        $row->where(['department' => $department]);
                    }
                    if (!empty($sub_department)) {
                        $row->where(['sub_department' => $sub_department]);
                    }
                    if (!empty($city)) {
                        $row->where(['city' => $city]);
                    }
            $row->where(['DATE(created) <=' => $fromdate, 'DATE(created) >=' => $todate])
                ->group('DATE(created)')
                ->order('DATE(created)');
        $uData = [];
        foreach ($row as $r) {
            $uData[] = $r->toArray();
        }
        if (!empty($uData)) {
            $uData = json_encode($uData);
        }else{
            $uData = ['date'=>$fromdate,'value'=>''];
            $uData = json_encode($uData);
        }
        return $uData;
    }
    
    //query to get Active/confirmed/rejected and inactive count data datewise  based on search
    public function countConfirmationBasedOnSearch($fromdate,$todate,$business_unit = '',
             $department = '', $sub_department = '', $city = '') {
        $query = $this->find();
        $row = $query->select(['date' => 'DATE(created)', 'value' => $query->func()->count('*'), 'status'])
                        ->where(['ob_status' => 1]);
                            if (!empty($business_unit)) {
                                $row->where(['businees_unit' => $business_unit]);
                            }
                            if (!empty($department)) {
                                $row->where(['department' => $department]);
                            }
                            if (!empty($sub_department)) {
                                $row->where(['sub_department' => $sub_department]);
                            }
                            if (!empty($city)) {
                                $row->where(['city' => $city]);
                            }
            $row->where(['DATE(created) <=' => $fromdate, 'DATE(created) >=' => $todate])
                        ->group('DATE(created)')
                        ->order('DATE(created)')->toArray();
        $uData = [];
        foreach ($row as $r) {
            $tmp = [];
            $tmp['date'] = $r['date'];
            $tmp['value1'] = "";
            $tmp['value2'] = "";
            $tmp['value3'] = "";
            $tmp['value4'] = "";
            if($r['status'] == 1){
                $tmp['value1'] = $r['value'];
            }
            if($r['status'] == 2){
                $tmp['value2'] = $r['value'];
            }
            if($r['status'] == 3){
                $tmp['value3'] = $r['value'];
            }
            if($r['status'] == 0){
                $tmp['value4'] = $r['value'];
            }
            $uData[]=$tmp;
        }
        if(!empty($uData)){
            $uData = json_encode($uData);
        }else{
            $uData = ['date'=>$fromdate,'value1'=>'','value2'=>'','value3'=>'','value4'=>''];
            $uData = json_encode($uData);
        }
        return $uData;
    }

}
