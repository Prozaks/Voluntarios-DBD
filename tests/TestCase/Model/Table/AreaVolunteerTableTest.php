<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreaVolunteerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreaVolunteerTable Test Case
 */
class AreaVolunteerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AreaVolunteerTable
     */
    public $AreaVolunteer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.area_volunteer'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AreaVolunteer') ? [] : ['className' => 'App\Model\Table\AreaVolunteerTable'];
        $this->AreaVolunteer = TableRegistry::get('AreaVolunteer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AreaVolunteer);

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
