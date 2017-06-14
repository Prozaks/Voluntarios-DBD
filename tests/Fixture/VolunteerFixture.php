<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VolunteerFixture
 *
 */
class VolunteerFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'volunteer';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'VOL_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ADD_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'VOL_NOMBRE1' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'VOL_NOMBRE2' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'VOL_APELLIDO1' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'VOL_APELLIDO2' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'VOL_TELEFONO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'VOL_EMAIL' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'VOL_DISPONIBILIDAD' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'VOL_RANK' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'VOL_IDUSER' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_TIENE_43' => ['type' => 'index', 'columns' => ['ADD_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['VOL_ID'], 'length' => []],
            'FK_TIENE_43' => ['type' => 'foreign', 'columns' => ['ADD_ID'], 'references' => ['address', 'ADD_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'ADD_ID' => 1,
            'VOL_NOMBRE1' => 'Lorem ipsum dolor sit a',
            'VOL_NOMBRE2' => 'Lorem ipsum dolor sit a',
            'VOL_APELLIDO1' => 'Lorem ipsum dolor sit a',
            'VOL_APELLIDO2' => 'Lorem ipsum dolor sit a',
            'VOL_TELEFONO' => 1,
            'VOL_EMAIL' => 'Lorem ipsum dolor sit amet',
            'VOL_DISPONIBILIDAD' => 1,
            'VOL_RANK' => 1,
            'VOL_IDUSER' => 1
        ],
    ];
}
