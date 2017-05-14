<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

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