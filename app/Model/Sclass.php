<?php
App::uses('AppModel', 'Model');
/**
 * Sclass Model
 *
 * @property Lesson $Lesson
 * @property Student $Student
 */
class Sclass extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'bezeichnung';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'bezeichnung' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Lesson' => array(
			'className' => 'Lesson',
			'joinTable' => 'sclasses_lessons',
			'foreignKey' => 'sclass_id',
			'associationForeignKey' => 'lesson_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Student' => array(
			'className' => 'Student',
			'joinTable' => 'sclasses_students',
			'foreignKey' => 'sclass_id',
			'associationForeignKey' => 'student_id',
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
