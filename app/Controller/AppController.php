<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array('Auth', 'Session', 'Cookie','RequestHandler');
	public $helpers = array('Goodies.Gravatar');
	
	//filter anything before user login
	public function beforeFilter(){
		parent::beforeFilter();
		 $this->Auth->allow( array('controller' => 'pages', 'action' => 'display', 'home'));
		  $this->Auth->allow('index','view','login','register');
		 $this->Auth->deny('add','edit','delete');
         
    $this->set('profiles', ClassRegistry::init('Profile')->find('all',array('conditions'=>array('Profile.user_id'=>$this->Auth->User('id')))));
         $this->set('lecturers', ClassRegistry::init('Lecturer')->find('all',array('conditions'=>array('Lecturer.user_id'=>$this->Auth->User('id')))));
   
        if ( $this->Session->read('Auth.User.role_id') == 1) {
            
            $this->layout="admin";
        }

        if ( $this->Session->read('Auth.User.role_id') == 2) {
            
            $this->layout="student";
        }
          if ( $this->Session->read('Auth.User.role_id') == 3) {
            
            $this->layout="lecturer";
        }

      
	}

//render view to user - if mobile set to theme = mobile and vise versa
public function beforeRender()
{     
     // check if the request is 'mobile', includes phones, tablets, etc.
     if ($this->request->is('mobile')) {
        if (!$this->_isTablet()) {
            // if the request is mobile, but not a tablet, activate the mobile layout
            $this->_setMobile();
              //this will redirect to another location 
            $this->redirect('http://mobile.nerdviral.net');

        }
    }
    else{       
            //if theme exist uncomment this 
             //$this->theme = 'Cakestrap';
    }
}

//check if set to mobile
protected function _setMobile() {
	 //if theme exist uncomment this 
   // $this->theme = 'Mobile';
    // etc...
}

//check if tablet or desktop
protected function _isTablet() {
    if ($this->Session->check('tablet')) {
        if ($this->Session->read('tablet') == true) {
            return true;
        }
        return false;
    }
    // load the component
    $this->MobileDetect = $this->Components->load('MobileDetect.MobileDetect');
    // pass the component the 'isTablet' method
    $result = $this->MobileDetect->detect('isTablet');
    $this->Session->write('tablet', $result);
    return $result;
}










}
