<?php
App::uses('AppController', 'Controller');
/**
 * Ratings Controller
 *
 * @property Rating $Rating
 * @property PaginatorComponent $Paginator
 */
class RatingsController extends AppController {

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
	public function admin_index() {
		
		//role that only permit to view this page 
		//if not authorized will be redirect to profile page
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		$this->Rating->recursive = 0;
		$this->set('ratings', $this->Paginator->paginate());
	}


	public function delete($id = null) {
		$this->Rating->id = $id;
		if (!$this->Rating->exists()) {
			throw new NotFoundException(__('Invalid rating'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Rating->delete()) {
			$this->Session->setFlash(__('The rating has been deleted.','flash/success'));
		} else {
			$this->Session->setFlash(__('The rating could not be deleted. Please, try again.','flash/error'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
