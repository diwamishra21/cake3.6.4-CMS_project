<?php

namespace App\Controller;

ob_start();

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

// For feedback
class FeedbackController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->layout('admin_layout');
    }

    public function questionslist() {

        $questionTbl = TableRegistry::getTableLocator()->get('questions');
        $query1 = $questionTbl->find('all', array('order' => array('id' => 'desc')));
        $qData = [];
        foreach ($query1 as $rw) {
            if (!empty($rw)) {
                $qData[] = $rw->toArray();
            }
        }
        $this->set(compact('qData'));
    }

    public function fetchquestionslist() {

        $questionTbl = TableRegistry::getTableLocator()->get('questions');
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $requestData = $this->request->data;
            $id = $requestData['id'];

            if ($id) {
                $questionslist = $questionTbl->find('all')->where(['questions.id' => $id])->toArray();
                echo json_encode($questionslist);
            }
        }
    }

    public function updatequestion() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $questionTbl = TableRegistry::getTableLocator()->get('questions');
            $requestData = $this->request->data;
            $id = $requestData['id'];


            $type = $requestData['type'];
            $category = $requestData['category'];
            $title = $requestData['title'];
            $describtion = $requestData['describtion'];
            $status = $requestData['status'];

            $updatequery = $questionTbl->query();
            $update_result = $updatequery->update()
                    ->set(['title' => $title, 'type' => $type, 'category' => $category, 'describtion' => $describtion, 'status' => $status])
                    ->where(['id' => $id])
                    ->execute();
            if ($update_result) {

                echo $question_update = "Question Updated Sucessfully.";
                $this->Flash->set('Question Updated Sucessfully.', ['element' => 'success']);
                return $this->redirect(['controller' => 'Feedback', 'action' => 'questionslist']);
            }
        }
        $this->set(compact('question_update'));
        exit;
    }

    public function index() {
      $this->set('active','5');
        $feedbackTbl = TableRegistry::getTableLocator()->get('Feedbacks');
        $fQTbl = TableRegistry::getTableLocator()->get('FeedbackQuestions');
        $questTable = TableRegistry::get('Questions');
        if ($this->request->is('post')) {
            $requestData = $this->request->data;
            //pr($requestData);
            //die;
            $feedback = $feedbackTbl->newEntity();
            if (!empty($requestData['edit_key'])) {
                $feedback->id = $requestData['edit_key'];
                $fQTbl->removeBulk($requestData['edit_key']);
            }
            $feedback->title = $requestData['title'];
            $feedback->description = $requestData['description'];
            $feedback->interval_days = $requestData['interval'];
            if (!empty($requestData['for_joinee'])) {
                $feedback->for_joinee = 1;
            }
            if (!empty($requestData['for_supervisor'])) {
                $feedback->for_supervisor = 1;
            }
            // save to feedback questions.
            $fqs = [];
            if (!empty($requestData['q_j'])) {
                foreach ($requestData['q_j'] as $qj) {
                    $fQ = $feedbackTbl->FeedbackQuestions->newEntity();
                    $fQ->question_id = $qj;
                    $fQ->question_for = 1;
                    $fqs[] = $fQ;
                }
            }
            if (!empty($requestData['q_s'])) {
                foreach ($requestData['q_s'] as $qj) {
                    $fQ = $feedbackTbl->FeedbackQuestions->newEntity();
                    $fQ->question_id = $qj;
                    $fQ->question_for = 2;
                    $fqs[] = $fQ;
                }
            }
            if (!empty($fqs)) {
                $feedback->feedback_questions = $fqs;
            }
            //pr($feedback);die;
            $feedbackTbl->save($feedback);
        }
        // List of feedback
        $query1 = $feedbackTbl->find('all');
        $fData = [];
        foreach ($query1 as $rw) {
            if (!empty($rw)) {
                $fData[] = $rw->toArray();
            }
        }
        // Get questions
        $query2 = $questTable->find('all')
                ->where(['status' => 1])
                ->order(['type' => 'DESC']);
        $qData = [];
        foreach ($query2 as $rw) {
            if (!empty($rw)) {
                $qData[] = $rw->toArray();
            }
        }
        $this->set(compact(['fData', 'qData']));
    }

    public function get($id) {
        $this->autoRender = false;
        $feedbackTbl = TableRegistry::getTableLocator()->get('Feedbacks');
        $query = $feedbackTbl->find('all')
                ->where(['Feedbacks.id' => $id])
                ->contain(['FeedbackQuestions']);
        $qData = [];
        if (!empty($query->first())) {
            $qData = $query->first()->toArray();
        }
        echo json_encode($qData);
        die;
    }

    public function addQuestions() {
        $count_title = '';
        if (!empty($_POST['title'])) {
            $count_title = count($_POST['title']);
        }

        if ($this->request->is('post')) {

            if ($count_title > 0) {
                for ($i = 0; $i < $count_title; $i++) {
                    $requestData = $this->request->data;
                   
                    $category = $_POST['category'];
                    $type = $_POST['type'];
                    $title = $_POST['title'][$i];

                    $desc = $_POST['describtion'][$i];

                    $status = $_POST['status'][$i];

                    $questionTbl = TableRegistry::getTableLocator()->get('questions');
                    $questionsdata = $questionTbl->newEntity();

                
                    $questionsdata->category = $category;
                    $questionsdata->type = $type;
                    $questionsdata->title = $title;
                    $questionsdata->describtion = $desc;
                    $questionsdata->status = $status;

                    if ($questionTbl->save($questionsdata)) {
                        
                    }
                }
            }

            $class = 'alert alert-success alert-dismissible fade in';
            $iclass = 'fa fa-check';
            $close = '&times';
            $this->Flash->set('Question Added Sucessfully.', ['element' => 'success']);
            return $this->redirect(['controller' => 'Feedback', 'action' => 'questionslist']);
        }
    }

    public function deletequestion() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $id = $this->request->data('id');
            $status = $this->request->data('status');
            $logisticsTable = TableRegistry::get('questions');
            $conditions = array('id' => $id);
            $fields = array('status' => $status);
            $logisticsTable->updateAll($fields, $conditions);
        }
    }

    public function stchange($id) {
        $this->autoRender = false;
        $feedbackTbl = TableRegistry::getTableLocator()->get('Feedbacks');
        $feedback = $feedbackTbl->get($id);
        if ($feedback->status) {
            $feedback->status = 0;
        } else {
            $feedback->status = 1;
        }
        $feedbackTbl->save($feedback);
        echo json_encode(['Done']);
        die;
    }

}
