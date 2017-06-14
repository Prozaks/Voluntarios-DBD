<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Area'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Volunteer'), ['controller' => 'Volunteer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Volunteer'), ['controller' => 'Volunteer', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="area form large-9 medium-8 columns content">
    <?= $this->Form->create($area) ?>
    <fieldset>
        <legend><?= __('Add Area') ?></legend>
        <?php
            echo $this->Form->input('AREA_NOMBRE');
            echo $this->Form->input('AREA_NUMERO');
            echo $this->Form->input('volunteer._ids', ['options' => $volunteer]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
