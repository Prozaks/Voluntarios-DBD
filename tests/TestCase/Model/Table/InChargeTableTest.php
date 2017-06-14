<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InChargeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InChargeTable Test Case
 */
class InChargeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InChargeTable
     */
    public $InCharge;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.in_charge'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InCharge') ? [] : ['className' => 'App\Model\Table\InChargeTable'];
        $this->InCharge = TableRegistry::get('InCharge', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InCharge);

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
