<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
<div id="page-wrap">              
    <div class="login-form">
        <div class="form-group log-status">
            <h1>¿Quieres ser voluntario?</h1>
            <p>¡Llena los siguientes datos!</p>   
                <fieldset>
                <div class="form-group ">
                    <?php
                        echo $this->Form->input('Emergencias',['options' => $emergency,'empty' => 'Emergencias','style'=>'width:270px',"label" => false,]);
                    ?>
                </div>

                    </fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Registrarme'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
