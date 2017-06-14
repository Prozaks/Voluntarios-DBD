<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
<div id="page-wrap">
    <div class="login-form">
        <div class="form-group log-status">
            <h1>Asignar tarea voluntario</h1>
            <p>¡Llena los siguientes datos!</p>
            <?= $this->Form->create($volunteer) ?>

                <fieldset>
                <div class="form-group ">
                    <?php
                        echo $this->Form->input('Voluntarios',['options' => $voluntarios,'empty' => 'Voluntarios','style'=>'width:270px',"label" => false,]);
                    ?>

                    <?php
                        echo $this->Form->input('Tareas',['options' => $tareas,'empty' => 'Tareas','style'=>'width:270px',"label" => false,]);
                    ?>
                </div>

                    </fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Relacionar'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
