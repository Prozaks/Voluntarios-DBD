<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TaskController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TaskController Test Case
 */
class TaskControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
