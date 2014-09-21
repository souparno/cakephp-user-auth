<?php
App::uses('Imageslider', 'Model');

/**
 * Imageslider Test Case
 *
 */
class ImagesliderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.imageslider'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Imageslider = ClassRegistry::init('Imageslider');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Imageslider);

		parent::tearDown();
	}

}
