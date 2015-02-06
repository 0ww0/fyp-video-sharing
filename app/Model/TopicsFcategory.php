<?php
App::uses('AppModel', 'Model');
/**
 * TopicsFcategory Model
 *
 * @property Topic $Topic
 * @property Fcategory $Fcategory
 */
class TopicsFcategory extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Topic' => array(
			'className' => 'Topic',
			'foreignKey' => 'topic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Fcategory' => array(
			'className' => 'Fcategory',
			'foreignKey' => 'fcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
