<?php
/**
	CakePHP Feedback Plugin

	Copyright (C) 2012-3827 dr. Hannibal Lecter / lecterror
	<http://lecterror.com/>

	Multi-licensed under:
		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
		LGPL <http://www.gnu.org/licenses/lgpl.html>
		GPL <http://www.gnu.org/licenses/gpl.html>
*/

App::uses('FeedbackAppController', 'Feedback.Controller');
/**
 * Comments Controller
 *
 * @property CommentsComponent $Comments
 * @property AuthComponent $Auth
 */
class PostsController extends FeedbackAppController
{
	public $components = array('Feedback.Posts');
	
	public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('add'); 
    }

	public function add($foreign_model = null, $foreign_id = null)
	{
		if (empty($foreign_model) ||
			empty($foreign_id) ||
			!$this->request->is('post')
			)
		{
			return $this->redirect('/');
		}

		App::uses($foreign_model, 'Model');
		$Model = ClassRegistry::init($foreign_model);

		if (!($Model instanceof Model))
		{
			return $this->redirect('/');
		}

		if ($Model->hasAny(array($Model->primaryKey => $foreign_id)) == false)
		{
			return $this->redirect('/');
		}

		if (!isset($this->request->data['Post']['foreign_model']) ||
			!isset($this->request->data['Post']['foreign_id']) ||
			$this->request->data['Post']['foreign_model'] != $foreign_model ||
			$this->request->data['Post']['foreign_id'] != $foreign_id)
		{
			return $this->redirect('/');
		}

		$user_id = null;

		if (isset($this->Auth))
		{
			$user_id = $this->Auth->user('id');
		}

		$this->request->data['Post']['foreign_model'] = $Model->name;
		$this->request->data['Post']['foreign_id'] = $foreign_id;
		$this->request->data['Post']['user_id'] = $user_id;
		$this->request->data['Post']['author_ip'] = $this->request->clientIp();

		$this->Post->create();

		if (!$this->Post->save($this->request->data))
		{
			$this->set('validation_errors', $this->Post->validationErrors);
			return;
		}

		if ($this->request->data['Post']['remember_info'])
		{
			$this->Posts->saveInfo();
		}
		else
		{
			$this->Posts->forgetInfo();
		}

		$this->redirect($this->request->referer().'#post-'.$this->Post->id);
	}


}

