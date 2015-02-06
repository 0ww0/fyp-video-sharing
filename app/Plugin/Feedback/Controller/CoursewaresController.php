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
class CoursewaresController extends FeedbackAppController
{
	public $components = array('Feedback.Coursewares');
	
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

		if (!isset($this->request->data['Courseware']['foreign_model']) ||
			!isset($this->request->data['Courseware']['foreign_id']) ||
			$this->request->data['Courseware']['foreign_model'] != $foreign_model ||
			$this->request->data['Courseware']['foreign_id'] != $foreign_id)
		{
			return $this->redirect('/');
		}

		$user_id = null;

		if (isset($this->Auth))
		{
			$user_id = $this->Auth->user('id');
		}

		$this->request->data['Courseware']['foreign_model'] = $Model->name;
		$this->request->data['Courseware']['foreign_id'] = $foreign_id;
		$this->request->data['Courseware']['user_id'] = $user_id;
		$this->request->data['Courseware']['author_ip'] = $this->request->clientIp();

		$this->Courseware->create();

		if (!$this->Courseware->save($this->request->data))
		{
			$this->set('validation_errors', $this->Courseware->validationErrors);
			return;
		}

		if ($this->request->data['Courseware']['remember_info'])
		{
			$this->Coursewares->saveInfo();
		}
		else
		{
			$this->Coursewares->forgetInfo();
		}

		$this->redirect($this->request->referer().'#courseware-'.$this->Courseware->id);
	}


}

