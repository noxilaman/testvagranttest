<?php
App::uses('Category', 'Model');

/**
 * Category Test Case
 *
 */
class CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Category = ClassRegistry::init('Category');
	}

	public function testGetCategoriesList(){
		$data = $this->Category->getCategoriesList();
		$this->assertEquals(5,count($data));
		$myKey = "";
		$myName = "";
		foreach($data as $key=>$name){
			$myKey = $key;
			$myName = $name;
			break;	
		}
		$this->assertEquals("1",$myKey);
		$this->assertEquals("Fast food",$myName);

	}

	public function testGetCategoriesListOrderASC(){
                $data = $this->Category->getCategoriesList();
                $baseData = array_values($data);
		sort($data);
		$this->assertEquals($data,$baseData);

        }

	public function testGetCategoriesListOrderDESC(){
                $data = $this->Category->getCategoriesList("DESC");
                $baseData = array_values($data);
                rsort($data);
                $this->assertEquals($data,$baseData);

        }

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Category);

		parent::tearDown();
	}

}
