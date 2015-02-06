<?php
App::uses('AppModel', 'Model');
/**
 * ProfilesCourse Model
 *
 * @property Profile $Profile
 * @property Course $Course
 */
class ProfilesCourse extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Profile' => array(
			'className' => 'Profile',
			'foreignKey' => 'profile_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'course_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
