</html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
<div id="page-wrap">              
    <div class="login-form">
            <h1>Bienvenido</h1>
            <?= $this->Form->create($volunteer) ?>
                <fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Continuar'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>      
    </div>
</body>
</html>
