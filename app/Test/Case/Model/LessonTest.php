<?php
App::uses('Lesson', 'Model');

/**
 * Lesson Test Case
 *
 */
class LessonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lesson',
		'app.course',
		'app.sclass',
		'app.sclasses_lesson',
		'app.student',
		'app.sclasses_student'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lesson = ClassRegistry::init('Lesson');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lesson);

		parent::tearDown();
	}

}
