<?php
App::uses('AppModel', 'Model');
/**
 * VideosVcategory Model
 *
 * @property Video $Video
 * @property Vcategory $Vcategory
 */
class VideosVcategory extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Video' => array(
			'className' => 'Video',
			'foreignKey' => 'video_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Vcategory' => array(
			'className' => 'Vcategory',
			'foreignKey' => 'vcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
