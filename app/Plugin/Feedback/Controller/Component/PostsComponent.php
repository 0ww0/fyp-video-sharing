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

App::uses('Component', 'Controller');

/**
 * @property CookieComponent $Cookie
 */
class PostsComponent extends Component
{
	public $components = array('Cookie');

	private $_defaultSettings = array('on' => 'view');

	public function __construct(ComponentCollection $collection, $settings = array())
	{
		parent::__construct($collection, $settings);
		$this->settings = array_merge($this->_defaultSettings, $settings);
	}

	public function beforeRender(Controller $controller)
	{
		if (!in_array($controller->request->params['action'], (array)$this->settings['on']))
		{
			return;
		}
		
		if (!in_array('Feedback.Posts', $controller->helpers))
		{
			$controller->helpers[] = 'Feedback.Posts';
		}

		$cookie_data = $this->Cookie->read('Feedback.PostInfo');

		if (!empty($cookie_data))
		{
			foreach ($cookie_data as $field => $value)
			{
				$controller->request->data['Post'][$field] = $value;
			}
		}
	}

	public function saveInfo()
	{
		$data = $this->_Collection->getController()->request->data;

		$info = array();
		$info['name'] = $data['Post']['name'];
		$info['email'] = $data['Post']['email'];
		
		$info['remember_info'] = $data['Post']['remember_info'];

		$this->Cookie->write('Feedback.PostInfo', $info, false, '+1 year');
	}

	public function forgetInfo()
	{
		$this->Cookie->delete('Feedback.PostInfo');
	}
}
