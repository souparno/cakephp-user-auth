<?php
App::uses('Transactiondetail', 'Model');

/**
 * Transactiondetail Test Case
 *
 */
class TransactiondetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transactiondetail',
		'app.transaction',
		'app.user',
		'app.role',
		'app.country',
		'app.product',
		'app.subcategory',
		'app.category',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Transactiondetail = ClassRegistry::init('Transactiondetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transactiondetail);

		parent::tearDown();
	}

}
