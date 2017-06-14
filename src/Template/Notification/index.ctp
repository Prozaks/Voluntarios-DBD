<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
    <div id="page-wrap">
        <div class="login-form">
            <div class="form-group log-status">
                <h1>Enviar solicitudes</h1>
                <p>Llena los campos</p>   
                <?= $this->Form->create() ?>

                    <fieldset>
                        <div class="form-group ">
                            <?php
                                echo $this->Form->input('TipoNot', ['options' => ['Consultar a voluntario','Requerir voluntarios extras','Requerir materiales extras'],'empty' => 'Tipo de notificación','style'=>'width:270px',"label" => false,]);
                            ?>
                        </div>

                        <div class="form-group ">
                            <?php
                                echo $this->Form->input('Emergencias', ['options' => $emergencias,'empty' => 'Seleccionar Emergencia','style'=>'width:270px',"label" => false,]);
                            ?>
                        </div>
                        <div class="form-group ">
                            <?php
                                echo $this->Form->input('Destinatario', ['options' => $voluntarios,'empty' => 'Seleccionar Voluntario','style'=>'width:270px',"label" => false,]);
                            ?>
                        </div>
                        <div class="form-group ">
                            <?php
                                echo $this->Form->input('Mensaje1', array('style'=>'width:270px',"label" => false,'placeholder'=>'Ingrese mensaje'));
                            ?>
                        </div>

                        <div class="form-group ">
                            <?php
                                echo $this->Form->input('Mensaje2', array('style'=>'width:270px',"label" => false,'placeholder'=>'Ingrese mensaje'));
                            ?>
                        </div>

                        <div class="form-group ">
                            <?php
                                echo $this->Form->input('Mensaje3', array('style'=>'width:270px',"label" => false,'placeholder'=>'Ingrese mensaje'));
                            ?>
                        </div>

                    </fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Enviar Mensaje'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
