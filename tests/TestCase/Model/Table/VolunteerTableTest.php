<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VolunteerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VolunteerTable Test Case
 */
class VolunteerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VolunteerTable
     */
    public $Volunteer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.volunteer',
        'app.area',
        'app.area_volunteer',
        'app.emergency',
        'app.emergency_volunteer',
        'app.skill',
        'app.skill_volunteer',
        'app.task',
        'app.task_skill',
        'app.task_volunteer'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Volunteer') ? [] : ['className' => 'App\Model\Table\VolunteerTable'];
        $this->Volunteer = TableRegistry::get('Volunteer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Volunteer);

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
