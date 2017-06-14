<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Volunteer'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Area'), ['controller' => 'Area', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Area', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emergency'), ['controller' => 'Emergency', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emergency'), ['controller' => 'Emergency', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skill'), ['controller' => 'Skill', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skill', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Task'), ['controller' => 'Task', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Task', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="volunteer form large-9 medium-8 columns content">
    <?= $this->Form->create($volunteer) ?>
    <fieldset>
        <legend><?= __('Add Volunteer') ?></legend>
        <?php
            echo $this->Form->input('ADD_ID');
            echo $this->Form->input('VOL_NOMBRE1');
            echo $this->Form->input('VOL_NOMBRE2');
            echo $this->Form->input('VOL_APELLIDO1');
            echo $this->Form->input('VOL_APELLIDO2');
            echo $this->Form->input('VOL_TELEFONO');
            echo $this->Form->input('VOL_EMAIL');
            echo $this->Form->input('VOL_DISPONIBILIDAD');
            echo $this->Form->input('VOL_RANK');
            echo $this->Form->input('VOL_IDUSER');
            echo $this->Form->input('area._ids', ['options' => $area]);
            echo $this->Form->input('emergency._ids', ['options' => $emergency]);
            echo $this->Form->input('skill._ids', ['options' => $skill]);
            echo $this->Form->input('task._ids', ['options' => $task]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
