<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;


define('FB_APPID', '1674531749516397');
define('FB_APPSECRET', 'f89fd7609000c9ab5ecc67053a9981d5');
define('GG_CLIENTID', '318633984068-44d67ej9venieo85pccgdv05vte7rbjf.apps.googleusercontent.com');
define('GG_CLIENTSECRET', '9AN71b4oqHlEb0W5HzpzOEZt');
define('ALPHABET', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AuthController
{
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->Auth->allow([
            'logout', 
            'facebooklogin', 
            'facebookLoginCallback', 
            'googlelogin', 
            'googleLoginCallback',
            'enroll'
        ]);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    public function login(){
        
    }

    public function logout() {   

        return $this->redirect($this->Auth->logout());
    }

    public function facebooklogin() {
        require_once ROOT . DS . 'vendor' .DS.'autoload.php';
        $this->request->session()->start();
        $this->autoRender = false;

        $redirect_controller = $this->request->getQuery('redirect_controller');
        $redirect_action = $this->request->getQuery('redirect_action');
        $redirect_id = $this->request->getQuery('redirect_id');

        $fb = new \Facebook\Facebook([
          'app_id' => FB_APPID,
          'app_secret' => FB_APPSECRET,
          'default_graph_version' => 'v2.5',
        ]);
        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email', 'user_likes']; // optional
        
        $callbackUrl = Router::url([
            'controller' => 'Users', 
            'action' => 'facebookLoginCallback', 
            'redirect_controller' => $redirect_controller,
            'redirect_action' => $redirect_action,
            'redirect_id' => $redirect_id,
            '_full' => true]);
    
        $loginUrl = $helper->getLoginUrl($callbackUrl, $permissions);
        $this->redirect($loginUrl);
    }

    public function facebookLoginCallback() {
        $session = $this->request->session();
        $this->autoRender = false;
        $this->request->session()->start();

        $redirect_controller = $this->request->getQuery('redirect_controller');
        $redirect_action = $this->request->getQuery('redirect_action');
        $redirect_id = $this->request->getQuery('redirect_id');

        $fb = new \Facebook\Facebook([
          'app_id' => FB_APPID,
          'app_secret' => FB_APPSECRET,
          'default_graph_version' => 'v2.9',
        ]);
        $helper = $fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            return;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            return;
        }

        if (! isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
          exit;
        }

        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();

        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);

        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId(FB_APPID); // Replace {app-id} with your app id
        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();

        if (! $accessToken->isLongLived()) {
            // Exchanges a short-lived access token for a long-lived one
            try {
                $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
                exit;
            }
        }
        
        $session->write('fb_access_token', (string) $accessToken);
        
        $fb_access_token = $session->read('fb_access_token');

        if (!empty($fb_access_token)) {
            try {
                // Returns a `Facebook\FacebookResponse object
                $response = $fb->get('/me?fields=id,email,name,gender,first_name,last_name', $fb_access_token);

            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
            $usernode = $response->getGraphUser();

            if (!empty($usernode)) {
                                
                $query = $this->Users->findByEmail($usernode->getProperty('email'))->toArray();
                
                if (empty($query)) {               
                    $newUser = $this->Users->newEntity();
                    
                    $newUser->provider = "Facebook";  
                    $newUser->providerkey = $usernode->getProperty('id');
                    $newUser->fullname =  $usernode->getProperty('name');
                    $newUser->email = $usernode->getProperty('email');
                    
                    $result = $this->Users->save($newUser);

                    if ($this->Users->save($newUser)) {
                        $role = TableRegistry::get('Roles')->find()->where(['name' => 'Learner'])->first();

                        $userRolesTable = TableRegistry::get('UserRoles');
                        $userRole = $userRolesTable->newEntity();
                        $userRole->user_id = $result->id;
                        $userRole->role_id = $role->id;
                        
                        if ($userRolesTable->save($userRole)) {
                            $this->Flash->success(__('New user has been created.'));
                        }
                        
                    } else {
                        $this->Flash->error(__('The user could not be saved. Please, try again.'));
                    }
                    $this->Auth->setUser($newUser->toArray());
                } else {
                    $this->Auth->setUser($query[0]->toArray());
                }
                
                if (!empty($redirect_controller) && !empty($redirect_action)) { 
                    return $this->redirect([
                        'controller' => $redirect_controller,
                        'action' => $redirect_action,
                        $redirect_id,
                        'enroll'
                        ]);
                    
                }
                return $this->redirect(['controller' => 'Pages', 'action' => 'display']);
              
            } else {
                $this->Flash->error(__('Facebook loi cmnr!!!'));
                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            }
        }
    }

    public function enroll($id = null) {
        $this->autoRender = false;
        $userId = $this->Auth->user('id');
        if (!empty($userId)) {
            if ($this->request->is('ajax')) {
                $this->response->disableCache();
                $course = TableRegistry::get('Courses')->get($id)->toArray();
                if (empty($course)) {
                    $result = json_encode([
                    'message' => 'fail',
                    'error' => 'hacker']);
                } else {
                    $enrollmentTable = TableRegistry::get('Enrollments');
                    $enroll = $enrollmentTable->newEntity();

                    $enroll->enrollment_date = Time::now();
                    $enroll->user_id = $userId;
                    $enroll->course_id = $id;
                    $enroll->progress = 0;
                    $enroll->grade = 0;

                    if ($enrollmentTable->save($enroll)) {
                        $result = json_encode([
                            'message' => 'success',
                            'id' => $id]);
                    } else {
                        $result = json_encode([
                        'message' => 'fail']);
                    }
                }
            }
        } else {
            $result = json_encode([
                'message' => 'fail',
                'error' => 'auth']);
        }

        $this->response->type('json');
        $this->response->body($result);

        return $this->response;

    }
}
