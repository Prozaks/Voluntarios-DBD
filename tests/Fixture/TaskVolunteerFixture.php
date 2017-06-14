<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TaskVolunteerFixture
 *
 */
class TaskVolunteerFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'task_volunteer';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'TASK_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'VOL_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'TV_SOLICITUD' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_TIENE_30' => ['type' => 'index', 'columns' => ['VOL_ID'], 'length' => []],
            'FK_TIENE_31' => ['type' => 'index', 'columns' => ['TASK_ID'], 'length' => []],
        ],
        '_constraints' => [
            'FK_TIENE_30' => ['type' => 'foreign', 'columns' => ['VOL_ID'], 'references' => ['volunteer', 'VOL_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_TIENE_31' => ['type' => 'foreign', 'columns' => ['TASK_ID'], 'references' => ['task', 'TASK_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'TASK_ID' => 1,
            'VOL_ID' => 1,
            'TV_SOLICITUD' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
