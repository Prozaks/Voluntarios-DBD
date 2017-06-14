<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
<div id="page-wrap">
    <div class="login-form">
        <div class="form-group log-status">
            <h1>Solicitud para ayudar en la emergencia</h1>
            <p>Debes responder sí o no</p>
            <?= $this->Form->create($volunteer) ?>
                <fieldset>
                <div class="form-group ">
                            <?php
                                echo $this->Form->input('Aceptar', ['options' => ['Si','No'],'empty' => '¿Quieres ayudar en esta emergencia?','style'=>'width:300px',"label" => false,]);
                            ?>
                </div>

                    </fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Listo'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
