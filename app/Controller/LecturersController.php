<?php
App::uses('AppController', 'Controller');
/**
 * Lecturers Controller
 *
 * @property Lecturer $Lecturer
 * @property PaginatorComponent $Paginator
 */
class LecturersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
	$role = $this->Session->Read('Auth.User.role_id') == 3;
		
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'pages','action' => 'home'));
		}
		//check if the first profile is own profile
		$lecturerInfo = $this->Lecturer->find('first',array('conditions' => array('Lecturer.user_id' => $this->Auth->User('id'))));
		//check if no lecturerInfo exist create a new one
		if(!$lecturerInfo){
			$this->redirect(array('controller'=>'lecturers','action' => 'add'));
		}
		
		
		$this->set('lecturer',$lecturerInfo);	
	}

	public function listlect() {
		
		$this->Lecturer->recursive = 1;
		$this->set('lecturers', $this->Paginator->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lecturer->exists($id)) {
			throw new NotFoundException(__('Invalid lecturer'));
		}
		$options = array('conditions' => array('Lecturer.' . $this->Lecturer->primaryKey => $id));
		$this->set('lecturer', $this->Lecturer->find('first', $options));
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function related($id = null) {
		if (!$this->Lecturer->exists($id)) {
			throw new NotFoundException(__('Invalid lecturer'));
		}
		$options = array('conditions' => array('Lecturer.' . $this->Lecturer->primaryKey => $id));
		$this->set('lecturer', $this->Lecturer->find('first', $options));
	}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lecturer->create();
			if ($this->Lecturer->save($this->request->data)) {
				$this->Session->setFlash(__('The lecturer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lecturer could not be saved. Please, try again.'));
			}
		}
		$faculties = $this->Lecturer->Faculty->find('list');
		$programs = $this->Lecturer->Program->find('list');
		$users = $this->Lecturer->User->find('list');
		$courses = $this->Lecturer->Course->find('list');
		$profiles = $this->Lecturer->Profile->find('list');
		$this->set(compact('faculties', 'programs', 'users', 'courses', 'profiles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lecturer->exists($id)) {
			throw new NotFoundException(__('Invalid lecturer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lecturer->save($this->request->data)) {
				$this->Session->setFlash(__('The lecturer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lecturer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lecturer.' . $this->Lecturer->primaryKey => $id));
			$this->request->data = $this->Lecturer->find('first', $options);
		}
		$faculties = $this->Lecturer->Faculty->find('list');
		$programs = $this->Lecturer->Program->find('list');
		$users = $this->Lecturer->User->find('list');
		$courses = $this->Lecturer->Course->find('list');
		$profiles = $this->Lecturer->Profile->find('list');
		$this->set(compact('faculties', 'programs', 'users', 'courses', 'profiles'));
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function upload($id = null) {
		if (!$this->Lecturer->exists($id)) {
			throw new NotFoundException(__('Invalid lecturer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lecturer->save($this->request->data)) {
				$this->Session->setFlash(__('The lecturer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lecturer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lecturer.' . $this->Lecturer->primaryKey => $id));
			$this->request->data = $this->Lecturer->find('first', $options);
		}
		$faculties = $this->Lecturer->Faculty->find('list');
		$programs = $this->Lecturer->Program->find('list');
		$users = $this->Lecturer->User->find('list');
		$courses = $this->Lecturer->Course->find('list');
		$profiles = $this->Lecturer->Profile->find('list');
		$this->set(compact('faculties', 'programs', 'users', 'courses', 'profiles'));
	}
	/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function add_course($id = null) {
		if (!$this->Lecturer->exists($id)) {
			throw new NotFoundException(__('Invalid lecturer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lecturer->save($this->request->data)) {
				$this->Session->setFlash(__('The lecturer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lecturer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lecturer.' . $this->Lecturer->primaryKey => $id));
			$this->request->data = $this->Lecturer->find('first', $options);
		}
		$faculties = $this->Lecturer->Faculty->find('list');
		$programs = $this->Lecturer->Program->find('list');
		$users = $this->Lecturer->User->find('list');
		$courses = $this->Lecturer->Course->find('list');
		$profiles = $this->Lecturer->Profile->find('list');
		$this->set(compact('faculties', 'programs', 'users', 'courses', 'profiles'));
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lecturer->id = $id;
		if (!$this->Lecturer->exists()) {
			throw new NotFoundException(__('Invalid lecturer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lecturer->delete()) {
			$this->Session->setFlash(__('The lecturer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lecturer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
