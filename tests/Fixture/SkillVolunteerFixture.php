<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SkillVolunteerFixture
 *
 */
class SkillVolunteerFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'skill_volunteer';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'VOL_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'SKILL_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_TIENE_7' => ['type' => 'index', 'columns' => ['SKILL_ID'], 'length' => []],
            'FK_TIENE_8' => ['type' => 'index', 'columns' => ['VOL_ID'], 'length' => []],
        ],
        '_constraints' => [
            'FK_TIENE_7' => ['type' => 'foreign', 'columns' => ['SKILL_ID'], 'references' => ['skill', 'SKILL_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_TIENE_8' => ['type' => 'foreign', 'columns' => ['VOL_ID'], 'references' => ['volunteer', 'VOL_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'VOL_ID' => 1,
            'SKILL_ID' => 1
        ],
    ];
}
