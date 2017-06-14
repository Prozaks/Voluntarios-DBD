<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmergencyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmergencyTable Test Case
 */
class EmergencyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmergencyTable
     */
    public $Emergency;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emergency',
        'app.volunteer',
        'app.emergency_volunteer'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Emergency') ? [] : ['className' => 'App\Model\Table\EmergencyTable'];
        $this->Emergency = TableRegistry::get('Emergency', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Emergency);

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
