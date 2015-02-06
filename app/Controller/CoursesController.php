<?php
App::uses('AppController', 'Controller');
/**
 * Courses Controller
 *
 * @property Course $Course
 * @property PaginatorComponent $Paginator
 */
class CoursesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin index method
 *
 * @return void
 */
	public function admin_index() {
		//layout for this page
		
		//role that only permit to view this page 
		//if not authorized will be redirect to profile page
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}

		$this->Course->recursive = 0;
		$this->set('courses', $this->Paginator->paginate());
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		//layout for this page
		

		$this->Course->recursive = 1;
		$this->set('courses', $this->Paginator->paginate());
	}

/**
 * related method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function related($id = null) {
		//layout for this page
	
		
		if (!$this->Course->exists($id)) {
			throw new NotFoundException(__('Invalid course'));
		}
	
		$options = array('conditions' => array('Course.' . $this->Course->primaryKey => $id));
		$this->set('course', $this->Course->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		//layout for this page
		
		//role that only permit to view this page 
		//if not authorized will be redirect to profile page
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		
		if ($this->request->is('post')) {
			$this->Course->create();
			if ($this->Course->save($this->request->data)) {
				$this->Session->setFlash(__('The course has been saved.','flash/success'));
				return $this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.','flash/error'));
			}
		}
		//$profiles = $this->Course->Profile->find('list');
		$topics = $this->Course->Topic->find('list');
		$videos = $this->Course->Video->find('list');
		$this->set(compact('profiles', 'topics', 'videos'));
	}



/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Course->id = $id;
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid course'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Course->delete()) {
			$this->Session->setFlash(__('The course has been deleted.','flash/success'));
		} else {
			$this->Session->setFlash(__('The course could not be deleted. Please, try again.','flash/error'));
		}
		return $this->redirect(array('action' => 'admin_index'));
	}}
