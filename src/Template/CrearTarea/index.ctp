<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
<div id="page-wrap">
    <div class="login-form">
        <div class="form-group log-status">
            <h1>Definir Tarea</h1>
            <p>Completa el siguiente formulario para crear una tarea.</p>
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

                </fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Crear'));
                        ?>
                        <li class="page-scroll">
                            <a href="Perfilencargado">Volver inicio</a>
                        </li>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
