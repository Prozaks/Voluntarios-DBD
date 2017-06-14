<?php
namespace App\Test\TestCase\Controller;

use App\Controller\VolunteerController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\VolunteerController Test Case
 */
class VolunteerControllerTest extends IntegrationTestCase
{

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
