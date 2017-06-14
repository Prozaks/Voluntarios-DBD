<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MissionFixture
 *
 */
class MissionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mission';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'MIS_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'IN_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'EMER_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'MIS_NOMBRE' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'MIS_DESCRIPCION' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'MIS_ESTADO' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_TIENE_1' => ['type' => 'index', 'columns' => ['IN_ID'], 'length' => []],
            'FK_TIENE_2' => ['type' => 'index', 'columns' => ['EMER_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['MIS_ID'], 'length' => []],
            'FK_TIENE_1' => ['type' => 'foreign', 'columns' => ['IN_ID'], 'references' => ['in_charge', 'IN_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_TIENE_2' => ['type' => 'foreign', 'columns' => ['EMER_ID'], 'references' => ['emergency', 'EMER_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'MIS_ID' => 1,
            'IN_ID' => 1,
            'EMER_ID' => 1,
            'MIS_NOMBRE' => 'Lorem ipsum dolor sit amet',
            'MIS_DESCRIPCION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'MIS_ESTADO' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
