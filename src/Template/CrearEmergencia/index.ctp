<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
<div id="page-wrap">
    <div class="login-form">
        <div class="form-group log-status">
            <h1>Crear emergencia</h1>
            <p>¡Llena los siguientes datos!</p>
            <?= $this->Form->create($volunteer) ?>
                <fieldset>
                <div class="form-group ">
                    <?php
                        echo $this->Form->input('Region',['options' => $regiones,'empty' => 'Región de la emergencia','style'=>'width:270px',"label" => false,]);
                    ?>
                </div>
                
                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Nombre', array('style'=>'width:270px',"label" => false,'placeholder'=>'Nombre Emergencia'));
                        ?>
                    </div>

                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Descripcion', array('style'=>'width:270px',"label" => false,'placeholder'=>'Descripción Emergencia'));
                        ?>
                    </div>

                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Fecha', array('style'=>'width:270px',"label" => false,'placeholder'=>'Fecha emergencia'));
                        ?>
                    </div>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Gravedad', array('style'=>'width:270px',"label" => false,'placeholder'=>'Gravedad emergencia'));
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
