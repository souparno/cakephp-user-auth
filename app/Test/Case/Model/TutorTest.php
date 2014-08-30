<?php
App::uses('Tutor', 'Model');

/**
 * Tutor Test Case
 *
 */
class TutorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tutor',
		'app.answer',
		'app.available',
		'app.match_made',
		'app.tutor2subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tutor = ClassRegistry::init('Tutor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tutor);

		parent::tearDown();
	}

}
