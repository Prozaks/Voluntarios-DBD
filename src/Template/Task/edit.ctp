<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $task->TASK_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $task->TASK_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Task'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Skill'), ['controller' => 'Skill', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skill', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Volunteer'), ['controller' => 'Volunteer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Volunteer'), ['controller' => 'Volunteer', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="task form large-9 medium-8 columns content">
    <?= $this->Form->create($task) ?>
    <fieldset>
        <legend><?= __('Edit Task') ?></legend>
        <?php
            echo $this->Form->input('MIS_ID');
            echo $this->Form->input('TASK_NOMBRE');
            echo $this->Form->input('TASK_CANTIDAD');
            echo $this->Form->input('TASK_ESTADO');
            echo $this->Form->input('TASK_DESCRIPCION');
            echo $this->Form->input('skill._ids', ['options' => $skill]);
            echo $this->Form->input('volunteer._ids', ['options' => $volunteer]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
