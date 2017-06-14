<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
<div id="page-wrap">
    <div class="login-form">
        <div class="form-group log-status">
            <h1>Calificar voluntario</h1>

                <fieldset>
                <div class="form-group ">
                    <?php
                        echo $this->Form->input('Mission',['options'=> $query,'empty' => 'Voluntarios misión','style'=>'width:270px',"label" => false,]);
                    ?>
                </div>
                    <div class="form-group ">
                      <?php
                          echo $this->Form->input('Notas',['options' => [1,2,3,4,5],'empty' => 'Nota','style'=>'width:270px',"label" => false,]);
                      ?>
                    </div>

                    </fieldset>
                    <div class="form-group ">
                        <?php
                            echo $this->Form->submit(__('Calificar'));
                        ?>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
