<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TaskTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TaskTable Test Case
 */
class TaskTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TaskTable
     */
    public $Task;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.task',
        'app.skill',
        'app.volunteer',
        'app.area',
        'app.area_volunteer',
        'app.emergency',
        'app.emergency_volunteer',
        'app.skill_volunteer',
        'app.task_volunteer',
        'app.task_skill'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Task') ? [] : ['className' => 'App\Model\Table\TaskTable'];
        $this->Task = TableRegistry::get('Task', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Task);

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
