<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MissionVolunteerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MissionVolunteerTable Test Case
 */
class MissionVolunteerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MissionVolunteerTable
     */
    public $MissionVolunteer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mission_volunteer'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MissionVolunteer') ? [] : ['className' => 'App\Model\Table\MissionVolunteerTable'];
        $this->MissionVolunteer = TableRegistry::get('MissionVolunteer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MissionVolunteer);

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
