<?php
App::uses('AppModel', 'Model');
/**
 * Fcategory Model
 *
 * @property Topic $Topic
 */
class Fcategory extends AppModel {

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
		'Topic' => array(
			'className' => 'Topic',
			'joinTable' => 'topics_fcategories',
			'foreignKey' => 'fcategory_id',
			'associationForeignKey' => 'topic_id',
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
