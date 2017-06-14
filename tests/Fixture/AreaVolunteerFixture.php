<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AreaVolunteerFixture
 *
 */
class AreaVolunteerFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'area_volunteer';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'AREA_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'VOL_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_AREA_VOLUNTEER2' => ['type' => 'index', 'columns' => ['VOL_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['AREA_ID', 'VOL_ID'], 'length' => []],
            'FK_AREA_VOLUNTEER' => ['type' => 'foreign', 'columns' => ['AREA_ID'], 'references' => ['area', 'AREA_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_AREA_VOLUNTEER2' => ['type' => 'foreign', 'columns' => ['VOL_ID'], 'references' => ['volunteer', 'VOL_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'AREA_ID' => 1,
            'VOL_ID' => 1
        ],
    ];
}
