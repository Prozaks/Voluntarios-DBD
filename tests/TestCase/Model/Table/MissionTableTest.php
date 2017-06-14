<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MissionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MissionTable Test Case
 */
class MissionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MissionTable
     */
    public $Mission;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mission'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Mission') ? [] : ['className' => 'App\Model\Table\MissionTable'];
        $this->Mission = TableRegistry::get('Mission', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mission);

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
