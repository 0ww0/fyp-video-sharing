<?php
App::uses('AppModel', 'Model');
/**
 * Topic Model
 *
 * @property Program $Program
 * @property Faculty $Faculty
 * @property User $User
 * @property Course $Course
 * @property Fcategory $Fcategory
 */
class Topic extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'subject';

	public $actsAs = array( 

	'Feedback.Postable','Uploader.Attachment' => array(
		'attachment' => array(
			//'name'		=> 'mara_',	// Name of the function to use to format filenames
			'baseDir'	=> '',			// See UploaderComponent::$baseDir
			'uploadDir'	=> 'files/attachment/',			// See UploaderComponent::$uploadDir
			'dbColumn'	=> 'attachment',	// The database column name to save the path to
			'importFrom'	=> '',			// Path or URL to import file
			'defaultPath'	=> 'files/attachment/default.jpg',		// Default file path if no upload present
			'maxNameLength'	=> 200,			// Max file name length
			'overwrite'	=> false,		// Overwrite file with same name if it exists
			'stopSave'	=> true,		// Stop the model save() if upload fails
			'allowEmpty'	=> true,		// Allow an empty file upload to continue
			'transforms'	=> array(),		// What transformations to do on images: scale, resize, etc
			's3'		=> array(),		// Array of Amazon S3 settings
			'metaColumns'	=> array(		// Mapping of meta data to database fields
				'ext' => '',
				'type' => '',
				'size' => '',
				'group' => '',
				'width' => '',
				'height' => '',
				'filesize' => ''
			)
		)
	)
);


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Program' => array(
			'className' => 'Program',
			'foreignKey' => 'program_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Faculty' => array(
			'className' => 'Faculty',
			'foreignKey' => 'faculty_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Course' => array(
			'className' => 'Course',
			'joinTable' => 'topics_courses',
			'foreignKey' => 'topic_id',
			'associationForeignKey' => 'course_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Fcategory' => array(
			'className' => 'Fcategory',
			'joinTable' => 'topics_fcategories',
			'foreignKey' => 'topic_id',
			'associationForeignKey' => 'fcategory_id',
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
