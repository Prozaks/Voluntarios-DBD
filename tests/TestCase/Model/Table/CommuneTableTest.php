<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommuneTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommuneTable Test Case
 */
class CommuneTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CommuneTable
     */
    public $Commune;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.commune'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Commune') ? [] : ['className' => 'App\Model\Table\CommuneTable'];
        $this->Commune = TableRegistry::get('Commune', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Commune);

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
