<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmergencyVolunteerFixture
 *
 */
class EmergencyVolunteerFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'emergency_volunteer';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'VOL_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'EMER_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_ASOCIA1' => ['type' => 'index', 'columns' => ['EMER_ID'], 'length' => []],
            'FK_ASOCIA2' => ['type' => 'index', 'columns' => ['VOL_ID'], 'length' => []],
        ],
        '_constraints' => [
            'FK_ASOCIA1' => ['type' => 'foreign', 'columns' => ['EMER_ID'], 'references' => ['emergency', 'EMER_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_ASOCIA2' => ['type' => 'foreign', 'columns' => ['VOL_ID'], 'references' => ['volunteer', 'VOL_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'EMER_ID' => 1
        ],
    ];
}
