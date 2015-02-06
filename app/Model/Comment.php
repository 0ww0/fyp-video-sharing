<?php
App::uses('AppModel', 'Model');
/**
 * Comment Model
 *
 * @property Foreign $Foreign
 * @property User $User
 */
class Comment extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
