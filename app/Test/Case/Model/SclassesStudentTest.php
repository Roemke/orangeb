<?php
App::uses('SclassesStudent', 'Model');

/**
 * SclassesStudent Test Case
 *
 */
class SclassesStudentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sclasses_student'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SclassesStudent = ClassRegistry::init('SclassesStudent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SclassesStudent);

		parent::tearDown();
	}

}
