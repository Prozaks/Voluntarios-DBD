<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InChargeFixture
 *
 */
class InChargeFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'in_charge';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'IN_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ADD_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'IN_NOMBRE1' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IN_NOMBRE2' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IN_APELLIDO2' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IN_TELEFONO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'IN_EMAIL' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IN_UBICACION' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IN_DISPONIBILIDAD' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'IN_IDUSER' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_TIENE_45' => ['type' => 'index', 'columns' => ['ADD_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['IN_ID'], 'length' => []],
            'FK_TIENE_45' => ['type' => 'foreign', 'columns' => ['ADD_ID'], 'references' => ['address', 'ADD_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'IN_ID' => 1,
            'ADD_ID' => 1,
            'IN_NOMBRE1' => 'Lorem ipsum dolor sit a',
            'IN_NOMBRE2' => 'Lorem ipsum dolor sit a',
            'IN_APELLIDO2' => 'Lorem ipsum dolor sit a',
            'IN_TELEFONO' => 1,
            'IN_EMAIL' => 'Lorem ipsum dolor sit amet',
            'IN_UBICACION' => 'Lorem ipsum dolor sit amet',
            'IN_DISPONIBILIDAD' => 1,
            'IN_IDUSER' => 1
        ],
    ];
}
