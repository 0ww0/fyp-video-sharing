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
class CoursewaresComponent extends Component
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
		
		if (!in_array('Feedback.Coursewares', $controller->helpers))
		{
			$controller->helpers[] = 'Feedback.Coursewares';
		}

		$cookie_data = $this->Cookie->read('Feedback.CoursewareInfo');

		if (!empty($cookie_data))
		{
			foreach ($cookie_data as $field => $value)
			{
				$controller->request->data['Courseware'][$field] = $value;
			}
		}
	}

	public function saveInfo()
	{
		$data = $this->_Collection->getController()->request->data;

		$info = array();
		$info['name'] = $data['Courseware']['name'];
		$info['email'] = $data['Courseware']['email'];
		
		$info['remember_info'] = $data['Courseware']['remember_info'];

		$this->Cookie->write('Feedback.CoursewareInfo', $info, false, '+1 year');
	}

	public function forgetInfo()
	{
		$this->Cookie->delete('Feedback.CoursewareInfo');
	}
}
