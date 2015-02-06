<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {


public function beforeFilter()
{
	$this->Auth->allow('register');

	
}




/**
 * Components
 *
 * @var array123
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() 
	{	
		if($this->Session->Read('Auth.User.role_id') == 1 || $this->Session->Read('Auth.User.role_id') == 2){
			$this->redirect(array('controller'=>'Profiles','action'=>'index'));
		}
		if($this->Session->Read('Auth.User.role_id') == 3){
			$this->redirect(array('controller'=>'lecturers','action'=>'index'));
		}
		
	}

	public function admin_index() 
	{	
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		$this->layout="admin";
		$this->User->recursive = 1;
		
		$this->set('users', $this->Paginator->paginate());

			
	


	}

/**
* @method Login
* Authenticate login of an user
*/
public function login()
{	
	$this->set('title_for_layout',"Login");
	$this->layout = 'signin';

	if ($this->request->is('post')){
		if ($this->Auth->login()){
			
			$this->Session->setFlash('Login Successful','flash/success');
			$this->redirect(array('action'=>'index'));
		} else {
			$this->Session->setFlash('Login Failed','flash/error');
		}
	}
}

/**
*@method logout
*Clear Session for user logout from the system
*/
public function logout()
{
	if($this->redirect($this->Auth->logout())) {
	   $this->Session->setFlash('Logout Successful');
	} else {
		$this->redirect(array('controller'=>'pages','action'=>'home'));
	}
}


/**
*@method register 
*Register new user
*/
public function _register()
{
	$this->set('title_for_layout', "Signup to access");

        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $createdId = $this->User->getLastInsertId();

                if (!empty($createdId)) {
                    $this->loadModel('Profile');
                    $this->Profile->create();
                    $this->request->data['Profile']['user_id'] = $createdId;
     
                    if ($this->Profile->save($this->request->data)) {
                        $this->Auth->login();
                        $this->Session->setFlash(__('Signup has been completed!'));
                        return $this->redirect(array('controller'=>'Profiles','action' => 'edit',$createdId));
                    }
                }
            }
            $this->Session->setFlash(__('Registration failed! Try again.'));
        }
	$roles = $this->User->Role->find('list');
	$this->set(compact('roles'));
}

public function register()
{
	$this->set('title_for_layout', "Signup to access");
	$this->layout = 'signin';
       if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Auth->login();
				$this->Session->setFlash(__('The user has been saved.','flash/success'));
				return $this->redirect(array('controller'=>'Profiles','action' => 'add'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.','flash/error'));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->layout="admin";
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {

		
			$this->layout="admin";
		
		
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.','flash/success'));
				return $this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.','flash/error'));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->layout="admin";
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.','flash/success'));
				return $this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.','flash/error'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.','flash/success'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.','flash/error'));
		}
		return $this->redirect(array('action' => 'admin_index'));
	}



}
