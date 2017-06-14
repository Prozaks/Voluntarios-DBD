<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
<div id="page-wrap">              
    <div class="login-form">
        <div class="form-group log-status">
                <?= $this->Form->create($temp) ?>

            <h1>Información de la emergencia</h1>
                <fieldset>
                    <div class="form-group ">
                        <th scope="row"><?= __('Nombre de la Emergencia:') ?></th>
                        <td><?= h($emergency->EMER_NOMBRE) ?></td>
                    </div>
                    <div class="form-group ">
                        <th scope="row"><?= __('Estado de la Emergencia:') ?></th>
                        <td><?= h($emergency->EMER_ESTADO) ?></td>
                    </div>
                    <div class="form-group ">
                        <th scope="row"><?= __('Gravedad de la Emergencia:') ?></th>
                        <td><?= h($emergency->EMER_GRAVEDAD) ?></td>
                    </div>
                    <div class="form-group ">
                        <th scope="row"><?= __('Fecha de la Emergencia:') ?></th>
                        <td><?= h($emergency->EMER_FECHA) ?></td>

                    </div>

                    <div class="form-group ">
                        <th scope="row"><?= __('Detalles de la emergencia:') ?></th>
                        <td><?= $this->Text->autoParagraph(h($emergency->EMER_DESCRIPCION)); ?></td>

                    </div>
                    
                    <div class="form-group ">
                        <th scope="row"><?= __('Su misión actual es:') ?></th>
                        <td><?= h($temp->MIS_NOMBRE) ?></td>
                    </div>

                    <div class="form-group ">
                        <h2 scope="row"><?= __('Seleccione el estado de su misión:') ?></h2>
                            <?php
                            echo $this->Form->input('Estado', ['options' => ['Terminada','En curso'],'empty' => 'Estado de la emergencia','style'=>'width:270px',"label" => false,]);
                            ?>
                    </div>

                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Cambiar estado'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
