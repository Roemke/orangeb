<?php
App::uses('Teacher', 'Model');

/**
 * Teacher Test Case
 *
 */
class TeacherTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.teacher',
		'app.lessons_student',
		'app.lesson',
		'app.course',
		'app.student',
		'app.sclass',
		'app.sclasses_lesson',
		'app.sclasses_student',
		'app.lessons_teacher'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Teacher = ClassRegistry::init('Teacher');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Teacher);

		parent::tearDown();
	}

}
