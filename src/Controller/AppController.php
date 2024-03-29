<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public function beforeFilter(Event $event){
        $this->online();
    }

    public function online() {
        $session = $this->request->session();
        $online_session_id = $session->read('Auth.User.id');
        if (empty($online_session_id)) return;
     
        $userOnlineModel = TableRegistry::get('usersonline');
        $user_online = $userOnlineModel->findByIpClient($online_session_id)->toArray();
        $time_out = time() + 900 ;
     
        if (empty($user_online) || $user_online == false) {
            $user_online_new = $userOnlineModel->newEntity();
            $user_online_new['ip_client'] = $online_session_id;
            $user_online_new['time_in'] = date('Y-m-d H:i:s',time());
            $user_online_new['time_out'] = $time_out;
            $userOnlineModel->deleteAll(['time_out <=' => time()] , false , false);
            $userOnlineModel->save($user_online_new);
        } else {
            $userOnlineModel->updateAll(['time_out' => $time_out],['ip_client' => $online_session_id]);
        }
    }

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
