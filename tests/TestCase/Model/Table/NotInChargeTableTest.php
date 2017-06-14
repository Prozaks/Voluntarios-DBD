<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotInChargeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotInChargeTable Test Case
 */
class NotInChargeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NotInChargeTable
     */
    public $NotInCharge;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.not_in_charge'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NotInCharge') ? [] : ['className' => 'App\Model\Table\NotInChargeTable'];
        $this->NotInCharge = TableRegistry::get('NotInCharge', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NotInCharge);

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
