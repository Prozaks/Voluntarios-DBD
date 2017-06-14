<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario-test.css" />
</head>
<body>
    <div id="page-wrap">

    </div>
    <div>
        <link rel="stylesheet" href="css/formulario2.css">
<div class="login-form2">
     <h1>Búsqueda de Voluntarios para misión</h1>

    <h2>Filtrar voluntarios por:</h2>
    <form role="form">
        <div class="row">
            <div class="col-md-4">
                <fieldset>

                <?php // Multiple checkbox form
        echo $this->Form->input('report_types', array(
        'type'=>'select',
        'label'=>'',
        'multiple'=>'checkbox',
        'options'=>array(
            'option 1'=>'Licencia de conducir B',
            'option 2'=>'Licencia de conducir A3',
            'option 3'=>'Licencia de conducir A5',
            'option 4'=>'Primeros Auxilios',
            'option 5'=>'Psicología',
        ),
        )); ?>


                </fieldset>
            </div>
            <div class="col-md-4">
                <fieldset>

                                    <?php // Multiple checkbox form
        echo $this->Form->input('report_types', array(
        'type'=>'select',
        'label'=>'',
        'multiple'=>'checkbox',
        'options'=>array(
            'option 11'=>'Fuerza bruta',
            'option 22'=>'Soldar',
            'option 33'=>'Habilidades blandas',
            'option 44'=>'Conocimientos de rescate',
            'option 55'=>'Carpintería',
        ),
        )); ?>


                </fieldset>
            </div>
            <div class="col-md-4">
                <fieldset>
        <?php // Multiple checkbox form
        echo $this->Form->input('report_types', array(
        'type'=>'select',
        'label'=>'',
        'multiple'=>'checkbox',
        'options'=>array(
            'option 111'=>'Gasfitería',
            'option 222'=>'Electricista',
            'option 333'=>'Albañilería',
            'option 444'=>'Mecánica',
            'option 555'=>'Veterinaria',
        ),
        )); ?>



                </fieldset>

            </div>

             <script type="text/javascript">// < ![CDATA[

            function Buscar() {
                var tabla = document.getElementById('tblPersonas');
                var busqueda = document.getElementById('txtBusqueda').value.toLowerCase();
                var cellsOfRow="";
                var found=false;
                var compareWith="";
                 for (var i = 1; i < tabla.rows.length; i++) {
                cellsOfRow = tabla.rows[i].getElementsByTagName('td');
                found = false;
                for (var j = 0; j < cellsOfRow.length &#038;& !found; j++)
                {
                    compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                    if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1))
                    {
                        found = true;
                    }
                }
                if(found)
                {
                    tabla.rows[i].style.display = '';
                } else {
                    tabla.rows[i].style.display = 'none';
                }
            }
        }
// ]]></script>


        <table id= "dataTable" cellpadding="0" cellspacing="0" class = "hovertable">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NOMBRE 1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NOMBRE 2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('APELLIDO 1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('APELLIDO 2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TELEFONO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EMAIL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DISPONIBILIDAD') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PUNTUACION') ?></th>
                <th scope="col" class="actions"><?= __('SOLICITUD') ?></th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($voluntario as $voluntario): ?>
            <tr>
                <td><?= $this->Number->format($voluntario->VOL_ID) ?></td>
                <td><?= h($voluntario->VOL_NOMBRE1) ?></td>
                <td><?= h($voluntario->VOL_NOMBRE2) ?></td>
                <td><?= h($voluntario->VOL_APELLIDO1) ?></td>
                <td><?= h($voluntario->VOL_APELLIDO2) ?></td>
                <td><?= h($voluntario->VOL_TELEFONO) ?></td>
                <td><?= h($voluntario->VOL_EMAIL) ?></td>
                <td><?= $this->Number->format($voluntario->VOL_DISPONIBILIDAD) ?></td>
                <td><?= $this->Number->format($voluntario->VOL_RANK) ?></td>
                <td class="actions">
                    <?= $this->Form->postLink(__('Enviar'), ['action' => 'enviar', $voluntario->VOL_ID], ['confirm' => __('¿Esta seguro de querer enviar la solicitud?.', $voluntario->VOL_ID)]) ?>
                </td>

            </tr>

            <?php endforeach; ?>
            </tbody>
        </table>


            <div class="paginator">
            <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
    </div>

    </div>

            <div class="form-group ">
              <li class="page-scroll">
                  <a href="Perfilencargado">Volver al perfil</a>
              </li>
            </div>





</div>
    </div>
</body>
</html>
