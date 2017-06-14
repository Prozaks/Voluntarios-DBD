<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProvinceFixture
 *
 */
class ProvinceFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'province';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'PRO_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'REG_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'PRO_NOMBRE' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_PERTENECE_13' => ['type' => 'index', 'columns' => ['REG_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['PRO_ID'], 'length' => []],
            'FK_PERTENECE_13' => ['type' => 'foreign', 'columns' => ['REG_ID'], 'references' => ['region', 'REG_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'PRO_ID' => 1,
            'REG_ID' => 1,
            'PRO_NOMBRE' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
