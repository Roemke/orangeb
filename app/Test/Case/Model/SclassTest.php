<?php
App::uses('Sclass', 'Model');

/**
 * Sclass Test Case
 *
 */
class SclassTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sclass',
		'app.lesson',
		'app.course',
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
		$this->Sclass = ClassRegistry::init('Sclass');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sclass);

		parent::tearDown();
	}

}
