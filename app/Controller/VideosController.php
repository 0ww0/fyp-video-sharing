<?php
App::uses('AppController', 'Controller');
/**
 * Videos Controller
 *
 * @property Video $Video
 * @property PaginatorComponent $Paginator
 */
class VideosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Feedback.Ratings' => array('on' => array('admin_view', 'view','comware')),'Feedback.Comments' => array('on' => array('admin_view', 'view', 'comware')),'Feedback.Coursewares' => array('on' => array('admin_view', 'view', 'comware')));
	
	public $actsAs = array('Uploader.Attachment');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		//same with public hide private video
		
		$this->Video->recursive = 1;
		$this->paginate = array('conditions' => array('Video.visibility LIKE' => 'Public'));
		$this->set('videos', $this->Paginator->paginate());
	}

	public function studware() {
		//same with public hide private video
		
		$this->Video->recursive = 1;
		$this->paginate = array('conditions' => array('Video.Courseware LIKE' => 'YES'));
		$this->set('videos', $this->Paginator->paginate());
	}
	public function lectware() {
		//same with public hide private video
		
		$this->Video->recursive = 1;
		$this->paginate = array('conditions' => array('Video.Courseware LIKE' => 'YES'));
		$this->set('videos', $this->Paginator->paginate());
	}

	public function index_public() {
		//public for user only
	
		$this->Video->recursive = 1;
		$this->paginate = array('conditions' => array('Video.visibility LIKE' => 'Public','Video.user_id' => $this->Auth->user('id')));
		$this->set('videos', $this->Paginator->paginate());
	}

	public function index_own() {
		//own for user only
	
		$this->Video->recursive = 1;
		$this->paginate = array('conditions' => array('Video.user_id' => $this->Auth->user('id')));
		$this->set('videos', $this->Paginator->paginate());
	}

	public function index_private() {
		//hide from all
		//show for auth.user.id
		
		$this->Video->recursive = 1;
		$this->paginate = array('conditions' => array('Video.visibility LIKE' => 'Private','Video.user_id' => $this->Auth->user('id')));
		$this->set('videos', $this->Paginator->paginate());
	}

	public function admin_index() {
			
		

		//all visibility
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		
		$this->Video->recursive = 1;
		$this->paginate = array('conditions' => array('Video.visibility LIKE' => 'Private','Video.user_id' => $this->Auth->user('id')));
		$this->set('videos', $this->Paginator->paginate());
	}


	public function related1($limit=10)
{
	/* We retrieve only the required fields, and configure the query. */
	$videos = $this->Video->find('all', array('fields'=>array('Video.name', 'Video.description'),
							   'recursive'=>0,
							   'order'=>array('Video.created desc'),
							   'limit'=>$limit,
							   'conditions' => array('Video.visibility LIKE' => 'Public')
							   ));
 
	if(isset($this->params['requested']))
	{
		return $videos;
	}
 
	$this->set('related1', $videos);
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
		$this->set('video', $this->Video->find('first', $options));
	}
	public function comware($id = null) {
		
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
		$this->set('video', $this->Video->find('first', $options));
	}

	public function admin_view($id = null) {
	
		$role = $this->Session->Read('Auth.User.role_id') == 1;
		if (!$role) {
			$this->Session->setFlash(__('Not Authorize','flash/error'));
			$this->redirect(array('controller'=>'profiles','action' => 'index'));
		}
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
		$this->set('video', $this->Video->find('first', $options));
	}

	public function related($id = null) {
		
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
		$this->set('video', $this->Video->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->Video->create();
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('The video has been saved.','flash/success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.','flash/error'));
			}
		}
		$users = $this->Video->User->find('list');
		$programs = $this->Video->Program->find('list');
		$faculties = $this->Video->Faculty->find('list');
		$courses = $this->Video->Course->find('list');
		$vcategories = $this->Video->Vcategory->find('list');
		$this->set(compact('users', 'programs', 'faculties', 'courses', 'vcategories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('The video has been saved.','flash/success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.','flash/error'));
			}
		} else {
			$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
			$this->request->data = $this->Video->find('first', $options);
		}
		$users = $this->Video->User->find('list');
		$programs = $this->Video->Program->find('list');
		$faculties = $this->Video->Faculty->find('list');
		$courses = $this->Video->Course->find('list');
		$vcategories = $this->Video->Vcategory->find('list');
		$this->set(compact('users', 'programs', 'faculties', 'courses', 'vcategories'));
	}

	public function visibility($id = null) {
		
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('The changes has been saved.','flash/success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.','flash/error'));
			}
		} else {
			$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
			$this->request->data = $this->Video->find('first', $options);
		}
		$users = $this->Video->User->find('list');
		$programs = $this->Video->Program->find('list');
		$faculties = $this->Video->Faculty->find('list');
		$courses = $this->Video->Course->find('list');
		$vcategories = $this->Video->Vcategory->find('list');
		$this->set(compact('users', 'programs', 'faculties', 'courses', 'vcategories'));
	}


		public function sub2ware($id = null) {
		
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('The changes has been saved.','flash/success'));
				return $this->redirect(array('action' => 'studware'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.','flash/error'));
			}
		} else {
			$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
			$this->request->data = $this->Video->find('first', $options);
		}
		$users = $this->Video->User->find('list');
		$lecturers = $this->Video->Lecturer->find('list');
		$programs = $this->Video->Program->find('list');
		$faculties = $this->Video->Faculty->find('list');
		$courses = $this->Video->Course->find('list');
		$vcategories = $this->Video->Vcategory->find('list');
		$this->set(compact('lecturers','users', 'programs', 'faculties', 'courses', 'vcategories'));
	}

		public function val2ware($id = null) {
		
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('The changes has been saved.','flash/success'));
				return $this->redirect(array('action' => 'lectware'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.','flash/error'));
			}
		} else {
			$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
			$this->request->data = $this->Video->find('first', $options);
		}
		$users = $this->Video->User->find('list');
		
		$programs = $this->Video->Program->find('list');
		$faculties = $this->Video->Faculty->find('list');
		$courses = $this->Video->Course->find('list');
		$vcategories = $this->Video->Vcategory->find('list');
		$this->set(compact('users', 'programs', 'faculties', 'courses', 'vcategories'));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
		$this->Video->id = $id;
		if (!$this->Video->exists()) {
			throw new NotFoundException(__('Invalid video'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Video->delete()) {
			$this->Session->setFlash(__('The video has been deleted.','flash/success'));
		} else {
			$this->Session->setFlash(__('The video could not be deleted. Please, try again.','flash/error'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
