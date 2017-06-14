<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotAdmFixture
 *
 */
class NotAdmFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'not_adm';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ADM_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NOT_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NA_ESTADO' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_RELA3' => ['type' => 'index', 'columns' => ['NOT_ID'], 'length' => []],
            'FK_RELA4' => ['type' => 'index', 'columns' => ['ADM_ID'], 'length' => []],
        ],
        '_constraints' => [
            'FK_RELA3' => ['type' => 'foreign', 'columns' => ['NOT_ID'], 'references' => ['notification', 'NOT_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_RELA4' => ['type' => 'foreign', 'columns' => ['ADM_ID'], 'references' => ['administrator', 'ADM_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ADM_ID' => 1,
            'NOT_ID' => 1,
            'NA_ESTADO' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
