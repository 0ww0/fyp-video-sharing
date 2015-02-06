<?php
App::uses('AppModel', 'Model');
/**
 * Course Model
 *
 * @property Lecturer $Lecturer
 * @property Profile $Profile
 * @property Topic $Topic
 * @property Video $Video
 */
class Course extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Lecturer' => array(
			'className' => 'Lecturer',
			'joinTable' => 'lecturers_courses',
			'foreignKey' => 'course_id',
			'associationForeignKey' => 'lecturer_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Profile' => array(
			'className' => 'Profile',
			'joinTable' => 'profiles_courses',
			'foreignKey' => 'course_id',
			'associationForeignKey' => 'profile_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Topic' => array(
			'className' => 'Topic',
			'joinTable' => 'topics_courses',
			'foreignKey' => 'course_id',
			'associationForeignKey' => 'topic_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Video' => array(
			'className' => 'Video',
			'joinTable' => 'videos_courses',
			'foreignKey' => 'course_id',
			'associationForeignKey' => 'video_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
