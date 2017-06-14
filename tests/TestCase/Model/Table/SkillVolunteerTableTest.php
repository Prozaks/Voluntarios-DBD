<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SkillVolunteerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SkillVolunteerTable Test Case
 */
class SkillVolunteerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SkillVolunteerTable
     */
    public $SkillVolunteer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.skill_volunteer'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SkillVolunteer') ? [] : ['className' => 'App\Model\Table\SkillVolunteerTable'];
        $this->SkillVolunteer = TableRegistry::get('SkillVolunteer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SkillVolunteer);

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
