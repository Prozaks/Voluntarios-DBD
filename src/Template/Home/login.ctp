<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
    <div id="page-wrap">
        <div class="login-form">
            <div class="form-group log-status">
                <h1>¿Ya tienes una cuenta?</h1>
                <p>¡inicia sesión!</p>   
                <?= $this->Form->create() ?>
                    <fieldset>
                        <div class="form-group ">
                            <?php
                                echo $this->Form->input('username', array('style'=>'width:270px',"label" => false,'placeholder'=>'Usuario'));
                            ?>
                        </div>
                        <div class="form-group ">
                            <?php
                                echo $this->Form->input('password', array('style'=>'width:270px',"label" => false,'placeholder'=>'Password'));
                            ?>
                        </div>
                    </fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Iniciar Sesión'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
