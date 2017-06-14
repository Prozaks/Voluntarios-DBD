<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdministratorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdministratorTable Test Case
 */
class AdministratorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdministratorTable
     */
    public $Administrator;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.administrator'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Administrator') ? [] : ['className' => 'App\Model\Table\AdministratorTable'];
        $this->Administrator = TableRegistry::get('Administrator', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Administrator);

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
