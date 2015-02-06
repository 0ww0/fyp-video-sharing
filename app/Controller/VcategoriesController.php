<?php
App::uses('AppController', 'Controller');
/**
 * Vcategories Controller
 *
 * @property Vcategory $Vcategory
 * @property PaginatorComponent $Paginator
 */
class VcategoriesController extends AppController {

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
		
		
		$this->Vcategory->recursive = 0;
		$this->set('vcategories', $this->Paginator->paginate());
	}


/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		$this->Vcategory->recursive = 0;
		$this->set('vcategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function related($id = null) {
		

		
		if (!$this->Vcategory->exists($id)) {
			throw new NotFoundException(__('Invalid vcategory'));
		}
		$options = array('conditions' => array('Vcategory.' . $this->Vcategory->primaryKey => $id));
		$this->set('vcategory', $this->Vcategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		if ($this->request->is('post')) {
			$this->Vcategory->create();
			if ($this->Vcategory->save($this->request->data)) {
				$this->Session->setFlash(__('The vcategory has been saved.','flash/success'));
				return $this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash(__('The vcategory could not be saved. Please, try again.','flash/error'));
			}
		}
		$videos = $this->Vcategory->Video->find('list');
		$this->set(compact('videos'));
	}



/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Vcategory->id = $id;
		if (!$this->Vcategory->exists()) {
			throw new NotFoundException(__('Invalid vcategory'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vcategory->delete()) {
			$this->Session->setFlash(__('The vcategory has been deleted.','flash/success'));
		} else {
			$this->Session->setFlash(__('The vcategory could not be deleted. Please, try again.','flash/error'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
