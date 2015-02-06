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

App::uses('ModelBehavior', 'Model');

class PostableBehavior extends ModelBehavior
{
	public function setup(Model $Model, $config = array())
	{
		$Model->bindModel
			(
				array
				(
					'hasMany' => array
					(
						'Post' => array
						(
							'className'		=> 'Feedback.Post',
							'conditions'	=> sprintf('Post.foreign_model = \'%s\'', $Model->name),
							'foreignKey'	=> 'foreign_id',
						)
					)
        		),
				false
			);
	}

	public function cleanup(Model $Model)
	{
		$Model->unbindModel(array('hasMany' => array('Post')), false);
	}
}
