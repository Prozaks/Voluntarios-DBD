<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List In Charge'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="inCharge form large-9 medium-8 columns content">
    <?= $this->Form->create($inCharge) ?>
    <fieldset>
        <legend><?= __('Add In Charge') ?></legend>
        <?php
            echo $this->Form->input('ADD_ID');
            echo $this->Form->input('IN_NOMBRE1');
            echo $this->Form->input('IN_NOMBRE2');
            echo $this->Form->input('IN_APELLIDO2');
            echo $this->Form->input('IN_TELEFONO');
            echo $this->Form->input('IN_EMAIL');
            echo $this->Form->input('IN_UBICACION');
            echo $this->Form->input('IN_DISPONIBILIDAD');
            echo $this->Form->input('IN_IDUSER');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
