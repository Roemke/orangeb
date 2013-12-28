<?php
/**
 * LessonFixture
 *
 */
class LessonFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'nummer' => array('type' => 'integer', 'null' => false, 'default' => null),
		'startzeit' => array('type' => 'time', 'null' => false, 'default' => null),
		'dauer' => array('type' => 'integer', 'null' => false, 'default' => null),
		'course_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'date' => '2013-10-05',
			'nummer' => 1,
			'startzeit' => '21:24:04',
			'dauer' => 1,
			'course_id' => 1
		),
	);

}
