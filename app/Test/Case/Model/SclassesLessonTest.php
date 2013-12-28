<?php
App::uses('SclassesLesson', 'Model');

/**
 * SclassesLesson Test Case
 *
 */
class SclassesLessonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sclasses_lesson'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SclassesLesson = ClassRegistry::init('SclassesLesson');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SclassesLesson);

		parent::tearDown();
	}

}
