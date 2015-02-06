<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {

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
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}



/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('The post has been deleted.','flash/success'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.','flash/error'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
