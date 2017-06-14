<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotVolTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotVolTable Test Case
 */
class NotVolTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NotVolTable
     */
    public $NotVol;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.not_vol'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NotVol') ? [] : ['className' => 'App\Model\Table\NotVolTable'];
        $this->NotVol = TableRegistry::get('NotVol', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NotVol);

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
