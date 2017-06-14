<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegionTable Test Case
 */
class RegionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegionTable
     */
    public $Region;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.region'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Region') ? [] : ['className' => 'App\Model\Table\RegionTable'];
        $this->Region = TableRegistry::get('Region', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Region);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
