<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\NotFoundException;

// For Supervisor role
class SupervisorController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->layout('admin_layout');
    }

    public function dashboard() {
        $fifteen_check_list_id = 4;
        $user = $this->Auth->user();
        $user_type = $user['user_type'];
        if ($user_type != 2) {
            return $this->redirect($this->referer());
        }
        // Get new joinees
        $userTbl = TableRegistry::getTableLocator()->get('Users');
        $query1 = $userTbl->find('all')
                ->where(['user_type' => 4, 'status !=' => 0, 'ob_status' => 1])
                ->contain(['FeedbackUsers', 'LogisticsArrangement', 'FeedbackVerifyUser' => function ($q) use($fifteen_check_list_id) {
                        return $q->where(['FeedbackVerifyUser.feedback_id' => $fifteen_check_list_id]);
                    }])
                ->order(['id' => 'DESC']);
        $joineeData = [];
        $fiften_status = 0;
        foreach ($query1 as $rw) {
            if (!empty($rw) && (!in_array($rw->status, [3]))) {

                $fcomplete = false;
                $locomplete = false;
                if (!empty($rw->feedback_users)) {
                    foreach ($rw->feedback_users as $uf) {
                        if ($uf->status != 1) {
                            $fcomplete = false;
                        } else {
                            $fcomplete = true;
                        }
                    }
                }

                // Logicstic status
                if (!empty($rw->logistics_arrangement)) {
                    $locomplete = 0;
                    foreach ($rw->logistics_arrangement as $lr) {
                        if ($lr->r_status == 1) {
                            $locomplete = 1;
                        } else {
                            $locomplete = 0;
                        }
                    }
                }
                $rw->lcomplete = $locomplete;
                // Feedback status
                if (!empty($rw->feedback_verify_user)) {
                    $fiften_status = 1;
                }
                $rw->fifteen = $fiften_status;
                
                
                $rw->fcomplete = $fcomplete;
                $joineeData[] = $rw->toArray();
            }
        }
        //pr($joineeData);die;
        //$logisticTable=TableRegistry::getTableLocator()->get('logistics');
        //$logisticdata=$logisticTable->find('all')->where(['status'=>1])->toArray();
        //$departTable=TableRegistry::getTableLocator()->get('departments');
        //$departdata= $departTable->find('all')->where(['status'=>1])->toArray();
        //$departdataarr=[];
        //foreach($departdata){
        //}
        $this->loadModel('Logistics');
        $this->loadModel('Departments');
        $this->loadModel('Locations');
        $logisticrecord = $this->Logistics->find('all')->contain(['Departments', 'Locations'])->where(['Logistics.status'=>'1'])->distinct(['Logistics.id'])->toArray();





        //$locationTable=TableRegistry::getTableLocator()->get('locations');
        //$locationdata= $locationTable->find('all')->where(['status'=>1])->toArray();
        // Get raodmap meeting data
        $addSessionsTbl = TableRegistry::getTableLocator()->get('AddSessions');
        $query2 = $addSessionsTbl->find('all')
                ->where(['user_id' => $user['id'], 'AddSessions.is_accepted' => 0, 'AddSessions.status' => 1, 'AddSessions.session_date >' => time()])
                ->contain(['Users']);
        $asnData = [];
        foreach ($query2 as $rw) {
            if (!empty($rw)) {
                $asnData[] = $rw->toArray();
            }
        }
//        pr($asnData);die;
        $this->set(compact('joineeData', 'logisticrecord', 'asnData'));
    }

    public function logisticsupinsert() {

        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $time1 = Time::now();
            $userid = $this->request->data('userid');
            $logistic_id = $this->request->data('logistic_id');
            $logistic_arrangement_add_by = $this->request->data('logistic_arrangement_add_by');

            $logisticsarrangementTable = TableRegistry::get('logistics_arrangement');


            foreach ($logistic_id as $logistic_ids) {
                $logdata = $logisticsarrangementTable->newEntity();
                $logdata->logistic_id = $logistic_ids;
                $logdata->logistic_arrangement_add_by = $logistic_arrangement_add_by;
                $logdata->user_id = $userid;
                $logdata->time_created = $time1;
                if ($logisticsarrangementTable->save($logdata)) {
                    
                }
            }
        }
        exit;
    }

    public function getJoinee($user_id) {
        $this->autoRender = false;
        $returnData = [];
        $user = $this->Auth->user();
        if (!in_array($user['user_type'], [1, 2])) {
            echo json_encode(['msg' => 'Invalid access !']);
            die;
        }
        $userTbl = TableRegistry::getTableLocator()->get('Users');
        $query1 = $userTbl->find('all')
                ->where(['Users.id' => $user_id, 'ob_status' => 1, 'Users.status' => 1])
                ->contain(['BusinessUnits', 'Departments', 'SubDepart']);

        if (!empty($query1->first())) {
            $jObj = $query1->first()->toArray();
            $jObj['doj'] = date('d/m/Y', strtotime($jObj['doj']));
            $returnData = $jObj;
        }
        echo json_encode($returnData);
        die;
    }

    public function getRMapData($user_id) {
        $this->autoRender = false;
        $sessionTbl = TableRegistry::getTableLocator()->get('AddSessions');
        $query1 = $sessionTbl->find('all')
                ->where(['joinee_id' => $user_id]);
        $assignedRmap = [];
        $rHtml = "";
        foreach ($query1 as $rw) {
            //pr($rw);die;
            if (!empty($rw)) {
                $assignedRmap[] = $rw->toArray();
                $status = 0;
                if (!empty($assignedRmap[$rw2->id])) {
                    $status = $assignedRmap[$rw2->id];
                }
                if ($i != 0) {
                    $rHtml = $rHtml . "<hr/>";
                    $i++;
                }
                $rHtml = $rHtml
                        . '<div class="row">'
                        . ' <div class="col-md-6">'
                        . '     <h5 class="margin-0">' . $rw2->title . '</h5>'
                        . '     <small class="margin-top-lg text-muted">' . $rw2->description . '</small>'
                        . ' </div>'
                        . ' <div class="col-md-3"><strong>' . $rw2->duration . ' hours</strong></div>';
                if ($status == 1) {
                    $rHtml = $rHtml . '<div class="col-md-3"><strong class="text-orange">Assigned</strong></div>';
                } else if ($status == 2) {
                    $rHtml = $rHtml . '<div class="col-md-3"><strong class="text-green">Completed</strong></div>';
                } else if ($status == 3) {
                    $rHtml = $rHtml . '<div class="col-md-3"><strong class="text-red">Rejected</strong></div>';
                } else {
                    $rHtml = $rHtml . '<div class="col-md-3"><input class="rmap-recmnd" value="' . $rw2->id . '" type="checkbox"></div>';
                }
                $rHtml = $rHtml . '</div>';
            }
        }

        echo $rHtml;
        die;
    }

//    public function saveRmap() {
//        $this->autoRender = false;
//        $joineeRmapTbl = TableRegistry::getTableLocator()->get('JoineeRoadmaps');
//
//        if ($this->request->is('post')) {
//            $requestData = $this->request->data;
//            $author = $this->Auth->user('id');
//            if (!empty($requestData['sel'])) {
//                foreach ($requestData['sel'] as $rId) {
//                    $jr = $joineeRmapTbl->newEntity();
//                    $jr->user_id = $requestData['key'];
//                    $jr->roadmap_id = $rId;
//                    $jr->added_by = $author;
//                    $jr->status = 1;
//                    $joineeRmapTbl->save($jr);
//                }
//            }
//        }
//    }

    public function getFeedbackData($user_id) {
        $this->autoRender = false;
        $fbTbl = TableRegistry::getTableLocator()->get('Feedbacks');
        //$feedbackUserTbl = TableRegistry::getTableLocator()->get('FeedbackUsers');
        $uTbl = TableRegistry::getTableLocator()->get('Users');
        $feedBackData = [];

        // Get basic info of user
        $uinfo = $uTbl->get($user_id);
        $username = $uinfo['first_name'] . " " . $uinfo['last_name'];
        $ueId = $uinfo['emp_id'];
        $doj = date('d/m/Y', strtotime($uinfo['doj']));
        // Get feedbacl list for user
        $query1 = $fbTbl->find('all')
                ->where(['status' => 1, 'for_supervisor' => 1])
                ->contain([
            'FeedbackVerify' => function ($q) use ($user_id) {
                return $q->where(['FeedbackVerify.user_id' => $user_id]);
            },
            'FeedbackQuestions' => ['Questions']]);
        foreach ($query1 as $rw) {
            //pr($rw);die;
            if (!empty($rw)) {
                $key = $rw['id'];
                $completed = false;
                if (!empty($rw['feedback_verify'])) {  // This method will be replaced by another method later
                    $completed = true;
                }
                $completedOn = "-";
                $completedTxt = "<h5>&nbsp;</h5>";
                $title = $rw['title'];
                $fstatus = '<p class="margin-bottom-0 text-red">Pending</p>';
                if (($completed) && !empty($rw['feedback_verify'][0])) {
                    $completedOn = date('d/m/Y', strtotime($rw['feedback_verify'][0]['created']));
                    $completedTxt = '<h5 class="text-muted">Completed on ' . $completedOn . '</h5>';
                }
                if ($completed) {
                    $fstatus = '<p class="margin-bottom-0 text-green">Completed</p>';
                }

                // Html for info
                $infohtml = '<div class="col-md-4">
                                <div class="panel panel-success joinee-blocks info-sec" data-rel="' . $key . '">
                                    <div class="panel-body">
                                        <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                        <strong>' . $title . '</strong>
                                        <p class="margin-bottom-0 text-muted">' . $completedOn . '</p>
                                        ' . $fstatus . '
                                    </div>
                                </div>
                            </div>';
                $detailedHtml = '<div class="hidden feedback-sec" id="detail-sec-' . $key . '">
                            <form class="feedback-form" onsubmit="return false;">
                            <input type="hidden" name="fu_id" value="' . $user_id . '">
                            <input type="hidden" name="f_id" value="' . $key . '">
                            <input type="hidden" name="u_id" value="' . $user_id . '">    
                            <ol class="breadcrumb">
                                <li class="text-blue pointer goback-feedback" data-rel="' . $key . '">Interval Feedback</li>
                                <li class="active">' . $title . '</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong class="j-name-html">' . $username . '</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong class="j-emp_id-html">' . $ueId . '</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong class="j-doj-html">' . $doj . '</strong>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="margin-0">' . $title . '</h4>
                                    ' . $completedTxt . '
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">';
                $feedbackAnsData = $rw['feedback_verify'];
                if (!empty($rw['feedback_questions'])) {
                    foreach ($rw['feedback_questions'] as $key1 => $fq) {
                        if ($completed) {
                            $answer = $feedbackAnsData[$key1];
                        }
                        $detailedHtml .= '<div class="col-md-6">
                                                    <p>' . ($key1 + 1) . '. ' . $fq['question']['title'] . '</p>';
                        $ratingG = 0;
                        if ($fq['question']['type'] == 2) {
                            $starClas = " star-rate";
                            if ($completed) {
                                $ratingG = $answer['rating'];
                                $starClas = "";
                            }
                            $detailedHtml .= ' <input type="hidden" name="q_' . $fq['id'] . '" class="rate" value="' . $ratingG . '"/><div class="u-rate" data-rate="0">&nbsp;';
                            for ($i = 1; $i <= 5; $i++) {
                                if ($ratingG > 0) {
                                    $detailedHtml .= '&nbsp;<span><i class="fa fa-star fa-lg text-gold' . $starClas . '"></i></span>';
                                } else {
                                    $detailedHtml .= '&nbsp;<span><i class="fa fa-star-o fa-lg text-gold ' . $starClas . '"></i></span>';
                                }
                                $ratingG--;
                            }
                            $detailedHtml .= '</div>';
                        } else if ($fq['question']['type'] == 1) {
                            $textExtra = "";
                            $tval = "";
                            if ($completed) {
                                $textExtra = ' readonly ';
                                $tval = $answer['answer'];
                            }
                            $detailedHtml .= '<div class="form-group">
                                                                    <textarea class="form-control" ' . $textExtra . ' rows="2" name="q_' . $fq['id'] . '">' . $tval . '</textarea>
                                                                </div>';
                        }

                        $detailedHtml .= '<hr class="margin-sm"></div>';
                    }
                }
                $submitClass = " hidden";
                if (!$completed) {
                    $submitClass = " save-feedback";
                }
                $detailedHtml .= '</div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-right">
                                    <button data-key="' . $user_id . '" class="btn btn-danger btn-block ' . $submitClass . '">Add</button>
                                </div>
                            </div>
                            </form>
                        </div>';
                $feedBackData[] = ['info' => $infohtml, 'details' => $detailedHtml];
            }
        }
        echo json_encode($feedBackData);
        die;
    }

    public function feedbackResponse() {
        $this->autoRender = false;

        if ($this->request->is('post')) {
            $feedbackResponsesTbl = TableRegistry::getTableLocator()->get('FeedbackResponses');
            $requestData = $this->request->data;
            $params = array();
            parse_str($requestData['fdata'], $params);
            // pr($params);die;
            foreach ($params as $questn => $answr) {
                $questn = explode('q_', $questn);
                if (count($questn) > 1) {
                    $question_id = $questn[count($questn) - 1];
                    $feedRes = $feedbackResponsesTbl->newEntity();
                    $feedRes->feedback_question_id = $question_id;
                    $feedRes->feedback_id = $params['f_id'];
                    $feedRes->user_id = $params['u_id'];
                    $feedRes->rating = $answr;
                    $feedRes->answer = $answr;
                    $feedRes->response_by = $this->Auth->user('id');
                    $feedRes->feedback_user_id = $params['fu_id'];
                    $feedbackResponsesTbl->save($feedRes);
                }
            }
//            if (!empty($params['fu_id'])) {
//                $feedbackUsersTbl = TableRegistry::getTableLocator()->get('FeedbackUsers');
//                $fu = $feedbackUsersTbl->get($params['fu_id']);
//                $fu->status = 1;
//                $fu->completed_on = date('Y-m-d', time());
//                $feedbackUsersTbl->save($fu);
//            }
        }
    }

    public function getLogisticData($user_id) {
        $logArgmntTbl = TableRegistry::getTableLocator()->get('LogisticsArrangement');
        $query = $logArgmntTbl->find('all')
                ->where(['user_id' => $user_id,'Logistics.status'=>1])
                ->contain(['Logistics']);
        $logData = [];
        foreach ($query as $rw) {
            if (!empty($rw)) {
                $logData[] = $rw->toArray();
            }
        }
        echo json_encode($logData);
        die;
    }

    public function access() {
        $accessCatTbl = TableRegistry::getTableLocator()->get('AccessCategories');

        if ($this->request->is('post')) {
            $requsetData = $this->request->data;
            //pr($requsetData);die;

            if (!empty($requsetData['child'])) {
                $ac = $accessCatTbl->newEntity();
                if (!empty($requsetData['parent_id'])) {
                    $ac->parent_id = $requsetData['parent_id'];
                } else {
                    $ac->parent_id = 0;
                }
                $ac->name = $requsetData['child'];
                $ac->status = 1;
            }
            $accessCatTbl->save($ac);
        }
        // Get category list
        $query1 = $accessCatTbl->find('list')
                ->where(['status' => 1, 'parent_id' => 0]);
        $aCatData = $query1->toArray();
        $this->set(compact('aCatData'));
    }

    public function getAccOpt($level) {
        $accessCatTbl = TableRegistry::getTableLocator()->get('AccessCategories');
        $query1 = $accessCatTbl->find('list')
                ->where(['status' => 1, 'parent_id' => $level]);
        $aCatData = $query1->toArray();
        $html = "";
        foreach ($aCatData as $id => $ac) {
            if (!empty($ac)) {
                $html .= '<option value="' . $id . '">' . $ac . '</option>';
            }
        }
        echo $html;
        die;
    }

    public function meetingAction($session_id, $is_accepted) {
        $this->autoRender = false;
        $addSessionsTbl = TableRegistry::getTableLocator()->get('AddSessions');
        $addS = $addSessionsTbl->get($session_id);
        if ($addS->user_id != $this->Auth->user('id')) {
            echo json_encode(['status' => '0', 'msg' => 'invalid access !']);
            die;
        }
        if (!empty($is_accepted)) {
            $msg = "Meeting updated successfully !";
            if ($is_accepted == 1) {
                $addS->is_accepted = 1;
                $msg = "Meeting accepted successfully !";
            } else if ($is_accepted == 2) {
                $addS->is_accepted = 2;
                $msg = "Meeting rejected successfully !";
            }
            $addSessionsTbl->save($addS);
            echo json_encode(['status' => '1', 'msg' => $msg]);
            die;
        }
        echo json_encode(['status' => '0', 'msg' => 'invalid access !']);
        die;
    }

}
