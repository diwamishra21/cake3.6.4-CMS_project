<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
//use Cake\Utility\Inflector;

// For Joinee role
class JoineesController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->layout('admin_layout');
    }

    public function getFeedbackData($user_id) {
        $this->autoRender = false;
        $fbTbl = TableRegistry::getTableLocator()->get('Feedbacks');
        $uTbl = TableRegistry::getTableLocator()->get('Users');
        $feedBackData = [];

        // Get basic info of user
        $uinfo = $uTbl->get($user_id);
        $username = $uinfo['first_name'] . " " . $uinfo['last_name'];
        $ueId = $uinfo['emp_id'];
        $doj = date('d/m/Y', strtotime($uinfo['doj']));
        // Get feedbacl list for user
        $query1 = $fbTbl->find('all')
                ->where(['status' => 1, 'for_joinee' => 1])
                ->contain([
            'FeedbackVerify' => function ($q) use ($user_id) {
                return $q->where(['FeedbackVerify.response_by' => $user_id]);
            },
            'FeedbackQuestions' => ['Questions']]);
        foreach ($query1 as $rw) {
            //pr($rw);//die;
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
                $infohtml = '<div class="col-md-3">
                                <div class="panel panel-success joinee-blocks info-sec" data-rel="' . $key . '" data-title="' . $title . '">
                                    <div class="panel-body">
                                        <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                        <strong>' . $title . '</strong>
                                        <p class="margin-bottom-0 text-muted">' . $completedOn . '</p>
                                        ' . $fstatus . '
                                    </div>
                                </div>
                            </div>';

                $detailedHtml = '<div id="feed_sec_' . $key . '" class="col-xs-12 hidden sidebar-section margin-top-md">
                            <form class="feedback-form" onsubmit="return false;">
                            <input type="hidden" name="fu_id" value="' . $user_id . '">
                            <input type="hidden" name="f_id" value="' . $key . '">
                            <input type="hidden" name="u_id" value="' . $user_id . '">    
                            <div class="panel panel-default">
                            <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">';
                $feedbackAnsData = $rw['feedback_verify'];
                if (!empty($rw['feedback_questions'])) {
                    // Check if it is type checklist
                    if ($rw['list_type'] == 1) {
                        $rw['cate_data'] = [];
                        foreach ($rw['feedback_questions'] as $key0 => $fq0) {
                            if (!empty($fq0['question']['category'])) {
                                $category = trim($fq0['question']['category']);
                                //$cat = Inflector::slug($category, "_");
                                $rw['cate_data'][$category][] = $fq0;
                               // $rw['cate_data2'][$cat][] = $category;
                            } else {
                                $rw['cate_data'][] = $fq0;
                            }
                        }
                    }
                    if ($rw['list_type'] == 1) {
                        $feedQdata = $rw['cate_data'];
                    }else{
                        $feedQdata =[$rw['feedback_questions']];
                    }
                    foreach ($feedQdata as $key01 => $fq01) {
                         if ($rw['list_type'] == 1) {
                            $detailedHtml.= '<h4>'.$key01.'</h4>';
                         }
                        // pr($fq01);die;
                        foreach ($fq01 as $key1 => $fq) {
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
                    $feedRes->rating = $answr;
                    $feedRes->answer = $answr;
                    $feedRes->response_by = $this->Auth->user('id');
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
        die;
    }

}
