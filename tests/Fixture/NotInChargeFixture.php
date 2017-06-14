<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotInChargeFixture
 *
 */
class NotInChargeFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'not_in_charge';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'NOT_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'IN_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NI_ESTADO' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_RELA1' => ['type' => 'index', 'columns' => ['NOT_ID'], 'length' => []],
            'FK_RELA2' => ['type' => 'index', 'columns' => ['IN_ID'], 'length' => []],
        ],
        '_constraints' => [
            'FK_RELA1' => ['type' => 'foreign', 'columns' => ['NOT_ID'], 'references' => ['notification', 'NOT_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_RELA2' => ['type' => 'foreign', 'columns' => ['IN_ID'], 'references' => ['in_charge', 'IN_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'IN_ID' => 1,
            'NI_ESTADO' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
