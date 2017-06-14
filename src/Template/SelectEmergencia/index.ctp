<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
<div id="page-wrap">
    <div class="login-form">
        <div class="form-group log-status">
            <h1>Selecciona una misión</h1>
            <?= $this->Form->create($skill) ?>
                <fieldset>
                <div class="form-group ">
                    <?php
                        echo $this->Form->input('Emergencias',['options' => $emergency,'empty' => 'Emergencias','style'=>'width:270px',"label" => false,]);
                    ?>
                </div>

                    </fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Ver misión'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
