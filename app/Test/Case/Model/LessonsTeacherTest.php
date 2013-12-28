<?php
App::uses('LessonsTeacher', 'Model');

/**
 * LessonsTeacher Test Case
 *
 */
class LessonsTeacherTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lessons_teacher',
		'app.lesson',
		'app.course',
		'app.student',
		'app.lessons_student',
		'app.sclass',
		'app.sclasses_lesson',
		'app.sclasses_student',
		'app.teacher'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LessonsTeacher = ClassRegistry::init('LessonsTeacher');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LessonsTeacher);

		parent::tearDown();
	}

}
