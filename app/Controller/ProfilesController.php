<?php
App::uses('AppController', 'Controller');
/**
 * Profiles Controller
 *
 * @property Profile $Profile
 * @property PaginatorComponent $Paginator
 */
class ProfilesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $actsAs = array('Uploader.Attachment');
	
	//public function beforeFilter()
	//{
	//	$this->Auth->Allow();
	//}
/**
 * index method
 *
 * @return void
 */

	public function index() 
	{	//layout for this page
		
		$role1 = $this->Session->Read('Auth.User.role_id') == 1;
		$role2 = $this->Session->Read('Auth.User.role_id') == 2;
		if (!$role1 && !$role2) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'pages','action' => 'home'));
		}
		//check if the first profile is own profile
		$profileInfo = $this->Profile->find('first',array('conditions' => array('Profile.user_id' => $this->Auth->User('id'))));
		//check if no profileInfo exist create a new one
		if(!$profileInfo){
			$this->redirect(array('controller'=>'profiles','action' => 'add'));
		}
		
		
		$this->set('profile',$profileInfo);	
		
				
	}

	public function admin_index() 
	{	//layout for this page
		
		//role that only permit to view this page 
		//if not authorized will be redirect to profile page
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		$this->Profile->recursive = 1;
		$this->set('profiles', $this->Paginator->paginate());	
	
				
	}

	public function liststud() 
	{	
		$this->Profile->recursive = 1;
		$this->paginate = array('conditions' => array('Profile.status LIKE' => 2));
		$this->set('profiles', $this->Paginator->paginate());	
	
				
	}

/**
 * Upload method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function upload($id = null) {
		//layout for this page
		
		


		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved.','flash/success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.','flash/error'));
			}
		} else {
			$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
			$this->request->data = $this->Profile->find('first', $options);
		}
		$faculties = $this->Profile->Faculty->find('list');
		$lecturers = $this->Profile->Lecturer->find('list');
		$programs = $this->Profile->Program->find('list');
		$users = $this->Profile->User->find('list');
		$courses = $this->Profile->Course->find('list');
		$this->set(compact('faculties', 'programs', 'users', 'lecturers','courses'));
	}


/**
 * add_course method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function add_course($id = null) {
		//layout for this page
		

		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved.','flash/success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.','flash/error'));
			}
		} else {
			$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
			$this->request->data = $this->Profile->find('first', $options);
		}
		$faculties = $this->Profile->Faculty->find('list');
		$programs = $this->Profile->Program->find('list');
		$lecturers = $this->Profile->Lecturer->find('list');
		$users = $this->Profile->User->find('list');
		$courses = $this->Profile->Course->find('list');
		$this->set(compact('faculties','lecturers', 'programs', 'users', 'courses'));
	}

/**
 * add_course method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function add_lecturer($id = null) {
		//layout for this page
		

		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved.','flash/success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.','flash/error'));
			}
		} else {
			$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
			$this->request->data = $this->Profile->find('first', $options);
		}
		$faculties = $this->Profile->Faculty->find('list');
		$programs = $this->Profile->Program->find('list');
		$lecturers = $this->Profile->Lecturer->find('list');
		$users = $this->Profile->User->find('list');
		$courses = $this->Profile->Course->find('list');
		$this->set(compact('faculties','lecturers', 'programs', 'users', 'courses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		//layout for this page
		
		//$userId = $this->Auth->User('id');
		//$a = $this->request->params['pass'][0];
		//$roleId = $this->Auth->User('role_id');
		//debug();


		
		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved.','flash/success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.','flash/error'));
			}
		} else {
			$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
			$this->request->data = $this->Profile->find('first', $options);
		}
		$faculties = $this->Profile->Faculty->find('list');
		$programs = $this->Profile->Program->find('list');
		$lecturers = $this->Profile->Lecturer->find('list');
		$users = $this->Profile->User->find('list');
		$courses = $this->Profile->Course->find('list');
		$this->set(compact('faculties','lecturers', 'programs', 'users', 'courses'));
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		//layout for this page	
		

		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
		$this->set('profile', $this->Profile->find('first', $options));
	}
public function related($id = null) {
		//layout for this page	
		

		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
		$this->set('profile', $this->Profile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		//layout for this page
		

		if ($this->request->is('post')) {
			$this->Profile->create();
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved.','flash/success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.','flash/error'));
			}
		}
		$faculties = $this->Profile->Faculty->find('list');
		$programs = $this->Profile->Program->find('list');
		$lecturers = $this->Profile->Lecturer->find('list');
		$users = $this->Profile->User->find('list');
		$courses = $this->Profile->Course->find('list');
		$this->set(compact('faculties', 'lecturers','programs', 'users', 'courses'));
	}




/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Profile->id = $id;
		if (!$this->Profile->exists()) {
			throw new NotFoundException(__('Invalid profile'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Profile->delete()) {
			$this->Session->setFlash(__('The profile has been deleted.','flash/success'));
		} else {
			$this->Session->setFlash(__('The profile could not be deleted. Please, try again.','flash/error'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
