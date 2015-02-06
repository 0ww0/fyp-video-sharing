<?php
App::uses('AppModel', 'Model');
/**
 * Video Model
 *
 * @property Group $Group
 * @property Lecturer $Lecturer
 * @property User $User
 * @property Program $Program
 * @property Faculty $Faculty
 * @property Course $Course
 * @property Vcategory $Vcategory
 */
class Video extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $actsAs = array( 

	'Feedback.Commentable','Feedback.Coursewarable','Feedback.Rated','Uploader.Attachment' => array(
		'filename' => array(
			//'name'		=> 'mara_',	// Name of the function to use to format filenames
			'baseDir'	=> '',			// See UploaderComponent::$baseDir
			'uploadDir'	=> 'files/video/',			// See UploaderComponent::$uploadDir
			'dbColumn'	=> 'filename',	// The database column name to save the path to
			'importFrom'	=> '',			// Path or URL to import file
			'defaultPath'	=> 'files/video/default.jpg',		// Default file path if no upload present
			'maxNameLength'	=> 200,			// Max file name length
			'overwrite'	=> false,		// Overwrite file with same name if it exists
			'stopSave'	=> true,		// Stop the model save() if upload fails
			'allowEmpty'	=> false,		// Allow an empty file upload to continue
			'transforms'	=> array(),		// What transformations to do on images: scale, resize, etc
			's3'		=> array(),		// Array of Amazon S3 settings
			'metaColumns'	=> array(		// Mapping of meta data to database fields
				'ext' => 'extension',
				'type' => 'mimeType',
				'size' => 'filesize',
				'group' => '',
				'width' => '',
				'height' => '',
				'filesize' => ''
			)
		),
		'thumb' => array(
			//'name'		=> 'mara_',	// Name of the function to use to format filenames
			'baseDir'	=> '',			// See UploaderComponent::$baseDir
			'uploadDir'	=> 'files/thumb/',			// See UploaderComponent::$uploadDir
			'dbColumn'	=> 'thumb',	// The database column name to save the path to
			'importFrom'	=> '',			// Path or URL to import file
			'defaultPath'	=> 'files/thumb/default.jpg',		// Default file path if no upload present
			'maxNameLength'	=> 200,			// Max file name length
			'overwrite'	=> false,		// Overwrite file with same name if it exists
			'stopSave'	=> true,		// Stop the model save() if upload fails
			'allowEmpty'	=> true,		// Allow an empty file upload to continue
			'transforms'	=> array(),		// What transformations to do on images: scale, resize, etc
			's3'		=> array(),		// Array of Amazon S3 settings
			'metaColumns'	=> array(		// Mapping of meta data to database fields
				'ext' => 'extension',
				'type' => 'mimeType',
				'size' => 'filesize',
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
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Lecturer' => array(
			'className' => 'Lecturer',
			'foreignKey' => 'lecturer_id',
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
		),
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
			'joinTable' => 'videos_courses',
			'foreignKey' => 'video_id',
			'associationForeignKey' => 'course_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Vcategory' => array(
			'className' => 'Vcategory',
			'joinTable' => 'videos_vcategories',
			'foreignKey' => 'video_id',
			'associationForeignKey' => 'vcategory_id',
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
