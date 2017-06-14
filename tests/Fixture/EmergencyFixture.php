<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmergencyFixture
 *
 */
class EmergencyFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'emergency';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'EMER_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'AREA_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ADM_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'EMER_NOMBRE' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'EMER_FECHA' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'EMER_ESTADO' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'EMER_DESCRIPCION' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'EMER_GRAVEDAD' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'EMER_RANGO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_TIENE_4' => ['type' => 'index', 'columns' => ['AREA_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['EMER_ID'], 'length' => []],
            'FK_TIENE_10' => ['type' => 'foreign', 'columns' => ['EMER_ID'], 'references' => ['administrator', 'ADM_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_TIENE_4' => ['type' => 'foreign', 'columns' => ['AREA_ID'], 'references' => ['area', 'AREA_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'EMER_ID' => 1,
            'AREA_ID' => 1,
            'ADM_ID' => 1,
            'EMER_NOMBRE' => 'Lorem ipsum dolor sit amet',
            'EMER_FECHA' => '2016-12-13',
            'EMER_ESTADO' => 'Lorem ipsum dolor ',
            'EMER_DESCRIPCION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'EMER_GRAVEDAD' => 'Lorem ipsum dolor ',
            'EMER_RANGO' => 1
        ],
    ];
}
