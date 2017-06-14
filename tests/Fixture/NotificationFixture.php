<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotificationFixture
 *
 */
class NotificationFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'notification';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'NOT_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'NOT_MENSAJE' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NOT_TIPO' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NOT_ESTADO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['NOT_ID'], 'length' => []],
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
            'NOT_MENSAJE' => 'Lorem ipsum dolor sit amet',
            'NOT_TIPO' => 'Lorem ipsum dolor sit amet',
            'NOT_ESTADO' => 1
        ],
    ];
}
