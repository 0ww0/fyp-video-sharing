<?php
App::uses('AppController', 'Controller');
/**
 * Programs Controller
 *
 * @property Program $Program
 * @property PaginatorComponent $Paginator
 */
class ProgramsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 * student && lecturer
 * @return void
 */
	public function index() {
		

		$this->Program->recursive = 0;
		$this->set('programs', $this->Paginator->paginate());
	}

/**
 * index method
 * admin
 * @return void
 */
	public function admin_index() {
		
		
		//role that only permit to view this page 
		//if not authorized will be redirect to profile page
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		$this->Program->recursive = 0;
		$this->set('programs', $this->Paginator->paginate());
	}


/**
 * view method
 * student & lecturer
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function related($id = null) {
		

		if (!$this->Program->exists($id)) {
			throw new NotFoundException(__('Invalid program'));
		}
		
	
		$options = array('conditions' => array('Program.' . $this->Program->primaryKey => $id, ));
		$this->set('program', $this->Program->find('first', $options));
		
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		
		//role that only permit to view this page 
		//if not authorized will be redirect to profile page
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		if ($this->request->is('post')) {
			$this->Program->create();
			if ($this->Program->save($this->request->data)) {
				$this->Session->setFlash(__('The program has been saved.','flash/success'));
				return $this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash(__('The program could not be saved. Please, try again.','flash/error'));
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
		$this->Program->id = $id;
		
		if (!$this->Program->exists()) {
			throw new NotFoundException(__('Invalid program'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Program->delete()) {
			$this->Session->setFlash(__('The program has been deleted.','flash/success'));
		} else {
			$this->Session->setFlash(__('The program could not be deleted. Please, try again.','flash/error'));
		}
		return $this->redirect(array('action' => 'admin_index'));
	}}
