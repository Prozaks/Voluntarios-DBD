<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TaskVolunteerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TaskVolunteerTable Test Case
 */
class TaskVolunteerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TaskVolunteerTable
     */
    public $TaskVolunteer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('TaskVolunteer') ? [] : ['className' => 'App\Model\Table\TaskVolunteerTable'];
        $this->TaskVolunteer = TableRegistry::get('TaskVolunteer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TaskVolunteer);

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
