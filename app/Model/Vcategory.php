<?php
App::uses('AppModel', 'Model');
/**
 * Vcategory Model
 *
 * @property Video $Video
 */
class Vcategory extends AppModel {

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
		'Video' => array(
			'className' => 'Video',
			'joinTable' => 'videos_vcategories',
			'foreignKey' => 'vcategory_id',
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
