<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/formulario.css" />
</head>
<body>
    <div id="page-wrap">
        <div class="login-form">
            <div class="form-group log-status">
                
                <h1>Editar ubicación actual y disponibilidad</h1>
                <p>Llena los siguientes datos!</p>   
                <?= $this->Form->create($volunteer) ?>
                    <fieldset>
                        <div class="form-group ">
                            <?php
                                echo $this->Form->input('Area',['options' => $area,'empty' => 'Area en la que te ubicas actualmente','style'=>'width:270px',"label" => false,]);
                            ?>
                        </div>
                        <div class="form-group ">
                            <?php
                                echo $this->Form->input('Disponibilidad', ['options' => ['Si','No'],'empty' => '¿Estás disponible como voluntario?','style'=>'width:270px',"label" => false,]);
                            ?>
                        </div>


                    </fieldset>           
        <link rel="stylesheet" href="css/formulario2.css">
             <h1>Habilidades</h1>
             <h2>Selecciona las habilidades que posees</h2>
                <fieldset>
                    <?php echo $this->Form->input('1', array(
                          'type'=>'checkbox', 
                          'label' => 'Licencia de conducir A3',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                    ) ); ?>

                    <?php echo $this->Form->input('2', array(
                      'type'=>'checkbox', 
                      'label' => 'Licencia de conducir B',
                      'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                     ) ); ?>

                     <?php echo $this->Form->input('3', array(
                      'type'=>'checkbox', 
                      'label' => 'Licencia de conducir A5',
                      'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                     ) ); ?> 

                    <?php echo $this->Form->input('4', array(
                          'type'=>'checkbox', 
                          'label' => 'Primeros Auxilios',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                    ) ); ?>

                    <?php echo $this->Form->input('5', array(
                          'type'=>'checkbox', 
                          'label' => 'Psicología',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                         ) ); ?>


                </fieldset>
                <fieldset>             
                    <?php echo $this->Form->input('6', array(
                          'type'=>'checkbox', 
                          'label' => 'Fuerza bruta',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                         ) ); ?>

                    <?php echo $this->Form->input('7', array(
                          'type'=>'checkbox', 
                          'label' => 'Soldar',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                         ) ); ?>

                    <?php echo $this->Form->input('8', array(
                          'type'=>'checkbox', 
                          'label' => 'Habilidades blandas',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                         ) ); ?>
                    <?php echo $this->Form->input('9', array(
                          'type'=>'checkbox', 
                          'label' => 'Conocimientos de rescate',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                         ) ); ?>
                    <?php echo $this->Form->input('10', array(
                          'type'=>'checkbox', 
                          'label' => 'Carpintería',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                         ) ); ?>

                </fieldset>
            </div>
                <fieldset>           
                    <?php echo $this->Form->input('11', array(
                          'type'=>'checkbox', 
                          'label' => 'Gasfitería',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                         ) ); ?>
                    <?php echo $this->Form->input('12', array(
                          'type'=>'checkbox', 
                          'label' => 'Electricista',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                         ) ); ?>
                    <?php echo $this->Form->input('13', array(
                          'type'=>'checkbox', 
                          'label' => 'Albañilería',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                         ) ); ?>   
                    <?php echo $this->Form->input('14', array(
                          'type'=>'checkbox', 
                          'label' => 'Mecánica',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                         ) ); ?>
                    <?php echo $this->Form->input('15', array(
                          'type'=>'checkbox', 
                          'label' => 'Veterinaria',
                          'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
                         ) ); ?>
                </fieldset>
                        <div class="form-group ">
            <?php
                echo $this->Form->submit(__('Aplicar'));
            ?>
            </div>
            </div>
        </div>
            </div>


                    

    
</div>
    </div>>
</body>
</html>