<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
<div id="page-wrap">
    <div class="login-form">
        <div class="form-group log-status">
            <h1>Definir misión</h1>
            <p>Completa el siguiente formulario para crear una misión.</p>
            <?= $this->Form->create($volunteer) ?>
                <fieldset>

                
                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Nombre', array('style'=>'width:270px',"label" => false,'placeholder'=>'Nombre'));
                        ?>
                    </div>

                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Descripcion', array('style'=>'width:270px',"label" => false,'placeholder'=>'Descripción '));
                        ?>
                    </div>

                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Encargado',['options' => $encargado,'empty' => 'Elegir encargado','style'=>'width:270px',"label" => false,]);
                        ?>
                    </div>

                </fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Crear'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
