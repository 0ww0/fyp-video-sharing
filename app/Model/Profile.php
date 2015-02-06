<?php
App::uses('AppModel', 'Model');
/**
 * Profile Model
 *
 * @property Group $Group
 * @property Faculty $Faculty
 * @property Program $Program
 * @property User $User
 * @property Course $Course
 * @property Lecturer $Lecturer
 */
class Profile extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fullName';
	public $actsAs = array( 

	'Uploader.Attachment' => array(
		'picture' => array(
			//'name'		=> 'mara_',	// Name of the function to use to format filenames
			'baseDir'	=> '',			// See UploaderComponent::$baseDir
			'uploadDir'	=> 'files/picture/',			// See UploaderComponent::$uploadDir
			'dbColumn'	=> 'picture',	// The database column name to save the path to
			'importFrom'	=> '',			// Path or URL to import file
			'defaultPath'	=> 'files/picture/default.jpg',		// Default file path if no upload present
			'maxNameLength'	=> 200,			// Max file name length
			'overwrite'	=> false,		// Overwrite file with same name if it exists
			'stopSave'	=> true,		// Stop the model save() if upload fails
			'allowEmpty'	=> false,		// Allow an empty file upload to continue
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
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
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
		'Program' => array(
			'className' => 'Program',
			'foreignKey' => 'program_id',
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
public $hasMany = array(
		'Message' => array(
			'className' => 'Message',
			'foreignKey' => 'profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
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
			'joinTable' => 'profiles_courses',
			'foreignKey' => 'profile_id',
			'associationForeignKey' => 'course_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Lecturer' => array(
			'className' => 'Lecturer',
			'joinTable' => 'profiles_lecturers',
			'foreignKey' => 'profile_id',
			'associationForeignKey' => 'lecturer_id',
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
