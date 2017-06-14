<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotVolFixture
 *
 */
class NotVolFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'not_vol';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'NOT_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'VOL_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NV_ESTADO' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_TIENE_38' => ['type' => 'index', 'columns' => ['NOT_ID'], 'length' => []],
            'FK_TIENE_40' => ['type' => 'index', 'columns' => ['VOL_ID'], 'length' => []],
        ],
        '_constraints' => [
            'FK_TIENE_38' => ['type' => 'foreign', 'columns' => ['NOT_ID'], 'references' => ['notification', 'NOT_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_TIENE_40' => ['type' => 'foreign', 'columns' => ['VOL_ID'], 'references' => ['volunteer', 'VOL_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'NOT_ID' => 1,
            'VOL_ID' => 1,
            'NV_ESTADO' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
