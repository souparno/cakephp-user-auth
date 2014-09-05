<?php
App::uses('Imagelider', 'Model');

/**
 * Imagelider Test Case
 *
 */
class ImageliderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.imagelider'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Imagelider = ClassRegistry::init('Imagelider');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Imagelider);

		parent::tearDown();
	}

}
