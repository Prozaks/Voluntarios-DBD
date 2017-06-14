<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CommuneFixture
 *
 */
class CommuneFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'commune';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'COM_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'PRO_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'COM_NOMBRE' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_PERTENECE_12' => ['type' => 'index', 'columns' => ['PRO_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['COM_ID'], 'length' => []],
            'FK_PERTENECE_12' => ['type' => 'foreign', 'columns' => ['PRO_ID'], 'references' => ['province', 'PRO_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'COM_ID' => 1,
            'PRO_ID' => 1,
            'COM_NOMBRE' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
