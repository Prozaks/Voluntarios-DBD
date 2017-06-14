<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
<div id="page-wrap">
    <div class="login-form">
        <div class="form-group log-status">
            <h1>Notificaciones</h1>
            <p>Seleccione el tipo de notifiación y envíe su mensaje.</p>
            <?= $this->Form->create($volunteer) ?>
                <fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Tipo',['options' => ['Término','Conflicto'],'empty' => 'Tipo','style'=>'width:270px',"label" => false,]);
                        ?>
                    </div>
                
                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Mensaje', array('style'=>'width:670px',"label" => false,'placeholder'=>'Mensaje'));
                        ?>
                    </div>


                </fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Enviar'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
