<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Emergency'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Volunteer'), ['controller' => 'Volunteer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Volunteer'), ['controller' => 'Volunteer', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emergency form large-9 medium-8 columns content">
    <?= $this->Form->create($emergency) ?>
    <fieldset>
        <legend><?= __('Add Emergency') ?></legend>
        <?php
            echo $this->Form->input('AREA_ID');
            echo $this->Form->input('ADM_ID');
            echo $this->Form->input('EMER_NOMBRE');
            echo $this->Form->input('EMER_FECHA', ['empty' => true]);
            echo $this->Form->input('EMER_ESTADO');
            echo $this->Form->input('EMER_DESCRIPCION');
            echo $this->Form->input('EMER_GRAVEDAD');
            echo $this->Form->input('EMER_RANGO');
            echo $this->Form->input('volunteer._ids', ['options' => $volunteer]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
