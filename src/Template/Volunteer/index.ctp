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
            <?= $this->Form->create($volunteer) ?>
                <fieldset>
                <div class="form-group ">
                    <?php
                        echo $this->Form->input('Region',['options' => $regiones,'empty' => 'Región en la que vives','style'=>'width:270px',"label" => false,]);
                    ?>
                </div>
                <div class="form-group ">
                    <?php
                        echo $this->Form->input('Provincia', ['options' => $provincias,'empty' => 'Provincia en la que vives','placeholder'=>'Provincia donde vives','style'=>'width:270px',"label" => false,]);
                    ?>
                </div>
                <div class="form-group ">
                    <?php
                        echo $this->Form->input('Comuna', ['options' => $comunas, 'empty' => 'Comuna en la que vives','placeholder'=>'Comuna donde vives','style'=>'width:270px',"label" => false,]);
                    ?>
                    </div>
                    <div class="form-group ">
                            <?php
                                echo $this->Form->input('Calle', array('style'=>'width:270px',"label" => false,'placeholder'=>'Calle'));
                            ?>
                    </div>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Numero', array('style'=>'width:270px',"label" => false,'placeholder'=>'Numero'));
                        ?>
                    </div>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Nombre1', array('style'=>'width:270px',"label" => false,'placeholder'=>'Primer Nombre'));
                        ?>
                    </div>

                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Nombre2', array('style'=>'width:270px',"label" => false,'placeholder'=>'Segundo Nombre'));
                        ?>
                    </div>

                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Apellido1', array('style'=>'width:270px',"label" => false,'placeholder'=>'Apellido Paterno'));
                        ?>
                    </div>

                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Apellido2', array('style'=>'width:270px',"label" => false,'placeholder'=>'Apellido Materno'));
                        ?>
                    </div>

                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Teléfono', array('style'=>'width:270px',"label" => false,'placeholder'=>'Teléfono'));
                        ?>
                    </div>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Email', array('style'=>'width:270px',"label" => false,'placeholder'=>'Email'));
                        ?>
                    </div>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->input('Contraseña', array('style'=>'width:270px',"label" => false,'placeholder'=>'Contraseña'));
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
