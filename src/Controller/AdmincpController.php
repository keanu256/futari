<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class AdmincpController extends AuthController
{

	public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

	public function index()
    {   	
    	$this->viewBuilder()->setLayout(false);	
    	$session = $this->request->session();
    	
    	if($session->read('Auth.User.sessionkey') != null){
    		return $this->redirect(['controller'=>'admincp','action'=>'home']); 
    	}

    	if($this->request->is(['POST'])){
    		
    		$userid = $session->read('Auth.User.id');
    		$inputkey = $this->request->data('key');
    		$key = TableRegistry::get('adminkey')->find()
    					->where(['userid'=>$userid])
    					->select('key')->toArray();
    		if($inputkey == $key[0]->key){
    			$session->write('Auth.User.sessionkey','accepted');
    			return $this->redirect(['controller'=>'admincp','action'=>'home']);
    		} 

    	}
    }

    public function home(){
    	$this->validatePage();
    }

    public function courses(){
    	$this->validatePage();

    	debug(date('Y-m-d H:i:s',time()));
    }

    public function lessons(){
    	$this->validatePage();
    }

    public function topics(){
    	$this->validatePage();
    }

    public function portfolios(){
    	$this->validatePage();
        $portfolios = TableRegistry::get('portfolios');

        if ($this->request->is('ajax')) {
            $this->autoRender = false;

            $func = $this->request->query('f');

            if($func == "create"){
                $name = trim($this->request->query('name'));
                $description = trim($this->request->query('description'));
                $status = $this->request->query('status');
                if($status != 0 and $status != 1){
                    $this->response->body(json_encode(['status'=>200,'message'=>'Status Error']));
                    return;
                }
                if($name == ""){
                    $this->response->body(json_encode(['status'=>200,'message'=>'Empty Name']));
                    return;
                }
                $entity = $portfolios->newEntity();
                $entity['name'] = $name;
                $entity['description'] = $description;
                $entity['status'] = $status;
                if($result = $portfolios->save($entity)){
                    $obj = $portfolios->find()->where(['id'=>$result->id])->toArray();
                    $obj[0]['updated'] = Time::parse($obj[0]['updated'])->i18nFormat();
                    $this->response->body(json_encode(['status'=>200,'message'=>'success',
                        'obj'=> json_encode($obj[0],JSON_UNESCAPED_UNICODE)]));

                }else{
                    $this->response->body(json_encode(['status'=>200,'message'=>'dd']));  
                }               
            }  

            if($func == "delete"){
                $id = trim($this->request->query('id'));
                $object = $portfolios->get($id);
                if($object != null){
                    $portfolios->delete($object);
                    $this->response->body(json_encode(['status'=>200,'message'=>'success'])); 
                }else{
                    $this->response->body(json_encode(['status'=>200,'message'=>'ID not found'])); 
                }
            }   

            if($func == "info"){
                $id = trim($this->request->query('id'));
                $object = $portfolios->find()->where(['id'=>$id])->toArray();
                if($object != null){
                    $this->response->body(json_encode(['status'=>200,'message'=>'success',
                        'obj'=> json_encode($object[0],JSON_UNESCAPED_UNICODE)
                        ])); 
                }else{
                    $this->response->body(json_encode(['status'=>200,'message'=>'ID not found'])); 
                }
            } 

            if($func == "update"){
                $id = trim($this->request->query('id'));
                $object = $portfolios->get($id, [
                    'contain' => []
                ]);
                if($object != null){
                    $name = trim($this->request->query('name'));
                    $object['name'] = $name; 
                    $object['description'] = trim($this->request->query('description'));
                    $status = $this->request->query('status');
                    $object['status'] = $status;
                    if($name == ""){
                        $this->response->body(json_encode(['status'=>200,'message'=>'Empty Name']));
                        return;
                    }
                    if($status != 0 and $status != 1){
                        $this->response->body(json_encode(['status'=>200,'message'=>'Status Error']));
                        return;
                    }
                    if($portfolios->save($object)){
                        $obj = $portfolios->find()->where(['id'=>$id])->toArray();
                        $obj[0]['updated'] = Time::parse($obj[0]['updated'])->i18nFormat();
                        
                        $this->response->body(json_encode(['status'=>200,'message'=>'success',
                           'obj'=> json_encode($obj[0],JSON_UNESCAPED_UNICODE)     
                        ]));
                    }else{
                        $this->response->body(json_encode(['status'=>200,'message'=>'failed']));
                    }
                }else{
                    $this->response->body(json_encode(['status'=>200,'message'=>'ID not found'])); 
                }
            }       
        }

        if ($this->request->is('post')) {
            $this->autoRender = false;
            $this->response->body('DA THANH CONG POST');
        }

    	$portfolios = $portfolios->find();
        $this->set(compact('portfolios'));
    }

    private function validatePage(){
    	$this->viewBuilder()->setLayout(false);	
    	$this->_checkSessionKey();
    }

    private function _checkSessionKey(){
    	$session = $this->request->session();
		$sessionkey = $session->read('Auth.User.sessionkey');
		if($sessionkey == null) return $this->redirect(['controller'=>'admincp','action'=>'index']);
    }
}