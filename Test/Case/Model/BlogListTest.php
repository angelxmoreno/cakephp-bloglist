<?php
App::uses('BlogList', 'Model');

/**
 * BlogList Test Case
 *
 */
class BlogListTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.blog_list',
		'app.visitor',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BlogList = ClassRegistry::init('BlogList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BlogList);

		parent::tearDown();
	}

}
