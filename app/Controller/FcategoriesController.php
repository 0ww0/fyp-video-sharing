<?php
App::uses('AppController', 'Controller');
/**
 * Fcategories Controller
 *
 * @property Fcategory $Fcategory
 * @property PaginatorComponent $Paginator
 */
class FcategoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin_index method
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
		$this->Fcategory->recursive = 0;
		$this->set('fcategories', $this->Paginator->paginate());
	}

	public function index() {
		$this->layout='admin';
		$this->Fcategory->recursive = 0;
		$this->set('fcategories', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function related($id = null) {
		//layout for this page
	

		if (!$this->Fcategory->exists($id)) {
			throw new NotFoundException(__('Invalid fcategory'));
		}
		$options = array('conditions' => array('Fcategory.' . $this->Fcategory->primaryKey => $id));
		$this->set('fcategory', $this->Fcategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		//layout for this page
		
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		if ($this->request->is('post')) {
			$this->Fcategory->create();
			if ($this->Fcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The fcategory has been saved.','flash/success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fcategory could not be saved. Please, try again.','flash/error'));
			}
		}
		$topics = $this->Fcategory->Topic->find('list');
		$this->set(compact('topics'));
	}



/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Fcategory->id = $id;
		if (!$this->Fcategory->exists()) {
			throw new NotFoundException(__('Invalid fcategory'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fcategory->delete()) {
			$this->Session->setFlash(__('The fcategory has been deleted.','flash/success'));
		} else {
			$this->Session->setFlash(__('The fcategory could not be deleted. Please, try again.','flash/error'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
