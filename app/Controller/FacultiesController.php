<?php
App::uses('AppController', 'Controller');
/**
 * Faculties Controller
 *
 * @property Faculty $Faculty
 * @property PaginatorComponent $Paginator
 */
class FacultiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 * student and lecturer view
 * @return void
 */
	public function index() {
		//layout for this page
	

		$this->Faculty->recursive = 0;
		$this->set('faculties', $this->Paginator->paginate());
	}

	/**
 * admin_index method
 * admin view 
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
		$this->Faculty->recursive = 0;
		$this->set('faculties', $this->Paginator->paginate());
	}

	/**
 * related method
 * admin view 
 * @return void
 */
	public function related($id = null)
	{	//layout for this page
		
	
		if (!$this->Faculty->exists($id)) {
			throw new NotFoundException(__('Invalid faculty'));
		}
		$options = array('conditions' => array('Faculty.' . $this->Faculty->primaryKey => $id));
		$this->set('faculty', $this->Faculty->find('first', $options));
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
			$this->Faculty->create();
			if ($this->Faculty->save($this->request->data)) {
				$this->Session->setFlash(__('The faculty has been saved.','flash/success'));
				return $this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash(__('The faculty could not be saved. Please, try again.','flash/error'));
			}
		}
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Faculty->id = $id;
		if (!$this->Faculty->exists()) {
			throw new NotFoundException(__('Invalid faculty'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Faculty->delete()) {
			$this->Session->setFlash(__('The faculty has been deleted.','flash/success'));
		} else {
			$this->Session->setFlash(__('The faculty could not be deleted. Please, try again.','flash/error'));
		}
		return $this->redirect(array('action' => 'admin_index'));
	}}
