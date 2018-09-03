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
        $questionTbl = TableRegistry::getTableLocator()->get('FeedbackQuestions');
        if ($this->request->is('post')) {
            $requestData = $this->request->data;
            $id = $requestData['id'];
            if ($id) {
                    $questionslist = $questionTbl->find('all')->where(['FeedbackQuestions.id' => $id])->toArray();
                    echo(json_encode($questionslist));
                    exit;
              }
        }
        $query1 = $questionTbl->find('all');
        $qData = [];
        foreach ($query1 as $rw) {
            if (!empty($rw)) {
                $qData[] = $rw->toArray();
            }
        }
        $this->set(compact('qData'));
    }
    

    public function questions() {
        $questionTbl = TableRegistry::getTableLocator()->get('FeedbackQuestions');
        if ($this->request->is('post')) {
            $requestData = $this->request->data;
            $question = $questionTbl->newEntity();
            $question->title = $requestData['title'];
            $question->type = $requestData['type'];
            $question->user_type = $requestData['q-for'];
            $question->status = 1;
            $questionTbl->save($question);
        }

        $query1 = $questionTbl->find('all');
        $qData = [];
        foreach ($query1 as $rw) {
            if (!empty($rw)) {
                $qData[] = $rw->toArray();
            }
        }
        $this->set(compact('qData'));
    }

    public function get($id) {
        $query1 = $questionTbl->get($id);
        $returnData = [];
        if (!empty($query1)) {
            $returnData = $query1->toArray();
        }
        echo json_encode($returnData);
        die;
    }
    
    public function addQuestions(){
		  $count_title = '';
            if(!empty($_POST['title'])){
            $count_title = count($_POST['title']);
            }
			
        if ($this->request->is('post')) {
    
       if($count_title > 0){
                for($i=0; $i<$count_title; $i++){ 
        $requestData = $this->request->data;
		 $user_type= $_POST['user_type'];
		 $feedback_type= $_POST['feedback_type'];
		 $category= $_POST['category'];
		 $type= $_POST['type'];
		  $title = $_POST['title'][$i];
		
		 $desc= $_POST['describtion'][$i];
      
        $status = $_POST['status'][$i];
		
	    $questionTbl = TableRegistry::getTableLocator()->get('FeedbackQuestions');
      $questionsdata = $questionTbl->newEntity();
	  
             $questionsdata->user_type = $user_type;
               $questionsdata->feedback_type = $feedback_type;
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
    
    
    public function updatequestion(){
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
        $questionTbl = TableRegistry::getTableLocator()->get('FeedbackQuestions');
        $requestData = $this->request->data;
        $id = $requestData['id'];
        $title = $requestData['title'];
        $feedback_id = $requestData['feedback_id'];
        $type = $requestData['type'];
        $user_type = $requestData['user_type'];
            $updatequery = $questionTbl->query();
            $update_result = $updatequery->update()
                            ->set(['title' => $title, 'feedback_id' => $feedback_id, 'type' => $type, 'user_type' => $user_type])
                            ->where(['id' => $id])->execute();
            if ($update_result) {
                $class = 'alert alert-success alert-dismissible fade in';
                $iclass = 'fa fa-check';
                $close = '&times';
                $this->Flash->set('Question Updated Sucessfully.', ['element' => 'success']);
                return $this->redirect(['controller' => 'Logistics', 'action' => 'index']);
            }
            
        }
    }
    
    public function deletequestion() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $id = $this->request->data('id');
            $status = $this->request->data('status');
            $logisticsTable = TableRegistry::get('FeedbackQuestions');
            $conditions = array('id' => $id);
            $fields = array('status' => $status);
            $logisticsTable->updateAll($fields, $conditions);
        }
    }

}
