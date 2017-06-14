<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotAdmTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotAdmTable Test Case
 */
class NotAdmTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NotAdmTable
     */
    public $NotAdm;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.not_adm'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NotAdm') ? [] : ['className' => 'App\Model\Table\NotAdmTable'];
        $this->NotAdm = TableRegistry::get('NotAdm', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NotAdm);

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
