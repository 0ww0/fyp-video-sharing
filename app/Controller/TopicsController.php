<?php
App::uses('AppController', 'Controller');
/**
 * Topics Controller
 *
 * @property Topic $Topic
 * @property PaginatorComponent $Paginator
 */
class TopicsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Feedback.Ratings' => array('on' => array('admin_view', 'view')),'Feedback.Posts' => array('on' => array('admin_view', 'view')));

	public $actsAs = array('Uploader.Attachment');

/**
 * index method
 *
 * @return void
 */
	public function index() {
	
		$this->Topic->recursive = 1;
		$this->set('topics', $this->Paginator->paginate());
	}

	public function admin_index() {
		
		$this->Topic->recursive = 1;
		$this->set('topics', $this->Paginator->paginate());
	}
		public function index_own() {
		
		$this->Topic->recursive = 1;
		$this->paginate = array('conditions' => array('Topic.user_id' => $this->Auth->User('id')));
		$this->set('topics', $this->Paginator->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Topic->exists($id)) {
			throw new NotFoundException(__('Invalid topic'));
		}
		$options = array('conditions' => array('Topic.' . $this->Topic->primaryKey => $id));
		$this->set('topic', $this->Topic->find('first', $options));
	}

	public function admin_view($id = null) {
			
		if (!$this->Topic->exists($id)) {
			throw new NotFoundException(__('Invalid topic'));
		}
		$options = array('conditions' => array('Topic.' . $this->Topic->primaryKey => $id));
		$this->set('topic', $this->Topic->find('first', $options));
	}

	public function related($id = null) {
		
		
		if (!$this->Topic->exists($id)) {
			throw new NotFoundException(__('Invalid topic'));
		}
		$options = array('conditions' => array('Topic.' . $this->Topic->primaryKey => $id));
		$this->set('topic', $this->Topic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		
		if ($this->request->is('post')) {
			$this->Topic->create();
			if ($this->Topic->save($this->request->data)) {
				$this->Session->setFlash(__('The topic has been saved.','flash/success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The topic could not be saved. Please, try again.','flash/error'));
			}
		}
		$programs = $this->Topic->Program->find('list');
		$faculties = $this->Topic->Faculty->find('list');
		$users = $this->Topic->User->find('list');
		$courses = $this->Topic->Course->find('list');
		$fcategories = $this->Topic->Fcategory->find('list');
		$this->set(compact('programs', 'faculties', 'users', 'courses', 'fcategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
		if (!$this->Topic->exists($id)) {
			throw new NotFoundException(__('Invalid topic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Topic->save($this->request->data)) {
				$this->Session->setFlash(__('The topic has been saved.','flash/success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The topic could not be saved. Please, try again.','flash/error'));
			}
		} else {
			$options = array('conditions' => array('Topic.' . $this->Topic->primaryKey => $id));
			$this->request->data = $this->Topic->find('first', $options);
		}
		$programs = $this->Topic->Program->find('list');
		$faculties = $this->Topic->Faculty->find('list');
		$users = $this->Topic->User->find('list');
		$courses = $this->Topic->Course->find('list');
		$fcategories = $this->Topic->Fcategory->find('list');
		$this->set(compact('programs', 'faculties', 'users', 'courses', 'fcategories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Topic->id = $id;
		if (!$this->Topic->exists()) {
			throw new NotFoundException(__('Invalid topic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Topic->delete()) {
			$this->Session->setFlash(__('The topic has been deleted.','flash/success'));
		} else {
			$this->Session->setFlash(__('The topic could not be deleted. Please, try again.','flash/error'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
